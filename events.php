<?php $title="Events";?>
<!DOCTYPE html>
<body>
    <?php include 'header.php';?>
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
                    <h2 class="page-title">MISSION STATEMENT</h2>
                    <div class="entry">
                        <p>Women in Computing at the Rochester Institute of Technology (WiC at RIT) provides an interdisciplinary networking forum for students, faculty, staff and alumni involved in the field of computing at The Rochester Institute of Technology through professional, leadership, mentorship, and technical development opportunities. WiC at RIT will also encourage the advancement of women in computing through community outreach.</p>
                    </div>
                    <br><br>
                    <iframe id="wiccalendar" src="https://www.google.com/calendar/embed?src=wicatrit%40gmail.com&ctz=America/New_York" frameborder="0" scrolling="no"></iframe>
                    <br><br>
                </section>
                <aside class="sidebar col-sm-3">
                    <div class="widget">
                        <h4>Events</h4>
                        <ul>
                            <li class="current"><a href="#" title="">Upcoming Calendar</a></li>
                            <li><a href="wichacks.php" title="">WiCHacks</a></li>
                            <li><a href="annual_events.php" title="">Annual Events</a></li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <?php include 'footer.php';?>
</body>
</html>