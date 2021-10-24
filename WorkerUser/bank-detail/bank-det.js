// JavaScript source code

const inputs = document.getElementsByClassName('detail');

const form = document.getElementById('bank-det');
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
    inputs[0].placeholder="Please enter your first name and last name";
    validity=false;
  }

  let bankType = /^[a-zA-Z]+ [a-zA-Z]+$/;
  if (inputs[1].value!="" && inputs[1].value.match(bankType)==null) {
    inputs[1].value="";
    inputs[1].placeholder="Please enter your correct bank name";
    validity=false;
  }

  let branchType = /^[a-zA-Z]+ [a-zA-Z]+$/;
  if (inputs[2].value!="" && inputs[2].value.match(branchType)==null) {
    inputs[2].value="";
    inputs[2].placeholder="Please enter your correct branch name";
    validity=false;
  }

  //check the account number
  let accountType = /^\d{10}$/;
  if (inputs[4].value!="" && inputs[4].value.match(accountType)==null) {
    inputs[4].value="";
    inputs[4].placeholder="Please enter a valid account number";
    validity=false;
  }

   //check the code number
  let codeType = /^\d{10}$/;
  if (inputs[3].value!="" && inputs[3].value.match(codeType)==null) {
    inputs[3].value="";
    inputs[3].placeholder="Please enter a valid code number";
    validity=false;
  }

  if (validity==false) {
    e.preventDefault()
  }

  return validity;
})