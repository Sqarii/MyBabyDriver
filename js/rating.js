const star1 = document.querySelector('#star1');
const star2 = document.querySelector('#star2');
const star3 = document.querySelector('#star3');
const star4 = document.querySelector('#star4');
const star5 = document.querySelector('#star5');

let driverRate = document.querySelector("#driver-rate");

// console.log(driverRate);

let rate = 0;

star1.addEventListener('click', chooseStar1);
star2.addEventListener('click', chooseStar2);
star3.addEventListener('click', chooseStar3);
star4.addEventListener('click', chooseStar4);
star5.addEventListener('click', chooseStar5);

function chooseStar1(){
    rate = 1;
    driverRate.setAttribute('value', rate);

    star1.classList = '';
    star1.classList.add('fas', 'fa-star');

    star2.classList = '';
    star2.classList.add('far', 'fa-star');
    star3.classList = '';
    star3.classList.add('far', 'fa-star');
    star4.classList = '';
    star4.classList.add('far', 'fa-star');
    star5.classList = '';
    star5.classList.add('far', 'fa-star');
}

function chooseStar2(){
    rate = 2;
    driverRate.setAttribute('value', rate);

    star1.classList = '';
    star1.classList.add('fas', 'fa-star');
    star2.classList = '';
    star2.classList.add('fas', 'fa-star');

    star3.classList = '';
    star3.classList.add('far', 'fa-star');
    star4.classList = '';
    star4.classList.add('far', 'fa-star');
    star5.classList = '';
    star5.classList.add('far', 'fa-star');
}

function chooseStar3(){
    rate = 3;
    driverRate.setAttribute('value', rate);

    star1.classList = '';
    star1.classList.add('fas', 'fa-star');
    star2.classList = '';
    star2.classList.add('fas', 'fa-star');
    star3.classList = '';
    star3.classList.add('fas', 'fa-star');

    star4.classList = '';
    star4.classList.add('far', 'fa-star');
    star5.classList = '';
    star5.classList.add('far', 'fa-star');

}

function chooseStar4(){
    rate = 4;
    driverRate.setAttribute('value', rate);

    star1.classList = '';
    star1.classList.add('fas', 'fa-star');
    star2.classList = '';
    star2.classList.add('fas', 'fa-star');
    star3.classList = '';
    star3.classList.add('fas', 'fa-star');
    star4.classList = '';
    star4.classList.add('fas', 'fa-star');

    star5.classList = '';
    star5.classList.add('far', 'fa-star');
}

function chooseStar5(){
    rate = 5;
    driverRate.setAttribute('value', rate);

    star1.classList = '';
    star1.classList.add('fas', 'fa-star');
    star2.classList = '';
    star2.classList.add('fas', 'fa-star');
    star3.classList = '';
    star3.classList.add('fas', 'fa-star');
    star4.classList = '';
    star4.classList.add('fas', 'fa-star');
    star5.classList = '';
    star5.classList.add('fas', 'fa-star');
}