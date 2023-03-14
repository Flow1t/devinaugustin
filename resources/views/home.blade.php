@extends('layout')

@section('title', 'Home')

@section('content')
    <div class="flex flex-col justify-center items-center fullScreen">
        <div class="logo">
            <img src="{{ asset('/images/logo/WebProgLogo.png') }}" alt="WebProgLogo" class="mx-auto">
        </div>

        <br>

        <div class="font-bold font-poppins text-6xl" style="font-size: 50pt;">
            WELCOME
        </div>

        <br><br>

        <div class="font-bold font-poppins profile-button" style="font-size: 12pt;">
            <a href="/profiles/ariel-sefrian">PROFILES</a>
        </div>

        <div class="profiles-container flex flex-col justify-center items-center mt-12">
            <div class="font-bold font-poppins profiles" style="font-size: 12pt; display: flex; flex-direction: column; align-items: center;">
                @foreach(['devin-augustin', 'ariel-sefrian', 'rico-tokanto'] as $profile)
                    @switch($profile)
                        @case('devin-augustin')
                            <div class="profile-link">
                                <a href="/profiles/{{$profile}}">{{ ucfirst(str_replace('-', ' ', $profile)) }}</a>
                            </div>
                            @break
                        @case('ariel-sefrian')
                            <div class="profile-link">
                                <a href="/profiles/{{$profile}}">{{ ucfirst(str_replace('-', ' ', $profile)) }}</a>
                            </div>
                            @break
                        @case('rico-tokanto')
                            <div class="profile-link">
                                <a href="/profiles/{{$profile}}">{{ ucfirst(str_replace('-', ' ', $profile)) }}</a>
                            </div>
                            @break
                        @default
                            <div class="profile-link">
                                Profile not found
                            </div>
                    @endswitch
                @endforeach
            </div>
        </div>
        
    </div>
@endsection
