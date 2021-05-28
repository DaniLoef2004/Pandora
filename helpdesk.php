<?php
/*
* Template name: helpdesk
*/
?>

<?php get_header();?>

<body>

<div class="bg-contact100" style="background-image: url('<?php echo get_template_directory_uri() ?>/images/pandora-dealers.jpg');">
    <div class="container-contact100">
        <div class="wrap-contact100">
            <div class="contact100-pic js-tilt" data-tilt>
                <img src="<?php echo get_template_directory_uri() ?>/images/pandora-dealers.jpg" alt="IMG">
            </div>

            <form class="contact100-form validate-form">
					<span class="contact100-form-title">
						Get in touch
					</span>

                <div class="wrap-input100 validate-input" data-validate = "Name is required">
                    <input class="input100" type="text" name="name" placeholder="Name">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <input class="input100" type="text" name="email" placeholder="Email">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Message is required">
                    <textarea class="input100" name="message" placeholder="Message"></textarea>
                    <span class="focus-input100"></span>
                </div>

                <div class="container-contact100-form-btn">
                    <button class="contact100-form-btn">
                        Send
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>




<!--===============================================================================================-->
<script src="helpdesk/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="helpdesk/popper.js"></script>
<script src="helpdesk/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="helpdesk/select2.min.js"></script>
<!--===============================================================================================-->
<script src="helpdesk/tilt.jquery.min.js"></script>
<script >
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<!--===============================================================================================-->
<script src="helpdesk/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>

</body>
</html>

<?php get_footer();?>
