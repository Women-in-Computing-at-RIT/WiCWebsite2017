<!-- cookie stuff -->
<script>
    function setCookie(cname,cvalue,exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays*24*60*60*1000));
        var expires = "expires=" + d.toGMTString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }
    function getCookie(cname) {
        var name = cname + "=";
        var decodedCookie = decodeURIComponent(document.cookie);
        var ca = decodedCookie.split(';');
        for(var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }
    function checkCookie() {
        var cookie = getCookie("wicalert");
        if (cookie == "true") {
            document.getElementsByClassName("alertwic")[0].style.display = "none";
        }
    }
</script>

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-118010790-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-118010790-1');
    </script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="qtyip_WLR-DScsdgFgnjSDFbH7vB_ftpnDFHdIBFVFU" />
    <title><?php echo $title;?> | Women in Computing</title>
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600&amp;subset=latin-ext" rel="stylesheet">
    
    <!--full calendar links-->
    <link rel='stylesheet' href='js/fullcalendar-3.9.0/fullcalendar.css' />



    <!-- <base href="http://localhost:8888/" />-->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js'></script>
    <link href="<?php echo $level ?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $level ?>css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo $level ?>style.css" rel="stylesheet">
    <link href="<?php echo $level ?>ritstyle.css" rel="stylesheet">
    
    <link rel="shortcut icon" href="<?php echo $level ?>favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo $level ?>favicon.ico" type="image/x-icon">
    
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
                    <li id="metarithome"><a href="https://www.rit.edu/" title="RIT Home"><span id="metarithometext">RIT Home</span><span id="metaritlogo"></span></a></li>
                    <li id="metaritdirectories"><a href="https://www.rit.edu/directories.html">Directories</a></li>
                </ul>
	        </div>
        </div>
        
<!--
        <div class="alertwic">
            <span class="closebtn" onclick="this.parentElement.style.display='none';setCookie('wicalert', 'true', 1);">&times;</span>
             <a href="/afterhours.php">
                 <strong >Registration for the After Hours Program is now open!</strong> <u>Click here</u> to learn more!
             </a>
        </div>

-->

        <div class="alertwic">
            <span class="closebtn" onclick="this.parentElement.style.display='none';setCookie('wicalert', 'true', 1);">&times;</span>
             <a href="https://wichacks.io">
                 <strong >Registration for WiCHacks is now open! </strong> <u>Click here</u> to apply!
             </a>
        </div>



        <nav class="navbar navbar-default">
			<div class="container">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse">
					<span class="sr-only">Toggle Navigation</span>
					<i class="fa fa-bars"></i></button>
				<a href="<?php echo $level ?>index.php" class="navbar-brand">
					<img id="headerlogo" src="<?php echo($level)?>img/logo.png" alt="header logo">
				</a>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-navbar-collapse">
                    <ul class="nav navbar-nav main-navbar-nav">
                        <li <?php if($title=="Home"){echo "class='active'";} ?> ><a href="<?php echo $level ?>index.php" title="">HOME</a></li>
                        <li class="dropdown <?php if(($title=="Mission") || ($title=="FAQ")|| ($title=="Committes") || ($title=="Allies") || ($title=="Projects") || ($title=="Alumni")){echo "active";} ?>">
                            <a href="<?php echo $level ?>mission.php" title="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ABOUT<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo $level ?>mission.php" title="">MISSION</a></li>
                                <li><a href="<?php echo $level ?>faq.php" title="">FAQ</a></li>
                                <li><a href="<?php echo $level ?>committees.php" title="">COMMITTEES</a></li>
                                <li><a href="<?php echo $level ?>allies.php" title="">ALLIES</a></li>
                                <li><a href="<?php echo $level ?>projects.php" title="">PROJECTS</a></li>
                                <li><a href="<?php echo $level ?>alumni.php" title="">ALUMNI</a></li>
                            </ul>
                        </li>
                        <li class="dropdown  <?php if(($title=="Events") || ($title=="Annual Events") || ($title=="WiCHacks") || ($title=="Outreach")){echo "active";} ?>">
                            <a href="<?php echo $level ?>events.php" title="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">EVENTS<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo $level ?>events.php" title="">UPCOMING CALENDAR</a></li>
                                <li><a href="<?php echo $level ?>wichacks.php" title="">WICHACKS</a></li>
                                <li><a href="<?php echo $level ?>annual_events.php" title="">ANNUAL EVENTS</a></li>
                                <li><a href="<?php echo $level ?>outreach.php" title="">OUTREACH</a></li>
                                <li><a href="<?php echo $level ?>news.php" title="">IN THE NEWS</a></li>
                            </ul>
                        </li>
                        <li <?php if($title=="After Hours"){echo "class='active'";} ?>><a href="<?php echo $level ?>afterhours.php" title="">AFTER HOURS</a></li>
                        <li <?php if($title=="Blog"){echo "class='active'";} ?>><a href="<?php echo $level ?>blog.php" title="">BLOG</a></li>
                        <li <?php if($title=="Sponsor"){echo "class='active'";} ?>><a href="<?php echo $level ?>sponsor.php" title="">SPONSOR</a></li>
                        <li <?php if($title=="Contact Us"){echo "class='active'";} ?>><a href="<?php echo $level ?>contact.php" title="">CONTACT US</a></li>
                    </ul>                           
                </div><!-- /.navbar-collapse -->                
				<!-- END MAIN NAVIGATION -->
			</div>
		</nav>        
    </header>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


    <script src="<?php echo $level ?>js/bootstrap.min.js"></script>
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
        window.onload = checkCookie();

        /*

        //full calendar info
        window.mobilecheck = function() {
            var check = false;
            (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) check = true;})(navigator.userAgent||navigator.vendor||window.opera);
            return check;
        };

        $(function() {
            $('#calendar').fullCalendar({
                defaultView: window.mobilecheck() ? "listMonth" : "month",
                header: {
                    left: 'prev,next,today',
                    center: 'title',
                    right: 'month,agendaWeek,listMonth'
                },
                googleCalendarApiKey: 'AIzaSyDZJ9lZf0ZXRWnRGlqfoefKjwBhh3CVg7Q',
                eventClick: function(event) {
                    if (event.url) {
                        return false;
                    }
                },
                eventRender: function(eventObj, $el) {
                    console.log(eventObj);
                    if (eventObj.description != undefined) {
                        $el.popover({
                            title: eventObj.title,
                            content: eventObj.description,
                            trigger: 'hover',
                            placement: 'top',
                            container: 'body'
                        });
                    }
                },
                events: {
                    googleCalendarId: 'wicatrit@gmail.com'
                }
            });
        });*/

    </script>


