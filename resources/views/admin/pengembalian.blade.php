@extends('layouts.sidebar-admin')

@section('content')

<h1 class="title h3 mb-1 text-gray-800 mb-1">Pengembalian</h1>
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
                                                <th>Tanggal Pengembalian</th>
                                                <th>Jumlah Pengembalian</th>
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
                                                <th>Tanggal Pengembalian</th>
                                                <th>Jumlah Pengembalian</th>
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
                                                <td>2/1/2021</td>
                                                <td>8</td>
                                                <td>Sudah Dikembalikan (Kurang)</td>
                                                <td class="text-center">
                                                    <button type="button" class="btn btn-danger"><i class="fas fa-solid fa-trash"></i></button>
                                                </td>
                                            </tr>
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> 

@endsection

