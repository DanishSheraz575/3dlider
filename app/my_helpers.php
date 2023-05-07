<?php
/**
 * @Project:     MFN Fishing
 * @Copyright:   Copyright (c) Danish Sheraz,
 * @Senior-Developer: Danish Sheraz
 **/
// date time helpers
if (!function_exists('get_date_time')) {
    function get_date_time()
    {
        $datetime = new DateTime();
        return $datetime->format('Y\-m\-d\ H:i:s');
    }
}
// date helper
if (!function_exists('get_date')) {
    function get_date()
    {
        $datetime = new DateTime();
        return $datetime->format('Y\-m\-d');
    }
}
// date time helpers
if (!function_exists('get_time')) {
    function get_time()
    {
        $datetime = new DateTime();
        return $datetime->format('H:i:s');
    }
}
// Add notification
if (!function_exists('send_email')) {
    function send_email($email_body, $email_address, $subject)
    {
        $em = "noreply@mfn-fishing.com";
        $na = "MFN Fishing";
        $from = $na . "<" . $em . ">";
        $xheaders = 'MIME-Version: 1.0' . "\r\n";
        $xheaders .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $xheaders .= 'X-Priority: 1' . "\r\n";
        $xheaders .= "From: " . $from . "\r\n";
        $xheaders .= "Reply-To: " . $from . "\r\n";
        $xheaders .= "Return-Path: " . $from . "\r\n";
        mail($email_address, $subject, $email_body, $xheaders);
    }
}

if (!function_exists('get_countries_ddl')) {
    function get_countries_ddl($selected=false, $name=false): void
    {
        ?>
        <select name="<?=$name ? $name : 'country'?>" class="form-control" required>
            <option selected disabled>Select a country</option>
            <option <?=$selected=='Afghanistan' ? 'selected' : ''?> value="Afghanistan">Afghanistan</option>
            <option <?=$selected=='Albania' ? 'selected' : ''?> value="Albania">Albania</option>
            <option <?=$selected=='Algeria' ? 'selected' : ''?> value="Algeria">Algeria</option>
            <option <?=$selected=='Andorra' ? 'selected' : ''?> value="Andorra">Andorra</option>
            <option <?=$selected=='Angola' ? 'selected' : ''?> value="Angola">Angola</option>
            <option <?=$selected=='Antigua and Barbuda' ? 'selected' : ''?> value="Antigua and Barbuda">Antigua and Barbuda</option>
            <option <?=$selected=='Argentina' ? 'selected' : ''?> value="Argentina">Argentina</option>
            <option <?=$selected=='Armenia' ? 'selected' : ''?> value="Armenia">Armenia</option>
            <option <?=$selected=='Australia' ? 'selected' : ''?> value="Australia">Australia</option>
            <option <?=$selected=='Austria' ? 'selected' : ''?> value="Austria">Austria</option>
            <option <?=$selected=='Azerbaijan' ? 'selected' : ''?> value="Azerbaijan">Azerbaijan</option>
            <option <?=$selected=='Bahama' ? 'selected' : ''?> value="Bahamas">Bahamas</option>
            <option <?=$selected=='Bahrain' ? 'selected' : ''?> value="Bahrain">Bahrain</option>
            <option <?=$selected=='Bangladesh' ? 'selected' : ''?> value="Bangladesh">Bangladesh</option>
            <option <?=$selected=='Barbados' ? 'selected' : ''?> value="Barbados">Barbados</option>
            <option <?=$selected=='Belarus' ? 'selected' : '' ?> value="Belarus">Belarus</option>
            <option <?=$selected=='Belgium' ? 'selected' : '' ?> value="Belgium">Belgium</option>
            <option <?=$selected=='Belize' ? 'selected' : ''?> value="Belize">Belize</option>
            <option <?=$selected=='Benin' ? 'selected' : ''?> value="Benin">Benin</option>
            <option <?=$selected=='Bhutan' ? 'selected' : ''?> value="Bhutan">Bhutan</option>
            <option <?=$selected=='Bolivia' ? 'selected' : ''?> value="Bolivia">Bolivia</option>
            <option <?=$selected=='Bosnia' ? 'selected' : '' ?> value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
            <option <?=$selected=='Botswana' ? 'selected' : '' ?> value="Botswana">Botswana</option>
            <option <?=$selected=='Brazil' ? 'selected' : ''?> value="Brazil">Brazil</option>
            <option <?=$selected=='Brunei' ? 'selected' : ''?> value="Brunei">Brunei</option>
            <option <?=$selected=='Bulgaria' ? 'selected' : ''?> value="Bulgaria">Bulgaria</option>
            <option <?=$selected=='Burkina' ? 'selected' : ''?> value="Burkina Faso">Burkina Faso</option>
            <option <?=$selected=='Burundi' ? 'selected' : ''?> value="Burundi">Burundi</option>
            <option <?=$selected=='Cambodia' ? 'selected' : ''?> value="Cambodia">Cambodia</option>
            <option <?=$selected=='Cameroon' ? 'selected' : ''?> value="Cameroon">Cameroon</option>
            <option <?=$selected=='Canada' ? 'selected' : '' ?> value="Canada">Canada</option>
            <option <?=$selected=='Cape Verde' ? 'selected' : '' ?> value="Cape Verde">Cape Verde</option>
            <option <?=$selected=='Central African Republic' ? 'selected' : ''?> value="Central African Republic">Central African Republic</option>
            <option <?=$selected=='Chad' ? 'selected' : ''?> value="Chad">Chad</option>
            <option <?=$selected=='Chile' ? 'selected' : '' ?> value="Chile">Chile</option>
            <option <?=$selected=='China' ? 'selected' : '' ?> value="China">China</option>
            <option <?=$selected=='Colombia' ? 'selected' : '' ?> value="Colombia">Colombia</option>
            <option <?=$selected=='Comoros' ? 'selected' : '' ?> value="Comoros">Comoros</option>
            <option <?=$selected=='Congo, Democratic Republic of the' ? 'selected' : ''?> value="Congo, Democratic Republic of the">Congo, Democratic Republic of the</option>
            <option <?=$selected=='Congo, Republic of the' ? 'selected' : ''?> value="Congo, Republic of the">Congo, Republic of the</option>
            <option <?=$selected=='Cote d\'Ivoire' ? 'selected' : '' ?> value="Cote d'Ivoire">Cote d'Ivoire</option>
            <option <?=$selected=='Croatia' ? 'selected' : ''?> value="Croatia">Croatia</option>
            <option <?=$selected=='Cuba' ? 'selected' : ''?> value="Cuba">Cuba</option>
            <option <?=$selected=='Cyprus' ? 'selected' : ''?> value="Cyprus">Cyprus</option>
            <option <?=$selected=='Czech Republic' ? 'selected' : ''?> value="Czech Republic">Czech Republic</option>
            <option <?=$selected=='Denmark' ? 'selected' : ''?> value="Denmark">Denmark</option>
            <option <?=$selected=='Djibouti' ? 'selected' : ''?> value="Djibouti">Djibouti</option>
            <option <?=$selected=='Dominica' ? 'selected' : ''?> value="Dominica">Dominica</option>
            <option <?=$selected=='Dominican Republic' ? 'selected' : ''?> value="Dominican Republic">Dominican Republic</option>
            <option <?=$selected=='East Timor (Timor-Leste)' ? 'selected' : '' ?> value="East Timor (Timor-Leste)">East Timor (Timor-Leste)</option>
            <option <?=$selected=='Ecuador' ? 'selected' : '' ?> value="Ecuador">Ecuador</option>
            <option <?=$selected=='Egypt' ? 'selected' : ''?> value="Egypt">Egypt</option>
            <option <?=$selected=='El Salvador' ? 'selected' : ''?> value="El Salvador">El Salvador</option>
            <option <?=$selected=='Equatorial Guinea' ? 'selected' : ''?> value="Equatorial Guinea">Equatorial Guinea</option>
            <option <?=$selected=='Eritrea' ? 'selected' : ''?> value="Eritrea">Eritrea</option>
            <option <?=$selected=='Estonia' ? 'selected' : ''?> value="Estonia">Estonia</option>
            <option <?=$selected=='Eswatini' ? 'selected' : ''?> value="Eswatini">Eswatini</option>
            <option <?=$selected=='Ethiopia' ? 'selected' : '' ?> value="Ethiopia">Ethiopia</option>
            <option <?=$selected=='Fiji' ? 'selected' : '' ?> value="Fiji">Fiji</option>
            <option <?=$selected=='Finland' ? 'selected' : ''?> value="Finland">Finland</option>
            <option <?=$selected=='France' ? 'selected' : ''?> value="France">France</option>
            <option <?=$selected=='Gabon' ? 'selected' : ''?> value="Gabon">Gabon</option>
            <option <?=$selected=='Gambia' ? 'selected' : ''?> value="Gambia">Gambia</option>
            <option <?=$selected=='Georgia' ? 'selected' : ''?> value="Georgia">Georgia</option>
            <option <?=$selected=='Germany' ? 'selected' : ''?> value="Germany">Germany</option>
            <option <?=$selected=='Ghana' ? 'selected' : '' ?> value="Ghana">Ghana</option>
            <option <?=$selected=='Greece' ? 'selected' : '' ?> value="Greece">Greece</option>
            <option <?=$selected=='Grenada' ? 'selected' : '' ?> value="Grenada">Grenada</option>
            <option <?=$selected=='Guatemala' ? 'selected' : '' ?> value="Guatemala">Guatemala</option>
            <option <?=$selected=='Guinea' ? 'selected' : '' ?> value="Guinea">Guinea</option>
            <option <?=$selected=='Guinea-Bissau' ? 'selected' : '' ?> value="Guinea-Bissau">Guinea-Bissau</option>
            <option <?=$selected=='Guyana' ? 'selected' : ''?> value="Guyana">Guyana</option>
            <option <?=$selected=='Haiti' ? 'selected' : '' ?> value="Haiti">Haiti</option>
            <option <?=$selected=='Honduras' ? 'selected' : ''?> value="Honduras">Honduras</option>
            <option <?=$selected=='Hungary' ? 'selected' : ''?> value="Hungary">Hungary</option>
            <option <?=$selected=='Iceland' ? 'selected' : ''?> value="Iceland">Iceland</option>
            <option <?=$selected=='India' ? 'selected' : ''?> value="India">India</option>
            <option <?=$selected=='Indonesia' ? 'selected' : ''?> value="Indonesia">Indonesia</option>
            <option <?=$selected=='Iran' ? 'selected' : ''?> value="Iran">Iran</option>
            <option <?=$selected=='Iraq' ? 'selected' : ''?> value="Iraq">Iraq</option>
            <option <?=$selected=='Ireland' ? 'selected' : ''?> value="Ireland">Ireland</option>
            <option <?=$selected=='Israel' ? 'selected' : ''?> value="Israel">Israel</option>
            <option <?=$selected=='Italy' ? 'selected' : ''?> value="Italy">Italy</option>
            <option <?=$selected=='Jamaica' ? 'selected' : ''?> value="Jamaica">Jamaica</option>
            <option <?=$selected=='Japan' ? 'selected' : ''?> value="Japan">Japan</option>
            <option <?=$selected=='Jordan' ? 'selected' : ''?> value="Jordan">Jordan</option>
            <option <?=$selected=='Kazakhstan' ? 'selected' : ''?> value="Kazakhstan">Kazakhstan</option>
            <option <?=$selected=='Kenya' ? 'selected' : ''?> value="Kenya">Kenya</option>
            <option <?=$selected=='Kiribati' ? 'selected' : ''?> value="Kiribati">Kiribati</option>
            <option <?=$selected=='Korea, North' ? 'selected' : ''?> value="Korea, North">Korea, North</option>
            <option <?=$selected=='Korea, South' ? 'selected' : ''?> value="Korea, South">Korea, South</option>
            <option <?=$selected=='Kosovo' ? 'selected' : ''?> value="Kosovo">Kosovo</option>
            <option <?=$selected=='Kuwait' ? 'selected' : ''?> value="Kuwait">Kuwait</option>
            <option <?=$selected=='Kyrgyzstan' ? 'selected' : ''?> value="Kyrgyzstan">Kyrgyzstan</option>
            <option <?=$selected=='Laos' ? 'selected' : ''?> value="Laos">Laos</option>
            <option <?=$selected=='Latvia' ? 'selected' : ''?> value="Latvia">Latvia</option>
            <option <?=$selected=='Lebanon' ? 'selected' : ''?> value="Lebanon">Lebanon</option>
            <option <?=$selected=='Lesotho' ? 'selected' : ''?> value="Lesotho">Lesotho</option>
            <option <?=$selected=='Liberia' ? 'selected' : ''?> value="Liberia">Liberia</option>
            <option <?=$selected=='Libya' ? 'selected' : ''?> value="Libya">Libya</option>
            <option <?=$selected=='Liechtenstein' ? 'selected' : ''?> value="Liechtenstein">Liechtenstein</option>
            <option <?=$selected=='Lithuania' ? 'selected' : ''?> value="Lithuania">Lithuania</option>
            <option <?=$selected=='Luxembourg' ? 'selected' : ''?> value="Luxembourg">Luxembourg</option>
            <option <?=$selected=='Madagascar' ? 'selected' : ''?> value="Madagascar">Madagascar</option>
            <option <?=$selected=='Malawi' ? 'selected' : ''?> value="Malawi">Malawi</option>
            <option <?=$selected=='Malaysia' ? 'selected' : ''?> value="Malaysia">Malaysia</option>
            <option <?=$selected=='Maldives' ? 'selected' : ''?> value="Maldives">Maldives</option>
            <option <?=$selected=='Mali' ? 'selected' : ''?> value="Mali">Mali</option>
            <option <?=$selected=='Malta' ? 'selected' : ''?> value="Malta">Malta</option>
            <option <?=$selected=='Marshall Islands' ? 'selected' : ''?> value="Marshall Islands">Marshall Islands</option>
            <option <?=$selected=='Mauritania' ? 'selected' : ''?> value="Mauritania">Mauritania</option>
            <option <?=$selected=='Mauritius' ? 'selected' : ''?> value="Mauritius">Mauritius</option>
            <option <?=$selected=='Micronesia' ? 'selected' : ''?> value="Micronesia">Micronesia</option>
            <option <?=$selected=='Moldova' ? 'selected' : ''?> value="Moldova">Moldova</option>
            <option <?=$selected=='Monaco' ? 'selected' : ''?> value="Monaco">Monaco</option>
            <option <?=$selected=='Mongolia' ? 'selected' : ''?> value="Mongolia">Mongolia</option>
            <option <?=$selected=='Montenegro' ? 'selected' : ''?> value="Montenegro">Montenegro</option>
            <option <?=$selected=='Morocco' ? 'selected' : ''?> value="Morocco">Morocco</option>
            <option <?=$selected=='Mozambique' ? 'selected' : ''?> value="Mozambique">Mozambique</option>
            <option <?=$selected=='Myanmar' ? 'selected' : '' ?> value="Myanmar (Burma)">Myanmar (Burma)</option>
            <option <?=$selected=='Namibia' ? 'selected' : '' ?> value="Namibia">Namibia</option>
            <option <?=$selected=='Nauru' ? 'selected' : '' ?> value="Nauru">Nauru</option>
            <option <?=$selected=='Nepal' ? 'selected' : '' ?> value="Nepal">Nepal</option>
            <option <?=$selected=='Netherlands' ? 'selected' : '' ?> value="Netherlands">Netherlands</option>
            <option <?=$selected=='New Zealand' ? 'selected' : ''?> value="New Zealand">New Zealand</option>
            <option <?=$selected=='Nicaragua' ? 'selected' : ''?> value="Nicaragua">Nicaragua</option>
            <option <?=$selected=='Niger' ? 'selected' : ''?> value="Niger">Niger</option>
            <option <?=$selected=='Nigeria' ? 'selected' : ''?> value="Nigeria">Nigeria</option>
            <option <?=$selected=='North Macedonia' ? 'selected' : ''?> value="North Macedonia">North Macedonia</option>
            <option <?=$selected=='Norway' ? 'selected' : '' ?> value="Norway">Norway</option>
            <option <?=$selected=='Oman' ? 'selected' : ''?> value="Oman">Oman</option>
            <option <?=$selected=='Pakistan' ? 'selected' : ''?> value="Pakistan">Pakistan</option>
            <option <?=$selected=='Palau' ? 'selected' : ''?> value="Palau">Palau</option>
            <option <?=$selected=='Palestine' ? 'selected' : ''?> value="Palestine">Palestine</option>
            <option <?=$selected=='Panama' ? 'selected' : ''?> value="Panama">Panama</option>
            <option <?=$selected=='Papua New Guinea' ? 'selected' : ''?> value="Papua New Guinea">Papua New Guinea</option>
            <option <?=$selected=='Paraguay' ? 'selected' : ''?> value="Paraguay">Paraguay</option>
            <option <?=$selected=='Peru' ? 'selected' : ''?> value="Peru">Peru</option>
            <option <?=$selected=='Philippines' ? 'selected' : ''?> value="Philippines">Philippines</option>
            <option <?=$selected=='Poland' ? 'selected' : ''?> value="Poland">Poland</option>
            <option <?=$selected=='Portugal' ? 'selected' : ''?> value="Portugal">Portugal</option>
            <option <?=$selected=='Qatar' ? 'selected' : ''?> value="Qatar">Qatar</option>
            <option <?=$selected=='Romania' ? 'selected' : ''?> value="Romania">Romania</option>
            <option <?=$selected=='Russia' ? 'selected' : ''?> value="Russia">Russia</option>
            <option <?=$selected=='Rwanda' ? 'selected' : ''?> value="Rwanda">Rwanda</option>
            <option <?=$selected=='Saint Kitts and Nevis' ? 'selected' : '' ?> value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
            <option <?=$selected=='Saint Lucia' ? 'selected' : ''?> value="Saint Lucia">Saint Lucia</option>
            <option <?=$selected=='Saint Vincent and the Grenadine' ? 'selected' : ''?> value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
            <option <?=$selected=='Samoa' ? 'selected' : '' ?> value="Samoa">Samoa</option>
            <option <?=$selected=='San Marino' ? 'selected' : ''?> value="San Marino">San Marino</option>
            <option <?=$selected=='Sao Tome and Principe' ? 'selected' : ''?> value="Sao Tome and Principe">Sao Tome and Principe</option>
            <option <?=$selected=='Saudi Arabia' ? 'selected' : ''?> value="Saudi Arabia">Saudi Arabia</option>
            <option <?=$selected=='Senegal' ? 'selected' : '' ?> value="Senegal">Senegal</option>
            <option <?=$selected=='Serbia' ? 'selected' : '' ?> value="Serbia">Serbia</option>
            <option <?=$selected=='Seychelles' ? 'selected' : ''?> value="Seychelles">Seychelles</option>
            <option <?=$selected=='Sierra Leone' ? 'selected' : ''?> value="Sierra Leone">Sierra Leone</option>
            <option <?=$selected=='Singapore' ? 'selected' : '' ?> value="Singapore">Singapore</option>
            <option <?=$selected=='Slovakia' ? 'selected' : '' ?> value="Slovakia">Slovakia</option>
            <option <?=$selected=='Slovenia' ? 'selected' : '' ?> value="Slovenia">Slovenia</option>
            <option <?=$selected=='Solomon Islands' ? 'selected' : '' ?> value="Solomon Islands">Solomon Islands</option>
            <option <?=$selected=='Somalia' ? 'selected' : '' ?> value="Somalia">Somalia</option>
            <option <?=$selected=='South Africa' ? 'selected' : '' ?> value="South Africa">South Africa</option>
            <option <?=$selected=='South Korea' ? 'selected' : ''?> value="South Korea">South Korea</option>
            <option <?=$selected=='South Sudan' ? 'selected' : ''?> value="South Sudan">South Sudan</option>
            <option <?=$selected=='Spain' ? 'selected' : ''?> value="Spain">Spain</option>
            <option <?=$selected=='Sri Lanka' ? 'selected' : ''?> value="Sri Lanka">Sri Lanka</option>
            <option <?=$selected=='Sudan' ? 'selected' : ''?> value="Sudan">Sudan</option>
            <option <?=$selected=='Suriname' ? 'selected' : ''?> value="Suriname">Suriname</option>
            <option <?=$selected=='Sweden' ? 'selected' : ''?> value="Sweden">Sweden</option>
            <option <?=$selected=='Switzerland' ? 'selected' : ''?> value="Switzerland">Switzerland</option>
            <option <?=$selected=='Syria' ? 'selected' : ''?> value="Syria">Syria</option>
            <option <?=$selected=='Taiwan' ? 'selected' : ''?> value="Taiwan">Taiwan</option>
            <option <?=$selected=='Tajikistan' ? 'selected' : ''?> value="Tajikistan">Tajikistan</option>
            <option <?=$selected=='Tanzania' ? 'selected' : ''?> value="Tanzania">Tanzania</option>
            <option <?=$selected=='Thailand' ? 'selected' : ''?> value="Thailand">Thailand</option>
            <option <?=$selected=='Timor-Leste (East Timor)' ? 'selected' : ''?> value="Timor-Leste (East Timor)">Timor-Leste (East Timor)</option>
            <option <?=$selected=='Togo' ? 'selected' : ''?> value="Togo">Togo</option>
            <option <?=$selected=='Tonga' ? 'selected' : ''?> value="Tonga">Tonga</option>
            <option <?=$selected=='Trinidad and Tobago' ? 'selected' : ''?> value="Trinidad and Tobago">Trinidad and Tobago</option>
            <option <?=$selected=='Tunisia' ? 'selected' : ''?> value="Tunisia">Tunisia</option>
            <option <?=$selected=='Turkey' ? 'selected' : ''?> value="Turkey">Turkey</option>
            <option <?=$selected=='Turkmenistan' ? 'selected' : ''?> value="Turkmenistan">Turkmenistan</option>
            <option <?=$selected=='Tuvalu' ? 'selected' : ''?> value="Tuvalu">Tuvalu</option>
            <option <?=$selected=='Uganda' ? 'selected' : ''?> value="Uganda">Uganda</option>
            <option <?=$selected=='Ukraine' ? 'selected' : ''?> value="Ukraine">Ukraine</option>
            <option <?=$selected=='United Arab Emirates (UAE)' ? 'selected' : '' ?> value="United Arab Emirates (UAE)">United Arab Emirates (UAE)</option>
            <option <?=$selected=='United Kingdom (UK)' ? 'selected' : '' ?> value="United Kingdom (UK)">United Kingdom (UK)</option>
            <option <?=$selected=='Uruguay' ? 'selected' : ''?> value="Uruguay">Uruguay</option>
            <option <?=$selected=='Uzbekistan' ? 'selected' : ''?> value="Uzbekistan">Uzbekistan</option>
            <option <?=$selected=='Vanuatu' ? 'selected' : ''?> value="Vanuatu">Vanuatu</option>
            <option <?=$selected=='Vatican City (Holy See)' ? 'selected' : ''?> value="Vatican City (Holy See)">Vatican City (Holy See)</option>
            <option <?=$selected=='Venezuela' ? 'selected' : ''?> value="Venezuela">Venezuela</option>
            <option <?=$selected=='Vietnam' ? 'selected' : ''?> value="Vietnam">Vietnam</option>
            <option <?=$selected=='Yemen' ? 'selected' : ''?> value="Yemen">Yemen</option>
            <option <?=$selected=='Zambia' ? 'selected' : ''?> value="Zambia">Zambia</option>
            <option <?=$selected=='Zimbabwe' ? 'selected' : ''?> value="Zimbabwe">Zimbabwe</option>
        </select>
        <?php
    }
}

if (!function_exists('get_profession_ddl')) {
    function get_profession_ddl($seleted=false){
        ?>
        <select name="profession" class="form-control" required>
            <option selected disabled>Select Profession</option>
            <option <?=$seleted == 'Otro' ? 'selected' : ''?> value="Otro">(Otro)</option>
            <option <?=$seleted== 'Sin Titulo' ? 'selected' : ''?> value="Sin Titulo">(Sin Titulo)</option>
            <option <?=$seleted== 'Abogado' ? 'selected' : ''?> value="Abogado">Abogado</option>
            <option <?=$seleted== 'Agrimensor' ? 'selected' : ''?> value="Agrimensor">Agrimensor</option>
            <option <?=$seleted== 'Alarife' ? 'selected' : ''?> value="Alarife">Alarife</option>
            <option <?=$seleted== 'Analista de Sistemas' ? 'selected' : ''?> value="Analista de Sistemas">Analista de Sistemas</option>
            <option <?=$seleted== 'Analista Programador Universitario' ? 'selected' : ''?> value="Analista Programador Universitario">Analista Programador Universitario</option>
            <option <?=$seleted== 'Arquitecto' ? 'selected' : ''?> value="Arquitecto">Arquitecto</option>
            <option <?=$seleted== 'Auditor' ? 'selected' : ''?> value="Auditor">Auditor</option>
            <option <?=$seleted== 'Bachiller' ? 'selected' : ''?> value="Bachiller">Bachiller</option>
            <option <?=$seleted== 'Contador Publico Nacional' ? 'selected' : ''?> value="Contador Publico Nacional">Contador Publico Nacional</option>
            <option <?=$seleted== 'Coordinador en General' ? 'selected' : ''?> value="Coordinador en General">Coordinador en General</option>
            <option <?=$seleted== 'Dr. en Cs. Geologicas' ? 'selected' : ''?> value="Dr. en Cs. Geologicas">Dr. en Cs. Geologicas</option>
            <option <?=$seleted== 'Geologo' ? 'selected' : ''?> value="Geologo">Geologo</option>
            <option <?=$seleted== 'Ing. Civil' ? 'selected' : ''?> value="Ing. Civil">Ing. Civil</option>
            <option <?=$seleted== 'Ing. Civil y en Reservorios' ? 'selected' : ''?> value="Ing. Civil y en Reservorios">Ing. Civil y en Reservorios</option>
            <option <?=$seleted== 'Ing. Comercial' ? 'selected' : ''?> value="Ing. Comercial">Ing. Comercial</option>
            <option <?=$seleted== 'Ing. de Petroleos' ? 'selected' : ''?> value="Ing. de Petroleos">Ing. de Petroleos</option>
            <option <?=$seleted== 'Ing. Electricista' ? 'selected' : ''?> value="Ing. Electricista">Ing. Electricista</option>
            <option <?=$seleted== 'Ing. Electromecanico' ? 'selected' : ''?> value="Ing. Electromecanico">Ing. Electromecanico</option>
            <option <?=$seleted== 'Ing. Electronico' ? 'selected' : ''?> value="Ing. Electronico">Ing. Electronico</option>
            <option <?=$seleted== 'Ing. Electronico-EIectricista' ? 'selected' : ''?> value="Ing. Electronico-EIectricista">Ing. Electronico-EIectricista</option>
            <option <?=$seleted== 'Ing. en Construcciones' ? 'selected' : ''?> value="Ing. en Construcciones">Ing. en Construcciones</option>
            <option <?=$seleted== 'Ing. en Mecanica' ? 'selected' : ''?> value="Ing. en Mecanica">Ing. en Mecanica</option>
            <option <?=$seleted== 'Ing. en Minas' ? 'selected' : ''?> value="Ing. en Minas">Ing. en Minas</option>
            <option <?=$seleted== 'Ing. en Petroleo' ? 'selected' : ''?> value="Ing. en Petroleo">Ing. en Petroleo</option>
            <option <?=$seleted== 'Ing. en Petroleo Combustible' ? 'selected' : ''?> value="Ing. en Petroleo Combustible">Ing. en Petroleo Combustible</option>
            <option <?=$seleted== 'Ing. en Produccion' ? 'selected' : ''?> value="Ing. en Produccion">Ing. en Produccion</option>
            <option <?=$seleted== 'Ing. en Telecomunicaciones' ? 'selected' : ''?> value="Ing. en Telecomunicaciones">Ing. en Telecomunicaciones</option>
            <option <?=$seleted== 'Ing. Industrial' ? 'selected' : ''?> value="Ing. Industrial">Ing. Industrial</option>
            <option <?=$seleted== 'Ing. Mecanico' ? 'selected' : ''?> value="Ing. Mecanico">Ing. Mecanico</option>
            <option <?=$seleted== 'Ing. Mecanico-Electricista' ? 'selected' : ''?> value="Ing. Mecanico-Electricista">Ing. Mecanico-Electricista</option>
            <option <?=$seleted== 'Ing. Metalurgico' ? 'selected' : ''?> value="Ing. Metalurgico">Ing. Metalurgico</option>
            <option <?=$seleted== 'Ing. Naval' ? 'selected' : ''?> value="Ing. Naval">Ing. Naval</option>
            <option <?=$seleted== 'Ing. Petroquimico y Minero' ? 'selected' : ''?> value="Ing. Petroquimico y Minero">Ing. Petroquimico y Minero</option>
            <option <?=$seleted== 'Ing. Quimico' ? 'selected' : ''?> value="Ing. Quimico">Ing. Quimico</option>
            <option <?=$seleted== 'Lic. ADM. De Empress' ? 'selected' : ''?> value="Lic. ADM. De Empress">Lic. ADM. De Empress</option>
            <option <?=$seleted== 'Lic. Comercio Internacional' ? 'selected' : ''?> value="Lic. Comercio Internacional">Lic. Comercio Internacional</option>
            <option <?=$seleted== 'Lic. en Cs. Fisicas' ? 'selected' : ''?> value="Lic. en Cs. Fisicas">Lic. en Cs. Fisicas</option>
            <option <?=$seleted== 'Lic. en Cs. Geologicas' ? 'selected' : ''?> value="Lic. en Cs. Geologicas">Lic. en Cs. Geologicas</option>
            <option <?=$seleted== 'Lic. en Cs. Quimicas' ? 'selected' : ''?> value="Lic. en Cs. Quimicas">Lic. en Cs. Quimicas</option>
            <option <?=$seleted== 'Lic. en Geofisica' ? 'selected' : ''?> value="Lic. en Geofisica">Lic. en Geofisica</option>
            <option <?=$seleted== 'Lic. en Geologia' ? 'selected' : ''?> value="Lic. en Geologia">Lic. en Geologia</option>
            <option <?=$seleted== 'Lic. en Informatica' ? 'selected' : ''?> value="Lic. en Informatica">Lic. en Informatica</option>
            <option <?=$seleted== 'Lic. en Organizaciön Industrial' ? 'selected' : ''?> value="Lic. en Organizaciön Industrial">Lic. en Organizaciön Industrial</option>
            <option <?=$seleted== 'Lic. en Petroleo y Gas' ? 'selected' : ''?> value="Lic. en Petroleo y Gas">Lic. en Petroleo y Gas</option>
            <option <?=$seleted== 'Lic. en Relaciones del Trabajo' ? 'selected' : ''?> value="Lic. en Relaciones del Trabajo">Lic. en Relaciones del Trabajo</option>
            <option <?=$seleted== 'Lic. en Sistemas' ? 'selected' : ''?> value="Lic. en Sistemas">Lic. en Sistemas</option>
            <option <?=$seleted== 'Lic. Quimico' ? 'selected' : ''?> value="Lic. Quimico">Lic. Quimico</option>
            <option <?=$seleted== 'Lic. Relaciones Publicas' ? 'selected' : ''?> value="Lic. Relaciones Publicas">Lic. Relaciones Publicas</option>
            <option <?=$seleted== 'Maestra Primaria Provincial' ? 'selected' : ''?> value="Maestra Primaria Provincial">Maestra Primaria Provincial</option>
            <option <?=$seleted== 'Maestro Mayor de Obras' ? 'selected' : ''?> value="Maestro Mayor de Obras">Maestro Mayor de Obras</option>
            <option <?=$seleted== 'Maestro Nacional' ? 'selected' : ''?> value="Maestro Nacional">Maestro Nacional</option>
            <option <?=$seleted== 'Medico' ? 'selected' : ''?> value="Medico">Medico</option>
            <option <?=$seleted== 'Motosierrista' ? 'selected' : ''?> value="Motosierrista">Motosierrista</option>
            <option <?=$seleted== 'Perito Comercial' ? 'selected' : ''?> value="Perito Comercial">Perito Comercial</option>
            <option <?=$seleted== 'Perito Comercial Especializado' ? 'selected' : ''?> value="Perito Comercial Especializado">Perito Comercial Especializado</option>
            <option <?=$seleted== 'Perito Especializado en Adm de Empresas' ? 'selected' : ''?> value="Perito Especializado en Adm de Empresas">Perito Especializado en Adm de Empresas</option>
            <option <?=$seleted== 'Perito Mercantil' ? 'selected' : ''?> value="Perito Mercantil">Perito Mercantil</option>
            <option <?=$seleted== 'Permisero' ? 'selected' : ''?> value="Permisero">Permisero</option>
            <option <?=$seleted== 'Profesora Especializada' ? 'selected' : ''?> value="Profesora Especializada">Profesora Especializada</option>
            <option <?=$seleted== 'Psicopedagoga' ? 'selected' : ''?> value="Psicopedagoga">Psicopedagoga</option>
            <option <?=$seleted== 'Tecnico Administracion de Empresas' ? 'selected' : ''?> value="Tecnico Administracion de Empresas">Tecnico Administracion de Empresas</option>
            <option <?=$seleted== 'Tecnico Agrario-Enologo' ? 'selected' : ''?> value="Tecnico Agrario-Enologo">Tecnico Agrario-Enologo</option>
            <option <?=$seleted== 'Tecnico Automotor' ? 'selected' : ''?> value="Tecnico Automotor">Tecnico Automotor</option>
            <option <?=$seleted== 'Tecnico Electricista' ? 'selected' : ''?> value="Tecnico Electricista">Tecnico Electricista</option>
            <option <?=$seleted== 'Tecnico Electromecanico' ? 'selected' : ''?> value="Tecnico Electromecanico">Tecnico Electromecanico</option>
            <option <?=$seleted== 'Tecnico Electronico' ? 'selected' : ''?> value="Tecnico Electronico">Tecnico Electronico</option>
            <option <?=$seleted== 'Tecnico en Mineria' ? 'selected' : ''?> value="Tecnico en Mineria">Tecnico en Mineria</option>
            <option <?=$seleted== 'Tecnico en Petroleo' ? 'selected' : ''?> value="Tecnico en Petroleo">Tecnico en Petroleo</option>
            <option <?=$seleted== 'Tecnico en Petroleo y Gas' ? 'selected' : ''?> value="Tecnico en Petroleo y Gas">Tecnico en Petroleo y Gas</option>
            <option <?=$seleted== 'Tecnico en Seguridad Industrial' ? 'selected' : ''?> value="Tecnico en Seguridad Industrial">Tecnico en Seguridad Industrial</option>
            <option <?=$seleted== 'Tecnico Mecanico' ? 'selected' : ''?> value="Tecnico Mecanico">Tecnico Mecanico</option>
            <option <?=$seleted== 'Tecnico Mecanico-Electricista' ? 'selected' : ''?> value="Tecnico Mecanico-Electricista">Tecnico Mecanico-Electricista</option>
            <option <?=$seleted== 'Tecnico Petroquimico' ? 'selected' : ''?> value="Tecnico Petroquimico">Tecnico Petroquimico</option>
            <option <?=$seleted== 'Tecnico Quimico' ? 'selected' : ''?> value="Tecnico Quimico">Tecnico Quimico</option>
            <option <?=$seleted== 'Tecnico Quimico Industrial' ? 'selected' : ''?> value="Tecnico Quimico Industrial">Tecnico Quimico Industrial</option>
            <option <?=$seleted== 'Tornero especializado' ? 'selected' : ''?> value="Tornero especializado">Tornero especializado</option>
        </select>
        <?php
    }
}

/* End of file my_helpers.php */
