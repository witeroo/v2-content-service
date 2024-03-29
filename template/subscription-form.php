    <section class="subscribe">
        <div class="subscribe-container">
            <div class="section-header">
                <h2>Subscribe for future updates</h2>
                <p>
                    Subscribe for articles and newsletters on technology and other industry-related content.
                </p>
                <div class="d-flex">
                    <a href="#" class="btn btn-secondary" id="subscribe-btn">Subscribe</a>
                </div>
            </div>
        </div>
    </section>
    <div class="subscription-form-container p-absolute modal">
        <div class="subscription-form-content">
            <div class="subscription-header p-relative">
                <h1>Subscribe for future updates</h1>
                <button class="close-btn p-absolute">
                    <svg width="20" height="24" viewBox="0 0 20 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 5L5 15" stroke="#01040A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M5 5L15 15" stroke="#01040A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
            <div class="subscription-body">
            <div class="alert" role="alert" id="subscription-alert"></div>
                <select id="subscriber-type">
                    <option>Select Subscriber Type</option>
                    <option>Individual</option>
                    <option>Business</option>
                </select>
                <form id="individual-form" class="subscription-form">
                    <input type="hidden" name="type" value="Individual">
                    <div class="form-row d-flex">
                        <input type="text" name="first_name" placeholder="First Name">
                        <input type="text" name="last_name" placeholder="Last Name">
                    </div>
                    <input type="email" name="email" placeholder="Enter your Email">
                    <input type="text" name="phone_no" placeholder="Phone Number">
                    <select name="country">
                        <option value="">Country</option>
                        <option data-value="AF">Afghanistan</option>
                        <option data-value="AX">Aland Islands</option>
                        <option data-value="AL">Albania</option>
                        <option data-value="DZ">Algeria</option>
                        <option data-value="AS">American Samoa</option>
                        <option data-value="AD">Andorra</option>
                        <option data-value="AO">Angola</option>
                        <option data-value="AI">Anguilla</option>
                        <option data-value="AQ">Antarctica</option>
                        <option data-value="AG">Antigua and Barbuda</option>
                        <option data-value="AR">Argentina</option>
                        <option data-value="AM">Armenia</option>
                        <option data-value="AW">Aruba</option>
                        <option data-value="AU">Australia</option>
                        <option data-value="AT">Austria</option>
                        <option data-value="AZ">Azerbaijan</option>
                        <option data-value="BS">Bahamas</option>
                        <option data-value="BH">Bahrain</option>
                        <option data-value="BD">Bangladesh</option>
                        <option data-value="BB">Barbados</option>
                        <option data-value="BY">Belarus</option>
                        <option data-value="BE">Belgium</option>
                        <option data-value="BZ">Belize</option>
                        <option data-value="BJ">Benin</option>
                        <option data-value="BM">Bermuda</option>
                        <option data-value="BT">Bhutan</option>
                        <option data-value="BO">Bolivia</option>
                        <option data-value="BQ">Bonaire, Sint Eustatius and Saba</option>
                        <option data-value="BA">Bosnia and Herzegovina</option>
                        <option data-value="BW">Botswana</option>
                        <option data-value="BV">Bouvet Island</option>
                        <option data-value="BR">Brazil</option>
                        <option data-value="IO">British Indian Ocean Territory</option>
                        <option data-value="BN">Brunei Darussalam</option>
                        <option data-value="BG">Bulgaria</option>
                        <option data-value="BF">Burkina Faso</option>
                        <option data-value="BI">Burundi</option>
                        <option data-value="KH">Cambodia</option>
                        <option data-value="CM">Cameroon</option>
                        <option data-value="CA">Canada</option>
                        <option data-value="CV">Cape Verde</option>
                        <option data-value="KY">Cayman Islands</option>
                        <option data-value="CF">Central African Republic</option>
                        <option data-value="TD">Chad</option>
                        <option data-value="CL">Chile</option>
                        <option data-value="CN">China</option>
                        <option data-value="CX">Christmas Island</option>
                        <option data-value="CC">Cocos (Keeling) Islands</option>
                        <option data-value="CO">Colombia</option>
                        <option data-value="KM">Comoros</option>
                        <option data-value="CG">Congo</option>
                        <option data-value="CD">Congo, Democratic Republic of the Congo</option>
                        <option data-value="CK">Cook Islands</option>
                        <option data-value="CR">Costa Rica</option>
                        <option data-value="CI">Cote D'Ivoire</option>
                        <option data-value="HR">Croatia</option>
                        <option data-value="CU">Cuba</option>
                        <option data-value="CW">Curacao</option>
                        <option data-value="CY">Cyprus</option>
                        <option data-value="CZ">Czech Republic</option>
                        <option data-value="DK">Denmark</option>
                        <option data-value="DJ">Djibouti</option>
                        <option data-value="DM">Dominica</option>
                        <option data-value="DO">Dominican Republic</option>
                        <option data-value="EC">Ecuador</option>
                        <option data-value="EG">Egypt</option>
                        <option data-value="SV">El Salvador</option>
                        <option data-value="GQ">Equatorial Guinea</option>
                        <option data-value="ER">Eritrea</option>
                        <option data-value="EE">Estonia</option>
                        <option data-value="ET">Ethiopia</option>
                        <option data-value="FK">Falkland Islands (Malvinas)</option>
                        <option data-value="FO">Faroe Islands</option>
                        <option data-value="FJ">Fiji</option>
                        <option data-value="FI">Finland</option>
                        <option data-value="FR">France</option>
                        <option data-value="GF">French Guiana</option>
                        <option data-value="PF">French Polynesia</option>
                        <option data-value="TF">French Southern Territories</option>
                        <option data-value="GA">Gabon</option>
                        <option data-value="GM">Gambia</option>
                        <option data-value="GE">Georgia</option>
                        <option data-value="DE">Germany</option>
                        <option data-value="GH">Ghana</option>
                        <option data-value="GI">Gibraltar</option>
                        <option data-value="GR">Greece</option>
                        <option data-value="GL">Greenland</option>
                        <option data-value="GD">Grenada</option>
                        <option data-value="GP">Guadeloupe</option>
                        <option data-value="GU">Guam</option>
                        <option data-value="GT">Guatemala</option>
                        <option data-value="GG">Guernsey</option>
                        <option data-value="GN">Guinea</option>
                        <option data-value="GW">Guinea-Bissau</option>
                        <option data-value="GY">Guyana</option>
                        <option data-value="HT">Haiti</option>
                        <option data-value="HM">Heard Island and Mcdonald Islands</option>
                        <option data-value="VA">Holy See (Vatican City State)</option>
                        <option data-value="HN">Honduras</option>
                        <option data-value="HK">Hong Kong</option>
                        <option data-value="HU">Hungary</option>
                        <option data-value="IS">Iceland</option>
                        <option data-value="IN">India</option>
                        <option data-value="ID">Indonesia</option>
                        <option data-value="IR">Iran, Islamic Republic of</option>
                        <option data-value="IQ">Iraq</option>
                        <option data-value="IE">Ireland</option>
                        <option data-value="IM">Isle of Man</option>
                        <option data-value="IL">Israel</option>
                        <option data-value="IT">Italy</option>
                        <option data-value="JM">Jamaica</option>
                        <option data-value="JP">Japan</option>
                        <option data-value="JE">Jersey</option>
                        <option data-value="JO">Jordan</option>
                        <option data-value="KZ">Kazakhstan</option>
                        <option data-value="KE">Kenya</option>
                        <option data-value="KI">Kiribati</option>
                        <option data-value="KP">Korea, Democratic People's Republic of</option>
                        <option data-value="KR">Korea, Republic of</option>
                        <option data-value="XK">Kosovo</option>
                        <option data-value="KW">Kuwait</option>
                        <option data-value="KG">Kyrgyzstan</option>
                        <option data-value="LA">Lao People's Democratic Republic</option>
                        <option data-value="LV">Latvia</option>
                        <option data-value="LB">Lebanon</option>
                        <option data-value="LS">Lesotho</option>
                        <option data-value="LR">Liberia</option>
                        <option data-value="LY">Libyan Arab Jamahiriya</option>
                        <option data-value="LI">Liechtenstein</option>
                        <option data-value="LT">Lithuania</option>
                        <option data-value="LU">Luxembourg</option>
                        <option data-value="MO">Macao</option>
                        <option data-value="MK">Macedonia, the Former Yugoslav Republic of</option>
                        <option data-value="MG">Madagascar</option>
                        <option data-value="MW">Malawi</option>
                        <option data-value="MY">Malaysia</option>
                        <option data-value="MV">Maldives</option>
                        <option data-value="ML">Mali</option>
                        <option data-value="MT">Malta</option>
                        <option data-value="MH">Marshall Islands</option>
                        <option data-value="MQ">Martinique</option>
                        <option data-value="MR">Mauritania</option>
                        <option data-value="MU">Mauritius</option>
                        <option data-value="YT">Mayotte</option>
                        <option data-value="MX">Mexico</option>
                        <option data-value="FM">Micronesia, Federated States of</option>
                        <option data-value="MD">Moldova, Republic of</option>
                        <option data-value="MC">Monaco</option>
                        <option data-value="MN">Mongolia</option>
                        <option data-value="ME">Montenegro</option>
                        <option data-value="MS">Montserrat</option>
                        <option data-value="MA">Morocco</option>
                        <option data-value="MZ">Mozambique</option>
                        <option data-value="MM">Myanmar</option>
                        <option data-value="NA">Namibia</option>
                        <option data-value="NR">Nauru</option>
                        <option data-value="NP">Nepal</option>
                        <option data-value="NL">Netherlands</option>
                        <option data-value="AN">Netherlands Antilles</option>
                        <option data-value="NC">New Caledonia</option>
                        <option data-value="NZ">New Zealand</option>
                        <option data-value="NI">Nicaragua</option>
                        <option data-value="NE">Niger</option>
                        <option data-value="NG">Nigeria</option>
                        <option data-value="NU">Niue</option>
                        <option data-value="NF">Norfolk Island</option>
                        <option data-value="MP">Northern Mariana Islands</option>
                        <option data-value="NO">Norway</option>
                        <option data-value="OM">Oman</option>
                        <option data-value="PK">Pakistan</option>
                        <option data-value="PW">Palau</option>
                        <option data-value="PS">Palestinian Territory, Occupied</option>
                        <option data-value="PA">Panama</option>
                        <option data-value="PG">Papua New Guinea</option>
                        <option data-value="PY">Paraguay</option>
                        <option data-value="PE">Peru</option>
                        <option data-value="PH">Philippines</option>
                        <option data-value="PN">Pitcairn</option>
                        <option data-value="PL">Poland</option>
                        <option data-value="PT">Portugal</option>
                        <option data-value="PR">Puerto Rico</option>
                        <option data-value="QA">Qatar</option>
                        <option data-value="RE">Reunion</option>
                        <option data-value="RO">Romania</option>
                        <option data-value="RU">Russian Federation</option>
                        <option data-value="RW">Rwanda</option>
                        <option data-value="BL">Saint Barthelemy</option>
                        <option data-value="SH">Saint Helena</option>
                        <option data-value="KN">Saint Kitts and Nevis</option>
                        <option data-value="LC">Saint Lucia</option>
                        <option data-value="MF">Saint Martin</option>
                        <option data-value="PM">Saint Pierre and Miquelon</option>
                        <option data-value="VC">Saint Vincent and the Grenadines</option>
                        <option data-value="WS">Samoa</option>
                        <option data-value="SM">San Marino</option>
                        <option data-value="ST">Sao Tome and Principe</option>
                        <option data-value="SA">Saudi Arabia</option>
                        <option data-value="SN">Senegal</option>
                        <option data-value="RS">Serbia</option>
                        <option data-value="CS">Serbia and Montenegro</option>
                        <option data-value="SC">Seychelles</option>
                        <option data-value="SL">Sierra Leone</option>
                        <option data-value="SG">Singapore</option>
                        <option data-value="SX">Sint Maarten</option>
                        <option data-value="SK">Slovakia</option>
                        <option data-value="SI">Slovenia</option>
                        <option data-value="SB">Solomon Islands</option>
                        <option data-value="SO">Somalia</option>
                        <option data-value="ZA">South Africa</option>
                        <option data-value="GS">South Georgia and the South Sandwich Islands</option>
                        <option data-value="SS">South Sudan</option>
                        <option data-value="ES">Spain</option>
                        <option data-value="LK">Sri Lanka</option>
                        <option data-value="SD">Sudan</option>
                        <option data-value="SR">Suriname</option>
                        <option data-value="SJ">Svalbard and Jan Mayen</option>
                        <option data-value="SZ">Swaziland</option>
                        <option data-value="SE">Sweden</option>
                        <option data-value="CH">Switzerland</option>
                        <option data-value="SY">Syrian Arab Republic</option>
                        <option data-value="TW">Taiwan, Province of China</option>
                        <option data-value="TJ">Tajikistan</option>
                        <option data-value="TZ">Tanzania, United Republic of</option>
                        <option data-value="TH">Thailand</option>
                        <option data-value="TL">Timor-Leste</option>
                        <option data-value="TG">Togo</option>
                        <option data-value="TK">Tokelau</option>
                        <option data-value="TO">Tonga</option>
                        <option data-value="TT">Trinidad and Tobago</option>
                        <option data-value="TN">Tunisia</option>
                        <option data-value="TR">Turkey</option>
                        <option data-value="TM">Turkmenistan</option>
                        <option data-value="TC">Turks and Caicos Islands</option>
                        <option data-value="TV">Tuvalu</option>
                        <option data-value="UG">Uganda</option>
                        <option data-value="UA">Ukraine</option>
                        <option data-value="AE">United Arab Emirates</option>
                        <option data-value="GB">United Kingdom</option>
                        <option data-value="US">United States</option>
                        <option data-value="UM">United States Minor Outlying Islands</option>
                        <option data-value="UY">Uruguay</option>
                        <option data-value="UZ">Uzbekistan</option>
                        <option data-value="VU">Vanuatu</option>
                        <option data-value="VE">Venezuela</option>
                        <option data-value="VN">Viet Nam</option>
                        <option data-value="VG">Virgin Islands, British</option>
                        <option data-value="VI">Virgin Islands, U.s.</option>
                        <option data-value="WF">Wallis and Futuna</option>
                        <option data-value="EH">Western Sahara</option>
                        <option data-value="YE">Yemen</option>
                        <option data-value="ZM">Zambia</option>
                        <option data-value="ZW">Zimbabwe</option>
                    </select>
                    <div class="form-row d-flex">
                        <select name="state"><option value="">State</option></select>
                        <select name="city"><option value="">City</option></select>
                    </div>
                    <input type="submit" disabled="disabled" value="Subscribe to Newsletter">
                </form>
                <form id="business-form" class="subscription-form">
                    <input type="hidden" name="type" value="Business">
                    <input type="text" name="business_name" placeholder="Name of Organization">
                    <select name="industry">
                        <option value="">Industry</option>
                        <option>Architecture & Planning</option>
                        <option>Automotive</option>
                        <option>Aviation & Aerospace</option>
                        <option>Banking, Investment & Capital Markets</option>
                        <option>Biotechnology</option>
                        <option>Computer Software</option>
                        <option>Computer Networking</option>
                        <option>Computer & Network Security</option>
                        <option>Construction</option>
                        <option>Consumer Electronics & Services</option>
                        <option>Defense & Space</option>
                        <option>Design & Engineering Services</option>
                        <option>E-learning</option>
                        <option>Electrical/Electronic Manufacturing</option>
                        <option>Fashion, Apparel & Luxury goods</option>
                        <option>Health, Wellness & Fitness</option>
                        <option>Hospital & Health Care</option>
                        <option>Hospitality</option>
                        <option>Industrial Automation & Machinery</option>
                        <option>Information Technology & Services</option>
                        <option>International Affairs & Development</option>
                        <option>Internet</option>
                        <option>Insurance & Financial Services</option>
                        <option>Leisure, Travel & Tourism</option>
                        <option>Management Consulting</option>
                        <option>Marketing & Advertising</option>
                        <option>Mechanical or Industrial Engineering</option>
                        <option>Non-profit Organization & Philanthropy</option>
                        <option>Oil & Energy</option>
                        <option>Pharmaceuticals</option>
                        <option>Professional Training & Coaching</option>
                        <option>Professional, Scientific & Technical Services</option>
                        <option>Program Development</option>
                        <option>Publishing, Media & Newspapers</option>
                        <option>Real Estate & Property Development</option>
                        <option>Renewables & Environment</option>
                        <option>Research & Development</option>
                        <option>Retail</option>
                        <option>Sports, Music & Entertainment</option>
                        <option>Telecommunication & Wireless</option>
                        <option>Utilities</option>
                        <option>Venture Capital & Private Equity</option>
                        <option>Warehousing, Logistics & Supply Chain</option>
                    </select>
                    <input type="email" name="email" placeholder="Enter Company Email">
                    <input type="text" name="phone_no" placeholder="Phone Number">
                    <select name="country">
                        <option value="">Country</option>
                        <option data-value="AF">Afghanistan</option>
                        <option data-value="AX">Aland Islands</option>
                        <option data-value="AL">Albania</option>
                        <option data-value="DZ">Algeria</option>
                        <option data-value="AS">American Samoa</option>
                        <option data-value="AD">Andorra</option>
                        <option data-value="AO">Angola</option>
                        <option data-value="AI">Anguilla</option>
                        <option data-value="AQ">Antarctica</option>
                        <option data-value="AG">Antigua and Barbuda</option>
                        <option data-value="AR">Argentina</option>
                        <option data-value="AM">Armenia</option>
                        <option data-value="AW">Aruba</option>
                        <option data-value="AU">Australia</option>
                        <option data-value="AT">Austria</option>
                        <option data-value="AZ">Azerbaijan</option>
                        <option data-value="BS">Bahamas</option>
                        <option data-value="BH">Bahrain</option>
                        <option data-value="BD">Bangladesh</option>
                        <option data-value="BB">Barbados</option>
                        <option data-value="BY">Belarus</option>
                        <option data-value="BE">Belgium</option>
                        <option data-value="BZ">Belize</option>
                        <option data-value="BJ">Benin</option>
                        <option data-value="BM">Bermuda</option>
                        <option data-value="BT">Bhutan</option>
                        <option data-value="BO">Bolivia</option>
                        <option data-value="BQ">Bonaire, Sint Eustatius and Saba</option>
                        <option data-value="BA">Bosnia and Herzegovina</option>
                        <option data-value="BW">Botswana</option>
                        <option data-value="BV">Bouvet Island</option>
                        <option data-value="BR">Brazil</option>
                        <option data-value="IO">British Indian Ocean Territory</option>
                        <option data-value="BN">Brunei Darussalam</option>
                        <option data-value="BG">Bulgaria</option>
                        <option data-value="BF">Burkina Faso</option>
                        <option data-value="BI">Burundi</option>
                        <option data-value="KH">Cambodia</option>
                        <option data-value="CM">Cameroon</option>
                        <option data-value="CA">Canada</option>
                        <option data-value="CV">Cape Verde</option>
                        <option data-value="KY">Cayman Islands</option>
                        <option data-value="CF">Central African Republic</option>
                        <option data-value="TD">Chad</option>
                        <option data-value="CL">Chile</option>
                        <option data-value="CN">China</option>
                        <option data-value="CX">Christmas Island</option>
                        <option data-value="CC">Cocos (Keeling) Islands</option>
                        <option data-value="CO">Colombia</option>
                        <option data-value="KM">Comoros</option>
                        <option data-value="CG">Congo</option>
                        <option data-value="CD">Congo, Democratic Republic of the Congo</option>
                        <option data-value="CK">Cook Islands</option>
                        <option data-value="CR">Costa Rica</option>
                        <option data-value="CI">Cote D'Ivoire</option>
                        <option data-value="HR">Croatia</option>
                        <option data-value="CU">Cuba</option>
                        <option data-value="CW">Curacao</option>
                        <option data-value="CY">Cyprus</option>
                        <option data-value="CZ">Czech Republic</option>
                        <option data-value="DK">Denmark</option>
                        <option data-value="DJ">Djibouti</option>
                        <option data-value="DM">Dominica</option>
                        <option data-value="DO">Dominican Republic</option>
                        <option data-value="TL">East Timor</option>
                        <option data-value="EC">Ecuador</option>
                        <option data-value="EG">Egypt</option>
                        <option data-value="SV">El Salvador</option>
                        <option data-value="GQ">Equatorial Guinea</option>
                        <option data-value="ER">Eritrea</option>
                        <option data-value="EE">Estonia</option>
                        <option data-value="ET">Ethiopia</option>
                        <option data-value="FK">Falkland Islands (Malvinas)</option>
                        <option data-value="FO">Faroe Islands</option>
                        <option data-value="FJ">Fiji</option>
                        <option data-value="FI">Finland</option>
                        <option data-value="FR">France</option>
                        <option data-value="GF">French Guiana</option>
                        <option data-value="PF">French Polynesia</option>
                        <option data-value="TF">French Southern Territories</option>
                        <option data-value="GA">Gabon</option>
                        <option data-value="GM">Gambia</option>
                        <option data-value="GE">Georgia</option>
                        <option data-value="DE">Germany</option>
                        <option data-value="GH">Ghana</option>
                        <option data-value="GI">Gibraltar</option>
                        <option data-value="GR">Greece</option>
                        <option data-value="GL">Greenland</option>
                        <option data-value="GD">Grenada</option>
                        <option data-value="GP">Guadeloupe</option>
                        <option data-value="GU">Guam</option>
                        <option data-value="GT">Guatemala</option>
                        <option data-value="GG">Guernsey</option>
                        <option data-value="GN">Guinea</option>
                        <option data-value="GW">Guinea-Bissau</option>
                        <option data-value="GY">Guyana</option>
                        <option data-value="HT">Haiti</option>
                        <option data-value="HM">Heard Island and Mcdonald Islands</option>
                        <option data-value="VA">Holy See (Vatican City State)</option>
                        <option data-value="HN">Honduras</option>
                        <option data-value="HK">Hong Kong</option>
                        <option data-value="HU">Hungary</option>
                        <option data-value="IS">Iceland</option>
                        <option data-value="IN">India</option>
                        <option data-value="ID">Indonesia</option>
                        <option data-value="IR">Iran, Islamic Republic of</option>
                        <option data-value="IQ">Iraq</option>
                        <option data-value="IE">Ireland</option>
                        <option data-value="IM">Isle of Man</option>
                        <option data-value="IL">Israel</option>
                        <option data-value="IT">Italy</option>
                        <option data-value="JM">Jamaica</option>
                        <option data-value="JP">Japan</option>
                        <option data-value="JE">Jersey</option>
                        <option data-value="JO">Jordan</option>
                        <option data-value="KZ">Kazakhstan</option>
                        <option data-value="KE">Kenya</option>
                        <option data-value="KI">Kiribati</option>
                        <option data-value="KP">Korea, Democratic People's Republic of</option>
                        <option data-value="KR">Korea, Republic of</option>
                        <option data-value="XK">Kosovo</option>
                        <option data-value="KW">Kuwait</option>
                        <option data-value="KG">Kyrgyzstan</option>
                        <option data-value="LA">Lao People's Democratic Republic</option>
                        <option data-value="LV">Latvia</option>
                        <option data-value="LB">Lebanon</option>
                        <option data-value="LS">Lesotho</option>
                        <option data-value="LR">Liberia</option>
                        <option data-value="LY">Libyan Arab Jamahiriya</option>
                        <option data-value="LI">Liechtenstein</option>
                        <option data-value="LT">Lithuania</option>
                        <option data-value="LU">Luxembourg</option>
                        <option data-value="MO">Macao</option>
                        <option data-value="MK">Macedonia, the Former Yugoslav Republic of</option>
                        <option data-value="MG">Madagascar</option>
                        <option data-value="MW">Malawi</option>
                        <option data-value="MY">Malaysia</option>
                        <option data-value="MV">Maldives</option>
                        <option data-value="ML">Mali</option>
                        <option data-value="MT">Malta</option>
                        <option data-value="MH">Marshall Islands</option>
                        <option data-value="MQ">Martinique</option>
                        <option data-value="MR">Mauritania</option>
                        <option data-value="MU">Mauritius</option>
                        <option data-value="YT">Mayotte</option>
                        <option data-value="MX">Mexico</option>
                        <option data-value="FM">Micronesia, Federated States of</option>
                        <option data-value="MD">Moldova, Republic of</option>
                        <option data-value="MC">Monaco</option>
                        <option data-value="MN">Mongolia</option>
                        <option data-value="ME">Montenegro</option>
                        <option data-value="MS">Montserrat</option>
                        <option data-value="MA">Morocco</option>
                        <option data-value="MZ">Mozambique</option>
                        <option data-value="MM">Myanmar</option>
                        <option data-value="NA">Namibia</option>
                        <option data-value="NR">Nauru</option>
                        <option data-value="NP">Nepal</option>
                        <option data-value="NL">Netherlands</option>
                        <option data-value="AN">Netherlands Antilles</option>
                        <option data-value="NC">New Caledonia</option>
                        <option data-value="NZ">New Zealand</option>
                        <option data-value="NI">Nicaragua</option>
                        <option data-value="NE">Niger</option>
                        <option data-value="NG">Nigeria</option>
                        <option data-value="NU">Niue</option>
                        <option data-value="NF">Norfolk Island</option>
                        <option data-value="MP">Northern Mariana Islands</option>
                        <option data-value="NO">Norway</option>
                        <option data-value="OM">Oman</option>
                        <option data-value="PK">Pakistan</option>
                        <option data-value="PW">Palau</option>
                        <option data-value="PS">Palestinian Territory, Occupied</option>
                        <option data-value="PA">Panama</option>
                        <option data-value="PG">Papua New Guinea</option>
                        <option data-value="PY">Paraguay</option>
                        <option data-value="PE">Peru</option>
                        <option data-value="PH">Philippines</option>
                        <option data-value="PN">Pitcairn</option>
                        <option data-value="PL">Poland</option>
                        <option data-value="PT">Portugal</option>
                        <option data-value="PR">Puerto Rico</option>
                        <option data-value="QA">Qatar</option>
                        <option data-value="RE">Reunion</option>
                        <option data-value="RO">Romania</option>
                        <option data-value="RU">Russian Federation</option>
                        <option data-value="RW">Rwanda</option>
                        <option data-value="BL">Saint Barthelemy</option>
                        <option data-value="SH">Saint Helena</option>
                        <option data-value="KN">Saint Kitts and Nevis</option>
                        <option data-value="LC">Saint Lucia</option>
                        <option data-value="MF">Saint Martin</option>
                        <option data-value="PM">Saint Pierre and Miquelon</option>
                        <option data-value="VC">Saint Vincent and the Grenadines</option>
                        <option data-value="WS">Samoa</option>
                        <option data-value="SM">San Marino</option>
                        <option data-value="ST">Sao Tome and Principe</option>
                        <option data-value="SA">Saudi Arabia</option>
                        <option data-value="SN">Senegal</option>
                        <option data-value="RS">Serbia</option>
                        <option data-value="CS">Serbia and Montenegro</option>
                        <option data-value="SC">Seychelles</option>
                        <option data-value="SL">Sierra Leone</option>
                        <option data-value="SG">Singapore</option>
                        <option data-value="SX">Sint Maarten</option>
                        <option data-value="SK">Slovakia</option>
                        <option data-value="SI">Slovenia</option>
                        <option data-value="SB">Solomon Islands</option>
                        <option data-value="SO">Somalia</option>
                        <option data-value="ZA">South Africa</option>
                        <option data-value="GS">South Georgia and the South Sandwich Islands</option>
                        <option data-value="SS">South Sudan</option>
                        <option data-value="ES">Spain</option>
                        <option data-value="LK">Sri Lanka</option>
                        <option data-value="SD">Sudan</option>
                        <option data-value="SR">Suriname</option>
                        <option data-value="SJ">Svalbard and Jan Mayen</option>
                        <option data-value="SZ">Swaziland</option>
                        <option data-value="SE">Sweden</option>
                        <option data-value="CH">Switzerland</option>
                        <option data-value="SY">Syrian Arab Republic</option>
                        <option data-value="TW">Taiwan, Province of China</option>
                        <option data-value="TJ">Tajikistan</option>
                        <option data-value="TZ">Tanzania, United Republic of</option>
                        <option data-value="TH">Thailand</option>
                        <option data-value="TL">Timor-Leste</option>
                        <option data-value="TG">Togo</option>
                        <option data-value="TK">Tokelau</option>
                        <option data-value="TO">Tonga</option>
                        <option data-value="TT">Trinidad and Tobago</option>
                        <option data-value="TN">Tunisia</option>
                        <option data-value="TR">Turkey</option>
                        <option data-value="TM">Turkmenistan</option>
                        <option data-value="TC">Turks and Caicos Islands</option>
                        <option data-value="TV">Tuvalu</option>
                        <option data-value="UG">Uganda</option>
                        <option data-value="UA">Ukraine</option>
                        <option data-value="AE">United Arab Emirates</option>
                        <option data-value="GB">United Kingdom</option>
                        <option data-value="US">United States</option>
                        <option data-value="UM">United States Minor Outlying Islands</option>
                        <option data-value="UY">Uruguay</option>
                        <option data-value="UZ">Uzbekistan</option>
                        <option data-value="VU">Vanuatu</option>
                        <option data-value="VE">Venezuela</option>
                        <option data-value="VN">Viet Nam</option>
                        <option data-value="VG">Virgin Islands, British</option>
                        <option data-value="VI">Virgin Islands, U.s.</option>
                        <option data-value="WF">Wallis and Futuna</option>
                        <option data-value="EH">Western Sahara</option>
                        <option data-value="YE">Yemen</option>
                        <option data-value="ZM">Zambia</option>
                        <option data-value="ZW">Zimbabwe</option>
                    </select>
                    <div class="form-row d-flex">
                        <select name="state"><option value="">State</option></select>
                        <select name="city"><option value="">City</option></select>
                    </div>
                    <input type="submit" disabled="disabled" value="Subscribe to Newsletter">
                </form>
            </div>
        </div>
    </div>
    <div class="subscription-popup-container p-absolute modal">
        <div class="subscription-popup-content d-flex p-relative">
            <div class="subscription-popup-image d-sm-none">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/subscription-popup.jpg" alt="">
            </div>
            <div class="subscription-popup-image d-none d-sm-block">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/subscription-popup-m.jpg" alt="">
            </div>
            <button class="close-btn p-absolute">
                <svg width="20" height="24" viewBox="0 0 20 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15 5L5 15" stroke="#01040A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M5 5L15 15" stroke="#01040A" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
            <div class="subscription-popup-body">
                <h1 class="d-sm-none">Join our<br>Newsletter</h1>
                <h1 class="d-none d-sm-block">Join our Newsletter</h1>
                <p>Sign-up today and get occasional email contents on technology. </p>
                <div class="d-flex">
                    <a href="#" class="btn btn-secondary" id="popup-subscribe-btn">Subscribe to Newsletter</a>
                </div>
            </div>
        </div>
    </div>