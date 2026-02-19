import Swiper from 'swiper';
import { Navigation, Pagination } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
export const bestsellersSwiper = () => {
    const el = document.querySelector('.bestsellers-swiper');
    if (!el) return;

    new Swiper(el, {
        modules: [Navigation, Pagination],
        slidesPerView: 1,
        spaceBetween: 20,
        navigation: {
            nextEl: '.bestsellers-button-next',
            prevEl: '.bestsellers-button-prev',
        },
        pagination: {
            el: '.bestsellers-pagination',
            clickable: true,
        },
    });
};
