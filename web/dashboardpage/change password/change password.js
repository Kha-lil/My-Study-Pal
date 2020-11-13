let form = document.getElementById('myform'), 
    oldPassword = document.getElementById('oldpassword'), 
    newPassword = document.getElementById('newpassword'), 
    confirmNewPassword = document.getElementById('confirm-new-password'),
    errorMessage1 = document.getElementById('error-message1');
    errorMessage2 = document.getElementById('error-message2');


// length of password 
var passwordlength = function () {
   // debugger
   console.log(newPassword.value.length)
   if (newPassword.value.length < 8) {
      errorMessage1.style.color = 'red';
      errorMessage1.innerHTML = 'password too short';
      return false
   } else {
      errorMessage1.style.color = 'green';
      errorMessage1.innerHTML = 'strong password';
      return true
   }
}
//matching passoword
var check = function() {
   // passwordMatch = document.querySelectorAll('.password-match')
  if (newPassword.value == confirmNewPassword.value) {
    errorMessage2.style.color = 'green';
    errorMessage2.innerHTML = 'matching password';
   //  passwordMatch.classList.add('success')
   return true
  } else {
    errorMessage2.style.color = 'red';
    errorMessage2.innerHTML = 'password does not match';
    document.form.password.focus();
    return false
   // passwordMatch.classList.add('error')
  }
}

//form validation
form.addEventListener('submit', submitForm)

function submitForm(e) {
   // don't submit
      e.preventDefault(); 
      if(check() && passwordlength()) {
         oldpassword = oldPassword.value
      newpassword = newPassword.value
      confirmnewPassword = confirmNewPassword.value;
      console.log(oldpassword, newpassword, confirmnewPassword )
      }
}



 



