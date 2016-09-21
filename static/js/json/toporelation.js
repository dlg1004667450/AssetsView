
var myChart = echarts.init(document.getElementById('topopanel'));
var  option = {
    title : {
        text: 'Network Topology',
        subtext: '网络拓扑',
        x:'center',
    },
    tooltip : {
            trigger: 'item',
            formatter : "{b}"
        },
    toolbox: {
        show : true,
        feature: {
            dataView: {readOnly: false},
            restore: {},
            saveAsImage: {}
        }
    },
    legend: {
        data : [],
        orient : 'vertical',
        x : 'left'
    },
    isShowScrollBar:false,
    series: [
        {
            name: 'Network Topology',
            type: 'graph',
            layout: 'force',
            animation: false,
            label: {
                normal: {
                    position: 'right',
                    show: true, 
                    formatter: '{b}'
                }
            },
            draggable: true,
            categories : [],
            data:[ ],
            edges : [],
            force: {
                gravity: 0.1,
                edgeLength: [20, 200],
                repulsion: 300
            }
        }
    ]
};
myChart.setOption(option);
// 异步加载数据
$.ajax({
    type: "post",
    async: true, //同步执行
    url: "http://10.65.10.195/AssetsView/Topology/getJsontopo",
    dataType: "json", //返回数据形式为json
    success: function(data) {
        //alert(data['categories'][1].name);
        myChart.hideLoading();
        myChart.setOption({
            legend: {
        data : data['categories'],
        orient : 'vertical',
        x : 'left'
    },
            series: [{
                categories : data['categories'],
                data : data['nodes'],
                edges : data['links'],
            }]
        });
    },
    error: function(errorMsg) {
        alert("请求数据失败!");
    }
});

