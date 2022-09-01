const navToggle = document.getElementById('navi-toggle');
const navigation = document.querySelector('.navigation__nav');

navToggle.addEventListener('click', () => {
  if (navigation.style.display === 'block') {
    navigation.style.display = 'none';
  } else {
    navigation.style.display = 'block';
  }
});

function closeNav() {
  navToggle.checked = false;
  navToggle.addEventListener('click', () => {
    if (navigation.style.display === 'block') {
      navigation.style.display = 'none';
    } else {
      navigation.style.display = 'block';
    }
  });
}

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

$('.load').slice(0, 2).show();
$('.btn--classic__load').on('click', () => {
  $('.load:hidden').slice(0, 2).slideDown();
  if ($('.load:hidden').length === 0) {
    $('.btn--classic__load').fadeOut('slow');
  }
});