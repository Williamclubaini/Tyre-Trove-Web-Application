// When you scroll navigation
window.addEventListener("scroll", function () {

    const navbar = document.querySelector(".navbar");
    const register = document.querySelector(".register-btn");
    const img = document.querySelector(".logo");

    register.classList.toggle("btn-yellow", window.scrollY > 0);
    navbar.classList.toggle("nav-scroll", window.scrollY > 0);

    // if(window.scrollY > 0){

    //     img.style.backgroundColor="#fff";
    //     img.style.padding = "10px";

    // } else {

    //   img.removeAttribute('style');

    // }

}); 

// Owl-carousel at Testimonials
$(".owl-carousel").owlCarousel({
  loop: true,
  margin: 10,
  dots: false,
  nav: false,
  autoplay: true,
  autoplayTimeout: 6000,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1,
    },
    600: {
      items: 2,
    },
    1000: {
      items: 3,
    },
  },
});

// tooltips
const tooltipTriggerList = [].slice.call(
  document.querySelectorAll('[data-bs-toggle="tooltip"]')
);
const tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl);
});

// disabling form submissions if there are invalid fields
(function () {
  "use strict";

  // Fetch all the fields to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll(".needs-validation");

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms).forEach(function (form) {
    form.addEventListener(
      "submit",
      function (event) {
        if (!form.checkValidity()) {
          event.preventDefault();
          event.stopPropagation();
        }

        form.classList.add("was-validated");
      },
      false
    );
  });
})();
