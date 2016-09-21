
var myChart = echarts.init(document.getElementById('serverpanel'));

var option = {
    title : {
        text: '开放服务类型',
        subtext: 'Services',
        x:'center'
    },
    tooltip : {
        trigger: 'item',
        formatter: "{a} <br/>{b} : {c} ({d}%)"
    },
    legend: {
        orient: 'vertical',
        left: 'left',
        data: []
    },
    toolbox: {
        show: true,
        feature: {
            dataView: {readOnly: false},
            restore: {},
            saveAsImage: {}
        }
    },
    series : [
        {
            name: 'Services',
            type: 'pie',
            radius : '55%',
            center: ['50%', '60%'],
            data:[],
            itemStyle: {
                emphasis: {
                    shadowBlur: 10,
                    shadowOffsetX: 0,
                    shadowColor: 'rgba(0, 0, 0, 0.5)'
                }
            }
        }
    ]
};
myChart.setOption(option);


// 异步加载数据
$.ajax({
    type: "post",
    async: false, //同步执行
    url: "http://10.65.10.195/AssetsView/Service/getJsonservice",
    dataType: "json", //返回数据形式为json
    success: function(data) {
       var other=0;
        for(var i = 5; i < data.length; i++){
            //alert(data[i].counts);
            other=other+data[i].counts;
        }
        //alert(other);
        myChart.hideLoading();
        myChart.setOption({
            legend: {
                // 根据名字对应到相应的系列
                data:[
                data[0].service,
                data[1].service,
                data[2].service,
                data[3].service,
                data[4].service,
                'Other'
            ],
            },
            series: [{
                // 根据名字对应到相应的系列
                name: 'Service Type',
                data:[
                {value:data[0].counts, name:data[0].service},
                {value:data[1].counts, name:data[1].service},
                {value:data[2].counts, name:data[2].service},
                {value:data[3].counts, name:data[3].service},
                {value:data[4].counts, name:data[4].service},
                {value:other, name:'Other'}
            ],
            }]
        });
    },
    error: function(errorMsg) {
        alert("请求数据失败!");
    }
});
