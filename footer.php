<?php wp_footer(); ?>
<div class="footer">
	<div class="wrapper"><div class="copyright">Copyright Joe Swann <?php echo date('Y', time()) ?></div></div>
</div>

<!-- test for script -->
<noscript>
	<div class="upgrade-wrap">
		<div class="upgrade-position">
			<div class="upgrade">
				<div class="inner">
				<h2>No javascript?</h2>
				<p>This website design relies on jQuery and javascript for functionality. Please enable javascript (or upgrade your browser) to view this site.</p>
				</div>
			</div>
		</div>
	</div>
</noscript>

<!-- test for features using modernizr -->
<div class="js upgrade-wrap">
	<div class="upgrade-position">
		<div class="upgrade">
			<div class="inner">
			<h2>Old browser?</h2>
			<p>It appears you are running on an old or underpowered browser. This website makes use of features only supported by modern browsers. Please upgrade.</p>
			</div>
		</div>
	</div>
</div>
</body>
</html>
