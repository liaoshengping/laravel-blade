
<x-blade::echart.base>

    @php
    $id = 'category'.rand(1,9999999)
    @endphp

    <div id="{{$id}}" class="w-full h-96" ></div>

    <script type="text/javascript">


        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('{{$id}}'));

        {{$slot}}

        // 指定图表的配置项和数据
        var option = {!! $option !!};


        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
    </script>


</x-blade::echart.base>
