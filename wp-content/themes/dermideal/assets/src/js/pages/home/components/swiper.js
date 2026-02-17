import Swiper from 'swiper';
import { Navigation } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';
export const swiper = () => {
    const slider = document.querySelector('.certificates-swiper');
    if (!slider) return;

    new Swiper(slider, {
        modules: [Navigation],
        slidesPerView: 1,
        spaceBetween: 16,
        loop: false,
        navigation: {
            nextEl: '.cert-next',
            prevEl: '.cert-prev',
        },
        breakpoints: {
            640: { slidesPerView: 2, spaceBetween: 16 },
            1024: { slidesPerView: 3, spaceBetween: 20 },
            1280: { slidesPerView: 4, spaceBetween: 24 },
        },
        pagination: false,
    });


    /* ------------------ SERVICES (mobile only) ------------------ */
    const servicesEl = document.querySelector('.services-mobile');
    let servicesSwiper = null;

    const initServicesSlider = () => {

        if (window.innerWidth < 768 && !servicesSwiper && servicesEl) {
            servicesSwiper = new Swiper(servicesEl, {
                modules: [Navigation],
                slidesPerView: 1.2,
                spaceBetween: 16,
                navigation: {
                    nextEl: '.serv-next',
                    prevEl: '.serv-prev',
                }

            });
        }

        if (window.innerWidth >= 768 && servicesSwiper) {
            servicesSwiper.destroy();
            servicesSwiper = null;
        }
    };

    window.addEventListener('load', initServicesSlider);
    window.addEventListener('resize', initServicesSlider);



};
