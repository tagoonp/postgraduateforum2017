/*
Document: base_forms_wizard.js
Author: Rustheme
Description: Custom JS code used in Form Wizard Page
 */

var BaseFormWizard = function() {
	// Init simple wizard: http://vadimg.com/twitter-bootstrap-wizard-example/
	var initWizardSimple = function() {
		jQuery( '.js-wizard-simple' ).bootstrapWizard({
			'tabClass': '',
			'firstSelector': '.wizard-first',
			'previousSelector': '.wizard-prev',
			'nextSelector': '.wizard-next',
			'lastSelector': '.wizard-last',
			'onTabShow': function( $tab, $navigation, $index ) {
				var	$total				= $navigation.find( 'li' ).length,
						$current			= $index + 1,
						$percent			= ( $current/$total ) * 100,

						// Get core wizard elements
						$wizard			= $navigation.parents( '.card' ),
						$progress		= $wizard.find( '.wizard-progress > .progress-bar' ),
						$btnPrev			= $wizard.find( '.wizard-prev' ),
						$btnNext		= $wizard.find( '.wizard-next' ),
						$btnFinish		= $wizard.find( '.wizard-finish' );

				// Update progress bar if there is one
				if ( $progress ) {
					$progress.css({ width: $percent + '%' });
				}

				// If it's the last tab then hide the last button and show the finish instead
				if ( $current >= $total ) {
					$btnNext.hide();
					$btnFinish.show();
				} else {
					$btnNext.show();
					$btnFinish.hide();
				}
			}
		});
	};

	// Init wizards with validation: http://vadimg.com/twitter-bootstrap-wizard-example/
	var initWizardValidation = function() {
		// Get forms
		var $form1 = jQuery( '.js-form1' );
		var $form2 = jQuery( '.js-form2' );

		// Prevent forms from submitting on enter key press
		$form1.add( $form2 ).on( 'keyup keypress', function (e) {
			var code = e.keyCode || e.which;

			if ( code === 13 ) {
				e.preventDefault();
				return false;
			}
		});

		// Init form validation on classic wizard form
		var $validator1 = $form1.validate({
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
				'val-terms': {
						required: true
				},
				'pre_type': {
						required: true
				},
				'reg_type': {
						required: true
				},
				'prefix': {
						required: true
				},
				'fname': {
						required: true
				},
				'lname': {
						required: true
				},
				'university': {
						required: true
				},
				'status': {
						required: true
				},
				'status_other': {
						required: true
				},
				'address': {
						required: true
				},
				'country': {
						required: true
				},
				'phone': {
						required: true
				},
				'email': {
						required: true,
						email: true
				},
				'accommodation': {
						required: true
				},
				'accommodation_other': {
						required: true
				},
				'arr_date': {
						required: true
				},
				'arr_time1': {
						required: true
				},
				'arr_time2': {
						required: true
				},
				'dept_date': {
						required: true
				},
				'dept_time1': {
						required: true
				},
				'dept_time2': {
						required: true
				},
				'travel_type': {
						required: true
				}
			},
			messages: {

				'val-terms': 'You must agree to the service terms!',
				'pre_type': {
						required: 'Please choose participation type...'
				},
				'reg_type': {
						required: 'Please choose registration type...'
				},
				'prefix': {
						required: 'Please choose your prefix...'
				},
				'fname': {
						required: 'Please enter your first name...'
				},
				'lname': {
						required: 'Please enter your surname...'
				},
				'university': {
						required: "Please enter usiversity or insitute..."
				},
				'status': {
						required: 'Please choose status...'
				},
				'status_other': {
						required: 'Please enter other status info...'
				},
				'address': {
						required: 'Please enter your address...'
				},
				'country': {
						required: 'Please choose your country...'
				},
				'phone': {
						required: 'Please enter your phone number...'
				},
				'email': {
						required: 'Please enter your e-mail address...',
						email: 'Please enter valid e-mail address...'
				},
				'accommodation': {
						required: 'Please choose your arranged accommodation...'
				},
				'accommodation_other': {
						required: 'Please enter accommodation name...'
				},
				'arr_date': {
						required: 'Please choose arraival date...'
				},
				'arr_time1': {
						required: 'Choose one...'
				},
				'arr_time2': {
						required: 'Choose one...'
				},
				'dept_date': {
						required: 'Please choose depart date...'
				},
				'dept_time1': {
						required: 'Choose one...'
				},
				'dept_time2': {
						required: 'Choose one...'
				},
				'travel_type': {
						required: 'Please choose travel type...'
				}
			}
		});

		// Init form validation on the other wizard form
		var $validator2 = $form2.validate({
			errorClass: 'help-block text-right animated fadeInDown',
			errorElement: 'div',
			errorPlacement: function(error, e) {
				jQuery(e).parents( '.form-group .form-material' ).append(error);
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
				'validation-firstname': {
					required: true,
					minlength: 2
				},
				'validation-lastname': {
					required: true,
					minlength: 2
				},
				'validation-email': {
					required: true,
					email: true
				},
				'validation-details': {
					required: true,
					minlength: 5
				},
				'validation-city': {
					required: true
				},
				'validation-skills': {
					required: true
				},
				'validation-terms': {
					required: true
				}
			},
			messages: {
				'validation-firstname': {
					required: 'Please enter a firstname',
					minlength: 'Your firtname must consist of at least 2 characters'
				},
				'validation-lastname': {
					required: 'Please enter a lastname',
					minlength: 'Your lastname must consist of at least 2 characters'
				},
				'validation-email': 'Please enter a valid email address',
				'validation-details': 'Let us know a few thing about you',
				'validation-skills': 'Please select a skill!',
				'validation-terms': 'You must agree with the service terms!'
			}
		});

		// Init classic wizard with validation
		jQuery( '.js-wizard-classic-validation' ).bootstrapWizard({
			'tabClass': '',
			'previousSelector': '.wizard-prev',
			'nextSelector': '.wizard-next',
			'onTabShow': function( $tab, $nav, $index ) {
				var $total			= $nav.find( 'li' ).length;
				var $current		= $index + 1;

				// Get core wizard elements
				var $wizard		= $nav.parents( '.card' );
				var $btnNext		= $wizard.find( '.wizard-next' );
				var $btnFinish	= $wizard.find( '.wizard-finish' );

				// If it's the last tab then hide the last button and show the finish instead
				if ( $current >= $total ) {
					$btnNext.hide();
					$btnFinish.show();
				} else {
					$btnNext.show();
					$btnFinish.hide();
				}
			},
			'onNext': function( $tab, $navigation, $index ) {
				var $valid = $form1.valid();

				if(!$valid) {
					$validator1.focusInvalid();

					return false;
				}
			},
			onTabClick: function( $tab, $navigation, $index ) {
		return false;
			}
		});

		// Init wizard with validation
		jQuery( '.js-wizard-validation' ).bootstrapWizard({
			'tabClass': '',
			'previousSelector': '.wizard-prev',
			'nextSelector': '.wizard-next',
			'onTabShow': function( $tab, $nav, $index ) {
				var $total			= $nav.find( 'li' ).length;
				var $current		= $index + 1;

				// Get core wizard elements
				var $wizard		= $nav.parents( '.card' ),
					$btnNext		= $wizard.find( '.wizard-next' ),
					$btnFinish		= $wizard.find( '.wizard-finish' );

				// If it's the last tab then hide the last button and show the finish instead
				if ( $current >= $total ) {
					$btnNext.hide();
					$btnFinish.show();
				} else {
					$btnNext.show();
					$btnFinish.hide();
				}
			},
			'onNext': function( $tab, $navigation, $index ) {
				var $valid = $form2.valid();

				if ( ! $valid ) {
					$validator2.focusInvalid();

					return false;
				}
			},
			onTabClick: function( $tab, $navigation, $index ) {
				return false;
			}
		});
	};

	return {
		init: function () {
			// Init simple wizard
			initWizardSimple();

			// Init wizards with validation
			initWizardValidation();
		}
	};
}();

// Initialize when page loads
jQuery( function() {
	BaseFormWizard.init();
});
