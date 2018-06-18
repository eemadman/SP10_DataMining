       <div class="breadcrumbs">
            <div class="col-sm-20">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h4>จำนวนการเกิดอุบัติเหตุรายสัปดาห์ (จันทร์-อาทิตย์) ของนักศึกษาชั้นปีที่ 1 – 4 ที่เกิดขึ้นในปี พ.ศ.2560 - 2561 ของนักศึกษามหาวิทยาลัยวลัยลักษณ์</h4>
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
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>

<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>




<script type="text/javascript">


Highcharts.chart('container', {
  chart: {
    type: 'areaspline'
  },
  title: {
    text: ''
  },
  legend: {
    layout: 'vertical',
    align: 'left',
    verticalAlign: 'top',
    x: 150,
    y: 100,
    floating: true,
    borderWidth: 1,
    backgroundColor: (Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'
  },
  xAxis: {
    categories: [
      'Monday',
      'Tuesday',
      'Wednesday',
      'Thursday',
      'Friday',
      'Saturday',
      'Sunday'
    ],
    plotBands: [{ // visualize the weekend
      from: 4.5,
      to: 6.5,
      color: 'rgba(68, 170, 213, .2)'
    }]
  },
  yAxis: {
    title: {
      text: 'จำนวนครั้งในการเกิด'
    }
  },
  tooltip: {
    shared: true,
    valueSuffix: ' คน'
  },
  credits: {
    enabled: false
  },
  plotOptions: {
    areaspline: {
      fillOpacity: 0.5
    }
  },
  series: [{
	    name: 'นักศึกษาชั้นปีที่  1',
	    data: [3, 4, 3, 5, 4, 10, 12]
	  },
	  {
		    name: 'นักศึกษาชั้นปีที่  2',
		    data: [6, 8, 1, 2, 3, 6, 10]
		  },
		  {
			    name: 'นักศึกษาชั้นปีที่  3',
			    data: [9, 1, 5, 7, 3, 9, 8]
			  },
		   {
    name: 'นักศึกษาชั้นปีที่  4',
    data: [1, 3, 4, 3, 3, 5, 4]
  }]
});
</script>
