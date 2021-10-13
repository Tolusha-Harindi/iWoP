//Take all the class = input as an array

const inputs = document.getElementsByClassName('input');

const form = document.getElementById('reg-w');
const errorElement = document.getElementById('error')

let validity=true;

form.addEventListener('submit', (e) => {
    validity=true;

  //check whether all inputs are empty
  for (let i = 0; i < inputs.length; i++) {
    if (inputs[i].value == "") {
        inputs[i].style.border = "4px solid rgb(228, 29, 22)";
        inputs[i].style.backgroundColor = "rgb(0, 0, 0)";
        inputs[i].placeholder = "This Field is Compulsory!" ;
        validity = false;
    }
  }

  //check whether both first and last name are entered
  let nameType = /^[a-zA-Z]+ [a-zA-Z]+$/;
  if (inputs[0].value!="" && inputs[0].value.match(nameType)==null) {
    inputs[0].value="";
    inputs[0].style.border = "3px solid rgb(228, 29, 22)";
    inputs[0].placeholder="Please enter both first and last names";
    validity=false;
  }

  //check the contact number
  let contactType = /^\d{10}$/;
  if (inputs[1].value!="" && inputs[1].value.match(contactType)==null) {
    inputs[1].value="";
    inputs[1].style.border = "3px solid rgb(228, 29, 22)";
    inputs[1].placeholder="Contact number is not valid";
    validity=false;  
  }

  //check the NIC number
  let NICType = /^[0-9]{9}[vVxX]$/;
  if (inputs[2].value!="" && inputs[2].value.match(NICType)==null) {
    inputs[2].value="";
    inputs[2].style.border = "3px solid rgb(228, 29, 22)";
    inputs[2].placeholder="NIC number is not valid";
    validity=false;  
  }

  //validate email address
  let emailType = /^([a-z\d\.-]+)@([a-z\d-]+)\.([a-z]{2,8})(\.[a-z]{2,8})?$/;
  if (inputs[3].value!="" && inputs[3].value.match(emailType)==null) {
    inputs[3].value="";
    inputs[3].style.border = "3px solid rgb(228, 29, 22)";
    inputs[3].placeholder="Email number is not valid";
    validity=false;
  }

  //check whether password has minimum eight characters, at least one uppercase letter, one lowercase letter, one number and one special character
  let passwordType= /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{8,})/;
  if (inputs[4].value!="" && inputs[4].value.match(passwordType)==null) {
    inputs[4].value="";
    inputs[4].style.border = "3px solid rgb(228, 29, 22)";
    inputs[4].placeholder="Please enter a valid password";
    validity=false;
  }

  //Check password
  if (inputs[4].value != inputs[5].value) {
    inputs[5].value="";
    inputs[5].style.border = "3px solid rgb(228, 29, 22)";
    inputs[5].placeholder="Passwords do not match";
    validity=false;
}

  if (validity==false) {
    e.preventDefault()
  }

  return validity;
})

