@extends('layouts.app')

@section('content')
<div id="demo" class="carousel slide text-center" data-ride="carousel">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2"></li>
      <li data-target="#demo" data-slide-to="3"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner" style="width: 100%; height: 100%; background-color: gray">
      <div class="carousel-item active">
        <img src="/immagini/cargo-containers-at-port.jpg" style="width: 45%; height: 45%;"  alt="container al porto" width="1200" height="800">
        <p style="color: white; font-size: 40px; position: absolute; left: 50%; transform: translatex(-50%); top: 100px; font-weight: bold;">Gestore del servizio di sdoganamento Container</p>
      </div>
      <div class="carousel-item">
        <img src="/immagini/container2.jpg" style="width: 55%; height: 55%;" alt="Container 2" width="1300" height="800">
        <p style="color: white; font-size: 40px; position: absolute; left: 50%; transform: translatex(-50%); top: 100px; font-weight: bold;">Raggruppo delle voci fattura per sdoganamento</p>
      </div>
      <div class="carousel-item">
        <img src="/immagini/container3.jpg" alt="Container 3" style="width: 76%; height: 76%;" width="1300" height="800">
        <p style="color: white; font-size: 40px; position: absolute; left: 50%; transform: translatex(-50%); top: 100px; font-weight: bold;">Preparazione bollettini di presa in carico e consegna</p>
      </div>
      <div class="carousel-item">
        <img src="/immagini/container4.jpeg" alt="Container 4" style="width: 57%; height: 57%;" width="1300" height="800">
        <p style="color: white; font-size: 40px; position: absolute; left: 50%; transform: translatex(-50%); top: 100px; font-weight: bold;">Preparazione richieste certificati sanitari</p>
        <p style="color: white; font-size: 40px; position: absolute; left: 50%; transform: translatex(-50%); top: 150px; font-weight: bold;">e certificati di conformita</p>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev " href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
@endsection
