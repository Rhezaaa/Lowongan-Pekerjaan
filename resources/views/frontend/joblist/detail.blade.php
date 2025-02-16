@extends('frontend.layout')

@section('content')
<main>
      <!-- Hero Area Start-->
      <div class="slider-area">
        <div
          class="single-slider section-overly slider-height2 d-flex align-items-center"
          data-background="assets/img/hero/about.jpg"
        >
          <div class="container">
            <div class="row">
              <div class="col-xl-12">
                <div class="hero-cap text-center">
                  <h2>{{ $job->title }}</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Hero Area End -->
      <!-- job post company Start -->
      <div class="job-post-company pt-120 pb-120">
        <div class="container">
          <div class="row justify-content-between">
            <!-- Left Content -->
            <div class="col-xl-7 col-lg-8">
              <!-- job single -->
              <div class="single-job-items mb-50">
                <div class="job-items">
                  <div class="company-img company-img-details">
                    <a href="#"
                      ><img src="{{ Storage::url($job->company->logo) }}" style="width: 100px; height: 100px; object-fit:contain;" alt=""
                    /></a>
                  </div>
                  <div class="job-tittle">
                    <a href="#">
                      <h4>{{ $job->title }}</h4>
                    </a>
                    <ul>
                      <li>{{ $job->category->title }}</li>
                      <li>
                        <i class="fas fa-map-marker-alt"></i>{{ $job->location }}
                      </li>
                      <li>{{ $job->paycheck }}</li>
                    </ul>
                  </div>
                </div>
              </div>
              <!-- job single End -->

              <div class="job-post-details">
                <div class="post-details1 mb-50">
                  <!-- Small Section Tittle -->
                  <div class="small-section-tittle">
                    <h4>Job Description</h4>
                  </div>
                  {{ $job->description }}
                </div>
              </div>
            </div>
            <!-- Right Content -->
            <div class="col-xl-4 col-lg-4">
              <div class="post-details3 mb-50">
                <!-- Small Section Tittle -->
                <div class="small-section-tittle">
                  <h4>Job Overview</h4>
                </div>
                <ul>
                  <li>Posted date : <span>{{ date_format($job->created_at, 'd M Y') }}</span></li>
                  <li>Location : <span>{{ $job->location }}</span></li>
                  <li>Job nature : <span>{{ $job->job_nature }}</span></li>
                  <li>Exp date : <span>{{ $job->exp_date }}</span></li>
                </ul>
                <div class="apply-btn2">
                  <a href="mailto:{{ $job->company->email }}" class="btn">Apply Now</a>
                </div>
              </div>
              <div class="post-details4 mb-50">
                <!-- Small Section Tittle -->
                <div class="small-section-tittle">
                  <h4>Company Information</h4>
                </div>
                <span>{{ $job->company->name }}</span>
                <p>
                  {{ $job->company->description }}
                </p>
                <ul>
                  <li>Name: <span>{{ $job->company->name }} </span></li>
                  <li>Web : <span> {{ $job->company->website }}</span></li>
                  <li>Email: <span>{{ $job->company->email }}</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- job post company End -->
    </main>

@endsection