import Swiper from 'swiper';
import { Navigation, Pagination } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';
export const newProductsSwiper = ()=>{
    new Swiper('.new-products-slider', {
        modules: [Navigation, Pagination],
        direction: 'horizontal',
        effect: 'slide',
        loop: true,
        navigation: {
            nextEl: '.new-products-next',
            prevEl: '.new-products-prev',
        },
        pagination: {
            el: '.new-products-pagination',
            clickable: true
        },

        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            480: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            991: {
                slidesPerView: 4,
                spaceBetween: 20,
            },
            1366: {
                slidesPerView: 5,
                spaceBetween: 30,
            }
        }
    });
}
