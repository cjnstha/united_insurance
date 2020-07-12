@extends('layouts.frontend.master')
@section('title')
    Passenger Calculator
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
                            <li class="active"><a href="{{url('/calculator-passenger')}}"> Passenger Carrier <i
                                        class="fa fa-angle-right"></i></a></li>
                            <li><a href="{{url('/calculator-travel')}}">Travel <i class="fa fa-angle-right"></i></a>
                            </li>
                            <li><a href="{{url('/calculator-taxi')}}"> Taxi <i class="fa fa-angle-right"></i></a></li>
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
                                        <label for="passengercarrying" data-toggle="tooltip" data-placement="top"
                                               title="Carrying capacity of vehicle">Passenger Carrying Capacity</label>
                                        <div class="input-group">
                                            <input type="number" class="passengercarrying form-control" name=""
                                                   id="passengercarrying" min="0"
                                                   aria-describedby="passengercarrying-addon" required>
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="passengercarrying-addon">Seats</span>
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
                                            <input type="number" class="ageOfVehicle form-control" name="" id="age"
                                                   pattern="[0-9]*" placeholder="2"
                                                   aria-describedby="ageOfVehicle-addon"
                                                   min="0" max="100" required>
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
                                            <input type="text" class="sumInsured form-control" name="" id="sum_insured"
                                                   pattern="[0-9]*" placeholder="25000" required>
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
                                                   name="directbusiness" id="direct-business-Y" value="yes" checked>
                                            <label class="form-check-label" for="direct-business-Y">Yes</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="directBusiness form-check-input" type="radio"
                                                   name="directbusiness" id="direct-business-N" value="no">
                                            <label class="form-check-label" for="direct-business-N">No</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="eodAmount">Access Own Damage</label>
                                        <select class="eodAmount form-control" id="eod" required>
                                            <option value="0">0</option>
                                            <option value="1000">1000</option>
                                            <option value="2000">2000</option>
                                            <option value="5000">5000</option>
                                            <option value="10000">10000</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="noclaim">No Claim Discount</label>
                                        <select class="noClaimDiscount form-control" id="noclaim" required>
                                            <option value="0">0%</option>
                                            <option value="0.15">15%</option>
                                            <option value="0.25">25%</option>
                                            <option value="0.30">30%</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="unnamedHelper">Unnamed Helper</label>
                                        <input type="number" class="unnamedHelper form-control" name="unnamedHelper"
                                               id="unnamedHelper" value="1" readonly>
                                        <div class="invalid-feedback">
                                            Please enter a valid value.
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="unnamedDriver">Unnamed Driver</label>
                                        <input type="text" class="unnamedDriver form-control" name="unnamedDriver"
                                               id="unnamedDriver" value="1" readonly>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Own Passengers?</label>
                                        <div class="form-check-inline">
                                            <input class="ownPassenger form-check-input" type="radio"
                                                   name="ownPassenger" id="own-passenger-Y" value="yes" checked>
                                            <label class="form-check-label" for="own-passenger-Y">Yes</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="ownPassenger form-check-input" type="radio"
                                                   name="ownPassenger" id="own-passenger-N" value="no">
                                            <label class="form-check-label" for="own-passenger-N">No</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Towing Charge?</label>
                                        <div class="form-check-inline">
                                            <input class="towingCharge form-check-input" type="radio"
                                                   name="towingCharge" id="towing-charge-Y" value="yes" checked>
                                            <label class="form-check-label" for="towing-charge-Y">Yes</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="towingCharge form-check-input" type="radio"
                                                   name="towingCharge" id="towing-charge-N" value="no">
                                            <label class="form-check-label" for="towing-charge-N">No</label>
                                        </div>
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
    "use strict"

    function calc(e) {
        var passenger_carrying_capacity = Number(document.querySelector("#passengercarrying").value);
        var age = Number(document.querySelector("#age").value);
        var sum_insured = Number(document.querySelector("#sum_insured").value);
        var sum_insured_trailor = 0;
        var sum_insured_driver = 500000;
        var sum_insured_passenger = 500000;
        var sum_insured_conductor = 0;
        var unnamedDriver = Number(document.querySelector("#unnamedDriver").value);
        var unnamedHelper = Number(document.querySelector("#unnamedHelper").value);
        var sum_insured_helper = 0;
        var eod = Number(document.querySelector("#eod").value);
        var noclaim = Number(document.querySelector("#noclaim").value);
        var passengerdirectbusiness = document.querySelector("input[name='directbusiness']:checked").value;
        var roitdamage = document.querySelector("input[name='extraDamage']:checked").value;
        var ownpassenger = document.querySelector("input[name='ownPassenger']:checked").value;
        var towing = document.querySelector("input[name='towingCharge']:checked").value;


        var basicpremium;
        if (passenger_carrying_capacity <= 18) {
            basicpremium = sum_insured * 1.25 / 100;
        } else {
            basicpremium = sum_insured * 1.25 / 100;
        }
        console.log(basicpremium);

        var minusbasicpremium;
        if (passenger_carrying_capacity <= 18) {
            minusbasicpremium = 2000;
        } else {
            minusbasicpremium = 2500;
        }
        console.log(minusbasicpremium);

        var totpremium = basicpremium - minusbasicpremium;
        console.log(totpremium);

        var sum_insured_trailor_result;
        if (sum_insured_trailor < 0 || sum_insured_trailor > 0) {
            sum_insured_trailor_result = (sum_insured_trailor * 0.0125) - 200;
        } else {
            sum_insured_trailor_result = 0;
        }
        console.log(sum_insured_trailor_result);

        var addedoftwo = totpremium + sum_insured_trailor_result;
        console.log(addedoftwo);

        var ageResult;
        if (age < 5) {
            ageResult = 0;
        } else if (age <= 10) {
            ageResult = addedoftwo * 0.10;
        } else {
            ageResult = addedoftwo * 0.20;
        }
        console.log(ageResult);

        var afterageResult = addedoftwo + ageResult;
        console.log(afterageResult);

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

        var lessResult;
        lessResult = (afterageResult * less);
        console.log(lessResult);

        var ageResultAns;
        if (age < 5) {
            ageResult = 2000;
        } else if (age <= 10) {
            ageResultAns = 4000;
        } else {
            ageResultAns = 6000;
        }
        console.log(ageResult);

        var resultComp = afterageResult - lessResult;
        var noClaimDiscountResult = resultComp * noclaim;
        console.log(noClaimDiscountResult);

        var afternoclaim = resultComp - noClaimDiscountResult;
        console.log(afternoclaim);

        var ownGoodsCarryingResult = ownpassenger == 'yes' ? 0.25 : 0;
        console.log(ownGoodsCarryingResult);

        var ownGoodsCarryingTot = (afternoclaim * ownGoodsCarryingResult);
        console.log(ownGoodsCarryingTot);

        var aboveMinus = afternoclaim - ownGoodsCarryingTot;
        console.log(aboveMinus);

        var TowingYes = towing == 'yes' ? 500 : 0;
        console.log(TowingYes);

        var passengerDirectBusiness = passengerdirectbusiness == 'yes' ? (aboveMinus + TowingYes) * 10 / 100 : 0;
        console.log(passengerDirectBusiness);

        var normalPremium = aboveMinus + TowingYes - passengerDirectBusiness;
        console.log(normalPremium);

        var thirdpartyliability;

        if (passenger_carrying_capacity <= 14) {
            thirdpartyliability = 6500;
        } else if (passenger_carrying_capacity <= 18) {
            thirdpartyliability = 7500;
        } else if (passenger_carrying_capacity <= 35) {
            thirdpartyliability = 9000;
        } else if (passenger_carrying_capacity > 35) {
            thirdpartyliability = 10000;
        }
        console.log(thirdpartyliability);

        var noClaimDiscount = thirdpartyliability * noclaim;
        console.log(noClaimDiscount);

        var thirdpartypremium = thirdpartyliability - noClaimDiscount;
        console.log(noClaimDiscount);

        var addunnameddriver = (sum_insured_driver * 1.4) / 1000;
        console.log(addunnameddriver);

        var addunnamedhelper = (sum_insured_helper * 1.4) / 1000;
        console.log(addunnamedhelper);

        var addunnamedconductor = (0 * 1.4) / 1000;
        console.log(addunnamedconductor);

        var addunnamedpassenger = (passenger_carrying_capacity * sum_insured_passenger * 1.4) / 1000;
        console.log(addunnamedpassenger);

        var thirdtotall = (addunnamedpassenger + addunnamedconductor);
        console.log(thirdtotall);

        var addunnamedtotpre = addunnameddriver + thirdtotall;
        console.log(addunnamedtotpre);

        var riotDamageResult = (sum_insured + sum_insured_trailor) * 0.002;
        console.log(riotDamageResult);

        var addrsdpassenger = (passenger_carrying_capacity * sum_insured_passenger * 0.25) / 1000;
        console.log(addrsdpassenger);

        var addrsddriverhelpercond = (sum_insured_driver + sum_insured_helper + sum_insured_conductor) * 0.25 / 1000;
        console.log(addrsddriverhelpercond);

        var totalpremium = thirdpartyliability + normalPremium + addunnamedtotpre + riotDamageResult + addrsdpassenger +
            addrsddriverhelpercond;
        console.log(totalpremium);

        var stamp = 20;

        var afterstamptotal = totalpremium + stamp;
        console.log(afterstamptotal);

        var aftervattotal = 0.13 * afterstamptotal;
        console.log(aftervattotal);

        var net = afterstamptotal + aftervattotal;
        console.log(net);

        //third party

        var PaxPremium = (unnamedDriver + unnamedHelper) * 700;

        var poolPre = roitdamage == 'yes' ? (unnamedDriver + unnamedHelper) * 125 : 0;

        var subtotalthird = thirdpartyliability + PaxPremium + poolPre + stamp;
        var vatthird = 0.13 * subtotalthird;

        var totalthird = subtotalthird + vatthird;

        var viewresult =
            '<table class="table table-striped table-sm">\n                        <thead>\n                            <tr>\n                                <th colspan="3">Passenger/Carrying</th>\n                            </tr>\n                        </thead>\n                        <tbody>\n                            <tr>\n                                <td>Normal Premium</td>\n                                <td>:</td>\n                                <td>NPR ' +
            normalPremium.toFixed(2) +
            "</td>\n                            </tr>\n                            <tr>\n                                <td>Third Party Premium</td>\n                                <td>:</td>\n                                <td>NPR " +
            thirdpartypremium.toFixed(2) +
            "</td>\n                            </tr>\n                            <tr>\n                                <td>Total Amount</td>\n                                <td>:</td>\n                                <td>NPR " +
            totalpremium.toFixed(2) +
            "</td>\n                            </tr>\n                            <tr>\n                                <td>VAT</td>\n                                <td>:</td>\n                                <td>NPR " +
            aftervattotal.toFixed(2) +
            "</td>\n                            </tr>\n                            <tr>\n                                <td>Net Premium</td>\n                                <td>:</td>\n                                <td>NPR " +
            net.toFixed(2) +
            '</td>\n                            </tr>\n                        </tbody>\n                    </table><br>\n                    <table class="table table-striped table-sm">\n                        <thead>\n                            <tr>\n                                <th colspan="3">Passenger/Carrying [ Third Party ]</th>\n                            </tr>\n                        </thead>\n                        <tbody>\n                            <tr>\n                                <td>Premium Based On CC</td>\n                                <td>:</td>\n                                <td>NPR ' +
            thirdpartyliability.toFixed(2) +
            "</td>\n                            </tr>\n                            <tr>\n                                <td>Pax Premium</td>\n                                <td>:</td>\n                                <td>NPR " +
            PaxPremium.toFixed(2) +
            "</td>\n                            </tr>\n                            <tr>\n                                <td>Pool Premium</td>\n                                <td>:</td>\n                                <td>NPR " +
            poolPre.toFixed(2) +
            "</td>\n                            </tr>\n                            <tr>\n                                <td>Stamp</td>\n                                <td>:</td>\n                                <td>NPR " +
            stamp.toFixed(2) +
            "</td>\n                            </tr>\n                            <tr>\n                                <td>Sub Total</td>\n                                <td>:</td>\n                                <td>NPR " +
            subtotalthird.toFixed(2) +
            "</td>\n                            </tr>\n                            <tr>\n                                <td>Total Amount</td>\n                                <td>:</td>\n                                <td>NPR " +
            totalthird.toFixed(2) +
            "</td>\n                            </tr>\n                        </tbody>\n                    </table>";
        document.querySelector(
            ".calculate__inquiry__form__calculation"
        ).innerHTML = viewresult;

        // var viewresult = `<table class="table table-striped table-sm">
        //                 <thead>
        //                     <tr>
        //                         <th colspan="3">Passenger/Carrying</th>
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
        //                         <td>NPR ${totalpremium.toFixed(2)}</td>
        //                     </tr>
        //                     <tr>
        //                         <td>VAT</td>
        //                         <td>:</td>
        //                         <td>NPR ${aftervattotal.toFixed(2)}</td>
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
        //                         <th colspan="3">Passenger/Carrying [ Third Party ]</th>
        //                     </tr>
        //                 </thead>
        //                 <tbody>
        //                     <tr>
        //                         <td>Premium Based On CC</td>
        //                         <td>:</td>
        //                         <td>NPR ${thirdpartyliability.toFixed(2)}</td>
        //                     </tr>
        //                     <tr>
        //                         <td>Pax Premium</td>
        //                         <td>:</td>
        //                         <td>NPR ${PaxPremium.toFixed(2)}</td>
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
        //                         <td>Total Amount</td>
        //                         <td>:</td>
        //                         <td>NPR ${totalthird.toFixed(2)}</td>
        //                     </tr>
        //                 </tbody>
        //             </table>`;
        // document.querySelector(".calculate__inquiry__form__calculation").innerHTML = viewresult;

    }
</script>
@endsection
