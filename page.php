<?php $this->need('header.php'); ?>
<article class="hfeed hentry">
	<h1 class="entry-title"><a href="<?php $this->permalink(); ?>" rel="bookmark"><?php $this->title() ?></a></h1>
	<div class="entry-content"><?php $this->content(); ?></div>
	<?php $this->need('comments.php'); ?>
</article>
<?php $this->need('aside.php'); ?>
<?php $this->need('footer.php'); ?>
