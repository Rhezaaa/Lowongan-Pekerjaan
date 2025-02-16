@extends('frontend.layout')

@section('content')
<main>
      <!-- slider Area Start-->
      <div class="slider-area">
        <!-- Mobile Menu -->
        <div class="slider-active">
          <div
            class="single-slider slider-height d-flex align-items-center"
            data-background="{{ asset ('joblisting/assets/img/hero/h1_hero.jpg') }}"
          >
            <div class="container">
              <div class="row">
                <div class="col-xl-6 col-lg-9 col-md-10">
                  <div class="hero__caption">
                    <h1>Find the most exciting startup jobs</h1>
                  </div>
                </div>
              </div>
              <!-- Search Box -->
              <div class="row">
                <div class="col-xl-8">
                  <!-- form -->
                  <form action="#" class="search-box">
                    <div class="input-form">
                      <input type="text" placeholder="Job Tittle or keyword" />
                    </div>
                    <div class="search-form">
                      <button>Find job</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- slider Area End-->
      <!-- Our Services Start -->
      <div class="our-services section-pad-t30">
        <div class="container">
          <!-- Section Tittle -->
          <div class="row">
            <div class="col-lg-12">
              <div class="section-tittle text-center">
                <span>FEATURED TOURS Packages</span>
                <h2>Browse Top Categories</h2>
              </div>
            </div>
          </div>
          <div class="row d-flex justify-contnet-center">
            @foreach($categories as $category)
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
              <div class="single-services text-center mb-30">
                <div class="services-cap">
                  <h5><a href="{{ route('job.category', $category->slug) }}">{{ $category->title }}</a></h5>
                  <span>({{ $category->jobs->count() }})</span>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          <!-- More Btn -->
          <!-- Section Button -->
          <div class="row">
            <div class="col-lg-12">
              <div class="browse-btn2 text-center mt-50">
                <a href="{{ route('jobs') }}" class="border-btn2"
                  >Browse All Sectors</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Our Services End -->

      <!-- Featured_job_start -->
      <section class="featured-job-area feature-padding">
        <div class="container">
          <!-- Section Tittle -->
          <div class="row">
            <div class="col-lg-12">
              <div class="section-tittle text-center">
                <span>Recent Job</span>
                <h2>Featured Jobs</h2>
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-xl-10">
            @foreach($jobs as $job)
              <!-- single-job-content -->
              <div class="single-job-items mb-30">
                <div class="job-items">
                  <div class="company-img">
                    <a href="{{ route('job.detail', $job->slug) }}"
                      ><img src="{{ Storage::url($job->company->logo) }}" style="width: 100px; height: 100px; object-fit: contain;" alt="">

                    /></a>
                  </div>
                  <div class="job-tittle">
                    <a href="{{ route('job.detail', $job->slug) }}"><h4>{{ $job->title }}</h4></a>
                    <ul>
                      <li>{{ $job->category->title }}</li>
                      <li>
                        <i class="fas fa-map-marker-alt"></i>{{ $job->location }}
                      </li>
                      <li>{{ $job->paycheck }}</li>
                    </ul>
                  </div>
                </div>
                <div class="items-link f-right">
                  <a href="{{ route('job.detail', $job->slug) }}">{{ $job->job_nature }}</a>
                  <span>{{ $job->created_at->diffForHumans() }}</</span>
                </div>
              </div>
              <!-- single-job-content -->
            @endforeach
            </div>
          </div>
        </div>
      </section>
      <!-- Featured_job_end -->
      <!-- How  Apply Process Start-->
      <div
        class="apply-process-area apply-bg pt-150 pb-150"
        data-background="assets/img/gallery/how-applybg.png"
      >
        <div class="container">
          <!-- Section Tittle -->
          <div class="row">
            <div class="col-lg-12">
              <div class="section-tittle white-text text-center">
                <span>Apply process</span>
                <h2>How it works</h2>
              </div>
            </div>
          </div>
          <!-- Apply Process Caption -->
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="single-process text-center mb-30">
                <div class="process-ion">
                  <span class="flaticon-search"></span>
                </div>
                <div class="process-cap">
                  <h5>1. Search a job</h5>
                  <p>
                    Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod
                    tempor incididunt ut laborea.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="single-process text-center mb-30">
                <div class="process-ion">
                  <span class="flaticon-curriculum-vitae"></span>
                </div>
                <div class="process-cap">
                  <h5>2. Apply for job</h5>
                  <p>
                    Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod
                    tempor incididunt ut laborea.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6">
              <div class="single-process text-center mb-30">
                <div class="process-ion">
                  <span class="flaticon-tour"></span>
                </div>
                <div class="process-cap">
                  <h5>3. Get your job</h5>
                  <p>
                    Sorem spsum dolor sit amsectetur adipisclit, seddo eiusmod
                    tempor incididunt ut laborea.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- How  Apply Process End-->
      <!-- Testimonial Start -->
      <div class="testimonial-area testimonial-padding">
        <div class="container">
          <!-- Testimonial contents -->
          <div class="row d-flex justify-content-center">
            <div class="col-xl-8 col-lg-8 col-md-10">
              <div class="h1-testimonial-active dot-style">
              @foreach($testimonials as $testimonial)
                <!-- Single Testimonial -->
                <div class="single-testimonial text-center">
                  <!-- Testimonial Content -->
                  <div class="testimonial-caption">
                    <!-- founder -->
                    <div class="testimonial-founder">
                      <div class="founder-img mb-30">
                        <img
                          src="{{ Storage::url($testimonial->photo) }}" style="width: 100px; height: 100px; object-fit:contain;"
                          alt=""
                        />
                        <span>{{ $testimonial->name }}</span>
                        <p>{{ $testimonial->job_title }}</p>
                      </div>
                    </div>
                    <div class="testimonial-top-cap">
                      <p>
                        “{{ $testimonial->description }}”
                      </p>
                    </div>
                  </div>
                </div>
                <!-- Single Testimonial -->
              @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Testimonial End -->
    </main>

@endsection