$(function() {
  

  $('#cancel').on('click', function(){
	
    var confirmBox = $('.confirmBox');

    confirmBox.find('.message').text("Are you sure...?");
    confirmBox.find('.yes, .no').unbind().click( function() {
      confirmBox.hide();
    } );

    confirmBox.find('.yes').click( function() { 	
      location.href = "HoI.php";
    });

    confirmBox.show();
  });
	



	$('.approve').on('click', function(){
                                                                                                                                     
    var confirmBox = $('.confirmBox');
	var box =  $(this).closest('.course_container');

    confirmBox.find('.message').text("Reject this Course...?");
    confirmBox.find('.yes, .no').unbind().click( function() {
      confirmBox.hide();
    } );
	
	
    confirmBox.find('.yes').click( function() { 

    });

    confirmBox.show();
  });
	
});


