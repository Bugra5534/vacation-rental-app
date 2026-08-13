<!DOCTYPE html>
<html lang="en">


    <!-- ***** Header Area Start ***** -->
    @include("layouts.navbar")
    <!-- ***** Header Area End ***** -->

    <!-- ***** Call to Action Start ***** -->


    <section class="section section-bg" id="call-to-action" style="background-image: url('{{('assets/images/banner-image-1-1920x500.jpg')}}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2><em>{{$vacationdetailprice->pricerange}}</em></h2>
                        <p>{{$vacationdetail->title}}</p>

                        <div class="main-button">
                          <a href="#" data-toggle="modal" data-target="#exampleModal">Başvuru Formu</a>
                        </div>
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

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="{{asset('assets/images/vacation-image-1-1200x600.jpg')}}" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{asset('assets/images/vacation-image-1-1200x600.jpg')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{asset('assets/images/vacation-image-1-1200x600.jpg')}}" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>

            <br>
            <br>

            <div class="row" id="tabs">
              <div class="col-lg-4">
                <ul>
                  <li><a href='#tabs-1'><i class="fa fa-star"></i> Evin Ayrıcalıkları</a></li>
                  <li><a href='#tabs-2'><i class="fa fa-gift"></i> Ev Hakkında</a></li>
                  <li><a href='#tabs-3'><i class="fa fa-plus-circle"></i> Tarih &amp; Fiyatlar</a></li>
                  <li><a href='#tabs-5'><i class="fa fa-phone"></i> İletişim Bilgileri</a></li>
                </ul>
              </div>
              <div class="col-lg-8">
                <section class='tabs-content' style="width: 100%;">
                  <article id='tabs-1'>
                    <h4>Evin Ayrıcalıkları</h4>
                      <div class="row">
                    @foreach($vacationdetailextra as $extras)

                   @if($extras->extra_id)

                       <div class="col-sm-6">
                            <p>{{$extras->name}}</p>
                       </div>
                        @endif
                        @endforeach

                    </div>
                  </article>
                  <article id='tabs-2'>
                    <h4>Ev Hakkında</h4>

                    <p>{{$vacationdetail->description}}</p>

                   </article>
                  <article id='tabs-3'>
                    <h4>Tarih & Fiyatlar</h4>

                    <div class="table-responsive">
                      <table class="table">
                         <thead>
                              <tr>
                                   <th>Paket</th>
                                   <th>Başlangıç</th>
                                   <th>Bitiş</th>
                                   <th>Fiyat</th>
                              </tr>
                         </thead>

                          @foreach($vacationdetailprice as $price)
                         <tbody>
                              <tr>
                                   <td></td>
                                   <td>{{$price->start_date}}</td>
                                   <td>{{$price->end_date}}</td>
                                   <td>{{$price->price . "TL"}}</td>
                              </tr>
                              @endforeach
                         </tbody>
                      </table>
                    </div>
                  </article>
                  <article id='tabs-5'>
                    <h4>İletişim Bilgileri</h4>

                    <div class="row">
                        <div class="col-sm-6">
                            <label>İsim Soyisim</label>

                            <p>Buğra Karkucak</p>
                        </div>
                        <div class="col-sm-6">
                            <label>Numara</label>

                            <p>123-456-789 </p>
                        </div>
                        <div class="col-sm-6">
                            <label>Cep Numarası</label>
                            <p>456789123 </p>
                        </div>
                        <div class="col-sm-6">
                            <label>Email</label>
                            <p><a href="#">bugrakarkucakk@gmail.com</a></p>
                        </div>
                    </div>

                    <img src="{{asset('assets/images/map.jpg')}}" class="img-fluid" alt="">
                  </article>
                </section>
              </div>
            </div>
        </div>
    </section>
    <!-- ***** Fleet Ends ***** -->

 @include("layouts.footer")
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Başvuru Formu</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="contact-us">
            <div class="contact-form">
              <form action="#" id="contact">
                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Tam isminizi giriniz" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Email adresi giriniz" required="">
                          </fieldset>
                       </div>
                  </div>

                  <div class="row">
                       <div class="col-md-6">
                          <fieldset>
                            <input type="text" class="form-control" placeholder="Telefon numarası giriniz" required="">
                          </fieldset>
                       </div>

                       <div class="col-md-6">
                          <div class="row">
                             <div class="col-md-6">
                                <fieldset>
                                  <input type="text" class="form-control" placeholder="Başlangıç tarihi" required="">
                                </fieldset>
                             </div>

                             <div class="col-md-6">
                                <fieldset>
                                  <input type="text" class="form-control" placeholder="Bitiş tarihi" required="">
                                </fieldset>
                             </div>
                          </div>
                       </div>
                  </div>
              </form>
           </div>
           </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">İptal</button>
            <button type="button" class="btn btn-primary">Gönder</button>
          </div>
        </div>
      </div>
    </div>

