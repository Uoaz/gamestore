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


// IMG CHANGES ON MOUSE OVER

// const allImgPdt = document.querySelectorAll('.container-pdt img');

const imgChange = document.querySelector('.change');
const secondeImg = document.querySelector('.none');


    imgChange.addEventListener('mouseover', function(){

        imgChange.style.display = "none";
        secondeImg.classList.remove('none');
    })





secondeImg.addEventListener('mouseleave', function(){

    imgChange.style.display ='block';
    secondeImg.classList.add('none');
})