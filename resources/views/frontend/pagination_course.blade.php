
@foreach($courses as $row)

<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img overlay1">
<a href="{{ route('preview',$row->id) }}"><img src="{{ (!empty($row->photo)) ? asset('uploads/'.$row->photo.''):('website_assets/img/gallery/courses1.jpg') }}" alt=""></a>
<div class="img-text">
<span>${{ $row->fess }}</span>
</div>
</div>
<div class="properties-caption">
<h3>
<a href="{{ route('preview',$row->id) }}">@if(session()->get('locale') == 'en') {{ $row->name }} @else {{ $row->ar_name }} @endif</a>
</h3>
<p>@if(session()->get('locale') == 'en') {{ $row->course }} @else {{ $row->ar_course }} @endif </p>
<div class="ratting">
<ul>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><span>4.9 ( @if(session()->get('locale') == 'en') {{ $row->course_period }} @else {{ $row->ar_course_period }} @endif )</span></li>
</ul>
</div>
</div>
</div>
</div>
</div>
@endforeach


<div class="col-lg-12">
            <!-- <div class="small fw-light">search input with icon</div> -->
            
    {!! $courses->links('vendor.pagination.frontcustom') !!}
</div>

