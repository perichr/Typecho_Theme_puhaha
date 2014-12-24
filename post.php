<?php $this->need('Include\header.php'); ?>
<div class="hfeed post">
<article class="hentry post">
	<h1 class="entry-title"><a href="<?php $this->permalink(); ?>" rel="bookmark"><?php $this->title() ?></a></h1>
	<aside class="entry-meta">
		<time datetime="<?php $this->date('Y-m-d'); ?>" pubdate="pubdate"><?php $this->date('Y-m-d'); ?></time>
		<cite class="vcard author"><a class="url nickname" href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a></cite>
		<span class="cates"><?php $this->category(''); ?></span>
		<span class="tags"><?php $this->tags('', true, 'none'); ?></span>
	</aside>
	<div class="entry-content"><?php $this->content(); ?></div>
	<nav class="entry-nearby"><?php $this->thePrev(); ?><?php $this->theNext(); ?></nav>
	<?php $this->need('Include\comments.php'); ?>
</article>
<?php $this->need('Include\aside.php'); ?>
</div>
<?php $this->need('Include\footer.php'); ?>
