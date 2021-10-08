@php
    global $echart;
@endphp

<div>
    @if(empty($echart))
        <script crossorigin="anonymous"
                integrity="sha512-BuAhidfi8Cl0IPjBLyj4ob75IMHmQxoGCm7y0Vabo3xJD+QuDU9QG3ZVJd0QZ0uzTQSChz/iOhRxxbZS1z/F6g=="
                src="https://lib.baomitu.com/echarts/5.1.2/echarts.js"></script>

    @endif
    @php
        $echart++
    @endphp

    {{$slot}}


</div>