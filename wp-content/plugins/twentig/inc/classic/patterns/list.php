<?php
/**
 * List block patterns.
 *
 * @package twentig
 */

twentig_register_block_pattern(
	'twentig/list-and-text-aligned',
	array(
		'title'      => __( 'List and Text Aligned', 'twentig' ),
		'categories' => array( 'list' ),
		'content'    => '<!-- wp:group {"align":"full"} --><div class="wp-block-group alignfull"><!-- wp:heading {"textAlign":"center"} --><h2 class="has-text-align-center">' . esc_html_x( 'Write a heading that captivates your audience', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Lorem ipsum dolor sit amet, commodo erat adipiscing elit. Sed do eiusmod ut tempor incididunt ut labore et dolore. Integer enim risus suscipit eu iaculis sed, ullamcorper at metus. Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p><!-- /wp:paragraph --><!-- wp:list --><ul><!-- wp:list-item --><li>Integer enim risus suscipit eu iaculis</li><!-- /wp:list-item --><!-- wp:list-item --><li>Quisque lorem sapien, egestas sed venenatis</li><!-- /wp:list-item --><!-- wp:list-item --><li>Aliquam tempus mi nulla porta luctus nec congue velit</li><!-- /wp:list-item --><!-- wp:list-item --><li>Sed non neque at lectus bibendum blandit</li><!-- /wp:list-item --></ul><!-- /wp:list --></div><!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/list-and-heading-on-left',
	array(
		'title'      => __( 'List and Heading on Left', 'twentig' ),
		'categories' => array( 'list' ),
		'content'    => '<!-- wp:group {"align":"full"} --><div class="wp-block-group alignfull"><!-- wp:columns {"align":"wide","twGutter":"large","twStack":"md"} --><div class="wp-block-columns alignwide tw-gutter-large tw-cols-stack-md"><!-- wp:column --><div class="wp-block-column"><!-- wp:heading --><h2>' . esc_html_x( 'Write a heading that captivates your audience', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:list {"ordered":true,"className":"is-style-tw-border-inner tw-list-spacing-medium"} --><ol class="is-style-tw-border-inner tw-list-spacing-medium"><!-- wp:list-item --><li>Lorem ipsum dolor sit amet, commodo erat adipiscing</li><!-- /wp:list-item --><!-- wp:list-item --><li>Integer enim risus suscipit eu iaculis sed ullamcorper</li><!-- /wp:list-item --><!-- wp:list-item --><li>Aliquam tempus mi nulla porta luctus</li><!-- /wp:list-item --><!-- wp:list-item --><li>Duis enim elit, porttitor id feugiat at blandit at erat</li><!-- /wp:list-item --><!-- wp:list-item --><li>Fusce sed magna eu ligula commodo hendrerit ac purus</li><!-- /wp:list-item --></ol><!-- /wp:list --></div><!-- /wp:column --></div><!-- /wp:columns --></div><!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/emphasized-list-and-heading-on-left',
	array(
		'title'      => __( 'Emphasized List and Heading on Left', 'twentig' ),
		'categories' => array( 'list' ),
		'content'    => '<!-- wp:group {"align":"full"} --><div class="wp-block-group alignfull"><!-- wp:columns {"verticalAlignment":"center","align":"wide","twGutter":"large","twStack":"md"} --><div class="wp-block-columns alignwide are-vertically-aligned-center tw-gutter-large tw-cols-stack-md"><!-- wp:column {"verticalAlignment":"center"} --><div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading --><h2>' . esc_html_x( 'Write a heading', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Lorem ipsum dolor sit amet, commodo erat adipiscing elit. Sed do eiusmod ut tempor incididunt ut labore et dolore. Integer enim risus suscipit eu iaculis sed, ullamcorper at metus.</p><!-- /wp:paragraph --></div><!-- /wp:column --><!-- wp:column {"verticalAlignment":"center"} --><div class="wp-block-column is-vertically-aligned-center"><!-- wp:group {"backgroundColor":"white","twDecoration":"shadow"} --><div class="wp-block-group has-white-background-color has-background tw-shadow"><!-- wp:list {"className":"is-style-tw-checkmark tw-list-spacing-loose"} --><ul class="is-style-tw-checkmark tw-list-spacing-loose"><!-- wp:list-item --><li>Integer enim risus suscipit eu iaculis</li><!-- /wp:list-item --><!-- wp:list-item --><li>Quisque lorem sapien egestas sed venenatis</li><!-- /wp:list-item --><!-- wp:list-item --><li>Aliquam tempus mi nulla porta luctus</li><!-- /wp:list-item --><!-- wp:list-item --><li>Sed non neque at lectus bibendum blandit</li><!-- /wp:list-item --><!-- wp:list-item --><li>Proin varius libero sit amet tortor volutpat diam</li><!-- /wp:list-item --></ul><!-- /wp:list --></div><!-- /wp:group --></div><!-- /wp:column --></div><!-- /wp:columns --></div><!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/list-and-image-on-left',
	array(
		'title'      => __( 'List and Image on Left', 'twentig' ),
		'categories' => array( 'list' ),
		'content'    => '<!-- wp:group {"align":"full"} --><div class="wp-block-group alignfull"><!-- wp:media-text {"mediaType":"image","twStackedMd":true} --><div class="wp-block-media-text alignwide is-stacked-on-mobile tw-stack-md"><figure class="wp-block-media-text__media"><img src="' . twentig_get_pattern_asset( 'square1.jpg' ) . '" alt=""/></figure><div class="wp-block-media-text__content"><!-- wp:heading --><h2>' . esc_html_x( 'Write a heading', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:paragraph --><p>Lorem ipsum dolor sit amet, commodo erat adipiscing elit. Sed do eiusmod ut tempor incididunt ut labore et dolore.</p><!-- /wp:paragraph --><!-- wp:list --><ul><!-- wp:list-item --><li>Integer enim risus suscipit eu iaculis</li><!-- /wp:list-item --><!-- wp:list-item --><li>Quisque lorem sapien, egestas sed venenatis</li><!-- /wp:list-item --><!-- wp:list-item --><li>Aliquam tempus mi nulla porta luctus</li><!-- /wp:list-item --><!-- wp:list-item --><li>Sed non neque at lectus bibendum blandit</li><!-- /wp:list-item --></ul><!-- /wp:list --></div></div><!-- /wp:media-text --></div><!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/bold-list-and-image-on-left',
	array(
		'title'      => __( 'Bold List and Image on Left', 'twentig' ),
		'categories' => array( 'list' ),
		'content'    => '<!-- wp:group {"align":"full"} --><div class="wp-block-group alignfull"><!-- wp:heading {"textAlign":"center"} --><h2 class="has-text-align-center">' . esc_html_x( 'Write a heading that captivates your audience', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:media-text {"mediaType":"image","twStackedMd":true} --><div class="wp-block-media-text alignwide is-stacked-on-mobile tw-stack-md"><figure class="wp-block-media-text__media"><img src="' . twentig_get_pattern_asset( 'landscape1.jpg' ) . '" alt=""/></figure><div class="wp-block-media-text__content"><!-- wp:list {"className":"is-style-tw-checkmark tw-list-spacing-loose"} --><ul class="is-style-tw-checkmark tw-list-spacing-loose"><!-- wp:list-item --><li><strong>Lorem ipsum dolor sit amet</strong><br>Sed do eiusmod ut tempor incididunt ut labore et dolore.</li><!-- /wp:list-item --><!-- wp:list-item --><li><strong>Integer enim risus</strong><br>Venenatis nec convallis magna eu congue velit. Fusce sed magna eu ligula commodo hendrerit fringilla.</li><!-- /wp:list-item --><!-- wp:list-item --><li><strong>Aliquam tempus mi nulla porta luctus</strong><br>Duis enim elit porttitor id feugiat at blandit at erat.</li><!-- /wp:list-item --></ul><!-- /wp:list --></div></div><!-- /wp:media-text --></div><!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/alternating-list-and-image',
	array(
		'title'      => __( 'Alternating List and Image', 'twentig' ),
		'categories' => array( 'list' ),
		'content'    => '<!-- wp:group {"align":"full"} --><div class="wp-block-group alignfull"><!-- wp:heading {"textAlign":"center"} --><h2 class="has-text-align-center">' . esc_html_x( 'Write a heading that captivates your audience', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:media-text {"mediaType":"image","mediaWidth":49,"imageFill":false,"twStackedMd":true} --><div class="wp-block-media-text alignwide is-stacked-on-mobile tw-stack-md" style="grid-template-columns:49% auto"><figure class="wp-block-media-text__media"><img src="' . twentig_get_pattern_asset( 'landscape1.jpg' ) . '" alt=""/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"level":3} --><h3>' . esc_html_x( 'First item', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Lorem ipsum dolor sit amet, commodo erat adipiscing elit. Sed do eiusmod ut tempor incididunt ut labore et dolore.</p><!-- /wp:paragraph --><!-- wp:list --><ul><!-- wp:list-item --><li>Proin varius libero sit amet tortor volutpat diam</li><!-- /wp:list-item --> <!-- wp:list-item --> <li>Venenatis nec convallis magna eu congue velit</li><!-- /wp:list-item --> <!-- wp:list-item --><li>Duis enim elit porttitor id feugiat blandit</li><!-- /wp:list-item --></ul><!-- /wp:list --></div></div><!-- /wp:media-text --><!-- wp:media-text {"mediaPosition":"right","mediaType":"image","mediaWidth":49,"imageFill":false,"twStackedMd":true} --><div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile tw-stack-md" style="grid-template-columns:auto 49%"><figure class="wp-block-media-text__media"><img src="' . twentig_get_pattern_asset( 'landscape2.jpg' ) . '" alt=""/></figure><div class="wp-block-media-text__content"><!-- wp:heading {"level":3} --><h3>' . esc_html_x( 'Second item', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Integer enim risus suscipit eu iaculis sed ullamcorper at metus. Venenatis nec convallis magna eu congue velit.</p><!-- /wp:paragraph --><!-- wp:list --> <ul><!-- wp:list-item --> <li>Aliquam tempus mi eu nulla porta luctus</li><!-- /wp:list-item --><!-- wp:list-item --> <li>Fusce sed magna eu ligula commodo</li> <!-- /wp:list-item --><!-- wp:list-item --> <li>Mauris dui tellus mollis quis varius amet ultrices</li><!-- /wp:list-item --></ul><!-- /wp:list --></div></div><!-- /wp:media-text --></div><!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/lists-2-columns',
	array(
		'title'      => __( 'Lists: 2 Columns', 'twentig' ),
		'categories' => array( 'list' ),
		'content'    => '<!-- wp:group {"align":"full"} --><div class="wp-block-group alignfull"><!-- wp:heading {"textAlign":"center"} --><h2 class="has-text-align-center">' . esc_html_x( 'Write a heading that captivates your audience', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:columns {"twGutter":"large"} --><div class="wp-block-columns tw-gutter-large"><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3,"fontSize":"large"} --><h3 class="has-large-font-size">' . esc_html_x( 'First item', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Lorem ipsum dolor sit amet, commodo erat adipiscing elit ut tempor.</p><!-- /wp:paragraph --><!-- wp:list {"className":"is-style-tw-dash"} --><ul class="is-style-tw-dash"><!-- wp:list-item --><li>Venenatis convallis</li> <!-- /wp:list-item --><!-- wp:list-item --><li>Sed eiusmod</li> <!-- /wp:list-item --><!-- wp:list-item --><li>Integer enim</li> <!-- /wp:list-item --><!-- wp:list-item --><li>Aliquam tempus</li> <!-- /wp:list-item --><!-- wp:list-item --><li>Sed non neque</li> <!-- /wp:list-item --></ul> <!-- /wp:list --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3,"fontSize":"large"} --><h3 class="has-large-font-size">' . esc_html_x( 'Second item', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Integer enim risus suscipit eu iaculis sed, ullamcorper at metus.</p><!-- /wp:paragraph --><!-- wp:list {"className":"is-style-tw-dash"} --><ul class="is-style-tw-dash"><!-- wp:list-item --><li>Morbi fringilla</li> <!-- /wp:list-item --><!-- wp:list-item --><li>Duis enim elit</li> <!-- /wp:list-item --><!-- wp:list-item --><li>Proin varius libero</li> <!-- /wp:list-item --><!-- wp:list-item --><li>Fusce magna</li> <!-- /wp:list-item --></ul> <!-- /wp:list --></div><!-- /wp:column --></div><!-- /wp:columns --></div><!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/lists-3-columns',
	array(
		'title'      => __( 'Lists: 3 Columns', 'twentig' ),
		'categories' => array( 'list' ),
		'content'    => '<!-- wp:group {"align":"full"} --><div class="wp-block-group alignfull"><!-- wp:heading {"textAlign":"center"} --><h2 class="has-text-align-center">' . esc_html_x( 'Write a heading that captivates your audience', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:columns {"align":"wide"} --><div class="wp-block-columns alignwide"><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3,"fontSize":"large"} --><h3 class="has-large-font-size">' . esc_html_x( 'First item', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Lorem ipsum dolor sit amet, commodo erat adipiscing elit tempor.</p><!-- /wp:paragraph --><!-- wp:list {"className":"is-style-tw-arrow"} --><ul class="is-style-tw-arrow"><!-- wp:list-item --><li>Venenatis convallis</li> <!-- /wp:list-item --><!-- wp:list-item --><li>Sed eiusmod</li> <!-- /wp:list-item --><!-- wp:list-item --><li>Integer enim</li> <!-- /wp:list-item --><!-- wp:list-item --><li>Aliquam tempus </li> <!-- /wp:list-item --></ul> <!-- /wp:list --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3,"fontSize":"large"} --><h3 class="has-large-font-size">' . esc_html_x( 'Second item', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Integer enim risus suscipit eu iaculis sed, ullamcorper at metus.</p><!-- /wp:paragraph --><!-- wp:list {"className":"is-style-tw-arrow"} --><ul class="is-style-tw-arrow"><!-- wp:list-item --><li>Sed non neque</li> <!-- /wp:list-item --><!-- wp:list-item --><li>Morbi fringilla</li> <!-- /wp:list-item --><!-- wp:list-item --><li>Duis enim elit</li> <!-- /wp:list-item --><!-- wp:list-item --><li>Proin varius libero</li> <!-- /wp:list-item --></ul> <!-- /wp:list --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3,"fontSize":"large"} --><h3 class="has-large-font-size">' . esc_html_x( 'Third item', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:paragraph --><p>Aliquam tempus mi nulla porta luctus. Sed non neque at lectus bibendum.</p><!-- /wp:paragraph --><!-- wp:list {"className":"is-style-tw-arrow"} --><ul class="is-style-tw-arrow"><!-- wp:list-item --><li>Fusce magna</li> <!-- /wp:list-item --><!-- wp:list-item --><li>Integer sagittis</li> <!-- /wp:list-item --><!-- wp:list-item --><li>Mauris dui tellus</li> <!-- /wp:list-item --><!-- wp:list-item --><li>Class aptent </li> <!-- /wp:list-item --></ul> <!-- /wp:list --></div><!-- /wp:column --></div><!-- /wp:columns --></div><!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/lists-3-columns-with-border',
	array(
		'title'      => __( 'Lists: 3 Columns with Border', 'twentig' ),
		'categories' => array( 'list' ),
		'content'    => '<!-- wp:group {"align":"full"} --><div class="wp-block-group alignfull"><!-- wp:heading {"textAlign":"center"} --><h2 class="has-text-align-center">' . esc_html_x( 'Write a heading that captivates your audience', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:columns {"align":"wide","twGutter":"large"} --><div class="wp-block-columns alignwide tw-gutter-large"><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3,"fontSize":"large"} --><h3 class="has-large-font-size">' . esc_html_x( 'First item', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:list {"className":"is-style-tw-border-inner"} --><ul class="is-style-tw-border-inner"><!-- wp:list-item --><li>Venenatis convallis</li> <!-- /wp:list-item --><!-- wp:list-item --><li>Sed eiusmod</li> <!-- /wp:list-item --><!-- wp:list-item --><li>Integer enim</li> <!-- /wp:list-item --><!-- wp:list-item --><li>Aliquam tempus</li><!-- /wp:list-item --></ul> <!-- /wp:list --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3,"fontSize":"large"} --><h3 class="has-large-font-size">' . esc_html_x( 'Second item', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:list {"className":"is-style-tw-border-inner"} --><ul class="is-style-tw-border-inner"><!-- wp:list-item --><li>Sed non neque</li> <!-- /wp:list-item --><!-- wp:list-item --><li>Morbi fringilla</li> <!-- /wp:list-item --><!-- wp:list-item --><li>Duis enim elit</li><!-- /wp:list-item --><!-- wp:list-item --><li>Proin varius libero</li><!-- /wp:list-item --></ul> <!-- /wp:list --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:heading {"level":3,"fontSize":"large"} --><h3 class="has-large-font-size">' . esc_html_x( 'Third item', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:list {"className":"is-style-tw-border-inner"} --><ul class="is-style-tw-border-inner"><!-- wp:list-item --><li>Fusce magna</li> <!-- /wp:list-item --><!-- wp:list-item --><li>Integer sagittis</li> <!-- /wp:list-item --><!-- wp:list-item --><li>Mauris dui tellus</li><!-- /wp:list-item --><!-- wp:list-item --><li>Class aptent</li> <!-- /wp:list-item --></ul><!-- /wp:list --></div><!-- /wp:column --></div><!-- /wp:columns --></div><!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/lists-4-columns-with-image',
	array(
		'title'      => __( 'Lists: 4 Columns with Image', 'twentig' ),
		'categories' => array( 'list' ),
		'content'    => '<!-- wp:group {"align":"full"} --><div class="wp-block-group alignfull"><!-- wp:heading {"textAlign":"center"} --><h2 class="has-text-align-center">' . esc_html_x( 'Write a heading', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:columns {"align":"wide"} --><div class="wp-block-columns alignwide"><!-- wp:column --><div class="wp-block-column"><!-- wp:image --><figure class="wp-block-image"><img src="' . twentig_get_pattern_asset( 'landscape1.jpg' ) . '" alt=""/></figure><!-- /wp:image --><!-- wp:heading {"level":3,"fontSize":"large"} --><h3 class="has-large-font-size">' . esc_html_x( 'First item', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:list --><ul><!-- wp:list-item --><li>Venenatis convallis</li> <!-- /wp:list-item --><!-- wp:list-item --><li>Sed eiusmod</li> <!-- /wp:list-item --><!-- wp:list-item --><li>Integer enim</li> <!-- /wp:list-item --><!-- wp:list-item --><li>Aliquam tempus </li> <!-- /wp:list-item --></ul> <!-- /wp:list --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:image --><figure class="wp-block-image"><img src="' . twentig_get_pattern_asset( 'landscape2.jpg' ) . '" alt=""/></figure><!-- /wp:image --><!-- wp:heading {"level":3,"fontSize":"large"} --><h3 class="has-large-font-size">' . esc_html_x( 'Second item', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:list --><ul><!-- wp:list-item --><li>Sed non neque</li> <!-- /wp:list-item --><!-- wp:list-item --><li>Morbi fringilla</li> <!-- /wp:list-item --><!-- wp:list-item --><li>Duis enim elit</li> <!-- /wp:list-item --><!-- wp:list-item --><li>Proin varius libero </li> <!-- /wp:list-item --></ul> <!-- /wp:list --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:image --><figure class="wp-block-image"><img src="' . twentig_get_pattern_asset( 'landscape3.jpg' ) . '" alt=""/></figure><!-- /wp:image --><!-- wp:heading {"level":3,"fontSize":"large"} --><h3 class="has-large-font-size">' . esc_html_x( 'Third item', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:list --><ul><!-- wp:list-item --><li>Fusce magna</li> <!-- /wp:list-item --><!-- wp:list-item --><li>Integer sagittis</li> <!-- /wp:list-item --><!-- wp:list-item --><li>Mauris dui tellus</li> <!-- /wp:list-item --><!-- wp:list-item --><li>Class aptent </li> <!-- /wp:list-item --></ul> <!-- /wp:list --></div><!-- /wp:column --><!-- wp:column --><div class="wp-block-column"><!-- wp:image --><figure class="wp-block-image"><img src="' . twentig_get_pattern_asset( 'landscape4.jpg' ) . '" alt=""/></figure><!-- /wp:image --><!-- wp:heading {"level":3,"fontSize":"large"} --><h3 class="has-large-font-size">' . esc_html_x( 'Fourth item', 'Block pattern content', 'twentig' ) . '</h3><!-- /wp:heading --><!-- wp:list --><ul><!-- wp:list-item --><li>Rhoncus justo </li> <!-- /wp:list-item --><!-- wp:list-item --><li>Amet velit</li> <!-- /wp:list-item --><!-- wp:list-item --><li>Erat vitae</li> <!-- /wp:list-item --><!-- wp:list-item --><li>Maecenas convallis </li> <!-- /wp:list-item --></ul> <!-- /wp:list --></div><!-- /wp:column --></div><!-- /wp:columns --></div><!-- /wp:group -->',
	)
);

twentig_register_block_pattern(
	'twentig/inline-list',
	array(
		'title'      => __( 'Inline List', 'twentig' ),
		'categories' => array( 'list', 'logos' ),
		'content'    => '<!-- wp:group {"align":"full"} --><div class="wp-block-group alignfull"><!-- wp:heading {"textAlign":"center"} --><h2 class="has-text-align-center">' . esc_html_x( 'Our clients', 'Block pattern content', 'twentig' ) . '</h2><!-- /wp:heading --><!-- wp:list {"className":"is-style-tw-inline has-text-align-center","fontSize":"large"} --><ul class="is-style-tw-inline has-text-align-center has-large-font-size"><!-- wp:list-item --><li>Airbnb</li><!-- /wp:list-item --><!-- wp:list-item --><li>Apple</li><!-- /wp:list-item --><!-- wp:list-item --><li>Dropbox</li><!-- /wp:list-item --><!-- wp:list-item --><li>Figma</li><!-- /wp:list-item --><!-- wp:list-item --><li>Github</li><!-- /wp:list-item --><!-- wp:list-item --><li>Google</li><!-- /wp:list-item --><!-- wp:list-item --><li>LinkedIn</li><!-- /wp:list-item --><!-- wp:list-item --><li>Microsoft</li><!-- /wp:list-item --><!-- wp:list-item --><li>Netflix</li><!-- /wp:list-item --><!-- wp:list-item --><li>Slack</li><!-- /wp:list-item --><!-- wp:list-item --><li>Spotify</li><!-- /wp:list-item --><!-- wp:list-item --><li>Twitter</li><!-- /wp:list-item --><!-- wp:list-item --><li>Uber</li><!-- /wp:list-item --><!-- wp:list-item --><li>Zoom</li><!-- /wp:list-item --></ul><!-- /wp:list --></div><!-- /wp:group -->',
	)
);
