<?php
/**
 * The template part for displaying a message that posts cannot be found.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package kurama
 */
?>

<section class="no-results not-found">
	<header class="page-header">
		<h1 class="page-title"><?php _e( 'Rien trouvé', 'kurama' ); ?></h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php printf( __( 'Prêt à publier votre premier post ? <a href="%1$s">C&rsquo;est par ici</a>.', 'kurama' ), esc_url( admin_url( 'post-new.php' ) ) ); ?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php _e( 'Désolé, votre recherche n&rsquo;a donné aucun résultat. Peut-être pourriez-vous essayer une nouvelle recherche ?', 'kurama' ); ?></p>
			<?php get_search_form(); ?>

		<?php else : ?>

			<p><?php _e( 'Nous ne trouvons pas ce que vous cherchez. Peut-être que la recherche pourrait vous aider.', 'kurama' ); ?></p>
			<?php get_search_form(); ?>

		<?php endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
