@extends('layout')
@section('title', 'Profile')
@section('content')
    <link rel="stylesheet" href="{{ asset('css/addGame.css') }}">

    <div class="addGame-container">
        <div class="form-container">
            <h2 class="font-weight-bold">Profile</h2>

            <form action="/profile/{{ $users->id }}" method="post" enctype="multipart/form-data">
                @csrf
                <table class="table table-borderless">
                    <tr>
                        <td colspan="2">Name</td>
                        <td><input type="text" name="name" id="" style="width: 100%" placeholder="{{ $users->name }}"></td>
                    </tr>
                    <tr>
                        <td colspan="2">Photo</td>
                        <td><input type="file" name="picture" id=""></td>
                    </tr>
                    <tr>
                        <td colspan="2">Email</td>
                        {{-- <td><textarea name="GameDesc" form="usrform" style="width: 100%"></textarea></td> --}}
                        <td><input type="email" name="email" id="" style="width: 100%" placeholder="{{ $users->email }}""></td>
                    </tr>
                    <tr>
                        <td colspan="2">Gender</td>
                        <td>{{$users->gender}}</td>
                    </tr>
                    <tr>
                        <td colspan="2">Date of Birth</td>
                        <td>{{$users->dob}}</td>
                    </tr>

                    <tr>
                        <td colspan="2"></td>
                        <td align="right"><button class="btn btn-danger" type="submit">Update</button></td>
                    </tr>
                </table>
            </form>
        </div>

        <div class="form-container">
            <h2 class="font-weight-bold">Account</h2>

            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <table class="table table-borderless">
                    <tr>
                        <td colspan="2">Old Password</td>
                        <td><input type="password" name="oldPassword" id="password" style="width: 100%" ></td>
                    </tr>
                    <tr>
                        <td colspan="2">New Password</td>
                        <td><input type="password" name="NewPassword" id="password" style="width: 100%" ></td>
                    </tr>
                    <tr>
                        <td colspan="2">Confirm New Password</td>
                        {{-- <td><textarea name="GameDesc" form="usrform" style="width: 100%"></textarea></td> --}}
                        <td><input type="password" name="ConfirmNewPassword" id="password" style="width: 100%"></td>
                    </tr>


                    <tr>
                        <td colspan="2"></td>
                        <td align="right"><button class="btn btn-danger" type="submit">Update</button></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>

@endsection
