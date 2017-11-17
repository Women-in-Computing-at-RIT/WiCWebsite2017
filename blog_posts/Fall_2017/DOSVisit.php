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
                        <li class="active">Department of State Visit</li>
                    </ol>                    
                </div>
            </div>
        </div>
    </div>
    <main class="site-main page-main">
        <div class="container">
            <div class="row">
                <section class="page col-sm-9">
                    <h2 class="page-title">Department of State Visit</h2>
                    <div class="entry">
                        <h4>About the Department of State:</h4>
                        <p>The United States Department of State is the federal executive department that advises the President and leads the country in foreign policy issues. The Department of State has partnered with the Washington Center to create the Foreign Affairs Information Technology Fellowship Program and other programs.</p><br>
                        
                        <h4>Working With WiC:</h4>
                        <p>Mike Duerr, a representative from the Department of State, presented general information about the Foreign Affairs Information Technology (FAIT) Fellowship Program. </p>
                        <p>Funded by the Department of State and administered by the Washington Center, the FAIT Fellowship is currently in its second year of operation. It was created to recruit the next generation of Foreign Service Managment Information Specialists. It’s available for both undergraduates and graduates. </p>
                        <p>Current sophomores or anyone graduating in the year of 2020 can apply for the undergraduate track, while you must be in graduate school to apply for the graduate track.This is a great opportunity for people who want to be an IT professional working for the Foreign Service and being part of diplomatic missions all over the world. MIS Specialists promote US foreign policy on the ground level. It is also a great chance to live aboard. </p>
                        <p>Students who want to apply for FAIT should be passionate about public service, desire to be challenged, and be interested in protecting and serving the United States and the world.</p>
                        <p>The Fellowship includes mentoring and professional development, employment with the Foreign Service for five years, and two ten week internships. The first internship is in Washington D.C. and the second internship is aboard at an embassy or consulate, with over a thousand options for what organization you will be working for. Students are able to pick a region where they would like to work aboard, but none of the locations that the students will be placed in are dangerous.  The students will be housed for free throughout the duration of both internships, with only the cost of travel and living being paid personally.  As another incentive, the recipients of this fellowship receive $37,500 in aid.</p>
                        <p>Requirements for the Fellowship include a cumulative 3.2 GPA on a 4.0 Scale. For many students, the biggest hurdle is filling the medical, security, and suitability clearance. The application is due on December 31, 2017. Finalists will be selected in February and March 2018. Interviews will be held in Washington D.C. in the Spring of 2018. Only five fellows will be selected in total and will attend an orientation to the program in Washington D.C. during June 2018.</p><br>
                        
                        <h4>Resources:</h4>
                        <ul>
                            <li><a href="http://www.twc.edu/foreign-affairs-information-technology-fellowship-program" target="_blank">Foreign Affairs Information Technology (IT) Fellowship Program Site</a></li>
                            <li><a href="http://www.twc.edu/foreign-affairs-information-technology-fellowship-program/how-to-apply" target="_blank">Apply for the FAIT Fellowship Program</a></li>
                        </ul>
                        <br>
                        <img class="blogimg" src="<?php echo($level)?>img/blog/fall_2017/dos.jpg" alt="dos pic">
                        
                        <div class="blogbtminfo">
                            <span class="blogdate">Posted: 11/01/17</span> 
                            <span class="pipe">| </span>
                            <span class="blogtype"><i class="fa fa-building"></i> Company Visit</span>
                        </div>
                        
                        <div class="blogbtmback">
                            <a href="<?php echo($level)?>blog.php"><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i> Back to Blog</a>
                        </div>
                        
                    </div>
                </section>
                <aside class="sidebar col-sm-3">
                    <p class="blogback"><a href="<?php echo($level)?>blog.php"><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i> Back to Blog</a></p>
                    <img src="<?php echo($level)?>img/blog/fall_2017/doslogo.png" alt="EY logo">
                </aside>
            </div>
        </div>
    </main>
     <?php include $level.'footer.php';?>
</body>
</html>