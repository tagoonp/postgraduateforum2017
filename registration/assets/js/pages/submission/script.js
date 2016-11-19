$(document).ready(function(){



  $('.js-validation-bootstrap').submit(function(){
    var p = $( "#filepanel" );
    var position = p.position();
    var fwidth = $('#filepanel').width();

    $('#fileupload').css('top', (position.top) + 'px');

    if($('#filnenumber').val()==0){
      $('.dropzone').css('border-color', 'red');
      return false;
    }else{
      return true;
    }
  });

  $('#txt-title').keyup(function(){
    // alert();
    if($('#txt-title').val()!=''){
      var p = $( "#filepanel" );
      var position = p.position();
      var fwidth = $('#filepanel').width();

      $('#fileupload').css('top', (position.top ) + 'px');
    }else{
      // var p = $( "#filepanel" );
      // var position = p.position();
      // var fwidth = $('#filepanel').width();
      //
      // $('#fileupload').css('top', (position.top + 20) + 'px');
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
