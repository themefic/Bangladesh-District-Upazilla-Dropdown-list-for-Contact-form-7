<?php
/**
 * 
 * Tag generator for Upazilla List (English)
 * 
 */

add_action( 'wpcf7_admin_init', 'cf7bdlist_add_tag_generator_upazilla', 35 );

function cf7bdlist_add_tag_generator_upazilla() {
	if (class_exists('WPCF7_TagGenerator')) {
		$tag_generator = WPCF7_TagGenerator::get_instance();
		$tag_generator->add( 'bd-upazilla', __( 'Bangladesh Upazilla List', 'contact-form-7-bdlist' ), 'cf7bdlist_tg_pane_upazilla' );
	} else if (function_exists('wpcf7_add_tag_generator')) {
		wpcf7_add_tag_generator( 'bd-upazilla', __( 'Bangladesh Upazilla List', 'contact-form-7-bdlist' ),	'cf7bdlist-tg-pane', 'cf7bdlist_tg_pane_upazilla' );
	}
}
		
function cf7bdlist_tg_pane_upazilla($contact_form, $args = '') {
	$args = wp_parse_args( $args, array() );

	$description = __( "Generate Bangladesh Upazilla list with a drop-down menu. Upazilla names are pre-filled alphabetically. No edit required. On the frontend, if you want to show Upazilla based on District selection, you can use this plugin %s.", 'contact-form-7-bdlist' );

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
        <select name="upazillaenglish" id="bdDistrict" onchange="upazillaList()">
            <option value="one">Bagerhat</option>
            <option value="two">Bandarban</option>
            <option value="three">Barguna</option>
            <option value="four">Barishal</option>
            <option value="five">Bhola</option>
            <option value="six">Bogura</option>
            <option value="seven">Brahmanbaria</option>
            <option value="eight">Chandpur</option>
            <option value="nine">Chapainawabganj</option>
            <option value="ten">Chattogram</option>
            <option value="eleven">Chuadanga</option>
            <option value="twelve">Cumilla</option>
            <option value="thirteen">Coxsbazar</option>
            <option value="fourteen">Dhaka</option>
            <option value="fifteen">Dinajpur</option>
            <option value="sixteen">Faridpur</option>
            <option value="seventeen">Feni</option>
            <option value="eighteen">Gaibandha</option>
            <option value="nineteen">Gazipur</option>
            <option value="twenty">Gopalganj</option>
            <option value="twenty-one">Habiganj</option>
            <option value="twenty-two">Jamalpur</option>
            <option value="twenty-three">Jashore</option>
            <option value="twenty-four">Jhalakathi</option>
            <option value="twenty-five">Jhenaidah</option>
            <option value="twenty-six">Joypurhat</option>
            <option value="twenty-seven">Khagrachhari</option>
            <option value="twenty-eight">Khulna</option>
            <option value="twenty-nine">Kishoreganj</option>
            <option value="thirty">Kurigram</option>
            <option value="thirty-one">Kushtia</option>
            <option value="thirty-two">Lakshmipur</option>
            <option value="thirty-three">Lalmonirhat</option>
            <option value="thirty-four">Madaripur</option>
            <option value="thirty-five">Magura</option>
            <option value="thirty-six">Manikganj</option>
            <option value="thirty-seven">Meherpur</option>
            <option value="thirty-eight">Moulvibazar</option>
            <option value="thirty-nine">Munshiganj</option>
            <option value="fourty">Mymensingh</option>
            <option value="fourty-one">Naogaon</option>
            <option value="fourty-two">Narail</option>
            <option value="fourty-three">Narayanganj</option>
            <option value="fourty-four">Narsingdi</option>
            <option value="fourty-five">Natore</option>
            <option value="fourty-six">Netrokona</option>
            <option value="fourty-seven">Nilphamari</option>
            <option value="fourty-eight">Noakhali</option>
            <option value="fourty-nine">Pabna</option>
            <option value="fifty">Panchagarh</option>
            <option value="fifty-one">Patuakhali</option>
            <option value="fifty-two">Pirojpur</option>
            <option value="fifty-three">Rajbari</option>
            <option value="fifty-four">Rajshahi</option>
            <option value="fifty-five">Rangamati</option>
            <option value="fifty-six">Rangpur</option>
            <option value="fifty-seven">Satkhira</option>
            <option value="fifty-eight">Shariatpur</option>
            <option value="fifty-nine">Sherpur</option>
            <option value="sixty">Sirajganj</option>
            <option value="sixty-one">Sunamganj</option>
            <option value="sixty-two">Sylhet</option>
            <option value="sixty-three">Tangail</option>
            <option value="sixty-four">Thakurgaon</option>
        </select>
    </td>
	</tr>

	<tr>
	<th scope="row"><?php echo esc_html( __( 'Upazilla List', 'contact-form-7-bdlist' ) ); ?></th>
	<td>
		<fieldset>
		<legend class="screen-reader-text"><?php echo esc_html( __( 'Options', 'contact-form-7-bdlist' ) ); ?></legend>
<textarea name="values" class="values" id="<?php echo esc_attr( $args['content'] . '-values' ); ?>">Chitalmari
Fakirhat
Kachua
Mollahat
Mongla
Morrelganj
Rampal
Sadar
Sarankhola</textarea>
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
function upazillaList() {
    var x = document.getElementById("bdDistrict").value;
    if(x == "one"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Chitalmari\nFakirhat\nKachua\nMollahat\nMongla\nMorrelganj\nRampal\nSadar\nSarankhola";
    }
    if(x == "two"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Alikadam\nLama\nNaikhongchhari\nRowangchhari\nRuma\nSadar\nThanchi";
    }
    if(x == "three"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Amtali\nBamna\nBetagi\nPathorghata\nSadar\nTaltali";
    }
    if(x == "four"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Agailjhara\nBabuganj\nBakerganj\nBanaripara\nBarishalsadar\nGournadi\nHizla\nMehendiganj\nMuladi\nWazirpur";
    }
    if(x == "five"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Borhanuddin\nCharfesson\nDoulatkhan\nLalmohan\nMonpura\nSadar\nTazumuddin";
    }
    if(x == "six"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Adamdighi\nDhunot\nDupchanchia\nGabtali\nKahaloo\nNondigram\nSadar\nShajahanpur\nShariakandi\nSherpur\nShibganj\nSonatala";
    }
    if(x == "seven"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Akhaura\nAshuganj\nBancharampur\nBijoynagar\nKasba\nNabinagar\nNasirnagar\nSadar\nSarail";
    }
    if(x == "eight"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Faridgonj\nHaimchar\nHajiganj\nKachua\nMatlabnorth\nMatlabsouth\nSadar\nShahrasti";
    }
    if(x == "nine"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Bholahat\nChapainawabganjsadar\nGomostapur\nNachol\nShibganj";
    }
    if(x == "ten"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Anwara\nBanshkhali\nBoalkhali\nChandanaish\nFatikchhari\nHathazari\nKarnafuli\nLohagara\nMirsharai\nPatiya\nRangunia\nRaozan\nSandwip\nSatkania\nSitakunda";
    }
    if(x == "eleven"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Alamdanga\nChuadangasadar\nDamurhuda\nJibannagar";
    }
    if(x == "twelve"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Barura\nBrahmanpara\nBurichang\nChandina\nChauddagram\nCumillasadar\nDaudkandi\nDebidwar\nHomna\nLaksam\nLalmai\nMeghna\nMonohargonj\nMuradnagar\nNangalkot\nSadarsouth\nTitas";
    }
    if(x == "thirteen"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Chakaria\nKutubdia\nMoheshkhali\nPekua\nRamu\nSadar\nTeknaf\nUkhiya";
    }
    if(x == "fourteen"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Dhamrai\nDohar\nKeraniganj\nNawabganj\nSavar";
    }
    if(x == "fifteen"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Birampur\nBirganj\nBirol\nBochaganj\nChirirbandar\nDinajpursadar\nFulbari\nGhoraghat\nHakimpur\nKaharol\nKhansama\nNawabganj\nParbatipur";
    }
    if(x == "sixteen"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Alfadanga\nBhanga\nBoalmari\nCharbhadrasan\nMadhukhali\nNagarkanda\nSadar\nSadarpur\nSaltha";
    }
    if(x == "seventeen"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Chhagalnaiya\nDaganbhuiyan\nFulgazi\nParshuram\nSadar\nSonagazi";
    }
    if(x == "eighteen"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Gaibandhasadar\nGobindaganj\nPalashbari\nPhulchari\nSadullapur\nSaghata\nSundarganj";
    }
    if(x == "nineteen"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Kaliakair\nKaliganj\nKapasia\nSadar\nSreepur";
    }
    if(x == "twenty"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Kashiani\nKotalipara\nMuksudpur\nSadar\nTungipara";
    }
    if(x == "twenty-one"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Ajmiriganj\nBahubal\nBaniachong\nChunarughat\nHabiganjsadar\nLakhai\nMadhabpur\nNabiganj\nShayestaganj";
    }
    if(x == "twenty-two"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Bokshiganj\nDewangonj\nIslampur\nJamalpursadar\nMadarganj\nMelandah\nSarishabari";
    }
    if(x == "twenty-three"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Abhaynagar\nBagherpara\nChougachha\nJhikargacha\nKeshabpur\nManirampur\nSadar\nSharsha";
    }
    if(x == "twenty-four"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Kathalia\nNalchity\nRajapur\nSadar";
    }
    if(x == "twenty-five"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Harinakundu\nKaliganj\nKotchandpur\nMoheshpur\nSadar\nShailkupa";
    }
    if(x == "twenty-six"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Akkelpur\nJoypurhatsadar\nKalai\nKhetlal\nPanchbibi";
    }
    if(x == "twenty-seven"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Dighinala\nGuimara\nLaxmichhari\nManikchari\nMatiranga\nMohalchari\nPanchari\nRamgarh\nSadar";
    }
    if(x == "twenty-eight"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Botiaghata\nDakop\nDigholia\nDumuria\nFultola\nKoyra\nPaikgasa\nRupsha\nTerokhada";
    }
    if(x == "twenty-nine"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Austagram\nBajitpur\nBhairab\nHossainpur\nItna\nKarimgonj\nKatiadi\nKishoreganjsadar\nKuliarchar\nMithamoin\nNikli\nPakundia\nTarail";
    }
    if(x == "thirty"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Bhurungamari\nCharrajibpur\nChilmari\nKurigramsadar\nNageshwari\nPhulbari\nRajarhat\nRowmari\nUlipur";
    }
    if(x == "thirty-one"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Bheramara\nDaulatpur\nKhoksa\nKumarkhali\nKushtiasadar\nMirpurkushtia";
    }
    if(x == "thirty-two"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Kamalnagar\nRaipur\nRamganj\nRamgati\nSadar";
    }
    if(x == "thirty-three"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Aditmari\nHatibandha\nKaliganj\nPatgram\nSadar";
    }
    if(x == "thirty-four"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Kalkini\nRajoir\nSadar\nShibchar";
    }
    if(x == "thirty-five"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Magurasadar\nMohammadpur\nShalikha\nSreepur";
    }
    if(x == "thirty-six"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Doulatpur\nGior\nHarirampur\nSadar\nSaturia\nShibaloy\nSingiar";
    }
    if(x == "thirty-seven"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Gangni\nMeherpursadar\nMujibnagar";
    }
    if(x == "thirty-eight"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Barlekha\nJuri\nKamolganj\nKulaura\nMoulvibazarsadar\nRajnagar\nSreemangal";
    }
    if(x == "thirty-nine"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Gajaria\nLouhajanj\nSadar\nSirajdikhan\nSreenagar\nTongibari";
    }
    if(x == "fourty"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Bhaluka\nDhobaura\nFulbaria\nGafargaon\nGouripur\nHaluaghat\nIswarganj\nMuktagacha\nMymensinghsadar\nNandail\nPhulpur\nTarakanda\nTrishal";
    }
    if(x == "fourty-one"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Atrai\nBadalgachi\nDhamoirhat\nManda\nMohadevpur\nNaogaonsadar\nNiamatpur\nPatnitala\nPorsha\nRaninagar\nSapahar";
    }
    if(x == "fourty-two"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Kalia\nLohagara\nNarailsadar";
    }
    if(x == "fourty-three"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Araihazar\nBandar\nNarayanganjsadar\nRupganj\nSonargaon";
    }
    if(x == "fourty-four"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Belabo\nMonohardi\nNarsingdisadar\nPalash\nRaipura\nShibpur";
    }
    if(x == "fourty-five"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Bagatipara\nBaraigram\nGurudaspur\nLalpur\nNaldanga\nNatoresadar\nSingra";
    }
    if(x == "fourty-six"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Atpara\nBarhatta\nDurgapur\nKalmakanda\nKendua\nKhaliajuri\nMadan\nMohongonj\nNetrokonasadar\nPurbadhala";
    }
    if(x == "fourty-seven"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Dimla\nDomar\nJaldhaka\nKishorganj\nNilphamarisadar\nSyedpur";
    }
    if(x == "fourty-eight"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Begumganj\nChatkhil\nCompaniganj\nHatia\nKabirhat\nSadar\nSenbug\nSonaimori\nSubarnachar";
    }
    if(x == "fourty-nine"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Atghoria\nBera\nBhangura\nChatmohar\nFaridpur\nIshurdi\nPabnasadar\nSanthia\nSujanagar";
    }
    if(x == "fifty"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Atwari\nBoda\nDebiganj\nPanchagarhsadar\nTetulia";
    }
    if(x == "fifty-one"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Bauphal\nDashmina\nDumki\nGalachipa\nKalapara\nMirzaganj\nRangabali\nSadar";
    }
    if(x == "fifty-two"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Bhandaria\nIndurkani\nKawkhali\nMathbaria\nNazirpur\nNesarabad\nSadar";
    }
    if(x == "fifty-three"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Baliakandi\nGoalanda\nKalukhali\nPangsa\nSadar";
    }
    if(x == "fifty-four"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Bagha\nBagmara\nCharghat\nDurgapur\nGodagari\nMohonpur\nPaba\nPuthia\nTanore";
    }
    if(x == "fifty-five"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Baghaichari\nBarkal\nBelaichari\nJuraichari\nKaptai\nKawkhali\nLangadu\nNaniarchar\nRajasthali\nSadar";
    }
    if(x == "fifty-six"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Badargonj\nGangachara\nKaunia\nMithapukur\nPirgacha\nPirgonj\nRangpursadar\nTaragonj";
    }
    if(x == "fifty-seven"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Assasuni\nDebhata\nKalaroa\nKaliganj\nSatkhirasadar\nShyamnagar\nTala";
    }
    if(x == "fifty-eight"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Bhedarganj\nDamudya\nGosairhat\nNaria\nSadar\nZajira";
    }
    if(x == "fifty-nine"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Jhenaigati\nNalitabari\nNokla\nSherpursadar\nSreebordi";
    }
    if(x == "sixty"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Belkuchi\nChauhali\nKamarkhand\nKazipur\nRaigonj\nShahjadpur\nSirajganjsadar\nTarash\nUllapara";
    }
    if(x == "sixty-one"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Bishwambarpur\nChhatak\nDerai\nDharmapasha\nDowarabazar\nJagannathpur\nJamalganj\nSadar\nShalla\nSouthsunamganj\nTahirpur";
    }
    if(x == "sixty-two"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Balaganj\nBeanibazar\nBishwanath\nCompaniganj\nDakshinsurma\nFenchuganj\nGolapganj\nGowainghat\nJaintiapur\nKanaighat\nOsmaninagar\nSylhetsadar\nZakiganj";
    }
    if(x == "sixty-three"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Basail\nBhuapur\nDelduar\nDhanbari\nGhatail\nGopalpur\nKalihati\nMadhupur\nMirzapur\nNagarpur\nSakhipur\nTangailsadar";
    }
    if(x == "sixty-four"){
       document.getElementById("<?php echo esc_attr( $args['content'] . '-values' ); ?>").innerHTML = "Baliadangi\nHaripur\nPirganj\nRanisankail\nThakurgaonsadar";
    }
}
</script>
<?php
}