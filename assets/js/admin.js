(function ($) {

    $($).ready(function () {

        $('button#uploadlogo').click(function (e) {
            e.preventDefault();


            let medialibrery = wp.media({
                title: 'Select a Logo',
                button: {
                    text: 'Insert a Logo',
                }
            });

            medialibrery.open();

            medialibrery.on('select', function () {

                let image = medialibrery.state().get('selection').first().toJSON();
                $('input.logolink').val(image.url)
                $('img#logopreview').attr('src', image.url);
            });


        });

    });


})(jQuery)