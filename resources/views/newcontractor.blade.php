@extends('layouts.app')

@section('content')
    <section class="container-fluid contractor-section">

        <div class="row contractor-parent-box">
            <div class="col-lg-6 col-md-12 p-4 text-center  d-lg-none" >
                <img class="img-fluid mt-3 mb-3" src="{{ asset('public/assets/images/article-details-small.jpg') }}" style="opacity: .8;max-height: 245px; border-radius: 12px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);" alt="alternative"> 
              </div>
            <div class="col-lg-6 col-md-12 p-3 text-center text-lg-left align-self-center contractor-header-text">
                <h1 style="font-family: 'Source Serif Pro', serif; font-weight: bold; color: #2c3e50;">Contractors</h1>
                <h3
                    style="font-size: 18px; font-family: 'Georgia', serif; color: #34495e; line-height: 1.6; text-align: center; font-size: 25px;">
                    Our products are specifically designed to meet the needs of contractor businesses. Connect with us to
                    get a quote.
                </h3>
                <button type="button" class="btn btn-light mt-4 contact-btn">Contact With Us</button>
            </div>
            <div class="col-lg-6 col-md-12 p-4 text-center d-md-none d-sm-none d-lg-block" >
              <img class="img-fluid mt-3 mb-3" src="{{ asset('public/assets/images/article-details-small.jpg') }}" style="opacity: .8;max-height: 245px; border-radius: 12px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);" alt="alternative"> 
            </div>
        </div>

    </section>

  


    <!-- <hr style="border: 1px solid #204051; margin: 40px 0;"> -->

    <!-- Insurance Types Section -->
    <div class="container-fluid types-section py-4">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 text-center mb-4">
                <h2
                    style="font-family: 'Source Serif Pro', serif; font-weight: bold; color: #2c3e50; font-size:40px;
            ">
                    Types of Insurance Coverages
                </h2>
            </div>
        </div>


        <!-- Insurance Coverage Blocks -->

        <div class="p-3">
            <!-- Workers’ Compensation Block -->
            <div class="row py-4 mb-5 justify-content-center align-items-center workers-compensation-block">
                <div class="col-md-5 col-sm-12 section-one">
                    <span class="empty-span">
                    </span>
                    <span class=" img-container">
                        <img class="img-fluid" src="{{ url('public/assets/images/article-details-large.jpg') }}"
                            alt="Workers' Compensation">
                    </span>
                </div>

                <div class="col-md-7 col-sm-12 section-two" data-aos="zoom-in">
                    <h2 style="">Workers’ Compensation</h2>
                    <p>
                        Workers' Compensation Insurance protects your business and office workers by providing benefits to
                        employees injured in the workplace. These benefits can address medical care and related medical
                        costs, retraining and lost wages until the employee can return to work or compensation for permanent
                        disability.
                    </p>
                </div>
            </div>


            <!-- General Liability Insurance Block -->
            <div class="row py-4 mb-5 justify-content-center align-items-center workers-compensation-block">
                <div class="col-md-5 col-sm-12 section-one">
                    <span class="empty-span">
                    </span>
                    <span class=" img-container">
                        <img class="img-fluid" src="{{ url('public/assets/images/article-details-large.jpg') }}"
                            alt="Workers' Compensation">
                    </span>
                </div>

                <div class="col-md-7 col-sm-12 section-two" data-aos="zoom-in">
                    <h2>General Liability Insurance</h2>
                    <p>
                        General Liability Insurance provides coverage for contractors for bodily injury, personal injury,
                        and property damage caused by the business’s operations, products, or injury on the business’s
                        premises or on-the-job site.
                    </p>
                </div>
            </div>

            <!-- Commercial Property Insurance Block -->
            <div class="row py-4 mb-5 justify-content-center align-items-center workers-compensation-block">
                <div class="col-md-5 col-sm-12 section-one">
                    <span class="empty-span">
                    </span>
                    <span class=" img-container">
                        <img class="img-fluid" src="{{ url('public/assets/images/article-details-large.jpg') }}"
                            alt="Workers' Compensation">
                    </span>
                </div>

                <div class="col-md-7 col-sm-12 section-two" data-aos="zoom-in">
                    <h2>Commercial Property Insurance</h2>
                    <p>
                        Commercial Property Insurance is crucial for your contractor business. It protects your building,
                        contents, business income, and rental income from commonly experienced losses, including fire,
                        explosion, pipe bursts, storms, theft, vandalism, and flood and earthquake.
                    </p>
                </div>
            </div>

            <!-- Commercial Auto Block -->
            <div class="row py-4 mb-5 justify-content-center align-items-center workers-compensation-block">
                <div class="col-md-5 col-sm-12 section-one">
                    <span class="empty-span">
                    </span>
                    <span class=" img-container">
                        <img class="img-fluid" src="{{ url('public/assets/images/article-details-large.jpg') }}"
                            alt="Workers' Compensation">
                    </span>
                </div>

                <div class="col-md-7 col-sm-12 section-two" data-aos="zoom-in">
                    <h2>Commercial Auto</h2>
                    <p>
                        Employment Practices Liability Insurance (EPLI) coverage protects professional service organizations
                        in the event of employment-related claims, including alleged discrimination, wrongful termination or
                        demotion, sexual harassment and retaliation.
                    </p>
                </div>
            </div>

            <!-- Inland Marine Block -->
            <div class="row py-4 mb-5 justify-content-center align-items-center workers-compensation-block">
                <div class="col-md-5 col-sm-12 section-one">
                    <span class="empty-span">
                    </span>
                    <span class=" img-container">
                        <img class="img-fluid" src="{{ url('public/assets/images/article-details-large.jpg') }}"
                            alt="Workers' Compensation">
                    </span>
                </div>

                <div class="col-md-7 col-sm-12 section-two" data-aos="zoom-in">
                    <h2>Inland Marine</h2>
                    <p>
                        Any business using computers to complete day-to-day tasks should consider cyber insurance a
                        necessary coverage. Cyber liability insurance provides coverage for certain losses incurred as a
                        result of data breaches.
                    </p>
                </div>
            </div>
        </div>



        <!-- <div class="row py-1 justify-content-center">
                    <div class="col-md-4 col-sm-12 p-1 text-center">
                        <img class="img-fluid mx-auto d-block" src="{{ url('public/assets/images/article-details-large.jpg') }}" alt="alternative" style="max-height: 150px;">
                    </div>
                    <div class="col-md-7 col-sm-12 p-1 text-center">
                        <h2 style="font-family: 'Arial', sans-serif; font-weight: bold; color: #2c3e50;">Umbrella/Excess Liability</h2>
                        <p style="font-size: 18px; font-family: 'Georgia', serif; color: #34495e; line-height: 1.6; text-align: center;">
                            Umbrella or Excess Liability provides additional coverage when your underlying liability limits have been exhausted, giving your business added protection...
                        </p>
                    </div>
                </div> -->

        <!-- <div class="row py-1 justify-content-center">
                    <div class="col-md-4 col-sm-12 p-1 text-center">
                        <img class="img-fluid mx-auto d-block" src="{{ url('public/assets/images/article-details-large.jpg') }}" alt="alternative" style="max-height: 150px;">
                    </div>
                    <div class="col-md-7 col-sm-12 p-1 text-center">
                        <h2 style="font-family: 'Arial', sans-serif; font-weight: bold; color: #2c3e50;">Professional Liability Insurance</h2>
                        <p style="font-size: 18px; font-family: 'Georgia', serif; color: #34495e; line-height: 1.6; text-align: center;">
                            Also known as Errors and Omissions Insurance (E&O), this covers legal defense costs and damages resulting from professional negligence...
                        </p>
                    </div>
                </div> -->
    @endsection
