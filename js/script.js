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


// Image change quand la souris passe dessus


const imgChange = document.querySelectorAll('.change');
const secondeImg = document.querySelectorAll('.none')


imgChange.addEventListener('mouseover', function(){

    imgChange.style.display = "none";
    secondeImg.classList.remove('none');
})

secondeImg.addEventListener('mouseleave', function(){
    imgChange.style.display='block';
    secondeImg.classList.add('none');
})