(function($) {

    $(document).ready(function() {

        var queryString = new URI().query(true);

        if (typeof queryString.folder_id !== 'undefined' && queryString.folder_id !== false) {

            $.each(['#gg-btn-new-folder'], function(index, selector) {
                $(selector).attr('disabled', 'disabled');
            });

            $('button[data-folder-id]').attr('data-folder-id', queryString.folder_id);
        }

    });

})(jQuery);
