@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h3>Data Sub Kriteria</h3>
            <span class="hrdivider"></span>
            <div class="panel panel-default">
                <div class="panel-body">
                    <button type="button" class="btn btn-primary">
                        Tambah Data
                    </button>
                    <table class="table table-hover table-bordered table-responsive table-striped table-information">
                       <thead>
                           <tr>
                               <th>No</th>
                               <th>Kode</th>
                               <th>Nama Sub Kriteria</th>
                               <th>Aksi</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td class="text-center" style="width:10%">1</td>
                               <td class="text-center" style="width:20%">S01</td>
                               <td style="width:55%">Baik</td>
                               <td class="text-center" style="width:15%">
                                   <button type="button" class="btn btn-sm btn-warning">
                                       <i class="fa fa-fw fa-pencil"></i>
                                   </button>                                   
                                   <button type="button" class="btn btn-sm btn-danger">
                                       <i class="fa fa-fw fa-trash"></i>
                                   </button>                                   
                               </td>
                           </tr>
                       </tbody>
                   </table>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection