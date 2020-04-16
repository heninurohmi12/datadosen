@extends('layouts.global')

@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <strong>{{$message}}</strong>
</div>
    @endif
    <div class="row">
        <div class="col-md-6">
            <h2>Ruang Kelas</h2>
        </div>
        <div class="col-md-4">
            <form action="/search" method="get">
                <div class="input-group">
                    <input type="search" name="search" class="form-control">
                    <span class="input-group-prepend">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </span>
                </div>
            </form>
        </div>  
        <div class="col-md-2 text-right">
            <a href="{{action('KelasController@create')}}" class="btn btn-primary">Add Data</a>
        </div>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Ruang Kelas</th>
                <th>Gedung</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ruang as $r)
            <tr>
                <td>{{$r->id}}</td>
                <td>{{$r->ruang_kelas}}</td>
                <td>{{$r->gedung}}</td>
                <td>
                    <form action="{{action('KelasController@destroy', $r->id)}}" method="post">
                        <a href="{{action('KelasController@show', $r->id)}}" class="btn btn-info">Show</a>
                        <a href="{{action('KelasController@edit', $r->id)}}" class="btn btn-warning">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody></table>
        {{$ruang->links()}}
        @endsection
