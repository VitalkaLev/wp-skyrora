jQuery(function($){
	var button = $( '#load-more button' ),
        $count = button.data( 'count' );
        $offset = 0;
        alert('click');
	button.on("click", function( event ) {
        
		event.preventDefault();
        
        $offset++;
		$.ajax({
			type : 'POST',
			url : swipex.ajaxurl,
			data : {
				action : 'load-more',
                count : $count,
                offset: $offset,
                beforeSend : function ( xhr ) {
                    button.text('Loading...');
                },
			},
            

			success : function( data ){
                $('.js-row--ajax').append(data);
                $limit = $count / 10;
                if($offset >= $limit){
                    $("#load-more button").html('Limit');
                    $("#load-more button").attr('disabled',true);
                    $("#load-more button").css('background', 'black');
                    $("#load-more button").css('opacity', '0.8');
                    $("#load-more button").css('color', '#ffffff');
			    }
            }
		});
 
	} );
});