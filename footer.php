</div><!-- /#full_page_sticky_container -->

<footer class="site-footer" role="contentinfo">
	<div id="inner-footer" class="container">

		<nav role="navigation">
			<?php start_footer_links(); ?>
		</nav>


		<?php
		include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

		// check for plugin using plugin name
		if ( is_plugin_active( 'advanced-custom-fields-pro/acf.php' ) ) :

		?>

		<p class="footer-contact"><?php echo start_contact_info(); ?></p>

		<?php start_social_links( 'icon-', '', 'social-links', 'footer-social-links', true ); ?>

		<p class="source-org copyright"><?php echo start_copyright_text(); ?></p>

		<?php endif; ?>
	</div> <!-- end #inner-footer -->
</footer> <!-- end .footer -->



<svg height="0" width="0" viewBox="0 0 0 0" aria-hidden="true">
	<filter id="inset-shadow">
		<!-- Shadow Offset -->
		<feOffset
			dx='0'
			dy='1'
		/>

		<!-- Shadow Blur -->
		<feGaussianBlur
			stdDeviation='1'
			result='offset-blur'
		/>

		<!-- Invert the drop shadow
			 to create an inner shadow -->
		<feComposite
			operator='out'
			in='SourceGraphic'
			in2='offset-blur'
			result='inverse'
		/>

		<!-- Color & Opacity -->
		<feFlood
			flood-color='black'
			flood-opacity='0.4'
			result='color'
		/>

		<!-- Clip color inside shadow -->
		<feComposite
			operator='in'
			in='color'
			in2='inverse'
			result='shadow'
		/>

		<!-- Put shadow over original object -->
		<feComposite
			operator='over'
			in='shadow'
			in2='SourceGraphic'
		/>
	</filter>
	<defs>
		<linearGradient id="PK_blue_green__linear_gradient" x1="0.381" y1="0.043" x2="0.5" y2="1" gradientUnits="objectBoundingBox">
			<stop offset="0" stop-color="#0abcef"/>
			<stop offset="0.227" stop-color="#0abeeb"/>
			<stop offset="1" stop-color="#0de4a2"/>
		</linearGradient>
	</defs>
</svg>
<div class="hidden svg-icon-inject hide-this" aria-hidden="true">
	<?php include 'assets/svg/output/icons.svg'; ?>
</div>
<?php wp_footer(); ?>
</body>
</html> <!-- end page -->