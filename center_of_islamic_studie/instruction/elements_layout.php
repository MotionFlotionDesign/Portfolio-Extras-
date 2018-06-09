<!DOCTYPE html>
<html lang="en">

	<?php include('../instruction/inc_head.php'); ?>
	 
<body>

	

	
<div class="container-fluid">
<!--********************************************* CONTAINER *********************************************-->
<p>This is a page where I show you all the elements I use to make the site</p>
<p>Most things in index.php you would not need to touch, </p>
<p>I made it easy enough to where you just have to make new articles and be done. </p>



<!-- ======================================================================================================= -->
									<h1>All YOU NEED TO KNOW ABOUT INDEX.PHP</h1>
<!-- ======================================================================================================= -->
<p>when you see col-md-1 through 12, it is the grind system I use from  <a href="http://getbootstrap.com/" target="_blank">www.bootstrap.com</a></p>

<style>
	.col-example p{
		background-color: red;
		color: white;
		text-align: center;
	}
</style>
<!-- The grind system has to add up to twelve or it will not work. This was the reason the sidebar gave me issue -->
<div class="row col-example">

<!-- 12 + 0 = 12 -->

	<div class="col-md-12" bgcolor="white" font color="white">
		<p>12</p>
	</div>

<!-- 11 + 1 = 12 -->

	<div class="col-md-11">
		<p>11</p>
	</div>
	<div class="col-md-1">
		<p>1</p>
	</div>

<!-- 10 + 2 = 12 -->

	<div class="col-md-10">
		<p>10</p>
	</div>
	<div class="col-md-2">
		<p>2</p>
	</div>

<!-- 9 + 3 = 12 -->

	<div class="col-md-9">
		<p>9</p>
	</div>
	<div class="col-md-3">
		<p>3</p>
	</div>

<!-- 8 + 4 = 12 -->

	<div class="col-md-8">
		<p>8</p>
	</div>
	<div class="col-md-4">
		<p>4</p>
	</div>

<!-- 7 + 5 = 12 -->

	<div class="col-md-7">
		<p>7</p>
	</div>
	<div class="col-md-5">
		<p>5</p>
	</div>

<!-- 6 + 6 = 12 -->

	<div class="col-md-6">
		<p>6</p>
	</div>
	<div class="col-md-6">
		<p>6</p>
	</div>

<!-- 5 + 5 + 2 = 12 -->

	<div class="col-md-5">
		<p>5</p>
	</div>
	<div class="col-md-5">
		<p>5</p>
	</div>
	<div class="col-md-2">
		<p>2</p>
	</div>

<!-- 4 + 4 + 4 = 12 -->

	<div class="col-md-4">
		<p>4</p>
	</div>
	<div class="col-md-4">
		<p>4</p>
	</div>
	<div class="col-md-4">
		<p>4</p>
	</div>

<!-- 3 + 3 + 3 + 3 = 12 -->

	<div class="col-md-3">
		<p>3</p>
	</div>
	<div class="col-md-3">
		<p>3</p>
	</div>
	<div class="col-md-3">
		<p>3</p>
	</div>
	<div class="col-md-3">
		<p>3</p>
	</div>

<!-- 2 + 2 + 2 + 2 + 2 + 2 = 12 -->

	<div class="col-md-2">
		<p>2</p>
	</div>
	<div class="col-md-2">
		<p>2</p>
	</div>
	<div class="col-md-2">
		<p>2</p>
	</div>
	<div class="col-md-2">
		<p>2</p>
	</div>
	<div class="col-md-2">
		<p>2</p>
	</div>
	<div class="col-md-2">
		<p>2</p>
	</div>

<!-- 1 + 1 + 1 + 1 + 1 + 1 + 1 + 1 + 1 + 1 + 1 + 1 = 12 -->

	<div class="col-md-1">
		<p>1</p>
	</div>
	<div class="col-md-1">
		<p>1</p>
	</div>
	<div class="col-md-1">
		<p>1</p>
	</div>
	<div class="col-md-1">
		<p>1</p>
	</div>
	<div class="col-md-1">
		<p>1</p>
	</div>
	<div class="col-md-1">
		<p>1</p>
	</div>
	<div class="col-md-1">
		<p>1</p>
	</div>
	<div class="col-md-1">
		<p>1</p>
	</div>
	<div class="col-md-1">
		<p>1</p>
	</div>
	<div class="col-md-1">
		<p>1</p>
	</div>
	<div class="col-md-1">
		<p>1</p>
	</div>
	<div class="col-md-1">
		<p>1</p>
	</div>
</div>

<!-- SECTION: Latest Topic -->				
			<section>
				<div class="col-md-6">
					<div class="one">
						<h4 class="dark-blue">Latest Topic</h4><!-- .dark-blue in css -->
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, recusandae ratione corrupti harum accusamus iste deserunt omnis! Nobis reprehenderit accusantium aut maiores quaerat sint suscipit? Veritatis harum, laborum blanditiis ea!</p>
					</div>
				</div>
			</section><!--END OF <section class="one">-->

<!-- SECTION: The Original of Islam  -->				
			<section>
				<div class="col-md-6">
					<div class="two">
						<h4 class="violet">The Original of Islam </h4><!-- .violet in css -->
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, recusandae ratione corrupti harum accusamus iste deserunt omnis! Nobis reprehenderit accusantium aut maiores quaerat sint suscipit? Veritatis harum, laborum blanditiis ea!</p>
					</div>
				</div>
			</section><!--END OF <section class="two">-->

<!-- SECTION: Judeo Christan Title -->				
			<section>
				<div class="col-md-6">
					<div class="three">
						<h4 class="violet">Judeo Christan Title</h4><!-- .violet in css -->
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, recusandae ratione corrupti harum accusamus iste deserunt omnis! Nobis reprehenderit accusantium aut maiores quaerat sint suscipit? Veritatis harum, laborum blanditiis ea!</p>
					</div>
				</div>
			</section><!--END OF <section class="three">-->

<!-- SECTION: Islam Contribution -->				
			<section>
				<div class="col-md-6">
					<div class="four">
						<h4 class="dark-blue">Islam Contribution</h4><!-- .dark-blue in css -->
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, recusandae ratione corrupti harum accusamus iste deserunt omnis! Nobis reprehenderit accusantium aut maiores quaerat sint suscipit? Veritatis harum, laborum blanditiis ea!</p>
					</div>
				</div>
			</section><!--END OF <section class="four">-->

<!--******************************************** VIDEO SECTION ***************************************************-->			

<p>1. To add more video's just copyy and paste everything in "col-md-6"</p>
<p><li>change the url in "a href"</li>
	<li> change data-lightview-title - This shows the title of video when the lightbox is up </li>
	<li> change data-lightview-caption - This shows the description of video when the lightbox is up </li>
	<li> change thumbnail: - This shows the thumbnail images when the lightbox is up</li>
	<li> change img src: - This shows the thumbnail images on the homepage (in index.php)</li>
	<li> change p tag: - This shows the Title of the video on the homepage (in index.php)</li>
	</p>


<div id="paginationdemo" class="demo">
 <div class="col-md-8">
    <h4 class="grey">Media</h4>

    <!-- This is the beginning of page one -->
    	<div id="p1" class="pagedemo _current" style="">
        	<div class="col-md-12">
          		<div class="row">
            		<div class="col-md-6 o-ne">
              			<ul>
                			<li>
                				<!-- This is The right Format -->
                  				<a href="../video/1001 Inventions- Pioneers of Science and Technology.mp4" 
                  	   			class="lightview" 
                  	   			data-lightview-group="thumbnail-example"
                  	   			data-lightview-group-options="controls: 'thumbnails'"
                  	   			data-lightview-title="1001 Inventions: Pioneers of Science and Technology" 
                  	   			data-lightview-caption="Discoveries made from the 7th to 17th centuries by multi-faith scientists in Muslim civilization have had a huge but hidden influence on the modern world. Knowledge from Assyrian, Babylonian, Chinese, Egyptian, Greek, Indian, Persian and Roman civilizations was highly prized in the Muslim world. Men and women " 
                    			data-lightview-options="
                    			viewport: 'scale',
                    	 		thumbnail: 'images/_thumbnail/thumb_1.jpg',
                    	  		width: 640, 
                    	  		height: 272">
                    			<img class="tbVideo" src="../images/_thumbnail/thumb_1.jpg" height="120" width="240" alt="">
                    			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  				</a>
                			</li>
              			</ul>
            		</div>
            		<!-- This is not right, it just a example -->
            		<div class="col-md-6 o-ne">
              			<ul>
                			<li>
                  				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi explicabo amet veniam ut voluptate. Libero harum quidem numquam accusamus, laboriosam in quas blanditiis veritatis reiciendis explicabo minus sit voluptatibus ipsam!</p>
                			</li>
              			</ul>
            		</div>
        		</div>
        		<div class="row">
            		<div class="col-md-6 t-wo-2">
              			<ul>
                			<li>
                				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi explicabo amet veniam ut voluptate. Libero harum quidem numquam accusamus, laboriosam in quas blanditiis veritatis reiciendis explicabo minus sit voluptatibus ipsam!</p>
                			</li>
                		</ul>
                	</div>
                	<div class="col-md-6 t-wo-2">
              			<ul>
                			<li>
                				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi explicabo amet veniam ut voluptate. Libero harum quidem numquam accusamus, laboriosam in quas blanditiis veritatis reiciendis explicabo minus sit voluptatibus ipsam!</p>
                			</li>
                		</ul>
                	</div>
                </div>
    		</div>
    	</div>

<!-- PAGE 2 REPEAT PROCESS give it a try-->

    	<div id="p2" class="pagedemo" style="display:none;">
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-6 o-ne">
              <ul>
                <li>
                  <a href="video/no_comments_media_islamophobia (1).mov" 
                    class="lightview" 
                    data-lightview-group="thumbnail-example"
                    data-lightview-group-options="controls: 'thumbnails'"
                    data-lightview-title="The title goes above the caption" 
                    data-lightview-caption="Use a caption to give your visitors some more information" 
                    data-lightview-options="
                    viewport: 'scale',
                      thumbnail: 'images/_thumbnail/thumb_6.jpg',
                      width: 640, 
                      height: 272">
                    <img class="tbVideo" src="images/_thumbnail/thumb_6.jpg" height="120" width="240" alt="">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                  </a>
                </li>
              </ul>
            </div>
        </div>
    </div>

</div>
</div>
</div>

<!--******************************************** END OF VIDEO SECTION ***************************************************-->			

<!-- SECTION: Latest Event -->				
			<aside class="side-bar-two">
				<div class="col-md-4">
					<section>
						<h4 class="blue">Latest Event</h4><!-- blue in css -->
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, recusandae ratione corrupti harum accusamus iste deserunt omnis! Nobis reprehenderit accusantium aut maiores quaerat sint suscipit? Veritatis harum, laborum blanditiis ea!</p>
					</section>	
				</div>
			</aside><!--END OF <aside class="side-bar-two">-->
			
			<section>
				<div class="col-md-4">
					<div class="six">
						<h4 class="dark-blue">Case Study</h4><!-- .dark-blue in css -->
						<div class="four"><!-- .dark-blue in css -->
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, recusandae ratione corrupti harum accusamus iste deserunt omnis! Nobis reprehenderit accusantium aut maiores quaerat sint suscipit? Veritatis harum, laborum blanditiis ea!</p>
					</div>
				</div>
			</section><!--END 	OF <section class="six">-->

<!-- SECTION: Famous Studies -->			
			<section>
				<div class="col-md-4">
					<div class="seven">
						<h4 class="violet">Famous Studies</h4><!-- .violet in css -->
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, recusandae ratione corrupti harum accusamus iste deserunt omnis! Nobis reprehenderit accusantium aut maiores quaerat sint suscipit? Veritatis harum, laborum blanditiis ea!</p>
					</div>
				</div>
			</section><!--END OF <section class="seven">-->

<!-- SECTION: Famous Quotes -->
			<section>
				<div class="col-md-4">
					<div class="eight">
						<h4 class="dark-blue">Famous Quotes</h4><!-- .dark-blue in css -->
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, recusandae ratione corrupti harum accusamus iste deserunt omnis! Nobis reprehenderit accusantium aut maiores quaerat sint suscipit? Veritatis harum, laborum blanditiis ea!</p>
					</div>
				</div>
			</section><!--END OF <section class="eight">-->

<!-- ======================================================================================================= -->
									<h1>All YOU NEED TO KNOW ABOUT FILES IN MORE_TOPIC</h1>
<!-- ======================================================================================================= -->

<!-- 1. Tables were used in some of your articles in the menu folder
	 2. The where also used mostly in the more_topic folder 
	 3. When you write a new article or switch around just and the proper path-->

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
        <td><a href="the path to your article">ARTICLE NAME</a></td>
        <td>Faysal Burham</td>
        <td>April 18,2015</td>
      </tr>
      <tr>
        <td><a href="the path to your article">ARTICLE NAME</a></td>
        <td>Faysal Burham</td>
        <td>April 18,2015</td>
      </tr>
      <tr>
        <td><a href="the path to your article">ARTICLE NAME</a></td>
        <td>Faysal Burham</td>
        <td>April 18,2015</td>
      </tr>
    </tbody>
</table>

<!-- ======================================================================================================= -->
									All YOU NEED TO KNOW ABOUT FILES IN MENU
<!-- ======================================================================================================= -->
<p>This is the most important part because this is a you need to do. from this point these are all the tags I use in your article</p>

<!-- "P" tags are for your paragraphs and sentences -->
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum tempore consectetur quam vel soluta nobis officiis ea eveniet quaerat, unde, mollitia quod id ipsum. Explicabo praesentium in laudantium reiciendis animi?</p>

<!-- I use "blockquote" when you was quoting something -->
<blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis aut nostrum dolorem numquam totam, eius esse praesentium odit aliquid iste ipsam quas eum ab molestias expedita maxime placeat, amet, vitae!</blockquote>

<!-- if you realize "font size" tag at the end, that's there to mini size the source of you quote it gives it a clean feel -->
<blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis aut nostrum dolorem numquam totam, eius esse praesentium odit aliquid iste ipsam quas eum ab molestias expedita maxime placeat, <font size="2">amet, vitae!</font></blockquote>

<h3>Title of paragraph</h3>

<hr class="style-two"><!-- DIVIDER -->
<!--  -->
<ol type="1"><!-- list in numbers -->
	<li>cool</li>
	<li>cool</li>
	<li>cool</li>
</ol>
<ol type="a"><!-- list in alphabets -->
	<li>cool</li>
	<li>cool</li>
	<li>cool</li>
</ol>
<ul class="links"><!-- list in none-->
	<li>cool</li>
	<li>cool</li>
	<li>cool</li>
</ul>
<ul><!-- list in bullet -->
	<li>cool</li>
	<li>cool</li>
	<li>cool</li>
</ul>

<p>These were made for islam contribution section. Located in the menu folder</p>
<p>left side has the image, the right side has the text</p>
<div class="row">
	<div class="col-md-3">
		<img class="islam-img" src="../images/edward_gibbon.jpg" alt="">
	</div>
	<div class="col-md-9">
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque officia eligendi, fuga quibusdam odio dolorum animi rerum aut enim maiores, recusandae possimus minus voluptates. Cumque dolor voluptates ea dolore iusto.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque officia eligendi, fuga quibusdam odio dolorum animi rerum aut enim maiores, recusandae possimus minus voluptates. Cumque dolor voluptates ea dolore iusto.</p>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque officia eligendi, fuga quibusdam odio dolorum animi rerum aut enim maiores, recusandae possimus minus voluptates. Cumque dolor voluptates ea dolore iusto.</p>
	</div>
</div>

<p>images on the left side</p>
<section class="img-section">
	<figure class="place-holder-left">
	  <img src="../images/george_bernard_shaw.jpg">
	</figure> 
	<blockquote>"I have always held the religion of Muhammad in high estimation because of its wondevitality. It is the only religion, which appears to me to possess that assimilating capacity tochanging phase of existence, which can make itself appeal to every age. </blockquote>
	<blockquote>I have studied him - the wonderful man and in my opinion far from being an anti-Chrhe must be called the Savior of Humanity.</blockquote>
</section>
<p>images on the right side</p>
<section class="img-section">
	<figure class="place-holder-right">
	  <img src="../images/rev_reginald_bosworth_smith.jpg">
	</figure>
	<blockquote>
	"If greatness of purpose, smallness of means and astounding results are the three criteria of human genius, who could dare to compare any great man in modern history than Muhammad.</blockquote>
	<blockquote>This man moved not only armies, legislation, empires, peoples and dynasties,millions of men in one-third of the then inhabited world; and more than that, he moved the altthe gods, the religions, the ideas, the beliefs and souls....</blockquote>
	<blockquote>vHis endless prayers, his mystic conversations with God, his death and his triumph adeath; all these attest not to an imposture but to a firm conviction which gave him the powerestore a dogma.</blockquote>
</section>

<p>This Table is made to hop to a certain point of the page</p>

<table class="table table-bordered" />
    <tbody>
      <tr>
        <td><a href="#1">ARTICLE NAME: CLICK ON THIS</a></td>
      </tr>
    </tbody>
</table>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque officia eligendi, fuga quibusdam odio dolorum animi rerum aut enim maiores, recusandae possimus minus voluptates. Cumque dolor voluptates ea dolore iusto.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque officia eligendi, fuga quibusdam odio dolorum animirerum aut enim maiores, recusandae possimus minus voluptates. Cumque dolor voluptates ea dolore iusto.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque officia eligendi, fuga quibusdam odio dolorum animirerum aut enim maiores, recusandae possimus minus voluptates. Cumque dolor voluptates ea dolore iusto.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque officia eligendi, fuga quibusdam odio dolorum animirerum aut enim maiores, recusandae possimus minus voluptates. Cumque dolor voluptates ea dolore iusto.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque officia eligendi, fuga quibusdam odio dolorum animirerum aut enim maiores, recusandae possimus minus voluptates. Cumque dolor voluptates ea dolore iusto.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque officia eligendi, fuga quibusdam odio dolorum animirerum aut enim maiores, recusandae possimus minus voluptates. Cumque dolor voluptates ea dolore iusto.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque officia eligendi, fuga quibusdam odio dolorum animirerum aut enim maiores, recusandae possimus minus voluptates. Cumque dolor voluptates ea dolore iusto.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque officia eligendi, fuga quibusdam odio dolorum animirerum aut enim maiores, recusandae possimus minus voluptates. Cumque dolor voluptates ea dolore iusto.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque officia eligendi, fuga quibusdam odio dolorum animirerum aut enim maiores, recusandae possimus minus voluptates. Cumque dolor voluptates ea dolore iusto.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque officia eligendi, fuga quibusdam odio dolorum animirerum aut enim maiores, recusandae possimus minus voluptates. Cumque dolor voluptates ea dolore iusto.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque officia eligendi, fuga quibusdam odio dolorum animirerum aut enim maiores, recusandae possimus minus voluptates. Cumque dolor voluptates ea dolore iusto.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque officia eligendi, fuga quibusdam odio dolorum animirerum aut enim maiores, recusandae possimus minus voluptates. Cumque dolor voluptates ea dolore iusto.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque officia eligendi, fuga quibusdam odio dolorum animirerum aut enim maiores, recusandae possimus minus voluptates. Cumque dolor voluptates ea dolore iusto.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque officia eligendi, fuga quibusdam odio dolorum animirerum aut enim maiores, recusandae possimus minus voluptates. Cumque dolor voluptates ea dolore iusto.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque officia eligendi, fuga quibusdam odio dolorum animirerum aut enim maiores, recusandae possimus minus voluptates. Cumque dolor voluptates ea dolore iusto.</p>

<p><a name="1">TARGET</a>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque officia eligendi, fuga quibusdam odio dolorum animirerum aut enim maiores, recusandae possimus minus voluptates. Cumque dolor voluptates ea dolore iusto.</p>
</div>


<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ END MAIN CONTENT ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->			
	</div>
<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ END OF CONTAINER  ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^-->
	
	<script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/swfobject/2.2/swfobject.js"></script>
	<script type="text/javascript" src="../lightview-3.4.0-licensed/js/spinners/spinners.min.js"></script>
	<script type="text/javascript" src="../lightview-3.4.0-licensed/js/lightview/lightview.js"></script>
	<script type="text/javascript" src="../jPaginate/jquery-1.3.2.js"></script>
	<script type="text/javascript" src="../jPaginate/jquery.paginate.js"></script>
	<script type="text/javascript">
//video section

	$(function() {
			
			$("#demo5").paginate({ 
				count 		: 3, //Change the number to add more pages
				start 		: 1,
				display     : 7, //Change the number to add more pages
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

//header slider

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

</html>