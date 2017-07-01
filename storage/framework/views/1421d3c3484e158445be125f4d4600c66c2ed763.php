    <div class="thim-loading">
        <img src="<?php echo e(asset('img/loading.gif')); ?>" alt="<?php echo e(trans('message.project')); ?>" />
    </div>
    <div class="thim-menu line mobile-not-line">
        <span class="close-menu"><i class="fa fa-times"></i></span>
        <div class="main-menu">
            <ul class="nav navbar-nav">
                <li class="menu-item menu-item-has-children drop_to_right standard current-menu-item ">
                    <a href="<?php echo e(action('CampaignController@index')); ?>">
                        <span data-hover="<?php echo e(trans('index.home')); ?>"><?php echo e(trans('index.home')); ?></span>
                    </a>
                </li>
                <li class="menu-item menu-item-has-children drop_to_right standard">
                    <a href="<?php echo e(action('CampaignController@showCampaigns')); ?>">
                        <span data-hover="<?php echo e(trans('index.campaigns')); ?>"><?php echo e(trans('index.campaigns')); ?></span>
                    </a>
                </li>
                <li class="menu-item menu-item-has-children drop_to_right standard">
                    <a href="<?php echo e(action('EventController@index')); ?>">
                        <span data-hover="<?php echo e(trans('index.event')); ?>"><?php echo e(trans('index.event')); ?></span>
                    </a>
                </li>
                <li class="menu-item menu-item-has-children drop_to_right standard">
                    <a href="<?php echo e(action('OrtherController@aboutUs')); ?>">
                        <span data-hover="<?php echo e(trans('index.about')); ?>"><?php echo e(trans('index.about')); ?></span>
                    </a>
                    <ul class="sub-menu">
                        <li class="menu-item menu-item-type-post_type menu-item-object-page">
                            <a href="<?php echo e(action('OrtherController@member')); ?>"><?php echo e(trans('index.member')); ?></a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page">
                            <a href="<?php echo e(action('OrtherController@faq')); ?>"><?php echo e(trans('index.faq')); ?></a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page">
                            <a href="<?php echo e(action('OrtherController@contact')); ?>"><?php echo e(trans('index.contact')); ?></a>
                        </li>
                        <li class="menu-item menu-item-type-post_type menu-item-object-page">
                            <a href="<?php echo e(action('OrtherController@blog')); ?>"><?php echo e(trans('index.blog')); ?></a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="menu-sidebar thim-hidden-768px"></div>
    </div>
    <div id="wrapper-container" class="wrapper-container">
        <div class="content-pusher ">
            <header id="masthead" class="site-header line">
                <div class="top-header">
                    <div class="container">
                        <div class="thim-toggle-mobile-menu"><span class="inner"></span></div>
                        <div class="thim-logo">
                            <a href="<?php echo e(action('CampaignController@index')); ?>" title="<?php echo e(trans('message.page_titles.welcome')); ?>">
                                <img class="logo" src="<?php echo e(asset('img/icon.png')); ?>" alt="<?php echo e(trans('index.home')); ?>" />
                                <img class="sticky-logo" src="<?php echo e(asset('img/icon.png')); ?>" alt="<?php echo e(trans('index.home')); ?>" />
                                <img class="mobile-logo" src="<?php echo e(asset('img/icon.png')); ?>" alt="<?php echo e(trans('index.home')); ?>" />
                            </a>
                        </div>
                        <div class="thim-menu no-right">
                            <div class="main-menu">
                                <ul class="nav navbar-nav">
                                    <li class="menu-item menu-item-has-children drop_to_right standard">
                                        <a href="<?php echo e(action('CampaignController@index')); ?>">
                                            <span data-hover="<?php echo e(trans('index.home')); ?>"><?php echo e(trans('index.home')); ?></span>
                                        </a>
                                        <span class="icon-toggle"><i class="fa fa-angle-down"></i></span>
                                    </li>
                                    <li class="menu-item menu-item-has-children drop_to_right standard">
                                        <a href="<?php echo e(action('CampaignController@showCampaigns')); ?>">
                                            <span data-hover="<?php echo e(trans('index.campaigns')); ?>"><?php echo e(trans('index.campaigns')); ?></span>
                                        </a>
                                        <span class="icon-toggle"><i class="fa fa-angle-down"></i></span>
                                    </li>
                                    <li class="menu-item menu-item-has-children drop_to_right standard">
                                        <a href="<?php echo e(action('EventController@index')); ?>"><span data-hover="<?php echo e(trans('index.event')); ?>"><?php echo e(trans('index.event')); ?></span></a>
                                        <span class="icon-toggle"><i class="fa fa-angle-down"></i></span>
                                    </li>
                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children drop_to_right standard">
                                        <a href="<?php echo e(action('OrtherController@aboutUs')); ?>"><span data-hover="<?php echo e(trans('index.about')); ?>"><?php echo e(trans('index.about')); ?></span></a>
                                        <span class="icon-toggle"><i class="fa fa-angle-down"></i></span>
                                        <ul class="sub-menu">
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                                <a href="<?php echo e(action('OrtherController@member')); ?>"><?php echo e(trans('index.member')); ?></a>
                                            </li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                                <a href="<?php echo e(action('OrtherController@faq')); ?>"><?php echo e(trans('index.faq')); ?></a>
                                            </li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                                <a href="<?php echo e(action('OrtherController@contact')); ?>"><?php echo e(trans('index.contact')); ?></a>
                                            </li>
                                            <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                                <a href="<?php echo e(action('OrtherController@blog')); ?>"><?php echo e(trans('index.blog')); ?></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="top-sidebar">
                                <div class="widget widget_siteorigin-panels-builder">
                                    <div id="pl-w581a9b3585a4f">
                                        <div class="panel-grid" id="pg-w581a9b3585a4f-0">
                                            <div class="panel-grid-cell" id="pgc-w581a9b3585a4f-0-0">
                                                <div class="so-panel widget widget_donate_widget panel-first-child" id="panel-w581a9b3585a4f-0-0-0" data-index="0">
                                                    <div class="thimpress_donate_button">
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0)" title="" data-toggle="dropdown">
                                                                <i class="fa fa-user-circle-o user_profile fa-3x"></i>
                                                            </a>
                                                            <ul class="dropdown-menu dropdown-menu-right">
                                                                <?php if(auth()->check()): ?>
                                                                    <li><a href="<?php echo e(action('UserController@show', ['id' => auth()->id()])); ?>"><?php echo e(trans('user.profile')); ?></a></li>
                                                                    <li><a href="<?php echo e(action('OrtherController@createBlog')); ?>"><?php echo e(trans('blog.create')); ?></a></li>
                                                                    <li><a href="<?php echo e(route('logout')); ?>"><?php echo e(trans('message.logout')); ?></a></li>
                                                                <?php else: ?>
                                                                    <li><a href="<?php echo e(route('get_login')); ?>"><?php echo e(trans('message.login')); ?></a></li>
                                                                    <li><a href="<?php echo e(route('register')); ?>"><?php echo e(trans('message.register')); ?></a></li>
                                                                <?php endif; ?>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="so-panel widget widget_donate_widget panel-first-child" id="panel-w581a9b3585a4f-0-0-0" data-index="0">
                                                    <div class="thimpress_donate_button">
                                                        <div class="hide_language" data-route="<?php echo e(url('language')); ?>" data-token="<?php echo e(csrf_token()); ?>"></div>
                                                        <select name="lang" id="countries" class="btn-multiple-language form-control">
                                                            <option value='<?php echo e(config('settings.en')); ?>' <?php echo e(Session::get('locale') == config('settings.en') ? 'selected' : ''); ?> >
                                                                <?php echo e(config('settings.language.en')); ?>

                                                            </option>
                                                            <option value='<?php echo e(config('settings.vi')); ?>' <?php echo e(Session::get('locale') == config('settings.vi') ? 'selected' : ''); ?> >
                                                                <?php echo e(config('settings.language.vi')); ?>

                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="so-panel widget widget_donate_widget panel-first-child" id="panel-w581a9b3585a4f-0-0-0" data-index="0">
                                                    <div class="thimpress_donate_button">
                                                        <div class="donate_button_title thim-button style3">
                                                            <a class="color" href="<?php echo e(action('CampaignController@create')); ?>"><?php echo e(trans('campaign.create')); ?></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="so-panel widget widget_search-box panel-last-child" id="panel-w581a9b3585a4f-0-0-1" data-index="1">
                                                    <div class="thim-widget-search-box thim-widget-search-box-base">
                                                        <div class="thim-search-box">
                                                            <div class="toggle-form"><i data-toggle="modal" href='#search_modal' class="fa fa-search"></i> </div>
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
                </div>
            </header>
        </div>
    </div>
    <div id="main-content">
