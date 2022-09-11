function Validation() {

  var letters = /^[A-Za-z]+$/;


  // first name Validate is empty
  var FirstName = document.getElementById("fname").value;
  if (FirstName == "") {
    alert("The First Name Field is empty");
    return false;
  }

  // first name Validate must alphabets only
  else if (!letters.test(FirstName)) {
    alert('Name is incorrect must contain alphabets only');
    return false;
  }
  // last name Validate is empty
  var LastName = document.getElementById("lname").value;
  if (LastName == "") {
    alert("The Last Name Field is empty");
    return false;
  }

  // last name Validate must alphabets only
  else if (!letters.test(LastName)) {
    alert('Name is incorrect must contain alphabets only');
    return false;
  }

//email validation
var email= document.getElementById("email").value;
var emailPattren = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

// email Validate
 if (email.match(emailPattren)) {
  return true;
}
else{
  alert("The Email does not match the pattren");
  return false;
}

} //end validation function
