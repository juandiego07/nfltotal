@extends('layouts.app')

@section('title', 'Registro')

@section('navbar')

    @include('layouts.menu')

@endsection

@section('main')

    <div class="row vh-100 mt-5">
        <div class="d-flex justify-content-center align-items-center">
            <div class="card">
                <div class="card-header d-flex justify-content-center">
                    <img src="{{ asset('icons/register.svg') }}" alt="login">
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nombre y apellido</label>
                            <input type="text" class="form-control" name="name" id="name" required autofocus>
                        </div>

                        <div class="mb-3">
                            <label for="favorite_team" class="form-label">Equipo favorito</label>
                            <select class="form-select" aria-label="Default select example" name="favorite_team" id="favorite_team" required>
                                <option selected>Elija un equipo</option>
                                <option value="1">49ers</option>
                                <option value="2">Bears</option>
                                <option value="3">Bengals</option>
                                <option value="4">Bills</option>
                                <option value="5">Broncos</option>
                                <option value="6">Buccanners</option>
                                <option value="7">Browns</option>
                                <option value="8">Cardinals</option>
                                <option value="9">Chargers</option>
                                <option value="10">Chiefs</option>
                                <option value="11">Colts</option>
                                <option value="12">Commanders</option>
                                <option value="13">Cowboys</option>
                                <option value="14">Dolphins</option>
                                <option value="15">Eagles</option>
                                <option value="16">Falcons</option>
                                <option value="17">Giants</option>
                                <option value="18">Jaguars</option>
                                <option value="19">Jets</option>
                                <option value="20">Lions</option>
                                <option value="21">Packers</option>
                                <option value="22">Panthers</option>
                                <option value="23">Patriots</option>
                                <option value="24">Raiders</option>
                                <option value="25">Rams</option>
                                <option value="26">Ravens</option>
                                <option value="27">Saints</option>
                                <option value="28">Seahawks</option>
                                <option value="29">Steelers</option>
                                <option value="30">Texans</option>
                                <option value="31">Titans</option>
                                <option value="32">Vikings</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Usuario</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Constraseña</label>
                            <input type="password" class="form-control" name="password" id="password" required>
                        </div>
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Confirmación</label>
                            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" required>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-dark form-control" type="submit">Registrarse</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
