const name = document.getElementById("fnameInput");
const email = document.getElementById("emailInput");
const pass = document.getElementById("passwordInput");
const confirmPass = document.getElementById("cPassInput");
const phone = document.getElementById("phoneInput");

// Form validation
const validation = () => {
  return nameValidate(name) &&
    emailValidate(email) &&
    passwordValidate(pass) &&
    confirmPasswordValidate(confirmPass) &&
    phoneValidate(phone)
    ? true
    : false;
};

// Name validation
const nameValidate = el => {
  const sFirstName = el.value;
  const regex = /^[a-zA-Z\s]+$/;
  const nameErr = document.getElementById("nameErr");
  sFirstName.length < 2 || regex.test(sFirstName) === false
    ? err(el, nameErr)
    : noErr(el, nameErr);
};

// Email validation
const emailValidate = el => {
  const sEmail = el.value;
  const regex = /^\S+@\S+\.\S+$/;
  const emailErr = document.getElementById("emailErr");
  sEmail.length < 6 || regex.test(sEmail) === false
    ? err(el, emailErr)
    : noErr(el, emailErr);
};

// Password validation
const passwordValidate = el => {
  const sPassword = el.value;
  const regex = /^(?=.*\d)(?=.*[a-zA-Z]).{5,}$/;
  const passwordErr = document.getElementById("passwordErr");
  sPassword.length < 4 || regex.test(sPassword) === false
    ? err(el, passwordErr)
    : noErr(el, passwordErr);
};

// Confirm password match
const confirmPasswordValidate = el => {
  const sConfirmPassword = el.value;
  const sPassword = pass.value;
  const passwordErr = document.getElementById("cPassErr");
  sConfirmPassword.length < 4 || sConfirmPassword !== sPassword
    ? err(el, passwordErr)
    : noErr(el, passwordErr);
};

// Phone number validation
const phoneValidate = el => {
  const iPhone = el.value;
  const regex = /^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;
  const phoneErr = document.getElementById("phoneErr");
  iPhone.length < 9 || regex.test(iPhone) === false
    ? err(el, phoneErr)
    : noErr(el, phoneErr);
};

// Handle change of member type (user or shelter)
const handleChange = () => {
  var el = document.getElementById("shelterDivs");
  var memberType = document.getElementById("memberTypeInput").value;
  el.style.display = memberType === "shelter" ? "block" : "none";
};

// Error functions
const err = (el, errDiv) => {
  el.style.borderColor = "#e76362";
  errDiv.style.display = "block";
  return false;
};
const noErr = (el, errDiv) => {
  el.style.borderColor = "";
  errDiv.style.display = "none";
  return true;
};
