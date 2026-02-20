
<?php
    /**
    * @var $data
    */

    $location = $data['location'] ?? '';
    if($location === 'top_header'){
        $color_class = 'location-top-header  text-white hover:bg-brand hover:text-white';
    }else{
        $color_class = '';
    }
    $text = $data['text'] ?? '';
    if(!$text){
         $button_text = $data['button_title'] ?? '';
         $button_text = $button_text ?: '';
    }else{
        $button_text = $text;
    }

    $extra_classes = $data['tw_classes'] ?? '';
    $class = 'class="'. $color_class . ' flex justify-center items-center btn no-underline text-center font-medium
    cursor-pointer rounded-full max-w-[264px] ' . $extra_classes . '"';
    $tag = $data['button_tag'] ?? 'a';
    $href = $data['button_link'] ?? '#';
    $href_attr = 'href="'.$href.'"';
    if($tag !== 'a'){
        $href_attr = '';
    }
?>

<<?php echo e($tag); ?> <?php echo $href_attr; ?> <?php echo $class; ?>>
    <?php echo $button_text; ?>

</<?php echo e($tag); ?>><?php /**PATH /var/www/html/wp-content/themes/dermideal/App/Views/global/brand-btn.blade.php ENDPATH**/ ?>