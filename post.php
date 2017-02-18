<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
	<div class="mid-col">
		<div class="mid-col-container">
			<div id="content" class="inner">
				<article class="post">
				<div class="meta">
					<div class="date"><time itemprop="datePublished" content="<?php $this->date('c'); ?>"><?php $this->date('M j, Y'); ?></time></div>
					<div class="comment">
                        <a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum(_t(' No Comments '), _t(' %d Comments ')); ?></a>
					</div>
				</div>
				<h1 class="title" itemprop="headline"><?php $this->title() ?></h1>
				<div class="entry-content" itemprop="articleBody">
					<?php parseContent($this); ?>
					<p class="post-info">
						最後更新於&nbsp;<span class="date"><?php echo date('Y-m-d  H:i:s' , $this->modified); ?></span><?php if ($this->tags) { ?>&nbsp;並被添加到「<?php $this->tags(' ', true, ''); ?>」標籤<?php } ?>，已有 <?php get_post_view($this) ?> 位同學讀過。
					</p>
					<p class="copyright-info">
						本站使用「<a target="_blank" href="https://creativecommons.org/licenses/by-nc-sa/4.0/deed.zh_TW">知識共享署名-非商業性使用-相同方式共享 4.0 國際許可協議</a>」進行許可
					</p>
					<p>
						<?php $this->related(5)->to($relatedPosts); ?>
						<?php if (count($relatedPosts->stack)): ?>
						<h3>相關文章</h3>
						<ul>
							<?php while ($relatedPosts->next()): ?>
							<li><a href="<?php $relatedPosts->permalink(); ?>" title="<?php $relatedPosts->title(); ?>"><?php $relatedPosts->title(); ?></a></li>
							<?php endwhile; ?>
						</ul>
						<?php endif; ?>					
					</p>					
				</div>
				</article>
				<nav class="page-navi"><span class="prev"><?php $this->thePrev('&laquo; %s', ''); ?></span> <span class="next"><?php $this->theNext('%s &raquo;', ''); ?></span></nav>
				<?php $this->need('comments.php'); ?>
			</div>
		</div>
<?php $this->need('footer.php'); ?>