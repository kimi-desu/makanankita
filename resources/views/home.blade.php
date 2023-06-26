@extends('layouts.main')
@section('container')
<main>

    <section class="py-5 text-center container">
      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="fw-light">Makanan Kita</h1>
          <p class="lead text-muted">ini adalah situs tentang makanan yang berasal dari minangkabau, ini adalah projek untuk pkl dari kimi</p>
          <p>
            <a href="/dryfood" class="btn btn-primary my-2">Makanan kering</a>
            <a href="/wetfood" class="btn btn-secondary my-2">Makanan basah</a>
          </p>
        </div>
      </div>
    </section>

    <div class="album py-5 bg-light">
      <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <div class="col">
            <div class="card shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Rendang</title>
                    <rect width="100%" height="100%" fill="url(#image)" />
                    <image xlink:href="img/rendang.jpeg" width="100%" height="100%" preserveAspectRatio="xMidYMid slice" id="image" />
                  </svg>


              <div class="card-body">
                <p class="card-text">Rendang : Hidangan ikonik Minangkabau, daging sapi dimasak lama dengan rempah-rempah kaya dan santan, lezat dan beraroma.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href="/rendang">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    </a>
                  </div>
                  <small class="text-muted">5 menit</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>gulai</title>
                    <rect width="100%" height="100%" fill="url(#image)" />
                    <image xlink:href="img/gulaiayam.jpeg" width="100%" height="100%" preserveAspectRatio="xMidYMid slice" id="image" />
                  </svg>

              <div class="card-body">
                <p class="card-text">gulai ayam : Hidangan khas, daging dimasak dengan rempah-rempah, santan, dan kuah kental, lezat dan beraroma.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href="/gulai">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    </a>
                  </div>
                  <small class="text-muted">5 menit</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Sate padang</title>
                    <rect width="100%" height="100%" fill="url(#image)" />
                    <image xlink:href="img/satepadang.jpeg" width="100%" height="100%" preserveAspectRatio="xMidYMid slice" id="image" />
                  </svg>

              <div class="card-body">
                <p class="card-text">Sate padang : Sate sapi panggang, kuah kacang kental, irisan bawang merah, serundeng, lezat dan gurih.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href="/satepadang">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    </a>
                  </div>
                  <small class="text-muted">5 menit</small>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>nasi padang</title>
                    <rect width="100%" height="100%" fill="url(#image)" />
                    <image xlink:href="img/nasipadang.jpeg" width="100%" height="100%" preserveAspectRatio="xMidYMid slice" id="image" />
                  </svg>

              <div class="card-body">
                <p class="card-text">Nasi padang : nasi putih, lauk-pauk khas Minang seperti rendang, gulai, sambal, hidangan beragam dan lezat.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href="/nasipadang">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    </a>
                  </div>
                  <small class="text-muted">5 menit</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>sambal lado</title>
                    <rect width="100%" height="100%" fill="url(#image)" />
                    <image xlink:href="img/samballado.jpeg" width="100%" height="100%" preserveAspectRatio="xMidYMid slice" id="image" />
                  </svg>

              <div class="card-body">
                <p class="card-text">Sambal lado : sambal pedas khas Minang, terbuat dari cabai merah, bawang, tomat, pedas dan lezat.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href="/samballado">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    </a>
                  </div>
                  <small class="text-muted">5 menit</small>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card shadow-sm">
                <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>gulai tambusu</title>
                    <rect width="100%" height="100%" fill="url(#image)" />
                    <image xlink:href="img/tambusu.jpeg" width="100%" height="100%" preserveAspectRatio="xMidYMid slice" id="image" />
                  </svg>

              <div class="card-body">
                <p class="card-text">Gulai tambusu : Usus sapi isi telur dan terigu, kuah gulai rempah khas Minang, lezat dan bergizi.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a href="/gulaitambusu">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    </a>
                  </div>
                  <small class="text-muted">5 menit</small>
                </div>
              </div>
            </div>
          </div>



  </main>

  <footer class="text-muted py-5">
    <div class="container">
      <p class="float-end mb-1">
        <a href="#">Back to top</a>
      </p>
    </div>
  </footer>


      <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>




@endsection
