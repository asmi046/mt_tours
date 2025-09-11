@extends('layouts.pay')

@section('title_force', 'Оплата заказа - МирТуризма46')
@section('description_force', 'Оплата заказа - МирТуризма46')

@section('main')
    <section class="pay_success_section" id="pay_app">
        <div class="container">
            <h1> Поздравляем с покупкой</h1>
            <p class="emoji big"> 🎉 </p>
            <br>
            <p>Вы приобрели:</p>
            <h3>{{ $pay->name }}</h3>

            <img class="zig_arrow" src="{{ asset('img/ticket/zig-arrow.svg') }}" alt="Перейти к билетам">
            <br>
            <br>
            <a href="{{ route('show_ticket', ['uuid' => $pay->uuid]) }}" class="button">Скачать билеты</a>
            <br>
            <br>
            <p>📲 Мы отправили ссылку на билеты Вам по SMS на номер: {{ $pay->phone }}</p>

            @if ($pay->email)

            <br>
            <p>📧 А еще мы отправили ссылку на билеты Вам по e-mail на адрес: {{ $pay->email }}</p>
            @endif

            <h3>Желаем Вам счастливого путешествия!❤️</h3>
            <br>
            <a class="button" href="{{ $pay->back_link }}">Купить еще билет на этот тур</a>
            <br>
            <br>
            <a class="button button-blue" href="{{ route('home') }}">Выбрать другой тур</a>
        </div>
    </section>
@endsection
