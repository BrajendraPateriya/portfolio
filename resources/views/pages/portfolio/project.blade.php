@extends('layouts.app')
@section('content')
<div class="main-content container-fluid text-center">
  <div class="row container1">
    <div class="col-md-12 bg-body-tertiary right-section border text-start section_class custom-width">
      <!-- Available for Work Section -->
      <div class="d-flex justify-content-start align-items-center mb-4">
        <div class="bullet me-2"></div>
        <span class="Afw text-success border rounded px-2">Available for Work</span>
      </div>
      <!-- Projects Section -->
      <div class="text-start">
        <h1 class="fw-bold">Projects: Showcasing My Journey</h1>
        <div class="row mt-3">
          <!-- Project Item -->
          <div class="col-md-4 mb-3">
            <div class="project-item">
              <img src="{{ asset('portfolio/ini.jpg') }}" alt="TeamWave Website" class="img-fluid rounded mb-2">
              <p class="small-Text">WEB DESIGN</p>
              <h5>TeamWave Website in Framer</h5>
            </div>
          </div>
          <!-- Add more project items as needed -->
          <div class="col-md-4 mb-3">
            <div class="project-item">
              <img src="{{ asset('portfolio/ini.jpg') }}" alt="Spendly Website" class="img-fluid rounded mb-2">
              <p class="small-Text">WEB DESIGN</p>
              <h5>Spendly Website in Framer</h5>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="project-item">
              <img src="{{ asset('portfolio/ini.jpg') }}" alt="Vector Website" class="img-fluid rounded mb-2">
              <p class="small-Text">WEB DESIGN</p>
              <h5>Vector Website in Framer</h5>
            </div>
          </div>
          <!-- Repeat similar blocks for other projects -->
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
