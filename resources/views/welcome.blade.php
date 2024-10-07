<!-- resources/views/contractors.blade.php -->
@extends('layouts.app')<!-- Use your layout file -->

@section('content')


    <!-- Home -->
    <section class="home py-5 d-flex align-items-center" id="header">
        <div class="container text-light py-5"  data-aos="fade-right"> 
            <h1 class="headline1" style="color:rgb(78, 66, 89)";>Fronting <span class="home_text">Done Right:</span><br>Secure, Tailored and Dynamic</h1>
            <p class="para para-light py-3">As the national leader in fronting, Southlake Finance Holdings Company is committed to delivering unparalleled fronting solutions that empower MGAs to thrive in a complex marketplace.</p>
            <div class="d-flex align-items-center">
                <p class="p-2"><i class="fas fa-laptop-house fa-lg"></i></p>
             
            </div>
            <!-- <div class="d-flex align-items-center">
                <p class="p-2"><i class="fas fa-wifi fa-lg"></i></p>
                <p>Lorem ipsum dolor sit amet.</p>  
            </div> -->
            <div class="my-3">
                <a class="btn" href="#about">About US</a>
            </div>
        </div> <!-- end of container -->
    </section> <!-- end of home -->


    <!-- Information -->
    <!-- <section class="information">
        <div class="container-fluid">  
            <div class="row text-light">
                <div class="col-lg-4 text-center p-5" data-aos="zoom-in">
                    <i class="fas fa-tachometer-alt fa-3x p-2"></i>
                    <h4 class="py-3">Download 1 GBPS</h4>
                    <p class="para-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam odit consequatur doloribus natus in suscipit!</p>
                </div>
                <div class="col-lg-4 text-center p-5"  data-aos="zoom-in">
                    <i class="fas fa-clock fa-3x p-2"></i>
                    <h4 class="py-3">99% Internet Uptime</h4>
                    <p class="para-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam odit consequatur doloribus natus in suscipit!</p>
                </div>
                <div class="col-lg-4 text-center p-5 text-dark"  data-aos="zoom-in"> 
                    <i class="fas fa-headset fa-3x p-2"></i>
                    <h4 class="py-3">24/7 Support </h4>
                    <p class="para-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam odit consequatur doloribus natus in suscipit!</p>
                </div>
            </div>
        </div> end of container
    </section> end of information -->
    

    <!-- About -->
    <section class="about d-flex align-items-center text-light py-5" id="about">
        <div class="container" >
            <div class="row d-flex align-items-center">
                <div class="col-lg-7" data-aos="fade-right">
                    <h1>About </h1>
                    <h1>Southlake  <br> Financial Holdings:</h1>
                    <p class="py-2 para-light"> Your Insurance Powerhouse.
                        We're fronting experts, unlocking new markets for our clients. But we don't stop there. As a full-service insurance provider, we offer MGA, reinsurance, and retail solutions. Your one-stop shop for comprehensive risk management.
                        </p>
                    <p class="py-2 para-light">Delivering Customized Solutions. Our team goes beyond the basics to provide innovative risk strategies tailored to your needs. From managing complex insurance portfolios to ensuring seamless claims processing, we deliver value every step of the way. Partner with us for a robust, reliable approach to securing your future
                        </p>

                    <div class="my-3">
                        <a class="btn" href="#services">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-5 text-center py-4 py-sm-0" data-aos="fade-down"> 
                    <img class="img-fluid" src="./assets/images/about.jpg" alt="about" >
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of about -->


    <!-- Services -->
    <section class="services d-flex align-items-center py-5" id="services">
        <div class="container text-light">
            <div class="text-center pb-4" >
               
                <h2 class="py-2">Explore unlimited possibilities</h2>
            </div>
            <div class="row gy-4 py-2" data-aos="zoom-in">
            <div class="col-lg-4">
                    <div class="card bg-transparent">
                        <i class="fas fa-shield-alt fa-2x" style="color: #5a615c !important;margin-top: -16px;padding-bottom: 10px;width: 32px;margin-top: -17px;position: relative;top: 3pc;height: 52px !important;"></i>
                        <h4 class="py-2"style="margin-left: 49px;">Fronting Services</h4>
                        <p class="para-light">Mitigate Risk, Maximize Opportunity with Fronting</p>
                    </div>
                </div>
                <div class="col-lg-4">
    <div class="card bg-transparent">
        <i class="fas fa-cogs fa-2x" style="color: #5a615c !important;margin-top: -16px;padding-bottom: 10px;width: 32px;margin-top: -17px;position: relative;top: 3pc;height: 52px !important;"></i>
        <h4 class="py-2" style="margin-left: 49px;">Program Business</h4>
        <p class="para-light">Explore Endless Possibilities in Program Business.</p>
    </div>
</div>
<div class="col-lg-4">
    <div class="card bg-transparent">
        <i class="fas fa-handshake fa-2x" style="color: #5a615c !important;margin-top: -16px;padding-bottom: 10px;width: 32px;margin-top: -17px;position: relative;top: 3pc;height: 52px !important;"></i>
        <h4 class="py-2" style="margin-left: 49px;">MGA Partnerships</h4>
        <p class="para-light">Partner with Us to Build Your Insurance Book.</p>
    </div>
</div>
<div class="col-lg-4 offset-lg-2">
    <div class="card bg-transparent">
        <i class="fas fa-users fa-2x" style="color: #5a615c !important;margin-top: -16px;padding-bottom: 10px;width: 32px;margin-top: -17px;position: relative;top: 3pc;height: 52px !important;"></i>
        <h4 class="py-2" style="margin-left: 49px;">Retail Broker Partnerships</h4>
        <p class="para-light">Leverage the Winning Combination </p>
    </div>
</div>
<div class="col-lg-4">
    <div class="card bg-transparent">
        <i class="fas fa-sync-alt fa-2x" style="color: #5a615c !important;margin-top: -16px;padding-bottom: 10px;width: 32px;margin-top: -17px;position: relative;top: 3pc;height: 52px !important;"></i>
        <h4 class="py-2" style="margin-left: 49px;">Reinsurance Services</h4>
        <p class="para-light">Expert Reinsurance Solutions.</p>
    </div>
</div>

            </div>
            <!-- end of row -->
        </div> <!-- end of container -->
    </section> <!-- end of services -->
   

    <!-- Plans -->
    <section class="plans d-flex align-items-center py-5" id="distinguishing-factors">
        <div class="container text-light">
            <div class="text-center pb-4">
                <h2>OUR DISTINGUISHING FACTORS</h2>
                <h2 class="py-2">What Sets Us Apart</h2>
                <p class="para-light">Our commitment to excellence is rooted in industry expertise, financial strength, and broad reach. We are dedicated to providing the highest quality services with a focus on long-term success.</p>
            </div>
            <div class="row gy-4" >
                <div class="col-lg-6">
                    <div class="card bg-transparent px-4">
                        <h4 class="py-2">Seasoned Leadership</h4>
                        <p class="py-3">Our leadership team is composed of highly experienced professionals who bring deep industry knowledge and strategic insight.</p>
                        <div class="block d-flex align-items-center">
                            <p class="pe-2"><i class="far fa-check-circle fa-1x"></i></p>
                            <p>Decades of leadership experience in insurance, underwriting, and risk management.</p>
                        </div>
                        <div class="block d-flex align-items-center">
                            <p class="pe-2"><i class="far fa-check-circle fa-1x"></i></p>
                            <p>Proven track record of guiding businesses through complex industry landscapes.</p>
                        </div>
                    </div>
                </div>
    
                <div class="col-lg-6">
                    <div class="card bg-transparent px-4">
                        <h4 class="py-2">Strong Underwriting </h4>
                        <p class="py-3">We excel in underwriting and actuarial services, ensuring sound risk assessment and financial stability.</p>
                        <div class="block d-flex align-items-center">
                            <p class="pe-2"><i class="far fa-check-circle fa-1x"></i></p>
                            <p>Expertise in developing tailored risk models to meet specific client needs.</p>
                        </div>
                        <div class="block d-flex align-items-center">
                            <p class="pe-2"><i class="far fa-check-circle fa-1x"></i></p>
                            <p>Robust actuarial frameworks that deliver predictive accuracy and financial insight.</p>
                        </div>
                    </div>
                </div>
    
                <div class="col-lg-6">
                    <div class="card bg-transparent px-4">
                        <h4 class="py-2">A- VII (Excellent) Rated by AM Best</h4>
                        <p class="py-3">We are proud to hold an A- VII (Excellent) rating from AM Best, reflecting our financial strength and operational performance.</p>
                        <div class="block d-flex align-items-center">
                            <p class="pe-2"><i class="far fa-check-circle fa-1x"></i></p>
                            <p>AM Best ratings indicate our stability and reliability in the marketplace.</p>
                        </div>
                        <div class="block d-flex align-items-center">
                            <p class="pe-2"><i class="far fa-check-circle fa-1x"></i></p>
                            <p>Recognition of our ability to meet ongoing insurance obligations to policyholders.</p>
                        </div>
                    </div>
                </div>
    
                <div class="col-lg-6">
                    <div class="card bg-transparent px-4">
                        <h4 class="py-2">Ability to Write in 47 States</h4>
                        <p class="py-3">Our expansive coverage across 47 states enables us to provide comprehensive insurance solutions nationwide.</p>
                        <div class="block d-flex align-items-center">
                            <p class="pe-2"><i class="far fa-check-circle fa-1x"></i></p>
                            <p>Licensed and equipped to serve clients with diverse needs across the country.</p>
                        </div>
                        <div class="block d-flex align-items-center">
                            <p class="pe-2"><i class="far fa-check-circle fa-1x"></i></p>
                            <p>Supporting businesses with a strong local presence and nationwide reach.</p>
                        </div>
                    </div>
                </div>
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section>
    
    <!-- end of plans -->


   <!-- Testimonials -->
   <div class="slider-1 testimonial text-light d-flex align-items-center" id='valuechain'>
        <div class="container">
            <div class="row">
                <div class="text-center w-lg-75 m-auto pb-4">
                  
                    <h2 class="py-2">Business Value Chain</h2>
                    <p class="para-light">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Adipisci esse facilis vel, neque ipsa mollitia impedit, commodi ab illo dignissimos, voluptatum quae amet sed tenetur dolores reprehenderit laudantium quo sint.</p>
                </div>
            </div> <!-- end of row -->
      
            <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of testimonials -->

<!-- Work -->
<!-- Work -->
<section class="work d-flex align-items-center py-5" id='fronting'>
    <div class="container-fluid text-light">
        <div class="row">
            <div class="col-lg-6 d-flex align-items-center" data-aos="fade-right">
                <img class="img-fluid" src="./assets/images/work.jpg" alt="work">        
            </div>
            <div class="col-lg-6 d-flex align-items-center px-4 py-3" data-aos="">
                <div class="row">
                    <div class="text-center text-lg-start py-4 pt-lg-0">
                        <h2>THE SOUTHLAKE ADVANTAGE</h2>
                        <h2 class="py-2">A.	How Fronting works ?</h2>
                        <p class="para-light">
                            Fronting is a contract where a licensed insurer issues policies on behalf of another entity (program sponsor). The fronting carrier handles underwriting and administration, while the program sponsor owns the risk and financial liability.
                        </p>
                    </div>
                   
                        <div class="row">
                            <div class="col-12 mt-4">
                                <ul class="list-unstyled">
                                    <li><strong>Nationwide Authority:</strong> Experience unparalleled access to 'A'-rated insurance in 47 states through Southlake Financial Holdings, Westlake Specialty, and Nevada General.</li>
                                    <li><strong>Superior Service:</strong> We don’t just promise service; we provide it. Our team is empowered to cut through the bureaucracy and meet your needs swiftly.</li>
                                    <li><strong>Tailored Solutions:</strong> Your challenges are unique, and so are our solutions. We deliver personalized strategies to meet your needs.</li>
                                    <li><strong>Efficiency:</strong> Leverage advanced technology for maximum efficiency. Our direct collaboration model with program managers, reinsurers, and carriers offers exceptional resources and cost-effectiveness.</li>
                                </ul>
                            </div>
                        </div>
                    </div> <!-- end of container -->
                </div> <!-- end of row -->
            </div> <!-- end of col-lg-6 -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</section> <!-- end of work -->



 


    <!-- Newsletter -->
    <!-- <section class="newsletter text-light py-5">
        <div class="container">
            <div class="row" >
                <div class="col-lg-6 text-center text-lg-start" data-aos="fade-right">
                    <h4 class="py-1">Subscribe to our Newsletter</h4>
                    <p class="para-light">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor deleniti nobis amet accusamus debitis facilis quibusdam officia laborum nesciunt. Nihil.</p>
                </div>
                <div class="col-lg-6 d-flex align-items-center" data-aos="fade-down">
                    <div class="input-group my-3">
                        <input type="text" class="form-control p-2" placeholder="Enter your email address" aria-label="Recipient's email">
                        <button class="btn-secondary text-light" type="button">Subscribe</button>
                    </div>
                </div>
            </div> <! end of row -
        </div>  end of container --
    </section> -->
    
    <!-- end of newsletter -->


    <!-- Contact -->
   
    <section class="contact d-flex align-items-center py-5" id="contact">
        <div class="container-fluid text-light">
            <div class="row">
                <div class="col-lg-6 d-flex justify-content-center justify-content-lg-end align-items-center px-lg-5" data-aos="fade-right">
                    <div style="width:90%">
                        <div class="text-center text-lg-start py-4 pt-lg-0">
                            <h2>CONTACT US</h2>
                            
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group py-2">
                                        <input type="text" class="form-control form-control-input" id="firstNameInput" placeholder="First Name*" required>
                                    </div>                                
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group py-2">
                                        <input type="text" class="form-control form-control-input" id="lastNameInput" placeholder="Last Name*" required>
                                    </div>                                 
                                </div>
                            </div>
                            <div class="form-group py-1">
                                <input type="text" class="form-control form-control-input" id="businessNameInput" placeholder="Business Name*" required>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group py-2">
                                        <input type="text" class="form-control form-control-input" id="cityInput" placeholder="City">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group py-2">
                                        <select class="form-control form-control-input" id="stateInput" placeholder="State">
                                            <option value=""selected >Select State</option>
                                            <option value="AL">Alabama</option>
                                            <option value="AK">Alaska</option>
                                            <option value="AZ">Arizona</option>
                                            <option value="AR">Arkansas</option>
                                            <option value="CA">California</option>
                                            <option value="CO">Colorado</option>
                                            <option value="CT">Connecticut</option>
                                            <option value="DE">Delaware</option>
                                            <option value="FL">Florida</option>
                                            <option value="GA">Georgia</option>
                                            <option value="HI">Hawaii</option>
                                            <option value="ID">Idaho</option>
                                            <option value="IL">Illinois</option>
                                            <option value="IN">Indiana</option>
                                            <option value="IA">Iowa</option>
                                            <option value="KS">Kansas</option>
                                            <option value="KY">Kentucky</option>
                                            <option value="LA">Louisiana</option>
                                            <option value="ME">Maine</option>
                                            <option value="MD">Maryland</option>
                                            <option value="MA">Massachusetts</option>
                                            <option value="MI">Michigan</option>
                                            <option value="MN">Minnesota</option>
                                            <option value="MS">Mississippi</option>
                                            <option value="MO">Missouri</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NV">Nevada</option>
                                            <option value="NH">New Hampshire</option>
                                            <option value="NJ">New Jersey</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="NY">New York</option>
                                            <option value="NC">North Carolina</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="OH">Ohio</option>
                                            <option value="OK">Oklahoma</option>
                                            <option value="OR">Oregon</option>
                                            <option value="PA">Pennsylvania</option>
                                            <option value="RI">Rhode Island</option>
                                            <option value="SC">South Carolina</option>
                                            <option value="SD">South Dakota</option>
                                            <option value="TN">Tennessee</option>
                                            <option value="TX">Texas</option>
                                            <option value="UT">Utah</option>
                                            <option value="VT">Vermont</option>
                                            <option value="VA">Virginia</option>
                                            <option value="WA">Washington</option>
                                            <option value="WV">West Virginia</option>
                                            <option value="WI">Wisconsin</option>
                                            <option value="WY">Wyoming</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group py-2">
                                        <input type="text" class="form-control form-control-input" id="zipCodeInput" placeholder="Zip Code">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group py-1">
                                <input type="email" class="form-control form-control-input" id="emailInput" placeholder="Email">
                            </div>
                            <div class="form-group py-2">
                                <input type="text" class="form-control form-control-input" id="phoneInput" placeholder="Phone">
                            </div>
                            <div class="form-group py-2">
                                <select class="form-control form-control-input" id="coverageTypeInput">
                                    <option value=""  >Type of Coverage</option>
                                    <option value="1"  >Type 1</option>
                                    <option value="2"  >Type 2</option>
                                    <!-- Add options here -->
                                </select>
                            </div>
                            <div class="form-group py-2">
                                <textarea class="form-control form-control-input" id="commentsInput" rows="6" placeholder="Comments/Questions"></textarea>
                            </div>
                          
                            <!-- <div class="g-recaptcha" data-sitekey="YOUR_SITE_KEY"></div> -->
                            <div class="my-3">
                                <button class="btn form-control-submit-button" type="submit">SUBMIT</button>
                            </div>
                        </div>
                    </div> <!-- end of div -->
                </div> <!-- end of col -->
                <div class="col-lg-6 d-flex align-items-center" data-aos="fade-down">
                <section class="location text-light py-5">
                        <div class="container" data-aos="zoom-in"style="padding-left: 168px; background-color: #e4ebf2;">
                            <div class="row">
                                <div class="col-12 mb-4">
                                    <div class="d-flex align-items-center">
                                        <div class="p-2"><i class="far fa-map fa-3x"></i></div>
                                        <div class="ms-2">
                                            <h6>ADDRESS</h6>
                                            <p>Teuku Umar ST. 1919</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="d-flex align-items-center">
                                        <div class="p-2"><i class="fas fa-mobile-alt fa-3x"></i></div>
                                        <div class="ms-2">
                                            <h6>CALL FOR QUERY</h6>
                                            <p>00-597-0242</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mb-4">
                                    <div class="d-flex align-items-center">
                                        <div class="p-2"><i class="far fa-envelope fa-3x"></i></div>
                                        <div class="ms-2">
                                            <h6>SEND US MESSAGE</h6>
                                            <p><a href="mailto:claims@southlakespecialty.com" class="text-light">claims@southlakespecialty.com</a></p>
                                        </div>
                                    </div>
                                </div>
                                
                            </div> <!-- end of row -->
                        </div> <!-- end of container -->
                    </section>

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </section> 



    <!-- Location -->


 <!-- end of location -->
    
    <script>
    $(document).ready(function() {
        $('#stateInput').select2({
            placeholder: "Select State",
            allowClear: true
        });
    });
</script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <!-- Footer -->
   
@endsection