@extends('layouts.app')



@section('content')

<header class="ex-header">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 offset-xl-1">
                <h1>Contractors</h1>

            </div>
        </div>
    </div>
</header>

<body>

    <!-- Contractors Section -->
    <section class="contractor-section py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
             
                    <h4>Our products are specifically designed to meet the needs of contractor businesses. Connect with us to get a quote.</h4>
                    <a href="index.html#contact" class="btn btn-primary">Connect with us</a>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid" src="assets/images/contractor-industry-photo.jpg" alt="Contractor Industry">
                </div>
            </div>
        </div>
    </section>

    <!-- Types of Insurance Coverages Section -->
    <section class="insurance-categories">
    <div class="container">
        <h2>Types of Insurance Coverages</h2>
        <div class="row">
            <div class="col-lg-12">
                <!-- First Category in Box -->
                <div class="category-box mb-4">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="category-image-box">
                                <img class="img-fluid" src="{{ url('public/img/blog_2.jpg') }}" alt="Category Image">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="category-content-box">
                                <h3>Generic Category 1</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam vehicula, justo non faucibus tempor, lorem nunc gravida lectus, vitae lobortis purus dui ut erat.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Second Category in Box -->
                <div class="category-box mb-4">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="category-image-box">
                                <img class="img-fluid" src="{{ url('public/img/blog_2.jpg') }}" alt="Category Image">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="category-content-box">
                                <h3>Generic Category 2</h3>
                                <p>Nulla facilisi. Vivamus convallis cursus diam, ac suscipit est tincidunt et. Integer tincidunt nibh vitae justo hendrerit, vel malesuada eros aliquet.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Third Category in Box -->
                <div class="category-box mb-4">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="category-image-box">
                                <img class="img-fluid" src="{{ url('public/img/blog_2.jpg') }}" alt="Category Image">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="category-content-box">
                                <h3>Generic Category 3</h3>
                                <p>Praesent efficitur erat id justo bibendum lacinia. Vestibulum in purus non odio dapibus suscipit. Nam vel orci fermentum, pellentesque nisi nec, auctor urna.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Fourth Category in Box -->
                <div class="category-box mb-4">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="category-image-box">
                                <img class="img-fluid" src="{{ url('public/img/blog_2.jpg') }}" alt="Category Image">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="category-content-box">
                                <h3>Generic Category 4</h3>
                                <p>Donec venenatis felis non felis consequat, ut auctor odio consectetur. Duis fringilla ante sit amet enim ultricies, et fermentum purus volutpat.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Fifth Category in Box -->
                <div class="category-box mb-4">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="category-image-box">
                                <img class="img-fluid" src="{{ url('public/img/blog_2.jpg') }}" alt="Category Image">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="category-content-box">
                                <h3>Generic Category 5</h3>
                                <p>Curabitur vel augue ut lorem consectetur tempor. In dapibus massa sed nibh viverra vehicula. Sed volutpat magna sed enim convallis, ac tincidunt magna tincidunt.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</section>

</body>


@endsection