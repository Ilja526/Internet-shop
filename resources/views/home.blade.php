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
                <li><a href="#" class="nav-link px-2 text-white">Pasūtiet</a></li>
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
                <h2>Portatīvais dators Asus</h2>
                <p>Asus X515FA-EJ181W laptopa operatīvā atmiņa ir vienāda ar 8 GB. Šāds apjoms ir ideāli piemērots, ja Jūsu dators ir neaizvietojams palīgs darbā, kuru Jūs lietojat maksimāli, noslogojot paralēli ar vairākiem jaudīgiem uzdevumiem, apstrādājat uz tā fotoattēlus un video, turklāt Jums patīk spēlēt spēles.</p>
                <p><a class="btn btn-secondary" href="{{ url('ware') }}" role="button">View details &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <img class="rounded-circle" src="{{ asset('img/plits.jpg') }}" alt="Generic placeholder image" width="140" height="140">
                <h2>Plīts Beko FSE52320DXD</h2>
                <p>Ja Jūs esat klasiskā stila cienītājs, turklāt Jūsu mājoklim ir gāzes pieslēgums, Jums noteikti patiks Beko FSE52320DXD gāzes plīts! Šī plīts virsma ir ērta un vienkārša lietošanā un arī kopšanā, kā arī tā ir tiešām ekonomiska.</p>
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
                <h2 class="featurette-heading">Planšetdators Samsung Galaxy</h2>
                <p class="lead">Samsung Galaxy Tab A8 planšete ar 10,5" ekrānu un 1920 x 1200 izšķirtspēju ir lieliski piemērots, lai to lietotu kā mājas datoru darbam vai atpūtai, ja pie tā pieslēdz klaviatūru un peli. Turklāt, Samsung Galaxy Tab A8 planšetdators garantē krāsainu un detalizētu attēlu lieliskā kvalitātē, kas tiek panākts ar maigo grafiku, košām krāsām un skaidrību.</p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image" src="{{ asset('img/planšets.jpg') }}">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Klaviatūra Dark Project One</h2>
                <p class="lead">Ledusskapis Beko CSA240K30SN - neaizstājama ierīce mājā mazai ģimenei vai vienam cilvēkam. Ar to jūs varat ilgu laiku veidot svaigāko un garšīgāko augļu un garšaugu krājumus un tādējādi izglābties no nevajadzīgas pārtikas iepirkšanās. Ledusskapim Beko CSA240K30SN ir ietilpīga un kompakta saldētava, kas atrodas tā apakšējā pusē, kurā ir tik ērti uzglabāt saldētus dārzeņus, ogas un citus sagataves.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image" src="{{ asset('img/ledusskapis.jpg') }}">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Mobilais telefons Samsung A336B Galaxy A33 5G</h2>
                <p class="lead">Divas SIM kartes Ar Samsung A325F Galaxy A32 varat izmantot divus tālruņa numurus vienlaikus, jo tam ir divi SIM karšu sloti. Sadaliet kontaktpersonas 2 grupās vai vienkārši atbrīvojieties no nepieciešamības nēsāt līdzi divus mobilos tālruņus.</p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image" src="{{ asset('img/telefons.jpg') }}">
            </div>
        </div>
        <hr class="featurette-divider">
    </div>
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h1 class="display-4">Unikālos piedāvājumus</h1>
        <p class="lead">Šeit jūs varat arī iegādāties mūsu unikālos piedāvājumus par papildu samaksu.</p>
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
