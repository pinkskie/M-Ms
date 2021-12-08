@extends('layouts.main')

@section('content')
    <section id="registration">
        <div class="wrapper">
            <div class="register">
                <p class="title">Регистрация</p>
                <p class="description">Сообщение с кодом для доступа на сайт отправлено на номер:<br><span>+7 777 777 77 77</span></p>
                <form class="register_form">
                    <input type="tel" placeholder="Код из SMS"/>
                    <button class="btn-danger" type="submit">Войти</button>
                </form>
                <img src="/assets/frame.png" alt="" class="frame_register"/>
                <img src="/assets/yellow_register.png" alt="" class="yellow_register"/>
                <div class="register_again">
                    <p class="title">Не пришел код?</p>
                    <p class="description">Повторно SMS можно запросить через 60 секунд</p>
                    <button class="btn-again">Отправить еще раз</button>
                </div>
            </div>

        </div>
    </section>
@endsection
