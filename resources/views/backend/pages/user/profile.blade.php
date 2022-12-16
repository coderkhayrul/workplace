@extends('backend.layouts.layout')
@push('custom-style')
    <!-- tagsinput -->
    <link rel="stylesheet" href="{{ asset('backend/dist/css/bootstrap-tagsinput.css') }}">
@endpush

{{-- Dynamic Title --}}
@section('admin-title', 'User Manager')

@section('admin_content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Profile</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                @if (File::exists($user->profile->profile_pic))
                                    <img id="profileImage" class="profile-user-img img-fluid img-circle"
                                        src="{{ asset($user->profile->profile_pic) }}" alt="profile picture">
                                @else
                                    <img id="profileImage" class="profile-user-img img-fluid img-circle"
                                        src="{{ asset('backend') }}/dist/img/user4-128x128.jpg" alt="profile picture">
                                @endif
                            </div>

                            <h3 class="profile-username text-center">{{ $user->profile->full_name }}</h3>
                            @if ($user->profile->user_position != null)
                                <p class="text-muted text-center">{{ optional($user->profile)->user_position }}</p>
                            @endif

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Balance</b> <a class="float-right"><b><span class="profile-username">৳</span>
                                            {{ $user->profile->balance }}</b></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Online Status</b> <a class="float-right">
                                        @if ($user->profile->online_status == 1)
                                            <span class="badge badge-success">Active</span>
                                        @else
                                            <span class="badge badge-secondary">Inactive</span>
                                        @endif
                                    </a>
                                </li>
                                <li class="list-group-item">
                                    <b>Work Complect</b> <a class="float-right">Soon </a>
                                </li>
                            </ul>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- About Me Box -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">About Me</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <strong><i class="fas fa-book mr-1"></i> Education</strong>
                            <p class="text-muted">
                                B.S. in Computer Science from the University of Tennessee at Knoxville
                            </p>

                            @if ($user->profile->user_skill != null)
                                <hr>
                                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>
                                <p class="text-muted">{{ $user->profile->present_address }}</p>
                            @endif
                            @if ($user->profile->user_skill != null)
                                <hr>
                                <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>
                                <p class="text-muted">
                                    @if ($user->profile->user_skill != '')
                                        @foreach (explode(',', $user->profile->user_skill) as $skill)
                                            <span class="tag tag-primary">{{ $skill }}</span>
                                        @endforeach
                                    @endif
                                </p>
                            @endif
                            @if ($user->profile->description != null)
                                <hr>
                                <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>
                                <p class="text-muted">{{ $user->profile->description }}</p>
                            @endif
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item">
                                    <a class="nav-link {{ Session::get('panel_name') == 'account' ? 'active' : '' }}"
                                        href="#account" data-toggle="tab">Account</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Session::get('panel_name') == 'settings' ? 'active' : '' }}"
                                        href="#settings" data-toggle="tab">Settings</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Session::get('panel_name') == 'social' ? 'active' : '' }}"
                                        href="#social" data-toggle="tab">Social Media</a>
                                </li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <div class="tab-pane {{ Session::get('panel_name') == 'account' ? 'active' : '' }}"
                                    id="account">
                                    <form action="{{ route('admin.user.account', $user->user_slug) }}"
                                        class="form-horizontal" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="panel_name" value="account">
                                        <input type="hidden" name="profile_id" value="{{ $user->profile->profile_id }}">
                                        <input name="profile_old_image" type="hidden"
                                            value="{{ $user->profile->profile_pic }}">
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">User Profile</label>
                                            <div class="col-sm-10">
                                                <div class="custom-file">
                                                    <input name="profile_pic" onchange="readURL3(this)" type="file"
                                                        class="custom-file-input @error('profile_pic') is-invalid @enderror">
                                                    <label id="profileImage" class="custom-file-label"
                                                        for="customFile">Choose file</label>
                                                </div>
                                                @error('profile_pic')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">User Name</label>
                                            <div class="col-sm-10">
                                                <input value="{{ $user->user_name }}" disabled class="form-control"
                                                    placeholder="User Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName2" class="col-sm-2 col-form-label">Full Name</label>
                                            <div class="col-sm-10">
                                                <input name="full_name" value="{{ $user->profile->full_name }}"
                                                    type="text"
                                                    class="form-control @error('full_name') is-invalid @enderror"
                                                    placeholder="Full Name">
                                                @error('full_name')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input name="email" value="{{ $user->email }}" type="email"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    placeholder="Email">
                                                @error('email')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputExperience" class="col-sm-2 col-form-label">Phone
                                                Number</label>
                                            <div class="col-sm-10">
                                                <input name="phone_number" value="{{ $user->phone_number }}"
                                                    type="text"
                                                    class="form-control @error('phone_number') is-invalid @enderror"
                                                    placeholder="Phone Number">
                                                @error('phone_number')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane {{ Session::get('panel_name') == 'settings' ? 'active' : '' }}"
                                    id="settings">
                                    <form action="{{ Route('admin.user.setting', $user->user_slug) }}"
                                        class="form-horizontal" method="POST">
                                        @csrf
                                        <input type="hidden" name="profile_id"
                                            value="{{ $user->profile->profile_id }}">
                                        <input type="hidden" name="panel_name" value="settings">
                                        <div class="form-group row">
                                            <label for="national_id" class="col-sm-2 col-form-label">National Id <span
                                                    class="text-danger">*</span></label>
                                            <div class="col-sm-10">
                                                <input type="number"
                                                    class="form-control @error('national_id') is-invalid @enderror"
                                                    value="{{ $user->profile->national_id }}" name="national_id"
                                                    placeholder="Enter Your NID">
                                                @error('national_id')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="user_position" class="col-sm-2 col-form-label">Position</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control"
                                                    value="{{ $user->profile->user_position }}" name="user_position"
                                                    placeholder="Enter Your Position">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="user_skill" class="col-sm-2 col-form-label">Skills</label>
                                            <div class="col-sm-10">
                                                <input data-role="tagsinput" type="text"
                                                    value="{{ $user->profile->user_skill }}" class="form-control"
                                                    name="user_skill" placeholder="Enter Skills">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="present_address" class="col-sm-2 col-form-label">Present
                                                Address</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" name="present_address" placeholder="Enter Present Address">{{ $user->profile->present_address }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="parmenent_address" class="col-sm-2 col-form-label">Parmanent
                                                Address</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" name="parmenent_address" placeholder="Enter Permanert Address">{{ $user->profile->parmenent_address }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="description" class="col-sm-2 col-form-label">About You</label>
                                            <div class="col-sm-10">
                                                <div class="mb-3">
                                                    <textarea name="description" class="form-control" placeholder="Talk About You..">{{ $user->profile->description }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane {{ Session::get('panel_name') == 'social' ? 'active' : '' }}"
                                    id="social">
                                    <form action="{{ Route('admin.user.socialmedia', $user->user_slug) }}"
                                        class="form-horizontal" method="POST">
                                        @csrf
                                        <input type="hidden" name="profile_id"
                                            value="{{ $user->profile->profile_id }}">
                                        <input type="hidden" name="panel_name" value="social">
                                        <div class="form-group row">
                                            <label for="facebook_link" class="col-sm-2 col-form-label">Facebook
                                                Link</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control"
                                                    value="{{ $user->profile->facebook_link }}" name="facebook_link"
                                                    id="facebook_link" placeholder="Enter Your Facebook LINK">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="github_link" class="col-sm-2 col-form-label">Github Link</label>
                                            <div class="col-sm-10">
                                                <input type="text"
                                                    class="form-control"value="{{ $user->profile->github_link }}"
                                                    name="github_link" id="github_link"
                                                    placeholder="Enter Your Github LINK">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-primary">Update</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.nav-tabs-custom -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

@push('custom-script')
    <!-- bs-custom-file-input -->
    <script src="{{ asset('backend') }}/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- tagsinput -->
    <script src="{{ asset('backend/dist/js/bootstrap-tagsinput.min.js') }}"></script>
@endpush
