<?php

/**
 * @file
 * Template.
 */
?>

<div class="visit-counter">
  <h2>Total Visits on this page: </h2>
  <?php if ($count = variable_get('visit_counter_' . $nid)) { ?>
  <span><?php echo $count; ?></span>
  <?php } ?>
</div>
