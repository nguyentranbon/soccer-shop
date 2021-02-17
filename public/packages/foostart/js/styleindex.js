
$('.conten').slick({
  dots: false,
  infinite: true,
  autoplay: false,
  autoplaySpeed: 1000,
  arrows: true,
  slidesToShow: 4,
  adaptiveHeight: true,
  responsive: [
    {
      breakpoint: 1025,
      arrows: false,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
      }
    },
    {
      breakpoint: 780,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: false,
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
$('.contentwo').slick({
  dots: false,
  infinite: true,
  autoplay: false,
  autoplaySpeed: 1000,
  arrows: false,
  slidesToShow: 4,
  adaptiveHeight: true,
  responsive: [
    {
      breakpoint: 1025,
      arrows: false,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
      }
    },
    {
      breakpoint: 780,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: false,
      }
    },
    {
      breakpoint: 360,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

$('.center').slick({
  dots: true,
  infinite: true,
  autoplay: false,
  autoplaySpeed: 20000,
  slidesToShow: 1,
  arrows: false,
  adaptiveHeight: true,
  responsive: [
    {
      breakpoint: 1025,
      arrows: false,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
      }
    },
    {
      breakpoint: 780,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
      }
    },
    {
      breakpoint: 360,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

$('.contenone').slick({
  dots: false,
  infinite: true,
  autoplay: false,
  autoplaySpeed: 1000,
  arrows: false,
  slidesToShow: 3,
  adaptiveHeight: true,
  responsive: [
    {
      breakpoint: 1025,
      arrows: false,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
      }
    },
    {
      breakpoint: 780,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
      }
    },
    {
      breakpoint: 360,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

$(document).ready(function () {
  $('#myInput').on('keyup', function (event) {
    event.preventDefault();
    /* Act on the event */
    var tukhoa = $(this).val().toLowerCase();
    $('#myRow #my-col').filter(function () {
      $(this).toggle($(this).text().toLowerCase().indexOf(tukhoa) > -1);
    });

  });
});

// menu 
$(document).ready(function () {
  $(window).scroll(function () {
    $('.menu-div').addClass('scroll-menu');
    if (window.scrollY >= 390) {
      $('.menu-div').removeClass('scroll-menu');
      $('.menu-div').addClass('active');
    }
    if (window.scrollY < 390) {
      $('.menu-div').removeClass('active')
      // $('.menu-div').addClass('scroll-menu');
    }
    if (window.scrollY < 150) {
      $('.menu-div').removeClass('scroll-menu');
    }
  })
});


// bat loi form
const cap = document.getElementById('cap');
const capchar = document.getElementById('captchar');
const form = document.querySelector('form');

// bao loi khi nguoi dung khong nhap ghi het
form.addEventListener('submit', (e) => {
  if (form.checkValidity() === false) {
    //Ngan ko cho form gui du lieu di
    e.preventDefault();
  }
  form.classList.add('was-validated');
});

// kim tra gia tri khi nguoi dung khong nhap
form.onsubmit = (e) => {
  if (form.checkValidity() === false) {
    e.preventDefault();
  }
  form.classList.add('was-validated');
};


// tao so ngau nhien 4 so: 
function TaoSoNgauNhien(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min + 1)) + min;
}

//kim tra co dung so ngau nhien khong
let x = TaoSoNgauNhien(1000,9999);

cap.innerHTML = "Captchar: " + x;
capchar.pattern = x;

// kim tra password
let password = document.getElementById("password")
    , confirm_password = document.getElementById("confirm_password");

function validatePassword() {
    if (password.value != confirm_password.value) {
        confirm_password.setCustomValidity("Passwords Don't Match");
    } else {
        confirm_password.setCustomValidity('');
    }
}
password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
