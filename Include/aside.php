<aside>
	<form id="search" method="post" action=""><div><input accesskey="s" type="text" name="s" class="text" size="20" value="<?php $this->archiveTitle(' ','',''); ?>" /><input type="submit" class="submit" value="搜索" /></div></form>
	
	<div class="widgets">
		<div class="widget" id="widget_newentries" title="最新文章">
			<ul><?php $this->widget('Widget_Contents_Post_Recent')->parse('<li><a href="{permalink}" rel="tag">{title}</a></li>'); ?></ul>
		</div>

		<div class="widget" id="widget_recentcomments" title="最近灌水">
			<ul><?php $this->widget('Widget_Comments_Recent','ignoreAuthor=true')->to($comments); while($comments->next()): ?><li><a href="<?php $comments->permalink(); ?>" title="<?php $comments->author(false); ?>有话说！"><?php $comments->excerpt(20, '...'); ?></a></li><?php endwhile; ?></ul>
		</div>

		<div class="widget" id="widget_metas" title="文章分类">
			<ul id="widget_archives_cate"><?php $this->widget('Widget_Metas_Category_List')->parse('<li><a href="{permalink}" rel="tag" title="{description}">{name}</a></li>'); ?></ul>
		</div>
		<div class="widget" id="widget_archives" title="历史存档">
			<ul id="widget_archives_month"><?php $this->widget('Widget_Contents_Post_Date@1', 'type=month&format=Y - m(F)&limit=12')->parse('<li><a href="{permalink}">{date}</a></li>');?></ul>
			<ul id="widget_archives_year"><?php $this->widget('Widget_Contents_Post_Date@2', 'type=year&format=Y')->parse('<li><a href="{permalink}">{date}</a></li>'); ?></ul>
		</div>

	</div>


</aside>