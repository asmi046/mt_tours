@if ($jsonLd)
    <script type="application/ld+json">{!! $jsonLd !!}</script>
@endif

<div class="faq_list">
    @foreach ($items as $item)
        <details>
            <summary>{{ $item->question }}</summary>
            <div class="response text_styles">{!! $item->answer ?? '' !!}</div>
        </details>
    @endforeach
</div>
