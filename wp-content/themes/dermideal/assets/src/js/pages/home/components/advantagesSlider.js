import Swiper from 'swiper';
import { Navigation, Pagination } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
export const advantagesSlider = () => {
    const slider = document.querySelector('.advantages-swiper');
    if (!slider) return;

    new Swiper(slider, {
        modules: [Navigation, Pagination],
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        navigation: {
            nextEl: '.adv-next',
            prevEl: '.adv-prev',
        },
        breakpoints: {
            640: { slidesPerView: 1, spaceBetween: 0 },
            1024: { slidesPerView: 2, spaceBetween: 20 },
            1280: { slidesPerView: 3, spaceBetween: 20 },
        },
        pagination: {
            el: '.adv-pagination',
            clickable: true,
        },
    });

};
