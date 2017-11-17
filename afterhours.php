<?php $title="After Hours"; $level="";?>
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
                        <li class="active">After Hours</li>
                    </ol>                    
                </div>
            </div>
        </div>
    </div>
    <main class="site-main page-main">
        <div class="container">
            <div class="row">
                <section class="page">
                    <h2 class="page-title">AFTER HOURS</h2>
                    <div class="entry">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                              <li data-target="#myCarousel" data-slide-to="1"></li>
                              <li data-target="#myCarousel" data-slide-to="2"></li>
                              <li data-target="#myCarousel" data-slide-to="3"></li>
                                <li data-target="#myCarousel" data-slide-to="4"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                              <div class="item active">
                                <img src="img/afterhours/afterhours1.jpg" style="width:100%;height:100%;">
                              </div>

                              <div class="item">
                                <img src="img/afterhours/afterhours2.jpg" style="width:100%;height:100%;">
                              </div>

                              <div class="item">
                                <img src="img/afterhours/afterhours3.jpg" style="width:100%;height:100%;">
                              </div>
                              <div class="item">
                                <img src="img/afterhours/afterhours4.jpg" style="width:100%;height:100%;">
                              </div>
                              <div class="item">
                                <img src="img/afterhours/afterhours5.jpg" style="width:100%;height:100%;">
                              </div>
                            </div>

                            <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                              <span class="glyphicon glyphicon-chevron-left"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                              <span class="glyphicon glyphicon-chevron-right"></span>
                              <span class="sr-only">Next</span>
                            </a>
                          </div>
                        
                        
                        <h3>Program Dates: March 31st and April 7th, 2018</h3>


                        <p>The Women in Computing (WiC) After Hours Program is an overnight program for women accepted into the B. Thomas Golisano College of Computing. This free program is an opportunity to experience first-hand campus life at RIT that a typical tour can’t provide. It is organized and hosted by Women in Computing students and in conjunction with the RIT Admission’s Office. It is a great opportunity to meet new friends and possibly your future roommate! This program is BY INVITE ONLY. Don’t miss this opportunity to get connected to your home away from home!</p>
                        
                        <p>BY INVITE ONLY- Invitations are sent to all female students who have been accepted to RIT's B. Thomas Golisano College of Computing and Information Sciences.</p>
                        
                    </div>
                    <br><br>
                    <h2 class="page-title">INFORMATION</h2>
                    <div class="entry">
                        <ul>
                            <li><a target="_blank" href="pdfs/2017-FAQ-WiC-Overnight.pdf">Frequently Asked Questions</a></li>
                            <li><a target="_blank" href="pdfs/PackingList.pdf">Packing List</a></li>
                            <li><a target="_blank" href="https://maps.rit.edu/">Campus Map</a></li>
                        </ul>
                    </div>
                </section>
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
