<?php
	require_once( 'instagram_basic_display_api.php' );

	$params = array(
		'get_code' => isset( $_GET['code'] ) ? $_GET['code'] : ''
	);
	$ig = new instagram_basic_display_api( $params );
?>
<h1>Instagram Basic Display API</h1>
<hr />
<?php if ( $ig->hasUserAccessToken ) : ?>
	<h4>IG Info</h4>
	<?php echo $ig->getUserAccessToken(); ?>
<?php else : ?>
	<a href="<?php echo $ig->authorizationUrl; ?>">
		Authorize w/Instagram
	</a>
<?php endif; ?>