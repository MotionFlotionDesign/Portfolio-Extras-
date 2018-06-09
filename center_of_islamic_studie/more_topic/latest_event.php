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
      <?php include('../more_topic/topic/latest-events.php'); ?>
      <section class="long-text">
        <article class="long-text-body">
          <hgroup>
            <div class="col-md-12">
              <h1><img src="../images/_gear.png" height="40" width="40" alt="">Latest Event</h1>
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
              <td><img src="../images/_gear.png" height="20" width="20" alt=""><a href="../menu/latest_events/foreign_policy_of_islam_regarding_non_Muslims.php">Foreign Policy of Islam Regarding non-Muslims: Peace or War?</a></td>
              <td>Faysal Burham</td>
              <td>April 18,2015</td>
            </tr>
            <tr>
              <td><img src="../images/_gear.png" height="20" width="20" alt=""><a href="../menu/latest_events/is_there_a_culture_of_bigotry_and_violence_in_Islam.php">Is There a Culture of Bigotry and Violence in Islam</a></td>
              <td>Faysal Burham</td>
              <td>April 18,2015</td>
            </tr>
            <tr>
              <td><img src="../images/_gear.png" height="20" width="20" alt=""><a href="../menu/latest_events/innovation_(bid'ah)_in_islam.php">Innovation (Bid'ah) in Islam</a></td>
              <td>Faysal Burham</td>
              <td>April 18,2015</td>
            </tr>
            <tr>
              <td><img src="../images/_gear.png" height="20" width="20" alt=""><a href="../menu/latest_events/untold_aspects_of_islam.php">Untold Aspects of Islam</a></td>
              <td>Faysal Burham</td>
              <td>April 18,2015</td>
            </tr>
            <tr>
              <td><img src="../images/_gear.png" height="20" width="20" alt=""><a href="../menu/latest_events/muhammad's_protection_of_christians_st_ catherine_monastery.php">Muhammad's Protection of Christians-St. Catherine Monastery</a></td>
              <td>Faysal Burham</td>
              <td>April 18,2015</td>
            </tr>
            <tr>
              <td><img src="../images/_gear.png" height="20" width="20" alt=""><a href="../menu/latest_events/qur'anic_mis_interpreted_verses.php">Qur'anic Concepts of the Ethics of Warfare</a></td>
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