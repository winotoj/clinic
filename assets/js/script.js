
$(document).ready(function() {
    $('#contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            first_name: {
                validators: {
                        stringLength: {
                        min: 2,
                        max: 50
                    },
                        notEmpty: {
                        message: 'Please enter your First Name'
                    }
                }
            },
             last_name: {
                validators: {
                     stringLength: {
                        min: 2,
                        max: 50
                    },
                    notEmpty: {
                        message: 'Please enter your Last Name'
                    }
                }
            },
                         email: {
                validators: {
                    notEmpty: {
                        message: 'Please enter your Email Address'
                    },
                    emailAddress: {
                        message: 'Please enter a valid Email Address'
                    }
                }
            },
                        street: {
                validators: {
                     stringLength: {
                        min: 4,
                        max: 50
                    },
                    notEmpty: {
                        message: 'Please enter your Street'
                    }
                }
            },
                        postal: {
                validators: {
                     stringLength: {
                        min: 6,
                        max:7
                    },
                    notEmpty: {
                        message: 'Please enter your Postal Code'
                    }
                }
            },
            	sin: {
                validators: {
                     stringLength: {
                        min: 9,
                        max: 11
                    },
                    notEmpty: {
                        message: 'Please enter your SIN number'
                    }
                }
            },
			 user_password: {
                validators: {
                     stringLength: {
                        min: 6,
                        max: 50
                    },
                    notEmpty: {
                        message: 'Please enter your Password'
                    },
                    identical:{
                        field: 'confirm_password',
                        message: 'Password do not match'
                    }
                }
            },
            confirm_password: {
                validators: {
                   
                    identical: {
                        field: 'user_password',
                        message: 'Password do not match'
                    }
                }
            },
            
            
            contact_no: {
                validators: {
                  stringLength: {
                        min: 10, 
                        max: 15,
                    notEmpty: {
                        message: 'Please enter your Phone No.'
                     }
                }
            },
			 department: {
                validators: {
                    notEmpty: {
                        message: 'Please select your Department/Office'
                    }
                }
            }
                }
            }
        })
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#contact_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});

//login

    // The "getFormData()" function retrieves the names and values of each input field in the form; 

    function getFormData(form) {
      var data = {};
      $(form).find('input, select').each(function() {
        if (this.tagName.toLowerCase() == 'input') {
          if (this.type.toLowerCase() == 'checkbox') {
            data[this.name] = this.checked;
          } else if (this.type.toLowerCase() != 'submit') {
            data[this.name] = this.value;
          }
        } else {
          data[this.name] = this.value;
        }
      });
      return data;
    }

    // The "addFormError()" function, when called, adds the "error" class to the form-group that wraps around the "formRow" attribute;

    function addFormError(formRow, errorMsg) {
      var errorMSG = '<span class="error-msg">' + errorMsg + '</span>';
      $(formRow).parents('.form-group').addClass('has-error');
      $(formRow).parents('.form-group').append(errorMSG);
      $('#dialog').removeClass('dialog-effect-in');
      $('#dialog').addClass('shakeit');
      setTimeout(function() {
        $('#dialog').removeClass('shakeit');
      }, 300);
    }

    // FORM HANDLER:

    // form_name - This attribute ties the form-handler function to the form you want to submit through ajax. Requires an ID (ex: #myfamousid)
    // custom_validation - 

    function form_handler(form_name, custom_validation, success_message, error_message, success_function, error_function) {
      $(form_name).find('input[type="submit"]').on('click', function(e) { // if submit button is clicked

        window.onbeforeunload = null; // cancels the alert message for unsaved changes (if such function exists)

        $(form_name).find('.form-group .error-msg').remove();
        var submitButton = this;
        submitButton.disabled = true; // Disables the submit buttton until the rows pass validation or we get a response from the server.

        var form = $(form_name)[0];
        // The custom validation function must return true or false.
        if (custom_validation != null) {
          if (!custom_validation(form, getFormData(form))) {
            submitButton.disabled = false;
            return false;
          }
        }
        e.preventDefault(); //STOP default action
      });
      $(document).click(function(e) { // Whenever the user clicks inside the form, the error messages will be removed.
        if ($(e.target).closest(form_name).length) {
          $(form_name).find('.form-group').removeClass('has-error');
          setTimeout(function() {
            $(form_name).find('.form-group .error-msg').remove();
          }, 300);
        } else {
          return
        }
      });
    }

    // LOGIN FORM: Validation function
    function validate_login_form(form, data) {
      if (data.user_username == "") {
        // if username variable is empty
        addFormError(form["user_username"], 'The username is invalid');
        return false; // stop the script if validation is triggered
      }

      if (data.user_password == "") {
        // if password variable is empty
        addFormError(form["user_password"], 'The password is invalid');
        return false; // stop the script if validation is triggered
      }

      $('#dialog').removeClass('dialog-effect-in').removeClass('shakeit');
      $('#dialog').addClass('dialog-effect-out');

      $('#successful_login').addClass('active');
      //return true;
    }

    // REGISTRATION FORM: Validation function
    function validate_registration_form(form, data) {
      if (data.user_username == "") {
        // if username variable is empty
        addFormError(form["user_username"], 'The username is invalid');
        return false; // stop the script if validation is triggered
      }

      if (data.user_password == "") {
        // if password variable is empty
        addFormError(form["user_password"], 'The password is invalid');
        return false; // stop the script if validation is triggered
      }

      if (data.user_cnf_password == "" || data.user_password != data.user_cnf_password) {
        // if password variable is empty
        addFormError(form["user_cnf_password"], "The passwords don't match");
        return false; // stop the script if validation is triggered
      }

      if (!data.user_terms) {
        // if password variable is empty
        addFormError(form["user_terms"], "You need to read and accept the Terms and Conditions before proceeding");
        return false; // stop the script if validation is triggered
      }
      
      $('#dialog').removeClass('dialog-effect-in').removeClass('shakeit');
      $('#dialog').addClass('dialog-effect-out');
      
      $('#successful_registration').addClass('active');
      //return true;
    }

    form_handler("#login_form", validate_login_form, null, null, null, null, null, null);
    form_handler("#register_form", validate_registration_form, null, null, null, null, null, null);

    var dialogBox = $('#dialog');

    dialogBox.on('click', 'a.user-actions', function() {
      dialogBox.toggleClass('flip');
    });

    $('#successful_login,#successful_registration').on('click', 'a.dialog-reset', function() {
      $('#successful_login,#successful_registration').removeClass('active');
      dialogBox.removeClass('dialog-effect-out').addClass('dialog-effect-in');
      document.getElementById('login_form').reset();
      document.getElementById('register_form').reset();
    });


