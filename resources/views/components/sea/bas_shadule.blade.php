<div class="schedule">
    <h2>Расписание заездов</h2>
    <div class="schedule_table">
        @foreach ($schedule as $item)
            <div class="schedule_row">
                Выезд из Курска <strong>{{ $item->start_date }}</strong> - возвращение
                <strong>{{ $item->end_date }}</strong>
            </div>
        @endforeach
    </div>
</div>
