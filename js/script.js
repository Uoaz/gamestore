// SLIDER 

const img = document.querySelectorAll('.slider article');
const nbSlide = img.length;

let count = 0;

setInterval(function nextSlide() {
    img[count].classList.remove('active');

    if(count< nbSlide - 1) {
        count++;
    } else {
        count = 0;
    }

    img[count].classList.add('active');
    
}, 5000);


// Show more product

const plusBtn = document.querySelector('.plus');
const hiddenPdt = document.querySelector('.hidden');

plusBtn.addEventListener('click', function(){


    hiddenPdt.style.display = 'block';
    plusBtn.style.display = 'none';
})


// onclick for controller color

const xbox = document.querySelector('.xbox-controller');

function xboxController(controller){
    xbox.src = controller;
}



const ps = document.querySelector('.ps-controller');

function psController(controller){
    ps.src = controller;
}


// Accordeon 


const background = document.querySelectorAll('.background');

background.forEach((item) => {
    
    item.addEventListener('click', function(){
        const next = item.nextElementSibling
        next.classList.toggle('visible');

    })
});