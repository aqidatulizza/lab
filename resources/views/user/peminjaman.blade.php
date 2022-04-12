@extends('layouts.navbar')

@section('content')            
    <div class="div1">
        <br>
        <div class="container" id="div2">
            <div class="row" id="peminjaman">
            <div style=”text-align:justify;width:75%; padding:8px;”>
            <i class="fa-solid fa-suitcase" style="font-size: 25px; padding-right: 10px;"></i>Peminjaman</div>
                
                    
            </div>
            
            <div class="row pt-3 pb-2" id="ruanglab">
                <label for="ruangan">Ruang Lab.</label>
            </div>
            <div class="row">
                <div class="dropdown">
                    <button class="btn btn-sm dropdown-toggle" style="background-color:white; border: 2px solid grey;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        Pilih Ruangan                                                                                                                                                      &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                    </button>
                    <ul class="dropdown-menu" style="font-size:14px" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">Lab RPL 1</a></li>
                    <li><a class="dropdown-item" href="#">Lab RPL 2</a></li>
                    <li><a class="dropdown-item" href="#">Lab RPL 3</a></li>
                    </ul>
                </div>
                <!--<select class="custom-select custom-select-sm" name="ruangan" id="ruangan">
                    <option selected>Pilih Ruang</option>
                    <option value="Lab RPL 1">Lab RPL 1</option>
                    <option value="Lab RPL 2">Lab RPL 2</option>
                </select>-->
            </div>

            <div class="tpeminjaman ">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Inventaris</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Merk</th>
                        <th scope="col">Status</th>
                        <th scope="col" class="text-center">Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>1</td>
                        <td>Keyboard</td>
                        <td>28</td>
                        <td>Samsung</td>
                        <td>Tersedia</td>
                        <td class="text-center"><button type="button" class="b-pinjam btn btn-success btn-sm">Pinjam</button></td>
                        </tr>
                        <tr>
                        <td>2</td>
                        <td>Mouse</td>
                        <td>30</td>
                        <td>Robot</td>
                        <td>Tersedia</td>
                        <td class="text-center"><button type="button" class="b-pinjam btn btn-success btn-sm">Pinjam</button></td>
                        </tr>
                        <tr>
                        <td>3</td>
                        <td>Keyboard</td>
                        <td>28</td>
                        <td>Samsung</td>
                        <td>Tersedia</td>
                        <td class="text-center"><button type="button" class="b-pinjam btn btn-success btn-sm">Pinjam</button></td>
                        </tr>
                    </tbody>
                </table>

            </div>

             
        </div>
    </div>

    

    

    
@endsection