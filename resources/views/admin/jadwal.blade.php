@extends('layouts.sidebar-admin')

@section('content')

<main id="main">
<style type="text/css">
    .btn-circle.btn-sm{
        width: 50px;
        height: 50px;
        padding: 7px 10px;
        border-radius: 25px;
        font-size: 24px;
        text-align: center;
    }
</style>
<h1 class="h3 mb-2 text-gray-800 mb-2"><i class='bx bxs-book-bookmark' ></i>  Jadwal</h1><br>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-11">        
            <h5>Lab</h5>
            <div class="dropdown">
                <button class="btn btn-lg dropdown-toggle" style="background-color:white; border: 2px solid grey;" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Pilih                                                                                                                                                      &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="#">Lab Rpl 1</a></li>
                  <li><a class="dropdown-item" href="#">Lab Rpl 2</a></li>
                  <li><a class="dropdown-item" href="#">Lab Rpl 3</a></li>
                </ul>
            </div>
        </div>
    </div><br>
    <div class="row">
        <div class="col-md-9">
            <div class="table-responsive">
                <table class="table table-bordered" id="" width="100%" cellspacing="0">
                    <thead class="head-table" style="background-color: #167ee6;">
                        <tr>
                            <th></th>
                            <th>Senin</th>
                            <th>Selasa</th>
                            <th>Rabu</th>
                            <th>Kamis</th>
                            <th>Jumat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="data-table" style="background-color: #fff">
                            <td class="table-primary">Jam ke-1</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="data-table" style="background-color: #fff">
                            <td class="table-primary">Jam ke-2</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="data-table" style="background-color: #fff">
                            <td class="table-primary">Jam ke-3</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="data-table" style="background-color: #fff">
                            <td class="table-primary">Jam ke-4</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="data-table" style="background-color: #fff">
                            <td class="table-primary">Jam ke-5</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="data-table" style="background-color: #fff">
                            <td class="table-primary">Jam ke-6</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="data-table" style="background-color: #fff">
                            <td class="table-primary">Jam ke-7</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="data-table" style="background-color: #fff">
                            <td class="table-primary">Jam ke-8</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="data-table" style="background-color: #fff">
                            <td class="table-primary">Jam ke-9</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr class="data-table" style="background-color: #fff">
                            <td class="table-primary">Jam ke-10</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>                     
        </div>
        <div class="col-md-1">
            <button type="button" class="btn btn-success btn-circle btn-sm" style="" data-toggle="modal" data-target=".bd-edit-modal-lg"><i class='bx bxs-edit-alt' style="font-size: 24px"></i></button><br><br>
            <button type="button" class="btn btn-success btn-circle btn-sm" style="" data-toggle="modal" data-target=".bd-edit-modal-lg"><i class='bx bxs-door-open bx-flip-horizontal' style="font-size: 24px"></i></button>
        </div>
    </div>
</div>        

</main><!-- End #main -->

@endsection

<!-- Large modal Edit-->

<div class="modal fade bd-edit-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header" style="background-color: rgb(234, 250, 245)">
                <h5 class="modal-title" id="exampleModalLongTitle"><i class='bx bxs-book-bookmark' style="color: #167ee6"></i> <b>Edit Jadwal</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="background-color: rgb(234, 250, 245)">
                <form style="background-color: #fff; border-radius:10px; margin-left:15px; margin-right:15px;">
                    <div class="form-group row"></div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-form-label">Hari</label><br>
                        <div class="dropdown">
                            <button class="btn btn-lg dropdown-toggle" type="button" style="border: 2px solid grey;
                            border-radius: 5px;" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Pilih                                                                                                                                                       &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                              <li><a class="dropdown-item" href="#">Senin</a></li>
                              <li><a class="dropdown-item" href="#">Selasa</a></li>
                              <li><a class="dropdown-item" href="#">Rabu</a></li>
                              <li><a class="dropdown-item" href="#">Kamis</a></li>
                              <li><a class="dropdown-item" href="#">Jumat</a></li>
                            </ul>
                        </div>    
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-form-label">Kelas</label><br>
                        <div class="dropdown">
                            <button class="btn btn-lg dropdown-toggle" type="button" style="border: 2px solid grey;
                            border-radius: 5px;" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Pilih                                                                                                                                                       &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                              <li><a class="dropdown-item" href="#">X</a></li>
                              <li><a class="dropdown-item" href="#">XI</a></li>
                              <li><a class="dropdown-item" href="#">XII</a></li>
                              <li><a class="dropdown-item" href="#">XIII</a></li>
                            </ul>
                        </div>    
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-form-label">Jam</label><br>
                        <div class="dropdown">
                            <button class="btn btn-lg dropdown-toggle" type="button" style="border: 2px solid grey;
                            border-radius: 5px; " id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                Pilih                                                                                                                                                       &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                              <li><a class="dropdown-item" href="#">Jam 1</a></li>
                              <li><a class="dropdown-item" href="#">Jam 2</a></li>
                              <li><a class="dropdown-item" href="#">Jam 3</a></li>
                              <li><a class="dropdown-item" href="#">Jam 4</a></li>
                              <li><a class="dropdown-item" href="#">Jam 5</a></li>
                              <li><a class="dropdown-item" href="#">Jam 6</a></li>
                              <li><a class="dropdown-item" href="#">Jam 7</a></li>
                              <li><a class="dropdown-item" href="#">Jam 8</a></li>
                              <li><a class="dropdown-item" href="#">Jam 9</a></li>
                              <li><a class="dropdown-item" href="#">Jam 10</a></li>
                            </ul>
                        </div>    
                    </div>
                    <div class="form-group row"></div><div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Hapus</button>
                <button type="button" class="btn btn-success">Simpan</button>
            </div>
                </form>
            </div>
            
        </div>
    </div>
  </div>