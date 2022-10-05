@extends('layouts.app')

@section('title', 'Teams')

@section('navbar')

    @include('layouts.menu')

@endsection

@section('main')
    <div class="row row-cols-1 row-cols-md-3 g-4 my-5">
        @foreach ($teams as $team)
            <div class="col-12 col-md-6 col-xl-4">
                <div class="card h-100">
                    <div class="card-header bg-dark card-teams">
                        <img src="{{ asset('img/' . $team['img']) }}" class="card-img-top" alt="picture">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $team['name'] }}</h5>
                        <div class="row">
                            <div class="col-4">
                                <ul>
                                    <li>Week1: 99</li>
                                    <li>Week2: 99</li>
                                    <li>Week3: 99</li>
                                </ul>
                            </div>
                            <div class="col-4">
                                <ul>
                                    <li>Week4: 99</li>
                                    <li>Week5: 99</li>
                                    <li>Week6: 99</li>
                                </ul>
                            </div>
                            <div class="col-4">
                                <ul>
                                    <li>Week7: 99</li>
                                    <li>Week8: 99</li>
                                    <li>Week9: 99</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

{{--         <div class="col-12 col-md-6 col-xl-4">
            <div class="card h-100">
                <img src="{{ asset('img/logonfl.svg') }}" class="card-img-top"
                    alt="picture2">
                <div class="card-body">
                    <h5 class="card-title">MR. NO</h5>
                    <div class="row">
                        <div class="col-4">
                            <ul>
                                <li>Week1: 99</li>
                                <li>Week2: 99</li>
                                <li>Week3: 99</li>
                            </ul>
                        </div>
                        <div class="col-4">
                            <ul>
                                <li>Week4: 99</li>
                                <li>Week5: 99</li>
                                <li>Week6: 99</li>
                            </ul>
                        </div>
                        <div class="col-4">
                            <ul>
                                <li>Week7: 99</li>
                                <li>Week8: 99</li>
                                <li>Week9: 99</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-4">
            <div class="card h-100">
                <img src="{{ asset('img/logonfl.svg') }}"
                    class="card-img-top" alt="picture3">
                <div class="card-body">
                    <h5 class="card-title">ARRIESGADO</h5>
                    <div class="row">
                        <div class="col-4">
                            <ul>
                                <li>Week1: 99</li>
                                <li>Week2: 99</li>
                                <li>Week3: 99</li>
                            </ul>
                        </div>
                        <div class="col-4">
                            <ul>
                                <li>Week4: 99</li>
                                <li>Week5: 99</li>
                                <li>Week6: 99</li>
                            </ul>
                        </div>
                        <div class="col-4">
                            <ul>
                                <li>Week7: 99</li>
                                <li>Week8: 99</li>
                                <li>Week9: 99</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-4">
            <div class="card h-100">
                <img src="{{ asset('img/logonfl.svg') }}" class="card-img-top"
                    alt="picture4">
                <div class="card-body">
                    <h5 class="card-title">NERELO30</h5>
                    <div class="row">
                        <div class="col-4">
                            <ul>
                                <li>Week1: 99</li>
                                <li>Week2: 99</li>
                                <li>Week3: 99</li>
                            </ul>
                        </div>
                        <div class="col-4">
                            <ul>
                                <li>Week4: 99</li>
                                <li>Week5: 99</li>
                                <li>Week6: 99</li>
                            </ul>
                        </div>
                        <div class="col-4">
                            <ul>
                                <li>Week7: 99</li>
                                <li>Week8: 99</li>
                                <li>Week9: 99</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-4">
            <div class="card h-100">
                <img src="{{ asset('img/logonfl.svg') }}"
                    class="card-img-top" alt="picture5">
                <div class="card-body">
                    <h5 class="card-title">MAESTRO</h5>
                    <div class="row">
                        <div class="col-4">
                            <ul>
                                <li>Week1: 99</li>
                                <li>Week2: 99</li>
                                <li>Week3: 99</li>
                            </ul>
                        </div>
                        <div class="col-4">
                            <ul>
                                <li>Week4: 99</li>
                                <li>Week5: 99</li>
                                <li>Week6: 99</li>
                            </ul>
                        </div>
                        <div class="col-4">
                            <ul>
                                <li>Week7: 99</li>
                                <li>Week8: 99</li>
                                <li>Week9: 99</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-4">
            <div class="card h-100">
                <img src="{{ asset('img/logonfl.svg') }}" class="card-img-top"
                    alt="picture6">
                <div class="card-body">
                    <h5 class="card-title">MALVADIN4K</h5>
                    <div class="row">
                        <div class="col-4">
                            <ul>
                                <li>Week1: 99</li>
                                <li>Week2: 99</li>
                                <li>Week3: 99</li>
                            </ul>
                        </div>
                        <div class="col-4">
                            <ul>
                                <li>Week4: 99</li>
                                <li>Week5: 99</li>
                                <li>Week6: 99</li>
                            </ul>
                        </div>
                        <div class="col-4">
                            <ul>
                                <li>Week7: 99</li>
                                <li>Week8: 99</li>
                                <li>Week9: 99</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
