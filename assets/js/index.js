//Change header style on document scroll
let scrollpos = window.scrollY;
const header = document.getElementById("nav");
const header_height = header.offsetHeight;
const add_class_on_scroll = () => header.classList.add("scrolled");
const remove_class_on_scroll = () => header.classList.remove("scrolled");
window.addEventListener("scroll", function () {
  scrollpos = window.scrollY;
  if (scrollpos >= this.window.innerHeight - 3 * header_height) {
    add_class_on_scroll();
  } else {
    remove_class_on_scroll();
  }
  console.log(scrollpos);
});

//add active class on header elements
const currentLocation = location.href;
let navLink = document.getElementsByClassName("nav-link");
for (let i = 0; i < navLink.length; i++) {
  if (navLink[i].href === currentLocation) {
    navLink[i].className = "active";
  }
}
//For all inner pages the header is dark blue colored
const curPageName = currentLocation.split("/").pop().split(".")[0];
console.log(curPageName);
if (curPageName != "index") {
  header.classList.add("dark-nav");
}

console.log(currentLocation);

//Homepage top product owl carousel
$(document).ready(function () {
  "use strict";
  $("#top-product-carousel").owlCarousel({
    loop: true,
    center: true,
    items: 5,
    nav: true,
    margin: 0,
    autoplay: false,
    dots: false,
    drag: false,
    autoplayTimeout: 2500,
    smartSpeed: 450,
    lazyLoad: true,
    responsive: {
      0: {
        items: 1,
      },
      767: {
        items: 1,
      },
      768: {
        items: 3,
      },
      992: {
        items: 3,
      },
      1170: {
        items: 5,
      },
    },
  });
});

$(document).ready(function () {
  $(".product-list-carousel").owlCarousel({
    navigation: true,
    nav: true,
    dots: false,
    center: true,
    loop: true,
    margin: 30,
    autoplay: true,
    autoPlaySpeed: 1000,
    autoPlayTimeout: 500,
    autoplayHoverPause: false,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1,

      },
      767: {
        items: 1,

      },
      768: {
        items: 3,

      },
      992: {
        items: 3,

      },
      1170: {
        items: 3,

      },
    },
  });
});
