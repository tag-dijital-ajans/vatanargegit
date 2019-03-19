@extends ('anasayfa.template')

@section('icerik')


    <form id="startupForm" action="{{route('kurumdisi.formgonder')}}" method="post" class="submission-form" name="contact">

       {{-- <h2>GİRİŞİMCİ FİRMA<br />BAŞVURU FORMU</h2>

        <h3>ŞİRKET BİLGİLERİ</h3>--}}
        <section class="form-area col s12">

            <h4> Kurum Dışı Başvuru</h4>

            <div class="inputsToCheck">

                <div class="row">
                    <div class="input-field col s6">
                        <input type="text" id="groupName" name="groupName" class="validate req-min" minlength="2" />
                        <label for="groupName" class="avenirdemibold">Şirketin adı</label>
                    </div>
                    <div class="input-field col s6">
                        <input type="text" id="groupLabel" name="groupLabel" class="validate req-min" minlength="2" />
                        <label for="groupLabel" class="avenirdemibold">Şirket unvanı</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <input type="text" id="groupAddress" name="groupAddress" class="validate req-min" minlength="2" />
                        <label for="groupAddress" class="avenirdemibold">Adresi</label>
                    </div>
                    <div class="input-field col s6">
                        <input type="text" id="groupWebsite" name="groupWebsite" class="validate req-string" pattern="(https?:\/\/)?([\da-z\.-]+)\.([a-z\.]{2,6})([\/\w \.-]*)*\/?" />
                        <label for="groupWebsite" class="avenirdemibold">Web sitesi</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <select id="groupCountry" name="groupCountry" class="validate req-string">
                            <option value="" disabled selected>Lütfen Seçiniz</option>
                            <option value="Türkiye">Türkiye</option>
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
                        <label for="groupCountry" class="avenirdemibold">Ülke</label>
                    </div>
                    <div class="input-field col s6">
                        <select id="foundedYear" name="foundedYear" class="validate req-string">
                            <option value="" disabled selected>Lütfen Seçiniz</option>
                            <option value="2019">2019</option><option value="2018">2018</option><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option>
                        </select>
                        <label for="foundedYear" class="avenirdemibold">Kuruluş Yılı</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <select id="foundationType" name="foundationType" class="validate req-string">
                            <option value="" disabled selected>Lütfen Seçiniz</option>
                            <option value="Anonim şirket">Anonim şirket</option>
                            <option value="Limited şirket">Limited şirket</option>
                            <option value="Sermaye payları bölünmüş komandit şirket">Sermaye payları bölünmüş komandit şirket</option>
                            <option value="Hakiki şahıs şirketi">Hakiki şahıs şirketi</option>
                            <option value="Adi şirket">Adi şirket</option>
                            <option value="Kolektif şirket">Kolektif şirket</option>
                            <option value="Adi komandit şirket">Adi komandit şirket</option>
                        </select>
                        <label for="foundationType" class="avenirdemibold">Şirketin kuruluş türü</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <input type="text" id="groupTaxBranch" name="groupTaxBranch" class="validate req-string" pattern="[a-zA-Z.:, ğçöüşıÖÇŞİÜĞ]+" />
                        <label for="groupTaxBranch" data-error="sadece metin ve noktalama işaretleri girebilirsiniz" class="avenirdemibold">Vergi dairesi</label>
                    </div>
                    <div class="input-field col s6">
                        <input type="text" id="groupTaxNo" name="groupTaxNo" class="validate req-string" />
                        <label for="groupTaxNo" class="avenirdemibold">Vergi numarası</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s6">
                        <input type="text" id="groupSicilNo" name="groupSicilNo" class="validate" />
                        <label for="groupSicilNo" class="avenirdemibold">Ticari sicil numarası</label>
                    </div>
                    <div class="input-field col s6">
                        <input type="text" id="groupSGKNo" name="groupSGKNo" class="validate" />
                        <label for="groupSGKNo" class="avenirdemibold">SGK sicil numarası</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input type="number" id="paidCapital" name="paidCapital" class="validate" />
                        <label for="paidCapital" class="avenirdemibold">Ödenmiş sermaye (₺)</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input type="text" id="biggestShareName" name="biggestShareName" class="validate req-min" minlength="2" maxlength="300" length="300" />
                        <label for="biggestShareName" class="avenirdemibold">Şirketin çoğunluk hissesinin kime ait olduğunu belirtiniz</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input type="number" id="biggestSharePerc" name="biggestSharePerc" class="validate req-numeric" min="5" max="100" />
                        <label for="biggestSharePerc" class="avenirdemibold">Çoğunluk hissedarının hisse oranı</label>
                    </div>
                </div>

                <div class="inputsToCheck">
                    <div id="firstChoiceTitle" class="row">
                        <p class="avenirdemibold sub-title col s12 tooltip-right">Yabancı hissedar var mı belirtiniz. <span class="tooltip-right" data-tooltip="Bir seçim yapmanız gerekmektedir."></span></p>
                    </div>
                </div>
                <div class="row no-margin inputsToCheck">
                    <p class="col s12">
                        <input type="radio" id="foreignPartner1" name="foreignPartner" class="formGroupSwitch req-checked" data-section="1" data-choice="1" value="Evet" rel="firstChoiceTitle" />
                        <label for="foreignPartner1">Evet</label>
                    </p>
                    <p class="col s12">
                        <input type="radio" id="foreignPartner2" name="foreignPartner" class="formGroupSwitch req-checked" data-section="1" data-choice="2" value="Hayır" rel="firstChoiceTitle" />
                        <label for="foreignPartner2">Hayır</label>
                    </p>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input type="text" id="lastEndorsement" name="lastEndorsement" class="validate req-min" minlength="2" maxlength="300" length="300" />
                        <label for="lastEndorsement" class="avenirdemibold">Son 3 yıllık cironuzu yıl ve rakam olacak şekilde belirtiniz. (<small>Ticari faaliyetinizin olmadığı yılları yazmayabilirsiniz.</small>)</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input type="text" id="nextEndorsement" name="nextEndorsement" class="validate req-min" minlength="2" maxlength="300" length="300" />
                        <label for="nextEndorsement" class="avenirdemibold">Gelecek 3 yıllık ciro beklentinizi yıl ve rakam olacak şekilde belirtiniz.</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input type="text" id="lastInvoice" name="lastInvoice" class="validate req-min" minlength="2" maxlength="300" length="300" />
                        <label for="lastInvoice" class="avenirdemibold">Geçen yıl fatura kestiğiniz müşteri sayısını belirtiniz.</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input type="text" id="lastYearRevenue" name="lastYearRevenue" class="validate req-min" minlength="2" maxlength="300" length="300" />
                        <label for="lastYearRevenue" class="avenirdemibold">İEM VATAN'a başvuru yaptığınız ürününüzün satışından son 1 yıldır gerçekleşen ciroyu belirtiniz.</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input type="text" id="needInvestment" name="needInvestment" class="validate req-min" minlength="2" maxlength="300" length="300" />
                        <label for="needInvestment" class="avenirdemibold">Yatırım arıyor musunuz, ne süre içinde ne tutarda yatırım gerekeceğini düşünüyorsunuz belirtiniz.</label>
                    </div>
                </div>

            </div>

            <!-- IF 1-1: START -->
            <div id="formChoice1-1" class="formGroup1 additional-info hidden">

                <hr />

                <div class="row">
                    <div class="input-field col s12">
                        <input type="number" id="biggestForeignSharePerc" name="biggestForeignSharePerc" class="validate req-numeric" min="1" max="100" />
                        <label for="biggestForeignSharePerc" class="avenirdemibold">En yüksek hisseye sahip yabancı hissedarın hisse oranını belirtiniz.</label>
                    </div>
                </div>

            </div>
            <!-- IF 1-1: END -->

        </section>
        <h4>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspKİŞİSEL BİLGİLER</h4>


        <section class="form-area col s12 inputsToCheck">

            <div class="row">

                <p class="avenirdemibold sub-title col s12">İTÜ Magnet’e başvuran ve şirket adına irtibat kurulacak kişi ile ilgili bilgiler</p>
            </div>

            <div class="row">

                <div class="input-field col s6">
                    <input type="text" id="groupContactName" name="groupContactName" class="validate req-min" minlength="2" />
                    <label for="groupContactName" class="avenirdemibold">Ad</label>
                </div>

                <div class="input-field col s6">
                    <input type="text" id="groupContactLastName" name="groupContactLastName" class="validate req-min" minlength="2" />
                    <label for="groupContactLastName" class="avenirdemibold">Soyad</label>
                </div>

            </div>

            <div class="row">

                <div class="input-field col s6">
                    <input type="tel" id="groupContactPhone" name="groupContactPhone" class="validate req-numeric req-min" minlength="11" maxlength="11" pattern="[0][0-9]{10}" />
                    <label for="groupContactPhone" data-error="hatalı bir telefon numarası girdiniz (05001234567)" class="avenirdemibold">Telefon</label>
                </div>

                <div class="input-field col s6">
                    <input type="email" id="groupContactEmail" name="groupContactEmail" class="validate req-email" minlength="5" pattern="[A-Za-z0-9._%+-]{1,}@[a-zA-Z]{3,}([.]{1}[a-zA-Z]{2,}|[.]{1}[a-zA-Z]{2,}[.]{1}[a-zA-Z]{2,})" />
                    <label for="groupContactEmail" data-error="hatalı bir email adresi girdiniz" class="avenirdemibold">E-mail</label>
                </div>

            </div>

            <div class="row">
                <p class="col s12">İTÜ Magnet’e en fazla 8 kişi bir startup adına kabul edilmektedir. </p>
            </div>

            <div class="row">
                <p class="avenirdemibold col s12">İTÜ Magnet’e sizin dışınızda başvuracak kişi sayısını giriniz.</p>
            </div>

            <div class="row">

                <div class="col s12" style="margin-top:0;">
                    <select id="groupOtherCount" name="groupOtherCount" class="req-string">
                        <option value="" disabled selected>Lütfen Seçiniz</option>
                        <option value="0">0 Kişi</option>
                        <option value="1">1 Kişi</option>
                        <option value="2">2 Kişi</option>
                        <option value="3">3 Kişi</option>
                        <option value="4">4 Kişi</option>
                        <option value="5">5 Kişi</option>
                        <option value="6">6 Kişi</option>
                        <option value="7">7 Kişi</option>
                    </select>
                </div>

            </div>

           {{-- <div id="groupFixedChair" class="hidden">

                <div id="groupFixedChairTitle" class="row  dont-hide">
                    <p class="avenirdemibold sub-title col s12">Koltuk dağılımını giriniz.<span class="tooltip-right" data-tooltip="Bir seçim yapmanız gerekmektedir."></span></p>
                </div>

                <div class="row">
                    <div class="col s6">
                        <input type="radio" id="groupFixedChair0" name="groupFixedChair" value="0 Sabit Koltuk" class="req-checked" rel="groupFixedChairTitle" checked />
                        <label for="groupFixedChair0">0 Sabit, <span>0</span> Paylaşımlı Koltuk</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s6">
                        <input type="radio" id="groupFixedChair1" name="groupFixedChair" value="1 Sabit Koltuk" class="req-checked" rel="groupFixedChairTitle" />
                        <label for="groupFixedChair1">1 Sabit, <span>0</span> Paylaşımlı Koltuk</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s6">
                        <input type="radio" id="groupFixedChair2" name="groupFixedChair" value="2 Sabit Koltuk" class="req-checked" rel="groupFixedChairTitle" />
                        <label for="groupFixedChair2">2 Sabit, <span>0</span> Paylaşımlı Koltuk</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s6">
                        <input type="radio" id="groupFixedChair3" name="groupFixedChair" value="3 Sabit Koltuk" class="req-checked" rel="groupFixedChairTitle" />
                        <label for="groupFixedChair3">3 Sabit, <span>0</span> Paylaşımlı Koltuk</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s6">
                        <input type="radio" id="groupFixedChair4" name="groupFixedChair" value="4 Sabit Koltuk" class="req-checked" rel="groupFixedChairTitle" />
                        <label for="groupFixedChair4">4 Sabit, <span>0</span> Paylaşımlı Koltuk</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s6">
                        <input type="radio" id="groupFixedChair5" name="groupFixedChair" value="5 Sabit Koltuk" class="req-checked" rel="groupFixedChairTitle" />
                        <label for="groupFixedChair5">5 Sabit, <span>0</span> Paylaşımlı Koltuk</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s6">
                        <input type="radio" id="groupFixedChair6" name="groupFixedChair" value="6 Sabit Koltuk" class="req-checked" rel="groupFixedChairTitle" />
                        <label for="groupFixedChair6">6 Sabit, <span>0</span> Paylaşımlı Koltuk</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s6">
                        <input type="radio" id="groupFixedChair7" name="groupFixedChair" value="7 Sabit Koltuk" class="req-checked" rel="groupFixedChairTitle" />
                        <label for="groupFixedChair7">7 Sabit, <span>0</span> Paylaşımlı Koltuk</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s6">
                        <input type="radio" id="groupFixedChair8" name="groupFixedChair" value="8 Sabit Koltuk" class="req-checked" rel="groupFixedChairTitle" />
                        <label for="groupFixedChair8">8 Sabit, <span>0</span> Paylaşımlı Koltuk</label>
                    </div>
                </div>

                <div class="row dont-hide">
                    <p class="sub-title col s12"><span class="avenirdemibold">Toplam Fiyat:</span> <span id="priceTag2">0</span>₺+KDV / Ay</p>
                </div>

                <hr class="dont-hide" />

                <div class="row dont-hide">
                    <p class="info-context col s12 valign-wrapper"><i class="small material-icons">info</i> <span class="valign"> <span class="avenirdemibold">Paylaşımlı Koltuk:</span> 600₺+KDV / Ay</span></p>
                    <p class="info-context col s12 valign-wrapper"><i class="small material-icons">info</i> <span class="valign"> <span class="avenirdemibold">Sabit Koltuk:</span> 1020₺+KDV / Ay</span></p>
                </div>

            </div>--}}

        </section>

        <h4>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspYETKİNLİKLER</h4>

        <section class="form-area col s12 inputsToCheck">

            <div id="competenceTitle" class="row">
                <p class="avenirdemibold sub-title col s12 tooltip-right">
                    Lütfen ekibinizdeki kişilerin gerekli olan yetkinliklerden hangilerine sahip olduğunu aşağıdaki her bir yetkinliğin<br />yanına o yetkinliğe sahip kişi sayısını girerek belirtiniz.                        <span class="tooltip-right" data-tooltip="En az grubunuzdaki kişi sayısı kadar yetkinlik girmeniz gerekir."></span>
                </p>
            </div>

            <div class="row competenceInputs">

                <div class="input-field col s3">
                    <input type="number" id="competence1Count" name="competence1Count" class="validate" min="0" max="1" />
                    <label for="competence1Count" class="avenirdemibold">Satış</label>
                </div>

                <div class="input-field col s3">
                    <input type="number" id="competence2Count" name="competence2Count" class="validate" min="0" max="1" />
                    <label for="competence2Count" class="avenirdemibold">Pazarlama</label>
                </div>

                <div class="input-field col s3">
                    <input type="number" id="competence3Count" name="competence3Count" class="validate" min="0" max="1" />
                    <label for="competence3Count" class="avenirdemibold">Yazılım</label>
                </div>

                <div class="input-field col s3">
                    <input type="number" id="competence4Count" name="competence4Count" class="validate" min="0" max="1" />
                    <label for="competence4Count" class="avenirdemibold">Tasarım</label>
                </div>

            </div>

            <div class="row competenceInputs">

                <div class="input-field col s3">
                    <input type="number" id="competence5Count" name="competence5Count" class="validate" min="0" max="1" />
                    <label for="competence5Count" class="avenirdemibold">Üretim Planlama</label>
                </div>

                <div class="input-field col s3">
                    <input type="number" id="competence6Count" name="competence6Count" class="validate" min="0" max="1" />
                    <label for="competence6Count" class="avenirdemibold">Muhasebe</label>
                </div>

                <div class="input-field col s3">
                    <input type="number" id="competence7Count" name="competence7Count" class="validate" min="0" max="1" />
                    <label for="competence7Count" class="avenirdemibold">Stratejik Yönetim</label>
                </div>

                <div class="input-field col s3">
                    <input type="number" id="competence8Count" name="competence8Count" class="validate" min="0" max="1" />
                    <label for="competence8Count" class="avenirdemibold">Elektrik - Elektronik</label>
                </div>

            </div>

            <div class="row competenceInputs">

                <div class="input-field col s3">
                    <input type="number" id="competence9Count" name="competence9Count" class="validate" min="0" max="1" />
                    <label for="competence9Count" class="avenirdemibold">Mekanik</label>
                </div>

                <div class="input-field col s9">
                    <input type="text" id="competence10Count" name="competence10Count" class="validate" />
                    <label for="competence10Count">Diğer</label>
                </div>

            </div>

        </section>

        <h4>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspÜRÜN BİLGİLERİ</h4>

        <section class="form-area col s12">

            <div class="inputsToCheck">

                <div class="row">
                    <div class="input-field col s12">
                        <input type="number" id="productCount" name="productCount" class="req-numeric validate" />
                        <label for="productCount" class="avenirdemibold">Kaç tip ürününüz var belirtiniz</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="productSummary" name="productSummary" class="materialize-textarea req-string validate" maxlength="2000" length="2000"></textarea>
                        <label for="productSummary" class="avenirdemibold">Ana ürünlerinizi anlatınız</label>
                    </div>
                </div>

                <div id="projectTechTitle" class="row">
                    <p class="avenirdemibold sub-title col s12 tooltip-right">Teknolojinizi nasıl tanımlarsınız? <span class="tooltip-right" data-tooltip="Bir seçim yapmanız gerekmektedir."></span></p>
                </div>

                <div class="row">
                    <div class="col s4">
                        <input type="checkbox" id="projectTech1" name="projectTech1" value="Evet" />
                        <label for="projectTech1">Tarım Teknolojileri (Agri-Tech)</label>
                    </div>
                    <div class="col s4">
                        <input type="checkbox" id="projectTech2" name="projectTech2" value="Evet" />
                        <label for="projectTech2">Artırılmış Gerçeklik / Sanal Gerçeklik (AR/VR)</label>
                    </div>
                    <div class="col s4">
                        <input type="checkbox" id="projectTech3" name="projectTech3" value="Evet" />
                        <label for="projectTech3">Büyük Veri (Big Data)</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col s4">
                        <input type="checkbox" id="projectTech4" name="projectTech4" value="Evet" />
                        <label for="projectTech4">Biyoloji / Mikrobiyoloji</label>
                    </div>
                    <div class="col s4">
                        <input type="checkbox" id="projectTech5" name="projectTech5" value="Evet" />
                        <label for="projectTech5">İçerik (Content)</label>
                    </div>
                    <div class="col s4">
                        <input type="checkbox" id="projectTech6" name="projectTech6" value="Evet" />
                        <label for="projectTech6">Donanım</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col s4">
                        <input type="checkbox" id="projectTech7" name="projectTech7" value="Evet" />
                        <label for="projectTech7">Eğitim Teknolojileri (Edtech)</label>
                    </div>
                    <div class="col s4">
                        <input type="checkbox" id="projectTech8" name="projectTech8" value="Evet" />
                        <label for="projectTech8">Emlak</label>
                    </div>
                    <div class="col s4">
                        <input type="checkbox" id="projectTech9" name="projectTech9" value="Evet" />
                        <label for="projectTech9">Enerji</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col s4">
                        <input type="checkbox" id="projectTech10" name="projectTech10" value="Evet" />
                        <label for="projectTech10">E-Ticaret</label>
                    </div>
                    <div class="col s4">
                        <input type="checkbox" id="projectTech11" name="projectTech11" value="Evet" />
                        <label for="projectTech11">Finansal Teknolojiler (Fintech)</label>
                    </div>
                    <div class="col s4">
                        <input type="checkbox" id="projectTech12" name="projectTech12" value="Evet" />
                        <label for="projectTech12">Gıda Teknolojileri (Foodtech)</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col s4">
                        <input type="checkbox" id="projectTech13" name="projectTech13" value="Evet" />
                        <label for="projectTech13">Görüntü İşleme (Image Processing)</label>
                    </div>
                    <div class="col s4">
                        <input type="checkbox" id="projectTech14" name="projectTech14" value="Evet" />
                        <label for="projectTech14">Sağlık (Healthcare)</label>
                    </div>
                    <div class="col s4">
                        <input type="checkbox" id="projectTech15" name="projectTech15" value="Evet" />
                        <label for="projectTech15">Bilgi Güvenliği (Information Security)</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col s4">
                        <input type="checkbox" id="projectTech16" name="projectTech16" value="Evet" />
                        <label for="projectTech16">Nesnelerin İnterneti (IoT)</label>
                    </div>
                    <div class="col s4">
                        <input type="checkbox" id="projectTech17" name="projectTech17" value="Evet" />
                        <label for="projectTech17">Lojistik</label>
                    </div>
                    <div class="col s4">
                        <input type="checkbox" id="projectTech18" name="projectTech18" value="Evet" />
                        <label for="projectTech18">Makina Öğrenmesi & Yapay Zeka (ML & AI)</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col s4">
                        <input type="checkbox" id="projectTech19" name="projectTech19" value="Evet" />
                        <label for="projectTech19">Mobil Uygulama Geliştirme</label>
                    </div>
                    <div class="col s4">
                        <input type="checkbox" id="projectTech20" name="projectTech20" value="Evet" />
                        <label for="projectTech20">Oyun Geliştirme</label>
                    </div>
                    <div class="col s4">
                        <input type="checkbox" id="projectTech21" name="projectTech21" value="Evet" />
                        <label for="projectTech21">Robotik</label>
                    </div>
                </div>

                <div class="row">
                    <div class="col s4">
                        <input type="checkbox" id="projectTech22" name="projectTech22" value="Evet" />
                        <label for="projectTech22">Bulut Servisler (SaaS)</label>
                    </div>
                    <div class="col s4">
                        <input type="checkbox" id="projectTech23" name="projectTech23" value="Evet" />
                        <label for="projectTech23">Giyilebilir Teknolojiler (Wearable)</label>
                    </div>
                    <div class="col s4">
                        <input type="checkbox" id="projectTech24" name="projectTech24" value="Evet" />
                        <label for="projectTech24">Yazılım</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <input type="text" id="projectTech25" name="projectTech25" class="validate" />
                        <label for="projectTech25">Diğer</label>
                    </div>
                </div>

                <div class="row">
                    <p class="avenirdemibold sub-title col s12">Hangi sektördesiniz?</p>
                    <p class="info-context col s12 valign-wrapper"><i class="small material-icons">info</i> <span class="valign"> Örnek: Hedef müşterileriniz sağlık sektöründe olup siz yazılım sektöründe faaliyet gösteriyor olabilirsiniz.</span></p>
                </div>

                <div class="row no-margin">
                    <div class="col s12">
                        <select id="sector" name="sector" class="req-string">
                            <option value="" disabled selected>Lütfen Sektör Seçiniz</option>
                            <option value='A'>Tarım, Ormancılık ve Balıkçılık</option>
                            <option value='B'>Madencilik ve Taş Ocakçılığı</option>
                            <option value='C'>İmalat</option>
                            <option value='D'>Elektrik, Gaz, Buhar ve İklimlendirme Üretim ve Dağıtımı</option>
                            <option value='E'>Su Temini; Kanalizasyon, Atık Yönetimi ve İyileştirme Faaliyetleri</option>
                            <option value='F'>İnşaat</option>
                            <option value='G'>Toptan ve Perakende Ticaret; Motorlu Kara Taşıtlarının ve Motosikletlerin Onarmı</option>
                            <option value='H'>Ulaştırma ve Depolama</option>
                            <option value='I'>Konaklama ve Yiyecek Hizmeti Faaliyetleri</option>
                            <option value='J'>Bilgi ve İletişim</option>
                            <option value='K'>Finans ve Sigorta Faaliyetleri</option>
                            <option value='L'>Gayrimenkul Faaliyetleri</option>
                            <option value='M'>Mesleki, Bilimsel ve Teknik Faaliyetler</option>
                            <option value='N'>İdari ve Destek Hizmet Faaliyetleri</option>
                            <option value='O'>Kamu Yönetimi ve Savunma; Zorunlu Sosyal Güvenlik</option>
                            <option value='P'>Eğitim</option>
                            <option value='Q'>İnsan Sağlığı ve Sosyal Hizmet Faaliyetleri</option>
                            <option value='R'>Kültür, Sanat, Eğlence, Dinlence ve Spor</option>
                            <option value='S'>Diğer Hizmet Faaliyetleri</option>
                            <option value='T'>Hanehalklarının İşverenler Olarak Faaliyetleri; Hanehalkları Tarafından Kendi Kullanımlarına Yönelik Olarak Ayrım Yapılmamış Mal ve Hizmet Üretim Faaliyetleri</option>
                            <option value='U'>Uluslararası Örgütler ve Temsilciliklerinin Faaliyetleri</option>
                        </select>
                    </div>
                </div>

                <div id="sectorChildren">

                    <div class="row">
                        <div class="col s12">

                            <select class="sector-child sector-A">
                                <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                <option value='A-01'>Bitkisel ve hayvansal üretim ile avcılık ve ilgili hizmet faaliyetleri</option>
                                <option value='A-02'>Ormancılık ile endüstriyel ve yakacak odun üretimi</option>
                                <option value='A-03'>Balıkçılık ve su ürünleri yetiştiriciliği</option>
                            </select>

                            <select class="sector-child sector-B">
                                <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                <option value='B-05'>Kömür ve linyit çıkartılması</option>
                                <option value='B-06'>Ham petrol ve doğal gaz çıkarımı</option>
                                <option value='B-07'>Metal cevherleri madenciliği</option>
                                <option value='B-08'>Diğer madencilik ve taş ocakçılığı</option>
                                <option value='B-09'>Madenciliği destekleyici hizmet faaliyetleri</option>
                            </select>

                            <select class="sector-child sector-C">
                                <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                <option value='C-10'>Gıda ürünlerinin imalatı</option>
                                <option value='C-11'>İçeceklerin imalatı</option>
                                <option value='C-12'>Tütün ürünleri imalatı</option>
                                <option value='C-13'>Tekstil ürünlerinin imalatı</option>
                                <option value='C-14'>Giyim eşyalarının imalatı</option>
                                <option value='C-15'>Deri ve ilgili ürünlerin imalatı</option>
                                <option value='C-16'>Ağaç, ağaç ürünleri ve mantar ürünleri imalatı (mobilya hariç); saz, saman ve benzeri malzemelerden örülerek yapılan eşyaların imalatı</option>
                                <option value='C-17'>Kağıt ve kağıt ürünlerinin imalatı</option>
                                <option value='C-18'>Kayıtlı medyanın basılması ve çoğaltılması</option>
                                <option value='C-19'>Kok kömürü ve rafine edilmiş petrol ürünleri imalatı</option>
                                <option value='C-20'>Kimyasalların ve kimyasal ürünlerin imalatı</option>
                                <option value='C-21'>Temel eczacılık ürünlerinin ve eczacılığa ilişkin malzemelerin imalatı</option>
                                <option value='C-22'>Kauçuk ve plastik ürünlerin imalatı</option>
                                <option value='C-23'>Diğer metalik olmayan mineral ürünlerin imalatı</option>
                                <option value='C-24'>Ana metal sanayii</option>
                                <option value='C-25'>Fabrikasyon metal ürünleri imalatı (makine ve teçhizat hariç)</option>
                                <option value='C-26'>Bilgisayarların, elektronik ve optik ürünlerin imalatı</option>
                                <option value='C-27'>Elektrikli teçhizat imalatı</option>
                                <option value='C-28'>Başka yerde sınıflandırılmamış makine ve ekipman imalatı</option>
                                <option value='C-29'>Motorlu kara taşıtı, treyler (römork) ve yarı treyler (yarı römork) imalatı</option>
                                <option value='C-30'>Diğer ulaşım araçlarının imalatı</option>
                                <option value='C-31'>Mobilya imalatı</option>
                                <option value='C-32'>Diğer imalatlar</option>
                                <option value='C-33'>Makine ve ekipmanların kurulumu ve onarımı</option>
                            </select>

                            <select class="sector-child sector-D">
                                <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                <option value='D-35'>Elektrik, gaz, buhar ve havalandırma sistemi üretim ve dağıtımı</option>
                            </select>

                            <select class="sector-child sector-E">
                                <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                <option value='E-36'>Suyun toplanması, arıtılması ve dağıtılması</option>
                                <option value='E-37'>Kanalizasyon</option>
                                <option value='E-38'>Atığın toplanması, ıslahı ve bertarafı faaliyetleri; maddelerin geri kazanımı</option>
                                <option value='E-39'>İyileştirme faaliyetleri ve diğer atık yönetimi hizmetleri</option>
                            </select>

                            <select class="sector-child sector-F">
                                <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                <option value='F-41'>Bina inşaatı</option>
                                <option value='F-42'>Bina dışı yapıların inşaatı</option>
                                <option value='F-43'>Özel inşaat faaliyetleri</option>
                            </select>

                            <select class="sector-child sector-G">
                                <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                <option value='G-45'>Motorlu kara taşıtlarının ve motosikletlerin toptan ve perakende ticareti ile onarımı</option>
                                <option value='G-46'>Toptan ticaret (Motorlu kara taşıtları ve motosikletler hariç)</option>
                                <option value='G-47'>Perakende ticaret (Motorlu kara taşıtları ve motosikletler hariç)</option>
                            </select>

                            <select class="sector-child sector-H">
                                <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                <option value='H-49'>Kara taşımacılığı ve boru hattı taşımacılığı</option>
                                <option value='H-50'>Su yolu taşımacılığı</option>
                                <option value='H-51'>Hava yolu taşımacılığı</option>
                                <option value='H-52'>Taşımacılık için depolama ve destekleyici faaliyetler</option>
                                <option value='H-53'>Posta ve kurye faaliyetleri</option>
                            </select>

                            <select class="sector-child sector-I">
                                <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                <option value='I-55'>Konaklama</option>
                                <option value='I-56'>Yiyecek ve içecek hizmeti faaliyetleri</option>
                            </select>

                            <select class="sector-child sector-J">
                                <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                <option value='J-58'>Yayımcılık faaliyetleri</option>
                                <option value='J-59'>Sinema filmi, video ve televizyon programları yapımcılığı, ses kaydı ve müzik yayımlama faaliyetleri</option>
                                <option value='J-60'>Programcılık ve yayıncılık faaliyetleri</option>
                                <option value='J-61'>Telekomünikasyon</option>
                                <option value='J-62'>Bilgisayar programlama, danışmanlık ve ilgili faaliyetler</option>
                                <option value='J-63'>Bilgi hizmet faaliyetleri</option>
                            </select>

                            <select class="sector-child sector-K">
                                <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                <option value='K-64'>Finansal hizmet faaliyetleri (Sigorta ve emeklilik fonları hariç)</option>
                                <option value='K-65'>Sigorta, reasürans ve emeklilik fonları (Zorunlu sosyal güvenlik hariç)</option>
                                <option value='K-66'>Finansal hizmetler ile sigorta faaliyetleri için yardımcı faaliyetler</option>
                            </select>

                            <select class="sector-child sector-L">
                                <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                <option value='L-68'>Gayrimenkul faaliyetleri</option>
                            </select>

                            <select class="sector-child sector-M">
                                <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                <option value='M-69'>Hukuk ve muhasebe faaliyetleri</option>
                                <option value='M-70'>İdare merkezi faaliyetleri; idari danışmanlık faaliyetleri</option>
                                <option value='M-71'>Mimarlık ve mühendislik faaliyetleri; teknik test ve analiz faaliyetleri</option>
                                <option value='M-72'>Bilimsel araştırma ve geliştirme faaliyetleri</option>
                                <option value='M-73'>Reklamcılık ve piyasa araştırması</option>
                                <option value='M-74'>Diğer mesleki, bilimsel ve teknik faaliyetler</option>
                                <option value='M-75'>Veterinerlik hizmetleri</option>
                            </select>

                            <select class="sector-child sector-N">
                                <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                <option value='N-77'>Kiralama ve leasing faaliyetleri</option>
                                <option value='N-78'>İstihdam faaliyetleri</option>
                                <option value='N-79'>Seyahat acentesi, tur operatörü ve diğer rezervasyon hizmetleri ve ilgili faaliyetler</option>
                                <option value='N-80'>Güvenlik ve soruşturma faaliyetleri</option>
                                <option value='N-81'>Binalar ile ilgili hizmetler ve çevre düzenlemesi faaliyetleri</option>
                                <option value='N-82'>Büro yönetimi, büro destek ve iş destek faaliyetleri</option>
                            </select>

                            <select class="sector-child sector-O">
                                <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                <option value='O-84'>Kamu yönetimi ve savunma; zorunlu sosyal güvenlik</option>
                            </select>

                            <select class="sector-child sector-P">
                                <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                <option value='P-85'>Eğitim</option>
                            </select>

                            <select class="sector-child sector-Q">
                                <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                <option value='Q-86'>İnsan sağlığı hizmetleri</option>
                                <option value='Q-87'>Yatılı bakım faaliyetleri</option>
                                <option value='Q-88'>Barınacak yer sağlanmaksızın verilen sosyal hizmetler</option>
                            </select>

                            <select class="sector-child sector-R">
                                <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                <option value='R-90'>Yaratıcı sanatlar, gösteri sanatları ve eğlence faaliyetleri</option>
                                <option value='R-91'>Kütüphaneler, arşivler, müzeler ve diğer kültürel faaliyetler</option>
                                <option value='R-92'>Kumar ve müşterek bahis faaliyetleri</option>
                                <option value='R-93'>Spor faaliyetleri, eğlence ve dinlence faaliyetleri</option>
                            </select>

                            <select class="sector-child sector-S">
                                <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                <option value='S-94'>Üye olunan kuruluşların faaliyetleri</option>
                                <option value='S-95'>Bilgisayarların, kişisel eşyaların ve ev eşyalarının onarımı</option>
                                <option value='S-96'>Diğer hizmet faaliyetleri</option>
                            </select>

                            <select class="sector-child sector-T">
                                <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                <option value='T-97'>Ev içi çalışan personelin işverenleri olarak hanehalklarının faaliyetleri</option>
                                <option value='T-98'>Hanehalkları tarafından kendi kullanımlarına yönelik olarak üretilen ayrım yapılmamış mal ve hizmetler</option>
                            </select>

                            <select class="sector-child sector-U">
                                <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                <option value='U-99'>Uluslararası örgütler ve temsilciliklerinin faaliyetleri</option>
                            </select>

                        </div>
                    </div>
                </div>

                <!-- form hack for alt sector -->
                <input type="hidden" id="altSector" name="altSector" value="" class="req-string" rel="sectorChildren .active">

                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="targetGroupSummary" name="targetGroupSummary" class="materialize-textarea req-string validate" maxlength="2000" length="2000"></textarea>
                        <label for="targetGroupSummary" class="avenirdemibold">Hedeflediğiniz ana müşteri grubunu anlatınız.</label>
                    </div>
                </div>

                <div class="row">
                    <p class="avenirdemibold sub-title col s12">Hedeflediğiniz ana müşterileriniz hangi sektörde?</p>
                    <p class="info-context col s12 valign-wrapper"><i class="small material-icons">info</i> <span class="valign"> Örnek: Hedef müşterileriniz sağlık sektöründe olup siz yazılım sektöründe faaliyet gösteriyor olabilirsiniz.</span></p>
                </div>

                <div class="row no-margin">
                    <div class="col s12">
                        <select id="targetSector" name="targetSector" class="req-string">
                            <option value="" disabled selected>Lütfen Sektör Seçiniz</option>
                            <option value='A'>Tarım, Ormancılık ve Balıkçılık</option>
                            <option value='B'>Madencilik ve Taş Ocakçılığı</option>
                            <option value='C'>İmalat</option>
                            <option value='D'>Elektrik, Gaz, Buhar ve İklimlendirme Üretim ve Dağıtımı</option>
                            <option value='E'>Su Temini; Kanalizasyon, Atık Yönetimi ve İyileştirme Faaliyetleri</option>
                            <option value='F'>İnşaat</option>
                            <option value='G'>Toptan ve Perakende Ticaret; Motorlu Kara Taşıtlarının ve Motosikletlerin Onarmı</option>
                            <option value='H'>Ulaştırma ve Depolama</option>
                            <option value='I'>Konaklama ve Yiyecek Hizmeti Faaliyetleri</option>
                            <option value='J'>Bilgi ve İletişim</option>
                            <option value='K'>Finans ve Sigorta Faaliyetleri</option>
                            <option value='L'>Gayrimenkul Faaliyetleri</option>
                            <option value='M'>Mesleki, Bilimsel ve Teknik Faaliyetler</option>
                            <option value='N'>İdari ve Destek Hizmet Faaliyetleri</option>
                            <option value='O'>Kamu Yönetimi ve Savunma; Zorunlu Sosyal Güvenlik</option>
                            <option value='P'>Eğitim</option>
                            <option value='Q'>İnsan Sağlığı ve Sosyal Hizmet Faaliyetleri</option>
                            <option value='R'>Kültür, Sanat, Eğlence, Dinlence ve Spor</option>
                            <option value='S'>Diğer Hizmet Faaliyetleri</option>
                            <option value='T'>Hanehalklarının İşverenler Olarak Faaliyetleri; Hanehalkları Tarafından Kendi Kullanımlarına Yönelik Olarak Ayrım Yapılmamış Mal ve Hizmet Üretim Faaliyetleri</option>
                            <option value='U'>Uluslararası Örgütler ve Temsilciliklerinin Faaliyetleri</option>
                        </select>
                    </div>
                </div>

                <div id="targetSectorChildren">

                    <div class="row">
                        <div class="col s12">

                            <select class="sector-child sector-A">
                                <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                <option value='A-01'>Bitkisel ve hayvansal üretim ile avcılık ve ilgili hizmet faaliyetleri</option>
                                <option value='A-02'>Ormancılık ile endüstriyel ve yakacak odun üretimi</option>
                                <option value='A-03'>Balıkçılık ve su ürünleri yetiştiriciliği</option>
                            </select>

                            <select class="sector-child sector-B">
                                <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                <option value='B-05'>Kömür ve linyit çıkartılması</option>
                                <option value='B-06'>Ham petrol ve doğal gaz çıkarımı</option>
                                <option value='B-07'>Metal cevherleri madenciliği</option>
                                <option value='B-08'>Diğer madencilik ve taş ocakçılığı</option>
                                <option value='B-09'>Madenciliği destekleyici hizmet faaliyetleri</option>
                            </select>

                            <select class="sector-child sector-C">
                                <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                <option value='C-10'>Gıda ürünlerinin imalatı</option>
                                <option value='C-11'>İçeceklerin imalatı</option>
                                <option value='C-12'>Tütün ürünleri imalatı</option>
                                <option value='C-13'>Tekstil ürünlerinin imalatı</option>
                                <option value='C-14'>Giyim eşyalarının imalatı</option>
                                <option value='C-15'>Deri ve ilgili ürünlerin imalatı</option>
                                <option value='C-16'>Ağaç, ağaç ürünleri ve mantar ürünleri imalatı (mobilya hariç); saz, saman ve benzeri malzemelerden örülerek yapılan eşyaların imalatı</option>
                                <option value='C-17'>Kağıt ve kağıt ürünlerinin imalatı</option>
                                <option value='C-18'>Kayıtlı medyanın basılması ve çoğaltılması</option>
                                <option value='C-19'>Kok kömürü ve rafine edilmiş petrol ürünleri imalatı</option>
                                <option value='C-20'>Kimyasalların ve kimyasal ürünlerin imalatı</option>
                                <option value='C-21'>Temel eczacılık ürünlerinin ve eczacılığa ilişkin malzemelerin imalatı</option>
                                <option value='C-22'>Kauçuk ve plastik ürünlerin imalatı</option>
                                <option value='C-23'>Diğer metalik olmayan mineral ürünlerin imalatı</option>
                                <option value='C-24'>Ana metal sanayii</option>
                                <option value='C-25'>Fabrikasyon metal ürünleri imalatı (makine ve teçhizat hariç)</option>
                                <option value='C-26'>Bilgisayarların, elektronik ve optik ürünlerin imalatı</option>
                                <option value='C-27'>Elektrikli teçhizat imalatı</option>
                                <option value='C-28'>Başka yerde sınıflandırılmamış makine ve ekipman imalatı</option>
                                <option value='C-29'>Motorlu kara taşıtı, treyler (römork) ve yarı treyler (yarı römork) imalatı</option>
                                <option value='C-30'>Diğer ulaşım araçlarının imalatı</option>
                                <option value='C-31'>Mobilya imalatı</option>
                                <option value='C-32'>Diğer imalatlar</option>
                                <option value='C-33'>Makine ve ekipmanların kurulumu ve onarımı</option>
                            </select>

                            <select class="sector-child sector-D">
                                <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                <option value='D-35'>Elektrik, gaz, buhar ve havalandırma sistemi üretim ve dağıtımı</option>
                            </select>

                            <select class="sector-child sector-E">
                                <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                <option value='E-36'>Suyun toplanması, arıtılması ve dağıtılması</option>
                                <option value='E-37'>Kanalizasyon</option>
                                <option value='E-38'>Atığın toplanması, ıslahı ve bertarafı faaliyetleri; maddelerin geri kazanımı</option>
                                <option value='E-39'>İyileştirme faaliyetleri ve diğer atık yönetimi hizmetleri</option>
                            </select>

                            <select class="sector-child sector-F">
                                <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                <option value='F-41'>Bina inşaatı</option>
                                <option value='F-42'>Bina dışı yapıların inşaatı</option>
                                <option value='F-43'>Özel inşaat faaliyetleri</option>
                            </select>

                            <select class="sector-child sector-G">
                                <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                <option value='G-45'>Motorlu kara taşıtlarının ve motosikletlerin toptan ve perakende ticareti ile onarımı</option>
                                <option value='G-46'>Toptan ticaret (Motorlu kara taşıtları ve motosikletler hariç)</option>
                                <option value='G-47'>Perakende ticaret (Motorlu kara taşıtları ve motosikletler hariç)</option>
                            </select>

                            <select class="sector-child sector-H">
                                <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                <option value='H-49'>Kara taşımacılığı ve boru hattı taşımacılığı</option>
                                <option value='H-50'>Su yolu taşımacılığı</option>
                                <option value='H-51'>Hava yolu taşımacılığı</option>
                                <option value='H-52'>Taşımacılık için depolama ve destekleyici faaliyetler</option>
                                <option value='H-53'>Posta ve kurye faaliyetleri</option>
                            </select>

                            <select class="sector-child sector-I">
                                <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                <option value='I-55'>Konaklama</option>
                                <option value='I-56'>Yiyecek ve içecek hizmeti faaliyetleri</option>
                            </select>

                            <select class="sector-child sector-J">
                                <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                <option value='J-58'>Yayımcılık faaliyetleri</option>
                                <option value='J-59'>Sinema filmi, video ve televizyon programları yapımcılığı, ses kaydı ve müzik yayımlama faaliyetleri</option>
                                <option value='J-60'>Programcılık ve yayıncılık faaliyetleri</option>
                                <option value='J-61'>Telekomünikasyon</option>
                                <option value='J-62'>Bilgisayar programlama, danışmanlık ve ilgili faaliyetler</option>
                                <option value='J-63'>Bilgi hizmet faaliyetleri</option>
                            </select>

                            <select class="sector-child sector-K">
                                <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                <option value='K-64'>Finansal hizmet faaliyetleri (Sigorta ve emeklilik fonları hariç)</option>
                                <option value='K-65'>Sigorta, reasürans ve emeklilik fonları (Zorunlu sosyal güvenlik hariç)</option>
                                <option value='K-66'>Finansal hizmetler ile sigorta faaliyetleri için yardımcı faaliyetler</option>
                            </select>

                            <select class="sector-child sector-L">
                                <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                <option value='L-68'>Gayrimenkul faaliyetleri</option>
                            </select>

                            <select class="sector-child sector-M">
                                <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                <option value='M-69'>Hukuk ve muhasebe faaliyetleri</option>
                                <option value='M-70'>İdare merkezi faaliyetleri; idari danışmanlık faaliyetleri</option>
                                <option value='M-71'>Mimarlık ve mühendislik faaliyetleri; teknik test ve analiz faaliyetleri</option>
                                <option value='M-72'>Bilimsel araştırma ve geliştirme faaliyetleri</option>
                                <option value='M-73'>Reklamcılık ve piyasa araştırması</option>
                                <option value='M-74'>Diğer mesleki, bilimsel ve teknik faaliyetler</option>
                                <option value='M-75'>Veterinerlik hizmetleri</option>
                            </select>

                            <select class="sector-child sector-N">
                                <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                <option value='N-77'>Kiralama ve leasing faaliyetleri</option>
                                <option value='N-78'>İstihdam faaliyetleri</option>
                                <option value='N-79'>Seyahat acentesi, tur operatörü ve diğer rezervasyon hizmetleri ve ilgili faaliyetler</option>
                                <option value='N-80'>Güvenlik ve soruşturma faaliyetleri</option>
                                <option value='N-81'>Binalar ile ilgili hizmetler ve çevre düzenlemesi faaliyetleri</option>
                                <option value='N-82'>Büro yönetimi, büro destek ve iş destek faaliyetleri</option>
                            </select>

                            <select class="sector-child sector-O">
                                <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                <option value='O-84'>Kamu yönetimi ve savunma; zorunlu sosyal güvenlik</option>
                            </select>

                            <select class="sector-child sector-P">
                                <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                <option value='P-85'>Eğitim</option>
                            </select>

                            <select class="sector-child sector-Q">
                                <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                <option value='Q-86'>İnsan sağlığı hizmetleri</option>
                                <option value='Q-87'>Yatılı bakım faaliyetleri</option>
                                <option value='Q-88'>Barınacak yer sağlanmaksızın verilen sosyal hizmetler</option>
                            </select>

                            <select class="sector-child sector-R">
                                <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                <option value='R-90'>Yaratıcı sanatlar, gösteri sanatları ve eğlence faaliyetleri</option>
                                <option value='R-91'>Kütüphaneler, arşivler, müzeler ve diğer kültürel faaliyetler</option>
                                <option value='R-92'>Kumar ve müşterek bahis faaliyetleri</option>
                                <option value='R-93'>Spor faaliyetleri, eğlence ve dinlence faaliyetleri</option>
                            </select>

                            <select class="sector-child sector-S">
                                <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                <option value='S-94'>Üye olunan kuruluşların faaliyetleri</option>
                                <option value='S-95'>Bilgisayarların, kişisel eşyaların ve ev eşyalarının onarımı</option>
                                <option value='S-96'>Diğer hizmet faaliyetleri</option>
                            </select>

                            <select class="sector-child sector-T">
                                <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                <option value='T-97'>Ev içi çalışan personelin işverenleri olarak hanehalklarının faaliyetleri</option>
                                <option value='T-98'>Hanehalkları tarafından kendi kullanımlarına yönelik olarak üretilen ayrım yapılmamış mal ve hizmetler</option>
                            </select>

                            <select class="sector-child sector-U">
                                <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                <option value='U-99'>Uluslararası örgütler ve temsilciliklerinin faaliyetleri</option>
                            </select>

                        </div>
                    </div>
                </div>

                <!-- form hack for alt sector -->
                <input type="hidden" id="targetAltSector" name="targetAltSector" value="" class="req-string" rel="targetSectorChildren .active">

                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="competitorWebsites" name="competitorWebsites" class="materialize-textarea req-string validate" maxlength="1000" length="1000"></textarea>
                        <label for="competitorWebsites" class="avenirdemibold">Bu ihtiyacı gideren diğer ürün ve çözümler kimler tarafından yapılmaktadır Web adresleri ile belirtiniz.</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="competitorDifference" name="competitorDifference" class="materialize-textarea req-string validate" maxlength="1000" length="1000"></textarea>
                        <label for="competitorDifference" class="avenirdemibold">Bu rakiplerinizden nasıl ayrışıyorsunuz?</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <textarea id="businessModel2" name="businessModel2" class="materialize-textarea req-string validate" maxlength="1000" length="1000"></textarea>
                        <label for="businessModel2" class="avenirdemibold">Ürününüzü nasıl fiyatlandırıyorsunuz?</label>
                    </div>
                </div>

                <div class="inputsToCheck">
                    <div id="haveInvestmentTitle" class="row">
                        <p class="avenirdemibold sub-title col s12 tooltip-right">Yatırım aldınız mı? <span class="tooltip-right" data-tooltip="Bir seçim yapmanız gerekmektedir."></span></p>
                    </div>
                </div>

                <div class="row">
                    <p class="col s12">
                        <input type="radio" id="haveInvestment1" name="haveInvestment" class="formGroupSwitch req-checked" data-section="4" data-choice="1" value="Evet" rel="haveInvestmentTitle" />
                        <label for="haveInvestment1">Evet</label>
                    </p>
                    <p class="col s12">
                        <input type="radio" id="haveInvestment2" name="haveInvestment" class="formGroupSwitch req-checked" data-section="4" data-choice="2" value="Hayır" rel="haveInvestmentTitle" />
                        <label for="haveInvestment2">Hayır</label>
                    </p>
                </div>
            </div>



            <div class="inputsToCheck">
                <div id="havePatentTitle" class="row">
                    <p class="avenirdemibold sub-title col s12 tooltip-right">Patent başvurunuz var mı? <span class="tooltip-right" data-tooltip="Bir seçim yapmanız gerekmektedir."></span></p>
                </div>
            </div>

            <div class="inputsToCheck row">
                <p class="col s12">
                    <input type="radio" id="havePatent1" name="havePatent" class="formGroupSwitch req-checked" data-section="5" data-choice="1" value="Evet" rel="havePatentTitle" />
                    <label for="havePatent1">Evet</label>
                </p>
                <p class="col s12">
                    <input type="radio" id="havePatent2" name="havePatent" class="formGroupSwitch req-checked" data-section="5" data-choice="2" value="Hayır" rel="havePatentTitle" />
                    <label for="havePatent2">Hayır</label>
                </p>
            </div>



            <div class="row">
                <p class="col s12">Aşağıdaki sorulara yanıtınız “Evet” ise ve başvurunuz onaylanırsa gerekli bilgilendirme için ilgili kişiye yönlendirileceksiniz. </p>
            </div>

            <div class="inputsToCheck">
                <div id="wantAddressTitle" class="row">
                    <p class="avenirdemibold sub-title col s12 tooltip-right">İTÜ Magnet’te adres göstermek istiyor musunuz? <span class="tooltip-right" data-tooltip="Bir seçim yapmanız gerekmektedir."></span></p>
                </div>
            </div>

            <div class="inputsToCheck row">
                <p class="col s12">
                    <input type="radio" id="wantAddress1" name="wantAddress" class="req-checked" value="Evet" rel="wantAddressTitle" />
                    <label for="wantAddress1">Evet</label>
                </p>
                <p class="col s12">
                    <input type="radio" id="wantAddress2" name="wantAddress" class="req-checked" value="Hayır" rel="wantAddressTitle" />
                    <label for="wantAddress2">Hayır</label>
                </p>
            </div>

            <div class="inputsToCheck">
                <div id="lawApplyTitle" class="row">
                    <p class="avenirdemibold sub-title col s12 tooltip-right">4691 sayılı Teknoloji Geliştirme Bölgeleri Kanunu’ndan faydalanmak üzere başvuruda bulunacak mısınız? <span class="tooltip-right" data-tooltip="Bir seçim yapmanız gerekmektedir."></span></p>
                </div>
            </div>

            <div class="inputsToCheck row">
                <p class="col s12">
                    <input type="radio" id="lawApply1" name="lawApply" class="req-checked" value="Evet" rel="lawApplyTitle" />
                    <label for="lawApply1">Evet</label>
                </p>
                <p class="col s12">
                    <input type="radio" id="lawApply2" name="lawApply" class="req-checked" value="Hayır" rel="lawApplyTitle" />
                    <label for="lawApply2">Hayır</label>
                </p>
            </div>

         {{--   <div class="inputsToCheck row">
                <div class="col">
                    <input type="checkbox" id="kvk" name="kvk" value="Onaylıyorum" />
                    <label for="kvk"><a href="http://itumagnet.com/assets/etc/kvkk.pdf" target="_blank"><u>KVKK</u> sözleşmesini okudum ve kabul ediyorum.</a></label>
                </div>
            </div>--}}

        </section>
        <button  id="yer" class="size-a-15 flex-c-c bg-11 t1-s-2 text-uppercase cl-0 hov-btn1 trans-02 p-rl-15">
         Başvur
        </button>

    </form>
@endsection

@section('css')
    <link rel="stylesheet" href="//fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="/anasayfa/form/a.css">
    <link rel="stylesheet" href="/anasayfa/form/aa.css">
    <link rel="stylesheet" href="/anasayfa/form/aaa.css">
    <link rel="stylesheet" href="/anasayfa/form/aaaa.css">
    <link rel="stylesheet" href="/anasayfa/form/aaaaa.css">
    <link rel="stylesheet" href="/anasayfa/form/aaaaaa.css">
    <link rel="stylesheet" href="/anasayfa/form/aaaaaaa.css">
    <link rel="stylesheet" href="/anasayfa/form/aaaaaaaa.css">
    <link rel="stylesheet" href="/anasayfa/form/main.css?v=02">
@endsection

@section('js')
    <script src="/anasayfa/form/b.js"></script>
    <script src="/anasayfa/form/bb.js"></script>
    <script src="/anasayfa/form/bbb.js"></script>
    <script src="/anasayfa/form/bbbb.js"></script>
    <script src="/anasayfa/form/bbbbb.js"></script>
    <script src="/anasayfa/form/bbbbbb.js"></script>
    <script src="/anasayfa/form/main.js?v=07"></script>
@endsection