const navToggle = document.getElementById('navi-toggle');

const closeNav = () => {
  navToggle.checked = false;
};

const closeOne = document.querySelector('.closeOne');
closeOne.addEventListener('click', closeNav);
const closeTwo = document.querySelector('.closeTwo');
closeTwo.addEventListener('click', closeNav);
const closeThree = document.querySelector('.closeThree');
closeThree.addEventListener('click', closeNav);
const closeFour = document.querySelector('.closeFour');
closeFour.addEventListener('click', closeNav);
const closeFive = document.querySelector('.closeFive');
closeFive.addEventListener('click', closeNav);
const closeSix = document.querySelector('.closeSix');
closeSix.addEventListener('click', closeNav);

// Initially show the first two items
$('.load').slice(0, 2).show();
$('.btn--classic__load--less').hide();
$('.btn--classic__load').on('click', () => {
  const hiddenLoads = $('.load:hidden');

  // If there are hidden items, show two more on each click
  if (hiddenLoads.length > 0) {
    hiddenLoads.slice(0, 2).slideDown();

    // If all items are shown, hide the 'See More' button
    if (hiddenLoads.length <= 2) {
      $('.btn--classic__load').fadeOut('slow');
      $('.btn--classic__load--less').show();
    }
  }
});
$('.btn--classic__load--less').on('click', (event) => {
  event.preventDefault();
  const visibleElements = $('.load:visible');
  const elementsToHide = visibleElements.slice(-2); // Hide the last two visible elements

  elementsToHide.slideUp();
  $('html, body').animate({ scrollTop: $('.load').offset().top }, 'slow');
  if (visibleElements.length <= 4) {
    $('.btn--classic__load').fadeIn('slow');
    $('.btn--classic__load--less').hide();
  }
});

/** Form submission */

document.addEventListener('DOMContentLoaded', () => {
  const form = document.querySelector('.email-form');
  const sentMessage = document.querySelector('.sent-message');
  const errorMessage = document.querySelector('.error-message');
  const loadingMessage = document.querySelector('.loading');

  form.addEventListener('submit', async (e) => {
    e.preventDefault();
    loadingMessage.style.display = 'block';
    sentMessage.style.display = 'none';
    errorMessage.style.display = 'none';

    const formData = new FormData(form);
    try {
      const response = await fetch(form.action, {
        method: form.method,
        body: formData,
        headers: {
          Accept: 'application/json',
        },
      });
      if (response.ok) {
        form.reset();
        sentMessage.style.display = 'block';
        // Hide success message after 3 secs
        setTimeout(() => {
          sentMessage.style.display = 'none';
        }, 3000);
      } else {
        errorMessage.innerText = 'Something went wrong. Please try again.';
        errorMessage.style.display = 'block';
      }
    } catch (error) {
      errorMessage.innerText = 'An error occurred. Please check your internet connection.';
      errorMessage.style.display = 'block';
    } finally {
      loadingMessage.style.display = 'none'; // Hide loading text
    }
  });
});
