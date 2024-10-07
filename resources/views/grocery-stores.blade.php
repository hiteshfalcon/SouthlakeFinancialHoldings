@extends('layouts.app')

@section('content')

    <!-- Header -->
    <header class="ex-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <h1>Grocery Stores</h1>
                </div> 
            </div> 
        </div>
    </header>

    <div class="container-fluid grocery-stores-section">
        <div class="row">
            <div class="col p-3">
                <p>
                    Our insurance products are specifically tailored to meet the unique needs of grocery stores and supermarkets. Whether your business is a local market or a larger retail chain, we offer a comprehensive range of coverages to safeguard your store, employees, and customers from potential risks. From workers’ compensation to general liability, our plans provide peace of mind by protecting your grocery store from unforeseen incidents that could disrupt operations or lead to costly litigation. Connect with us today to discuss your options and receive a personalized quote, ensuring your grocery business remains protected from every angle.
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
                <h1 class="grocery-stores-section-type-o-i-c">Types of Insurance Coverages</h1>
            </div>
        </div>
    </header>

    <div class="container-fluid py-1 grocery-stores-section"> 
        <div class="row py-1">
            <div class="col-4 p-1">
                <img class="img-fluid" src="assets/images/article-details-large.jpg" alt="alternative" style="max-height: 150px;">
            </div>
            <div class="col-7 p-1">
                <p><b>Workers’ Compensation:</b> 
                    Workers' Compensation Insurance protects grocery stores by providing benefits to employees injured on the job. These benefits cover medical care, related medical expenses, retraining, lost wages until the employee can return to work, or compensation for permanent disability.
                </p>
            </div>
        </div>
    </div>

    <div class="container-fluid py-1 grocery-stores-section"> 
        <div class="row py-1">
            <div class="col-4 p-1">
                <img class="img-fluid" src="assets/images/article-details-large.jpg" alt="alternative" style="max-height: 150px;">
            </div>
            <div class="col-7 p-1">
                <p><b>General Liability Insurance:</b> 
                    General Liability Insurance provides coverage for bodily injury, personal injury, and property damage caused by the grocery store’s operations or products. This type of coverage is essential for protecting against claims made by third parties who suffer harm on your premises or due to your business activities.
                </p>
            </div>
        </div>
    </div>

    <div class="container-fluid py-1 grocery-stores-section"> 
        <div class="row py-1">
            <div class="col-4 p-1">
                <img class="img-fluid" src="assets/images/article-details-large.jpg" alt="alternative" style="max-height: 150px;">
            </div>
            <div class="col-7 p-1">
                <p><b>Commercial Property Insurance:</b> 
                    Commercial Property Insurance is vital for protecting your grocery store from property damage caused by fires, storms, theft, and other risks. This coverage extends to your building, equipment, and inventory, ensuring your store can recover from unforeseen losses.
                </p>
            </div>
        </div>
    </div>

    <div class="container-fluid py-1 grocery-stores-section"> 
        <div class="row py-1">
            <div class="col-4 p-1">
                <img class="img-fluid" src="assets/images/article-details-large.jpg" alt="alternative" style="max-height: 150px;">
            </div>
            <div class="col-7 p-1">
                <p><b>Commercial Auto Insurance:</b> 
                    Commercial Auto Insurance protects grocery stores that use vehicles for deliveries, pickups, or other business-related purposes. It provides coverage in the event of vehicle accidents, theft, vandalism, and other incidents, helping to cover repair or replacement costs.
                </p>
            </div>
        </div>
    </div>

    <div class="container-fluid py-1 grocery-stores-section"> 
        <div class="row py-1">
            <div class="col-4 p-1">
                <img class="img-fluid" src="assets/images/article-details-large.jpg" alt="alternative" style="max-height: 150px;">
            </div>
            <div class="col-7 p-1">
                <p><b>Employment Practices Liability Insurance (EPLI):</b> 
                    EPLI coverage protects grocery stores against employment-related claims such as discrimination, wrongful termination, and sexual harassment. This policy applies to all employees, including temporary, part-time, full-time, and seasonal workers, as well as volunteers and independent contractors.
                </p>
            </div>
        </div>
    </div>

    <div class="container-fluid py-1 grocery-stores-section"> 
        <div class="row py-1">
            <div class="col-4 p-1">
                <img class="img-fluid" src="assets/images/article-details-large.jpg" alt="alternative" style="max-height: 150px;">
            </div>
            <div class="col-7 p-1">
                <p><b>Cyber Insurance:</b> 
                    In today’s digital world, grocery stores must protect themselves against cyber threats. Cyber Insurance provides coverage for losses related to data breaches, including stolen customer information and other sensitive data. This coverage ensures your business can recover from cyber incidents that could otherwise cripple your operations.
                </p>
            </div>
        </div>
    </div>

@endsection
