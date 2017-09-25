	<?php if ( pings_open() && ! comments_open() ) : ?>

		<p class="comments-closed pings-open">
			<?php printf( __( 'Comments are closed, but %strackbacks%s and pingbacks are open.', 'epico' ), '<a href="' . esc_url( get_trackback_url() ) . '">', '</a>' );
			?>
		</p><!-- .comments-closed .pings-open -->

	<?php elseif ( ! comments_open() ) : ?>

		<p class="comments-closed">
			<?php _e( 'Comments are closed.', 'epico' ); ?>
		</p><!-- .comments-closed -->

	<?php endif; ?>