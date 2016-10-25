/**
 * This file should contain frontend styles that 
 * will be applied to individual module instances.
 *
 */

.fl-node-<?php echo $id; ?> {
    font-size: <?php echo $settings->text_field; ?>px;
}


/* Background Property */
.fl-node-<?php echo $id; ?> .bb_boot_card_container { 
		background: #<?php echo $settings->bg_color; ?>;
}


/* BCard Heading Typography */
.fl-node-<?php echo $id; ?> <?php /* echo $settings->tag; */?>.bb_boot_card_title,
.fl-node-<?php echo $id; ?> <?php /* echo $settings->tag; */?>.bb_boot_card_title * {
	
	<?php if(!empty($settings->color)) : ?>
		color: #<?php echo $settings->color; ?>;
	<?php endif; ?>
	
	<?php if( !empty($settings->font) && $settings->font['family'] != 'Default' ) : ?>
		<?php ( $settings->font ); ?>
	<?php endif; ?>

	<?php if( $settings->title_font_size['desktop'] != '' ) : ?>
		font-size: <?php echo $settings->title_font_size['desktop']; ?>px;
	<?php elseif( isset( $settings->font_size ) && isset( $settings->custom_font_size ) && $settings->font_size == 'custom' && $settings->custom_font_size != '' ) : ?>
		font-size: <?php echo $settings->custom_font_size; ?>px;
	<?php endif; ?>
}

/* BCard's Link color */
.fl-node-<?php echo $id; ?> .bb_boot_card_link {
	<?php if(!empty($settings->link_color)) : ?>
		color: #<?php echo $settings->link_color; ?>;
	<?php endif; ?>
}

/* BCard's Description Typography */
.fl-node-<?php echo $id; ?> .bb_boot_card_text,
.fl-node-<?php echo $id; ?> .bb_boot_card_text * {
	
	<?php if(!empty($settings->desc_color)) : ?>
		color: <?php echo $settings->desc_color; ?>;
	<?php endif; ?>

	<?php if( !empty($settings->desc_font_family) && $settings->desc_font_family['family'] != 'Default' ) : ?>
		<?php ( $settings->desc_font_family ); ?>
	<?php endif; ?>

	<?php if( $settings->desc_font_size['desktop'] != '' ) : ?>
		font-size: <?php echo $settings->desc_font_size['desktop']; ?>px;
	<?php endif; ?>

}

