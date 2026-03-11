<div class="hotel_prices">
    <h2>Цены</h2>
    <div class="table_wrapper">


        <table class="prices">
            <thead>
                <tr>
                    <th>Тип номера</th>
                    <th>Цена в Июне</th>
                    <th>Цена в Июле</th>
                    <th>Цена в Августе</th>
                    <th>Цена в Сентябре</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($prices as $price)
                    <tr>
                        <td class="number_tr">{{ $price['number_type'] }}</td>
                        @if ($price['june_night_price'] == 0)
                            <td colspan="4">Под запрос</td>
                        @else
                            <td>{{ $price['june_night_price'] * 10 }} ₽</td>
                            <td>{{ $price['july_night_price'] * 10 }} ₽</td>
                            <td>{{ $price['august_night_price'] * 10 }} ₽</td>
                            <td>{{ $price['september_night_price'] * 10 }} ₽</td>
                        @endif

                    </tr>
                @endforeach
                <tr>
                    <td class="number_tr">Детям до 5 лет (проезд, ком.услуги)</td>
                    <td colspan="4">{{ $befor5 }} ₽</td>
                </tr>
                <tr>
                    <td class="number_tr">Детям до 11 лет (на доп. месте)</td>
                    <td colspan="4">{{ $before11 }} %</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
