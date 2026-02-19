import Swiper from 'swiper';
import { Pagination } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/pagination';
export const brandsSlider = () => {
    const slider = document.querySelector('.brands-swiper');
    if (!slider) return;

    new Swiper(slider, {
        modules: [Pagination],
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        breakpoints: {
            640: { slidesPerView: 1, spaceBetween: 0 },
            768: { slidesPerView: 2, spaceBetween: 20 },
            1024: { slidesPerView: 3, spaceBetween: 20 },
            1280: { slidesPerView: 4, spaceBetween: 20 },
            1366: { slidesPerView: 5, spaceBetween: 20 },
        },
        pagination: {
            el: '.brands-pagination',
            clickable: true,
        },
    });

};
