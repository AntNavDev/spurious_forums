$( document ).ready( function() {
    $( '.edit_comment_button' ).one( 'click', function( event ) {
        event.preventDefault();
        $(this).parent().find( '.comment_style' ).attr( 'contentEditable', 'true' );
        $(this).parent().addClass( 'white_background' );
        $(this).parent().find( '.fa-pencil-square-o' ).removeClass( 'fa-pencil-square-o' ).addClass( 'fa-save' ).text( ' save' );
        $(this).parent().find( '.edit_comment_button' ).removeClass( 'edit_comment_button' ).addClass( 'save_comment_button' );//.off( 'click' );
        $(this).parent().find( '.delete_comment_button' ).removeClass( 'delete_comment_button' ).addClass( 'white_background' );
    } );

    $( 'div[name="comment"]' ).keyup( function( event ) {
        // event.preventDefault();
        $( this ).parent().find( '.comment_value' ).val( $( this ).parent().find( 'div[name="comment"]' ).text() );
    } );
} );
