$(document).ready(function(){
    $(window).scroll(function(){
        // sticky navbar on scroll script
        if(this.scrollY > 20){
            $('.navbar').addClass("sticky");
        }else{
            $('.navbar').removeClass("sticky");
        }
        
        // scroll-up button show/hide script
        if(this.scrollY > 500){
            $('.scroll-up-btn').addClass("show");
        }else{
            $('.scroll-up-btn').removeClass("show");
        }
    });

    // slide-up script
    $('.scroll-up-btn').click(function(){
        $('html').animate({scrollTop: 0});
        // removing smooth scroll on slide-up button click
        $('html').css("scrollBehavior", "auto");
    });

    $('.navbar .menu li a').click(function(){
        // applying again smooth scroll on menu items click
        $('html').css("scrollBehavior", "smooth");
    });

    // toggle menu/navbar script
    $('.menu-btn').click(function(){
        $('.navbar .menu').toggleClass("active");
        $('.menu-btn i').toggleClass("active");
    });

    // typing text animation script
    var typed = new Typed(".typing", {
        strings: ["Programmer"],
        typeSpeed: 110,
        backSpeed: 80,
        loop: true
    });

    var typed = new Typed(".text-2", {
        strings: ["Ahmad Dzaky Hermawan"],
        typeSpeed: 110,
        backSpeed: 80,
        loop: true
    });

    // owl carousel script
    $('.carousel').owlCarousel({
        margin: 20,
        loop: true,
        autoplay: true,
        autoplayTimeOut: 2000,
        autoplayHoverPause: true,
        responsive: {
            0:{
                items: 1,
                nav: false
            },
            600:{
                items: 2,
                nav: false
            },
            1000:{
                items: 3,
                nav: false
            }
        }
    });
});



const buttonImg1 = document.querySelector("#button1");
const containerImg = document.querySelector(".containerImg");
const containerImg2 = document.querySelector(".containerImg2");
const containerImg3 = document.querySelector(".containerImg3");
const buttonImg2 = document.querySelector("#button2");
const buttonImg3 = document.querySelector("#button3");


buttonImg2.addEventListener("click", () => {
    containerImg2.classList.add("activeimg2");
})


buttonImg1.addEventListener("click", () => {
    containerImg.classList.add("activeimg");
})

buttonImg3.addEventListener("click", ()=> {
    containerImg3.classList.add("activeimg3");
})



document.addEventListener("click", (e) => {
    if (e.target !== buttonImg1) {
        containerImg.classList.remove("activeimg");
    } 
    if (e.target !== buttonImg2) {
        containerImg2.classList.remove("activeimg2");
    }
    if (e.target !== buttonImg3) {
        containerImg3.classList.remove("activeimg3");
    }
})

// Script untuk menangani klik pada menu navbar
document.addEventListener("DOMContentLoaded", function () {
    var sections = document.querySelectorAll('section');
    var navItems = document.querySelectorAll('.nav-item');

    window.addEventListener('scroll', function () {
        var currentSection = "";

        sections.forEach(function (section) {
            var sectionTop = section.offsetTop;
            var sectionHeight = section.clientHeight;

            if (pageYOffset >= sectionTop - sectionHeight / 3) {
                currentSection = section.getAttribute('id');
            }
        });

        navItems.forEach(function (navItem) {
            navItem.classList.remove('active');

            if (navItem.getAttribute('href').substring(1) === currentSection) {
                navItem.classList.add('active');
            }
        });
    });
});



