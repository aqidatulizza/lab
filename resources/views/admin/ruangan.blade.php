@extends('layouts.sidebar-admin')

@section('content')

<h1 class="title h3 mb-2 text-gray-800 mb-2">Ruangan</h1>
    <button type="button" class="tambah-inventaris btn mr-2 mb-2 btn-primary" data-toggle="modal" data-target="#exampleModal"><i class="button-plus fas fa-solid fa-plus"></i></button>
                    <br>
                        <div class="card shadow mb-4 mt-4">
                           
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead class="head-table">
                                            <tr class="text-center">
                                                <th style="width:10%">No</th>
                                                <th>Nama Ruangan</th>
                                                <th style="width:30%">Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr class="text-center">
                                                <th>No</th>
                                                <th>Nama Ruangan</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <tr class="data-table">
                                                <td class="text-center">1</td>
                                                <td>System Architect</td>
                                                <td class="text-center">
                                                <button type="button" class="btn btn-success m-1" data-toggle="modal" data-target="#editRuangan"><i class="fas fa-solid fa-edit"></i></button>
                                                <button type="button" class="btn btn-danger"><i class="fas fa-solid fa-trash"></i></button>
                                                </td>
                                            </tr>
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> 

@endsection

<!-- Modal Tambah-->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: rgb(234, 250, 245)">
                <h5 class="modal-title" id="exampleModalLabel"><i class='bx bxs-book-bookmark' style="color: #167ee6"></i> Tambah Ruangan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="background-color: rgb(234, 250, 245)">
                <form style="background-color: #fff; border-radius:10px; margin-left:15px; margin-right:15px; padding-left:15px; padding-right:15px; padding-top:30px">
                    <div class="form-group row">
                        <label for="namaruangan" class="col-sm-2 col-form-label">Nama Ruangan</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="namaruangan">
                        </div>
                    </div>
            <div class="modal-footer" style="background: #fff">
                <button type="button" class="btn-modal btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="button" class="btn-modal btn btn-primary">Tambah</button>
            </div>
                </form>
            </div>
            
        </div>
    </div>
</div>

<!-- Modal Edit-->

<div class="modal fade" id="editRuangan" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: rgb(234, 250, 245)">
                <h5 class="modal-title" id="exampleModalLabel"><i class='bx bxs-book-bookmark' style="color: #167ee6"></i> Tambah Ruangan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="background-color: rgb(234, 250, 245)">
                <form style="background-color: #fff; border-radius:10px; margin-left:15px; margin-right:15px; padding-left:15px; padding-right:15px; padding-top:30px">
                    <div class="form-group row">
                        <label for="namaruangan" class="col-sm-2 col-form-label">Nama Ruangan</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="namaruangan">
                        </div>
                    </div>
            <div class="modal-footer" style="background: #fff">
                <button type="button" class="btn-modal btn btn-secondary" data-dismiss="modal">Batal</button>
                <button type="button" class="btn-modal btn btn-primary">Tambah</button>
            </div>
                </form>
            </div>
            
        </div>
    </div>
</div>