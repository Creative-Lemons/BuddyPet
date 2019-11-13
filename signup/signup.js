const name = document.getElementById("fnameInput");
const email = document.getElementById("emailInput");
const pass = document.getElementById("passwordInput");
const confirmPass = document.getElementById("cPassInput");
const phone = document.getElementById("phoneInput");

// Form validation
const validation = () => {
  const nameValidation = nameValidate(name);
  const emailValidation = emailValidate(email);
  const passwordValidation = passwordValidate(pass);
  const cPasswordValidation = confirmPasswordValidate(confirmPass);
  const phoneValidation = phoneValidate(phone);
  return nameValidation &&
    emailValidation &&
    passwordValidation &&
    cPasswordValidation &&
    phoneValidation
    ? true
    : false;
};

// Name validation
const nameValidate = el => {
  const sFirstName = el.value;
  const regex = /^[a-zA-Z\s]+$/;
  const nameErr = document.getElementById("nameErr");
  if (sFirstName.length < 2 || regex.test(sFirstName) === false) {
    el.style.borderColor = "#e76362";
    nameErr.style.display = "block";
    return false;
  } else {
    el.style.borderColor = "";
    nameErr.style.display = "none";
    return true;
  }
};

// Email validation
const emailValidate = el => {
  const sEmail = el.value;
  const regex = /^\S+@\S+\.\S+$/;
  const emailErr = document.getElementById("emailErr");
  if (sEmail.length < 6 || regex.test(sEmail) === false) {
    el.style.borderColor = "#e76362";
    emailErr.style.display = "block";
    return false;
  } else {
    el.style.borderColor = "";
    emailErr.style.display = "none";
    return true;
  }
};

// Password validation
const passwordValidate = el => {
  const sPassword = el.value;
  const regex = /^(?=.*\d)(?=.*[a-zA-Z]).{5,}$/;
  const passwordErr = document.getElementById("passwordErr");
  if (sPassword.length < 4 || regex.test(sPassword) === false) {
    el.style.borderColor = "#e76362";
    passwordErr.style.display = "block";
    return false;
  } else {
    el.style.borderColor = "";
    passwordErr.style.display = "none";
    return true;
  }
};

// Confirm password match
const confirmPasswordValidate = el => {
  const sConfirmPassword = el.value;
  const sPassword = pass.value;
  // const regex = /^(?=.*\d)(?=.*[a-zA-Z]).{5,}$/;
  const passwordErr = document.getElementById("cPassErr");
  if (sConfirmPassword.length < 4 || sConfirmPassword !== sPassword) {
    el.style.borderColor = "#e76362";
    passwordErr.style.display = "block";
    return false;
  } else {
    el.style.borderColor = "";
    passwordErr.style.display = "none";
    return true;
  }
};

// Phone number validation
const phoneValidate = el => {
  const iPhone = el.value;
  const regex = /^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;
  const phoneErr = document.getElementById("phoneErr");
  if (iPhone.length < 9 || regex.test(iPhone) === false) {
    el.style.borderColor = "#e76362";
    phoneErr.style.display = "block";
    return false;
  } else {
    el.style.borderColor = "";
    phoneErr.style.display = "none";
    return true;
  }
};

// Handle change of member type (user or shelter)
const handleChange = () => {
  var el = document.getElementById("shelterDivs");
  var memberType = document.getElementById("memberTypeInput").value;
  el.style.display = memberType === "shelter" ? "block" : "none";
};
