import "./bootstrap";
import "fslightbox";
import "./lightbox.min";
// import Swiper from "swiper";
// import "swiper/css";
import Alpine from "alpinejs";
window.Alpine = Alpine;
Alpine.start();
var swiper = new Swiper(".heroSwiper", {
    spaceBetween: 30,
    effect: "fade",
    lazy: true,
    loop: true,
    autoplay: {
        delay: 3500,
        disableOnInteraction: false,
    },
    rewind: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    scrollbar: {
        el: ".swiper-scrollbar",
    },
});
fsLightbox.props.customToolbarButtons = [
    {
        viewBox: "0 0 16 16",
        d: "M0 14h16v2h-16v-2z M8 13l5-5h-3v-8h-4v8h-3z",
        width: "16px",
        height: "16px",
        title: "Download",
        onClick: function (instance) {
            var URL = instance.props.sources[instance.stageIndexes.current];
            var a = document.createElement("a");
            a.href = URL;
            a.setAttribute("download", "");
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
        },
    },
];
import.meta.glob(["../images/**", "../fonts/**"]);
document.addEventListener("DOMContentLoaded", function () {
    const header = document.getElementById("site-header");

    window.addEventListener("scroll", function () {
        if (window.scrollY > 50) {
            header.classList.add("sticky-header");
        } else {
            header.classList.remove("sticky-header");
        }
    });
});
