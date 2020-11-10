//========= number selectors ==========
let one = document.querySelector('.one');
let two = document.querySelector('.two');
let three = document.querySelector('.three');


//============== input boxes selectors ==========
let firstQuestion = document.querySelector('.first-question');
let secondQuestion = document.querySelector('.second-question');
let thirdQuestion = document.querySelector('.third-question');


//============ next button selectors =============
let nextFirstBtn = document.querySelector('#first-btn');
let nextSecondBtn = document.querySelector('#second-btn');
let nextThirdBtn = document.querySelector('#third-btn');

//============= back button selectors ============
let backSecondBtn = document.querySelector('#back-second-btn');
let backThirdBtn = document.querySelector('#back-third-btn');


//form question document selectors =============
let firstForm = document.querySelector('#first-form');
let secondForm = document.querySelector('#second-form');
let thirdForm = document.querySelector('#third-form');

let reviewAndCreate = document.querySelector('.review-and-create');

//================ form answers selectors ============
let ansQ1 = document.querySelector('.ans-q-1');
let ansQ2 = document.querySelector('.ans-q-2');
let ansQ3 = document.querySelector('.ans-q-3');


//======= declaration of answers variable ========
let firstAnswer;
let secondAnswer;
let thirdAnswer;


//========== review and create button selectors ==========
let backRacBtn = document.querySelector('#back-RAC-btn');
let reset = document.querySelector('#reset');
let create = document.querySelector('#create');

let success = document.querySelector('.success-msg');



//============= functionality ==========
nextFirstBtn.addEventListener('click', function () {
  one.innerHTML = `<svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M5.99991 11.17L1.82991 6.99997L0.409912 8.40997L5.99991 14L17.9999 1.99997L16.5899 0.589966L5.99991 11.17Z" fill="white"/>
  </svg>`;
  firstForm.classList.add('invisible');
  secondForm.classList.remove('invisible');
  firstAnswer = firstQuestion.value;
})

nextSecondBtn.addEventListener('click', function () {
  two.innerHTML = `<svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M5.99991 11.17L1.82991 6.99997L0.409912 8.40997L5.99991 14L17.9999 1.99997L16.5899 0.589966L5.99991 11.17Z" fill="white"/>
  </svg>`;
  secondForm.classList.add('invisible');
  thirdForm.classList.remove('display-none');
  secondAnswer = secondQuestion.value;
})

backSecondBtn.addEventListener('click', function () {
  one.innerHTML = `1`;
  firstForm.classList.remove('invisible');
  secondForm.classList.add('invisible');
})

nextThirdBtn.addEventListener('click', function () {
  three.innerHTML = `<svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
  <path d="M5.99991 11.17L1.82991 6.99997L0.409912 8.40997L5.99991 14L17.9999 1.99997L16.5899 0.589966L5.99991 11.17Z" fill="white"/>
  </svg>`;
  thirdForm.classList.add('display-none');
  reviewAndCreate.classList.remove('display-none');
  thirdAnswer = thirdQuestion.value;
  showAnswer();
})

backThirdBtn.addEventListener('click', function () {
  two.innerHTML = `2`;
  secondForm.classList.remove('invisible');
  thirdForm.classList.add('display-none');
})

backRacBtn.addEventListener('click', function () {
  three.innerHTML = `3`;
  thirdForm.classList.remove('display-none');
  reviewAndCreate.classList.add('display-none');
})

reset.addEventListener('click', function () {
  reviewAndCreate.classList.add('display-none');
  firstForm.classList.remove('invisible');
  one.innerHTML = `1`;
  two.innerHTML = `2`;
  three.innerHTML = `3`;
})

create.addEventListener('click', function () {
  reviewAndCreate.classList.add('display-none');
  success.classList.remove('display-none')
})

function showAnswer () {
  ansQ1.textContent = firstAnswer;
  ansQ2.textContent = secondAnswer;
  ansQ3.textContent = thirdAnswer;
}