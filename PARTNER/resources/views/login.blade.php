<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>LIBERTY PORTAL</title>

    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png') }}">

    <link href="{{ asset('libs/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('libs/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/imports.css') }}" rel="stylesheet">
    <link href="{{ asset('css/LineIcons.css') }}" rel="stylesheet">
    <link href="{{ asset('libs/icons/font-awesome-old/css/font-awesome.min.css') }}" rel="stylesheet">

</head>

<body class="h-100 ">


    <span class="text-center" id="master_loader" style="display:none;z-index:99999!important;">
        <img src="{{asset('images/loading.gif')}}" alt="loader" style="max-height:40px; max-width:40px; top:50%; left:50%;z-index: 9999;position:fixed;" />
    </span>

    <div class="outer_layer justify-content-between">
        <div class="inner_layer">
            <div class="row">
                <div class=" col-xm-6 col-sm-6 col-md-2 col-lg-2 center-all login-labels"></div>
                <div class="col-md-2 col-md-8 col-lg-8"> </div>
                <div class="col-xm-6 col-sm-6 col-md-2 col-lg-2 center-all login-labels"> </div>
            </div>

        </div>
    </div>


    <div class="row fill-height">
        <div class="col-sm-5 col-md-5 col-l-5 login-left-side">
            <div class="overlay-images-welcome align-center color-1">

<img src="{{asset('images/bg1.png')}}" alt="" />
            </div>
        </div>

        <div class="col-sm-6 col-md-6 col-lg-6 login-right-side">

            <div class="  auth-form fill-height">
                <br>
                <div class="login_start_content"></div>
                <h4 class="text-center mb-4 "><img src="{{ asset('images/logo.png') }}" alt="INSTACASH" style="max-width:250px;max-height:200px;"></h4>
                <h5 class="text-center mb-4">LIBERTY PORTAL
                </h5>

                <div class="row">

                    <div class="col-md-3">
                    </div>
                    home
                    <form class="col-md-6" id="login_form" name="login_form">
                        <div class="form-group" id="web_user_id_view">
                            <label class="mb-1"> <strong>
                                    <h5>Web User ID<small>  <span class="dot " data-toggle="tooltip" data-placement="bottom" title=" A web user id is the 6 digit number(username) you are sent via sms when you activate your web account. If you don't have a web user id, activate below. Incase you forgot it, click on the forgot web user id link below"> ? </span> </small></h5>
                                </strong></label>
                            <input type="number" name="web_user_id" name="web_user_id"  class="form-control" placeholder="enter your web user id" required="">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        </div>

                        <div class="form-group" id="password_view">
                            <label class="mb-1"><strong>
                                    <h5>Password</h5>
                                </strong></label>
                            <input type="password"  name="password" id="password" class="form-control"  placeholder="enter your password"required="">
                        </div>
                        <br>
                        <div class="text-center ">
                            <button type="button" id="btn_send_me_login_code" class="btn btn-primary btn-block" onclick="send_me_login_code();">Get Login Code</button>
                        </div>

                        <div id="enter_code_view" style="display:none">
                          <br>
                            <div class="form-group ">
                                <label class="mb-1"><strong>
                                        <h6>Enter Login code sent to your phone</h6>
                                    </strong></label>
                                <input type="number"  name="otp" id="otp" class="form-control" required="">
                            </div>
                            <br>
                            <div class="text-center ">
                               <button type="button" id="btn_submit_login_code" class="btn btn-primary btn-block" onclick="submit_login_code();"> Login </button>
                            </div>


                        </div>

                        

                    </form>


                    <div class="col-md-3">
                    </div>

                </div>

                <br><br>
                <div class="form-row d-flex justify-content-between mt-4 mb-2">


                    <div class="form-group ml-4">
                        <a href="{{ URL::to('/activate') }}"> Don't have a web account?  Activate </a>
                    </div>
                    <div class="form-group mr-4 ">
                        <a href="{{ URL::to('/forgot_password') }}"> Forgot Password? </a>
                    </div>

                    <div class="form-group mr-4 ">
                        <a href="{{ URL::to('/forgot_web_user_id') }}"> Forgot Web User ID? </a>
                    </div>

                </div>
            </div>


        </div>

    </div>
    <div class="authincation h-100 login-bg" style="display:none;">
        <br>
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="{{ asset('libs/global/global.min.js') }}"></script>
    <script src="{{ asset('libs/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('js/custom.min.js') }}"></script>
    <script src="{{ asset('js/deznav-init.js') }}"></script>
    <script src="{{ asset('js/imports.js') }}"></script>

    <script>
        
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })


        //izitoast notifier
        function show_message(msg = " ", type = "1", l = "topRight") {

            $('#loading').hide();

            var title = "";
            var titleColor = "";

            if (type == 1) {
                //success
                title = '<i class="flaticon-381-success-2"></i> ';
                titleColor = "green";

            } else if (type == 2) { // warning

                title = '<i class="flaticon-381-warning-1"></i> ';
                titleColor = "#F9B031";

            } else if (type == 3) {
                title = '<i class="flaticon-381-error"></i> ';
                titleColor = "red";
            } else {

            }

            iziToast.show({
                id: null,
                class: '',
                title: title,
                titleColor: titleColor,
                titleSize: '20',
                titleLineHeight: '',
                message: msg,
                messageColor: 'grey',
                messageSize: '15',
                messageLineHeight: '',
                backgroundColor: 'white',
                theme: 'light', // dark
                color: '', // blue, red, green, yellow
                icon: '',
                iconText: '',
                iconColor: '',
                image: '',
                imageWidth: 50,
                maxWidth: null,
                zindex: 9999,
                layout: 1,
                balloon: false,
                close: true,
                closeOnEscape: true,
                rtl: false,
                position: l, // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter, center
                target: '',
                targetFirst: true,
                toastOnce: false,
                timeout: 6000,
                animateInside: true,
                drag: true,
                pauseOnHover: true,
                resetOnHover: false,
                progressBar: true,
                progressBarColor: titleColor,
                progressBarEasing: 'linear',
                overlay: false,
                overlayClose: true,
                overlayColor: 'white',
                transitionIn: 'bounceInLeft',
                transitionOut: 'flipOutX',
                transitionInMobile: 'fadeInUp',
                transitionOutMobile: 'fadeOutDown',
                buttons: {},
                inputs: {},
                onOpening: function() {},
                onOpened: function() {},
                onClosing: function() {},
                onClosed: function() {}
            });

        }

        function send_me_login_code() {

            if($('#login_form').valid()){  

            $('#btn_send_me_login_code').attr("disabled", true);
            $('#master_loader').show();

            var pdata = $("#login_form").serialize();

            $.ajax({
                type: 'POST',
                data: pdata,
                url: '<?php echo url("/send_me_login_code"); ?>',
                success: function(data) {

                    if (data.success) {
                        show_message(data.msg);

                        $('#btn_send_me_login_code').attr("disabled", true);                       
                        $('#web_user_id_view').hide();
                        $('#password_view').hide();

                        $('#enter_code_view').show();
                        $('#btn_send_me_login_code').html(data.counter);

                        setInterval(run_counter, 1000);
                        $('#btn_submit_login_code').attr("disabled", false);
                    } else {
                        show_message(data.msg, 3);
                        $('#btn_send_me_login_code').attr("disabled", false);
                        
                    }
                },
                error: function(data) {
                    show_message("An error occured. Try again later!", 3);
                    $('#btn_send_me_login_code').attr("disabled", false);
                },
                complete: function(data) {
                    
                    $('#master_loader').hide();
                }

            });

        }else{
           
        }

        } //close fxn

        function run_counter() {

            var l = parseInt($("#btn_send_me_login_code").html());
            var n = l - 1;

            if (n > 2) {

                $("#btn_send_me_login_code").html(n + ' seconds');
            } else if (n <= 2) {
                $("#btn_send_me_login_code").html('Expired!');
                window.location.replace("<?php echo url('/'); ?>");
            }
        }


        function submit_login_code() {

            if($('#login_form').valid()){  

            $('#btn_submit_login_code').attr("disabled", true);
            $('#master_loader').show();

            var pdata = $("#login_form").serialize();

            $.ajax({
                type: 'POST',
                data: pdata,
                url: '<?php echo url("/submit_login_code"); ?>',
                success: function(data) {

                    if (data.success) {

                        show_message(data.msg);
                        $('#enter_code_view').hide();
                        var setpurl = "<?php echo url('/dashboard'); ?>";
                        window.location.replace(setpurl);

                    } else {
                        show_message(data.msg, 3);
                        $('#btn_submit_login_code').attr("disabled", false);
                    }
                },
                error: function(data) {
                    show_message("An error occured. Try again later!", 3);
                },
                complete: function(data) {
                    $('#btn_submit_login_code').attr("disabled", false);
                    $('#master_loader').hide();
                }

            });

        }else{
            //form not valid
        }

        }
    </script>

</body>


</html>