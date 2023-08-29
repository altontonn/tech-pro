const navToggle = document.getElementById("navi-toggle");

const closeNav = () => {
  navToggle.checked = false;
};

const closeOne = document.querySelector(".closeOne");
closeOne.addEventListener("click", closeNav);
const closeTwo = document.querySelector(".closeTwo");
closeTwo.addEventListener("click", closeNav);
const closeThree = document.querySelector(".closeThree");
closeThree.addEventListener("click", closeNav);
const closeFour = document.querySelector(".closeFour");
closeFour.addEventListener("click", closeNav);
const closeFive = document.querySelector(".closeFive");
closeFive.addEventListener("click", closeNav);
const closeSix = document.querySelector(".closeSix");
closeSix.addEventListener("click", closeNav);

// Initially show the first two items
$(".load").slice(0, 2).show();
$(".btn--classic__load--less").hide();
$(".btn--classic__load").on("click", () => {
  const hiddenLoads = $(".load:hidden");

  // If there are hidden items, show two more on each click
  if (hiddenLoads.length > 0) {
    hiddenLoads.slice(0, 2).slideDown();

    // If all items are shown, hide the "See More" button
    if (hiddenLoads.length <= 2) {
      $(".btn--classic__load").fadeOut("slow");
      $(".btn--classic__load--less").show();
    }
  }
});
$(".btn--classic__load--less").on("click", (event) => {
  event.preventDefault()
  const visibleElements = $('.load:visible');
  const elementsToHide = visibleElements.slice(-2); // Hide the last two visible elements
  
  elementsToHide.slideUp();
  $('html, body').animate({ scrollTop: $('.load').offset().top }, 'slow');
  if (visibleElements.length <= 4) {
    $('.btn--classic__load').fadeIn('slow');
    $(".btn--classic__load--less").hide()
  }
});
