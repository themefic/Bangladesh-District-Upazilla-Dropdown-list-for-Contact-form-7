<?php
/**
 * 
 * Tag generator for Upazilla List (Bangla)
 * 
 */

add_action( 'wpcf7_admin_init', 'cf7bdlist_add_tag_generator_upazilla_bangla', 35 );

function cf7bdlist_add_tag_generator_upazilla_bangla() {
	if (class_exists('WPCF7_TagGenerator')) {
		$tag_generator = WPCF7_TagGenerator::get_instance();
		$tag_generator->add( 'bd-upazilla-bn', __( 'বাংলাদেশের উপজেলা তালিকা', 'contact-form-7-bdlist' ), 'cf7bdlist_tg_pane_upazilla_bangla' );
	} else if (function_exists('wpcf7_add_tag_generator')) {
		wpcf7_add_tag_generator( 'bd-upazilla-bn', __( 'বাংলাদেশের উপজেলা তালিকা', 'contact-form-7-bdlist' ),	'cf7bdlist-tg-pane_up_bangla', 'cf7bdlist_tg_pane_upazilla_bangla' );
	}
}
		
function cf7bdlist_tg_pane_upazilla_bangla($contact_form, $args = '') {
	$args = wp_parse_args( $args, array() );

	$description = __( "বাংলাদেশের উপজেলাসমূহের ড্রপইন তালিকা জেনারেট করুন। ওয়েবসাইটের ফ্রন্টএন্ডে জেলা সিলেকশনের উপর ভিত্তি করে যদি উপজেলাসমূহ দেখাতে চান, তাহলে এই প্লাগিনটি ব্যবহার করতে পারেন %s.", 'contact-form-7-bdlist' );

	$desc_link = wpcf7_link( __( 'https://wordpress.org/plugins/cf7-conditional-fields/', 'contact-form-7-bdlist' ), __( 'Contact Form 7 – Conditional Fields', 'contact-form-7-bdlist' ) );

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
    <th scope="row"><?php echo esc_html( __( 'Choose a District', 'contact-form-7-bdlist' ) ); ?></th>
    <td>
        <select name="upazillabangla" id="bdDistrictbn" onchange="upazillaListbn()">
            <option value="one-bn">কক্সবাজার</option>
            <option value="two-bn">কিশোরগঞ্জ</option>
            <option value="three-bn">কুমিল্লা</option>
            <option value="four-bn">কুষ্টিয়া</option>
            <option value="five-bn">কুড়িগ্রাম</option>
            <option value="six-bn">খাগড়াছড়ি</option>
            <option value="seven-bn">খুলনা</option>
            <option value="eight-bn">গাইবান্ধা</option>
            <option value="nine-bn">গাজীপুর</option>
            <option value="ten-bn">গোপালগঞ্জ</option>
            <option value="eleven-bn">চট্টগ্রাম</option>
            <option value="twelve-bn">চাঁদপুর</option>
            <option value="thirteen-bn">চাঁপাইনবাবগঞ্জ</option>
            <option value="fourteen-bn">চুয়াডাঙ্গা</option>
            <option value="fifteen-bn">জয়পুরহাট</option>
            <option value="sixteen-bn">জামালপুর</option>
            <option value="seventeen-bn">ঝালকাঠি</option>
            <option value="eighteen-bn">ঝিনাইদহ</option>
            <option value="ninety-bn">টাঙ্গাইল</option>
            <option value="twenty-bn">ঠাকুরগাঁও</option>
            <option value="twenty-one-bn">ঢাকা</option>
            <option value="twenty-two-bn">দিনাজপুর</option>
            <option value="twenty-three-bn">নওগাঁ</option>
            <option value="twenty-four-bn">নরসিংদী</option>
            <option value="twenty-five-bn">নড়াইল</option>
            <option value="twenty-six-bn">নারায়ণগঞ্জ</option>
            <option value="twenty-seven-bn">নাটোর</option>
            <option value="twenty-eight-bn">নেত্রকোণা</option>
            <option value="twenty-nine-bn">নীলফামারী</option>
            <option value="thirty-bn">নোয়াখালী</option>
            <option value="thirty-one-bn">পটুয়াখালী</option>
            <option value="thirty-two-bn">পঞ্চগড়</option>
            <option value="thirty-three-bn">পাবনা</option>
            <option value="thirty-four-bn">পিরোজপুর</option>
            <option value="thirty-five-bn">ফরিদপুর</option>
            <option value="thirty-six-bn">ফেনী</option>
            <option value="thirty-seven-bn">বগুড়া</option>
            <option value="thirty-eight-bn">বরগুনা</option>
            <option value="thirty-nine-bn">বাগেরহাট</option>
            <option value="fourty-bn">বরিশাল</option>
            <option value="fourty-one-bn">বান্দরবান</option>
            <option value="fourty-two-bn">ব্রাহ্মণবাড়িয়া</option>
            <option value="fourty-three-bn">ভোলা</option>
            <option value="fourty-four-bn">ময়মনসিংহ</option>
            <option value="fourty-five-bn">মাগুরা</option>
            <option value="fourty-six-bn">মাদারীপুর</option>
            <option value="fourty-seven-bn">মানিকগঞ্জ</option>
            <option value="fourty-eight-bn">মুন্সিগঞ্জ</option>
            <option value="fourty-nine-bn">মেহেরপুর</option>
            <option value="fifty-bn">মৌলভীবাজার</option>
            <option value="fifty-one-bn">যশোর</option>
            <option value="fifty-two-bn">রাজবাড়ী</option>
            <option value="fifty-three-bn">রাজশাহী</option>
            <option value="fifty-four-bn">রাঙ্গামাটি</option>
            <option value="fifty-five-bn">রংপুর</option>
            <option value="fifty-six-bn">লক্ষ্মীপুর</option>
            <option value="fifty-seven-bn">লালমনিরহাট</option>
            <option value="fifty-eight-bn">শরীয়তপুর</option>
            <option value="fifty-nine-bn">শেরপুর</option>
            <option value="sixty-bn">সাতক্ষীরা</option>
            <option value="sixty-one-bn">সিরাজগঞ্জ</option>
            <option value="sixty-two-bn">সিলেট</option>
            <option value="sixty-three-bn">সুনামগঞ্জ</option>
            <option value="sixty-four-bn">হবিগঞ্জ</option>
        </select>
    </td>
	</tr>

	<tr>
	<th scope="row"><?php echo esc_html( __( 'Upazilla List', 'contact-form-7-bdlist' ) ); ?></th>
	<td>
		<fieldset>
		<legend class="screen-reader-text"><?php echo esc_html( __( 'Options', 'contact-form-7-bdlist' ) ); ?></legend>
<textarea name="values" class="values" id="<?php echo esc_attr( $args['content'] . '-values' ); ?>">কক্সবাজার সদর
চকরিয়া
কুতুবদিয়া
উখিয়া
মহেশখালী
পেকুয়া
রামু
টেকনাফ</textarea>
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

<!--- Full Upazilla list based on District Selection -->
 
<script>
function upazillaListbn() {
    var x = document.getElementById("bdDistrictbn").value;
    if(x == "one-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "কক্সবাজার সদর\nচকরিয়া\nকুতুবদিয়া\nউখিয়া\nমহেশখালী\nপেকুয়া\nরামু\nটেকনাফ";
    }
    if(x == "two-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "ইটনা\nকটিয়াদী\nভৈরব\nতাড়াইল\nহোসেনপুর\nপাকুন্দিয়া\nকুলিয়ারচর\nকিশোরগঞ্জ সদর\nকরিমগঞ্জ\nবাজিতপুর\nঅষ্টগ্রাম\nমিঠামইন\nনিকলী";
    }
    if(x == "three-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "দেবিদ্বার\nবরুড়া\nব্রাহ্মণপাড়া\nচান্দিনা\nচৌদ্দগ্রাম\nদাউদকান্দি\nহোমনা\nলাকসাম\nমুরাদনগর\nনাঙ্গলকোট\nকুমিল্লা সদর\nমেঘনা\nমনোহরগঞ্জ\nসদর দক্ষিণ\nতিতাস\nবুড়িচং\nলালমাই";
    }
    if(x == "four-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "কুষ্টিয়া সদর\nকুমারখালী\nখোকসা\nমিরপুর\nদৌলতপুর\nভেড়ামারা";
    }
    if(x == "five-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "কুড়িগ্রাম সদর\nনাগেশ্বরী\nভুরুঙ্গামারী\nফুলবাড়ী\nরাজারহাট\nউলিপুর\nচিলমারী\nরৌমারী\nচর রাজিবপুর";
    }
    if(x == "six-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "খাগড়াছড়ি সদর\nদিঘীনালা\nপানছড়ি\nলক্ষীছড়ি\nমহালছড়ি\nমানিকছড়ি\nরামগড়\nমাটিরাঙ্গা\nগুইমারা";
    }
    if(x == "seven-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "পাইকগাছা\nফুলতলা উপজেলা\nদিঘলিয়া উপজেলা\nরূপসা উপজেলা\nতেরখাদা উপজেলা\nডুমুরিয়া উপজেলা\nবটিয়াঘাটা\nদাকোপ উপজেলা\nকয়রা উপজেলা";
    }
    if(x == "eight-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "সাদুল্লাপুর\nগাইবান্ধা সদর\nপলাশবাড়ী\nসাঘাটা উপজেলা\nগোবিন্দগঞ্জ উপজেলা\nসুন্দরগঞ্জ\nফুলছড়ি";
    }
    if(x == "nine-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "কালীগঞ্জ\nকালিয়াকৈর\nকাপাসিয়া\nগাজীপুর সদর\nশ্রীপুর";
    }
    if(x == "ten-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "গোপালগঞ্জ সদর\nকাশিয়ানী\nটুংগীপাড়া\nকোটালীপাড়া\nমুকসুদপুর";
    }
    if(x == "eleven-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "রাঙ্গুনিয়া\nসীতাকুন্ড উপজেলা\nমীরসরাই\nপটিয়া\nসন্দ্বীপ\nবাঁশখালী\nবোয়ালখালী\nআনোয়ারা\nচন্দনাইশ\nসাতকানিয়া\nলোহাগাড়া\nহাটহাজারী\nফটিকছড়ি\nরাউজান\nকর্ণফুলী";
    }
    if(x == "twelve-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "হাইমচর\nকচুয়া\nশাহরাস্তি\nচাঁদপুর সদর\nমতলব\nহাজীগঞ্জ\nমতলব\nফরিদগঞ্জ";
    }
    if(x == "thirteen-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "চাঁপাইনবাবগঞ্জ সদর\nগোমস্তাপুর\nনাচোল\nভোলাহাট\nশিবগঞ্জ";
    }
    if(x == "fourteen-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "চুয়াডাঙ্গা সদর\nআলমডাঙ্গা\nদামুড়হুদা\nজীবননগর";
    }
    if(x == "fifteen-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "আক্কেলপুর উপজেলা\nকালাই উপজেলা\nক্ষেতলাল উপজেলা\nপাঁচবিবি উপজেলা\nজয়পুরহাট সদর";
    }
    if(x == "sixteen-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "জামালপুর সদর\nমেলান্দহ\nইসলামপুর\nদেওয়ানগঞ্জ\nসরিষাবাড়ী\nমাদারগঞ্জ\nবকশীগঞ্জ";
    }
    if(x == "seventeen-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "ঝালকাঠি সদর\nকাঠালিয়া\nনলছিটি\nরাজাপুর";
    }
    if(x == "eighteen-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "ঝিনাইদহ সদর\nশৈলকুপা\nহরিণাকুন্ডু\nকালীগঞ্জ\nকোটচাঁদপুর\nমহেশপুর";
    }
    if(x == "nineteen-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "বাসাইল\nভুয়াপুর\nদেলদুয়ার\nঘাটাইল\nগোপালপুর\nমধুপুর\nমির্জাপুর\nনাগরপুর\nসখিপুর\nটাঙ্গাইল সদর\nকালিহাতী\nধনবাড়ী";
    }
    if(x == "twenty-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "ঠাকুরগাঁও সদর\nপীরগঞ্জ উপজেলা\nরাণীশংকৈল উপজেলা\nহরিপুর উপজেলা\nবালিয়াডাঙ্গী উপজেলা";
    }
    if(x == "twenty-one-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "সাভার\nধামরাই\nকেরাণীগঞ্জ\nনবাবগঞ্জ\nদোহার";
    }
    if(x == "twenty-two-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "নবাবগঞ্জ\nবীরগঞ্জ উপজেলা\nঘোড়াঘাট\nবিরামপুর\nপার্বতীপুর উপজেলা\nবোচাগঞ্জ উপজেলা\nকাহারোল উপজেলা\nফুলবাড়ী উপজেলা\nদিনাজপুর সদর\nহাকিমপুর উপজেলা\nখানসামা\nবিরল উপজেলা\nচিরিরবন্দর উপজেলা";
    }
    if(x == "twenty-three-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "মহাদেবপুর উপজেলা\nবদলগাছী উপজেলা\nপত্নিতলা উপজেলা\nধামইরহাট উপজেলা\nনিয়ামতপুর উপজেলা\nমান্দা উপজেলা\nআত্রাই উপজেলা\nরাণীনগর উপজেলা\nনওগাঁ সদর\nপোরশা উপজেলা\nসাপাহার";
    }
    if(x == "twenty-four-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "বেলাবো\nমনোহরদী\nনরসিংদী\nপলাশ\nরায়পুরা\nশিবপুর";
    }
    if(x == "twenty-five-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "নড়াইল সদর\nলোহাগড়া\nকালিয়া";
    }
    if(x == "twenty-six-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "আড়াইহাজার উপজেলা\nবন্দর উপজেলা\nনারায়নগঞ্জ সদর\nরূপগঞ্জ উপজেলা\nসোনারগাঁ উপজেলা";
    }
    if(x == "twenty-seven-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "নাটোর সদর\nসিংড়া\nবড়াইগ্রাম\nবাগাতিপাড়া\nলালপুর\nগুরুদাসপুর\nনলডাঙ্গা";
    }
    if(x == "twenty-eight-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "বারহাট্টা\nদুর্গাপুর\nকেন্দুয়া\nআটপাড়া\nমদন\nখালিয়াজুরী\nকলমাকান্দা\nমোহনগঞ্জ\nপূর্বধলা\nনেত্রকোণা সদর";
    }
    if(x == "twenty-nine-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "সৈয়দপুর উপজেলা\nডোমার উপজেলা\nডিমলা\nজলঢাকা\nকিশোরগঞ্জ\nনীলফামারী সদর";
    }
    if(x == "thirty-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "নোয়াখালী\nকোম্পানীগঞ্জ\nবেগমগঞ্জ\nহাতিয়া\nসুবর্ণচর\nকবিরহাট\nসেনবাগ\nচাটখিল\nসোনাইমুড়ী";
    }
    if(x == "thirty-one-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "বাউফল\nপটুয়াখালী সদর\nদুমকি\nদশমিনা\nকলাপাড়া\nমির্জাগঞ্জ\nগলাচিপা\nরাঙ্গাবালী";
    }
    if(x == "thirty-two-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "পঞ্চগড়\nদেবীগঞ্জ\nবোদা\nআটোয়ারী\nতেতুলিয়া";
    }
    if(x == "thirty-three-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "সুজানগর\nঈশ্বরদী\nভাঙ্গুড়া\nপাবনা সদর\nবেড়া\nআটঘরিয়া\nচাটমোহর\nসাঁথিয়া\nফরিদপুর";
    }
    if(x == "thirty-four-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "পিরোজপুর সদর\nনাজিরপুর\nকাউখালী\nভান্ডারিয়া\nমঠবাড়ীয়া\nনেছারাবাদ\nইন্দুরকানী";
    }
    if(x == "thirty-five-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "ফরিদপুর সদর\nআলফাডাঙ্গা\nবোয়ালমারী\nসদরপুর\nনগরকান্দা\nভাঙ্গা\nচরভদ্রাসন\nমধুখালী\nসালথা";
    }
    if(x == "thirty-six-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "ছাগলনাইয়া উপজেলা\nফেনী সদর\nসোনাগাজী উপজেলা\nফুলগাজী উপজেলা\nপরশুরাম\nদাগনভূঞা";
    }
    if(x == "thirty-seven-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "কাহালু উপজেলা\nবগুড়া সদর\nসারিয়াকান্দি\nশাজাহানপুর\nদুপচাচিঁয়া উপজেলা\nআদমদিঘি উপজেলা\nনন্দিগ্রাম\nসোনাতলা উপজেলা\nধুনট উপজেলা\nগাবতলী\nশেরপুর উপজেলা\nশিবগঞ্জ";
    }
    if(x == "thirty-eight-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "আমতলী\nবরগুনা সদর\nবেতাগী উপজেলা\nবামনা\nপাথরঘাটা\nতালতলি";
    }
    if(x == "thirty-nine-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "ফকিরহাট\nবাগেরহাট সদর\nমোল্লাহাট\nশরণখোলা\nরামপাল\nমোড়েলগঞ্জ\nকচুয়া\nমোংলা\nচিতলমারী";
    }
    if(x == "fourty-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "বরিশাল সদর\nবাকেরগঞ্জ\nবাবুগঞ্জ\nউজিরপুর\nবানারীপাড়া\nগৌরনদী\nআগৈলঝাড়া\nমেহেন্দিগঞ্জ\nমুলাদী\nহিজলা";
    }
    if(x == "fourty-one-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "বান্দরবান সদর\nআলীকদম\nনাইক্ষ্যংছড়ি\nরোয়াংছড়ি\nলামা\nরুমা\nথানচি";
    }
    if(x == "fourty-two-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "ব্রাহ্মণবাড়িয়া সদর\nকসবা\nনাসিরনগর\nসরাইল উপজেলা\nআশুগঞ্জ\nআখাউড়া\nনবীনগর\nবাঞ্ছারামপুর\nবিজয়নগর";
    }
    if(x == "fourty-three-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "ভোলা সদর\nবোরহান উদ্দিন\nচরফ্যাশন\nদৌলতখান\nমনপুরা\nতজুমদ্দিন\nলালমোহন";
    }
    if(x == "fourty-four-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "ফুলবাড়ীয়া\nত্রিশাল\nভালুকা\nমুক্তাগাছা\nময়মনসিংহ সদর\nধোবাউড়া\nফুলপুর\nহালুয়াঘাট\nগৌরীপুর\nগফরগাঁও\nঈশ্বরগঞ্জ\nনান্দাইল\nতারাকান্দা";
    }
    if(x == "fourty-five-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "শালিখা\nশ্রীপুর\nমাগুরা সদর\nমহম্মদপুর";
    }
    if(x == "fourty-six-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "মাদারীপুর সদর\nশিবচর\nকালকিনি\nরাজৈর";
    }
    if(x == "fourty-seven-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "হরিরামপুর\nসাটুরিয়া\nমানিকগঞ্জ সদর\nঘিওর\nশিবালয়\nদৌলতপুর\nসিংগাইর";
    }
    if(x == "fourty-eight-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "মুন্সিগঞ্জ সদর\nশ্রীনগর\nসিরাজদিখান\nলৌহজং\nগজারিয়া\nটংগীবাড়ি";
    }
    if(x == "fourty-nine-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "মুজিবনগর\nমেহেরপুর সদর\nগাংনী";
    }
    if(x == "fifty-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "বড়লেখা\nকমলগঞ্জ\nকুলাউড়া\nমৌলভীবাজার সদর\nরাজনগর\nশ্রীমঙ্গল\nজুড়ী";
    }
    if(x == "fifty-one-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "মণিরামপুর\nঅভয়নগর\nবাঘারপাড়া\nচৌগাছা\nঝিকরগাছা\nকেশবপুর\nযশোর সদর\nশার্শা";
    }
    if(x == "fifty-two-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "রাজবাড়ী সদর\nগোয়ালন্দ\nপাংশা\nবালিয়াকান্দি\nকালুখালী";
    }
    if(x == "fifty-three-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "পবা উপজেলা\nদুর্গাপুর উপজেলা\nমোহনপুর উপজেলা\nচারঘাট উপজেলা\nপুঠিয়া উপজেলা\nবাঘা উপজেলা\nগোদাগাড়ী উপজেলা\nতানোর উপজেলা\nবাগমারা উপজেলা";
    }
    if(x == "fifty-four-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "রাঙ্গামাটি সদর\nকাপ্তাই\nকাউখালী\nবাঘাইছড়ি\nবরকল\nলংগদু\nরাজস্থলী\nবিলাইছড়ি\nজুরাছড়ি\nনানিয়ারচর";
    }
    if(x == "fifty-five-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "রংপুর সদর\nগংগাচড়া\nতারাগঞ্জ উপজেলা\nবদরগঞ্জ উপজেলা\nমিঠাপুকুর উপজেলা\nপীরগঞ্জ উপজেলা\nকাউনিয়া উপজেলা\nপীরগাছা উপজেলা";
    }
    if(x == "fifty-six-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "লক্ষ্মীপুর সদর\nকমলনগর\nরায়পুর\nরামগতি\nরামগঞ্জ";
    }
    if(x == "fifty-seven-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "লালমনিরহাট সদর\nকালীগঞ্জ\nহাতীবান্ধা\nপাটগ্রাম\nআদিতমারী উপজেলা";
    }
    if(x == "fifty-eight-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "শরিয়তপুর সদর\nনড়িয়া\nজাজিরা\nগোসাইরহাট\nভেদরগঞ্জ\nডামুড্যা";
    }
    if(x == "fifty-nine-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "শেরপুর সদর\nনালিতাবাড়ী উপজেলা\nশ্রীবরদী উপজেলা\nনকলা উপজেলা\nঝিনাইগাতী উপজেলা";
    }
    if(x == "sixty-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "আশাশুনি\nদেবহাটা\nকলারোয়া\nসাতক্ষীরা সদর\nশ্যামনগর\nতালা\nকালিগঞ্জ";
    }
    if(x == "sixty-one-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "বেলকুচি\nচৌহালি\nকামারখন্দ\nকাজীপুর\nরায়গঞ্জ\nশাহজাদপুর\nসিরাজগঞ্জ\nতাড়াশ\nউল্লাপাড়া";
    }
    if(x == "sixty-two-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "বালাগঞ্জ\nবিয়ানীবাজার\nবিশ্বনাথ\nকোম্পানীগঞ্জ\nফেঞ্চুগঞ্জ\nগোলাপগঞ্জ\nগোয়াইনঘাট\nজৈন্তাপুর\nকানাইঘাট\nসিলেট সদর\nজকিগঞ্জ\nদক্ষিণ সুরমা\nওসমানী";
    }
    if(x == "sixty-three-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "সুনামগঞ্জ সদর\nদক্ষিণ সুনামগঞ্জ\nবিশ্বম্ভরপুর\nছাতক\nজগন্নাথপুর\nদোয়ারাবাজার\nতাহিরপুর\nধর্মপাশা\nজামালগঞ্জ\nশাল্লা\nদিরাই";
    }
    if(x == "sixty-four-bn"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "নবীগঞ্জ\nবাহুবল\nআজমিরীগঞ্জ\nবানিয়াচং\nলাখাই\nচুনারুঘাট\nহবিগঞ্জ সদর\nমাধবপুর উপজেলা\nশায়েস্তাগঞ্জ";
    }
}
</script>
<?php
}