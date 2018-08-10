<?php get_header(); ?>
<!-- <?php the_post(); ?>

	<article class="page-content">
		<?php the_content(); ?>
	</article>-->
	<div class="container">
			<div class="photo">
				<img src="<?php echo get_template_directory_uri(); ?>/images/nitin_garud_profile.jpg"/ width="250px" height="250px">
			</div>
			<div class="content">
				<h2>Hello, <br/>
					I am Nitin Garud<br/>
				Web <b>Designer</b></h2>
				<article>Lorem isum Lorem isum Lorem isum Lorem isum Lorem isum Lorem isum Lorem isum Lorem isum Lorem isum Lorem isum Lorem isum Lorem isum.</article>
				<br/>
				<div class="cv">
					<input type="button" name="" value="Download CV">
				</div>
			</div>
	</div>		
<div class="container">


	<aside class="latest-news">
		<h2>Latest News</h2>

		<?php 
		// New Query for news articles
		$args = array( 
				'post_type'      => 'post',
				'orderby'        => 'date',
				'order'          => 'ASC',
				'posts_per_page' => 2, 
			);

		$latest_news = new WP_Query( $args );

		if( $latest_news->have_posts() ): while( $latest_news->have_posts() ): $latest_news->the_post();
		?>
			<article <?php post_class(); ?>>
				<h3><?php the_title(); ?></h3>

				<?php the_excerpt(); ?>

				<a href="<?php the_permalink(); ?>">Read more &raquo;</a>
			</article>
		<?php endwhile; endif; ?>

		<?php wp_reset_query(); ?>
	</aside>
	<aside class="latest-news">
		<h2>Latest News</h2>

		<?php 
		// New Query for news articles
		$args = array( 
				'post_type'      => 'ptd_staff',
				'posts_per_page' => 1, 
			);

		$loop = new WP_Query( $args );

		while( $loop->have_posts() ): $loop->the_post();
		?>
			<article <?php post_class(); ?>>
				<h3><?php the_title(); ?></h3>
				<p><?php the_content(); ?></p>
				<?php the_excerpt(); ?>

				<a href="<?php the_permalink(); ?>">Read more &raquo;</a>
			</article>
		<?php endwhile;?>

		<?php wp_reset_query(); ?>
	</aside>
	<?php get_sidebar( 'news' ); ?>
</div>
	

<?php get_footer(); ?>