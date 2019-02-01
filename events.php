<?php $title="Events";
      $level="";?>
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
                        <li><a href="#">Events</a></li>
                        <li class="active">Upcoming Calendar</li>
                    </ol>                    
                </div>
            </div>
        </div>
    </div>
    <main class="site-main page-main">
        <div class="container">
            <div class="row">
                <section class="page col-sm-9">
                    <h2 class="page-title">EVENTS</h2>
                    <div class="entry">
                        <p>All WiC events are planned by the Events committee! Events committee meets once a week, and together we brainstorm ideas and plan for all the various social events that occur throughout the year! Some events we help plan are the Halloween party, ice cream socials, Friendsgiving, and much more!</p>
                    </div>
                    <br><br>
                    <div id="calendar"></div>
                   <br><br>
                </section>
                <aside class="sidebar col-sm-3">
                    <div class="widget">
                        <h4>EVENTS</h4>
                        <ul>
                            <li class="current"><a href="#" title="">Upcoming Calendar</a></li>
                            <li><a href="wichacks.php" title="">WiCHacks</a></li>
                            <li><a href="annual_events.php" title="">Annual Events</a></li>
                            <li><a href="outreach.php" title="">Outreach</a></li>
                            <li><a href="news.php" title="">In The News</a></li>
                        </ul>
                    </div>
                    <div class="widget">
                        <h4>CS TUTORING HOURS</h4>
                        <ul>
                            <li><b>Tuesday • GOL-2600</b></li>
                            <li>2:00PM - 4:00PM</li>
                            <li><br></li>
                            <li><b>Wednesday • GOL-2500</b></li>
                            <li>3:00PM - 5:00PM</li>
                            <li><br></li>
                            <li><b>Thursday • GOL-2600</b></li>
                            <li>11:00AM - 12:00PM</li>
                            <li>12:30PM - 2:30PM</li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </main>
    <?php include 'footer.php';?>
</body>
</html>