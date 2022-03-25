const slider = document.querySelector("input");
const value = document.querySelector(".value");

value.textContent = slider.value;
slider.oninput = function(){
    value.textContent = this.value;
}