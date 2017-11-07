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
                        <li class="active">CoreOS Visit</li>
                    </ol>                    
                </div>
            </div>
        </div>
    </div>
    <main class="site-main page-main">
        <div class="container">
            <div class="row">
                <section class="page col-sm-9">
                    <h2 class="page-title">CoreOS Visit</h2>
                    <div class="entry">
                        <h4>About CoreOS:</h4>
                        <p>CoreOS supports the development of open source projects: Container Linux and Kubernetes. Container Linux is the leading container operating system, designed to be managed and run at massive scale, with minimal operational overhead. Kubernetes is a powerful container management software inspired by Google’s operational experience with containers. Essential features like service discovery, automatic load-balancing, container replication and more are built in. The company was founded in 2013, is based in San Francisco, but has locations in New York City and Berlin as well. For more information about the CoreOS, visit coreos.com/about.</p><br>
                        
                        <h4>Working With WiC:</h4>
                        <p>During the visit, CoreOS presented general information about the company and answered questions about their business and the personal experience of the “Coreos” (employees of CoreOS).</p>
                        
                        <p><b>RIT alumni Derek Gonyeo, Andrew Jeddeloh, and Stephen Demos represented CoreOs on Monday, October 2nd.</b></p><br>
                        
                        <p><b>Q: </b>What majors do you focus on hiring?
                        <br><b>A: </b>We don’t focus on the major, rather, on your skills.</p>
                        
                        <p><b>Q: </b>What qualities makes an intern stand out?
                        <br><b>A: </b>We look for students who undertake projects outside class and have had past internships and experience.</p>
                        
                        <p><b>Q: </b>What does a typical work day look like?
                        <br><b>A: </b>I come in between nine and ten. Then, I work, break for lunch, and work. Usually, the day does not include a lot of meetings. However, on my team, there is a weekly team lunch meeting.</p>
                        
                        <p><b>Q: </b>What was your previous experience to CoreOS before working full time?
                        <br><b>A: </b>We previously interned at CoreOS and transitioned into full time team members after graduating from RIT.</p>
                        
                        <p><b>Q: </b>Open source is often tied to the free products. How does CoreOS generate revenue?
                        <br><b>A: </b>The underlying code is open source, however, we sell the products with features like automatic updates.</p>
                        
                        <p><b>Q: </b>For many startup companies, documentation is often not held to a rigorous standard. How is documentation within CoreOS?
                        <br><b>A: </b>Early on, CoreOS brought in a contracted, and now full time, technical writer. This has allowed our company to have a better handle on documentation and organization than other typical startup companies.</p><br>
                        
                        <h4>Opportunities at CoreOs:</h4>
                        <p>CoreOS offers semester and summer co-ops and internships. CoreOS does not offer relocation assistance for internships, but does for full time positions.</p><br>
                        
                        <h4>Resources:</h4>
                        <ul>
                            <li><a href="https://coreos.com/careers" target="_blank">CoreOS Careers</a></li>
                            <li><a href="https://coreos.com/kubernetes/docs/1.0.6/index.html" target="_blank">Kubernetes Documentation</a></li>
                            <li><a href="https://coreos.com/os/docs/latest" target="_blank">Container Linux Documentation</a></li>
                            <li><a href="http://www.liberidu.com/blog/2015/04/11/basic-newbie-install-coreos-on-virtualbox-getting-started-with-docker/" target="_blank">Setup CoreOS for beginners</a></li>
                        </ul>
                        
                        
                        <br>
                        
                        <div class="blogbtminfo">
                            <span class="blogdate">Posted: 10/02/17</span> 
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
                    <img src="<?php echo($level)?>img/blog/fall_2017/coreoslogo.png" alt="EY logo">
                </aside>
            </div>
        </div>
    </main>
     <?php include $level.'footer.php';?>
</body>
</html>