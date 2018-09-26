
       <div class="breadcrumbs">
            <div class="col-sm-1300">
                <div class="page-header float-left">
                    <div class="page-title">
                         <center><h4>---------------------- เหตุการณ์ที่เกิดขึ้นพร้อมกันบ่อยประจำปี พ.ศ.2560 (support) ----------------------</h4></center>
                    </div>
                </div>
            </div>
            <div class="col-sm-1000">
                <div class="page-header float-right">
                    <div class="page-title">
                    </div>
                </div>
            </div>
            </div>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>

<div id="container" style="min-width: 310px; height: 500px; margin: 0 auto"></div>

<script src="https://code.highcharts.com/modules/exporting.js"></script>

<div id="container1" style="min-width: 310px; height: 500px; margin: 0 auto"></div>
<div id="container3" style="min-width: 310px; height: 500px; margin: 0 auto"></div>
<div id="container4" style="min-width: 310px; height: 500px; margin: 0 auto"></div>

<script type="text/javascript">


Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
    text: 'ลักษณะอุบัติเหตุที่เกิดขึ้นบ่อย'
    },
    subtitle: {
	
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'จำนวนครั้งในการเกิดขึ้นพร้อมกัน - บนแท่งกราฟแสดง %'
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
                format: '{point.y:.100f}%'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
    },

    "series": [
        {
            "name": "Browsers",
            "colorByPoint": true,
            "data": [
                {
                    "name": "รถจักรยานยนต์ล้ม",
                    "y": 70,
                    "drilldown": "รถจักรยานยนต์ล้ม"
                },
                {
                    "name": "รถจักรยานยนต์ชนรถจักรยานยนต์",
                    "y": 50,
                    "drilldown": "รถจักรยานยนต์ชนรถจักรยานยนต์"
                },
                {
                    "name": "รถจักรยานยนต์ชนสิ่งขีดขวาง",
                    "y": 40,
                    "drilldown": "รถจักรยานยนต์ชนสิ่งขีดขวาง"
                },
                {
                    "name": "รถจักรยานยนต์ชนเก๋ง",
                    "y": 20,
                    "drilldown": "รถจักรยานยนต์ชนเก๋ง"
                },
                {
                    "name": "รถจักรยานยนต์ชนรถกระบะ",
                    "y": 10,
                    "drilldown": "รถจักรยานยนต์ชนรถกระบะ"
                },
                {
                    "name": "รถจักรยานยนต์ชนรถบรรทุก",
                    "y": 3,
                    "drilldown": "รถจักรยานยนต์ชนรถบรรทุก"
                },
                {
                    "name": "รถจักรยานยนต์ชนสัตว์",
                    "y": 5,
                    "drilldown": "รถจักรยานยนต์ชนสัตว์"
                }
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
            }
            
        ]
    }
});


Highcharts.chart('container1', {
  chart: {
    type: 'area'
  },
  title: {
    text: 'เหตุการณ์ที่เกิดร่วมกันกับการสวมหมวกนิรภัย มีกี่เปอร์เซ็นต์'
  },
  subtitle: {
    text: ''
  },
  xAxis: {
    categories: [''],
    tickmarkPlacement: 'on',
    title: {
      enabled: false
    }
  },
  yAxis: {
    title: {
      text: 'จำนานครั้งในการเกิด คิดเป็น %'
    },
    labels: {
      formatter: function () {
        return this.value / 100;
      }
    }
  },
  tooltip: {
    split: true,
    valueSuffix: ' %'
  },
  plotOptions: {
    area: {
      stacking: 'normal',
      lineColor: '#666666',
      lineWidth: 50,
      marker: {
        lineWidth: 30,
        lineColor: '#666666'
      }
    }
  },
  series: [{
    name: 'สวมหมวกกันน็อค รถล้ม',
    data: [65]
  },{
    name: 'ไม่สวมหมวกกันน็อค รถล้ม',
    data: [35]
  }]
});

Highcharts.chart('container3', {
    chart: {
        type: 'column'
    },
    title: {
    text: 'สถานที่ที่เกิดขึ้นบ่อย 10 อันดับแรก'
    },
    subtitle: {
	
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'จำนวนครั้งในการเกิดขึ้นพร้อมกัน - บนแท่งกราฟแสดง %'
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
                format: '{point.y:100f}%'
            }
        }
    },

    tooltip: {
        headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
        pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}%</b> of total<br/>'
    },

    "series": [
        {
            "name": "Browsers",
            "colorByPoint": true,
            "data": [
                {
                    "name": "ลักษณานิเวศน์ 1",
                    "y": 60,
                    "drilldown": "ลักษณานิเวศน์ 1"
                },
                {
                    "name": "ลักษณานิเวศน์ 6",
                    "y": 68,
                    "drilldown": "ลักษณานิเวศน์ 6"
                },
                {
                    "name": "ลักษณานิเวศน์ 10",
                    "y": 63,
                    "drilldown": "ลักษณานิเวศน์ 10"
                },
                {
                    "name": "ลักษณานิเวศน์ 12",
                    "y": 50,
                    "drilldown": "ลักษณานิเวศน์ 12"
                },
                {
                    "name": "อาคารเครื่องมือ 2",
                    "y": 45,
                    "drilldown": "อาคารเครื่องมือ 2"
                },
                {
                    "name": "อาคารเครื่องมือ 8",
                    "y": 43,
                    "drilldown": "อาคารเครื่องมือ 8"
                },
                {
                    "name": "อาคารกีฬาในร่ม",
                    "y": 30,
                    "drilldown": "อาคารกีฬาในร่ม"
                },
                {
                    "name": "โรงอาหารกลางคืน",
                    "y": 32,
                    "drilldown": "โรงอาหารกลางคืน"
                },
                {
                    "name": "ถนนหน้ามหาวิทยาลัย",
                    "y": 20,
                    "drilldown": "ถนนหน้ามหาวิทยาลัย"
                },
                {
                    "name": "ถนนหน้าโรงพยาบาลท่าศาลา",
                    "y": 10,
                    "drilldown": "ถนนหน้าโรงพยาบาลท่าศาลา"
                }
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
            }
            
        ]
    }
});

Highcharts.chart('container4', {
    chart: {
        type: 'column'
    },
    title: {
    text: 'เหตุการณ์ที่เกิดร่วมกัน กับลักษณะการชนและอวัยวะ'
    },
    subtitle: {
	
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'จำนวนครั้งในการเกิดขึ้นพร้อมกัน - บนแท่งกราฟแสดง %'
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
            "name": "Browsers",
            "colorByPoint": true,
            "data": [
                {
                    "name": "ขาซ้าย ",
                    "y": 65,
                    "drilldown": "ขาซ้าย "
                },
                {
                    "name": "แขนขวา",
                    "y": 60,
                    "drilldown": "แขนขวา"
                },
                {
                    "name": "มือซ้าย ",
                    "y": 55,
                    "drilldown": "มือซ้าย "
                },
                {
                    "name": "ขาซ้าย,ขาวา ",
                    "y": 90,
                    "drilldown": "ขาซ้าย,ขาวา "
                },
                {
                    "name": "มือซ้าย,ขาซ้าย ",
                    "y": 90,
                    "drilldown": "มือซ้าย,ขาซ้าย "
                }
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
            }
            
        ]
    }
});

</script>