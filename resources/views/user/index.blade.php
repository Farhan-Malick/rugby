<!DOCTYPE html>
<html lang="en">

<head>
  {{-- <title>Rugby &mdash; </title> --}}
 @include('layouts.headLinks')
</head>

<body>

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>

    @include('layouts.header')

    <div class="hero overlay" style="background-image: url('{{asset('assets/images/banner2.jpg')}}');">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5 ml-auto">
            <h1 class="text-white">World Cup Event</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, molestias repudiandae pariatur.</p>
            <div id="date-countdown"></div>
            <p>
              <a href="{{URL('/create-pool')}}" class="btn btn-primary py-3 px-4 mr-3">Start New Pool</a>
              <a href="{{URL('All/Pools')}}" class="btn btn-primary py-3 px-4 mr-3">Join A Pool</a>

              {{-- <a href="#" class="more light">Learn More</a> --}}
            </p>
            
          </div>
        </div>
      </div>
    </div>

    <div class="container">


      <div class="row">
        <div class="col-lg-12">

          <div class="d-flex team-vs">
            <span class="score">4-1</span>
            <div class="team-1 w-50">
              <div class="team-details w-100 text-center">
                <img src="{{asset('assets/images/logo_4.png')}}" alt="Image" class="img-fluid">
                <h3>LA LEGA <span>(win)</span></h3>
                <ul class="list-unstyled">
                  <li>Anja Landry (7)</li>
                  <li>Eadie Salinas (12)</li>
                  <li>Ashton Allen (10)</li>
                  <li>Baxter Metcalfe (5)</li>
                </ul>
              </div>
            </div>
            <div class="team-2 w-50">
              <div class="team-details w-100 text-center">
                <img src="{{asset('assets/images/logo_4.png')}}" alt="Image" class="img-fluid">
                <h3>JUVENDU <span>(loss)</span></h3>
                <ul class="list-unstyled">
                  <li>Macauly Green (3)</li>
                  <li>Arham Stark (8)</li>
                  <li>Stephan Murillo (9)</li>
                  <li>Ned Ritter (5)</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="latest-news">
      <div class="container">
        <div class="row">
          <div class="col-12 title-section">
            <h2 class="heading">Latest News</h2>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-md-4">
            <div class="post-entry">
              <a href="#">
                <img src="{{asset('assets/images/img_1.jpg')}}" alt="Image" class="img-fluid">
              </a>
              <div class="caption">
                <div class="caption-inner">
                  <h3 class="mb-3">Romolu to stay at Real Nadrid?</h3>
                  <div class="author d-flex align-items-center">
                    <div class="img mb-2 mr-3">
                      <img src="{{asset('assets/images/person_1.jpg')}}" alt="">
                    </div>
                    <div class="text">
                      <h4>Mellissa Allison</h4>
                      <span>May 19, 2020 &bullet; Sports</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="post-entry">
              <a href="#">
                <img src="{{asset('assets/images/img_3.jpg')}}" alt="Image" class="img-fluid">
              </a>
              <div class="caption">
                <div class="caption-inner">
                  <h3 class="mb-3">Kai Nets Double To Secure Comfortable Away Win</h3>
                  <div class="author d-flex align-items-center">
                    <div class="img mb-2 mr-3">
                      <img src="{{asset('assets/images/person_1.jpg')}}" alt="">
                    </div>
                    <div class="text">
                      <h4>Mellissa Allison</h4>
                      <span>May 19, 2020 &bullet; Sports</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="post-entry">
              <a href="#">
                <img src="{{asset('assets/images/img_2.jpg')}}" alt="Image" class="img-fluid">
              </a>
              <div class="caption">
                <div class="caption-inner">
                  <h3 class="mb-3">Dogba set for Juvendu return?</h3>
                  <div class="author d-flex align-items-center">
                    <div class="img mb-2 mr-3">
                      <img src="{{asset('assets/images/person_1.jpg')}}" alt="">
                    </div>
                    <div class="text">
                      <h4>Mellissa Allison</h4>
                      <span>May 19, 2020 &bullet; Sports</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>

    <div class="site-section bg-dark">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="widget-next-match">
              <div class="widget-title">
                <h3>Next Match</h3>
              </div>
              <div class="widget-body mb-3">
                <div class="widget-vs">
                  <div class="d-flex align-items-center justify-content-around justify-content-between w-100">
                    <div class="team-1 text-center">
                      <img src="{{asset('assets/images/logo_4.png')}}" alt="Image" class="img-fluid">
                      <h3>Rugby League</h3>
                    </div>
                    <div>
                      <span class="vs"><span>VS</span></span>
                    </div>
                    <div class="team-2 text-center">
                      <img src="{{asset('assets/images/logo_4.png')}}" alt="Image" class="img-fluid">
                      <h3>Rugby</h3>
                    </div>
                  </div>
                </div>
              </div>

              <div class="text-center widget-vs-contents mb-4">
                <h4>World Cup League</h4>
                <p class="mb-5">
                  <span class="d-block">December 20th, 2020</span>
                  <span class="d-block">9:30 AM GMT+0</span>
                  <strong class="text-primary">New Euro Arena</strong>
                </p>

                {{-- <div id="date-countdown2" class="pb-1"></div> --}}
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            
            <div class="widget-next-match">
              <table class="table custom-table">
                <thead>
                  <tr>
                    <th>P</th>
                    <th>Team</th>
                    <th>W</th>
                    <th>D</th>
                    <th>L</th>
                    <th>PTS</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>1</td>
                    <td><strong class="text-white">Rugby League</strong></td>
                    <td>22</td>
                    <td>3</td>
                    <td>2</td>
                    <td>140</td>
                  </tr>
                  <tr>
                    <td>2</td>
                    <td><strong class="text-white">Rugby</strong></td>
                    <td>22</td>
                    <td>3</td>
                    <td>2</td>
                    <td>140</td>
                  </tr>
                  <tr>
                    <td>3</td>
                    <td><strong class="text-white">Juvendo</strong></td>
                    <td>22</td>
                    <td>3</td>
                    <td>2</td>
                    <td>140</td>
                  </tr>
                  <tr>
                    <td>4</td>
                    <td><strong class="text-white">French Rugby League</strong></td>
                    <td>22</td>
                    <td>3</td>
                    <td>2</td>
                    <td>140</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td><strong class="text-white">Legia Abante</strong></td>
                    <td>22</td>
                    <td>3</td>
                    <td>2</td>
                    <td>140</td>
                  </tr>
                  <tr>
                    <td>6</td>
                    <td><strong class="text-white">Gliwice League</strong></td>
                    <td>22</td>
                    <td>3</td>
                    <td>2</td>
                    <td>140</td>
                  </tr>
                  <tr>
                    <td>7</td>
                    <td><strong class="text-white">Cornika</strong></td>
                    <td>22</td>
                    <td>3</td>
                    <td>2</td>
                    <td>140</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td><strong class="text-white">Gravity Smash</strong></td>
                    <td>22</td>
                    <td>3</td>
                    <td>2</td>
                    <td>140</td>
                  </tr>
                </tbody>
              </table>
            </div>

          </div>
        </div>
      </div>
    </div> <!-- .site-section -->

    <div class="container site-section">
      <div class="row">
        <div class="col-6 title-section">
          <h2 class="heading">Our Blog</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="custom-media d-flex">
            <div class="img mr-4">
              <img src="{{asset('assets/images/img_1.jpg')}}" alt="Image" class="img-fluid">
            </div>
            <div class="text">
              <span class="meta">May 20, 2020</span>
              <h3 class="mb-4"><a href="#">Romolu to stay at Real Nadrid?</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus deserunt saepe tempora dolorem.</p>
              <p><a href="#">Read more</a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="custom-media d-flex">
            <div class="img mr-4">
              <img src="{{asset('assets/images/img_3.jpg')}}" alt="Image" class="img-fluid">
            </div>
            <div class="text">
              <span class="meta">May 20, 2020</span>
              <h3 class="mb-4"><a href="#">Romolu to stay at Real Nadrid?</a></h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus deserunt saepe tempora dolorem.</p>
              <p><a href="#">Read more</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

@include('layouts.footer')

  </div>
  <!-- .site-wrap -->

  @include('layouts.scriptingLinks')


</body>

</html>
