<?php
get_header();
require_once( 'wp-load.php' );
?>

<body id="front-page">

	<?php
	$nb = wp_create_nonce( 'nonce_blog' );
	$nt = wp_create_nonce( 'nonce_tutor' );

	$nonce = '';

	if ( isset( $_REQUEST['_typen'] ) && wp_verify_nonce( $_REQUEST['_typen'], 'nonce_blog' ) ) {
		get_template_part( 'template-parts/front-page-blog' );
	} elseif ( isset( $_REQUEST['_typen'] ) && wp_verify_nonce( $_REQUEST['_typen'], 'nonce_tutor' ) ) {
		get_template_part( 'template-parts/front-page-tutor' );
	} else {
		?>


	<img src="assets/img/telunjuk.jpg"></img>
	<div id="front-page-card" class="twelve-clmn-cntnr two-rw-cntnr">
		<section>
			<h1>alkitabkita.info</h1>
			<h2>Memampukan Anda memahami Alkitab -- seperti penerjemah Alkitab.</h2>
		</section>
		<section>
			<div>
				<a href="<?php echo esc_attr( get_permalink( 13 ) ); ?>">Alkitab dalam Terjemahan Sederhana</a>
			</div>
			<div>
				<a href="<?php echo esc_attr( get_permalink( 13 ) ); ?>">Alat Penerjemahan Alkitab</a>
			</div>
			<div>
				<a href="<?php echo esc_attr( get_home_url() ); ?>?_typen=<?php echo esc_attr( $nt ); ?>">Kursus Alkitab Kita</a>
			<div>
				<a href="<?php echo esc_attr( get_home_url() ); ?>?_typen=<?php echo esc_attr( $nb ); ?>">Artikel</a>
			</div>
		</section>
	</div>


		<?php
		return;
	}
	?>

</body>

<?php
get_footer();
