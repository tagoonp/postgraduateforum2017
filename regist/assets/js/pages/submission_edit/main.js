function createSessionAuthor(){
  $stage = $.post('../controller/set-session-id.php', { sessid: $('#val-sessid').val() }, function(){});
  $stage.always(function(){
    listAuthor();
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

function editAuthor_edit(auid){
  $('#btnAddAuthor').trigger('click');
  $stage = $.post('../controller/get-author.php', { auids: auid }, function(){}, "json");
  $stage.always(function(response){

    $('#val-auid').val(response[0].auid);
    $('#prefix').val(response[0].au_prefix);
    $('#val-fname').val(response[0].au_fname);
    $('#val-lname').val(response[0].au_lname);
    $('#val-email').val(response[0].au_email);
    $('#val-suggestions').val(response[0].au_department);
  }, "json");
}

$(function(){

  $('.js-validation-bootstrap-mini1').submit(function(){
    if(($('#prefix').val()!='') && ($('#val-fname').val()!='') && ($('#val-lname').val()!='') && ($('#val-email').val()!='') && ($('#val-suggestions').val()!='')){
      $stage = $.post('../controller/add-author-update.php', {
        auid: $('#val-auid').val(),
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
    $('#val-auid').val('');
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

function checkWordcount(){
  if(($('#wcount').val() >= 0) && ($('#wcount').val() <= 250)){
      $("#a").css('border', 'none');
    }else{
      $("#a").css('border', 'solid');
      $("#a").css('border-color', 'red');
      $("#a").css('border-width', '1px');
    }
}
