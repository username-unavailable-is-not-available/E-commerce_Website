function validateName() {
  let a = document.forms["regForm"]["name"].value;
  if (a == '') {
    alert("Name Can Not Be Empty");
    return false;
  }
}

function validateUname(){
  let b = document.forms["regForm"]["username"].value;
  if (b == '') {
    alert("Username Can Not Be Empty");
    return false;
  }
}

function validateEmail(){
  let c = document.forms["regForm"]["email"].value;
  if (c == '') {
    alert("Email Can Not Be Empty");
    return false;
  }
}

function validateGender(){
  let d = document.forms["regForm"]["gender"].value;
  if (d == '') {
    alert("Gender Can Not Be Empty");
    return false;
  }
}

function validatePassword(){
  let e = document.forms["regForm"]["password"].value;
  if (e == '') {
    alert("Password Can Not Be Empty");
    return false;
  }
}

/*function validateRpass(){
  let f = document.forms["regForm"]["repass"].value;
  if (f == '') {
    alert("Name Can Not Be Empty");
    return false;
  }
}*/