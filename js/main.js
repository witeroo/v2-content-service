"use strict";

jQuery(document).ready(function($) {
    // mobile menu
    const $hamburger = $(".hamburger");
    $hamburger.click(function(e) {
        $hamburger.toggleClass("is-active");
        // Do something else, like open/close menu
        $("#navbar-nav").toggleClass("open")
    });


    // toggle make blog nav sticky
    if ($('nav.blog-nav').offset()) {
        const blogNav = $('nav.blog-nav').offset().top - 88;

        $(document).scroll(() => {
            if (blogNav < $(window).scrollTop()) {
                $('nav.blog-nav').addClass('sticky');
            } else {
                $('nav.blog-nav').removeClass('sticky');
            }
        });
    }



    // toggle display blog nav
    if ($('.navbar-drop-btn')) {
        $('.navbar-drop-btn').click(function(e) {
            e.preventDefault();
            $(this).next('.navbar').toggle();
        })
    }



    // article section mobile scroll
    if ($('.articles-indicators .indicator')) {

        $('.articles-indicators .indicator').click(function() {
            const singleArticleWidth = $('.article-cards-row .article-card-item').width();

            let offset = singleArticleWidth * $(this).index();

            $('.articles .articles-container, .blogs .recent-blogs-container').scrollLeft(offset);
        });

        $($('.articles-indicators .indicator')[1]).click();


        function activateArticleIndicator(indicator) {
            $('.articles-indicators .indicator.active').removeClass('active');
            $(indicator).addClass('active');
        }


        $('.articles-container').scroll(function() {
            const singleArticleWidth = $('.article-cards-row .article-card-item').width();
            let articlesScrollOffset = $('.articles-container').scrollLeft();

            if (articlesScrollOffset < singleArticleWidth) {
                activateArticleIndicator($('.articles-indicators .indicator')[0]);
            } else if ((articlesScrollOffset >= singleArticleWidth) && articlesScrollOffset < singleArticleWidth * 2) {
                activateArticleIndicator($('.articles-indicators .indicator')[1]);
            } else {
                activateArticleIndicator($('.articles-indicators .indicator')[2]);
            }

        });
    }



    // subscription form popup
    if ($('#subscribe-btn')) {
        // show subscription form container
        $('#subscribe-btn').click(() => {
            $('.subscription-form-container').show();
        });

        // switch form
        $('#subscriber-type').change(function() {
            if ($(this).val() == 'Individual') {
                $('#business-form').slideUp();
                $('#individual-form').slideDown();
            } else if ($(this).val() == 'Business') {
                $('#individual-form').slideUp();
                $('#business-form').slideDown();
            }
        });

        // hide subscription form container
        $('.subscription-form-container .close-btn').click(() => {
            $('.subscription-form-container').hide();
        });


        function validateSubscriptionFormInputFields() {
            let form;
            if ($('#subscriber-type').val() == 'Individual') {
                form = $('#individual-form');
            } else if ($('#subscriber-type').val() == 'Business') {
                form = $('#business-form');
            }

            if (form) {
                let allFilled = true;
                $(form).find('input, select').each(function() {
                    if ($(this).val() == '') {
                        allFilled = false;
                        return false;
                    }
                });

                if (allFilled) {
                    form.find('input[type="submit"]').attr('disabled', false).css('opacity', 1);
                } else {
                    form.find('input[type="submit"]').attr('disabled', true).css('opacity', 0.5);
                }
            }
        }
        $('.subscription-body form input, .subscription-body form select').on('focus click change keyup', validateSubscriptionFormInputFields);
    }
});