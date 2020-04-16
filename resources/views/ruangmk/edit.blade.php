@extends('layout')
@section('content')
<div class="row">
    <div class="col-md-6 offset-md-3">
        @if($message = Session::get('danger'))
            <div class="alert alert-danger">
            <strong>{{ $message }}</strong>
            </div>
        @endif
        @foreach ($ruang as $r)
       
        <form action="{{ action ('KelasController@update', $r->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Ruang Kelas</label>
            <input class="form-control" type="text" name="ruang_kelas" value="{{$r->ruang_kelas}}"/>
            </div> 
            <div class="form-group">
                <label>Gedung</label>
                <input class="form-control" type="text" name="gedung" value="{{$r->gedung}}"/>
            </div>
            
            <button class="btn btn-warning" type="submit">Submit</button>
        <a href="{{action('KelasController@index')}}" class="btn btn-default">Back</a>
        </form>
     
         @endforeach
    </div>
</div>
@endsection
