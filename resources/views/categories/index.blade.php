@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Category List</div>
                <div class="card-header">
                <h3>{{$user->name}}</h3>
                </div>
                <div class="card-body">   
                    <table class="table">
                    <tr>
                        <th>No</th>    
                        <th>Slug</th>    
                        <th>Category</th>   
                        <th>Action</th>   
                    </tr>
                    @foreach($categories as $category)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$category->slug}}</td>
                        <td>{{$category->category}}</td>
                        <td class="inline">
                            <a href="#" class="btn btn-danger btn-sm">Delete</a>
                            <a href="#" class="btn btn-warning btn-sm">edit</a>
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
