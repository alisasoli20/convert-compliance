@extends('layouts.admin')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit User</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Edit User</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                @if($errors->any())
                    {!! implode('', $errors->all('<div>:message</div>')) !!}
                @endif
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Edit User</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" method="POST" action="#" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name" value="{{ $user->name }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="{{ $user->email }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" >
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password Confirmation</label>
                                        <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1" placeholder="Password" >
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputFile">Profile Picture</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="profile_picture" class="custom-file-input" id="exampleInputFile" >
                                                <label class="custom-file-label" for="exampleInputFile">Profile Picture</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="">Upload</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Role</label>
                                        <select class="form-control" name="role" required>
                                            <option disabled selected>Select User Role</option>
                                            @foreach($roles as $role)
                                                <option value="{{ $role->name }}" @foreach($user->roles as $u_role) @if($role->name == $u_role->name) {{ "selected" }} @endif @endforeach>{{ $role->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Permissions</label>
                                        <br>
                                        @foreach($permissions as $permission)
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" name="permissions[]" type="checkbox" id="inlineCheckbox1" value="{{ $permission->name }}" @foreach($user->permissions as $u_permission) @if($permission->name == $u_permission->name){{ "checked" }}@endif @endforeach>
                                                <label class="form-check-label" for="inlineCheckbox1">{{ $permission->name }}</label>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                                <!-- /.card-body -->

                                <div class="card-footer text-center">
                                    <button type="submit" class="btn btn-secondary"><i class="fa fa-save mr-2 "></i>Update</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
