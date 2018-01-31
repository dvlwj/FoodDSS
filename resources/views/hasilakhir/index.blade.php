@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h3>Hasil Akhir</h3>
            <span class="hrdivider"></span>
            <div class="panel panel-default">
                <div class="panel-body">
                    <table class="table table-hover table-bordered table-responsive table-nilai">
                       <thead>
                           <tr>
                               <th></th>
                               <th>C01</th>
                               <th>C02</th>
                               <th>C03</th>
                               <th>C04</th>
                               <th>Total</th>
                               <th>Rank</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td class="bold">A01</td>
                               <td>C01_A01</td>
                               <td>C02_A01</td>
                               <td>C03_A01</td>
                               <td>C04_A01</td>
                               <td>Total</td>
                               <td>Rank 1</td>
                           </tr>
                           <tr>
                                <td class="bold">A02</td>
                                <td>C01_A02</td>
                                <td>C02_A02</td>
                                <td>C03_A02</td>
                                <td>C04_A02</td>
                               <td>Total</td>
                               <td>Rank 1</td>
                           </tr>
                           <tr>
                                <td class="bold">A03</td>
                                <td>C01_A03</td>
                                <td>C02_A03</td>
                                <td>C03_A03</td>
                                <td>C04_A03</td>
                                <td>Total</td>
                                <td>Rank 1</td>
                            </tr>
                            <tr>
                                <td class="bold">A04</td>
                                <td>C01_A04</td>
                                <td>C02_A04</td>
                                <td>C03_A04</td>
                                <td>C04_A04</td>
                                <td>Total</td>
                                <td>Rank 1</td>
                            </tr>
                            <tr>
                                <td class="bold">A05</td>
                                <td>C01_A05</td>
                                <td>C02_A05</td>
                                <td>C03_A05</td>
                                <td>C04_A05</td>
                                <td>Total</td>
                                <td>Rank 1</td>
                            </tr>
                       </tbody>
                   </table>
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection