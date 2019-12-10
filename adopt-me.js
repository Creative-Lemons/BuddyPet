document.querySelector("#adopt-me-btn").addEventListener("click", addAnimation);
function addAnimation() {
  document.querySelector("#pop-up-adopt").classList.remove("hidden");
  document.querySelector("#pop-up-adopt").classList.add("fade-in-animation");
  document.querySelector("#back-drop-adopt").classList.remove("hidden");
  document.querySelector("body").classList.add("overflow");
}
document.querySelector("#close-adopt").addEventListener("click", closeModal);
function closeModal() {
  console.log("hi");
  document.querySelector("#pop-up-adopt").classList.remove("fade-in-animation");
  //   document.querySelector("#pop-up").classList.add("hidden");

  document.querySelector("#pop-up-adopt").classList.add("fade-out-animation");
  document.querySelector("body").classList.remove("overflow");
  document.querySelector("#back-drop-adopt").classList.add("hidden");
}
document.querySelector("#close-adopt-btn").addEventListener("click", closeModal);
function closeModal() {
  console.log("hi");
  document.querySelector("#pop-up-adopt").classList.remove("fade-in-animation");
  //   document.querySelector("#pop-up").classList.add("hidden");

  document.querySelector("#pop-up-adopt").classList.add("fade-out-animation");
  document.querySelector("body").classList.remove("overflow");
  document.querySelector("#back-drop-adopt").classList.add("hidden");
}