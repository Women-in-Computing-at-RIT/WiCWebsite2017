<!--Projects WiC Page-->
<?php $title="Projects"; $level=""; ?>
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
                        <li>About</li>
                        <li class="active">Projects</li>
                    </ol>                    
                </div>
            </div>
        </div>
    </div>
    <main class="site-main page-main">
        <div class="container">
            <div class="row">
                <section class="page col-sm-9">
                    <h2 class="page-title">PROJECTS</h2>


                    <div class="media-left">
                        <img class="committeepic" src="img/projects/projects2019_1.png">
                    </div>
                    <div class="media-body">
                        <h4><p><strong>2019:</strong> Poll System</p></h4>
                        <p class="committeetext">We currently have a white board where our members create polls throughout
                            the year such as ‘Is water wet?’ and ‘What’s the best girl scout cookie?’
                            This project is a slack bot and mobile app to manage and automate these polls.</p>
                        <a href="https://github.com/Women-in-Computing-at-RIT/poll-system" target="_blank">Documentation</a>
                    </div>

                    <br><br>

                    <div class="media-left">
                        <img class="committeepic" src="img/projects/projects2019_2.jpg">
                    </div>
                    <div class="media-body">
                        <h4><p><strong>2019:</strong> Robotic Hand</p></h4>
                        <p class="committeetext">We are following a tutorial Microsoft displayed at the Grace Hopper Conference this year.
                            Using some straw, rubber bands, and an arduino we can make a robotic hand that can move like a human’s can.</p>
                        <a href="https://github.com/Women-in-Computing-at-RIT/robotic-hand" target="_blank">Documentation</a>
                    </div>

                    <br><br>

                    <div class="media-left">
                        <img class="committeepic" src="img/projects/project2018.JPG">
                    </div>
                    <div class="media-body">
                        <h4><p><strong>2018:</strong> Magic Mirror</p></h4>
                        <p class="committeetext">The magic mirror was made using a raspberry pi, a monitor and a
                            2-way mirror. Using and modifying the open source Magic Mirror<sup>2</sup> code we set up the screen
                            to display WiC events, the date and time, and some local news. By using a 2-way mirror we
                            could have this display shine through so you can get some useful information while using a
                            mirror. <a href="blog_posts/Fall_2017/Projects1.php">View Blog Post</a> about this project.</p>
							<a href="https://github.com/Women-in-Computing-at-RIT/Magic-Mirror" target="_blank">Documentation</a>
                    </div>
                    
                        <br><br>
                    
                    <div class="media-left">
                        <img class="committeepic" src="img/projects/project2017.JPG">
                    </div>
                    <div class="media-body">    
                        <h4><p><strong>2017:</strong> Raspberry Pi Arcade Table</p></h4>
                        <p class="committeetext">The arcade table was created using a raspberry pi 3 to run Retropie, in order to create a bar top arcade emulator. It is for one or two players with multiple games on the system. Can be found in the WiC space. </p>
						<a href="https://github.com/Women-in-Computing-at-RIT/RaspberryPiArcadeCabinet" target="_blank">Documentation</a>
                    </div>
                    
                        <br><br>
                    
                    <div class="media-left"> 
                        <img class="committeepic" src="img/projects/project2016.JPG">
                    </div>
                    <div class="media-body">
                        <h4><p><strong>2016:</strong> BMO Game Emulator</p></h4>
                        <p class="committeetext">The projects committee decided to create our own version of a Gameboy. We 3D printed a case and used a raspberry pi with retropie to create the emulator. We soldered the pi to buttons, speakers, and a power supply. After downloading games we had a running gameboy emulator.</p>
                    </div>
                    
                        <br><br>
                    
                    <div class="media-left">
                        <img class="committeepic" src="img/projects/project2015.JPG">
                    </div>
                    <div class="media-body">
                        <h4><p><strong>2015:</strong> Wearable Stress Monitor</p></h4>
                        <p class="committeetext">The wearable pulse monitor bracelet was developed to help young children  deal with stress and have a way to take  action against their anxiety.</p>
                    </div>
                    <br><br>
                </section>
                <aside class="sidebar col-sm-3">
                    <div class="widget">
                        <h4>ABOUT</h4>
                        <ul>
                            <li><a href="mission.php" title="">Mission</a></li>
                            <li><a href="faq.php" title="">FAQ</a></li>
                            <li><a href="committees.php" title="Committees">Committees</a></li>
                            <li><a href="allies.php" title="Allies">Allies</a></li>
                            <li class="current"><a href="projects.php" title="Projects">Projects</a></li>
                            <li><a href="alumni.php" title="Alumni">Alumni</a></li>
                            <li><a href="Resources.php" title="">Resources</a></li>
                            <div id="projgit" class="empty-space"><a href="https://github.com/women-in-computing-at-rit" target="_blank"> <i class="fa fa-github fa-4x" aria-hidden="true"></i></a></div>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </main>
    <?php include 'footer.php';?>
</body>
</html>