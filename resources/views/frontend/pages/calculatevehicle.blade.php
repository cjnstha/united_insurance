@extends('layouts.frontend.master')
@section('title')
    Vechile Calculator
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
                            <li class="active"><a href="{{url('/calculator-vechile')}}"> Private Car <i
                                        class="fa fa-angle-right"></i></a>
                            </li>
                            <li><a href="{{url('/calculator-goods')}}"> Goods Carrier <i class="fa fa-angle-right"></i></a>
                            </li>
                            <li><a href="{{url('/calculator-passenger')}}"> Passenger Carrier <i
                                        class="fa fa-angle-right"></i></a></li>
                            <li><a href="{{url('/calculator-travel')}}">Travel <i class="fa fa-angle-right"></i></a>
                            </li>
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
                                                   aria-describedby="cubicCapacity-addon" required>
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
                                                   pattern="[0-9]{2}" placeholder="2"
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
                                        <label for="eodAmount">EOD Amount</label>
                                        <select class="eodAmount form-control" id="eod" required>
                                            <option value="0">0</option>
                                            <option value="1000">1000</option>
                                            <option value="2000">2000</option>
                                            <option value="5000">5000</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="noclaim">No Claim Discount</label>
                                        <select class="noClaimDiscount form-control" id="noclaim" required>
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
                                                   name="towingCharge" id="towing-charge-Y" value="yes" checked>
                                            <label class="form-check-label" for="towing-charge-Y">Yes</label>
                                        </div>
                                        <div class="form-check-inline">
                                            <input class="towingCharge form-check-input" type="radio"
                                                   name="towingCharge" id="towing-charge-N" value="no">
                                            <label class="form-check-label" for="towing-charge-N">No</label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="unnamedPassenger">Unnamed Passenger</label>
                                        <input type="number" class="unnamedPassenger form-control"
                                               name="unnamedPassenger" id="unnamedPassenger" min="0" required>
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
    <!-- ============================ /Team ================================= -->
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
            var sumInsuredOfDriver = 500000;
            var perperson = 500000;
            var unnamedPassenger = Number(document.querySelector("#unnamedPassenger").value);
            var unnamedDriver = Number(document.querySelector("#unnamedDriver").value);
            var eod = Number(document.querySelector("#eod").value);
            var noclaim = Number(document.querySelector("#noclaim").value);
            var cardirectbusiness = document.querySelector("input[name='directbusiness']:checked").value;
            var privateHire = document.querySelector("input[name='privateHire']:checked").value;
            var roitdamage = document.querySelector("input[name='extraDamage']:checked").value;

            var towing = document.querySelector("input[name='towingCharge']:checked").value;
            var basicpremium;
            if (cc < 1000 && sum_insured <= 2000000) {
                basicpremium = (sum_insured * 0.84) / 100;
            } else if (cc < 1000 && sum_insured > 2000000) {
                basicpremium = (2000000 * 0.84) / 100 + ((sum_insured - 2000000) * 1.12) / 100;
            } else if (cc <= 1600 && sum_insured <= 2000000) {
                basicpremium = (sum_insured * 0.87) / 100;
            } else if (cc <= 1600 && sum_insured > 2000000) {
                basicpremium = (2000000 * 0.87) / 100 + ((sum_insured - 2000000) * 1.12) / 100;
            } else if (cc > 1600 && sum_insured <= 2000000) {
                basicpremium = (sum_insured * 0.9) / 100;
            } else if (cc > 1600 && sum_insured > 2000000) {
                basicpremium = (2000000 * 0.9) / 100 + (sum_insured - 2000000) * 1.12 / 100;
            } else {
                basicpremium = 0;
            }
            console.log(basicpremium);

            var basicMinus;

            if (cc < 1000) {
                basicMinus = 3000;
            } else if (cc <= 1600) {
                basicMinus = 4000;
            } else {
                basicMinus = 6000;
            }

            var basicPlus;

            if (age <= 10) {
                basicPlus = 0;
            } else {
                basicPlus = 0.1 * (basicpremium - basicMinus);
            }

            console.log(basicPlus);

            var premiumTot;

            premiumTot = basicpremium - basicMinus + basicPlus;

            var privateHireYes = privateHire == 'yes' ? premiumTot * 10 / 100 : 0;
            console.log(privateHireYes);

            var premiumPrivateTot = premiumTot + privateHireYes;
            console.log(premiumPrivateTot);

            var less;

            if (eod == 0) {
                less = 0;
            } else if (eod == 1000) {
                less = 0.1;
            } else if (eod == 2000) {
                less = 0.14;
            } else if (eod == 5000) {
                less = 0.20;
            } else {
                less = 0.25;
            }


            var lesstot = (premiumPrivateTot * less) / 100;

            var lessTotDis = premiumPrivateTot - lesstot;

            var lessnoclaim = lessTotDis * noclaim;

            var afteradclaim = lessTotDis - lessnoclaim;

            var TowingYes = towing == 'yes' ? 200 : 0;

            var carDirectBusiness = cardirectbusiness == 'yes' ? ((afteradclaim + TowingYes) * 10) / 100 : 0;

            var afterCal = afteradclaim + TowingYes - carDirectBusiness;

            var normalPremium;
            if (afterCal > 2000) {
                normalPremium = afterCal;
            } else {
                normalPremium = 2000.00;
            }

            var thirdpartyliability;
            if (cc < 1000) {
                thirdpartyliability = 3000;
            } else if (cc <= 1600) {
                thirdpartyliability = 4000;
            } else {
                thirdpartyliability = 6000;
            }

            var noClaimDiscount = thirdpartyliability * noclaim;

            var thirdpartypremium = thirdpartyliability - noClaimDiscount;
            console.log(thirdpartypremium);

            var addunnamedpassenger = ((perperson * 1.4) / 1000) * unnamedPassenger;

            var addunnameddriver = (sumInsuredOfDriver * 1.4) / 1000;

            var addriot = sum_insured * 0.15 / 100;

            var accidentUnnamedDriver = ((perperson * 0.25) / 1000) * unnamedPassenger;

            var sumInsuredOfDriverResult = (sumInsuredOfDriver * 0.25) / 1000;

            var accidentUnnamedPassenger = normalPremium + thirdpartypremium + addunnamedpassenger + addunnameddriver +
                addriot + accidentUnnamedDriver + sumInsuredOfDriverResult;

            var accidentodriver = 700;

            var stamp = 20;
            var total = accidentUnnamedPassenger + stamp;

            var vat = 0.13 * total;
            // var n = VarDate;

            var netPremium = total + vat;
            var np = netPremium;

            //for third party
            var premiumbasedoncc;
            if (cc < 1000) {
                premiumbasedoncc = 3000;
            } else if (cc <= 1600) {
                premiumbasedoncc = 4000;
            } else {
                premiumbasedoncc = 6000;
            }

            //for third party

            var PaxPremium = (unnamedDriver + unnamedPassenger) * 700;

            var poolthirdparty = roitdamage == 'yes' ? (unnamedDriver + unnamedPassenger) * 125 : 0;
            console.log(poolthirdparty);

            var subtotalthird = thirdpartyliability + PaxPremium + poolthirdparty + stamp;

            var vatthird = 0.13 * subtotalthird;

            var totalthird = subtotalthird + vatthird;

            "use strict";

            var viewresult =
                '<table class="table table-striped table-sm">\n                        <thead>\n                            <tr>\n                                <th colspan="3">Private Car</th>\n                            </tr>\n                        </thead>\n                        <tbody>\n                            <tr>\n                                <td>Normal Premium</td>\n                                <td>:</td>\n                                <td>NPR ' +
                normalPremium.toFixed(2) +
                "</td>\n                            </tr>\n                            <tr>\n                                <td>Third Party Premium</td>\n                                <td>:</td>\n                                <td>NPR " +
                thirdpartypremium.toFixed(2) +
                "</td>\n                            </tr>\n                            <tr>\n                                <td>Accidental Cover To Driver</td>\n                                <td>:</td>\n                                <td>NPR " +
                addunnameddriver.toFixed(2) +
                "</td>\n                            </tr>\n                            <tr>\n                                <td>Accidental Cover To Passenger</td>\n                                <td>:</td>\n                                <td>NPR " +
                addunnamedpassenger.toFixed(2) +
                "</td>\n                            </tr>\n                            <tr>\n                                <td>Total Premium</td>\n                                <td>:</td>\n                                <td>NPR " +
                accidentUnnamedPassenger.toFixed(2) +
                "</td>\n                            </tr>\n                             <tr>\n                                <td>Stamp</td>\n                                <td>:</td>\n                                <td>NPR " +
                stamp.toFixed(2) +
                "</td>\n                            </tr>\n                            <tr>\n                                <td>Sub Total</td>\n                                <td>:</td>\n                                <td>NPR " +
                total.toFixed(2) +
                "</td>\n                            </tr>\n                           \n                            <tr>\n                                <td>VAT</td>\n                                <td>:</td>\n                                <td>NPR " +
                vat.toFixed(2) +
                "</td>\n                            </tr>\n                            <tr>\n                                <td>Total Amount</td>\n                                <td>:</td>\n                                <td>NPR " +
                np.toFixed(2) +
                '</td>\n                            </tr>\n                        </tbody>\n                    </table><br>\n                    <table class="table table-striped table-sm">\n                        <thead>\n                            <tr>\n                                <th colspan="3">Private Car [ Third Party ]</th>\n                            </tr>\n                        </thead>\n                        <tbody>\n                            <tr>\n                                <td>Premium Base On CC</td>\n                                <td>:</td>\n                                <td>NPR ' +
                thirdpartyliability.toFixed(2) +
                "</td>\n                            </tr>\n\n                            <tr>\n                                <td>Pax Premium</td>\n                                <td>:</td>\n                                <td>NPR " +
                PaxPremium.toFixed(2) +
                "</td>\n                            </tr>\n\n                            <tr>\n                                <td>Pool Premium</td>\n                                <td>:</td>\n                                <td>NPR " +
                poolthirdparty.toFixed(2) +
                "</td>\n                            </tr>\n\n                            <tr>\n                                <td>Stamp</td>\n                                <td>:</td>\n                                <td>NPR " +
                stamp.toFixed(2) +
                "</td>\n                            </tr>\n\n                            <tr>\n                                <td>Sub Total</td>\n                                <td>:</td>\n                                <td>NPR " +
                subtotalthird.toFixed(2) +
                "</td>\n                            </tr>\n\n                            <tr>\n                                <td>Vat</td>\n                                <td>:</td>\n                                <td>NPR " +
                vatthird.toFixed(2) +
                "</td>\n                            </tr>\n\n                            <tr>\n                                <td>Total</td>\n                                <td>:</td>\n                                <td>NPR " +
                totalthird.toFixed(2) +
                "</td>\n                            </tr>\n                            \n                        </tbody>\n                    </table>\n                    ";
            document.querySelector(
                ".calculate__inquiry__form__calculation"
            ).innerHTML = viewresult;

            // var viewresult = `<table class="table table-striped table-sm">
            //                 <thead>
            //                     <tr>
            //                         <th colspan="3">Private Car</th>
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
            //                         <td>Accidental Cover To Driver</td>
            //                         <td>:</td>
            //                         <td>NPR ${addunnameddriver.toFixed(2)}</td>
            //                     </tr>
            //                     <tr>
            //                         <td>Accidental Cover To Passenger</td>
            //                         <td>:</td>
            //                         <td>NPR ${addunnamedpassenger.toFixed(2)}</td>
            //                     </tr>
            //                     <tr>
            //                         <td>Total Premium</td>
            //                         <td>:</td>
            //                         <td>NPR ${accidentUnnamedPassenger.toFixed(2)}</td>
            //                     </tr>
            //                      <tr>
            //                         <td>Stamp</td>
            //                         <td>:</td>
            //                         <td>NPR ${stamp.toFixed(2)}</td>
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
            //                         <td>Total Amount</td>
            //                         <td>:</td>
            //                         <td>NPR ${np.toFixed(2)}</td>
            //                     </tr>
            //                 </tbody>
            //             </table><br>
            //             <table class="table table-striped table-sm">
            //                 <thead>
            //                     <tr>
            //                         <th colspan="3">Private Car [ Third Party ]</th>
            //                     </tr>
            //                 </thead>
            //                 <tbody>
            //                     <tr>
            //                         <td>Premium Base On CC</td>
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
            //                         <td>NPR ${poolthirdparty.toFixed(2)}</td>
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
            //                         <td>Vat</td>
            //                         <td>:</td>
            //                         <td>NPR ${vatthird.toFixed(2)}</td>
            //                     </tr>

            //                     <tr>
            //                         <td>Total</td>
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
