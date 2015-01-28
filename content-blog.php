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
			<time class="entry-time" itemprop="datePublished" ><?php the_date() ?></time>
		</header>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
			<a href="<?php the_permalink() ?>" class="read-more">Read More <span>&raquo;<span></a>
		</div>
		<footer class="entry-footer">
		<div class="entry-meta">
		<span class="entry-terms author">Written by <?php the_author() ?></span>
		<span class="entry-terms category">Posted in <?php 
		$category = get_the_category();
		echo $category[0]->cat_name;
		?></span>
		<span class="entry-terms comments"><?php echo get_comments_number() ?> comments</span>
			</div>
		</footer>
	</div>
</article>