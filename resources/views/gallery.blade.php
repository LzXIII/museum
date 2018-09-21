@extends ('template.main')
@section('header')
  @include('partials.topbar')
  <!--Page header & Title-->
      <section id="page_header">
          <div class="page_title">
              <div class="container">
                  <div class="row">
                      <div class="col-md-12">
                          <h2 class="title">GALLERY</h2>
                          <p></p>
                      </div>
                  </div>
              </div>
          </div>
      </section>
@endsection
@section('body')
  <section id="gallery" class="padding-top">
          <div class="container">

              <div class="row">
                  <div class="zerogrid">
                      <div class="wrap-container">
                          <div class="wrap-content clearfix">
                                                              <div class="col-1-3 mix work-item heading_space">
                                      <div class="wrap-col">
                                          <div class="item-container">
                                              <div class="image">
                                                  <img src="https://v3.cdnskr.com/uploads/mustorico/news/images/1533135153img-2468jpg.jpeg" alt="cook"/>
                                                  <div class="overlay">
                                                      <a class="fancybox overlay-inner" href="https://v3.cdnskr.com/uploads/mustorico/news/images/1533135153img-2468jpg.jpeg"
                                                         data-fancybox-group="gallery"><i class=" icon-eye6"></i></a>
                                                  </div>
                                              </div>

                                          </div>
                                      </div>
                                  </div>
                                                              <div class="col-1-3 mix work-item heading_space">
                                      <div class="wrap-col">
                                          <div class="item-container">
                                              <div class="image">
                                                  <img src="https://v3.cdnskr.com/uploads/mustorico/news/images/1533135343img-2457jpg.jpeg" alt="cook"/>
                                                  <div class="overlay">
                                                      <a class="fancybox overlay-inner" href="https://v3.cdnskr.com/uploads/mustorico/news/images/1533135343img-2457jpg.jpeg"
                                                         data-fancybox-group="gallery"><i class=" icon-eye6"></i></a>
                                                  </div>
                                              </div>

                                          </div>
                                      </div>
                                  </div>
                                                              <div class="col-1-3 mix work-item heading_space">
                                      <div class="wrap-col">
                                          <div class="item-container">
                                              <div class="image">
                                                  <img src="https://v3.cdnskr.com/uploads/mustorico/news/images/1533135135img-2206jpg.jpeg" alt="cook"/>
                                                  <div class="overlay">
                                                      <a class="fancybox overlay-inner" href="https://v3.cdnskr.com/uploads/mustorico/news/images/1533135135img-2206jpg.jpeg"
                                                         data-fancybox-group="gallery"><i class=" icon-eye6"></i></a>
                                                  </div>
                                              </div>

                                          </div>
                                      </div>
                                  </div>
                                                              <div class="col-1-3 mix work-item heading_space">
                                      <div class="wrap-col">
                                          <div class="item-container">
                                              <div class="image">
                                                  <img src="https://v3.cdnskr.com/uploads/mustorico/news/images/1533135118img-1976jpg.jpeg" alt="cook"/>
                                                  <div class="overlay">
                                                      <a class="fancybox overlay-inner" href="https://v3.cdnskr.com/uploads/mustorico/news/images/1533135118img-1976jpg.jpeg"
                                                         data-fancybox-group="gallery"><i class=" icon-eye6"></i></a>
                                                  </div>
                                              </div>

                                          </div>
                                      </div>
                                  </div>
                                                              <div class="col-1-3 mix work-item heading_space">
                                      <div class="wrap-col">
                                          <div class="item-container">
                                              <div class="image">
                                                  <img src="https://v3.cdnskr.com/uploads/mustorico/news/images/1533135108img-1957jpg.jpeg" alt="cook"/>
                                                  <div class="overlay">
                                                      <a class="fancybox overlay-inner" href="https://v3.cdnskr.com/uploads/mustorico/news/images/1533135108img-1957jpg.jpeg"
                                                         data-fancybox-group="gallery"><i class=" icon-eye6"></i></a>
                                                  </div>
                                              </div>

                                          </div>
                                      </div>
                                  </div>
                                                              <div class="col-1-3 mix work-item heading_space">
                                      <div class="wrap-col">
                                          <div class="item-container">
                                              <div class="image">
                                                  <img src="https://v3.cdnskr.com/uploads/mustorico/news/images/1533135011-95b9612jpg.jpeg" alt="cook"/>
                                                  <div class="overlay">
                                                      <a class="fancybox overlay-inner" href="https://v3.cdnskr.com/uploads/mustorico/news/images/1533135011-95b9612jpg.jpeg"
                                                         data-fancybox-group="gallery"><i class=" icon-eye6"></i></a>
                                                  </div>
                                              </div>

                                          </div>
                                      </div>
                                  </div>


                          </div>

                      </div>
                      <ul class="pagination" role="navigation">

                      <li class="page-item disabled" aria-disabled="true">
                  <span class="page-link">Indietro</span>
              </li>


                      <li class="page-item">
                  <a class="page-link" href="/gallery?page=2" rel="next">Avanti</a>
              </li>
              </ul>


                  </div>
              </div>
          </div>
      </section>
@endsection
