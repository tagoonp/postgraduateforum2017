/*
Document: base_forms_validation.js
Author: Rustheme
Description: Custom JS code used in Form Validation Page
 */

var BaseFormValidation = function() {
    // Init Bootstrap Forms Validation: https://github.com/jzaefferer/jquery-validation
    var initValidationBootstrap = function() {
        jQuery( '.js-validation-bootstrap' ).validate({
            errorClass: 'help-block animated fadeInDown',
            errorElement: 'div',
            errorPlacement: function( error, e ) {
                jQuery(e).parents( '.form-group > div' ).append( error );
            },
            highlight: function(e) {
                jQuery(e).closest( '.form-group' ).removeClass( 'has-error' ).addClass( 'has-error' );
                jQuery(e).closest( '.help-block' ).remove();
            },
            success: function(e) {
                jQuery(e).closest( '.form-group' ).removeClass( 'has-error' );
                jQuery(e).closest( '.help-block' ).remove();
            },
            rules: {
                'txt-title': {
                    required: true
                },
                'reg_type': {
                    required: true
                },
                'topic_type': {
                    required: true
                },
                'pname': {
                    required: true
                }
            },
            messages: {
                'txt-title': {
                    required: 'Please enter title ...'
                },
                'reg_type': {
                    required: 'Please choose presentation type ...'
                },
                'topic_type': {
                    required: 'Please choose topic ...'
                },
                'pname': {
                    required: 'Please center presenter name ...'
                }
            }
        });
    };

    // Init Bootstrap Forms Validation: https://github.com/jzaefferer/jquery-validation
    var initValidationBootstrap_mini1 = function() {
        jQuery( '.js-validation-bootstrap-mini1' ).validate({
            errorClass: 'help-block animated fadeInDown',
            errorElement: 'div',
            errorPlacement: function( error, e ) {
                jQuery(e).parents( '.form-group > div' ).append( error );
            },
            highlight: function(e) {
                jQuery(e).closest( '.form-group' ).removeClass( 'has-error' ).addClass( 'has-error' );
                jQuery(e).closest( '.help-block' ).remove();
            },
            success: function(e) {
                jQuery(e).closest( '.form-group' ).removeClass( 'has-error' );
                jQuery(e).closest( '.help-block' ).remove();
            },
            rules: {
                'prefix': {
                    required: true
                },
                'val-fname': {
                    required: true
                },
                'val-lname': {
                    required: true
                },
                'val-email': {
                    required: true,
                    email: true
                },
                'val-suggestions': {
                    required: true
                }
            },
            messages: {
              'prefix': {
                  required: 'Please choose prefix...'
              },
              'val-fname': {
                  required: 'Please enter first name...'
              },
              'val-lname': {
                  required: 'Please enter surname...'
              },
              'val-email': {
                  required: 'Please enter e-mail address...',
                  email: 'Please enter valid e-mail address...'
              },
              'val-suggestions': {
                  required: 'Please enter department / university / institute information...'
              }
            }
        });
    };

    return {
        init: function () {
            // Init Bootstrap Forms Validation
            initValidationBootstrap();
            initValidationBootstrap_mini1();
        }
    };
}();

// Initialize when page loads
jQuery( function() {
	BaseFormValidation.init();
});
