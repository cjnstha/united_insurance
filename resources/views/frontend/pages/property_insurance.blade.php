@extends('layouts.frontend.master')
@section('title')
    Property Insurance Policy
@endsection
@section('contents')
    <!-- Start Pages Title  -->

    <section class="form-for-renew-buy">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 main-renew-buy">
                    <ul class="nav nav-pills">
                        <li><a href="{{url('/buy-renew/third-party')}}">
                                <img src="{{asset('asset/images/icons/car.svg')}}" alt=""> Third Party Insurance</a></li>
                        <li class="active"><a href="{{url('/buy-renew/property')}}"><img
                                    src="{{asset('asset/images/icons/home.svg')}}" alt="">
                                Property
                                Insurance </a></li>
                        <li><a href="{{url('/buy-renew/corona-insurance')}}"><img src="{{asset('asset/images/icons/heart.svg')}}" alt="">
                                Covid19
                                Corona Insurance</a></li>
                        <li><a href="{{url('/buy-renew/travel')}}"><img src="{{asset('asset/images/icons/tourism.svg')}}" alt="">
                                Travel Insurance</a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav sub-side-nav nav-pills">
                        <li><a href="#property-tab-1-1" data-toggle="tab"> <img src="{{asset('asset/images/icons/claim.png')}}"
                                                                                alt=""> Buy Insurance</a></li>
                        <li><a href="#property-tab-1-2" data-toggle="tab"><img src="{{asset('asset/images/icons/renew.png')}}"
                                                                               alt=""> Renew Your Insurance</a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="property-tab-1-1">
                            <div class="row justify-content-center">
                                <div
                                    class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center p-0 mt-3 mb-2">
                                    <div class="card px-0 pt-4 pb-0 mt-3 mb-3">
                                        <h2 id="heading"> Insurance Claim Form</h2>
                                        <p>Fill all form field to go to next step</p>
                                        <form id="msform" action="{{url('/buy-renew/property/store')}}" method="post"
                                              enctype="multipart/form-data">
                                            <!-- progressbar -->
                                            <ul id="progressbar">
                                                <li class="active" id="personal"><strong> Personal
                                                        Detail</strong>
                                                </li>
                                                <li id="policy"><strong> Policy
                                                        Detail</strong></li>
                                                {{--                                                <li id="confirm"><strong>Finish</strong></li>--}}
                                            </ul>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                     role="progressbar" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                            </div>
                                            <br> <!-- fieldsets -->
                                            @csrf
                                            <input type="hidden" value="property" name="insurance_type">
                                            <fieldset>
                                                <div class="form-card">
                                                    <!-- <div class="row">
                                                                        <div class="col-7">
                                                                            <h2 class="fs-title"> Personal
                                                                                Detail
                                                                            </h2>
                                                                        </div>
                                                                        <div class="col-5">
                                                                            <h2 class="steps">Step 1 - 4</h2>
                                                                        </div>
                                                                    </div> -->
                                                    <div class="insurance-form">
                                                        <div class="form-group col-md-4">
                                                            <label>Your Full Name</label>
                                                            <input class="form-control" type="text" id="name"
                                                                   name="name" placeholder="" required>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label>Your Full Address</label>
                                                            <input class="form-control" type="text" id="name"
                                                                   name="address" placeholder="" required>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label>District *</label>
                                                            <select name="district" id="district_code"
                                                                    class="form-control district_code"
                                                                    required="required"
                                                                    onchange="getDistrictVDCM(this.value)">
                                                                <option value="">- Select District -
                                                                </option>

                                                                <option value="68">Achham</option>

                                                                <option value="46">Arghakhanchi
                                                                </option>

                                                                <option value="48">Baglung</option>

                                                                <option value="73">Baitadi</option>

                                                                <option value="71">Bajhang</option>

                                                                <option value="69">Bajura</option>

                                                                <option value="57">Banke</option>

                                                                <option value="32">Bara</option>

                                                                <option value="62">Bardiya</option>

                                                                <option value="29">Bhaktapur
                                                                </option>

                                                                <option value="12">Bhojpur</option>

                                                                <option value="34">Chitwan</option>

                                                                <option value="74">Dadeldhura
                                                                </option>

                                                                <option value="64">Dailekh</option>

                                                                <option value="52">Dang</option>

                                                                <option value="72">Darchula</option>

                                                                <option value="35">Dhading</option>

                                                                <option value="07">Dhankuta</option>

                                                                <option value="17">Dhanusha</option>

                                                                <option value="20">Dolakha</option>

                                                                <option value="56">Dolpa</option>

                                                                <option value="67">Doti</option>

                                                                <option value="55">East Rukum
                                                                </option>

                                                                <option value="38">Gorkha</option>

                                                                <option value="47">Gulmi</option>

                                                                <option value="70">Humla</option>

                                                                <option value="02">Illam</option>

                                                                <option value="59">Jajarkot</option>

                                                                <option value="01">Jhapa</option>

                                                                <option value="60">Jumla</option>

                                                                <option value="66">Kailali</option>

                                                                <option value="65">Kalikot</option>

                                                                <option value="75">Kanchanpur
                                                                </option>

                                                                <option value="45">Kapilbastu
                                                                </option>

                                                                <option value="43">Kaski</option>

                                                                <option value="28">Kathmandu
                                                                </option>

                                                                <option value="23">Kavre</option>

                                                                <option value="13">Khotang</option>

                                                                <option value="27">Lalitpur</option>

                                                                <option value="39">Lamjung</option>

                                                                <option value="21">Mahottari
                                                                </option>

                                                                <option value="26">Makawanpur
                                                                </option>

                                                                <option value="44">Manang</option>

                                                                <option value="05">Morang</option>

                                                                <option value="61">Mugu</option>

                                                                <option value="51">Mustang</option>

                                                                <option value="50">Myagdi</option>

                                                                <option value="76">Nawalparasi
                                                                    (Ba.Su.Pa)
                                                                </option>

                                                                <option value="36">Nawalparasi
                                                                    (Ba.Su.Pu)
                                                                </option>

                                                                <option value="30">Nuwakot</option>

                                                                <option value="16">Okhaldhunga
                                                                </option>

                                                                <option value="41">Palpa</option>

                                                                <option value="03">Panchthar
                                                                </option>

                                                                <option value="49">Parbat</option>

                                                                <option value="33">Parsa</option>

                                                                <option value="53">Pyuthan</option>

                                                                <option value="19">Ramechhap
                                                                </option>

                                                                <option value="31">Rasuwa</option>

                                                                <option value="25">Rautahat</option>

                                                                <option value="54">Rolpa</option>

                                                                <option value="40">Rupandehi
                                                                </option>

                                                                <option value="58">Salyan</option>

                                                                <option value="09">Sankhuwasabha
                                                                </option>

                                                                <option value="10">Saptari</option>

                                                                <option value="22">Sarlahi</option>

                                                                <option value="18">Sindhuli</option>

                                                                <option value="24">Sindhupalchowk
                                                                </option>

                                                                <option value="15">Siraha</option>

                                                                <option value="14">Solukhumbu
                                                                </option>

                                                                <option value="06">Sunsari</option>

                                                                <option value="63">Surkhet</option>

                                                                <option value="42">Syangja</option>

                                                                <option value="37">Tanahu</option>

                                                                <option value="04">Taplejung
                                                                </option>

                                                                <option value="08">Terathum</option>

                                                                <option value="11">Udayapur</option>

                                                                <option value="77">West Rukum
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label>VDC/Municipality *</label>
                                                            <select id="vdc" name="lgus"
                                                                    class="form-control vdc">
                                                                <option value="">- Select
                                                                    VDC/Municipality -
                                                                </option>

                                                                <option value="5412">Aabukhairahani
                                                                    Gaunpalika (आबुखैरेनि
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5688">Aadarsa
                                                                    Gaunpalika
                                                                    (आदर्स गाउँपालिका)
                                                                </option>

                                                                <option value="5349">Aadarsa Kotawal
                                                                    Gaunpalika (आदर्श कोटवाल
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5112">Aaisalu Kharka
                                                                    Gaunpalika (एसेलुखर्क
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5238">Aakdara
                                                                    Gaunpalika
                                                                    (एकडारा गाउँपालिका)
                                                                </option>

                                                                <option value="5060">Aamchowk
                                                                    Gaunpalika
                                                                    (आमचोक गाउँपालिका)
                                                                </option>

                                                                <option value="5423">Aandhikhola
                                                                    Gaunpalika (आंधीखोला गाउँपालिका)
                                                                </option>

                                                                <option value="5407">Aannapurna
                                                                    Gaunpalika (अन्नपूर्ण
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5507">Aannapurna
                                                                    Gaunpalika (अन्नपूर्ण
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5385">Aarughat
                                                                    Gaunpalika
                                                                    (आरुघाट गाउँपालिका)
                                                                </option>

                                                                <option value="5621">Aathbis
                                                                    Nagarpalika
                                                                    (आठबिस नगरपालिका)
                                                                </option>

                                                                <option value="5530">Aathbiskoti
                                                                    Nagarpalika (आठबिसकोट नगरपालिका)
                                                                </option>

                                                                <option value="5053">Aathrai
                                                                    Gaupalika
                                                                    (आठराई गाउँपालिका)
                                                                </option>

                                                                <option value="5001">Aathrai Triveni
                                                                    Gaupalika (आठराई त्रिवेणी
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5156">Aaurahi
                                                                    Gaunpalika
                                                                    (औरही गाउँपालिका)
                                                                </option>

                                                                <option value="5820">Aaurahi
                                                                    Gaunpalika
                                                                    (औरही गाउँपालिका)
                                                                </option>

                                                                <option value="5839">Aaurahi
                                                                    Gaunpalika
                                                                    (औरही नगरपालिका)
                                                                </option>

                                                                <option value="5607">Adanchuli
                                                                    Gaunpalika (अदानचुली गाउँपालिका)
                                                                </option>

                                                                <option value="5801">Agni Sayir
                                                                    Krishna
                                                                    Sabran Gaunpalika (अग्नि साईर
                                                                    कृस्ना
                                                                    सबरन गाउँपालिका)
                                                                </option>

                                                                <option value="5729">Ajaymeru
                                                                    Gaunpalika
                                                                    (अजयमेरू गाउँपालिका)
                                                                </option>

                                                                <option value="5384">Ajirkot
                                                                    Gaupalika
                                                                    (अजिरकोट गाउँपालिका)
                                                                </option>

                                                                <option value="5730">Amargadi
                                                                    Nagarpalika (अमरगढी नगरपालिका)
                                                                </option>

                                                                <option value="5710">Apihimal
                                                                    Gaunpalika
                                                                    (अपिहिमाल गाउँपालिका)
                                                                </option>

                                                                <option value="5422">Arjun Chaupari
                                                                    Gaunpalika (अर्जुन चौपारी
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5028">Arjundhara
                                                                    Nagarpalika (अर्जुनधारा
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5155">Arnama
                                                                    Gaunpalika
                                                                    (अर्नमा गाउँपालिका)
                                                                </option>

                                                                <option value="5059">Arun Gaunpalika
                                                                    (अरुण गाउँपालिका)
                                                                </option>

                                                                <option value="5731">Atitlal
                                                                    Gaunpalika
                                                                    (अलिताल गाउँपालिका)
                                                                </option>

                                                                <option value="5573">Babayi
                                                                    Gaunpalika
                                                                    (बबइ गाउँपालिका)
                                                                </option>

                                                                <option value="5652">Badhaiyatal
                                                                    Gaunpalika (बढैयाताल गाउँपालिका)
                                                                </option>

                                                                <option value="5494">Badhganga
                                                                    Nagarpalika (बाणगंगा नगरपालिका)
                                                                </option>

                                                                <option value="5521">Badigad
                                                                    Gaunpalika
                                                                    (बडीगाड गाउँपालिका)
                                                                </option>

                                                                <option value="5693">Badikedar
                                                                    Gaunpalika (बडीकेदार गाउँपालिका)
                                                                </option>

                                                                <option value="5661">Badimalika
                                                                    Nagarpalika (बडीमालिका
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5534">Bafikot
                                                                    Gaunpalika
                                                                    (बाँफीकोट गाउँपालिका)
                                                                </option>

                                                                <option value="5566">Bagchaur
                                                                    Nagarpalika (बागचौर नगरपालिका)
                                                                </option>

                                                                <option value="5520">Baglung
                                                                    Nagarpalika
                                                                    (बाग्लुङ नगरपालिका)
                                                                </option>

                                                                <option value="5327">Bagmati
                                                                    Gaunpalika
                                                                    (बाग्मती गाउँपालिका)
                                                                </option>

                                                                <option value="5294">Bagmati
                                                                    Gaunpalika
                                                                    (बाग्मती गाउँपालिका)
                                                                </option>

                                                                <option value="5889">Bagmati
                                                                    Nagarpalika
                                                                    (बागमती नगरपालिका )
                                                                </option>

                                                                <option value="5887">Bahadurmaai
                                                                    Nagarpalika (बहदुर माइ
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5505">Bahgaun
                                                                    Muktichhetra Gaunpalika
                                                                    (बाह्गाउँ
                                                                    मुक्तिक्षेत्र गाउँपालिका)
                                                                </option>

                                                                <option value="5647">Baijanath
                                                                    Gaunpalika (बैजनाथ गाउँपालिका)
                                                                </option>

                                                                <option value="5179">Baiteshwor
                                                                    Gaunpalika (बैतेस्वोर
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5326">Bakaiya
                                                                    Gaunpalika
                                                                    (बकैया गाउँपालिका)
                                                                </option>

                                                                <option value="5813">Balan-Bihul
                                                                    Gaunpalika (वलान-बिहुल
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5253">Balara
                                                                    Nagarpalika
                                                                    (बलरा नगरपालिका)
                                                                </option>

                                                                <option value="5841">Balawa
                                                                    Nagarpalika
                                                                    (बलवा नगरपालिका)
                                                                </option>

                                                                <option value="5315">Balephi
                                                                    Gaunpalika
                                                                    (बलेफि गाउँपालिका)
                                                                </option>

                                                                <option value="5416">Bandipur
                                                                    Gaunpalika
                                                                    (बन्दिपुर गाउँपालिका)
                                                                </option>

                                                                <option value="5305">Banepa
                                                                    Nagarpalika
                                                                    (बनेपा नगरपालिका)
                                                                </option>

                                                                <option value="5565">Bangad Kupinde
                                                                    Nagarpalika (बनगाड कुपिन्ड़े
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5572">Banglachuli
                                                                    Gaunpalika (बंगलाचुली
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5671">Bannigadi
                                                                    Jaygadh
                                                                    Gaunpalika (बान्नीगढी जयगढ
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5320">Barabishe
                                                                    Nagarpalika (बाह्रबिसे
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5360">Baragadi
                                                                    Nagarpalika (बारागढी गाउँपालिका)
                                                                </option>

                                                                <option value="5099">Baraha
                                                                    Nagarpalika
                                                                    (बराह नगरपालिका)
                                                                </option>

                                                                <option value="5117">Barahapokhari
                                                                    Gaunpalika (बराहपोखरी
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5636">Barahataal
                                                                    Gaunpalika (बराहताल गाउँपालिका)
                                                                </option>

                                                                <option value="5236">Barahathawa
                                                                    Nagarpalika (बरहथवा नगरपालिका)
                                                                </option>

                                                                <option value="5653">Barbardiya
                                                                    Nagarpalika (बरबर्दिया
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5467">Bardaghat
                                                                    Nagarpalika (बर्दघाट नगरपालिका)
                                                                </option>

                                                                <option value="5706">Bardagoriya
                                                                    Gaunpalika (बर्दगोरिया
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5840">Bardibas
                                                                    Nagarpalika (बर्दीबास नगरपालिका)
                                                                </option>

                                                                <option value="5618">Barekot
                                                                    Gaunpalika
                                                                    (बारेकोट गाउँपालिका)
                                                                </option>

                                                                <option value="5036">Barhadashi
                                                                    Gaupalika (बाह्रदशी गाउँपालिका)
                                                                </option>

                                                                <option value="5163">Bariyar Patti
                                                                    Gaunpalika (बरियार पट्टि
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5100">Barju
                                                                    Gaunpalika
                                                                    (बर्जु गाउँपालिका)
                                                                </option>

                                                                <option value="5254">Basbariya
                                                                    Gaunpalika (बसबरिया गाउँपालिका)
                                                                </option>

                                                                <option value="5654">Basgadhi
                                                                    Nagarpalika (बासगढी नगरपालिका)
                                                                </option>

                                                                <option value="5829">Bateshwor
                                                                    Nagarpalika (बटेस्वोर
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5869">Baudimaai
                                                                    Nagarpalika (बौदीमाइ नगरपालिका)
                                                                </option>

                                                                <option value="5743">Bedkot
                                                                    Nagarpalika
                                                                    (बेदकोट नगरपालिका)
                                                                </option>

                                                                <option value="5449">Beganaskali
                                                                    Gaunpalika (बगनासकाली
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5084">Bekbari
                                                                    Nagrpalika
                                                                    (बेलबारी नगरपालिका)
                                                                </option>

                                                                <option value="5739">Belauri
                                                                    Nagarpalika
                                                                    (बेलौरी नगरपालिका)
                                                                </option>

                                                                <option value="5738">Beldadi
                                                                    Gaunpalika
                                                                    (बेलडाडी गाउँपालिका)
                                                                </option>

                                                                <option value="5808">Belhi Chapena
                                                                    Gaunpalika (बेल्ही चपेना
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5136">Belka
                                                                    Nagarpalika
                                                                    (बेलका नगरपालिका)
                                                                </option>

                                                                <option value="5271">Belkotgadi
                                                                    Nagarpalika (बेलकोटगढी
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5509">Beni
                                                                    Nagarpalika
                                                                    (बेनी नगरपालिका)
                                                                </option>

                                                                <option value="5262">Benighat Rorang
                                                                    Gaunpalika (बेनीघाट रोरांङ्ग
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5522">Berang
                                                                    Gaunpalika
                                                                    (बरेंङ् गाउँपालिका)
                                                                </option>

                                                                <option value="5402">Besishahar
                                                                    Nagarpalika (बेसीसहर नगरपालिका)
                                                                </option>

                                                                <option value="5306">Bethanchok
                                                                    Gaunpalika (बेथानचोक गाउँपालिका)
                                                                </option>

                                                                <option value="5038">Bhadrapur
                                                                    Nagarpalika (भद्रपुर नगरपालिका)
                                                                </option>

                                                                <option value="5842">Bhagaha
                                                                    Nagarpalika
                                                                    (भगाहा नगरपालिका)
                                                                </option>

                                                                <option value="5164">Bhagawanpur
                                                                    Gaunpalika (भगवानपुर गाउँपालिका)
                                                                </option>

                                                                <option value="5629">Bhagawatimaai
                                                                    Gaunpalika (भगवतीमाई गाउँपालिका)
                                                                </option>

                                                                <option value="5735">Bhageswor
                                                                    Gaunpalika (भागेस्वोर
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5630">Bhairabi
                                                                    Gaunpalika
                                                                    (भैरबी गाउँपालिका)
                                                                </option>

                                                                <option value="5707">Bhajani
                                                                    Nagarpalika
                                                                    (भजनी नगरपालिका)
                                                                </option>

                                                                <option value="5289">Bhaktapur
                                                                    Nagarpalika (भक्तपुर नगरपालिका)
                                                                </option>

                                                                <option value="5417">Bhanu
                                                                    Nagarpalika
                                                                    (भानु नगरपालिका)
                                                                </option>

                                                                <option value="5380">Bharatpur
                                                                    Mahanagarpalika (भरतपुर
                                                                    महानगरपालिका)
                                                                </option>

                                                                <option value="5619">Bheri
                                                                    Nagarpalika
                                                                    (भेरी नगरपालिका)
                                                                </option>

                                                                <option value="5638">Bheriganga
                                                                    Nagarpalika (भेरीगंगा नगरपालिका)
                                                                </option>

                                                                <option value="5418">Bhimad
                                                                    Nagarpalika
                                                                    (भिमाद नगरपालिका)
                                                                </option>

                                                                <option value="5740">Bhimdatta
                                                                    Nagarpalika (भिमदत्त नगरपालिका)
                                                                </option>

                                                                <option value="5176">Bhimeshor
                                                                    Nagarpalika (भिमेस्वोर
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5328">Bhimphedi
                                                                    Gaunpalika (भिमफेदी गाउँपालिका)
                                                                </option>

                                                                <option value="5391">Bhimsen
                                                                    Gaunpalika
                                                                    (भिमसेन गाउँपालिका)
                                                                </option>

                                                                <option value="5429">Bhirkot
                                                                    Nagarpalika
                                                                    (भिरकोट नगरपालिका)
                                                                </option>

                                                                <option value="5063">Bhojpur
                                                                    Nagarpalika
                                                                    (भोजपुर नगरपालिका)
                                                                </option>

                                                                <option value="5101">Bhokraha
                                                                    Narsingh
                                                                    Gaunpalika (भोक्रहा नरसिंह
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5048">Bhotekhola
                                                                    Gaunpalika (भोटेखोला गाउँपालिका)
                                                                </option>

                                                                <option value="5316">Bhotekoshi
                                                                    Gaunpalika (भोटेकोशी गाउँपालिका)
                                                                </option>

                                                                <option value="5535">Bhume
                                                                    Gaunpalika
                                                                    (भूमे गाउँपालिका)
                                                                </option>

                                                                <option value="5457">Bhumikastan
                                                                    Nagarpalika (भूमिकास्थान
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5307">Bhumlu
                                                                    Gaunpalika
                                                                    (भुम्लु गाउँपालिका)
                                                                </option>

                                                                <option value="5834">Bideha
                                                                    Nagarpalika
                                                                    (विदेह नगरपालिका)
                                                                </option>

                                                                <option value="5274">Bidur
                                                                    Nagarpalika
                                                                    (बिदुर नगरपालिका)
                                                                </option>

                                                                <option value="5178">Bigu Gaunpalika
                                                                    (बिगु गाउँपालिका)
                                                                </option>

                                                                <option value="5529">Bihadi
                                                                    Gaunpalika
                                                                    (बिहादी गाउँपालिका)
                                                                </option>

                                                                <option value="5499">Bijayenagar
                                                                    Gaunpalika (बिजयनगर गाउँपालिका )
                                                                </option>

                                                                <option value="5472">Binayi Triveni
                                                                    Gaunpalika (विनयी त्रिवेणी
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5372">Bindabasini
                                                                    Gaunpalika (बिन्दबासिनी
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5089">Biratnagar
                                                                    Mahanagarpalika (बिराटनगर
                                                                    महानगरपालिका)
                                                                </option>

                                                                <option value="5637">Birendranagar
                                                                    Nagarpalika (बिरेन्द्रनगर
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5888">Birgunj
                                                                    Mahanagarpalika (बिरगंज
                                                                    महानगरपालिका)
                                                                </option>

                                                                <option value="5040">Birtamod
                                                                    Nagarpalika (बिर्तामोड
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5431">Biruwa
                                                                    Gaunpalika
                                                                    (बिरुवा गाउँपालिका)
                                                                </option>

                                                                <option value="5257">Bishnu
                                                                    Gaunpalika
                                                                    (बिष्णु गाउँपालिका)
                                                                </option>

                                                                <option value="5168">Bishnupur
                                                                    Gaunpalika (बिष्णुपुर
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5814">Bishnupur
                                                                    Gaunpalika (बिष्णुपुर
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5880">Bisrampur
                                                                    Gaunpalika (बिस्रामपुर
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5686">Bittharchir
                                                                    Gaunpalika (बित्थडचिर
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5809">Bode Barsaien
                                                                    Nagarpalika (बोदे बरसाईन
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5694">Bogatan
                                                                    Gaunpalika
                                                                    (बोगटान गाउँपालिका)
                                                                </option>

                                                                <option value="5255">Bramhapuri
                                                                    Gaunpalika (ब्रम्हापुरी
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5875">Brindaban
                                                                    Nagarpalika (वृन्दाबन नगरपालिका)
                                                                </option>

                                                                <option value="5037">Buddha Shanti
                                                                    Gaunopalika (बुद्धशान्ति
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5495">Buddhabhumi
                                                                    Nagarpalika (बुद्धभुमि
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5286">Budhanilkantha
                                                                    Nagarpalika (बुढानिलकण्ठ
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5083">Budiganga
                                                                    Gaunpalika (बुढीगंगा गाउँपालिका)
                                                                </option>

                                                                <option value="5662">Budiganga
                                                                    Gaunpalika (बुढीगंगा नगरपालिका)
                                                                </option>

                                                                <option value="5663">Budinanda
                                                                    Gaunpalika (बुढीनन्दा नगरपालिका)
                                                                </option>

                                                                <option value="5469">Bulingtar
                                                                    Gaunpalika (बुलिंङ्टार
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5684">Bungal
                                                                    Nagarpalika
                                                                    (बुंगल नगरपालिका)
                                                                </option>

                                                                <option value="5464">Bungdikali
                                                                    Gaunpalika (बुङ्दीकाली
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5482">Butwal
                                                                    Upamahanagarpalika (बुटवल
                                                                    उपमहानगरपालिका)
                                                                </option>

                                                                <option value="5713">Byas Gaunpalika
                                                                    (ब्यास गाउँपालिका)
                                                                </option>

                                                                <option value="5420">Byas
                                                                    Nagarpalika
                                                                    (ब्यास नगरपालिका)
                                                                </option>

                                                                <option value="5679">
                                                                    Chabispathibhera
                                                                    Gaunpalika (छबिसपाथीभेरा
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5045">Chainpur
                                                                    Nagarpalika (चैनपुर नगरपालिका)
                                                                </option>

                                                                <option value="5609">Chakheli
                                                                    Gaunpalika
                                                                    (चखेली गाउँपालिका)
                                                                </option>

                                                                <option value="5250">Chakragatta
                                                                    Gaunpalika (चक्रघट्ट गाउँपालिका)
                                                                </option>

                                                                <option value="5395">Chame
                                                                    Gaunpalika
                                                                    (चामे गाउँपालिका)
                                                                </option>

                                                                <option value="5123">Champadevi
                                                                    Gaunpalika (चम्पादेवी
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5623">Chamunda
                                                                    Bindrasaini Gaunpalika (चामुण्डा
                                                                    बिन्द्रासैनि नगरपालिका)
                                                                </option>

                                                                <option value="5592">Chandannath
                                                                    Nagarpalika (चन्दननाथ नगरपालिका)
                                                                </option>

                                                                <option value="5281">Chandragiri
                                                                    Nagarpalika (चन्द्रागिरी
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5436">Chandrakot
                                                                    Gaunpalika (चन्द्रकोट
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5234">Chandranagar
                                                                    Gaunpalika (चन्द्रनगर
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5339">Chandrapur
                                                                    Nagarpalika (चन्द्रपुर
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5288">Changunarayan
                                                                    Nagarpalika (चाँगुनारायण
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5426">Chapakot
                                                                    Nagarpalika (चापाकोट नगरपालिका)
                                                                </option>

                                                                <option value="5579">Charka Tongsong
                                                                    Gaunpalika (छार्का तोङ्सोङ्
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5054">Chathar
                                                                    Gaunpalika
                                                                    (छथर गाउँपालिका)
                                                                </option>

                                                                <option value="5070">Chathar Jorpati
                                                                    Gaunpalika (छथर जोरपाटी
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5437">Chatrakot
                                                                    Gaunpalika (छत्रकोट गाउँपालिका)
                                                                </option>

                                                                <option value="5069">Chaubise
                                                                    Gaunpalika
                                                                    (चौबिसे गाउँपालिका)
                                                                </option>

                                                                <option value="5132">Chaudandi
                                                                    Nagarpalika (चौदणडी नगरपालिका)
                                                                </option>

                                                                <option value="5634">Chaukune
                                                                    Gaunpalika
                                                                    (चौकुने गाउँपालिका)
                                                                </option>

                                                                <option value="5667">Chaurapati
                                                                    Gaunpalika (चौरपाटी गाउँपालिका)
                                                                </option>

                                                                <option value="5531">Chaurhajari
                                                                    Nagarpalika (चौरहजारी नगरपालिका)
                                                                </option>

                                                                <option value="5299">Chaurideurali
                                                                    Gaunpalika (चौरीदेउराली
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5311">Chautara
                                                                    Sangachokgadi Nagarpalika
                                                                    (चौतारा
                                                                    साँगाचोकगढी नगरपालिका)
                                                                </option>

                                                                <option value="5587">Chayanath Rara
                                                                    Nagarpalika (छायानाथ रारा
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5615">Chedagad
                                                                    Nagarpalika (छेडागाड नगरपालिका)
                                                                </option>

                                                                <option value="5455">Chhatradev
                                                                    Gaunpalika (छत्रदेव गाउँपालिका)
                                                                </option>

                                                                <option value="5561">Chhatreswori
                                                                    Gaunpalika (छत्रेश्वरी
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5658">Chhedadaha
                                                                    Gaunpalika (छेददह गाउँपालिका)
                                                                </option>

                                                                <option value="5044">Chichila
                                                                    Gaunpalika
                                                                    (चिचिला गाउँपालिका)
                                                                </option>

                                                                <option value="5633">Chingad
                                                                    Gaunpalika
                                                                    (चिङ्गाड गाउँपालिका)
                                                                </option>

                                                                <option value="5124">Chingsakhugadi
                                                                    Gaunpalika (चिंशखुगढी
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5804">Chinnamasta
                                                                    Gaunpalika (छिन्नमस्ता
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5364">Chipaharmaai
                                                                    Gaunpalika (छिपहरमाइ गाउँपालिका)
                                                                </option>

                                                                <option value="5822">Chireswor Nath
                                                                    Nagarpalika (क्षिरेस्वोरनाथ
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5019">Chulachuli
                                                                    Nagarpalika (चुलाचुली नगरपालिका)
                                                                </option>

                                                                <option value="5388">Chumnumri
                                                                    Gaunpalika (चुमनुम्रि
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5701">Chure
                                                                    Gaunpalika
                                                                    (चुरे गाउँपालिका)
                                                                </option>

                                                                <option value="5644">Daduwa
                                                                    Gaunpalika
                                                                    (डडुवा गाउँपालिका)
                                                                </option>

                                                                <option value="5668">Dakari
                                                                    Gaunpalika
                                                                    (ढकारी गाउँपालिका)
                                                                </option>

                                                                <option value="5805">Dakneswori
                                                                    Nagarpalika (डाक्नेस्वोरी
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5284">Dakshinkali
                                                                    Nagarpalika (दक्षिणकाली
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5504">Dalame
                                                                    Gaunpalika
                                                                    (दालामे गाउँपालिका)
                                                                </option>

                                                                <option value="5626">Dallu
                                                                    Nagarpalika
                                                                    (दुल्लु नगरपालिका)
                                                                </option>

                                                                <option value="5035">Damak
                                                                    Nagarpalika
                                                                    (दमक नगरपालिका)
                                                                </option>

                                                                <option value="5571">Dangisaran
                                                                    Gaunpalika (दंगीसरण गाउँपालिका)
                                                                </option>

                                                                <option value="5564">Darma
                                                                    Gaunpalika
                                                                    (दार्मा गाउँपालिका)
                                                                </option>

                                                                <option value="5720">Dasrathchand
                                                                    Nagarpalika (दसरथचन्द नगरपालिका)
                                                                </option>

                                                                <option value="5866">Debahi Gonahi
                                                                    Nagarpalika (देबाही गोनाही
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5020">Deumai
                                                                    Nagarpalika
                                                                    (देउमाइ नगरपालिका)
                                                                </option>

                                                                <option value="5481">Devadaha
                                                                    Nagarpalika (देवदह नगरपालिका)
                                                                </option>

                                                                <option value="5463">Devchuli
                                                                    Nagarpalika (देवचुली नगरपालिका)
                                                                </option>

                                                                <option value="5415">Devghat
                                                                    Gaunpalika
                                                                    (देवघाट गाउँपालिका)
                                                                </option>

                                                                <option value="5354">Devtal
                                                                    Gaunpalika
                                                                    (देवताल गाउँपालिका)
                                                                </option>

                                                                <option value="5097">Dewanganj
                                                                    Gaunpalika (देवानगन्ज
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5705">Dhanagadi
                                                                    Upamahanagarpalika (धनगढी
                                                                    उपमहानगरपालिका)
                                                                </option>

                                                                <option value="5251">Dhanakaul
                                                                    Gaunpalika (धनकौल गाउँपालिका)
                                                                </option>

                                                                <option value="5827">Dhanauji
                                                                    Gaunpalika
                                                                    (धनौजी गाउँपालिका)
                                                                </option>

                                                                <option value="5160">Dhangadimaai
                                                                    Nagarpalika (धनगढीमाई नगरपालिका)
                                                                </option>

                                                                <option value="5071">Dhankuta
                                                                    Nagarpalika (धनकुटा नगरपालिका )
                                                                </option>

                                                                <option value="5081">Dhanpalthan
                                                                    Gaunpalika (धनपालथान गाउँपालिका
                                                                    )
                                                                </option>

                                                                <option value="5826">Dhanushadham
                                                                    Nagarpalika (धनुषाधाम नगरपालिका)
                                                                </option>

                                                                <option value="5098">Dharan
                                                                    Upamahanagapalika (धरान
                                                                    उपमहानगरपालिका)
                                                                </option>

                                                                <option value="5389">Dharche
                                                                    Gaunpalika
                                                                    (धार्चे गाउँपालिका)
                                                                </option>

                                                                <option value="5046">Dharmadevi
                                                                    Nagarpalika (धर्मदेवी नगरपालिका)
                                                                </option>

                                                                <option value="5508">Dhawalagiri
                                                                    Gaunpalika (धवलागिरि गाउँपालिका)
                                                                </option>

                                                                <option value="5366">Dhobini
                                                                    Gaunpalika
                                                                    (धोबिनी गाउँपालिका)
                                                                </option>

                                                                <option value="5516">Dhorpatan
                                                                    Nagarpalika (ढोरपाटन नगरपालिका)
                                                                </option>

                                                                <option value="5301">Dhulikhel
                                                                    Nagarpalika (धुलिखेल नगरपालिका)
                                                                </option>

                                                                <option value="5625">Dhungeswor
                                                                    Gaunpalika (ढुंगेश्रवर
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5897">Dhunibeshi
                                                                    Nagarpalika (धुनीबेशी नगरपालिका)
                                                                </option>

                                                                <option value="5438">Dhurkot
                                                                    Gaunpalika
                                                                    (धुर्कोट गाउँपालिका)
                                                                </option>

                                                                <option value="5719">Dilasaini
                                                                    Gaunpalika (डीलासैनी गाउँपालिका)
                                                                </option>

                                                                <option value="5691">Dipayel Silgadi
                                                                    Nagarpalika (दिपायल सिलगढी
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5116">Diprung
                                                                    Gaunpalika
                                                                    (दिप्रुंङ् गाउँपालिका)
                                                                </option>

                                                                <option value="5721">Dogadakedar
                                                                    Gaunpalika (दोगडाकेदार
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5582">Dolpobuddha
                                                                    Gaunpalika (डोल्पोबुद्ध
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5184">Doramba
                                                                    Gaunpalika
                                                                    (दोरम्बा गाउँपालिका)
                                                                </option>

                                                                <option value="5401">Dordi
                                                                    Gaunpalika
                                                                    (दोर्दी गाउँपालिका)
                                                                </option>

                                                                <option value="5106">Dudhakaushika
                                                                    Gaunpalika (दुधकौशिका
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5193">Dudhauli
                                                                    Nagarpalika (दुधौलि नगरपालिका)
                                                                </option>

                                                                <option value="5400">Dudhpokhari
                                                                    Gaunpalika (दुधपोखरी गाउँपालिका)
                                                                </option>

                                                                <option value="5105">Dudkoshi
                                                                    Gaunpalika
                                                                    (दुधकोशी गाउँपालिका)
                                                                </option>

                                                                <option value="5096">Duhabi
                                                                    Nagarpalika
                                                                    (दुहबी नगरपालिका)
                                                                </option>

                                                                <option value="5711">Duhun
                                                                    Gaunpalika
                                                                    (दुहूँ गाउँपालिका)
                                                                </option>

                                                                <option value="5269">Dupcheswor
                                                                    Gaunpalika (दुप्चेस्वोर
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5865">Durga Bhagawati
                                                                    Gaunpalika (दुर्गा भगवती
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5683">Durgathali
                                                                    Gaunpalika (दुर्गाथली
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5002">Fakranlung
                                                                    Gaupalika (फक्ताङलुङ गाउँपालिका)
                                                                </option>

                                                                <option value="5012">Falelung
                                                                    Gaupalika
                                                                    (फालेलुङ गाउँपालिका)
                                                                </option>

                                                                <option value="5013">Falgunanda
                                                                    Gaupalika (फाल्गुनन्द
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5021">Farfokathum
                                                                    Gaupalika (फाकफोकथुम गाउँपालिका)
                                                                </option>

                                                                <option value="5868">Fatuwa Bijay
                                                                    Nagarpalika (फतुवा बिजय
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5014">Fidim
                                                                    Nagarpalika
                                                                    (फिदिम नगरपालिका)
                                                                </option>

                                                                <option value="5194">Fikal
                                                                    Gaunpalika
                                                                    (फिकल गाउँपालिका)
                                                                </option>

                                                                <option value="5003">Fungling
                                                                    Gaupalika
                                                                    (फुङ्लिङ गाउँपालिका)
                                                                </option>

                                                                <option value="5568">Gadawa
                                                                    Gaunpalika
                                                                    (गडवा गाउँपालिका)
                                                                </option>

                                                                <option value="5095">Gadi Gaunpalika
                                                                    (गढी गाउँपालिका )
                                                                </option>

                                                                <option value="5862">Gadimaai
                                                                    Nagarpalika (गढीमाई नगरपालिका)
                                                                </option>

                                                                <option value="5479">Gaidahawa
                                                                    Gaunpalika (गैडहवा गाउँपालिका)
                                                                </option>

                                                                <option value="5462">Gaindakot
                                                                    Nagarpalika (गैंडाकोट नगरपालिका)
                                                                </option>

                                                                <option value="5863">Gajura
                                                                    Nagarpalika
                                                                    (गजुरा नगरपालिका)
                                                                </option>

                                                                <option value="5892">Gajuri
                                                                    Gaunpalika
                                                                    (गजुरी गाउँपालिका)
                                                                </option>

                                                                <option value="5893">Galchi
                                                                    Gaunpalika
                                                                    (गल्छी गाउँपालिका)
                                                                </option>

                                                                <option value="5514">Galkot
                                                                    Nagarpalika
                                                                    (गल्कोट नगरपालिका)
                                                                </option>

                                                                <option value="5425">Galyang
                                                                    Nagarpalika
                                                                    (गल्यांग नगरपालिका)
                                                                </option>

                                                                <option value="5386">Gandaki
                                                                    Gaunpalika
                                                                    (गण्डकी गाउँपालिका)
                                                                </option>

                                                                <option value="5823">Ganeshman
                                                                    Charnath
                                                                    Nagarpalika (गणेशमान चारनाथ
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5891">Gangajamuna
                                                                    Gaunpalika (गंगाजमुना
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5732">Ganyapdhura
                                                                    Gaunpalika (गन्यापधुरा
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5336">Garuda
                                                                    Nagarpalika
                                                                    (गरुडा नगरपालिका)
                                                                </option>

                                                                <option value="5550">Gaumukhi
                                                                    Gaunpalika
                                                                    (गौमुखी गाउँपालिका)
                                                                </option>

                                                                <option value="5657">Gaumul
                                                                    Gaunpalika
                                                                    (गौमूल गाउँपालिका)
                                                                </option>

                                                                <option value="5864">Gaur
                                                                    Nagarpalika
                                                                    (गौर नगरपालिका)
                                                                </option>

                                                                <option value="5032">Gauradaha
                                                                    Nagarpalika (गौरादह नगरपालिका)
                                                                </option>

                                                                <option value="5699">Gauriganga
                                                                    Nagarpalika (गौरीगंगा नगरपालिका)
                                                                </option>

                                                                <option value="5033">Gauriganja
                                                                    Gaunpalika (गौरीगंज गाउँपालिका)
                                                                </option>

                                                                <option value="5173">Gaurishankar
                                                                    Gaunpalika (गौरीशंकर गाउँपालिका)
                                                                </option>

                                                                <option value="5217">Gaushala
                                                                    Nagarpalika (गौशाला नगरपालिका)
                                                                </option>

                                                                <option value="5650">Geruwa
                                                                    Gaunpalika
                                                                    (गेरुवा गाउँपालिका)
                                                                </option>

                                                                <option value="5502">Gharpaghod
                                                                    Gaunpalika (घरपझोड गाउँपालिका)
                                                                </option>

                                                                <option value="5551">Ghimruk
                                                                    Gaunpalika
                                                                    (झिमरुक गाउँपालिका)
                                                                </option>

                                                                <option value="5414">Ghiring
                                                                    Gaunpalika
                                                                    (घिरिंङ् गाउँपालिका)
                                                                </option>

                                                                <option value="5700">Ghodaghodi
                                                                    Nagarpalika (घोडाघोडी नगरपालिका)
                                                                </option>

                                                                <option value="5698">Godawari
                                                                    Nagarpalika (गोदावरी नगरपालिका)
                                                                </option>

                                                                <option value="5293">Godawari
                                                                    Nagarpalika (गोदावरी नगरपालिका)
                                                                </option>

                                                                <option value="5249">Godeta
                                                                    Nagarpalika
                                                                    (गोडेटा नगरपालिका)
                                                                </option>

                                                                <option value="5280">Gokarneshor
                                                                    Nagarpalika (गोकर्णस्वोर
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5183">Gokulganga
                                                                    Gaunpalika (गोकुलगंगा
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5190">Golanjar
                                                                    Gaunpalika
                                                                    (गोलान्जोर गाउँपालिका)
                                                                </option>

                                                                <option value="5159">Golbazar
                                                                    Nagarpalika (गोलबजार नगरपालिका)
                                                                </option>

                                                                <option value="5569">Gorahi
                                                                    Upamahanagarpalika (घोराही
                                                                    उपमहानगरपालिका)
                                                                </option>

                                                                <option value="5387">Gorakha
                                                                    Nagarpalika
                                                                    (गोरखा नगरपालिका)
                                                                </option>

                                                                <option value="5899">Gosaikund
                                                                    Gaunpalika (गोसाईकुण्ड
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5079">Gramtham
                                                                    Gaunpalika
                                                                    (ग्रामथाम गाउँपालिका )
                                                                </option>

                                                                <option value="5649">Gulariya
                                                                    Nagarpalika (गुलरिया नगरपालिका)
                                                                </option>

                                                                <option value="5435">Gulmidarbar
                                                                    Gaunpalika (गुल्मीदरबार
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5622">Gurans
                                                                    Gaunpalika
                                                                    (गुराँस गाउँपालिका)
                                                                </option>

                                                                <option value="5632">Gurbakot
                                                                    Nagarpalika (गुर्बाकोट
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5610">Guthichaur
                                                                    Gaunpalika (ताजाकोट गाउँपालिका)
                                                                </option>

                                                                <option value="5591">Guthichaur
                                                                    Gaunpalika (गुठिचौर गाउँपालिका)
                                                                </option>

                                                                <option value="5191">Gyanglekh
                                                                    Gaunpalika (घ्यांङ्लेख
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5322">Halambu
                                                                    Gaunpalika
                                                                    (हेलम्बु गाउँपालिका)
                                                                </option>

                                                                <option value="5042">Haldibari
                                                                    Nagarpalika (हल्दीबारी
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5121">Haleshi
                                                                    Tuwachong
                                                                    Gaunpalika (हलेशी तुवाचुंङ्
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5837">Hansapur
                                                                    Nagarpalika (हंसपुर नगरपालिका)
                                                                </option>

                                                                <option value="5818">Hanumannagar
                                                                    Kankalini Nagarpalika (हनुमाननगर
                                                                    कन्कालिनी नगरपालिका)
                                                                </option>

                                                                <option value="5246">Hariban
                                                                    Nagarpalika
                                                                    (हरिबन नगरपालिका)
                                                                </option>

                                                                <option value="5197">Hariharpur
                                                                    Gaunpalika (हरिहरपुरगढी
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5103">Harinagar
                                                                    Gaunpalika (हरिनगर गाउँपालिका)
                                                                </option>

                                                                <option value="5432">Harinas
                                                                    Gaunpalika
                                                                    (हरिनास गाउँपालिका)
                                                                </option>

                                                                <option value="5258">Haripur
                                                                    Nagarpalika
                                                                    (हरिपुर नगरपालिका)
                                                                </option>

                                                                <option value="5259">Haripurba
                                                                    Nagarpalika (हरिपुर्बा
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5067">Hatuwagadi
                                                                    Gaunpalika (हतुवागढी गाउँपालिका)
                                                                </option>

                                                                <option value="5332">Hetauda
                                                                    Upamahanagarpalika (हेटौडा
                                                                    उपमहानगरपालिका)
                                                                </option>

                                                                <option value="5017">Hilihang
                                                                    Gaupalika
                                                                    (हिलीहांङ गाउँपालिका)
                                                                </option>

                                                                <option value="5597">Hima Gaunpalika
                                                                    (हिमा गाउँपालिका)
                                                                </option>

                                                                <option value="5665">Himali
                                                                    Gaunpalika
                                                                    (हिमाली गाउँपालिका)
                                                                </option>

                                                                <option value="5475">Hupsekot
                                                                    Gaunpalika
                                                                    (हुप्सेकोट गाउँपालिका)
                                                                </option>

                                                                <option value="5377">Ichchhakamana
                                                                    Gaunpalika (इच्छाकामना
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5018">Illam
                                                                    Nagarpalika
                                                                    (इलाम नगरपालिका)
                                                                </option>

                                                                <option value="5323">Indrasarobar
                                                                    Gaunpalika (इन्द्रसरोबर
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5318">Indrawati
                                                                    Gaunpalika (इन्द्रवती
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5093">Inuruwa
                                                                    Nagarpalika
                                                                    (इनरुवा नगरपालिका)
                                                                </option>

                                                                <option value="5433">Ishma
                                                                    Gaunpalika
                                                                    (इस्मा गाउँपालिका)
                                                                </option>

                                                                <option value="5860">Ishnath
                                                                    Nagarpalika
                                                                    (इशानाथ नगरपालिका)
                                                                </option>

                                                                <option value="5230">Ishworpur
                                                                    Nagarpalika (इश्वोरपुर
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5092">Itahari
                                                                    Upamahanagarpalika (इटहरी
                                                                    उपमहानगरपालिका)
                                                                </option>

                                                                <option value="5365">Jagaranathpur
                                                                    Gaunpalika (जगरनाथपुर
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5580">Jagdulla
                                                                    Gaunpalika
                                                                    (जगदुल्ला गाउँपालिका)
                                                                </option>

                                                                <option value="5660">Jagganath
                                                                    Gaunpalika (जगन्नाथ गाउँपालिका)
                                                                </option>

                                                                <option value="5080">Jahada
                                                                    Gaunpalika
                                                                    (जहदा गाउँपालिका )
                                                                </option>

                                                                <option value="5515">Jaimuni
                                                                    Gaunpalika
                                                                    (जैमुनि नगरपालिका)
                                                                </option>

                                                                <option value="5524">Jaljala
                                                                    Gaunpalika
                                                                    (जलजला गाउँपालिका)
                                                                </option>

                                                                <option value="5643">Janaki
                                                                    Gaunpalika
                                                                    (जानकी गाउँपालिका)
                                                                </option>

                                                                <option value="5702">Janaki
                                                                    Gaunpalika
                                                                    (जानकी गाउँपालिका)
                                                                </option>

                                                                <option value="5824">Janaknandini
                                                                    Gaunpalika (जनकनन्दिनी
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5825">Janakpur
                                                                    Upamahanagarpalika (जनकपुर
                                                                    उपमहानगरपालिका)
                                                                </option>

                                                                <option value="5115">Jantedhunga
                                                                    Gaunpalika (जन्तेढुंगा
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5218">Jasleshwor
                                                                    Nagarpalika (जलेस्वोर नगरपालिका)
                                                                </option>

                                                                <option value="5680">Jay Prithivi
                                                                    Nagarpalika (जय पृथ्वी
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5882">Jeerabhawani
                                                                    Gaunpalika (जिराभवानी
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5034">Jhapa
                                                                    Gaunpalika
                                                                    (झापा गाउँपालिका)
                                                                </option>

                                                                <option value="5174">Jiri
                                                                    Nagarpalika
                                                                    (जिरी नगरपालिका)
                                                                </option>

                                                                <option value="5353">Jitpursimara
                                                                    Upamahanagarpalika (जितपुरसिमरा
                                                                    उपमहानगरपालिका)
                                                                </option>

                                                                <option value="5690">Jorayal
                                                                    Gaunpalika
                                                                    (जोरायल गाउँपालिका)
                                                                </option>

                                                                <option value="5703">Joshipur
                                                                    Gaunpalika
                                                                    (जोशीपुर् गाउँपालिका)
                                                                </option>

                                                                <option value="5312">Jugal
                                                                    Gaunpalika
                                                                    (जुगल गाउँपालिका)
                                                                </option>

                                                                <option value="5616">Junichade
                                                                    Gaunpalika (जुनीचांदे
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5894">Jwalamukhi
                                                                    Gaunpalika (ज्वालामुखी
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5689">K I C
                                                                    Gaunpalika
                                                                    (के आइ सी गाउँपालिका)
                                                                </option>

                                                                <option value="5399">Kabholasothar
                                                                    Gaunpalika (कब्होलाशोथार
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5247">Kabilashi
                                                                    Nagarpalika (कबिलासी नगरपालिका)
                                                                </option>

                                                                <option value="5029">Kachanakawal
                                                                    Gaupalika (कचनकवल गाउँपालिका)
                                                                </option>

                                                                <option value="5277">Kageshwori
                                                                    Manahara
                                                                    Nagarpalika (कगेश्वोरी मनहरा
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5578">Kaike
                                                                    Gaunpalika
                                                                    (काईके गाउँपालिका)
                                                                </option>

                                                                <option value="5697">Kailari
                                                                    Gaunpalika
                                                                    (कैलारी गाउँपालिका)
                                                                </option>

                                                                <option value="5324">Kailash
                                                                    Gaunpalika
                                                                    (कैलाश गाउँपालिका)
                                                                </option>

                                                                <option value="5265">Kakani
                                                                    Gaunpalika
                                                                    (ककनी गाउँपालिका)
                                                                </option>

                                                                <option value="5351">Kalaiya
                                                                    Upamahanagarpalika (कल्हैया
                                                                    उपनगरपालिका)
                                                                </option>

                                                                <option value="5434">Kaligandaki
                                                                    Gaunpalika (कालीगण्डकी
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5424">Kaligandaki
                                                                    Gaunpalika (कालीगण्डकी
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5598">Kalika
                                                                    Gaunpalika
                                                                    (कालिका गाउँपालिका)
                                                                </option>

                                                                <option value="5378">Kalika
                                                                    Nagarpalika
                                                                    (कालिका नगरपालिका)
                                                                </option>

                                                                <option value="5881">Kalikamaai
                                                                    Gaunpalika (कालिकामाइ
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5559">Kalimati
                                                                    Gaunpalika
                                                                    (कालिमाटी गाउँपालिका)
                                                                </option>

                                                                <option value="5172">Kalinchok
                                                                    Gaunpalika (कालिन्चोक
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5158">Kalyanpur
                                                                    Nagarpalika (कल्याणपुर
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5031">Kamal
                                                                    Gaunpalika
                                                                    (कमल गाउँपालिका)
                                                                </option>

                                                                <option value="5821">Kamala
                                                                    Nagarpalika
                                                                    (कमला नगरपालिका)
                                                                </option>

                                                                <option value="5189">Kamalamaai
                                                                    Nagarpalika (कमलामाइ नगरपालिका)
                                                                </option>

                                                                <option value="5666">Kamalbazar
                                                                    Nagarpalika (कमलबजार नगरपालिका)
                                                                </option>

                                                                <option value="5590">Kanaka Sundari
                                                                    Gaunpalika (कनका सुन्दरी
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5477">Kanchan
                                                                    Gaunpalika
                                                                    (कन्चन गाउँपालिका)
                                                                </option>

                                                                <option value="5802">Kanchanrup
                                                                    Nagarpalika (कन्चनरुप नगरपालिका)
                                                                </option>

                                                                <option value="5030">Kankai
                                                                    Nagarpalika
                                                                    (कन्काई नगरपालिका)
                                                                </option>

                                                                <option value="5077">Kanpokhari
                                                                    Gaunpalika (कानपोखरी गाउँपालिका
                                                                    )
                                                                </option>

                                                                <option value="5492">Kapilbastu
                                                                    Nagarpalika (कपिलवस्तु
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5558">Kapurkot
                                                                    Gaunpalika
                                                                    (कपुरकोट गाउँपालिका)
                                                                </option>

                                                                <option value="5350">Karaiyamaai
                                                                    Gaunpalika (करैयामाइ गाउँपालिका)
                                                                </option>

                                                                <option value="5819">Karjannha
                                                                    Nagarpalika (कर्जन्हा नगरपालिका)
                                                                </option>

                                                                <option value="5076">Katahari
                                                                    Gaunpalika
                                                                    (कटहरि गाउँपालिका )
                                                                </option>

                                                                <option value="5861">Katahariya
                                                                    Nagarpalika (कटहरिया नगरपालिका)
                                                                </option>

                                                                <option value="5131">Katari
                                                                    Nagarpalika
                                                                    (कटारी नगरपालिका)
                                                                </option>

                                                                <option value="5513">Kathekhola
                                                                    Gaunpalika (काठेखोला गाउँपालिका)
                                                                </option>

                                                                <option value="5278">Kathmandu
                                                                    Mahanagarpalika (काठमाडौँ
                                                                    महानगरपालिका)
                                                                </option>

                                                                <option value="5248">Kaudena
                                                                    Gaunpalika
                                                                    (कौडेना गाउँपालिका)
                                                                </option>

                                                                <option value="5461">Kawasoti
                                                                    Nagarpalika (कावासोती नगरपालिका)
                                                                </option>

                                                                <option value="5677">Kedarsyu
                                                                    Gaunpalika
                                                                    (केदारस्यु गाउँपालिका)
                                                                </option>

                                                                <option value="5078">Kerabari
                                                                    Gaunpalika
                                                                    (केराबारी गाउँपालिका )
                                                                </option>

                                                                <option value="5599">Khadachakra
                                                                    Nagarpalika (ख़ाडाचक्र नगरपालिका)
                                                                </option>

                                                                <option value="5182">Khadadevi
                                                                    Gaunpalika (खाडादेवी गाउँपालिका)
                                                                </option>

                                                                <option value="5803">Khadak
                                                                    Nagarpalika
                                                                    (खडक नगरपालिका)
                                                                </option>

                                                                <option value="5379">Khairahani
                                                                    Nagarpalika (खैरहनि नगरपालिका)
                                                                </option>

                                                                <option value="5642">Khajura
                                                                    Gaunpalika
                                                                    (खजुरा गाउँपालिका)
                                                                </option>

                                                                <option value="5104">Khambu
                                                                    Pasanglamhu
                                                                    Gaunpalika (खुम्बु पासांगलाम्हु
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5043">Khandbari
                                                                    Nagarpalika (खांदबारी नगरपालिका)
                                                                </option>

                                                                <option value="5298">Khanikhola
                                                                    Gaunpalika (खानीखोला गाउँपालिका)
                                                                </option>

                                                                <option value="5890">Khaniyabas
                                                                    Gaunpalika (खनियाबास गाउँपालिका)
                                                                </option>

                                                                <option value="5678">Khaptadchanna
                                                                    Gaunpalika (खप्तडछान्ना
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5608">Kharpunath
                                                                    Gaunpalika (खार्पूनाथ
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5586">Khatyang
                                                                    Gaunpalika
                                                                    (खत्याड गाउँपालिका)
                                                                </option>

                                                                <option value="5122">Khijidemba
                                                                    Gaunpalika (खिजीदेम्बा
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5114">Khotehang
                                                                    Gaunpalika (खोटेहांङ्
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5266">Kispang
                                                                    Gaunpalika
                                                                    (किस्पांग गाउँपालिका)
                                                                </option>

                                                                <option value="5352">Kohalbi
                                                                    Nagarpalika
                                                                    (कोहल्बी नगरपालिका)
                                                                </option>

                                                                <option value="5641">Kohalpur
                                                                    Nagarpalika (कोहलपुर नगरपालिका)
                                                                </option>

                                                                <option value="5292">Konjayosom
                                                                    Gaunpalika (कोंन्जयोसोम
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5113">Kopilasgadi
                                                                    Gaunpalika (कोपिलासगढी
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5094">Koshi Gaupalika
                                                                    (कोशी गाउँपालिका )
                                                                </option>

                                                                <option value="5478">Kotahimaai
                                                                    Gaunpalika (कोटहिमाई गाउँपालिका)
                                                                </option>

                                                                <option value="5493">Krishna Nagar
                                                                    Nagarpalika (कृष्णनगर नगरपालिका)
                                                                </option>

                                                                <option value="5736">Krishnapur
                                                                    Nagarpalika (कृष्णपुर नगरपालिका)
                                                                </option>

                                                                <option value="5279">Kritipur
                                                                    Nagarpalika (क्रितिपुर
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5560">Kumakh
                                                                    Gaunpalika
                                                                    (कुमाख गाउँपालिका)
                                                                </option>

                                                                <option value="5010">Kummayak
                                                                    Gaupalika
                                                                    (कुम्मायक गाउँपालिका)
                                                                </option>

                                                                <option value="5614">Kushe
                                                                    Gaunpalika
                                                                    (कुसे गाउँपालिका)
                                                                </option>

                                                                <option value="5523">Kushma
                                                                    Nagarpalika
                                                                    (कुस्मा नगरपालिका)
                                                                </option>

                                                                <option value="5167">Lahan
                                                                    Nagarpalika
                                                                    (लहान नगरपालिका)
                                                                </option>

                                                                <option value="5242">Lalabandi
                                                                    Nagarpalika (लालबन्दि नगरपालिका)
                                                                </option>

                                                                <option value="5742">Lalghadi
                                                                    Gaunpalika
                                                                    (लालझाडी गाउँपालिका)
                                                                </option>

                                                                <option value="5058">Laligurans
                                                                    Nagarpalika (लालीगुराँस
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5297">Lalitpur
                                                                    Mahangarpalika (ललितपुर
                                                                    महानगरपालिका)
                                                                </option>

                                                                <option value="5576">Lamahi
                                                                    Nagarpalika
                                                                    (लमही नगरपालिका)
                                                                </option>

                                                                <option value="5709">Lamki Chuha
                                                                    Nagarpalika (लम्की चुहा
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5833">Laxminiya
                                                                    Gaunpalika (लक्ष्मीनिया
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5166">Laxmipur Patari
                                                                    Gaunpalika (लक्ष्मीपुर पतारी
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5717">Lekam
                                                                    Gaunpalika
                                                                    (लेकम गाउँपालिका)
                                                                </option>

                                                                <option value="5639">Lekbeshi
                                                                    Nagarpalika (लेकबेशी नगरपालिका)
                                                                </option>

                                                                <option value="5088">Letang
                                                                    Nagarpalika
                                                                    (लेटांङ् नगरपालिका)
                                                                </option>

                                                                <option value="5127">Likhu
                                                                    Gaunpalika
                                                                    (लिखु गाउँपालिका)
                                                                </option>

                                                                <option value="5109">Likhupike
                                                                    Gaunpalika (लिखुपिके गाउँपालिका)
                                                                </option>

                                                                <option value="5187">Likhutamakoshi
                                                                    Gaunpalika (लिखु तामाकोशी
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5273">Likhutamakoshi
                                                                    Gaunpalika (लिखुतामाकोशी
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5319">Lingsakhu
                                                                    Pakhar
                                                                    Gaunpalika (लिङ्सखु पाखर
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5846">Loharpatti
                                                                    Nagarpalika (लोहरपट्टी
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5506">Lomanthang
                                                                    Gaunpalika (लोमन्थांङ्
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5486">Lumbini
                                                                    Saskritik
                                                                    Nagarpalika (लुम्बिनी सास्कृतिक
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5545">Lungri
                                                                    Gaunpalika
                                                                    (लुङ्ग्री गाउँपालिका)
                                                                </option>

                                                                <option value="5022">Maai
                                                                    Nagarpalika
                                                                    (माइ नगरपालिका)
                                                                </option>

                                                                <option value="5409">Macchapuchhre
                                                                    Gaunpalika (माछापुच्छ्रे
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5439">Madane
                                                                    Gaunpalika
                                                                    (मदाने गाउँपालिका)
                                                                </option>

                                                                <option value="5870">Madhav Narayan
                                                                    Nagarpalika (माधब नारायण
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5655">Madhuban
                                                                    Nagarpalika (मधुबन नगरपालिका)
                                                                </option>

                                                                <option value="5470">Madhyabindu
                                                                    Nagarpalika (मध्यबिन्दु
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5403">Madhyanepal
                                                                    Nagarpalika (मध्यनेपाल
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5290">Madhyapur Thimi
                                                                    Nagarpalika (मध्यपुर थिमी
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5410">Madi Gaunpalika
                                                                    (मादी गाउँपालिका)
                                                                </option>

                                                                <option value="5542">Madi Gaunpalika
                                                                    (माडी गाउँपालिका)
                                                                </option>

                                                                <option value="5381">Madi
                                                                    Nagarpalika
                                                                    (माडी नगरपालिका)
                                                                </option>

                                                                <option value="5050">Madi
                                                                    Nagarpalika
                                                                    (मादी नगरपालिका)
                                                                </option>

                                                                <option value="5604">Mahabai
                                                                    Gaunpalika
                                                                    (महाबै गाउँपालिका)
                                                                </option>

                                                                <option value="5309">Mahabharat
                                                                    Gaunpalika (महाभारत गाउँपालिका)
                                                                </option>

                                                                <option value="5631">Mahabu
                                                                    Gaunpalika
                                                                    (महाबु गाउँपालिका)
                                                                </option>

                                                                <option value="5810">Mahadeva
                                                                    Gaunpalika
                                                                    (महादेवा गाउँपालिका)
                                                                </option>

                                                                <option value="5361">Mahagadimaai
                                                                    Naagrpalika (महागढीमाइ
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5741">Mahakali
                                                                    Nagarpalika (महाकाली नगरपालिका)
                                                                </option>

                                                                <option value="5714">Mahakali
                                                                    Nagarpalika (महाकाली नगरपालिका)
                                                                </option>

                                                                <option value="5108">Mahakulung
                                                                    Gaunpalika (महाकुलुंग
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5073">Mahalaxmi
                                                                    Nagarpalika (महालक्ष्मी
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5296">Mahalaxmi
                                                                    Nagarpalika (महालक्ष्मी
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5496">Maharajganja
                                                                    Nagarpalika (महाराजगंज
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5527">Mahashila
                                                                    Gaunpalika (महाशिला गाउँपालिका)
                                                                </option>

                                                                <option value="5225">Mahottari
                                                                    Gaunpalika (महोत्तरी गाउँपालिका)
                                                                </option>

                                                                <option value="5023">Maijog Mai
                                                                    Gaunpalika (माइजोगमाइ
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5049">Makalu
                                                                    Gaupalika
                                                                    (मकालु गाउँपालिका)
                                                                </option>

                                                                <option value="5329">Makawanpurgadi
                                                                    Gaunpalika (मकवानपुरगढी
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5458">Malarani
                                                                    Gaunpalika
                                                                    (मालारानी गाउँपालिका)
                                                                </option>

                                                                <option value="5440">Malika
                                                                    Gaunpalika
                                                                    (मालिका गाउँपालिका)
                                                                </option>

                                                                <option value="5511">Malika
                                                                    Gaunpalika
                                                                    (मालिका गाउँपालिका)
                                                                </option>

                                                                <option value="5716">Malikaarjun
                                                                    Gaunpalika (मालिकार्जुन
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5554">Mallarani
                                                                    Gaunpalika (मल्लरानी गाउँपालिका)
                                                                </option>

                                                                <option value="5330">Manahari
                                                                    Gaunpalika
                                                                    (मनहरी गाउँपालिका)
                                                                </option>

                                                                <option value="5844">Manara Sisawa
                                                                    Nagarpalika (मनरा शिसवा
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5555">Mandabi
                                                                    Gaunpalika
                                                                    (माण्डबी गाउँपालिका)
                                                                </option>

                                                                <option value="5308">Mandandeupur
                                                                    Nagarpalika (मण्डनदेउपुर
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5125">Manebhanjyang
                                                                    Gaunpalika (मानेभन्ज्याङ्
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5510">Mangala
                                                                    Gaunpalika
                                                                    (मंगला गाउँपालिका)
                                                                </option>

                                                                <option value="5672">Mangalsen
                                                                    Gaunpalika (मंगलसेन नगरपालिका)
                                                                </option>

                                                                <option value="5240">Manglawa
                                                                    Nagarpalika (मंलगवा नगरपालिका)
                                                                </option>

                                                                <option value="5295">Manhakal
                                                                    Gaunpalika
                                                                    (मंहङ्काल गाउँपालिका)
                                                                </option>

                                                                <option value="5024">Mansebung
                                                                    Gaunpalika (माङ्सेबुङ्
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5185">Manthali
                                                                    Nagarpalika (मन्थली नगरपालिका)
                                                                </option>

                                                                <option value="5483">Marchawari
                                                                    Gaunpalika (मर्चवारी गाउँपालिका)
                                                                </option>

                                                                <option value="5715">Marma
                                                                    Gaunpalika
                                                                    (मार्मा गाउँपालिका)
                                                                </option>

                                                                <option value="5685">Masta
                                                                    Gaunpalika
                                                                    (मस्टा गाउँपालिका)
                                                                </option>

                                                                <option value="5404">Masyangdi
                                                                    Gaunpalika (मस्याङ्दी
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5450">Mathagadi
                                                                    Gaunpalika (माथागढी गाउँपालिका)
                                                                </option>

                                                                <option value="5843">Matihani
                                                                    Nagarpalika (मटीहानी नगरपालिका)
                                                                </option>

                                                                <option value="5006">Maukhola
                                                                    Gaupalika
                                                                    (मौवाखोला गाउँपालिका)
                                                                </option>

                                                                <option value="5871">Maulapur
                                                                    Nagarpalika (मौलापुर नगरपालिका)
                                                                </option>

                                                                <option value="5484">Mayadevi
                                                                    Gaunpalika
                                                                    (मायादेवी गाउँपालिका)
                                                                </option>

                                                                <option value="5497">Mayadevi
                                                                    Gaunpalika
                                                                    (मायादेवी गाउँपालिका)
                                                                </option>

                                                                <option value="5039">Mechinagar
                                                                    Nagarpalika (मेचीनगर नगरपालिका)
                                                                </option>

                                                                <option value="5317">Melamchi
                                                                    Nagarpalika (मेलम्ची नगरपालिका)
                                                                </option>

                                                                <option value="5725">Melauli
                                                                    Nagarpalika
                                                                    (मेलौली नगरपालिका)
                                                                </option>

                                                                <option value="5673">Mellekh
                                                                    Gaunpalika
                                                                    (मेल्लेख गाउँपालिका)
                                                                </option>

                                                                <option value="5177">Melung
                                                                    Gaunpalika
                                                                    (मेलुंङ् गाउँपालिका)
                                                                </option>

                                                                <option value="5056">Menchayam
                                                                    Gaunpalika (मेंन्छयायम
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5005">Meringden
                                                                    Gaupalika
                                                                    (मेरीङदेन गाउँपालिका)
                                                                </option>

                                                                <option value="5165">Michaiya
                                                                    Nagarpalalika (मिचैया नगरपालिका)
                                                                </option>

                                                                <option value="5015">Miklajung
                                                                    Gaupalika
                                                                    (मिक्लाजुङ गाउँपालिका)
                                                                </option>

                                                                <option value="5085">Miklajung
                                                                    Gaupalika
                                                                    (मिक्लाजुङ गाउँपालिका)
                                                                </option>

                                                                <option value="5004">Mikwakhola
                                                                    Gaupalika (मिक्वाखोला
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5195">Miran
                                                                    Gaunpalika
                                                                    (मिरण गाउँपालिका)
                                                                </option>

                                                                <option value="5830">Mithila
                                                                    Nagarpalikaa (मिथिला नगरपालिका)
                                                                </option>

                                                                <option value="5831">Mithila Bihari
                                                                    Nagarpalikaa (मिथिला बिहारी
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5528">Modi Gaunpalika
                                                                    (मोदी गाउँपालिका)
                                                                </option>

                                                                <option value="5708">Mohanyal
                                                                    Gaunpalika
                                                                    (मोहन्याल गाउँपालिका)
                                                                </option>

                                                                <option value="5126">Molung
                                                                    Gaunpalika
                                                                    (मोलुङ् गाउँपालिका)
                                                                </option>

                                                                <option value="5584">Mudkechula
                                                                    Gaunpalika (मुड्केचुला
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5588">Mugum Karmarong
                                                                    Gaunpalika (मुगुम कार्मारोंग
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5832">Mukhiyapatti
                                                                    Masaharmiya Gaunpalika
                                                                    (मुखियापट्टि
                                                                    मुशहरमिया गाउँपालिका)
                                                                </option>

                                                                <option value="5536">Mushikot
                                                                    Nagarpalika (मुसीकोट नगरपालिका)
                                                                </option>

                                                                <option value="5441">Mushikot
                                                                    Nagarpalika (मुशीकोट नगरपालिका)
                                                                </option>

                                                                <option value="5419">Myagde
                                                                    Gaunpalika
                                                                    (म्याग्दे गाउँपालिका)
                                                                </option>

                                                                <option value="5272">Myang
                                                                    Gaunpalika
                                                                    (म्यागङ् गाउँपालिका)
                                                                </option>

                                                                <option value="5057">Myanglung
                                                                    Nagarpalika (म्यांङ्लुंङ्
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5828">Nagaraien
                                                                    Nagarpalika (नगराईन नगरपालिका)
                                                                </option>

                                                                <option value="5285">Nagarjun
                                                                    Nagarpalika (नागार्जुन
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5617">Nalgad
                                                                    Nagarpalika
                                                                    (नलगाड नगरपालिका)
                                                                </option>

                                                                <option value="5611">Namkha
                                                                    Gaunpalika
                                                                    (नाम्खा गाउँपालिका)
                                                                </option>

                                                                <option value="5302">Namobuddha
                                                                    Nagarpalika (नमोबुद्ध नगरपालिका)
                                                                </option>

                                                                <option value="5396">Narafu
                                                                    Gaunpallika
                                                                    (नारफु गाउँपालिका)
                                                                </option>

                                                                <option value="5161">Naraha
                                                                    Gaunpalika
                                                                    (नरहा गाउँपालिका)
                                                                </option>

                                                                <option value="5601">Naraharinath
                                                                    Gaunpalika (नरहरिनाथ गाउँपालिका)
                                                                </option>

                                                                <option value="5645">Narainapur
                                                                    Gaunpalika (नरैनापुर्
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5627">Narayan
                                                                    Nagarpalika
                                                                    (नारायण नगरपालिका)
                                                                </option>

                                                                <option value="5397">Nasong
                                                                    Gaunpalika
                                                                    (नाशोङ् गाउँपालिका)
                                                                </option>

                                                                <option value="5552">Naubahini
                                                                    Gaunpalika (नौबहिनि गाउँपालिका)
                                                                </option>

                                                                <option value="5712">Naugad
                                                                    Gaunpalika
                                                                    (नौगाड गाउँपालिका)
                                                                </option>

                                                                <option value="5900">Naukund
                                                                    Gaunpalika
                                                                    (नौकुण्ड गाउँपालिका)
                                                                </option>

                                                                <option value="5628">Naumule
                                                                    Gaunapalika
                                                                    (नौमुले गाउँपालिका)
                                                                </option>

                                                                <option value="5733">Nawadurga Gaun
                                                                    Palika (नवदुर्गा गाउँपालिका)
                                                                </option>

                                                                <option value="5162">Nawarajpur
                                                                    Gaunpalika (नवराजपुर गाउँपालिका)
                                                                </option>

                                                                <option value="5107">Nechasalyan
                                                                    Gaunpalika (नेचासल्यान
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5646">Nepalganja
                                                                    Upamahanagarpalika (नेपालगन्ज
                                                                    उपमहानगरपालिका)
                                                                </option>

                                                                <option value="5398">Nesyang
                                                                    Gaunpalika
                                                                    (नेस्याँङ् गाउँपालिका)
                                                                </option>

                                                                <option value="5261">Netrawati
                                                                    Dabjong
                                                                    Gaunpalika (नेत्रावती डबजोंग
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5355">Nijgad
                                                                    Nagarpalika
                                                                    (निजगढ नगरपालिका)
                                                                </option>

                                                                <option value="5260">Nilkantha
                                                                    Nagarpalika (निलकण्ठ नगरपालिका)
                                                                </option>

                                                                <option value="5447">Nisdi
                                                                    Gaunpalika
                                                                    (निस्दी गाउँपालिका)
                                                                </option>

                                                                <option value="5519">Nishikhola
                                                                    Gaunpalika (निशीखोला गाउँपालिका)
                                                                </option>

                                                                <option value="5476">Omsatiya
                                                                    Gaunpalika
                                                                    (ओमसतरिया गाउँपालिका)
                                                                </option>

                                                                <option value="5525">Paaiyu
                                                                    Gaunpalika
                                                                    (पैयु गाउँपालिका)
                                                                </option>

                                                                <option value="5602">Pachalgarana
                                                                    Gaunpalika (पचालझरना गाउँपालिका)
                                                                </option>

                                                                <option value="5670">Pachdewal
                                                                    Binayak
                                                                    Nagarpalika (पछदेवल विनायक
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5635">Pachpuri
                                                                    Nagarpalika (पछपुरी नगरपालिका)
                                                                </option>

                                                                <option value="5876">Pachrauta
                                                                    Nagarpalika (पचरौता नगरपालिका)
                                                                </option>

                                                                <option value="5367">Pakaha Maainpur
                                                                    Gaunpalika (पकाहा मैनपुर
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5072">Pakhribas
                                                                    Nagarpalika (पाख्रीबास नगरपालिका
                                                                    )
                                                                </option>

                                                                <option value="5465">Palhinandan
                                                                    Gaunpalika (पाल्हिनन्दन
                                                                    गाउँपालिका )
                                                                </option>

                                                                <option value="5390">Palungtar
                                                                    Nagarpalika (पालुंङ्टार
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5270">Panchakanya
                                                                    Gaunpalika (पन्चकन्या
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5722">Panchewswor
                                                                    Gaunpalika (पन्चेस्वोर
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5304">Panchkhal
                                                                    Nagarpalika (पाँचखाल नगरपालिका)
                                                                </option>

                                                                <option value="5047">Panchkhapan
                                                                    Nagarpalika (पाँचखपन नगरपालिका)
                                                                </option>

                                                                <option value="5314">Panchpokhari
                                                                    Thangpal Gaunpalika (पाँचपोखरी
                                                                    थांगपाल गाउँपालिका)
                                                                </option>

                                                                <option value="5456">Panini
                                                                    Gaunpalika
                                                                    (पाणिनी गाउँपालिका)
                                                                </option>

                                                                <option value="5303">Panuti
                                                                    Nagarpalika
                                                                    (पनौती नगरपालिका)
                                                                </option>

                                                                <option value="5734">Parasuram
                                                                    Nagarpalika (परसुराम नगरपालिका)
                                                                </option>

                                                                <option value="5877">Parawanipur
                                                                    Gaunpalika (परवानीपुर
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5901">Parbatikund
                                                                    Gaunpalika (पार्वतीकुण्ड
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5541">Paribartan
                                                                    Gaunpalika (परिवर्तन गाउँपालिका)
                                                                </option>

                                                                <option value="5867">Paroha
                                                                    Nagarpalika
                                                                    (परोहा नगरपालिका)
                                                                </option>

                                                                <option value="5252">Parsa
                                                                    Gaunpalika
                                                                    (पर्सा गाउँपालिका)
                                                                </option>

                                                                <option value="5885">Parsagadi
                                                                    Nagarpalika (पर्सागढी नगरपालिका)
                                                                </option>

                                                                <option value="5603">Patala
                                                                    Gaunpalika
                                                                    (पतला गाउँपालिका)
                                                                </option>

                                                                <option value="5723">Patan
                                                                    Nagarpalika
                                                                    (पाटन नगरपालिका)
                                                                </option>

                                                                <option value="5595">Patarasi
                                                                    Gaunpalika
                                                                    (पातारासी गाउँपालिका)
                                                                </option>

                                                                <option value="5884">Paterwa Sugauli
                                                                    Gaunpalika (पटेर्वा सुगौली
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5082">Pathari
                                                                    Sanischare
                                                                    Nagarpalika (पथरी सनिस्चरे
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5007">Pathibhara
                                                                    Yangbarak Gaupalika (पाथिभरा
                                                                    याङ्वरक
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5016">Pathibhara
                                                                    Yangbarak Gaupalika (पाथिभरा
                                                                    याङ्वरक
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5062">Pauwadhungma
                                                                    Gaunpalika (पौवादुङ्मा
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5526">Phalebas
                                                                    Nagarpalika (फलेबास नगरपालिका)
                                                                </option>

                                                                <option value="5055">Phedam
                                                                    Gaupalika
                                                                    (फेदाम गाउँपालिका)
                                                                </option>

                                                                <option value="5428">Phedikhola
                                                                    Gaunpalika (फेदीखोला गाउँपालिका)
                                                                </option>

                                                                <option value="5879">Pheta
                                                                    Gaunpalika
                                                                    (फेटा गाउँपालिका)
                                                                </option>

                                                                <option value="5219">Pipara
                                                                    Gaunpalika
                                                                    (पिपरा गाउँपालिका)
                                                                </option>

                                                                <option value="5408">Pokhara
                                                                    Mahanagarpalika (पोखरा
                                                                    महानगरपालिका)
                                                                </option>

                                                                <option value="5886">Pokhariya
                                                                    Nagarpalika (पोखरिया नगरपालिका)
                                                                </option>

                                                                <option value="5878">Prasauni
                                                                    Gaunpalika
                                                                    (प्रसौनि गाउँपालिका)
                                                                </option>

                                                                <option value="5466">Pratappur
                                                                    Gaunpalika (प्रतापपुर्
                                                                    गाउँपालिका )
                                                                </option>

                                                                <option value="5724">Puchaudi
                                                                    Nagarpalika (पुचौडी नगरपालिका)
                                                                </option>

                                                                <option value="5737">Punarbas
                                                                    Nagarpalika (पुनर्बास नगरपालिका)
                                                                </option>

                                                                <option value="5448">Purbakhola
                                                                    Gaunpalika (पूर्वखोला
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5692">Purbichauki
                                                                    Gaunpalika (पुर्बीचौकी
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5427">Putalibazar
                                                                    Nagarpalika (पुतलीबजार
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5533">Putha
                                                                    Uttarganga
                                                                    Gaunpalika (पुथा उत्तरगंगा
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5553">Pyuthan
                                                                    Nagarpalika
                                                                    (प्यूठान नगरपालिका)
                                                                </option>

                                                                <option value="5405">Raainaas
                                                                    Nagarpalika (राइनास नगरपालिका)
                                                                </option>

                                                                <option value="5512">Raghuganga
                                                                    Gaunpalika (रघुगंगा गाउँपालिका)
                                                                </option>

                                                                <option value="5454">Rainadevi
                                                                    Chahara
                                                                    Gaunpalika (रैनादेवी छहरा
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5656">Rajapur
                                                                    Nagarpalika
                                                                    (राजापुर नगरपालिका)
                                                                </option>

                                                                <option value="5811">Rajbiraj
                                                                    Nagarpalika (राजबिराज नगरपालिका)
                                                                </option>

                                                                <option value="5873">Rajdevi
                                                                    Nagarpalika
                                                                    (राजदेवी नगरपालिका)
                                                                </option>

                                                                <option value="5574">Rajpur
                                                                    Gaunpalika
                                                                    (राजपुर गाउँपालिका)
                                                                </option>

                                                                <option value="5874">Rajpur
                                                                    Nagarpalika
                                                                    (राजपुर नगरपालिका)
                                                                </option>

                                                                <option value="5331">Rakshirang
                                                                    Gaunpalika (राक्शीरांग
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5674">Ramaroshan
                                                                    Gaunpalika (रामारोशन गाउँपालिका)
                                                                </option>

                                                                <option value="5451">Rambha
                                                                    Gaunpalika
                                                                    (रम्भा गाउँपालिका)
                                                                </option>

                                                                <option value="5102">Ramdhuni
                                                                    Nagarpalika (रामधुनी नगरपालिका)
                                                                </option>

                                                                <option value="5186">Ramechap
                                                                    Nagarpalika (रामेछाप नगरपालिका)
                                                                </option>

                                                                <option value="5845">Ramgopalpur
                                                                    Nagarpalika (रामगोपालपुर
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5471">Ramgram
                                                                    Nagarpalika
                                                                    (रामग्राम नगरपालिका)
                                                                </option>

                                                                <option value="5256">Ramnagar
                                                                    Gaunpalika
                                                                    (रामनगर गाउँपालिका)
                                                                </option>

                                                                <option value="5064">Ramprasad Rai
                                                                    Gaunpalika (रामप्रसाद राई
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5452">Rampur
                                                                    Nagarpalika
                                                                    (रामपुर नगरपालिका)
                                                                </option>

                                                                <option value="5086">Rangeli
                                                                    Nagarpalika
                                                                    (रंगेली नगरपालिका)
                                                                </option>

                                                                <option value="5575">Rapti
                                                                    Gaunpalika
                                                                    (राप्ती गाउँपालिका)
                                                                </option>

                                                                <option value="5383">Rapti
                                                                    Nagarpalika
                                                                    (राप्ती नगरपालिका)
                                                                </option>

                                                                <option value="5648">Raptisonari
                                                                    Gaunpalika (राप्तीसोनारी
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5605">Raskot
                                                                    Nagarpalika
                                                                    (रास्कोट नगरपालिका)
                                                                </option>

                                                                <option value="5382">Ratnanagar
                                                                    Nagarpalika (रत्ननगर नगरपालिका)
                                                                </option>

                                                                <option value="5087">Ratuwamai
                                                                    Nagarpalika (रतुवामाइ नगरपालिका)
                                                                </option>

                                                                <option value="5135">Rautamai
                                                                    Gaunpalika
                                                                    (रौतामाइ गाउँपालिका)
                                                                </option>

                                                                <option value="5119">Rawabeshi
                                                                    Gaunpalika (रावाबेशी गाउँपालिका)
                                                                </option>

                                                                <option value="5443">Resunga
                                                                    Nagarpalika
                                                                    (रेशुङ्गा नगरपालिका)
                                                                </option>

                                                                <option value="5453">Ribdikot
                                                                    Gaunpalika
                                                                    (रिब्दीकोट गाउँपालिका)
                                                                </option>

                                                                <option value="5413">Rising
                                                                    Gaunpalika
                                                                    (ऋषिङ्ग गाउँपालिका)
                                                                </option>

                                                                <option value="5485">Rohini
                                                                    Gaunpalika
                                                                    (रोहिणी गाउँपालिका)
                                                                </option>

                                                                <option value="5544">Rolpa
                                                                    Nagarpalika
                                                                    (रोल्पा नगरपालिका)
                                                                </option>

                                                                <option value="5025">Rong Gaunpalika
                                                                    (रोङ् गाउँपालिका)
                                                                </option>

                                                                <option value="5310">Roshi
                                                                    Gaunpalika
                                                                    (रोशी गाउँपालिका)
                                                                </option>

                                                                <option value="5263">Rubi Bhyali
                                                                    Gaunpalika (रुबी भ्याली
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5543">Runtigadhi
                                                                    Gaunpalika (रुन्टीगढी
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5411">Rupa Gaunpalika
                                                                    (रुपा गाउँपालिका)
                                                                </option>

                                                                <option value="5118">Rupakot
                                                                    Majuwagadi
                                                                    Nagarpalika (रुपाकोट मजुवागढी
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5812">Rupani
                                                                    Gaunpalika
                                                                    (रुपनी गाउँपालिका)
                                                                </option>

                                                                <option value="5442">Ruru Chhetra
                                                                    Gaunpalika (रुरु गाउँपालिका)
                                                                </option>

                                                                <option value="5836">Sabaila
                                                                    Nagarpalika
                                                                    (सबैला नगरपालिका)
                                                                </option>

                                                                <option value="5051">Sabhapokhari
                                                                    Gaunpalika (सभापोखरी गाउँपालिका)
                                                                </option>

                                                                <option value="5065">Sadananda
                                                                    Nagarpalika (सडानन्द नगरपालिका)
                                                                </option>

                                                                <option value="5675">Safebagar
                                                                    Nagarpalika (साफेबगर नगरपालिका)
                                                                </option>

                                                                <option value="5835">Sahidnagar
                                                                    Nagarpalika (शहिदनगर नगरपालिका)
                                                                </option>

                                                                <option value="5491">Sainamaina
                                                                    Nagarpalika (सैनामैंना
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5120">Sakela
                                                                    Gaunpalika
                                                                    (साकेला गाउँपालिका)
                                                                </option>

                                                                <option value="5375">Sakhuwa
                                                                    Prasauni
                                                                    Gaunpalika (सखुवा प्रसौनि
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5169">
                                                                    Sakhuwanankarkatti
                                                                    Gaunpalika ()
                                                                </option>

                                                                <option value="5066">Salpasilicho
                                                                    Gaunpalika (साल्पासिलीछो
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5488">Sammarimaai
                                                                    Gaunpalika (सम्मरीमाई
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5228">Samshi
                                                                    Gaunpalika
                                                                    (साम्सी गाउँपालिका)
                                                                </option>

                                                                <option value="5026">Sandakpur
                                                                    Gaunpalika (सन्दकपुर गाउँपालिका)
                                                                </option>

                                                                <option value="5459">Sandhikharka
                                                                    Nagarpalika (सन्धीखर्क
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5229">Sanema
                                                                    Gaunpalika
                                                                    (सानेमा गाउँपालिका)
                                                                </option>

                                                                <option value="5287">Sangarapur
                                                                    Nagarpalika (शङ्गरापुर नगरपलिका)
                                                                </option>

                                                                <option value="5537">Sanibheri
                                                                    Gaunpalika (सानीभेरी गाउँपालिका)
                                                                </option>

                                                                <option value="5606">Sanni Triveni
                                                                    Gaunpalika (सान्नी त्रिवेणी
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5676">Sapal
                                                                    Gaunpalika
                                                                    (सा पाल गाउँपालिका)
                                                                </option>

                                                                <option value="5816">Saptakoshi
                                                                    Gaunpalika (सप्तकोशी गाउँपालिका)
                                                                </option>

                                                                <option value="5567">Sarada
                                                                    Nagarpalika
                                                                    (सारदा नगरपालिका)
                                                                </option>

                                                                <option value="5473">Sarawal
                                                                    Gaunpalika
                                                                    (सरावल गाउँपालिका)
                                                                </option>

                                                                <option value="5612">Sarkegad
                                                                    Gaunpalika
                                                                    (सर्केगाड गाउँपालिका)
                                                                </option>

                                                                <option value="5556">Sarumarani
                                                                    Gaunpalika (सरुमारानी
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5444">Satyawati
                                                                    Gaunpalika (सत्यवती गाउँपालिका)
                                                                </option>

                                                                <option value="5696">Sayal
                                                                    Gaunpalika
                                                                    (सायल गाउँपालिका)
                                                                </option>

                                                                <option value="5585">Sepholsundo
                                                                    Gaunpalika (शेफोक्सुन्डो
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5074">Shagurigadi
                                                                    Gaunpalika (शागुरीगढी
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5068">Shahid Bhumi
                                                                    Gaunpalika (शहिदभूमि गाउँपालिका)
                                                                </option>

                                                                <option value="5392">Shahid Lakhan
                                                                    Gaunpalika (शहिद लखन गाउँपालिका)
                                                                </option>

                                                                <option value="5180">Shailung
                                                                    Gaunpalika
                                                                    (शैलुंङ् गाउँपालिका)
                                                                </option>

                                                                <option value="5718">Shailyashikhar
                                                                    Nagarpalika (शैल्यशिखर
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5815">Shambhunath
                                                                    Nagarpalika (शम्भुनाथ नगरपालिका)
                                                                </option>

                                                                <option value="5577">Shantinagar
                                                                    Gaunpalika (शान्तिनगर
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5695">Shikhar
                                                                    Nagarpalika
                                                                    (शिखर नगरपालिका)
                                                                </option>

                                                                <option value="5726">Shivanath
                                                                    Gaunpalika (शिवनाथ गाउँपालिका)
                                                                </option>

                                                                <option value="5275">Shivapuri
                                                                    Gaunpalika (शिवपुरी गाउँपालिका)
                                                                </option>

                                                                <option value="5500">Shivaraj
                                                                    Nagarpalika (शिवराज नगरपालिका)
                                                                </option>

                                                                <option value="5041">Shivshatakshi
                                                                    Nagarpalika (शिवसताक्षि
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5562">Siddha Kumakh
                                                                    Gaunpalika (सिद्ध कुमाख
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5264">Siddhalek
                                                                    Gaunpalika (सिद्धलेक गाउँपालिका)
                                                                </option>

                                                                <option value="5489">Siddharthanagar
                                                                    Nagarpalika (सिद्धार्थनगर
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5128">Siddhicharan
                                                                    Nagarpalika (सिद्धिचरण
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5008">Sidingwa
                                                                    Gaupalika
                                                                    (सिदीङ्वा गाउँपालिका)
                                                                </option>

                                                                <option value="5727">Sigas
                                                                    Gaunpalika
                                                                    (सिगास गाउँपालिका)
                                                                </option>

                                                                <option value="5052">Silichong
                                                                    Gaunpalika (सिलिचोङ् गाउँपालिका)
                                                                </option>

                                                                <option value="5362">Simraunbadh
                                                                    Nagarpalika (सिम्रौनगढ़
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5640">Simta
                                                                    Gaunpalika
                                                                    (सिम्ता गाउँपालिका)
                                                                </option>

                                                                <option value="5596">Sinja
                                                                    Gaunpalika
                                                                    (सिंजा गाउँपालिका)
                                                                </option>

                                                                <option value="5170">Siraha
                                                                    Nagarpalika
                                                                    (सिराहा नगरपालिका)
                                                                </option>

                                                                <option value="5393">Siranchok
                                                                    Gaunpalika (सिरानचोक गाउँपालिका)
                                                                </option>

                                                                <option value="5009">Sirijanga
                                                                    Gaupalika
                                                                    (सिरीजङ्गा गाउँपालिका)
                                                                </option>

                                                                <option value="5538">Sisne
                                                                    Gaunpalika
                                                                    (सिस्ने गाउँपालिका)
                                                                </option>

                                                                <option value="5460">Sitganga
                                                                    Nagarpalika (सितगंगा नगरपालिका)
                                                                </option>

                                                                <option value="5620">Siwalaye
                                                                    Gaunpalika
                                                                    (शिवालय गाउँपालिका)
                                                                </option>

                                                                <option value="5490">Siyari
                                                                    Gaunpalika
                                                                    (सियारी गाउँपालिका)
                                                                </option>

                                                                <option value="5111">Solududkunda
                                                                    Nagarpalika (सोलुदुधकुण्ड
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5613">Somkot
                                                                    Gaunpalika
                                                                    (सिमकोट गाउँपालिका)
                                                                </option>

                                                                <option value="5589">Soru Gaunpalika
                                                                    (सोरु गाउँपालिका)
                                                                </option>

                                                                <option value="5110">Sotang
                                                                    Gaunpalika
                                                                    (सोतांग गाउँपालिका)
                                                                </option>

                                                                <option value="5363">Subarna
                                                                    Gaunpalika
                                                                    (सुबर्ण गाउँपालिका)
                                                                </option>

                                                                <option value="5487">Suddhodhan
                                                                    Gaunpalika (सुद्धोधन गाउँपालिका)
                                                                </option>

                                                                <option value="5501">Suddhodhan
                                                                    Gaunpalika (सुद्धोधन गाउँपालिका)
                                                                </option>

                                                                <option value="5171">Sukhipur
                                                                    Nagarpalika (सुखीपुर नगरपालिका)
                                                                </option>

                                                                <option value="5546">Sukidhaha
                                                                    Gaunpalika (सुकीदह गाउँपालिका)
                                                                </option>

                                                                <option value="5421">Suklagandaki
                                                                    Nagarpalika (सुक्लागण्डकि
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5744">Suklaphata
                                                                    Nagarpalika (सुक्लाफाटा
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5394">Sulikot
                                                                    Gaunpalika
                                                                    (सुलीकोट गाउँपालिका)
                                                                </option>

                                                                <option value="5188">Sunapati
                                                                    Gaunpalika
                                                                    (सुनापति गाउँपालिका)
                                                                </option>

                                                                <option value="5474">Sunawal
                                                                    Nagarpalika
                                                                    (सुनवल नगरपालिका)
                                                                </option>

                                                                <option value="5090">Sunbarsi
                                                                    Nagarpalika (सुनबर्सी नगरपालिका
                                                                    )
                                                                </option>

                                                                <option value="5547">Sunchahari
                                                                    Gaunpalika (सुनछहरि गाउँपालिका)
                                                                </option>

                                                                <option value="5406">Sundarbajar
                                                                    Nagarpalika (सुन्दरबजार
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5091">Sundarharaicha
                                                                    Nagarpalika (सुन्दरहरैचा
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5129">Sunkoshi
                                                                    Gaunpalika
                                                                    (सुनकोशी गाउँपालिका)
                                                                </option>

                                                                <option value="5137">Sunkoshi
                                                                    Gaunpalika
                                                                    (सुनकोशी गाउँपालिका)
                                                                </option>

                                                                <option value="5196">Sunkoshi
                                                                    Gaunpalika
                                                                    (सुनकोशी गाउँपालिका)
                                                                </option>

                                                                <option value="5321">Sunkoshi
                                                                    Gaunpalika
                                                                    (सुनकोशी गाउँपालिका)
                                                                </option>

                                                                <option value="5687">Surma
                                                                    Gaunpalika
                                                                    (सुर्मा गाउँपालिका)
                                                                </option>

                                                                <option value="5728">Surnaya
                                                                    Gaunpalika
                                                                    (सुर्नया गाउँपालिका)
                                                                </option>

                                                                <option value="5817">Surunga
                                                                    Nagarpalika
                                                                    (सुरुंगा नगरपालिका)
                                                                </option>

                                                                <option value="5291">Suryabinayak
                                                                    Nagarpalika (सुर्यविनायक
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5276">Suryagadi
                                                                    Gaunpalika (सुर्यगढी गाउँपालिका)
                                                                </option>

                                                                <option value="5027">Suryodaya
                                                                    Nagarpalika (सुर्योदय नगरपालिका)
                                                                </option>

                                                                <option value="5902">Susta
                                                                    Gaunpalika
                                                                    (सुस्ता गाउँपालिका)
                                                                </option>

                                                                <option value="5664">Swamikartik
                                                                    Gaunpalika (स्वामीकार्तिक
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5557">Sworgadwari
                                                                    Nagarpalika (स्वोर्गद्धारी
                                                                    नगरपालिका
                                                                    )
                                                                </option>

                                                                <option value="5267">Tadi Gaunpaika
                                                                    (तादी गाउँपालिका)
                                                                </option>

                                                                <option value="5681">Talkot
                                                                    Gaunpalika
                                                                    (तलकोट गाउँपालिका)
                                                                </option>

                                                                <option value="5517">Tamaankhola
                                                                    Gaunpalika (तमानखोला गाउँपालिका)
                                                                </option>

                                                                <option value="5175">Tamakoshi
                                                                    Gaunpalika (तामाकोशी गाउँपालिका)
                                                                </option>

                                                                <option value="5061">Tamkemaiyuk
                                                                    Gaunpalika (टाम्केमैयुम
                                                                    गाउँपालिका )
                                                                </option>

                                                                <option value="5445">Tansen
                                                                    Nagarpalika
                                                                    (तानसेन नगरपालिका)
                                                                </option>

                                                                <option value="5133">Tapli
                                                                    Gaunpalika
                                                                    (ताप्ली गाउँपालिका)
                                                                </option>

                                                                <option value="5518">Tarakhola
                                                                    Gaunpalika (ताराखोला गाउँपालिका)
                                                                </option>

                                                                <option value="5268">Tarkeshor
                                                                    Gaunpalika (तरकेश्वोर
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5283">Tarkeshor
                                                                    Nagarpalika (तार्केशोर
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5593">Tatopani
                                                                    Gaunpalika
                                                                    (तातोपानी गाउँपालिका)
                                                                </option>

                                                                <option value="5300">Temal
                                                                    Gaunpalika
                                                                    (तेमाल गाउँपालिका)
                                                                </option>

                                                                <option value="5325">Thaha
                                                                    Nagarpalika
                                                                    (थाहा नगरपालिका)
                                                                </option>

                                                                <option value="5896">Thakre
                                                                    Gaunpalika
                                                                    (थाक्रे गाउँपालिका)
                                                                </option>

                                                                <option value="5651">Thakurbaba
                                                                    Nagarpalika (ठाकुरबाबा
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5682">Thalara
                                                                    Gaunpalika
                                                                    (थलारा गाउँपालिका)
                                                                </option>

                                                                <option value="5503">Thasang
                                                                    Gaunpalika
                                                                    (थासांङ् गाउँपालिका)
                                                                </option>

                                                                <option value="5624">Thatikadh
                                                                    Gaunpalika (ठाँटिकाँध
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5540">Thawang
                                                                    Gaunpalika
                                                                    (थवांङ् गाउँपालिका)
                                                                </option>

                                                                <option value="5883">Thori
                                                                    Gaunpalika
                                                                    (ठोरी गाउँपालिका)
                                                                </option>

                                                                <option value="5581">Thulibheri
                                                                    Gaunpalika (ठुलीभेरी नगरपालिका)
                                                                </option>

                                                                <option value="5704">Tikapur
                                                                    Nagarpalika
                                                                    (टिकापुर नगरपालिका)
                                                                </option>

                                                                <option value="5594">Tila Gaunpalika
                                                                    (तिला गाउँपालिका)
                                                                </option>

                                                                <option value="5600">Tilaghufa
                                                                    Nagarpalika (तिलागुफा नगरपालिका)
                                                                </option>

                                                                <option value="5807">Tilathi Koiladi
                                                                    Gaunpalika (तिलाठी कोइलाडी
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5480">Tilottama
                                                                    Nagarpalika (तिलोत्तमा
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5446">Tinau
                                                                    Gaunpalika
                                                                    (तिनाउ गाउँपालिका)
                                                                </option>

                                                                <option value="5192">Tinpatan
                                                                    Gaunpalika
                                                                    (तिनपाटन गाउँपालिका)
                                                                </option>

                                                                <option value="5806">Tirhut
                                                                    Gaunpalika
                                                                    (तिरहुत गाउँपालिका)
                                                                </option>

                                                                <option value="5282">Tokha
                                                                    Nagarpalika
                                                                    (टोखा नगरपालिका)
                                                                </option>

                                                                <option value="5313">Tripurasundari
                                                                    Gaunpalika (त्रिपुरासुन्दरि
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5895">Tripurasundari
                                                                    Gaunpalika (त्रिपुरासुन्दरी
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5583">Tripurasundari
                                                                    Nagarpalika (त्रिपुरासुन्दरी
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5563">Triveni
                                                                    Gaunpalika
                                                                    (त्रिवेणी गाउँपालिका)
                                                                </option>

                                                                <option value="5539">Triveni
                                                                    Gaunpalika
                                                                    (त्रिवेणी गाउँपालिका)
                                                                </option>

                                                                <option value="5532">Triveni
                                                                    Gaunpalika
                                                                    (त्रिवेणी गाउँपालिका)
                                                                </option>

                                                                <option value="5659">Triveni
                                                                    Nagarpalika
                                                                    (त्रिवेणी नगरपालिका)
                                                                </option>

                                                                <option value="5134">Triyuga
                                                                    Nagarpalika
                                                                    (त्रियुगा नगरपालिका)
                                                                </option>

                                                                <option value="5570">Tulsipur
                                                                    Upamahanagarpalika (तुल्सीपुर
                                                                    उपमहानगरपालिका)
                                                                </option>

                                                                <option value="5011">Tumwewa
                                                                    Gaupalika
                                                                    (तुम्वेवा गाउँपालिका)
                                                                </option>

                                                                <option value="5669">Turmakhand
                                                                    Gaunpalika (तुर्माखांद
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5130">Udaypurgadhi
                                                                    Gaunpalika (उदयपुरगढी
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5181">Umakanda
                                                                    Gaunpalika
                                                                    (उमाकुण्ड गाउँपालिका)
                                                                </option>

                                                                <option value="5075">Urlabari
                                                                    Nagarpalika (उर्लाबारी
                                                                    नगरपालिका)
                                                                </option>

                                                                <option value="5898">Uttargaya
                                                                    Gaunpalika ( उत्तरगया
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5430">Waling
                                                                    Nagarpalika
                                                                    (वालिंग नगरपालिका)
                                                                </option>

                                                                <option value="5872">Yamuna Maai
                                                                    Nagarpalika (यमुनामाई नगरपालिका)
                                                                </option>

                                                                <option value="5549">Yerawati
                                                                    Gaunpalika
                                                                    (एरावती गाउँपालिका)
                                                                </option>

                                                                <option value="5548">Yesodhara
                                                                    Gaunpalika (सुबर्णावती
                                                                    गाउँपालिका)
                                                                </option>

                                                                <option value="5498">Yesodhara
                                                                    Gaunpalika (यसोधरा गाउँपालिका)
                                                                </option>

                                                            </select>
                                                        </div>
                                                        <div class="form-group col-sm-2">
                                                            <label>Tole *</label>
                                                            <input class="form-control" placeholder=" "
                                                                   name="tole" type="text" value="" required>
                                                        </div>
                                                        <div class="form-group col-sm-2">
                                                            <label> Ward No. *</label>
                                                            <input class="form-control" placeholder=" "
                                                                   name="ward_no" type="text" value="" required>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label>Phone Number *</label>
                                                            <input class="form-control" placeholder="  "
                                                                   name="phone_no" type="text" value="" required>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label>Date of Birth(AD) *</label>
                                                            <input class="form-control" placeholder="date"
                                                                   name="dob" type="date" value="" required="">
                                                        </div>

                                                        <div class="form-group col-sm-4">
                                                            <label>Email address *</label>
                                                            <input class="form-control" placeholder=" "
                                                                   name="email" type="email" value="" required>
                                                        </div>

                                                        <div class="form-group col-sm-4">
                                                            <label>Father's Name *</label>
                                                            <input class="form-control" placeholder=" "
                                                                   name="father_name" type="text" value="" required>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label>Grand Father's Name *</label>
                                                            <input class="form-control" placeholder=" "
                                                                   name="grand_father_name" type="text" value=""
                                                                   required>
                                                        </div>
                                                        <div class="form-group col-sm-2">
                                                            <label>PAN/VAT No. *</label>
                                                            <input class="form-control" placeholder=""
                                                                   name="vat_pan_no" type="text" value="" required>
                                                        </div>
                                                        <div class="form-group col-sm-2">
                                                            <label>Citizenship No. *</label>
                                                            <input class="form-control" placeholder=""
                                                                   name="citizenship_no" type="text" value="" required>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label>Citizenship Issued Date *</label>
                                                            <input class="form-control" placeholder="date"
                                                                   name="citizenship_issued_date" type="date" value=""
                                                                   required="">
                                                        </div>
                                                        <div class="form-group col-sm-3">
                                                            <label>Citizenship Issued Place
                                                                *</label>
                                                            <select name="citizenship_issued_place"
                                                                    id="id_issued_location"
                                                                    class="form-control id_issued_location"
                                                                    required="required">
                                                                <option value="">- Select
                                                                    Citizenship
                                                                    Issued Place * -
                                                                </option>

                                                                <option value="68">Achham</option>

                                                                <option value="46">Arghakhanchi
                                                                </option>

                                                                <option value="48">Baglung</option>

                                                                <option value="73">Baitadi</option>

                                                                <option value="71">Bajhang</option>

                                                                <option value="69">Bajura</option>

                                                                <option value="57">Banke</option>

                                                                <option value="32">Bara</option>

                                                                <option value="62">Bardiya</option>

                                                                <option value="29">Bhaktapur
                                                                </option>

                                                                <option value="12">Bhojpur</option>

                                                                <option value="34">Chitwan</option>

                                                                <option value="74">Dadeldhura
                                                                </option>

                                                                <option value="64">Dailekh</option>

                                                                <option value="52">Dang</option>

                                                                <option value="72">Darchula</option>

                                                                <option value="35">Dhading</option>

                                                                <option value="07">Dhankuta</option>

                                                                <option value="17">Dhanusha</option>

                                                                <option value="20">Dolakha</option>

                                                                <option value="56">Dolpa</option>

                                                                <option value="67">Doti</option>

                                                                <option value="55">East Rukum
                                                                </option>

                                                                <option value="38">Gorkha</option>

                                                                <option value="47">Gulmi</option>

                                                                <option value="70">Humla</option>

                                                                <option value="02">Illam</option>

                                                                <option value="59">Jajarkot</option>

                                                                <option value="01">Jhapa</option>

                                                                <option value="60">Jumla</option>

                                                                <option value="66">Kailali</option>

                                                                <option value="65">Kalikot</option>

                                                                <option value="75">Kanchanpur
                                                                </option>

                                                                <option value="45">Kapilbastu
                                                                </option>

                                                                <option value="43">Kaski</option>

                                                                <option value="28">Kathmandu
                                                                </option>

                                                                <option value="23">Kavre</option>

                                                                <option value="13">Khotang</option>

                                                                <option value="27">Lalitpur</option>

                                                                <option value="39">Lamjung</option>

                                                                <option value="21">Mahottari
                                                                </option>

                                                                <option value="26">Makawanpur
                                                                </option>

                                                                <option value="44">Manang</option>

                                                                <option value="05">Morang</option>

                                                                <option value="61">Mugu</option>

                                                                <option value="51">Mustang</option>

                                                                <option value="50">Myagdi</option>

                                                                <option value="76">Nawalparasi
                                                                    (Ba.Su.Pa)
                                                                </option>

                                                                <option value="36">Nawalparasi
                                                                    (Ba.Su.Pu)
                                                                </option>

                                                                <option value="30">Nuwakot</option>

                                                                <option value="16">Okhaldhunga
                                                                </option>

                                                                <option value="41">Palpa</option>

                                                                <option value="03">Panchthar
                                                                </option>

                                                                <option value="49">Parbat</option>

                                                                <option value="33">Parsa</option>

                                                                <option value="53">Pyuthan</option>

                                                                <option value="19">Ramechhap
                                                                </option>

                                                                <option value="31">Rasuwa</option>

                                                                <option value="25">Rautahat</option>

                                                                <option value="54">Rolpa</option>

                                                                <option value="40">Rupandehi
                                                                </option>

                                                                <option value="58">Salyan</option>

                                                                <option value="09">Sankhuwasabha
                                                                </option>

                                                                <option value="10">Saptari</option>

                                                                <option value="22">Sarlahi</option>

                                                                <option value="18">Sindhuli</option>

                                                                <option value="24">Sindhupalchowk
                                                                </option>

                                                                <option value="15">Siraha</option>

                                                                <option value="14">Solukhumbu
                                                                </option>

                                                                <option value="06">Sunsari</option>

                                                                <option value="63">Surkhet</option>

                                                                <option value="42">Syangja</option>

                                                                <option value="37">Tanahu</option>

                                                                <option value="04">Taplejung
                                                                </option>

                                                                <option value="08">Terathum</option>

                                                                <option value="11">Udayapur</option>

                                                                <option value="77">West Rukum
                                                                </option>
                                                            </select>
                                                        </div>
                                                        <div class="form-input col-sm-3">
                                                            <div class="custom-file">
                                                                <label class="uploadButton" for="fileElem">PP
                                                                    Size
                                                                    Photo</label>
                                                                <input type="file" id="fileElem" name="pp_image"
                                                                       class="form-control custom-file-input">
                                                            </div>
                                                        </div>
                                                        <div class="form-input col-sm-3">
                                                            <div class="custom-file">
                                                                <label class="uploadButton"
                                                                       for="fileElem">Citizenship
                                                                    Front:</label>
                                                                <input type="file" id="fileElem" name="citizen_doc"
                                                                       class="form-control custom-file-input">
                                                            </div>
                                                        </div>
                                                        <div class="form-input col-sm-3">
                                                            <div class="custom-file">
                                                                <label class="uploadButton"
                                                                       for="fileElem">Citizenship
                                                                    Back:</label>
                                                                <input type="file" id="fileElem" name="citizen_back"
                                                                       class="form-control custom-file-input">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="button" name="next"
                                                       class="next action-button" value="Next"/>
                                            </fieldset>
                                            <fieldset>
                                                <div class="form-card">
                                                    <div class="insurance-form">
                                                        <div class="form-group terms-area  col-sm-12">
                                                            <input type="checkbox" name="agree" id="agree"
                                                                   class="agree" required="required">
                                                            <p class="terms-text">
                                                                Property detail is same as Insured Detail
                                                            </p>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label>Property Owner Name</label>
                                                            <input class="form-control" type="text" id="name"
                                                                   name="owner_name" placeholder=" " required="">
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label>Property District</label>
                                                            <select name="districts"
                                                                    id="owner_district_code"
                                                                    class="form-control owner_district_code"
                                                                    required="required">
                                                                <option value="">- Select District -
                                                                </option>

                                                                <option value="68">Achham</option>

                                                                <option value="46">Arghakhanchi</option>

                                                                <option value="48">Baglung</option>

                                                                <option value="73">Baitadi</option>

                                                                <option value="71">Bajhang</option>

                                                                <option value="69">Bajura</option>

                                                                <option value="57">Banke</option>

                                                                <option value="32">Bara</option>

                                                                <option value="62">Bardiya</option>

                                                                <option value="29">Bhaktapur</option>

                                                                <option value="12">Bhojpur</option>

                                                                <option value="34">Chitwan</option>

                                                                <option value="74">Dadeldhura</option>

                                                                <option value="64">Dailekh</option>

                                                                <option value="52">Dang</option>

                                                                <option value="72">Darchula</option>

                                                                <option value="35">Dhading</option>

                                                                <option value="07">Dhankuta</option>

                                                                <option value="17">Dhanusha</option>

                                                                <option value="20">Dolakha</option>

                                                                <option value="56">Dolpa</option>

                                                                <option value="67">Doti</option>

                                                                <option value="55">East Rukum</option>

                                                                <option value="38">Gorkha</option>

                                                                <option value="47">Gulmi</option>

                                                                <option value="70">Humla</option>

                                                                <option value="02">Illam</option>

                                                                <option value="59">Jajarkot</option>

                                                                <option value="01">Jhapa</option>

                                                                <option value="60">Jumla</option>

                                                                <option value="66">Kailali</option>

                                                                <option value="65">Kalikot</option>

                                                                <option value="75">Kanchanpur</option>

                                                                <option value="45">Kapilbastu</option>

                                                                <option value="43">Kaski</option>

                                                                <option value="28">Kathmandu</option>

                                                                <option value="23">Kavre</option>

                                                                <option value="13">Khotang</option>

                                                                <option value="27">Lalitpur</option>

                                                                <option value="39">Lamjung</option>

                                                                <option value="21">Mahottari</option>

                                                                <option value="26">Makawanpur</option>

                                                                <option value="44">Manang</option>

                                                                <option value="05">Morang</option>

                                                                <option value="61">Mugu</option>

                                                                <option value="51">Mustang</option>

                                                                <option value="50">Myagdi</option>

                                                                <option value="76">Nawalparasi (Ba.Su.Pa)
                                                                </option>

                                                                <option value="36">Nawalparasi (Ba.Su.Pu)
                                                                </option>

                                                                <option value="30">Nuwakot</option>

                                                                <option value="16">Okhaldhunga</option>

                                                                <option value="41">Palpa</option>

                                                                <option value="03">Panchthar</option>

                                                                <option value="49">Parbat</option>

                                                                <option value="33">Parsa</option>

                                                                <option value="53">Pyuthan</option>

                                                                <option value="19">Ramechhap</option>

                                                                <option value="31">Rasuwa</option>

                                                                <option value="25">Rautahat</option>

                                                                <option value="54">Rolpa</option>

                                                                <option value="40">Rupandehi</option>

                                                                <option value="58">Salyan</option>

                                                                <option value="09">Sankhuwasabha</option>

                                                                <option value="10">Saptari</option>

                                                                <option value="22">Sarlahi</option>

                                                                <option value="18">Sindhuli</option>

                                                                <option value="24">Sindhupalchowk</option>

                                                                <option value="15">Siraha</option>

                                                                <option value="14">Solukhumbu</option>

                                                                <option value="06">Sunsari</option>

                                                                <option value="63">Surkhet</option>

                                                                <option value="42">Syangja</option>

                                                                <option value="37">Tanahu</option>

                                                                <option value="04">Taplejung</option>

                                                                <option value="08">Terathum</option>

                                                                <option value="11">Udayapur</option>

                                                                <option value="77">West Rukum</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label>Property Address</label>
                                                            <input class="form-control" type="text" id="text"
                                                                   name="address" placeholder=" " required="">
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label>Location Nature</label>
                                                            <input class="form-control" type="text" id="text"
                                                                   name="location_nature" placeholder=" " required="">
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label>Building Stories</label>
                                                            <input class="form-control" type="text" id="text"
                                                                   name="building_stories" placeholder=" " required="">
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label>Class of Construction</label>
                                                            <select name="construction_class"
                                                                    class="form-control class_construction_code"
                                                                    onchange="getPIResult()" required="required">
                                                                <option value="">- Select -</option>

                                                                <option value="0">1st Class Construction
                                                                </option>

                                                                <option value="1">2nd Class Construction
                                                                </option>

                                                                <option value="2">3rd Class Construction
                                                                </option>

                                                                <option value="3">Open</option>

                                                                <option value="4">1st &amp; 2nd</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label>Is Pool?</label>
                                                            <select name="pool" class="form-control pp"
                                                                    onchange="getTPCalculation()"
                                                                    required="required">
                                                                <option value="">- Select Type -
                                                                </option>
                                                                <option value="Yes">Yes</option>
                                                                <option value="No">No</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label>Value of Property/House</label>
                                                            <input class="form-control" placeholder=" "
                                                                   name="value_property" type="number" value=""
                                                                   required="">
                                                        </div>
                                                        <div class="form-group col-sm-4">
                                                            <label>Remarks (Kitta Number)</label>
                                                            <input class="form-control" placeholder=""
                                                                   name="remarks" type="text" value="" required="">
                                                        </div>
                                                        <div class="form-group col-md-4 col-xs-8">
                                                            <label>Upload Images [Multiple Select upto
                                                                5]</label>
                                                            <input type="file" name="image[]" multiple="multiple"
                                                                   id="file" onchange="checkFileSize('file');">
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label>Policy Effective
                                                                From[yyyy-mm-dd]:</label>
                                                            <input type="date" name="policy_effective"
                                                                   class="form-control  effective_to">
                                                            <p style="font-size:12px"><span
                                                                    style="color:#F00">Note:</span> If
                                                                your payment date is after above date,
                                                                policy will be effective from payment
                                                                date.&nbsp;&nbsp;&nbsp;</p>
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                            <label>Policy Expiry
                                                                Date[yyyy-mm-dd]:</label>
                                                            <input type="date" name="policy_expiry"
                                                                   class="form-control effective_to" value=""
                                                                   onchange="getPIResult()">
                                                        </div>
                                                        <div class="form-group terms-area  col-sm-12">
                                                            <input type="checkbox" name="agree" id="agree"
                                                                   class="agree" required="required">
                                                            <p class="terms-text">
                                                                accept the Terms of Service. I
                                                                hereby declare that the details
                                                                furnished above are true and
                                                                correct</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <input type="button" name="previous"
                                                       class="previous action-button-previous" value="Previous"/>
                                                <button type="submit" name="Submit" class="btn btn-primary"
                                                        value="Submit"></button>
                                            </fieldset>
                                            {{--                                            <fieldset>--}}
                                            {{--                                                <div class="form-card">--}}
                                            {{--                                                    <h2 class="purple-text text-center"><strong>SUCCESS--}}
                                            {{--                                                            !</strong></h2> <br>--}}
                                            {{--                                                    <div class="row justify-content-center">--}}
                                            {{--                                                        <div class="col-3">--}}
                                            {{--                                                            <div class="successful-icon">--}}
                                            {{--                                                                <img src="images/icons/right-icon.png"--}}
                                            {{--                                                                     class="fit-image">--}}
                                            {{--                                                            </div>--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                    <div class="row justify-content-center">--}}
                                            {{--                                                        <div class="col-7 text-center">--}}
                                            {{--                                                            <h5 class="purple-text text-center">You Have--}}
                                            {{--                                                                Successfully Submitted</h5>--}}
                                            {{--                                                        </div>--}}
                                            {{--                                                    </div>--}}
                                            {{--                                                </div>--}}
                                            {{--                                            </fieldset>--}}
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade pt-renew bg-form-grey" id="property-tab-1-2">
                            <form class="product-re-cl-form" autocomplete="on" id="renew-form" name="renew-form"
                                  method="post" action="{{url('/renew-insurance')}}">
                                @csrf
                                <input type="hidden" name="insurance_type" value="property">
                                @include('frontend.pages.renew')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End Pages Title  -->
    <!-- Back to top Link -->
    <div id="to-top" class="main-bg"><span class="fa fa-chevron-up"></span></div>
    </div>

@endsection
@section('scripts')
    <script>
        $(document).ready(function () {

            var current_fs, next_fs, previous_fs; //fieldsets
            var opacity;
            var current = 1;
            var steps = $("fieldset").length;

            setProgressBar(current);

            $(".next").click(function () {

                current_fs = $(this).parent();
                next_fs = $(this).parent().next();

                //Add Class Active
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                //show the next fieldset
                next_fs.show();
                //hide the current fieldset with style
                current_fs.animate({opacity: 0}, {
                    step: function (now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({'opacity': opacity});
                    },
                    duration: 500
                });
                setProgressBar(++current);
            });

            $(".previous").click(function () {

                current_fs = $(this).parent();
                previous_fs = $(this).parent().prev();

                //Remove class active
                $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

                //show the previous fieldset
                previous_fs.show();

                //hide the current fieldset with style
                current_fs.animate({opacity: 0}, {
                    step: function (now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        previous_fs.css({'opacity': opacity});
                    },
                    duration: 500
                });
                setProgressBar(--current);
            });

            function setProgressBar(curStep) {
                var percent = parseFloat(170 / steps) * curStep;
                percent = percent.toFixed();
                $(".progress-bar")
                    .css("width", percent + "%")
            }

            $(".submit").click(function () {
                return false;
            })

        });
    </script>
@endsection
