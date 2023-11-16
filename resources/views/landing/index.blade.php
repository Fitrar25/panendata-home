<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="icon" href="{{ asset('img/icon1.png') }}"/>
        <title>Panendata - Data Scrapping</title>
        <!-- Favicon-->
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet" />
    </head>
    <body style="background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.726), rgba(0, 0, 0, 0.973)), url('img/bgbig.png');">
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark shadow-5-strong" style="background-image: linear-gradient(to top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.423))">
            <div class="container px-5">
                <a class="navbar-brand" href="#"><img src="{{ asset('img/whitelogo.png') }}" alt="" style="width: 15%"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#sampel">Sampel</a></li>
                        <li class="nav-item"><a class="nav-link" href="#paket">Paket</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class=" py-5">
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                        <div class="text-center my-5">
                            <br>
                            <h1 class="display-5 fw-bolder text-white mb-2">Panen Data yang Kamu Butuhkan Dengan Cepat!</h1>
                            <p class="lead text-white-50 mb-4"><b>Panendata</b> akan membantu kamu dalam mengumpulkan titik lokasi properti yang kamu butuhkan secara cepat dan menghemat biaya. <br> Data yang kami sajikan berupa <b> Shp, GeoJSON, CSV</b> dan <b>XLS</b> </p>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center">
                                <a class="btn btn-primary btn-lg px-4 me-sm-3" data-bs-toggle="modal" data-bs-target="#pilihorder">Order Now !</a>
                                <a class="btn btn-outline-light btn-lg px-4" href="https://wa.link/wwrb4d" target="_blank">Konsultasi</a>
                            </div>
                            <div class="modal fade" id="pilihorder" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Silahkan Cek estimasi harga sebelum melakukan order!</h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body row">
                                        <div class="col">
                                            <button type="button" class="btn btn-outline-primary btn-lg" data-bs-toggle="modal" data-bs-target="#order"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM80 64h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H80c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H80c-8.8 0-16-7.2-16-16s7.2-16 16-16zm16 96H288c17.7 0 32 14.3 32 32v64c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V256c0-17.7 14.3-32 32-32zm0 32v64H288V256H96zM240 416h64c8.8 0 16 7.2 16 16s-7.2 16-16 16H240c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/></svg><br>Order Now</button>
                                            <button type="button" class="btn btn-outline-primary btn-lg" data-bs-toggle="modal" data-bs-target="#cek"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V64c0-35.3-28.7-64-64-64H64zM96 64H288c17.7 0 32 14.3 32 32v32c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V96c0-17.7 14.3-32 32-32zm32 160a32 32 0 1 1 -64 0 32 32 0 1 1 64 0zM96 352a32 32 0 1 1 0-64 32 32 0 1 1 0 64zM64 416c0-17.7 14.3-32 32-32h96c17.7 0 32 14.3 32 32s-14.3 32-32 32H96c-17.7 0-32-14.3-32-32zM192 256a32 32 0 1 1 0-64 32 32 0 1 1 0 64zm32 64a32 32 0 1 1 -64 0 32 32 0 1 1 64 0zm64-64a32 32 0 1 1 0-64 32 32 0 1 1 0 64zm32 64a32 32 0 1 1 -64 0 32 32 0 1 1 64 0zM288 448a32 32 0 1 1 0-64 32 32 0 1 1 0 64z"/></svg> <br> Cek Harga</button>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <section class="bg-light py-5 border-bottom" id="sampel">
            <div class="container px-5 ">
                <div class="text-center mb-5">
                    <h2 class="display-5">Paket Data & Sampel</h2>
                    <p class="lead mb-0">Panendata menyediakan 2 jenis data untuk membantu project anda!</p>
                </div>
                <div class="row gx-5 justify-content-center">
                    <!-- Pricing card free-->
                    <div class="col-lg-6 col-xl-6">
                        <div class="card mb-3" style="max-width: 1000px;">
                            <div class="row g-0">
                              <div class="col-md-4">
                                <img src="{{ asset('img/pois1.png') }}" class="img-fluid rounded-start" alt="...">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <h5 class="card-title">Points of Interest</h5>
                                  <p class="card-text"><small class="text-body-secondary">Sumber dari Google Map</small></p>
                                  <p class="card-text" align="justify">Berbagai macam data lokasi yang tersedia di Google dapat kamu ambil untuk berbagai kepentingan. Lokasi yang tersedia bermacam-macam, mulai dari kafe, tempat makan, tempat ibadah, dan lain sebagainya. Kami menyediakan dua paket, yaitu paket pengambilan data regular dan data premium.</p>
                                </div>
                                <div class="card-footer d-flex justify-content-center" style="padding-top: 15px">
                                    <button type="button" class="btn btn-outline-primary btn-sm" data-bs-target="#sampellite" data-bs-toggle="modal">Sampel Lite</button>
                                    &nbsp;&nbsp;
                                    <button type="button" class="btn btn-outline-primary btn-sm" data-bs-target="#sampelstan" data-bs-toggle="modal">Sampel Standard</button>
                                    &nbsp;&nbsp;
                                    <button type="button" class="btn btn-outline-primary btn-sm"data-bs-target="#sampelpre" data-bs-toggle="modal">Sampel Premium</button>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>

                    {{-- lite --}}
                    <div class="modal fade" id="sampellite" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Sampel Lite</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body row">
                                <div class="col">
                                    <a href="#" download="PoisLite">
                                    <button type="button" class="btn btn-outline-primary btn-lg"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128z"/></svg> ShapeFile</button></a>
                                </div>
                                <div class="col">
                                    <a href="{{ asset('sampel/Pois/poisLite.geojson') }}" download="PoisLiteGeo">
                                    <button type="button" class="btn btn-outline-primary btn-lg"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M320 464c8.8 0 16-7.2 16-16V160H256c-17.7 0-32-14.3-32-32V48H64c-8.8 0-16 7.2-16 16V448c0 8.8 7.2 16 16 16H320zM0 64C0 28.7 28.7 0 64 0H229.5c17 0 33.3 6.7 45.3 18.7l90.5 90.5c12 12 18.7 28.3 18.7 45.3V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64z"/></svg> GeoJson</button>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="{{asset ('sampel/Pois/poisLite.csv') }}" download="PoisLite">
                                    <button type="button" class="btn btn-outline-primary btn-lg"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V304H176c-35.3 0-64 28.7-64 64V512H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128zM200 352h16c22.1 0 40 17.9 40 40v8c0 8.8-7.2 16-16 16s-16-7.2-16-16v-8c0-4.4-3.6-8-8-8H200c-4.4 0-8 3.6-8 8v80c0 4.4 3.6 8 8 8h16c4.4 0 8-3.6 8-8v-8c0-8.8 7.2-16 16-16s16 7.2 16 16v8c0 22.1-17.9 40-40 40H200c-22.1 0-40-17.9-40-40V392c0-22.1 17.9-40 40-40zm133.1 0H368c8.8 0 16 7.2 16 16s-7.2 16-16 16H333.1c-7.2 0-13.1 5.9-13.1 13.1c0 5.2 3 9.9 7.8 12l37.4 16.6c16.3 7.2 26.8 23.4 26.8 41.2c0 24.9-20.2 45.1-45.1 45.1H304c-8.8 0-16-7.2-16-16s7.2-16 16-16h42.9c7.2 0 13.1-5.9 13.1-13.1c0-5.2-3-9.9-7.8-12l-37.4-16.6c-16.3-7.2-26.8-23.4-26.8-41.2c0-24.9 20.2-45.1 45.1-45.1zm98.9 0c8.8 0 16 7.2 16 16v31.6c0 23 5.5 45.6 16 66c10.5-20.3 16-42.9 16-66V368c0-8.8 7.2-16 16-16s16 7.2 16 16v31.6c0 34.7-10.3 68.7-29.6 97.6l-5.1 7.7c-3 4.5-8 7.1-13.3 7.1s-10.3-2.7-13.3-7.1l-5.1-7.7c-19.3-28.9-29.6-62.9-29.6-97.6V368c0-8.8 7.2-16 16-16z"/></svg> CSV</button>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="{{ asset('sampel/Pois/poisLite.xls') }}" download="PoisLitexls">
                                    <button type="button" class="btn btn-outline-primary btn-lg"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM155.7 250.2L192 302.1l36.3-51.9c7.6-10.9 22.6-13.5 33.4-5.9s13.5 22.6 5.9 33.4L221.3 344l46.4 66.2c7.6 10.9 5 25.8-5.9 33.4s-25.8 5-33.4-5.9L192 385.8l-36.3 51.9c-7.6 10.9-22.6 13.5-33.4 5.9s-13.5-22.6-5.9-33.4L162.7 344l-46.4-66.2c-7.6-10.9-5-25.8 5.9-33.4s25.8-5 33.4 5.9z"/></svg> XLS</button>
                                    </a>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      {{-- Standard --}}
                    <div class="modal fade" id="sampelstan" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Sampel Standard</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body row">
                                <div class="col">
                                    <button type="button" class="btn btn-outline-primary btn-lg"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128z"/></svg> ShapeFile</button>
                                </div>
                                <div class="col">
                                    <a href="{{ asset('sampel/Pois/poisRegular.geojson') }}" download="PoisStandardGeo">
                                    <button type="button" class="btn btn-outline-primary btn-lg"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M320 464c8.8 0 16-7.2 16-16V160H256c-17.7 0-32-14.3-32-32V48H64c-8.8 0-16 7.2-16 16V448c0 8.8 7.2 16 16 16H320zM0 64C0 28.7 28.7 0 64 0H229.5c17 0 33.3 6.7 45.3 18.7l90.5 90.5c12 12 18.7 28.3 18.7 45.3V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64z"/></svg> GeoJson</button>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="{{asset ('sampel/Pois/poisRegular.csv') }}" download="PoisStandard">
                                    <button type="button" class="btn btn-outline-primary btn-lg"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V304H176c-35.3 0-64 28.7-64 64V512H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128zM200 352h16c22.1 0 40 17.9 40 40v8c0 8.8-7.2 16-16 16s-16-7.2-16-16v-8c0-4.4-3.6-8-8-8H200c-4.4 0-8 3.6-8 8v80c0 4.4 3.6 8 8 8h16c4.4 0 8-3.6 8-8v-8c0-8.8 7.2-16 16-16s16 7.2 16 16v8c0 22.1-17.9 40-40 40H200c-22.1 0-40-17.9-40-40V392c0-22.1 17.9-40 40-40zm133.1 0H368c8.8 0 16 7.2 16 16s-7.2 16-16 16H333.1c-7.2 0-13.1 5.9-13.1 13.1c0 5.2 3 9.9 7.8 12l37.4 16.6c16.3 7.2 26.8 23.4 26.8 41.2c0 24.9-20.2 45.1-45.1 45.1H304c-8.8 0-16-7.2-16-16s7.2-16 16-16h42.9c7.2 0 13.1-5.9 13.1-13.1c0-5.2-3-9.9-7.8-12l-37.4-16.6c-16.3-7.2-26.8-23.4-26.8-41.2c0-24.9 20.2-45.1 45.1-45.1zm98.9 0c8.8 0 16 7.2 16 16v31.6c0 23 5.5 45.6 16 66c10.5-20.3 16-42.9 16-66V368c0-8.8 7.2-16 16-16s16 7.2 16 16v31.6c0 34.7-10.3 68.7-29.6 97.6l-5.1 7.7c-3 4.5-8 7.1-13.3 7.1s-10.3-2.7-13.3-7.1l-5.1-7.7c-19.3-28.9-29.6-62.9-29.6-97.6V368c0-8.8 7.2-16 16-16z"/></svg> CSV</button>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="{{ asset('sampel/Pois/poisRegular.xls') }}" download="PoisStandardxls">
                                    <button type="button" class="btn btn-outline-primary btn-lg"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM155.7 250.2L192 302.1l36.3-51.9c7.6-10.9 22.6-13.5 33.4-5.9s13.5 22.6 5.9 33.4L221.3 344l46.4 66.2c7.6 10.9 5 25.8-5.9 33.4s-25.8 5-33.4-5.9L192 385.8l-36.3 51.9c-7.6 10.9-22.6 13.5-33.4 5.9s-13.5-22.6-5.9-33.4L162.7 344l-46.4-66.2c-7.6-10.9-5-25.8 5.9-33.4s25.8-5 33.4 5.9z"/></svg> XLS</button>
                                    </a>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>

                      {{-- Premium --}}
                    <div class="modal fade" id="sampelpre" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                        <div class="modal-dialog modal-dialog-centered">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Sampel Premium</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body row">
                                <div class="col">
                                    <button type="button" class="btn btn-outline-primary btn-lg"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128z"/></svg> ShapeFile</button>
                                </div>
                                <div class="col">
                                    <a href="{{ asset('sampel/Pois/poisPremium.geojson') }}" download="PoisPremiumgeo">
                                    <button type="button" class="btn btn-outline-primary btn-lg"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M320 464c8.8 0 16-7.2 16-16V160H256c-17.7 0-32-14.3-32-32V48H64c-8.8 0-16 7.2-16 16V448c0 8.8 7.2 16 16 16H320zM0 64C0 28.7 28.7 0 64 0H229.5c17 0 33.3 6.7 45.3 18.7l90.5 90.5c12 12 18.7 28.3 18.7 45.3V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64z"/></svg> GeoJson</button>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="{{asset ('sampel/Pois/poisPremium.csv') }}" download="PoisPremium">
                                    <button type="button" class="btn btn-outline-primary btn-lg"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V304H176c-35.3 0-64 28.7-64 64V512H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128zM200 352h16c22.1 0 40 17.9 40 40v8c0 8.8-7.2 16-16 16s-16-7.2-16-16v-8c0-4.4-3.6-8-8-8H200c-4.4 0-8 3.6-8 8v80c0 4.4 3.6 8 8 8h16c4.4 0 8-3.6 8-8v-8c0-8.8 7.2-16 16-16s16 7.2 16 16v8c0 22.1-17.9 40-40 40H200c-22.1 0-40-17.9-40-40V392c0-22.1 17.9-40 40-40zm133.1 0H368c8.8 0 16 7.2 16 16s-7.2 16-16 16H333.1c-7.2 0-13.1 5.9-13.1 13.1c0 5.2 3 9.9 7.8 12l37.4 16.6c16.3 7.2 26.8 23.4 26.8 41.2c0 24.9-20.2 45.1-45.1 45.1H304c-8.8 0-16-7.2-16-16s7.2-16 16-16h42.9c7.2 0 13.1-5.9 13.1-13.1c0-5.2-3-9.9-7.8-12l-37.4-16.6c-16.3-7.2-26.8-23.4-26.8-41.2c0-24.9 20.2-45.1 45.1-45.1zm98.9 0c8.8 0 16 7.2 16 16v31.6c0 23 5.5 45.6 16 66c10.5-20.3 16-42.9 16-66V368c0-8.8 7.2-16 16-16s16 7.2 16 16v31.6c0 34.7-10.3 68.7-29.6 97.6l-5.1 7.7c-3 4.5-8 7.1-13.3 7.1s-10.3-2.7-13.3-7.1l-5.1-7.7c-19.3-28.9-29.6-62.9-29.6-97.6V368c0-8.8 7.2-16 16-16z"/></svg> CSV</button>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="{{ asset('sampel/Pois/poisPremium.xls') }}" download="PoisPremiumxls">
                                    <button type="button" class="btn btn-outline-primary btn-lg"><svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V160H256c-17.7 0-32-14.3-32-32V0H64zM256 0V128H384L256 0zM155.7 250.2L192 302.1l36.3-51.9c7.6-10.9 22.6-13.5 33.4-5.9s13.5 22.6 5.9 33.4L221.3 344l46.4 66.2c7.6 10.9 5 25.8-5.9 33.4s-25.8 5-33.4-5.9L192 385.8l-36.3 51.9c-7.6 10.9-22.6 13.5-33.4 5.9s-13.5-22.6-5.9-33.4L162.7 344l-46.4-66.2c-7.6-10.9-5-25.8 5.9-33.4s25.8-5 33.4 5.9z"/></svg> XLS</button>
                                    </a>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>


                    <div class="col-lg-6 col-xl-6">
                        <div class="card mb-3" style="max-width: 1000px;">
                            <div class="row g-0">
                              <div class="col-md-4">
                                <img src="{{ asset('img/propval.png') }}" class="img-fluid rounded-start" alt="...">
                              </div>
                              <div class="col-md-8">
                                <div class="card-body">
                                  <h5 class="card-title">Harga Properti</h5>
                                  <p class="card-text"><small class="text-body-secondary">Sumber dari website properti</small></p>
                                  <p class="card-text" align="justify">Data harga jual properti sesuai dengan mekanisme pasar dapat menjadi data yang ampuh dalam penelitian akademik maupun riset pasar. Tidak hanya untuk penelitian, tetapi juga bagi anda yang ingin berbisnis dibidang properti dapat juga menggunakannya. Banyak yang dapat anda lakukan dengan data harga properti.</p>
                                </div>
                                <div class="card-footer d-flex justify-content-center">
                                    <h1 class="fs-4"><b>COMING SOON !</b></h1>
                                    <br>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                </div>
            </div>
        </section>

                <!-- Pricing section-->
                <section class="py-5 border-bottom"  style="background-color: #F5F5F5;" id="paket">
                    <div class="container px-5 ">
                        <div class="text-center mb-5">
                            <h2 class="display-5">Paket Order</h2>
                            <p class="lead mb-0">Panendata menyediakan 3 jenis paket sesuai kebutuhan anda!</p>
                        </div>
                        <br>
                        <div class="row gx-5 justify-content-center">
                            <div class="col-lg-6 col-xl-4">
                                <div class="card mb-5 mb-xl-0">
                                    <div class="card-body p-5">
                                        <div class="small text-uppercase fw-bold text-muted">
                                            Standard
                                        </div>
                                        <br>
                                        <div class="mb-3">
                                            <span class="fs-4">POIs</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <span class="fs-4 fw-bold">Rp. 800 </span>
                                            <span class="text-muted">/ titik.</span>
                                            <br>
                                            <span class="fs-4">Properties</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <span class="fs-4 fw-bold">Rp. 1000 </span>
                                            <span class="text-muted">/ titik.</span>
                                        </div>
                                                <ul class="list-unstyled mb-4">
                                                    <li class="mb-3">
                                                        <i class="fa-solid fa-check" style="color: #00ff33;"></i>
                                                        Objek dengan koordinat
                                                    </li>
                                                    <li class="mb-3">
                                                        <i class="fa-solid fa-check" style="color: #00ff33;"></i>
                                                        Pencarian objek terperinci
                                                    </li>
                                                    <li class="mb-3">
                                                        <i class="fa-solid fa-check" style="color: #00ff33;"></i>
                                                        Format data dalam bentuk Shapefile, &nbsp;&nbsp;&nbsp; GeoJSON, CSV, dan Excel
                                                    </li>
                                                    <li class="mb-3">
                                                        <i class="fa-solid fa-check" style="color: #00ff33;"></i>
                                                        +15 Atribut dalam satu objek
                                                    </li>
                                                    <li class="text-muted">
                                                        <i class="fa-solid fa-xmark" style="color: #ff0000;"></i>
                                                        +25 Atribut dalam satu objek
                                                    </li>
                                        </ul>
                                        <div class="d-grid"><a class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#pilihorder">Order Now !</a></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Pricing card free-->
                            <div class="col-lg-6 col-xl-4" style="margin-top: -20px;">
                                <div class="card mb-5 mb-xl-0 border-primary">
                                    <div class="card-body p-5">
                                        <div class="small text-uppercase fw-bold"><i class="bi bi-star-fill text-warning"></i> Lite</div>
                                        <br>
                                        <div class="mb-3">
                                            <span class="fs-4">POIs</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <span class="fs-4 fw-bold">Rp. 500 </span>
                                            <span class="text-muted">/ titik.</span>
                                            <br>
                                            <span class="fs-4">Properties</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <span class="fs-4 fw-bold">Rp. 500 </span>
                                            <span class="text-muted">/ titik.</span>
                                        </div>
                                        <ul class="list-unstyled mb-4">
                                            <li class="mb-3">
                                                <i class="fa-solid fa-check" style="color: #00ff33;"></i>
                                                Objek dengan koordinat
                                            </li>
                                            <li class="mb-3">
                                                <i class="fa-solid fa-check" style="color: #00ff33;"></i>
                                                Pencarian objek terperinci
                                            </li>
                                            <li class="mb-3">
                                                <i class="fa-solid fa-check" style="color: #00ff33;"></i>
                                                Format data dalam bentuk Shapefile, &nbsp;&nbsp;&nbsp; GeoJSON, CSV, dan Excel
                                            </li>
                                            <li class="mb-3 text-muted">
                                                <i class="fa-solid fa-xmark" style="color: #ff0000;"></i>
                                                +15 Atribut dalam satu objek
                                            </li>
                                            <li class="text-muted">
                                                <i class="fa-solid fa-xmark" style="color: #ff0000;"></i>
                                                +25 Atribut dalam satu objek
                                            </li>
                                        </ul>
                                        <div class="d-grid"><a class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#pilihorder">Order Now !</a></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Pricing card enterprise-->
                            <div class="col-lg-6 col-xl-4">
                                <div class="card">
                                    <div class="card-body p-5">
                                        <div class="small text-uppercase fw-bold text-muted">Premium</div>
                                        <br>
                                        <div class="mb-3">
                                            <span class="fs-4">POIs</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <span class="fs-4 fw-bold">Rp. 1500 </span>
                                            <span class="text-muted">/ titik.</span>
                                            <br>
                                            <span class="fs-4">Properties</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                            <span class="fs-4 fw-bold">Rp. 3000 </span>
                                            <span class="text-muted">/ titik.</span>
                                        </div>
                                        <ul class="list-unstyled mb-4">
                                            <li class="mb-3">
                                                <i class="fa-solid fa-check" style="color: #00ff33;"></i>
                                                Objek dengan koordinat
                                            </li>
                                            <li class="mb-3">
                                                <i class="fa-solid fa-check" style="color: #00ff33;"></i>
                                                Pencarian objek terperinci
                                            </li>
                                            <li class="mb-3">
                                                <i class="fa-solid fa-check" style="color: #00ff33;"></i>
                                                Format data dalam bentuk Shapefile, &nbsp;&nbsp;&nbsp; GeoJSON, CSV, dan Excel
                                            </li>
                                            <li class="mb-3">
                                                <i class="fa-solid fa-check" style="color: #00ff33;"></i>
                                                +15 Atribut dalam satu objek
                                            </li>
                                            <li class="mb-3">
                                                <i class="fa-solid fa-check" style="color: #00ff33;"></i>
                                                +25 Atribut dalam satu objek
                                            </li>
                                        </ul>
                                        <div class="d-grid"><a class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#pilihorder">Order Now !</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <p class="text-center text-muted" style="margin-bottom: -35px;">*harga belum termasuk diskon</p>
                </section>
        <!-- Features section-->
        <section class="py-5 border-bottom" id="features" style="background-color: #e1f7ff; background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0.52), rgba(0, 0, 0, 0.73)), url('img/bgc.png'); width:100%;">
            <div class="container px-5 my-5">
                <div class="row gx-5">
                    <div class="col-lg-6 mb-5 mb-lg-0">
                        <h2 class="display-5 text-white">Mahasiswa dapat menghemat hingga 20%</h2>
                        <br>
                        <p align="justify" class="lead text-white">Kami memahami bahwa mahasiswa sangat membutuhkan data tetapi terbatas akan dana. Maka kami dengan senang hati memberikan diskon besar bagi para mahasiswa. Anda bisa mendapatkan diskon khusus mahasiswa.</p>
                        <a class="btn btn-primary btn-md px-4 me-sm-3" data-bs-toggle="modal" data-bs-target="#pilihorder">Order Now !</a>
                    </div>
                    <div class="col-lg-6">

                    </div>
                </div>
                <br>
            </div>
        </section>

        @if (Session::get('success'))
        <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
            <strong>Order diterima!</strong> Kami akan segera menghubungi anda.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="modal fade" id="order" tabindex="-1" aria-labelledby="orderLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="orderLabel">Order Form</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{Route('order.store')}}" method="POST" enctype="multipart/form-data">
                        {{-- security --}}
                        @csrf
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama Paket *pastikan nama paket sesuai</label>
                            <select class="form-select" aria-label="Default select example" id="package_id" name="package_id">
                                <option value="5">POIs Lite</option>
                                <option value="1">POIs Standard</option>
                                <option value="2">POIs Premium</option>
                                <option value="6">Propertis Lite</option>
                                <option value="3">Propertis Standard</option>
                                <option value="4">Properties Premium</option>


                              </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">No HP</label>
                            <input type="number" class="form-control" id="phone" name="phone" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Ruang Lingkup</label>
                            <input type="text" class="form-control" id="objek" name="objek" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Down Payment</label>
                            <input type="number" class="form-control" id="dp" name="dp" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Total</label>
                            <input type="number" class="form-control" id="total" name="total" required>
                        </div>
                        <input type="hidden" id="status" name="status" value="On Going">
                </div>
                <div class="modal-footer">
                    <a href="#"></a><button type="submit" class="btn btn-primary">Submit</button></a>
                    <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Cancel</button>

                </div>
            </form>
              </div>
            </div>
          </div>
        <div class="modal fade" id="cek" tabindex="-1" aria-labelledby="cekLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="cekLabel">Cek Estimasi Harga</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container mt-4">
                        <div class="card" style="width: 100%;">
                            <div class="card-body">
                                <form class="row">
                                    <div class="col-12">
                                        <label for="paket">Paket</label>
                                        <select id="paket-input" class="form-select" aria-label="paket" onchange="inputOnChange()">
                                            <option value="0" selected>Pilih Paket</option>
                                            <option value="500">POIs Lite</option>
                                            <option value="800">POIs Standard</option>
                                            <option value="1500">POIs Premium</option>
                                            <option value="800">Properties Lite</option>
                                            <option value="1000">Properties Standard</option>
                                            <option value="2000">Properties Premium</option>
                                        </select>
                                    </div>
                                    <div class="col-12 mt-2">
                                        <label for="diskon">Jumlah Objek</label>
                                        <div class="input-group mb-3">
                                            <input type="number" min="0" class="form-control" id="objek-input" onchange="inputOnChange()" value="0">
                                            <span class="input-group-text">Objek</span>
                                        </div>
                                    </div>
                                    <div class="col-12 mt-2">
                                        <div class="card">
                                            <div class="card-header">
                                                <h3>
                                                    Estimasi Harga
                                                </h3>
                                            </div>
                                            <div class="card-body">
                                              <h6 class="card-title">Rp. <span id="estimasi-output">0</span></h6>
                                            </div>
                                          </div>
                                    </div>
                                    <div class="col-auto mt-4">
                                        <button type="submit" class="btn btn-primary mb-3">Kalkulasi</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <a href="#"></a><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#order">Order Now</button></a>
                    <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#pilihorder">Cancel</button>

                </div>
              </div>
            </div>
          </div>
          <script>

          </script>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-5">
                <p class="text-white text-start">Atau jika ada pertanyaan, Kontak Kami <br>
                    E-mail : cs@panendata.com <br>
                    Whatsapp : +6281270640800 </p><br>
                <p class="m-0 text-center text-white">Copyright &copy; Panendata 2023 | <a href="#" class="text-white" style="text-decoration: none">Privacy Policy</a></p>
            </div>
        </footer>
        <script>
            let paket=document.getElementById('paket-input').value,
                objek=document.getElementById('objek-input').value,
                inputOnChange=()=>{
                    paket=document.getElementById('paket-input').value
                    objek=document.getElementById('objek-input').value
                    document.getElementById('estimasi-output').innerHTML=paket*objek
                }

        </script>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://kit.fontawesome.com/9ee09edcfc.js" crossorigin="anonymous"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
