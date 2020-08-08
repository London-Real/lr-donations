<?php
/**
 * Plugin Name: LR donations form country field
 * Plugin URI: https://londonreal.tv
 * Description: Add country field to the donation form
 * Version: 1.0
 * Author: Miro Nomadic
 * Author URI: https://lononreal.tv
 */

/**
 * Custom Form Fields in Donation form
 *
 * @param $form_id
 */
function lr_donations_custom_form_country( $form_id ) {

        ?>
        <div id="give-message-wrap" class="form-row form-row-wide">
            <label class="give-label" for="lr-donor-country">
                <?php _e( 'Country?', 'give' ); ?>
                <?php if ( give_field_is_required( 'lr_donor_country', $form_id ) ) : ?>
                    <span class="give-required-indicator">*</span>
                <?php endif ?>
                <span class="give-tooltip give-icon give-icon-question"
                      data-tooltip="<?php _e( 'Please choose your country', 'give' ) ?>">
                </span>
            </label>

            <label for="country">Country</label><span style="color: red !important; display: inline; float: none;">*</span>      
        
            <select id="lr-donor-country" class="form-control" name="lr_donor_country" >
                <option value="Afghanistan">Afghanistan</option>
                <option value="Åland Islands">Åland Islands</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antarctica">Antarctica</option>
                <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                <option value="Bolivia">Bolivia</option>
                <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                <option value="Botswana">Botswana</option>
                <option value="Bouvet Island">Bouvet Island</option>
                <option value="Brazil">Brazil</option>
                <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                <option value="Brunei Darussalam">Brunei Darussalam</option>
                <option value="Bulgaria">Bulgaria</option>
                <option value="Burkina Faso">Burkina Faso</option>
                <option value="Burundi">Burundi</option>
                <option value="Cambodia">Cambodia</option>
                <option value="Cameroon">Cameroon</option>
                <option value="Canada">Canada</option>
                <option value="Cape Verde">Cape Verde</option>
                <option value="Cayman Islands">Cayman Islands</option>
                <option value="Central African Republic">Central African Republic</option>
                <option value="Chad">Chad</option>
                <option value="Chile">Chile</option>
                <option value="China">China</option>
                <option value="Christmas Island">Christmas Island</option>
                <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                <option value="Colombia">Colombia</option>
                <option value="Comoros">Comoros</option>
                <option value="Congo">Congo</option>
                <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                <option value="Cook Islands">Cook Islands</option>
                <option value="Costa Rica">Costa Rica</option>
                <option value="Cote D'ivoire">Cote D'ivoire</option>
                <option value="Croatia">Croatia</option>
                <option value="Cuba">Cuba</option>
                <option value="Cyprus">Cyprus</option>
                <option value="Czech Republic">Czech Republic</option>
                <option value="Denmark">Denmark</option>
                <option value="Djibouti">Djibouti</option>
                <option value="Dominica">Dominica</option>
                <option value="Dominican Republic">Dominican Republic</option>
                <option value="Ecuador">Ecuador</option>
                <option value="Egypt">Egypt</option>
                <option value="El Salvador">El Salvador</option>
                <option value="Equatorial Guinea">Equatorial Guinea</option>
                <option value="Eritrea">Eritrea</option>
                <option value="Estonia">Estonia</option>
                <option value="Ethiopia">Ethiopia</option>
                <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                <option value="Faroe Islands">Faroe Islands</option>
                <option value="Fiji">Fiji</option>
                <option value="Finland">Finland</option>
                <option value="France">France</option>
                <option value="French Guiana">French Guiana</option>
                <option value="French Polynesia">French Polynesia</option>
                <option value="French Southern Territories">French Southern Territories</option>
                <option value="Gabon">Gabon</option>
                <option value="Gambia">Gambia</option>
                <option value="Georgia">Georgia</option>
                <option value="Germany">Germany</option>
                <option value="Ghana">Ghana</option>
                <option value="Gibraltar">Gibraltar</option>
                <option value="Greece">Greece</option>
                <option value="Greenland">Greenland</option>
                <option value="Grenada">Grenada</option>
                <option value="Guadeloupe">Guadeloupe</option>
                <option value="Guam">Guam</option>
                <option value="Guatemala">Guatemala</option>
                <option value="Guernsey">Guernsey</option>
                <option value="Guinea">Guinea</option>
                <option value="Guinea-bissau">Guinea-bissau</option>
                <option value="Guyana">Guyana</option>
                <option value="Haiti">Haiti</option>
                <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                <option value="Honduras">Honduras</option>
                <option value="Hong Kong">Hong Kong</option>
                <option value="Hungary">Hungary</option>
                <option value="Iceland">Iceland</option>
                <option value="India">India</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                <option value="Iraq">Iraq</option>
                <option value="Ireland">Ireland</option>
                <option value="Isle of Man">Isle of Man</option>
                <option value="Israel">Israel</option>
                <option value="Italy">Italy</option>
                <option value="Jamaica">Jamaica</option>
                <option value="Japan">Japan</option>
                <option value="Jersey">Jersey</option>
                <option value="Jordan">Jordan</option>
                <option value="Kazakhstan">Kazakhstan</option>
                <option value="Kenya">Kenya</option>
                <option value="Kiribati">Kiribati</option>
                <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                <option value="Korea, Republic of">Korea, Republic of</option>
                <option value="Kuwait">Kuwait</option>
                <option value="Kyrgyzstan">Kyrgyzstan</option>
                <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                <option value="Latvia">Latvia</option>
                <option value="Lebanon">Lebanon</option>
                <option value="Lesotho">Lesotho</option>
                <option value="Liberia">Liberia</option>
                <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                <option value="Liechtenstein">Liechtenstein</option>
                <option value="Lithuania">Lithuania</option>
                <option value="Luxembourg">Luxembourg</option>
                <option value="Macao">Macao</option>
                <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                <option value="Madagascar">Madagascar</option>
                <option value="Malawi">Malawi</option>
                <option value="Malaysia">Malaysia</option>
                <option value="Maldives">Maldives</option>
                <option value="Mali">Mali</option>
                <option value="Malta">Malta</option>
                <option value="Marshall Islands">Marshall Islands</option>
                <option value="Martinique">Martinique</option>
                <option value="Mauritania">Mauritania</option>
                <option value="Mauritius">Mauritius</option>
                <option value="Mayotte">Mayotte</option>
                <option value="Mexico">Mexico</option>
                <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                <option value="Moldova, Republic of">Moldova, Republic of</option>
                <option value="Monaco">Monaco</option>
                <option value="Mongolia">Mongolia</option>
                <option value="Montenegro">Montenegro</option>
                <option value="Montserrat">Montserrat</option>
                <option value="Morocco">Morocco</option>
                <option value="Mozambique">Mozambique</option>
                <option value="Myanmar">Myanmar</option>
                <option value="Namibia">Namibia</option>
                <option value="Nauru">Nauru</option>
                <option value="Nepal">Nepal</option>
                <option value="Netherlands">Netherlands</option>
                <option value="Netherlands Antilles">Netherlands Antilles</option>
                <option value="New Caledonia">New Caledonia</option>
                <option value="New Zealand">New Zealand</option>
                <option value="Nicaragua">Nicaragua</option>
                <option value="Niger">Niger</option>
                <option value="Nigeria">Nigeria</option>
                <option value="Niue">Niue</option>
                <option value="Norfolk Island">Norfolk Island</option>
                <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                <option value="Norway">Norway</option>
                <option value="Oman">Oman</option>
                <option value="Pakistan">Pakistan</option>
                <option value="Palau">Palau</option>
                <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                <option value="Panama">Panama</option>
                <option value="Papua New Guinea">Papua New Guinea</option>
                <option value="Paraguay">Paraguay</option>
                <option value="Peru">Peru</option>
                <option value="Philippines">Philippines</option>
                <option value="Pitcairn">Pitcairn</option>
                <option value="Poland">Poland</option>
                <option value="Portugal">Portugal</option>
                <option value="Puerto Rico">Puerto Rico</option>
                <option value="Qatar">Qatar</option>
                <option value="Reunion">Reunion</option>
                <option value="Romania">Romania</option>
                <option value="Russian Federation">Russian Federation</option>
                <option value="Rwanda">Rwanda</option>
                <option value="Saint Helena">Saint Helena</option>
                <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                <option value="Saint Lucia">Saint Lucia</option>
                <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                <option value="Samoa">Samoa</option>
                <option value="San Marino">San Marino</option>
                <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                <option value="Saudi Arabia">Saudi Arabia</option>
                <option value="Senegal">Senegal</option>
                <option value="Serbia">Serbia</option>
                <option value="Seychelles">Seychelles</option>
                <option value="Sierra Leone">Sierra Leone</option>
                <option value="Singapore">Singapore</option>
                <option value="Slovakia">Slovakia</option>
                <option value="Slovenia">Slovenia</option>
                <option value="Solomon Islands">Solomon Islands</option>
                <option value="Somalia">Somalia</option>
                <option value="South Africa">South Africa</option>
                <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                <option value="Spain">Spain</option>
                <option value="Sri Lanka">Sri Lanka</option>
                <option value="Sudan">Sudan</option>
                <option value="Suriname">Suriname</option>
                <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                <option value="Swaziland">Swaziland</option>
                <option value="Sweden">Sweden</option>
                <option value="Switzerland">Switzerland</option>
                <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                <option value="Tajikistan">Tajikistan</option>
                <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                <option value="Thailand">Thailand</option>
                <option value="Timor-leste">Timor-leste</option>
                <option value="Togo">Togo</option>
                <option value="Tokelau">Tokelau</option>
                <option value="Tonga">Tonga</option>
                <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                <option value="Tunisia">Tunisia</option>
                <option value="Turkey">Turkey</option>
                <option value="Turkmenistan">Turkmenistan</option>
                <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                <option value="Tuvalu">Tuvalu</option>
                <option value="Uganda">Uganda</option>
                <option value="Ukraine">Ukraine</option>
                <option value="United Arab Emirates">United Arab Emirates</option>
                <option value="United Kingdom">United Kingdom</option>
                <option value="United States">United States</option>
                <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                <option value="Uruguay">Uruguay</option>
                <option value="Uzbekistan">Uzbekistan</option>
                <option value="Vanuatu">Vanuatu</option>
                <option value="Venezuela">Venezuela</option>
                <option value="Viet Nam">Viet Nam</option>
                <option value="Virgin Islands, British">Virgin Islands, British</option>
                <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                <option value="Wallis and Futuna">Wallis and Futuna</option>
                <option value="Western Sahara">Western Sahara</option>
                <option value="Yemen">Yemen</option>
                <option value="Zambia">Zambia</option>
                <option value="Zimbabwe">Zimbabwe</option>
            </select>

        </div>
        <?php
}

add_action( 'give_after_donation_levels', 'lr_donations_custom_form_country' );

/**
 * Require custom field "Engraving message" field.
 *
 * @param $required_fields
 * @param $form_id
 *
 * @return array
 */
function lr_donations_custom_form_country_require_fields( $required_fields, $form_id ) {

        $required_fields['lr_donor_country'] = array(
            'error_id'      => 'lr_donor_country',
            'error_message' => __( 'Please choose your country', 'give' ),
        );

    return $required_fields;
}

add_filter( 'give_donation_form_required_fields', 'lr_donations_custom_form_country_require_fields', 10, 2 );


/**
 * Add Field to Payment Meta
 *
 * Store the custom field data custom post meta attached to the `give_payment` CPT.
 *
 * @param $payment_id
 *
 * @return mixed
 */
function lr_donations_custom_form_country_save_field( $payment_id ) {

    if ( isset( $_POST['lr_donor_country'] ) ) {
        $message = wp_strip_all_tags( $_POST['lr_donor_country'], true );
        give_update_payment_meta( $payment_id, 'lr_donor_country', $message );
    }

}

add_action( 'give_insert_payment', 'lr_donations_custom_form_country_save_field' );

/**
 * Show Data in Transaction Details
 *
 * Show the custom field(s) on the transaction page.
 *
 * @param $payment_id
 */
function lr_donations_custom_form_country_donation_details( $payment_id ) {

    $country_message = give_get_meta( $payment_id, 'lr_donor_country', true );

    if ( $country_message ) : ?>

        <div id="lr-donor-country" class="postbox">
            <h3 class="hndle"><?php esc_html_e( 'Country', 'give' ); ?></h3>
            <div class="inside" style="padding-bottom:10px;">
                <?php echo wpautop( $country_message ); ?>
            </div>
        </div>

    <?php endif;

}

add_action( 'give_view_donation_details_billing_before', 'lr_donations_custom_form_country_donation_details', 10, 1 );


/**
 * Get Donation Referral Data
 *
 * Example function that returns Custom field data if present in payment_meta;
 * The example used here is in conjunction with the Give documentation tutorials.
 *
 * @param array $tag_args Array of arguments
 *
 * @return string
 */
function lr_donations_custom_form_country_referral_data( $tag_args ) {
    $country_message = give_get_meta( $tag_args['payment_id'], 'lr_donor_country', true );

    $output = __( 'No referral data found.', 'give' );

    if ( ! empty( $country_message ) ) {
        $output = wp_kses_post( $country_message );
    }

    return $output;
}

/**
 * Adds a Custom "Engraved Message" Tag
 *
 * This function creates a custom Give email template tag.
 */
function lr_donations_custom_form_country_referral_tag() {
    give_add_email_tag( 'lr_donor_country', 'This outputs the Engraved Message', 'lr_donations_custom_form_country_referral_data' );
}

add_action( 'give_add_email_tags', 'lr_donations_custom_form_country_referral_tag' );

/**
 * Add Donation engraving message fields.
 *
 * @params array    $args
 * @params int      $donation_id
 * @params int      $form_id
 *
 * @return array
 */
function lr_donations_custom_form_country_receipt_args( $args, $donation_id, $form_id ) {


        $country_message = give_get_meta( $donation_id, 'lr_donor_country', true );
        $args['lr_donor_country'] = array(
            'name'    => __( 'Country Message', 'give' ),
            'value'   => wp_kses_post( $country_message ),
            // Do not show Engraved field if empty
            'display' => empty( $country_message ) ? false : true,
        );

    return $args;
}

add_filter( 'give_donation_receipt_args', 'lr_donations_custom_form_country_receipt_args', 30, 3 );


/**
 * Add Donation engraving message fields in export donor fields tab.
 */
function lr_donations_custom_form_country_standard_donor_fields() {
    ?>
    <li>
        <label for="lr-donor-country">
            <input type="checkbox" checked
                   name="give_give_donations_export_option[lr_donor_country]"
                   id="lr-donor-country"><?php _e( 'Country Message', 'give' ); ?>
        </label>
    </li>
    <?php
}

add_action( 'give_export_donation_standard_donor_fields', 'lr_donations_custom_form_country_standard_donor_fields' );


/**
 * Add Donation engraving message header in CSV.
 *
 * @param array $cols columns name for CSV
 *
 * @return  array $cols columns name for CSV
 */
function lr_donations_custom_form_country_update_columns_heading( $cols ) {
    if ( isset( $cols['lr_donor_country'] ) ) {
        $cols['lr_donor_country'] = __( 'Engraved Message', 'give' );
    }

    return $cols;

}

add_filter( 'give_export_donation_get_columns_name', 'lr_donations_custom_form_country_update_columns_heading' );


/**
 * Add Donation engraving message fields in CSV.
 *
 * @param array Donation data.
 * @param Give_Payment $payment Instance of Give_Payment
 * @param array $columns Donation data $columns that are not being merge
 *
 * @return array Donation data.
 */
function lr_donations_custom_form_country_update_columns_heading_export_donation_data( $data, $payment, $columns ) {
    if ( ! empty( $columns['lr_donor_country'] ) ) {
        $message                        = $payment->get_meta( 'lr_donor_country' );
        $data['lr_donor_country'] = isset( $message ) ? wp_kses_post( $message ) : '';
    }

    return $data;
}

add_filter( 'give_export_donation_data', 'lr_donations_custom_form_country_update_columns_heading_export_donation_data', 10, 3 );

/**
 * Remove Custom meta fields from Export donation standard fields.
 *
 * @param array $responses Contain all the fields that need to be display when donation form is display
 * @param int $form_id Donation Form ID
 *
 * @return array $responses
 */
function lr_donations_custom_form_country_update_columns_heading_export_custom_fields( $responses, $form_id ) {

        $standard_fields = $responses['standard_fields'];
        if ( in_array( 'lr_donor_country', $standard_fields ) ) {
            $standard_fields              = array_diff( $standard_fields, array( 'lr_donor_country' ) );
            $responses['standard_fields'] = $standard_fields;
        }

    return $responses;
}

add_filter( 'give_export_donations_get_custom_fields', 'lr_donations_custom_form_country_update_columns_heading_export_custom_fields', 10, 2 );