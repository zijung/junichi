<?php
/**
* links
*
* @package custom
*/
$this->need('header.php'); ?>

	<div class="mid-col">
		<div class="mid-col-container">
			<div id="content" class="inner">
				<article class="post post-archives">
					<h1 class="title"><?php $this->title() ?></h1>
					<div class="entry-content">	
						<?php $all = Typecho_Plugin::export();?>
						<?php if (array_key_exists('Links', $all['activated'])) { ?>
							<ul>
							<?php Links_Plugin::output('SHOW_TEXT'); ?>
							</ul>
						<?php } ?>
						<?php $this->content(); ?>
					</div>
				</article>
			</div>
		</div>

<?php $this->need('footer.php'); ?>