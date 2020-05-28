<?php if( isset( $_REQUEST['id'] ) && $_REQUEST['id'] != '' ) { ?>

<?php

$course_id = $_REQUEST['id'];
$course = new Course( $course_id );

echo '<pre>';
print_r( $course );
echo '</pre>';

foreach( $course->questions as $question ) {
	?>
	<h3><?php echo $question->title; ?> - liked by <?php echo $question->like_count ?> persons</h3>
	<h4>Posted by <?php echo $question->author->name; ?></h4>
	<?php
}
?>

<?php }else{ ?>
<ul>
	<li><a href="<?php echo base_url(); ?>/index.php?page=course&id=12">Data Structure</a></li>
	<li><a href="<?php echo base_url(); ?>/index.php?page=course&id=13">Algorithm</a></li>
</ul>
<?php } ?>