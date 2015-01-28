 <article class="post-entry">
	<div class="entry-wrap">
		<header class="entry-header">
			<div class="entry-meta">
		        <span class="author-avatar">
		        <?php echo get_avatar( get_the_author_meta('email'), '70' ); ?>
				</span>
				</div>
		        <h2 class="entry-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
		        
			<span class="entry-terms-author">By <?php the_author() ?></span>
			<time class="entry-time" itemprop="datePublished" ><?php the_date(); ?></time>
		</header>
		<div class="entry-summary">
			<?php the_content() ?>
		</div>
		<footer class="entry-footer">
			<div class="entry-meta">
				<span class="entry-terms comments author">
					By <?php the_author(); ?>
					/
					Posted in <?php the_category(', ') ?>
					/
					<?php echo get_comments_number() ?> comments
				</span>
			</div>
		</footer>
	</div>
</article>