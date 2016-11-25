function createSessionAuthor(){
  $stage = $.post('../controller/create-author-session.php', function(){});
  $stage.always(function(response){
    if(response!='Y'){
      alert('Create session error!');
      window.location = '../';
    }else{
      listAuthor();
    }
  });
}

function listAuthor(){
  $stage = $.post('../controller/list-author-session.php', function(){});
  $stage.always(function(response){
    $('#resultSpan').html(response);
  });
}

function setPresenter(pname){
  $('#pname').val(pname);
}

function deleteAuthor(auid){
  $stage = $.post('../controller/delete-author.php', { auids: auid }, function(){});
  $stage.always(function(response){
    // console.log(response);
    listAuthor();
    $('#pname').val('');
  });
}

$(function(){

  $('.js-validation-bootstrap-mini1').submit(function(){
    if(($('#prefix').val()!='') && ($('#val-fname').val()!='') && ($('#val-lname').val()!='') && ($('#val-email').val()!='') && ($('#val-suggestions').val()!='')){
      $stage = $.post('../controller/add-author.php', {
        prefix: $('#prefix').val(),
        fname: $('#val-fname').val(),
        lname: $('#val-lname').val(),
        email: $('#val-email').val(),
        dept: $('#val-suggestions').val()
      } , function(){});

      $stage.always(function(response){
        listAuthor();
        $('#btnCloseModal').trigger('click');
      });

      return false;
    }else{
      return false;
    }
    return false;
  });

  $('.js-validation-bootstrap').submit(function(){
    if(($('#wcount').val()!='0') && ($('#wcount').val()<='250')){
      $("#a").css('border', 'none');
      // alert('Submittd');
      // return false;
      return true;
    }else{
      $("#a").css('border', 'solid');
      $("#a").css('border-color', 'red');
      $("#a").css('border-width', '1px');
      return false;
    }
  });

  $('#btnAddAuthor').click(function(){
    $('#prefix').val('');
    $('#val-fname').val('');
    $('#val-lname').val('');
    $('#val-email').val('');
    $('#val-suggestions').val('');
  });

  $('#btnSubmit').click(function(){
    if($('#wcount').val()=='0'){
      $("#a").css('border', 'solid');
      $("#a").css('border-color', 'red');
      $("#a").css('border-width', '1px');
    }else{
      $("#a").css('border', 'none');
    }

  });
});
