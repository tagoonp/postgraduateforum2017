$(function(){
  // Toggle participant status
  $('#status').change(function(){
    if($('#status').val()=='99'){
      $('#status_other').val('');
      $('.statusOption').show();
    }else{
      $('.statusOption').hide();
      $('#status_other').val('-');
    }
  });

  // Toggle accommodation
  $('#accommodation').change(function(){
    if($('#accommodation').val()==99){
      $('#accommodation_other').val('');
      $('.accommodationOption').show();
    }else{
      $('.accommodationOption').hide();
      $('#accommodation_other').val('-');
    }
  });

  // Toggle travel
  $('#travel_type').change(function(){
    if($('#travel_type').val()==99){
      $('#travel_type_other').val('');
      $('.travelOption').show();
    }else{
      $('.travelOption').hide();
      $('#travel_type_other').val('-');
    }
  });

  $('#email').blur(function(){
    if($('#email').val()!=''){
      $jqxhr = $.post('../controller/check-email-2.php', {email: $('#email').val()}, function(){})
                .always(function(response){

                  if(response=='Y'){
                    alert('This e-mail address already available!');
                    $('#reqEmail').addClass('has-error');
                    $('#reqEmail').focus();
                  }else{
                    $('#reqEmail').removeClass('has-error');
                  }

                });
    }else{
      return "false";
    }
  });

  // var checkBeforeSubmit = function(){
  //   if($('#email').val()!=''){
  //     $jqxhr = $.post('../controller/check-email-2.php', {email: $('#email').val()}, function(){})
  //               .always(function(response){
  //                 // console.log(response);
  //                 if(response!='N'){
  //                   $('#reqEmail').removeClass('has-error');
  //                   $('#reqEmail').focus();
  //                   return false;
  //                 }else {
  //                   return true;
  //                 }
  //               });
  //   }else{
  //     return false;
  //   }
  // }

  // $('.js-form1').submit(function(){
  //   var checkingNum = 0;
  //   $emailboxcheck = 0;
  //   if($('#email').val()!=''){
  //
  //     $jqxhr = $.post('../controller/check-email-2.php', {email: $('#email').val()}, function(){})
  //               .always(function(response){
  //                 // console.log(response);
  //                 if(response!='N'){
  //                   $('#reqEmail').removeClass('has-error');
  //                   $('#reqEmail').focus();
  //                   return false;
  //                 }
  //               });
  //
  //               $jqxhr.always(function(response){
  //                 // console.log(response);
  //                 if(response!='N'){
  //                   $('#reqEmail').removeClass('has-error');
  //                   $('#reqEmail').focus();
  //                   return false;
  //                 }
  //               });
  //
  //
  //
  //   }else{
  //     return false;
  //   }
  //
  //
  // });
});

function checkBeforeSubmit(){

}
