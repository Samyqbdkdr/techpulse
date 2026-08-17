(function ($) {
  "use strict";

  // Scroll Animations
  const titan_event_management_observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add('animations-show-item');
        titan_event_management_observer.unobserve(entry.target);
      } else {
        entry.target.classList.remove('animations-show-item');
      }
    });
  });

  const titan_event_management_hiddenElements = document.querySelectorAll('.animations-hidden-item');
  titan_event_management_hiddenElements.forEach((el) =>
    titan_event_management_observer.observe(el)
  );
})(jQuery);

/*===============================================
Banner Section js
=============================================== */

jQuery('document').ready(function(){
  var owl = jQuery('.banner-inner .owl-carousel');
    owl.owlCarousel({
    margin:20,
    nav: true,
    autoplay : false,
    lazyLoad: true,
    autoplayTimeout: 3000,
    loop: true,
    dots:false,
    navText : ['<span class="dashicons dashicons-arrow-left-alt"></span>','<span class="dashicons dashicons-arrow-right-alt"></span> '],
    responsive: {
      0: {
        items: 1,
      },
      600: {
        items: 1,
      },
      781: {
        items: 1,
      },
      1000: {
        items: 1,
      },
      1200: {
        items: 1,
      }
    },
    autoplayHoverPause : true,
    mouseDrag: true
  });
});

document.addEventListener("DOMContentLoaded", function () {
    const headings = document.querySelectorAll("h2.banner-title");

    headings.forEach((heading) => {
        const words = heading.textContent.trim().split(" ");

        if (words.length >= 3) {
            words[2] = `<span class="highlight-word">${words[2]}</span>`;
            heading.innerHTML = words.join(" ");
        }
    });
});