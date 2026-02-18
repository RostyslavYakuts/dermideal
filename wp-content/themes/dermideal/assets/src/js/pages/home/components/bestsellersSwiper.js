import Swiper from 'swiper';
import { Navigation } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';

export const bestsellersSwiper = () => {
    const el = document.querySelector('.bestsellers-swiper');
    if (!el) return;

    new Swiper(el, {
        modules: [Navigation],
        slidesPerView: 1,
        spaceBetween: 20,
        navigation: {
            nextEl: '.bestsellers-button-next',
            prevEl: '.bestsellers-button-prev',
        }
    });
};
