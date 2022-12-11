const navBtn = document.getElementById("nav-toogle");
const links = document.getElementById("ul");
// add event listener
navBtn.addEventListener("click", () => {
  links.classList.toggle("hidden");
});