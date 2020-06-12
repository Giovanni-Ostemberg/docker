@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle"
                             src="{{ $user->image }}"
                             alt="User profile picture">
                    </div>

                    <h3 class="profile-username text-center">{{ $user->name }}</h3>

                    <p class="text-muted text-center">{{ $user->email }}</p>

                    <a href="{{ route('profile.edit') }}" class="btn btn-primary btn-block"><b>Editar</b></a>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
    <!-- /.row -->
@stop

@if(session('message'))
    @section('js')
    <script>
        swal.fire('Sucesso', '{{ session('message') }}', 'success')
    </script>
    @stop
@endif
