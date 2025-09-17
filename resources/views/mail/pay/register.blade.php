@extends('layouts.mail')

@section('main')
    <h1>🎉 Зарегистрирован заказ на сайте 🎉</h1>
    <p><strong>ID сайта:</strong> {{ $pay->uuid }}</p>
    <p><strong>Тур:</strong> <a href="{{ $pay->back_link }}">{{ $pay->name }}</a></p>
    <p><strong>Дата выезда:</strong> {{ $pay->start_data }}</p>
    <p><strong>Цена:</strong> {{ $pay->price }}</p>
    <p><strong>email:</strong> {{ $pay->email }}</p>


    @foreach ($pay->clients as $client)
      <p><strong>Клиент:</strong> {{ $client->fio }}</p>
      <p><strong>Дата рождения:</strong> {{ $client->dr }}</p>
      <p><strong>Номер документа:</strong> {{ $client->document_number }}</p>
    @endforeach

    <p><strong>Телефон:</strong> {{ $pay->phone }}</p>
@endsection
