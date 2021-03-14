@extends('layouts.app')
@section('title', 'Halaman Home')
@section('content')
    <br>
    <div class="jumbotron bg-dark" style="margin-left: 20%; margin-top: 5%;">
        <div style="font-family: arial;" class="text-center">
            <h1 class="display-5 text-light" style=" font-family: arial; font-weight: bold;"><u>Info Seputar Game</u></h1>
            <h5 class="display-5" style="font-family: arial; font-weight: bold; margin: 0px; color: white;">Terbaru</h5>
        </div>
    </div>
<br><br>
    <div class="card bg-dark text-white" style="width: 700px; height: 200px; margin-left: 27%;">
        <div class="card-img-overlay">
            <h2 class="card-title"><u>Mobile Legends</u></h2>
            <p class="card-text">Mobile Legends: Bang Bang adalah sebuah permainan MOBA yang dirancang untuk ponsel. Kedua tim lawan berjuang untuk mencapai dan menghancurkan basis musuh sambil mempertahankan basis mereka sendiri untuk mengendalikan jalan setapak, tiga "jalur" yang dikenal sebagai "top", "middle" dan "bottom", yang menghubungkan basis-basis.</p>
            <img src="{{('img/ml.jpg')}}">
        </div>
    </div>

    <div class="card bg-dark text-white" style="width: 700px; height: 200px; margin-left: 27%; margin-top: 200px;">
        <div class="card-img-overlay">
            <h2 class="card-title"><u>Free Fire</u></h2>
            <p class="card-text">Garena Free Fire atau biasa disebut Free Fire (sering disingkat FF) adalah permainan battle royale yang dikembangkan oleh 111 Dots Studio dan diterbitkan oleh Garena untuk Android dan iOS. Itu menjadi permainan seluler yang paling banyak diunduh secara global pada tahun 2019.</p>
            <img src="{{('img/ff.png')}}">
        </div>
    </div>

    <div class="card bg-dark text-white" style="width: 700px; height: 200px; margin-left: 27%; margin-top: 350px;">
        <div class="card-img-overlay">
            <h2 class="card-title"><u>Pubg Mobile</u></h2>
            <p class="card-text">PlayerUnknown's Battlegrounds (sering disingkat PUBG) adalah sebuah permainan dengan genre battle royale, yang para pemainnya bisa bermain dengan 100 orang sekaligus secara daring.</p>
            <img src="{{('img/pp.png')}}">
        </div>
    </div>
@endsection

@section('js')
    <script>
        console.log('Helo')
    </script>
@endsection
