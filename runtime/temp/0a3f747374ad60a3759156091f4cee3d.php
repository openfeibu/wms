<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:51:"/home/vagrant/Code/output/app/view/login/index.html";i:1514979464;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Xenon Boostrap Admin Panel" />
    <meta name="author" content="" />
    
    <title>登录</title>

    <!-- <link rel="stylesheet" href="http://fonts.useso.com/css?family=Arimo:400,700,400italic"> -->
    <link rel="stylesheet" href="/static/css/fonts/linecons/css/linecons.css">
    <link rel="stylesheet" href="/static/css/fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/static/css/bootstrap.css">
    <link rel="stylesheet" href="/static/css/xenon-core.css">
    <link rel="stylesheet" href="/static/css/xenon-forms.css">
    <link rel="stylesheet" href="/static/css/xenon-components.css">
    <link rel="stylesheet" href="/static/css/xenon-skins.css">
    <link rel="stylesheet" href="/static/css/custom.css">

    <script src="/static/js/jquery-1.11.1.min.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    
</head>
<body class="page-body login-page">

    
    <div class="login-container">
    
        <div class="row">
        
            <div class="col-sm-6">
            
                
                
                <!-- Errors container -->
                <div class="errors-container">
                
                                    
                </div>
                
                <!-- Add class "fade-in-effect" for login form effect -->
                <form method="post" role="form" id="login" class="login-form fade-in-effect">
                    
                    <div class="login-header">
                        <a href="dashboard-1.html" class="logo">
                            <img src="/static/images/logo@2x.png" alt="" width="80" />
                            <span>登录中心</span>
                        </a>
                        
                        <p>亲爱的用户, 欢迎使用!</p>
                    </div>
    
                    
                    <div class="form-group">
                        <label class="control-label" for="username">用户名</label>
                        <input type="text" class="form-control input-dark" name="username" id="username" autocomplete="off" />
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label" for="passwd">密码</label>
                        <input type="password" class="form-control input-dark" name="passwd" id="passwd" autocomplete="off" />
                    </div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-dark  btn-block text-center">
                            <i class="fa-lock"></i>
                            马 上 登 录
                        </button>
                    </div>
                    
                    <div class="login-footer">
                        <a href="#">忘记密码?</a>
                        
                        <div class="info-links">
                            <a href="#">服务条款</a> -
                            <a href="#">隐私政策</a>
                        </div>
                        
                    </div>
                    
                </form>
                
                <!-- External login -->
<!--                 <div class="external-login">
                    <a href="#" class="facebook">
                        <i class="fa-facebook"></i>
                        Facebook 登录
                    </a>
                    
                    
                    <a href="#" class="twitter">
                        <i class="fa-twitter"></i>
                        Twitter 登录
                    </a>
                    
                    <a href="#" class="gplus">
                        <i class="fa-google-plus"></i>
                        Google+ 登录
                    </a>
                    
                </div> -->
                
            </div>
            
        </div>
        
    </div>



    <!-- Bottom Scripts -->
    <script src="/static/js/bootstrap.min.js"></script>
    <script src="/static/js/TweenMax.min.js"></script>
    <script src="/static/js/resizeable.js"></script>
    <script src="/static/js/joinable.js"></script>
    <script src="/static/js/xenon-api.js"></script>
    <script src="/static/js/xenon-toggles.js"></script>
    <script src="/static/js/jquery.validate.js"></script>
    <script src="/static/js/toastr/toastr.min.js"></script>


    <!-- JavaScripts initializations and stuff -->
    <script src="/static/js/xenon-custom.js"></script>

</body>
</html>
<script type="text/javascript">
                    jQuery(document).ready(function($)
                    {
                        // Reveal Login form
                        setTimeout(function(){ $(".fade-in-effect").addClass('in'); }, 1);      
                        
                        // Validation and Ajax action
                        $("form#login").validate({
                            rules: {
                                username: {
                                    required: true
                                },
                                
                                passwd: {
                                    required: true
                                }
                            },
                            
                            messages: {
                                username: {
                                    required: '请输入用户名'
                                },
                                
                                passwd: {
                                    required: '请输入密码'
                                }
                            },
                            
                            // Form Processing via AJAX
                            submitHandler: function(form)
                            {
                                show_loading_bar(70); // Fill progress bar to 70% (just a given value)
                                
                                var opts = {
                                    "closeButton": true,
                                    "debug": false,
                                    "positionClass": "toast-top-full-width",
                                    "onclick": null,
                                    "showDuration": "300",
                                    "hideDuration": "1000",
                                    "timeOut": "5000",
                                    "extendedTimeOut": "1000",
                                    "showEasing": "swing",
                                    "hideEasing": "linear",
                                    "showMethod": "fadeIn",
                                    "hideMethod": "fadeOut"
                                };
                                    
                                $.ajax({
                                    url: "<?php echo url('Login/login'); ?>",
                                    method: 'POST',
                                    dataType: 'json',
                                    data: {
                                        do_login: true,
                                        username: $(form).find('#username').val(),
                                        password: $(form).find('#passwd').val(),
                                    },
                                    success: function(resp)
                                    {
                                        console.log(resp);
                                        show_loading_bar({
                                            delay: .5,
                                            pct: 100,
                                            finish: function(){
                                                // Redirect after successful login page (when progress bar reaches 100%)
                                                if(resp.error <= 0){
                                                    window.location.href = "<?php echo url('Index/index'); ?>";
                                                }else{
                                                    toastr.error( resp.msg, "错误:", opts);
                                                    // $passwd.select();
                                                }
                                                                                        }
                                        });
                                        
                                                                        }
                                });
                                
                            }
                        });
                        
                        // Set Form focus
                        $("form#login .form-group:has(.form-control):first .form-control").focus();
                    });
                </script>