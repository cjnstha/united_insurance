@extends('layouts.admin.admin_layouts')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>BOD Form</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">BOD Form</li>
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
                                <h3 class="card-title"><i class="fas fa-user-plus"></i> Edit BOD Profile</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" action="{{route('bod.update', $bods->id) }}" method="POST"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">BOD Name</label>
                                        <input type="text" class="form-control" name="bod_name" placeholder="Enter Name"
                                               required value="{{$bods->bod_name}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Image</label>
                                        <div id="uniform-undefined">
                                            <table>
                                                <tr>
                                                    <td>
                                                        <input name="bod_imag" id="image" type="file">
                                                        @if(!empty($bods->bod_imag))
                                                            <input type="hidden" name="current_image"
                                                                   value="{{ $bods->bod_imag }}">
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @if(!empty($bods->bod_imag))
                                                            <img style="width:60px;"
                                                                 src="{{ asset('/images/bod/small/'.$bods->bod_imag) }}">
                                                        @endif
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Position</label>
                                        <input type="text" class="form-control" name="bod_position"
                                               placeholder="Enter Position" required
                                               value="{{$bods->bod_position}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Experience</label>
                                        <input type="text" class="form-control" name="experience"
                                               placeholder="Enter Experience"
                                               required value="{{$bods->experience}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email</label>
                                        <input type="text" class="form-control" name="email" placeholder="Enter Email"
                                               required value="{{$bods->email}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Contact Number</label>
                                        <input type="text" class="form-control" name="contact"
                                               placeholder="Enter Contact"
                                               required value="{{$bods->contact}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Message</label>
                                        <textarea name="bod_message" class="form-control"
                                                  required>{{$bods->bod_message}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Hierarchial Order</label>
                                        <input type="number" class="form-control" name="hierarchy" placeholder="Enter Order Format"
                                               required value="{{$bods->hierarchy}}">
                                    </div>
                                    <div class="form-group">
                                        <h3>Nepali Format</h3>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">BOD Name Nepali</label>
                                        <input type="text" class="form-control" name="bod_name_nep"
                                               placeholder="Enter BOD Name in Nepali" required
                                               value="{{$bods->bod_name_nep}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Position</label>
                                        <input type="text" class="form-control" name="bod_position_nep"
                                               placeholder="Enter Position" required
                                               value="{{$bods->bod_position_nep}}">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Message Nepali</label>
                                        <textarea name="bod_message_nep" class="form-control"
                                                  required>{{$bods->bod_message_nep}}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Status</label>
                                        <select class="custom-select form-control" name="status">
                                            <option value="--Select Here--">--Select Here--</option>
                                            <option value="1"{{$bods->status == 1 ? 'selected':''}}>Active</option>
                                            <option value="0"{{$bods->status == 0 ? 'selected':''}}>Inactive</option>
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
