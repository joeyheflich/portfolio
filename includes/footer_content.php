		<a id="back-to-top" href="#0" class="back-to-top"><i id="icon-to-top" class="fa fa-angle-up back-to-top-icon" aria-hidden="true"></i><span class="screen-reader-text">Scroll to Top</span></a>
		<footer id="site-footer" class="site-footer dark padding-top-xl text-center" role="contentinfo">
			<?php $gifs = array( 'amazing.gif', 'archer.gif', 'cornelius.gif', 'duncan.gif', 'ed.gif', 'fry.gif', 'gaius.gif', 'grab.gif', 'jello.gif', 'jerry.gif', 'lemon.gif', 'maniacs.gif', 'moss.gif', 'rigby.gif', 'sokka.gif', 'tyler.gif', 'zaius.gif' ); 
				shuffle($gifs); ?>

			<ul class="footer-menu-items margin-bottom-xl text-medium">
				<li class="footer-menu-item"><a href="<?php echo SITE_URL; ?>" class="footer-menu-link">Home</a></li>
				<li class="footer-menu-item"><a href="<?php echo SITE_URL; ?>projects/" class="footer-menu-link">Projects</a></li>
				<li class="footer-menu-item"><a href="<?php echo SITE_URL; ?>process/" class="footer-menu-link">Process</a></li>
				<li class="footer-menu-item"><a href="<?php echo SITE_URL; ?>about/" class="footer-menu-link">About</a></li>
			</ul>

			<ul class="footer-social-items margin-bottom-xl">
				<li class="footer-social-item"><a href="<?php echo $twitter_url; ?>" class="footer-social-link"><i class="fa fa-twitter" aria-hidden="true"></i><span class="screen-reader-text">Twitter</span></a></li>
				<li class="footer-social-item"><a href="<?php echo $insta_url; ?>" class="footer-social-link"><i class="fa fa-instagram" aria-hidden="true"></i><span class="screen-reader-text">Instagram</span></a></li>
				<li class="footer-social-item"><a href="<?php echo $github_url; ?>" class="footer-social-link"><i class="fa fa-github" aria-hidden="true"></i><span class="screen-reader-text">Github</span></a></li>
				<li class="footer-social-item"><a href="<?php echo $linked_url; ?>" class="footer-social-link"><i class="fa fa-linkedin" aria-hidden="true"></i><span class="screen-reader-text">LinkedIn</span></a></li>
				<li class="footer-social-item"><a href="<?php echo $spotify_url; ?>" class="footer-social-link"><i class="fa fa-spotify" aria-hidden="true"></i><span class="screen-reader-text">Spotify</span></a></li>
			</ul>

			<div class="footer-info padding-xl">
				<p class="no-margin-bottom"><span class="copy-info">&copy; Joey Heflich <?php echo date("Y") ?></span><a href="http://joeyheflich.com/gifs/<?php echo $gifs[0]; ?>" class="gif-link">All Rights Reserved</a></p>
			</div>
		</footer><!-- #footer -->
	</div><!-- #page -->