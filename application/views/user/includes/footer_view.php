
						</div>
					</div>
				</div>
				<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
				<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

				<script src="<?php echo PUBLIC_URL ?>js/vendor/bootstrap.min.js"></script>

				<script src="<?php echo PUBLIC_URL ?>js/plugins.js"></script>
				<script src="<?php echo PUBLIC_URL ?>js/main.js"></script>
				<?php if(isset($js)): foreach($js as $j): ?>
				<script type="text/javascript" src="<?php echo $j ?>"></script>
				<?php endforeach;endif; ?>
				<script>
						var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
						(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
						g.src='//www.google-analytics.com/ga.js';
						s.parentNode.insertBefore(g,s)}(document,'script'));
				</script>
		</body>
</html>