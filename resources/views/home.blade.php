@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-md-5">
            <h3>Tabel Skala Penilaian Perbandingan Berpasangan</h3>
            <span class="hrdivider"></span>
            <div style="overflow-y:auto">
                <table class="table table-hover table-bordered table-responsive table-striped table-information">
                    <thead>
                        <tr>
                            <th>Intensitas Kepentingan</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td>Kedua elemen sama pentingnya</td>
                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td>Elemen yang satu sedikit lebih penting daripada yang lainnya</td>
                        </tr>
                        <tr>
                            <td class="text-center">5</td>
                            <td>Elemen yang satu lebih penting daripada yang lainnya</td>
                        </tr>
                        <tr>
                            <td class="text-center">7</td>
                            <td>Satu elemen yang jelas lebih mutlak penting daripada elemen lainnya</td>
                        </tr>
                        <tr>
                            <td class="text-center">9</td>
                            <td>Satu elemen mutlak penting daripada elemen lainnya</td>
                        </tr>
                        <tr>
                            <td class="text-center">2, 4, 6, 8</td>
                            <td>Nilai-nilai antara dua nilai pertimbangan-pertimbangan yang berdekatan</td>
                        </tr>
                    </tbody>
                </table>            
            </div>
        </div>
        <div class="col-sm-12 col-md-7">
            <h3>Tabel Skala Penilaian Perbandingan Berpasangan</h3>
            <span class="hrdivider"></span>
            <div style="overflow-y: auto">
                <table class="table table-hover table-bordered table-responsive table-striped table-information">
                    <thead>
                        <tr>
                            <th>Ukuran Matriks (n)</th>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                            <th>6</th>
                            <th>7</th>
                            <th>8</th>
                            <th>9</th>
                            <th>10</th>
                            <th>11</th>
                            <th>12</th>
                            <th>13</th>
                            <th>14</th>
                            <th>15</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="font-weight: bold">Nilai RI</td>
                            <td>0.00</td>
                            <td>0.00</td>
                            <td>0.58</td>
                            <td>0.90</td>
                            <td>1.12</td>
                            <td>1.24</td>
                            <td>1.32</td>
                            <td>1.41</td>
                            <td>1.45</td>
                            <td>1.49</td>
                            <td>1.51</td>
                            <td>1.48</td>
                            <td>1.56</td>
                            <td>1.57</td>
                            <td>1.59</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                    dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat
                    non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
