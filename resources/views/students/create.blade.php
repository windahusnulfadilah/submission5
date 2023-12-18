@extends('students.layout')
@section('content')

<div class="card" style="margin:20px;">
  <div class="card-header">Create New Pegawai</div>
  <div class="card-body">

      <form action="{{ url('student') }}" method="post">
        {!! csrf_field() !!}
        <label>name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>no_telp</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        <label>alamat</label></br>
        <input type="text" name="mobile" id="mobile" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>

  </div>
</div>

@stop
