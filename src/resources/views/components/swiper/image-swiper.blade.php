<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

<div class="w-full h-96 swiper-container">
    <div class="swiper-wrapper">
        {{$slot}}
    </div>
    <!-- 如果需要分页器 -->
{{--    <div class="swiper-pagination"></div>--}}
<!-- 如果需要导航按钮 -->
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>

    <!-- 如果需要滚动条 -->
    <div class="swiper-scrollbar"></div>
</div>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>
    var mySwiper = new Swiper('.swiper-container', {
        // direction: 'vertical', // 垂直切换选项
        loop: true,
        autoplay: {{$autoplay??'true'}},//等同于以下设置
        // 如果需要分页器
        pagination: {
            el: '.swiper-pagination',
        },

        // 如果需要前进后退按钮
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        // 如果需要滚动条
        scrollbar: {
            el: '.swiper-scrollbar',
        },
    })
</script>