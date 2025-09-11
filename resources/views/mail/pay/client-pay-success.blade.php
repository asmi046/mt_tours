@extends('layouts.mail')

@section('main')
    <h1>🎉 Поздравляем с покупкой 🎉</h1>
    <p>Вы приобрели:</p>
    <h3>{{ $pay->name }}</h3>
    <img class="zig_arrow" src="{{ asset('img/ticket/zig-arrow.png') }}" alt="Перейти к билетам">
    <br>
    <br>
    <a href="{{ route('show_ticket', ['uuid' => $pay->uuid]) }}" class="button">Скачать билеты</a>
@endsection
