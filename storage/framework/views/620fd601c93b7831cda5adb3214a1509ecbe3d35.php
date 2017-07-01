<?php if($alert = Session::get('alert-success')): ?>
    <div id="note" class="alert alert-success">
        <?php echo e($alert); ?>

    </div>
<?php endif; ?>
<?php if($alert = Session::get('alert-info')): ?>
    <div id="note" class="alert alert-info">
        <?php echo e($alert); ?>

    </div>
<?php endif; ?>
<?php if($alert = Session::get('alert-warning')): ?>
    <div id="note" class="alert alert-warning">
        <?php echo e($alert); ?>

    </div>
<?php endif; ?>
<?php if($alert = Session::get('alert-danger')): ?>
    <div id="note" class="alert alert-danger">
        <?php echo e($alert); ?>

    </div>
<?php endif; ?>
