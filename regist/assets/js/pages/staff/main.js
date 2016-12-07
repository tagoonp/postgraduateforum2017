$(function(){
  // $('.js-validation-bootstrap-mini1').submit(function(){
  //
  //
  // });
});

function checkConfirm(){
  swal({
    title: "Are you sure?",
    text: "You will not be able to recover this imaginary file!",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Yes, delete it!",
    cancelButtonText: "No, cancel plx!",
    closeOnConfirm: true,
    closeOnCancel: true
  },
  function(isConfirm){
    if (isConfirm) {

      $stage = $.post('../controller/reject.php', { sid: $('#txt-sid').val(), msg: $('#txt-msg').val()} );
      $stage.always(function(response){
        console.log(response);
        if(response=='Y'){
          window.location = '../staff/slist.php';
        }else{
          swal("Sorry!", "Can not do progress!", "danger");
        }
      });

      return false;
    } else {
      return false;
    }
  });
  return false;
}
