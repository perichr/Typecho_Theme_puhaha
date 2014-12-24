<?php $this->need('Include\header.php'); ?>
<div class="hfeed">
<section class="archive">
<?php if ($this->have()): ?>
<?php while($this->next()): ?>
<article class="hentry">
	<h1 class="entry-title"><a href="<?php $this->permalink(); ?>" title="『<?php $this->title() ?>』 by <?php $this->author(); ?>" rel="bookmark"><?php $this->title() ?></a></h1>
	<aside class="entry-meta">
		<time datetime="<?php $this->date('Y/m/d'); ?>" pubdate="pubdate"><?php $this->date('Y-m-d'); ?></time>
		<span><?php $this->category(''); ?></span>
	</aside>
	<div class="entry-content"><?php $this->content('阅读剩余部分...'); ?></div>
</article>
<?php endwhile; ?>
<?php else: ?>
<article class="hentry">
<h1 class="entry_title"><?php _e('没有找到内容'); ?></h1>
</article>
<?php endif; ?>
<nav class="pagenav"><?php $this->pageNav(); ?></nav>
</section>
<?php $this->need('Include\aside.php'); ?>
</div>
<?php $this->need('Include\footer.php'); ?>
