<!--
Created Fall 2017

Lauren DiDonato '20 (Webmaster)
Ariel Viggiano '20
Rachel Poturich '19
Dakota Sorenson '20

Maintained:
Jessi Miller '23


-->
<?php $title="Home";$level="";?>
<!DOCTYPE html>
<html lang="en">
<?php include 'header.php';?>
<body>
    <main class="site-main">
        <section class="hero_area">
            <div class="hero_content">
                <div class="slide">
                    <img src="img/hero.jpg">
                    <div class="slide-text">
                        <div class="slider-container">
                            <div class="row">
                                <div class="col-sm-12" id="intro">
                                    <h1>Women in Computing at RIT</h1>
                                    <h2>Dedicated to promoting the success and advancement of women in their academic and professional careers</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="slide">
                    <img src="img/logo.png">
                </div>

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

                <div class="dots">
                    <span class="dot" onclick="currentSlide(1)"></span>
                    <span class="dot" onclick="currentSlide(2)"></span>
                </div>

            </div>

            <script src="<?php echo $level ?>js/slider.js"></script>

        </section>

        <section class="events-area">
            <h3 class="events-header">EVENTS</h3>
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <a href="/afterhours.php"><img src="img/events/ahlogo.png"></a>
                    </div>
                    <div class="col-sm-3">
                        <a href="https://wichacks.io/"><img src="img/events/wichackslogo.png"></a>
                    </div>
                    <div class="col-sm-3">
                        <a href="/post.php?id=6"><img src="img/events/wiconnectslogo.png"></a>
                    </div>
                    <div class="col-sm-3">
                        <a href="/post.php?id=11"><img src="img/events/rghlogo.png"></a>
                    </div>
                </div>
            </div>
            <a href="/outreach.php"><p class="events-more">View More <i class="fa fa-angle-right"></i></p></a>
        </section>

        <section class="announcements-area">

        </section>

        <section class="boxes_area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="box" id="meetingtimes">
                            <h3>SPRING  MEETING TIMES</h3>
                                <b>General Meeting:</b>
                                <ul>
                                    <li>Wed • 6:30pm • GOL-1400 (The Auditorium)</li>
                                </ul>
                                <b>Events Committee:</b>
                                <ul>
                                    <li>Tue • 11:00am • GOL-1688</li>
                                </ul>
                                <b>Outreach Committee:</b>
                                <ul>
                                    <li>Tue • 6:30pm • GOL-2690</li>
                                </ul>
                                <b>Public Relations Committee:</b>
                                <ul>
                                    <li>Mon • 6:30pm • GOL-2600 (WiC Space)</li>
                                </ul>
                                <b>Allies Committee:</b>
                                <ul>
                                    <li>Fri • 5:00pm • GOL-2500</li>
                                </ul>
                                <b>WiCHacks Committee:</b>
                                <ul>
                                    <li>Thurs • 6:00pm • GOL-3435</li>
                                </ul>
                                <b>Projects Committee:</b>
                                <ul>
                                    <li>Mon • 6:00pm - 8:00pm • <a href="http://hack.rit.edu/">Construct</a></li>
                                </ul>
                            <i class="fa fa-clock-o"></i>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="box" id="meetingtimes">
                            <h3>UPCOMING EVENTS</h3>
                            <div id="general-event">
                                <!--<b>Next General Meeting (4/17):</b>
                                <br>Microtalk on Meta-programming-->
                                <b>Have a great summer!</b>

                            </div>
                            <!--Example Event Do Not Delete -->
                            <!--<b>Powers Farm Market (Fall Activities)</b>
                            <ul>
                                <li>Sat. 10/27 • 1pm • GOL Atrium for carpool</li>
                                <li>RSVP: <a href="https://bit.ly/PowersMarket2018" target="_blank">bit.ly/PowersMarket2018</a> </li>
                            </ul>-->
                            <b>Feedback Survey</b>
                            <ul>
                                <li>Fill Out: <a href="https://bit.ly/WiCFeedback2019" target="_blank">bit.ly/WiCFeedback2019</a> </li>
                            </ul>
                            <b>Teach and Volunteer for Mobile Tech Van</b>
                            <ul>
                                <li>Volunteer: <a href="https://bit.ly/Afterschoolteacherapplication" target="_blank">bit.ly/Afterschoolteacherapplication</a> </li>
                            </ul>


                            <i class="fa fa-calendar"></i>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="box">
                            <h3>FEATURED NEWS</h3>
                            <p>
                                <a target="_blank" href="http://www.rit.edu/news/story.php?id=69217&source=enewsletter">
                                    <i class="fa fa-university newsicon" aria-hidden="true"></i><span class="news-head">University News</span> | RIT hosts all-women hackathon March 2-3</a>
                            </p>
                            <p>
                                <a target="_blank" href="http://spectrumlocalnews.com/nys/rochester/community/2018/11/17/roc-girl-hackathon-">
                                    <i class="fa fa-video-camera newsicon" aria-hidden="true"></i><span class="news-head">WiC on TV</span> | Spectrum News on ROCGirlHacks 2018 </a>
                            </p>
                            <p>
                                <a target="_blank" href="https://www.rit.edu/news/story.php?id=67898">
                                    <i class="fa fa-university newsicon" aria-hidden="true"></i><span class="news-head">University News</span> | RIT women are networking and learning at 2018 Grace Hopper Celebration</a>
                            </p>
                            <p>
                                <a target="_blank" href="https://stories.mlh.io/community-roundup-empowering-safety-security-and-diversity-caaf07022edc">
                                    <i class="fa fa-newspaper-o newsicon" aria-hidden="true"></i><span class="news-head">MLH Stories</span> | Hackathons Empowering Safety, Security, and Diversity </a>
                            </p>
                            <p>
                                <a target="_blank" href="https://theithacan.org/news/women-in-computing-team-wins-award-for-community-service-app/">
                                    <i class="fa fa-newspaper-o newsicon" aria-hidden="true"></i><span class="news-head">The Ithacan</span> | Women in Computing team wins award for community service app </a>
                            </p>
                            <p>
                                <a target="_blank" href="https://13wham.com/news/local/all-girl-hackathon-at-rit-highlights-growing-interest-of-coding-among-women">
                                    <i class="fa fa-video-camera newsicon" aria-hidden="true"></i><span class="news-head">WiC on TV</span> | WiCHacks 2018 - WHAM 13 </a>
                            </p>
                            <p>
                                <a target="_blank" href="https://www.democratandchronicle.com/story/news/2017/10/27/girl-hackathon-rit/804609001/">
                                    <i class="fa fa-newspaper-o newsicon" aria-hidden="true"></i><span class="news-head">Democrat and Chronicle</span> | All-girl hackathon to be held at RIT to spur interest in STEM careers </a>
                            </p>
                            <p>
                                <a target="_blank" href="https://www.rit.edu/news/story.php?id=64018&source=enewsletter">
                                    <i class="fa fa-university newsicon" aria-hidden="true"></i><span class="news-head">University News</span>| ROCGirlHacks is Oct. 28</a></p>


                            <p class="text-center"><a href="/news.php"><b>More News</b></a> </p>

                            <i class="fa fa-newspaper-o"></i>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
    </main>
    <?php include 'footer.php';?>
</body>
</html>

