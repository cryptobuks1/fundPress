<?php
/**
 * Term and contiton
 */
?>
<?php $term_condition_page_id = DN_Settings::instance()->checkout->get( 'term_condition_page' ); ?>
<?php $enable = DN_Settings::instance()->checkout->get( 'term_condition', 'yes' ); ?>

<?php if( $enable === 'yes' && $term_condition_page_id ) : ?>

	<div class="donate_term_condition">

		<input type="checkbox" name="term_condition" value="1" id="term_condition"/>
		<label for="term_condition">
			<?php _e( 'Terms & Conditions', 'tp-donate' ); ?>
			<!-- <a href="<?php //echo esc_attr( donate_term_condition_url() ) ?>"><?php //_e( 'Terms & Conditions', 'tp-donate' ); ?></a> -->
		</label>

	</div>

<?php endif; ?>