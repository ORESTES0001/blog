<?php
/**
 * Event & schedule block patterns.
 *
 * @package twentig
 */

twentig_register_block_pattern(
	'twentig/events-list',
	array(
		'title'      => __( 'Events: List', 'twentig' ),
		'categories' => array( 'events' ),
		'content'    => '<!-- wp:group {"align":"full"} --><div class="wp-block-group alignfull"><!-- wp:heading {"textAlign":"center"} --><h2 class="has-text-align-center">' . esc_html_x( 'Our events', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:heading {"level":3,"fontSize":"large","className":"tw-mb-3"} --><h3 class="has-large-font-size tw-mb-3">' . esc_html_x( 'First event', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph --><p><strong>' . esc_html_x( 'Friday, September 18', 'Block pattern content', 'twentig' ) . '</strong></p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Lorem ipsum dolor sit amet, commodo erat adipiscing elit. Sed do eiusmod ut tempor incididunt ut labore et dolore. Integer enim risus suscipit eu iaculis sed ullamcorper.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p><a href="#">' . esc_html_x( 'Learn more', 'Block pattern content', 'twentig' ) . '</a></p><!-- /wp:paragraph --><!-- wp:separator {"className":"tw-mt-7 tw-mb-7"} --><hr class="wp-block-separator tw-mt-7 tw-mb-7"/><!-- /wp:separator --><!-- wp:heading {"level":3,"fontSize":"large","className":"tw-mb-3"} --><h3 class="has-large-font-size tw-mb-3">' . esc_html_x( 'Second event', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph --><p><strong>' . esc_html_x( 'Monday, October 24', 'Block pattern content', 'twentig' ) . '</strong></p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Venenatis nec convallis magna, eu congue velit. Aliquam tempus mi nulla porta luctus. Sed non neque at lectus bibendum blandit.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p><a href="#">' . esc_html_x( 'Learn more', 'Block pattern content', 'twentig' ) . '</a></p><!-- /wp:paragraph --><!-- wp:separator {"className":"tw-mt-7 tw-mb-7"} --><hr class="wp-block-separator tw-mt-7 tw-mb-7"/><!-- /wp:separator --><!-- wp:heading {"level":3,"fontSize":"large","className":"tw-mb-3"} --><h3 class="has-large-font-size tw-mb-3">' . esc_html_x( 'Third event', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph --><p><strong>' . esc_html_x( 'Saturday, December 12', 'Block pattern content', 'twentig' ) . '</strong></p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Duis enim elit, porttitor id feugiat at, blandit at erat. Proin varius libero sit amet tortor volutpat diam laoreet. Fusce sed magna eu ligula commodo hendrerit fringilla ac purus.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p><a href="#">' . esc_html_x( 'Learn more', 'Block pattern content', 'twentig' ) . '</a></p><!-- /wp:paragraph --></div><!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/events-list-with-image-on-left',
	array(
		'title'      => __( 'Events: List with Image on Left', 'twentig' ),
		'categories' => array( 'events' ),
		'content'    => '<!-- wp:group {"align":"full"} --><div class="wp-block-group alignfull"><!-- wp:heading {"textAlign":"center"} --><h2 class="has-text-align-center">' . esc_html_x( 'Our events', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:media-text {"mediaType":"image","twStackedMd":true} --><div class="wp-block-media-text alignwide is-stacked-on-mobile tw-stack-md"><figure class="wp-block-media-text__media"><img src="' . twentig_get_pattern_asset( 'landscape1.jpg' ) . '" alt=""/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"level":3,"className":"tw-mb-3"} --><h3 class="tw-mb-3">' . esc_html_x( 'First event', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph --><p><strong>' . esc_html_x( 'Friday, September 18', 'Block pattern content', 'twentig' ) . '</strong></p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Lorem ipsum dolor sit amet, commodo erat adipiscing elit. Sed do eiusmod ut tempor incididunt ut labore et dolore. Integer enim risus suscipit eu iaculis sed.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p><a href="#">' . esc_html_x( 'Learn more', 'Block pattern content', 'twentig' ) . '</a></p><!-- /wp:paragraph --></div></div><!-- /wp:media-text --><!-- wp:media-text {"mediaType":"image","twStackedMd":true} --><div class="wp-block-media-text alignwide is-stacked-on-mobile tw-stack-md"><figure class="wp-block-media-text__media"><img src="' . twentig_get_pattern_asset( 'landscape2.jpg' ) . '" alt=""/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"level":3,"className":"tw-mb-3"} --><h3 class="tw-mb-3">' . esc_html_x( 'Second event', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph --><p><strong>' . esc_html_x( 'Monday, October 24', 'Block pattern content', 'twentig' ) . '</strong></p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Venenatis nec convallis magna, eu congue velit. Aliquam tempus mi nulla porta luctus. Sed non neque at lectus bibendum blandit.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p><a href="#">' . esc_html_x( 'Learn more', 'Block pattern content', 'twentig' ) . '</a></p><!-- /wp:paragraph --></div></div><!-- /wp:media-text --><!-- wp:media-text {"mediaType":"image","twStackedMd":true} --><div class="wp-block-media-text alignwide is-stacked-on-mobile tw-stack-md"><figure class="wp-block-media-text__media"><img src="' . twentig_get_pattern_asset( 'landscape3.jpg' ) . '" alt=""/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"level":3,"className":"tw-mb-3"} --><h3 class="tw-mb-3">' . esc_html_x( 'Third event', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph --><p><strong>' . esc_html_x( 'Saturday, December 12', 'Block pattern content', 'twentig' ) . '</strong></p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Duis enim elit, porttitor id feugiat at, blandit at erat. Proin varius libero sit amet tortor volutpat diam laoreet. Fusce sed magna eu ligula commodo hendrerit fringilla ac purus.</p><!-- /wp:paragraph --><!-- wp:paragraph --><p><a href="#">' . esc_html_x( 'Learn more', 'Block pattern content', 'twentig' ) . '</a></p><!-- /wp:paragraph --></div></div><!-- /wp:media-text --></div><!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/events-column-cards',
	array(
		'title'      => __( 'Events: Column Cards', 'twentig' ),
		'categories' => array( 'events' ),
		'content'    => '<!-- wp:group {"align":"full"} --><div class="wp-block-group alignfull"><!-- wp:heading {"textAlign":"center"} --><h2 class="has-text-align-center">' . esc_html_x( 'Our events', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:columns {"align":"wide","twColumnStyle":"card-shadow","twStretchedMedia":true} --><div class="wp-block-columns alignwide tw-cols-card tw-cols-card-shadow tw-stretched-media"><!-- wp:column --><div class="wp-block-column"><!-- wp:image --><figure class="wp-block-image"><img src="' . twentig_get_pattern_asset( 'landscape1.jpg' ) . '" alt=""/></figure><!-- /wp:image --><!-- wp:heading {"level":3,"fontSize":"large","className":"tw-mb-2"} --><h3 class="has-large-font-size tw-mb-2">' . esc_html_x( 'First event', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph {"fontSize":"small"} --><p class="has-small-font-size"><strong>' . esc_html_x( 'Friday, September 18', 'Block pattern content', 'twentig' ) . '</strong></p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Lorem ipsum dolor sit amet, commodo erat adipiscing elit. Sed do eiusmod ut tempor incididunt ut labore et dolore.</p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:image --><figure class="wp-block-image"><img src="' . twentig_get_pattern_asset( 'landscape2.jpg' ) . '" alt=""/></figure><!-- /wp:image --><!-- wp:heading {"level":3,"fontSize":"large","className":"tw-mb-2"} --><h3 class="has-large-font-size tw-mb-2">' . esc_html_x( 'Second event', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph {"fontSize":"small"} --><p class="has-small-font-size"><strong>' . esc_html_x( 'Monday, October 24', 'Block pattern content', 'twentig' ) . '</strong></p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Integer enim risus, suscipit eu iaculis sed, ullamcorper at metus. Venenatis nec convallis magna congue velit.</p><!-- /wp:paragraph --></div><!-- /wp:column --></div><!-- /wp:columns --><!-- wp:columns {"align":"wide","twColumnStyle":"card-shadow","twStretchedMedia":true} --><div class="wp-block-columns alignwide tw-cols-card tw-cols-card-shadow tw-stretched-media"><!-- wp:column --><div class="wp-block-column"><!-- wp:image --><figure class="wp-block-image"><img src="' . twentig_get_pattern_asset( 'landscape3.jpg' ) . '" alt=""/></figure><!-- /wp:image --><!-- wp:heading {"level":3,"fontSize":"large","className":"tw-mb-2"} --><h3 class="has-large-font-size tw-mb-2">' . esc_html_x( 'Third event', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph {"fontSize":"small"} --><p class="has-small-font-size"><strong>' . esc_html_x( 'Saturday, December 12', 'Block pattern content', 'twentig' ) . '</strong></p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Aliquam tempus mi nulla porta luctus. Sed non neque at lectus bibendum blandit. Morbi fringilla sapien libero.</p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:image --><figure class="wp-block-image"><img src="' . twentig_get_pattern_asset( 'landscape4.jpg' ) . '" alt=""/></figure><!-- /wp:image --><!-- wp:heading {"level":3,"fontSize":"large","className":"tw-mb-2"} --><h3 class="has-large-font-size tw-mb-2">' . esc_html_x( 'Fourth event', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph {"fontSize":"small"} --><p class="has-small-font-size"><strong>' . esc_html_x( 'Tuesday, January 5', 'Block pattern content', 'twentig' ) . '</strong></p><!-- /wp:paragraph --><!-- wp:paragraph --><p>Duis enim elit, porttitor id feugiat at, blandit at erat. Proin varius libero sit amet tortor volutpat diam laoreet.</p><!-- /wp:paragraph --></div><!-- /wp:column --></div><!-- /wp:columns --></div><!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/schedule-table',
	array(
		'title'      => __( 'Schedule: Table', 'twentig' ),
		'categories' => array( 'events' ),
		'content'    => '<!-- wp:group {"align":"full"} --><div class="wp-block-group alignfull"><!-- wp:heading {"textAlign":"center"} --><h2 class="has-text-align-center">' . esc_html_x( 'Schedule', 'Block pattern content (noun)', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:table {"className":"tw-mt-8 is-style-tw-border-h tw-row-valign-top"} --><figure class="wp-block-table tw-mt-8 is-style-tw-border-h tw-row-valign-top"><table><tbody><tr><td>08:00</td><td><strong>Lorem ipsum dolor sit amet</strong></td></tr><tr><td>10:00</td><td><strong>Class aptent taciti sociosqu ad litora torquent ligula</strong></td></tr><tr><td>10:30</td><td><strong><strong>Integer enim risus suscipit</strong></strong></td></tr><tr><td>12:00</td><td><strong>Venenatis nec convallis magna</strong></td></tr><tr><td>14:30</td><td><strong>Proin varius libero sit amet tortor volutpat</strong></td></tr><tr><td>16:00</td><td><strong>Commodo erat adipiscing elit</strong></td></tr></tbody></table></figure><!-- /wp:table --></div><!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/schedule-list',
	array(
		'title'      => __( 'Schedule: List', 'twentig' ),
		'categories' => array( 'events' ),
		'content'    => '<!-- wp:group {"align":"full"} --><div class="wp-block-group alignfull"><!-- wp:heading {"textAlign":"center"} --><h2 class="has-text-align-center">' . esc_html_x( 'Schedule', 'Block pattern content (noun)', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:list {"className":"tw-mt-6 tw-list-spacing-medium is-style-tw-border-inner"} --><ul class="tw-mt-6 is-style-tw-border-inner tw-list-spacing-medium"><!-- wp:list-item --><li><strong>Lorem ipsum dolor sit amet</strong><br>08:00 - 10:00</li><!-- /wp:list-item --> <!-- wp:list-item --> <li><strong>Class aptent taciti sociosqu ad litora torquent per conubia nostra</strong><br>10:00 - 10:30</li><!-- /wp:list-item --><!-- wp:list-item --><li><strong>Integer enim risus suscipit</strong><br>10:30 - 12:00</li><!-- /wp:list-item --><!-- wp:list-item --><li><strong><strong>Proin varius libero sit amet tortor volutpat</strong></strong><br>12:00 - 14:00</li><!-- /wp:list-item --><!-- wp:list-item --><li><strong><strong>Venenatis nec convallis magna</strong></strong><br>14:00 - 16:00</li><!-- /wp:list-item --><!-- wp:list-item --> <li><strong>Commodo erat adipiscing elit fringilla ac purus</strong><br>16:00 - 18:00</li><!-- /wp:list-item --></ul><!-- /wp:list --></div><!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/schedule-list-with-description',
	array(
		'title'      => __( 'Schedule: List with Description', 'twentig' ),
		'categories' => array( 'events' ),
		'content'    => '<!-- wp:group {"align":"full"} --><div class="wp-block-group alignfull"><!-- wp:heading --><h2>' . esc_html_x( 'Schedule', 'Block pattern content (noun)', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:columns {"twStack":"sm"} --><div class="wp-block-columns tw-cols-stack-sm"><!-- wp:column {"width":"33.33%","className":"tw-mb-2"} --><div class="wp-block-column tw-mb-2" style="flex-basis:33.33%"><!-- wp:paragraph --><p><strong>09:00 – 10:00</strong></p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column {"width":"66.66%"} --><div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:heading {"level":3,"fontSize":"medium"} --><h3 class="has-medium-font-size">' . esc_html_x( 'First item', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Lorem ipsum dolor sit amet, commodo erat adipiscing elit. Sed do eiusmod ut tempor incididunt ut labore et dolore.</p><!-- /wp:paragraph --></div><!-- /wp:column --></div><!-- /wp:columns --><!-- wp:columns {"twStack":"sm"} --><div class="wp-block-columns tw-cols-stack-sm"><!-- wp:column {"width":"33.33%","className":"tw-mb-2"} --><div class="wp-block-column tw-mb-2" style="flex-basis:33.33%"><!-- wp:paragraph --><p><strong>10:00 – 11:00</strong></p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column {"width":"66.66%"} --><div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:heading {"level":3,"fontSize":"medium"} --><h3 class="has-medium-font-size">' . esc_html_x( 'Second item', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Integer enim risus, suscipit eu iaculis sed, ullamcorper at metus. Venenatis nec convallis magna, eu congue velit.</p><!-- /wp:paragraph --></div><!-- /wp:column --></div><!-- /wp:columns --><!-- wp:columns {"twStack":"sm"} --><div class="wp-block-columns tw-cols-stack-sm"><!-- wp:column {"width":"33.33%","className":"tw-mb-2"} --><div class="wp-block-column tw-mb-2" style="flex-basis:33.33%"><!-- wp:paragraph --><p><strong>11:00 – 12:00</strong></p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column {"width":"66.66%"} --><div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:heading {"level":3,"fontSize":"medium"} --><h3 class="has-medium-font-size">' . esc_html_x( 'Third item', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Aliquam tempus mi nulla porta luctus. Sed non neque at lectus bibendum blandit. Morbi fringilla sapien libero.</p><!-- /wp:paragraph --></div><!-- /wp:column --></div><!-- /wp:columns --><!-- wp:columns {"twStack":"sm"} --><div class="wp-block-columns tw-cols-stack-sm"><!-- wp:column {"width":"33.33%","className":"tw-mb-2"} --><div class="wp-block-column tw-mb-2" style="flex-basis:33.33%"><!-- wp:paragraph --><p><strong>14:00 – 16:00</strong></p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column {"width":"66.66%"} --><div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:heading {"level":3,"fontSize":"medium"} --><h3 class="has-medium-font-size">' . esc_html_x( 'Fourth item', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Aliquam tempus mi nulla porta luctus. Sed non neque at lectus bibendum blandit. Morbi fringilla sapien libero.</p><!-- /wp:paragraph --></div><!-- /wp:column --></div><!-- /wp:columns --><!-- wp:columns {"twStack":"sm"} --><div class="wp-block-columns tw-cols-stack-sm"><!-- wp:column {"width":"33.33%","className":"tw-mb-2"} --><div class="wp-block-column tw-mb-2" style="flex-basis:33.33%"><!-- wp:paragraph --><p><strong>16:00 – 17:00</strong></p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column {"width":"66.66%"} --><div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:heading {"level":3,"fontSize":"medium"} --><h3 class="has-medium-font-size">' . esc_html_x( 'Fifth item', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Aliquam tempus mi nulla porta luctus. Sed non neque at lectus bibendum blandit. Morbi fringilla sapien libero.</p><!-- /wp:paragraph --></div><!-- /wp:column --></div><!-- /wp:columns --></div><!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/schedule-weekly',
	array(
		'title'      => __( 'Schedule: Weekly', 'twentig' ),
		'categories' => array( 'events' ),
		'content'    => '<!-- wp:group {"align":"full"} --><div class="wp-block-group alignfull"><!-- wp:heading {"textAlign":"center"} --><h2 class="has-text-align-center">' . esc_html_x( 'Schedule', 'Block pattern content (noun)', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:columns {"align":"wide","twColumnStyle":"card-shadow"} --><div class="wp-block-columns alignwide tw-cols-card tw-cols-card-shadow"><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3,"className":"tw-heading-border-bottom","fontSize":"medium"} --><h3 class="tw-heading-border-bottom has-medium-font-size">' . esc_html_x( 'Monday', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:list {"className":"is-style-tw-no-bullet tw-list-spacing-medium"} --><ul class="is-style-tw-no-bullet tw-list-spacing-medium"><li><strong>Lorem Ipsum</strong><br>08:00</li><li><strong>Aliquam</strong><br>09:00</li><li><strong>Integer Enim</strong><br>10:00</li><li><strong>Sed Neque</strong><br>18:00</li><li><strong>Morbi</strong><br>19:00</li><li><strong>Proin Varius</strong><br>20:00</li></ul><!-- /wp:list --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3,"className":"tw-heading-border-bottom","fontSize":"medium"} --><h3 class="tw-heading-border-bottom has-medium-font-size">' . esc_html_x( 'Tuesday', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:list {"className":"is-style-tw-no-bullet tw-list-spacing-medium"} --><ul class="is-style-tw-no-bullet tw-list-spacing-medium"><li><strong>Libero</strong><br>08:00</li><li><strong>Fusce Magna</strong><br>09:00</li><li><strong>Aliquam</strong><br>10:00</li><li><strong>Mauris</strong><br>18:00</li><li><strong>Venenatis</strong><br>19:00</li><li><strong>Amet Velit</strong><br>20:00</li></ul><!-- /wp:list --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3,"className":"tw-heading-border-bottom","fontSize":"medium"} --><h3 class="tw-heading-border-bottom has-medium-font-size">' . esc_html_x( 'Wednesday', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:list {"className":"is-style-tw-no-bullet tw-list-spacing-medium"} --><ul class="is-style-tw-no-bullet tw-list-spacing-medium"><li><strong>Porta luctus</strong><br>08:00</li><li><strong>Amet Velit</strong><br>09:00</li><li><strong>Libero</strong><br>10:00</li><li><strong>Morbi</strong><br>18:00</li><li><strong>Tempus</strong><br>19:00</li><li><strong>Aliquam</strong><br>20:00</li></ul><!-- /wp:list --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3,"className":"tw-heading-border-bottom","fontSize":"medium"} --><h3 class="tw-heading-border-bottom has-medium-font-size">' . esc_html_x( 'Thursday', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:list {"className":"is-style-tw-no-bullet tw-list-spacing-medium"} --><ul class="is-style-tw-no-bullet tw-list-spacing-medium"><li><strong>Sed Neque</strong><br>08:00</li><li><strong>Enim Elit</strong><br>09:00</li><li><strong>Aliquam</strong><br>10:00</li><li><strong>Tellus</strong><br>18:00</li><li><strong>Venenatis</strong><br>19:00</li><li><strong>Sapien</strong><br>20:00</li></ul><!-- /wp:list --></div><!-- /wp:column --></div><!-- /wp:columns --><!-- wp:columns {"align":"wide","twColumnStyle":"card-shadow"} --><div class="wp-block-columns alignwide tw-cols-card tw-cols-card-shadow"><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3,"className":"tw-heading-border-bottom","fontSize":"medium"} --><h3 class="tw-heading-border-bottom has-medium-font-size">' . esc_html_x( 'Friday', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:list {"className":"is-style-tw-no-bullet tw-list-spacing-medium"} --><ul class="is-style-tw-no-bullet tw-list-spacing-medium"><li><strong>Enim Elit</strong><br>08:00</li><li><strong>Sapien</strong><br>09:00</li><li><strong>Libero</strong><br>10:00</li><li><strong>Tempus</strong><br>18:00</li><li><strong>Proin Varius</strong><br>19:00</li><li><strong>Morbi</strong><br>20:00</li></ul><!-- /wp:list --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3,"className":"tw-heading-border-bottom","fontSize":"medium"} --><h3 class="tw-heading-border-bottom has-medium-font-size">' . esc_html_x( 'Saturday', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:list {"className":"is-style-tw-no-bullet tw-list-spacing-medium"} --><ul class="is-style-tw-no-bullet tw-list-spacing-medium"><li><strong>Commodo</strong><br>08:00</li><li><strong>Sed Neque</strong><br>09:00</li><li><strong>Hendrerit</strong><br>10:00</li><li><strong>Aliquam</strong><br>18:00</li><li><strong>Sapien</strong><br>19:00</li><li><strong>Amet Velit</strong><br>20:00</li></ul><!-- /wp:list --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3,"className":"tw-heading-border-bottom","fontSize":"medium"} --><h3 class="tw-heading-border-bottom has-medium-font-size">' . esc_html_x( 'Sunday', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:list {"className":"is-style-tw-no-bullet tw-list-spacing-medium"} --><ul class="is-style-tw-no-bullet tw-list-spacing-medium"><li><strong>Libero</strong><br>08:00</li><li><strong>Mauris</strong><br>09:00</li><li><strong>Enim Elit</strong><br>10:00</li><li><strong>Morbi</strong><br>11:00</li></ul><!-- /wp:list --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"></div><!-- /wp:column --></div><!-- /wp:columns --></div><!-- /wp:group -->',
	)
);
