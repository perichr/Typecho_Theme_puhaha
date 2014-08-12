<?php
/**
 * 随便做的，噗哈哈哈哈....
 * 
 * @package puhaha
 * @author perichr
 * @version 0.01
 * @link http://perichr.org
 */
 
$this->need('header.php');
?>
<section class="hfeed index">
<?php while($this->next()): ?>
<article class="hentry">
	<h1 class="entry-title"><a href="<?php $this->permalink(); ?>" title="『<?php $this->title() ?>』 by <?php $this->author(); ?>" rel="bookmark"><?php $this->title() ?></a></h1>
	<aside class="entry-meta">
		<time datetime="<?php $this->date('Y-m-d'); ?>" pubdate="pubdate"><?php $this->date('Y-m-d'); ?></time>
		<span><?php $this->category(''); ?></span>
	</aside>
	<div class="entry-content"><?php $this->content('阅读剩余部分...'); ?></div>
</article>
<?php endwhile; ?>
<nav class="pagenav"><?php $this->pageNav(); ?></nav>
</section>
<?php $this->need('aside.php'); ?>
<?php $this->need('footer.php'); ?>
