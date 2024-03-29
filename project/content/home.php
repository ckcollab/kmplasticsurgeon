<?php include('partials/_carousel.php'); ?>
<?php include('partials/_body_nav.php'); ?>

<div class="consultation-container">
    <img class="divider" src="assets/img/divider-3x.png">
    
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <h2>Philosophy</h2>
                <h4>Enhancing <p>The</p> <p>Lives</p> <p>Of</p> <p>Her</p> <p>Patients</p></h4>
                <p>Spokane Plastic Surgeon Kai Morimoto M.D., F.A.C.S. focuses on enhancing the lives of her patients. In respecting the unique individuality of each person, she is committed to helping them recognize and achieve their aesthetic goals. By personalizing a treatment plan, she is able to help take these goals a reality and improve the patient's sense of overall well-being.</p>
            </div>
            

            <div class="col-sm-6 consultation-form-container">
                <div class="">
                    <h2>Consultation</h2>

                    <?php
                        $email_to = 'info@kmplasticsurgery.com';
                        $subject = 'KM CONSULTATION REQUEST :: ';

                        function isValidEmail($email){
                            return preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^", $email);
                        }

                        function printError($error) {
                            echo '<div class="alert alert-danger">';
                            echo $error;
                            echo '</div>';
                        }

                        function printSuccess($success) {
                            echo '<div class="alert alert-success">';
                            echo $success;
                            echo '</div>';
                        }

                        if($_SERVER['REQUEST_METHOD'] == 'POST') {
                            if (!isset($_POST['name']) ||
                                !isset($_POST['email']) ||
                                !isset($_POST['message']) ||
                                !isset($_POST['spam_filter'])) {
                                printError('<b class="error">All fields are required!</b>');
                            }else {
                                if($_POST['spam_filter'] != 4) {
                                    printError('<b class="error">Invalid spam filter answer, are you a robot?!</b>');
                                } else {
                                    if(!isValidEmail($_POST['email'])) {
                                        printError('<b class="error">Invalid email!</b>');
                                    } else {
                                        $headers = 'From: ' . $_POST['email'] . "\r\n" .
                                            'Reply-To: ' . $_POST['email'] . "\r\n" .
                                            'X-Mailer: PHP/' . phpversion();

                                        $message = $_POST['message'];

                                        echo "mailing".$message;

                                        mail($email_to, $subject.$_POST['name'], $message, $headers);

                                        printSuccess('Message sent successfully!');
                                    }
                                }
                            }
                        }
                    ?>

                    <p>Request your consultation today!</p>
                    <form method="POST" action=".">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="name" value="<?php if(isset($_POST['spam_filter'])) echo $_POST['name']; ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="email" value="<?php if(isset($_POST['spam_filter'])) echo $_POST['email']; ?>">
                        </div>
                        <div class="form-group">
                            <textarea name="message" class="form-control" rows="3" placeholder="message"><?php if(isset($_POST['spam_filter'])) echo $_POST['message']; ?></textarea>
                        </div>

                        <p>Spam filter -- Answer the question: what does 3 + 1 equal?</p>

                        <div class="form-group">
                            <input type="text" name="spam_filter" class="form-control" placeholder="spam filter" value="<?php if(isset($_POST['spam_filter'])) echo $_POST['spam_filter']; ?>">
                        </div>

                        <button class="km-btn" type="submit">SEND</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <img class="divider" src="assets/img/divider-3x.png">
</div>

<div class="awards-and-testimonies container">
    <div class="row">
        <div class="col-sm-6">
            <div class="row titles">
                <div class="col-xs-12">
                    <h2>Awards</h2>
                </div>
            </div>
            <div class="row award">
                <div class="col-xs-2">
                    <img class="white-circle" src="assets/img/compassionate-green.png" alt="Compassionate Doctor certification">
                </div>
                <div class="col-xs-10">
                    <h4>Compassionate <p>Doctor</p> <p>Recognition</p></h4>
                    <p>Compassionate Doctor certification is granted to physicians who treat their patients with the utmost kindness. The honor is granted based on a physician's overall and bedside manner scores.</p>
                </div>
            </div>
            
            <div class="row award">
                <div class="col-xs-2">
                    <img class="white-circle" src="assets/img/patients-choice-green.png" alt="Patients' Choice Award">
                </div>
                <div class="col-xs-10">
                    <h4>Patients' <p>Choice</p> <p>Award</p></h4>
                    <p>Patients' Choice recognition reflects the difference a particular physician has made in the lives of his/her patients. The honor is bestowed to physicians who have received near perfect scores, as voted by patients.</p>
                </div>
            </div>
        </div>
        
        <div class="col-sm-6 testimonials">
            <div class="row titles">
                <div class="col-xs-12">
                    <h2>Testimonies</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-2">
                    <img class="quote" src="assets/img/quote-3x.png">
                </div>
                <div class="col-xs-10">
                    <h4>Wow, <p>I</p> <p>Couldn't</p> <p>Be</p> <p>Happier!</p></h4>
                    <p>I had a breast reduction and liposuction from bra line to knee area (both sides) Wow, I couldn't be happier! Dr Kai is truly a perfectionist! She listened to what I wanted and I could see immediately that the results are what I was hoping for. I am 3 weeks out and still a little swelling. Was painful (mostly due to lipo) but would definitely recommend it.</p>
                    <img class="star" src="assets/img/star.png" alt="Gold Star!">
                    <img class="star" src="assets/img/star.png" alt="Gold Star!">
                    <img class="star" src="assets/img/star.png" alt="Gold Star!">
                    <img class="star" src="assets/img/star.png" alt="Gold Star!">
                </div>
            </div>
            
            <div class="row">
                <div class="col-xs-2">
                    <img class="quote" src="assets/img/quote-3x.png">
                </div>
                <div class="col-xs-10">
                    <h4>Best <p>doctor</p> <p>I’ve</p> <p>come</p> <p>in</p> <p>contact</p> <p>with</p></h4>
                    <p>From our ER visit to the follow up appointments in her office, Dr. Morimoto has been one of the best doctors I have ever come in contact with. Thorough in every detail of care. Highly recommended.</p>
                    <img class="star" src="assets/img/star.png" alt="Gold Star!">
                    <img class="star" src="assets/img/star.png" alt="Gold Star!">
                    <img class="star" src="assets/img/star.png" alt="Gold Star!">
                    <img class="star" src="assets/img/star.png" alt="Gold Star!">
                </div>
            </div>
            
            <div class="row">
                <div class="col-xs-2">
                    <img class="quote" src="assets/img/quote-3x.png">
                </div>
                <div class="col-xs-10">            
                    <h4>Her <p>knowledge</p> <p>is</p> <p>over</p> <p>the</p> <p>top</p></h4>
                    <p>My experience with Dr. Morimoto was excellent.  Her professionalism and knowledge is over the top and deaconess hospital was great.  Thank you.</p>
                    <img class="star" src="assets/img/star.png" alt="Gold Star!">
                    <img class="star" src="assets/img/star.png" alt="Gold Star!">
                    <img class="star" src="assets/img/star.png" alt="Gold Star!">
                    <img class="star" src="assets/img/star.png" alt="Gold Star!">
                </div>
            </div>
            
            <div class="row">
                <div class="col-xs-2">
                    <img class="quote" src="assets/img/quote-3x.png">
                </div>
                <div class="col-xs-10">
                    <h4>A <p>Helping</p> <p>Hand</p></h4>
                    <p>I thought I’d extend a thank you.... You put my husband’s hand back together after a bad car accident on New Years’ Day some years ago. The hand has only minimal scarring, despite 54 stitches, and he is able to play guitar again, something we weren't sure was going to happen. I remember your work very vividly that day as you performed the surgery in the ED due to lack of an available OR and I was able to watch. So thank you for salvaging his hand!</p>
                    <img class="star" src="assets/img/star.png" alt="Gold Star!">
                    <img class="star" src="assets/img/star.png" alt="Gold Star!">
                    <img class="star" src="assets/img/star.png" alt="Gold Star!">
                    <img class="star" src="assets/img/star.png" alt="Gold Star!">
                </div>
            </div>
        </div>
    </div>
</div>
