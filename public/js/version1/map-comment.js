jQuery(document).ready(function(){
    jQuery('.fa-reply').click(function(){
        var view = '<li class="has">'
        + '<div class="comment-avatar col-xs-1 ">'
        + '<img src="http://i9.photobucket.com/albums/a88/creaticode/avatar_1_zps8e1c80cd.jpg" alt="">  '
        + '</div>'
        + '<div class="comment-box col-xs-11">'
        + '<textarea name="" class="comment__here"></textarea>'
        + '</div>'
        + '</li>';
        var id = jQuery(this).closest('.area__comment').data('comment-id');
        var this_ = jQuery(this).closest('.area__comment').find('.reply-list');
        if (this_.find('li').hasClass('has')) {}
            else {
                this_.append(view);
            }
            this_.find('li .comment__here').focus();
        });

});

