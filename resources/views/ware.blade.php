<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Ware</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <script defer src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
<header>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
        <strong>LatvijaGrozs-Preces</strong>
      </a>
    </div>
  </div>
</header>
<main>
  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="{{ asset('img/dators.jpg') }}" data-holder-rendered="true">
            <div class="card-body">
              <p class="card-text">Portatīvais dators Asus X515FA-BQ196W 15.6 FHD i3-10110U 8GB 512SSD RU W11S Gray</p>
              <p class="card-text">529.99 €</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a href="{{ url('buy') }}"><button type="button" class="btn btn-sm btn-outline-secondary">Nopirkt</button></a>
                  <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#nopirkt-modal">Tehniskie Raksturojumi</button>
                  <div class="modal fade" id="nopirkt-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle">Kopējie parametri</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">X</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="container">
                            <div class="row">
                              <div class="col">
                                <h3>Product details</h3>
                                <dl class="product-container">
                                  <dt class=""><span>Datora tips:</span></dt>
                                  <dd>Mācībām, darbam un mājām</dd>
                                  <dt><span class="stuff">Korpusa materiāls:</span></dt>
                                  <dd>Plastmasas</dd>
                                  <dt><span>Akumulatora tips:</span></dt>
                                  <dd>Li-ion 2 cell 37 Whr</dd>
                                  <dt><span>Krāsa:</span></dt>
                                  <dd>Pelēks</dd>
                                  <dt><span>Svars:</span></dt>
                                  <dd>1,8 kg</dd>
                                  <dt><span>Izmērs (PxAxDz):</span></dt>
                                  <dd>S36 x 1,99 x 23,4 cm</dd>
                                </dl>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="{{ asset('img/planšets.jpg') }}" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
            <div class="card-body">
              <p class="card-text">Planšetdators Samsung Galaxy Tab A8 10.5" 32GB SM-X200 Dark Gray (SM-X200NZAAEUE)</p>
              <p class="card-text">219.99 €</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a href="{{ url('buy') }}"><button type="button" class="btn btn-sm btn-outline-secondary">Nopirkt</button></a>
                  <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#nopirkt2-modal">Tehniskie Raksturojumi</button>
                  <div class="modal fade" id="nopirkt2-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle2">Kopējie parametri</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">X</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="container">
                            <div class="row">
                              <div class="col">
                                <dl class="product-container">
                                  <dt><span><h3>Ekrāns:</h3></span></dt>
                                  <dt><span class="stuff">Ekrāna izmērs:</span></dt>
                                  <dd>10,5</dd>
                                  <dt><span>Ekrāna izšķirtspēja:</span></dt>
                                  <dd>1920 x 1200</dd>
                                  <dt><span><h3>Procesors:</h3></span></dt>
                                  <dt><span>Procesora modelis:</span></dt>
                                  <dd>1,8 kg</dd>
                                  <dt><span>Procesora frekvence:</span></dt>
                                  <dd>Octa-core (2x2.0 GHz Cortex-A75 & 6x2.0 GHz Cortex-A55)</dd>
                                  <dt><span><h3>Cietais disks</h3></span></dt>
                                  <dt>Iekšējās atmiņas apjoms:</dt>
                                  <dd>32 GB</dd>
                                </dl>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="{{ asset('img/kresels.jpg') }}" style="height: 225px; width: 300px; display: block;">
            <div class="card-body">
              <p class="card-text">Mēbeles Canyon Gaming Chair Corax, Black/ Orange CND-SGCH5</p>
              <p class="card-text">229.99 €</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a href="{{ url('buy') }}"><button type="button" class="btn btn-sm btn-outline-secondary">Nopirkt</button></a>
                  <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#nopirkt3-modal">Tehniskie Raksturojumi</button>
                  <div class="modal fade" id="nopirkt3-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle3">Kopējie parametri</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">X</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="container">
                            <div class="row">
                              <div class="col">
                                <dl class="product-container">
                                  <dt><span class="stuff">Tips:</span></dt>
                                  <dd>Geimeru krēsls</dd>
                                  <dt><span>Pamatne:</span></dt>
                                  <dd>Piecstaru pamatne uz ritenīšiem 0</dd>
                                  <dt><span>Materiāls:</span></dt>
                                  <dd>Mākslīgā āda</dd>
                                  <dt><span>Krāsa:</span></dt>
                                  <dd>Melna/Oranža</dd>
                                </dl>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="{{ asset('img/telefons.jpg') }}" data-holder-rendered="true" style="height: 225px; width: 300px; display: block; ">
            <div class="card-body">
              <p class="card-text">Mobilais telefons Samsung A336B Galaxy A33 5G 128GB Awesome Black</p>
              <p class="card-text">329.00 €</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a href="{{ url('buy') }}"><button type="button" class="btn btn-sm btn-outline-secondary">Nopirkt</button></a>
                  <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#nopirkt4-modal">Tehniskie Raksturojumi</button>
                  <div class="modal fade" id="nopirkt4-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle4">Kopējie parametri</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">X</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="container">
                            <div class="row">
                              <div class="col">
                                <dl class="product-container">
                                  <dt><span class="stuff">Telefons tips:</span></dt>
                                  <dd>Skārienjutīgs</dd>
                                  <dt><span>Viedtālruņa modelis:</span></dt>
                                  <dd>Galaxy A33</dd>
                                  <dt><span>Korpusa materiāls:</span></dt>
                                  <dd>Plastmasa</dd>
                                  <dt><span>Korpuss izturīgs pret ūdens un putekļiem:</span></dt>
                                  <dd>ip67</dd>
                                  <dt><span>SIM karšu skaits:</span></dt>
                                  <dd>2</dd>
                                  <dt><span>SIM kartes tips:</span></dt>
                                  <dd>Nano SIM</dd>
                                  <dt><span>Krāsa:</span></dt>
                                  <dd>Melna</dd>
                                </dl>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="{{ asset('img/klaviatura.jpg') }}" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
            <div class="card-body">
              <p class="card-text">Klaviatūra Dark Project One KD87A Red Switch (RU)</p>
              <p class="card-text">54.99 €</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a href="{{ url('buy') }}"><button type="button" class="btn btn-sm btn-outline-secondary">Nopirkt</button></a>
                  <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#nopirkt5-modal">Tehniskie Raksturojumi</button>
                  <div class="modal fade" id="nopirkt5-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle5">Kopējie parametri</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">X</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="container">
                            <div class="row">
                              <div class="col">
                                <dl class="product-container">
                                  <dt><span class="stuff">Tastatūras tips:</span></dt>
                                  <dd>Spēļu</dd>
                                  <dt><span>Tastatūras valoda:</span></dt>
                                  <dd>EN, RU (angļu, krievu)</dd>
                                  <dt><span>Plānā tastatūra (Slim):</span></dt>
                                  <dd>Nav</dd>
                                  <dt><span>Pārslēga modelis:</span></dt>
                                  <dd>Gateron Red</dd>
                                  <dt><span>Krāsa:</span></dt>
                                  <dd>Melna</dd>
                                </dl>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="{{ asset('img/ledusskapis.jpg') }}" data-holder-rendered="true" style="height: 225px; width:100px; display: block;">
            <div class="card-body">
              <p class="card-text">Ledusskapis Beko CSA240K30SN</p>
              <p class="card-text">303.76 €</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a href="{{ url('buy') }}"><button type="button" class="btn btn-sm btn-outline-secondary">Nopirkt</button></a>
                  <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#nopirkt6-modal">Tehniskie Raksturojumi</button>
                  <div class="modal fade" id="nopirkt6-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle6">Kopējie parametri</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">X</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="container">
                            <div class="row">
                              <div class="col">
                                <dl class="product-container">
                                  <dt><span class="stuff"><h3>Izmēri:</h3></span></dt>
                                  <dt><span>Izmēri (AxPxDz):</span></dt>
                                  <dd>152,8 x 54,5 x 57,5 cm</dd>
                                  <dt><span><h3>Enerģijas patēriņš:</h3></span></dt>
                                  <dt><span>Energoefektivitātes klase:</span></dt>
                                  <dd>F</dd>
                                  <dt><span>Enerģijas patēriņš:</span></dt>
                                  <dd>264 kWh/ gadā</dd>
                                </dl>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="{{ asset('img/plits.jpg') }}" data-holder-rendered="true" style="height: 225px; width: 150px; display: block;">
            <div class="card-body">
              <p class="card-text">Plīts Beko FSE52320DXD</p>
              <p class="card-text">273.52 €</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a href="{{ url('buy') }}"><button type="button" class="btn btn-sm btn-outline-secondary">Nopirkt</button></a>
                  <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#nopirkt7-modal">Tehniskie Raksturojumi</button>
                  <div class="modal fade" id="nopirkt7-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle7">Kopējie parametri</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">X</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="container">
                            <div class="row">
                              <div class="col">
                                <dl class="product-container">
                                  <dt><h3><span class="stuff">Kopējie raksturojumi:</span></h3></dt>
                                  <dt><span>Tips:</span></dt>
                                  <dd>Gāzes plīts</dd>
                                  <dt><span>Krāsa:</span></dt>
                                  <dd>Nerūsējoša tērauda</dd>
                                  <dt><h3><span>Izmēri:</span></h3></dt>
                                  <dt>Izmēri (AxPxDz):</dt>
                                  <dd>85 x 50 x 60 cm</dd>
                                </dl>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="{{ asset('img/skalruni.jpg') }}" data-holder-rendered="true" style="height: 225px; width: 100%; display: block;">
            <div class="card-body">
              <p class="card-text">Datora skaļruņi Logitech Z623 2.1</p>
              <p class="card-text">173.00 €</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a href="{{ url('buy') }}"><button type="button" class="btn btn-sm btn-outline-secondary">Nopirkt</button></a>
                  <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#nopirkt8-modal">Tehniskie Raksturojumi</button>
                  <div class="modal fade" id="nopirkt8-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle8">Galvanie raksturojumi</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">X</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="container">
                            <div class="row">
                              <div class="col">
                                <dl class="product-container">
                                  <dt><span class="stuff">Skaļruņu tips:</span></dt>
                                  <dd>Stacionārie</dd>
                                  <dt><span>Viedtālruņa modelis:</span></dt>
                                  <dd>Galaxy A33</dd>
                                  <dt><span>Kanālu skaits: </span></dt>
                                  <dd>2.1</dd>
                                  <dt><span>Summārā jauda (RMS):</span></dt>
                                  <dd>200 W</dd>
                                  <dt><span>Priekšējo skaļruņu jauda:</span></dt>
                                  <dd>35 W x 2</dd>
                                  <dt><span>Sabvūfera jauda:</span></dt>
                                  <dd>130 W</dd>
                                  <dt><span>Frekvenču diapazons:</span></dt>
                                  <dd>35 Hz – 20 kHz</dd>
                                  <dt><span>Barošanas tips:</span></dt>
                                  <dd>Tīkls</dd>
                                  <dt><span>Krāsa:</span></dt>
                                  <dd>Melna</dd>
                                </dl>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" src="{{ asset('img/datorspele.jpg') }}" data-holder-rendered="true" style="height: 225px; width: 100px; display: block;">
            <div class="card-body">
              <p class="card-text">Datorpele Trust 24618 GXT 105X Izza Black</p>
              <p class="card-text">13.99 €</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a href="{{ url('buy') }}"><button type="button" class="btn btn-sm btn-outline-secondary">Nopirkt</button></a>
                  <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#nopirkt9-modal">Tehniskie Raksturojumi</button>
                  <div class="modal fade" id="nopirkt9-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLongTitle9">Kopējie parametri</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">X</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <div class="container">
                            <div class="row">
                              <div class="col">
                                <dl class="product-container">
                                  <dt><span class="stuff">Tips:</span></dt>
                                  <dd>Spēļu</dd>
                                  <dt><span>Pogu daudzums:</span></dt>
                                  <dd>6</dd>
                                  <dt><span>Programmējamie taustiņi:</span></dt>
                                  <dd>Nav</dd>
                                  <dt><span>Ritināšanas veids:</span></dt>
                                  <dd>Rullītis</dd>
                                  <dt><span>Horizontālā ritināšana:</span></dt>
                                  <dd>Nav</dd>
                                </dl>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
</body>
</html>
