<!-- Before I go on there are same part you will have to complete
0. First to order to see your site, you need to download MAMP "https://www.mamp.info/en/" After you download MAMP, on your computer go to application/MAMP (not MAMP PRO)/go to a folder call htdocs and drop your website in there. make sure you a have your site back up on something else. In order to see your site, open MAMP, click "Start Server" Your web browser will open up to MAMP website. In the adress bar type localhost:8888, click on your website folder, and enjoy the view of your site. You need to do that because you cant read "PHP" normally like "HTML" you need this software to read it. Since you use dreamweaver I dont know if, it has a "PHP" reader I'm not sure of that. 
1. In the file inc_pagination.php I will like you to add a "Title" and "Descriptions for your video"
2. in more_topics folder/media.php file I will like for you to add description for your video's
3. In menu folder/islam contribution folder/ algebra.php I left an example of a split page. Left-side images / 	right-side article. You told me you wanted to handle that part. There is also an example in instructions folder/ elements_layout.php
4. You need to change the description in inc_slider.php. You do the same for the one in more_topic folder.
5. Your missing 3 article, I was unable to find them on your old account 
	1. Untold Aspects of Islam (location: menu folder/the_original_of_islam folder/ untold_aspects_of_islam.php)
	2. Muhammad's Protection of Christians-St. Catherine Monastery (location: menu folder/latest_event folder/muhammad's_protection_of_christians-St._catherine_monastery.php)
	3. Relationships and Forgiveness (location: menu folder/latest_event folder/relationships_and_forgiveness.php)
 -->



<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Instruction</title>
	
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"><!-- This is a personal css link to fontawesome icon, Just Incase fontawesome fails, with your personal css -->
	
	<link rel="stylesheet" href="lightview-3.4.0-licensed/css/lightview/lightview.css"><!-- This is the CSS to the lightbox NEVER touch this file, This come from http://projects.nickstakenburg.com/ I also got the license to use it -->
	
	<link rel="stylesheet" type="text/css" href="jPaginate/css/style.css"><!-- Never touch, This allows me to scroll to the next page in the video section, in index.php. This come from http://tympanus.net/jPaginate/ -->
	
	<link rel="stylesheet" type="text/css" href="../../font-awesome/css/font-awesome.min.css"><!-- CSS for Icon, Never touch this file. Icons come from www.fontawesome.com -->
	
	<link rel="stylesheet" href="../../css/print.css"> <!-- [ YOU COULD CHANGES THIS ]css were I custom the print settings, for it could print clean without the head, navbar etc..-->
	
	<link rel="stylesheet" href="../../css/bootstrap.min.css"><!-- CSS for Bootstarp grind system, NEVER touch this file. This is from www.bootstrap.com -->
  	
  	<link rel="stylesheet" href="../../css/responsive_2.css"><!-- [ YOU COULD CHANGES THIS ] This is where I make the different screen size in for all files in the MENU FOLDER-->
  	
  	<link rel="stylesheet" href="../css/responsive.css"><!-- [ YOU COULD CHANGES THIS ] This is where I make the different screen size in for all files in INDEX.PHP AND MORE_TOPIC FOLDER--> 
	
	<link rel="stylesheet" type="text/css" href="../../css/style.css"><!-- [ YOU COULD CHANGES THIS ] This is were I did all my styleling from. This is the "Main" CSS file-->
</head>
<body>
	<div class="container-fluid">
		<p>Note</p>
		<ul class="links">
			<li>you need to add description in Slider located in <?php include('inc_slider.php') ?> and the one in MORE_TOPIC folder</li>
			<li>In <?php include('inc_pagination.php') ?> some videos need Title and Description</li>
			<li>You need to add images in menu folder/ Islam Contribution folder/ all files in there</li>
			<li>Few Links missing in INDEX.PHP</li>
		</ul>
		<div class="row">
			<div class="col-md-3">
				<p>All files that are not in a folder is part of the front page </p>
				<ul class="links">
					<li>about.php</li><!-- This is the about page for index.php -->
					<li>inc_footer.php</li><!-- This is the footer for index.php for index.php -->
					<li>inc_head.php</li><!-- This is where all your "META Tags," "CSS Links," "TITLE" etc.. for index.php -->
					<li>inc_header.php</li><!-- This is where your header lies for index.php -->
					<li>inc_more_topic_sidebar.php</li><!-- This is the sidebar for index.php -->
					<li>inc_pagination.php</li><!-- This is where your video files lay in index.php -->
					<li>inc_slider.php</li><!-- The image slider for index.php -->
					<li>index.php</li><!-- The home Page for index.php -->
				</ul>
			</div>
			<div class="col-md-3">
				<p>Sub Menu for all article topics</p>
				<ul class="links">
					<li>famous_quote.php</li><!-- Sub menu for article category -->
					<li>famous_studies.php</li><!-- Sub menu for article category -->
					<li>featured_topic.php</li><!-- Sub menu for article category -->
					<li>inc_footer.php</li><!-- footer for all file in MORE_TOPIC folder -->
					<li>inc_head.php</li><!-- This is where all your "META Tags," "CSS Links," "TITLE" etc.. for all file in MORE_TOPIC folder -->
					<li>inc_header.php</li><!-- header for all file in MORE_TOPIC folder -->
					<li>inc_more_topic_sidebar.php</li><!-- sidebar for all file in MORE_TOPIC folder -->
					<li>inc_slider.php</li><!-- slider image for all file in MORE_TOPIC folder -->
					<li>islam_contribution.php</li><!-- Sub menu for article category -->
					<li>judeo_christan_title.php</li><!-- Sub menu for article category -->
					<li>latest_event.php</li><!-- Sub menu for article category -->
					<li>latest_topic.php</li><!-- Sub menu for article category -->
					<li>media.php</li><!-- Sub menu for article category -->
					<li>the_original_of_islam.php</li><!-- Sub menu for article category -->
					<li>topic folder</li><!-- This is the file's for the blue bar in your article, under the image slider -->
				</ul>
			</div>
			<div class="col-md-3">
				<p>The Menu Folder is the home for all your articles</p>
				<ul class="links">
					<li>case_studies folder</li><!-- All Files for this category -->
					<li>famous_quotes_on prophet_muhammad folder</li><!-- All Files for this category -->
					<li>featured_topics folder</li><!-- All Files for this category -->
					<li>inc_footer_2.php</li><!-- footer for all file in MENU folder -->
					<li>inc_head.php</li><!-- This is where all your "META Tags," "CSS Links," "TITLE" etc.. for all file in MENU folder -->
					<li>inc_header_2.php</li><!-- header for all file in MENU folder -->
					<li>inc_top_nav.php</li><!-- Top navbar for all file's in MENU folder -->
					<li>islam's_contributions_and_influence folder</li><!-- All Files for this category -->
					<li>judeo-christian_titles folder</li><!-- All Files for this category -->
					<li>latest_events folder</li><!-- All Files for this category -->
					<li>latest_topics folder</li><!-- All Files for this category -->
					<li>quotation_on_islamic_civilization folder</li><!-- All Files for this category -->
					<li>the_original_look_of_islam folder</li><!-- All Files for this category -->
					<li>topic</li><!-- This is the file's for the blue bar in your article, under the top navbar -->
				</ul>
			</div>
		</div>
	<div class="row">
		<div class="col-md-12">
			<p>All other folders like, Video folder, jPaginate folder, font, font-awesome folder, css folder, js folder, lightview-3.4.0-lincensed folder images also must be upladed with the site. The Video folder and Image folder, you could change the layout of them. Just make sure to change the file path of all the images and video if you do.</p>
		</div>
	</div>
	<p>I'm pretty sure you seen <?php include('inc_addFileName.php') ?> this links around the site. That Because it holds a certain element of the page like a sidebar. So lets say if you need to change a link in the sidebar. Every page tha has this link <?php include('inc_addFileName.php') ?> is also edit. This saves alot of time going to each page and changing a link. WARNING!!! you still want to put this link in the right part of the page. You dont want to put the footer section on the top. Also shown in the example below, realise the path are different</p> 
	<div class="row">
		<div class="col-md-3">
			<!-- Everything not in a folder INDEX.PHP -->
			<ul class="links">
				<li><?php include('inc_footer.php'); ?></li><!-- Footer -->
				<li><?php include('inc_head.php'); ?></li><!-- his is where all your "META Tags," "CSS Links," "TITLE" etc.. -->
				<li><?php include('inc_header.php'); ?></li><!-- Header -->
				<li><?php include('inc_more_topic_sidebar.php'); ?></li><!-- Side-Bar -->
				<li><?php include('inc_pagination.php'); ?></li><!-- Video Secton in INDEX.PHP -->
				<li><?php include('inc_slider.php'); ?></li><!-- Image Slider -->
			</ul>
		</div>
		<div class="col-md-3">
			<!-- Links for MORE_TOPIC folder -->
			<ul class="links">
				<li><?php include('../more_topicinc_footer.php'); ?></li><!-- Footer -->
				<li><?php include('../more_topicinc_head.php'); ?></li><!-- his is where all your "META Tags," "CSS Links," "TITLE" etc.. -->
				<li><?php include('../more_topicinc_header.php'); ?></li><!-- Header -->
				<li><?php include('../more_topicinc_more_topic_sidebar.php'); ?></li><!--  -->
				<li><?php include('../more_topicinc_sidebar.php'); ?></li><!-- Side Bar -->
				<li><?php include('../more_topicinc_slider.php'); ?></li><!-- Image Slider -->
				<li><?php include('../more_topic/topicfamous_quote.php'); ?></li><!-- This is the blue bar for article -->
				<li><?php include('../more_topic/topicfamous-studies.php'); ?></li><!-- This is the blue bar for article -->
				<li><?php include('../more_topic/topicfeatured-topic.php'); ?></li><!-- This is the blue bar for article -->
				<li><?php include('../more_topic/topicislam-contribution.php'); ?></li><!-- This is the blue bar for article -->
				<li><?php include('../more_topic/topicjudeo.php'); ?></li><!-- This is the blue bar for article -->
				<li><?php include('../more_topic/topiclatest-events.php'); ?></li><!-- This is the blue bar for article -->
				<li><?php include('../more_topic/topiclatest-topic.php'); ?></li><!-- This is the blue bar for article -->
				<li><?php include('../more_topic/topicmedia.php'); ?></li><!-- This is the blue bar for article -->
				<li><?php include('../more_topic/topicthe-original.php'); ?></li><!-- This is the blue bar for article -->
			</ul>
		</div>
		<div class="col-md-3">
			<!-- Links for MENU folder -->
			<ul class="links">
				<li><?php('../../menu/inc_footer_2.php'); ?></li><!--  -->
				<li><?php('../../menu/inc_head.php'); ?></li><!-- his is where all your "META Tags," "CSS Links," "TITLE" etc.. -->
				<li><?php('../../menu/inc_header_2.php'); ?></li><!-- Header -->
				<li><?php('../../menu/inc_top_nav.php'); ?></li><!-- Top Navigation -->
				<li><?php('../../menu/famous-studies.php'); ?></li><!-- This is the blue bar for sud menu -->
				<li><?php('../../menu/featured-topic.php'); ?></li><!-- This is the blue bar for sud menu -->
				<li><?php('../../menu/islam-contribution.php'); ?></li><!-- This is the blue bar for sud menu -->
				<li><?php('../../menu/judeo.php'); ?></li><!-- This is the blue bar for sud menu -->
				<li><?php('../../menu/latest-events.php'); ?></li><!-- This is the blue bar for sud menu -->
				<li><?php('../../menu/latest-topic.php'); ?></li><!-- This is the blue bar for sud menu -->
				<li><?php('../../menu/media.php'); ?></li><!-- This is the blue bar for sud menu -->
				<li><?php('../../menu/the-original.php'); ?></li><!-- This is the blue bar for sud menu -->
			</ul>
		</div>
	</div>
<!--  -->
	<!-- THIS IS ONLY FOR INDEX.PHP DO NOT REMOVE THESE FROM PAGES THERE ON-->
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script><!-- USE IN MORE_TOPIC ALSO -->
	<script type="text/javascript" src="../js/jquery-1.11.3.min.js"></script><!-- USE IN MORE_TOPIC, NOT INDEX.PHP-->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script><!-- for Pagination -->
	<script type="text/javascript" src="lightview-3.4.0-licensed/js/spinners/spinners.min.js"></script><!-- for Lightbox -->
	<script type="text/javascript" src="lightview-3.4.0-licensed/js/lightview/lightview.js"></script><!-- for Lightbox -->
	<script type="text/javascript" src="../js/bootstrap.min.js"></script><!-- USE IN MORE_TOPIC, NOT INDEX.PHP- -->
	<script type="text/javascript" src="jPaginate/jquery-1.3.2.js"></script><!-- for Pagination -->
	<script type="text/javascript" src="jPaginate/jquery.paginate.js"></script><!-- for Pagination -->
	<script type="text/javascript">
	//video section

	//This the controls for the lightboxs, only thig you have to worry about is "count"
	$(function() {
			
			$("#demo5").paginate({ 
				count 		: 3, //Change the number to add more pages, there are 4 videos a page, if need more raise the # for INDEX.PHP ONLY
				start 		: 1,
				display     : 7,
				border					: true,
				border_color			: '#fff',
				text_color  			: '#fff',
				background_color    	: 'black',	
				border_hover_color		: '#ccc',
				text_hover_color  		: '#000',
				background_hover_color	: '#fff', 
				images					: false,
				mouse					: 'press',
				onChange     			: function(page){
											$('._current','#paginationdemo').removeClass('_current').hide();
											$('#p'+page).addClass('_current').show();
										  }
			});
		});
	

	//code for header slider
	//Don't change this for INDEX.PHP and MORE_TOPIC folder

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

