<?php

if ( post_password_required() ) {
	return;
}
?>
<div class="row" id="comment-box">
    <div class="panel panel-default col-12">
        <div class="panel-heading"><h3>Comentários para este post <span class="comment-number">(<?php echo get_comments_number(); ?>)</span></h3></div>
        <div class="panel-body">
            <?php
            if ( have_comments() ) : ?>
                <ul class="comment-list">
                    <?php foreach ($comments as $comment) { ?>

                         <li>
                            <?php if($comment->comment_parent == 0) { ?>
                                <div class="bg-white row padding-comment">
                                    <div class="image-box col-4 col-md-2">
                                        <img src="<?php echo get_avatar_url($comment->user_id); ?>" class="avatar-image">
                                    </div>
                                    <div class="col-8 col-md-10">
                                        <div class="comment">
                                            <div class="author-name">
                                                <?php echo get_the_author_meta('nickname', $comment->user_id);?>
                                            </div>
                                            <div class="date">
                                                Em <?php echo $comment->comment_date; ?>
                                            </div>
                                            <div class="text">
                                                <?php echo $comment->comment_content; ?>
                                            </div>

                                            <a href="/post-mais/?replytocom=<?php echo $comment->comment_ID; ?>#respond">Responder</a>
                                        </div>
                                    </div>
                                </div>
                            <?php } else { ?>
                                <div class="row">
                                    <div class="col-1 padding-comment" style="">
                                        <img class="float-right reply-arrow" src="<?php echo get_theme_file_uri( 'assets/images/reply-arrow.png' ); ?>" width="18px">
                                    </div>
                                    <div class="image-box col-3 col-md-1 bg-white padding-comment">
                                        <img src="<?php echo get_avatar_url($comment->user_id); ?>" class="avatar-image">
                                    </div>
                                    <div class="col-8 col-md-10 bg-white padding-comment">
                                        <div class="comment">
                                            <div class="author-name">
                                                <?php echo get_the_author_meta('nickname', $comment->user_id);?>
                                            </div>
                                            <div class="date">
                                                Em <?php echo $comment->comment_date; ?>
                                            </div>
                                            <div class="text">
                                                <?php echo $comment->comment_content; ?>
                                            </div>

                                            <a href="/post-mais/?replytocom=<?php echo $comment->comment_ID; ?>#respond">Responder</a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
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

            //comment_form();
            ?>
        </div>

    </div><!-- #comments -->
</div>
