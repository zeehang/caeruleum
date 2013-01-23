<header id="topinfo">
	<div class="container">
	
		<div class="row visible-tablet">
			<div class="span12" id="ad-banner-large-tablet">
					<?php // Empty div used for correct ad placement ?>
			</div>
		</div><!-- end #ad-banner-large-tablet -->
	
		<div class="row">
			<?php wp_nav_menu(array('theme_location' => 'top_navigation', 
						'menu_class' => 'spannav navlist hidden-phone',
						'menu_id' => 'toplinks-info',
						'container' => '',
						)); ?>
			<div class="spanbanner visible-desktop">
				<?php get_template_part('ad','banner'); ?>
			</div><!-- end ad div (span8) -->
			<div class="spandate hidden-phone">
				<?php date_default_timezone_set('America/Los_Angeles'); ?>
				<span id="date-month"><?php echo date('F'); ?></span><br />
				<span id="date-day"><?php echo date('j'); ?></span>
			</div>
		</div><!-- end div.row (header row) -->
		<div class="row visible-phone mobile-nav">
			<img id="nameplate-mobile" src="/img/nameplate-mobile.png" />
			<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target="#nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<nav id="nav-collapse" class="accordion-body collapse">
				<form action="/" method="GET" id="search-mobile">
					<input type="search" placeholder="Search..." name="s"></input>
				</form>
				<?php wp_nav_menu(array('theme_location' => 'mobile_navigation')); ?>
			</nav>
		</div>
	</div><!-- end div.container -->
</header>

<nav class="container" id="nav-nameplate">
	<div class="row">
		<div class="span12" id="nameplate">
		<?php 
		$spectrum = false;
		foreach(get_the_category() as $cat)
		{
			switch($cat->name){
			    	case "Spectrum":
				$spectrum = true;
			    	break(2);
			}
		}

		if($spectrum) : ?>
			<a href="<?php echo home_url('/'); ?>"><img src="/img/nameplate-spectrum.png" class="hidden-phone" /></a>
		<?php else : ?>
			<a href="<?php echo home_url('/'); ?>"><img src="/img/nameplate.png" class="hidden-phone" /></a>
		<?php endif; ?>
		

		</div>
	</div><!-- end div.row -->
</nav>

	
<div id="firstnav-container-back" class="hidden-phone">
	<div class="container" id="firstnav-container">
		<nav class="row" id="firstnav">
			<?php wp_nav_menu(array('theme_location' => 'primary_navigation', 
									'menu_class' => 'navlist span12',
									'container' => '',
									'menu_id' => 'topMenu',
									)); ?>
			<form id="topsearch" action="/" method="get">
				<input type="text" name="s" placeholder="Search..." />
				<button type="submit"><i class="icon-search"></i></button>
			</form><!-- end form#topsearch -->
		</nav><!-- end nav#firstnav -->
	</div><!-- end div#firstnav-container -->
</div><!-- end div#firstnav-container-back -->
		
<div class="container">
	<div class="row">
		<div class="span7" id="inthenews">
			<span>In the news:</span>
			<?php wp_nav_menu(array('theme_location' => 'in_the_news', 
						'container' => '',
						)); ?>
		</div><!-- end div#inthenewscont -->
		<div class="span5 hidden-phone" id="followus">
			<a href="https://twitter.com/dailybruin" class="twitter-follow-button" data-show-count="false">Follow @dailybruin</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
			<div class="fb-follow" data-href="https://www.facebook.com/dailybruin" data-show-faces="false" data-font="arial" data-width="225"></div>
		</div>
	</div><!-- end div.row -->
	<div class="row visible-desktop" id="adrow">
		<div class="span6" id="adrow-house">
			<?php get_template_part('ad','housebanner'); ?>
		</div><!-- end div.span6 -->
		<div class="span6" id="adrow-out">
			<?php get_template_part('ad','smallbanner'); ?>
		</div><!-- end div.span6 -->
	</div><!-- end div.row -->
</div><!-- end div.container -->
