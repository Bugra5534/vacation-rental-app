<!DOCTYPE html>
<html lang="en">

    <!-- ***** Header Area Start ***** -->
    @include("layouts.navbar")
    <!-- ***** Header Area End ***** -->

    <!-- ***** Call to Action Start ***** -->
    <section class="section section-bg" id="call-to-action" style="background-image: url({{asset('assets/images/banner-image-1-1920x500.jpg')}})">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2>ÖNE ÇIKAN <em>İLANLARIMIZ</em></h2>
                        <p>Özenle seçilmiş, her bütçeye ve zevke uygun konaklama seçeneklerimizi keşfedin. Hayalinizdeki tatil sadece bir tık uzağınızda.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Fleet Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <br>
            <br>
            <div class="row">
            @foreach($mappingVacation as $vacation)
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="{{asset('assets/images/product-1-720x480.jpg')}}" alt="">
                        </div>

                        <div class="down-content">
                            <span>
                                <sup></sup>{{ $vacation->min_price }}TL - {{ $vacation->max_price }}TL<sup></sup>
                            </span>

                            <h4>{{$vacation->title}}</h4>

                            <p>
                                <i class="fa fa-map-marker"></i> {{$vacation->location}}
                            </p>

                            <ul class="social-icons">
                                <li><a href="{{route('vacationdetail', $vacation->id)}}">+ Daha Fazla Detay</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
                </div>
             </div>
    </section>
    <style>
        /* Aktif (Bulunduğun) sayfanın arka planını turuncu yapar */
        .pagination .page-item.active .page-link {
            background-color: #f35525 !important;
            border-color: #f35525 !important;
            color: white !important;
        }

        /* Diğer pasif sayfaların ve okların yazı rengini turuncu yapar */
        .pagination .page-link {
            color: #f35525 !important;
        }

        /* Üzerine mouse ile gelince (hover) turuncu dolgu verir */
        .pagination .page-link:hover {
            background-color: #f35525 !important;
            color: white !important;
            border-color: #f35525 !important;
        }
    </style>
            <br>
            <nav>
              <ul class="pagination pagination-lg justify-content-center">
                  <div class="row">
                      {{ $mappingVacation->links() }}
                  </div>
              </ul>
            </nav>
    <!-- ***** Fleet Ends ***** -->

@include("layouts.footer")
