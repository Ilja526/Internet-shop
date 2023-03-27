<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

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
                            <li><a href="{{ url('admin') }}" class="nav-link px-2 text-white">Admin</a></li>
                            <li><a href="#" class="nav-link px-2 text-white">Par mums</a></li>
                        </ul>
                        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                            <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
                        </form>

                        <div class="hidden sm:flex sm:items-center sm:ml-6">
                            <x-dropdown align="right" width="48">
                                <x-slot name="trigger">
                                    <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                        <div>{{ Auth::user()->name }}</div>

                                        <div class="ml-1">
                                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </button>
                                </x-slot>

                                <x-slot name="content">
                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf

                                        <x-dropdown-link :href="route('logout')"
                                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </x-slot>
                            </x-dropdown>
                        </div>
                        <div class="-mr-2 flex items-center sm:hidden">
                            <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                    <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
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
                                <button type="button" class="btn btn-lg btn-block btn-outline-primary" data-toggle="modal" data-target="#signup-modal">Sign up for free</button>
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
        </div>
    </body>
</html>
