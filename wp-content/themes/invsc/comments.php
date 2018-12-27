<?php

if ( post_password_required() ) {
	return;
}
?>
<div class="row" id="comment-box">
    <div class="panel panel-default col-lg-12">
        <div class="panel-heading"><h3>Comentários para este post <span class="comment-number">(1)</span></h3></div>
        <div class="panel-body">
            <?php
            // You can start editing here -- including this comment!
            if ( have_comments() ) : ?>
                <h2 class="comments-title">
                    <?php
                    $comments_number = get_comments_number();
                    if ( '1' === $comments_number ) {
                        /* translators: %s: post title */

                    } else {

                            number_format_i18n( $comments_number );
                    }
                    ?>
                </h2>

                <ul class="comment-list">
                    <?php foreach ($comments as $comment) { ?>
                         <li>
                            <div class="image-box">
                                <img src="<?php echo get_avatar_url($comment->comment_author_email); ?>">
                            </div>
                            <div class="comment-header">
                                <span class="author-name">
                                    <?php echo $comment->comment_author; ?>
                                </span>
                                <span class="date">
                                    <?php echo $comment->comment_date; ?>
                                </span>
                            </div>
                            <div class="content">
                                <?php echo $comment->comment_content; ?>
                            </div>
                         </li>
                    <?php } ?>
                </ul>

                <?php /*the_comments_pagination( array(
                    'prev_text' => invsc_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous', 'invsc' ) . '</span>',
                    'next_text' => '<span class="screen-reader-text">' . __( 'Next', 'invsc' ) . '</span>' . invsc_get_svg( array( 'icon' => 'arrow-right' ) ),
                ) );*/

            endif; // Check for have_comments().

            // If comments are closed and there are comments, let's leave a little note, shall we?
            if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

                <p class="no-comments"><?php _e( 'Comments are closed.', 'invsc' ); ?></p>
            <?php
            endif;

            comment_form();
            ?>
        </div>

    </div><!-- #comments -->
</div>
