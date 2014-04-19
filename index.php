<?php get_header(); ?>
<!--main-->
<div class="container" id="main">
	<div class="row">
		<div class="col-md-8">
<?php
if(have_posts()){
while(have_posts()){
	the_post();
?>
	<div class="panel panel-default">
		<div class="panel-heading"><strong><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></strong><span style="margin-right:35px;" class="text-muted pull-right">Posted by: <?php the_author(); ?> on <?php the_date(); echo " "; the_time(); ?></span></div>
		<div class="panel-body posts">
				<?php 
		if(has_post_thumbnail()){
			the_post_thumbnail(array(150,150));
		}
		?>
		<?php the_content('Continue Reading...'); ?>
		<hr />
		<?php  ?>
		</div>
	</div> 


<?php
}
}else{?>
<p class="lead">No Posts Found!</p>
<?php
}
?>

		 </div>



		 <div class="col-md-4">
			<?php get_sidebar(); ?>		 	

		 </div>
		 
		</div>	
		
</div><!--/main-->
				<script type='text/javascript' src="http://cdn/jquery.js"></script>
				<script type='text/javascript' src="http://cdn/bootstrap.js"></script>
		</body>
		<?php get_footer(); ?>
</html>