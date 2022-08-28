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
    function checkSubscriptionActionCookie() {
        let name = "subscriptionActionTaken=";
        let ca = document.cookie.split(';');
        for (let i = 0; i < ca.length; i++) {
            let c = ca[i];
            if (c.indexOf(name) == 0) {
                return true;
            }
        }
        return false;
    }

    let subscriptionActionTaken = checkSubscriptionActionCookie();

    let subTriggerOffset = 0;
    if ($('section.articles').offset()) {
        subTriggerOffset = $('section.articles').offset().top;
    } else if ($('section.subscribe').offset()) {
        subTriggerOffset = $('section.subscribe').offset().top - 700;
    }
    $(document).scroll(function() {
        if (!subscriptionActionTaken) {
            if ($(window).scrollTop() >= subTriggerOffset) {
                $('.modal.subscription-popup-container').attr('style', 'display:flex;');
            }
        }
    });

    function setSubscriptionActionCookie() {
        document.cookie = "subscriptionActionTaken=true;path=/";
        console.log('cookie set');
    }
    $('.modal.subscription-popup-container .btn, .modal.subscription-popup-container .close-btn').click(() => {
        $('.modal.subscription-popup-container').hide();
    })
    $('.modal.subscription-popup-container .close-btn').click(setSubscriptionActionCookie);



    if ($('#subscribe-btn')) {
        // show subscription form container
        $('#subscribe-btn, #popup-subscribe-btn').click(() => {
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

        // hide modal container
        $('.modal .close-btn').click(() => {
            $('.modal').hide();
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



    // state cities dropdown
    let payload = { 'action': 'state_cities' };
    $('select[name="country"]').change(function() {
        let countryCode = $(this).find(':selected').attr('data-value');
        let stateOpts = $(this).parent().find('select[name="state"]');
        $(stateOpts).empty();

        if (countryCode) {
            payload.countryCode = countryCode;
            // $.getJSON('states-cities/' + countryCode + '.json', (data) => {
            $.getJSON(serverVars.ajaxUrl, payload, (data) => {
                let states = [];
                $(data).each(function() {
                    states.push('<option>' + $(this)[0].name + '</option>')
                })

                $(stateOpts).append('<option value="">State</option>' + states)
            })
        }
    })

    $('select[name="state"]').change(function() {
        let countryCode = $(this).parents('form').find('select[name="country"]').find(':selected').attr('data-value');
        payload.countryCode = countryCode;
        let state = $(this).val();
        let cityOpts = $(this).parent().find('select[name="city"]');
        $(cityOpts).empty();

        if (state) {
            // $.getJSON('states-cities/' + countryCode + '.json', (data) => {
            $.getJSON(serverVars.ajaxUrl, payload, (data) => {
                let jsonCities = data.find(jsonState => jsonState.name === state).cities;

                let cities = jsonCities.map((city) => {
                    return '<option>' + city + '</option>';
                });

                $(cityOpts).append('<option value="">City</option>' + cities)
            })
        }
    });


    // submit subscription form
    $(".subscription-form").submit(function(e) {
        e.preventDefault();

        $.post('https://dashboard.witeroo.com/api/subscriptions', $(this).serialize(), (data) => {
            if (data.success) {
                setSubscriptionActionCookie();
                $('#subscription-alert').removeClass('alert-danger').addClass('alert-success').text(data.message).show();
                $('.modal').delay(5000).hide(0);
            } else {
                if (data.errors) {
                    let errorMessages = '';
                    for (const error in data.errors) {
                        errorMessages += '<p>' + data.errors[error] + '</p>';
                    }
                    $('#subscription-alert').removeClass('alert-success').addClass('alert-danger').html(errorMessages).show()
                } else {
                    $('#subscription-alert').removeClass('alert-success').addClass('alert-danger').text(data.message).show();
                }
            }
        });
    });
});