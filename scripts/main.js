const managerSvg = document.querySelector('.manager');
const manager1Svg = document.querySelector('.manager1');
const coderSvg = document.querySelector('.coder');
const designerSvg = document.querySelector('.designer');
const architectSvg = document.querySelector('.architect');


const christinaImg = document.querySelector('.christina');
const avaniImg = document.querySelector('.avani');
const alexanderImg = document.querySelector('.alexander');
const daneImg = document.querySelector('.dane');
const laurenImg = document.querySelector('.lauren');


//CHRISTINA FUNCTIONS

//add lights to svg
function christinaHighlights() { 
    managerSvg?.classList?.add('light-up');
    manager1Svg?.classList?.add('light-up');
    architectSvg?.classList?.add('light-up');
    managerSvg?.classList?.remove('default-color');
    manager1Svg?.classList?.remove('default-color');
    architectSvg?.classList?.remove('default-color');
};

//remove lights from svg
function christinaDehighlight() { 
    managerSvg?.classList?.remove('light-up');
    architectSvg?.classList?.remove('light-up');
};

//AVANI FUNCTIONS

function avaniHighlights() { 
    designerSvg?.classList?.add('light-up');
    architectSvg?.classList?.add('light-up');
};

function avaniDehighlight() { 
    designerSvg?.classList?.remove('light-up');
    architectSvg?.classList?.remove('light-up');
};

//ALEXANDER FUNCTIONS

function alexanderHighlights() { 
    managerSvg?.classList?.add('light-up');
    coderSvg?.classList?.add('light-up');
};

function alexanderDehighlight() { 
    managerSvg?.classList?.remove('light-up');
    coderSvg?.classList?.remove('light-up');
};

//DANE FUNCTIONS

function daneHighlights() { 
    coderSvg?.classList?.add('light-up');
};

function daneDehighlight() { 
    coderSvg?.classList?.remove('light-up');
};

//LAUREN FUNCTIONS

function laurenHighlights() { 
    designerSvg?.classList?.add('light-up');
};

function laurenDehighlight() { 
    designerSvg?.classList?.remove('light-up');
};

christinaImg.addEventListener('mouseover', () => {
    managerSvg?.classList?.add('light-up');
    manager1Svg?.classList?.add('light-up');
    architectSvg?.classList?.add('light-up');
    managerSvg?.classList?.remove('default-color');
    manager1Svg?.classList?.remove('default-color');
    architectSvg?.classList?.remove('default-color');
});

christinaImg.addEventListener('mouseout', () => {
    managerSvg?.classList?.remove('light-up');
    manager1Svg?.classList?.remove('light-up');
    architectSvg?.classList?.remove('light-up');
    managerSvg?.classList?.add('default-color');
    manager1Svg?.classList?.add('default-color');
    architectSvg?.classList?.add('default-color');
});

avaniImg.addEventListener('mouseover', () => {
    designerSvg?.classList?.add('light-up');
    architectSvg?.classList?.add('light-up');
    designerSvg?.classList?.remove('default-color');
    architectSvg?.classList?.remove('default-color');
});

avaniImg.addEventListener('mouseout', () => {
    designerSvg?.classList?.remove('light-up');
    architectSvg?.classList?.remove('light-up');
    designerSvg?.classList?.add('default-color');
    architectSvg?.classList?.add('default-color');
});

alexanderImg.addEventListener('mouseover', () => {
    managerSvg?.classList?.add('light-up');
    manager1Svg?.classList?.add('light-up');
    coderSvg?.classList?.add('light-up');
    managerSvg?.classList?.remove('default-color');
    manager1Svg?.classList?.remove('default-color');
    coderSvg?.classList?.remove('default-color');
});

alexanderImg.addEventListener('mouseout', () => {
    managerSvg?.classList?.remove('light-up');
    manager1Svg?.classList?.remove('light-up');
    coderSvg?.classList?.remove('light-up');
    managerSvg?.classList?.add('default-color');
    manager1Svg?.classList?.add('default-color');
    coderSvg?.classList?.add('default-color');
});

daneImg.addEventListener('mouseover', () => {
    coderSvg?.classList?.add('light-up');
    coderSvg?.classList?.remove('default-color');
});

daneImg.addEventListener('mouseout', () => {
    coderSvg?.classList?.remove('light-up');
    coderSvg?.classList?.add('default-color');
});

laurenImg.addEventListener('mouseover', () => {
    designerSvg?.classList?.add('light-up');
    designerSvg?.classList?.remove('default-color');
});

laurenImg.addEventListener('mouseout', () => {
    designerSvg?.classList?.remove('light-up');
    designerSvg?.classList?.add('default-color');
});



