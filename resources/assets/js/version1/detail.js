equalheight = function(container){
    var currentTallest = 0,
    currentRowStart = 0,
    rowDivs = new Array(),
    $el,
    topPosition = 0;
    $(container).each(function() {
        $el = $(this);
        $($el).height('auto')
        topPostion = $el.position().top;

        if (currentRowStart != topPostion) {
            for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
                rowDivs[currentDiv].height(currentTallest);
            }
            rowDivs.length = 0;
            currentRowStart = topPostion;
            currentTallest = $el.height();
            rowDivs.push($el);
        } else {
            rowDivs.push($el);
            currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
        }
        for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
            rowDivs[currentDiv].height(currentTallest);
        }
    });
}

$(window).load(function() {
    equalheight('.infomation .panel-grid-cell .so-panel');
});

$(window).resize(function(){
    equalheight('.infomation .panel-grid-cell .so-panel');
});
$(document).ready(function() {
    $('.rating').rating({displayOnly: true});
    $('.read-more a').click(function(e) {
        e.preventDefault();
        $(this).parents('#pl-4934').find('#pg-4934-0').css('height', 'auto');
        $(this).parent().fadeOut();
    })
})
