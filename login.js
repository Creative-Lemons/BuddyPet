document.querySelector("#login-btn").addEventListener("click", addAnimation);
function addAnimation() {
  document.querySelector("#pop-up").classList.remove("hidden");
  document.querySelector("#pop-up").classList.add("fade-in-animation");
  document.querySelector("#back-drop").classList.remove("hidden");
  document.querySelector("body").classList.add("overflow");
}
document.querySelector("#close").addEventListener("click", closeModal);
function closeModal() {
  console.log("hi");
  document.querySelector("#pop-up").classList.remove("fade-in-animation");
  //   document.querySelector("#pop-up").classList.add("hidden");

  document.querySelector("#pop-up").classList.add("fade-out-animation");
  document.querySelector("body").classList.remove("overflow");
  document.querySelector("#back-drop").classList.add("hidden");
}
