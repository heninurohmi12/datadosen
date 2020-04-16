@extends('layout')
@section('content')
<div class="card" style="width : 350px">
    @foreach ($ruang as $r)
    <div class="card-body">
        <div class="card-title">Ruang Kelas : {{$r->ruang_kelas}}</div>
        <div class="card-text">Gedung : {{$r->gedung}}</div>
        <a href="{{action('KelasController@index')}}" class="btn btn-primary">Back</a>
    </div>
    @endforeach

</div>
@endsection