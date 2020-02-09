const countdownInterval = setInterval(function() {
  const second = 1000;
  const minute = second * 60;
  const hour = minute * 60;
  const day = hour * 24;
  const now = new Date().getTime();
  
  const countDown = new Date('Jun 26, 2020 00:00:00').getTime();
  const distance = countDown - now;

  document.getElementById('days').innerText = Math.floor(distance / (day)),
  document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
  document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
  document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);

}, 1000);

document.getElementById('burger').addEventListener('click', function () {
  const nav = document.getElementById('nav');
  if (!nav.style.display) {
    nav.style.display = 'flex';
  } else {
    nav.style = undefined;
  }
});

toggleBodyOverflow = () => {
  const body = document.getElementsByTagName('body')[0]
  if (!body.style.overflow) {
    body.style.overflow = 'hidden';
  } else {
    body.style = undefined;
  }
};

document.querySelectorAll('.modal-close').forEach(modalClose => {
  modalClose.addEventListener('click', function (e) {
    e.target.parentElement.parentElement.classList.toggle('active');
    toggleBodyOverflow();
  });
});


document.querySelectorAll('.modal').forEach(modalClose => {
  modalClose.addEventListener('click', function (e) {
    if (e.target.contains(modalClose)) {
      e.target.classList.toggle('active');
      toggleBodyOverflow();
    }
  });
});

document.getElementById('login-modal-trigger').addEventListener('click', function (e) {
  e.preventDefault();
  const loginModal = document.getElementById('login-modal');
  loginModal.classList.toggle('active');
  toggleBodyOverflow();
});

document.getElementById('register-modal-trigger').addEventListener('click', function (e) {
  e.preventDefault();
  const registerModal = document.getElementById('register-modal');
  registerModal.classList.toggle('active');
  toggleBodyOverflow();
});

window.onload = () => {
  const loading = document.getElementById('loading');
  loading.addEventListener('transitionend', function (e) {
    e.target.remove()
  })
  loading.style.opacity = 0;
  toggleBodyOverflow();
};

$(".timeline-wrapper .single-item > span").on("mouseenter mouseleave", function(e){
  $("timeline-wrapper .single-item-active").removeClass("active");
    $(this).parent().addClass("active");
});

$(document).ready(function(){
  $('.about-us-carousel').slick({
    dots: true,
    infinite: true,
    speed: 200,
    fade: true,
    cssEase: 'linear',
    autoplay: true,
    prevArrow: $('.carousel-prev'),
    nextArrow: $('.carousel-next'),
  });
});

$('.accordion-item > a').on('click', function (e) {
  e.preventDefault()
  $(this).toggleClass('active')
  $(this).next().toggleClass('active')
})

$('.nav-item').on('click', function () {
  $('.nav-item').removeClass('active')
  $(this).addClass('active')
})

// FAQ

// const items = document.querySelectorAll(".accordion a");

// function toggleAccordion(){
//   this.classList.toggle('active');
//   this.nextElementSibling.classList.toggle('active');
// }

// items.forEach(item => item.addEventListener('click', toggleAccordion));