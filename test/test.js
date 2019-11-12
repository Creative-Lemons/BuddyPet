const name = document.getElementById("fnameInput");
const email = document.getElementById("emailInput");
const pass = document.getElementById("passwordInput");

// Form validation
const validation = () => {
  const nameValidation = nameValidaton(name);
  const emailValidation = emailValidaton(email);
  const passwordValidation = passValidation(pass);
  if (nameValidation && emailValidation && passwordValidation) {
    return true;
  } else {
    return false;
  }
};

// Name validation
const nameValidaton = el => {
  const sFirstName = el.value;
  const regex = /^[a-zA-Z\s]+$/;
  const nameErr = document.getElementById("nameErr");
  if (sFirstName.length < 3 || regex.test(sFirstName) === false) {
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
const emailValidaton = el => {
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
const passValidation = el => {
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

const handleChange = () => {
  var el = document.getElementById("shelterDivs");
  var memberType = document.getElementById("memberTypeInput").value;
  el.style.display = memberType === "shelter" ? "block" : "none";
};
