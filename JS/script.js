let navbar = document.querySelector('.header .navbar');
let menuBtn = document.querySelector('#menu_btn');
menuBtn.onclick = () => {
    menuBtn.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

// changing background color of navbar while scrolling 
function changebg() {
    var header = document.getElementById('header');
    var scrollvalue = window.scrollY;
    if (scrollvalue <= 0) {
        header.classList.remove('header_bgcolor');
    }
    else {
        header.classList.add('header_bgcolor');
    }
}
window.addEventListener('scroll', changebg);

// ----------------------Feedback swiper begins------------------- 
var swiper = new Swiper(".client_feedback", {
    loop: true,
    grabCursor: true,
    spaceBetween: 20,
    navigation: {
        nextE1: ".swiper-button-next",
        prevE1: ".swiper-button-prev"
    },
    breakpoints: {
        0: {
            slidesPerView: 1,
        },
        640: {
            slidesPerView: 2,
        },
        768: {
            slidesPerView: 3,
        },
    }
})
// ----------------------Feedback swiper ends------------------- 


// ----------------------Package detail swiper begins------------------- 
var swiper = new Swiper(".package_intro", {
    loop: true,
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    navigation: {
        nextE1: ".swiper-button-next",
        prevE1: ".swiper-button-prev"
    },
})
// ----------------------Feedback swiper ends------------------- 









function off() {
    document.getElementById('plan_trip').style.display = "none";
}
function book_trip() {
    document.getElementById('plan_trip').style.display = "flex";
}




function login() {
    document.getElementById('login_model').style.display = "flex"
}
function login_close() {
    document.getElementById('login_model').style.display = "none";
}
function login_validation() {
    var uname = document.login_f1.login_uname.value;
    var ps = document.login_f1.login_psw.value;
    if (uname.length == "" && ps.length == "") {
        alert("Username and Password fields are empty");
        return false;
    }
    else {
        if (uname.length == "") {
            alert("Invalid Username");
            return false;
        }
        if (ps.length == "") {
            alert("Invalid Password");
            return false;
        }
    }
}
function signup() {
    login_close();
    document.getElementById('signup').style.display = "flex"
}
function signup_close() {
    document.getElementById('signup').style.display = "none";
}
function signup_validation() {
    var name = document.signup_f1.fullname.value;
    var phone = document.signup_f1.phone.value;
    var emailid = document.signup_f1.email.value;
    var ps = document.signup_f1.psw.value;
    var gender = document.signup_f1.gender.value;
    if (name.length == "" || phone.length == "" || emailid.length == "" || ps.length == "" || gender.length == "") {
        alert("Invalid Form!");
        return false;
    }
}

function plantrip_validate()
{
    var fname = document.plantripform.fullname.value;
    var country = document.plantripform.country.value;
    var gmail = document.plantripform.gmail.value;
    var desc = document.plantripform.description.value;
    var travel = document.plantripform.travel_date.value;
    var stay = document.plantripform.stay.value;
    var person = document.plantripform.person_no.value;
    var contact = document.plantripform.contact.value;
    
}

function book(trip){
    document.getElementById("book-form").style.display = "flex";
    document.getElementById("en_trip").value = trip;
}
function book_close(){
    document.getElementById("book-form").style.display = "none";
}