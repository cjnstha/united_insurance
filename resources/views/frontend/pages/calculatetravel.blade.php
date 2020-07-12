@extends('layouts.frontend.master')
@section('title')
    Travel Calculator
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
                            <li class="active"><a href="{{url('/calculator-travel')}}">Travel <i
                                        class="fa fa-angle-right"></i></a></li>
                            <li><a href="{{url('/calculator-taxi')}}"> Taxi <i class="fa fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- =================== services single content ================== -->
                <div class="calculate__inquiry">
                    <div class="calculate__inquiry--motorcycle active">
                        <div class="calculate__inquiry__form">
                            <section class="form--comprehensive form__data active">
                                <form action="{{url('/calculator-travel')}}" class="needs-validation">
                                    <div class="form-group col-md-4">
                                        <label for="age" data-toggle="tooltip" data-placement="top"
                                               title="Enter a valid age between 5 and 70">Age</label>
                                        <div class="input-group">
                                            <input type="number" class="ageOfPerson form-control" name="" id="age"
                                                   pattern="[0-9]{2}" placeholder=""
                                                   aria-describedby="ageOfVehicle-addon"
                                                   min="5" max="70" required>
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="ageOfPerson-addon">Yrs</span>
                                            </div>
                                            <div class="invalid-feedback">
                                                Please enter a valid age between 5 and 70.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="days" data-toggle="tooltip" data-placement="top"
                                               title="For How Long?">Days</label>
                                        <div class="input-group">
                                            <input type="number" class="days form-control" name="" id="days"
                                                   pattern="[0-9]*" placeholder="" aria-describedby="days-addon" min="0"
                                                   required>
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="days-addon">Days</span>
                                            </div>
                                            <div class="invalid-feedback">
                                                Please enter a valid value.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="rate" data-toggle="tooltip" data-placement="top" title="">USD
                                            Rate</label>
                                        <div class="input-group">
                                            <input type="number" class="rate form-control" name="" id="rate"
                                                   pattern="[0-9]*" placeholder="" aria-describedby="rate-addon" min="0"
                                                   required>
                                            <div class="invalid-feedback">
                                                Please enter a valid value.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="plan">Plan</label>
                                        <select class="plan form-control" id="plan" required>
                                            <option value=""> - Select a Plan -</option>
                                            <option value="10">A - Standard (Worldwide excluding USA and Canada)
                                            </option>
                                            <option value="11">A - Gold (Worldwide excluding USA and Canada)</option>
                                            <option value="12">A - Platinum (Worldwide excluding USA and Canada)
                                            </option>
                                            <option value="20">B - Standard (Worldwide including USA and Canada)
                                            </option>
                                            <option value="21">B - Gold (Worldwide including USA and Canada)</option>
                                            <option value="22">B - Platinum (Worldwide including USA and Canada)
                                            </option>
                                            <option value="30">C - (Asian countries excluding SAARC countries)</option>
                                            <option value="40">D - (SAARC countries)</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="cover">Cover</label>
                                        <select class="cover form-control" id="cover" required>
                                            <option value="1">Medical Only - A to C</option>
                                            <option value="2">Package Policy - A to I</option>
                                        </select>
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
                            <section style="display:block;margin-top:1em;" class="container plan_benefits">
                                <div class="col-md-10 text-center">
                                    <h4>Cover Details</h4>
                                </div>
                                <div class="col-md-10" id="plan_benefits">
                                    <table class="table table-striped table-sm">
                                        <thead>
                                        <tr>
                                            <th>Cover Code</th>
                                            <th>Benefit</th>
                                            <th>Detail</th>
                                            <th>Access</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td data-label="Cover Code">A</td>
                                            <td data-label="Benefit">Personal Accident</td>
                                            <td data-label="Detail">Death upto US $25,000</td>
                                            <td data-label="Access">Nill</td>
                                        </tr>
                                        <tr>
                                            <td data-label="Cover Code">B</td>
                                            <td data-label="Benefit">Medical and Emergency Expenses</td>
                                            <td data-label="Detail">Upto US $100,000</td>
                                            <td data-label="Access">US $100</td>
                                        </tr>
                                        <tr>
                                            <td data-label="Cover Code">C</td>
                                            <td data-label="Benefit">Hospital benefit</td>
                                            <td data-label="Detail">US $25 for each 24 hours of hospitalization up
                                                to a maximum of US
                                                $250
                                            </td>
                                            <td data-label="Access">Nill</td>
                                        </tr>
                                        <tr>
                                            <td data-label="Cover Code">D</td>
                                            <td data-label="Benefit">Loss of Checked Baggage</td>
                                            <td data-label="Detail">US $ 2,000</td>
                                            <td data-label="Access">US $100</td>
                                        </tr>
                                        <tr>
                                            <td data-label="Cover Code">E</td>
                                            <td data-label="Benefit">Delay of Checked Baggage</td>
                                            <td data-label="Detail">US $50 for each 12 hours period of delay upto a
                                                maximum of US $250
                                            </td>
                                            <td data-label="Access">12 Hours</td>
                                        </tr>
                                        <tr>
                                            <td data-label="Cover Code">F</td>
                                            <td data-label="Benefit">Loss of Passport</td>
                                            <td data-label="Detail">Upto US $500</td>
                                            <td data-label="Access">Nill</td>
                                        </tr>
                                        <tr>
                                            <td data-label="Cover Code">G</td>
                                            <td data-label="Benefit">Personal Liability</td>
                                            <td data-label="Detail">Upto US $250,000</td>
                                            <td data-label="Access">US $250 in respect of property damage claim</td>
                                        </tr>
                                        <tr>
                                            <td data-label="Cover Code">H</td>
                                            <td data-label="Benefit">Travel Delay</td>
                                            <td data-label="Detail">US $20 per hour upto maximum US $500</td>
                                            <td data-label="Access">12 Hours</td>
                                        </tr>
                                        <tr>
                                            <td data-label="Cover Code">I</td>
                                            <td data-label="Benefit">Hijack</td>
                                            <td data-label="Detail">US $50 per day upto maximum US $1,500</td>
                                            <td data-label="Access">24 Hours</td>
                                        </tr>
                                        <tr>
                                            <td data-label="Cover Code">J</td>
                                            <td data-label="Benefit">Cancellation &amp; Curtailment</td>
                                            <td data-label="Detail">US $1,000</td>
                                            <td data-label="Access">US $100</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
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
    <script type="text/javascript">
        "use strict";
        document.querySelector("#plan").addEventListener('change', function (e) {
            let selectedTarget = e.target;
            let coverOptionsContainer = document.querySelector("#cover").parentNode;
            selectedTarget.value == 40 ? coverOptionsContainer.style.visibility = "hidden" : coverOptionsContainer.style.visibility = "visible";
        })

        function calc(e) {
            var calculateUSD = {
                "plans": {
                    "10": {
                        "cover": {
                            "1": {
                                "age": {
                                    "40": {
                                        "days": {
                                            "7": "25",
                                            "14": "32",
                                            "21": "33",
                                            "28": "35",
                                            "35": "41",
                                            "47": "46",
                                            "60": "50",
                                            "75": "61",
                                            "90": "70",
                                            "120": "113",
                                            "147": "137",
                                            "180": "168"
                                        }
                                    },
                                    "60": {
                                        "days": {
                                            "7": "30",
                                            "14": "34",
                                            "21": "35",
                                            "28": "38",
                                            "35": "45",
                                            "47": "49",
                                            "60": "56",
                                            "75": "67",
                                            "90": "78",
                                            "120": "123",
                                            "147": "150",
                                            "180": "183"
                                        }
                                    },
                                    "70": {
                                        "days": {
                                            "7": "38",
                                            "14": "45",
                                            "21": "47",
                                            "28": "53",
                                            "35": "62",
                                            "47": "70",
                                            "60": "79",
                                            "75": "98",
                                            "90": "114",
                                            "120": "182",
                                            "147": "216",
                                            "180": "275"
                                        }
                                    }
                                }
                            },
                            "2": {
                                "age": {
                                    "40": {
                                        "days": {
                                            "7": "28",
                                            "14": "35",
                                            "21": "36",
                                            "28": "39",
                                            "35": "47",
                                            "47": "52",
                                            "60": "60",
                                            "75": "73",
                                            "90": "85",
                                            "120": "140",
                                            "147": "167",
                                            "180": "208"
                                        }
                                    },
                                    "60": {
                                        "days": {
                                            "7": "32",
                                            "14": "37",
                                            "21": "39",
                                            "28": "43",
                                            "35": "51",
                                            "47": "57",
                                            "60": "66",
                                            "75": "80",
                                            "90": "95",
                                            "120": "147",
                                            "147": "175",
                                            "180": "220"
                                        }
                                    },
                                    "70": {
                                        "days": {
                                            "7": "44",
                                            "14": "52",
                                            "21": "54",
                                            "28": "61",
                                            "35": "70",
                                            "47": "81",
                                            "60": "93",
                                            "75": "113",
                                            "90": "132",
                                            "120": "219",
                                            "147": "268",
                                            "180": "325"
                                        }
                                    }
                                }
                            }
                        }
                    },
                    "11": {
                        "cover": {
                            "1": {
                                "age": {
                                    "40": {
                                        "days": {
                                            "7": "30",
                                            "14": "38",
                                            "21": "40",
                                            "28": "42",
                                            "35": "50",
                                            "47": "55",
                                            "60": "60",
                                            "75": "73",
                                            "90": "84",
                                            "120": "135",
                                            "147": "165",
                                            "180": "202"
                                        }
                                    },
                                    "60": {
                                        "days": {
                                            "7": "36",
                                            "14": "41",
                                            "21": "43",
                                            "28": "46",
                                            "35": "54",
                                            "47": "59",
                                            "60": "67",
                                            "75": "80",
                                            "90": "94",
                                            "120": "147",
                                            "147": "180",
                                            "180": "220"
                                        }
                                    },
                                    "70": {
                                        "days": {
                                            "7": "46",
                                            "14": "54",
                                            "21": "57",
                                            "28": "64",
                                            "35": "74",
                                            "47": "84",
                                            "60": "95",
                                            "75": "118",
                                            "90": "137",
                                            "120": "218",
                                            "147": "260",
                                            "180": "330"
                                        }
                                    }
                                }
                            },
                            "2": {
                                "age": {
                                    "40": {
                                        "days": {
                                            "7": "34",
                                            "14": "42",
                                            "21": "44",
                                            "28": "47",
                                            "35": "56",
                                            "47": "62",
                                            "60": "72",
                                            "75": "87",
                                            "90": "102",
                                            "120": "168",
                                            "147": "200",
                                            "180": "250"
                                        }
                                    },
                                    "60": {
                                        "days": {
                                            "7": "39",
                                            "14": "44",
                                            "21": "47",
                                            "28": "52",
                                            "35": "61",
                                            "47": "68",
                                            "60": "79",
                                            "75": "96",
                                            "90": "114",
                                            "120": "176",
                                            "147": "210",
                                            "180": "265"
                                        }
                                    },
                                    "70": {
                                        "days": {
                                            "7": "53",
                                            "14": "63",
                                            "21": "67",
                                            "28": "73",
                                            "35": "84",
                                            "47": "97",
                                            "60": "117",
                                            "75": "135",
                                            "90": "158",
                                            "120": "262",
                                            "147": "321",
                                            "180": "390"
                                        }
                                    }
                                }
                            }
                        }
                    },
                    "12": {
                        "cover": {
                            "1": {
                                "age": {
                                    "40": {
                                        "days": {
                                            "7": "34",
                                            "14": "43",
                                            "21": "46",
                                            "28": "48",
                                            "35": "56",
                                            "47": "62",
                                            "60": "68",
                                            "75": "82",
                                            "90": "95",
                                            "120": "152",
                                            "147": "185",
                                            "180": "227"
                                        }
                                    },
                                    "60": {
                                        "days": {
                                            "7": "40",
                                            "14": "46",
                                            "21": "52",
                                            "28": "55",
                                            "35": "61",
                                            "47": "67",
                                            "60": "75",
                                            "75": "90",
                                            "90": "106",
                                            "120": "165",
                                            "147": "202",
                                            "180": "247"
                                        }
                                    },
                                    "70": {
                                        "days": {
                                            "7": "52",
                                            "14": "60",
                                            "21": "65",
                                            "28": "72",
                                            "35": "83",
                                            "47": "95",
                                            "60": "107",
                                            "75": "132",
                                            "90": "155",
                                            "120": "245",
                                            "147": "292",
                                            "180": "371"
                                        }
                                    }
                                }
                            },
                            "2": {
                                "age": {
                                    "40": {
                                        "days": {
                                            "7": "38",
                                            "14": "47",
                                            "21": "50",
                                            "28": "53",
                                            "35": "63",
                                            "47": "70",
                                            "60": "81",
                                            "75": "98",
                                            "90": "115",
                                            "120": "190",
                                            "147": "225",
                                            "180": "281"
                                        }
                                    },
                                    "60": {
                                        "days": {
                                            "7": "44",
                                            "14": "50",
                                            "21": "54",
                                            "28": "59",
                                            "35": "69",
                                            "47": "77",
                                            "60": "88",
                                            "75": "108",
                                            "90": "129",
                                            "120": "198",
                                            "147": "236",
                                            "180": "298"
                                        }
                                    },
                                    "70": {
                                        "days": {
                                            "7": "60",
                                            "14": "71",
                                            "21": "76",
                                            "28": "83",
                                            "35": "95",
                                            "47": "110",
                                            "60": "131",
                                            "75": "151",
                                            "90": "177",
                                            "120": "294",
                                            "147": "361",
                                            "180": "438"
                                        }
                                    }
                                }
                            }
                        }
                    },
                    "20": {
                        "cover": {
                            "1": {
                                "age": {
                                    "40": {
                                        "days": {
                                            "7": "40",
                                            "14": "55",
                                            "21": "58",
                                            "28": "64",
                                            "35": "75",
                                            "47": "87",
                                            "60": "120",
                                            "75": "168",
                                            "90": "200",
                                            "120": "277",
                                            "147": "364",
                                            "180": "525"
                                        }
                                    },
                                    "60": {
                                        "days": {
                                            "7": "55",
                                            "14": "74",
                                            "21": "78",
                                            "28": "88",
                                            "35": "100",
                                            "47": "120",
                                            "60": "173",
                                            "75": "245",
                                            "90": "293",
                                            "120": "409",
                                            "147": "541",
                                            "180": "623"
                                        }
                                    },
                                    "70": {
                                        "days": {
                                            "7": "72",
                                            "14": "80",
                                            "21": "85",
                                            "28": "96",
                                            "35": "112",
                                            "47": "135",
                                            "60": "193",
                                            "75": "274",
                                            "90": "328",
                                            "120": "460",
                                            "147": "609",
                                            "180": "723"
                                        }
                                    }
                                }
                            },
                            "2": {
                                "age": {
                                    "40": {
                                        "days": {
                                            "7": "50",
                                            "14": "63",
                                            "21": "66",
                                            "28": "74",
                                            "35": "87",
                                            "47": "101",
                                            "60": "143",
                                            "75": "202",
                                            "90": "242",
                                            "120": "337",
                                            "147": "444",
                                            "180": "641"
                                        }
                                    },
                                    "60": {
                                        "days": {
                                            "7": "68",
                                            "14": "86",
                                            "21": "90",
                                            "28": "103",
                                            "35": "121",
                                            "47": "145",
                                            "60": "209",
                                            "75": "297",
                                            "90": "355",
                                            "120": "499",
                                            "147": "662",
                                            "180": "789"
                                        }
                                    },
                                    "70": {
                                        "days": {
                                            "7": "80",
                                            "14": "95",
                                            "21": "100",
                                            "28": "113",
                                            "35": "134",
                                            "47": "162",
                                            "60": "232",
                                            "75": "333",
                                            "90": "399",
                                            "120": "561",
                                            "147": "746",
                                            "180": "886"
                                        }
                                    }
                                }
                            }
                        }
                    },
                    "21": {
                        "cover": {
                            "1": {
                                "age": {
                                    "40": {
                                        "days": {
                                            "7": "48",
                                            "14": "66",
                                            "21": "72",
                                            "28": "77",
                                            "35": "90",
                                            "47": "104",
                                            "60": "144",
                                            "75": "201",
                                            "90": "240",
                                            "120": "332",
                                            "147": "436",
                                            "180": "629"
                                        }
                                    },
                                    "60": {
                                        "days": {
                                            "7": "66",
                                            "14": "88",
                                            "21": "93",
                                            "28": "105",
                                            "35": "120",
                                            "47": "144",
                                            "60": "207",
                                            "75": "295",
                                            "90": "351",
                                            "120": "491",
                                            "147": "650",
                                            "180": "747"
                                        }
                                    },
                                    "70": {
                                        "days": {
                                            "7": "87",
                                            "14": "96",
                                            "21": "101",
                                            "28": "115",
                                            "35": "135",
                                            "47": "162",
                                            "60": "231",
                                            "75": "328",
                                            "90": "393",
                                            "120": "551",
                                            "147": "731",
                                            "180": "867"
                                        }
                                    }
                                }
                            },
                            "2": {
                                "age": {
                                    "40": {
                                        "days": {
                                            "7": "60",
                                            "14": "75",
                                            "21": "80",
                                            "28": "88",
                                            "35": "105",
                                            "47": "122",
                                            "60": "171",
                                            "75": "242",
                                            "90": "290",
                                            "120": "403",
                                            "147": "533",
                                            "180": "769"
                                        }
                                    },
                                    "60": {
                                        "days": {
                                            "7": "82",
                                            "14": "103",
                                            "21": "109",
                                            "28": "125",
                                            "35": "145",
                                            "47": "175",
                                            "60": "250",
                                            "75": "356",
                                            "90": "426",
                                            "120": "599",
                                            "147": "794",
                                            "180": "946"
                                        }
                                    },
                                    "70": {
                                        "days": {
                                            "7": "96",
                                            "14": "113",
                                            "21": "120",
                                            "28": "136",
                                            "35": "161",
                                            "47": "194",
                                            "60": "278",
                                            "75": "399",
                                            "90": "479",
                                            "120": "673",
                                            "147": "895",
                                            "180": "1060"
                                        }
                                    }
                                }
                            }
                        }
                    },
                    "22": {
                        "cover": {
                            "1": {
                                "age": {
                                    "40": {
                                        "days": {
                                            "7": "54",
                                            "14": "75",
                                            "21": "81",
                                            "28": "86",
                                            "35": "101",
                                            "47": "117",
                                            "60": "162",
                                            "75": "226",
                                            "90": "270",
                                            "120": "373",
                                            "147": "490",
                                            "180": "707"
                                        }
                                    },
                                    "60": {
                                        "days": {
                                            "7": "75",
                                            "14": "99",
                                            "21": "105",
                                            "28": "119",
                                            "35": "135",
                                            "47": "162",
                                            "60": "232",
                                            "75": "331",
                                            "90": "395",
                                            "120": "552",
                                            "147": "731",
                                            "180": "840"
                                        }
                                    },
                                    "70": {
                                        "days": {
                                            "7": "98",
                                            "14": "108",
                                            "21": "114",
                                            "28": "130",
                                            "35": "151",
                                            "47": "182",
                                            "60": "259",
                                            "75": "369",
                                            "90": "442",
                                            "120": "619",
                                            "147": "822",
                                            "180": "975"
                                        }
                                    }
                                }
                            },
                            "2": {
                                "age": {
                                    "40": {
                                        "days": {
                                            "7": "67",
                                            "14": "85",
                                            "21": "90",
                                            "28": "99",
                                            "35": "118",
                                            "47": "137",
                                            "60": "192",
                                            "75": "272",
                                            "90": "326",
                                            "120": "453",
                                            "147": "599",
                                            "180": "865"
                                        }
                                    },
                                    "60": {
                                        "days": {
                                            "7": "92",
                                            "14": "115",
                                            "21": "122",
                                            "28": "140",
                                            "35": "163",
                                            "47": "196",
                                            "60": "281",
                                            "75": "400",
                                            "90": "479",
                                            "120": "673",
                                            "147": "893",
                                            "180": "1065"
                                        }
                                    },
                                    "70": {
                                        "days": {
                                            "7": "108",
                                            "14": "127",
                                            "21": "135",
                                            "28": "153",
                                            "35": "181",
                                            "47": "218",
                                            "60": "312",
                                            "75": "448",
                                            "90": "538",
                                            "120": "757",
                                            "147": "1006",
                                            "180": "1193"
                                        }
                                    }
                                }
                            }
                        }
                    },
                    "30": {
                        "cover": {
                            "1": {
                                "age": {
                                    "40": {
                                        "days": {
                                            "7": "16",
                                            "14": "20",
                                            "21": "21",
                                            "28": "22",
                                            "35": "26",
                                            "47": "29",
                                            "60": "33",
                                            "75": "38",
                                            "90": "45",
                                            "120": "71",
                                            "147": "85",
                                            "180": "104"
                                        }
                                    },
                                    "60": {
                                        "days": {
                                            "7": "18",
                                            "14": "21",
                                            "21": "22",
                                            "28": "24",
                                            "35": "28",
                                            "47": "30",
                                            "60": "35",
                                            "75": "42",
                                            "90": "48",
                                            "120": "78",
                                            "147": "93",
                                            "180": "114"
                                        }
                                    },
                                    "70": {
                                        "days": {
                                            "7": "23",
                                            "14": "28",
                                            "21": "30",
                                            "28": "33",
                                            "35": "38",
                                            "47": "43",
                                            "60": "49",
                                            "75": "51",
                                            "90": "70",
                                            "120": "115",
                                            "147": "137",
                                            "180": "200"
                                        }
                                    }
                                }
                            },
                            "2": {
                                "age": {
                                    "40": {
                                        "days": {
                                            "7": "18",
                                            "14": "22",
                                            "21": "23",
                                            "28": "25",
                                            "35": "30",
                                            "47": "33",
                                            "60": "38",
                                            "75": "45",
                                            "90": "52",
                                            "120": "85",
                                            "147": "102",
                                            "180": "125"
                                        }
                                    },
                                    "60": {
                                        "days": {
                                            "7": "20",
                                            "14": "23",
                                            "21": "25",
                                            "28": "26",
                                            "35": "31",
                                            "47": "35",
                                            "60": "41",
                                            "75": "49",
                                            "90": "57",
                                            "120": "94",
                                            "147": "111",
                                            "180": "138"
                                        }
                                    },
                                    "70": {
                                        "days": {
                                            "7": "28",
                                            "14": "32",
                                            "21": "34",
                                            "28": "38",
                                            "35": "43",
                                            "47": "50",
                                            "60": "58",
                                            "75": "71",
                                            "90": "84",
                                            "120": "138",
                                            "147": "165",
                                            "180": "206"
                                        }
                                    }
                                }
                            }
                        }
                    },
                    "40": {
                        "cover": {
                            "1": {
                                "age": {
                                    "40": {
                                        "days": {
                                            "7": "11",
                                            "14": "14",
                                            "21": "15",
                                            "28": "16",
                                            "35": "19",
                                            "47": "21",
                                            "60": "23",
                                            "75": "28",
                                            "90": "32",
                                            "120": "51",
                                            "147": "62",
                                            "180": "76"
                                        }
                                    },
                                    "60": {
                                        "days": {
                                            "7": "13",
                                            "14": "15",
                                            "21": "16",
                                            "28": "17",
                                            "35": "21",
                                            "47": "23",
                                            "60": "25",
                                            "75": "31",
                                            "90": "35",
                                            "120": "56",
                                            "147": "67",
                                            "180": "83"
                                        }
                                    },
                                    "70": {
                                        "days": {
                                            "7": "17",
                                            "14": "21",
                                            "21": "22",
                                            "28": "24",
                                            "35": "28",
                                            "47": "32",
                                            "60": "36",
                                            "75": "44",
                                            "90": "51",
                                            "120": "82",
                                            "147": "97",
                                            "180": "124"
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            };

            var age = Number(document.querySelector("#age").value);
            var days = Number(document.querySelector("#days").value);
            var rate = Number(document.querySelector("#rate").value);
            var plan = Number(document.querySelector("#plan").value);
            var cover = Number(document.querySelector("#cover").value);

            var selectedPlan, selectedAge, valueUSD;
            selectedPlan = Number(plan);
            age <= 40 ? selectedAge = "40" : (age <= 60 ? selectedAge = "60" : selectedAge = "70");
            plan === 40 ? cover = 1 : null;
            var dayChecker = calculateUSD["plans"][selectedPlan].cover[cover].age[selectedAge].days;
            for (var key in dayChecker) {
                var keyValue = key;
                if (days <= Number(keyValue)) {
                    valueUSD = Number(dayChecker[key]);
                    break;
                }
            }

            var rateUSD = rate;
            var premiumAmount = valueUSD * rateUSD;
            var stamp = 20;
            var subTotal = premiumAmount + stamp;
            var vat = 0.13 * subTotal;
            var amountTotal = subTotal + vat;

            var viewresult =
                '\n                    <table class="table table-striped table-sm">\n                        <thead>\n                            <tr>\n                                <th colspan="3">Travel Medical</th>\n                            </tr>\n                        </thead>\n                        <tbody>\n                            <tr>\n                                <td>Amount in USD</td>\n                                <td>:</td>\n                                <td>$ ' +
                valueUSD.toFixed(2) +
                "</td>\n                            </tr>\n                            <tr>\n                                <td>USD $1 (rate)</td>\n                                <td>:</td>\n                                <td>NPR " +
                rateUSD.toFixed(2) +
                "</td>\n                            </tr>\n                            <tr>\n                                <td>Premium Amount</td>\n                                <td>:</td>\n                                <td>NPR " +
                premiumAmount.toFixed(2) +
                "</td>\n                            </tr>\n                            <tr>\n                                <td>Stamp</td>\n                                <td>:</td>\n                                <td>NPR " +
                stamp.toFixed(2) +
                "</td>\n                            </tr>\n                            <tr>\n                                <td>Sub Total</td>\n                                <td>:</td>\n                                <td>NPR " +
                subTotal.toFixed(2) +
                "</td>\n                            </tr>\n                            <tr>\n                                <td>VAT</td>\n                                <td>:</td>\n                                <td>NPR " +
                vat.toFixed(2) +
                "</td>\n                            </tr>\n                            <tr>\n                                <td>Total Amount</td>\n                                <td>:</td>\n                                <td>NPR " +
                amountTotal.toFixed(2) +
                "</td>\n                            </tr>\n                        </tbody>\n                    </table>\n                    ";
            // var viewresult = `
            //             <table class="table table-striped table-sm">
            //                 <thead>
            //                     <tr>
            //                         <th colspan="3">Travel Medical</th>
            //                     </tr>
            //                 </thead>
            //                 <tbody>
            //                     <tr>
            //                         <td>Amount in USD</td>
            //                         <td>:</td>
            //                         <td>$ ${valueUSD.toFixed(2)}</td>
            //                     </tr>
            //                     <tr>
            //                         <td>USD $1 (rate)</td>
            //                         <td>:</td>
            //                         <td>NPR ${rateUSD.toFixed(2)}</td>
            //                     </tr>
            //                     <tr>
            //                         <td>Premium Amount</td>
            //                         <td>:</td>
            //                         <td>NPR ${premiumAmount.toFixed(2)}</td>
            //                     </tr>
            //                     <tr>
            //                         <td>Stamp</td>
            //                         <td>:</td>
            //                         <td>NPR ${stamp.toFixed(2)}</td>
            //                     </tr>
            //                     <tr>
            //                         <td>Sub Total</td>
            //                         <td>:</td>
            //                         <td>NPR ${subTotal.toFixed(2)}</td>
            //                     </tr>
            //                     <tr>
            //                         <td>VAT</td>
            //                         <td>:</td>
            //                         <td>NPR ${vat.toFixed(2)}</td>
            //                     </tr>
            //                     <tr>
            //                         <td>Total Amount</td>
            //                         <td>:</td>
            //                         <td>NPR ${amountTotal.toFixed(2)}</td>
            //                     </tr>
            //                 </tbody>
            //             </table>
            //             `;
            document.querySelector(".calculate__inquiry__form__calculation").innerHTML = viewresult;

        }
    </script>

@endsection
