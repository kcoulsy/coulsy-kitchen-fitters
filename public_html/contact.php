<?php
include ('./includes/config.php');
$current_page = 'contact'; 
include('./includes/overall/header.php');
?><!--tab out two times for inner content-->
  
        <div class="body">

            <div id="contact_L">

                <div id="contact_form_us_wrapper">
					<h3>Enquire...</h3>
                    <form action="form_contact_us.php" method="post" id="contact_form_us">
                        <?php
                                //Return thanks message when th message is sent well.
                                if($_GET['thx'] == "sent") 
                                echo "<p><b>Thank you $name.<br />Your message has been sent!</b></p>";			
                            ?>
                        <p>
                            <label>First Name*</label>
                            <input id="firstName" type="text" name="firstName" placeholder="First Name" required class="field required"/>
                            </p>
                        <p>
                            <label>Last Name</label>
                            <input id="lastName" type="text" name="lastName" placeholder="Last Name" class="field "/>
                            </p>
                        <p>
                            <label>Email Address*</label>
                            <input id="emailAddress" type="email" name="emailAddress" placeholder="anything@example.com" required class="field required" />
                            </p>
                        <p>
                            <label>Phone number</label>
                            <input id="phone" type="tel" name="phone"  placeholder="Phone Number" min=6 max=14 class="field" />
                            </p>
                        <p class="messager">
                            <label>Message*</label>
                            <textarea id="message" name="message" placeholder="Your Message" required class="textarea required" rows="6" cols="10"></textarea>
                            </p>
                        
                        <p>
                            <?php
                                //VERIF CAPTCHA DEVILCANTBURN
                                if($_GET['doh'] == "error") 
                                $error = '<label class="error">Oops... Retry !</label>';
                                
                                // Captcha
                                $n1 = rand(1, 10);
                                $n2 = rand(1, 10);
                                
                                echo '<p><label for="check">How much is ' .$n1. ' + '.$n2.'  ?</label>
                                <input type="text" name="check" id="check" size="2" maxlength="2" class="field required number" />';
                                
                                echo '<input type="hidden" name="1" value="'.$n1.'" />';
                                echo '<input type="hidden" name="2" value="'.$n2.'" /><br/>';
                                
                                echo $error.'</p>';
                                ?>
                            </p>
                        <p>
                            <input id="submit" type="submit" class="submitter" value="Send" />
                            </p>
                        </form>
                        
                </div><!--contact_form_us_wrapper-->
                
            </div><!--contact_L-->
            
            <div id="contact_R">
                <h1>Welcome to <?php echo $website_name; ?> contact page.</h1>
                <ul>
                <li>Please feel free to use the contact form to send your enquiry.</li>
                <li>Alternatively Contact &bull; <?php echo $phone_number_website; ?></li>
                <li></li>
                </ul>
            </div><!--contact_R-->
            
        </div><!--body-->
  
<?php include('./includes/overall/footer.php'); ?>