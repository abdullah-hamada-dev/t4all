<?php   require_once('includes/common.php');
        require_once('includes/header.php');  
       
       
        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            // Assign Variables
    
            $user   = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
            $email  = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
            $phone  = filter_var($_POST['phone'], FILTER_SANITIZE_NUMBER_INT);
            $msg    = filter_var($_POST['msg'], FILTER_SANITIZE_STRING);
            $subject= filter_var($_POST['subject'], FILTER_SANITIZE_STRING);

        // Creating Array Of Errors

        $formErrors = array();

        if(strlen($user) <= 3 ) {

            $formErrors[] = 'username must be greater than <strong> 3 </strong> letters' ;

        }

        if(strlen($msg) < 10 ) {

            $formErrors[] = 'message can\'t be less than <span> 10 </span> letters' ;
            
        }

        // If there is no error send the email [ mail (to , subject, message, parameters) ]

        $headers = 'From: ' . $user . "\r\n" . $email . "\r\n";         
        $myEmail = 'ab989b25@gmail.com';
        $subject = 'contact form';

        if( empty($formErrors)) {

            mail( $myEmail, $subject, $msg, $headers);

            $user  = '' ;
            $email = '' ;
            $phone = '' ;
            $msg   = '' ;

            $success = ' <div class= "alert alert-success" > We Have Recieved Your Details  </div>';
        }

    }

        
        ?>

    <div class="container"><!--Start Container-->
    <div id="contact_image">       
            <center>
                <div id="contact-banner">
                    <h1>Contact Us</h1>
                    <h5>We Are Ready To Hear From You</h5>
                </div>
            </center>
        </div>
    </div><!--End of container-->

    <div id="contact-content"><!--Start main area-->
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-4">
                  <div class="information-part">
                    <h1>Contact Information</h1>
                    <h4>The Office</h4>
                    <p> 3-21- hitech city Hyderabad 500008 <br> telangana- india</p>
                    <span class="glyphicon glyphicon-globe icon-location"></span>
                    <p> +91 9789655</p>
                    <span class="glyphicon glyphicon-earphone icon-phone"></span>
                    <p> mail-us@t4all.com</p>
                    <span class="glyphicon glyphicon-envelope icon-mail"></span>
                    <p>Monday to Saturday <br> 11am - 7pm</p>
                    <span class="glyphicon glyphicon-calendar icon-time"></span>
                  </div>
                </div>
                <div class="col-lg-6 col-md-4">
                    <div class="query-part">
                        <h1>Got Any Query?</h1>
                        <p>Use the form below to get in touch with our team</p>
                        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                        <?php if( ! empty($formErrors)) { ?>
                            <div class="alert alert-danger alert-dismissible" role="start">
                                <button type="button" class="close" data-dismiss="alert" aria-label="close">
                                    <span aria-hidden="true"> &times; </span>
                                </button>
                                <?php
                                    foreach($formErrors as $error) {
                                        echo $error . '<br/>';
                                    }
                                ?>
                            </div>
                            <?php  } ?>
                            <?php if(isset($success)) { echo $success ;} ?>
                            <div class="form-row">
                                <div class="col-md-6">
                                    <input type="text" name="name" placeholder="Name" value="<?php if (isset($user)) { echo $user; } ?>">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="email" placeholder="Email" value="<?php if (isset($email)) { echo $email; } ?>">
                                </div>
                                <div class="col-md-6">
                                    <input class="form-fix" type="text" name="phone" placeholder="Phone"  value="<?php if (isset($phone)) { echo $phone; } ?>">
                                </div>
                                <div class="col-md-6">
                                    <input class="form-fix" type="text" name="subject" placeholder="Subject" value="<?php if (isset($subject)) { echo $subject; } ?>">
                                </div> 
                                <textarea  name="msg" placeholder=" Massage" cols="51" rows="10"  value="<?php if (isset($msg)) { echo $msg; } ?>"></textarea>
                                <button type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!--End of main area-->



<?php   require_once('includes/footer.php'); ?>