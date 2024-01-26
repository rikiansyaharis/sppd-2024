
(function ($) {
    "use strict";
    var $wrapper = $('.main-wrapper');
    var $pageWrapper = $('.page-wrapper');
    var $slimScrolls = $('.slimscroll');
    var Sidemenu = function () {
        this.$menuItem = $('#sidebar-menu a');
    };

    function init() {
        var $this = Sidemenu;
        $('#sidebar-menu a').on('click', function (e) {
            if ($(this).parent().hasClass('submenu')) {
                e.preventDefault();
            }
            if (!$(this).hasClass('subdrop')) {
                $('ul', $(this).parents('ul:first')).slideUp(350);
                $('a', $(this).parents('ul:first')).removeClass('subdrop');
                $(this).next('ul').slideDown(350);
                $(this).addClass('subdrop');
            } else if ($(this).hasClass('subdrop')) {
                $(this).removeClass('subdrop');
                $(this).next('ul').slideUp(350);
            }
        });
        $('#sidebar-menu ul li.submenu a.active').parents('li:last').children('a:first').addClass('active').trigger('click');
    }
    init();
    $('body').append('<div class="sidebar-overlay"></div>');
    $(document).on('click', '#mobile_btn', function () {
        $wrapper.toggleClass('slide-nav');
        $('.sidebar-overlay').toggleClass('opened');
        $('html').addClass('menu-opened');
        return false;
    });
    if ($('.toggle-password').length > 0) {
        $(document).on('click', '.toggle-password', function () {
            $(this).toggleClass("feather-eye-off feather-eye");
            var input = $(".pass-input");
            if (input.attr("type") == "text") {
                input.attr("type", "password");
            } else {
                input.attr("type", "text");
            }
        });
    }
    if ($('.reg-toggle-password').length > 0) {
        $(document).on('click', '.reg-toggle-password', function () {
            $(this).toggleClass("feather-eye-off feather-eye");
            var input = $(".pass-confirm");
            if (input.attr("type") == "text") {
                input.attr("type", "password");
            } else {
                input.attr("type", "text");
            }
        });
    }
    $(".sidebar-overlay").on("click", function () {
        $wrapper.removeClass('slide-nav');
        $(".sidebar-overlay").removeClass("opened");
        $('html').removeClass('menu-opened');
    });
    $(document).on("click", ".logo-hide-btn", function () {
        $(this).parent().hide();
    });
    if ($('.page-wrapper').length > 0) {
        var height = $(window).height();
        $(".page-wrapper").css("min-height", height);
    }
    $(window).resize(function () {
        if ($('.page-wrapper').length > 0) {
            var height = $(window).height();
            $(".page-wrapper").css("min-height", height);
        }
    });
    
    // $(document).ready(function () {
    //     var datatableElement = $('#datatable');

    //     if (datatableElement.length > 0) {
    //         var myDataTable = datatableElement.DataTable({
    //             "responsive": true,
    //             language: {
    //                 emptyTable: "Tidak ada data",
    //                 zeroRecords: "Tidak ada data yang cocok ditemukan",
    //             },
    //             initComplete: function () {
    //                 if (this.fnGetData().length === 0) {
    //                     $('#datatable').html(`
    //                         <div style="text-align: center; margin-top: 20px;">
    //                             <img src="${ASSET_URL}assets/img/empty-data.png" width="25%" alt="No Data">
    //                             <p style="margin-top: 10px;">Tidak ada data</p>
    //                         </div>
    //                     `);
    //                 }
    //             },
    //         });
    //     }
    // });


    if ($slimScrolls.length > 0) {
        $slimScrolls.slimScroll({
            height: 'auto',
            width: '100%',
            position: 'right',
            size: '7px',
            color: '#ccc',
            allowPageScroll: false,
            wheelStep: 10,
            touchScrollStep: 100
        });
        var wHeight = $(window).height() - 60;
        $slimScrolls.height(wHeight);
        $('.sidebar .slimScrollDiv').height(wHeight);
        $(window).resize(function () {
            var rHeight = $(window).height() - 60;
            $slimScrolls.height(rHeight);
            $('.sidebar .slimScrollDiv').height(rHeight);
        });
    }
    $(document).on('click', '#toggle_btn', function () {
        if ($('body').hasClass('mini-sidebar')) {
            $('body').removeClass('mini-sidebar');
            $('.subdrop + ul').slideDown();
        } else {
            $('body').addClass('mini-sidebar');
            $('.subdrop + ul').slideUp();
        }
        setTimeout(function () {}, 300);
        return false;
    });
    $(document).on('mouseover', function (e) {
        e.stopPropagation();
        if ($('body').hasClass('mini-sidebar') && $('#toggle_btn').is(':visible')) {
            var targ = $(e.target).closest('.sidebar').length;
            if (targ) {
                $('body').addClass('expand-menu');
                $('.subdrop + ul').slideDown();
            } else {
                $('body').removeClass('expand-menu');
                $('.subdrop + ul').slideUp();
            }
            return false;
        }
    });

    feather.replace();
})(jQuery);

window.addEventListener("load", function () {
    var preloader = document.querySelector(".preloader");
    preloader.style.display = "none";
});

