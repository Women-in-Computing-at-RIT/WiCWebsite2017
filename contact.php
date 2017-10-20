<!DOCTYPE html>
<html lang="en">
<body>
    <?php include 'header.php';?>
    <div class="bread_area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ol class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">About</li>
                    </ol>                    
                </div>
            </div>
        </div>
    </div>
    <main class="site-main page-main">
        <div class="container">
            <div class="row">
                <section class="page col-sm-12">
                    <h2 class="page-title">CONTACT US</h2>
                    <div class="entry">
                        <form>
                            <p>Name</p>
                            <input type="text" name="senderName">
                            <br/><br/>

                            <p>Email Address</p>
                            <input type="text" name="senderEmail">
                            <br/><br/>

                            <p>Reason for Contact</p>
                            <input type="text" name="senderTitle">
                            <br/><br/>
                            
                            <p>Message</p>
                            <textarea></textarea>
                        </form>
                    </div>
                </section>
                
            </div>
        </div>
    </main>
     <?php include 'footer.php';?>
</body>
</html>