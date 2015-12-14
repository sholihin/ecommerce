@extends('layouts.master')
@section('content')
@if(Auth::check())
<section id="profil">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title"><i class="glyphicon glyphicon-user"></i> Rubah Profil</h4>
    </div>
    <form action="/profil/{{ $profils->id }}" method="post">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <div class="modal-body">
      <div class="form-group">
          <label>Nama Lengkap</label>
          <input type="text" name="name" value="{{ $profils->name }}" class="form-control">
      </div>
      <div class="form-group">
          <label>Email</label>
          <input type="text" name="email" value="{{ $profils->email }}" class="form-control" disabled>
      </div>
      <div class="form-group">
          <label>No Telepon</label>
          <input type="text" name="phone" value="{{ $profils->phone }}" class="form-control">
      </div>
      <div class="form-group">
          <label>Alamat</label>
          <textarea name="address" class="form-control">{{ $profils->address }}</textarea>
      </div>
    </div>
    <div class="modal-footer">
      <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o"></i> Simpan</button>
    </div>
    </form>
  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</section>
@if(Session::has('flash_message'))
    <script type="text/javascript">
        $(function(){
            $('#profilModal').modal('show');
        });
    </script>
@endif

<div id="profilModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <!-- dialog body -->
      <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        {{ Session::get('flash_message') }}
      </div>
      <!-- dialog buttons -->
      <div class="modal-footer"><button type="button" class="btn btn-primary">Ok</button></div>
    </div>
  </div>
</div>
@endif
@endsection
