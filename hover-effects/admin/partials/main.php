<?php if ( ! defined( 'ABSPATH' ) ) {
	exit;
} ?>
    <div class="wow">
        <span class="wow-plugin-title"><?php echo esc_attr( $name ); ?></span> <span
                class="wow-plugin-version">(version <?php echo esc_attr( $version ); ?>)</span>
        <ul class="wow-admin-menu">
            <li>
                <a href='admin.php?page=<?php echo esc_attr( $pluginname ); ?>' title="Examples">Examples</a>
            </li>
            <li>
                <a href='admin.php?page=<?php echo esc_attr( $pluginname ); ?>&tool=faq' title="FAQ">FAQ</a>
            </li>
            <li>
                <a href='https://wordpress.org/support/plugin/hover-effects' target="_blank" title="Support page">Support</a>
            </li>
            <li>
                <a href='https://wordpress.org/plugins/hover-effects/#reviews' target="_blank" title="Rate this plugin">Rate
                    Us</a>
            </li>
        </ul>

		<?php
		// phpcs:ignore WordPress.Security.NonceVerification.Recommended
		$tool = ( isset( $_GET["tool"] ) ) ? sanitize_text_field( wp_unslash( $_GET["tool"] ) ) : '';

		if ( $tool === "faq" ) {
			include_once( 'faq.php' );
		} else {
			include_once( 'list.php' );
		}

		?>
    </div>
<?php
