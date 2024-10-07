@extends('layouts.app')

@section('content')

    <!-- Header -->
    <header class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <h1>Garage Keepers Packages</h1>
                </div> 
            </div> 
        </div>
    </header>

    <div class="container-fluid garage-keepers-section">
        <div class="row">
            <div class="col p-3">
                <p>
                    Our Garage Keepers Packages are specifically crafted to meet the diverse needs of businesses in the automotive industry. Whether you operate a garage, body shop, or a service station, our tailored insurance solutions offer comprehensive protection against the unique risks your business faces. From general liability to property and umbrella coverage, we ensure that your business is fully protected from potential financial losses caused by property damage, legal claims, and more. Our expert team is ready to help you find the best insurance package for your business, providing peace of mind and a secure future. Contact us today for a personalized quote.
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
                <h1 class="garage-keepers-section-type-o-i-c">Types of Insurance Coverages</h1>
            </div>
        </div>
    </header>

    <div class="container-fluid py-1 garage-keepers-section"> 
        <div class="row py-1">
            <div class="col-4 p-1">
                <img class="img-fluid" src="assets/images/article-details-large.jpg" alt="alternative" style="max-height: 150px;">
            </div>
            <div class="col-7 p-1">
                <p><b>General Liability Insurance:</b> 
                    We offer a general liability policy that covers damages and legal costs associated with injury claims by customers or other non-employees, damage to third-party property caused by your business, and related medical costs. This policy ensures your business is protected from the financial burden of lawsuits or injury claims.
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
                <p><b>Umbrella Insurance:</b> 
                    Every liability insurance policy you purchase has a maximum value it will cover in the event of an incident. Umbrella insurance provides an additional layer of protection, covering costs that exceed the limit of your other liability policies. This ensures that your business remains safeguarded even when the unexpected happens.
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
                <p><b>Business Owners Policy (BOP):</b> 
                    A Business Owners Policy (BOP) combines general liability insurance with coverage for your business’s property. This package protects your building, leased space, and any property needed to run your operations. Additionally, it covers business interruption, ensuring your company can recover from unexpected events and continue running smoothly.
                </p>
            </div>
        </div>
    </div>

@endsection
