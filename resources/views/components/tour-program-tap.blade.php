<tap :header="{{ json_encode(array_keys($programm)) }}">
        @foreach ( $programm as $key => $item)
                <template v-slot:body{{ $loop->index + 1 }}>

                    <div class="program_in_tap">

                        @foreach ($item as $dey => $program)
                            <div class="step">
                                <div class="point"></div>
                                <span>{{ $dey }} день ({{ $program['date'] }})</span>
                            </div>
                            <div class="text text_styles">{!! $program['description'] !!}</div>
                        @endforeach
                        <div class="line"></div>
                    </div>
                </template>
        @endforeach
</tap>

