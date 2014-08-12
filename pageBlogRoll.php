<?php
/**
 * BlogRoll
 *
 * @package custom
 */
?>
<?php $this->need('header.php'); ?>
<article class="hfeed hentry">
	<h1 class="entry-title"><a href="<?php $this->permalink(); ?>" rel="bookmark"><?php $this->title() ?></a></h1>
	<div class="entry-content"><?php $this->content(); ?>
<?php if(PHH_IsPluginActived('Links')): ?>
		<ul id="link_friend" class="links" title="友情链接"><?php Links_Plugin::output('<li class="vcard"><a class="fn url nickname" href="{url}" title="{title}" rel="{user}">{name}</a></li>', 0, "friend"); ?></ul>
		<ul id="link_classmate" class="links" title="童鞋啥的"><?php Links_Plugin::output('<li class="vcard"><a class="fn url nickname" href="{url}" title="{title}" rel="{user}">{name}</a></li>', 0, "classmate"); ?></ul>
		<ul id="link_attention" class="links" title="关注博友"><?php Links_Plugin::output('<li class="vcard"><a class="fn url nickname" href="{url}" title="{title}" rel="{user}">{name}</a></li>', 0, "attention"); ?></ul>
		<ul id="link_collection" class="links" title="收藏网站"><?php Links_Plugin::output('<li class="vcard"><a class="fn url nickname" href="{url}" title="{title}" rel="{user}">{name}</a></li>', 0, "collection"); ?></ul>
<?php endif; ?>
<?php if(PHH_IsPluginActived('Avatars')): ?>
		<ul id="link_readers" title="热情读者"><?php Avatars_Plugin::output(); ?></ul>
<?php endif; ?>
	</div>
	<?php $this->need('comments.php'); ?>
</article>
<?php $this->need('aside.php'); ?>
<?php $this->need('footer.php'); ?>
