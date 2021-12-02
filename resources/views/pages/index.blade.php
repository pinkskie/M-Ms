@extends('layouts.main')

@section('header')
  @include('partials.header')
@endsection

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
          <div class="prizes">
              <p class="amount"><span class="size">5880</span><span> желтых <br/>призов</span></p>
              <img src="/assets/prize1.png" alt="prize1" class="prize_img"/>
              <p class="prize_name">Эл.сертификат IVI 3 месяца</p>
          </div>
          <div class="prizes">
              <p class="amount"><span class="size">7</span><span> красных <br/>m-призов</span></p>
              <img src="/assets/prize2.png" alt="prize2" class="prize_img"/>
              <p class="prize_name">Смартфон или наушники </p>
          </div>
          <div class="prizes">
              <p class="amount"><span class="size">7</span><span> красных <br/>s-призов</span></p>
              <img src="/assets/prize3.png" alt="prize3" class="prize_img"/>
          </div>
      </div>
    </div>
  </section>

  <section id="share">
    <div class="container">
      <h2 class='title'>Хочу призов! что делать? </h2>
      <div class="info">
        <div class="content">
          <img src="/assets/share1.png" alt="share1" class="share_img"/>
        </div>
        <div class="content">
          <img src="/assets/share2.png" alt="share1" class="share_img"/>
        </div>
        <div class="content">
          <img src="/assets/share3.png" alt="share1" class="share_img"/>
        </div>
      </div>
      <div class="scan">

          <img src="/assets/scan_yellow.png" alt="scan1" class="scan_img"/>

        <p class="attention"><b>внимание:</b> ДЛЯ ДОСТУПА НА 3 УРОВЕНЬ КУПИ M&M’s® или SKITTLES® И пройди контроль</p>
        <img src="/assets/scan_red.png" alt="scan2" class="scan_img"/>
      </div>
    </div>
  </section>
@endsection

@section('footer')
    @include('partials.footer')
@endsection
