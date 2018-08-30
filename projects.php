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
                        <img class="committeepic" src="img/projects/wiclogo.png">
                    </div>
                    <div class="media-body">
                        <h4><p><strong>2018:</strong> Magic Mirror (Current Project)</p></h4>
                        <p class="committeetext"><a href="blog_posts/Fall_2017/Projects1.php">View Blog Post</a> about current progress on this project.</p>
                    </div>
                    
                        <br><br>
                    
                    <div class="media-left">
                        <img class="committeepic" src="img/projects/project2017.JPG">
                    </div>
                    <div class="media-body">    
                        <h4><p><strong>2017:</strong> Raspberry Pi Arcade Table</p></h4>
                        <p class="committeetext">The arcade table was created using a raspberry pi 3 to run Retropie, in order to create a bar top arcade emulator. It is for one or two players with multiple games on the system. Can be found in the WiC space. </p>
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