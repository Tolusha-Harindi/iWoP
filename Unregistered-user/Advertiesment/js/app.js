const toggler = document.querySelector(".button");

toggler.addEventListener("click", handleMenu);

function handleMenu() {
  const img = document.querySelector(".logo");
  const nav = document.querySelector("nav");
  const button = document.querySelector(".button");

  img.classList.toggle("active");
  nav.classList.toggle("active");
  button.classList.toggle("active");
}
