@extends('layouts.mail')

@section('main')
    <h1>🎉 Зарегистрирован заказ на сайте 🎉</h1>
    <p><strong>ID сайта:</strong> {{ $pay->uuid }}</p>
    <p><strong>Тур:</strong> <a href="{{ $pay->back_link }}">{{ $pay->name }}</a></p>
    <p><strong>Дата выезда:</strong> {{ $pay->start_data }}</p>
    <p><strong>Цена:</strong> {{ $pay->price }}</p>
    <p><strong>email:</strong> {{ $pay->email }}</p>
    <p><strong>Ссылка на оплату в Т-банке:</strong> {{ $pay->payment_url ?? 'Не указана' }}</p>


    @foreach ($pay->clients as $client)
      <p><strong>Клиент:</strong> {{ $client->fio }}</p>
      @php
          $dr = date('Y-m-d', strtotime($client->dr));
      @endphp
      <p><strong>Дата рождения:</strong> {{ ($dr === '1970-01-01' ? 'Нужно уточнить' : $client->dr) }}</p>
      <p><strong>Номер документа:</strong> {{ $client->document_number }}</p>
    @endforeach

    <p><strong>Телефон:</strong> {{ $pay->phone }}</p>
@endsection
