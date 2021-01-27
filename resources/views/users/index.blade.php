@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">User List</div>
                <div class="card-body">   
                    <table class="table">
                    <tr>
                        <th>No</th>    
                        <th>Nama</th>    
                        <th>Email</th>    
                        <th>Alamat</th>    
                        <th>Telepon</th>    
                    </tr>
                    @foreach($users as $user)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->profile->address}}</td>
                        <td>{{$user->profile->phone}}</td>
                    </tr>
                   @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
