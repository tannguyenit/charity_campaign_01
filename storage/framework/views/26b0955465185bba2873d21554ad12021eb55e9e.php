<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo e(trans('message.page_titles.welcome')); ?>">
    <title><?php echo e(trans('message.project')); ?></title>
    <link rel='dns-prefetch' href='//fonts.googleapis.com' />
    <link rel="shortcut icon" href="<?php echo e(asset('/img/001-world.png')); ?>" type="image/x-icon" />
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <?php $__env->startSection('css'); ?>
        <?php echo e(Html::style('http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,italic,600,600italic,700,700italic,800,800italic&#038;subset=greek-ext,greek,cyrillic-ext,latin-ext,latin,vietnamese,cyrillic')); ?>

        <?php echo e(Html::style('http://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700&#038;subset=greek-ext,greek,cyrillic-ext,latin-ext,latin,vietnamese,cyrillic')); ?>

        <?php echo e(Html::style('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css')); ?>

        <?php echo e(Html::style('https://fonts.googleapis.com/icon?family=Material+Icons')); ?>

        <?php echo e(Html::style('bower_components/bootstrap/dist/css/bootstrap.min.css')); ?>

        <?php echo e(Html::style('bower_components/bootstrap-material-design/dist/css/material.min.css')); ?>

        <?php echo e(Html::style('css/style.css')); ?>

        <?php echo e(Html::style('css/autoptimize.css')); ?>

        <?php echo e(Html::style('css/master.css')); ?>

    <?php echo $__env->yieldSection(); ?>

    <?php $__env->startSection('javascript'); ?>
        <?php echo e(Html::script('bower_components/jquery/dist/jquery.min.js')); ?>

        <?php echo e(Html::script('bower_components/bootstrap/dist/js/bootstrap.min.js')); ?>

        <?php echo e(Html::script('bower_components/jquery-migrate/jquery-migrate.min.js')); ?>

        <?php echo e(Html::script('bower_components/typeahead.js/dist/typeahead.bundle.min.js')); ?>

        <?php echo e(Html::script('js/version1/styling.min.js')); ?>

        <?php echo e(Html::script('js/version1/share_social.js')); ?>

    <?php echo $__env->yieldSection(); ?>

</head>

<body class="archive post-type-archive post-type-archive-dn_campaign group-blog tp_event-template-default single single-tp_event home page-template
page-template-page-templates page-template-homepage page-template-page-templateshomepage-php page page-id-4967
siteorigin-panels siteorigin-panels-home group-blog loading thim_header_custom_style thim_header_style2 thim_fixedmenu ">

<?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts.alert', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('layouts.message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php echo $__env->yieldContent('content'); ?>

<?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->startSection('js'); ?>
    <?php echo e(Html::script('js/version1/main.min.js')); ?>

    <?php echo e(Html::script('js/version1/custom-script.js')); ?>

    <?php echo e(Html::script('js/version1/custom-scroll.min.js')); ?>

    <?php echo e(Html::script('js/multiple_language.js')); ?>

    <?php echo e(Html::script('js/version1/search.js')); ?>

    <?php echo e(Html::script('js/custom.js')); ?>

    <?php echo e(Html::script('js/version1/equal-height.js')); ?>

    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        jQuery(document).ready(function($) {
            var search = new Search();
            search.init();
        });
    </script>
<?php echo $__env->yieldSection(); ?>

</body>

</html>
