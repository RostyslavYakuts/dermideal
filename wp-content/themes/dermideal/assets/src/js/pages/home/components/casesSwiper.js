import Swiper from 'swiper';
import { Navigation, Pagination } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';
export const casesSwiper = ()=>{
    new Swiper('.cases-container-js', {
        modules: [Navigation, Pagination],
        direction: 'horizontal',
        effect: 'slide',
        loop: true,
        navigation: {
            nextEl: '.cases-swiper-button-next',
            prevEl: '.cases-swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true
        },

        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
                centeredSlides: true,
                spaceBetween: 20,
            },
            1200: {
                slidesPerView: 3,
                centeredSlides: true,
                spaceBetween: 30,
            }
        }
    });
}
