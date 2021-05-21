function activarEstiloOpcionSeleccionado() {

  var pathName = $(location).attr('pathname');

  if(pathName == '/') {
    $(".header__list.active").removeClass("active");
    $("#li-inicio").addClass("active");
    return;
  }

  var arrayPathName = pathName.split('/');
  var opcion = arrayPathName[1];
  $(".header__list.active").removeClass("active");
  $("#li-" + opcion).addClass("active");
  
}

function isMobile() {
  var isMobile = false; //initiate as false
  // device detection
  if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) 
      || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) { 
      isMobile = true;
  }
  return isMobile;
}

function generarEnlacesFooter() {
  if(isMobile()) {
    $("#link-fb-footer").attr("href", "fb://page/196045040835323");
  } else {
    $("#link-fb-footer").attr("href", "https://www.facebook.com/ministeriopalabrayespiritu/");
  }
}

// PAGE LOADER ======================================= // 
window.addEventListener("load", function () {

  const loader = document.querySelector(".page-loader");

  if (loader) {

    loader.classList.add("slide-off");
    activarEstiloOpcionSeleccionado();
    generarEnlacesFooter();
    setTimeout(function () {
      loader.classList.add("is-loading-finish");
      loader.remove();
    }, 2000)

  }

});


// HEADER ====================================== // 
// Mini plugin for the header
const headers = document.querySelectorAll(".header");

headers.forEach(function (current) {

  let originalClasses = current.className, // Classes to be added on scroll
    scrollClasses = current.getAttribute("data-onscroll-classes"), // Classes to be added on scroll
    scrollLogo = current.getAttribute("data-onscroll-logo"), // Logo to show on scroll
    brandLogo = current.querySelector(".header__logo img"), // Gets the current logo img tag
    brandLogoUrl = current.querySelector(".header__logo img").getAttribute("src"), // Gets the current logo src
    menuToggle = current.querySelector("[data-toggle]"), // Gets the element to toggle the naviagtion on mobile devices
    menuMobile, // Gets the menu for the mobile or submenu
    dropdownLink = current.querySelectorAll(".dropdown-link"), // Gets the dropdown links
    searchToggle = current.querySelector("[data-search]"), // Gets the element to toggle the search form
    searchForm, // Gets the search form
    scrollAmount = 100; // how far down (in px) 


  // Preventing the link default action
  for (let i = 0; i < dropdownLink.length; i++) {
    dropdownLink[i].addEventListener("click", function (e) {
      e.preventDefault();
    })
  }


  // Opening the mobile menu
  if (menuToggle) menuToggle.addEventListener("click", openMenu);
  // Adds classes on scroll
  if (scrollClasses) addClasses();
  // Changes logo on scroll
  if (scrollLogo) changeLogo();


  // FUNCTIONS ======================== // 
  function openMenu() { // opens mobile menu


    let menuToggleTarget = menuToggle.getAttribute("data-toggle");

    const open = JSON.parse(menuToggle.getAttribute("aria-expanded")); // converts to boolean and returns true or false
    menuToggle.setAttribute("aria-expanded", !open);

    menuMobile = current.querySelector("#" + menuToggleTarget); // Gets the menu that needs to be display
    menuMobile.classList.toggle("active"); // shows and hides the menu
    menuToggle.classList.toggle("rotate"); // little animation for the hamburger icon

    document.body.classList.toggle("overflow-hidden"); // prevent scrolling on the page while the menu is being shown
  };


  function scrollEvents(type) {

    let scrolled = window.scrollY;

    if (scrolled > scrollAmount) {
      if (type === "class") {
        current.className = originalClasses + " " + scrollClasses;
      } else {
        brandLogo.setAttribute("src", scrollLogo);
      }
    }

    else {
      if (type === "class") {
        current.className = "";
        current.className = originalClasses
      } else {
        brandLogo.setAttribute("src", "");
        brandLogo.setAttribute("src", brandLogoUrl);
      }

    }

  }


  function addClasses() { window.addEventListener("scroll", function () { scrollEvents("class") }); };

  function changeLogo() { window.addEventListener("scroll", function () { scrollEvents("logo") }); };

});


// CAROUSELS ================================ // 
// Using Owl Carousel plugin

// Hero carousel - Homepage 1
$('#hero-carousel').owlCarousel({
  items: 1, // how many slide to show on screen
  autoplay: true, // true or false
  autoplayTimeout: 4000, // how long before the next slide come on the screen in milliseconds (ex: 1000ms = 1s)
  autoplaySpeed: 450, //how long it take for a slide to fully come on screen
  slideTransition: "cubic-bezier(.1,.75,.67,.88)", // transition-timing-function (linear, ease-in, ease-in-out, etc...)
  loop: true, // true or false - whether the slideshow repeat or not
  mouseDrag: false, // true or false - laptop & desktop (any non-touch device)
  touchDrag: false, // true or false - mobile (or any touch-friendly device)
  dots: true, // true or false - show dots navigation
  nav: true, // true or false - show 'next' or 'prev' buttons
  autoplayHoverPause: true, // true or false - stop autoplay on hover
  responsiveClass: true, // true or false
});

// Upcoming event carousel - Homepage 2
$('#event-carousel').owlCarousel({
  items: 1,
  autoplay: true,
  margin: 30,
  autoplayTimeout: 4500,
  autoplaySpeed: 450,
  slideTransition: "cubic-bezier(.1,.75,.67,.88)",
  loop: true,
  nav: true,
  autoplayHoverPause: true,
  responsiveClass: true,
  responsive: {
    800: { // medium devices (tablets)
      items: 2,
      slideBy: 2 // how many slides should slide on screen each time
    },

    1000: { // larger devices (laptops and desktops)
      items: 3,
      slideBy: 3
    }
  }
});

// Testimonials carousel - Homepage 2
$('#our-testimonial').owlCarousel({
  items: 1,
  autoplay: true,
  autoplayTimeout: 4000,
  autoplaySpeed: 450,
  slideTransition: "cubic-bezier(.1,.75,.67,.88)",
  loop: true,
  nav: true,
  autoplayHoverPause: true,
  responsiveClass: true,
});


// ANIMATE ON SCROLL ================================= // 
// Using Animate On Scroll (AOS) plugin
AOS.init({
  once: true, // whether animation should happen only once - while scrolling down
});



// SCROLL BACK TO TOP ================================ // 
let scrollTopEl = document.querySelector(".scroll-to-top");

if (scrollTopEl) window.addEventListener("scroll", scrollToTop);

function scrollToTop() {

  const scrollable = document.documentElement.scrollHeight - window.innerHeight; // entire scrollabe space - the window's height = gives how much you can scroll

  let scrolled = window.scrollY; // how far down user has scrolled

  let scrolledPerc = Math.floor((scrollable * 50) / 100); // how far down user has scrolled in percentage - in this example 30% of the scrollable

  if (scrolled >= scrolledPerc) {
    scrollTopEl.classList.add("active");
  } else {
    scrollTopEl.classList.remove("active");
  }

}

function smoothScroll() {

  if (!scrollTopEl) return;

  scrollTopEl.addEventListener("click", function () {

    window.scrollTo({
      top: 0,
      left: 0,
      behavior: "smooth"
    });

  });

}

smoothScroll();


// CONTACT FORM =========================== // 
// Validation using JQuery Validation plugin

$(".working-form").validate({
  rules: {
    fname: {
      required: true, // makes the input required
      minlength: 2 // minimum length
    },
    email: {
      required: true,
      email: true // makes the input requires a valid email
    },
    subject: "required",
    message: {
      required: true,
      minlength: 2
    }
  },
  messages: { // Custom error messages
    fname: {
      required: "Please enter your full name (first and last)",
      minlength: "Please enter at least 2 characters"
    },
    email: {
      required: "We need your email address to respond back to you",
      minlength: "Please enter a valid email address"
    },
    subject: "Please enter a subject",
    message: {
      required: "Please specify how we can help you",
      minlength: "Please enter at least 2 characters"
    }
  }
});



// DONATION PAGE ============================ // 

// We will remove any amount selected (radio button) so the custom (input text) will be the active one
function customAmount() {
  const customAmountField = document.querySelector(".donations__form .donations__amount #custom"); // gets the input text

  // if there is no input text accepting the custom value, then the code following the below code won't be executed
  if (!customAmountField) return;

  customAmountField.addEventListener("focus", function () {

    // Getting all amount (radio buttons)
    const currentAmount = document.querySelectorAll(".donations__form .donations__amount input[type='radio']");

    for (var i = 0; i < currentAmount.length; i++) {
      if (currentAmount[i].checked) {
        // Remove the current checked
        currentAmount[i].checked = false;
      }
    }

  })
}
customAmount();

// Showing the credit card form
function showCardForm() {
  // Button for the credit card
  const creditCardSelector = document.querySelectorAll(".donations__form .donations__payment input[type='radio']");
  // Form for the credit card
  const creditCardForm = document.querySelector(".donations__form .credit-card-payment-form");
  // PayPal link
  const paypalLink = document.querySelector(".donations__form .paypal-link");
  // Credit card image (jQuery card plugin)
  const creditCardImage = document.querySelector(".donations .card-wrapper");

  for (var i = 0; i < creditCardSelector.length; i++) {

    creditCardSelector[i].addEventListener("click", function () {
      var values = this.id; // credit-card or paypal

      if (values === "credit-card") {
        creditCardForm.classList.add("active"); // shows donation form
        creditCardImage.classList.add("active"); // shows a credit card image generate by the JQuery card plugin (does not show on smaller devices such as phone and tablet in portrait mode)

        paypalLink.classList.remove("active"); // hides the PayPal option

      } else {
        creditCardForm.classList.remove("active"); // hides donation form
        creditCardImage.classList.remove("active"); // hides the credit card image generate by the JQuery card plugin

        paypalLink.classList.add("active"); // shows the PayPal option
      }
    })
  }

}
showCardForm();

// Credit card - Donation page
// Using JQuery Card plugin

var donations = new Card({
  // a selector or DOM element for the form where users will
  // be entering their information
  form: '.donations__form', // *required*
  // a selector or DOM element for the container
  // where you want the card to appear
  container: '.card-wrapper', // *required*

  formSelectors: {
    numberInput: 'input#card-number-payment', // optional — default input[name="number"]
    expiryInput: 'input#card-expiration-payment', // optional — default input[name="expiry"]
    cvcInput: 'input#card-ccv-payment', // optional — default input[name="cvc"]
    nameInput: 'input#name-on-card' // optional - defaults input[name="name"]
  },

  width: 200, // optional — default 350px
  formatting: true, // optional - default true

  // Strings for translation - optional
  messages: {
    validDate: 'valid\ndate', // optional - default 'valid\nthru'
    monthYear: 'mm/yyyy', // optional - default 'month/year'
  },

  // Default placeholders for rendered fields - optional
  placeholders: {
    number: '•••• •••• •••• ••••',
    name: 'Full Name',
    expiry: '••/••',
    cvc: '•••'
  },

  masks: {
    cardNumber: '•' // optional - mask card number
  },
});
