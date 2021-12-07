@extends('layouts.main')

@section('content')
    <section id="registration">
        <div class="wrapper">
            <div class="register">
                <p class="title">Регистрация</p>
                <p class="description">Сообщение с кодом для доступа на сайт отправлено на номер:<br><span>+7 777 777 77 77</span></p>
                <form class="register_form">
                    <input type="tel" placeholder="Код из SMS"/>
                    <button class="btn" type="submit">Войти</button>
                </form>
            </div>

        </div>
    </section>
@endsection
