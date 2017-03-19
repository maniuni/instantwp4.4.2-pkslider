<?php get_header(); ?>
	
<div id="content">

<div id="fullpage">
	<div class="section">
	
		<div class="slide center"> 
			<header>
				<div class="background center">
					<div class="logo">
						<a href="<?php echo esc_url( home_url() ); ?>">
							<img class="" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="P&amp;K logo" width="280" />
						</a>
					</div>
				</div>
				<div class="site-description center">P&amp;K BV Advisory Services</div>
			</header>
			<h1>Our Company</h1>		
			<div class="line-separator center"></div>		
			<p class="par-main center">P&K BV also provides Strategic Advisory services, as well as Asia Gateway Market Entry Services to companies seeking to start or expand their business in China. The company has its headquarters in Curacao and a presence in Shanghai,
together with a network of investors and business contacts across Globally.</p>
			<img class="main-img" src="<?php echo get_template_directory_uri(); ?>/images/curacao.png" alt="Curacao"  />
		</div><!-- .slide -->
		
		<div class="slide center"> 
			<header>
				<div class="background center">
					<div class="logo">
						<a href="<?php echo esc_url( home_url() ); ?>">
							<img class="" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="P&amp;K logo" width="280" />
						</a>
					</div>
				</div>
				<div class="site-description center">P&amp;K BV Advisory Services</div>
			</header>
			<h1>Our Focus Capital Raising</h1>
			<div class="line-separator center"></div>
			<p class="par-main center">P&K BV is a Capital Raising and Private Equity firm specialized in raising capital and
funding for Growth Stage focusing exclusively on digital companies including
E-Commerce, Consumer Internet, Media & Entertainment and Social Media based companies.</p>
			<img class="main-img" src="<?php echo get_template_directory_uri(); ?>/images/shanghai.png" alt="Shanghai" width="1000" height="400" />
		</div><!-- .slide -->
		
		<div class="slide center">
			<header>
				<div class="background center">
					<div class="logo">
						<a href="<?php echo esc_url( home_url() ); ?>">
							<img class="" src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="P&amp;K logo" width="280" />
						</a>
					</div>
				</div>
				<div class="site-description center">P&amp;K BV Advisory Services</div>
			</header>
			<a href="<?php echo esc_url( home_url( '#1/3' ) ); ?>" class="contact-btn"/></a>
		</div><!-- .slide -->
		
		<div class="slide"> 
			<div class="form">
				<?php echo do_shortcode( '[contact-form-7 id="68" title="Contact form 1"]' ); ?> </div>
			<div id="shadow"></div>
		</div>


<?php get_footer(); ?>
