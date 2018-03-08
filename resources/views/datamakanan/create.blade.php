@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h3>Data Baru</h3>
            <span class="hrdivider"></span>
            <div class="panel panel-default">
                <div class="panel-body">
                    <form action="{{ route('makanan.store') }}" method="post">
                        {{csrf_field()}}
                        <div class="form-group {{ $errors->has('kd_makanan') ? 'has-error' : '' }}">
                            <label for="kd_makanan" class="control-label">Kode Makanan</label>
                            <input type="text" class="form-control" name="kd_makanan" placeholder="Kode Makanan">
                            @if ($errors->has('kd_makanan'))
                                <span class="help-block">{{ $errors->first('kd_makanan') }}</span>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('nama') ? 'has-error' : '' }}">
                            <label for="nama" class="control-label">Nama</label>
                            <input name="nama" class="form-control" name="nama" placeholder="Nama">
                            @if ($errors->has('nama'))
                                <span class="help-block">{{ $errors->first('nama') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-info">Simpan</button>
                            <a href="{{ route('makanan.index') }}" class="btn btn-default">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>            
        </div>
    </div>
</div>
@endsection