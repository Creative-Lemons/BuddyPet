const name = document.getElementById("fnameInput");
const email = document.getElementById("emailInput");
const pass = document.getElementById("passwordInput");
const confirmPass = document.getElementById("cPassInput");
const phone = document.getElementById("phoneInput");
const street = document.getElementById("streetInput");
const streetNo = document.getElementById("streetNoInput");
const postalCode = document.getElementById("postalCodeInput");
const city = document.getElementById("cityInput");
const memberType = document.getElementById("memberTypeInput");
// const shelterName = document.getElementById("shelterNameInput");
// const description = document.getElementById("description");

// Form valiaiton
const validation = () => {
  console.log("validation function call");
  const nameValidation = nameValidate(name);
  const emailValidation = emailValidate(email);
  const passwordValidation = passwordValidate(pass);
  const cPasswordValidation = confirmPasswordValidate(confirmPass);
  const phoneValidation = phoneValidate(phone);
  const streetValidation = streetValidate(street);
  const streetNoValidation = streetNoValidate(streetNo);
  const postalCodeValidation = postalCodeValidate(postalCode);
  const cityValidation = cityValidate(city);
  // const shelterValidaton = handleChange();
  console.log(nameValidation);
  console.log(emailValidation);
  console.log(passwordValidation);
  console.log(cPasswordValidation);
  console.log(phoneValidation);
  console.log(streetNoValidation);
  console.log(streetNoValidation);
  console.log(postalCodeValidation);
  console.log(cityValidation);

  return nameValidation &&
    emailValidation &&
    passwordValidation &&
    cPasswordValidation &&
    phoneValidation &&
    streetNoValidation &&
    streetValidation &&
    postalCodeValidation &&
    cityValidation
    ? // shelterValidaton
      true
    : false;
};

// Name validation
const nameValidate = el => {
  const sFirstName = el.value;
  const regex = /^[a-zA-Z\s]+$/;
  const nameErr = document.getElementById("nameErr");
  return sFirstName.length < 2 || regex.test(sFirstName) === false
    ? err(el, nameErr)
    : noErr(el, nameErr);
};

// Email validation
const emailValidate = el => {
  const sEmail = el.value;
  const regex = /^\S+@\S+\.\S+$/;
  const emailErr = document.getElementById("emailErr");
  return sEmail.length < 6 || regex.test(sEmail) === false
    ? err(el, emailErr)
    : noErr(el, emailErr);
};

// Password validation
const passwordValidate = el => {
  const sPassword = el.value;
  const regex = /^(?=.*\d)(?=.*[a-zA-Z]).{5,}$/;
  const passwordErr = document.getElementById("passwordErr");
  return sPassword.length < 4 || regex.test(sPassword) === false
    ? err(el, passwordErr)
    : noErr(el, passwordErr);
};

// Confirm password match
const confirmPasswordValidate = el => {
  const sConfirmPassword = el.value;
  const sPassword = pass.value;
  const passwordErr = document.getElementById("cPassErr");
  return sConfirmPassword.length < 4 || sConfirmPassword !== sPassword
    ? err(el, passwordErr)
    : noErr(el, passwordErr);
};

// Phone number validation
const phoneValidate = el => {
  const iPhone = el.value;
  const regex = /^\+?([0-9]{2})\)?[-. ]?([0-9]{4})[-. ]?([0-9]{4})$/;
  const phoneErr = document.getElementById("phoneErr");
  return iPhone.length < 9 || regex.test(iPhone) === false
    ? err(el, phoneErr)
    : noErr(el, phoneErr);
};

// Street name Validaiton
const streetValidate = el => {
  const sStreet = el.value;
  const regex = /^[a-zA-Z\s]+$/;
  const streetErr = document.getElementById("streetErr");
  return sStreet.length < 5 || regex.test(sStreet) === false
    ? err(el, streetErr)
    : noErr(el, streetErr);
};

// Street number validaiton
const streetNoValidate = el => {
  const iStreetNo = el.value;
  const regex = /^(\(?\+?[0-9]*\)?)?[0-9_\- \(\)]*$/;
  const streetNoErr = document.getElementById("streetNoErr");
  return iStreetNo.length > 4 ||
    iStreetNo.length === 0 ||
    regex.test(iStreetNo) === false
    ? err(el, streetNoErr)
    : noErr(el, streetNoErr);
};

// Postal code validaiton
const postalCodeValidate = el => {
  const ipostalCode = el.value;
  const regex = /^[1-9][0-9]*$/;
  const postalCodeErr = document.getElementById("postalCodeErr");
  return ipostalCode.length !== 4 || regex.test(ipostalCode) === false
    ? err(el, postalCodeErr)
    : noErr(el, postalCodeErr);
};

// City validaiton
const cityValidate = el => {
  const sCity = el.value;
  const regex = /^[a-zA-Z\s]+$/;
  const cityErr = document.getElementById("cityErr");
  return sCity.length < 3 || regex.test(sCity) === false
    ? err(el, cityErr)
    : noErr(el, cityErr);
};

// // Shelter name validation
// const shelterNameValidate = el => {
//   const sName = el.value;
//   const regex = /^[a-zA-Z\s]+$/;
//   const shelterErr = document.getElementById("shelterNameErr");
//   return sName.length < 2 || regex.test(sName) === false
//     ? err(el, shelterErr)
//     : noErr(el, shelterErr);
// };

// // Shelter description validation
// const descriptionValidate = el => {
//   const sDescription = el.value;
//   const regex = /^[a-zA-Z\s]+$/;
//   const descriptionErr = document.getElementById("descriptionErr");
//   return sDescription.length < 20 || regex.test(sDescription) === false
//     ? err(el, descriptionErr)
//     : noErr(el, descriptionErr);
// };

// Handle change of member type (user or shelter)
const handleChange = () => {
  // var el = document.getElementById("shelterDivs");
  // var memberType = document.getElementById("memberTypeInput").value;
  // el.style.display = memberType === "shelter" ? "block" : "none";
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
