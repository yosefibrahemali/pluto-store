<div>
    
    <section class="mt-50 mb-50">
        <div class="divider center_icon mt-50 mb-50"><i class="fi-rs-fingerprint"></i></div>
     
            
        <div class="container">
           
            
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-25">
                         
                        <span class="font-xl text-brand fw-900" >{{__('checkout.Shipping Details')}}</span>
                    </div>
     
                    
                        <div class="form-group">
                            <input wire:model="fname" type="text" required="" name="fname" placeholder="First name *">
                        </div>
                        <div class="form-group">
                            <input wire:model="lname" type="text" required="" name="lname" placeholder="Last name *">
                        </div>
                       
                        <div class="form-group">
                            <div class="custom_select">

 

                                
                                
                                <select wire:change="changeStaffId($event.target.value)" class="form-control select-active" name="city" id="select1" >
                                    <option value="">Please select</option>           
                                    <option value="30" >Ajdabiya</option>
                                    <option value="30" >Al Burayqah</option>
                                    <option value="Awjilah">Awjilah</option>
                                    <option value="Az Zuwaytīnah">Az Zuwaytīnah</option>
                                    <option value="40">Gialo</option>
                                    <option value="10">Marādah</option>
                                    <option value="20">Benghazi</option>
                                    <option value="Qaryat Sulūq">Qaryat Sulūq</option>
                                    <option value="Al Qubbah">Al Qubbah</option>
                                    <option value="35">Darnah</option>
                                    <option value="Ghat">Ghat</option>           
                                    <option value="Al Bayḑā’">Al Bayḑā’</option>  
                                    <option value="Gharyan">Gharyan</option>
                                    <option value="Giado">Giado</option>
                                    <option value="Mizdah">Mizdah</option>
                                    <option value="Yafran">Yafran</option>
                                    <option value="30">Zintan</option>
                                    <option value="Al ‘Azīzīyah">Al ‘Azīzīyah</option>
                                    <option value="Hūn">Hūn</option>
                                    <option value="Waddān">Waddān</option>
                                    <option value="Al Jawf">Al Jawf</option>
                                    <option value="At Tāj">At Tāj</option>
                                    <option value="Al Abyār">Al Abyār</option>
                                    <option value="Al Marj">Al Marj</option>
                                    <option value="Tūkrah">Tūkrah</option>
                                    <option value="Bani Walid">Bani Walid</option>
                                    <option value="10">{{__('checkout.misratah')}}</option>
                                    <option value="Zliten">Zliten</option>
                                    <option value="Al Khums">Al Khums</option>
                                    <option value="Masallātah">Masallātah</option>
                                    <option value="Tarhuna">Tarhuna</option>
                                    <option value="Al Qaţrūn">Al Qaţrūn</option>
                                    <option value="Murzuq">Murzuq</option>
                                    <option value="Ghadāmis">Ghadāmis</option>
                                    <option value="Nālūt">Nālūt</option>
                                    <option value="Al Ajaylat">Al Ajaylat</option>
                                    <option value="Zalţan">Zalţan</option>
                                    <option value="Zuwārah">Zuwārah</option>
                                    <option value="Al Jadīd">Al Jadīd</option>
                                    <option value="Sabhā">Sabhā</option>
                                    <option value="Qasr Abu Hadi">Qasr Abu Hadi</option>
                                    <option value="Sirte">Sirte</option>
                                    <option value="Tagiura">Tagiura</option>
                                    <option value="Tripoli">Tripoli</option>
                                    <option value="Ubari">Ubari</option>
                                    <option value="Brak">Brak</option>
                                    <option value="Idrī">Idrī</option>
                                    <option value="Az Zāwīyah">Az Zāwīyah</option>
                                    <option value="Şabrātah">Şabrātah</option>
                                    <option value="Şurmān">Şurmān</option>
                                    <option data-fruit='12' value="Zawiya">Zawiya</option>
                                </select>
                               
                            </div>
                           
                        </div>


                       

                          
                        <div class="form-group">
                            <input wire:model="address"  type="text" name="address" required="" placeholder="Address *">
                            
                        </div>
                        <div class="form-group">
                            <input wire:model="address2" type="text" name="address2" required="" placeholder="Address line2">
                        </div>
                        <div class="form-group">
                            <input wire:model="region" required="" type="text" name="region" placeholder="region *">
                        </div>
                        
                        
                        <div class="form-group">
                            <input wire:model="phone" required="" type="text" name="phone" placeholder="Phone *">
                        </div>
                        <div class="form-group">
                            @if(Auth::check())
                            <input wire:model="email" required="" type="text" name="email" placeholder="Email address *" value="{{Auth()->user()->email}}">
                            @else
                            <input wire:model="email" required="" type="text" name="email" placeholder="Email address *" >
                            @endif
                            
                        </div>
                        {{-- <div class="form-group">
                            <div class="checkbox">
                                <div class="custome-checkbox">
                                    <input class="form-check-input" type="checkbox" name="checkbox" id="createaccount">
                                    <label class="form-check-label label_info" data-bs-toggle="collapse" href="#collapsePassword" data-target="#collapsePassword" aria-controls="collapsePassword" for="createaccount"><span>Create an account?</span></label>
                                </div>
                            </div>
                        </div>
                        <div id="collapsePassword" class="form-group create-account collapse in">
                            <input required="" type="password" placeholder="Password" name="password">
                        </div> --}}
                        {{-- <div class="ship_detail">
                            <div class="form-group">
                                <div class="chek-form">
                                    <div class="custome-checkbox">
                                        <input class="form-check-input" type="checkbox" name="checkbox" id="differentaddress">
                                        <label class="form-check-label label_info" data-bs-toggle="collapse" data-target="#collapseAddress" href="#collapseAddress" aria-controls="collapseAddress" for="differentaddress"><span>Ship to a different address?</span></label>
                                    </div>
                                </div>
                            </div>
                            <div id="collapseAddress" class="different_address collapse in">
                                <div class="form-group">
                                    <input type="text" required="" name="fname" placeholder="First name *">
                                </div>
                                <div class="form-group">
                                    <input type="text" required="" name="lname" placeholder="Last name *">
                                </div>
                                <div class="form-group">
                                    <input required="" type="text" name="cname" placeholder="Company Name">
                                </div>
                                <div class="form-group">
                                    <div class="custom_select">
                                        <select class="form-control select-active">
                                            <option value="">Select an option...</option>
                                            <option value="AX">Aland Islands</option>
                                            <option value="AF">Afghanistan</option>
                                            <option value="AL">Albania</option>
                                            <option value="DZ">Algeria</option>
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
                                            <option value="PW">Belau</option>
                                            <option value="BE">Belgium</option>
                                            <option value="BZ">Belize</option>
                                            <option value="BJ">Benin</option>
                                            <option value="BM">Bermuda</option>
                                            <option value="BT">Bhutan</option>
                                            <option value="BO">Bolivia</option>
                                            <option value="BQ">Bonaire, Saint Eustatius and Saba</option>
                                            <option value="BA">Bosnia and Herzegovina</option>
                                            <option value="BW">Botswana</option>
                                            <option value="BV">Bouvet Island</option>
                                            <option value="BR">Brazil</option>
                                            <option value="IO">British Indian Ocean Territory</option>
                                            <option value="VG">British Virgin Islands</option>
                                            <option value="BN">Brunei</option>
                                            <option value="BG">Bulgaria</option>
                                            <option value="BF">Burkina Faso</option>
                                            <option value="BI">Burundi</option>
                                            <option value="KH">Cambodia</option>
                                            <option value="CM">Cameroon</option>
                                            <option value="CA">Canada</option>
                                            <option value="CV">Cape Verde</option>
                                            <option value="KY">Cayman Islands</option>
                                            <option value="CF">Central African Republic</option>
                                            <option value="TD">Chad</option>
                                            <option value="CL">Chile</option>
                                            <option value="CN">China</option>
                                            <option value="CX">Christmas Island</option>
                                            <option value="CC">Cocos (Keeling) Islands</option>
                                            <option value="CO">Colombia</option>
                                            <option value="KM">Comoros</option>
                                            <option value="CG">Congo (Brazzaville)</option>
                                            <option value="CD">Congo (Kinshasa)</option>
                                            <option value="CK">Cook Islands</option>
                                            <option value="CR">Costa Rica</option>
                                            <option value="HR">Croatia</option>
                                            <option value="CU">Cuba</option>
                                            <option value="CW">CuraÇao</option>
                                            <option value="CY">Cyprus</option>
                                            <option value="CZ">Czech Republic</option>
                                            <option value="DK">Denmark</option>
                                            <option value="DJ">Djibouti</option>
                                            <option value="DM">Dominica</option>
                                            <option value="DO">Dominican Republic</option>
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
                                            <option value="GT">Guatemala</option>
                                            <option value="GG">Guernsey</option>
                                            <option value="GN">Guinea</option>
                                            <option value="GW">Guinea-Bissau</option>
                                            <option value="GY">Guyana</option>
                                            <option value="HT">Haiti</option>
                                            <option value="HM">Heard Island and McDonald Islands</option>
                                            <option value="HN">Honduras</option>
                                            <option value="HK">Hong Kong</option>
                                            <option value="HU">Hungary</option>
                                            <option value="IS">Iceland</option>
                                            <option value="IN">India</option>
                                            <option value="ID">Indonesia</option>
                                            <option value="IR">Iran</option>
                                            <option value="IQ">Iraq</option>
                                            <option value="IM">Isle of Man</option>
                                            <option value="IL">Israel</option>
                                            <option value="IT">Italy</option>
                                            <option value="CI">Ivory Coast</option>
                                            <option value="JM">Jamaica</option>
                                            <option value="JP">Japan</option>
                                            <option value="JE">Jersey</option>
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
                                            <option value="MO">Macao S.A.R., China</option>
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
                                            <option value="MX">Mexico</option>
                                            <option value="FM">Micronesia</option>
                                            <option value="MD">Moldova</option>
                                            <option value="MC">Monaco</option>
                                            <option value="MN">Mongolia</option>
                                            <option value="ME">Montenegro</option>
                                            <option value="MS">Montserrat</option>
                                            <option value="MA">Morocco</option>
                                            <option value="MZ">Mozambique</option>
                                            <option value="MM">Myanmar</option>
                                            <option value="NA">Namibia</option>
                                            <option value="NR">Nauru</option>
                                            <option value="NP">Nepal</option>
                                            <option value="NL">Netherlands</option>
                                            <option value="AN">Netherlands Antilles</option>
                                            <option value="NC">New Caledonia</option>
                                            <option value="NZ">New Zealand</option>
                                            <option value="NI">Nicaragua</option>
                                            <option value="NE">Niger</option>
                                            <option value="NG">Nigeria</option>
                                            <option value="NU">Niue</option>
                                            <option value="NF">Norfolk Island</option>
                                            <option value="KP">North Korea</option>
                                            <option value="NO">Norway</option>
                                            <option value="OM">Oman</option>
                                            <option value="PK">Pakistan</option>
                                            <option value="PS">Palestinian Territory</option>
                                            <option value="PA">Panama</option>
                                            <option value="PG">Papua New Guinea</option>
                                            <option value="PY">Paraguay</option>
                                            <option value="PE">Peru</option>
                                            <option value="PH">Philippines</option>
                                            <option value="PN">Pitcairn</option>
                                            <option value="PL">Poland</option>
                                            <option value="PT">Portugal</option>
                                            <option value="QA">Qatar</option>
                                            <option value="IE">Republic of Ireland</option>
                                            <option value="RE">Reunion</option>
                                            <option value="RO">Romania</option>
                                            <option value="RU">Russia</option>
                                            <option value="RW">Rwanda</option>
                                            <option value="ST">São Tomé and Príncipe</option>
                                            <option value="BL">Saint Barthélemy</option>
                                            <option value="SH">Saint Helena</option>
                                            <option value="KN">Saint Kitts and Nevis</option>
                                            <option value="LC">Saint Lucia</option>
                                            <option value="SX">Saint Martin (Dutch part)</option>
                                            <option value="MF">Saint Martin (French part)</option>
                                            <option value="PM">Saint Pierre and Miquelon</option>
                                            <option value="VC">Saint Vincent and the Grenadines</option>
                                            <option value="SM">San Marino</option>
                                            <option value="SA">Saudi Arabia</option>
                                            <option value="SN">Senegal</option>
                                            <option value="RS">Serbia</option>
                                            <option value="SC">Seychelles</option>
                                            <option value="SL">Sierra Leone</option>
                                            <option value="SG">Singapore</option>
                                            <option value="SK">Slovakia</option>
                                            <option value="SI">Slovenia</option>
                                            <option value="SB">Solomon Islands</option>
                                            <option value="SO">Somalia</option>
                                            <option value="ZA">South Africa</option>
                                            <option value="GS">South Georgia/Sandwich Islands</option>
                                            <option value="KR">South Korea</option>
                                            <option value="SS">South Sudan</option>
                                            <option value="ES">Spain</option>
                                            <option value="LK">Sri Lanka</option>
                                            <option value="SD">Sudan</option>
                                            <option value="SR">Suriname</option>
                                            <option value="SJ">Svalbard and Jan Mayen</option>
                                            <option value="SZ">Swaziland</option>
                                            <option value="SE">Sweden</option>
                                            <option value="CH">Switzerland</option>
                                            <option value="SY">Syria</option>
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
                                            <option value="UG">Uganda</option>
                                            <option value="UA">Ukraine</option>
                                            <option value="AE">United Arab Emirates</option>
                                            <option value="GB">United Kingdom (UK)</option>
                                            <option value="US">USA (US)</option>
                                            <option value="UY">Uruguay</option>
                                            <option value="UZ">Uzbekistan</option>
                                            <option value="VU">Vanuatu</option>
                                            <option value="VA">Vatican</option>
                                            <option value="VE">Venezuela</option>
                                            <option value="VN">Vietnam</option>
                                            <option value="WF">Wallis and Futuna</option>
                                            <option value="EH">Western Sahara</option>
                                            <option value="WS">Western Samoa</option>
                                            <option value="YE">Yemen</option>
                                            <option value="ZM">Zambia</option>
                                            <option value="ZW">Zimbabwe</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="billing_address" required="" placeholder="Address *">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="billing_address2" required="" placeholder="Address line2">
                                </div>
                                <div class="form-group">
                                    <input required="" type="text" name="city" placeholder="City / Town *">
                                </div>
                                <div class="form-group">
                                    <input required="" type="text" name="state" placeholder="State / County *">
                                </div>
                                <div class="form-group">
                                    <input required="" type="text" name="zipcode" placeholder="Postcode / ZIP *">
                                </div>
                            </div>
                        </div> --}}
                        <div class="mb-20">
                            <h5>{{__('checkout.Additional information')}}</h5>
                        </div>
                        <div class="form-group mb-30">
                            <textarea wire:model="order_notes" rows="5" placeholder="Order notes"></textarea>
                        </div>
                    
                </div>
                <div class="col-md-6">
                    <div class="order_review">
                        <div class="mb-20">
                            <span class="font-xl text-brand fw-900" >{{__('checkout.Your Orders')}}</span>
                        </div>
                        <div class="table-responsive order_table text-center">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th colspan="2">{{__('checkout.Product')}}</th>
                                        <th>{{__('checkout.Total')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $total = 0 @endphp
                                    @php $subtotal = 0 @endphp
                                
                                
                                
                               
                                    @foreach((array)session('cart') as $id => $details)
                                    @php $total += $details['regular_price'] * $details['quantity'] + $shippingcost
                                    
                                    @endphp
                                    @php
                                    $arbon = $total * 0.2;
                                    @endphp
                                
                                    <tr>
                                        <td class="image product-thumbnail"><img src="{{ asset('assets/imgs/shop')}}/{{$details['photo']}}" alt="#"></td>
                                        <td>
                                            <h5><a href="{{route('product.details',['slug'=>$details['slug']])}}">{{$details['name']}}</a></h5> <span class="product-qty">x {{$details['quantity']}}</span>
                                        </td>
                                        <td>LYD{{$details['regular_price']}}</td>
                                    </tr>
                                    @if(Auth::check())
                                    <input type="hidden"  name="user_id" value="{{Auth::user()->id}}">
                                    

                                    @endif
                                    <input wire:model="product_id" name="product_id"  value="{{$id}}">
                                    <input name="product_quantity" type="text" value="{{$details['quantity']}}">

                                
                                    <input wire:model="total" type="hidden"  name="total" value="{{$details['regular_price'] * $details['quantity']}}">
                                    @endforeach
                                    <input wire:model="product_id"  type="hidden"  name="product" value="@foreach((array)session('cart') as $id => $details)[{{$details['size']}}{{$id}}],@endforeach">
                                

                                    
                                    <tr>
                                        <th>{{__('checkout.SubTotal')}}</th>
                                        <td class="product-subtotal" colspan="2">{{__('checkout.LYD')}}{{$total}}</td>
                                    </tr>
                                    <tr>
                                        <th>arbon</th>
                                        <td class="product-subtotal" colspan="2">{{__('checkout.LYD')}}{{$arbon}}</td>
                                    </tr>
                                   
                                    <tr>
                                        
                                        <th>{{__('checkout.Shipping')}}</th>
                                        
                                        <td colspan="2"><em>{{__('checkout.LYD')}}{{$shippingcost}}</em></td>
                                    </tr>
                                    <tr>
                                        <th>{{__('checkout.Total')}}</th>
                                        <td colspan="2" class="product-subtotal"><span class="font-xl text-brand fw-900">{{__('checkout.LYD')}}{{$total}}</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="bt-1 border-color-1 mt-30 mb-30"></div>
                        <div class="payment_method">
                            <div class="mb-25">
                                
                                <h5>{{__('checkout.Payment')}}</h5>
                            </div>
                            
                            <div class="payment_option">
                                
                                <div class="custome-radio">
                                    <input wire:model="payment_option" class="form-check-input" required="" type="radio" name="payment_option" id="exampleRadios3" checked>
                                    <label class="form-check-label" for="exampleRadios3" data-bs-toggle="collapse" data-target="#cashOnDelivery" aria-controls="cashOnDelivery">{{__('checkout.Cash On Delivery')}}</label>                                        
                                </div>
                                <div class="custome-radio">
                                    {{-- <input class="form-check-input" required="" type="radio" name="payment_option" id="exampleRadios4" > --}}
                                    <label class="form-check-label" for="exampleRadios4" data-bs-toggle="collapse" data-target="#cardPayment" aria-controls="cardPayment">{{__('checkout.Card Payment')}} <p>{{__('checkout.not available')}}</p></label>                                        
                                </div>
                                <div class="custome-radio">
                                    {{-- <input class="form-check-input" required="" type="radio" name="payment_option" id="exampleRadios5"> --}}
                                    <label class="form-check-label" for="exampleRadios5" data-bs-toggle="collapse" data-target="#paypal" aria-controls="paypal">{{__('checkout.Paypal')}}<p>{{__('checkout.not available')}}</p></label>                                        
                                </div>
                            </div>
                       
                        </div>
                        <input wire:model="product_id" for="product_id" type="hidden"  name="product_id" value="@foreach((array)session('cart') as $id => $details) {{$id}},  @endforeach">
                        
                    
                        <a type="submit"  href="#" class="btn btn-fill-out btn-block mt-30" wire:click.prevent="confirmorder()">{{__('checkout.Place Order')}}</a>
                        <a class="btn btn-fill-out btn-block mt-30" href="{{ URL::previous() }}" style="background-color: white; color:black;"> {{__('checkout.Back')}}</a>
                         ff
   {{$product_id}}
                    </div>
                </div>
            </div>
        </div>
    </section>
   
</div>
