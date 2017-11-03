
$(document).ready(function () {
    $('#nameregister').on('propertychange change click keyup input paste', function () {

        if ($('#nameregister').val().length < 2 || $('#nameregister').val().length > 50) {
            $('#lbl-name-register').css("visibility", "visible");
        } else {
            $('#lbl-name-register').css("visibility", "hidden");
        }
    });
    $('#email').on('propertychange change click keyup input paste', function () {        
        if ($('#email').val().length < 6 || $('#email').val().length > 250) {
            $('#lbl-email').css("visibility", "visible");
        } else {
            $('#lbl-email').css("visibility", "hidden");
        }
    });
    // only to check password length to check if serverside validation work or not
    $('#pass1').on('propertychange change click keyup input paste', function () {
        if ($('#pass1').val().length < 6 || $('#pass1').val().length > 250) {
            $('#lbl-pass1').css("visibility", "visible");
        } else {
            $('#lbl-pass1').css("visibility", "hidden");
        }
    });
   $('#pass2').on('propertychange change click keyup input paste', function () {
        if ($('#pass2').val().length < 6 || $('#pass2').val().length > 250) {
            $('#lbl-pass2').css("visibility", "visible");
        } else if($('#pass1').val()!= $('#pass2').val())
        {
            $('#lbl-pass1').css("visibility", "visible");
            $('#lbl-pass2').css("visibility", "visible");
        }else{
            $('#lbl-pass2').css("visibility", "hidden");
        }   
    });
});
$(document).ready(function(){
    $('#submit-register').submit(function(){
        if($('#lbl-name-register').is(":visible") || $('#lbl-email').is(":visible") ||
                $('#lbl-pass1').is(":visible") || $('#lbl-pass2').is(":visible")){
            return
        }
    });
});

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
                        max: 50,
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
                        max: 50,
                    },
                    notEmpty: {
                        message: 'Please enter your Last Name'
                    }
                }
            },
			 user_name: {
                validators: {
                     stringLength: {
                        min: 8,
                    },
                    notEmpty: {
                        message: 'Please enter your Username'
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
                        max: 50,
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
                        max:7,
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
                        max: 11,
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
                        max: 50,
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
                        min: 12, 
                        max: 12,
                    notEmpty: {
                        message: 'Please enter your Contact No.'
                     }
                }
            },
			 department: {
                validators: {
                    notEmpty: {
                        message: 'Please select your Department/Office'
                    }
                }
            },
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



