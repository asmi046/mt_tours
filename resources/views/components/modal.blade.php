@props([
    'id' => null,
    'title' => '',
    'subtitle' => '',
    'size' => 'md',
    'closable' => true,
    'closeOnBackdrop' => true,
    'openHash' => '',
])

<empty-modal
    @if($id) id="{{ $id }}" @endif
    title="{{ $title }}"
    subtitle="{{ $subtitle }}"
    size="{{ $size }}"
    @if($openHash) open-hash="{{ $openHash }}" @endif
>
    {{ $slot ?? '' }}

    @isset($footer)
        <x-slot name="footer">{{ $footer }}</x-slot>
    @endisset
</empty-modal>
