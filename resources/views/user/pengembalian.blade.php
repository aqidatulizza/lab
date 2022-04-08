@extends('layouts.navbar')

@section('content')            
    <div class="div1">
        <br>
        <div class="container" id="div2">
            <div class="row" id="peminjaman">
            <div style=”text-align:justify;width:75%; padding:8px;”>
            <i class="fa-solid fa-suitcase" style="font-size: 25px; padding-right: 10px;"></i>Pengembalian</div>
                
                    
            </div>
            <div class="row pt-3 pb-2" id="ruanglab">
                <label for="ruangan">Ruang Lab.</label>
            </div>
            <div class="row">
                <select class="custom-select custom-select-sm" name="ruangan" id="ruangan">
                    <option selected>Pilih Ruang</option>
                    <option value="Lab RPL 1">Lab RPL 1</option>
                    <option value="Lab RPL 2">Lab RPL 2</option>
                </select>
            </div>

            <div class="tpeminjaman ">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Inventaris</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Merk</th>
                        <th scope="col" class="text-center">Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>1</td>
                        <td>Keyboard</td>
                        <td>28</td>
                        <td>Samsung</td>
                        <td class="text-center"><button type="button" class="b-pinjam btn btn-danger btn-sm">Kembalikan</button></td>
                        </tr>
                        <tr>
                        <td>2</td>
                        <td>Mouse</td>
                        <td>30</td>
                        <td>Robot</td>
                        <td class="text-center"><button type="button" class="b-pinjam btn btn-danger btn-sm">Kembalikan</button></td>
                        </tr>
                        <tr>
                        <td>3</td>
                        <td>Keyboard</td>
                        <td>28</td>
                        <td>Samsung</td>
                        <td class="text-center"><button type="button" class="b-pinjam btn btn-danger btn-sm">Kembalikan</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>

             
        </div>
    </div>

    

    

    
@endsection