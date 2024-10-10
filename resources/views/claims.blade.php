@extends('layouts.app')



@section('content')
    <section class="claimss " id="claimss">
        <div class="row pt-5" style="margin:0">
            <div class="col">
                <h2>Claims</h2>

            </div>
        </div>

        <div class="d-flex align-items-center">

            <div class="container text-light first-row-claims-card">
                <div class="text-center pb-4">
                </div>
                <div class="row gy-4 py-2" data-aos="zoom-in">
                    <div class="col-lg-3  first-row-claims-card-one">
                        <a href="https://www.southlakespecialty.com/fnol/" target='blank'
                            class="card bg-transparent text-decoration-none text-light"> <!-- Add link here -->
                            <i class="fas fa-flag-checkered fa-2x" style="color: #5a615c !important;"></i>
                            <h4 class="py-2">Report A Claim</h4>
                        </a>
                    </div>
                    <div class="col-lg-3 first-row-claims-card-one">
                        <a href="#checkstatus" class="card bg-transparent text-decoration-none text-light">
                            <!-- Add link here -->
                            <i class="fas fa-tachometer-alt fa-2x"></i>
                            <h4 class="py-2">Check Status</h4>
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <div class="card bg-transparent text-decoration-none text-light p-3 contact-claims-card"
                            style=" display: flex; flex-direction: column;justify-content: space-between; ">
                            <h4> Contact Claims</h4>
                            <p>Our claims center is staffed with specialists who are there to assist when you have reported
                                an incident.</p>
                            <div class="contact-info">
                                <p>Call: 800-597-0242</p>
                                <p>Email: claims@southlakespecialty.com</p>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- end of row -->
            </div> <!-- end of container -->
        </div>
        <div class="report-claims d-flex align-items-center"data-aos="zoom-in">
            <div class="container">

                <div class="row gy-4 py-2">
                    <div class="col-lg-4 ">
                        <a href="#how-to-report" class="card bg-transparent text-decoration-none text-light">
                            <i class="fas fa-info-circle fa-2x"></i>
                            <h4 class="py-2">How to Report Claims</h4>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="#post-reporting-claim" class="card bg-transparent text-decoration-none text-light">
                            <i class="fas fa-arrow-right fa-2x"></i>
                            <h4 class="py-2">Post Reporting Claims</h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>






    <section class="contact d-flex align-items-center py-5" id="checkstatus">
        <div class="container-fluid text-light">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center justify-content-lg-end align-items-center px-lg-5"
                    data-aos="fade-right">
                    <div style="width:100%">
                        <div class="text-center text-lg-start py-4 pt-lg-0">

                            <h2 class="py-2" style="text-align: center;">Enter the info to Check Status</h2>
                            <!-- <p class="para-light">We’re here to help with any questions or concerns you may have. Whether you need more information or have a specific request, please don’t hesitate to reach out. Our team is dedicated to providing prompt and effective support to ensure your needs are met.</p> -->
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group py-2">
                                        <input type="text" class="form-control form-control-input"
                                            id="exampleFormControlInput1" placeholder="Enter first name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group py-2">
                                        <input type="email" class="form-control form-control-input"
                                            id="exampleFormControlInput2" placeholder="Enter last name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group py-2">
                                        <input type="text" class="form-control form-control-input"
                                            id="exampleFormControlInput1" placeholder="Enter Email">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group py-2">
                                        <input type="email" class="form-control form-control-input"
                                            id="exampleFormControlInput2" placeholder="Enter Phone">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group py-1">
                                <input type="email" class="form-control form-control-input" id="exampleFormControlInput3"
                                    placeholder="Enter Claim number">
                            </div>
                            <div class="form-group py-2">
                                <textarea class="form-control form-control-input" id="exampleFormControlTextarea1" rows="6"
                                    placeholder="Other Comments"></textarea>
                            </div>
                        </div>
                        <div class="my-3"style="text-align: center;">
                            <a class="btn form-control-submit-button" href="#your-link">Submit</a>
                        </div>
                    </div> <!-- end of div -->
                </div>
                <!-- <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right">
                                <img class="img-fluid" src="{{ url('public/assets/images/work.jpg') }}" alt="work">         -->
            </div> <!-- end of col -->
            <!-- end of col -->
        </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section>




    <section class="work d-flex align-items-center py-2" id='how-to-report'>
        <div class="container-fluid text-light" >
            <div class="row">

                <div class="col-lg-12 d-flex align-items-center px-4 py-3">
                    <div class="row">
                        <div class="text-center text-lg-start py-4 pt-lg-0">
                            <h2 class="py-2">A. How To Report a Claim?</h2>
                            <p class="para-light">
                                Filing a claim with Southlake Financial Holdings is simple and straightforward. Follow the
                                steps below to ensure your claim is processed as quickly and efficiently as possible.
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-4">
                                <ul class="list-unstyled">
                                    <div class="row d-flex align-items-stretch">
                                        <div class="col-lg-6 mt-2" data-aos="zoom-in">
                                            <div class="card p-1 h-100">
                                                <li class="p-1"><strong>Step 1: Gather Information:</strong> Collect all
                                                    necessary information,
                                                    including your policy number, details of the incident, and any
                                                    supporting documentation
                                                    (photos, police reports, etc.).
                                                </li>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mt-2"data-aos="zoom-in">
                                            <div class="card p-1 h-100">
                                                <li class="p-1"><strong>Step 2: Contact Us:</strong> Call our claims
                                                    hotline at
                                                    <strong>1-800-555-CLAIM</strong> or email
                                                    <strong>claims@southlakeholdings.com</strong>. Our claims specialists
                                                    are available 24/7 to assist you.
                                                </li>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mt-2" data-aos="zoom-in">
                                            <div class="card p-1 h-100">
                                                <li class="p-1"><strong>Step 3: Submit Your Claim:</strong> Once you’ve
                                                    contacted us, submit your
                                                    claim form either online through our website or by email. Include all
                                                    the gathered documentation to support your claim.
                                                </li>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mt-2">
                                            <div class="card p-1 h-100" data-aos="zoom-in">
                                                <li class="p-1"><strong>Step 4: Follow Up:</strong> After submitting,
                                                    our team will review the claim
                                                    and provide you with a reference number. You can track your claim status
                                                    through our portal or by contacting our claims department.
                                                </li>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 offset-lg-3 mt-2" data-aos="zoom-in">
                                            <div class="card p-1 h-100">
                                                <li class="p-1"><strong>Step 5: Claim Resolution:</strong> Our team will
                                                    work with you to resolve
                                                    your claim promptly, ensuring you’re informed throughout the process.
                                                    For larger claims, we’ll assign a dedicated adjuster to assist you.
                                                </li>
                                            </div>
                                        </div>
                                    </div>
                                </ul>
                            </div>
                        </div>


                    </div> <!-- end of container -->
                </div> <!-- end of row -->
            </div> <!-- end of col-lg-6 -->

        </div> <!-- end of row -->

    </section>


    <section class="work d-flex align-items-center " id='post-reporting-claim'>
        <div class="container-fluid text-light">
            <div class="row">

                <div class="col-lg-12 d-flex align-items-center px-4 py-3">
                    <div class="row">
                        <div class="text-center text-lg-start py-4 pt-lg-0">
                            <h2 class="py-2">Post Reporting Claim</h2>
                            <p class="para-light">
                                Filing a claim with Southlake Financial Holdings is simple and straightforward. Follow the
                                steps below to ensure your claim is processed as quickly and efficiently as possible.
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-4">
                                <ul class="list-unstyled">
                                    <div class="row d-flex align-items-stretch">
                                        <div class="col-lg-6" data-aos="zoom-in">
                                            <div class="card p-1 h-100">
                                                <li class="p-1"><strong>Step 1: Gather Information:</strong> Collect all
                                                    necessary information,
                                                    including your
                                                    policy number, details of the incident, and any supporting documentation
                                                    (photos, police
                                                    reports, etc.).</li>
                                            </div>
                                        </div>
                                        <div class="col-lg-6"data-aos="zoom-in">
                                            <div class="card p-1 h-100">
                                                <li class="p-1"><strong>Step 2: Contact Us:</strong> Call our claims
                                                    hotline at
                                                    <strong>1-800-555-CLAIM</strong>
                                                    or email <strong>claims@southlakeholdings.com</strong>. Our claims
                                                    specialists are available
                                                    24/7 to assist you.
                                                </li>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mt-2" data-aos="zoom-in">
                                            <div class="card p-1 h-100">
                                                <li class="p-1"><strong>Step 3: Submit Your Claim:</strong> Once you’ve
                                                    contacted us, submit
                                                    your claim form
                                                    either online through our website or by email. Include all the gathered
                                                    documentation to support
                                                    your claim.</li>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 mt-2">
                                            <div class="card p-1 h-100" data-aos="zoom-in">
                                                <li class="p-1"><strong>Step 4: Follow Up:</strong> After submitting,
                                                    our team will review the
                                                    claim and provide
                                                    you with a reference number. You can track your claim status through our
                                                    portal or by contacting
                                                    our claims department.</li>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 offset-lg-3 mt-2" data-aos="zoom-in">
                                            <div class="card p-1 h-100">
                                                <li class="p-1"><strong>Step 5: Claim Resolution:</strong> Our team will
                                                    work with you to
                                                    resolve your claim
                                                    promptly, ensuring you’re informed throughout the process. For larger
                                                    claims, we’ll assign a
                                                    dedicated adjuster to assist you.</li>
                                            </div>
                                        </div>
                                    </div>
                                </ul>
                            </div>
                        </div>


                    </div> <!-- end of container -->
                </div> <!-- end of row -->
            </div> <!-- end of col-lg-6 -->

        </div> <!-- end of row -->

    </section>
    </body>

    </html>
@endsection
