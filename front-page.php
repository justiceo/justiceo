<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Eighties
 * @author Justin Kopepasah
 * @since 1.0.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main home archive" role="main">

            <!--- Normal justiceo html begins -->

            <div class="wrap ">
        <div class="section sTop">
            <div class="inner">
                <div class="row">
                    <div class="col-md-offset-1 col-md-10 col-md-offset-1 col-lg-offset-2 col-lg-8 col-lg-offset-2">
                        <div class="col-xs-12 col-sm-5 col-md-5 banner-pic text-center">
                            <img src="<?php echo get_template_directory_uri() ?>/images/justice-ogbonna.jpg" alt="Justice Ogbonna" title="Justice Ogbonna">
                        </div>
                        <div class="col-xs-12 col-sm-7 col-md-7  banner-text">
                            <h1>Justice Ogbonna</h1>
                            <p>
                                I am a programmer, research assistant and web developer at Drexel University. Currently in my third year studying software engineering. I have worked on a good range of projects from websites and mobile apps to linux scripts and big data. I have learned to learn and everyday makes me a better programmer. Curious, cheerful and aspirous are few of the words that describe me. 
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div style="position: relative; top: 0px; left: 0px;" class="subMenu smint">
            <div class="inner">
                <div class="row">
                    <div class="col-md-offset-3 col-md-6 col-md-offset-3">
                        <a id="sTop" href="#sTop" title="About Justice" class="subNavBtn active">Me</a>
                        <a id="s1" href="#s1" title="Projects" class="subNavBtn">Projects</a>
                        <a id="s2" href="#s2" title="Skills" class="subNavBtn">Skills</a>
                        <a id="s3" href="contact" title="Contact" class="subNavBtn extLink end">Contact</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="section s1">
            <div class="inner projects">
                <div class="row projects">
                    <div class="col-xs-offset-1 col-xs-10 col-xs-offset-1 col-sm-offset-0 col-sm-12 col-md-offset-0 col-md-12 col-lg-offset-1 col-lg-10">
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 pro-col">
                            <img src="<?php echo get_template_directory_uri() ?>/images/justiceogbonna-com.PNG" alt="Justice Ogbonna" title="Justice Ogbonna">
                            <img src="<?php echo get_template_directory_uri() ?>/images/bitosoft.PNG" alt="Justice Ogbonna" title="Justice Ogbonna">
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 pro-col">
                            <img src="<?php echo get_template_directory_uri() ?>/images/prime.PNG" alt="Justice Ogbonna" title="Justice Ogbonna">
                            <img src="<?php echo get_template_directory_uri() ?>/images/phm-health.PNG" alt="Justice Ogbonna" title="Justice Ogbonna">
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 pro-col">
                            <img src="<?php echo get_template_directory_uri() ?>/images/kadin.PNG" alt="Justice Ogbonna" title="Justice Ogbonna">
                            <img src="<?php echo get_template_directory_uri() ?>/images/healthsource.PNG" alt="Justice Ogbonna" title="Justice Ogbonna">
                        </div>

                    </div>
                </div>

                <div class="row more">
                    <div class="col-xs-12 col-md-offset-4 col-md-4 text-center">
                        <div class="projects-btn">
                            <button class="btn btn-default btn-lg">Go To Projects</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section s2">
            <div class="inner">
                <div class="row  skills">
                    <div class="col-xs-12 col-md-6 text-center">
                        <div class="text-center">
                            <p><button class="btn btn-success btn-lg">Java</button>&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-success">python</button>&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-success btn-lg">bash</button></p>
                            <p><button class="btn btn-success">html</button>&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-success">sql</button>&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-success">mobile apps</button>&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-success">themes</button></p>
                            <p><button class="btn btn-success">css</button>&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-success btn-lg">Web Development</button>&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-success">javascript</button></p>
                            <p><button class="btn btn-success btn-lg">C++</button>&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-success">linux server admin</button>&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-success">php</button></p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 text-center">
                        <img src="<?php echo get_template_directory_uri() ?>/images/ide.PNG" title="Common IDEs" alt="Common IDEs" />
                    </div>
                </div>
            </div>
        </div>

        



    </div>
             <!--- Normal justiceo html ends -->

		</main><!-- #main -->    

	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
