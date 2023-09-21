@extends('layouts.base')
@section('content')

<div class="widget-content widget-content-area">
                                    <div class="row w-100"> 
                                        <div class="col-xl-8 col-lg-8 col-md-8 company-detail-container mt-5">
                                            <div class="d-flex align-items-start">
                                                <img width="300" class="rounded-circle avatar-xl img-thumbnail" src="{{ (!empty($adminData->profile)) ? asset('uploads/'.$adminData->profile): asset('assets/assets/img/NoProfile.png')  }}" alt="avatar">
                                                <div class="company-info">
                                                    <p class="name mb-1">{{ $adminData->name }}</p>
                                                    
                                                    <p class="text-muted font-12 mb-1">&nbsp;<i class="las la-envelope font-15"></i>{{ $adminData->email  }}</p>
                                                    <p class="text-muted font-12 mb-1">&nbsp;<i class="las la-phone font-15"></i>{{ $adminData->number  }}</p>
                                                    <p>Email : {{ $adminData->email  }}</p>
                                                    <p>Phone : {{ $adminData->number  }}</p>
                                                    <p>Created Time : {{ $adminData->created_at  }}</p>
                                                    
                                                        <a href="{{route('edite.profile')}}" class="btn btn-sm btn-outline-dark mr-2">Update Now</a>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-4 company-detail-container mt-5">
                                        <img class="rounded me-2" alt="200x200" width="200" src="{{ (!empty($adminData->profile)) ? asset('uploads/'.$adminData->profile): asset('assets/assets/img/NoProfile.png')  }}" data-holder-rendered="true"></div>
                                            <!-- <div class="company-info-right">
                                                <p>Total Degrees : <a class="badge badge-primary text-light">10</a></p>
                                                <p>Total Students : <a class="badge badge-primary text-light">17</a></p>
                                                <p>Total Courses : <a class="badge badge-primary text-light">20</a></p>
                                                
                                            </div> -->
                                        </div>
                                    </div>
                               </div>

       <!-- start page title -->
  
@endsection