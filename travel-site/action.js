$(document).ready(function () {
    $(document).mouseup(function(e) 
    {
        var container = $(".hamburgerMenuItems");
        var hamburgerDisp = $('.hamburgerMenu');
        if (!container.is(e.target) && hamburgerDisp.has(e.target).length === 0 && container.has(e.target).length === 0 && !hamburgerDisp.is(e.target)) 
        {
            $('.hamburgerMenuItems').css('right', '-100%');
            $('.hamburgerMenuItems').css('display', 'none');
        }
    });

    $(document).on('click', '.hamburgerMenu', function (params) {
        $('.hamburgerMenuItems').css('right', 0);
        $('.hamburgerMenuItems').css('display', 'block');
    })
    
    $(document).on('click', '.opt2', function (params) {
        convertToFlex();
        for(var i = 0; i <= 4; i++) {
            var selectedId = '#dest' + i;
            $(selectedId).css('display', 'none');
        }
    })
    $(document).on('click', '.opt3', function (params) {
        convertToFlex();
        for(var i = 3; i <= 6; i++) {
            var selectedId = '#dest' + i;
            $(selectedId).css('display', 'none');
        }
    })
    $(document).on('click', '.opt4', function (params) {
        convertToFlex();
        for(var i = 5; i <= 6; i++) {
            var selectedId = '#dest' + i;
            $(selectedId).css('display', 'none');
        }
    })
    function convertToFlex(params) {
        for(var i = 1; i <= 6; i++) {
            var selectedId = '#dest' + i;
            $(selectedId).css('display', 'flex');
        }
    }
});