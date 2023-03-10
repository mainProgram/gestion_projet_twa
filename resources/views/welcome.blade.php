{{-- @extends('layouts.app')

@section('styles')
    <link href="{{ URL::asset('assets/css/welcome.css')}}" rel="stylesheet">
@stop

@section('content')
    <div class="center">
        <h1>WELCOME</h1>
        <div class="btn">Enter</div>
    </div>
@stop --}}

<html lang="en" >
    <head>
        <meta charset="UTF-8">
        <title>Welcome Page</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
        <link rel="stylesheet" href="{{ URL::asset('assets/css/welcome.css')}}">
    </head>
    <body>
      <div id="hide" class="d-none">
        <nav class="navbar navbar-expand-lg px-5">
            <a class="navbar-brand" href="#">Gestion de projets</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="/">Accueil</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{route('projets.index')}}">Projets</a>
                </li>
              </ul>
            </div>
        </nav>
        <main class="container h-100">
            <h1 class="display-1 text-center" style="margin-top: 20%">Bienvenue !</h1>
            <a href="{{ route('projets.index')}} " class="mt-5 btn btn-outline-dark">Voir les projets</button>
        </main>
      </div>
        <!-- partial:index.partial.html -->
        <div class="background background0"></div>
        <div class="background background1"></div>
        <div class="background background2"></div>
        <div class="background background3"></div>
        <div class="background background4"></div>
        <div class="background background5"></div>
        <div class="background background6"></div>
        <div class="background background7"></div>
        <div class="criterion">
        <div class="text text0">F</div>
        <div class="text text1">A</div>
        <div class="text text2">Z</div>
        <div class="text text3">E</div>
        <div class="text text4">Y</div>
        <div class="text text5">N</div>
        <div class="text text6">A</div>
        <div class="text text7">: )</div>
        <div class="frame frame0"></div>
        <div class="frame frame1"></div>
        <div class="frame frame2"></div>
        <div class="frame frame3"></div>
        <div class="frame frame4"></div>
        <div class="frame frame5"></div>
        <div class="frame frame6"></div>
        <div class="frame frame7"></div>
        <div class="particle particle00"></div>
        <div class="particle particle01"></div>
        <div class="particle particle02"></div>
        <div class="particle particle03"></div>
        <div class="particle particle04"></div>
        <div class="particle particle05"></div>
        <div class="particle particle06"></div>
        <div class="particle particle07"></div>
        <div class="particle particle08"></div>
        <div class="particle particle09"></div>
        <div class="particle particle010"></div>
        <div class="particle particle011"></div>
        <div class="particle particle10"></div>
        <div class="particle particle11"></div>
        <div class="particle particle12"></div>
        <div class="particle particle13"></div>
        <div class="particle particle14"></div>
        <div class="particle particle15"></div>
        <div class="particle particle16"></div>
        <div class="particle particle17"></div>
        <div class="particle particle18"></div>
        <div class="particle particle19"></div>
        <div class="particle particle110"></div>
        <div class="particle particle111"></div>
        <div class="particle particle20"></div>
        <div class="particle particle21"></div>
        <div class="particle particle22"></div>
        <div class="particle particle23"></div>
        <div class="particle particle24"></div>
        <div class="particle particle25"></div>
        <div class="particle particle26"></div>
        <div class="particle particle27"></div>
        <div class="particle particle28"></div>
        <div class="particle particle29"></div>
        <div class="particle particle210"></div>
        <div class="particle particle211"></div>
        <div class="particle particle30"></div>
        <div class="particle particle31"></div>
        <div class="particle particle32"></div>
        <div class="particle particle33"></div>
        <div class="particle particle34"></div>
        <div class="particle particle35"></div>
        <div class="particle particle36"></div>
        <div class="particle particle37"></div>
        <div class="particle particle38"></div>
        <div class="particle particle39"></div>
        <div class="particle particle310"></div>
        <div class="particle particle311"></div>
        <div class="particle particle40"></div>
        <div class="particle particle41"></div>
        <div class="particle particle42"></div>
        <div class="particle particle43"></div>
        <div class="particle particle44"></div>
        <div class="particle particle45"></div>
        <div class="particle particle46"></div>
        <div class="particle particle47"></div>
        <div class="particle particle48"></div>
        <div class="particle particle49"></div>
        <div class="particle particle410"></div>
        <div class="particle particle411"></div>
        <div class="particle particle50"></div>
        <div class="particle particle51"></div>
        <div class="particle particle52"></div>
        <div class="particle particle53"></div>
        <div class="particle particle54"></div>
        <div class="particle particle55"></div>
        <div class="particle particle56"></div>
        <div class="particle particle57"></div>
        <div class="particle particle58"></div>
        <div class="particle particle59"></div>
        <div class="particle particle510"></div>
        <div class="particle particle511"></div>
        <div class="particle particle60"></div>
        <div class="particle particle61"></div>
        <div class="particle particle62"></div>
        <div class="particle particle63"></div>
        <div class="particle particle64"></div>
        <div class="particle particle65"></div>
        <div class="particle particle66"></div>
        <div class="particle particle67"></div>
        <div class="particle particle68"></div>
        <div class="particle particle69"></div>
        <div class="particle particle610"></div>
        <div class="particle particle611"></div>
        <div class="particle particle70"></div>
        <div class="particle particle71"></div>
        <div class="particle particle72"></div>
        <div class="particle particle73"></div>
        <div class="particle particle74"></div>
        <div class="particle particle75"></div>
        <div class="particle particle76"></div>
        <div class="particle particle77"></div>
        <div class="particle particle78"></div>
        <div class="particle particle79"></div>
        <div class="particle particle710"></div>
        <div class="particle particle711"></div>
        </div>
   
    </body>
    <script>
      setTimeout(() => {
        document.getElementById("hide").classList.remove("d-none");
      }, "5000")
    </script>
</html>
