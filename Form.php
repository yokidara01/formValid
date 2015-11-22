
<!doctype html>
<html>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# object: http://ogp.me/ns/object# article: http://ogp.me/ns/article#">
    <meta charset="utf-8">
<title>Basic example - FormValidation</title>
<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
<meta http-equiv="Content-Language" content="en">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="FormValidation - The best jQuery validation plugin to validate form fields, support Bootstrap, Zurb Foundation, Pure, Semantic, UIKit frameworks">
<meta name="keywords" content="FormValidation, BootstrapValidator, form validation, form validate, form validator, jQuery validation plugin, jquery validate plugin, jquery validator plugin, Zurb Foundation validation, Pure validation, SemanticUI validation, UIKit validation, Skeleton validation, Bootstrap, Zurb Foundation, Pure, SemanticUI, UIKit, Skeleton">
<meta name="author" content="Nguyen Huu Phuoc">
<meta name="google-site-verification" content="FMmr8kYuIuW27-qJLOb1Z59OgiVgKNgAv4_eMARhIY8" />

<meta name="twitter:site" content="@formvalidation" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="FormValidation - The best jQuery validation plugin to validate form fields, support Bootstrap, Zurb Foundation, Pure, Semantic, UIKit frameworks" />
<meta name="twitter:title" content="Basic example - FormValidation" />
<meta name="twitter:image" content="http://formvalidation.io/asset/img/logo.png" />

<meta property="og:title" content="Basic example - FormValidation" />
<meta property="og:description" content="FormValidation - The best jQuery validation plugin to validate form fields, support Bootstrap, Zurb Foundation, Pure, Semantic, UIKit frameworks" />
<meta property="og:type" content="article" />
<meta property="og:url" content="http://formvalidation.io/download/tryit/bootstrap.html" />
<meta property="og:image" content="http://formvalidation.io/asset/img/logo.png" />
<meta property="og:site_name" content="FormValidation" />

<link rel="icon" type="image/x-icon" href="/asset/img/favicon.ico">
<link rel="stylesheet" href="//cdn.jsdelivr.net/fontawesome/4.2.0/css/font-awesome.min.css">
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">

<!--[if lt IE 9]>
<script src="//cdn.jsdelivr.net/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//cdn.jsdelivr.net/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-44786951-2']);
_gaq.push(['_trackPageview']);

(function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css" integrity="sha384-aUGj/X2zp5rLCbBxumKTCw2Z50WgIr1vs/PFN4praOTvYXWlVyh2UtNUU0KAUhAX" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="//cdn.jsdelivr.net/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="formValidation.min.css">
    <link rel="stylesheet" href="demo.css">

    <script src="//cdn.jsdelivr.net/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="formValidation.min.js"></script>
    <script src="bootstrap.min.js"></script>
</head>
<body class="demo-bootstrap">
    <div class="container">
        <div class="row">
            <div class="col-xs-12" id="demoContainer">
                <form id="basicBootstrapForm" class="form-horizontal">
    <div class="form-group">
        <label class="col-xs-3 control-label">Full name</label>
        <div class="col-xs-4">
            <input type="text" class="form-control" name="firstName" placeholder="First name" />
        </div>
        <div class="col-xs-4">
            <input type="text" class="form-control" name="lastName" placeholder="Last name" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-xs-3 control-label">Username</label>
        <div class="col-xs-5">
            <input type="text" class="form-control" name="username" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-xs-3 control-label">Email address</label>
        <div class="col-xs-5">
            <input type="text" class="form-control" name="email" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-xs-3 control-label">Password</label>
        <div class="col-xs-5">
            <input type="password" class="form-control" name="password" />
        </div>
    </div>

    <div class="form-group">
        <label class="col-xs-3 control-label">Gender</label>
        <div class="col-xs-6">
            <div class="radio">
                <label>
                    <input type="radio" name="gender" value="male" /> Male
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="gender" value="female" /> Female
                </label>
            </div>
            <div class="radio">
                <label>
                    <input type="radio" name="gender" value="other" /> Other
                </label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="col-xs-3 control-label" id="captchaOperation"></label>
        <div class="col-xs-4">
            <input type="text" class="form-control" name="captcha" />
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-6 col-xs-offset-3">
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="agree" value="agree" /> Agree with the terms and conditions
                </label>
            </div>
        </div>
    </div>

    <div class="form-group">
        <div class="col-xs-9 col-xs-offset-3">
            <button type="submit" class="btn btn-primary" name="signup" value="Sign up">Submit</button>
        </div>
    </div>
</form>

<script>
$(document).ready(function() {
    // Generate a simple captcha
    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    }
    $('#captchaOperation').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));

    $('#basicBootstrapForm').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            firstName: {
                row: '.col-xs-4',
                validators: {
                    notEmpty: {
                        message: 'The first name is required'
                    }
                }
            },
            lastName: {
                row: '.col-xs-4',
                validators: {
                    notEmpty: {
                        message: 'The last name is required'
                    }
                }
            },
            username: {
                validators: {
                    notEmpty: {
                        message: 'The username is required'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'The username must be more than 6 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: 'The username can only consist of alphabetical, number, dot and underscore'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'The password is required'
                    },
                    different: {
                        field: 'username',
                        message: 'The password cannot be the same as username'
                    }
                }
            },
            gender: {
                validators: {
                    notEmpty: {
                        message: 'The gender is required'
                    }
                }
            },
            captcha: {
                validators: {
                    callback: {
                        message: 'Wrong answer',
                        callback: function(value, validator, $field) {
                            var items = $('#captchaOperation').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
                            return value == sum;
                        }
                    }
                }
            },
            agree: {
                validators: {
                    notEmpty: {
                        message: 'You must agree with the terms and conditions'
                    }
                }
            }
        }
    });
});
</script>
            </div>
        </div>
    </div>

<script>
// You don't need to care about the following code
// It's built for all demos
$(document).ready(function() {
    $('form').on('success.form.fv', function(e) {
        e.preventDefault();
    });

    $(window).on('load', function() {
        var $iframe = $(window.parent.document).find('iframe[src="/download/tryit/bootstrap.html"]');
        if ($iframe.length) {
            //$('body').addClass('demo-frame-body').find('.demo-ad').hide();

            // Adjust the height of iframes containing the demo for specific frameworks
            var $container = $('#demoContainer');
            setTimeout(function() {
                $iframe.height($container.height()).css('visibility', 'visible').fadeIn('fast');
            }, 1000);

            // Set the internal data to get it later if I want
            $('body').data('iframe.fv', $iframe);

            $container
                .find('form')
                .on('status.field.fv', function(e, data) {
                    $iframe.height($container.height());
                });
        }
    });
});
</script>
</body>
</html>