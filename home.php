<?php
$nonce = '';

if ( isset( $_REQUEST['_typen'] ) && wp_verify_nonce( $_REQUEST['_typen'], 'nonce_blog' ) ) {
	$nonce = 'blog';
} elseif ( isset( $_REQUEST['_typen'] ) && wp_verify_nonce( $_REQUEST['_typen'], 'nonce_tutor' ) ) {
	$nonce = 'tutor';
} else {
	die( __( 'Security check', 'teratur' ) );
}
?>

	<main id="primary" class="site-main">

		<?php
		if ( 'blog' === $nonce ) {
			echo '<h1>BLOG HOMEPAGE</h1>';
		} elseif ( 'tutor' === $nonce ) {
			echo '<h1>TUTOR HOMEPAGE</h1>';
		}
		?>


	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
