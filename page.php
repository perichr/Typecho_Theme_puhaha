<?php $this->need('Include\header.php'); ?>
<div class="hfeed">
<article class="hentry page">
	<h1 class="entry-title"><a href="<?php $this->permalink(); ?>" rel="bookmark"><?php $this->title() ?></a></h1>
	<div class="entry-content"><?php $this->content(); ?></div>
	<?php $this->need('Include\comments.php'); ?>
</article>
<?php $this->need('Include\aside.php'); ?>
</div>
<?php $this->need('Include\footer.php'); ?>
