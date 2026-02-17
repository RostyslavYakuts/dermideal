import * as $ from 'jquery';
export const flipCard = ()=>{
    $(document).on("click", ".swiper-slide-active .flip-card-js", function () {
        $(this).toggleClass("show-back");
    });
}