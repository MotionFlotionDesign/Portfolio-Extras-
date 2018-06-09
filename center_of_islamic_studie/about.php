<!DOCTYPE html>
<html lang="en">

<?php include('inc_head.php'); ?>

<body>
  <div class="container-fluid">
<!--***************************************** CONTAINER *********************************************-->
  <div class="container-page">
    <?php include('inc_header.php'); ?>
    

<!--********************************************* LEFT SIDE BAR ****************************************** -->    
    
    <?php include('inc_more_topic_sidebar.php'); ?>

<!--^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ END OF LEFT SIDE BAR ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^-->

<!-- >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>> MAIN CONTENT <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<< -->
    <div class="container">
<!-- ************************************* Slider ***************************************** -->     
      
      <?php include('inc_slider.php'); ?>

      <section class="long-text">
        <article class="long-text-body">
        <div class="col-md-12">
       <p> Presenting the main stream Islam, the Center for Islamic Studies, CIS (Institute of Arabic and Islamic Studies, ( IAIS is a non profit organization founded in 1994 in the state of California in the United States of America.</p>

<p>CIS Mission Statement:
The Center for Islamic Studies, CIS is dedicated to serving peace and fraternity for all through common grounds shared by the faiths of Islam, Christianity and Judaism. Together with Jewish and Christian organizations, CIS is working towards improving relations and building bridges between Muslims, Christians and Jews, as well as other communities. CIS is a voice in the main stream Islam working to improve its image and its true nature, and to bring about a more conducive environment for all.</p>

 

<p>What others said about IAIS:
Websites:
<a href="http://jannah.org/madina/index.php?topic=1936.0"></a>Madinat Al Muslimeen website </a>under Islamic History Page stated:</p>

<p>Found these things recently that are awesome:
Saladin: a Benevolent Man, Respected by both Muslims and Christians
hhh</p>

<p>Research and Information on Islam organization, on its website listed the Institute of Arabic and Islamic Studies for its audience stating:</p>

<p>Great Islamic sites - Perfect to begin gaining an overview and appreciation for Islam.
----Institute of Arabic and Islamic Studies----
0000</p>

 

<p>Indivisuals:</p>

<p>Jazzakallah I m so grateful for this Islamic wealth on this site, it is an ocean I cherish. Thanking all the scholars who contributed on this site.
Lots of duas
From sister in Islam
Aslaamoalikum wrwb</p>




<p>Re: Is There a Culture of Bigotry and Violence in Islam?
Your article is timely and very informative. I learned a lot from it, especially when it comes to the history of the Wahhabi creed. This is important because most westerners assume that Muslims are simply one big monolith, with everyone thinking and doing the same things--things that are unfortunately sensationalized negatively by our media. Also, your discussion of the inaccurate translations of the Koran is very interesting, even surprising.</p>

<p>Best,
Sister Anne</p>



<p>Salams Faysal,

I was eagerly reading your well-written articles; they are really informative. Please find the two articles we have published below, Thank you.

Quranic Verses Misinterpreted as Teaching Violence

Wisdom: A Fresh Look at Islam (Part 2).

Kind Regards,
Fouzia


Salams,</p>

<p>My name is Fouzia Muhammad, editor at OnIslam/ReadingIslam, and I'm writing to take your permission to republish some amazing articles from your website with mentioning the source. May Allah reward you abundantly for your efforts to serve Islam. I'm Greatly waiting for your reply. Thank you.

Kind Regards,
Fouzia</p>

<p>Salam, 
I happened to come across your website the other day, and I have to say that its about time that somebody finally responded to misunderstandings about Islam that everybody seems to have these days. I think your website should be put on every blog site mash'Allah. Keep doing what you are doing, may Allah bless you, ameen.

Raafeh
</p>

<p>Thank you for your attention:
Congratulations on your website which is informative and enlightening.

Regards,
Robbie Morse

Spacer</p>

<p>Dear Sir:
The mission statement of IAIS is refreshing, and one that is fully in keeping with my desires as a Christian. There simply MUST be a higher degree of mutual understanding amongst peoples. While we may disagree vigorously with each others theological points of view, it is important that we respect them, and choose to agree to disagree. Unfortunately, we cannot even get to that point if we don’t understand each other. So, I am trying to educate myself on the Islamic reality to contribute my one grain of sand towards improved relations between all monotheistic religions.

Thanks,

Bill Rigsby</p>


<p>Hi,
I was browsing through your website islamic-study.org and I found it very helpful. I would like to order a copy of the book "The Way of the Truth" By Shaykh Ahmad Kuftaro.

Thank you in Advance,
Abdullah</p>


<p>Dear Br. Faysal,
ASAWRB
Jazak Allah Khair in abundance for sharing very valuable article - was salam

http://www.islamic-study.org/wisdom_(al-hikmah).htm

Kalim Farooki</p>


<p>Dear Sir;
I enjoyed very much reading your article "Saladin (Salahu ad-Deen)" at the following site:

www.islamic-study.org/saladin-body.htm

Thank you very much,

Dennis Buerge
</p>

<p>Dear Sir,
Few months ago I requested a copy of "Reading the Muslim Mind" and I have never been more anxious to attain the knowledge you write about in your book. I have dedicated just about every waking minute to better understanding Islam and living by the wisdom I find in the covers of the Quran. I am in the process of reading the book a second time. Once I get it back from friends that wanted to read the material.</p>

Psyprus
</div>
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
  
  <?php include('inc_footer.php'); ?>

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