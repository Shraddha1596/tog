<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Flash
 */

get_header(); ?>

	<?php
	/**
	 * flash_before_body_content hook
	 */
	do_action( 'flash_before_body_content' ); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main" style="margin-bottom:50px">

		<?php 
		/*  ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;*/

			/* Start the Loop */
			/*while ( have_posts() ) : the_post(); */

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				/* get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

        endif; */ 
        
        ?>
        
        <div style="background-image:url('http://localhost/wordpress/wp-content/uploads/2019/01/banner.png');background-repeat: no-repeat;
    background-size: cover; height:550px;">
            <!-- <img style="max-width: 100% !important; height:550px;" src="http://localhost/wordpress/wp-content/uploads/2019/01/banner.png"> -->
        </div>
        
        
        <div style="background-color:#d3d3d34f; padding-bottom:30px; ">
            <div style="text-align:center; padding-top:20px; padding-bottom:40px;">
                <button style="font-size:15px; font-weight:bold; margin-right:20px; background-color:#42b9bf; box-shadow: 0px 15px 10px #d9f1f2;">
                    FREE BUSINESS VALUATION <i class="fas fa-angle-double-right" ></i>
                </button>
                <button style="font-size:15px; font-weight:bold; background-color:#42b9bf; box-shadow: 0px 15px 10px #d9f1f2;">
                    FREE BUYERS CONSULTATION <i class="fas fa-angle-double-right"></i>
                </button>
            </div>
            <div class="data">
                <!-- <p>
                    <span></span>
                    WE ARE SO VERY DIFFERENT -->
                    <div class="parent">
                        <div class="child1" style="margin-right:10px;"></div>
                        <div class="child2"> 
                            <h3 style="text-align:center; padding-top:20px;">WE ARE SO VERY DIFFERENT</h3>
                        </div>
                        <div class="child3" style="margin-left:10px;"></div>
                    </div>

                    <!-- <span></span>
                </p> -->

                <div style="margin:15px 30px 15px 30px; font-size:13px">
                    <div style="margin-bottom:20px">
                        <p style="font-weight:bold">
                            We are success-fee basis only.
                        </p>
                        <span>We only get paid if you are successful.  Beware of any intermediary wanting paid monthly or expecting fees for valuation or preparing documents. </span>
                    </div>
                    <div style="margin-bottom:20px">
                        <p style="font-weight:bold">We’ve been buying/selling companies for 20 years, with total value >$500 Million.</p>
                        <span>
                        We have been through many transactions and have experienced just about everything that can happen in the process.  
                        We are experts through the entire process.  You benefit from our knowledge.  There are many “Brokers” out there 
                        that serve as listing agents, and you won’t see them again until closing.  In this complicated process, you need 
                        an Expert Advisor.  Over ½ the time we are hired, there is already a buyer and seller in place.  We’re hired to 
                        successfully get everyone to the finish line.
                        </span>
                    </div>
                    <div style="background-color:#42b9bf; padding:10px 20px 10px 20px; margin:0px 0px 20px 0px">
                        <p style="font-weight:bold; color:white; font-size:16px">
                            Very experienced in all aspects of Business Purchases and Sales.                        
                        </p> 
                        <div style="font-size:13px">
                            <p style="margin-top:5px; color:white">
                                <i class="fas fa-check" style="margin-right:8px;"></i>
                                Thoroughly experienced and understand Due Diligence process                            
                            </p> 
                            <p style="margin-top:5px; color:white">
                                <i class="fas fa-check" style="margin-right:8px;"></i>
                                Very Experienced with accounting, including GAAP and Tax-Basis 
                            </p> 
                            <p style="margin-top:5px; color:white">
                                <i class="fas fa-check" style="margin-right:8px;"></i>
                                Experienced with all Transaction Legal documents
                            </p> 
                            <p style="margin-top:5px; color:white">
                                <i class="fas fa-check" style="margin-right:8px;"></i>
                                Extensive experience with Advising and Counseling business 
                                owners and buyers through the roller coaster of emotions that occur through the process 
                            </p> 
                            <p style="margin-top:5px; color:white">
                                <i class="fas fa-check" style="margin-right:8px;"></i>
                                Expert in valuation 
                            </p> 
                            <p style="margin-top:5px; color:white">
                                <i class="fas fa-check" style="margin-right:8px;"></i>
                                Have spoken to professionals on business valuation and business sale process 
                            </p> 
                        </div>   
                    </div>
                    <div style="margin-bottom:20px">
                        <p style="font-weight:bold">
                            We’ve built a business on referrals from Very Satisfied Customers.
                        </p>
                        <span>
                        For 20 years, The O’Connor Group never had a website, business cards, or any literature 
                        or company information.  All of our client came from referrals from past clients or their 
                        accountants or attorneys.  Though we are proud we’ve built a successful business on referrals, 
                        we need to get with the times in 2019.
                        </span>
                    </div>
                    <div style="margin-bottom:20px">
                        <p style="font-weight:bold">
                        We do specialize on businesses with cash flow of $250K or greater, with many clients in the $Millions of annual cash flow.
                        </p>
                        <span>
                        We specialize in manufacturing, distribution, and service companies across all industries.  We’ve sold companies to Big 4 
                        accounting firms and large corporations as well as to smaller companies and individuals.  We do not have experience in convenience
                         stores, retail stores, or very small companies.
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div style="margin-top:20px;">
            <div style="font-size:28px; text-align:center; width: 1200px; margin: 0px auto;">
                <p style="font-size:28px; text-align:center; margin-bottom:30px">
                    WHAT OUR CLIENTS SAY
                </p>
            </div>
            <div style="margin:0 auto; width: 1200px;  ">
                <div style=" width:103px; margin:0 auto; ">
                    <div style="position: relative; border: 4px solid #1c9ba4; height: 98px; width: 100px; " >

                        <img style=" position: absolute; height: 95px; width: 105px; top: 1px;border-radius: 0 38px 0 38px;" src="http://localhost/wordpress/wp-content/uploads/2019/01/p.jpg">

                    </div>
                    
                </div>
                
            </div>
            <p style="text-align:center; font-size: 12px; font-weight: bold; margin-top:10px; margin-bottom:10px">ELIZABETH</p>
        
                <!-- <img src="http://localhost/wordpress/wp-content/uploads/2019/01/client.jpg"> -->
            <div style="font-size:28px; text-align:center; width: 1200px; margin: 0px auto;">
                    <p style="width:50%; text-align:center; font-size:15px; margin:0px auto; color:gray">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et 
                    dolore magna aliqua.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                     ut labore et dolore magna aliqua.
                    </p>
                    <i class="fas fa-quote-right" style="font-size:50px; margin-top:20px ;color:lightgray"></i>
            </div>
            
        </div>
    </div>

		</main><!-- #main -->
	</div><!-- #primary -->

	<?php
	/**
	 * flash_after_body_content hook
	 */
	do_action( 'flash_after_body_content' ); ?>

<?php
get_sidebar();
get_sidebar('left');
get_footer();
