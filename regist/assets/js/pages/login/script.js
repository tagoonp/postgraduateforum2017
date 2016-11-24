$(document).ready(function(){



  $('.js-validation-bootstrap').submit(function(){


    if($('#filnenumber').val()==0){
      $('.dropzone').css('border-color', 'red');
      return false;
    }else{
      return true;
    }
  });

  // $('#topic_type').change(function(){
  //   var p = $( "#filepanel" );
  //   var position = p.position();
  //   var fwidth = $('#filepanel').width();
  //
  //   $('#fileupload').css('top', (position.top ) + 'px');
  // }

  $('.form-control').change(function(){
    // alert();
    var p = $( "#filepanel" );
    var position = p.position();
    var fwidth = $('#filepanel').width();

    $('#fileupload').css('top', (position.top - 10) + 'px');

  });
});
