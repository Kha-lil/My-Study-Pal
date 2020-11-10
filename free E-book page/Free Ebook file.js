let form = document.getElementById('myform'),
    inputText = document.getElementById('emailInput'),
    errorMessage = document.getElementById('error-message');
form.addEventListener('submit', ValidateEmail)

function ValidateEmail(e) {
   e.preventDefault()
   //Email validation 
   var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
      if(!inputText.value.match(mailformat)) {
        errorMessage.style.color = 'red';
         errorMessage.innerHTML = 'Please enter a vaild email. Email must contain @ and .';
         return true;
      }
}