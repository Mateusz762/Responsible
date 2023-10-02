const hamburger_menu = document.querySelector(".hamburger-menu");
const container = document.querySelector(".container");

hamburger_menu.addEventListener("click", () => {
  container.classList.toggle("active");
});

let eyeicon = document.getElementById("eyeicon");
let password = document.getElementById("password");

eyeicon.onclick = function(){
    if(password.type == "password"){
      password.type = "text";
      eyeicon.src = "eye-open.png";
    }else{
      password.type="password";
      eyeicon.src = "eye-close.png";
    }
}


const login = document.querySelector(".login");
const signup = document.querySelector(".signup");
const form = document.querySelector("#form");
const switchs = document.querySelectorAll(".switch");

let current = 1;

function tab2(){
  form.style.marginLeft = "100%";
  login.style.backround = "none";
  signup.style.background = "linear-gradient(45deg, #00d5fc, #046af6)";
  switchs[current - 1].classList.add("active");
}

function tab1(){
  form.style.marginLeft = "0";
  signup.style.backround = "none";
  login.style.background = "linear-gradient(45deg, #00d5fc, #046af6)";
  switchs[current - 1].classList.remove("active");
}