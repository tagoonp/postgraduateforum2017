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

  $('.js-form1').submit(function(){
    if($('#email').val()!=''){
      $stage = $.post('../controller/check-email.php', {email: $('#email').val()});
      $stage.always(function(response){
        if(response=='Y'){
          alert('This e-mail address already available!');
          $('#reqEmail').addClass('has-error');
          return false;
        }else{
          $('#reqEmail').removeClass('has-error');
          return true;
        }
      });
    }else{
      return false;
    }
  });
});
