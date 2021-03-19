<?php
require_once('auth.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Sussex</title>

	   <style>
        #chart {
            width       : 100%;
            height      : 500px;
            font-size   : 11px;
        } 
        .amcharts-pie-slice {
          transform: scale(1);
          transform-origin: 50% 50%;
          transition-duration: 0.3s;
          transition: all .3s ease-out;
          -webkit-transition: all .3s ease-out;
          -moz-transition: all .3s ease-out;
          -o-transition: all .3s ease-out;
          cursor: pointer;
          box-shadow: 0 0 30px 0 #000;
      }

      .amcharts-pie-slice:hover {
          transform: scale(1.1);
          filter: url(#shadow);
      }                                         
  </style>
	
	<link rel="shortcut icon" href="agrilo.jpg">

	<!-- Bootstrap Core CSS -->
	<link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- MetisMenu CSS -->
	<link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="../dist/css/sb-admin-2.css" rel="stylesheet">

	<!-- Morris Charts CSS -->
	<link href="../vendor/morrisjs/morris.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


	<link href="../css/bootstrap-datepicker.min.css" rel="stylesheet">

	<link href="../js/datepicker.js" rel="stylesheet">

	<link href="../js/bootstrap-datepicker.min.js" rel="stylesheet">

	<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
	<script src="lib/jquery.js" type="text/javascript"></script>
	<script src="src/facebox.js" type="text/javascript"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$('a[rel*=facebox]').facebox({
				loadingImage : 'src/loading.gif',
				closeImage   : 'src/closelabel.png'
			})
		})
	</script>

	  <script language="javascript">
    function Clickheretoprint()
    { 
      var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=800, height=400, left=100, top=25"; 
      var content_vlue = document.getElementById("content").innerHTML; 

      var docprint=window.open("","",disp_setting); 
      docprint.document.open(); 
      docprint.document.write('</head><body onLoad="self.print()" style="width: 1000px; height:400; font-size: 20px; font-family: arial;">');          
      docprint.document.write(content_vlue); 
      docprint.document.close(); 
      docprint.focus(); 
  }
</script>


</head>

<body>

	<div id="wrapper">

		<?php include('navfixed.php');?>


		<div id="page-wrapper">
			<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header">Welcome:<strong> <?php echo $session_admin_name;?></strong></h3>
				</div>

				 <div class="content">
      <div class="container-fluid">
        


        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>

				<!-- /.col-lg-12 -->
			</div>

				<!-- <div id="myCarousel" class="carousel slide">
				
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
						<li data-target="#myCarousel" data-slide-to="3"></li>
						<li data-target="#myCarousel" data-slide-to="4"></li>

					</ol>

				
					<center>
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<img src="pics/1.jpg" width="45%" height="10px" >
							</div>
							<div class="item">
								<img src="pics/2.jpg" width="45%" height="10px">
							</div>
							<div class="item">
								<img src="pics/3.jpg" width="45%" height="10px">
							</div>
							<div class="item">
								<img src="pics/6.jpg" width="45%" height="10px">
							</div>
							<div class="item">
								<img src="pics/7.jpg" width="45%" height="10px">
							</div>
						</div>
					</center>

				
					<a class="left carousel-control" href="#myCarousel" data-slide="prev" >
						<span class="icon-prev"></span>
					</a>
					<a class="right carousel-control" href="#myCarousel" data-slide="next">
						<span class="icon-next"></span>
					</a>
				</div> -->
	


<!-- /.row -->
</div>
<!-- /.row -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->



<!-- jQuery -->
<script src="../vendor/jquery/jquery.min.js"></script>


        <script src="plugins/amcharts/amcharts.js"></script>
        <script src="plugins/amcharts/animate.min.js"></script>
        <script src="plugins/amcharts/themes/light.js"></script>
        <script src="plugins/amcharts/export/export.min.js"></script>
        <script src="plugins/amcharts/themes/patterns.js"></script>
        <script type="plugins/export/export.css" type="text/css" media="all""></script>
        <script src="plugins/amcharts/plugins/responsive/responsive.min.js"></script>
        <script src="plugins/amcharts/serial.js"></script>
        <script src="plugins/amcharts/pie.js"></script>


        <script type="text/javascript">
            var raw = '<?php echo $d; ?>';
            var data = JSON.parse(raw);
            var chart = AmCharts.makeChart( "chart", {
                "type": "pie",
                "theme": "light",
                "dataProvider": data ,
                "titleField": "title",
                "valueField": "value",
                "labelRadius": 25,
                
                "radius": "37%",
                "innerRadius": "40%",
                "labelText": " [[title]] ([[percents]]%)",
                "export": {
                    "enabled": true
                },
                "depth3D": 10,
                "angle": 17,
                "fontFamily": "Helvetica",
                "fontSize": 13,
                "balloonText": "[[value]]",
                "color": "#222",
        // "colors": ['#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222']
        "colors": ['#FF6600', '#FCD202', '#B0DE09', '#0D8ECF', '#2A0CD0', '#CD0D74', '#CC0000', '#00CC00', '#0000CC', '#DDDDDD', '#999999', '#222333', '#990000']
    } );
</script>


<!-- Bootstrap Core JavaScript -->
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../vendor/metisMenu/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="../vendor/raphael/raphael.min.js"></script>
<script src="../vendor/morrisjs/morris.min.js"></script>
<script src="../data/morris-data.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>
<script>
	$('.carousel').carousel({
        interval: 3000 //changes the speed
    })
</script>

</body>

</html>
