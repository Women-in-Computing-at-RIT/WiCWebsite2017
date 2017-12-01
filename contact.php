<?php 
    $title = "Contact Us"; 
    $level = "";
    $to = "aviggian836@gmail.com"; //"ltvvse@rit.edu";
?>

<!DOCTYPE html>
<html lang="en">
<?php include 'header.php';?>
<body>
    <div class="bread_area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Contact Us</li>
                    </ol>                    
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function validEmail(email) {
            var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
        }

        function validateContact(){
            var returnBoolean = true;

            var sName = document.getElementsByName("name")[0];
            if (sName.value == "") {
                returnBoolean = false;
                sName.style.backgroundColor = "pink";
            } else {sName.style.backgroundColor = "white"; }

            var sEmail = document.getElementsByName("email")[0];
            console.log(validEmail(sEmail.value));
            if ( ( sEmail.value == "" ) && !validEmail(sEmail.value)  ) {
                returnBoolean = false;
                sEmail.style.backgroundColor = "pink";
            } else { sEmail.style.backgroundColor = "white"; }

            var reason = document.getElementsByName("title")[0];
            if (reason.value == "") {
                returnBoolean = false;
                reason.style.backgroundColor = "pink";
            } else { reason.style.backgroundColor = "white"; }
            
            var message = document.getElementsByName("message")[0];
            if (message.value == "") {
                returnBoolean = false;
                message.style.backgroundColor = "pink";
            } else { message.style.backgroundColor = "white"; }

            return returnBoolean;
        }

    </script>
    <main class="site-main page-main">
        <div class="container">
            <div class="row">
                <section class="page col-sm-12">
                    <h2 class="page-title">CONTACT US</h2>
                    <div class="entry col-sm-12 col-lg-10">
                        <form class="contact" action="contact.php" method="post" onsubmit="return validateContact();" name="contactForm">
                            <p>Name</p>
                            <input type="text" name="name">
                            <br/><br/>

                            <p>Email Address</p>
                            <input type="text" name="email">
                            <br/><br/>

                            <p>Reason for Contact</p>
                            <input type="text" name="title">
                            <br/><br/>
                            
                            <p>Message</p>
                            <textarea name="message"></textarea>

                            <input type="submit" class="submitButton" name="submit" value="Submit">
                            <?php
                                if (isset($_POST['submit'])) {
                                    $name = $_POST['name'];
                                    $email = $_POST['email'];
                                    $subject = $_POST['title'];
                                    $message = $_POST['message'];
                                    $from = "From: " . $name;
                                    $body = "From: $name\n E-Mail: $email\n Message:\n $message";


                                    console.log($body);


                                    console.log(mail ($to, $subject, $body, $from));

                                    if (mail ($to, $subject, $body, $from)) {
                                        alert("Message sent</p>");
                                    } else{
                                        alert("<p>Something went wrong, please try again</p>");
                                    }
                                }
                            ?>    
                        </form>

                    <br/><br/> 
                    <p>*Messages will be s!!ent to Lana Verschage, Director of Women in Computing</p>
                    </div>
                    
                </section>
                
            </div>
        </div>
    </main>
    <?php include 'footer.php';?>
</body>
</html>