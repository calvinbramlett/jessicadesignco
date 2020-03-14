<?php
/**
 * Templates and Page IDs without editor
 *
 */

function ea_disable_editor( $id = false ) {

	$excluded_templates = array(
		'templates/home.php',
		'templates/blog.php'
	);

	$excluded_ids = array(
		// get_option( 'page_on_front' )
	);

	if( empty( $id ) )
		return false;

	$id = intval( $id );
	$template = get_page_template_slug( $id );

	return in_array( $id, $excluded_ids ) || in_array( $template, $excluded_templates );
}


add_action('admin_head', 'hide_gutenburg');

function hide_gutenburg( ) {
		$screen = get_current_screen();
	if( 'page' !== $screen->id || ! isset( $_GET['post']) )
		return;

	if( ea_disable_editor( $_GET['post'] ) ) {
		echo '<style>
    .editor-block-list__layout { display: none; }
		.edit-post-layout__content .edit-post-visual-editor { flex: none; }
		.edit-post-header-toolbar { visibility: hidden; }
  </style>';
	}
}