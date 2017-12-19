<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Titanium 
 *
 * @since Titanium 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>
<br>
<div id="comments" class="container-fluid comment-area">
	<?php if ( have_comments() ) : ?>
	<article class="container-fluid">
		<h3><?php
			$comments_number = get_comments_number();
			if ( '1' === $comments_number ) {
				/* translators: %s: post title */
				printf( _x( 'One Reply to &ldquo;%s&rdquo;', 'comments title', 'titanium' ), get_the_title() );
			}
			else {
				printf(
				/* translators: 1: number of comments, 2: post title */
				_nx(
					'%1$s Reply to &ldquo;%2$s&rdquo;',
					'%1$s Replies to &ldquo;%2$s&rdquo;',
					$comments_number,
					'comments title',
					'titanium'
					),
					number_format_i18n( $comments_number ),
					get_the_title()
				);
			}
		?>
		</h3>
 		<ul class="commentbox">
 			<?php wp_list_comments( array(
    				'style' => 'ul',
    				'short-ping' => true,
    				'avartar-size' => 74,
    			 	)
    			 ); ?>
 		</ul>
		<?php
   			if( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
		<nav>
			<ul class="pager-1">
				<li class="previous"><?php previous_comments_link( __('Newer Comments', 'titanium' ) ); ?></li>
				<li class="next"><?php next_comments_link( __('Older Comments', 'titanium' ) ); ?></li>
			</ul>
		</nav>
		<?php endif; ?>
		<?php if( !comments_open() && get_comments_number() ) : ?>
			<p><?php esc_html_e('Comments are closed', 'titanium'); ?></p>
			<?php endif; endif; ?>
 	</article>
 	<article class="container-fluid">
		<!-- Comment form begin -->
		<?php 
		$req = get_option( 'require_name_email' );
		$aria_req = ( $req ? ' required' : '' );

		$comments_args = array(
			// change the title of send button.
			'label_submit' => __( 'Comment', 'titanium' ),
			// change the title of the reply section.
			'title_reply' => __( 'Leave a Reply', 'titanium' ),
			// remove "Text or HTML to be displayed after the set of comment fields".
			'comment_notes_after' => '',
			// redefine your own textarea (the comment body).
			'comment_field' => '<textarea class=" form-control" rows="8" placeholder="'.esc_attr__('Message','titanium').'" name="comment" id="'.esc_attr__('message','titanium').'" aria-required="true"></textarea><br>',

			'fields' => apply_filters( 'comment_form_default_fields', array(
				'author' => '<input class="col-lg-12 form-control" placeholder="'.esc_attr__('Name *','titanium').'"  type="text" name="author" id="'.esc_attr__('name','titanium').'" value="' . esc_attr( $commenter['comment_author'] ). '"' . $aria_req . ' />',

				'email' => '<br><input class="col-lg-12 form-control" placeholder="'.esc_attr__('Email *','titanium').'"  type="email" name="email" id="'.esc_attr__('email','titanium').'" value="' . esc_attr( $commenter['comment_author_email'] ). '"' . $aria_req . ' />',

				'url' => '<br><input class="col-lg-12 form-control" placeholder="'.esc_attr__('Website','titanium').'"  id="'.esc_attr__('url','titanium').'" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ). '" /><br>',
				)
			),
		);
		ob_start();
		comment_form( $comments_args );
		$form = ob_get_clean();
		echo $form;
		?>
 	</article>
 	</div>