<!DOCTYPE html>
<html>
	<head>
	
		<script src= "https://cdn.zingchart.com/zingchart.min.js"></script>
		<script> zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
		ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9","ee6b7db5b51705a13dc2339db3edaf6d"];</script></head>
	<body>
		<div id='myChart'></div>
		<script>
		html, body, #myChart {
  height:100%;
  width:100%;
}
		</script>
		<script>
var myConfig = {
  "history":{
    "borderColor": "#616161",
    "borderWidth": 3,
    "y":20,
    "height": 30,
    "width": 45,
    "borderRadius": 2,
    "item":{
      "backgroundColor": "#616161",
      "borderColor":"#616161",
      "text":"Some Text",
      "fontColor":"red",
      "fontSize":10
    },
    "itemOff":{
      "backgroundColor":"#f0efef",
      "borderColor":"#bdbdbd",
      "height": 3,
      "width": 3,
      "size": 3
    }
  },
  "graphset":[
  {
 	"type": "pie", 
 	"title":{
 	  "text": "Earnings Insights<br>Corporate Overview",
 	  "align": "right",
 	  "fontColor": "#616161"
 	},
 	"legend":{
 	  "text":"%t<br>",
 	  "width": 120,
 	  "verticalAlign": "middle",
 	  "borderWidth": 0,
 	  "toggleAction": "remove",
 	  "item":{
 	    "padding": 5,
      "borderRadius": 3,
      "fontColor": "#fff",
      "align": "right",
      "width": 100
 	  },
 	  "header":{
 	    "text":"Business Units",
 	    "align": "right",
 	    "fontSize": 13,
 	    "bold": true,
 	    "fontColor": "#616161"
 	  },
 	  "itemOff":{
 	    "alpha": 0.7,
 	    "textAlpha": 1,
 	    "fontColor": "#616161",
 	    "textDecoration": "line-through",
 	    "lineWidth": 2
 	  },
 	  "markerOff":{
 	    "alpha": 0.2
 	  }
 	},
 	"plot":{
		"url": "//demos.zingchart.com/view/CW775ZBP/drilldown_echo_charts.php?seriesId=%data-queryParameter",
		"target": "graph",
 	  "refAngle": 270,
 	  "decimals": 0,
 	  "thousandsSeparator": ",",
 	  "detach": false,
 	  "valueBox":{
 	    "decimals": 2
 	  },
 	  "animation":{
 	    "effect": 3,
 	    "method": 1,
 	    "sequence": 1,
 	    "onLegendToggle": false
 	  }
 	},
 	"tooltip":{
 	  "text":"%t<br>$%v",
 	  "placement": "node:out",
 	  "offsetR": 10,
 	  "width": 110,
 	  "fontColor": "#fff",
 	  "borderRadius": 3,
 	  "bold": true,
 	  "align": "right"
  },
  "scale":{
    "sizeFactor": 0.75
  },
	"series" : [
		{
			"values" : [119968796],
			"data-queryParameter":"Operating_System",
			"text":"Operating System",
			"backgroundColor": "#4527A0",
			"legendText": "%t<br><b>$%v</b>",
			"legendMarker":{
			  "type": "circle",
			  "size": 7,
			  "borderColor": "#4527A0",
			  "borderWidth": 4,
			  "backgroundColor":"#fff"
			},
			"legendItem":{
        "backgroundColor": "#4527A0"
			},
			"tooltip":{
     	  "backgroundColor": "#4527A0"
     	}
		},
		{
			"values" : [97503958],
			"data-queryParameter":"Network_and_Tools",
			"text":"Network and Tools",
			"backgroundColor": "#1565C0",
			"legendText": "%t<br><b>$%v</b>",
			"legendMarker":{
			  "type": "circle",
			  "size": 7,
			  "borderColor": "#1565C0",
			  "borderWidth": 4,
			  "backgroundColor":"#fff"
			},
			"legendItem":{
        "backgroundColor": "#1565C0"
			}
		},
		{
			"values" : [85948575],
			"data-queryParameter":["Business_Division"],
			"text":"Business Division",
			"backgroundColor": "#AD1457",
			"legendText": "%t<br><b>$%v</b>",
			"legendMarker":{
			  "type": "circle",
			  "size": 7,
			  "borderColor": "#AD1457",
			  "borderWidth": 4,
			  "backgroundColor":"#fff"
			},
			"legendItem":{
        "backgroundColor": "#AD1457"
			}
		},
		{
			"values" : [62096876],
			"data-queryParameter":"Online_Services",
			"text":"Online Services",
			"backgroundColor": "#00695C",
			"legendText": "%t<br><b>$%v</b>",
			"legendMarker":{
			  "type": "circle",
			  "size": 7,
			  "borderColor": "#00695C",
			  "borderWidth": 4,
			  "backgroundColor":"#fff"
			},
			"legendItem":{
        "backgroundColor": "#00695C"
			}
		},
		{
			"values" : [40467564],
			"data-queryParameter":"Entertainment",
			"text":"Entertainment",
			"backgroundColor": "#EF6C00",
			"legendText": "%t<br><b>$%v</b>",
			"legendMarker":{
			  "type": "circle",
			  "size": 7,
			  "borderColor": "#EF6C00",
			  "borderWidth": 4,
			  "backgroundColor":"#fff"
			},
			"legendItem":{
        "backgroundColor": "#EF6C00"
			}
		}
	]
}
]
};

zingchart.render({ 
	id : 'myChart', 
	data : myConfig, 
	height: '100%', 
	width: '100%' 
});.

</script>

	</body>
</html>