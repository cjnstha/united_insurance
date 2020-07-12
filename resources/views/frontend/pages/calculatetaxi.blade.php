@extends('layouts.frontend.master')
@section('title')
    Taxi Calculator
@endsection
@section('contents')
    <!-- ============================ financial-statements ================================= -->
    <section class="financial-statements">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="tab_nav_side">
                        <!-- Nav tabs -->
                        <ul class="nav-side nav-tabs  tabs-left"><!-- 'tabs-right' for right tabs -->
                            <li><a href="{{url('/calculator-motorcycle')}}"> MotorCycle <i
                                        class="fa fa-angle-right"></i></a></li>
                            <li><a href="{{url('/calculator-vechile')}}"> Private Car <i class="fa fa-angle-right"></i></a>
                            </li>
                            <li><a href="{{url('/calculator-goods')}}"> Goods Carrier <i class="fa fa-angle-right"></i></a>
                            </li>
                            <li><a href="{{url('/calculator-passenger')}}"> Passenger Carrier <i
                                        class="fa fa-angle-right"></i></a></li>
                            <li><a href="{{url('/calculator-travel')}}">Travel <i class="fa fa-angle-right"></i></a>
                            </li>
                            <li class="active"><a href="{{url('/calculator-taxi')}}"> Taxi <i
                                        class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                </div>

                <!-- =================== services single content ================== -->
                <div class="calculate__inquiry">
                    <div class="calculate__inquiry--motorcycle active">
                        <div class="calculate__inquiry__form">
                            <section class="form--comprehensive form__data active">
                                <form action="" class="needs-validation">
                                    <div class="form-group col-md-6">
                                        <label for="cc" data-toggle="tooltip" data-placement="top"
                                               title="Cubic capacity of vehicle">Cubic Capacity</label>
                                        <div class="input-group">
                                            <input type="text" class="cubicCapacity form-control" name="cc" id="cc"
                                                   pattern="[0-9]*" placeholder="796"
                                                   aria-describedby="cubicCapacity-addon"
                                                   required>
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="cubicCapacity-addon">CC</span>
                                            </div>
                                            <div class="invalid-feedback">
                                                Please enter a valid value.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="age" data-toggle="tooltip" data-placement="top"
                                               title="How old is the vehicle">Age Of Vehicle</label>
                                        <div class="input-group">
                                            <input type="number" class="ageOfVehicle form-control" name="age" id="age"
                                                   pattern="[0-9]{2}" placeholder="2"
                                                   aria-describedby="ageOfVehicle-addon" min="0"
                                                   max="100" required>
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="ageOfVehicle-addon">Yrs</span>
                                            </div>
                                            <div class="invalid-feedback">
                                                Please enter a valid value.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="sum_insured" data-toggle="tooltip" data-placement="top"
                                               title="Amount to be insured">Sum Insured</label>
                                        <div class="input-group">
                                            <input type="text" class="sumInsured form-control" name="sum_insured"
                                                   id="sum_insured" pattern="[0-9]*" placeholder="25000" required>
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="ageOfVehicle-addon">NRP</span>
                                            </div>
                                            <div class="invalid-feedback">
                                                Please enter a valid value.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Direct Business?</label>
                                        <div class="form-check-inline">
                                            <input class="directBusiness form-check-input" type="radio"
                                                   name="directbusiness"
                                                   id="direct-business-Y" value="yes" checked>
                                            <label class="form-check-label" for="direct-business-Y">Yes</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="directBusiness form-check-input" type="radio"
                                                   name="directbusiness"
                                                   id="direct-business-N" value="no">
                                            <label class="form-check-label" for="direct-business-N">No</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="eodAmount">EOD Amount</label>
                                        <select class="eodAmount form-control" id="eod" name="eod">
                                            <option value="0">0</option>
                                            <option value="1000">1000</option>
                                            <option value="2000">2000</option>
                                            <option value="5000">5000</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="noclaim">No Claim Discount</label>
                                        <select class="noClaimDiscount form-control" id="noclaim" name="noclaim">
                                            <option value="0">0%</option>
                                            <option value="0.20">20%</option>
                                            <option value="0.30">30%</option>
                                            <option value="0.40">40%</option>
                                            <option value="0.45">45%</option>
                                            <option value="0.50">50%</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Is Private Hire?</label>
                                        <div class="form-check-inline">
                                            <input class="privateHire form-check-input" type="radio" name="privateHire"
                                                   id="private-hire-Y" value="yes" checked>
                                            <label class="form-check-label" for="private-hire-Y">Yes</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="privateHire form-check-input" type="radio" name="privateHire"
                                                   id="private-hire-N" value="no">
                                            <label class="form-check-label" for="private-hire-N">No</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Towing Charge?</label>
                                        <div class="form-check-inline">
                                            <input class="towingCharge form-check-input" type="radio"
                                                   name="towingCharge"
                                                   id="towing-charge-Y" value="yes" checked>
                                            <label class="form-check-label" for="towing-charge-Y">Yes</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="towingCharge form-check-input" type="radio"
                                                   name="towingCharge"
                                                   id="towing-charge-N" value="no">
                                            <label class="form-check-label" for="towing-charge-N">No</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="unnamedPassenger">Unnamed Passenger</label>
                                        <input type="number" class="unnamedPassenger form-control" name="unnamedDriver"
                                               id="unnamedPassenger" min="0" pattern="[0-9]*" required>
                                        <div class="invalid-feedback">
                                            Please enter a valid value.
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="unnamedDriver">Unnamed Driver</label>
                                        <input type="text" class="unnamedDriver form-control" name="unnamedDriver"
                                               id="unnamedDriver" value="1" readonly>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="">Riot/ Strike/ Malicious/ Terrorism Damage?</label>
                                        <div class="form-check-inline">
                                            <input class="extraDamage form-check-input" type="radio" name="extraDamage"
                                                   id="extra-damage-Y" value="yes" checked>
                                            <label class="form-check-label" for="extra-damage-Y">Yes</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="extraDamage form-check-input" type="radio" name="extraDamage"
                                                   id="extra-damage-N" value="no">
                                            <label class="form-check-label" for="extra-damage-N">No</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <button type="submit" class="btn btnGetCalculation"><i
                                                class="fa fa-calculator"></i>
                                            Calculate
                                        </button>
                                    </div>
                                </form>
                                <section class="calculate__inquiry__form__calculation">
                                </section>
                            </section>
                        </div>
                    </div>
                </div>
            </div><!-- End row -->
        </div> <!-- End container -->
    </section>

    <!-- Back to top Link -->
    <div id="to-top" class="main-bg"><span class="fa fa-chevron-up"></span></div>
@endsection
@section('scripts')
    <script type="text/javascript">
        "use strict";

        function calc(e) {
            var cc = Number(document.querySelector("#cc").value);
            var age = Number(document.querySelector("#age").value);
            var sum_insured = Number(document.querySelector("#sum_insured").value);
            var perperson = 500000;
            var driver = 500000;
            var unnamedPassenger = Number(document.querySelector("#unnamedPassenger").value);
            var unnamedDriver = Number(document.querySelector("#unnamedDriver").value);
            var eod = Number(document.querySelector("#eod").value);
            var noclaim = Number(document.querySelector("#noclaim").value);
            var directbusiness = document.querySelector("input[name='directbusiness']:checked").value;
            var roitdamage = document.querySelector("input[name='extraDamage']:checked").value;
            var towing = document.querySelector("input[name='towingCharge']:checked").value;

            var basicpremium;
            if (cc <= 1000) {
                basicpremium = 1000;
            } else if (cc <= 1600) {
                basicpremium = 1000
            } else {
                basicpremium = 500;
            }
            console.log(basicpremium);

            var basicpremiumplus = sum_insured * 2 / 100;
            console.log(basicpremiumplus);

            var ageResult;
            if (age <= 10) {
                ageResult = 0;
            } else {
                ageResult = 0.1 * (basicpremium + basicpremiumplus);
            }
            console.log(ageResult);

            var totalbasicpremium;
            totalbasicpremium = basicpremium + basicpremiumplus + ageResult;
            console.log(totalbasicpremium);

            var less;

            if (eod == 0) {
                less = 0;
            } else if (eod == 1000) {
                less = 0.10;
            } else if (eod == 2000) {
                less = 0.15;
            } else if (eod == 5000) {
                less = 0.20;
            } else {
                less = 0.25;
            }
            console.log(less);

            var afterOwnDamage = totalbasicpremium * less;
            console.log(afterOwnDamage);

            var compulsaryexcess;

            if (age < 5) {
                compulsaryexcess = 2000;
            } else if (age <= 10) {
                compulsaryexcess = 3000;
            } else {
                compulsaryexcess = 4000;
            }
            console.log(compulsaryexcess);

            var totalaftercompulsary = totalbasicpremium - afterOwnDamage;
            console.log(totalaftercompulsary);

            var totalaftercompulsaryagain = totalaftercompulsary * noclaim;
            console.log(totalaftercompulsaryagain);

            var totafteragaincom = totalaftercompulsary - totalaftercompulsaryagain;

            var TowingYes = towing == 'yes' ? 500 : 0;
            console.log(TowingYes);

            var addedtotafterandtowing = totafteragaincom + TowingYes;
            console.log(addedtotafterandtowing);

            var directBusiness = directbusiness == 'yes' ? addedtotafterandtowing * 10 / 100 : 0;
            console.log(directbusiness);

            var normalPremium = totafteragaincom - directBusiness + TowingYes;
            console.log(normalPremium);

            var thirdpartyliabilitypremium;
            if (cc < 1000) {
                thirdpartyliabilitypremium = 3500;
            } else if (cc <= 1600) {
                thirdpartyliabilitypremium = 4500;
            } else {
                thirdpartyliabilitypremium = 6500;
            }
            console.log(thirdpartyliabilitypremium);

            var afterthirdpartyagaincal = thirdpartyliabilitypremium * noclaim;
            console.log(afterthirdpartyagaincal);

            var thirdpartypremium = thirdpartyliabilitypremium - afterthirdpartyagaincal;
            console.log(thirdpartypremium);

            var addaccidentalcoverunnamedpassenger = (perperson * 1.4 / 1000) * unnamedPassenger;
            console.log(addaccidentalcoverunnamedpassenger);

            var addaccidentalcoverunnameddriver = (driver * 1.4 / 1000);

            roitdamage = (sum_insured * 0.2) / 100;
            console.log(roitdamage);

            var againaccicoverpassenger = (perperson * 0.25 / 1000) * unnamedPassenger;
            console.log(againaccicoverpassenger);

            var addrsdunnameddriver = (driver * 0.25) / 1000;
            console.log(addrsdunnameddriver);

            var subtot = normalPremium + thirdpartypremium + addaccidentalcoverunnamedpassenger +
                addaccidentalcoverunnameddriver + roitdamage + againaccicoverpassenger + addrsdunnameddriver;
            console.log(subtot);

            var stamp = 20;
            var total = stamp + subtot;
            console.log(total);

            var afteraddvat = 0.13 * total;
            console.log(afteraddvat);

            var net = total + afteraddvat;
            console.log(net);

            //for third party
            var basicthird;
            if (cc < 1000) {
                basicthird = 3500;
            } else if (cc > 1000 && cc <= 1600) {
                basicthird = 6500;
            } else {
                basicthird = 4500;
            }

            var paxpremium = (unnamedDriver + unnamedPassenger) * 700;

            var poolPre = roitdamage == 'yes' ? (unnamedDriver + unnamedPassenger) * 125 : 0;
            console.log(poolPre);

            var subtotalthird = basicthird + paxpremium + poolPre + stamp;
            var vatthird = 0.13 * subtotalthird;
            var vatn = vatthird;
            var totalthird = subtotalthird + vatthird;

            var viewresult =
                '<table class="table table-striped table-sm">\n                        <thead>\n                            <tr>\n                                <th colspan="3">Taxi</th>\n                            </tr>\n                        </thead>\n                        <tbody>\n                            <tr>\n                                <td>Normal Premium</td>\n                                <td>:</td>\n                                <td>NPR ' +
                normalPremium.toFixed(2) +
                "</td>\n                            </tr>\n                            <tr>\n                                <td>Third Party Premium</td>\n                                <td>:</td>\n                                <td>NPR " +
                thirdpartypremium.toFixed(2) +
                "</td>\n                            </tr>\n                            <tr>\n                                <td>Total Amount</td>\n                                <td>:</td>\n                                <td>NPR " +
                total.toFixed(2) +
                "</td>\n                            </tr>\n                            <tr>\n                                <td>VAT</td>\n                                <td>:</td>\n                                <td>NPR " +
                afteraddvat.toFixed(2) +
                "</td>\n                            </tr>\n                            <tr>\n                                <td>Net Premium</td>\n                                <td>:</td>\n                                <td>NPR " +
                net.toFixed(2) +
                '</td>\n                            </tr>\n                        </tbody>\n                    </table><br>\n                    <table class="table table-striped table-sm">\n                        <thead>\n                            <tr>\n                                <th colspan="3">Taxi [ Third Party ]</th>\n                            </tr>\n                        </thead>\n                        <tbody>\n                            <tr>\n                                <td>Premium Based On CC</td>\n                                <td>:</td>\n                                <td>NPR ' +
                basicthird.toFixed(2) +
                "</td>\n                            </tr>\n                            <tr>\n                                <td>Pax Premium</td>\n                                <td>:</td>\n                                <td>NPR " +
                paxpremium.toFixed(2) +
                "</td>\n                            </tr>\n                            <tr>\n                                <td>Pool Premium</td>\n                                <td>:</td>\n                                <td>NPR " +
                poolPre.toFixed(2) +
                "</td>\n                            </tr>\n                            <tr>\n                                <td>Stamp</td>\n                                <td>:</td>\n                                <td>NPR " +
                stamp.toFixed(2) +
                "</td>\n                            </tr>\n                            <tr>\n                                <td>Sub Total</td>\n                                <td>:</td>\n                                <td>NPR " +
                subtotalthird.toFixed(2) +
                "</td>\n                            </tr>\n                            <tr>\n                                <td>VAT</td>\n                                <td>:</td>\n                                <td>NPR " +
                vatn.toFixed(2) +
                "</td>\n                            </tr>\n                            <tr>\n                                <td>Total Amount</td>\n                                <td>:</td>\n                                <td>NPR " +
                totalthird.toFixed(2) +
                "</td>\n                            </tr>\n                        </tbody>\n                    </table>\n                    ";
            document.querySelector(
                ".calculate__inquiry__form__calculation"
            ).innerHTML = viewresult;

            // var viewresult = `<table class="table table-striped table-sm">
            //                 <thead>
            //                     <tr>
            //                         <th colspan="3">Taxi</th>
            //                     </tr>
            //                 </thead>
            //                 <tbody>
            //                     <tr>
            //                         <td>Normal Premium</td>
            //                         <td>:</td>
            //                         <td>NPR ${normalPremium.toFixed(2)}</td>
            //                     </tr>
            //                     <tr>
            //                         <td>Third Party Premium</td>
            //                         <td>:</td>
            //                         <td>NPR ${thirdpartypremium.toFixed(2)}</td>
            //                     </tr>
            //                     <tr>
            //                         <td>Total Amount</td>
            //                         <td>:</td>
            //                         <td>NPR ${total.toFixed(2)}</td>
            //                     </tr>
            //                     <tr>
            //                         <td>VAT</td>
            //                         <td>:</td>
            //                         <td>NPR ${afteraddvat.toFixed(2)}</td>
            //                     </tr>
            //                     <tr>
            //                         <td>Net Premium</td>
            //                         <td>:</td>
            //                         <td>NPR ${net.toFixed(2)}</td>
            //                     </tr>
            //                 </tbody>
            //             </table><br>
            //             <table class="table table-striped table-sm">
            //                 <thead>
            //                     <tr>
            //                         <th colspan="3">Taxi [ Third Party ]</th>
            //                     </tr>
            //                 </thead>
            //                 <tbody>
            //                     <tr>
            //                         <td>Premium Based On CC</td>
            //                         <td>:</td>
            //                         <td>NPR ${basicthird.toFixed(2)}</td>
            //                     </tr>
            //                     <tr>
            //                         <td>Pax Premium</td>
            //                         <td>:</td>
            //                         <td>NPR ${paxpremium.toFixed(2)}</td>
            //                     </tr>
            //                     <tr>
            //                         <td>Pool Premium</td>
            //                         <td>:</td>
            //                         <td>NPR ${poolPre.toFixed(2)}</td>
            //                     </tr>
            //                     <tr>
            //                         <td>Stamp</td>
            //                         <td>:</td>
            //                         <td>NPR ${stamp.toFixed(2)}</td>
            //                     </tr>
            //                     <tr>
            //                         <td>Sub Total</td>
            //                         <td>:</td>
            //                         <td>NPR ${subtotalthird.toFixed(2)}</td>
            //                     </tr>
            //                     <tr>
            //                         <td>VAT</td>
            //                         <td>:</td>
            //                         <td>NPR ${vatn.toFixed(2)}</td>
            //                     </tr>
            //                     <tr>
            //                         <td>Total Amount</td>
            //                         <td>:</td>
            //                         <td>NPR ${totalthird.toFixed(2)}</td>
            //                     </tr>
            //                 </tbody>
            //             </table>
            //             `;
            // document.querySelector(".calculate__inquiry__form__calculation").innerHTML = viewresult;

        }
    </script>
@endsection
