@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h3>Nilai Kriteria</h3>
            <span class="hrdivider"></span>
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-inline" action="/action_page.php">
                        
                        <select name="" id="variabel" class="form-control">
                            <option value="1">c01 - protein</option>
                            <option value="1">c01 - protein</option>
                            <option value="1">c01 - protein</option>
                            <option value="1">c01 - protein</option>
                        </select>                        
                        <select name="" id="skala" class="form-control">
                            <option value="1">1 - Kedua elemen sama pentingnya</option>
                            <option value="2">2 - Nilai-nilai antara dua nilai pertimbangan-pertimbangan yang berdekatan</option>
                            <option value="3">3 - Elemen yang satu sedikit lebih penting daripada yang lainnya</option>
                            <option value="4">4 - Nilai-nilai antara dua nilai pertimbangan-pertimbangan yang berdekatan</option>
                            <option value="5">5 - Elemen yang satu lebih penting daripada yang lainnya</option>
                            <option value="6">6 -  Nilai-nilai antara dua nilai pertimbangan-pertimbangan yang berdekatan</option>
                            <option value="7">7 - Satu elemen yang jelas lebih mutlak penting daripada elemen lainnya</option>
                            <option value="8">8 - Nilai-nilai antara dua nilai pertimbangan-pertimbangan yang berdekatan</option>
                            <option value="9">9 - Satu elemen mutlak penting daripada elemen lainnya</option>
                        </select>                        
                        <select name="" id="variabel2" class="form-control">
                            <option value="1">c01 - protein</option>
                            <option value="1">c01 - protein</option>
                            <option value="1">c01 - protein</option>
                            <option value="1">c01 - protein</option>
                        </select>                        
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                    <table class="table table-hover table-bordered table-responsive table-nilai">
                       <thead>
                           <tr>
                               <th>Kode</th>
                               <th>C01</th>
                               <th>C02</th>
                               <th>C03</th>
                               <th>C04</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                                <td class="bold">C01</td> 
                                <td id="c01_c01">
                                    1
                                </td>
                                <td id="c02_c01">
                                    c02_c01
                                </td>
                                <td id="c03_c01">
                                    c03_c01
                                </td>
                                <td id="c04_c01">
                                    c04_c01
                                </td>
                           </tr>
                           <tr>
                                <td class="bold">C02</td> 
                                <td id="c01_c02">
                                    c01_c02
                                </td>
                                <td id="c02_c02">
                                    1
                                </td>
                                <td id="c03_c02">
                                    c03_c02
                                </td>
                                <td id="c04_c02">
                                    c04_c02
                                </td>
                           </tr>
                           <tr>
                                <td class="bold">C03</td> 
                                <td id="c01_c03">
                                    c01_c03
                                </td>
                                <td id="c02_c03">
                                    c02_c03
                                </td>
                                <td id="c03_c03">
                                    1
                                </td>
                                <td id="c04_c03">
                                    c04_c03
                                </td>
                           </tr>
                           <tr>
                                <td class="bold">C04</td>
                                <td id="c01_c04">
                                    c01_c04
                                </td>
                                <td id="c02_c04">
                                    c02_c04
                                </td>
                                <td id="c03_c04">
                                    c03_c04
                                </td>
                                <td id="c04_c04">
                                    1
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