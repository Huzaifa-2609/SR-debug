function slideToggle(element, duration, expand) {
    if (element.clientHeight === 0) {
        slide(element, duration, expand, true);
    } else {
        slide(element, duration, expand);
    }
}

function slideUp(element, duration, expand) {
    slide(element, duration, expand);
}

function slideDown(element, duration, expand) {
    slide(element, duration, expand, true);
}

function slide(element, duration = 400, expand = false, shouldExpand = false) {
    element.style.overflow = "hidden";
    if (shouldExpand) {
        element.style.display = "block";
    }

    let computedStyle = window.getComputedStyle(element);
    let height = parseFloat(computedStyle.getPropertyValue("height"));
    let paddingTop = parseFloat(computedStyle.getPropertyValue("padding-top"));
    let paddingBottom = parseFloat(
        computedStyle.getPropertyValue("padding-bottom")
    );
    let marginTop = parseFloat(computedStyle.getPropertyValue("margin-top"));
    let marginBottom = parseFloat(
        computedStyle.getPropertyValue("margin-bottom")
    );

    let g = height / duration;
    let y = paddingTop / duration;
    let m = paddingBottom / duration;
    let u = marginTop / duration;
    let h = marginBottom / duration;

    let start;
    function slideAnimation(timestamp) {
        if (!start) start = timestamp;
        let progress = timestamp - start;

        if (expand) {
            element.style.height = g * progress + "px";
            element.style.paddingTop = y * progress + "px";
            element.style.paddingBottom = m * progress + "px";
            element.style.marginTop = u * progress + "px";
            element.style.marginBottom = h * progress + "px";
        } else {
            element.style.height = height - g * progress + "px";
            element.style.paddingTop = paddingTop - y * progress + "px";
            element.style.paddingBottom = paddingBottom - m * progress + "px";
            element.style.marginTop = marginTop - u * progress + "px";
            element.style.marginBottom = marginBottom - h * progress + "px";
        }

        if (progress < duration) {
            window.requestAnimationFrame(slideAnimation);
        } else {
            element.style.height = "";
            element.style.paddingTop = "";
            element.style.paddingBottom = "";
            element.style.marginTop = "";
            element.style.marginBottom = "";
            element.style.overflow = "";
            if (!shouldExpand) {
                element.style.display = "none";
            }
            if (typeof onComplete === "function") {
                onComplete();
            }
        }
    }

    window.requestAnimationFrame(slideAnimation);
}

document.querySelector(".burger-btn").addEventListener("click", (e) => {
    e.preventDefault();
    let navbar = document.querySelector(".main-navbar");
    slideToggle(navbar, 300);
});

window.onload = () => checkWindowSize();
window.addEventListener("resize", (event) => {
    checkWindowSize();
});

function checkWindowSize() {
    if (window.innerWidth < 1200) {
        listener();
    }
    if (window.innerWidth > 1200) {
        document.querySelector(".main-navbar").style.display = "";
    }
}

function listener() {
    let menuItems = document.querySelectorAll(".menu-item.has-sub");
    menuItems.forEach((menuItem) => {
        menuItem.querySelector(".menu-link").addEventListener("click", (e) => {
            e.preventDefault();
            let submenu = menuItem.querySelector(".submenu");
            submenu.classList.toggle("active");
        });
    });

    let submenuItems = document.querySelectorAll(".submenu-item.has-sub");
    submenuItems.forEach((submenuItem) => {
        submenuItem
            .querySelector(".submenu-link")
            .addEventListener("click", (e) => {
                e.preventDefault();
                submenuItem
                    .querySelector(".subsubmenu")
                    .classList.toggle("active");
            });
    });
}
