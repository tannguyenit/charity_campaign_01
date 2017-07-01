<?php $__env->startSection('content'); ?>
    <div id="page-content">
        <div class="row">
            <div class="col-md-12 center-panel text-center">
                <br>
                <h4><?php echo e(trans('message.site')); ?></h4>
                <br>
                <br>
                <br>
                <p><img src="<?php echo e(config('path.not_found')); ?>" alt=""></p>
                <h2><i class="fa fa-exclamation-triangle"></i>
                    <?php echo e(trans('message.not_found')); ?> <small><?php echo e(trans('message.404')); ?></small>
                </h2>
                <br>
                <br>
                <br>
                <p><a href="<?php echo e(action('CampaignController@index')); ?>"><?php echo e(trans('message.click_here')); ?></a> <?php echo e(trans('message.visit_home_page')); ?></p>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>