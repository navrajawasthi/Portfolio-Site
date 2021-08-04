<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package navrajawasthi
 */
get_header();
?>

<main id="primary" class="site-main">

    <div id="fullpage intro" class="hero-section">

        <!-- section1 -->
        <div class="section section1"
            style="background-image: url('<?php echo get_template_directory_uri();?>/assets/image/navraj01.png')">
            <div class="first-slide">
                <h1>I Am Navraj.</h1>
                <span>front-end developer.</span>
                <div class="link-icons-first">
                    <a href="https://www.facebook.com/navraj.awasthi3" target="_blank"><i
                            class=" fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/navraj_awasthi" target="_blank"><i class="fa fa-instagram"
                            aria-hidden="true"></i></a>
                    <a href="https://www.linkedin.com/in/navraj-awasthi-b5962617b" target="_blank"><i
                            class="fa fa-linkedin"></i></a>
                    <a href="https://twitter.com/awasthinavraj11" target="_blank"><i class="fa fa-twitter"></i></a>
                </div>
            </div>
        </div>

        <!-- section2 -->
        <div class="section section2" data-anchor="resume"
            style="background-image: url('<?php echo get_template_directory_uri();?>/assets/image/navraj03.jpg')">
            <div class="overlay"></div>
            <div class="second-slide">
                <h1>MY SKILLS</h1>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="education-skill">
                            <h4>EDUCATION</h4>
                        </div>
                        <div class="education-section">
                            <p>2018 - 2020</p>
                            <span>MASTERS DEGREE</span>
                            <P>I completed my Masters degree in Computer Application from Lovely
                                Professional
                                University in 2020.</P>
                        </div>
                        <div class="education-section">
                            <p>2014 - 2017</p>
                            <span>BACHELOR DEGREE</span>
                            <P>I completed my Bachelors degree in Computer Application from Lovely
                                Professional
                                University in 2017.</P>
                        </div>
                        <div class="education-section">
                            <p>2012 - 2014</p>
                            <span>+2 LEVEL</span>
                            <P>I completed my +2 level in Management from Global College of Managemnet in
                                2014.</P>
                        </div>
                        <div class="education-section">
                            <p>2001 - 2011</p>
                            <span>SLC</span>
                            <P>At 2011 I completed my School Leaving certificate (SLC ). At this level I got
                                first opportunity to know about computers.</P>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="work-experience">
                            <h4>WORK EXPERIENCE</h4>
                        </div>
                        <div class="working">
                            <p>2021</p>
                            <span>Front-End Developer</span>
                            <P>After I completed my Masters degree in Computer Application. I joined a
                                company named Web Expert Nepal Pvt. Ltd.
                                My role is to designe Web-pages using HTML, CSS, SCSS, WordPress, jQuery, JavaScript,
                                Bootstrap and make user-friendly.
                            </P>
                        </div>
                        <div class="working">
                            <p>2020 - 2021</p>
                            <span>Front-End Developer</span>
                            <P>While pursuing my Masters degree in Computer Application. I joined a
                                company named Whitehat Agency Pvt. Ltd.
                                My role was to developed a complete website named as Helping-Hand using
                                HTML, CSS, jQuery, JavaScript,
                                Bootstrap MYSQL database, PHP and make user-friendly.
                            </P>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- section3 -->
        <div class="section section3" data-anchor="about"
            style="background-image: url('<?php echo get_template_directory_uri();?>/assets/image/navraj02.jpg')">
            <div class="overlay"></div>
            <div class="third-slide">
                <h1>ABOUT ME</h1>
                <span>front-end developer.</span>
                <p>Hello, I’m Navraj, an UI/UX Designer. I have designed website for national and
                    international companies.
                    When I’m not in designing, I enjoy Cricket, Football and traveling along with my
                    friends.</p>
                <div class="about" id="about-me">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="personal-details">
                                <span>PERSONAL INFORMATION</span>
                                <p>Name: <span>Navraj Awasthi</span></p>
                                <hr>
                                <p>Birthday: <span>18/09/1996</span></p>
                                <hr>
                                <p>Address: <span>Kathmandu, Nepal</span></p>
                                <hr>
                                <p>Email: <span>awasthinavraj05@gmail.com</span></p>
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <div class="development-skill">
                                <span>DEVELOPMENT SKILL</span>
                            </div>
                            <div class="demo">
                                <div class="demoprogress1">
                                    <p>HTML5</p>
                                    <div class="progressbar">
                                        <div class="progress"></div>
                                        <div class="percentCount">80%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="demo">
                                <div class="demoprogress2">
                                    <p>CSS</p>
                                    <div class="progressbar">
                                        <div class="progress"></div>
                                        <div class="percentCount">75%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="demo">
                                <div class="demoprogress3">
                                    <p>BOOTSTRAP</p>
                                    <div class="progressbar">
                                        <div class="progress"></div>
                                        <div class="percentCount">40%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="demo">
                                <div class="demoprogress4">
                                    <p>RESPONSIVE DESIGN</p>
                                    <div class="progressbar">
                                        <div class="progress"></div>
                                        <div class="percentCount">60%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="demo">
                                <div class="demoprogress5">
                                    <p>WORDPRESS</p>
                                    <div class="progressbar">
                                        <div class="progress"></div>
                                        <div class="percentCount">65%</div>
                                    </div>
                                </div>
                            </div>
                            <div class="demo">
                                <div class="demoprogress6">
                                    <p>SCSS</p>
                                    <div class="progressbar">
                                        <div class="progress"></div>
                                        <div class="percentCount">90%</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- section4 -->
        <div class="section section4" data-anchor="portfolio"
            style="background-image: url('<?php echo get_template_directory_uri();?>/assets/image/navraj06.jpg')">
            <div class="overlay"></div>
            <div class="fourth-slide">
                <h1>My Projects</h1>
                <div class="filter filter-active">
                    <button data-name='*' class="btn active-filter">Show All</button>
                    <button data-name='.html' class="btn">html</button>
                    <button data-name='.bootstrap' class="btn">bootstrap</button>
                    <button data-name='.php' class="btn">php</button>
                    <button data-name='.wordpress' class="btn">wordpress</button>
                </div>
                <div class="grid project-pop">
                    <div class="grid-sizer"></div>
                    <div class="gutter-sizer"></div>
                    <div class="grid-item  html">
                        <a href="<?php echo get_template_directory_uri();?>/assets/image/html1.jpg"><img
                                src="<?php echo get_template_directory_uri();?>/assets/image/html1.jpg" alt="">
                            <div class="overlay-grid-filter">
                                <span>design by html</span>
                            </div>
                        </a>
                    </div>
                    <div class="grid-item bootstrap">
                        <a href="<?php echo get_template_directory_uri();?>/assets/image/bootstrap1.PNG"><img
                                src="<?php echo get_template_directory_uri();?>/assets/image/bootstrap1.PNG" alt="">
                            <div class="overlay-grid-filter">
                                <span>design by bootstrap</span>
                            </div>
                        </a>
                    </div>
                    <div class="grid-item html">
                        <a href="<?php echo get_template_directory_uri();?>/assets/image/html2.jpg"><img
                                src="<?php echo get_template_directory_uri();?>/assets/image/html2.jpg" alt="">
                            <div class="overlay-grid-filter">
                                <span>design by html</span>
                            </div>
                        </a>
                    </div>
                    <div class="grid-item php">
                        <a href="<?php echo get_template_directory_uri();?>/assets/image/php1.jpg"><img
                                src="<?php echo get_template_directory_uri();?>/assets/image/php1.jpg" alt="">
                            <div class="overlay-grid-filter">
                                <span>design by php</span>
                            </div>
                        </a>
                    </div>
                    <div class="grid-item bootstrap">
                        <a href="<?php echo get_template_directory_uri();?>/assets/image/bootstrap2.jpg"><img
                                src="<?php echo get_template_directory_uri();?>/assets/image/bootstrap2.jpg" alt="">
                            <div class="overlay-grid-filter">
                                <span>design by bootstrap</span>
                            </div>
                        </a>
                    </div>
                    <div class="grid-item wordpress">
                        <a href="<?php echo get_template_directory_uri();?>/assets/image/wordpress1.PNG"><img
                                src="<?php echo get_template_directory_uri();?>/assets/image/wordpress1.PNG" alt="">
                            <div class="overlay-grid-filter">
                                <span>Design By WordPress and SCSS</span>
                            </div>
                        </a>
                    </div>
                    <div class="grid-item php">
                        <a href="<?php echo get_template_directory_uri();?>/assets/image/php2.jpg"><img
                                src="<?php echo get_template_directory_uri();?>/assets/image/php2.jpg" alt="">
                            <div class="overlay-grid-filter">
                                <span>design by php</span>
                            </div>
                        </a>
                    </div>
                    <div class="grid-item wordpress">
                        <a href="<?php echo get_template_directory_uri();?>/assets/image/wordpress2.PNG"><img
                                src="<?php echo get_template_directory_uri();?>/assets/image/wordpress2.PNG" alt="">
                            <div class="overlay-grid-filter">
                                <span>Design By WordPress and SCSS</span>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <!-- section5 -->
        <div class="section section5" data-anchor="contact"
            style="background-image: url('<?php echo get_template_directory_uri();?>/assets/image/navraj04.jpg')">
            <div class="overlay"></div>
            <div class="fifth-slide">
                <h1>Contact Information</h1>
                <div class="row">
                    <div class="col-lg-5">
                        <div class="contact-details">
                            <span>Full Name:</span>
                            <p>Navraj Awasthi</p>
                            <hr>
                            <span>Address:</span>
                            <p>Kathmandu, Nepal</p>
                            <hr>
                            <span>Phone Number:</span>
                            <p>+977-9840062351</p>
                            <hr>
                            <span>Email Address:</span>
                            <p>awasthinavraj05@gmail.com</p>
                            <hr>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="contact-form">
                            <?php echo do_shortcode( '[contact-form-7 id="17" title="Contact form 1"]' ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>

</main><!-- #main -->

<?php
// get_sidebar();
get_footer();