
//window.onscroll=function(){myFunction()};
//var navbar = document.getElementsbyId("navbar");
//var sticky= navbar.offsetTop;

//function myfunction() {
  //  if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
   // } else {
  //      navbar.classList.remove("sticky");
  //  }
//}

const nav = document.querySelector('#navbar');
const navTop = nav.offsetTop;

function stickyNavigation() {
  console.log('navTop = ' + navTop);
  console.log('scrollY = ' + window.scrollY);

  if (window.scrollY >= navTop) {
    // nav offsetHeight = height of nav
    document.body.style.paddingTop = nav.offsetHeight + 'px';
    document.body.classList.add('fixed-nav');
  } else {
    document.body.style.paddingTop = 0;
    document.body.classList.remove('fixed-nav');
  }
}

window.addEventListener('scroll', stickyNavigation);


