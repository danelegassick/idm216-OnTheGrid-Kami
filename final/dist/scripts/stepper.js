let stepperDisplayElem = document.querySelector('.stepper-display');
let stepperMinusElem = document.querySelector('.stepper-minus');
let stepperPlusElem = document.querySelector('.stepper-plus');

let count = 1;

updateDisplay();

  stepperPlusElem.addEventListener("click",()=>{
    count++;
    updateDisplay();
}) ;

stepperMinusElem.addEventListener("click",()=>{
    if(count>1) {
      count--;
    }
    updateDisplay();
});

function updateDisplay(){
    stepperDisplayElem.innerHTML = count;
};
