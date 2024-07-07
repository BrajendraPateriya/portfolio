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

      <!-- Main Introduction Section -->
      <div class="text-start">
        <h1 class="fw-bold">Hey there!<br>I'm Brajendra Pateriya...</h1>
        <p>Hi, pls type your thoughts</p>
        <button type="button" class="btn btn-light">More about Me</button>
      </div>

      <!-- Recent Projects Section -->
      <div class="mt-5">
        <h2 class="fw-bold">Recent Projects</h2>
        <div class="row mt-3">
          <div class="col-md-4">
            <img src="{{ asset('portfolio/ini.jpg') }}" alt="Project Image" class="img-fluid rounded mb-2">
            <p class="small-Text">WEB DESIGN</p>
            <h5>TeamWave Website in Framer</h5>
          </div>
          <div class="col-md-4">
            <img src="{{ asset('portfolio/ini.jpg') }}" alt="Project Image" class="img-fluid rounded mb-2">
            <p class="small-Text">WEB DESIGN</p>
            <h5>Spendly Website in Framer</h5>
          </div>
          <div class="col-md-4">
            <img src="{{ asset('portfolio/stock.jpg') }}" alt="Project Image" class="img-fluid rounded mb-2">
            <p class="small-Text">WEB DESIGN</p>
            <h5>Vector Website in Framer</h5>
          </div>
        </div>
        <button type="button" class="btn btn-light mt-4">All Projects</button>
      </div>

      <!-- Stack Section -->
      <div class="mt-5">
        <h2 class="fw-bold">Stack</h2>
        <div class="row mt-3">
          <div class="col-md-4 mb-3">
            <div class="p-3 border rounded d-flex align-items-center">
              <img src="{{ asset('portfolio/framer.png') }}" alt="Framer Icon" class="me-3" width="30">
              <div>
                <span class="d-block">Framer</span>
                <small>Web Design</small>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="p-3 border rounded d-flex align-items-center">
              <img src="{{ asset('portfolio/figma.jpeg') }}" alt="Figma Icon" class="me-3" width="30">
              <div>
                <span class="d-block">Figma</span>
                <small>Collaborative Design</small>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="p-3 border rounded d-flex align-items-center">
              <img src="{{ asset('portfolio/notion.png') }}" alt="Notion Icon" class="me-3" width="30">
              <div>
                <span class="d-block">Notion</span>
                <small>Project Management</small>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="p-3 border rounded d-flex align-items-center">
              <img src="{{ asset('portfolio/chat.png') }}" alt="ChatGPT Icon" class="me-3" width="30">
              <div>
                <span class="d-block">Chat GPT</span>
                <small>Content Generation</small>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="p-3 border rounded d-flex align-items-center">
              <img src="{{ asset('portfolio/html.png') }}" alt="HTML5 Icon" class="me-3" width="30">
              <div>
                <span class="d-block">HTML 5</span>
                <small>Structure and Content</small>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="p-3 border rounded d-flex align-items-center">
              <img src="{{ asset('portfolio/css.jpeg') }}" alt="CSS3 Icon" class="me-3" width="30">
              <div>
                <span class="d-block">CSS 3</span>
                <small>Visual Styling</small>
              </div>
            </div>
          </div>
        </div>
        <button type="button" class="btn btn-light mt-4">All Stack</button>
      </div>
    </div>
  </div>
</div>
@endsection
