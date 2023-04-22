@foreach($vice_presidents as $vice_pre)


<div class="col-md-6 mb-3">
    <div class="row bg-info">
        <div class="col-md-5">
            <img src="{{ asset( $vice_pre->image )}}" alt="">
        </div>
        <div class="col-md-7 card">
                
            <h4 class="font-bold">Vice Presid<span>ent</span></h4>
            <h5 class="card-title text-dark ts m-0 p-0">{{ $vice_pre->name }}</h5>
            <p class="text-lead text-dark m-0 p-0">{{ $vice_pre->edu }}</p>
            <p class="text-lead text-dark m-0 p-0">{{ $vice_pre->m_designation }}</p>
            <p class="text-lead text-dark limit m-0 p-0">at {{$vice_pre->at_location}}</p>

        </div>

    </div>
</div>

@endforeach
