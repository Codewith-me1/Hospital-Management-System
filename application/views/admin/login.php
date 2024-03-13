<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="#424242" />
        <?php
        $titleresult = $this->customlib->getTitleName();
        if (!empty($titleresult["name"])) {
            $title_name = $titleresult["name"];
        } else {
            $title_name = "Hospital Name Title";
        }
        ?>
        <title><?php echo $title_name; ?></title>
        <!--favican-->
        <link href="<?php echo base_url(); ?>backend/images/pheonix_fav.jpeg" rel="shortcut icon" type="image/x-icon">
        <!-- CSS -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>backend/usertemplate/assets/bootstrap/css/bootstrap.min.css">
        <!-- <link rel="stylesheet" href="<?php echo base_url(); ?>backend/usertemplate/assets/font-awesome/css/font-awesome.min.css"> --> 
        <link rel="stylesheet" href="<?php echo base_url(); ?>backend/usertemplate/assets/css/form-elements.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>backend/usertemplate/assets/css/style.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>backend/usertemplate/assets/css/jquery.mCustomScrollbar.min.css">
        <style type="text/css">
			.socials{
        margin-top:15rem;
        padding-left:0rem;
        position: fixed;
        bottom: 150px;
        background-color:white;
        border-radius:15px;
        right: 40px;
        
      }
			
	    .fa-facebook {
        background: #3B5998;
        color: white;

      }
			.policy{
				display:flex;
				
					padding:1rem;
				text-align:center;
				justify-content: center;
			}
			.policy p{
				color:#3d3d3dfa;
				
				font-weight:500;
				
			}
			.privacy{
				
				margin-left:5px;
				
			}
			.check{
			color:black !important;	
				
			}
			.check label{
			font-weight:500 !important;
			}
      .fa-twitter {
        background: #55ACEE;
        color: white;
      }
      .fa-linkedin {
        background: #007bb5;
        color: white;
      }
      .fa-instagram {
        background: #125688;
        color: white;

      }
		.socials a{
        margin:2rem;
        text-decoration:none;
        display:block;
      }
	.privacy{
        position:fixed;
        bottom:10px;
        right:50px;
        color: white;
    }

       .socials .fa{
            padding: 15px;
      font-size: 20px;
      
      text-align: center;
      text-decoration: none;
      border-radius:37px;
          }
			.forgot{
				text-align:center;	
				color:black !important;
			}
			@media screen and (max-width:768px){
			 .socials a{
            display:inline;
            margin:2rem 1rem 0rem 1rem;
        }
       
        .socials{
            margin-top:15rem;
            display:flex;
            width:100%;
            right:0px;
            padding-left:0rem;
            
            bottom: 100px;
			position: relative;
            background-color:transparent ;
            border-radius:15px;
            justify-content:center;
         

        }
			
			}
			.form-box {
    margin-top: 200px !important;
}
            .col-md-offset-3 { margin-left: 29%;}
            .loginbg {
               background:transparent !important;
                max-height: 480px;
                box-shadow:0 10px 18px 0 rgba(62, 57, 107, 0.2);
                border-radius: 4px;
            }

            a.forgot {padding-top:0px;}
            a.forgot {padding-top:0px; color: #b0de37;}
            a:hover.forgot {padding-top:0px; color: #fff; text-decoration: underline;}
            button.btn {
                margin: 0;
                padding: 0 20px;
                vertical-align: middle;
                background: #ff9800;
                border: 0;
                font-family: 'Roboto', sans-serif;
                font-size: 16px;
                font-weight: 400;
                color: #fff;
                -moz-border-radius: 4px;
                -webkit-border-radius: 4px;
                border-radius: 4px;
                text-shadow: none;
                -moz-box-shadow: none;
                -webkit-box-shadow: none;
                box-shadow: none;
                -o-transition: all .3s;
                -moz-transition: all .3s;
                -webkit-transition: all .3s;
                -ms-transition: all .3s;
                transition: all .3s;
            }
            button.btn:hover {opacity: 100 !important; color: #fff;background: #fbc02d;}
            @media (max-width: 767px){.col-md-offset-3 {margin-left: 0;}}
        </style>
    </head>
    <body>
        <!-- Top content -->
        <div class="top-content">
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <?php
                        $empty_notice = 0;
                        $offset = "";
                        if (empty($notice)) {
                            $empty_notice = 1;
                            $offset = "col-md-offset-3";
                        }
                        ?>
                        <div class="col-lg-5 col-sm-5 form-box <?php echo $offset; ?>">
                            <div class="loginbg">  
                                <div class="form-top">
                                    <?php
                                    $logoresult = $this->customlib->getLogoImage();
                                    if (!empty($logoresult["image"])) {
                                        $logo_image = base_url() . "uploads/hospital_content/logo/" . $logoresult["image"];
                                    } else {
                                        $logo_image = base_url() . "uploads/hospital_content/logo/s_logo.png";
                                    }
                                    if (!empty($logoresult["mini_logo"])) {
                                        $mini_logo = base_url() . "uploads/hospital_content/logo/" . $logoresult["mini_logo"];
                                    } else {
                                        $mini_logo = base_url() . "uploads/hospital_content/logo/smalllogo.png";
                                    }
                                    ?>
                                    <div class="form-top-left">
                                        <img src="<?php echo $logo_image.img_time(); ?>" style="height: 30px;">    
                                    </div>
                                    <div class="form-top-right">
                                        <i class="fa fa-key"></i>
                                    </div>
                                </div>
                                <div class="form-bottom">
                                    <h3 class="font-white bolds"><?php echo $this->lang->line('login'); ?></h3>
                                    <?php
                                    if (isset($error_message)) {
                                        echo "<div class='alert alert-danger'>" . $error_message . "</div>";
                                    }
                                    ?>
                                    <?php
                                    if ($this->session->flashdata('message')) {
                                        echo "<div class='alert alert-success'>" . $this->session->flashdata('message') . "</div>";
                                    };
                                    ?>
                                    <form action="<?php echo site_url('site/login') ?>" method="post">
                                        <?php echo $this->customlib->getCSRF(); ?>
                                        <div class="form-group">                                            
                                            <input type="text" name="username" placeholder="<?php echo $this->lang->line('username'); ?>" value="" class="form-username form-control" id="email">
                                            <span class="text-danger"><?php echo form_error('username'); ?></span>
                                        </div>
                                        <div class="form-group">                                           
                                            <input type="password" value="" name="password" placeholder="<?php echo $this->lang->line('password'); ?>" class="form-password form-control" id="password">
                                            <span class="text-danger"><?php echo form_error('password'); ?></span>
                                        </div>
										
										<div class="form-group check">
											<input type="checkbox" id="terms" name="terms" required>
											<label for="terms"> I accept the terms and conditions and privacy policy</label>
  

										</div>
										
                                        <?php if($is_captcha){ ?>
                                        <div class="form-group has-feedback row"> 
                                            <div class='col-md-6'>
                                                <span id="captcha_image"><?php echo $captcha_image; ?></span>
                                                <span class="glyphicon glyphicon-refresh" title='Refresh Catpcha' onclick="refreshCaptcha()" style="cursor:pointer;"></span>
                                            </div>
                                            <div class='col-md-6'>
                                                <input type="text" name="captcha" placeholder="<?php echo  $this->lang->line('enter_captcha'); ?>" class=" form-control " id="captcha"> 
                                                <span class="text-danger"><?php echo form_error('captcha'); ?></span>
                                            </div>
                                        </div>
                                        <?php } ?>
                                        <button onclick="submitForm()" type="submit" class="btn"><?php echo $this->lang->line('sign_in'); ?></button>
                                    </form>
                                    <br>
                                    <p class="forgot"><a href="<?php echo site_url('site/forgotpassword') ?>" class="forgot"><i class="fa fa-key"></i> <?php echo $this->lang->line('forgot_password'); ?>?</a> </p> 
                                </div>
                            </div>
							  <div class="socials">
        <a href="#" class="fa fa-facebook"></a>
        <a href="#" class="fa fa-twitter"></a>
        <a href="#" class="fa fa-linkedin"></a>
        <a href="#" class="fa fa-instagram"></a>

    </div>
							<div class="privacy">
											<p>@Saiph Technologies Pvt Ltd</p>
										</div>
					
								
                        </div>
                        <?php 
                        if (!$empty_notice) {
                            ?>
                            <div class="col-lg-1 col-sm-1"><div class="separatline"></div></div> 
                            <div class="col-lg-6 col-sm-6 col-sm-6">
                                <div class="loginright form-box  mCustomScrollbar">
                                    <div class="messages"> 
                                        <h3><?php echo $this->lang->line('what_is_new_in'); ?> <?php echo $sch_name; ?></h3>
                                        <?php
                                        foreach ($notice as $notice_key => $notice_value) {
                                            ?>
                                            <h4><?php echo $notice_value['title']; ?></h4>
                                            <?php
                                            $string = ($notice_value['description']);
                                            $string = strip_tags($string);
                                            if (strlen($string) > 100) {
                                                // truncate string
                                                $stringCut = substr($string, 0, 100);
                                                $endPoint = strrpos($stringCut, ' ');
                                                //if the string doesn't contain any space then it will cut without word basis.
                                                $string = $endPoint ? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                                $string .= '... <a class=more href="' . site_url('read/' . $notice_value['slug']) . '">Read More</a>';
                                            }
                                            echo '<p>' . $string . '</p>';
                                            ?>
                                            <div class="logdivider"></div>
                                            <?php
                                        }
                                        ?>
                                    </div>  
                                </div>
                            </div><!--./col-lg-6-->
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Javascript -->
        <script src="<?php echo base_url(); ?>backend/usertemplate/assets/js/jquery-1.11.1.min.js"></script>
        <script src="<?php echo base_url(); ?>backend/usertemplate/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>backend/usertemplate/assets/js/jquery.backstretch.min.js"></script>
        <script src="<?php echo base_url(); ?>backend/usertemplate/assets/js/jquery.mCustomScrollbar.min.js"></script>
        <script src="<?php echo base_url(); ?>backend/usertemplate/assets/js/jquery.mousewheel.min.js"></script>        
    </body>
</html>
<script type="text/javascript">
    $(document).ready(function () {
        var base_url = '<?php echo base_url(); ?>';
        $.backstretch([
            base_url + "backend/usertemplate/assets/img/backgrounds/bg13.png"
        ], {duration: 3000, fade: 750});
        $('.login-form input[type="text"], .login-form input[type="password"], .login-form textarea').on('focus', function () {
            $(this).removeClass('input-error');
        });
        $('.login-form').on('submit', function (e) {
            $(this).find('input[type="text"], input[type="password"], textarea').each(function () {
                if ($(this).val() == "") {
                    e.preventDefault();
                    $(this).addClass('input-error');
                } else {
                    $(this).removeClass('input-error');
                }
            });
        });
    });
</script>
<script  type="text/javascript" >
        // Function to set a cookie
        function setCookie(name, value, days) {
            var expires = "";
            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                expires = "; expires=" + date.toUTCString();
            }
            document.cookie = name + "=" + (value || "") + expires + "; path=/";
        }

        // Function to get a cookie value
        function getCookie(name) {
            var nameEQ = name + "=";
            var ca = document.cookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') c = c.substring(1, c.length);
                if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
            }
            return null;
        }

        // Function to check if the user has already accepted the terms
        function checkTermsAccepted() {
            return getCookie('termsAccepted') === 'true';
        }

        // Function to handle form submission
        function submitForm() {
            var termsCheckbox = document.getElementById('terms');
            if (termsCheckbox.checked || checkTermsAccepted()) {
                // Terms accepted or previously accepted, proceed with form submission
               	console.log('form submitted');
                // Set cookie to remember terms acceptance
                setCookie('termsAccepted', 'true', 365); // Cookie lasts for 365 days
            } else {
                // Terms not accepted
                alert('Please accept the terms and conditions.');
            }
        }

        // Check if terms were previously accepted and update UI accordingly
        if (checkTermsAccepted()) {
            document.getElementById('terms').checked = true;
        }
    </script>

<script type="text/javascript">
    function refreshCaptcha(){
        $.ajax({
            type: "POST",
            url: "<?php echo base_url('site/refreshCaptcha'); ?>",
            data: {},
            success: function(captcha){
                $("#captcha_image").html(captcha);
            }
        });
    }    
</script>