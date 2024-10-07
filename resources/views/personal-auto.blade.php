@extends('layouts.app')

@section('content')

    <!-- Header -->
    <header class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <h1>Personal Auto </h1>
                </div> 
            </div> 
        </div>
    </header>

    <div class="container-fluid garage-keepers-section">
        <div class="row">
            <div class="col p-3">
                <p>
                    Our personal auto insurance products are tailored to meet the diverse needs of auto owners. Whether you drive a compact car, an SUV, or a high-performance vehicle, our comprehensive coverage options ensure you are protected against a variety of risks on the road. From safeguarding yourself in the event of an accident to covering damages from unexpected events, we have the right insurance solutions to provide you with peace of mind while driving. Connect with us today to receive a personalized quote and discover how we can help protect your vehicle and your financial well-being.
                </p>

                <button type="button" class="btn btn-light mt-4">Contact With Us</button>
            </div>
            <div class="col p-3">
                <img class="img-fluid mt-5 mb-3" src="assets/images/article-details-large.jpg" alt="alternative">
            </div>
        </div>
    </div>

    <header class="p-4 ex-header">
        <div class="row">
            <div class="col-xl-10">
                <h1 class="garage-keepers-section-type-o-i-c">Types of Coverage We Offer</h1>
            </div>
        </div>
    </header>

    <div class="container-fluid py-1 garage-keepers-section"> 
        <div class="row py-1">
            <div class="col-4 p-1">
                <img class="img-fluid" src="assets/images/article-details-large.jpg" alt="alternative" style="max-height: 150px;">
            </div>
            <div class="col-7 p-1">
                <p><b>Liability Coverage:</b> 
                    Liability coverage is essential for protecting yourself if you are found at fault in an accident. This coverage includes Bodily Injury Liability for each person and each accident, as well as Property Damage Liability for each accident. It ensures you are covered for medical and property damage expenses incurred by others due to your driving.
                </p>
            </div>
        </div>
    </div>

    <div class="container-fluid py-1 garage-keepers-section"> 
        <div class="row py-1">
            <div class="col-4 p-1">
                <img class="img-fluid" src="assets/images/article-details-large.jpg" alt="alternative" style="max-height: 150px;">
            </div>
            <div class="col-7 p-1">
                <p><b>Personal Injury Protection:</b> 
                    Often referred to as PIP, Personal Injury Protection is a no-fault insurance that covers medical and non-medical expenses for you and your passengers following a car accident, regardless of who is at fault. It also extends coverage if you are injured in another person’s vehicle or as a pedestrian.
                </p>
            </div>
        </div>
    </div>

    <div class="container-fluid py-1 garage-keepers-section"> 
        <div class="row py-1">
            <div class="col-4 p-1">
                <img class="img-fluid" src="assets/images/article-details-large.jpg" alt="alternative" style="max-height: 150px;">
            </div>
            <div class="col-7 p-1">
                <p><b>Uninsured / Underinsured Coverage:</b> 
                    Uninsured / Underinsured Motorist Coverage (UM) protects you if you are involved in an accident with drivers who do not have adequate insurance or no insurance at all. This coverage also includes protection in the event of a hit-and-run accident.
                </p>
            </div>
        </div>
    </div>

    <div class="container-fluid py-1 garage-keepers-section"> 
        <div class="row py-1">
            <div class="col-4 p-1">
                <img class="img-fluid" src="assets/images/article-details-large.jpg" alt="alternative" style="max-height: 150px;">
            </div>
            <div class="col-7 p-1">
                <p><b>Collision Coverage:</b> 
                    Collision coverage helps pay for repairs to your vehicle if it is damaged in an accident involving another vehicle. This coverage does not extend to damages caused by theft, vandalism, or fire, nor does it cover damages to another person’s vehicle.
                </p>
            </div>
        </div>
    </div>

    <div class="container-fluid py-1 garage-keepers-section"> 
        <div class="row py-1">
            <div class="col-4 p-1">
                <img class="img-fluid" src="assets/images/article-details-large.jpg" alt="alternative" style="max-height: 150px;">
            </div>
            <div class="col-7 p-1">
                <p><b>Comprehensive Coverage:</b> 
                    Comprehensive coverage, also known as “Other-than-Collision” coverage, protects your vehicle from damages caused by events other than a collision. This includes damages from natural disasters, theft, vandalism, and other unexpected incidents.
                </p>
            </div>
        </div>
    </div>

    <div class="container-fluid py-1 garage-keepers-section"> 
        <div class="row py-1">
            <div class="col-4 p-1">
                <img class="img-fluid" src="assets/images/article-details-large.jpg" alt="alternative" style="max-height: 150px;">
            </div>
            <div class="col-7 p-1">
                <p><b>Rental Coverage:</b> 
                    Rental Reimbursement Coverage provides financial assistance for a rental car while your own vehicle is being repaired due to a covered loss. We offer flexible limits to fit your needs, ensuring you have transportation during the repair period.
                </p>
            </div>
        </div>
    </div>

@endsection
