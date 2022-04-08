@extends('layouts.sidebar-admin')

@section('content')
<h1 class="h3 mb-2 text-gray-800 mb-2">Laporan</h1>              
    <div class="div1">
        <br>
        <div class="container" id="div2">
           
            <div class="row pt-3" id="ruanglab">
                <label for="ruangan">Ruang Lab.</label>
            </div>
            <div class="row">
                <select class="custom-select custom-select-sm" name="ruangan" id="ruangan">
                    <option selected>Pilih Ruang</option>
                    <option value="Lab RPL 1">Lab RPL 1</option>
                    <option value="Lab RPL 2">Lab RPL 2</option>
                </select>
            </div>
            <div class="row">
                <div class="col align-self-center" id="div3">
                    <div class="row">
                        <h6>Laporan Barang Rusak</h6>
                        <i class="fa-regular fa-bookmark" style="font-size: 22px;"></i>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col align-self-center" id="div4">
                    <div class="row">
                        <h6>Keyboard</h6>
                        <i class="fa-regular fa-bookmark" style="font-size: 22px;"></i>
                    </div>
                    <div class="row justify-content-start" id="div5">
                        <div class="col-3">
                            <div>Stok</div>
                            <div>Merk</div>
                            <div>Status</div>
                            <div>Status</div>
                        </div>
                        <div class="col-3">
                            <div>25</div>
                            <div>ajinomoto</div>
                            <div>Terpinjam</div>
                            <div>Status</div>
                        </div>
                    </div>
                    <div class="row" id="div6">
                        <button type="button">Pinjam</button>
                    </div>
                </div>
            </div>
            <br><br>
        </div>
    </div>
                            </div>
                        </div>
    

    
@endsection