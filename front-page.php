<?php
get_header();
$title = get_field('tile');
$description = get_field('description');
$image = get_field('pageimage');
?>
<?php if($title) : ?>
    <h1 class="pageTitle"><?php echo $title; ?></h1>
<?php else : ?>
    <h1 class="pageTitle">Default Title</h1>
<?php
endif;
if ($description): ?>
    <p><?php echo str_replace("\n\r\n", "</p><p>",$description); ?></p> 
<?php
endif; 
// \n mot <br />

if ($image): ?>
    <img class="pageimage" src="<?php echo $image['sizes']['medium'] ?>" alt="<?php echo $image['alt'] ?>">
<?php
endif; 
get_footer();
