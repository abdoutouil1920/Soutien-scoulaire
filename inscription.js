const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});




/* muli step regiter js */

const slidePage = document.querySelector(".slide-page");
const nextBtnFirst = document.querySelector(".firstNext");
const prevBtnSec = document.querySelector(".prev-1");
const nextBtnSec = document.querySelector(".next-1");
const prevBtnThird = document.querySelector(".prev-2");
const nextBtnThird = document.querySelector(".next-2");
const prevBtnFourth = document.querySelector(".prev-3");
const submitBtn = document.querySelector(".submit");
const progressText = document.querySelectorAll(".step p");
const progressCheck = document.querySelectorAll(".step .check");
const bullet = document.querySelectorAll(".step .bullet");






const slidePages = document.querySelector(".slide-pages");
const nextBtnFirsts = document.querySelector(".firstNexts");
const prevBtnSecs = document.querySelector(".prevs-1");
const nextBtnSecs = document.querySelector(".nexts-1");
const prevBtnThirds = document.querySelector(".prevs-2");
const nextBtnThirds = document.querySelector(".nexts-2");
const prevBtnFourths = document.querySelector(".prevs-3");
const submitBtns = document.querySelector(".submits");
const progressTexts = document.querySelectorAll(".steps p");
const progressChecks = document.querySelectorAll(".steps .check");
const bullets = document.querySelectorAll(".steps .bullet");


let current = 1;
let currents = 1;

nextBtnFirst.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "-25%";
  bullet[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  current += 1;
});
nextBtnSec.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "-50%";
  bullet[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  current += 1;
});
nextBtnThird.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "-75%";
  bullet[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  current += 1;
});
submitBtn.addEventListener("click", function(){
  bullet[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  current += 1;
  setTimeout(function(){
    alert("Your Form Successfully Signed up");
    location.reload();
  },800);
});

prevBtnSec.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "0%";
  bullet[current - 2].classList.remove("active");
  progressCheck[current - 2].classList.remove("active");
  progressText[current - 2].classList.remove("active");
  current -= 1;
});
prevBtnThird.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "-25%";
  bullet[current - 2].classList.remove("active");
  progressCheck[current - 2].classList.remove("active");
  progressText[current - 2].classList.remove("active");
  current -= 1;
});
prevBtnFourth.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "-50%";
  bullet[current - 2].classList.remove("active");
  progressCheck[current - 2].classList.remove("active");
  progressText[current - 2].classList.remove("active");
  current -= 1;
});






nextBtnFirsts.addEventListener("click", function(event){
    event.preventDefault();
    slidePages.style.marginLeft = "-25%";
    bullets[currents - 1].classList.add("active");
    progressChecks[currents - 1].classList.add("active");
    progressTexts[currents - 1].classList.add("active");
    currents += 1;
  });
  nextBtnSecs.addEventListener("click", function(event){
    event.preventDefault();
    slidePages.style.marginLeft = "-50%";
    bullets[currents - 1].classList.add("active");
    progressChecks[currents - 1].classList.add("active");
    progressTexts[currents - 1].classList.add("active");
    currents += 1;
  });
  nextBtnThirds.addEventListener("click", function(event){
    event.preventDefault();
    slidePages.style.marginLeft = "-75%";
    bullets[currents - 1].classList.add("active");
    progressChecks[currents - 1].classList.add("active");
    progressTexts[currents - 1].classList.add("active");
    currents += 1;
  });
  submitBtns.addEventListener("click", function(){
    bullets[currents - 1].classList.add("active");
    progressChecks[currents - 1].classList.add("active");
    progressTexts[currents - 1].classList.add("active");
    currents += 1;
    setTimeout(function(){
      alert("Your Form Successfully Signed up");
      location.reload();
    },800);
  });
  
  prevBtnSecs.addEventListener("click", function(event){
    event.preventDefault();
    slidePages.style.marginLeft = "0%";
    bullets[currents - 2].classList.remove("active");
    progressChecks[currents - 2].classList.remove("active");
    progressTexts[currents - 2].classList.remove("active");
    currents -= 1;
  });
  prevBtnThirds.addEventListener("click", function(event){
    event.preventDefault();
    slidePages.style.marginLeft = "-25%";
    bullets[currents - 2].classList.remove("active");
    progressChecks[currents - 2].classList.remove("active");
    progressTexts[currents - 2].classList.remove("active");
    currents -= 1;
  });
  prevBtnFourths.addEventListener("click", function(event){
    event.preventDefault();
    slidePages.style.marginLeft = "-50%";
    bullets[currents - 2].classList.remove("active");
    progressChecks[currents - 2].classList.remove("active");
    progressTexts[currents - 2].classList.remove("active");
    currents -= 1;
  });
