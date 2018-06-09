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
			<?php include('../more_topic/topic/famous-studies.php'); ?>
      		<section class="long-text">
        		<article class="long-text-body">
          		<hgroup> 
          			<div class="col-md-12">    
            			<h1><img src="../images/_gear.png" height="40" width="40" alt="">Latest Topic</h1>
           			</div>
          		</hgroup> 

<table class="table table-bordered"/>
<thead>
	<tr>
		<th >Title</th>
	
		<th>Author</th>
	
		<th>Date</th>
	</tr>
</thead>
<tbody>
	<tr>
		<td><img src="../images/_gear.png" height="20" width="20" alt=""><a href="../menu/case_studies/wisdom_(al_hikmah)_a_fresh_look_at_islam.php">Wisdom (Al-Hikmah) - A Paradigm for Social Sunan</a></td>
		<td>Faysal Burham</td>
		<td>April 18,2015</td>
	</tr>
	<tr>
		<td><img src="../images/_gear.png" height="20" width="20" alt=""><a href="../menu/case_studies/purification_of_inner_self_(al_tazkiyah).php">Al Tazkiyah (Inner-Self Purification) - Essential for Success</a></td>
		<td>Faysal Burham</td>
		<td>April 18,2015</td>
	</tr>
	<tr>
		<td><img src="../images/_gear.png" height="20" width="20" alt=""><a href="../menu/case_studies/early_history_of_islam (a_refreshing_look_at_the_sirah).php">Early History of Islam - A Refreshing Look at the Sirah</a></td>
		<td>Faysal Burham</td>
		<td>April 18,2015</td>
	</tr>
	<tr>	
		<td><img src="../images/_gear.png" height="20" width="20" alt=""><a href="../menu/case_studies/where_lies_the_sunnah_of_prophet_muhammad.php">Where Lies The Sunnah of Prophet Muhammad</a></td>
		<td>Faysal Burham</td>
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