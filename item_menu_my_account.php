<?php

// Add an EndPoint  to My Account. In this case the whishlist.
add_action( 'init', function() {
	add_rewrite_endpoint( 'wishlist', '/wishlist/' );
} );

// Add an item to menu of My Account. In this case the whishlist.
add_filter( 'woocommerce_account_menu_items', function($items) {
	// Save logout item data and remove from menu
	// Necessary so that the wish list is not the last item
	$logout = $items['customer-logout'];
	unset($items['customer-logout']);

	// Add the wishlist item
	$items['wishlist'] = 'Whishlist';
	
	// Add logout again so that it is last item
	$items['customer-logout'] = $logout;
	
	return $items;
}, 99, 1 );

?>
