<?php 
 //var_dump($showacc_res);
 ?>
  
 
       <div class="breadcrumbs">
            <div class="col-sm-1000">
                <div class="page-header float-left">
                    <div class="page-title">
                        <center><h4>-------------- ความสัมพัมธ์ระหว่างเหตุการณ์ในอุบัติเหตุประจำปี พ.ศ. 2560 (confidence) --------------</h4></center>
                    </div>
                </div>
            </div>
            <div class="col-sm-1000">
                <div class="page-header float-right">
                    <div class="page-title">
                    </div>
                </div>
            </div>
        
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<div id="container" style="min-width: 310px; height: 500px; margin: 0 auto"></div>

<div id="container3" style="min-width: 310px; height: 500px; margin: 0 auto"></div>
<div id="container4" style="min-width: 310px; height: 500px; margin: 0 auto"></div>

<script type="text/javascript">


Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
    text: 'กฎความสัมพันธ์ที่เกี่ยวข้องกับอุบัติเหตุรถจักรยานยนต์ล้มของนักศึกษา'
    },
    subtitle: {
	
    },
    xAxis: {
        type: 'category'
    },
    yAxis: {
        title: {
            text: 'จำนวนครั้งในการเกิดขึ้นร่วมกัน - บนแท่งกราฟแสดง %'
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
                    "name": "[รถล้ม] --> [ชั้นปีที่3]",
                    "y": 21,
                    "drilldown": "[รถล้ม] --> [ชั้นปีที่3]"
                },
                {
                    "name": "[D207] --> [บาดเจ็บเล็กน้อย, weekend]",
                    "y": 21,
                    "drilldown": "[D207] --> [บาดเจ็บเล็กน้อย, weekend]"
                },
                {
                    "name": "[D207] --> [กลุ่มอวัยวะแขนและขา, weekdays, สวมหมวกนิรภัย]",
                    "y": 21,
                    "drilldown": "[D207] --> [กลุ่มอวัยวะแขนและขา, weekdays, สวมหมวกนิรภัย]"
                },
                {
                    "name": "[D207] --> [D207] --> [บาดเจ็บเล็กน้อย, weekdays, ชั้นปีที่1]",
                    "y": 21,
                    "drilldown": "[D207] --> [D207] --> [บาดเจ็บเล็กน้อย, weekdays, ชั้นปีที่1]"
                },
                {
                    "name": "[D207] --> [กลุ่มอวัยวะแขนและขา, ผู้หญิง,บาดเจ็บเล็กน้อย,ชั้นปีที่1]",
                    "y": 21,
                    "drilldown": "[D207] --> [กลุ่มอวัยวะแขนและขา, ผู้หญิง,บาดเจ็บเล็กน้อย,ชั้นปีที่1]"
                },
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



Highcharts.setOptions({
	colors: Highcharts.map(Highcharts.getOptions().colors, function (color) {
	 return {
	   radialGradient: {
	     cx: 0.5,
	     cy: 0.3,
	     r: 0.7
	   },
	   stops: [
	     [0, color],
	     [1, Highcharts.Color(color).brighten(-0.3).get('rgb')] // darken
	   ]
	 };
	})
	});
	//Build the chart
	/*Highcharts.chart('container2', {
	chart: {
	 plotBackgroundColor: null,
	 plotBorderWidth: null,
	 plotShadow: false,
	 type: 'pie'
	},
	title: {
	 text: 'เหตุที่เกี่ยวข้องกับล้มรถจักรยานยนต์'
	},
	tooltip: {
	 pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
	},
	plotOptions: {
	 pie: {
	   allowPointSelect: true,
	   cursor: 'pointer',
	   dataLabels: {
	     enabled: true,
	     format: '<b>{point.name}</b>: {point.percentage:.1f} %',
	     style: {
	       color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
	     },
	     connectorColor: 'silver'
	   }
	 }
	},
	series: [{
	 name: 'Share',
	 data: [
	   { name: 'รถจักรยานยนต์ล้ม ----> ปี1 ', y: 80 },
	   { name: 'รถจักรยานยนต์ล้ม ----> ปี2 ', y: 10 },
	   { name: 'รถจักรยานยนต์ล้ม ----> ปี3 ', y: 1 },
	   { name: 'รถจักรยานยนต์ล้ม ----> ปี4 ', y: 6 },
	   { name: 'รถจักรยานยนต์ล้ม ----> ปี5-8', y: 3 },
	 ]
	}]
	});*/


	Highcharts.chart('container3', {
	    chart: {
	        type: 'column'
	    },
	    title: {
	    text: 'เหตุการณ์ที่เกิดขึ้นในวันธรรมดาที่ส่งผลต่อการเกิดอุบัติเหตุทางจราจร'
	    },
	    subtitle: {
		
	    },
	    xAxis: {
	        type: 'category'
	    },
	    yAxis: {
	        title: {
	            text: 'จำนวนครั้งในการเกิดขึ้นร่วมกัน - บนแท่งกราฟแสดง %'
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
	                    "name": "[weekdays] --> [รถล้ม, บาดเจ็บปานกลาง]",
	                    "y": 21,
	                    "drilldown": "[weekdays] --> [รถล้ม, บาดเจ็บปานกลาง]"
	                },
	                {
	                    "name": "[weekdays] --> [บาดเจ็บเล็กน้อย, สวมหมวกนิรภัย]",
	                    "y": 21,
	                    "drilldown": "[weekdays] --> [บาดเจ็บเล็กน้อย, สวมหมวกนิรภัย]"
	                },
	                {
	                    "name": "[weekdays] --> [MI, Thursday]",
	                    "y": 21,
	                    "drilldown": "[weekdays] --> [MI, Thursday]"
	                },{
	                    "name": "[weekdays] --> [กลุ่มอวัยวะแขนและขา, รถล้ม, Thursday]",
	                    "y": 21,
	                    "drilldown": "[weekdays] --> [กลุ่มอวัยวะแขนและขา, รถล้ม, Thursday]"
	                },{
	                    "name": "[weekdays] --> [กลุ่มอวัยวะแขนและขา, ผู้หญิง, ถนนหน้ามหาวิทยาลัย]",
	                    "y": 21,
	                    "drilldown": "[weekdays] --> [กลุ่มอวัยวะแขนและขา, ผู้หญิง, ถนนหน้ามหาวิทยาลัย]"
	                },
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
	    text: ' เหตุการณ์ที่ส่งผลกระทบกับผู้ขับขี่ที่เป็นผู้หญิง'
	    },
	    subtitle: {
		
	    },
	    xAxis: {
	        type: 'category'
	    },
	    yAxis: {
	        title: {
	            text: 'จำนวนครั้งในการเกิดขึ้นร่วมกัน - บนแท่งกราฟแสดง %'
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
		               "name": "[ผู้หญิง] --> [รถล้ม, ชั้นปีที่2]",
	                    "y": 21,
	                    "drilldown": "[ผู้หญิง] --> [รถล้ม, ชั้นปีที่2]"
	                	},
	                	{
	                	"name": "[ผู้หญิง] --> [weekdays, ถนนหน้ามหาวิทยาลัย]",
                    	"y": 21,
                   		 "drilldown": "[ผู้หญิง] --> [weekdays, ถนนหน้ามหาวิทยาลัย]"
               			 },
	                {
	                    "name": "[ผู้หญิง] --> [รถล้ม, บาดเจ็บเล็กน้อย, ถนนหน้ามหาวิทยาลัย]",
	                    "y": 21,
	                    "drilldown": "[ผู้หญิง] --> [รถล้ม, บาดเจ็บเล็กน้อย, ถนนหน้ามหาวิทยาลัย]"
	                },
	                {
	                    "name": "[ผู้หญิง] --> [รถล้ม, weekend, Saturday]",
	                    "y": 21,
	                    "drilldown": "สารสนเทศศาสตร์ ----> รถจักรยานยนต์ล้ม"
	                },{
	                    "name": "[ผู้หญิง] --> [กลุ่มอวัยวะแขนและขา, รถล้ม, weekdays, ชั้นปีที่1]",
	                    "y": 21,
	                    "drilldown": "[ผู้หญิง] --> [กลุ่มอวัยวะแขนและขา, รถล้ม, weekdays, ชั้นปีที่1]"
	                },
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
