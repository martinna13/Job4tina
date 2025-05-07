@extends('layouts.app')

@section('title', 'About - MyApp')

@section ('content')
<style>
    .indent {
        text-indent: 30px;
    }
</style>

<div class="card">
    <div class="card-header">
        <center>Tentang Saya</center>
    </div>
    <div class="card body">
        <h5 class="text-center">Perjalanan Saya</h5>
        <br>

        <P class="indent">Kisah perempuan yang hidupnya penuh air mata entah ujian dari keluarga, pertemanan, pendidikan, atau percintaannya.
        Sungguh hidupnya tak pernah beruntung dalam segala hal, tetapi dibalik kesedihannya dia bisa membuat orang di sekitarnya mengira dia akan baik baik saja,
        padahal kehidupannya sangat berantakan.</P>

        <p class="indent">Aku tidak menyesali apa yang sudah ditakdirkan dalam hidupku, karena tanpa kisah itu,
        aku tidak akan mengenal apa itu arti dari sebuah kesabaran, keikhlasan, dan kesabaran.</p>
        
        <p class="indent">Kemanapun alur cerita hidupmu tetaplah menjadi manusia bahagia, tetaplah tersenyum sebagaimana mestinya,
        tetaplah tertawa dikala gaduhnya isi kepala, dan tetaplah menjadi diri sendiri disaat banyaknya pilihan yang harus membuat mu menjadi orang lain.</p>

    </div>
    <div class="mb-5">
        <h5 class="text-center">Hubungi Saya</h5>
        <p class="text-center">

        </p>
        <div class="text-center">
            <a href="{{ route('contact')}}"class="btn btn-primary btn-lg">Hubungi Kami</a>
        </div>
    </div>
</div>
@endsection