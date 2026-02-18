import Swiper  from 'swiper';
import { Autoplay, EffectFade } from 'swiper/modules';
import 'swiper/css';
import 'swiper/css/effect-fade';
Swiper.use([Autoplay, EffectFade]);
export const bgSwiper = ()=>{
    const slider = document.querySelector('.bg-slider');
    if (!slider) return;
    new Swiper(slider, {
        loop: true,
        speed: 2000,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        effect: 'fade',
        fadeEffect: { crossFade: true },
    });
}
