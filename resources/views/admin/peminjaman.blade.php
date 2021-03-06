@extends('layouts.sidebar-admin')

@section('content')

<h1 class="title h3 mb-1 text-gray-800">Peminjaman</h1>
        <br>
                        <div class="card shadow mb-4 mt-4">
                           
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead class="head-table">
                                            <tr class="text-center">
                                                <th style="width:5%">No</th>
                                                <th>ID User</th>
                                                <th>ID Barang</th>
                                                <th>Nama Barang</th>
                                                <th>Ruangan</th>
                                                <th>Merk</th>
                                                <th>Stok</th>
                                                <th>Tanggal Peminjaman</th>
                                                <th>Jumlah Peminjaman</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr class="text-center">
                                                <th>No</th>
                                                <th>ID User</th>
                                                <th>ID Barang</th>
                                                <th>Nama Barang</th>
                                                <th>Ruangan</th>
                                                <th>Merk</th>
                                                <th>Stok</th>
                                                <th>Tanggal Peminjaman</th>
                                                <th>Jumlah Peminjaman</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr class="data-table">
                                                <td class="text-center">1</td>
                                                <td>2</td>
                                                <td>3</td>
                                                <td>Keyboard</td>
                                                <td>Lab RPL 1</td>
                                                <td>Samsung</td>
                                                <td>28</td>
                                                <td>2/1/2021</td>
                                                <td>10</td>
                                                <td>Dipinjam</td>
                                                <td class="text-center">
                                                <button type="button" class="b-pinjam btn btn-success btn-sm mb-1" data-bs-toggle="modal" data-bs-target="#kembalikan">Kembalikan</button>
                                                    <button type="button" class="btn btn-danger"><i class="fas fa-solid fa-trash"></i></button>
                                                </td>
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
                   