<?php
function threadedComments($comments, $options) {
	$commentClass = '';
	if ($comments->authorId) {
		if ($comments->authorId == $comments->ownerId) {
			$commentClass .= ' comment-by-author';
		} else {
			$commentClass .= ' comment-by-user';
		}
	}
?>
<li id="<?php $comments->theId(); ?>" class="comment-body<?php
	if ($comments->levels > 0) {
		echo ' comment-child';
		$comments->levelsAlt(' comment-level-odd', ' comment-level-even');
	} else {
		echo ' comment-parent';
	}
	$comments->alt(' comment-odd', ' comment-even');
	echo $commentClass;
?>">
	<article>
		<aside>
			<?php $comments->gravatar('48', ''); ?>
			<cite class="vcard author"><?php $options->beforeAuthor();$comments->author();$options->afterAuthor(); ?></cite>
			<time pubdate="pubdate" datetime="<?php $comments->date();?>"><?php $options->beforeDate();$comments->date($options->dateFormat);$options->afterDate(); ?></time>
		</aside>
		<div class="comment-content">
			<?php $comments->content(); ?>
		</div>
	</article>
	<?php if ($comments->children) { ?>
	<div class="comment-children">
		<?php $comments->threadedComments($options); ?>
	</div>
	<?php } ?>
	<div class="comment-reply">
		<?php $comments->reply($options->replyWord); ?>
	</div>
</li>
<?php
}
?>
<section id="comments">
<?php $this->comments()->to($comments); ?>
<?php if ($comments->have()): ?>
	<div class="title">
		<span id="comments-count"><?php $this->commentsNum(_t('速来吹水！'), _t('板凳可抢！'), _t('沙发现售'), _t('%d 楼达成！')); ?></span>
		<a href="#response" >开闸放水！！</a>
	</div>
	<?php if (!empty($this->options->commentsShow) && strpos($this->options->commentsShow,'commentsPageBreak')): ?>
	<nav class="pagenav"><ol><?php $comments->pageNav(); ?></ol></nav>
	<?php endif; ?>
<?php $comments->listComments(); ?>
<?php endif; ?>
</section>

<?php if($this->allow('comment')): ?>
<div id="<?php $this->respondId(); ?>" class="respond">
	<div class="cancel-comment-reply"><?php $comments->cancelReply(); ?></div>
	<form method="post" action="<?php $this->commentUrl() ?>" id="comment_form">
		<?php if($this->user->hasLogin()): ?>
		<div class="loggedinUsrInfo"><input type="hidden"  id="mail" value="<?php $this->user->mail(); ?>"  /><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a><a href="<?php $this->options->logoutUrl(); ?>" title="Logout" class="logout"><?php _e('退出'); ?></a></div>
		<?php else: ?>
		<div class="newUsrInfo"><input type="text" name="author" id="author" class="text" size="15" value="<?php $this->remember('author'); ?>" required="required" placeholder="嗯，昵称神马的，是必须的！" /><input type="email" name="mail" id="mail" class="text" size="15" value="<?php $this->remember('mail'); ?>" <?php if ($this->options->commentsRequireMail): ?>required="required"<?php endif; ?> placeholder="邮件的话，会保密哦～～～"  /><input type="url" name="url" id="url" class="text" size="15" value="<?php $this->remember('url'); ?>" <?php if ($this->options->commentsRequireURL): ?>required="required"<?php endif; ?> placeholder="填上网址，我会回访哦～～" /></div>
		<?php endif; ?>
		<div id="response"><textarea accesskey="r" rows="5" cols="50" name="text" class="textarea" id="comment" required="required" placeholder="吹水吧，赶快来吹吧！！"><?php $this->remember('text'); ?></textarea></div>
		<div class="submit"><input type="submit" value="<?php _e('提交评论'); ?>" class="submit" id="submitComment" /></div>
	</form>
</div>
<?php else: ?>
<div class="respond"><p><?php _e('评论已关闭'); ?></p></div>
<?php endif; ?>

