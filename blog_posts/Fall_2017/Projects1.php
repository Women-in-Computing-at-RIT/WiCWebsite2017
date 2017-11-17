<?php $title="Blog";
    $level="../../" ?>
<!DOCTYPE html>
<html lang="en">
<body>
     <?php include $level.'header.php';?>
    <div class="bread_area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ol class="breadcrumb">
                        <li><a href="<?php echo($level)?>index.php">Home</a></li>
                        <li><a href="<?php echo($level)?>blog.php">Blog</a></li>
                        <li>Fall 2017</li>
                        <li class="active">Projects Update</li>
                    </ol>                    
                </div>
            </div>
        </div>
    </div>
    <main class="site-main page-main">
        <div class="container">
            <div class="row">
                <section class="page col-sm-9">
                    <h2 class="page-title">PROJECTS UPDATE</h2>
                    <div class="entry">
                        <h4>Overview:</h4>
                        <p>The WiC Project Team is creating a Magic Mirror. The magic mirror will display information such as the weather and Facebook events, without preventing the owner from seeing their reflection.  The mirror will be presented at the 11th annual Imagine RIT event on April 28, 2018. This project is being developed by Wic members in multidisciplinary majors within Golisano. This project has been in the works for 7 weeks and WiC plans to have its first prototype by the end of the fall semester. The finishing design touches will be polished throughout the Spring Semester. </p><br>
                        
                        <h4>What is a Magic Mirror:</h4>
                        <p>A Magic Mirror is a mirror that displays helpful, or relevant information like the weather, time and date. It is composed of a raspberry pi, a monitor, and a two way mirror. The raspberry pi is used to display white text on a black background which will shine through the two way mirror and display text. The goal is to add to these basic features and more complex components such as motion sensors, facial recognition, and sound.</p><br>
                        
                        <h4>Our Progress:</h4>
                        <p>Currently our team has brainstormed ideas of what features we would like to include in our Magic Mirror. We have come up with a few features like informing the user of information about WiC, displaying the current date and time, and informing the user of the weather as our minimum viable product. We have sketched a design of what we want it to look like. We have taken measurements of the monitor after breaking down the neck piece and removing the bezel. Those measurements are being used as a base to start measuring the wooden frame pieces in the Construct. We have created a scaled paper model to double check our measurements before we build the actual product.</p>
                        <p>
                        Currently we are cutting up the final frames in the Construct and have plans to cut the glass sheet to create the “mirror” aspect to our project. We are selecting the designs that we will to engrave on the face of the Magic Mirror. We plan to assemble the frame with nails and screws after we stain the wood. 
                        </p><br>
                        <h4>Future Goals:</h4>
                        <p>Our next step is to start working on the software component of the Magic Mirror. We want to utilize resources on campus including working with professors and an online Discord channel dedicated to providing help for future creators of Magic Mirrors!</p><br>
                        
                        
                        <img class="blogimg" src="<?php echo($level)?>img/blog/fall_2017/Projects1.jpg" alt="EY logo">
                        
                        <div class="blogbtminfo">
                            <span class="blogdate">Posted: 10/30/17</span> 
                            <span class="pipe">| </span>
                            <span class="blogtype"><i class="fa fa-pencil"></i> Projects Update</span>
                        </div>
                        
                        <div class="blogbtmback">
                            <a href="<?php echo($level)?>blog.php"><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i> Back to Blog</a>
                        </div>
                        
                    </div>
                </section>
                <aside class="sidebar col-sm-3">
                    <p class="blogback"><a href="<?php echo($level)?>blog.php"><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i> Back to Blog</a></p>
                    <img src="<?php echo($level)?>img/blog/fall_2017/wiclogo.png" alt="WIC logo">
                </aside>
            </div>
        </div>
    </main>
     <?php include $level.'footer.php';?>
</body>
</html>