@if($buys->insurance_type == 'third-party')
    <ul class="insurance-list">
        <h4 class="view-main-title">Policy Information</h4>
        <li class="col-md-6">
            <b>Motor Type : </b> <span>@isset($buys->thirdParty){{$buys->thirdParty->motor_type}} @endisset</span>
        </li>
        <li class="col-md-6">
            <b>Cubic Capacity : </b>
            <span>@isset($buys->thirdParty){{$buys->thirdParty->cubic_capacity}} @endisset cc</span>
        </li>
        <li class="col-md-6">
            <b>Pool : </b> <span>@isset($buys->thirdParty){{$buys->thirdParty->pool}} @endisset </span>
        </li>
        <li class="col-md-6">
            <b>Made Year : </b> <span>@isset($buys->thirdParty){{$buys->thirdParty->year}} @endisset</span>
        </li>
        <li class="col-md-6">
            <b> Pradesh/zone ? : </b>
            <span>@isset($buys->thirdParty){{$buys->thirdParty->pradesh_zone}} @endisset</span>
        </li>
        <li class="col-md-6">
            <b> Lot Number : </b> <span>@isset($buys->thirdParty){{$buys->thirdParty->lot_no}} @endisset</span>
        </li>
        <li class="col-md-6">
            <b>Vechile Type : </b> <span> @isset($buys->thirdParty){{$buys->thirdParty->vechile_type}} @endisset</span>
        </li>
        <li class="col-md-6">
            <b>Vechile Number :</b> <span>@isset($buys->thirdParty){{$buys->thirdParty->vechile_id}} @endisset</span>
        </li>

        <li class="col-md-6">
            <b>Brand :</b> <span> @isset($buys->thirdParty){{$buys->thirdParty->brand}} @endisset</span>
        </li>

        <li class="col-md-6">
            <b>Model :</b> <span> @isset($buys->thirdParty){{$buys->thirdParty->model}} @endisset</span>
        </li>

        <li class="col-md-6">
            <b>Chasis Number :</b> <span> @isset($buys->thirdParty){{$buys->thirdParty->chasis}} @endisset</span>
        </li>

        <li class="col-md-6">
            <b>Engine Number :</b> <span>@isset($buys->thirdParty){{$buys->thirdParty->engine}} @endisset</span>
        </li>

        <li class="col-md-6">
            <b>Policy Effective :</b>
            <span>@isset($buys->thirdParty){{$buys->thirdParty->policy_effective}} @endisset</span>
        </li>

        <li class="col-md-12">  <!-- do not remove this li (it is used for the spacing) --></li>
    </ul>

@elseif($buys->insurance_type == 'property')

    <!--Property Insurance-->
    <ul class="insurance-list">
        <h4 class="view-main-title">Policy Information</h4>
        <li class="col-md-6">
            <b>Property Owner Name : </b> <span>@isset($buys->property) {{$buys->property->owner_name}}@endisset</span>
        </li>
        <li class="col-md-6">
            <b>Property District : </b> <span>@isset($buys->property){{$buys->property->districts}}@endisset</span>
        </li>
        <li class="col-md-6">
            <b>Property Address: </b> <span> @isset($buys->property){{$buys->property->address}}@endisset</span>
        </li>
        <li class="col-md-6">
            <b>Location Nature : </b> <span> @isset($buys->property){{$buys->property->location_nature}}@endisset</span>
        </li>
        <li class="col-md-6">
            <b> Is Pool ? : </b> <span> @isset($buys->property){{$buys->property->pool}}@endisset</span>
        </li>
        <li class="col-md-6">
            <b> Value of Property/House : </b>
            <span>@isset($buys->property){{$buys->property->value_property}}@endisset</span>
        </li>
        <li class="col-md-6">
            <b>Remarks (Kitta Number) : </b> <span> @isset($buys->property){{$buys->property->remarks}}@endisset</span>
        </li>
        <li class="col-md-6">
            <b>Policy Effective From[yyyy-mm-dd]: :</b>
            <span>@isset($buys->property){{$buys->property->policy_effective}}@endisset</span>
        </li>

        <li class="col-md-6">
            <b>Policy Expiry Date[yyyy-mm-dd]: :</b>
            <span>@isset($buys->property) {{$buys->property->policy_expiry}}@endisset</span>
        </li>
        <li class="col-md-12">  <!-- do not remove this li (it is used for the spacing) --></li>
    </ul>

    <!--Corona Insurance-->
@elseif($buys->insurance_type == 'corona-insurance')
    <ul class="insurance-list">
        <h4 class="view-main-title">Policy Information</h4>
        <li class="col-md-6">
            <b>Policy Type : </b> <span> {{$buys->corona->policy_type}}</span>
        </li>
        <li class="col-md-6">
            <b>Policy Plan : </b> <span>{{$buys->corona->policy_plan}}</span>
        </li>
        <li class="col-md-6">
            <b>Number of Family Members: </b> <span>{{$buys->corona->number_family}}
            </span>
        </li>
        <li class="col-md-6">
            <b>Policy Effective From[yyyy-mm-dd]: :</b> <span>{{$buys->corona->policy_effective}}</span>
        </li>
        @foreach($buys->corona->coronafamily as $family)
            <li class="col-md-6">
                <b>Full Name : </b> <span> {{$family->full_name}}</span>
            </li>
            <li class="col-md-6">
                <b> Age : </b> <span> {{$family->age}}</span>
            </li>
            <li class="col-md-6">
                <b> Relation : </b> <span>{{$family->relations}}</span>
            </li>
        @endforeach
        <li class="col-md-12">  <!-- do not remove this li (it is used for the spacing) --></li>
    </ul>

    <!--Travel Insurance-->
    @else
        <ul class="insurance-list">
            <h4 class="view-main-title">Policy Information</h4>
            <li class="col-md-6">
                <b>Passport Number : </b> <span> {{$buys->travel->passport_number}}</span>
            </li>
            <li class="col-md-6">
                <b>Place of Visit : </b> <span>{{$buys->travel->place_visit}}</span>
            </li>
            <li class="col-md-6">
                <b>Occupation : </b> <span> {{$buys->travel->occupation}}</span>
            </li>
            <li class="col-md-6">
                <b>Doctor's Name : </b> <span> {{$buys->travel->doctors_name}}</span>
            </li>
            <li class="col-md-6">
                <b> Doctor's Address : </b> <span> {{$buys->travel->doctor_address}}</span>
            </li>
            <li class="col-md-6">
                <b> Doctor's Contact Number : </b> <span>{{$buys->travel->contact_number}}</span>
            </li>
            <li class="col-md-6">
                <b>Age : </b> <span> {{$buys->travel->age}}</span>
            </li>
            <li class="col-md-6">
                <b>Days :</b> <span>{{$buys->travel->days}}</span>
            </li>

             <li class="col-md-6">
                <b>Dollar Rate :</b> <span>{{$buys->travel->rate}}</span>
            </li>

            <li class="col-md-6">
                <b>Plan :</b> <span>{{$buys->travel->plan}}</span>
            </li>

            <li class="col-md-6">
                <b>Cover :</b> <span>{{$buys->travel->cover}}</span>
            </li>

            <li class="col-md-6">
                <b>Policy Effective Date[yyyy-mm-dd]: :</b> <span> {{$buys->travel->policy_date}}</span>
            </li>
            <li class="col-md-12">  <!-- do not remove this li (it is used for the spacing) --></li>
        </ul>
@endif

