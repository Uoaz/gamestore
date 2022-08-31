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


// Hover for controller color


const xbox = document.querySelector('xbox-controller');

xbox.addEventListener('click', function(){

    console.log('cliqué');
})