@extends('layouts.main')

@section('content')
<section id="profile">
{{--    <div class="user">--}}
{{--        <p class="title phone">+ 7 777 777 77 77</p>--}}
{{--        <p class="name">Константинопольский Константин</p>--}}
{{--        <button class="btn-danger">Погнали!</button>--}}
{{--    </div>--}}
{{--    <div class="prizes">--}}
{{--        <p class="title ">Торопись! В игре осталось:</p>--}}
{{--        <div class="profile_content">--}}
{{--            <div class="prizes prize_1">--}}
{{--                <div class="swiper-btn-next">--}}
{{--                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15" height="25" viewBox="0 0 15 25">--}}
{{--                        <image id="next" width="15" height="25" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAZCAYAAADuWXTMAAABD0lEQVQ4jZXUsUtCURTH8W9PGiR4qw2NgdDS0BBJEDhkgThUuwT1D/T3BKJzOIigNQgiGA5OTYF/hYuDSxy5Fx7Xe273nuU97j2f3xvevefg8fzkFOgBV8Av8ArMiKgM6BooVQU+gXosrjlrZWAYEyB45Vm3AW7wHn4BNkrACLgM4SnQVAJy4EsLyMxzAjwA25SArPA+Bp5SAjKnaZAS4OKkAB+ODbjQcExAp3R2nAf87qwfAdeevUroy1It4E3Z+wlhgR/AoWdvDTxr+D94Cyx9OAYu8PyqaOjiuxRYxHLx+ynQ4htz8csp0OJ3Bcr9vtegxTI9fVAGxFyDFrsNFsqACJbgNvBtuuQsN2IgwB/wb0HrSehy+QAAAABJRU5ErkJggg=="/>--}}
{{--                    </svg>--}}
{{--                </div>--}}
{{--                <div class="swiper-btn-prev">--}}
{{--                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="15" height="25" viewBox="0 0 15 25">--}}
{{--                        <image id="next" width="15" height="25" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA8AAAAZCAYAAADuWXTMAAABD0lEQVQ4jZXUsUtCURTH8W9PGiR4qw2NgdDS0BBJEDhkgThUuwT1D/T3BKJzOIigNQgiGA5OTYF/hYuDSxy5Fx7Xe273nuU97j2f3xvevefg8fzkFOgBV8Av8ArMiKgM6BooVQU+gXosrjlrZWAYEyB45Vm3AW7wHn4BNkrACLgM4SnQVAJy4EsLyMxzAjwA25SArPA+Bp5SAjKnaZAS4OKkAB+ODbjQcExAp3R2nAf87qwfAdeevUroy1It4E3Z+wlhgR/AoWdvDTxr+D94Cyx9OAYu8PyqaOjiuxRYxHLx+ynQ4htz8csp0OJ3Bcr9vtegxTI9fVAGxFyDFrsNFsqACJbgNvBtuuQsN2IgwB/wb0HrSehy+QAAAABJRU5ErkJggg=="/>--}}
{{--                    </svg>--}}
{{--                </div>--}}
{{--                <p class="amount-1">--}}
{{--                    <img src="/assets/icons/animations/yellow_anim.png" alt="" class="yellow_anim"/>--}}
{{--                    <span class="size">5880</span><span> желтых <br/>призов</span>--}}
{{--                </p>--}}
{{--                <img src="/assets/prize1.png" alt="prize1" class="prize_img prize_1"/>--}}
{{--                <p class="prize_name">Эл.сертификат IVI 3 месяца</p>--}}
{{--            </div>--}}
{{--            <div class="prizes prize_2">--}}
{{--                <p class="amount-2">--}}
{{--                    <span class="size">7</span><span> красных <br/>m-призов</span>--}}
{{--                    <img src="/assets/icons/animations/red_anim.png" alt="" class="red_anim"/>--}}
{{--                </p>--}}
{{--                <img src="/assets/prize2.png" alt="prize2" class="prize_img prize_2"/>--}}
{{--                <p class="prize_name">Смартфон или наушники </p>--}}
{{--            </div>--}}
{{--            <div class="prizes prize_3">--}}
{{--                <p class="amount-2">--}}
{{--                    <img src="/assets/icons/animations/red_anim.png" alt="" class="red_anim"/>--}}
{{--                    <span class="size">7</span><span> красных <br/>s-призов</span>--}}
{{--                </p>--}}
{{--                <div class="change_prize_VR">--}}
{{--                    <img src="/assets/prize3.png" alt="prize3" class="prize_img prize_3"/>--}}
{{--                    <p class="prize_name_VR">Радужные глаза* </p>--}}
{{--                    <span class="product product_VR">*Playstation VR</span>--}}
{{--                </div><div class="change_prize_bober">--}}
{{--                    <img src="/assets/prize3_2.png" alt="prize3" class="prize_img prize_3"/>--}}
{{--                    <p class="prize_name_bober">Аудиобобер* </p>--}}
{{--                    <span class="product product_bober">*Беспроводная колонка</span>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}


    <div class="wrapper">
        <div class="user_2">
            <p class="title">+7 777 777 77 77</p>
            <p class="name">Константинопольский Константин</p>
        </div>
        <div class="profile_table">
            <div class="profile_table_head">
                <div>Дата</div>
                <div>Время</div>
                <div>Приз</div>
            </div>
            <div class="rows">
                <img src="/assets/icons/animations/yellow_static.png" alt="" class="yellow_static"/>
                    <p class="day">18.07.2021</p>
                    <p class="time">23:53</p>
                    <p class="prize">1 месяц подписки ivi</p>
                    <p class="info">XXX XXX XXX XXX <a href="#">Копировать промокод</a></p>
            </div>
            <div class="rows">
                <img src="/assets/icons/animations/yellow_static.png" alt="" class="yellow_static"/>
                    <p class="day">18.07.2021</p>
                    <p class="time">23:53</p>
                    <p class="prize">M&M’s® 240 г</p>
                    <p class="info"><a href="#">заполнить форму доставки</a></p>
            </div>
            <div class="rows">
                <img src="/assets/icons/animations/yellow_static.png" alt="" class="yellow_static"/>
                    <p class="day">17.07.2021</p>
                    <p class="time">23:53</p>
                    <p class="prize">Беспроводная колонка</p>
                    <p class="info">С тобой свяжутся в течение 14 дней с момента выигрыша</a></p>
            </div>
        </div>
        <button class="btn-danger">Погнали!</button>
            <p class="title ">Торопись! В игре осталось:</p>
            <div class="content-2">
                <div class="prizes">
                    <p class="amount-1">
                        <img src="/assets/icons/animations/yellow_anim.png" alt="" class="yellow_anim"/>
                        <span class="size">5880</span><span> желтых <br/>призов</span>
                    </p>
                </div>
                <div class="prizes">
                    <p class="amount-2">
                        <span class="size">7</span><span> красных <br/>m-призов</span>
                        <img src="/assets/icons/animations/red_anim.png" alt="" class="red_anim"/>
                    </p>
                </div>
                <div class="prizes prize_3">
                    <p class="amount-2">
                        <img src="/assets/icons/animations/red_anim.png" alt="" class="red_anim"/>
                        <span class="size">7</span><span> красных <br/>s-призов</span>
                    </p>
                </div>
            </div>
    </div>
</section>
@endsection
