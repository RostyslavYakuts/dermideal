import * as $ from 'jquery';

export const scrollToTop = ()=>{
    $('.scroll-to-top-js').on('click',function(){
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });
}