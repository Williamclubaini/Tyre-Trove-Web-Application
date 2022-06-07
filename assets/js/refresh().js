// FIXME:loading effect when page refresh
const loader = document.querySelector(".loader");
const main = document.querySelector(".main");

function Refresh() {
  //  TODO: fresh pag
  setTimeout(() => {
    loader.style.opacity = 0;
    loader.style.display = "none";
    main.style.display = "block";
    setTimeout(() => (main.style.opacity = 1), 15);
  }, 2500);
}
Refresh();
