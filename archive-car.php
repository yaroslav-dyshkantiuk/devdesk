<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package DevDesk
 */

get_header();
?>

	<div>

        Template for Custom Post Type Car
		<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
		</header>

		<?php 
		if (have_posts()) {
			while (have_posts()) {
				the_post();
				get_template_part('partials/content');
			}
			?>
			<div class="pagination">
				<?php echo paginate_links(); ?>
			</div>
			<?php
		} else {
			get_template_part('partials/content', 'none');
		}
		?>
		
    </div>

	</div>

<?php
if(is_active_sidebar('car-sidebar')) {
echo '<aside id="secondary" class="widget-area">';
get_sidebar('cars');
echo '</aside>';
}
get_footer();
