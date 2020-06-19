<?php
/**
 * 
 * Tag generator for District List (Bangla)
 * 
 */

add_action( 'wpcf7_admin_init', 'cf7bdlist_add_tag_generator_district_bangla', 35 );

function cf7bdlist_add_tag_generator_district_bangla() {
	if (class_exists('WPCF7_TagGenerator')) {
		$tag_generator = WPCF7_TagGenerator::get_instance();
		$tag_generator->add( 'bd-district-bn', __( 'বাংলাদেশের জেলা তালিকা', 'contact-form-7-bdlist' ), 'cf7bdlist_tg_pane_district_bangla' );
	} else if (function_exists('wpcf7_add_tag_generator')) {
		wpcf7_add_tag_generator( 'bd-district-bn', __( 'বাংলাদেশের জেলা তালিকা', 'contact-form-7-bdlist' ),	'cf7bdlist-tg-pane_bangla', 'cf7bdlist_tg_pane_district_bangla' );
	}
}
		
function cf7bdlist_tg_pane_district_bangla($contact_form, $args = '') {
	$args = wp_parse_args( $args, array() );

	$description = __( "বাংলাদেশের জেলাসমূহের ড্রপইন তালিকা জেনারেট করুন। জেলাসমূহের নাম অক্ষর অনুসারে বিন্যাস করা হয়েছে। সাধারণত এডিটের দরকার হবে না। বিস্তারিত জানতে এখানে দেখতে পারেন %s.", 'contact-form-7-bdlist' );

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
কক্সবাজার
কিশোরগঞ্জ
কুমিল্লা
কুষ্টিয়া
কুড়িগ্রাম
খাগড়াছড়ি
খুলনা
গাইবান্ধা
গাজীপুর
গোপালগঞ্জ
চট্টগ্রাম
চাঁদপুর
চাঁপাইনবাবগঞ্জ
চুয়াডাঙ্গা
জয়পুরহাট
জামালপুর
ঝালকাঠি
ঝিনাইদহ
টাঙ্গাইল
ঠাকুরগাঁও
ঢাকা
দিনাজপুর
নওগাঁ
নরসিংদী
নড়াইল
নারায়ণগঞ্জ
নাটোর
নেত্রকোণা
নীলফামারী
নোয়াখালী
পটুয়াখালী
পঞ্চগড়
পাবনা
পিরোজপুর
ফরিদপুর
ফেনী
বগুড়া
বরগুনা
বাগেরহাট
বরিশাল
বান্দরবান
ব্রাহ্মণবাড়িয়া
ভোলা
ময়মনসিংহ
মাগুরা
মাদারীপুর
মানিকগঞ্জ
মুন্সিগঞ্জ
মেহেরপুর
মৌলভীবাজার
যশোর
রাজবাড়ী
রাজশাহী
রাঙ্গামাটি
রংপুর
লক্ষ্মীপুর
লালমনিরহাট
শরীয়তপুর
শেরপুর
সাতক্ষীরা
সিরাজগঞ্জ
সিলেট
সুনামগঞ্জ
হবিগঞ্জ</textarea>
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