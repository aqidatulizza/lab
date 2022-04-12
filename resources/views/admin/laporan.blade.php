@extends('layouts.sidebar-admin')

@section('content')

  <main id="main">

    <!-- ======= Laporan Section ======= -->
    <h1 class="h3 mb-2 text-gray-800 mb-2"><i class="metismenu-icon fas fa-solid fa-file"></i>    Laporan</h1><br>
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="faq-list">
          <ul>
            

            <li data-aos="fade-up">
              <a data-bs-toggle="collapse" data-bs-target="#faq-list-1" class="collapsed">
                <div class="row">
                  <div class="col-md-9">
                    <h5><b>Laporan Barang Rusak</b></h5>
                  </div>
                  <div class="col-md-1 offset-md-2">
                    Solder:EK245
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <h6><img class="img-profile rounded-circle" style="height: 50px;" src="images/testimonials/testimonials-1.jpg">  Sandy</h6>
                  </div>
                </div>
                <div>
                  <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i>
                </div>
              </a>
              <div id="faq-list-1" class="collapse-show" data-bs-parent=".faq-list">
                <div class="row">
                  <p><b>Keterangan</b></p>
                  <p>Kondisi: Baik</p>
                </div>
                <div class="row">
                  <div class="col-md-9">
                    <p>
                      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur iure, nam quos blanditiis optio, voluptatem vel magni libero accusamus nostrum temporibus neque qui voluptates. Rerum quo aspernatur dignissimos rem inventore!
                    </p>
                  </div>
                  <div class="col-md-2 offset-md-1 position-absolute top-60 end-0">
                    <button type="button" class="btn btn-success" style="background-color:#04844B;font-size: 18px; border-radius:10px;"data-toggle="modal" data-target=".bd-edit-modal-lg"><i class="fas fa-check-circle fa-lg"></i>   Tinjau</button>
                  </div>
                </div>
              </div>
              
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">
                <div class="row">
                  <div class="col-md-9">
                    <h5><b>Laporan Barang Hilang</b></h5>
                  </div>
                  <div class="col-md-1 offset-md-2">
                    Solder:EK245
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <h6><img class="img-profile rounded-circle" style="height: 50px;" src="images/testimonials/testimonials-1.jpg">  Sandy</h6>
                  </div>
                </div>
                <div>
                  <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i>
                </div>
              </a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <div class="row">
                  <p><b>Keterangan</b></p>
                  <p>Kondisi: Baik</p>
                </div>
                <div class="row">
                  <div class="col-md-9">
                    <p>
                      Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tenetur iure, nam quos blanditiis optio, voluptatem vel magni libero accusamus nostrum temporibus neque qui voluptates. Rerum quo aspernatur dignissimos rem inventore!
                    </p>
                  </div>
                  <div class="col-md-2 offset-md-1 position-absolute top-60 end-0">
                    <button type="button" class="btn btn-success" style="background-color:#04844B;font-size: 18px; border-radius:10px;"data-toggle="modal" data-target=".bd-edit-modal-lg"><i class="fas fa-check-circle fa-lg"></i>   Tinjau</button>
                  </div>
                </div>
              </div>
              
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Laporan Section -->

  </main><!-- End #main -->

  @endsection

  <!-- Large modal Edit-->

<div class="modal fade bd-edit-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
      <div class="modal-content">
          <div class="modal-header" style="background-color: rgb(234, 250, 245)">
              <h5 class="modal-title" id="exampleModalLongTitle"><i class='fas fa-solid fa-file'></i> <b>Laporan</b></h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body"style="background-color: rgb(234, 250, 245)">
              <form style="background-color: #fff; border-radius:10px; margin-left:15px; margin-right:15px;">
                  <div class="form-group row"></div>
                  <div class="form-group row">
                      <label for="inputPassword3" class="col-form-label">Kondisi</label><br>
                      <div class="dropdown">
                          <button class="btn btn-lg dropdown-toggle" type="button" style="border: 2px solid grey;
                          border-radius: 5px;" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                              Pilih                                                                                                                                                       &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Baik</a></li>
                            <li><a class="dropdown-item" href="#">Rusak</a></li>
                          </ul>
                      </div>    
                  </div>
                  <div class="form-group row">
                      <label for="inputPassword3" class="col-form-label">Keterangan</label><br>
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
                  <div class="form-grup row">
                    <div class="mb-3">
                      <label for="exampleFormControlTextarea1" class="form-label">Tambahan</label>
                      <textarea class="form-control" id="exampleFormControlTextarea1" style="border: 2px solid grey; border-radius: 5px;" rows="4"></textarea>
                    </div>
                  </div>
                  <div class="form-group row"></div><div class="modal-footer">
              <button type="button" class="btn btn-secondary">Batal</button>   
              <button type="button" class="btn btn-danger" data-dismiss="modal">Lapor</button>
          </div>
              </form>
          </div>
          
      </div>
  </div>
</div>

