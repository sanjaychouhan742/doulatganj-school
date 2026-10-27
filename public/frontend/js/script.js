console.log("School script.js successfully loaded!");

/* ================= SLIDER ================= */

const slider = document.querySelector('.slider');
const slides = document.querySelectorAll('.slide');
const nextBtn = document.querySelector('.next-btn');
const preBtn = document.querySelector('.pre-btn');
const paginationContainer = document.querySelector('.pagination-btns');

if (slider && slides.length > 0 && paginationContainer) {
    let currentIndex = 0;
    let sliderInterval = null;

    paginationContainer.innerHTML = '';

    slides.forEach((slide, index) => {
        const btn = document.createElement('button');
        btn.type = 'button';
        btn.className = 'pagination-btn';
        btn.setAttribute('aria-label', `Slide ${index + 1}`);

        if (index === 0) {
            btn.classList.add('active');
        }

        paginationContainer.appendChild(btn);

        btn.addEventListener('click', () => {
            currentIndex = index;
            updateSlide();
            startSlide();
        });
    });

    const paginationBtns =
        paginationContainer.querySelectorAll('.pagination-btn');

    function updateSlide() {
        slider.style.transform =
            `translateX(-${currentIndex * 100}%)`;

        paginationBtns.forEach((btn, index) => {
            btn.classList.toggle('active', index === currentIndex);
        });
    }

    function startSlide() {
        stopSlide();

        if (slides.length > 1) {
            sliderInterval = setInterval(() => {
                currentIndex = (currentIndex + 1) % slides.length;
                updateSlide();
            }, 3000);
        }
    }

    function stopSlide() {
        if (sliderInterval !== null) {
            clearInterval(sliderInterval);
            sliderInterval = null;
        }
    }

    if (nextBtn) {
        nextBtn.addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % slides.length;
            updateSlide();
        });
    }

    if (preBtn) {
        preBtn.addEventListener('click', () => {
            currentIndex =
                (currentIndex - 1 + slides.length) % slides.length;
            updateSlide();
        });
    }

    [slider, nextBtn, preBtn].forEach(element => {
        if (!element) return;

        element.addEventListener('mouseenter', stopSlide);
        element.addEventListener('mouseleave', startSlide);
    });

    startSlide();
}

/* ================= END SLIDER ================= */


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


/* ================= CONTACT MODAL ================= */

if (contactModal) {
    if (openContactModal) {
        openContactModal.addEventListener('click', () => {
            contactModal.classList.add('active');
        });
    }

    if (closeContactModal) {
        closeContactModal.addEventListener('click', () => {
            contactModal.classList.remove('active');
        });
    }

    contactModal.addEventListener('click', (event) => {
        if (event.target === contactModal) {
            contactModal.classList.remove('active');
        }
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape') {
            contactModal.classList.remove('active');
        }
    });
}


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

/* Student Search */

document.getElementById("studentSearch").addEventListener("keyup", function() {

    let search = this.value.toLowerCase();

    document.querySelectorAll(".student-row").forEach(function(row) {

        let name = row.getAttribute("data-name").toLowerCase();

        if (name.includes(search)) {
            row.style.display = "";
        } else {
            row.style.display = "none";
        }

    });

});


/* Student Detail */

function showStudent(name, roll, percentage) {

    document.getElementById("studentName").innerText = name;
    document.getElementById("studentRoll").innerText = roll;
    document.getElementById("studentPercentage").innerText = percentage;

    let initials = name
        .split(" ")
        .map(word => word.charAt(0))
        .join("")
        .substring(0, 2);

    document.getElementById("profileAvatar").innerText = initials;

    document.getElementById("studentModal").classList.add("show");

}


function closeStudent() {

    document.getElementById("studentModal").classList.remove("show");

}


/* Close when click outside */

document.getElementById("studentModal").addEventListener("click", function(e) {

    if (e.target === this) {
        closeStudent();
    }

});