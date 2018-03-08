@extends('layouts.app')
@section('content')
<div class="container-fluid">
    @if ($message = Session::get('message'))
    <div class="alert alert-success martop-sm">
        <p>{{ $message }}</p>
    </div>
    @endif
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h3>Data Makanan</h3>
            <span class="hrdivider"></span>
            <div class="panel panel-default">
                <div class="panel-body">
                    <a href="{{route('makanan.create')}}" class="btn btn-primary">
                        Tambah Data
                    </a>
                    <table class="table table-hover table-bordered table-responsive table-striped table-information">
                       <thead>
                           <tr>
                               <th>No</th>
                               <th>Kode</th>
                               <th>Nama Makanan</th>
                               <th>Aksi</th>
                           </tr>
                       </thead>
                       <tbody>
                            @php
                            $nomor = 1;
                            @endphp
                            @foreach ($datamakanan as $makanan)
                                <tr>
                                    <td class="text-center">{{$nomor++}}</td>
                                    <td class="text-center">{{$makanan->kd_makanan}}</td>
                                    <td class="text-center">{{$makanan->nama}}</td>
                                    <td class="text-center">
                                        <form action="{{ route('makanan.destroy', $makanan->id) }}" method="post">
                                            {{csrf_field()}}
                                            {{ method_field('DELETE') }}
                                            <a href="{{ route('makanan.edit', $makanan->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-fw fa-pencil"></i></a>
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                       </tbody>
                    </table>
                    {{ $datamakanan->links() }}
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection