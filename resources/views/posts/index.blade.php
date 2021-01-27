@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Post List</div>
                <div class="card-header">
                <h3>{{$user->name}}</h3>
                <p>{{$user->email}}</p>
                </div>
                <div class="card-body">   
                    <table class="table">
                    <tr>
                        <th>No</th>    
                        <th>Judul Artikel</th>    
                        <th>Isi Artikel</th>   
                        <th>Aksi</th>   
                    </tr>
                    @foreach($posts as $post)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->body}}</td>
                        <td class="inline">
                            <a href="#" class="btn btn-danger btn-sm">delete</a>
                            <a href="#" class="btn btn-warning btn-sm">edit</a>
                            <a href="#" class="btn btn-success btn-sm">detail</a>
                        </td>
                    </tr>
                   @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
