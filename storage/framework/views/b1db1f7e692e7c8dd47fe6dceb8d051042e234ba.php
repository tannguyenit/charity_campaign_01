<?php if(session('message')): ?>
    <div class="alert alert-info message-infor alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <i class="icon fa fa-info"></i> <?php echo session('message'); ?>

    </div>
<?php endif; ?>
<?php if(isset($message)): ?>
    <div class="alert alert-info message-infor alert-dismissable">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <i class="icon fa fa-info"></i> <?php echo session('message'); ?>

    </div>
<?php endif; ?>
