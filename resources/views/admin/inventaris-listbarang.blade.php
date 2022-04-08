@extends('layouts.sidebar-admin')

@section('content')

<h1 class="h3 mb-2 text-gray-800 mb-2">Inventaris</h1>
<button type="button" class="tambah-inventaris btn mr-2 mb-2 btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Tambah</button>
                    <br>
                        <div class="card shadow mb-4 mt-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">List Barang</h6>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead class="head-table">
                                            <tr class="text-center">
                                                <th>ID Barang</th>
                                                <th>Nama Barang</th>
                                                <th>Merk</th>
                                                <th>Tahun</th>
                                                <th>Jumlah</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr class="text-center">
                                                <th>ID Barang</th>
                                                <th>Nama Barang</th>
                                                <th>Merk</th>
                                                <th>Tahun</th>
                                                <th>Jumlah</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr class="data-table">
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                
                                                <td class="text-center"><button type="button" class="btn btn-success" data-toggle="modal" data-target=".bd-edit-modal-lg">Edit</button>
                                                <button type="button" class="btn btn-danger">Hapus</button>
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
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group row">
                        <label for="idbarang" class="col-sm-2 col-form-label">ID Barang</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="idbarang">
                        </div>
                    </div>
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
                    
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary">Tambah</button>
            </div>
        </div>
    </div>
</div>

<!-- Large modal Edit-->

<div class="modal fade bd-edit-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Edit Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group row">
                        <label for="idbarang" class="col-sm-2 col-form-label">ID Barang</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="idbarang" readonly>
                        </div>
                    </div>
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
                    </div><div class="form-group row">
                        <label for="jumlah" class="col-sm-2 col-form-label">Jumlah</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="jumlah">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="stoksekarang" class="col-sm-2 col-form-label">Stok Sekarang</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="stoksekarang">
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
                    
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="button" class="btn btn-primary">Edit</button>
            </div>
        </div>
    </div>
</div>