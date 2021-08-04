(function ($) {

    var COMMON = {
        init: function () {
            this.cacheDOM();

            $(window).on('resize', this.reCalcOnResize.bind(this))
        },
        cacheDOM: function () {
            this.$body = $('body');
            this.windowWidth = $(window).width();
        },
        reCalcOnResize: function () {
            this.windowWidth = $(window).width();
        }
    };

    var mainNavigation = {
        init: function () {
            this.$mainNavContainer = $('#site-navigation');
            this.$menuToggler = this.$mainNavContainer.find('.menu-toggle');
            this.$mainMenuContainer = this.$mainNavContainer.find('.menu-primary-container');
            this.$mainMenu = this.$mainNavContainer.find('#primary-menu');
            console.log(this.$menuToggler);
            this.$menuToggler.on('click',this.toggleMenu.bind(this));
        },
        toggleMenu: function (e) {
            e.preventDefault();
            this.$mainMenuContainer.toggleClass('shown');
        }
    };

    $(function () {
        COMMON.init();
        mainNavigation.init();
    });

      //menu toggle
    $('.menu-toggle').click(function () {
        $('body').toggleClass('active-responsive-menu');
    })

     $('#primary-menu a').click(function () {
        $('body').removeClass('active-responsive-menu');
    })


    //fullpage
    $('.hero-section').fullpage({
    sectionSelector: '.section',
       scrollOverflow: true,
        scrollingSpeed: 2500,
        navigation: true,
        anchors: ['intro', 'resume', 'about', 'portfolio', 'contact'],
    
    });
    

    //isotope
     var $grid = $('.grid');
        $grid.isotope({
            itemSelector: '.grid-item',
            percentPosition: true,
            masonry: {
                columnWidth: '.grid-sizer',
                gutter: '.gutter-sizer',
            }
        });
        $('.filter button').on('click', function () {
            var value = $(this).attr('data-name');
            $grid.isotope({
                filter: value
            });
        });
    
     //isotope filtering button active
     $('.filter-active button').click(function() {
      $('.filter-active button').removeClass('active-filter');
      $(this).addClass('active-filter');
     });
    
    // magnific-popup

    $('.project-pop').magnificPopup({
        delegate:'a',
        type: 'image',
        gallery:{
            enabled:true
        }   
    });


   
    
})(jQuery);

