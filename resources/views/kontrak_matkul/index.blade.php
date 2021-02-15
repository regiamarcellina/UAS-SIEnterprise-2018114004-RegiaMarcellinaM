@extends('app.app')

@section('title', 'Kontrak Mata Kuliah')

@section('content')

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Tambah Data
</button>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Mahasiswa ID</th>
      <th scope="col">Semester ID</th>

    </tr>
  </thead>
  <tbody>
  <tr>
  @foreach($Kontrak as $kontrak)
    <td> {{ $kontrak['mahasiswa_id'] }} </td>
    <td> {{ $kontrak['semester_id'] }}  </td>

  </tr>
  @endforeach
  </tbody>
</table>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/kontrak_matkul" method="POST">
      @csrf
      
      <div class="modal-body">
  <div class="form-group">
    <label for="exampleInputEmail1">Mahasiswa ID</label>
    <input type="text" class="form-control" id="nama_mahasiswa" aria-describedby="emailHelp" name="mahasiswa_id">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Semester ID</label>
    <input type="text" class="form-control" id="alamat" name="semester_id">
  </div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>

@endsection