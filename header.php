<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title;?> | Women in Computing</title>
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&amp;subset=latin-ext" rel="stylesheet">
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="ritstyle.css" rel="stylesheet">
    
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>    
<header class="site-header">
        <div class="top">
            <div id="metanav">
		      <p>Site-wide links</p>
                <ul>
                    <li id="metaskip"><a href="#pagecontent" title="Skip to content">Skip to content</a></li>
                    <li id="metarithome"><a href="http://www.rit.edu/" title="RIT Home"><span id="metarithometext">RIT Home</span><span id="metaritlogo"></span></a></li>
                    <li id="metaritdirectories"><a href="http://www.rit.edu/directories.html">Directories</a></li>
                </ul>
	</div>
        </div>
        <nav class="navbar navbar-default">
			<div class="container">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse">
					<span class="sr-only">Toggle Navigation</span>
					<i class="fa fa-bars"></i>
				</button>
				<a href="index.php" class="navbar-brand">
					<img id="headerlogo" src="img/logo.png" alt="Post">
				</a>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-navbar-collapse">
                    <ul class="nav navbar-nav main-navbar-nav">
                        <li <?php if($title=="Home"){echo "class='active'";} ?> ><a href="index.php" title="">HOME</a></li>
                        <li class="dropdown <?php if(($title=="Mission") || ($title=="Committes") || ($title=="Allies") || ($title=="Projects") || ($title=="Alumni")){echo "active";} ?>">
                            <a href="#" title="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ABOUT<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="mission.php" title="">MISSION</a></li>
                                <li><a href="committees.php" title="">COMMITTEES</a></li>
                                <li><a href="allies.php" title="">ALLIES</a></li>
                                <li><a href="projects.php" title="">PROJECTS</a></li>
                                <li><a href="alumni.php" title="">ALUMNI</a></li>
                            </ul>
                        </li>
                        <li class="dropdown  <?php if(($title=="Events") || ($title=="Annual Events") || ($title=="WiCHacks")){echo "active";} ?>">
                            <a href="#" title="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">EVENTS<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="events.php" title="">UPCOMING CALENDAR</a></li>
                                <li><a href="wichacks.php" title="">WICHACKS</a></li>
                                <li><a href="annual_events.php" title="">ANNUAL EVENTS</a></li>
                            </ul>
                        </li>
                        <li <?php if($title=="After Hours"){echo "class='active'";} ?>><a href="afterhours.php" title="">AFTER HOURS</a></li>
                        <li <?php if($title=="Blog"){echo "class='active'";} ?>><a href="blog.php" title="">BLOG</a></li>
                        <li <?php if($title=="Sponsor"){echo "class='active'";} ?>><a href="sponser.php" title="">SPONSOR</a></li>
                        <li <?php if($title=="Contact Us"){echo "class='active'";} ?>><a href="contact.php" title="">CONTACT US</a></li>
                    </ul>                           
                </div><!-- /.navbar-collapse -->                
				<!-- END MAIN NAVIGATION -->
			</div>
		</nav>        
    </header>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $('.carousel[data-type="multi"] .item').each(function(){
          var next = $(this).next();
          if (!next.length) {
            next = $(this).siblings(':first');
          }
          next.children(':first-child').clone().appendTo($(this));

          for (var i=0;i<4;i++) {
            next=next.next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }

            next.children(':first-child').clone().appendTo($(this));
          }
        });        
    </script>