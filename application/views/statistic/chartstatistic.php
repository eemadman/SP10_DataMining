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

  
	<script src= "https://cdn.zingchart.com/zingchart.min.js"></script>
		<script> zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
		ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9","ee6b7db5b51705a13dc2339db3edaf6d"];</script>	<script src='//code.jquery.com/jquery-2.1.4.min.js'></script>
 <?php 
 //กราฟที่ 1
 ?>
		<div id='myChart'><a class="zc-ref" href="https://www.zingchart.com/">ลักษณะการชนของรถจักรยานยนต์</a></div>
		
   <script type="text/javascript">
  zingchart.THEME="classic";
var initState = null; // Used later to store the chart state before changing the data
var store = { // Data store
  ie:[["v11.0",24.1],["v8.0",17.2],["v9.0",8.1],["v10.0",5.3],["v6.0",1.1],["v7.0",0.5]],
  chrome:[["v40.0",4.8],["v41.0",4.3],["v42.0",3.7],["v39.0",3.0],["v36.0",2.5],["v43.0",1.4],["v31.0",1.2],["v35.0",0.8],["v38.0",0.6],["v32.0",0.6],["v37.0",0.4],["v33.0",0.2],["v34.0",0.1],["v30.0",0.1]],
  firefox:[["v35",2.8],["v36",2.3],["v37",2.3],["v34",1.3],["v38",1.0],["v31",0.3],["v33",0.2],["v32",0.1]],
  safari:[["v8.0",2.6],["v7.1",0.8],["v5.1",0.4],["v5.0",0.3],["v6.1",0.3],["v7.0",0.3],["v6.2",0.2]],
  opera:[["v12.x",0.25],["v28",0.2],["v27",0.15],["v29",0.1]]
};
var bgColors = ["#1976d2","#424242","#388e3c",]; // ie, chrome, ff, safari, opera, unknown
var myConfig = {
    "globals": {
        "font-family": "Helvetica"
    },
    "type": "bar",
    "background-color": "white",
    "title": {
        "color": "#606060",
        "background-color": "white",
        "text": "สถิติ  10 อันดับการเกิด"
    },
    "subtitle": {
        "color": "#606060",
        "text": ""
    },
    "scale-y": {
        "line-color": "none",
        "tick": {
            "line-color": "none"
        },
        "guide": {
            "line-style": "solid"
        },
        "item": {
            "color": "#606060"
        }
    },
    "scale-x": {
        "values": [

            /*"Chrome",
            "Firefox",
            "Safari",
            "Opera",
            "Unknown"*/
        ],
        "line-color": "#C0D0E0",
        "line-width": 1,
        "tick": {
            "line-width": 1,
            "line-color": "#C0D0E0"
        },
        "guide": {
            "visible": false
        },
        "item": {
            "color": "#606060"
        }
    },
    "crosshair-x": {
        "marker": {
            "visible": false
        },
        "line-color": "none",
        "line-width": "0px",
        "scale-label": {
            "visible": false
        },
        "plot-label": {
            "text": "%data-browser: %v% of total",
            "multiple": true,
            "font-size": "12px",
            "color": "#606060",
            "background-color": "white",
            "border-width": 3,
            "alpha": 0.9,
            "callout": true,
            "callout-position": "bottom",
            "shadow": 0,
            "placement": "node-top",
            "border-radius": 4,
            "offsetY":-20,
            "padding":8,
            "rules": [
                {
                    "rule": "%i==0",
                    "border-color": "#1976d2"
                },
                {
                    "rule": "%i==1",
                    "border-color": "#424242"
                },
                {
                    "rule": "%i==2",
                    "border-color": "#388e3c"
                },
                {
                    "rule": "%i==3",
                    "border-color": "#ffa000"
                },
                {
                    "rule": "%i==4",
                    "border-color": "#7b1fa2"
                },
                {
                    "rule": "%i==5",
                    "border-color": "#c2185b"
                }
            ]
        }
    },
    "plot": {
        "data-browser": [
        	 <?php foreach($insert_res as $row){ ?>
             "<?php echo $row->accident_car ?>",
             <?php } ?>
        ],
        "cursor": "hand",
        "value-box": {
            "text": "%v%",
            "text-decoration": "underline",
            "color": "#606060"
        },
        "tooltip": {
            "visible": false
        },
        "animation": {
            "effect": "7"
        },
         "rules": [
                {
                    "rule": "%i==0",
                    "background-color": "#1976d2"
                },
                {
                    "rule": "%i==1",
                    "background-color": "#424242"
                },
                {
                    "rule": "%i==2",
                    "background-color": "#388e3c"
                },
                {
                    "rule": "%i==3",
                    "background-color": "#ffa000"
                },
                {
                    "rule": "%i==4",
                    "background-color": "#7b1fa2"
                },
                {
                    "rule": "%i==5",
                    "background-color": "#c2185b"
                }
            ]
    },
    "series": [
        {
            "values": [
                56.33,
                24,
                10.4,
                4.8,
                0.9,
                0.2
            ]
        }
    ]
};

var updateChart = function(p){
  initState = zingchart.exec(p.id,'getdata'); // Gets the state of the chart when the node was clicked
  var newValues = null;
  var update = null;
  switch(p.nodeindex){
    case 0:
      newValues = store['ie'];
      update = true;
      break;
    case 1:
      newValues = store['chrome'];
      update = true;
      break;
    case 2:
      newValues = store['firefox'];
      update = true;
      break;
    case 3:
      newValues = store['safari'];
      update = true;
      break;
    case 4:
      newValues = store['opera'];
      update = true;
      break;
    case 5:
      update = false; // We don't want to allow drilldown for unknown
      break;
  }
  if(update){
    zingchart.unbind(p.id, 'node_click'); // Disable node_click for second level
    zingchart.exec(p.id, 'modify', {
      update:false, // Making multiple changes, queue these changes
      data:{
        "crosshair-x":{
          "plot-label":{
            "text":"%v% of total",
            "rules":[],
            "border-color": bgColors[p.nodeindex]
          }
        },
        "plot":{
          "cursor":null,
          "rules":[],
          "background-color": bgColors[p.nodeindex]
        },
        "scale-x":{
          "values":[]
        }
      }
    });
    zingchart.exec(p.id, 'setseriesvalues',{ // Replaces all values at plotindex 0
      update:false, // Queue these, too
      plotindex:0,
      values:newValues
    });
    zingchart.exec(p.id,'update'); // Push queued changes
    zingchart.bind(p.id, 'animation_end', function(){ // When the animation ends...
      zingchart.exec(p.id, 'addobject',{ // ...add a back button
        type:'shape',
        data:{
          "type":"rectangle",
          "id":"back_btn",
          "height":20,
          "width":70,
          "background-color":"#ffffff #f6f6f6",
          "x":"80%",
          "y":"16%",
          "border-width":1,
          "border-color":"#888",
          "cursor":"hand",
          "label":{
            "text":"< Back",
            "color": "#606060"
          },
          "hover-state":{
            "background-color":"#1976D2 #ffffff",
            "border-color":"#57a2ff",
            "fill-angle": -180
          }
        }
      });
    });
  }
};

zingchart.render({
	id : 'myChart', 
	data : myConfig, 
	height: '550', 
	width: '1300' 
});

zingchart.bind('myChart','node_click',updateChart);

zingchart.shape_click = function(p){ // Listen for back button click
  zingchart.unbind(p.id,'animation_end');
  if (p.shapeid == "back_btn"){
    zingchart.exec(p.id,'setdata',{ // Set the data back to the state it was in when the node was clicked
      data:initState
    });
    zingchart.bind(p.id,'node_click',updateChart);
  }
}
</script>




