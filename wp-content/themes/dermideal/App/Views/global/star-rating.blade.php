{{-- Star Rating --}}
@php
    /**
     * @var int $rating
     */
@endphp



<span class="custom-star-rating block mx-auto relative w-[100px] h-[30px] ">
    <span style="width: {{$rating}}%" class="rating-mark"></span>
</span>