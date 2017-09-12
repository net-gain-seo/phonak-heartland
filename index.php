<?php get_header(); ?>

<?php
$postId = get_option('page_for_posts');
$pageTitle = get_post_meta($postId,'show_page_title',true);
$show_page_sidebar = get_post_meta($postId,'show_page_sidebar',true);
$page_sidebar = get_post_meta($postId,'page_sidebar',true);
$sidebar_location = get_post_meta($postId,'sidebar_location',true);
$page_sidebar = 'default-sidebar';

?>
<section id="pageContent" class="blogPosts innerWrapper clearfix <?php if($show_page_sidebar == 1){ echo 'hasSidebar'; } if($show_page_sidebar == 1){ echo ' sidebarOn'.$sidebar_location; } ?>" style="padding-top: 50px">
	<div class="container">
		<div class="row pt-0">
			<main class="col col-12 col-md-8">
				<h1 class="pagetitle">
					<?php
					if(is_category()){
						echo single_cat_title('', true);
					}else{
						echo get_the_title($postId);
					}
					?>
				</h1>

				<?php
				while ( have_posts() ) : the_post();
					echo '<article class="clearfix">';
					echo '<div class="date">';
					echo '<span>'.get_the_time('d').' </span>';
					echo '<span>'.get_the_time('F').' </span>';
					echo '<span>'.get_the_time('Y').'</span>';
					echo '</div>';
					echo '<h2><a title="'.get_the_title().'"  class="blogtitle" href="'.get_permalink().'">'.get_the_title().'</a></h2>';

					if ( has_post_thumbnail() ) {
						the_post_thumbnail();
					}

					the_excerpt();
					echo '<br/>';
					echo '<a title="'.get_the_title().'" class="btn btn-primary" href="'.get_permalink().'">READ MORE</a>';
					echo '</article>';
					echo '<hr/>';
				endwhile;
				?>
				<div class="nav-next left"><?php previous_posts_link( 'Newer posts' ); ?></div>
				<div class="nav-previous right"><?php next_posts_link( 'Older posts' ); ?></div>
			</main>

			<?php
			if($show_page_sidebar == 1){
				echo '<aside id="page_sidebar" class="col col-12 col-md-4">';
				dynamic_sidebar($page_sidebar);
				echo '</aside>';
			}
			?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
