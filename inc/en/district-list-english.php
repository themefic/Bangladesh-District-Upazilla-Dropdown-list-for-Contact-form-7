<?php
/**
 * 
 * Tag generator for District List (English)
 * 
 */

add_action( 'wpcf7_admin_init', 'cf7bdlist_add_tag_generator_district', 35 );

function cf7bdlist_add_tag_generator_district() {
	if (class_exists('WPCF7_TagGenerator')) {
		$tag_generator = WPCF7_TagGenerator::get_instance();
		$tag_generator->add( 'bd-district', __( 'Bangladesh District List', 'contact-form-7-bdlist' ), 'cf7bdlist_tg_pane_district' );
	} else if (function_exists('wpcf7_add_tag_generator')) {
		wpcf7_add_tag_generator( 'bd-district', __( 'Bangladesh District List', 'contact-form-7-bdlist' ),	'cf7bdlist-tg-pane', 'cf7bdlist_tg_pane_district' );
	}
}
		
function cf7bdlist_tg_pane_district($contact_form, $args = '') {
	$args = wp_parse_args( $args, array() );

	$description = __( "Generate Bangladesh District list with a drop-down menu. District names are pre-filled alphabetically. No edit required. For more details, see %s.", 'contact-form-7-bdlist' );

	$desc_link = wpcf7_link( __( 'https://contactform7.com/checkboxes-radio-buttons-and-menus/', 'contact-form-7-bdlist' ), __( 'Checkboxes, radio buttons and menus', 'contact-form-7-bdlist' ) );

?>
<div class="control-box">
<fieldset>
<legend><?php echo sprintf( esc_html( $description ), $desc_link ); ?></legend>

<table class="form-table">
<tbody>
	<tr>
	<th scope="row"><?php echo esc_html( __( 'Field type', 'contact-form-7-bdlist' ) ); ?></th>
	<td>
		<fieldset>
		<legend class="screen-reader-text"><?php echo esc_html( __( 'Field type', 'contact-form-7-bdlist' ) ); ?></legend>
		<label><input type="checkbox" name="required" /> <?php echo esc_html( __( 'Required field', 'contact-form-7-bdlist' ) ); ?></label>
		</fieldset>
	</td>
	</tr>

	<tr>
	<th scope="row"><label for="<?php echo esc_attr( $args['content'] . '-name' ); ?>"><?php echo esc_html( __( 'Name', 'contact-form-7-bdlist' ) ); ?></label></th>
	<td><input type="text" name="name" class="tg-name oneline" id="<?php echo esc_attr( $args['content'] . '-name' ); ?>" /></td>
	</tr>

	<tr>
	<th scope="row"><?php echo esc_html( __( 'Options', 'contact-form-7-bdlist' ) ); ?></th>
	<td>
		<fieldset>
		<legend class="screen-reader-text"><?php echo esc_html( __( 'Options', 'contact-form-7-bdlist' ) ); ?></legend>
<textarea name="values" class="values" id="<?php echo esc_attr( $args['content'] . '-values' ); ?>">
Bagerhat
Bandarban
Barguna
Barishal
Bhola
Bogura
Brahmanbaria
Chandpur
Chapainawabganj
Chattogram
Chuadanga
Cumilla
Coxsbazar
Dhaka
Dinajpur
Faridpur
Feni
Gaibandha
Gazipur
Gopalganj
Habiganj
Jamalpur
Jashore
Jhalakathi
Jhenaidah
Joypurhat
Khagrachhari
Khulna
Kishoreganj
Kurigram
Kushtia
Lakshmipur
Lalmonirhat
Madaripur
Magura
Manikganj
Meherpur
Moulvibazar
Munshiganj
Mymensingh
Naogaon
Narail
Narayanganj
Narsingdi
Natore
Netrokona
Nilphamari
Noakhali
Pabna
Panchagarh
Patuakhali
Pirojpur
Rajbari
Rajshahi
Rangamati
Rangpur
Satkhira
Shariatpur
Sherpur
Sirajganj
Sunamganj
Sylhet
Tangail
Thakurgaon</textarea>
		<label for="<?php echo esc_attr( $args['content'] . '-values' ); ?>"><span class="description"><?php echo esc_html( __( "One option per line.", 'contact-form-7-bdlist' ) ); ?></span></label><br />
		<label><input type="checkbox" name="include_blank" class="option" /> <?php echo esc_html( __( 'Insert a blank item as the first option', 'contact-form-7-bdlist' ) ); ?></label>
		</fieldset>
	</td>
	</tr>

	<tr>
	<th scope="row"><label for="<?php echo esc_attr( $args['content'] . '-id' ); ?>"><?php echo esc_html( __( 'Id attribute', 'contact-form-7-bdlist' ) ); ?></label></th>
	<td><input type="text" name="id" class="idvalue oneline option" id="<?php echo esc_attr( $args['content'] . '-id' ); ?>" /></td>
	</tr>

	<tr>
	<th scope="row"><label for="<?php echo esc_attr( $args['content'] . '-class' ); ?>"><?php echo esc_html( __( 'Class attribute', 'contact-form-7-bdlist' ) ); ?></label></th>
	<td><input type="text" name="class" class="classvalue oneline option" id="<?php echo esc_attr( $args['content'] . '-class' ); ?>" /></td>
	</tr>

</tbody>
</table>
</fieldset>
</div>

<div class="insert-box">
	<input type="text" name="select" class="tag code" readonly="readonly" onfocus="this.select()" />

	<div class="submitbox">
	<input type="button" class="button button-primary insert-tag" value="<?php echo esc_attr( __( 'Insert Tag', 'contact-form-7-bdlist' ) ); ?>" />
	</div>

	<br class="clear" />

	<p class="description mail-tag"><label for="<?php echo esc_attr( $args['content'] . '-mailtag' ); ?>"><?php echo sprintf( esc_html( __( "To use the value input through this field in a mail field, you need to insert the corresponding mail-tag (%s) into the field on the Mail tab.", 'contact-form-7-bdlist' ) ), '<strong><span class="mail-tag"></span></strong>' ); ?><input type="text" class="mail-tag code hidden" readonly="readonly" id="<?php echo esc_attr( $args['content'] . '-mailtag' ); ?>" /></label></p>
</div>
<?php
}