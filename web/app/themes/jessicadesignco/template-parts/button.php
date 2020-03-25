<?php
$button_link = get_field('button_link', 'option');
$button_text = get_field('button_text', 'option');

$cta_link = get_field('button_link');
$cta_text = get_field('button_text');
?>

<?php if( $cta_link ) { $button_link = $cta_link; } ?>
<?php if( $cta_text ) { $button_text = $cta_text; } ?>

<a href="<?php echo $button_link ?>" class="btn" target="blank"><?php echo $button_text ?></a>