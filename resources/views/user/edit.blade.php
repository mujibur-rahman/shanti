@extends('app')
@section('content')
	@section('right')
	<aside class="right-side">
	    <section class="content-header">
	        <h1>User</h1>
	        <ol class="breadcrumb">
	            <li>
	                <a href="#admin/users/index">
	                    <i class="livicon" data-color="#000" data-name="home" data-size="16" id="livicon-46" style="width: 16px; height: 16px;"></i>
	                    Dashboard 
	                </a>
	            </li>
	            <li>Users</li>
	            <li class="active">Edit user</li>
	        </ol>
	    </section>
	    <section class="content paddingleft_right15">
	        <div class="row">
	            <div class="col-md-12">
	                <div class="panel panel-primary">
	                	<div class="panel-heading">
	                		<h4 class="panel-title"> <img src="#" />Edit user</h4>
	                		 <span class="pull-right clickable">
	                        	<i class="glyphicon glyphicon-chevron-up"></i>
	                    	</span>
	                	</div>
			            <div class="panel-body">
			            		<div class="error-panel">
			            			@if ($errors->any() )
			            				<ul>
			            					{!! implode('', $errors->all('<li class="errors">:message</li>'))  !!}
			            				</ul>
			            			@endif 
			            		</div>
			                    <div class="table-responsive"> 
			                    	{!! Form::model($user, array('method' => 'PATCH', 'route' => array('user.update', $user->id))) !!}
			                               	<div class="content clearfix">
			                        	       <h1 class="title current" id="wizard-h-0" tabindex="-1">User
			                        	            Profile</h1>
			                        	        <section aria-hidden="false" aria-labelledby="wizard-h-0" class="body current" id="wizard-p-0" role="tabpanel" style="display: block;">
			                        	            <div class="form-group">
			                        	                <label class="col-sm-2 control-label" for="firstname">First Name
			                        	                    *</label>
			                        	                <div class="col-sm-10">
			                        	                    <input aria-required="true" class="form-control required" id="firstname" name="firstname" placeholder="First Name" value="{{ $user->firstname }}" type="text" />
			                        	                </div>
			                        	            </div>
			                        	            <div class="form-group">
			                        	                <label class="col-sm-2 control-label" for="middlename">Middle Name
			                        	                    </label>
			                        	                <div class="col-sm-10">
			                        	                    <input aria-required="true" class="form-control required" id="middlename" name="middlename" placeholder="Middle Name" value="{{ $user->middlename }}" type="text" />
			                        	                </div>
			                        	            </div>
			                        	            <div class="form-group">
			                        	                <label class="col-sm-2 control-label" for="lastname">Last Name
			                        	                    *</label>
			                        	                <div class="col-sm-10">
			                        	                    <input aria-required="true" class="form-control required" id="lastname" name="lastname" placeholder="Last Name" value="{{ $user->lastname }}" type="text" />
			                        	                </div>
			                        	            </div>
			                        	            <div class="form-group">
			                        	                <label class="col-sm-2 control-label" for="email">Email *</label>
			                        	                <div class="col-sm-10">
			                        	                    <input aria-required="true" class="form-control required email" id="email" name="email" placeholder="E-Mail" type="email" value="{{ $user->email }}" />
			                        	                </div>
			                        	            </div>
			                        	            <div class="form-group">
			                        	                <label class="col-sm-2 control-label" for="password">Password *</label>
			                        	                <div class="col-sm-10">
			                        	                    <input aria-required="true" class="form-control required" id="password" name="password" placeholder="Password" type="password" value="" />
			                        	                </div>
			                        	            </div>
			                        	            <div class="form-group">
			                        	                <label class="col-sm-2 control-label" for="password_confirm">Confirm
			                        	                    Password *</label>
			                        	                <div class="col-sm-10">
			                        	                    <input aria-required="true" class="form-control required" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password " type="password" />
			                        	                </div>
			                        	            </div>
			                        	            <p>(*) Mandatory</p>
			                        	        </section>
			                        	        <!-- third tab -->
			                        	        <h1 class="title" id="wizard-h-2" tabindex="-1">Address</h1>
			                        	        <section aria-hidden="true" aria-labelledby="wizard-h-2" class="body" id="wizard-p-2" role="tabpanel" style="display: no ne;">
			                        	            <div class="form-group">
			                        	                <label class="col-sm-2 control-label" for="email">Gender</label>
			                        	                <div class="col-sm-10">
			                        	                	{!! Form::select('gender', array('' => 'Select', 'male' => 'MALE', 'female' => 'FEMALE', 'other' => 'OTHER'), $user->gender, array('class' => 'form-control')) !!}

			                        	                </div>
			                        	            </div>
			                        	            <div class="form-group">
			                        	                <label class="col-sm-2 control-label" for="country">Country</label>
			                        	                <div class="col-sm-10">
			                        	                    <select class="form-control" id="country" name="country"><option selected="selected" value="">Select</option>
			                        	                        <option value="AF">Afghanistan</option>
			                        	                        <option value="AL">Albania</option>
			                        	                        <option value="DZ">Algeria</option>
			                        	                        <option value="AS">American Samoa</option>
			                        	                        <option value="AD">Andorra</option>
			                        	                        <option value="AO">Angola</option>
			                        	                        <option value="AI">Anguilla</option>
			                        	                        <option value="AQ">Antarctica</option>
			                        	                        <option value="AG">Antigua and Barbuda</option>
			                        	                        <option value="AR">Argentina</option>
			                        	                        <option value="AM">Armenia</option>
			                        	                        <option value="AW">Aruba</option>
			                        	                        <option value="AU">Australia</option>
			                        	                        <option value="AT">Austria</option>
			                        	                        <option value="AZ">Azerbaijan</option>
			                        	                        <option value="BS">Bahamas</option>
			                        	                        <option value="BH">Bahrain</option>
			                        	                        <option value="BD">Bangladesh</option>
			                        	                        <option value="BB">Barbados</option>
			                        	                        <option value="BY">Belarus</option>
			                        	                        <option value="BE">Belgium</option>
			                        	                        <option value="BZ">Belize</option>
			                        	                        <option value="BJ">Benin</option>
			                        	                        <option value="BM">Bermuda</option>
			                        	                        <option value="BT">Bhutan</option>
			                        	                        <option value="BO">Bolivia</option>
			                        	                        <option value="BA">Bosnia and Herzegovina</option>
			                        	                        <option value="BW">Botswana</option>
			                        	                        <option value="BV">Bouvet Island</option>
			                        	                        <option value="BR">Brazil</option>
			                        	                        <option value="BQ">British Antarctic Territory</option>
			                        	                        <option value="IO">British Indian Ocean Territory</option>
			                        	                        <option value="VG">British Virgin Islands</option>
			                        	                        <option value="BN">Brunei</option>
			                        	                        <option value="BG">Bulgaria</option>
			                        	                        <option value="BF">Burkina Faso</option>
			                        	                        <option value="BI">Burundi</option>
			                        	                        <option value="KH">Cambodia</option>
			                        	                        <option value="CM">Cameroon</option>
			                        	                        <option value="CA">Canada</option>
			                        	                        <option value="CT">Canton and Enderbury Islands</option>
			                        	                        <option value="CV">Cape Verde</option>
			                        	                        <option value="KY">Cayman Islands</option>
			                        	                        <option value="CF">Central African Republic</option>
			                        	                        <option value="TD">Chad</option>
			                        	                        <option value="CL">Chile</option>
			                        	                        <option value="CN">China</option>
			                        	                        <option value="CX">Christmas Island</option>
			                        	                        <option value="CC">Cocos [Keeling] Islands</option>
			                        	                        <option value="CO">Colombia</option>
			                        	                        <option value="KM">Comoros</option>
			                        	                        <option value="CG">Congo - Brazzaville</option>
			                        	                        <option value="CD">Congo - Kinshasa</option>
			                        	                        <option value="CK">Cook Islands</option>
			                        	                        <option value="CR">Costa Rica</option>
			                        	                        <option value="HR">Croatia</option>
			                        	                        <option value="CU">Cuba</option>
			                        	                        <option value="CY">Cyprus</option>
			                        	                        <option value="CZ">Czech Republic</option>
			                        	                        <option value="CI">Côte d'Ivoire</option>
			                        	                        <option value="DK">Denmark</option>
			                        	                        <option value="DJ">Djibouti</option>
			                        	                        <option value="DM">Dominica</option>
			                        	                        <option value="DO">Dominican Republic</option>
			                        	                        <option value="NQ">Dronning Maud Land</option>
			                        	                        <option value="DD">East Germany</option>
			                        	                        <option value="EC">Ecuador</option>
			                        	                        <option value="EG">Egypt</option>
			                        	                        <option value="SV">El Salvador</option>
			                        	                        <option value="GQ">Equatorial Guinea</option>
			                        	                        <option value="ER">Eritrea</option>
			                        	                        <option value="EE">Estonia</option>
			                        	                        <option value="ET">Ethiopia</option>
			                        	                        <option value="FK">Falkland Islands</option>
			                        	                        <option value="FO">Faroe Islands</option>
			                        	                        <option value="FJ">Fiji</option>
			                        	                        <option value="FI">Finland</option>
			                        	                        <option value="FR">France</option>
			                        	                        <option value="GF">French Guiana</option>
			                        	                        <option value="PF">French Polynesia</option>
			                        	                        <option value="TF">French Southern Territories</option>
			                        	                        <option value="FQ">French Southern and Antarctic Territories</option>
			                        	                        <option value="GA">Gabon</option>
			                        	                        <option value="GM">Gambia</option>
			                        	                        <option value="GE">Georgia</option>
			                        	                        <option value="DE">Germany</option>
			                        	                        <option value="GH">Ghana</option>
			                        	                        <option value="GI">Gibraltar</option>
			                        	                        <option value="GR">Greece</option>
			                        	                        <option value="GL">Greenland</option>
			                        	                        <option value="GD">Grenada</option>
			                        	                        <option value="GP">Guadeloupe</option>
			                        	                        <option value="GU">Guam</option>
			                        	                        <option value="GT">Guatemala</option>
			                        	                        <option value="GG">Guernsey</option>
			                        	                        <option value="GN">Guinea</option>
			                        	                        <option value="GW">Guinea-Bissau</option>
			                        	                        <option value="GY">Guyana</option>
			                        	                        <option value="HT">Haiti</option>
			                        	                        <option value="HM">Heard Island and McDonald Islands</option>
			                        	                        <option value="HN">Honduras</option>
			                        	                        <option value="HK">Hong Kong SAR China</option>
			                        	                        <option value="HU">Hungary</option>
			                        	                        <option value="IS">Iceland</option>
			                        	                        <option value="IN">India</option>
			                        	                        <option value="ID">Indonesia</option>
			                        	                        <option value="IR">Iran</option>
			                        	                        <option value="IQ">Iraq</option>
			                        	                        <option value="IE">Ireland</option>
			                        	                        <option value="IM">Isle of Man</option>
			                        	                        <option value="IL">Israel</option>
			                        	                        <option value="IT">Italy</option>
			                        	                        <option value="JM">Jamaica</option>
			                        	                        <option value="JP">Japan</option>
			                        	                        <option value="JE">Jersey</option>
			                        	                        <option value="JT">Johnston Island</option>
			                        	                        <option value="JO">Jordan</option>
			                        	                        <option value="KZ">Kazakhstan</option>
			                        	                        <option value="KE">Kenya</option>
			                        	                        <option value="KI">Kiribati</option>
			                        	                        <option value="KW">Kuwait</option>
			                        	                        <option value="KG">Kyrgyzstan</option>
			                        	                        <option value="LA">Laos</option>
			                        	                        <option value="LV">Latvia</option>
			                        	                        <option value="LB">Lebanon</option>
			                        	                        <option value="LS">Lesotho</option>
			                        	                        <option value="LR">Liberia</option>
			                        	                        <option value="LY">Libya</option>
			                        	                        <option value="LI">Liechtenstein</option>
			                        	                        <option value="LT">Lithuania</option>
			                        	                        <option value="LU">Luxembourg</option>
			                        	                        <option value="MO">Macau SAR China</option>
			                        	                        <option value="MK">Macedonia</option>
			                        	                        <option value="MG">Madagascar</option>
			                        	                        <option value="MW">Malawi</option>
			                        	                        <option value="MY">Malaysia</option>
			                        	                        <option value="MV">Maldives</option>
			                        	                        <option value="ML">Mali</option>
			                        	                        <option value="MT">Malta</option>
			                        	                        <option value="MH">Marshall Islands</option>
			                        	                        <option value="MQ">Martinique</option>
			                        	                        <option value="MR">Mauritania</option>
			                        	                        <option value="MU">Mauritius</option>
			                        	                        <option value="YT">Mayotte</option>
			                        	                        <option value="FX">Metropolitan France</option>
			                        	                        <option value="MX">Mexico</option>
			                        	                        <option value="FM">Micronesia</option>
			                        	                        <option value="MI">Midway Islands</option>
			                        	                        <option value="MD">Moldova</option>
			                        	                        <option value="MC">Monaco</option>
			                        	                        <option value="MN">Mongolia</option>
			                        	                        <option value="ME">Montenegro</option>
			                        	                        <option value="MS">Montserrat</option>
			                        	                        <option value="MA">Morocco</option>
			                        	                        <option value="MZ">Mozambique</option>
			                        	                        <option value="MM">Myanmar [Burma]</option>
			                        	                        <option value="NA">Namibia</option>
			                        	                        <option value="NR">Nauru</option>
			                        	                        <option value="NP">Nepal</option>
			                        	                        <option value="NL">Netherlands</option>
			                        	                        <option value="AN">Netherlands Antilles</option>
			                        	                        <option value="NT">Neutral Zone</option>
			                        	                        <option value="NC">New Caledonia</option>
			                        	                        <option value="NZ">New Zealand</option>
			                        	                        <option value="NI">Nicaragua</option>
			                        	                        <option value="NE">Niger</option>
			                        	                        <option value="NG">Nigeria</option>
			                        	                        <option value="NU">Niue</option>
			                        	                        <option value="NF">Norfolk Island</option>
			                        	                        <option value="KP">North Korea</option>
			                        	                        <option value="VD">North Vietnam</option>
			                        	                        <option value="MP">Northern Mariana Islands</option>
			                        	                        <option value="NO">Norway</option>
			                        	                        <option value="OM">Oman</option>
			                        	                        <option value="PC">Pacific Islands Trust Territory</option>
			                        	                        <option value="PK">Pakistan</option>
			                        	                        <option value="PW">Palau</option>
			                        	                        <option value="PS">Palestinian Territories</option>
			                        	                        <option value="PA">Panama</option>
			                        	                        <option value="PZ">Panama Canal Zone</option>
			                        	                        <option value="PG">Papua New Guinea</option>
			                        	                        <option value="PY">Paraguay</option>
			                        	                        <option value="YD">People's Democratic Republic of Yemen</option>
			                        	                        <option value="PE">Peru</option>
			                        	                        <option value="PH">Philippines</option>
			                        	                        <option value="PN">Pitcairn Islands</option>
			                        	                        <option value="PL">Poland</option>
			                        	                        <option value="PT">Portugal</option>
			                        	                        <option value="PR">Puerto Rico</option>
			                        	                        <option value="QA">Qatar</option>
			                        	                        <option value="RO">Romania</option>
			                        	                        <option value="RU">Russia</option>
			                        	                        <option value="RW">Rwanda</option>
			                        	                        <option value="RE">Réunion</option>
			                        	                        <option value="BL">Saint Barthélemy</option>
			                        	                        <option value="SH">Saint Helena</option>
			                        	                        <option value="KN">Saint Kitts and Nevis</option>
			                        	                        <option value="LC">Saint Lucia</option>
			                        	                        <option value="MF">Saint Martin</option>
			                        	                        <option value="PM">Saint Pierre and Miquelon</option>
			                        	                        <option value="VC">Saint Vincent and the Grenadines</option>
			                        	                        <option value="WS">Samoa</option>
			                        	                        <option value="SM">San Marino</option>
			                        	                        <option value="SA">Saudi Arabia</option>
			                        	                        <option value="SN">Senegal</option>
			                        	                        <option value="RS">Serbia</option>
			                        	                        <option value="CS">Serbia and Montenegro</option>
			                        	                        <option value="SC">Seychelles</option>
			                        	                        <option value="SL">Sierra Leone</option>
			                        	                        <option value="SG">Singapore</option>
			                        	                        <option value="SK">Slovakia</option>
			                        	                        <option value="SI">Slovenia</option>
			                        	                        <option value="SB">Solomon Islands</option>
			                        	                        <option value="SO">Somalia</option>
			                        	                        <option value="ZA">South Africa</option>
			                        	                        <option value="GS">South Georgia and the South Sandwich Islands</option>
			                        	                        <option value="KR">South Korea</option>
			                        	                        <option value="ES">Spain</option>
			                        	                        <option value="LK">Sri Lanka</option>
			                        	                        <option value="SD">Sudan</option>
			                        	                        <option value="SR">Suriname</option>
			                        	                        <option value="SJ">Svalbard and Jan Mayen</option>
			                        	                        <option value="SZ">Swaziland</option>
			                        	                        <option value="SE">Sweden</option>
			                        	                        <option value="CH">Switzerland</option>
			                        	                        <option value="SY">Syria</option>
			                        	                        <option value="ST">São Tomé and Príncipe</option>
			                        	                        <option value="TW">Taiwan</option>
			                        	                        <option value="TJ">Tajikistan</option>
			                        	                        <option value="TZ">Tanzania</option>
			                        	                        <option value="TH">Thailand</option>
			                        	                        <option value="TL">Timor-Leste</option>
			                        	                        <option value="TG">Togo</option>
			                        	                        <option value="TK">Tokelau</option>
			                        	                        <option value="TO">Tonga</option>
			                        	                        <option value="TT">Trinidad and Tobago</option>
			                        	                        <option value="TN">Tunisia</option>
			                        	                        <option value="TR">Turkey</option>
			                        	                        <option value="TM">Turkmenistan</option>
			                        	                        <option value="TC">Turks and Caicos Islands</option>
			                        	                        <option value="TV">Tuvalu</option>
			                        	                        <option value="UM">U.S. Minor Outlying Islands</option>
			                        	                        <option value="PU">U.S. Miscellaneous Pacific Islands</option>
			                        	                        <option value="VI">U.S. Virgin Islands</option>
			                        	                        <option value="UG">Uganda</option>
			                        	                        <option value="UA">Ukraine</option>
			                        	                        <option value="SU">Union of Soviet Socialist Republics</option>
			                        	                        <option value="AE">United Arab Emirates</option>
			                        	                        <option value="GB">United Kingdom</option>
			                        	                        <option value="US">United States</option>
			                        	                        <option value="ZZ">Unknown or Invalid Region</option>
			                        	                        <option value="UY">Uruguay</option>
			                        	                        <option value="UZ">Uzbekistan</option>
			                        	                        <option value="VU">Vanuatu</option>
			                        	                        <option value="VA">Vatican City</option>
			                        	                        <option value="VE">Venezuela</option>
			                        	                        <option value="VN">Vietnam</option>
			                        	                        <option value="WK">Wake Island</option>
			                        	                        <option value="WF">Wallis and Futuna</option>
			                        	                        <option value="EH">Western Sahara</option>
			                        	                        <option value="YE">Yemen</option>
			                        	                        <option value="ZM">Zambia</option>
			                        	                        <option value="ZW">Zimbabwe</option>
			                        	                        <option value="AX">Åland Islands</option></select>
			                        	                </div>
			                        	            </div>
			                        	            <div class="form-group">
			                        	                <label class="col-sm-2 control-label" for="state">State</label>
			                        	                <div class="col-sm-10">
			                        	                    <input class="form-control" id="state" name="state" type="text" value="{{ $user->state }}" />
			                        	                </div>
			                        	            </div>
			                        	            <div class="form-group">
			                        	                <label class="col-sm-2 control-label" for="city">City</label>
			                        	                <div class="col-sm-10">
			                        	                    <input class="form-control" id="city" name="city" type="text" value="{{ $user->city }}" />
			                        	                </div>
			                        	            </div>
			                        	            <div class="form-group">
			                        	                <label class="col-sm-2 control-label" for="address">Address</label>
			                        	                <div class="col-sm-10">
			                        	                    <input class="form-control" id="address" name="address" type="text" value="{{ $user->address }}" />
			                        	                </div>
			                        	            </div>
			                        	            <div class="form-group">
			                        	                <label class="col-sm-2 control-label" for="postal">Postal/zip</label>
			                        	                <div class="col-sm-10">
			                        	                    <input class="form-control" id="postal" name="postal" type="text" value="{{ $user->postal }}" />
			                        	                </div>
			                        	            </div>
			                        	        </section>
			                        	        <!-- fourth tab -->
			                        	        <h1 class="title" id="wizard-h-3" tabindex="-1">User Group</h1>
			                        	        <section aria-hidden="true" aria-labelledby="wizard-h-3" class="body" id="wizard-p-3" role="tabpanel" style="display: non e;">
			                        	            <p class="text-danger"><strong>Be careful with group selection, if you
			                        	                give admin access.. they can access admin section</strong></p>
			                        	            <div class="form-group">
			                        	                <label class="col-sm-2 control-label" for="role">Role *</label>
			                        	                <div class="col-sm-10">
			                        	                    {!! Form::select('role', $roles, $user->role->id, array('class' => 'form-control')) !!}
			                        	                </div>
			                        	            </div>
			                        	            <div class="form-group">
			                        	                <label class="col-sm-2 control-label" for="activate">
			                        	                    Activate User</label>
			                        	                <div class="col-sm-10">
			                        	                    @if($user->isactive)
			                        	                   		<input class="pos-rel p-l-30" id="activate" name="activate" type="checkbox" checked value="1" />
			                        	                   	@else
			                        	                   		<input class="pos-rel p-l-30" id="activate" name="activate" type="checkbox" value="1">
			                        	                    @endif
			                        	                    <span>If user is not activated, mail will be sent to user with
			                        	                    activation link</span>
			                        	                </div>
			                        	                
			                        	            </div>
			                        	        </section>
			                        	    </div>
			                        	    <div class="actions clearfix">
			                        	        <div class="form-group">
											        <div class="col-sm-offset-2 col-sm-4">
											            <a class="btn btn-danger" href="{{ URL::to('/user/index') }}">
											                Cancel 
											            </a>
											            <button class="btn btn-success" type="submit">
											                Update 
											            </button>
											        </div>

											    </div>
			                        	    </div>
			                        <!--/form-->
			                        {!! Form::close() !!}
			                    </div>
			            </div>
	            	</div>
	        	</div>
	    	</div>
	    </section>
	</aside>
	@endsection
@endsection