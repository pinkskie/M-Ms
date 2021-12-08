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
        <p class="title">Победители</p>
        <form class="form form_search">
            <div class="form-group">
                <input type=tel name="phone" placeholder="+7 XXX XX XX" inputmode="text"/>
                <div>
                    <button type="submit" class="btn">
                        <div class="icon search"></div>
                    </button>
                </div>
            </div>
        </form>
        <div class="table">
            <div class="table_nav">
                <div class="winners yellow">
                    <img src="/assets/icons/animations/yellow_anim.png" alt="" class="yellow_anim"/>
                    Желтые призы
                </div>
                <div class="winners red">
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



