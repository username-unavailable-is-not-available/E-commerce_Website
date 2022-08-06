/*let name = username = email = password = x;

if (x == ''){
    alert("Field can not be empty");
    return false;
} else if (password.length < 8){
    alert("Password must be at least 8 characters long");
    return false;
}*/

/*function validateForm() {
  let x = document.forms["regForm"]["name"].value;
  if (x == '') {
    alert("Name Can Not Be Empty");
    return false;
  }
}*/

function validateForm() {
  var name = document.regForm.name.value;
  var username = document.regForm.username.value;
  var email = document.regForm.email.value;
  var gender = document.regForm.gender.value;
  var password = document.regForm.password.value;
  var repass = document.regForm.conpass.value;

  if (name == "") {
    alert("Empty Name!!");
    return false;
  } else if (username == "") {
    alert("Empty Username!!");
    return false;
  } else if (email == "") {
    alert("Empty Email!!");
    return false;
  } else if (gender == "") {
    alert("Empty Gender!!");
    return false;
  } else if (password.length < 8) {
    alert("Password < 8 CHAR");
    return false;
  } else if (repass ==! password) {
    alert("Password did not match!!");
    return false;
  }
}
