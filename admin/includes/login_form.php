
<!DOCTYPE html>
    <!--[if IE 9 ]><html class="ie9"><![endif]-->
    
<!-- Mirrored from byrushan.com/projects/ma/1-7-1/jquery/light/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Jun 2017 12:11:24 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CRSDI | Connexion</title>

        <!-- Vendor CSS -->
        <link href="../vendors/bower_components/animate.css/animate.min.css" rel="stylesheet">
        <link href="../vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css" rel="stylesheet">

        <!-- CSS -->
        <link href="../css/app_1.min.css" rel="stylesheet">
        <link href="../css/app_2.min.css" rel="stylesheet">
    </head>

    <body>
        <div class="login-content">
            <!-- Login -->
            <div class="lc-block toggled" id="l-login">
                <div class="lcb-form">
                <form method="post" action="login.php" autocomplete="off">
                    <div class="text-center"><h3><?= $error;?></h3></div>
                    <div class="input-group m-b-20">
                        <span class="input-group-addon"><i class="zmdi zmdi-account"></i></span>
                        <div class="fg-line">
                            <input type="text" class="form-control" name="username" placeholder="Nom d'utilisateur">
                        </div>
                    </div>

                    <div class="input-group m-b-20">
                        <span class="input-group-addon"><i class="zmdi zmdi-male"></i></span>
                        <div class="fg-line">
                            <input type="password" class="form-control" name="userpassword" placeholder="Password">
                        </div>
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="">
                            <i class="input-helper"></i>
                            Connexion Automatique
                        </label>
                    </div>

                   <button  type="submit" name="connexion" value="Connexion" class="btn btn-login btn-success btn-float"><i class="zmdi zmdi-arrow-forward"></i></button>
                    </form>
                </div>

                <div class="lcb-navigation">
                    <a href="#" data-ma-action="login-switch" data-ma-block="#l-forget-password"><i>?</i> <span>Mot de passe oublié</span></a>
                </div>
            </div>
            <!-- Forgot Password -->
            <div class="lc-block" id="l-forget-password">
                <div class="lcb-form">
                    <p class="text-left">Vous avez oublié votre mot de passe? Ne vous inquietez pas. Inserez votre Adresse E-mail et nous vous enverrons un lien pour la recuperation de votre mot de passe. Le lien peut prendre entre 15min pour arriver</p>

                    <div class="input-group m-b-20">
                        <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
                        <div class="fg-line">
                            <input type="text" class="form-control" placeholder="Email Address">
                        </div>
                    </div>

                    <a href="passforget.php" class="btn btn-login btn-success btn-float"><i class="zmdi zmdi-check"></i></a>
                </div>

                <div class="lcb-navigation">
                    <a href="#" data-ma-action="login-switch" data-ma-block="#l-login"><i class="zmdi zmdi-long-arrow-right"></i> <span>Connexion</span></a>
                </div>
            </div>
        </div>


        <!-- Older IE warning message -->
        <!--[if lt IE 9]>
            <div class="ie-warning">
                <h1 class="c-white">Warning!!</h1>
                <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
                <div class="iew-container">
                    <ul class="iew-download">
                        <li>
                            <a href="http://www.google.com/chrome/">
                                <img src="img/browsers/chrome.png" alt="">
                                <div>Chrome</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.mozilla.org/en-US/firefox/new/">
                                <img src="img/browsers/firefox.png" alt="">
                                <div>Firefox</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://www.opera.com">
                                <img src="img/browsers/opera.png" alt="">
                                <div>Opera</div>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.apple.com/safari/">
                                <img src="img/browsers/safari.png" alt="">
                                <div>Safari</div>
                            </a>
                        </li>
                        <li>
                            <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                                <img src="img/browsers/ie.png" alt="">
                                <div>IE (New)</div>
                            </a>
                        </li>
                    </ul>
                </div>
                <p>Sorry for the inconvenience!</p>
            </div>
        <![endif]-->

        <!-- Javascript Libraries -->
        <script src="../vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="../vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

        <script src="../vendors/bower_components/Waves/dist/waves.min.js"></script>

        <!-- Placeholder for IE9 -->
        <!--[if IE 9 ]>
            <script src="vendors/bower_components/jquery-placeholder/jquery.placeholder.min.js"></script>
        <![endif]-->

        <script src="../js/app.min.js"></script>
    </body>

<!-- Mirrored from byrushan.com/projects/ma/1-7-1/jquery/light/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Jun 2017 12:11:24 GMT -->
</html>
