<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <style>
        :root{
            --primary-bg: #2A4B7C;
            --white: #fdfdfd;
        }
        .custom-card{
            background-color: var(--primary-bg);
            color: var(--white)
        }

    </style>
</head>
<body>

    <div class="container-fluid px-5">
        <div class="row d-flex justify-content-center align-items-stretch gx-3 gy-3 mb-3">

            <div class="col-lg-6">
                <img 
                  src="{{ asset('img/card-image-meeting.png') }}" 
                  class="img-fluid w-100"
                  style="max-height: 270px; object-fit: cover; object-position: center 40%; border-radius: 20px"
                  alt="card-image">
            </div>

            <div class="col-lg-3 col-sm-6">
              <div class="card h-100  text-center custom-card"  style="border-radius: 20px">
                <div class="card-body d-flex flex-column align-items-center justify-content-center">
                    <div class="mb-3">
                        <img
                         src="{{ asset('img/icons/card-1.svg') }}" 
                         class="img-fluid"
                         style="max-width: 88px; height:auto;"
                         alt="card-one-image">
                    </div>
                    <h6 class="card-title">
                        Global, Instant, and On-Demand<br> Due Diligence
                    </h6>
                </div>
              </div>
            </div>

            
            <div class="col-lg-3 col-sm-6">
              <div class="card h-100 text-center custom-card" style="border-radius: 20px">
                <div class="card-body d-flex flex-column align-items-center justify-content-center">
                    <div class="mb-3"> 
                        <img 
                        src="{{ asset('img/icons/card-2.svg') }}" 
                        alt="">
                    </div>
                    <h6 class="card-title">
                        Fully Digital <br>& Automated Platform
                    </h6>
                </div>
              </div>
            </div>
          </div>



        <div class="row d-flex justify-content-center align-items-stretch gx-3 gy-3 mb-3">

            <div class="col-lg-3">
                <div class="card h-100 text-center custom-card" style="border-radius: 20px">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center">
                        <div class="mb-3"> 
                            <img 
                            src="{{ asset('img/icons/card-3.svg') }}" 
                            alt="">
                        </div>
                        <h6 class="card-title">
                            Comprehensive Risk <br>Assessments & Reports
                        </h6>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 ">
                <img 
                src="{{ asset('img/card-image-handshake.png') }}" 
                class="img-fluid w-100"
                style="max-height: 270px; object-fit: cover; object-position: center 40%; border-radius: 20px"
                alt="card-image">
            </div>

            <div class="col-lg-3">
                <div class="card h-100 text-center custom-card" style="border-radius: 20px">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center">
                        <div class="mb-3"> 
                            <img 
                            src="{{ asset('img/icons/card-4.svg') }}" 
                            alt="">
                        </div>
                        <h6 class="card-title">
                            Transparent & <br>Pay-As-You-Go Pricing
                        </h6>
                    </div>
                </div>
            </div>
        </div>

        <div class="row d-flex justify-content-center align-items-stretch gx-3 gy-3 mb-3">
            <div class="col-lg-3 col-sm-6">
                <div class="card h-100 text-center custom-card" style="border-radius: 20px">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center">
                        <div class="mb-3"> 
                            <img 
                            src="{{ asset('img/icons/card-5.svg') }}" 
                            alt="">
                        </div>
                        <h6 class="card-title">
                            Customizable Reports <br>& Deep Dives
                        </h6>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="card h-100 text-center custom-card" style="border-radius: 20px">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center">
                        <div class="mb-3"> 
                            <img 
                            src="{{ asset('img/icons/card-6.svg') }}" 
                            alt="">
                        </div>
                        <h6 class="card-title">
                            Regulatory Compliance <br>& Global Standards
                        </h6>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 ">
                <div class="card h-100 text-center custom-card" style="border-radius: 20px">
                    <div class="card-body d-flex flex-column align-items-center justify-content-center">
                        <div class="mb-3"> 
                            <img 
                            src="{{ asset('img/icons/card-7.svg') }}" 
                            alt="">
                        </div>
                        <h6 class="card-title">
                            Seamless User Experience <br>& API Integration
                        </h6>
                    </div>
                </div>
            </div>

            <div class="col-lg-3">
                <img 
                  src="{{ asset('img/card-image-meeting.png') }}" 
                  class="img-fluid w-100"
                  style="max-height: 270px; object-fit: cover; object-position: center 40%; border-radius: 20px"
                  alt="card-image">
            </div>
          </div>



    </div>
</body>
</html>