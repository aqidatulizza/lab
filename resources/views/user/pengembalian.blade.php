@extends('layouts.navbar')

@section('content')            
    <div class="div1">
        <br>
        <div class="container" id="div2">
            <div class="row" id="peminjaman">
            <div style=”text-align:justify;width:75%; padding:8px;”>
            <i class="fa-solid fa-suitcase" style="font-size: 25px; padding-right: 10px; color: #167ee6;"></i>Pengembalian</div>
                
                    
            </div>

            <div class="tpeminjaman ">
                <table class="table table-striped">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Barang</th>
                        <th scope="col">Ruangan</th>
                        <th scope="col">Jumlah</th>
                        <th scope="col">Merk</th>
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
                        <td class="text-center"><button type="button" class="b-pinjam btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#kembalikan">Kembalikan</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>

             
        </div>
    </div>
  
@endsection

<!-- Modal Pengembalian-->
<div class="modal fade" id="kembalikan" tabindex="-1" aria-labelledby="kembalikanLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: rgb(234, 250, 245)">
        <h5 class="modal-title" id="exampleModalLabel"><i class='bx bxs-book-bookmark' style="color: #167ee6"></i> Pengembalian</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="background-color: rgb(234, 250, 245)">
            <form style="background-color: #fff; font-size: 14px; border-radius:10px; margin-left:15px; margin-right:15px; padding-left:15px; padding-right:15px; padding-top:30px">
                    
                    <div class="form-group row">
                        <label for="namaruangan" class="col-sm-4 col-form-label">No Peminjaman </label>
                        <div class="col-sm-8">
                        <input type="text" readonly class="form-control-plaintext pl-1" id="staticEmail" value="123">
                        </div>
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
                        <label for="namaruangan" class="col-sm-4 col-form-label">Jumlah Pinjam </label>
                        <div class="col-sm-8">
                        <input type="text" readonly class="form-control-plaintext pl-1" id="staticEmail" value="28">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="namaruangan" class="col-sm-4 col-form-label">Jumlah Pengembalian</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" id="namaruangan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="startDate" class="col-sm-4 col-form-label">Tanggal Pengembalian</label>
                        <div class="col-sm-8">
                        <input id="startDate" class="form-control" type="date" />
                        </div>
                    </div>

                    <input type="hidden" readonly class="form-control-plaintext pl-1" id="status" value="Sudah Dikembalikan">

                    <input type="hidden" readonly class="form-control-plaintext pl-1" id="status" value="Sudah Dikembalikan (Kurang)">
                    
                    <div class="modal-footer" style="background: #fff">
                        <button type="button" class="btn-modal btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
                        <button type="button" class="btn-modal btn btn-danger btn-sm">Kembalikan</button>
                    </div>
            </form>
      </div>
      
    </div>
  </div>
</div>