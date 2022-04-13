@extends('layouts.navbar')

@section('content')            
    <div class="div1">
        <br>
        <div class="container" id="div2">
            <div class="row" id="peminjaman">
            <div style=”text-align:justify;width:75%; padding:8px;”>
            <i class="fa-solid fa-suitcase" style="font-size: 25px; padding-right: 10px; color: #167ee6;"></i>Peminjaman</div>
                
                    
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
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Ruangan</th>
                        <th scope="col">Stok</th>
                        <th scope="col">Merk</th>
                        <th scope="col">Status</th>
                        <th scope="col" class="text-center">Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td>1</td>
                        <td>Keyboard</td>
                        <td>Lab RPL 1</td>
                        <td>28</td>
                        <td>Samsung</td>
                        <td>Tersedia</td>
                        <td class="text-center"><button type="button" class="b-pinjam btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal">Pinjam</button></td>
                        </tr>
                        
                    </tbody>
                </table>

            </div>

             
        </div>
        <div class="laporan">
        <button type="button" class="button-laporan btn btn-danger" data-bs-toggle="modal" data-bs-target="#laporan"><i class="button-plus fas fa-solid fa-exclamation fa-lg m-2"></i></button>
        </div>
        
    </div>
</div>
 
@endsection


<!-- Modal Peminjaman-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: rgb(234, 250, 245)">
        <h5 class="modal-title" id="exampleModalLabel"><i class='bx bxs-book-bookmark' style="color: #167ee6"></i> Peminjaman</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="background-color: rgb(234, 250, 245)">
            <form style="background-color: #fff; font-size: 14px; border-radius:10px; margin-left:15px; margin-right:15px; padding-left:15px; padding-right:15px; padding-top:30px">
                    
                    <div class="form-group row">
                        <label for="status" class="col-form-label text-right p-0" style="color: green;">Tersedia </label>
                    </div>

                    <div class="form-group row">
                        <label for="namaruangan" class="col-sm-4 col-form-label">Ruangan </label>
                        <div class="col-sm-8">
                        <input type="text" readonly class="form-control-plaintext pl-1" id="staticEmail" value="Lab RPL">
                        </div>
                    </div>

                    <input type="hidden" readonly class="form-control-plaintext pl-1" id="id_barang" value="1">

                    <div class="form-group row">
                        <label for="namaruangan" class="col-sm-4 col-form-label">Nama Barang </label>
                        <div class="col-sm-8">
                        <input type="text" readonly class="form-control-plaintext pl-1" id="staticEmail" value="Keyboard">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="namaruangan" class="col-sm-4 col-form-label">Merk </label>
                        <div class="col-sm-8">
                        <input type="text" readonly class="form-control-plaintext pl-1" id="staticEmail" value="Samsung">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="namaruangan" class="col-sm-4 col-form-label">Stok </label>
                        <div class="col-sm-8">
                        <input type="text" readonly class="form-control-plaintext pl-1" id="staticEmail" value="28">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="namaruangan" class="col-sm-4 col-form-label">Jumlah</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" id="namaruangan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="startDate" class="col-sm-4 col-form-label">Tanggal Peminjaman</label>
                        <div class="col-sm-8">
                        <input id="startDate" class="form-control" type="date" />
                        </div>
                    </div>
                    
                    <input type="hidden" readonly class="form-control-plaintext pl-1" id="status" value="Dipinjam">
                    
                    <div class="modal-footer" style="background: #fff">
                        <button type="button" class="btn-modal btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                        <button type="button" class="btn-modal btn btn-success btn-sm">Pinjam</button>
                    </div>
            </form>
      </div>
      
    </div>
  </div>
</div>

<!-- Modal Laporan-->
<div class="modal fade" id="laporan" tabindex="-1" aria-labelledby="laporanLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="h-laporan modal-header" style="background-color: #FDD2BF">
        <h5 class="modal-title" id="exampleModalLabel"><i class='bx bxs-book-bookmark' style="color: #B61919"></i> Laporan</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="background-color: #FDD2BF">
            <form style="background-color: #fff; font-size: 14px; border-radius:10px; margin-left:15px; margin-right:15px; padding-left:15px; padding-right:15px; padding-top:30px">
                    
                    <div class="form-group row">
                        <label for="namaruangan" class="col-sm-4 col-form-label">Ruangan </label>
                        <div class="col-sm-8">
                        <select class="input-select custom-select mr-sm-2" id="barang">
                                <option selected>Pilih Ruangan</option>
                                <option value="1">RPL 1</option>
                                <option value="2">RPL 2</option>
                                <option value="3">RPL 3</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="namaruangan" class="col-sm-4 col-form-label">Nama Barang </label>
                        <div class="col-sm-8">
                        <select class="input-select custom-select mr-sm-2" id="barang">
                                <option selected>Pilih Barang</option>
                                <option value="1">Keyboard</option>
                                <option value="2">Keyboard 2</option>
                                <option value="3">Keyboard 3</option>
                        </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="namaruangan" class="col-sm-4 col-form-label">Jumlah</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" id="namaruangan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="namaruangan" class="col-sm-4 col-form-label">Kondisi </label>
                        <div class="col-sm-8">
                        <select class="input-select custom-select mr-sm-2" id="barang">
                                <option selected>Pilih</option>
                                <option value="1">Baik</option>
                                <option value="2">Rusak</option>
                                <option value="3">Hilang </option>
                        </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="keterangan" class="col-form-label">Keterangan</label>
                        <div class="col-sm 12">
                        <textarea class="form-control pl-1 pr-1" id="keterangan" rows="3"></textarea>
                        </div>
                    </div>

                    <div class="modal-footer" style="background: #fff">
                        <button type="button" class="btn-modal btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                        <button type="button" class="btn-modal btn btn-danger btn-sm">Lapor</button>
                    </div>
            </form>
      </div>
      
    </div>
  </div>
</div>