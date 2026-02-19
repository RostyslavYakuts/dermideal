import Swiper from 'swiper';
import { Navigation,Pagination } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
export const testimonialsSwiper = ()=>{
    new Swiper('.testimonials-container-js', {
        modules: [Navigation,Pagination],
        direction: 'horizontal',
        effect: 'slide',
        loop: true,
        slidesPerView: 1,
        navigation: {
            nextEl: '.testimonials-next',
            prevEl: '.testimonials-prev',
        },
        pagination: {
            el: '.testimonials-swiper-pagination',
            clickable: true
        }
    });
}
