console.log("School script.js successfully loaded!");
let slider = document.querySelector('.slider');
let slides = document.querySelectorAll('.slide');
let nextBtn = document.querySelector('.next-btn');
let preBtn = document.querySelector('.pre-btn');
let totalSides = slides.length;
let sliderInterval;

let currentIndex = 0;

showPaginationBtn();
updateSlide();
startSlide();
setupPaginationEvents();
setupSliderHoverEvents();

function showSlide() {
    slider.style.transform = `translateX(-${currentIndex * 100}%)`;
}

function updateSlide() {
    showSlide();
    setPaginationBrColor();
}

nextBtn.addEventListener('click', () => {
    (currentIndex < totalSides - 1) ? currentIndex++ : currentIndex = 0;
    updateSlide();
});

preBtn.addEventListener('click', () => {
    (currentIndex > 0) ? currentIndex-- : currentIndex = totalSides - 1;
    updateSlide();
});

function startSlide() {
    sliderInterval = setInterval(() => {
        (currentIndex < totalSides - 1) ? currentIndex++ : currentIndex = 0;
        updateSlide();
    }, 3000);
}

function stopSlide() {
    clearInterval(sliderInterval);
}

// pagination button js

function showPaginationBtn() {
    let paginationContainerElm = document.querySelector('.pagination-btns');

    slides.forEach(() => {
        let div = document.createElement('div');
        div.classList.add('pagination-btn');
        paginationContainerElm.appendChild(div);
    });
}

function setPaginationBrColor() {
    let paginationBtns = document.querySelectorAll('.pagination-btn');
    paginationBtns.forEach((paginationBtn) => {
        paginationBtn.classList.remove('active');
    });
    paginationBtns[currentIndex].classList.add('active')
}

function setupPaginationEvents() {
    let paginationBtns = document.querySelectorAll('.pagination-btn');
    paginationBtns.forEach((btn, index) => {
        btn.addEventListener('mouseenter', stopSlide);
        btn.addEventListener('mouseleave', startSlide);
        btn.addEventListener('click', () => {
            currentIndex = index;
            updateSlide();
        });
    });

}

function setupSliderHoverEvents() {
    const sliderControls = [slider, preBtn, nextBtn];

    sliderControls.forEach(element => {
        element.addEventListener('mouseenter', stopSlide);
        element.addEventListener('mouseleave', startSlide);
    });
}

// side bar js start

let mobileManuBtn = document.querySelector('.mobile-manu-btn');
let sidebarCloseBtn = document.querySelector('.sidebar-close-btn');
let mobileSidebarElm = document.querySelector('.mobile-nav-container');
if (mobileManuBtn && mobileSidebarElm) {
    mobileManuBtn.addEventListener('click', () => {
        mobileSidebarElm.style.transform = 'translateX(0)';
    });
}

if (sidebarCloseBtn && mobileSidebarElm) {
    sidebarCloseBtn.addEventListener('click', () => {
        mobileSidebarElm.style.transform = 'translateX(125%)';
    });
}

// portfolio image slide js start

let portfolioCards = document.querySelectorAll('.portfolio-card');

portfolioCards.forEach((card) => {

    let imageWraper = card.querySelector('.portfolio-image-wrapper');
    let imageContainer = card.querySelector('.portfolio-image-container');
    let images = card.querySelectorAll('.portfolio-image');
    let paginationBtnElm = card.querySelector('.portfolio-pagination');
    let totalImageNos = images.length;
    let interval;

    let currentIndex = 0;
    startSlide();

    function showSlide() {
        imageContainer.style.transform = `translateX(-${currentIndex * 100}%)`;
    };

    function setPaginationBtnBrColor() {

        paginationBtns.forEach((btn, index) => {
            btn.classList.toggle('active', index === currentIndex);
        });

    }

    images.forEach((image, index) => {
        let div = document.createElement('div');
        div.classList.add('portfolio-pagination-btn');
        if (index === 0) {
            div.classList.add('active');
        }
        paginationBtnElm.appendChild(div);
    });

    let paginationBtns = card.querySelectorAll('.portfolio-pagination-btn');


    function stopSlide() {
        clearInterval(interval);
    }

    function startSlide() {
        interval = setInterval(() => {
            currentIndex < totalImageNos - 1 ? currentIndex++ : currentIndex = 0;
            showSlide();
            setPaginationBtnBrColor();
        }, 3000);
    }

    paginationBtns.forEach((btn, index) => {
        btn.addEventListener('click', () => {
            currentIndex = index;
            showSlide();
            setPaginationBtnBrColor();
        });

        btn.addEventListener('mouseover', stopSlide);
        btn.addEventListener('mouseout', startSlide);
    })

    imageWraper.addEventListener('mouseover', stopSlide);
    imageWraper.addEventListener('mouseout', startSlide);
});

// contact form js start

const contactModal = document.getElementById("contactModal");

const openContactModal =
    document.getElementById("openContactModal");

const closeContactModal =
    document.getElementById("closeContactModal");


// Open Modal

openContactModal.addEventListener("click", function() {
    contactModal.classList.add("active");

});


// Close Modal

closeContactModal.addEventListener("click", function() {

    contactModal.classList.remove("active");

});


// Close when clicking outside

contactModal.addEventListener("click", function(e) {

    if (e.target === contactModal) {

        contactModal.classList.remove("active");

    }

});


// Close with ESC

document.addEventListener("keydown", function(e) {

    if (e.key === "Escape") {

        contactModal.classList.remove("active");

    }

});

// end of contact form js

/* =====================================================
                    MENU DROPDOWN
===================================================== */

const menuBtn = document.querySelector('.menu-btn');
const menuDropdown = document.querySelector('.menu-dropdown');


/* ---------- OPEN / CLOSE DROPDOWN ---------- */

if (menuBtn && menuDropdown) {

    menuBtn.addEventListener('click', (event) => {

        event.stopPropagation();

        menuDropdown.classList.toggle('active');

    });

}


/* ---------- CLOSE WHEN CLICK OUTSIDE ---------- */

document.addEventListener('click', (event) => {

    if (
        menuDropdown &&
        menuBtn &&
        !menuDropdown.contains(event.target) &&
        !menuBtn.contains(event.target)
    ) {

        menuDropdown.classList.remove('active');

    }

});