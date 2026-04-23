@if ($items->isNotEmpty())
    <script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        @foreach ($items as $item)
        {
            "@type": "Question",
            "name": {{ json_encode($item->question) }},
            "acceptedAnswer": {
                "@type": "Answer",
                "text": {{ json_encode(strip_tags($item->answer ?? '')) }}
            }
        }{{ !$loop->last ? ',' : '' }}
        @endforeach
    ]
}
</script>
@endif

<div class="faq_list">
    @foreach ($items as $item)
        <details>
            <summary>{{ $item->question }}</summary>
            <div class="response text_styles">{!! $item->answer ?? '' !!}</div>
        </details>
    @endforeach
</div>
