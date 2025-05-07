@extends('layouts.app')

@section('title', 'Profile Pengguna')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        <h1>Profil Pengguna</h1>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <img src="{{ asset('image/' .$profile['profile_picture']) }}" alt="Profile Picture" class="rounded-circle mb3 animated-profile" width="150">
                            </div>
                            <div class="col-md-8">
                            <h3>{{ $profile['name'] }}</h3>
                            <p>Email: <a href="mailto:{{ $profile['email'] }}">{{ $profile['email'] }}</a></p>
                            <p><em>"{{ $profile['bio'] }}"</em></p>
                        </div>
                    </div>

                    @if(!empty($profile['skills']))
                    <h5 class="mt-4">Skills:</h5>
                    <div class="d-flex flex-wrap">
                        @foreach($profile['skills'] as $skills)
                        <span class="badge bg-primary m-1 p-2">{{ $skill }}</span>
                        @endforeach
                    </div>
                    @endif

                    @if(!empty($profile['hobbies']))
                    <h5 class="mt-4">Hobi:</h5>
                    <p>{{ implode(',', $profile['hobbies']) }}</p>
                    @endif

                    @if(!empty($profile['social_media']))
                    <h5 class="mt-4">Sosial Media:</h5>
                    <div class="d-flex flex-wrap">
                        @foreach($profile['sosial_media'] as $platform => $link)
                        <a class="{{ $link }}" target="_blank" class="btn btn-sm btn-dark m-1">{{ $platform }}</a>
                        @endforeach
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .animated-profile {
    transition: transform 0.5s ease-in-out;
    border: 5px solid white; /*Tambahkan border */
    box-shadow: 0 0 10px rgba(0, 0, 0,.2); /*Tambahkan bayangan */
}






                <img src="{{ asset('image/' . $profile['profile_picture']) }}" alt="Profile Picture" width="150">
            @endif

            <h3>{{ $profile['name'] ?? 'Name tidak tersedia' }}</h3>
            <p>Email: {{ $profile['email'] ?? 'Email tidak tersedia' }}</p>
            <p>Bio: {{ $profile['bio'] ?? 'Tidak ada bio yang ditampilkan' }}</p>

            @if(!empty($profile['skills']) && count($profile['skills']) > 0)
                <h3>Skills</h3>
                <ul>
                    @foreach($profile['skills'] as $skills)
                        <li>{{ $skills }}</li>
                    @endforeach
                </ul>
            @else
                <p class="text-muted">Tidak ada skill yang ditampilkan</p>
            @endif
        </div>
    </div>
@endsection