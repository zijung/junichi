<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

	<div class="mid-col">
		<div class="mid-col-container">
			<h1 class="title" style="padding-top:30px;"><?php $this->archiveTitle(array(
				'category'  =>  _t('分類 <span style=color:#2479CC;>%s</span> 下的文章'),
				'search'    =>  _t('包含關鍵字 <span style=color:#2479CC;>%s</span> 的文章'),
				'tag'       =>  _t('標籤 <span style=color:#2479CC;>%s</span> 下的文章'),
				'author'    =>  _t('<span style=color:#2479CC;>%s</span> 的文章')
			), '', ''); ?></h1>
			<?php while($this->next()) { ?>
				<article class="post post-list">

				<div class="meta">
					<div class="date">
						<time><?php $this->date('M j, Y'); ?></time>
					</div>
					<div class="comment">
						<a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum(_t(' No Comments '), _t(' %d Comments ')); ?></a>
					</div>
				</div>
				<h1 class="title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h1>
				<div class="entry-content">
					<p><?php $this->excerpt(200);?></p>
					<p><a href="<?php $this->permalink() ?>" class="more-link">繼續閱讀 »</a></p>
				</div>
				</article>
			<?php }; ?>
			<?php $this->pageLink('<nav class="page-navi"><i class="icon icon-left"></i> 上一頁', 'prev');?><?php $this->pageLink('下一頁 <i class="icon icon-right"></i></nav>', 'next');?>
		</div>

<?php $this->need('footer.php'); ?>