<!DOCTYPE html><html lang="zh"><head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title><?php $this->archiveTitle(' &raquo; ', '', ' - '); ?><?php $this->options->title(); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="profile" href="http://microformats.org/profile/hatom" />
<link rel="profile" href="http://microformats.org/profile/hcard" />
<link rel="home" href="<?php $this->options->siteUrl(); ?>" title="Home page" />
<!-- 使用url函数转换相关路径 -->
<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('9.css'); ?>" />
<!-- 通过自有函数输出HTML头部信息 -->
<?php $this->header(); ?>
</head><body>

