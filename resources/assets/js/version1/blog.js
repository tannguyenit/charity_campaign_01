var Blog = function (validateMessage) {
    this.validateMessage = validateMessage;
};

Blog.prototype = {
    init: function () {
        var _self = this;
        _self.uploadPreview();
        _self.validate();

    },

    uploadPreview: function () {
        $(document).on('change', '#image__preview', function(){
            var $preview = $('#preview').empty();
            if (this.files) $.each(this.files, readAndPreview);
            function readAndPreview(i, file) {
                if (!/\.(jpe?g|png|gif)$/i.test(file.name)){
                    return alert(file.name +" is not an image");
                }
                var reader = new FileReader();
                $(reader).on("load", function() {
                    $preview.append($("<img", {src:this.result, height:100}));
                });
                reader.readAsDataURL(file);
            }
        })
    },

    validate: function () {
        var _self = this;
        var message = JSON.parse(_self.validateMessage);
        $.validator.addMethod("check_tendm", function(value, element) {
           var match = $(this).text().match(/(http:|https:)?\/\/(www\.)?(youtube.com|youtu.be)\/(watch)?(\?v=)?(\S+)?/);
           if(match != null) {
            results.push(match);
        }
    }, message.video.required);
        $('#create-blog').validate({
            rules: {
                img: {
                    required: true
                },
                title: {
                    required: true,
                    minlength: 10
                },
                video: {
                    required: true,
                    links: true
                }
            },
            messages: {
                img: {
                    required: message.image.required
                },
                title: {
                    required: message.title.required,
                    minlength: message.title.minlength
                },
                video: {
                    required: message.video.required
                }
            }
        });
    }
};
