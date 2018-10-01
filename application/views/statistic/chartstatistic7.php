       <div class="breadcrumbs">
            <div class="col-sm-20">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h4>กราฟแสดงลักษณะการชนของรถจักรยานยนต์                                                                                                  </h4>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                    </div>
                </div>
            </div>
        </div>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>

<div id="container" style="min-width: 1310px; height: 600px; margin: 0 auto"></div>



<script type="text/javascript">


Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
    text: 'กราฟแสดงลักษณะการชนของรถจักรยานยนต์'
    },
    subtitle: {
	
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'บนแท่งกราฟแสดง % ระหว่างแต่ล่ะช่วง'
        }

    },
    legend: {
        enabled: false
    },
    plotOptions: {
        series: {
            borderWidth: 0,
            dataLabels: {
                enabled: true,
                format: '{point.y:.1f}%'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
    },

    "series": [
        {
            "name": "",
            "colorByPoint": true,
            "data": [
                {
                    "name": "รถจักรยานยนต์ชนรถจักรยานยนต์",
                    "y": 11,
                    "drilldown": "ถนนหน้ามหาวิทยาลัย"
                },
                {
                    "name": "รถจักรยานยนต์ชนเก๋ง",
                    "y": 3,
                    "drilldown": "ถนนหน้าโรงพยาบาลท่าศาลา"
                },
                {
                    "name": "รถจักรยานยนต์ชนรถบรรทุก",
                    "y": 0.02,
                    "drilldown": "อาคารคอมพิวเตอร์"
                },
                {
                    "name": "รถจักรยานยนต์ชนสัตว์",
                    "y": 3,
                    "drilldown": "อาคารวิชาการ 5"
                },
                {
                    "name": "รถจักรยานยนต์ล้ม",
                    "y": 71,
                    "drilldown": "โรงอาหาร 4"
                },
                {
                    "name": "รถจักรยานยนต์ชนสิ่งขีดขวาง",
                    "y": 0.2,
                    "drilldown": "โรงอาหาร 2"
                }
                /*{
                    "name": "อาคารเครื่องมือ 3",
                    "y": 1.92,
                    "drilldown": "อาคารเครื่องมือ 3"
                },
                {
                    "name": "โรงอาหารกลางคืน",
                    "y": 1.92,
                    "drilldown": "โรงอาหารกลางคืน"
                },
                {
                    "name": " โรงอาหารหัวตะพาน",
                    "y": 1.92,
                    "drilldown": " โรงอาหารหัวตะพาน"
                },
                {
                    "name": "อาคารเรียน 7",
                    "y": 1.92,
                    "drilldown": "อาคารเรียน 7"
                }*/
            ]
        }
    ],
    "drilldown": {
        "series": [
            {
                "name": "ถนนหน้ามหาวิทยาลัย",
                "id": "ถนนหน้ามหาวิทยาลัย",
                "data": [
                    [
                        "v65.0",
                        0.1
                    ],
                    [
                        "v64.0",
                        1.3
                    ],
                    [
                        "v100.0",
                        53.02
                    ],
                    [
                        "v62.0",
                        1.4
                    ],
                    [
                        "v61.0",
                        0.88
                    ],
                    [
                        "v60.0",
                        0.56
                    ],
                    [
                        "v59.0",
                        0.45
                    ],
                    [
                        "v58.0",
                        0.49
                    ],
                    [
                        "v57.0",
                        0.32
                    ],
                    [
                        "v56.0",
                        0.29
                    ],
                    [
                        "v55.0",
                        0.79
                    ],
                    [
                        "v54.0",
                        0.18
                    ],
                    [
                        "v51.0",
                        0.13
                    ],
                    [
                        "v49.0",
                        2.16
                    ],
                    [
                        "v48.0",
                        0.13
                    ],
                    [
                        "v47.0",
                        0.11
                    ],
                    [
                        "v43.0",
                        0.17
                    ],
                    [
                        "v29.0",
                        0.26
                    ]
                ]
            },
            {
                "name": "ถนนหน้าโรงพยาบาลท่าศาลา",
                "id": "ถนนหน้าโรงพยาบาลท่าศาลา",
                "data": [
                    [
                        "v58.0",
                        1.02
                    ],
                    [
                        "v57.0",
                        7.36
                    ],
                    [
                        "v56.0",
                        0.35
                    ],
                    [
                        "v55.0",
                        0.11
                    ],
                    [
                        "v54.0",
                        0.1
                    ],
                    [
                        "v52.0",
                        0.95
                    ],
                    [
                        "v51.0",
                        0.15
                    ],
                    [
                        "v50.0",
                        0.1
                    ],
                    [
                        "v48.0",
                        0.31
                    ],
                    [
                        "v47.0",
                        0.12
                    ]
                ]
            },
            {
                "name": "อาคารคอมพิวเตอร์",
                "id": "อาคารคอมพิวเตอร์",
                "data": [
                    [
                        "v11.0",
                        6.2
                    ],
                    [
                        "v10.0",
                        0.29
                    ],
                    [
                        "v9.0",
                        0.27
                    ],
                    [
                        "v8.0",
                        0.47
                    ]
                ]
            },
            {
                "name": "อาคารวิชาการ5",
                "id": "อาคารวิชาการ5",
                "data": [
                    [
                        "v11.0",
                        3.39
                    ],
                    [
                        "v10.1",
                        0.96
                    ],
                    [
                        "v10.0",
                        0.36
                    ],
                    [
                        "v9.1",
                        0.54
                    ],
                    [
                        "v9.0",
                        0.13
                    ],
                    [
                        "v5.1",
                        0.2
                    ]
                ]
            },
            {
                "name": "โรงอาหาร4",
                "id": "โรงอาหาร4",
                "data": [
                    [
                        "v16",
                        2.6
                    ],
                    [
                        "v15",
                        0.92
                    ],
                    [
                        "v14",
                        0.4
                    ],
                    [
                        "v13",
                        0.1
                    ]
                ]
            },
            {
                "name": "โรงอาหาร 2",
                "id": "โรงอาหาร 2",
                "data": [
                    [
                        "v50.0",
                        0.96
                    ],
                    [
                        "v49.0",
                        0.82
                    ],
                    [
                        "v12.1",
                        0.14
                    ]
                ]
            },
            {
                "name": "อาคารเครื่องมือ 3",
                "id": "อาคารเครื่องมือ 3",
                "data": [
                    [
                        "v50.0",
                        0.96
                    ],
                    [
                        "v49.0",
                        0.82
                    ],
                    [
                        "v12.1",
                        0.14
                    ]
                ]
            },
            
            {
                "name": "โรงอาหารกลางคืน",
                "id": "โรงอาหารกลางคืน",
                "data": [
                    [
                        "v50.0",
                        0.96
                    ],
                    [
                        "v49.0",
                        0.82
                    ],
                    [
                        "v12.1",
                        0.14
                    ]
                ]
            },
            {
                "name": "โรงอาหารหัวตะพาน",
                "id": "โรงอาหารหัวตะพาน",
                "data": [
                    [
                        "v50.0",
                        0.96
                    ],
                    [
                        "v49.0",
                        0.82
                    ],
                    [
                        "v12.1",
                        0.14
                    ]
                ]
            },
            {
                "name": "อาคารเรียน 7",
                "id": "อาคารเรียน 7",
                "data": [
                    [
                        "v50.0",
                        0.96
                    ],
                    [
                        "v49.0",
                        0.82
                    ],
                    [
                        "v12.1",
                        0.14
                    ]
                ]
            }
        ]
    }
});


</script>