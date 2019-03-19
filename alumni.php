<!DOCTYPE html>
<html lang="en">
<?php $title="Alumni"; $level="";?>
<?php include 'header.php';?>
<body>
    <div class="bread_area">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ol class="breadcrumb">
                        <li><a href="index.php">Home</a></li>
                        <li>About</li>
                        <li class="active">Alumni</li>
                    </ol>                    
                </div>
            </div>
        </div>
    </div>
    <main class="site-main page-main">
        <div class="container">
            <div class="row">
                <section class="page col-sm-9">
                    <h2 class="page-title">ALUMNI</h2>
                    <div class="entry">
                        <p>Women in Computing is dedicated to supporting and showcasing their alumni. We love to stay in contact with our alumni, to find out where they are and what they are doing. Giving our current members people to look up to encourages them to succeed and reminds them why they should work hard. We are so glad you joined the WiC community during your time at RIT and we want you to know you can always have an active part in it.  Please send us an email if you have anything to contribute. Whether it is giving a tech talk, hosting a company recruitment event, or sponsoring a WiC event, you are always welcome! </p>
                        <p>Alumni Talks: <a href="/post.php?id=9">Karen Roth</a></p>
                    </div>
                    <br/><br/>
                    <h2 class="page-title header-remove">SPOTLIGHT</h2>
                    <div class="entry">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">

                          <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                              <li data-target="#myCarousel" data-slide-to="3"></li>
                              <li data-target="#myCarousel" data-slide-to="4"></li>
                              <li data-target="#myCarousel" data-slide-to="5"></li>
                              <li data-target="#myCarousel" data-slide-to="6"></li>
                              <li data-target="#myCarousel" data-slide-to="7"></li>
                              <li data-target="#myCarousel" data-slide-to="8"></li>
                          </ol>


                          <div class="carousel-inner">
                            <div class="item active">
                                <center><img src="img/alumnai/alumnai_spotlight/kristenSeverskyAlumniSpotlight.png"></center>
                            </div>
                              <div class="item">
                                  <center><img src="img/alumnai/alumnai_spotlight/AnushriThandarAlumniSpotlight.png"></center>
                              </div>
                              <div class="item">
                                  <center><img src="img/alumnai/alumnai_spotlight/CaseyKlimkowskyAlumniSpotlight.png"></center>
                              </div>
                              <div class="item">
                                  <center><img src="img/alumnai/alumnai_spotlight/Huda%20Al-HabsiAlumniSpotlight.png"></center>
                              </div>
                              <div class="item">
                                  <center><img src="img/alumnai/alumnai_spotlight/KarenRothAlumniSpotlight.png"></center>
                              </div>
                              <div class="item">
                                  <center><img src="img/alumnai/alumnai_spotlight/KirstieFaileyAlumniSpotlight.png"></center>
                              </div>
                              <div class="item">
                                  <center><img src="img/alumnai/alumnai_spotlight/LauraWiemeAlumniSpotlight.png"></center>
                              </div>
                              <div class="item">
                                  <center><img src="img/alumnai/alumnai_spotlight/MelodyKellyAlumniSpotlight.png"></center>
                              </div>
                              <div class="item">
                                  <center><img src="img/alumnai/alumnai_spotlight/NoelSarahDastaAlumniSpotlight.png"></center>
                              </div>
                          </div>


                          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="alumarrow glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                          </a>
                          <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="alumarrow glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                          </a>
                        </div>
                            <br/>    
                    </div>

                </section>
            
                <aside class="sidebar col-sm-3">
                    <div class="widget">
                        <h4>ABOUT</h4>
                        <ul>
                            <li><a href="mission.php" title="">Mission</a></li>
                            <li><a href="faq.php" title="">FAQ</a></li>
                            <li><a href="committees.php" title="">Committees</a></li>
                            <li><a href="allies.php" title="">Allies</a></li>
                            <li><a href="projects.php" title="">Projects</a></li>
                            <li class="current"><a href="alumni.php" title="">Alumni</a></li>
                            <li><a href="Resources.php" title="">Resources</a></li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </main>
     <?php include 'footer.php';?>
</body>
</html>
<script>
    $(function(){
        $('.carousel').carousel({
            interval: 3000
        });
    });
</script>