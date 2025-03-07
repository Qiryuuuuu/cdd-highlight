@extends('layouts.master')

@section('title', 'CDD Highlights')

@section('content')
    @include('partials.hero')
    
    <div class="grid-container"  data-aos="fade-up">
        <!-- First row with meeting image and two cards -->
        <div class="row d-flex justify-content-center align-items-stretch gx-3 gy-3 mb-3">
            <div class="col-lg-6">
                <img 
                    src="{{ asset('img/card-image-meeting.png') }}" 
                    class="img-fluid w-100"
                    style="max-height: 270px; object-fit: cover; object-position: center 40%; border-radius: 20px"
                    alt="card-image">
            </div>
            
            <div class="col-lg-3 col-sm-6">
                <div class="card text-center custom-card p-4" style="border-radius: 20px; min-height: 270px">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center gap-3">
                        <div class="mb-3">
                            <img
                                src="{{ asset('img/icons/card-1.svg') }}" 
                                class="img-fluid"
                                style="max-width: 72px; height:auto;"
                                alt="card-one-image">
                        </div>
                        <h6 class="card-title">
                            Global, Instant, and On-Demand Due Diligence
                        </h6> 
                    </div>
                    <div>
                        <p class="card-text text-start">Access real-time company background checks across multiple jurisdictions worldwide. </p>
                        <p class="card-text text-start">Perform instant due diligence searches without long wait times or manual intervention.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-sm-6">
                <div class="card text-center custom-card p-4" style="border-radius: 20px; min-height: 270px">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center gap-3">
                        <div class="mb-3">
                            <img
                                src="{{ asset('img/icons/card-2.svg') }}" 
                                class="img-fluid"
                                style="max-width: 72px; height:auto;"
                                alt="card-one-image">
                        </div>
                        <h6 class="card-title">
                            Fully Digital & Automated Platform
                        </h6> 
                    </div>
                    <div>
                        <p class="card-text text-start">No paperwork, no delays—get reports via a self-service e-commerce-style platform.</p>
                        <p class="card-text text-start">Seamless integration with APIs for businesses needing bulk verifications.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Second row with card, handshake image, and card -->
        <div class="row d-flex justify-content-center align-items-stretch gx-3 gy-3 mb-3">
            <div class="col-lg-3">
                <div class="card text-center custom-card p-4" style="border-radius: 20px; min-height: 300px">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center gap-3">
                        <div class="mb-3">
                            <img
                                src="{{ asset('img/icons/card-3.svg') }}" 
                                class="img-fluid"
                                style="max-width: 72px; height:auto;"
                                alt="card-one-image">
                        </div>
                        <h6 class="card-title">
                            Comprehensive Risk Assessments & Reports
                        </h6> 
                    </div>
                    <div>
                        <p class="card-text text-start">Covers Financial Health, Regulatory Compliance, Legal Risks, Ownership Structures, and Adverse Media Screening.</p>
                        <p class="card-text text-start">Provides insights into Sanctions, Politically Exposed Persons (PEPs), and AML/CTF compliance.</p>
                        <p class="card-text text-start">Provides a Cyber risk rating of your online environment</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <img 
                    src="{{ asset('img/card-image-handshake.png') }}" 
                    class="img-fluid w-100"
                    style="max-height: 300px; object-fit: cover; object-position: center 40%; border-radius: 20px"
                    alt="card-image">
            </div>
            
            <div class="col-lg-3">
                <div class="card text-center custom-card p-4" style="border-radius: 20px; min-height: 300px">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center gap-3">
                        <div class="mb-3">
                            <img
                                src="{{ asset('img/icons/card-4.svg') }}" 
                                class="img-fluid"
                                style="max-width: 72px; height:auto;"
                                alt="card-one-image">
                        </div>
                        <h6 class="card-title">
                            Transparent & Pay-As-You-Go Pricing
                        </h6> 
                    </div>
                    <div>
                        <p class="card-text text-start">No long-term contracts or hidden fees—pay only for the reports you need.</p>
                        <p class="card-text text-start">Flexible pricing tiers for startups, SMEs, and enterprises.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Third row with three cards and discussion image -->
        <div class="row d-flex justify-content-center align-items-stretch gx-3 gy-3 mb-3">
            <div class="col-lg-3 col-sm-6">
                <div class="card text-center custom-card p-4" style="border-radius: 20px; min-height: 300px">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center gap-3">
                        <div class="mb-3">
                            <img
                                src="{{ asset('img/icons/card-5.svg') }}" 
                                class="img-fluid"
                                style="max-width: 72px; height:auto;"
                                alt="card-one-image">
                        </div>
                        <h6 class="card-title">
                            Customizable Reports & Deep Dives
                        </h6> 
                    </div>
                    <div>
                        <p class="card-text text-start">Choose basic screenings or in-depth risk assessments based on business needs.</p>
                        <p class="card-text text-start">Option to add enhanced due diligence (EDD) for high-risk transactions or jurisdictions.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-sm-6">
                <div class="card text-center custom-card p-4" style="border-radius: 20px; min-height: 300px">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center gap-3">
                        <div class="mb-3">
                            <img
                                src="{{ asset('img/icons/card-6.svg') }}" 
                                class="img-fluid"
                                style="max-width: 72px; height:auto;"
                                alt="card-one-image">
                        </div>
                        <h6 class="card-title">
                            Regulatory Compliance & Global Standards                      
                        </h6> 
                    </div>
                    <div>
                        <p class="card-text text-start">Adheres to GDPR, FATF guidelines, and other global compliance frameworks.</p>
                        <p class="card-text text-start">Helps businesses meet KYC, KYB, and AML compliance requirements effortlessly.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3">
                <div class="card text-center custom-card p-4" style="border-radius: 20px; min-height: 300px">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center gap-3">
                        <div class="mb-3">
                            <img
                                src="{{ asset('img/icons/card-7.svg') }}" 
                                class="img-fluid"
                                style="max-width: 72px; height:auto;"
                                alt="card-one-image">
                        </div>
                        <h6 class="card-title">
                            Seamless User Experience & API Integration                            
                        </h6> 
                    </div>
                    <div>
                        <p class="card-text text-start">Easy-to-use online dashboard to monitor and track reports.</p>
                        <p class="card-text text-start">API-enabled for bulk screening and enterprise-level automation.</p>
                        <p class="card-text text-start">Allows for multiple Users access.</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3">
                <img 
                    src="{{ asset('img/card-image-discussion.png') }}" 
                    class="img-fluid w-100"
                    style="height: 300px; object-fit: cover; object-position: center 40%; border-radius: 20px"
                    alt="card-image">
            </div>
        </div>
    </div>
@endsection


@section('why-choose-us')
<section id="why-choose-us" data-aos="fade-up" class="text-center d-flex align-items-center justify-content-center" style="min-height: 67vh;">
    <div class="container py-5">
        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-8">
                <h2 class="fw-bold">Why Choose Avvanz?</h2>
                <p class="lead mt-3">
                    Simplify due diligence with a seamless solution designed for modern business needs.
                </p>
            </div>
        </div>

        <div class="row mt-4 gx-5">
            <div class="col-lg-4 text-center mb-5">
                <img src="{{ asset('img/icons/why-us-1.svg') }}" 
                     class="mb-3 img-fluid" 
                     alt="Reduced Turnaround Time Icon"
                     width="80" height="80">
                
                <h4 class="fw-bold mb-2">Reduced Turnaround Time</h4>
                
                <p class="text-muted">
                    Get instant results instead of waiting days or weeks for traditional background checks.
                </p>
            </div>
            
            <div class="col-lg-4 text-center mb-5">
                <img src="{{ asset('img/icons/why-us-2.svg') }}" 
                     class="mb-3 img-fluid" 
                     alt="Improved Compliance Icon"
                     width="80" height="80">
                
                <h4 class="fw-bold mb-2">Improved Compliance</h4>
                
                <p class="text-muted">
                    Meet regulatory requirements with comprehensive reports aligned with global standards. 
                </p>
            </div>

            <div class="col-lg-4 text-center mb-5">
                <img src="{{ asset('img/icons/why-us-3.svg') }}" 
                     class="mb-3 img-fluid" 
                     alt="Instant Risk Insights Icon"
                     width="80" height="80">
                
                <h4 class="fw-bold mb-2">Instant Risk Insights</h4>
                
                <p class="text-muted">
                    Identify potential risks immediately with our comprehensive screening process. 
                </p>
            </div>
        </div>
    </div>
</section>
@endsection