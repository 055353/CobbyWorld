/**
 * Remove activate button and replace with activation in progress button.
 *
 * @package NewsArc
 */

/**
 * Import button
 */
jQuery(document).ready(function ($) {

    $('.btn-get-started').click(function (e) {
        e.preventDefault();

        $(this).addClass('updating-message').text(newsarcRedirectDemoPage.btn_text);

        var btnData = {
            action: 'import_button',
            security: newsarcRedirectDemoPage.nonce,
        };

        $.ajax({
            type: "POST",
            url: ajaxurl,
            data: btnData,
            success: function (response) {
                var redirectUri,
                    dismissNonce,
                    extraUri = '',
                    btnDismiss = $('.newsarc-message-close');

                if (btnDismiss.length) {
                    dismissNonce = btnDismiss.attr('href').split('_newsarc_notice_nonce=')[1];
                    extraUri = '&_newsarc_notice_nonce=' + dismissNonce;
                }

                redirectUri = response.redirect;
                console.log(redirectUri)
                window.location.href = redirectUri;
            },
            error: function (xhr, ajaxOptions, thrownError) {
                console.log(thrownError);
            }
        });
    });
});

jQuery(document).ready(function ($) {
    $('#dashboard-changelog-button').click(function (e) {

        e.stopPropagation();
        $('#newsarc-dashboard-offcanvas').addClass('open');
        $('.wrap').addClass('overlay');
    });


    $('#dialog-close').click(function (e) {
        e.stopPropagation();
        $('#newsarc-dashboard-offcanvas').removeClass('open');
        $('.wrap').removeClass('overlay');
    });

    $(document).on('click', function (e) {
        if (!$('#newsarc-dashboard-offcanvas').is(e.target) && $('#newsarc-dashboard-offcanvas').has(e.target).length === 0) {
            $('#newsarc-dashboard-offcanvas').removeClass('open');
            $('.wrap').removeClass('overlay');
        }
    });
});

jQuery(document).ready(function ($) {

    var adminUrl = newsarcRedirectDemoPage.admin_url;

    var targetUrl = adminUrl + 'themes.php?page=newsarc';

    var currentPage = window.location.href;

    $('.dashboard-header-nav ul li').each(function () {
        var pageURL = $(this).find('a').attr('href');
        $
        if (currentPage === pageURL) {
            $(this).addClass('active');
        }
    });

    if (currentPage === targetUrl) {
        $('.dashboard-header-nav ul li:first').addClass('active');
    }
});

jQuery(document).ready(function ($) {
    $('.install-plugin, .activate-plugin').on('click', function (e) {
        e.preventDefault();
        var button = $(this);
        var plugin = button.data('plugin');
        var pluginSlug = button.data('slug');
        var action = button.hasClass('install-plugin') ? 'install_plugin' : 'activate_plugin';
        var data = {
            'action': action,
            'plugin': plugin,
            'slug': pluginSlug,
            'security': newsarcRedirectDemoPage.nonce,
        };

        var originalText = button.html();
        button.html('<i class="fa fa-spinner fa-spin"></i> ' + newsarcRedirectDemoPage.btn_text);

        $.post(newsarcRedirectDemoPage.ajaxurl, data, function (response) {
            button.html('Activated');

            if (response.success) {
                if (button.hasClass('activate-plugin') || button.hasClass('install-plugin')) {
                    button.removeClass('activate-plugin install-plugin');
                    button.addClass('activated-plugin');

                    button.parent('span').addClass('activated');
                }
            } else {

            }
        });
    });
});
