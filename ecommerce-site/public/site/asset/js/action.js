$(document).ready(function () {
    $(document).mouseup(function(e) 
    {
        var container = $(".headerButtons");
        var hamburgerDisp = $('.hamburgerMenu');
        if (!container.is(e.target) && hamburgerDisp.has(e.target).length === 0 && container.has(e.target).length === 0 && !hamburgerDisp.is(e.target)) 
        {
            $('.headerButtons').css('right', '-100%');
        }
    });
    $(document).on('click', '.hamburgerMenu', function () {
        $('.headerButtons').css('right', 0);
    })
});