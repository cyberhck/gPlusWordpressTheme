<div class="comments-area">
	<?php if ( have_comments() ) : ?>
	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
		<div class="nav-previous"><?php previous_comments_link(); ?></div>
		<div class="nav-next"><?php next_comments_link(); ?></div>
	<?php endif; // Check for comment navigation. ?>

	<ol class="comment-list">
		<?php
			wp_list_comments( array('style'=> 'div', 'short_ping' => true, 'avatar_size'=> 80, ) );
		?>
	</ol><!--comment-list -->

	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
		<div class="nav-previous"><?php previous_comments_link(); ?></div>
		<div class="nav-next"><?php next_comments_link(); ?></div>
	<?php endif; // Check for comment navigation. ?>

	<?php if ( ! comments_open() ) : ?>
	<p class="no-comments"><?php _e( 'Comments are closed.', 'twentyfourteen' ); ?></p>
	<?php endif; ?>

	<?php endif; // have_comments() ?>
	<?php
	comment_form();
	?>
</div><!-- #comments -->