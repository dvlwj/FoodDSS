@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h3>Data Kriteria</h3>
            <span class="hrdivider"></span>
            <div class="panel panel-default">
                <div class="panel-body">
                    <a href="{{route('kriteria.create')}}" class="btn btn-primary">
                        Tambah Data
                    </a>
                    <table class="table table-hover table-bordered table-responsive table-striped table-information">
                       <thead>
                           <tr>
                               <th>No</th>
                               <th>Kode</th>
                               <th>Nama Kriteria</th>
                               <th>Aksi</th>
                           </tr>
                       </thead>
                       <tbody>
                            @php
                            $nomor = 1;
                            @endphp
                            @foreach ($datakriteria as $kriteria)
                                <tr>
                                    <td class="text-center">{{$nomor++}}</td>
                                    <td class="text-center">{{$kriteria->kd_kriteria}}</td>
                                    <td class="text-center">{{$kriteria->nama}}</td>
                                    <td class="text-center">
                                        <form action="{{ route('kriteria.destroy', $kriteria->id) }}" method="post">
                                            {{csrf_field()}}
                                            {{ method_field('DELETE') }}
                                            <a href="{{ route('kriteria.edit', $kriteria->id) }}" class="btn btn-warning btn-sm"><i class="fa fa-fw fa-pencil"></i></a>
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                       </tbody>
                    </table>
                    {{ $datakriteria->links() }}
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection