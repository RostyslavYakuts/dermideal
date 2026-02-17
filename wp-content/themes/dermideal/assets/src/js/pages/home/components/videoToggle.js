import * as $ from 'jquery';

export const videoToggle = () => {
    const $btn = $('.video-play-btn-js');

    $btn.on('click', function () {
        const videoSrc = $(this).data('video-src');
        const $video = $('.video-js');
        $video.attr('src', videoSrc);
        $('.video-bg-js').addClass('opacity-0').removeClass('z-10');
        $video.removeClass('opacity-0').addClass('z-10');
        $video[0].play();
        $(this).fadeOut('slow');
    });
};