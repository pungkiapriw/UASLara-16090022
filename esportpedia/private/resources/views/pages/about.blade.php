@extends('frontend/template')

@section('main')
<div id="about">
        <div class="vizew-breadcrumb">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{url('/')}}"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">About</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
<h2 style="position: relative;left:10%;">Profil</h2>
<p style="position:relative;left:10%">Nama : Pungky Apri Wibowo.
<br>    NIM : 16090022.
<br>    Kelas : 6c.
<br><br>
<p style="position:relative;left:10%"> Esportpedia adalah media esports dan broadcasting company pertama di Indonesia. Tidak hanya dikenal dari website dan broadcast yang kamu bisa lihat di YouTube, 
<br>    Esportpedia juga menyediakan wadah bagi kamu yang ingin memulai karir di dunia esports khususnya sebagai pemain.
</p>
<p style="position: relative;left:10%;">Program Sarjana Terapan Teknik Informatika Politeknik Harapan Bersama Tegal.
</p>
</div>
@stop

@section('footer')
<div id="footer">
    <p>&copy; 2019 | Framework Programming Poltek Tegal</p>
</div>
@stop
