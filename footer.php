		</div><!-- #main -->

		<footer <?php hybrid_attr( 'footer' ); ?>>

			<?php hybrid_get_menu( 'social' ); // Loads the menu/social.php template. ?>

			<?php hybrid_get_menu( 'footer' ); // Loads the menu/footer.php template. ?>

		</footer><!-- #footer -->

	</div><!-- #container -->

	<?php wp_footer(); // WordPress hook for loading JavaScript, toolbar, and other things in the footer. ?>

</body>
</html>
