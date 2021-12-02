@extends('layouts.main')

@section('header')
  @include('partials.header')
@endsection

@section('content')
  <section id="hero">
      <div class="wrapper">
          <p class="title">СМОТРИ И ЛОВИ M&M’s®!</p>
          <button class="btn btn-danger">ПОГНАЛИ!</button>
      </div>
  </section>

  <section id="prize">

  </section>
@endsection

@section('footer')
    @include('partials.footer')
@endsection
