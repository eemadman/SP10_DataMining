 <?php 
 //var_dump($showacc_res);
 ?>
  
 
       <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>สถิติลักษณะการชนของรถจักรยานยนต์</h1>
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
         <style>*, *::before, *::after {
  box-sizing: border-box;
}

body,
html,
#zingchart-1 {
  height: 100%;
  width: 100%;
}

.zingchart-tooltip {
  padding: 7px 5px;
  border-radius: 1px;
  line-height: 20px;
  background-color: #fff;
  border: 1px solid #dcdcdc;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
  -webkit-font-smoothing: antialiased;
}
.zingchart-tooltip .scalex-value {
  font-size: 14px !important;
  font-weight: normal !important;
  line-height: 24px;
  color: #838383;
}
.zingchart-tooltip .scaley-value {
  color: #4184f3;
  font-size: 24px !important;
  font-weight: normal !important;
}

.zc-ref {
  display: none;
}

</style>
 <script src= "https://cdn.zingchart.com/zingchart.min.js"></script>
		<script> zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
		ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9","ee6b7db5b51705a13dc2339db3edaf6d"];</script>	<script src='//code.jquery.com/jquery-2.1.4.min.js'></script>
 
   		<div id="zingchart-1"><a class="zc-ref" href="https://www.zingchart.com/">Charts by ZingChart</a></div>
   		
   		<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/drilldown.js"></script>
<script type="text/javascript">

var primaryColor = "#4184F3";
var primaryColorHover = "#3a53c5";
var secondaryColor = '#DCDCDC'
var scaleTextColor = '#999';

var chartConfig = {
  "type": "bar",
  "plot": {
    "stacked": true    
  },
  "backgroundColor": "#fff",
  "scaleX": {
    "values": [
      "Cats",
      "Dogs",
      "Fish",
      "Birds"
    ],
    "lineWidth": 0,
    "lineColor":"none",
    "tick": {
      "visible": false
    },
    "guide": {
      "visible": false
    },
    "item": {
      "font-color": "#999"
    }
  },
  "scaleY": {
    "lineWidth":0,
    "lineColor":"none",
    "min-value": 0,
    "max-value": 495,
    "step": 123.75,
    "tick": {
      "visible": false
    },
    "guide": {
      "lineStyle": "solid"
    },
    "item": {
      "font-color": "#999"
    }
  },
  "tooltip": {
    "htmlMode": true,
    "backgroundColor": "none",
    "padding": 0,
    "placement": "node:center",
    "text": "<div class='zingchart-tooltip'><div class='scalex-value'>%kt<\/div><div class='scaley-value'>$%v<\/div><\/div>"
  },
  "series": [
    {

      "values": [
        100,
        180,
        120,
        120
        
      ],
      "alpha": 1,
      "background-color": "#4184f3",
      "hover-state" : {
        backgroundColor: '#2956A0'
       }
    },
    {
      "values": [
        125,
        125,
        125,
        125
      ],
      "alpha": 1,
      "background-color": "#db4437",
      "hover-state" : {
        backgroundColor: '#901E15'
       }
    },
    {
      "values": [
        125,
        145,
        135,
        165
      ],
      "alpha": 1,
      "background-color": "#f4b400",
      "border-radius-top-left": "3px",
      "border-radius-top-right": "3px",
      "hover-state" : {
        backgroundColor: '#8C6A0B'
       }
    }
  ]
};



  chartConfig.plot.animation = {
      'method': 'LINEAR',
      'delay': 0,
      'effect': 'ANIMATION_EXPAND_VERTICAL',
      'sequence': 'ANIMATION_BY_PLOT_AND_NODE',
      'speed': 10
    }
  zingchart.render({
    id: 'zingchart-1',
    data: chartConfig,
    output: 'canvas',
    height:'100%',
    width:'100%'
  });
</script>