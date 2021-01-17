<?php

// Add the custom columns to the Product post type:
add_filter( 'manage_YOUR-POST-TYPE_posts_columns', 'set_custom_edit_product_columns' );
function set_custom_edit_product_columns($columns) {
		unset( $columns['author'] );
		$columns['pro_model'] = ('Model');

		return $columns;
}

// Add the Model to the custom columns for the Product post type:
add_action( 'manage_YOUR-POST-TYPE_posts_custom_column' , 'custom_product_column', 10, 2 );
function custom_product_column( $column, $post_id ) {
		switch ( $column ) {

				case 'pro_model' :
						$terms = get_field( "product_model", $post->ID );; //AFC
						if ( is_string( $terms ) )
								echo $terms;
						else
								_e('Unable to get Model');
				break;

		}
}

?>
