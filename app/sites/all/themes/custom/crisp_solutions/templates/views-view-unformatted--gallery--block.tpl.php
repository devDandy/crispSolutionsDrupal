<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>


<div class="two-column-gallery">
	
	<?php $i = 0; ?>

	<?php foreach ($rows as $id => $row): ?>
	
		<?php if($i == 0 || $i % 2 == 0): ?>
			<div class="photo-row">
			    <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .' two-column-gallery-img';  } ?>>
			    <?php print $row; ?>
			    </div>
		<?php else: ?>
			    <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .' two-column-gallery-img';  } ?>>
			    <?php print $row; ?>
			    </div>
			</div>			
		<?php endif; ?>

		<?php $i += 1 ?>
	<?php endforeach; ?>

	<?php if($i % 2 == 0): ?>
		</div>
	<?php endif; ?>
</div>

<!-- 	<div class="photo-row">

		<img src="http://placehold.it/100x100" />
		<img src="http://placehold.it/100x100" />

	</div>
	<div class="photo-row">

		<img src="http://placehold.it/100x100" />
		<img src="http://placehold.it/100x100" />

	</div>
	<div class="photo-row">

		<img src="http://placehold.it/100x100" />

	</div> -->
<!-- <?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?>
  <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
    <?php print $row; ?>
  </div>
<?php endforeach; ?> -->