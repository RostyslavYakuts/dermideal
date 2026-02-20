import Swiper from 'swiper';
import { Pagination,Navigation } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/pagination';
import 'swiper/css/navigation';
export const stockSwiper = () => {
    const el = document.querySelector('.stock-swiper');
    if (!el) return;

    new Swiper(el, {
        modules: [Pagination, Navigation],
        slidesPerView: 1,
        spaceBetween: 0,
        pagination: {
            el: '.stock-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.stock-next',
            prevEl: '.stock-prev',
        },
    });
};
