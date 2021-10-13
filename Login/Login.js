//Take all the class = input as an array
const inputs = document.getElementsByClassName('input');

const form = document.getElementById('login');
const errorElement = document.getElementById('error')

let validity=true;

form.addEventListener('submit', (e) => {
    validity=true;

  //check whether all inputs are empty
  for (let i = 0; i < inputs.length; i++) {
    if (inputs[i].value == "") {
        inputs[i].style.border = "4px solid rgb(228, 29, 22)";
        inputs[i].style.backgroundColor = "rgb(0, 0, 0)";
        inputs[i].placeholder = "This Field is Compulsory! ";
        validity = false;
    }
  }


  //validate email address
  let emailType = /^([a-z\d\.-]+)@([a-z\d-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/;
  if (inputs[0].value!="" && inputs[0].value.match(emailType)==null) {
    inputs[0].value="";
    inputs[0].style.border = "3px solid rgb(228, 29, 22)";
    inputs[0].placeholder="Email is not valid";
    validity=false;
  }


  if (validity==false) {
    e.preventDefault()
  }

  return validity;
})