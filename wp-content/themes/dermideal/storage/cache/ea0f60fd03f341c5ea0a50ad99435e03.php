
<?php
/**
* @var array $data
**/
$modal_id = $data['id']
?>

<div id="<?php echo e($modal_id); ?>" class=" text-white contact-us-modal hidden font-medium justify-between rounded-2xl items-center gap-4 p-4 lgx:p-6 fixed top-[88px] right-[20px] z-20 w-full h-[102px] max-w-[300px] lgx:max-w-[400px]">
    <div class="flex items-center gap-2">
        <span id="result_message" class="max-w-[328px]"></span>
    </div>
    <button id="modal_close" class="close-contacts-modal absolute top-[19px] right-[19px]">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M15 1L1 15M15 15L1 1" stroke="white" stroke-width="2" stroke-linecap="round"/>
        </svg>
    </button>
</div><?php /**PATH /var/www/html/wp-content/themes/ids/App/Views/global/form-modal.blade.php ENDPATH**/ ?>