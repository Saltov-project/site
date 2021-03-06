<?php
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
    die ('Please do not load this page directly. Thanks!');

if (post_password_required()) { 
	art_post_box('', '<p class="nocomments">' . __('У вас недостаточно прав. Введите пароль для просмотра комментариев.', THEME_NS) . '</p>');
	return;
}

if (have_comments()){
    ob_start();
    comments_number(__('Нет комментариев', THEME_NS), __('1 комментарий ', THEME_NS), __('% Комментариев', THEME_NS));
    art_page_navi('<span id="comments">' . ob_get_clean() . ' ' . sprintf(__(' &#8220;%s&#8221;', THEME_NS), the_title('', '', false)) . '</span>', true);
    echo '<ul class="commentlist">';
    wp_list_comments('type=all&callback=art_comment');
    echo '</ul>';
    art_page_navi('', true);
} elseif('open' != $post->comment_status && !is_page()) { 
    art_post_box('', '<p class="nocomments">' . __('Комментарии закрыты.', THEME_NS) .'</p>');
}

if ('open' == $post->comment_status) {
    ob_start();
?>
<div id="respond">
  <h3><?php comment_form_title( __('Оставить комментарий', THEME_NS), __('Оставить комментарий к записи %s', THEME_NS) ); ?></h3>
<div class="cancel-comment-reply"><small><?php cancel_comment_reply_link(); ?></small></div>
<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p><?php printf(__('Вы должны <a href="%s">зайти</a> чтобы оставить комментарий', THEME_NS), get_option('siteurl') . '/wp-login.php?redirect_to=' . urlencode(get_permalink())); ?></p>
<?php else : ?>
<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
<?php if ( $user_ID ) : ?>
<p><?php printf(__('Вы вошли как <a href="%1$s">%2$s</a>.', THEME_NS), get_option('siteurl') . '/wp-admin/profile.php', $user_identity); ?> <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php _e('Выйдите из этой учетной записи', THEME_NS); ?>"><?php _e('Выйти &raquo;', THEME_NS); ?></a></p>
<?php else : ?>
<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
<label for="author"><small><?php _e('Имя', THEME_NS); ?> <?php if ($req) _e("(обязательно)", THEME_NS); ?></small></label></p>
<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
<label for="email"><small><?php _e('Mail (не будет опубликован)', THEME_NS); ?> <?php if ($req) _e("(обязательно)", THEME_NS); ?></small></label></p>
<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
<label for="url"><small><?php _e('Сайт', THEME_NS); ?></small></label></p>
<?php endif; ?>
<!--<p><small><?php printf(__('<strong>XHTML:</strong> Вы можете использовать эти теги: <code>%s</code>', THEME_NS), allowed_tags()); ?></small></p>-->
<p><textarea name="comment" id="comment" cols="40" rows="10" tabindex="4"></textarea></p>
<p>
	<span class="art-button-wrapper"><span class="l"> </span><span class="r"> </span>
		<input class="art-button" type="submit" name="submit" tabindex="5" value="<?php _e('Добавить комментарий', THEME_NS); ?>" />
	</span>
    <?php comment_id_fields(); ?>
</p>
<?php do_action('comment_form', $post->ID); ?>
</form>
<?php endif;?>
</div>
<?php 
    art_post_box('', ob_get_clean());
}
