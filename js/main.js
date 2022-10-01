const navButton = document.querySelector(".btn-mobile-nav");
const navBar = document.querySelector(".nav-bar");
const navLinks = document.querySelectorAll(".nav-link");

navButton.addEventListener("click", function handleClick() {
  navBar.classList.toggle("nav-open");
});

navLinks.forEach(function (link) {
  link.addEventListener("click", function handleNavLink() {
    if (navBar.classList.contains("nav-open")) {
      navBar.classList.toggle("nav-open");
    }
  });
});
