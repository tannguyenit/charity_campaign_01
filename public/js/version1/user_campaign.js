var UserCampaign = function (messageConfirm, urlDeleteCampaign, error, success) {
    this.messageConfirm = messageConfirm;
    this.urlDeleteCampaign = urlDeleteCampaign;
    this.error = error;
    this.success = success;
};

UserCampaign.prototype = {

    init: function () {
        var _self = this;
        _self.deleteCampaign();
    },

    deleteCampaign: function () {
        var _self = this;

        $('.delete-campaign').click(function (e) {
            e.preventDefault();
            var thisButton = this;
            var campaignId = $(this).data('campaign-id');
            var token = $('.hide').data('token');
            BootstrapDialog.confirm(_self.messageConfirm, function(result) {
                if (result) {
                    $.ajax({
                        type: "POST",
                        url: _self.urlDeleteCampaign,
                        data: {
                            'campaign_id': campaignId,
                            '_token': token
                        },
                        cache: false,
                        success: function(data) {
                            if (data == true) {
                                $(thisButton).closest('.stream-item div').html('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>' + _self.success + '</div>');
                                setTimeout(function() { $('.alert-success').fadeOut() }, 1000);
                                $(thisButton).closest('.stream-item').fadeOut(3000);
                            } else {
                                alert(_self.error);
                            }
                        },
                        error: function() {
                            alert(_self.error);
                        }

                    })
                }
            })
        })
    }
};
