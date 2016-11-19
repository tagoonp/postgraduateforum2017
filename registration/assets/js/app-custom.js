// Below is an example of function and its initialization
var AppCustom = function() {
	var showAppName = function() {
		// console.log( 'AppUI - Admin & Frontend template' );
	};

	return {
		init: function() {
			showAppName();
		}
	}
}();

// Initialize AppCustom when page loads
jQuery( function() {
	AppCustom.init();
});

function delete_confirm(url){
	swal({
	  title: "Are you sure?",
	  text: "You will not be able to recover this imaginary file!",
	  type: "warning",
	  showCancelButton: true,
	  confirmButtonColor: "#DD6B55",
	  confirmButtonText: "Yes, delete it!",
	  closeOnConfirm: false
	},
	function(){
	  window.location = url;
	});
}

function msg_confirm(msg, url){
	swal({
	  title: "Are you sure?",
	  text: msg,
	  type: "warning",
	  showCancelButton: true,
	  confirmButtonColor: "#0670bd",
	  confirmButtonText: "Submit",
	  closeOnConfirm: false
	},
	function(){
	  window.location = url;
	});
}
