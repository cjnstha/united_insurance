@extends('layouts.frontend.master')
@section('title')
    Make A Claim
@endsection
@section('contents')

    <!-- Start Contact Us -->

    <div id="Contact" class="light-wrapper">
        <div class="container inner">
            <div class="divcod70"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="Contact-Form">
                            <form class="leave-comment contact-form" autocomplete="on"
                                  name="contact-form" method="post" action="{{url('make-claim')}}" enctype="multipart/form-data">
                                @csrf
                                <fieldset>
                                    <div id="formstatus"></div>
                                    <div class="Contact-us">
                                        <div class="form-group col-md-6">
                                            <label for="">Type of Insurance</label>
                                            <select class="form-control type_ins" id="name" required="true"
                                                    name="insurance_type">
                                                <option value="Select a type ..." selected="true">Select a type ...
                                                </option>
                                                @foreach($products as $product)
                                                    <option value="{{$product->product_name}}">{{$product->product_name}}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                        <div class="form-input col-md-6">
                                            <label for="">Name of Insured *</label>
                                            <input class="form-control" type="text" id="name" name="name_insured"
                                                   placeholder="Your Name" required>
                                        </div>
                                        <div class="form-group col-sm-3">
                                            <label for="">Phone Number *</label>
                                            <input class="form-control" placeholder="Phone Number" id="name"
                                                   name="phone_number" type="text" value="" required>
                                        </div>
                                        <div class="form-group col-sm-3">
                                            <label for="">Email address *</label>
                                            <input class="form-control" placeholder="Email" id="name" name="email"
                                                   type="email" value="" required>
                                        </div>
                                        <div class="form-group col-sm-2">
                                            <label for="">Date of Loss *</label>
                                            <input class="form-control" placeholder="date" id="date" name="date_loss"
                                                   type="date" value="" required>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label for="">Contact Person (If different from Insured name)</label>
                                            <input class="form-control" placeholder="" id="name" name="contact_person"
                                                   type="text" value="" required>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="">Details of Loss *</label>
                                            <textarea class="txt-box form-control textArea" id="message" name="detail_loss"
                                                      cols="40" rows="7" placeholder="Message" spellcheck="true"
                                                      required></textarea>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <label for="">Message *</label>
                                            <textarea class="txt-box form-control textArea" id="message" name="message"
                                                      cols="40" rows="7" placeholder="Message" spellcheck="true"
                                                      required></textarea>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-input col-sm-3">
                                                <div class="custom-file">
                                                    <label class="uploadButton" for="fileElem">Upload Document
                                                        (Optional)</label>
                                                    <input type="file" id="fileElem" name="documents"
                                                           class="form-control custom-file-input">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-submit col-md-12">
                                            <input type="submit" id="submit" class="btn btn-large main-bg"
                                                   value="Send Message">
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- End Contact Us -->

    <!-- Back to top Link -->
    <div id="to-top" class="main-bg"><span class="fa fa-chevron-up"></span></div>
@endsection
