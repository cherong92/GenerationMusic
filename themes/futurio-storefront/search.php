<?php
get_header();

futurio_storefront_generate_header( true, true, true, false, false );
?>

<div class="container-fluid archive-page-header">
    <header class="container text-left">
		<?php
		/* translators: %s: search result string */
		echo "<h1 class='search-head'>" . sprintf( esc_html__( 'Search Results for: %s', 'futurio-storefront' ), get_search_query() ) . "</h1>";
		?>
    </header><!-- .archive-page-header -->
</div>

<?php
futurio_storefront_breadcrumbs();

futurio_storefront_content_layout();
?>

<!-- start content container -->
<div class="row">

    <div class="col-md-<?php futurio_storefront_main_content_width_columns(); ?> <?php futurio_storefront_sidebar_position( 'content' ) ?>">
		<?php
		if ( have_posts() ) :

			while ( have_posts() ) : the_post();

				get_template_part( 'content', get_post_format() );


			endwhile;

			the_posts_pagination();

		else :

			get_template_part( 'content', 'none' );

		endif;
		?>

    </div>

	<?php
	if ( is_active_sidebar( 'futurio-storefront-archive-sidebar' ) ) {
		get_sidebar();
	}
	?>

</div>
<!-- end content container -->

<?php get_footer(); ?>
