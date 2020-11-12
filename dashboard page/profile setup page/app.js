let form = document.getElementById("myform"),
  inputText = document.getElementById("emailInput"),
  errorMessage = document.getElementById("error-message"),
  errorMsg = document.querySelector(".txtProfileImgError"),
  //  uploadbtn = document.querySelector('#uploadbtn'),
  uploadbtn = document.querySelector("#txtProfileImg"),
  profileImg = document.querySelector("#profile-image");

form.addEventListener("submit", ValidateEmail);

function ValidateEmail(e) {
  e.preventDefault();
  //Email validation
  var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
  if (!inputText.value.match(mailformat)) {
    errorMessage.style.color = "red";
    errorMessage.innerHTML =
      "Please enter a vaild email. Email must contain @ and .";
    return true;
  }
}
getImage = (event, imgTag, error) => {
  debugger;
  error.innerHTML = "";
  //let regex = new RegExp("(.*?)\.(docx|doc|pdf|txt|odt|csv|ppt|xls|xlsx|pptx)$"),
  try {
    if (event.target.files) {
      let reader = new FileReader(),
        size = event.target.files[0].size / 1024 / 1024;
      if (size < 2) {
        reader.onload = function (event) {
          // $(imgTag).attr('src', event.target.result);
          imgTag.setAttribute("src", event.target.result);
          // $(imgTag).show()
        };
        reader.readAsDataURL(event.target.files[0]);
      } else {
        error.innerHTML = "Image should not exceed 2mb";
      }
    }
  } catch (ex) {
    console.error(ex);
  }
};

uploadbtn.addEventListener("change", () => {
  getImage(event, profileImg, errorMsg);
});
