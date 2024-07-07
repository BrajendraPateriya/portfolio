@extends('layouts.app')

@section('content')
<div class="container-fluid text-center">
  <div class="row container1">
    <div class="col-9 bg-body-tertiary right-section border text-start section_class custom-width">
      <div class="container">
        <div class="row align-items-start left-section">
          <div class="col-md-8 left-section bg-body-tertiary text-start rounded">
            <span class="border Afw text-success bulletbox rounded mb-5">
              <div class="bullet mt-2 me-2 ms-2"></div>Available For Work
            </span>
            <div class="about fs-1 fw-bolder mb-5">About Me: <br>
              Crafting Digital Excellence
            </div>
            <small class="abouttxt">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore eligendi, laboriosam aliquam libero vero amet ratione, repudiandae unde eveniet cumque id alias placeat consequatur ipsa modi, omnis accusamus deserunt. Voluptate Lorem ipsum dolor sit amet consectetur, adipisicing elit. Labore eligendi, laboriosam aliquam libero vero amet ratione, repudiandae unde eveniet cumque id alias placeat consequatur ipsa modi, omnis accusamus deserunt. Voluptate
            </small>
          </div>
          <div class="col-md-4">
            <img src="{{ asset('portfolio/bp.jpeg') }}" alt="" class="img img-fluid portfolio-img rounded">
          </div>
        </div>
      </div>

      <div class="container text-start mt-5">
        <div class="row align-items-center">
          <div class="col-md-6 mb-5">
            <p class="fw-bolder fs-1">Education</p>
            <small class="abouttxt">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti blanditiis sapiente quidem officiis nemo est voluptate? Eius, placeat error quibusdam totam molestias doloremque. Magnam rem, tempore ipsam pariatur mollitia reiciendis!
            </small>
            <button type="button" class="btn btn-light mt-4">View Projects</button>
          </div>
          <div class="col-md-6 mb-5">
            <p class="fw-bolder fs-1">Stack</p>
            <small class="abouttxt">
              Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corrupti blanditiis sapiente quidem officiis nemo est voluptate? Eius, placeat error quibusdam totam molestias doloremque. Magnam rem, tempore ipsam pariatur mollitia reiciendis!
            </small>
            <button type="button" class="btn btn-light mt-4">View Stack</button>
          </div>
        </div>
      </div>

      <hr class="my-5">

      <div class="fs-1 fw-bolder text-start">Experience</div>

      <div class="container text-center shadow d-flex align-items-start mt-5">
        <div class="row p-3 experience text-start">
          <div class="col-md-6">
            <i class="bi bi-pc-display"></i><b>Freelancer Web Designer</b><br>
            <div class="small-Text">Innovate Tech Inc.</div>
            <div class="small-Text">2020 - present</div>
          </div>
          <div class="col-md-6">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque nulla, rem autem temporibus quisquam rerum tenetur distinctio obcaecati dolorem repellendus nam quam dolor blanditiis debitis ullam aliquid accusamus beatae hic!
          </div>
        </div>
      </div>

      <div class="container text-center shadow d-flex align-items-start mt-4">
        <div class="row p-3 experience text-start">
          <div class="col-md-6">
            <i class="bi bi-pc-display"></i><b>Freelancer Web Designer</b><br>
            <div class="small-Text">Innovate Tech Inc.</div>
            <div class="small-Text">2020 - present</div>
          </div>
          <div class="col-md-6">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque nulla, rem autem temporibus quisquam rerum tenetur distinctio obcaecati dolorem repellendus nam quam dolor blanditiis debitis ullam aliquid accusamus beatae hic!
          </div>
        </div>
      </div>

      <div class="container shadow d-flex align-items-start mt-4">
        <div class="row p-3 experience">
          <div class="col-md-6">
            <i class="bi bi-pc-display"></i><b>Freelancer Web Designer</b><br>
            <div class="small-Text">Innovate Tech Inc.</div>
            <div class="small-Text">2020 - present</div>
          </div>
          <div class="col-md-6">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque nulla, rem autem temporibus quisquam rerum tenetur distinctio obcaecati dolorem repellendus nam quam dolor blanditiis debitis ullam aliquid accusamus beatae hic!
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
@endsection
