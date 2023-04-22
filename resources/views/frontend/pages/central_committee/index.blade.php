@extends('frontend.layouts.master')


@section('content')

<div class="container mt-5 mb-5">
    <div class="container">

        <div class="row ">

            <div class=" d-flex justify-content-center">
                <div class="header_about">
                    <img src="{{ asset('frontend/images/logo.png') }}"
                        style="width:120px;padding-top:2px;">
                </div>
                <div class="header_about mt-4 me-2 fw-bold">
                    <h4 class="Thana">Central Committee</h4>
                    <p><span class="Joyouhat">Joypurhat</span> <span class="Enginners">Engineer's
                            Association</span></p>
                </div>
            </div>

            <div class="row justify-content-between Thak_Border_top">
                <small class="col-md-6 text-gray-100 text-dark">
                    Source : jea/k/2023/no-1
                </small>
                <small class="col-md-6 date_Thak text-gray-100 text-dark text-end ">
                    Date : 23th April 2023
                </small>
            </div>
            <div class="row mt-3">
                <p class="text-gray text-bold text-gray-100 text-success text-justify">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. In id obcaecati vitae asperiores est alias
                    minima atque perspiciatis? Esse expedita quam a inventore possimus provident minima asperiores autem
                    maiores. Minima consequatur tempore vel vitae maxime iusto eveniet ipsa consectetur facilis nulla.
                    Nostrum suscipit, placeat quis eligendi impedit voluptatum nulla possimus?
                </p>
            </div>

            <div class="row m-0 d-flex justify-content-center mt-4 p-0 text-center">
                @foreach($presidents as $data)
                    <div class="col-6 col-md-2 mb-2">
                        <div class="central-card ">
                            <img src="{{ asset('frontend/images/jea.jpg') }}"
                                class="central-img p-2 pb-0 mb-0" alt="">
                            <div class=" m-0 p-0 card-body">
                                <h6>{{ $data->name }}</h6>
                                <p class="card-title">{{ $data->member_type }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

                @foreach($secretary as $data)
                    <div class="col-6 col-md-2 mb-2">
                        <div class="central-card ">
                            <img src="{{ asset('frontend/images/jea.jpg') }}"
                                class="central-img p-2 pb-0 mb-0" alt="">
                            <div class=" m-0 p-0 card-body">
                                <h6>{{ $data->name }}</h6>
                                <p class="card-title">{{ $data->member_type }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>


            <div class="row m-0 d-flex justify-content-center p-0 text-center">
                @foreach($vice_presidents as $data)
                    <div class="col-6 col-md-2 mb-2">
                        <div class="central-card ">
                            <img src="{{ asset('frontend/images/jea.jpg') }}"
                                class="central-img p-2 pb-0 mb-0" alt="">
                            <div class=" m-0 p-0 card-body">
                                <h6>{{ $data->name }}</h6>
                                <p class="card-title">{{ $data->member_type }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

                @foreach($asst_secretary as $data)
                    <div class="col-6 col-md-2 mb-2">
                        <div class="central-card ">
                            <img src="{{ asset('frontend/images/jea.jpg') }}"
                                class="central-img p-2 pb-0 mb-0" alt="">
                            <div class=" m-0 p-0 card-body">
                                <h6>{{ $data->name }}</h6>
                                <p class="card-title">{{ $data->member_type }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            <div class="row m-0 p-0 text-center">




                @foreach($joint_secretary as $data)
                    <div class="col-6 col-md-2 mb-2">
                        <div class="central-card ">
                            <img src="{{ asset('frontend/images/jea.jpg') }}"
                                class="central-img p-2 pb-0 mb-0" alt="">
                            <div class=" m-0 p-0 card-body">
                                <h6>{{ $data->name }}</h6>
                                <p class="card-title">{{ $data->member_type }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

                @foreach($org_secretary as $data)
                    <div class="col-6 col-md-2 mb-2">
                        <div class="central-card ">
                            <img src="{{ asset('frontend/images/jea.jpg') }}"
                                class="central-img p-2 pb-0 mb-0" alt="">
                            <div class=" m-0 p-0 card-body">
                                <h6>{{ $data->name }}</h6>
                                <p class="card-title">{{ $data->member_type }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

                @foreach($fin_secretary as $data)
                    <div class="col-6 col-md-2 mb-2">
                        <div class="central-card ">
                            <img src="{{ asset('frontend/images/jea.jpg') }}"
                                class="central-img p-2 pb-0 mb-0" alt="">
                            <div class=" m-0 p-0 card-body">
                                <h6>{{ $data->name }}</h6>
                                <p class="card-title">{{ $data->member_type }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

                @foreach($publ_secretary as $data)
                    <div class="col-6 col-md-2 mb-2">
                        <div class="central-card ">
                            <img src="{{ asset('frontend/images/jea.jpg') }}"
                                class="central-img p-2 pb-0 mb-0" alt="">
                            <div class=" m-0 p-0 card-body">
                                <h6>{{ $data->name }}</h6>
                                <p class="card-title">{{ $data->member_type }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

                @foreach($edu_secretary as $data)
                    <div class="col-6 col-md-2 mb-2">
                        <div class="central-card ">
                            <img src="{{ asset('frontend/images/jea.jpg') }}"
                                class="central-img p-2 pb-0 mb-0" alt="">
                            <div class=" m-0 p-0 card-body">
                                <h6>{{ $data->name }}</h6>
                                <p class="card-title">{{ $data->member_type }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

                @foreach($sport_secretary as $data)
                    <div class="col-6 col-md-2 mb-2">
                        <div class="central-card ">
                            <img src="{{ asset('frontend/images/jea.jpg') }}"
                                class="central-img p-2 pb-0 mb-0" alt="">
                            <div class=" m-0 p-0 card-body">
                                <h6>{{ $data->name }}</h6>
                                <p class="card-title">{{ $data->member_type }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

                @foreach($exicutive_member as $data)
                    <div class="col-6 col-md-2 mb-2">
                        <div class="central-card ">
                            <img src="{{ asset('frontend/images/jea.jpg') }}"
                                class="central-img p-2 pb-0 mb-0" alt="">
                            <div class=" m-0 p-0 card-body">
                                <h6>{{ $data->name }}</h6>
                                <p class="card-title">{{ $data->member_type }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach




            </div>


        </div>


    </div>

</div>


@endsection



