<?php

/**
 * @file
 * Template for the Visit Counter Block.
 */
?>

<div class="visit-counter">
  <h2>Total Visits on this page: </h2>
  <?php if (isset($counter)): ?>
    <span><?php echo $counter; ?></span>
  <?php endif; ?>
</div>
