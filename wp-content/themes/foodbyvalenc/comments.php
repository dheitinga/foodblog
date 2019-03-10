<div class="comments">
	<?php if (post_password_required()) : ?>
	<p><?php _e( 'Post is password protected. Enter the password to view any comments.', 'html5blank' ); ?></p>
	<?php return; endif; ?>

	<?php
		$fields = [
			'author' =>
				'<div class="input-group comment-form-author">' .
					'<input class="form-control form-control--sub" id="author" name="author" type="text" placeholder="Name" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' />',
				'</div>',

		  'email' =>
			'<div class="input-group comment-form-email">' .
				'<input class="form-control form-control--sub" id="email" name="email" type="text" placeholder="E-mail" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' />' .
			'</div>',
		];

		$args = array(
		  'id_form'           => 'commentform',
		  'class_form'      	=> 'comment-form',
		  'id_submit'         => 'submit',
		  'class_submit'      => 'submit',
		  'name_submit'       => 'submit',
		  'title_reply'       => '<h1>' . __( 'Leave a Reply' ) . '</h1>',
		  'title_reply_to'    => __( 'Leave a Reply to %s' ),
		  'cancel_reply_link' => __( 'Cancel Reply' ),
		  'label_submit'      => __( 'Post Comment' ),
		  'format'            => 'xhtml',

		  'comment_field' =>
				'<div class="input-group comment-form-comment">' .
				  '<textarea class="form-control" id="comment" name="comment" cols="45" rows="15" aria-required="true" placeholder="Comment"></textarea>' .
				'</div>',

		  'logged_in_as' => '<p class="logged-in-as">' .
		    sprintf(
		    __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>' ),
		      admin_url( 'profile.php' ),
		      $user_identity,
		      wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) )
		    ) . '</p>',

		  'comment_notes_before' => '<p class="comment-notes">' .
		    __( 'Your email address will not be published.' ) . ( $req ? $required_text : '' ) .
		    '</p>',

		  'fields' => apply_filters( 'comment_form_default_fields', $fields ),
		);

		comment_form($args);
	?>

	<?php if (have_comments()) : ?>
		<h2 class="comment-count"><?php comments_number(); ?></h2>
		<br />

		<?php wp_list_comments('type=comment&callback=html5blankcomments'); // Custom callback in functions.php ?>

	<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

		<p><?php _e( 'Comments are closed here.', 'html5blank' ); ?></p>

	<?php endif; ?>
</div>
