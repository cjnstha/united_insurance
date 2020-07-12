@extends('layouts.admin.admin_layouts')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Product Detail Form</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li class="breadcrumb-item active">Product Detail Form</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-sm-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title"><i class="fas fa-user-plus"></i> Add Product Detail</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" method="POST" action="{{route('products.store')}}"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputEmail1">Product Name</label>
                                            <input class="form-control" name="product_name" type="text" id="name">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputEmail1">Product Image</label>
                                            <input class="form-control" name="product_image" type="file" id="image"
                                                   style="padding-top: 3px;">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="exampleInputEmail1">Product Icon</label>
                                            <input class="form-control" name="product_icon" type="file" id="image"
                                                   style="padding-top: 3px;">
                                        </div>
                                    </div>

                                    <div class="card card-outline card-info">
                                        <div class="card-header">
                                            <h3 class="card-title">
                                                Product Details
                                            </h3>
                                            <!-- tools box -->
                                            <div class="card-tools">
                                                <button type="button" class="btn btn-tool btn-sm"
                                                        data-card-widget="collapse" data-toggle="tooltip"
                                                        title="Collapse">
                                                    <i class="fas fa-minus"></i></button>
                                                <button type="button" class="btn btn-tool btn-sm"
                                                        data-card-widget="remove" data-toggle="tooltip"
                                                        title="Remove">
                                                    <i class="fas fa-times"></i></button>
                                            </div>
                                            <!-- /. tools -->
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body pad">
                                            <div class="mb-3">
                                                <textarea class="form-control" id="summary-ckeditor26"
                                                          name="details"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Product Slider Content 1</label>
                                        <textarea name="slider1" class="form-control" id="summary-ckeditor27"
                                                  required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Product Slider Content 2</label>
                                        <textarea name="slider2" class="form-control" id="summary-ckeditor28"
                                                  required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Product Slider Content 3</label>
                                        <textarea name="slider3" class="form-control" id="summary-ckeditor29"
                                                  required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <h3>Nepali Format</h3>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Product Name</label>
                                        <input class="form-control" name="product_name_nep" type="text" id="name">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Products Details</label>
                                        <textarea name="details_nep" id="summary-ckeditor30" class="form-control"
                                                  required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Product Slider Content 1</label>
                                        <textarea name="slider1_nep" class="form-control" id="summary-ckeditor31"
                                                  required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Product Slider Content 2</label>
                                        <textarea name="slider2_nep" class="form-control" id="summary-ckeditor32"
                                                  required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Product Slider Content 3</label>
                                        <textarea name="slider3_nep" class="form-control" id="summary-ckeditor33"
                                                  required></textarea>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Claim Form</label>
                                            <input type="hidden" value="Claim Form" name="claim_form">
                                            <input class="form-control" name="file_pdf" type="file"
                                                   style="padding-top: 3px;">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Proposal Form</label>
                                            <input type="hidden" value="Proposal Form" name="proposal_form">
                                            <input class="form-control" name="file_doc" type="file"
                                                   style="padding-top: 3px;">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Status</label>
                                        <select class="custom-select form-control" name="status">
                                            <option value="--Select Here--">--Select Here--</option>
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="" class="btn btn-outline-danger">Cancel</a>
                                </div>

                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('scripts')
    <script>
        CKEDITOR.replace('summary-ckeditor26');
        CKEDITOR.replace('summary-ckeditor27');
        CKEDITOR.replace('summary-ckeditor28');
        CKEDITOR.replace('summary-ckeditor29');
        CKEDITOR.replace('summary-ckeditor30');
        CKEDITOR.replace('summary-ckeditor31');
        CKEDITOR.replace('summary-ckeditor32');
        CKEDITOR.replace('summary-ckeditor33');
    </script>
    <script>
        $(document).ready(function () {
            var maxField = 10; //Input fields increment limitation
            var addButton = $('.add_button'); //Add button selector
            var wrapper = $('.field-wrapper'); //Input field wrapper
            var fieldHTML = '<div class="field-wrapper"><div class="row"><div class="form-group col-md-6"><label for="exampleInputEmail1">Product Slider Heading</label><input type="text" name="slider_title[]" class="form-control"required></div><div class="form-group col-md-6"><label for="exampleInputEmail1">Product Slider Content 1</label><textarea name="slider[]" class="form-control"required></textarea></div><a href="javascript:void(0);" class="remove_button" title="Remove field">Remove</a></div></div>'; //New input field html
            var x = 1; //Initial field counter is 1
            //Once add button is clicked
            $(addButton).click(function () {
                //Check maximum number of input fields
                if (x < maxField) {
                    x++; //Increment field counter
                    $(wrapper).append(fieldHTML); //Add field html
                }
            });
            //Once remove button is clicked
            $(wrapper).on('click', '.remove_button', function (e) {
                e.preventDefault();
                $(this).parent('div').remove(); //Remove field html
                x--; //Decrement field counter
            });
        });

    </script>

    <script>
        $(document).ready(function () {
            var maxField = 10; //Input fields increment limitation
            var addButton = $('.add'); //Add button selector
            var wrap = $('.field-wrap'); //Input field wrapper
            var fieldNEP = '<div class="field-wrap"><div class="row"><div class="form-group col-md-6"><label for="exampleInputEmail1">Product Slider Heading</label><input type="text" name="slider_title_nep[]" class="form-control"required></div><div class="form-group col-md-6"><label for="exampleInputEmail1">Product Slider Content 1</label><textarea name="slider_nep[]" class="form-control"required></textarea></div><a href="javascript:void(0);" class="remove_button" title="Remove field">Remove</a></div></div>'; //New input field html
            var x = 1; //Initial field counter is 1
            //Once add button is clicked
            $(addButton).click(function () {
                //Check maximum number of input fields
                if (x < maxField) {
                    x++; //Increment field counter
                    $(wrap).append(fieldNEP); //Add field html
                }
            });
            //Once remove button is clicked
            $(wrap).on('click', '.remove_button', function (e) {
                e.preventDefault();
                $(this).parent('div').remove(); //Remove field html
                x--; //Decrement field counter
            });
        });

    </script>
@endsection

