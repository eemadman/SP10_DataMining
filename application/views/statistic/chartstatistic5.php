       <div class="breadcrumbs">
            <div class="col-sm-20">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h4>ชั้นปีที่ประสบอุบัติเหตุ ที่เกิดขึ้นในปี พ.ศ.2560 - 2561 ของนักศึกษามหาวิทยาลัยวลัยลักษณ์</h4>
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
    type: 'line'
  },
  title: {
    text: ''
  },
  subtitle: {
    text: ''
  },
  xAxis: {
    categories: ['ชั้นปี  1', 'ชั้นปี  2', 'ชั้นปี  3', 'ชั้นปี  4', 'ชั้นปี  5', 'ชั้นปี  6', 'ชั้นปี  7', 'ชั้นปี  8']
  },
  yAxis: {
    title: {
      text: 'จำนวนครั้งในการเกิด'
    }
  },
  plotOptions: {
    line: {
      dataLabels: {
        enabled: true
      },
      enableMouseTracking: false
    }
  },
  series: [{
    name: 'ปี พ.ศ. 2560',
    data: [26.5, 6.9, 9.5, 14.5, 18.4, 21.5, 25.2,7.0 ]
  }, {
    name: 'ปี พ.ศ. 2561',
    data: [16.6, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0,3.9 ]
  }]
});

</script>
