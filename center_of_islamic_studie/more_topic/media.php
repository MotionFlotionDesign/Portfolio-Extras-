<!DOCTYPE html>
<html lang="en">

<?php include('../more_topic/inc_head.php'); ?>

<body>
	<div class="container-fluid">
<!--***************************************** CONTAINER *********************************************-->
	<div class="container-page">
		<?php include('../more_topic/inc_header.php'); ?>
		

<!--********************************************* LEFT SIDE BAR ****************************************** -->		
		
		<?php include('../more_topic/inc_more_topic_sidebar.php'); ?>

<!--^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ END OF LEFT SIDE BAR ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^-->

<!-- >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> MAIN CONTENT <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< -->
		<div class="container">
<!-- ************************************* Slider ***************************************** -->			
			
			<?php include('../more_topic/inc_slider.php'); ?>

<!-- ************************************* Slider ***************************************** -->	
			<?php include('../more_topic/topic/media.php'); ?>
      		<section class="long-text">
        		<article class="long-text-body">
          		<hgroup>
          			<div class="col-md-12">    
            			<h1><img src="../images/_gear.png" height="40" width="40" alt="">Media Library</h1>
           			</div>
          		</hgroup> 

			<table class="table table-bordered">
<thead>
	<tr>
		<th >Title</th>
	
		<th>Description</th>
	
		<th>Date</th>
	</tr>
</thead>
<tbody>
	<tr>
		<td><video width="240" controls>
          				<source src="../video/A documentary film on King Fahd Complex for Printing the Holy Quran (English).mp4" type="video/mp4">
         				</video></td>
		<td>Need a Description</td>
		<td>April 18,2015</td>
	</tr>
	<tr>
		<td><video width="240" controls>
          				<source src="../video/Commonly misunderstood texts of Quran (3-7) - Jamal Badawi.mp4" type="video/mp4">
         				</video></td>
		<td>Need a Description</td>
		<td>April 18,2015</td>
	</tr>
	<tr>
		<td><video width="240" controls>
          				<source src="../video/dn2013-0315.mp4" type="video/mp4">
         				</video></td>
		<td>Need a Description</td>
		<td>April 18,2015</td>
	</tr>
	<tr>	
		<td><video width="240" controls>
          				<source src="../video/Syria's Massacre - Dr. Muhammad Salah & Br. Ossama Elshamy.mp4" type="video/mp4">
         				</video></td>
		<td>Need a Description</td>
		<td>April 18,2015</td>
	</tr>
	<tr>
		<td><video width="240" controls>
          				<source src="../video/سلف إبن تيمية مجرمين و زنادقة.mp4" type="video/mp4">
         				</video></td>
		<td>Need a Description</td>
		<td>April 18,2015</td>
	</tr>
	</tbody>
	</table>
         </article><!-- END OF <article class="long-text-body">-->
			</section><!-- END OF <section class="long-text">-->
<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ END MAIN CONTENT ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->			
		</div><!-- END OF <div class="main-container">-->
	</div><!-- END OF <div class="container">-->
</div>
<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ END OF CONTAINER  ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^-->

<!-- >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> BEGINNING OF FOOTER <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< -->
	
	<?php include('../more_topic/inc_footer.php'); ?>

<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ END OF FOOTER ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="../js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript">
		$("#slideshow > div:gt(0)").hide();

		setInterval(function() { 
		  $('#slideshow > div:first')
		    .fadeOut(1000)
		    .next()
		    .fadeIn(1000)
		    .end()
		    .appendTo('#slideshow');
		},  3000);
	</script>

</body>
</html>