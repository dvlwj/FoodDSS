@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h3>Nilai Sub Kriteria</h3>
            <span class="hrdivider"></span>

            
            <h5>Matriks Perbandingan Berpasangan Kriteria Protein</h5>
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-inline" action="/action_page.php">
                        <select name="" id="variabel" class="form-control">
                            <option value="1">S01 - Baik</option>
                            <option value="1">S01 - Cukup</option>
                            <option value="1">S01 - Kurang</option>
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
                            <option value="1">S01 - Baik</option>
                            <option value="1">S01 - Cukup</option>
                            <option value="1">S01 - Kurang</option>
                        </select>                        
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                    <table class="table table-hover table-bordered table-responsive table-nilai">
                       <thead>
                           <tr>
                               <th>Kode</th>
                               <th>S01</th>
                               <th>S02</th>
                               <th>S03</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                                <td class="bold">S01</td> 
                                <td id="S01_S01">
                                    1
                                </td>
                                <td id="S02_S01">
                                    S02_S01
                                </td>
                                <td id="S03_S01">
                                    S03_S01
                                </td>
                           </tr>
                           <tr>
                                <td class="bold">S02</td> 
                                <td id="S01_S02">
                                    S01_S02
                                </td>
                                <td id="S02_S02">
                                    1
                                </td>
                                <td id="S03_S02">
                                    S03_S02
                                </td>
                           </tr>
                           <tr>
                                <td class="bold">S03</td> 
                                <td id="S01_S03">
                                    S01_S03
                                </td>
                                <td id="S02_S03">
                                    S02_S03
                                </td>
                                <td id="S03_S03">
                                    1
                                </td>
                           </tr>
                       </tbody>
                   </table>
                </div>
            </div>       
            
            

            
            <h5>Matriks Perbandingan Berpasangan Kriteria Lemak</h5>
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-inline" action="/action_page.php">
                        <select name="" id="variabel" class="form-control">
                            <option value="1">S01 - Baik</option>
                            <option value="1">S01 - Cukup</option>
                            <option value="1">S01 - Kurang</option>
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
                            <option value="1">S01 - Baik</option>
                            <option value="1">S01 - Cukup</option>
                            <option value="1">S01 - Kurang</option>
                        </select>                        
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                    <table class="table table-hover table-bordered table-responsive table-nilai">
                       <thead>
                           <tr>
                               <th>Kode</th>
                               <th>S01</th>
                               <th>S02</th>
                               <th>S03</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                                <td class="bold">S01</td> 
                                <td id="S01_S01">
                                    1
                                </td>
                                <td id="S02_S01">
                                    S02_S01
                                </td>
                                <td id="S03_S01">
                                    S03_S01
                                </td>
                           </tr>
                           <tr>
                                <td class="bold">S02</td> 
                                <td id="S01_S02">
                                    S01_S02
                                </td>
                                <td id="S02_S02">
                                    1
                                </td>
                                <td id="S03_S02">
                                    S03_S02
                                </td>
                           </tr>
                           <tr>
                                <td class="bold">S03</td> 
                                <td id="S01_S03">
                                    S01_S03
                                </td>
                                <td id="S02_S03">
                                    S02_S03
                                </td>
                                <td id="S03_S03">
                                    1
                                </td>
                           </tr>
                       </tbody>
                   </table>
                </div>
            </div>       
            
            

            
            <h5>Matriks Perbandingan Berpasangan Kriteria Karbohidrat</h5>
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-inline" action="/action_page.php">
                        <select name="" id="variabel" class="form-control">
                            <option value="1">S01 - Baik</option>
                            <option value="1">S01 - Cukup</option>
                            <option value="1">S01 - Kurang</option>
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
                            <option value="1">S01 - Baik</option>
                            <option value="1">S01 - Cukup</option>
                            <option value="1">S01 - Kurang</option>
                        </select>                        
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                    <table class="table table-hover table-bordered table-responsive table-nilai">
                       <thead>
                           <tr>
                               <th>Kode</th>
                               <th>S01</th>
                               <th>S02</th>
                               <th>S03</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                                <td class="bold">S01</td> 
                                <td id="S01_S01">
                                    1
                                </td>
                                <td id="S02_S01">
                                    S02_S01
                                </td>
                                <td id="S03_S01">
                                    S03_S01
                                </td>
                           </tr>
                           <tr>
                                <td class="bold">S02</td> 
                                <td id="S01_S02">
                                    S01_S02
                                </td>
                                <td id="S02_S02">
                                    1
                                </td>
                                <td id="S03_S02">
                                    S03_S02
                                </td>
                           </tr>
                           <tr>
                                <td class="bold">S03</td> 
                                <td id="S01_S03">
                                    S01_S03
                                </td>
                                <td id="S02_S03">
                                    S02_S03
                                </td>
                                <td id="S03_S03">
                                    1
                                </td>
                           </tr>
                       </tbody>
                   </table>
                </div>
            </div>       
            
            

            
            <h5>Matriks Perbandingan Berpasangan Kriteria Serat</h5>
            <div class="panel panel-default">
                <div class="panel-body">
                    <form class="form-inline" action="/action_page.php">
                        <select name="" id="variabel" class="form-control">
                            <option value="1">S01 - Baik</option>
                            <option value="1">S01 - Cukup</option>
                            <option value="1">S01 - Kurang</option>
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
                            <option value="1">S01 - Baik</option>
                            <option value="1">S01 - Cukup</option>
                            <option value="1">S01 - Kurang</option>
                        </select>                        
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                    <table class="table table-hover table-bordered table-responsive table-nilai">
                       <thead>
                           <tr>
                               <th>Kode</th>
                               <th>S01</th>
                               <th>S02</th>
                               <th>S03</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                                <td class="bold">S01</td> 
                                <td id="S01_S01">
                                    1
                                </td>
                                <td id="S02_S01">
                                    S02_S01
                                </td>
                                <td id="S03_S01">
                                    S03_S01
                                </td>
                           </tr>
                           <tr>
                                <td class="bold">S02</td> 
                                <td id="S01_S02">
                                    S01_S02
                                </td>
                                <td id="S02_S02">
                                    1
                                </td>
                                <td id="S03_S02">
                                    S03_S02
                                </td>
                           </tr>
                           <tr>
                                <td class="bold">S03</td> 
                                <td id="S01_S03">
                                    S01_S03
                                </td>
                                <td id="S02_S03">
                                    S02_S03
                                </td>
                                <td id="S03_S03">
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