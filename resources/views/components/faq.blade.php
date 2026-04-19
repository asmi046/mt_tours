<div>
    @foreach ($items as $item)
        <details>
            <summary>{{ $item->question }}</summary>
            <div class="response">{!! nl2br(e($item->answer ?? '')) !!}</div>
        </details>
    @endforeach
</div>
