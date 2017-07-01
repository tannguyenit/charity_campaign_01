var Search = function () {

};

Search.prototype = {
    init: function () {
        var _self = this;
        _self.initEvent();
    },

    initEvent: function () {
        var _self = this;
        var inputSearch = $('#search_user');
        var engine = new Bloodhound({
            remote: {
                url: '/messages/search?q=%QUERY%',
                wildcard: '%QUERY%'
            },
            datumTokenizer: Bloodhound.tokenizers.whitespace('q'),
            queryTokenizer: Bloodhound.tokenizers.whitespace
        });

        inputSearch.typeahead({
            hint: true,
            highlight: true,
            minLength: 1
        }, {
            source: engine.ttAdapter(),

            limit: 10,

            templates: {

                header: [
                    '<div class="list-group search-results-dropdown">'
                ],
                suggestion: function (data) {
                    if (data.success) {

                        return data.html;
                    } else {

                        return '<div class="list-group search-results-dropdown"><div class="list-group-item"></div></div>';
                    }
                }
            },
            display: function(suggestion) {

                return false;
            }
        })
    }
};
