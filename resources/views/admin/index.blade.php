@extends('layouts.sidebar-admin')

@section('content')

  <main id="main">

    <!-- ======= Laporan Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1"><h5>Laporan Barang Rusak<i class='bx bxs-bookmarks'></i></h5></a>
                <h6><img class="img-profile rounded-circle" style="height: 50px;" src="images/testimonials/testimonials-1.jpg">  Sandy</h6> <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">               
                <br><h6>Keterangan</h6>        
                <p>Kondisi: Baik</p> 
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Architecto, deserunt laborum facilis fugit quidem beatae assumenda illum impedit id natus. Error vel obcaecati fugiat praesentium earum. Quo animi voluptatem magni.</p>     
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End F.A.Q Section -->

  </main><!-- End #main -->

  @endsection

