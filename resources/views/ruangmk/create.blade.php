@extends("layouts.global")
@section("title") Create New User @endsection
@section("content")
<div class="col-md-8">
    <form enctype="multipart/form-data" class="bg-white shadow-sm p-3" action="{{route('users.store')}}" method="POST">
        @csrf
        <label for="ruangkelas">Ruang Kelas</label>
        <input class="form-control" placeholder="Ruang Kelas" type="text" name="ruangkelas" id="ruangkelas" />
        <br>
        <label for="gedung">Gedung</label>
        <input class="form-control" placeholder="gedung" type="text" name="gedung" id="gdeung" />
        <br>
