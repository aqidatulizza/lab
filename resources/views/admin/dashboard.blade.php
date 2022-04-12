@extends('layouts.sidebar-admin')

@section('content')

<main id="main">

    <!-- ======= Dashboard Section ======= -->
    <h1 class="h3 mb-2 text-gray-800 mb-2"><i class='bx bxs-dashboard'></i>   Dashboard</h1><br>
    <section class="laporan">
        <div class="container">
            <div class="row">
                <!-- Card -->
                <div class="col-md-4 ">
                    <div class="card shadow card-design">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-auto">
                                    <i class="metismenu-icon fas fa-solid fa-briefcase fa-3x" style="color: white; margin-right:0px;"></i>
                                </div>
                                <div class="col-auto">
                                    <div class="text-lg mb-1 text-gray-500" style="margin-left: 10px">Inventaris
                                    </div>
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                            <div class="mb-0 mr-1"><h3><b>300</b></h3></div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                  <div class="card shadow card-design">
                      <div class="card-body">
                          <div class="row align-items-center">
                              <div class="col-auto">
                                  <i class='bx bx-log-out' style="color: white; font-size:46px; margin-right:0px;"></i>
                              </div>
                              <div class="col-auto">
                                  <div class="text-lg mb-1 text-gray-500" style="margin-left: 10px">Dipinjam
                                  </div>
                                  <div class="row align-items-center">
                                      <div class="col-auto">
                                          <div class="mb-0 mr-1"><h3><b>300</b></h3></div>
                                      </div>
                                  </div>
                              </div>
                              
                          </div>
                      </div>
                  </div>
              </div>  
              <div class="col-md-4">
                <div class="card shadow card-design">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <i class='bx bx-log-in'style="color: white; font-size:46px; margin-right:0px;"></i>
                            </div>
                            <div class="col-auto">
                                <div class="text-lg mb-1 text-gray-500" style="margin-left: 10px">Dikembalikan
                                </div>
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <div class="mb-0 mr-1"><h3><b>300</b></h3></div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>  
            </div>
        </div>
        
    
    </section>
    
  </main><!-- End #main -->

@endsection