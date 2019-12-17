@extends('base')
@section('employees','active')
@section('content')
<form action="{{route('employees.update',$employee->id_employees)}}" method="POST">
  @csrf
  @method('PUT')
  <div class="form-group">
    <label>Jobs</label>
    <select name="job" class="form-control">
      @foreach($jobs as $data)
        <option value="{{$data->id_jobs}}" {{  $data->id_jobs === $employee->id_jobs ? 'selected' : '' }}>{{$data->nama}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label>Nama Pegawai</label>
    <input type="text" name="nama" class="form-control" placeholder="..." value="{{$employee->name}}">
  </div>
  <div class="form-group">
    <label>E-Mail</label>
    <input type="email" name="email" class="form-control" placeholder="..." value="{{$employee->email}}">
  </div>
  <div class="form-group">
    <label>Kontak</label>
    <input type="text" name="kontak" class="form-control" placeholder="..." value="{{$employee->phone}}">
  </div>
  <div class="form-group">
    <label>Alamat</label>
    <textarea name="alamat" class="form-control" placeholder="...">{{$employee->address}}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection