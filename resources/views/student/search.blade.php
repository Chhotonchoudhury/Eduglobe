
                                   @foreach($courses as $row)
                                        <div class="col-md-12 widget">                          
                                            <div class="single-result row">
                                                <div class="col-md-6 d-flex">
                                                    <div class="image-container mr-3">
                                                        <img src="{{ asset('uploads/'.$row->photo.'') }}" class="avatar-md " />
                                                    </div>
                                                    <div class="info-container">
                                                        <h6>
                                                            <a href="#" class="text-primary strong">{{ $row->name }}</a>
                                                        </h6>
                                                        <p class="text-muted font-12">{{ $row->course }}</p>
                                                        <p class="font-13">Degree : {{ $row->course_degree }}</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="d-flex align-items-center mb-3">
                                                        <i class="lar la-clock font-20 mr-2 txet-muted"></i>
                                                        <a>{{ $row->starting_date }}</a>
                                                    </div>
                                                    <div class="d-flex align-items-center mb-3">
                                                        <i class="lar la-file-alt font-20 mr-2 txet-muted"></i>
                                                        <a>{{ $row->category->name }}</a>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <i class="lar la-clock font-20 mr-2 txet-muted"></i>
                                                        <a>{{ $row->course_period }}</a>
                                                    </div>
                                                </div>
                                                <div class="col-md-2 star-area">
                                                    <div class="d-flex align-items-center mb-3">
                                                        <i class="las la-university font-20 mr-2 txet-muted"></i>
                                                        <a>{{ $row->university->name }}</a>
                                                    </div>

                                                    <div class="d-flex align-items-center mb-3">
                                                    
                                                        <i class="las la-graduation-cap font-20 mr-2 txet-muted"></i>
                                                        <a>{{ $row->course_degree}}</a>
                                                    </div>

                                                    
                                                    <div class="d-flex align-items-center">
                                                        <i class="las la-star text-warning font-20"></i>
                                                        <i class="las la-star text-warning font-20"></i>
                                                        <i class="las la-star text-warning font-20"></i>
                                                        <i class="las la-star text-warning font-20"></i>
                                                        <i class="lar la-star text-warning font-20"></i>
                                                    </div>
                                                    
                                                </div>
                                                <div class="col-md-2 buy-now-area">
                                                    <p>
                                                        <a class="text-muted font-17"><del>{{ $row->fess+500 }}</del></a>
                                                        <a class="text-success-teal strong font-20 ml-2">{{ $row->fess}}</a>
                                                    </p>
                                                    <a href="{{ route('s_course_view',$row->id) }}" class="btn btn-primary bg-gradient-primary">View Now</a>
                                                </div>
                                            </div>
                                        </div>&nbsp;
                                      @endforeach
                                    <div class="pagination p13 text-center w-100 mt-4">
                                    {!! $courses->links('vendor.pagination.custom') !!}
                                    </div>
                             