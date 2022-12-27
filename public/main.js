// const nav_links = document.querySelectorAll(".nav__item-link");
// const item__navs = document.querySelectorAll(".item__nav-link");
const nav_links = document.querySelectorAll(".nav__item-link, .item__nav-link");
const sub_links = document.querySelectorAll(".sub_link");

function collapse_nav(head, foot, mainer, toggler, sidenav) {
  const header = document.getElementById(head);
  const footer = document.getElementById(foot);
  const main = document.getElementById(mainer);
  const nav_toggler = document.getElementById(toggler);
  const nav = document.getElementById(sidenav);

  nav_toggler.addEventListener("click", function () {
    this.classList.toggle("fa-times");
    nav.classList.toggle("collapse");
    header.classList.toggle("collapse-header");
    footer.classList.toggle("collapse-footer");
    main.classList.toggle("collapse-main");
  });
}

collapse_nav("header", "footer", "main", "nav-toggler", "nav");
// ================================== dropdown ==================================

nav_links.forEach((link) => {
  function dropdown() {
    nav_links.forEach((l) => {
      if (l.classList.contains("active")) {
        l.classList.remove("active");
      }
    });

    this.classList.toggle("active");
    const sub_menu = this.nextElementSibling;
    if (sub_menu) {
      sub_menu.classList.toggle("d-none");
    }
  }

  link.addEventListener("click", dropdown);
});
// ================================== fim dropdown ==================================

sub_links.forEach((link) => {
  link.addEventListener("click", () => {
    sub_links.forEach((l) => l.classList.remove("active-sub-link"));
    link.classList.toggle("active-sub-link");
  });
});

sub_links.forEach((link) => {
  link.addEventListener("click", () => {
    sub_links.forEach((l) => l.classList.remove("active-sub-link"));
    link.classList.toggle("active-sub-link");
  });
});
