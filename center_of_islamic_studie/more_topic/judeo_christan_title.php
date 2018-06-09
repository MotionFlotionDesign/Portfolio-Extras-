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
      <?php include('../more_topic/topic/judeo.php'); ?>
      
      <section class="long-text">
        <article class="long-text-body">
          <hgroup>
            <div class="col-md-12">
              <h1><img src="../images/_gear.png" height="40" width="40" alt="">Judeo Christan Title</h1>
            </div>
          </hgroup>
          <table class="table table-bordered" />
          <thead>
            <tr>
              <th>Title</th>
              <th>Author</th>
              <th>Date</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><img src="../images/_gear.png" height="20" width="20" alt=""><a href="../menu/judeo-christian_titles/two_faiths_one_god.php">Two Faiths - One God</a></td>
              <td>Faysal Burham</td>
              <td>April 18,2015</td>
            </tr>
            <tr>
              <td><img src="../images/_gear.png" height="20" width="20" alt=""><a href="../menu/judeo-christian_titles/the_abrahamic_religions.php">Abrahamic Religions</a></td>
              <td>Faysal Burham</td>
              <td>April 18,2015</td>
            </tr>
            <tr>
              <td><img src="../images/_gear.png" height="20" width="20" alt=""><a href="../menu/judeo-christian_titles/saladin_(salahu_ad_deen).php">Saladin (Salahu Ad-Deen) Historical Event</a></td>
              <td>Faysal Burham</td>
              <td>April 18,2015</td>
            </tr>
            <tr>
              <td><img src="../images/_gear.png" height="20" width="20" alt=""><a href="../menu/judeo-christian_titles/muslims_alliance_with christians_and_jews.php">Muslim's Alliance</a></td>
              <td>Faysal Burham</td>
              <td>April 18,2015</td>
            </tr>
            <tr>
              <td><img src="../images/_gear.png" height="20" width="20" alt=""><a href="../menu/judeo-christian_titles/prophet_of_islam_and_the_jews.php">The Prophet of Islam and The Jews</a></td>
              <td>Faysal Burham</td>
              <td>April 18,2015</td>
            </tr>
            <tr>
              <td><img src="../images/_gear.png" height="20" width="20" alt=""><a href="../menu/judeo-christian_titles/qur'anic_mis_interpreted_verses.php">Qur'anic Misinterpreted Versus</a></td>
              <td>Faysal Burham</td>
              <td>April 18,2015</td>
            </tr>
          </tbody>
          </table>
        </article>
        <!-- END OF <article class="long-text-body">-->
      </section>
      <!-- END OF <section class="long-text">-->
      <!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ END MAIN CONTENT ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
    </div>
    <!-- END OF <div class="main-container">-->
  </div>
  <!-- END OF <div class="container">-->
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