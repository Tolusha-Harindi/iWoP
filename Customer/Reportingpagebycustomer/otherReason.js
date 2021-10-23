function ShowHidetxt() {
    var chkOther = document.getElementById("other");
    var text = document.getElementById("othertext");
    text.style.display = chkOther.checked ? "block" : "none";
}