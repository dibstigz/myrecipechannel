<?php
/**
 * Template Name: Landing Page Template
 *
 * If you want to set up an alternate home page, just use this template for your page.
 *
 * @package BeeeTube
 * @subpackage Page Template
 *  1.0
 */

get_header(); ?>

<?php

	$args = (array)get_option('jtheme_home_featured');
	if(!empty($args['posts_per_page'])) {
		$layout = '';
		if(!empty($args['layout']) && $args['layout'] == 'full-width')
			$layout = 'full-width';
		if(!empty($_REQUEST) && $_REQUEST['featured_layout'] == 'full-width')
			$layout = 'full-width';

		if($layout == 'full-width')
			get_template_part('home-featured-full-width');
		else
			get_template_part('home-featured');
	}
	$featuredVideo =  get_option('jtheme_landingpage_status');
		if($featuredVideo == true){
		get_template_part('cat-featured');
		 }else{
		 echo '<br /><br />';
		 }
?>


<div id="main" class="home-temp">
<div class="wrap cf home-content">
	<div id="content">

		<h2 style="margin-bottom:0px;">Recipe Search</h2>

		<?php get_search_form( ); ?>

	<?php


	dynamic_sidebar( 'searchbar' );
	putRevSlider( "landingslider" );

		// Output home sections based on user's settings
		$sections = get_option('jtheme_home_sections');
		if(!empty($sections)) {
			foreach($sections as $section_args) {
				//if($section_args['title'] == "Featured Video")
					jtheme_section_box($section_args);
			}
		}
		?>

	<?php
		dynamic_sidebar( 'blog-grid' );
	?>

				<style>
					#authorContainer{

					text-align:center;}

					.authorWrapper{
						margin-left:120px;
						text-align:centerl
						width:200px;
						background-color: #ebebeb;
						height:280px;
						float:left;
						text-align: center;
						padding-top:50px;
						border:0px solid #ccc;}

					.authorLink{
						font-weight:bold;
						text-decoration:underline;}

					.bxSlider{
						background-color:red;

					}
				</style>
				
				<br/>
				<div id="authorContainer">
					<h2 class="widgettitle">Our Bloggers</h2>
					<ul class="bxslider">
					  <li style="background-color:#ebebeb;">
							<div class="authorWrapper">
								  <img src="<?php echo get_bloginfo('template_directory');?>/images/nicko.png" class="slide" alt="" />
									<a class="authorLink" href="index.php/category/rob-nixon/">Nicko's Recipe Box </a>
							</div>
							<div class="authorWrapper">
									<img src="<?php echo get_bloginfo('template_directory');?>/images/jason.png" class="slide" alt="" />
									<a class="authorLink" href="index.php/category/jason-pinder/">Jason's Recipe Box</a>
							</div>
							<div class="authorWrapper">
								<img src="<?php echo get_bloginfo('template_directory');?>/images/rebecca.png" class="slide" alt="" />
								<a class="authorLink" href="index.php/category/rebecca-thexton/">Rebecca's Recipe Box</a>
							</div>
						</li>
						<li>
							<div class="authorWrapper">
								  <img src="<?php echo get_bloginfo('template_directory');?>/images/nicko.png" class="slide" alt="" />
									<a class="authorLink" href="index.php/category/rob-nixon/">Nicko's Recipe Box </a>
							</div>
							<div class="authorWrapper">
									<img src="<?php echo get_bloginfo('template_directory');?>/images/jason.png" class="slide" alt="" />
									<a class="authorLink" href="index.php/category/jason-pinder/">Jason's Recipe Box</a>
							</div>
							<div class="authorWrapper">
								<img src="<?php echo get_bloginfo('template_directory');?>/images/rebecca.png" class="slide" alt="" />
								<a class="authorLink" href="index.php/category/rebecca-thexton/">Rebecca's Recipe Box</a>
							</div>
						</li>
					</ul>
				</div>
	</div><!-- end #content -->

	<?php get_sidebar(); ?>
</div>

<?php
$featuredVideo =  get_option('jtheme_landingpage_status');
		if($featuredVideo == true){
		get_template_part('cat-featured-footer');
		 }else{
		 echo '<br /><br />';
		 }
?>

</div><!-- end #main -->



<?php get_footer(); ?>
