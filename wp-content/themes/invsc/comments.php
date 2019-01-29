<?php

if ( post_password_required() ) {
	return;
}
$args = [
    'post_id' => $id,
    'offset' => 3,
    'orderby' => '',
    'order' => 'DESC',
];
$comments = get_comments($args);
?>
<div class="row" id="comment-box">
    <div class="panel panel-default col-12">
        <div class="panel-heading"><h3>Comentários para este post <span class="comment-number">(<?php echo count($comments); ?>)</span></h3></div>
        <div class="panel-body">

            <ul class="comment-list">
                <?php
                    foreach ($comments as $comment) {
                ?>
                    <?php if($comment->comment_parent == 0) { ?>
                        <li>
                            <div class="bg-white row padding-comment">
                                <div class="image-box col-4 col-md-2">
                                    <img src="<?php echo get_avatar_url($comment->user_id); ?>" class="avatar-image">
                                </div>
                                <div class="col-8 col-md-10">
                                    <div class="comment">
                                        <div class="author-name">
                                            <?php echo $comment->comment_author; ?>
                                        </div>
                                        <div class="date">
                                            Em <?php echo date("d/m/Y H:i:s",strtotime($comment->comment_date)); ?>
                                        </div>
                                        <div class="text">
                                            <?php echo $comment->comment_content; ?>
                                        </div>

                                        <a href="/<?php echo $post->post_name; ?>/?replytocom=<?php echo $comment->comment_ID; ?>#respond">Responder</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                    <?php } ?>
                        <?php
                        $children = array_reverse($comment->get_children());
                        foreach ($children as $child) {
                        ?>
                            <li>
                                <div class="row">
                                    <div class="col-1 padding-comment" style="">
                                        <img class="float-right reply-arrow" src="<?php echo get_theme_file_uri( 'assets/images/reply-arrow.png' ); ?>" width="18px">
                                    </div>
                                    <div class="image-box col-3 col-md-1 bg-white padding-comment">
                                        <img src="<?php echo get_avatar_url($child->user_id); ?>" class="avatar-image">
                                    </div>
                                    <div class="col-8 col-md-10 bg-white padding-comment">
                                        <div class="comment">
                                            <div class="author-name">
                                                <?php echo $comment->comment_author; ?>
                                            </div>
                                            <div class="date">
                                                Em <?php echo date("d/m/Y H:i:s",strtotime($child->comment_date)); ?>
                                            </div>
                                            <div class="text">
                                                <?php echo $child->comment_content; ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php } ?>
                    <?php } ?>
            </ul>
                <?php /*the_comments_pagination( array(
                    'prev_text' => invsc_get_svg( array( 'icon' => 'arrow-left' ) ) . '<span class="screen-reader-text">' . __( 'Previous', 'invsc' ) . '</span>',
                    'next_text' => '<span class="screen-reader-text">' . __( 'Next', 'invsc' ) . '</span>' . invsc_get_svg( array( 'icon' => 'arrow-right' ) ),
                ) );*/

            ?>
        </div>
        <?php
        // If comments are closed and there are comments, let's leave a little note, shall we?
        if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) { ?>

            <p class="no-comments"><?php _e( 'Comments are closed.', 'invsc' ); ?></p>
        <?php } ?>

        <ul class="comment-list">
            <li>
                <div class="bg-white row padding-comment">
                    <div class="col-md-8 col-sm-12">
                        <?php

                        $fields = [
                            'author' =>
                                "<div class='form-group '>
                                    <label for='author'>Nome</label>
                                    <input type='author' class='form-control' id='author' name='author' placeholder='Nome'>
                                    <div class='invalid-feedback'>
                                        Preencha seu nome
                                    </div>
                                </div>",

                            'email' =>
                                "<div class='form-group'>
                                    <label for='exampleFormControlInput1'>E-mail</label>
                                    <input type='email' class='form-control' id='email' name='email' placeholder='nome@exemplo.com'>
                                    <div class='invalid-feedback'>
                                        Preencha seu e-mail
                                    </div>
                                </div>"
                        ];

                        $args = array(
                            'id_form'           => 'commentform',
                            'class_form'      => 'needs-validation',
                            'id_submit'         => 'submit',
                            'class_submit'      => 'btn btn-primary',
                            'name_submit'       => 'submit',
                            'title_reply'       => __( 'Leave a Reply' ),
                            'title_reply_to'    => __( 'Leave a Reply to %s' ),
                            'cancel_reply_link' => __( 'Cancel Reply' ),
                            'label_submit'      => __( 'Post Comment' ),
                            'format'            => 'xhtml',

                            'comment_field' =>  "<div class='form-group'>
                                    <label for='exampleFormControlInput1'>Seu comentário</label>
                                    <textarea class='form-control' rows='5' cols='8' id='comment' name='comment'></textarea>
                                    <div class='invalid-feedback'>
                                        Adicione um comentário
                                    </div>
                                </div>",

                            'must_log_in' => '<p class="must-log-in">' .
                                sprintf(
                                    __( 'You must be <a href="%s">logged in</a> to post a comment.' ),
                                    wp_login_url( apply_filters( 'the_permalink', get_permalink() ) )
                                ) . '</p>',

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
                    </div>
                </div>
            </li>
        </ul>
    </div>

    <script>

        $(document).ready(function () {
            $('.needs-validation').submit(function (e) {

                var error = false;

                $('form').children().children('.form-control').each(function () {

                    if ($(this).attr('name') == 'email') {
                        var regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

                        if(!regex.test(String($(this).val()).toLowerCase())){
                            $(this).next('.invalid-feedback').show();
                            error = true;
                        }else{
                            $(this).next('.invalid-feedback').hide();
                        }
                    } else {
                        if ($(this).val().length == 0) {
                           $(this).next('.invalid-feedback').show();
                           error = true;
                        } else {
                            $(this).next('.invalid-feedback').hide();
                        }
                    }

                });

                if(error){
                    e.preventDefault();
                }

            })
        })
    </script>
</div>
