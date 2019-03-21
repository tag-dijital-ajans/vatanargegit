@extends ('anasayfa.template')

@section('icerik')
    <!-- Title page -->
    <section class="bg-img1 kit-overlay1" style="background-image: url(/anasayfa/images/bg-05.jpg);">
        <div class="container size-h-3 p-tb-30 flex-col-c-c">
            <h2 class="t1-b-1  cl-0 txt-center m-b-25">
                Kurum Dışı Başvuru
            </h2>

            <div class="flex-wr-c-c">
                <a href="/iletisim" class="breadcrumb-item">
                    Anasayfa
                </a>

                <span class="breadcrumb-item">
					 Kurum dışı başvuru
				</span>
            </div>
        </div>
    </section>

    <!-- FORM -->
    <section class="bg-0 p-t-95 p-b-40">
        <div class="container">
            <div class="row justify-content-center">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (\Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ \Session::get('success') }}</p>
                    </div>
                @endif
                @if (\Session::get('error'))
                    <div class="alert alert-danger">
                        <p>{{ \Session::get('error') }}</p>
                    </div>
                @endif
                <form id="startupForm" action="{{route('kurumdisiform.gonder')}}" method="post" class="submission-form" name="contact">
                    {{csrf_field()}}


                    <section class="form-area col s12">

                        <h4> Kurum Dışı Başvuru</h4>

                        <div class="inputsToCheck">

                            <div class="row">
                                <div class="input-field col s6">
                                    <input   type="text" id="groupName" name="groupName" value="{{ old('groupName') }}" class="validate req-min" minlength="2" />
                                    <label for="groupName" class="avenirdemibold">Şirketin adı</label>
                                </div>
                                <div class="input-field col s6">
                                    <input  type="text" id="groupLabel" name="groupLabel" value="{{ old('groupLabel') }}" class="validate req-min" minlength="2"  />
                                    <label for="groupLabel" class="avenirdemibold">Şirket unvanı</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s6">
                                    <input   type="text" id="groupAddress" value="{{ old('groupAddress') }}" name="groupAddress" class="validate req-min" minlength="2" />
                                    <label for="groupAddress" class="avenirdemibold">Adresi</label>
                                </div>
                                <div class="input-field col s6">
                                    <input   type="text" id="groupWebsite" value="{{ old('groupWebsite') }}" name="groupWebsite" class="validate req-string"  />
                                    <label for="groupWebsite" class="avenirdemibold">Web sitesi</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s6">
                                    <select id="groupCountry"  name="groupCountry" class="validate req-string">
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
                                    <input   type="text" id="groupTaxBranch" value="{{ old('groupTaxBranch') }}" name="groupTaxBranch" class="validate req-string"  />
                                    <label for="groupTaxBranch" data-error="sadece metin ve noktalama işaretleri girebilirsiniz" class="avenirdemibold">Vergi dairesi</label>
                                </div>
                                <div class="input-field col s6">
                                    <input   type="text" id="groupTaxNo" value="{{ old('groupTaxNo') }}" name="groupTaxNo" class="validate req-string" />
                                    <label for="groupTaxNo" class="avenirdemibold">Vergi numarası</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s6">
                                    <input   type="text" id="groupSicilNo" value="{{ old('groupSicilNo') }}" name="groupSicilNo" class="validate" />
                                    <label for="groupSicilNo" class="avenirdemibold">Ticari sicil numarası</label>
                                </div>
                                <div class="input-field col s6">
                                    <input   type="text" id="groupSGKNo" value="{{ old('groupSGKNo') }}" name="groupSGKNo" class="validate" />
                                    <label for="groupSGKNo" class="avenirdemibold">SGK sicil numarası</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12">
                                    <input   type="number" id="paidCapital" value="{{ old('paidCapital') }}" name="paidCapital" class="validate" />
                                    <label for="paidCapital" class="avenirdemibold">Ödenmiş sermaye (₺)</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12">
                                    <input   type="text" id="biggestShareName" value="{{ old('biggestShareName') }}" name="biggestShareName" class="validate req-min" minlength="2" maxlength="300" length="300" />
                                    <label for="biggestShareName" class="avenirdemibold">Şirketin çoğunluk hissesinin kime ait olduğunu belirtiniz</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12">
                                    <input   type="number" id="biggestSharePerc" value="{{ old('biggestSharePerc') }}" name="biggestSharePerc" class="validate req-numeric" min="5" max="100" />
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
                                    <input   type="radio" id="foreignPartner1"  name="foreignPartner" class="formGroupSwitch req-checked" value="Evet"  />
                                    <label for="foreignPartner1">Evet</label>
                                </p>
                                <p class="col s12">
                                    <input   type="radio" id="foreignPartner2"  name="foreignPartner" class="formGroupSwitch req-checked"  value="Hayır"  />
                                    <label for="foreignPartner2">Hayır</label>
                                </p>
                            </div>

                            <div class="row">
                                <div class="input-field col s12">
                                    <input   type="text" id="lastEndorsement" value="{{ old('lastEndorsement') }}" name="lastEndorsement" class="validate req-min" minlength="2" maxlength="300"  />
                                    <label for="lastEndorsement" class="avenirdemibold">Son 3 yıllık cironuzu yıl ve rakam olacak şekilde belirtiniz. (<small>Ticari faaliyetinizin olmadığı yılları yazmayabilirsiniz.</small>)</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12">
                                    <input   type="text" id="nextEndorsement" value="{{ old('nextEndorsement') }}" name="nextEndorsement" class="validate req-min" minlength="2" maxlength="300"  />
                                    <label for="nextEndorsement" class="avenirdemibold">Gelecek 3 yıllık ciro beklentinizi yıl ve rakam olacak şekilde belirtiniz.</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12">
                                    <input   type="text" id="lastInvoice" value="{{ old('lastInvoice') }}" name="lastInvoice" class="validate req-min" minlength="2" maxlength="300"  />
                                    <label for="lastInvoice" class="avenirdemibold">Geçen yıl fatura kestiğiniz müşteri sayısını belirtiniz.</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12">
                                    <input  type="text" id="lastYearRevenue" value="{{ old('lastYearRevenue') }}" name="lastYearRevenue" class="validate req-min" minlength="2" maxlength="300"  />
                                    <label for="lastYearRevenue" class="avenirdemibold">İEM VATAN'a başvuru yaptığınız ürününüzün satışından son 1 yıldır gerçekleşen ciroyu belirtiniz.</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12">
                                    <input  type="text" id="needInvestment" value="{{ old('needInvestment') }}" name="needInvestment" class="validate req-min" minlength="2" maxlength="300"  />
                                    <label for="needInvestment" class="avenirdemibold">Yatırım arıyor musunuz, ne süre içinde ne tutarda yatırım gerekeceğini düşünüyorsunuz belirtiniz.</label>
                                </div>
                            </div>

                        </div>

                        <!-- IF 1-1: START -->
                        <div id="formChoice1-1" class="formGroup1 additional-info hidden">

                            <hr />

                            <div class="row">
                                <div class="input-field col s12">
                                    <input  type="number" id="biggestForeignSharePerc" value="{{ old('biggestForeignSharePerc') }}" name="biggestForeignSharePerc" class="validate req-numeric" min="1" max="100" />
                                    <label for="biggestForeignSharePerc" class="avenirdemibold">En yüksek hisseye sahip yabancı hissedarın hisse oranını belirtiniz.</label>
                                </div>
                            </div>

                        </div>
                        <!-- IF 1-1: END -->

                    </section>
                    <h4>KİŞİSEL BİLGİLER</h4>


                    <section class="form-area col s12 inputsToCheck">

                        <div class="row">

                            <p class="avenirdemibold sub-title col s12">İEM VATAN ’a başvuran ve şirket adına irtibat kurulacak kişi ile ilgili bilgiler</p>
                        </div>

                        <div class="row">

                            <div class="input-field col s6">
                                <input  type="text" id="groupContactName" name="groupContactName" value="{{ old('groupContactName') }}" class="validate req-min" minlength="2" />
                                <label for="groupContactName" class="avenirdemibold">Ad</label>
                            </div>

                            <div class="input-field col s6">
                                <input  type="text" id="groupContactLastName" name="groupContactLastName" value="{{ old('groupContactLastName') }}" class="validate req-min" minlength="2" />
                                <label for="groupContactLastName" class="avenirdemibold">Soyad</label>
                            </div>

                        </div>

                        <div class="row">

                            <div class="input-field col s6">
                                <input  type="tel" id="groupContactPhone" name="groupContactPhone" value="{{ old('lastInvoice') }}" class="validate req-numeric req-min" minlength="11" maxlength="11"  />
                                <label for="groupContactPhone" data-error="hatalı bir telefon numarası girdiniz (05001234567)" class="avenirdemibold">Telefon</label>
                            </div>

                            <div class="input-field col s6">
                                <input  type="email" id="groupContactEmail" name="groupContactEmail" value="{{ old('lastInvoice') }}" class="validate req-email" minlength="5"  />
                                <label for="groupContactEmail" data-error="hatalı bir email adresi girdiniz" class="avenirdemibold">E-mail</label>
                            </div>

                        </div>

                    </section>

                    <h4>YETKİNLİKLER</h4>

                    <section class="form-area col s12 inputsToCheck">

                        <div id="competenceTitle" class="row">
                            <p class="avenirdemibold sub-title col s12 tooltip-right">
                                Lütfen ekibinizdeki kişilerin gerekli olan yetkinliklerden hangilerine sahip olduğunu aşağıdaki her bir yetkinliğin<br />yanına o yetkinliğe sahip kişi sayısını girerek belirtiniz.                        <span class="tooltip-right" data-tooltip="En az grubunuzdaki kişi sayısı kadar yetkinlik girmeniz gerekir."></span>
                            </p>
                        </div>

                        <div class="row competenceInputs">

                            <div class="input-field col s3">
                                <input  type="number" id="competence1Count" name="competence1Count" class="validate" min="0" max="1" />
                                <label for="competence1Count" class="avenirdemibold">Satış</label>
                            </div>

                            <div class="input-field col s3">
                                <input  type="number" id="competence2Count" name="competence2Count" class="validate" min="0" max="1" />
                                <label for="competence2Count" class="avenirdemibold">Pazarlama</label>
                            </div>

                            <div class="input-field col s3">
                                <input  type="number" id="competence3Count" name="competence3Count" class="validate" min="0" max="1" />
                                <label for="competence3Count" class="avenirdemibold">Yazılım</label>
                            </div>

                            <div class="input-field col s3">
                                <input  type="number" id="competence4Count" name="competence4Count" class="validate" min="0" max="1" />
                                <label for="competence4Count" class="avenirdemibold">Tasarım</label>
                            </div>

                        </div>

                        <div class="row competenceInputs">

                            <div class="input-field col s3">
                                <input  type="number" id="competence5Count" name="competence5Count" class="validate" min="0" max="1" />
                                <label for="competence5Count" class="avenirdemibold">Üretim Planlama</label>
                            </div>

                            <div class="input-field col s3">
                                <input  type="number" id="competence6Count" name="competence6Count" class="validate" min="0" max="1" />
                                <label for="competence6Count" class="avenirdemibold">Muhasebe</label>
                            </div>

                            <div class="input-field col s3">
                                <input  type="number" id="competence7Count" name="competence7Count" class="validate" min="0" max="1" />
                                <label for="competence7Count" class="avenirdemibold">Stratejik Yönetim</label>
                            </div>

                            <div class="input-field col s3">
                                <input  type="number" id="competence8Count" name="competence8Count" class="validate" min="0" max="1" />
                                <label for="competence8Count" class="avenirdemibold">Elektrik - Elektronik</label>
                            </div>

                        </div>

                        <div class="row competenceInputs">

                            <div class="input-field col s3">
                                <input  type="number" id="competence9Count" name="competence9Count" class="validate" min="0" max="1" />
                                <label for="competence9Count" class="avenirdemibold">Mekanik</label>
                            </div>

                            <div class="input-field col s9">
                                <input  type="text" id="competence10Count" name="competence10Count" value="{{ old('competence10Count') }}" class="validate" />
                                <label for="competence10Count">Diğer</label>
                            </div>

                        </div>

                    </section>

                    <h4>ÜRÜN BİLGİLERİ</h4>

                    <section class="form-area col s12">

                        <div class="inputsToCheck">

                            <div class="row">
                                <div class="input-field col s12">
                                    <input  type="number" id="productCount"  name="productCount" class="req-numeric validate" />
                                    <label for="productCount" class="avenirdemibold">Kaç tip ürününüz var belirtiniz</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea   id="productSummary" name="productSummary"  class="materialize-textarea req-string validate" maxlength="2000" >{{ old('productSummary') }}</textarea>
                                    <label for="productSummary" class="avenirdemibold">Ana ürünlerinizi anlatınız</label>
                                </div>
                            </div>

                            <div id="projectTech" class="row">
                                <p class="avenirdemibold sub-title col s12 tooltip-right">Teknolojinizi nasıl tanımlarsınız? <span class="tooltip-right" ></span></p>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea  id="projectTech" name="projectTech"value="{{ old('projectTech') }}" class="materialize-textarea req-string validate" maxlength="1000" >{{ old('productSummary') }}</textarea>
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
                            <input  type="hidden" id="altSector" name="altSector" value="" class="req-string" rel="sectorChildren .active">

                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea  id="targetGroupSummary" name="targetGroupSummary" value="{{ old('targetGroupSummary') }}" class="materialize-textarea req-string validate" maxlength="2000" "></textarea>
                                    <label for="targetGroupSummary" class="avenirdemibold">Hedeflediğiniz ana müşteri grubunu anlatınız.</label>
                                </div>
                            </div>

                            <div class="row">
                                <p class="avenirdemibold sub-title col s12">Hedeflediğiniz ana müşterileriniz hangi sektörde?</p>
                                <p class="info-context col s12 valign-wrapper"><i class="small material-icons">info</i> <span class="valign"> Örnek: Hedef müşterileriniz sağlık sektöründe olup siz yazılım sektöründe faaliyet gösteriyor olabilirsiniz.</span></p>
                            </div>

                            <div class="row no-margin">
                                <div class="col s12">
                                    <select  id="targetSector" name="targetSector" class="req-string">
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

                                        <select  class="sector-child sector-A">
                                            <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                            <option value='A-01'>Bitkisel ve hayvansal üretim ile avcılık ve ilgili hizmet faaliyetleri</option>
                                            <option value='A-02'>Ormancılık ile endüstriyel ve yakacak odun üretimi</option>
                                            <option value='A-03'>Balıkçılık ve su ürünleri yetiştiriciliği</option>
                                        </select>

                                        <select  class="sector-child sector-B">
                                            <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                            <option value='B-05'>Kömür ve linyit çıkartılması</option>
                                            <option value='B-06'>Ham petrol ve doğal gaz çıkarımı</option>
                                            <option value='B-07'>Metal cevherleri madenciliği</option>
                                            <option value='B-08'>Diğer madencilik ve taş ocakçılığı</option>
                                            <option value='B-09'>Madenciliği destekleyici hizmet faaliyetleri</option>
                                        </select>

                                        <select  class="sector-child sector-C">
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

                                        <select  class="sector-child sector-D">
                                            <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                            <option value='D-35'>Elektrik, gaz, buhar ve havalandırma sistemi üretim ve dağıtımı</option>
                                        </select>

                                        <select  class="sector-child sector-E">
                                            <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                            <option value='E-36'>Suyun toplanması, arıtılması ve dağıtılması</option>
                                            <option value='E-37'>Kanalizasyon</option>
                                            <option value='E-38'>Atığın toplanması, ıslahı ve bertarafı faaliyetleri; maddelerin geri kazanımı</option>
                                            <option value='E-39'>İyileştirme faaliyetleri ve diğer atık yönetimi hizmetleri</option>
                                        </select>

                                        <select  class="sector-child sector-F">
                                            <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                            <option value='F-41'>Bina inşaatı</option>
                                            <option value='F-42'>Bina dışı yapıların inşaatı</option>
                                            <option value='F-43'>Özel inşaat faaliyetleri</option>
                                        </select>

                                        <select  class="sector-child sector-G">
                                            <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                            <option value='G-45'>Motorlu kara taşıtlarının ve motosikletlerin toptan ve perakende ticareti ile onarımı</option>
                                            <option value='G-46'>Toptan ticaret (Motorlu kara taşıtları ve motosikletler hariç)</option>
                                            <option value='G-47'>Perakende ticaret (Motorlu kara taşıtları ve motosikletler hariç)</option>
                                        </select>

                                        <select  class="sector-child sector-H">
                                            <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                            <option value='H-49'>Kara taşımacılığı ve boru hattı taşımacılığı</option>
                                            <option value='H-50'>Su yolu taşımacılığı</option>
                                            <option value='H-51'>Hava yolu taşımacılığı</option>
                                            <option value='H-52'>Taşımacılık için depolama ve destekleyici faaliyetler</option>
                                            <option value='H-53'>Posta ve kurye faaliyetleri</option>
                                        </select>

                                        <select  class="sector-child sector-I">
                                            <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                            <option value='I-55'>Konaklama</option>
                                            <option value='I-56'>Yiyecek ve içecek hizmeti faaliyetleri</option>
                                        </select>

                                        <select  class="sector-child sector-J">
                                            <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                            <option value='J-58'>Yayımcılık faaliyetleri</option>
                                            <option value='J-59'>Sinema filmi, video ve televizyon programları yapımcılığı, ses kaydı ve müzik yayımlama faaliyetleri</option>
                                            <option value='J-60'>Programcılık ve yayıncılık faaliyetleri</option>
                                            <option value='J-61'>Telekomünikasyon</option>
                                            <option value='J-62'>Bilgisayar programlama, danışmanlık ve ilgili faaliyetler</option>
                                            <option value='J-63'>Bilgi hizmet faaliyetleri</option>
                                        </select>

                                        <select  class="sector-child sector-K">
                                            <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                            <option value='K-64'>Finansal hizmet faaliyetleri (Sigorta ve emeklilik fonları hariç)</option>
                                            <option value='K-65'>Sigorta, reasürans ve emeklilik fonları (Zorunlu sosyal güvenlik hariç)</option>
                                            <option value='K-66'>Finansal hizmetler ile sigorta faaliyetleri için yardımcı faaliyetler</option>
                                        </select>

                                        <select  class="sector-child sector-L">
                                            <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                            <option value='L-68'>Gayrimenkul faaliyetleri</option>
                                        </select>

                                        <select  class="sector-child sector-M">
                                            <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                            <option value='M-69'>Hukuk ve muhasebe faaliyetleri</option>
                                            <option value='M-70'>İdare merkezi faaliyetleri; idari danışmanlık faaliyetleri</option>
                                            <option value='M-71'>Mimarlık ve mühendislik faaliyetleri; teknik test ve analiz faaliyetleri</option>
                                            <option value='M-72'>Bilimsel araştırma ve geliştirme faaliyetleri</option>
                                            <option value='M-73'>Reklamcılık ve piyasa araştırması</option>
                                            <option value='M-74'>Diğer mesleki, bilimsel ve teknik faaliyetler</option>
                                            <option value='M-75'>Veterinerlik hizmetleri</option>
                                        </select>

                                        <select  class="sector-child sector-N">
                                            <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                            <option value='N-77'>Kiralama ve leasing faaliyetleri</option>
                                            <option value='N-78'>İstihdam faaliyetleri</option>
                                            <option value='N-79'>Seyahat acentesi, tur operatörü ve diğer rezervasyon hizmetleri ve ilgili faaliyetler</option>
                                            <option value='N-80'>Güvenlik ve soruşturma faaliyetleri</option>
                                            <option value='N-81'>Binalar ile ilgili hizmetler ve çevre düzenlemesi faaliyetleri</option>
                                            <option value='N-82'>Büro yönetimi, büro destek ve iş destek faaliyetleri</option>
                                        </select>

                                        <select  class="sector-child sector-O">
                                            <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                            <option value='O-84'>Kamu yönetimi ve savunma; zorunlu sosyal güvenlik</option>
                                        </select>

                                        <select  class="sector-child sector-P">
                                            <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                            <option value='P-85'>Eğitim</option>
                                        </select>

                                        <select  class="sector-child sector-Q">
                                            <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                            <option value='Q-86'>İnsan sağlığı hizmetleri</option>
                                            <option value='Q-87'>Yatılı bakım faaliyetleri</option>
                                            <option value='Q-88'>Barınacak yer sağlanmaksızın verilen sosyal hizmetler</option>
                                        </select>

                                        <select  class="sector-child sector-R">
                                            <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                            <option value='R-90'>Yaratıcı sanatlar, gösteri sanatları ve eğlence faaliyetleri</option>
                                            <option value='R-91'>Kütüphaneler, arşivler, müzeler ve diğer kültürel faaliyetler</option>
                                            <option value='R-92'>Kumar ve müşterek bahis faaliyetleri</option>
                                            <option value='R-93'>Spor faaliyetleri, eğlence ve dinlence faaliyetleri</option>
                                        </select>

                                        <select  class="sector-child sector-S">
                                            <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                            <option value='S-94'>Üye olunan kuruluşların faaliyetleri</option>
                                            <option value='S-95'>Bilgisayarların, kişisel eşyaların ve ev eşyalarının onarımı</option>
                                            <option value='S-96'>Diğer hizmet faaliyetleri</option>
                                        </select>

                                        <select  class="sector-child sector-T">
                                            <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                            <option value='T-97'>Ev içi çalışan personelin işverenleri olarak hanehalklarının faaliyetleri</option>
                                            <option value='T-98'>Hanehalkları tarafından kendi kullanımlarına yönelik olarak üretilen ayrım yapılmamış mal ve hizmetler</option>
                                        </select>

                                        <select  class="sector-child sector-U">
                                            <option value="" disabled selected>Lütfen Alt Sektör Seçiniz</option>
                                            <option value='U-99'>Uluslararası örgütler ve temsilciliklerinin faaliyetleri</option>
                                        </select>

                                    </div>
                                </div>
                            </div>

                            <!-- form hack for alt sector -->
                            <input  type="hidden" id="targetAltSector" name="targetAltSector" value="{{ old('targetAltSector') }}" class="req-string" rel="targetSectorChildren .active">

                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea  id="competitorWebsites" name="competitorWebsites"  class="materialize-textarea req-string validate" maxlength="1000" length="1000">{{ old('competitorWebsites') }}</textarea>
                                    <label for="competitorWebsites" class="avenirdemibold">Bu ihtiyacı gideren diğer ürün ve çözümler kimler tarafından yapılmaktadır Web adresleri ile belirtiniz.</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea  id="competitorDifference" name="competitorDifference" value="{{ old('competitorDifference') }}" class="materialize-textarea req-string validate" maxlength="1000" >{{old('competitorDifference') }}</textarea>
                                    <label for="competitorDifference" class="avenirdemibold">Bu rakiplerinizden nasıl ayrışıyorsunuz?</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12">
                                    <textarea  id="businessModel2" name="businessModel2"  class="materialize-textarea req-string validate" maxlength="1000" >{{ old('businessModel2') }}</textarea>
                                    <label for="businessModel2" class="avenirdemibold">Ürününüzü nasıl fiyatlandırıyorsunuz?</label>
                                </div>
                            </div>

                            <div class="inputsToCheck">
                                <div id="haveInvestmentTitle" class="row">
                                    <p class="avenirdemibold sub-title col s12 tooltip-right">Yatırım aldınız mı? <span class="tooltip-right" ></span></p>
                                </div>
                            </div>

                            <div class="row">
                                <p class="col s12">
                                    <input  type="radio" id="haveInvestment1" name="haveInvestment" class="formGroupSwitch req-checked"  value="Evet"  />
                                    <label for="haveInvestment1">Evet</label>
                                </p>
                                <p class="col s12">
                                    <input  type="radio" id="haveInvestment2" name="haveInvestment" class="formGroupSwitch req-checked"  value="Hayır"  />
                                    <label for="haveInvestment2">Hayır</label>
                                </p>
                            </div>
                        </div>



                        <div class="inputsToCheck">
                            <div id="havePatentTitle" class="row">
                                <p class="avenirdemibold sub-title col s12 tooltip-right">Patent başvurunuz var mı? <span class="tooltip-right" ></span></p>
                            </div>
                        </div>

                        <div class="inputsToCheck row">
                            <p class="col s12">
                                <input  type="radio" id="havePatent1" name="havePatent" class="formGroupSwitch req-checked"   value="Evet" />
                                <label for="havePatent1">Evet</label>
                            </p>
                            <p class="col s12">
                                <input  type="radio" id="havePatent2" name="havePatent" class="formGroupSwitch req-checked"   value="Hayır"  />
                                <label for="havePatent2">Hayır</label>
                            </p>
                        </div>

                        <input type="submit"  value="Başvur"  id="yer" class="size-a-15 flex-c-c bg-11 t1-s-2 text-uppercase cl-0 hov-btn1 trans-02 p-rl-15">

                    </section>
                </form>
            </div>
        </div>

    </section>


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
