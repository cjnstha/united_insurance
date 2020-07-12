@extends('layouts.frontend.master')
@section('title')
    MotorCycle Calculator
@endsection
@section('contents')
    <!-- ============================ financial-statements ================================= -->
    <section class="financial-statements">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="tab_nav_side">
                        <ul class="nav-side nav-tabs  tabs-left"><!-- 'tabs-right' for right tabs -->
                            <li class="active"><a href="{{url('/calculator-motorcycle')}}"> MotorCycle <i
                                        class="fa fa-angle-right"></i></a></li>
                            <li><a href="{{url('/calculator-vechile')}}"> Private Car <i class="fa fa-angle-right"></i></a>
                            </li>
                            <li><a href="{{url('/calculator-goods')}}"> Goods Carrier <i class="fa fa-angle-right"></i></a>
                            </li>
                            <li><a href="{{url('/calculator-passenger')}}"> Passenger Carrier <i
                                        class="fa fa-angle-right"></i></a></li>
                            <li><a href="{{url('/calculator-travel')}}">Travel <i class="fa fa-angle-right"></i></a></li>
                            <li><a href="{{url('/calculator-taxi')}}"> Taxi <i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                </div>

                <!-- =================== services single content ================== -->
                <div class="calculate__inquiry col-md-9">
                    <div class="calculate__inquiry--motorcycle active">
                        <div class="calculate__inquiry__form">
                            <section class="form--comprehensive form__data active">
                                <form action="" class="needs-validation">
                                    <div class="form-group col-md-6">
                                        <label for="cc" data-toggle="tooltip" data-placement="top"
                                               title="Cubic capacity of vehicle">Cubic Capacity</label>
                                        <div class="input-group">
                                            <input type="text" class="cubicCapacity form-control" name="" id="cc"
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
                                            <input type="number" class="ageOfVehicle form-control" name="" id="age"
                                                   pattern="[0-9]*" placeholder="2"
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
                                        <select class="eodAmount form-control" id="eod" required>
                                            <option value="0">0</option>
                                            <option value="500">500</option>
                                            <option value="1000">1000</option>
                                            <option value="2000">2000</option>
                                            <option value="10000">10000</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="noclaim">No Claim Discount</label>
                                        <select class="noClaimDiscount form-control" id="noclaim" required>
                                            <option value="0">0%</option>
                                            <option value="0.15">15%</option>
                                            <option value="0.25">25%</option>
                                            <option value="0.35">35%</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="">Riot/ Strike/ Malicious/ Terrorism Damage ?</label>
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
                                    <h3 class="text-center">Calculation Result Here</h3>
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
<!-- ======================= Js File ====================== -->
@section('scripts')

    <script>
        "use strict";

        function calc(e) {
            var cc = Number(document.querySelector("#cc").value);
            var age = Number(document.querySelector("#age").value);
            var sum_insured = Number(document.querySelector("#sum_insured").value);
            var driver = 500000;
            var passenger = 500000;
            var eod = Number(document.querySelector("#eod").value);
            var noclaim = Number(document.querySelector("#noclaim").value);
            var directbusiness = document.querySelector("input[name='directbusiness']:checked").value;
            var roitdamage = document.querySelector("input[name='extraDamage']:checked").value;

            var basicPremium1 = sum_insured * 1.5 / 100;
            var basicPremium2;
            if (age < 5)
                basicPremium2 = 0;
            else if (age <= 10) {
                basicPremium2 = 0.15 * basicPremium1;
            } else {
                basicPremium2 = 0.25 * basicPremium1;
            }
            var basicPremium = basicPremium1 + basicPremium2;
            console.log(basicPremium);

            var less;
            if (eod == 0) {
                less = 0;
            } else if (eod == 500) {
                less = 10;
            } else if (eod == 1000) {
                less = 10;
            } else if (eod >= 1000) {
                less = 20;
            }

            var excessOwnDamage = basicPremium * less / 100;

            var result1 = basicPremium - excessOwnDamage;
            console.log(result1);

            var claimdiscount = result1 * noclaim;

            var result2 = result1 - claimdiscount;
            console.log(result2);
            var directbusinessdiscount = directbusiness == 'yes' ? result2 * 10 / 100 : 0;

            var result3 = result2 - directbusinessdiscount;
            console.log(directbusinessdiscount);

            var normalPremium = result3 >= 1000 ? result3 : 1000;

            var thirdpartyliability;
            if (cc < 150) {
                thirdpartyliability = 1500;
            } else if (cc <= 250) {
                thirdpartyliability = 1700;
            } else {
                thirdpartyliability = 1900;
            }
            var noclaimdiscount = noclaim * thirdpartyliability;
            var result4 = thirdpartyliability - noclaimdiscount;
            var thirdpartypremium = result4;

            var roitdamageall = roitdamage == 'yes' ? (driver + passenger) * 0.25 / 1000 : 0;
            var roitdamagevehicle = roitdamage == 'yes' ? sum_insured * 0.15 / 100 : 0;

            var totalresult = normalPremium + thirdpartypremium + roitdamageall + roitdamagevehicle;

            var stampduty = 20;

            var total = totalresult + stampduty;

            var vat = total * 13 / 100;

            var net = total + vat;

            //for third party

            var PaxPremium = roitdamage == 'yes' ? (2 * 125) : 0;

            var totalthirdparty = thirdpartyliability + PaxPremium + stampduty;

            var vatthird = 0.13 * totalthirdparty;

            var totalall = totalthirdparty + vatthird;

            var viewresult =
                '<table class="table table-striped table-sm">\n                        <thead>\n                            <tr>\n                                <th colspan="3">Motorcycle/Scooter</th>\n                            </tr>\n                        </thead>\n                        <tbody>\n                            <tr>\n                                <td> Normal Premium</td>\n                                <td>:</td>\n                                <td>NPR ' +
                normalPremium.toFixed(2) +
                "</td>\n                            </tr>\n                            <tr>\n                                <td>Third Party Premium</td>\n                                <td>:</td>\n                                <td>NPR " +
                thirdpartypremium.toFixed(2) +
                "</td>\n                            </tr>\n                            <tr>\n                                <td>Total Amount</td>\n                                <td>:</td>\n                                <td>NPR " +
                totalresult.toFixed(2) +
                "</td>\n                            </tr>\n                            <tr>\n                                <td>Stamp</td>\n                                <td>:</td>\n                                <td>NPR " +
                stampduty.toFixed(2) +
                "</td>\n                            </tr>\n                            <tr>\n                                <td>Sub Total</td>\n                                <td>:</td>\n                                <td>NPR " +
                total.toFixed(2) +
                "</td>\n                            </tr>\n                            <tr>\n                                <td>VAT</td>\n                                <td>:</td>\n                                <td>NPR " +
                vat.toFixed(2) +
                "</td>\n                            </tr>\n                            <tr>\n                                <td>Net Premium</td>\n                                <td>:</td>\n                                <td>NPR " +
                net.toFixed(2) +
                '</td>\n                            </tr>\n                        </tbody>\n                    </table><br>\n                    <table class="table table-striped table-sm">\n                        <thead>\n                            <tr>\n                                <th colspan="3">Motorcycle/Scooter [ Third Party ]</th>\n                            </tr>\n                            </thead>\n                        <tbody>\n                            <tr>\n                                <td>Premium Based On CC</td>\n                                <td>:</td>\n                                <td>NPR ' +
                thirdpartyliability.toFixed(2) +
                "</td>\n                            </tr>\n                            <tr>\n                                <td>Pax Premium</td>\n                                <td>:</td>\n                                <td>NPR " +
                PaxPremium.toFixed(2) +
                "</td>\n                            </tr>\n                            <tr>\n                                <td>Stamp</td>\n                                <td>:</td>\n                                <td>NPR " +
                stampduty.toFixed(2) +
                "</td>\n                            </tr>\n                            <tr>\n                                <td>Sub Total</td>\n                                <td>:</td>\n                                <td>NPR " +
                totalthirdparty.toFixed(2) +
                "</td>\n                            </tr>\n\n                            <tr>\n                                <td>Vat</td>\n                                <td>:</td>\n                                <td>NPR " +
                vatthird.toFixed(2) +
                "</td>\n                            </tr>\n\n                            <tr>\n                                <td>Total</td>\n                                <td>:</td>\n                                <td>NPR " +
                totalall.toFixed(2) +
                "</td>\n                            </tr>\n                            \n                        </tbody>\n                    </table>";
            document.querySelector(
                ".calculate__inquiry__form__calculation"
            ).innerHTML = viewresult;

            // var viewresult = `<table class="table table-striped table-sm">
            //                 <thead>
            //                     <tr>
            //                         <th colspan="3">Motorcycle/Scooter</th>
            //                     </tr>
            //                 </thead>
            //                 <tbody>
            //                     <tr>
            //                         <td> Normal Premium</td>
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
            //                         <td>NPR ${totalresult.toFixed(2)}</td>
            //                     </tr>
            //                     <tr>
            //                         <td>Stamp</td>
            //                         <td>:</td>
            //                         <td>NPR ${stampduty.toFixed(2)}</td>
            //                     </tr>
            //                     <tr>
            //                         <td>Sub Total</td>
            //                         <td>:</td>
            //                         <td>NPR ${total.toFixed(2)}</td>
            //                     </tr>
            //                     <tr>
            //                         <td>VAT</td>
            //                         <td>:</td>
            //                         <td>NPR ${vat.toFixed(2)}</td>
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
            //                         <th colspan="3">Motorcycle/Scooter [ Third Party ]</th>
            //                     </tr>
            //                     </thead>
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
            //                         <td>Stamp</td>
            //                         <td>:</td>
            //                         <td>NPR ${stampduty.toFixed(2)}</td>
            //                     </tr>
            //                     <tr>
            //                         <td>Sub Total</td>
            //                         <td>:</td>
            //                         <td>NPR ${totalthirdparty.toFixed(2)}</td>
            //                     </tr>

            //                     <tr>
            //                         <td>Vat</td>
            //                         <td>:</td>
            //                         <td>NPR ${vatthird.toFixed(2)}</td>
            //                     </tr>

            //                     <tr>
            //                         <td>Total</td>
            //                         <td>:</td>
            //                         <td>NPR ${totalall.toFixed(2)}</td>
            //                     </tr>

            //                 </tbody>
            //             </table>`;
            // document.querySelector(".calculate__inquiry__form__calculation").innerHTML = viewresult;

        }
    </script>


@endsection
