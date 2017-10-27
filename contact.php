<?php $title="Contact Us"; ?>

<!DOCTYPE html>
<html lang="en">
<?php include 'header.php';?>
<body>
    <div class="bread_area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Contact Us</li>
                    </ol>                    
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function validateEmail(email) {
            var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
        }
        
        function validateContact(){
            var returnBoolean = true;


            var sName = document.getElementsByName("senderName")[0];
            if (sName.value == "") {
                returnBoolean = false;
                sName.style.backgroundColor = "pink";
            } else {sName.style.backgroundColor = "white";}

            var sEmail = document.getElementsByName("senderEmail")[0];
            if (sEmail.value == "" || validateEmail(sEmail)) {
                returnBoolean = false;
                sEmail.style.backgroundColor = "pink";
            } else {
                sEmail.style.backgroundColor = "white";}

            var reason = document.getElementsByName("senderTitle")[0];
            if (reason.value == "") {
                returnBoolean = false;
                reason.style.backgroundColor = "pink";
            } else {
                reason.style.backgroundColor = "white";}
            

            var message = document.getElementsByName("senderMessage")[0];
            if (message.value == "") {
                returnBoolean = false;
                message.style.backgroundColor = "pink";
            } else {
                message.style.backgroundColor = "white";}

            return returnBoolean;
        }
    </script>
    <main class="site-main page-main">
        <div class="container">
            <div class="row">
                <section class="page col-sm-12">
                    <h2 class="page-title">CONTACT US</h2>
                    <div class="entry col-sm-10">
                        <form class="contact" action="" method="post" onsubmit="return validateContact();" name="contactForm">
                            <p>Name</p>
                            <input type="text" name="senderName" placeholder="Name">
                            <br/><br/>

                            <p>Email Address</p>
                            <input type="text" name="senderEmail" placeholder="example@site.com">
                            <br/><br/>

                            <p>Reason for Contact</p>
                            <input type="text" name="senderTitle" placeholder="Questions? Comments? Concerns?">
                            <br/><br/>
                            
                            <p>Message</p>
                            <textarea placeholder="Your Message" name="senderMessage"></textarea>

                            <input type="submit" name="Send Email">
                        </form>
                    </div>
                    <div class="col-sm-2">
                        <p>Want to get involved?</p> 
                        <p>Curious about ongoing activities and projects?<p> 
                        <p>Have any suggestions or ideas?</p>
                        <p>Questions, comments, concerns?</p>
                    </div>
                </section>
                
            </div>
        </div>
    </main>
     <?php include 'footer.php';?>
</body>
</html>