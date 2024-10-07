@extends('layouts.app')



@section('content')

        <br><br>
          
<section class="claimss d-flex align-items-center py-6" id="claimss">
    <div class="container text-light">
        <div class="text-center pb-4">
        </div>
        <div class="col-xl-10 offset-xl-1">
                <h1 style="font-family: 'Source Serif Pro', serif; font-weight: bold; color: #2c3e50; ">Claims</h1>

            </div>
            <br><br>
      
        <div class="row gy-4 py-2 justify-content-center" data-aos="zoom-in">
            <!-- First three cards (centered and bigger) -->
            <div class="col-lg-4 d-flex justify-content-center">
                <a href="https://www.southlakespecialty.com/fnol/" target='blank' class="card bg-transparent text-decoration-none text-light" style="min-height: 180px; width:250px; font-size: 1.5rem;"> <!-- Add link here -->
                    <h4 class="py-2">Report A Claim</h4>
                </a>
            </div>
        
            <div class="col-lg-4 d-flex justify-content-center">
                <a href="#checkstatus" class="card bg-transparent text-decoration-none text-light"style="min-height: 180px; width:250px; font-size: 1.5rem; margin-right: 103px;"> <!-- Add link here -->
                    <h4 class="py-2">Check Status</h4>
                </a>
            </div>
            <div class="col-lg-4 d-flex justify-content-center">
                <a href="contact-claim-url" class="card bg-transparent text-decoration-none text-light p-3" style="min-height: 180px; min-width:460px; font-size: 0.25rem;"> <!-- Adjust min-height as needed -->
                    <h4 class="py-2">Contact Claim</h4>
                    <p style="font-size: 18px; font-family: 'Georgia', serif; color: #34495e; line-height: 1.6; text-align: center;">Our claims center is staffed with specialists who are there to assist when you
                        have reported an incident.
                        Call: 800-597-0242
                        Email: claims@southlakespecialty.com</p>
                </a>
            </div>
        </div>
       <br><br>
        <!-- Bottom right corner: How to Report Claims and Post Reporting Claims (smaller) -->
        <div class="row justify-content-end mt-5">
            <div class="col-auto">
                <a href="#how-to-report" class="btn btn-secondary btn-lg mb-3">How to Report Claims</a>
            </div>
            <div class="col-auto">
                <a href="#post-reporting-claim" class="btn btn-secondary btn-lg mb-3">Post Reporting Claims</a>
            </div>
        </div>
    </div>

</section>









<section class="contact d-flex align-items-center justify-content-center py-5" id="checkstatus" style="min-height: 100vh;">
    <div class="container-fluid text-light">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 col-12" data-aos="fade-right">
                <div style="width: 100%">
                    <div class="text-center py-4 pt-lg-0">
                        <h2 class="py-2">Enter the info to Check Status</h2>
                    </div>
                    <div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group py-2">
                                    <input type="text" class="form-control form-control-input" id="firstName" placeholder="Enter first name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group py-2">
                                    <input type="text" class="form-control form-control-input" id="lastName" placeholder="Enter last name">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group py-2">
                                    <input type="email" class="form-control form-control-input" id="email" placeholder="Enter Email">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group py-2">
                                    <input type="text" class="form-control form-control-input" id="phone" placeholder="Enter Phone">
                                </div>
                            </div>
                        </div>
                        <div class="form-group py-2">
                            <input type="text" class="form-control form-control-input" id="claimNumber" placeholder="Enter Claim Number">
                        </div>
                        <div class="form-group py-2">
                            <textarea class="form-control form-control-input" id="comments" rows="4" placeholder="Other Comments"></textarea>
                        </div>
                    </div>
                    <div class="my-3 text-center">
                        <a class="btn form-control-submit-button" href="#your-link">Submit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<section class="work d-flex align-items-center py-5" id="how-to-report">
    <div class="container-fluid text-light">
    <div class="row">   
    <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right">
                <img class="img-fluid" src="./assets/images/work.jpg" alt="work">        
            </div>
     <!-- Center the row content -->
            <div class="col-lg-6 d-flex align-items-center px-4 py-3" data-aos="">
                
            <div class="row">
                    <div class="col-12 py-4 pt-lg-0">
                        <h2 class="py-2">A. How To Report a Claim?</h2>
                        <p class="para-light">
                            Filing a claim with Southlake Financial Holdings is simple and straightforward. Follow the steps below to ensure your claim is processed as quickly and efficiently as possible.
                        </p>
                    </div>
                    <div class="col-12 mt-4">
                        <ul class="list-unstyled">
                            <li><strong>Step 1: Gather Information:</strong> Collect all necessary information, including your policy number, details of the incident, and any supporting documentation (photos, police reports, etc.).</li>
                            <li><strong>Step 2: Contact Us:</strong> Call our claims hotline at <strong>1-800-555-CLAIM</strong> or email <strong>claims@southlakeholdings.com</strong>. Our claims specialists are available 24/7 to assist you.</li>
                            <li><strong>Step 3: Submit Your Claim:</strong> Once you’ve contacted us, submit your claim form either online through our website or by email. Include all the gathered documentation to support your claim.</li>
                            <li><strong>Step 4: Follow Up:</strong> After submitting, our team will review the claim and provide you with a reference number. You can track your claim status through our portal or by contacting our claims department.</li>
                            <li><strong>Step 5: Claim Resolution:</strong> Our team will work with you to resolve your claim promptly, ensuring you’re informed throughout the process. For larger claims, we’ll assign a dedicated adjuster to assist you.</li>
                        </ul>
                    </div>
           
       </div > 
       </div > 
 </div> <!-- end of col-lg-6 -->
      <!-- end of row -->
    </div> <!-- end of container-fluid -->
</section>



<section class="work d-flex align-items-center py-5" id='post-reporting-claim'>
    <div class="container-fluid text-light">
        <div class="row">
            
            <div class="col-lg-6 d-flex align-items-center px-4 py-3" data-aos="">
                <div class="row">
                    <div class="text-center text-lg-start py-4 pt-lg-0">
                        <h2 class="py-2">Post Reporting Claims</h2>
                        <p class="para-light">
                            Filing a claim with Southlake Financial Holdings is simple and straightforward. Follow the steps below to ensure your claim is processed as quickly and efficiently as possible.
                        </p>
                    </div>
                   
                    <div class="row">
                        <div class="col-12 mt-4">
                            <ul class="list-unstyled">
                                <li><strong>Step 1: Gather Information:</strong> Collect all necessary information, including your policy number, details of the incident, and any supporting documentation (photos, police reports, etc.).</li>
                                <li><strong>Step 2: Contact Us:</strong> Call our claims hotline at <strong>1-800-555-CLAIM</strong> or email <strong>claims@southlakeholdings.com</strong>. Our claims specialists are available 24/7 to assist you.</li>
                                <li><strong>Step 3: Submit Your Claim:</strong> Once you’ve contacted us, submit your claim form either online through our website or by email. Include all the gathered documentation to support your claim.</li>
                                <li><strong>Step 4: Follow Up:</strong> After submitting, our team will review the claim and provide you with a reference number. You can track your claim status through our portal or by contacting our claims department.</li>
                                <li><strong>Step 5: Claim Resolution:</strong> Our team will work with you to resolve your claim promptly, ensuring you’re informed throughout the process. For larger claims, we’ll assign a dedicated adjuster to assist you.</li>
                            </ul>
                        </div>
                    </div>
                </div> <!-- end of container -->
            </div> <!-- end of row -->
            <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right">
                <img class="img-fluid" src="./assets/images/work.jpg" alt="work">        
            </div>
        </div> <!-- end of col-lg-6 -->
    </div> <!-- end of row -->
</section>


</body>
</html>





@endsection