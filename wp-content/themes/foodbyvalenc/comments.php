<div class="comments">
	<?php if (post_password_required()) : ?>
	<p><?php _e( 'Post is password protected. Enter the password to view any comments.', 'html5blank' ); ?></p>
	<?php return; endif; ?>

	<?php
		$fields = [
			'author' =>
	    '<br /><p class="comment-form-author"><h5>' . __( 'Name', 'domainreference' ) .
	    ( $req ? '<span class="required">*</span>' : '' ) . '</h5>' .
	    '<input class="form-control form-control--sub" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
	    '" size="30"' . $aria_req . ' /></p>',

	  'email' =>
	    '<p class="comment-form-email"><h5>' . __( 'Email', 'domainreference' ) .
	    ( $req ? '<span class="required">*</span>' : '' ) . '</h5>' .
	    '<input class="form-control form-control--sub" id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
	    '" size="30"' . $aria_req . ' /></p><br />'
		];

		$args = [
			'fields' => apply_filters( 'comment_form_default_fields', $fields ),
			'comment_field' => '<br /><p><h5>Comment ' . ( $req ? '<span class="required">*</span>' : '' ) . '</h5><textarea class="form-control" id="comment" name="comment" cols="45" rows="15" aria-required="true"></textarea></p>',
			'logged_in_as' => '<p class="logged-in-as">' . sprintf( __( '<a href="%1$s">Logged in as %2$s,</a> <a href="%3$s" title="Log out of this account">Log out?</a>' ), admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '</p>',
			'class_submit' => 'btn btn-light'
		];

		comment_form($args);
	?>

	<?php if (have_comments()) : ?>
		<h2><?php comments_number(); ?></h2>
		<br />

		<?php wp_list_comments('type=comment&callback=html5blankcomments'); // Custom callback in functions.php ?>

	<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

		<p><?php _e( 'Comments are closed here.', 'html5blank' ); ?></p>

	<?php endif; ?>
</div>
