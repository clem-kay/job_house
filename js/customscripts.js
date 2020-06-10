$(document).ready(function() {

    // login password and email validation
    //starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms at login we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();

    //forgot passoord scripts
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms at login we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation2');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();

    //validation


    $('#forgot').click(function() {
        $('#forgot-password').toggle();
        $('.login-bottom').toggle();

    });

    //signup passsword validation

    $(function() {
        var $password = $(".userPassword[type='password']");
        var $passwordAlert = $(".password-alert");
        var $requirements = $(".requirements");
        var leng, bigLetter, num, specialChar;
        var $leng = $(".leng");
        var $bigLetter = $(".big-letter");
        var $num = $(".num");
        var $specialChar = $(".special-char");
        var specialChars = "!@#$%^&*()-_=+[{]}\\|;:'\",<.>/?`~";
        var numbers = "0123456789";
        var $repeatPass = $(".passRepeat[type = 'password'");

        $requirements.addClass("wrong");
        $password.on("focus", function() { $passwordAlert.show(); });

        $password.on("input blur", function(e) {
            var el = $(this);
            var val = el.val();
            $passwordAlert.show();

            if (val.length < 8) {
                leng = false;
            } else if (val.length > 7) {
                leng = true;
            }


            if (val.toLowerCase() == val) {
                bigLetter = false;
            } else { bigLetter = true; }

            num = false;
            for (var i = 0; i < val.length; i++) {
                for (var j = 0; j < numbers.length; j++) {
                    if (val[i] == numbers[j]) {
                        num = true;
                    }
                }
            }

            specialChar = false;
            for (var i = 0; i < val.length; i++) {
                for (var j = 0; j < specialChars.length; j++) {
                    if (val[i] == specialChars[j]) {
                        specialChar = true;
                    }
                }
            }

            console.log(leng, bigLetter, num, specialChar);

            if (leng == true && bigLetter == true && num == true && specialChar == true) {
                $(this).addClass("valid").removeClass("invalid");
                $requirements.removeClass("wrong").addClass("good");
                $passwordAlert.removeClass("alert-warning").addClass("alert-success");
            } else {
                $(this).addClass("invalid").removeClass("valid");
                $passwordAlert.removeClass("alert-success").addClass("alert-warning");

                if (leng == false) { $leng.addClass("wrong").removeClass("good"); } else { $leng.addClass("good").removeClass("wrong"); }

                if (bigLetter == false) { $bigLetter.addClass("wrong").removeClass("good"); } else { $bigLetter.addClass("good").removeClass("wrong"); }

                if (num == false) { $num.addClass("wrong").removeClass("good"); } else { $num.addClass("good").removeClass("wrong"); }

                if (specialChar == false) { $specialChar.addClass("wrong").removeClass("good"); } else { $specialChar.addClass("good").removeClass("wrong"); }
            }


            if (e.type == "blur") {
                $passwordAlert.hide();
            }
        });
        // $repeatPass.on("blur", function() {
        //     if (($("#userPassword").val()) != ($("#userPassordRep").val())) {
        //         $(this).addClass("valid").removeClass("invalid");
        //     }


        // });

        $("#userPassword").on("focusout", function() {
            if ($(this).val() != $("#userConfirmPassword").val()) {
                $("#userConfirmPassword").removeClass("valid").addClass("invalid");
            } else {
                $("#userConfirmPassword").removeClass("invalid").addClass("valid");
            }
        });

        $("#userConfirmPassword").on("keyup", function() {
            if ($("#userPassword").val() != $(this).val()) {
                $(this).removeClass("valid").addClass("invalid");
            } else {
                $(this).removeClass("invalid").addClass("valid");
            }
        });
    });

    $("#country_select").countrySelect();
    $("#country_selector").countrySelect({
        defaultStyling: "inside"
    });

    $('.sCountries').phonecode({
        setClass: 'phone'
    });

    // phone masking 
    $("input[id='userContact']").on("input", function() {
        $("input[id='userContact2']").val(destroyMask(this.value));
        this.value = createMask($("input[id='userContact2']").val());
    })

    function createMask(string) {
        console.log(string)
        return string.replace(/(\d{3})(\d{3})(\d{3})/, "$1-$2-$3");
    }

    function destroyMask(string) {
        console.log(string)
        return string.replace(/\D/g, '').substring(0, 9);
    }
    // ---ending bracket
    new WOW().init();

});