@extends('base')

@section('content')
<div class="container my-4 px-3">
    <div id="carouselExampleCaptions" class="carousel slide overflow-hidden" style="height: 400px">

        <div class="carousel-indicators">
          @foreach ($sliders as $slider)
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $loop->index }}" class="{{ $loop->index === 0 ? 'active' : '' }}" aria-current="true" aria-label="Slide 1"></button>
          @endforeach
        </div>

        <div class="carousel-inner">

          @foreach ($sliders as $slider)
            <div class="carousel-item {{ $loop->index === 0 ? 'active' : '' }}">
              <div class="position-relative">
                  <img style="height: 400px" src="/uploads/{{ $slider->image_url }}" class="d-block w-100">
                  <div class="position-absolute top-0 start-0 bottom-0 end-0" style="background-color: rgba(0,0,0,0.5)"></div>
              </div>
              <div class="carousel-caption d-none d-md-block">
                <h5>{{ $slider->title }}</h5>
                <p>{{ $slider->description }}</p>
              </div>
            </div>
          @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <div class="card text-bg-primary mt-5">
        <div class="card-body">
            <div class="d-flex flex-column flex-md-row gap-2">
                <div class="row g-2" style="flex: 1">
                    <div class="col-12 col-md-3 mb-3 mb-md-0">
                        <label for="check_in_date" class="form-label text-white">Check In Date</label>
                        <input type="date" class="form-control w-100" id="check_in_date" aria-describedby="emailHelp">
                    </div>
                    <div class="col-12 col-md-3 mb-3 mb-md-0">
                        <label for="check_in_date" class="form-label text-white">Check Out Date</label>
                        <input type="date" class="form-control w-100" id="check_in_date" aria-describedby="emailHelp">
                    </div>
                    <div class="col-12 col-md-3 mb-3 mb-md-0">
                        <label for="check_in_date" class="form-label text-white">Adults</label>
                        <input type="number" class="form-control w-100" id="check_in_date" aria-describedby="emailHelp">
                    </div>
                    <div class="col-12 col-md-3">
                        <label for="check_in_date" class="form-label text-white">Children</label>
                        <input type="number" class="form-control w-100" id="check_in_date" aria-describedby="emailHelp">
                    </div>
                </div>
                <div>
                    <label class="form-label"></label>
                    <button class="btn btn-warning d-block mt-0 mt-md-2">Check Availability</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection