var p = $( "#filepanel" );
var position = p.position();
var fwidth = $('#filepanel').width();

$('#fileupload').css('top', (position.top) + 'px');
$('#fileupload').css('width', (fwidth + 30) + 'px');

function delete_tempfile(fid){
  $stage = $.post('controller/delete_file.php',{file_id: fid});
  $stage.always(function(result){
    if(result=='Y'){
      var response = $.post('controller/check_upload_file.php');
      response.always(function(res){
        $('#uploadResult').html(res);
      });


      var response2 = $.post('controller/check_upload_file2.php');
      response2.always(function(res){
        $('#filnenumber').val(res);
        // console.log(res);
        if(res==0){
          $('#uploadResult').text('No file upload ...');
        }
      });

    }else{
      // console.log(result);
      alert('Can not delete file ...');
    }
  });
}
