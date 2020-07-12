@extends('layouts.admin.admin_layouts')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>PopUp Form</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">PopUp Form</li>
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
                                <h3 class="card-title"><i class="fas fa-user-plus"></i> Edit PopUp Form</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" action="{{ route('popups.update', $popups->id) }}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="">PopUp Tiltle*</label>
                                        <input type="text" class="form-control" id="" name="popup_title"
                                               placeholder="Enter PopUp Title" required
                                               value="{{$popups->popup_title}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">PopUp Description*</label>
                                        <textarea class="form-control" id="" name="description"
                                                  placeholder="Enter PopUp Description">{{$popups->description}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Images*</label>
                                        <div id="uniform-undefined">
                                            <table>
                                                <tr>
                                                    <td>
                                                        <input name="image" id="image" type="file">
                                                        @if(!empty($popups->image))
                                                            <input type="hidden" name="current_image"
                                                                   value="{{ $popups->image }}">
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if(!empty($popups->image))
                                                            <img style="width:60px;"
                                                                 src="{{ asset('/images/popup/large/'.$popups->image) }}">
                                                        @endif
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <h3>Nepali Format</h3>
                                    </div>
                                    <div class="form-group">
                                        <label for="">PopUp Tiltle in Nepali*</label>
                                        <input type="text" class="form-control" id="" name="popup_title_nep"
                                               placeholder="Enter PopUp Title" required
                                               value="{{$popups->popup_title_nep}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="">PopUp Description*</label>
                                        <textarea class="form-control" id="" name="description_nep"
                                                  placeholder="Enter PopUp Description">{{$popups->description_nep}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Status</label>
                                        <select class="custom-select form-control" name="status">
                                            <option value="--Select Here--">--Select Here--</option>
                                            <option value="1"{{$popups->status ==1 ? 'selected': ''}}>Active</option>
                                            <option value="0"{{$popups->status ==0 ? 'selected': ''}}>Inactive</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                    <a href="{{route('popups.index')}}" class="btn btn-outline-danger">Cancel</a>
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
