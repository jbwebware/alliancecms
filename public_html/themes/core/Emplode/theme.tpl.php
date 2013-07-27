<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
    	<title><?php echo $venue_title; ?></title>

    	<link rel="stylesheet" media="screen" href="<?php echo $theme_folder; ?>/css/style.css" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<meta name="author" content="<?php /* echo $site_author; */ ?>" />
        <meta name="description" content="<?php echo $venue_description; ?>"/>
    	<meta name="keywords" content="" />
    	<meta name="robots" content="all"></head>

    	<!-- START Custom Headers -->
    	<?php /* if (!empty($customHeaders)) echo $customHeaders; */ ?>
    	<!-- END Custom Headers -->
    </head>

    <body>

        <div id="header">
        	<div class="center_wrapper">

                <div id="toplinks">
        			<div id="toplinks_inner">
        				<a href="https://twitter.com/jbWebWare">Twitter</a> | <a href="https://www.facebook.com/jbwebware">Facebook</a> | <a href="irc://chat.freenode.net/jbwebware">IRC</a>
        			</div>
        		</div>

        		<div class="clearer">&nbsp;</div>

        		<div id="site_title">
        			<h1>
                        <!-- <a href="">Alliance<span>CMS</span></a> -->
                        <a href="<?php echo $base_url; ?>"><?php echo $venue_title; ?></a>
                    </h1>
        			<p><?php echo $venue_tagline; ?></p>
        		</div>

        	</div>
        </div>

        <div id="navigation">
        	<div class="center_wrapper">

        		<?php echo $nav1; ?>

        		<div class="clearer">&nbsp;</div>

        	</div>
        </div>

        <div id="layout_body">

        	<div id="main_wrapper_outer">
        		<div id="main_wrapper_inner">
        			<div class="center_wrapper">

        				<div class="left" id="main">
        					<div id="main_content">

                                <br />
                                <?php echo $body; ?>
                                <br />

                            </div>
        				</div>

        				<div class="right" id="sidebar">

        					<div id="sidebar_content">

        						<?php /* for ($i=0; $i < count($menu1); $i++): */ ?>

        							<div class="box">

        							    <?php /* echo $menu1[$i]; */ ?>

									</div>

                            	<?php /* endfor; */ ?>

        					</div>

        				</div>

        				<div class="clearer">&nbsp;</div>

        			</div>
        		</div>
        	</div>

        </div>


        <div id="dashboard">
        	<div id="dashboard_content">
        		<div class="center_wrapper">
                    <!--
        			<div class="col3 left">
        				<div class="col3_content">

        					<h4>Tincidunt</h4>
        					<ul>
        						<li><a href="#">Consequat molestie</a></li>
        						<li><a href="#">Sem justo</a></li>
        						<li><a href="#">Semper eros</a></li>
        						<li><a href="#">Magna sed purus</a></li>
        						<li><a href="#">Tincidunt morbi</a></li>
        					</ul>

        				</div>
        			</div>

        			<div class="col3mid left">
        				<div class="col3_content">

        					<h4>Fermentum</h4>
        					<ul>
        						<li><a href="#">Semper fermentum</a></li>
        						<li><a href="#">Sem justo</a></li>
        						<li><a href="#">Magna sed purus</a></li>
        						<li><a href="#">Tincidunt nisl</a></li>
        						<li><a href="#">Consequat molestie</a></li>
        					</ul>

        				</div>
        			</div>

        			<div class="col3 right">
        				<div class="col3_content">

        					<h4>Praesent</h4>
        					<ul>
        						<li><a href="#">Semper lobortis</a></li>
        						<li><a href="#">Consequat molestie</a></li>
        						<li><a href="#">Magna sed purus</a></li>
        						<li><a href="#">Sem morbi</a></li>
        						<li><a href="#">Tincidunt sed</a></li>
        					</ul>

        				</div>
        			</div>

        			<div class="clearer">&nbsp;</div>
                    -->
        		</div>
        	</div>
        </div>


        <div id="footer">
        	<div class="center_wrapper">

        		<div class="left">
        			&copy; 2004-2013 <a href="http://www.jbwebware.com">jbWebWare.com</a> - Bringing The Web To You!!!
        		</div>
        		<div class="right">
        			<a href="http://templates.arcsin.se/">Website template</a> by <a href="http://arcsin.se/">Arcsin</a>
        		</div>

        		<div class="clearer">&nbsp;</div>

        	</div>
        </div>

    </body>
</html>