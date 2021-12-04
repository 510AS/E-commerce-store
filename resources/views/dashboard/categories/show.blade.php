
@extends('layouts.admin')
@section('content')


    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title"> {{$main_cat->name}} </h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a>
                                </li>
                                <li class="breadcrumb-item active">{{$main_cat->name}}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                  <div class="col">
                    <div class="">
                        <div class="card border-info text-center bg-transparent" style="height: 300.75px;">
                          <div class="card-content">
                            <img src="{{ asset('assets/images/category/' . $main_cat->picture) }}" alt="element 04" width="210" class="float-left mt-3">
                            <div class="card-body pt-3">
                              <h4 class="card-title mt-3">{{$main_cat->name}}</h4>
                              <p class="card-text">Donut toffee candy brownie soufflé macaroon.</p>
                              {{-- <button class="btn btn-info">Buy Now</button> --}}
                            </div>
                          </div>
                        </div>
                    </div>
                  </div>
                  <div class="col">
                    <div class="">
                        <div class="card">
                          <div class="card-content">
                            <div class="card-body sales-growth-chart">
                              <div class="chart-title mb-2">
                                <h1 class="display-4">52%</h1>
                                <span class="text-muted">Sales Growth Rate</span>
                              </div>
                              <div id="sales-growth-chart" class="height-300" style="position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                <svg height="300" version="1.1" width="326.125" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="overflow: hidden; position: relative; left: -0.265625px; top: -0.859375px;">
                                    <desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.2</desc>
                                    <defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs>
                                    <text x="26.173828125" y="261" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#bfbfbf" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal">
                                        <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text>


                                        <path fill="none" stroke="#c3c3c3" d="M38.673828125,261H301.125" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                        <text x="26.173828125" y="213.8" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#bfbfbf" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal">
                                            <tspan dy="3.999996948242199" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">12</tspan></text>


                                            <path fill="none" stroke="#c3c3c3" d="M38.673828125,213.8H301.125" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path>
                                            <text x="26.173828125" y="166.60000000000002" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#bfbfbf" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal">
                                                <tspan dy="3.9999938964843977" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">24</tspan></text>

                                                <path fill="none" stroke="#c3c3c3" d="M38.673828125,166.60000000000002H301.125" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="26.173828125" y="119.4" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#bfbfbf" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal">
                                                <tspan dy="3.9999984741210994" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">36</tspan></text>

                                                <path fill="none" stroke="#c3c3c3" d="M38.673828125,119.4H301.125" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="26.173828125" y="72.20000000000002" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#bfbfbf" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal">
                                                <tspan dy="4.0000030517578296" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">48</tspan></text>

                                                <path fill="none" stroke="#c3c3c3" d="M38.673828125,72.20000000000002H301.125" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="26.173828125" y="25" text-anchor="end" font-family="sans-serif" font-size="12px" stroke="none" fill="#bfbfbf" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal">
                                                <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">60</tspan></text>

                                                <path fill="none" stroke="#c3c3c3" d="M38.673828125,25H301.125" stroke-width="0.5" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><text x="301.125" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#bfbfbf" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                                                <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2016</tspan></text>
                                                <text x="213.68120471531265" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#bfbfbf" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                                                <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2014</tspan></text>
                                                <text x="126.11762340968735" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#bfbfbf" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                                                <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2012</tspan></text>
                                                <text x="38.673828125" y="273.5" text-anchor="middle" font-family="sans-serif" font-size="12px" stroke="none" fill="#bfbfbf" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-family: sans-serif; font-size: 12px; font-weight: normal;" font-weight="normal" transform="matrix(1,0,0,1,0,7)">
                                                <tspan dy="4" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2010</tspan></text>

                                                <path fill="#f9b990" stroke="none" d="M38.673828125,150.86666666666667C49.604302535585916,139.06666666666666,71.46525135675776,107.60000000000002,82.39572576734368,103.66666666666669C93.32620017792959,99.73333333333335,115.18714899910144,123.3279525763794,126.11762340968735,119.4C137.07804432550776,115.46128590971273,158.99888615714855,70.23064295485638,169.95930707296895,72.20000000000002C180.88978148355488,74.16397628818972,202.75073030472672,132.18333333333334,213.68120471531265,135.13333333333333C224.61167912589855,138.08333333333331,246.47262794707038,94.81666666666668,257.4031023576563,95.80000000000001C268.3335767682422,96.78333333333335,290.19452558941407,131.2,301.125,143L301.125,261L38.673828125,261Z" fill-opacity="0.6" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); fill-opacity: 0.6;"></path>
                                                <path fill="none" stroke="#ff9149" d="M38.673828125,150.86666666666667C49.604302535585916,139.06666666666666,71.46525135675776,107.60000000000002,82.39572576734368,103.66666666666669C93.32620017792959,99.73333333333335,115.18714899910144,123.3279525763794,126.11762340968735,119.4C137.07804432550776,115.46128590971273,158.99888615714855,70.23064295485638,169.95930707296895,72.20000000000002C180.88978148355488,74.16397628818972,202.75073030472672,132.18333333333334,213.68120471531265,135.13333333333333C224.61167912589855,138.08333333333331,246.47262794707038,94.81666666666668,257.4031023576563,95.80000000000001C268.3335767682422,96.78333333333335,290.19452558941407,131.2,301.125,143" stroke-width="2" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="38.673828125" cy="150.86666666666667" r="0" fill="#ff9149" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                                <circle cx="82.39572576734368" cy="103.66666666666669" r="0" fill="#ff9149" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                                <circle cx="126.11762340968735" cy="119.4" r="0" fill="#ff9149" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                                <circle cx="169.95930707296895" cy="72.20000000000002" r="0" fill="#ff9149" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                                <circle cx="213.68120471531265" cy="135.13333333333333" r="0" fill="#ff9149" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                                <circle cx="257.4031023576563" cy="95.80000000000001" r="0" fill="#ff9149" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                                <circle cx="301.125" cy="143" r="0" fill="#ff9149" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle>
                                            </svg><div class="morris-hover morris-default-style" style="left: 175.658px; top: 61px; display: none;"><div class="morris-hover-row-label">2014</div><div class="morris-hover-point" style="color: #FF9149">
                                    Sales:
                                    32
                                  </div>
                                </div>
                                </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
            </div>


            <div class="content-body">
                <!-- DOM - jQuery events table -->
                <section id="dom">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Releated Sup Categorys </h4>
                                    <a class="heading-elements-toggle"><i
                                            class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                @include('dashboard.alert.success')
                                @include('dashboard.alert.errors')

                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <table
                                            class="table display nowrap table-striped table-bordered scroll-horizontal">
                                            <thead class="">
                                            <tr>
                                                <th>Name </th>
                                                <th>Active</th>
                                                <th>Picture</th>
                                                <th>Controlle</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @isset($sub_cat)
                                                @foreach($sub_cat as $category)
                                                    <tr>
                                                        <td>{{$category -> name}}</td>
                                                        <td>{{$category -> getActive()}}</td>
                                                        <td> <img style="width: 150px; height: 100px;" src="{{ asset('assets/images/category/sub_cat' . $category->picture) }}"></td>
                                                        <td>
                                                            <div class="btn-group" role="group"aria-label="Basic example">
                                                                <a href="{{route('admin.subcategories.edit',$category -> id)}}"class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">Edit</a>

                                                                <a class="btn btn-outline-info btn-min-width box-shadow-3 mr-1 mb-1" href="{{route('admin.subcategories.show',$category -> id)}}">Show</a>


                                                                <a href="{{route('admin.subcategories.delete',$category -> id)}}"class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">Delete</a>



                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endisset


                                            </tbody>
                                        </table>
                                        <div class="justify-content-center d-flex">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>

    @stop
