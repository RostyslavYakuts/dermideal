import Swiper from 'swiper';
import { Pagination } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/pagination';
export const stockSwiper = () => {
    const el = document.querySelector('.stock-swiper');
    if (!el) return;

    new Swiper(el, {
        modules: [Pagination],
        slidesPerView: 1,
        spaceBetween: 0,
        pagination: {
            el: '.stock-pagination',
            clickable: true,
        },
    });
};
