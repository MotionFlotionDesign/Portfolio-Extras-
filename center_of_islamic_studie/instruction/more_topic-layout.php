<!DOCTYPE html>
<html lang="en">

<?php include('../more_topic/inc_head.php'); ?><!-- head -->

<body>

<!--***************************************** CONTAINER *********************************************-->
<div class="container-fluid">

<!--***************************************** MAIN HOLDER *********************************************-->
  <div class="container-page">

<!--***************************************** HEADER *********************************************-->    
    
    <?php include('../more_topic/inc_header.php'); ?><!-- Header -->
    
<!--***************************************** END HEADER *********************************************-->  

<!--********************************************* LEFT SIDE BAR ****************************************** -->    
    
    <?php include('../more_topic/inc_more_topic_sidebar.php'); ?><!-- Sidebar -->

<!--^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ END OF LEFT SIDE BAR ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^-->

<!-- >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> MAIN CONTENT <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< -->
    <div class="container">
<!-- ************************************* Slider ***************************************** -->     
      
    <?php include('../more_topic/inc_slider.php'); ?><!-- Image Slider -->

<!-- ************************************* Slider ***************************************** --> 
    <?php include('../more_topic/topic/PATH TO RIGHT BLUE BAR.PHP'); ?><!-- Blue Bar -->
      <section class="long-text">
        <article class="long-text-body">
          <hgroup>
            <div class="col-md-12">
            <h1><img src="../images/_gear.png" height="40" width="40" alt="">CATEGORY NAME</h1>
            </div>
          </hgroup>
          
          <table class="table table-bordered" />
            <thead>
              <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Date</th>
              </tr>
            </thead><!-- END OF <thead>-->
            <tbody>
              <tr>
                <td><a href="../menu/latest_events/PATH TO ARTICLE.PHP">ARTICLE NAME</a></td>
                <td>Faysal Burham</td>
                <td>April 18,2015</td>
              </tr>
              <tr>
                <td><a href="../menu/latest_events/PATH TO ARTICLE.PHP">ARTICLE NAME</a></td>
                <td>Faysal Burham</td>
                <td>April 18,2015</td>
              </tr>
              <tr>
                <td><a href="../menu/latest_events/PATH TO ARTICLE.PHP">ARTICLE NAME</a></td>
                <td>Faysal Burham</td>
                <td>April 18,2015</td>
              </tr>


              REPEAT THIS PROCESS UNTIL YOUR DONE THEN CLOSE WITH <!-- <tbody> -->


            </tbody><!-- END OF <tbody>-->
          </table><!-- END OF <table class="table table-bordered" />-->
        </article><!-- END OF <article class="long-text-body">-->
      </section><!-- END OF <section class="long-text">-->
      
      <!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ END MAIN CONTENT ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
    </div><!-- END OF <div class="container">-->
  </div><!-- END OF <div class="container-page">-->
</div><!-- END OF <div class="container-fluid">-->
  <!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ END OF CONTAINER  ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^-->
  <!-- >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> BEGINNING OF FOOTER <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< -->
  
  <?php include('../more_topic/inc_footer.php'); ?><!-- Footer -->

<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ END OF FOOTER ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="../js/jquery-1.11.3.min.js"></script>
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <script type="text/javascript">
  // JS FOR IMAGE SLIDER
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