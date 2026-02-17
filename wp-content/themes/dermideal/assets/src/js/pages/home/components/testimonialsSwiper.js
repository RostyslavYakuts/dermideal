import Swiper from 'swiper';
import { Pagination } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';
export const testimonialsSwiper = ()=>{
    new Swiper('.testimonials-container-js', {
        modules: [Pagination],
        direction: 'horizontal',
        effect: 'slide',
        loop: true,
        slidesPerView: 1,
        pagination: {
            el: '.testimonials-swiper-pagination',
            clickable: true
        }
    });
}
