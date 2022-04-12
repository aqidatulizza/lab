@extends('layouts.sidebar-admin')

@section('content')

<h1 class="title h3 mb-2 text-gray-800 mb-2">Inventaris</h1>
<button type="button" class="tambah-inventaris btn mr-2 mb-2 btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg"><i class="button-plus fas fa-solid fa-plus"></i></button>
                    <br>
                        <div class="card shadow mb-4 mt-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Barang</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead class="head-table">
                                            <tr class="text-center">
                                                <th>No</th>
                                                <th>ID Ruangan</th>
                                                <th>Nama Barang</th>
                                                <th>Merk</th>
                                                <th>Keterangan</th>
                                                <th>Tahun</th>
                                                <th>Harga</th>
                                                <th>Keadaan</th>
                                                <th>Jumlah</th>
                                                <th>Stok Sekarang</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr class="text-center">
                                                <th>No</th>
                                                <th>ID Ruangan</th>
                                                <th>Nama Barang</th>
                                                <th>Merk</th>
                                                <th>Keterangan</th>
                                                <th>Tahun</th>
                                                <th>Harga</th>
                                                <th>Keadaan</th>
                                                <th>Jumlah</th>
                                                <th>Stok Sekarang</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr class="data-table">
                                                <td class="text-center">1</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td>61</td>
                                                <td>Edinburgh</td>
                                                <td class="text-center"><button type="button" class="btn btn-success m-1" data-toggle="modal" data-target=".bd-edit-modal-lg"><i class="fas fa-solid fa-edit"></i></button>
                                                <button type="button" class="btn btn-danger"><i class="fas fa-solid fa-trash"></i></button>
                                                </td>
                                            </tr>
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> 

@endsection

<!-- Large modal Tambah-->

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: rgb(234, 250, 245)">
                <h5 class="modal-title" id="exampleModalLongTitle"><i class='bx bxs-book-bookmark' style="color: #167ee6"></i> Tambah Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="background-color: rgb(234, 250, 245)">
                <form style="background-color: #fff; border-radius:10px; margin-left:15px; margin-right:15px; padding-left:15px; padding-right:15px; padding-top:30px">
                    
                    <div class="form-group row">
                        <label for="idruangan" class="col-sm-2 col-form-label">ID Ruangan</label>
                        <div class="col-sm-10">
                            <select class="input-select custom-select mr-sm-2" id="keterangan">
                                <option selected>Pilih</option>
                                <option value="1">RPL</option>
                                <option value="2">TKJ</option>
                                <option value="3">MM</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="namabarang" class="col-sm-2 col-form-label">Nama Barang</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="namabarang">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="merk" class="col-sm-2 col-form-label">Merk</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="merk">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tahun" class="col-sm-2 col-form-label">Tahun</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="tahun">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="jumlah">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="stoksekarang" class="col-sm-2 col-form-label">Stok Sekarang</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="jumlah">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="harga">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="keadaan" class="col-sm-2 col-form-label">Keadaan</label>
                        <div class="col-sm-10">
                            <select class="input-select custom-select mr-sm-2" id="keadaan">
                                <option selected>Pilih</option>
                                <option value="1">Baik</option>
                                <option value="2">Kurang Baik</option>
                                <option value="3">Rusak</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="col-sm-10">
                            <select class="input-select custom-select mr-sm-2" id="keterangan">
                                <option selected>Pilih</option>
                                <option value="1">Tersedia</option>
                                <option value="2">Sedang Digunakan</option>
                                <option value="3">Tidak Tersedia</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer" style="background: #fff">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary">Tambah</button>
            </div>
                </form>
            </div>
            
        </div>
    </div>
</div>

<!-- Large modal Edit-->

<div class="modal fade bd-edit-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
    <div class="modal-content">
            <div class="modal-header" style="background-color: rgb(234, 250, 245)">
                <h5 class="modal-title" id="exampleModalLongTitle"><i class='bx bxs-book-bookmark' style="color: #167ee6"></i> Edit Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="background-color: rgb(234, 250, 245)">
                <form style="background-color: #fff; border-radius:10px; margin-left:15px; margin-right:15px; padding-left:15px; padding-right:15px; padding-top:30px">
                    
                    <div class="form-group row">
                        <label for="idruangan" class="col-sm-2 col-form-label">ID Ruangan</label>
                        <div class="col-sm-10">
                            <select class="input-select custom-select mr-sm-2" id="keterangan">
                                <option selected>Pilih</option>
                                <option value="1">RPL</option>
                                <option value="2">TKJ</option>
                                <option value="3">MM</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="namabarang" class="col-sm-2 col-form-label">Nama Barang</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="namabarang">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="merk" class="col-sm-2 col-form-label">Merk</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="merk">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tahun" class="col-sm-2 col-form-label">Tahun</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="tahun">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="jumlah">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="stoksekarang" class="col-sm-2 col-form-label">Stok Sekarang</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="jumlah">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="harga">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="keadaan" class="col-sm-2 col-form-label">Keadaan</label>
                        <div class="col-sm-10">
                            <select class="input-select custom-select mr-sm-2" id="keadaan">
                                <option selected>Pilih</option>
                                <option value="1">Baik</option>
                                <option value="2">Kurang Baik</option>
                                <option value="3">Rusak</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="col-sm-10">
                            <select class="input-select custom-select mr-sm-2" id="keterangan">
                                <option selected>Pilih</option>
                                <option value="1">Tersedia</option>
                                <option value="2">Sedang Digunakan</option>
                                <option value="3">Tidak Tersedia</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer" style="background: #fff">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary">Tambah</button>
            </div>
                </form>
            </div>
            
        </div>
    </div>
</div>