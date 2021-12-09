@extends('layouts.main')

@section('content')
  <section id="hero">
      <div class="wrapper">
          <h2 class="title">СМОТРИ И ЛОВИ M&M’s®!</h2>
          <button class="btn btn-danger">ПОГНАЛИ!</button>
      </div>
  </section>

  <section id="prize">
      <div class="container">
      <h2 class="title">Торопись! В игре осталось:</h2>
      <div class="content">
          <div class="prizes prizes_1">
              <p class="amount-1">
                  <img src="/assets/icons/animations/yellow_anim.png" alt="" class="yellow_anim"/>
                  <span class="size">5880</span><span> желтых <br/>призов</span>
              </p>
              <img src="/assets/prize1.png" alt="prize1" class="prize_img prize_1"/>
              <p class="prize_name">Эл.сертификат IVI 3 месяца</p>
          </div>
          <div class="prizes">
              <p class="amount-2">
                  <span class="size">7</span><span> красных <br/>m-призов</span>
                  <img src="/assets/icons/animations/red_anim.png" alt="" class="red_anim"/>
              </p>
              <img src="/assets/prize2.png" alt="prize2" class="prize_img prize_2"/>
              <p class="prize_name">Смартфон или наушники </p>
          </div>
          <div class="prizes prize_3">
              <p class="amount-2">
                  <img src="/assets/icons/animations/red_anim.png" alt="" class="red_anim"/>
                  <span class="size">7</span><span> красных <br/>s-призов</span>
              </p>
              <div class="change_prize_VR">
                  <img src="/assets/prize3.png" alt="prize3" class="prize_img prize_3"/>
                  <p class="prize_name_3">Радужные глаза* </p>
                  <span class="product">*Playstation VR</span>
              </div><div class="change_prize_bober">
                  <img src="/assets/prize3_2.png" alt="prize3" class="prize_img prize_3"/>
                  <p class="prize_name_3">Аудиобобер* </p>
                  <span class="product">*Беспроводная колонка</span>
              </div>
          </div>
      </div>
    </div>
  </section>

  <section id="share">
      <img src="/assets/sharebg.png" alt="" class="sharebg"/>
    <div class="container">
      <h2 class='title'>Хочу призов! что делать? </h2>
      <div class="info">
        <div class="content">
          <img src="/assets/share1.png" alt="share1" class="share_img_1"/>
          <p class="description">
              ЖМИ «ПОГНАЛИ», РЕГИСТРИРУЙСЯ И ЛОВИ!
          </p>
        </div>
        <div class="content">
          <img src="/assets/share2.png" alt="share2" class="share_img_2"/>
          <img src="/assets/green_phone_c.png" alt="" class="green_phone_candy"/>
          <img src="/assets/blue_phone_c.png" alt="" class="blue_phone_candy"/>
          <img src="/assets/icons/animations/yellow_static.png" alt="" class="anim_phone_candy"/>
          <img src="/assets/gift.png" alt="" class="gift"/>
            <p class="description description-2">
                НЕ УПУСкай ЖЕЛТЫЕ ПРИЗОВЫЕ КОНФЕТЫ НА 2 И 3 УРОВНЯХ
            </p>
        </div>
        <div class="content">
          <img src="/assets/icons/animations/red_static.png" alt="" class="red_static">
          <img src="/assets/icons/animations/yellow_static.png" alt="" class="yellow_static"/>
          <img src="/assets/share3.png" alt="share1" class="share_img_3"/>
            <p class="description description-3">
                ХОЧЕШЬ СУПЕРПРИЗОВ? ВЫБИРАЙ S ИЛИ M, ПРОЙДИ КОНТРОЛЬ И ЛОВИ!
            </p>
        </div>
      </div>
      <div class="block">
      <div class="scan">
          <img src="/assets/scan_yellow.png" alt="scan1" class="scan_img"/>
          <img src="/assets/arrow_left.png" alt="arrow_left" class="arrow_left"/>
          <p class="attention"><b>внимание:</b> ДЛЯ ДОСТУПА НА 3 УРОВЕНЬ КУПИ M&M’s® или SKITTLES® И пройди контроль</p>
          <img src="/assets/scan_red.png" alt="scan2" class="scan_img"/>
          <img src="/assets/arrow_right.png" alt="arrow_left" class="arrow_right"/>
      </div>
      <div class="info_2">
          <div class="content">
            <img src="/assets/share4.png" alt="share4" class="share_img_4"/>
              <p class="description description-4">
                  увидел красный призовой M&M’s® ? Скорей лови, это смартфон или наушники!
              </p>
          </div>
          <div class="content">
            <img src="/assets/share5.png" alt="share5" class="share_img_5"/>
            <img src="/assets/icons/animations/share5_1.png" alt="" class="share5_1"/>
            <img src="/assets/icons/animations/share5_2.png" alt="" class="share5_2"/>
            <img src="/assets/icons/animations/share5_3.png" alt="" class="share5_3"/>
            <img src="/assets/icons/animations/share5_4.png" alt="" class="share5_4"/>

            <p class="description description-5">
              КРАСНЫЙ призовой SKITTLES® – ЭТО СУПЕРПРИЗ! ЛОВИ, ВНУТРИ АУДИБОБЕР* ИЛИ РАДУЖНЫЕ ГЛАЗА**!
            </p>
          </div>
      </div>
      </div>
      <button class="btn btn-danger">ПОГНАЛИ!</button>
    </div>
  </section>

  <section id="winners">
      <img src="/assets/winnersbg.png" alt="" class="winnersbg"/>
    <div class="container">
        <p class="winners_title">Победители</p>
        <form class="form form_search">
            <div class="form-group">
                <input type=tel name="phone" placeholder="+7 XXX XXX XX XX" inputmode="text"/>
                <div>
                    <button type="submit" class="btn">
                        <div class="icon search"></div>
                    </button>
                </div>
            </div>
        </form>
        <div class="table">
            <div class="table_nav">
                <div class="winners yellow" id="table_yellow">
                    <img src="/assets/icons/animations/yellow_anim.png" alt="" class="yellow_anim"/>
                    Желтые призы
                </div>
                <div class="winners red active" id="table_red" >
                    <img src="/assets/icons/animations/red_anim.png" alt="" class="red_anim"/>
                    Красные призы
                </div>
            </div>
            <div class="table_head">
                <div>Дата</div>
                <div>Телефон</div>
                <div>Имя</div>
                <div>Приз</div>
            </div>
            <div class="table_data">
                <div class="table_body">
                    <div class="rows">
                        <div>18.07.2020</div>
                        <div>+7 701 xxx xx xx</div>
                        <div>Очень длинное имя</div>
                        <div>1 месяц подписки ivi</div>
                    </div>
                    <div class="rows">
                        <div>18.07.2020</div>
                        <div>+7 701 xxx xx xx</div>
                        <div>Очень длинное имя</div>
                        <div>1 месяц подписки ivi</div>
                    </div>
                    <div class="rows">
                        <div>18.07.2020</div>
                        <div>+7 701 xxx xx xx</div>
                        <div>Очень длинное имя</div>
                        <div>1 месяц подписки ivi</div>
                    </div>
                    <div class="rows">
                        <div>18.07.2020</div>
                        <div>+7 701 xxx xx xx</div>
                        <div>Очень длинное имя</div>
                        <div>1 месяц подписки ivi</div>
                    </div>
                    <div class="rows">
                        <div>18.07.2020</div>
                        <div>+7 701 xxx xx xx</div>
                        <div>Очень длинное имя</div>
                        <div>1 месяц подписки ivi</div>
                    </div>
                    <div class="rows">
                        <div>18.07.2020</div>
                        <div>+7 701 xxx xx xx</div>
                        <div>Очень длинное имя</div>
                        <div>1 месяц подписки ivi</div>
                    </div>
                    <div class="rows">
                        <div>18.07.2020</div>
                        <div>+7 701 xxx xx xx</div>
                        <div>Очень длинное имя</div>
                        <div>1 месяц подписки ivi</div>
                    </div>
                    <div class="rows">
                        <div>18.07.2020</div>
                        <div>+7 701 xxx xx xx</div>
                        <div>Очень длинное имя</div>
                        <div>1 месяц подписки ivi</div>
                    </div>
                    <div class="rows">
                        <div>18.07.2020</div>
                        <div>+7 701 xxx xx xx</div>
                        <div>Очень длинное имя</div>
                        <div>1 месяц подписки ivi</div>
                    </div>
                    <div class="rows">
                        <div>18.07.2020</div>
                        <div>+7 701 xxx xx xx</div>
                        <div>Очень длинное имя</div>
                        <div>1 месяц подписки ivi</div>
                    </div>
                </div>
                <img src="/assets/yellow_winners_img.png" alt="yellow" class="yellow_img"/>
            </div>
                <div class="pagination">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="15px" height="16px">
                        <path fill-rule="evenodd"  fill="rgb(83, 47, 28)"
                              d="M5.639,7.867 C5.639,7.746 5.698,7.609 5.786,7.518 L12.625,0.457 C12.713,0.366 12.845,0.305 12.963,0.305 C13.080,0.305 13.212,0.366 13.300,0.457 L14.034,1.215 C14.122,1.306 14.181,1.442 14.181,1.564 C14.181,1.685 14.122,1.821 14.034,1.912 L8.266,7.867 L14.034,13.822 C14.122,13.913 14.181,14.049 14.181,14.170 C14.181,14.292 14.122,14.428 14.034,14.519 L13.300,15.277 C13.212,15.367 13.080,15.428 12.963,15.428 C12.845,15.428 12.713,15.367 12.625,15.277 L5.786,8.216 C5.698,8.124 5.639,7.988 5.639,7.867 ZM0.004,7.867 C0.004,7.746 0.062,7.609 0.151,7.518 L6.989,0.457 C7.078,0.366 7.210,0.305 7.327,0.305 C7.445,0.305 7.577,0.366 7.665,0.457 L8.398,1.215 C8.486,1.306 8.545,1.442 8.545,1.564 C8.545,1.685 8.486,1.821 8.398,1.912 L2.631,7.867 L8.398,13.822 C8.486,13.913 8.545,14.049 8.545,14.170 C8.545,14.292 8.486,14.428 8.398,14.519 L7.665,15.277 C7.577,15.367 7.445,15.428 7.327,15.428 C7.210,15.428 7.078,15.367 6.989,15.277 L0.151,8.216 C0.062,8.124 0.004,7.988 0.004,7.867 Z"/>
                    </svg>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="10px" height="16px">
                        <path fill-rule="evenodd"  fill="rgb(83, 47, 28)"
                              d="M0.901,7.867 C0.901,7.746 0.959,7.609 1.047,7.518 L7.887,0.457 C7.975,0.366 8.107,0.305 8.224,0.305 C8.341,0.305 8.474,0.366 8.562,0.457 L9.295,1.215 C9.383,1.306 9.442,1.442 9.442,1.564 C9.442,1.685 9.383,1.821 9.295,1.912 L3.528,7.867 L9.295,13.822 C9.383,13.913 9.442,14.049 9.442,14.170 C9.442,14.307 9.383,14.428 9.295,14.519 L8.562,15.277 C8.474,15.367 8.341,15.428 8.224,15.428 C8.107,15.428 7.975,15.367 7.887,15.277 L1.047,8.216 C0.959,8.124 0.901,7.988 0.901,7.867 Z"/>
                    </svg>
                    <a href="#" onclick="return false">1</a>
                    <a href="#" onclick="return false">2</a>
                    <span>...</span>
                    <a href="#" onclick="return false">7</a>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="9px" height="16px">
                        <path fill-rule="evenodd"  fill="rgb(83, 47, 28)"
                              d="M8.631,7.867 C8.631,7.746 8.573,7.609 8.484,7.518 L1.645,0.457 C1.557,0.366 1.425,0.305 1.308,0.305 C1.190,0.305 1.058,0.366 0.970,0.457 L0.236,1.215 C0.148,1.306 0.090,1.442 0.090,1.564 C0.090,1.685 0.148,1.821 0.236,1.912 L6.004,7.867 L0.236,13.822 C0.148,13.913 0.090,14.049 0.090,14.170 C0.090,14.307 0.148,14.428 0.236,14.519 L0.970,15.277 C1.058,15.367 1.190,15.428 1.308,15.428 C1.425,15.428 1.557,15.367 1.645,15.277 L8.484,8.216 C8.573,8.124 8.631,7.988 8.631,7.867 Z"/>
                    </svg>
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink"
                        width="15px" height="16px">
                        <path fill-rule="evenodd"  fill="rgb(83, 47, 28)"
                              d="M9.360,7.867 C9.360,7.746 9.302,7.609 9.214,7.518 L2.375,0.457 C2.287,0.366 2.154,0.305 2.037,0.305 C1.920,0.305 1.787,0.366 1.699,0.457 L0.966,1.215 C0.878,1.306 0.819,1.442 0.819,1.564 C0.819,1.685 0.878,1.821 0.966,1.912 L6.733,7.867 L0.966,13.822 C0.878,13.913 0.819,14.049 0.819,14.170 C0.819,14.292 0.878,14.428 0.966,14.519 L1.699,15.277 C1.787,15.367 1.920,15.428 2.037,15.428 C2.154,15.428 2.287,15.367 2.375,15.277 L9.214,8.216 C9.302,8.124 9.360,7.988 9.360,7.867 ZM14.996,7.867 C14.996,7.746 14.937,7.609 14.849,7.518 L8.010,0.457 C7.922,0.366 7.790,0.305 7.673,0.305 C7.555,0.305 7.423,0.366 7.335,0.457 L6.601,1.215 C6.513,1.306 6.455,1.442 6.455,1.564 C6.455,1.685 6.513,1.821 6.601,1.912 L12.369,7.867 L6.601,13.822 C6.513,13.913 6.455,14.049 6.455,14.170 C6.455,14.292 6.513,14.428 6.601,14.519 L7.335,15.277 C7.423,15.367 7.555,15.428 7.673,15.428 C7.790,15.428 7.922,15.367 8.010,15.277 L14.849,8.216 C14.937,8.124 14.996,7.988 14.996,7.867 Z"/>
                    </svg>
                </div>
        </div>
        <img src="/assets/lentils.png" alt="" class="lentils"/>

        <p class="title">Торопись! В игре осталось:</p>
        <div class="prizes">
            <p class="amount-1">
                <img src="/assets/icons/animations/yellow_anim.png" alt="" class="yellow_anim"/>
                <span class="size">5880</span><span> желтых <br/>призов</span>
            </p>
            <p class="amount-2">
                <img src="/assets/icons/animations/red_anim.png" alt="" class="red_anim"/>
                <span class="size">7</span><span> красных <br/>M-призов</span>
            </p>
            <p class="amount-2">
                <img src="/assets/icons/animations/red_anim.png" alt="" class="red_anim"/>
                <span class="size">7</span><span> красных <br/>S-призов</span>
            </p>
        </div>
        <button class="btn btn-danger">ПОГНАЛИ!</button>
    </div>
  </section>

  <section id="FAQ">
      <div class="container">
          <p class="title">FAQ</p>
          <p class="description">
              Посмотри список часто задаваемых вопросов: возможно,
              там есть и твой. Если не нашел ответ, пиши нам, и мы о
              бязательно поможем. Не забудь написать мобильный, который
              у казал при регистрации!
          </p>
          <div class="faq">
            <div class="question">
                <div>
                  <img src="/assets/M&MS.png" alt='M&MS' />
                  <h3>Когда можно играть?</h3>
                </div>
              <svg xmlns="http://www.w3.org/2000/svg" width="15.469" height="14.59" viewBox="0 0 15.469 14.59">
                <defs>
                <style>
                  .cls-1 {
                    fill: #532f1c;
                    fill-rule: evenodd;
                  }
                </style>
                </defs>
                <path id="last_page_copy_3" data-name="last_page copy 3" class="cls-1" d="M776.729,4064.77a0.542,0.542,0,0,0,.356-0.15l7.214-7.05a0.5,0.5,0,0,0,.154-0.34,0.524,0.524,0,0,0-.154-0.35l-0.774-.76a0.5,0.5,0,0,0-.712,0l-6.084,5.95-6.083-5.95a0.5,0.5,0,0,0-.712,0l-0.774.76a0.521,0.521,0,0,0-.155.35,0.5,0.5,0,0,0,.155.34l7.213,7.05A0.542,0.542,0,0,0,776.729,4064.77Zm0,5.81a0.542,0.542,0,0,0,.356-0.15l7.214-7.05a0.524,0.524,0,0,0,.154-0.35,0.545,0.545,0,0,0-.154-0.35l-0.774-.75a0.5,0.5,0,0,0-.712,0l-6.084,5.94-6.083-5.94a0.5,0.5,0,0,0-.712,0l-0.774.75a0.541,0.541,0,0,0-.155.35,0.521,0.521,0,0,0,.155.35l7.213,7.05A0.542,0.542,0,0,0,776.729,4070.58Z" transform="translate(-769 -4055.97)"/></svg>
            </div>
            <div class="answer">
              <p>Акция проводится с 13 июля по 05 сентября 2021 года</p>
            </div>
          </div>

          <div class="faq">
              <div class="question">
                  <div>
                    <img src="/assets/M&MS.png" alt='M&MS' />
                    <h3>Как можно выиграть смартфон?</h3>
                  </div>
                  <svg xmlns="http://www.w3.org/2000/svg" width="15.469" height="14.59" viewBox="0 0 15.469 14.59">
                      <defs>
                          <style>
                              .cls-1 {
                                  fill: #532f1c;
                                  fill-rule: evenodd;
                              }
                          </style>
                      </defs>
                      <path id="last_page_copy_3" data-name="last_page copy 3" class="cls-1" d="M776.729,4064.77a0.542,0.542,0,0,0,.356-0.15l7.214-7.05a0.5,0.5,0,0,0,.154-0.34,0.524,0.524,0,0,0-.154-0.35l-0.774-.76a0.5,0.5,0,0,0-.712,0l-6.084,5.95-6.083-5.95a0.5,0.5,0,0,0-.712,0l-0.774.76a0.521,0.521,0,0,0-.155.35,0.5,0.5,0,0,0,.155.34l7.213,7.05A0.542,0.542,0,0,0,776.729,4064.77Zm0,5.81a0.542,0.542,0,0,0,.356-0.15l7.214-7.05a0.524,0.524,0,0,0,.154-0.35,0.545,0.545,0,0,0-.154-0.35l-0.774-.75a0.5,0.5,0,0,0-.712,0l-6.084,5.94-6.083-5.94a0.5,0.5,0,0,0-.712,0l-0.774.75a0.541,0.541,0,0,0-.155.35,0.521,0.521,0,0,0,.155.35l7.213,7.05A0.542,0.542,0,0,0,776.729,4070.58Z" transform="translate(-769 -4055.97)"/></svg>
              </div>
              <div class="answer">
                  <p>Никак )))</p>
              </div>
          </div>

          <div class="faq">
              <div class="question">
                  <div>
                      <img src="/assets/M&MS.png" alt='M&MS' />
                      <h3>Что еще можно выиграть?</h3>
                  </div>
                  <svg xmlns="http://www.w3.org/2000/svg" width="15.469" height="14.59" viewBox="0 0 15.469 14.59">
                      <defs>
                          <style>
                              .cls-1 {
                                  fill: #532f1c;
                                  fill-rule: evenodd;
                              }
                          </style>
                      </defs>
                      <path id="last_page_copy_3" data-name="last_page copy 3" class="cls-1" d="M776.729,4064.77a0.542,0.542,0,0,0,.356-0.15l7.214-7.05a0.5,0.5,0,0,0,.154-0.34,0.524,0.524,0,0,0-.154-0.35l-0.774-.76a0.5,0.5,0,0,0-.712,0l-6.084,5.95-6.083-5.95a0.5,0.5,0,0,0-.712,0l-0.774.76a0.521,0.521,0,0,0-.155.35,0.5,0.5,0,0,0,.155.34l7.213,7.05A0.542,0.542,0,0,0,776.729,4064.77Zm0,5.81a0.542,0.542,0,0,0,.356-0.15l7.214-7.05a0.524,0.524,0,0,0,.154-0.35,0.545,0.545,0,0,0-.154-0.35l-0.774-.75a0.5,0.5,0,0,0-.712,0l-6.084,5.94-6.083-5.94a0.5,0.5,0,0,0-.712,0l-0.774.75a0.541,0.541,0,0,0-.155.35,0.521,0.521,0,0,0,.155.35l7.213,7.05A0.542,0.542,0,0,0,776.729,4070.58Z" transform="translate(-769 -4055.97)"/></svg>
              </div>
              <div class="answer">
                  <p>Ничего )))</p>
              </div>
          </div>


          <div class="faq">
            <div class="question">
                <div>
                  <img src="/assets/M&MS.png" alt='M&MS' />
                  <h3>Не нашел ответ? Задай вопрос нам!</h3>
                </div>
              <svg xmlns="http://www.w3.org/2000/svg" width="15.469" height="14.59" viewBox="0 0 15.469 14.59">
                <defs>
                <style>
                  .cls-1 {
                    fill: #532f1c;
                    fill-rule: evenodd;
                  }
                </style>
                </defs>
                <path id="last_page_copy_3" data-name="last_page copy 3" class="cls-1" d="M776.729,4064.77a0.542,0.542,0,0,0,.356-0.15l7.214-7.05a0.5,0.5,0,0,0,.154-0.34,0.524,0.524,0,0,0-.154-0.35l-0.774-.76a0.5,0.5,0,0,0-.712,0l-6.084,5.95-6.083-5.95a0.5,0.5,0,0,0-.712,0l-0.774.76a0.521,0.521,0,0,0-.155.35,0.5,0.5,0,0,0,.155.34l7.213,7.05A0.542,0.542,0,0,0,776.729,4064.77Zm0,5.81a0.542,0.542,0,0,0,.356-0.15l7.214-7.05a0.524,0.524,0,0,0,.154-0.35,0.545,0.545,0,0,0-.154-0.35l-0.774-.75a0.5,0.5,0,0,0-.712,0l-6.084,5.94-6.083-5.94a0.5,0.5,0,0,0-.712,0l-0.774.75a0.541,0.541,0,0,0-.155.35,0.521,0.521,0,0,0,.155.35l7.213,7.05A0.542,0.542,0,0,0,776.729,4070.58Z" transform="translate(-769 -4055.97)"/></svg>
            </div>
            <div class="answer">
              <form class="form" id="form-question">
                  <div class="user">
                      <input type="text" name="name" placeholder="Имя" inputmode="text"/>
                      <input type="tel" name="phone" placeholder="Номер телефона" inputmode="tel"/>
                      <input type="email" name="email" placeholder="E-mail" inputmode="text"/>
                  </div>
                  <textarea form="form-question" name="question" placeholder="Напиши свой вопрос"></textarea>
                  <div class="btn">
                      <button class="btn btn-danger">Отправить</button>
                  </div>
              </form>
            </div>
                </div>
      </div>
  </section>
@endsection



