import '@/scss/pages/home/home.scss';

import {testimonialsSwiper} from "@/js/pages/home/components/testimonialsSwiper";
import {advantagesSlider} from "@/js/pages/home/components/advantagesSlider";
import {bgSwiper} from "@/js/pages/home/components/bgSwiper";
import {bestsellersSwiper} from "@/js/pages/home/components/bestsellersSwiper";
import {AnimateNumbers} from "@/js/pages/home/components/AnimateNumbers";
import {brandsSlider} from "@/js/pages/home/components/brandsSlider";
import {stockSwiper} from "@/js/pages/home/components/stockSwiper";
import {newProductsSwiper} from "@/js/pages/home/components/newProductsSwiper";

bgSwiper();
stockSwiper();
bestsellersSwiper();
newProductsSwiper();
advantagesSlider();
testimonialsSwiper();
AnimateNumbers();
brandsSlider();
