function login1() {
    document.querySelector(".login1-form-container").style.cssText = "display: none;";
    document.querySelector(".login2-form-container").style.cssText = "display: block;";
    document.querySelector(".container").style.cssText = "background: url(../img/admin.jpg); background-repeat:no-repeat;";
    document.querySelector(".button-1").style.cssText = "display: none";
    document.querySelector(".button-2").style.cssText = "display: block";

};

function login2() {
    document.querySelector(".login2-form-container").style.cssText = "display: none;";
    document.querySelector(".login1-form-container").style.cssText = "display: block;";
    document.querySelector(".container").style.cssText = "background: url(../img/w3.jpg); background-repeat:no-repeat;";
    document.querySelector(".button-2").style.cssText = "display: none";
    document.querySelector(".button-1").style.cssText = "display: block";

}