(function( $ ) {
    $( document ).on( 'click', '.notice-get-started-class .notice-dismiss', function () {
        // Read the "data-notice" information to track which notice is being dismissed
        var type = $( this ).closest( '.notice-get-started-class' ).data( 'notice' );
        
        // Make an AJAX call
        $.ajax( ajaxurl, {
            type: 'POST',
            data: {
                action: 'titan_event_management_dismissable_notice',
                type: type,
                wpnonce: titan_event_management.wpnonce // Make sure you localize the nonce
            }
        });
    });
})( jQuery );