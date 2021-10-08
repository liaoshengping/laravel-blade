<x-blade::echart.base>

    <div id="chart-pie" class="w-full h-96" ></div>

    <script type="text/javascript">


        // 基于准备好的dom，初始化echarts实例
        var myChart = echarts.init(document.getElementById('chart-pie'));

        // 指定图表的配置项和数据
        var option = {
            tooltip: {
                trigger: 'item'
            },
            legend: {
                top: '5%',
                left: 'center'
            },
            series: [
                {
                    name: '比例',
                    type: 'pie',
                    radius: ['40%', '70%'],
                    avoidLabelOverlap: false,
                    itemStyle: {
                        borderRadius: 10,
                        // borderColor: '#fff',
                        borderWidth: 2
                    },
                    label: {
                        show: false,
                        position: 'center'
                    },
                    emphasis: {
                        label: {
                            show: true,
                            fontSize: '40',
                            fontWeight: 'bold'
                        }
                    },
                    labelLine: {
                        show: false
                    },
                    data: [
                        {value: 100, name: '高于'},
                        {value: 735, name: '低于'},
                    ]
                }
            ]
        };


        // 使用刚指定的配置项和数据显示图表。
        myChart.setOption(option);
    </script>
</x-blade::echart.base>