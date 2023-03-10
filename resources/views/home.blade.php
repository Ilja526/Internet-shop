<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LatvijaGrozs.lv</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <script defer src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="{{ asset('js/jquery-slim.min.js') }}"><\/script>')</script>
    <script defer src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script defer src="{{ asset('js/popper.min.js') }}"></script>
    <script defer src="{{ asset('js/popper.min.js') }}"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8588635311388465" crossorigin="anonymous"></script>
</head>
<body>
<header class="p-3 bg-dark">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
            </a>
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="{{ url('/') }}" class="nav-link px-2 text-secondary">Galvena</a></li>
                <li><a href="{{ url('grozs') }}" class="nav-link px-2 text-white">Grozs</a></li>
                <li><a href="{{ url('ware') }}" class="nav-link px-2 text-white">Preces</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Pas??tiet</a></li>
                <li><a href="#" class="nav-link px-2 text-white">Par mums</a></li>
            </ul>
            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
            </form>
            <div class="text-end">
                <a href="{{ route('login') }}"><button type="button" class="btn btn-outline-light me-2" data-toggle="modal" data-target="#singin">Sing in</button></a>
                <a href="{{ route('register') }}"><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#signup-modal">Sign up</button></a>
            </div>
        </div>
    </div>
</header>
<main role="main">
    <hr class="featurette-divider">
    <div class="container marketing">

        <div class="row">
            <div class="col-lg-4">
                <img class="rounded-circle" src="{{ asset('img/dators.jpg') }}" alt="Generic placeholder image" width="140" height="140">
                <h2>Portat??vais dators Asus</h2>
                <p>Asus X515FA-EJ181W laptopa operat??v?? atmi??a ir vien??da ar 8 GB. ????ds apjoms ir ide??li piem??rots, ja J??su dators ir neaizvietojams pal??gs darb??, kuru J??s lietojat maksim??li, noslogojot paral??li ar vair??kiem jaud??giem uzdevumiem, apstr??d??jat uz t?? fotoatt??lus un video, turkl??t Jums pat??k sp??l??t sp??les.</p>
                <p><a class="btn btn-secondary" href="{{ url('ware') }}" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <img class="rounded-circle" src="{{ asset('img/plits.jpg') }}" alt="Generic placeholder image" width="140" height="140">
                <h2>Pl??ts Beko FSE52320DXD</h2>
                <p>Ja J??s esat klasisk?? stila cien??t??js, turkl??t J??su m??joklim ir g??zes piesl??gums, Jums noteikti patiks Beko FSE52320DXD g??zes pl??ts! ???? pl??ts virsma ir ??rta un vienk??r??a lieto??an?? un ar?? kop??an??, k?? ar?? t?? ir tie????m ekonomiska.</p>
                <p><a class="btn btn-secondary" href="{{ url('ware') }}" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <img class="rounded-circle" src="{{ asset('img/datorspele.jpg') }}" alt="Generic placeholder image" width="140" height="140">
                <h2>Datorpele Trust 24618 GXT 105X </h2>
                <p></p>
                <p><a class="btn btn-secondary" href="{{ url('ware') }}" role="button">View details &raquo;</a></p>
            </div>
        </div>
        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Plan??etdators Samsung Galaxy</h2>
                <p class="lead">Samsung Galaxy Tab A8 plan??ete ar 10,5" ekr??nu un 1920 x 1200 iz????irtsp??ju ir lieliski piem??rots, lai to lietotu k?? m??jas datoru darbam vai atp??tai, ja pie t?? piesl??dz klaviat??ru un peli. Turkl??t, Samsung Galaxy Tab A8 plan??etdators garant?? kr??sainu un detaliz??tu att??lu lielisk?? kvalit??t??, kas tiek pan??kts ar maigo grafiku, ko????m kr??s??m un skaidr??bu.</p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image" src="{{ asset('img/plan??ets.jpg') }}">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Klaviat??ra Dark Project One</h2>
                <p class="lead">Ledusskapis Beko CSA240K30SN - neaizst??jama ier??ce m??j?? mazai ??imenei vai vienam cilv??kam. Ar to j??s varat ilgu laiku veidot svaig??ko un gar????g??ko aug??u un gar??augu kr??jumus un t??d??j??di izgl??bties no nevajadz??gas p??rtikas iepirk??an??s. Ledusskapim Beko CSA240K30SN ir ietilp??ga un kompakta sald??tava, kas atrodas t?? apak????j?? pus??, kur?? ir tik ??rti uzglab??t sald??tus d??rze??us, ogas un citus sagataves.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image" src="{{ asset('img/ledusskapis.jpg') }}">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Mobilais telefons Samsung A336B Galaxy A33 5G</h2>
                <p class="lead">Divas SIM kartes Ar Samsung A325F Galaxy A32 varat izmantot divus t??lru??a numurus vienlaikus, jo tam ir divi SIM kar??u sloti. Sadaliet kontaktpersonas 2 grup??s vai vienk??r??i atbr??vojieties no nepiecie??am??bas n??s??t l??dzi divus mobilos t??lru??us.</p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image" src="{{ asset('img/telefons.jpg') }}">
            </div>
        </div>
        <hr class="featurette-divider">
    </div>
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Unik??los pied??v??jumus</h1>
        <p class="lead">??eit j??s varat ar?? ieg??d??ties m??su unik??los pied??v??jumus par papildu samaksu.</p>
    </div>

    <div class="container">
        <div class="card-deck mb-3 text-center">
            <div class="card mb-4 box-shadow">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Free</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">$0 <small class="text-muted">/ mo</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>10 users included</li>
                        <li>2 GB of storage</li>
                        <li>Email support</li>
                        <li>Help center access</li>
                    </ul>
                    <a href="{{ route('login') }}"><button type="button" class="btn btn-lg btn-block btn-outline-primary" data-toggle="modal" data-target="#signup-modal">Sign up for free</button></a>
                </div>
            </div>
            <div class="card mb-4 box-shadow">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Pro</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">$15 <small class="text-muted">/ mo</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>20 users included</li>
                        <li>10 GB of storage</li>
                        <li>Priority email support</li>
                        <li>Help center access</li>
                    </ul>
                    <button type="button" class="btn btn-lg btn-block btn-primary">Get started</button>
                </div>
            </div>
            <div class="card mb-4 box-shadow">
                <div class="card-header">
                    <h4 class="my-0 font-weight-normal">Enterprise</h4>
                </div>
                <div class="card-body">
                    <h1 class="card-title pricing-card-title">$29 <small class="text-muted">/ mo</small></h1>
                    <ul class="list-unstyled mt-3 mb-4">
                        <li>30 users included</li>
                        <li>15 GB of storage</li>
                        <li>Phone and email support</li>
                        <li>Help center access</li>
                    </ul>
                    <button type="button" class="btn btn-lg btn-block btn-primary">Contact us</button>
                </div>
            </div>
        </div>
    </div>
</main>
</body>
</html>
