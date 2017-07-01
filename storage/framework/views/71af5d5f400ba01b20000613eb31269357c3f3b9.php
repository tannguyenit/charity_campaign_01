<?php $__env->startSection('css'); ?>
@parent
<?php echo e(Html::style('bower_components/bootstrap-star-rating/css/star-rating.css')); ?>

<?php echo e(Html::style('bower_components/bootstrap-star-rating/css/theme-krajee-fa.css')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
@parent
<?php echo e(Html::script('js/version1/tools.min.js')); ?>

<?php echo e(Html::script('js/version1/revolution.min.js')); ?>

<?php echo e(Html::script('js/version1/slider.js')); ?>

<?php echo e(Html::script('bower_components/bootstrap-star-rating/js/star-rating.js')); ?>

<?php echo e(Html::script('js/contribute.js')); ?>


<script type="text/javascript">
    $(document).ready(function () {
        var contribute = new Contribute('<?php echo e(action('ContributionController@store')); ?>');
        contribute.init();
    });
    $(document).on('ready', function(){
        $('.rating').rating({displayOnly: true});
    });
</script>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="home-page container site-content">
    <div id="pl-4967">
        <div class="panel-grid" id="pg-4967-0">
            <div class="siteorigin-panels-stretch thim-fix-stretched panel-row-style" data-stretch-type="full-stretched">
                <div class="panel-grid-cell" id="pgc-4967-0-0">
                    <div class="so-panel widget widget_rev-slider-widget widget_revslider panel-first-child panel-last-child" id="panel-4967-0-0-0" data-index="0">
                        <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" >
                            <div id="rev_slider_1_1" class="rev_slider fullwidthabanner"  data-version="5.2.6">
                                <ul>
                                    <?php $__currentLoopData = $campaigns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                        <li data-transition="parallaxhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="<?php echo e($element->image->image); ?>" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                            <img src="<?php echo e(asset('img/dummy.png')); ?>" alt="" title="Home 3" data-lazyload="<?php echo e($element->image->image); ?>" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                            <div class="tp-caption tp-layer-selectable title "  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['0','-89','0','0']" data-fontsize="['18','16','15','14']" data-width="['none','none','474','276']" data-height="['none','none','53','none']" data-whitespace="['nowrap','nowrap','normal','normal']" data-transform_idle="o:1;" data-transform_in="x:-50px;opacity:0;s:2000;e:easeInOutBack;" data-transform_out="x:50px;opacity:0;s:300;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="off" data-responsive="off" ><?php echo str_limit($element->description ,config('constants.LIMIT_DESCRIPTION_CHARACTERS') ,'....'); ?></div>
                                            <h3 class="tp-caption tp-layer-selectable trim-title"  data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['-57','-135','-50','-63']" data-fontsize="['60','40','30','20']" data-lineheight="['102','70','60','40']" data-width="['none','596','none','383']" data-height="none" data-whitespace="['nowrap','normal','nowrap','normal']" data-transform_idle="o:1;" data-transform_in="x:50px;opacity:0;s:2000;e:easeInOutBack;" data-transform_out="x:-50px;opacity:0;s:300;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="off" data-responsive="off"><?php echo $element->name; ?></h3>
                                            <div class="tp-caption thim-slider-button rev-btn tp-layer-selectable learn-more" id="slide-1-layer-3" data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['60','-42','61','67']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Linear.easeNone;" data-style_hover="c:rgba(255, 255, 255, 1.00);bg:rgb(46, 119, 230);" data-transform_in="y:50px;opacity:0;s:1000;e:easeInOutBack;" data-transform_out="opacity:0;s:300;" data-start="1500" data-splitin="none" data-splitout="none" data-actions='[{"event":"click","action":"simplelink","target":"_self","url":"<?php echo e(action('CampaignController@show', $element->id)); ?>","delay":""}]' data-responsive_offset="off" data-responsive="off" ><?php echo e(trans('index.learn-more')); ?></div>
                                        </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                </ul>
                                <div class="tp-bannertimer tp-bottom" ></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-grid" id="pg-4967-1">
            <div class="panel-row-style">
                <div class="panel-grid-cell" id="pgc-4967-1-0">
                    <div class="so-panel widget widget_box panel-first-child panel-last-child" id="panel-4967-1-0-0" data-index="1">
                        <div class="panel-widget-style">
                            <div class="thim-widget-box thim-widget-box-base">
                                <div class="thim-box-simple  image-at-top">
                                    <div class="inner">
                                        <div class="media hidenOverflow" >
                                            <a href="<?php echo e(action('OrtherController@aboutUs')); ?>">
                                                <img src="<?php echo e(asset('img/01_home_04.jpg')); ?>" alt="">
                                            </a>
                                        </div>
                                        <div class="box-content">
                                            <a href="<?php echo e(action('OrtherController@aboutUs')); ?>">
                                                <h3 class="title weight-700" ><?php echo e(trans('index.who-we-are')); ?></h3>
                                            </a>
                                            <div class="description" >
                                                <a href="<?php echo e(action('OrtherController@aboutUs')); ?>"><?php echo e(trans('index.content')); ?></a>
                                            </div>
                                            <a class="thim-button readmore style7" href="<?php echo e(action('OrtherController@aboutUs')); ?>"><?php echo e(trans('index.read-more')); ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-grid-cell" id="pgc-4967-1-1">
                    <div class="so-panel widget widget_box panel-first-child panel-last-child" id="panel-4967-1-1-0" data-index="2">
                        <div class="panel-widget-style">
                            <div class="thim-widget-box thim-widget-box-base">
                                <div class="thim-box-simple  image-at-top" >
                                    <div class="inner">
                                        <div class="media hidenOverflow" >
                                            <a href="<?php echo e(action('OrtherController@contact')); ?>">
                                                <img src="<?php echo e(asset('img/01_home_04_4.jpg')); ?>" alt="">
                                            </a>
                                        </div>
                                        <div class="box-content">
                                            <a href="<?php echo e(action('OrtherController@contact')); ?>">
                                                <h3 class="title weight-700" ><?php echo e(trans('index.our-foundation')); ?></h3>
                                            </a>
                                            <div class="description" >
                                                <a href="<?php echo e(action('OrtherController@contact')); ?>"><?php echo e(trans('index.we-are-transparent')); ?></a>
                                            </div>
                                            <a class="thim-button readmore style7" href="<?php echo e(action('OrtherController@contact')); ?>"><?php echo e(trans('index.read-more')); ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-grid-cell" id="pgc-4967-1-2">
                    <div class="so-panel widget widget_box panel-first-child panel-last-child" id="panel-4967-1-2-0" data-index="3">
                        <div class="thim-widget-box thim-widget-box-base">
                            <div class="thim-box-simple  image-at-top" >
                                <div class="inner">
                                    <div class="media hidenOverflow" >
                                        <a href="<?php echo e(action('OrtherController@faq')); ?>">
                                            <img src="<?php echo e(asset('img/01_home_04_3.jpg')); ?>" alt="">
                                        </a>
                                    </div>
                                    <div class="box-content">
                                        <a href="<?php echo e(action('OrtherController@faq')); ?>">
                                            <h3 class="title weight-700" ><?php echo e(trans('index.ways-to-give')); ?></h3>
                                        </a>
                                        <div class="description" >
                                            <a href="<?php echo e(action('OrtherController@faq')); ?>"><?php echo e(trans('index.there-are-many')); ?></a>
                                        </div>
                                        <a class="thim-button readmore style7" href="<?php echo e(action('OrtherController@faq')); ?>"><?php echo e(trans('index.read-more')); ?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-grid" id="pg-5008-2">
            <div class="siteorigin-panels-stretch panel-row-style" data-stretch-type="full">
                <div class="panel-grid-cell" id="pgc-5008-2-0">
                    <div class="so-panel widget widget_heading panel-first-child" id="panel-5008-2-0-0" data-index="2">
                        <div class="thim-widget-heading thim-widget-heading-base">
                            <div class="thim-heading text-center ">
                                <div class="sc-heading article_heading pad-top-75" >
                                    <h3 class="heading__primary wrapper-line-heading"><span></span><span><?php echo e(trans('index.recent-causes')); ?></span><span></span></h3>
                                    <p class="heading__secondary"><?php echo e(trans('index.source-fund')); ?></p><span class="line-heading"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="so-panel widget widget_campaign" id="panel-5008-2-0-1" data-index="3">
                        <div class="thim-widget-campaign thim-widget-campaign-base">
                            <div class="thim-campaign template-default">
                                <div class="campaigns archive-content row">
                                    <?php $__currentLoopData = $campaigns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                        <article class="col-xs-6 col-md-4 post-315 dn_campaign type-dn_campaign status-publish has-post-thumbnail hentry dn_campaign_cat-community-charities dn_campaign_cat-environmental-charities dn_campaign_cat-international-charities dn_campaign_tag-events dn_campaign_tag-winter">
                                            <div class="content-inner">
                                                <div class="entry-thumbnail">
                                                    <div class="thumbnail">
                                                        <a href="<?php echo e(action('CampaignController@show', $element->id)); ?>">
                                                            <img src="<?php echo e($element->image->image); ?>" alt="<?php echo e($element->name); ?>" title="<?php echo e($element->name); ?>">
                                                        </a>
                                                    </div>
                                                    <button type="button" class="donate_load_form thim-button style3" data-toggle="modal" href='.donate_modal' data-hiden="<?php echo e(csrf_token()); ?>" data-url="<?php echo e(action('CampaignController@review')); ?>" data-campaign-id="<?php echo e($element->id); ?>"><?php echo e(trans('index.join-now')); ?></button>
                                                </div>
                                                <div class="event-content">
                                                    <div class="entry-header">
                                                        <h2 class="blog_title trim-title">
                                                            <a href="<?php echo e(action('CampaignController@show', $element->id)); ?>"><?php echo e($element->name); ?> </a>
                                                        </h2>
                                                    </div>
                                                    <div class="entry-content trim-description">
                                                        <p><?php echo $element->description; ?></p>
                                                    </div>
                                                    <div class="entry-meta">
                                                        <div class="date">
                                                            <div class="day"><?php echo e(date('d', strtotime($element->start_time))); ?></div>
                                                            <div class="month"><?php echo e(date('M', strtotime($element->start_time))); ?></div>
                                                        </div>
                                                        <div class="metas">
                                                            <div class="time"><i class="fa fa-clock-o"></i> <?php echo e(date('h:i A', strtotime($element->start_time))); ?> - <?php echo e(date('h:i A', strtotime($element->end_time))); ?></div>
                                                            <div class="location"><i class="fa fa-map-marker"></i> <?php echo $element->address; ?></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="so-panel widget widget_button panel-last-child" id="panel-5008-2-0-2" data-index="4">
                        <div class="panel-widget-style">
                            <div class="thim-widget-button thim-widget-button-base">
                                <div id="button_590e8789855e0" class="text-center">
                                    <a href="<?php echo e(action('CampaignController@showCampaigns')); ?>" class="thim-button default inner size-default"><?php echo e(trans('index.view-all')); ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-grid" id="pg-5008-3">
            <div class="siteorigin-panels-stretch panel-row-style bg_image"  data-stretch-type="full" data-siteorigin-parallax="{&quot;backgroundUrl&quot;:&quot;http:\/\/charitywp.thimpress.com\/demo-2\/wp-content\/uploads\/sites\/2\/2016\/03\/hero_background_1.jpg&quot;,&quot;backgroundSize&quot;:[1600,1067],&quot;backgroundSizing&quot;:&quot;scaled&quot;,&quot;limitMotion&quot;:&quot;auto&quot;}">
                <div class="panel-grid-cell col-xs-12 col-sm-3" id="pgc-5008-3-0">
                    <div class="so-panel widget widget_counters-box panel-first-child panel-last-child" id="panel-5008-3-0-0" data-index="5">
                        <div class="thim-widget-counters-box thim-widget-counters-box-base">
                            <div id="counter_590e878986045" class="counter-box has-padding line-in-bottom">
                                <div class="content-box-percentage">
                                    <div class="counter-number">
                                        <span class="before"></span>
                                        <span class="display-percentage" data-to="<?php echo e($countEvents); ?>" data-speed="2000"><?php echo e($countEvents); ?></span>
                                    </div>
                                    <div class="counter-label">
                                        <span class="counter-box-content"><?php echo e(trans('index.event')); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-grid-cell col-xs-12 col-sm-3" id="pgc-5008-3-1">
                    <div class="so-panel widget widget_counters-box panel-first-child panel-last-child" id="panel-5008-3-1-0" data-index="6">
                        <div class="thim-widget-counters-box thim-widget-counters-box-base">
                            <div id="counter_590e87898630d" class="counter-box has-padding line-in-bottom">
                                <div class="content-box-percentage">
                                    <div class="counter-number">
                                        <span class="before"></span>
                                        <span class="display-percentage" data-to="<?php echo e($countCampaigns); ?>" data-speed="2000"><?php echo e($countCampaigns); ?></span>
                                    </div>
                                    <div class="counter-label">
                                        <span class="counter-box-content"><?php echo e(trans('index.projects')); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-grid-cell col-xs-12 col-sm-3" id="pgc-5008-3-2">
                    <div class="so-panel widget widget_counters-box panel-first-child panel-last-child" id="panel-5008-3-2-0" data-index="7">
                        <div class="thim-widget-counters-box thim-widget-counters-box-base">
                            <div id="counter_590e87898663a" class="counter-box has-padding line-in-bottom">
                                <div class="content-box-percentage">
                                    <div class="counter-number">
                                        <span class="before"></span>
                                        <span class="display-percentage" data-to="<?php echo e($countInteractives); ?>" data-speed="2000"><?php echo e($countInteractives); ?></span>
                                    </div>
                                    <div class="counter-label">
                                        <span class="counter-box-content"><?php echo e(trans('index.donations')); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-grid-cell col-xs-12 col-sm-3" id="pgc-5008-3-3">
                    <div class="so-panel widget widget_counters-box panel-first-child panel-last-child" id="panel-5008-3-3-0" data-index="8">
                        <div class="thim-widget-counters-box thim-widget-counters-box-base">
                            <div id="counter_590e878986915" class="counter-box has-padding line-in-bottom">
                                <div class="content-box-percentage">
                                    <div class="counter-number">
                                        <span class="before"></span>
                                        <span class="display-percentage" data-to="<?php echo e($countUsers); ?>" data-speed="2000"><?php echo e($countUsers); ?></span>
                                    </div>
                                    <div class="counter-label">
                                        <span class="counter-box-content"><?php echo e(trans('index.volunteer')); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-grid" id="pg-5008-4">
            <div class="siteorigin-panels-stretch panel-row-style"  data-stretch-type="full">
                <div class="panel-grid-cell" id="pgc-5008-4-0">
                    <div class="so-panel widget widget_heading panel-first-child panel-last-child" id="panel-5008-4-0-0" data-index="9">
                        <div class="thim-widget-heading thim-widget-heading-base">
                            <div class="thim-heading text-center ">
                                <div class="sc-heading article_heading " >
                                    <h3 class="heading__primary wrapper-line-heading"><span></span><span><?php echo e(trans('index.why-choose')); ?></span><span></span></h3>
                                    <p class="heading__secondary"><?php echo e(trans('index.why')); ?></p>
                                    <span class="line-heading" ></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-grid" id="pg-5008-5">
            <div class="siteorigin-panels-stretch panel-row-style"  data-stretch-type="full">
                <div class="panel-grid-cell col-xs-12 col-sm-6" id="pgc-5008-5-0">
                    <div class="so-panel widget widget_box panel-first-child" id="panel-5008-5-0-0" data-index="10">
                        <div  class="panel-widget-style">
                            <div class="thim-widget-box thim-widget-box-base">
                                <div class="thim-box-simple not-line image-at-left" >
                                    <div class="inner">
                                        <div class="media" >
                                             <img src="<?php echo e(asset('img/home6-icon.png')); ?>" alt="">
                                         </div>
                                         <div class="box-content">
                                            <h3 class="title" ><?php echo e(trans('index.best-pricing-guarantee')); ?></h3>
                                            <div class="description" ><?php echo e(trans('index.activities')); ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="so-panel widget widget_box" id="panel-5008-5-0-1" data-index="11">
                        <div  class="panel-widget-style">
                            <div class="thim-widget-box thim-widget-box-base">
                                <div class="thim-box-simple not-line image-at-left" >
                                    <div class="inner">
                                        <div class="media" >
                                            <img src="<?php echo e(asset('img/home6-icon-2.png')); ?>" alt="">
                                        </div>
                                        <div class="box-content">
                                            <h3 class="title" ><?php echo e(trans('index.no-goal-requirements')); ?></h3>
                                            <div class="description" ><?php echo e(trans('index.no-goal-requirements-content')); ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="so-panel widget widget_box panel-last-child" id="panel-5008-5-0-2" data-index="12">
                        <div  class="panel-widget-style">
                            <div class="thim-widget-box thim-widget-box-base">
                                <div class="thim-box-simple not-line image-at-left" >
                                    <div class="inner">
                                        <div class="media" >
                                            <img src="<?php echo e(asset('img/home6-icon-3.png')); ?>" alt="">
                                        </div>
                                        <div class="box-content">
                                            <h3 class="title" ><?php echo e(trans('index.maximize')); ?></h3>
                                            <div class="description" ><?php echo e(trans('index.adviser')); ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-grid-cell col-xs-12 col-sm-6" id="pgc-5008-5-1">
                    <div class="so-panel widget widget_box panel-first-child" id="panel-5008-5-1-0" data-index="13">
                        <div  class="panel-widget-style">
                            <div class="thim-widget-box thim-widget-box-base">
                                <div class="thim-box-simple not-line image-at-left" >
                                    <div class="inner">
                                        <div class="media" >
                                            <img src="<?php echo e(asset('img/home6-icon-4.png')); ?>" alt="">
                                        </div>
                                        <div class="box-content">
                                            <h3 class="title" ><?php echo e(trans('index.your-charitable-life')); ?></h3>
                                            <div class="description" ><?php echo e(trans('index.your-charitable-life-content')); ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="so-panel widget widget_box" id="panel-5008-5-1-1" data-index="14">
                        <div  class="panel-widget-style">
                            <div class="thim-widget-box thim-widget-box-base">
                                <div class="thim-box-simple not-line image-at-left" >
                                    <div class="inner">
                                        <div class="media" >
                                            <img src="<?php echo e(asset('img/home6-icon-5.png')); ?>" alt="">
                                        </div>
                                        <div class="box-content">
                                            <h3 class="title" ><?php echo e(trans('index.most-trusted')); ?></h3>
                                            <div class="description" ><?php echo e(trans('index.most-trusted-content')); ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="so-panel widget widget_box panel-last-child" id="panel-5008-5-1-2" data-index="15">
                        <div  class="panel-widget-style">
                            <div class="thim-widget-box thim-widget-box-base">
                                <div class="thim-box-simple not-line image-at-left" >
                                    <div class="inner">
                                        <div class="media" >
                                            <img src="<?php echo e(asset('img/home6-icon-6.png')); ?>" alt="">
                                        </div>
                                        <div class="box-content">
                                            <h3 class="title" ><?php echo e(trans('index.our-experience')); ?></h3>
                                            <div class="description" ><?php echo e(trans('index.our-experience-content')); ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-grid" id="pg-4967-2">
            <div class="panel-grid-cell" id="pgc-4967-2-0">
                <div class="so-panel widget widget_heading panel-first-child" id="panel-4967-2-0-0">
                    <div class="thim-widget-heading thim-widget-heading-base">
                        <div class="thim-heading text-center ">
                            <div class="sc-heading article_heading " >
                                <h3 class="heading__primary wrapper-line-heading">
                                    <span></span>
                                    <span><?php echo e(trans('index.top-member')); ?></span>
                                    <span></span>
                                </h3>
                                <span class="line-heading"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="so-panel widget widget_list-post" id="panel-4967-2-0-1" data-index="5">
                    <div class="thim-our-team">
                        <div class="row members">
                            <?php $__currentLoopData = $topUser; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                <div class="member col-xs-6 col-md-3">
                                    <div class="inner">
                                        <div class="avatar-wrapper">
                                            <div class="avatar-inner">
                                                <img src="<?php echo e($element->avatar); ?>" class="attachment-full size-full wp-post-image" alt="" width="570" height="570">
                                            </div>
                                        </div>
                                        <div class="info">
                                            <div class="name">
                                                <a href="<?php echo e(action('UserController@show', ['id' => $element->id])); ?>"><?php echo e($element->name); ?></a>
                                            </div>
                                            <div class="regency"><?php echo Form::hidden('input-1', $element->star, ['id' => 'not-allow-rating-user', 'class' => 'rating rating-loading', 'data-min' => '0', 'data-step' => '1', 'data-size' => 'xs']); ?></div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                        </div>
                    </div>
                </div>
                <div class="so-panel widget widget_button panel-last-child" id="panel-4967-2-0-2" data-index="6">
                    <div class="panel-widget-style">
                        <div class="thim-widget-button thim-widget-button-base">
                            <div id="button_58f2300d1f540" class="text-center">
                                <a href="<?php echo e(action('OrtherController@member')); ?>" class="thim-button default inner size-default"><?php echo e(trans('index.view-all')); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel-grid" id="pg-4967-4">
            <div class="siteorigin-panels-stretch panel-row-style"  data-stretch-type="full">
                <div class="panel-grid-cell" id="pgc-4967-4-0">
                    <div class="so-panel widget widget_heading panel-first-child" id="panel-4967-4-0-0" data-index="9">
                        <div class="thim-widget-heading thim-widget-heading-base">
                            <div class="thim-heading text-center ">
                                <div class="sc-heading article_heading ">
                                    <h3  class="heading__primary wrapper-line-heading">
                                        <span></span><span><?php echo e(trans('index.what-people-say')); ?></span><span></span>
                                    </h3>
                                    <span class="line-heading" ></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="so-panel widget widget_testimonials panel-last-child" id="panel-4967-4-0-1" data-index="10">
                        <div class="thim-widget-testimonials thim-widget-testimonials-base">
                            <div class="thim-testimonial-slider">
                                <div id="590e8513498b5" class="testimonial-slider" data-visible="3" data-mousewheel="0">
                                    <div class="item"><img src="<?php echo e(asset('img/testimonials-3-75x75.jpg')); ?>" alt="Kenny Miller" title="Kenny Miller" data-heading="Kenny Miller" data-content="Freelancer" />
                                        <div class="content"><?php echo e(trans('index.i-always-want')); ?></div>
                                    </div>
                                    <div class="item"><img src="<?php echo e(asset('img/testimonials-2-75x75.jpg')); ?>" alt="Akira Tunr" title="Akira Tunr" data-heading="Akira Tunr" data-content="Developer" />
                                        <div class="content"><?php echo e(trans('index.i-understand')); ?></div>
                                    </div>
                                    <div class="item"><img src="<?php echo e(asset('img/testimonials-1-75x75.jpg')); ?>" alt="Tony Brown" title="Tony Brown" data-heading="Tony Brown" data-content="Designer" />
                                        <div class="content"><?php echo e(trans('index.i-always-want')); ?></div>
                                    </div>
                                    <div class="item"><img src="<?php echo e(asset('img/team-3-75x75.jpg')); ?>" alt="Peter Jackson" title="Peter Jackson" data-heading="Peter Jackson" data-content="Photography" />
                                        <div class="content"><?php echo e(trans('index.i-understand')); ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>