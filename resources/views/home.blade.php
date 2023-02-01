@extends ('homepage.layouts.app')

@section('title','Homepage')

@section('content')

@include('homepage.includes.navbar')

  <!-- Carousel Start -->
    <div class="container-fluid p-0" id="index">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="assets-home/img/poo.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">



                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="assets-home/img/po.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">




                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container py-5" id="about">
        <div class="row py-5">
            <div class="col-lg-7 pb-5 pb-lg-0 px-3 px-lg-5">
                <h4 class="text-secondary mb-3">About Us</h4>
                <h1 class="display-4 mb-4"><i class='fas fa-paw' style='color: #ffbb00'></i> <span class="text-primary">Boarding</span> & <span class="text-secondary">Daycare</span></h1>
                <h5 class="text-muted mb-3">Our perfect companions never have fewer than four feet.</h5>
                <h5 class="text-muted mb-3">Care for us so we can care for you.</h5>
                <p class="mb-4">Helping our animal friends one paw at a time.</p>
                <ul class="list-inline">
                    <li><h5><i class="fa fa-check-double text-secondary mr-3"></i>Best In Industry</h5></li>
                    <li><h5><i class="fa fa-check-double text-secondary mr-3"></i>Emergency Services</h5></li>
                    <li><h5><i class="fa fa-check-double text-secondary mr-3"></i>24/7 Customer Support</h5></li>
                </ul>

            </div>
            <div class="col-lg-5">
                <div class="row px-3">
                    <div class="col-12 p-0">
                        <img class="img-fluid w-100" src="assets-home/img/petcare2.jpg" alt="">
                    </div>
                    <div class="col-6 p-0">
                        <img class="img-fluid w-100" src="assets-home/img/pic.jpg" alt="">
                    </div>
                    <div class="col-6 p-0">
                        <img class="img-fluid w-100" src="assets-home/img/pic1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Services Start -->
    <d class="container-fluid bg-light pt-5" id="service">
        <div class="container py-5">
            <div class="d-flex flex-column text-center mb-5">
                <h4 class="text-secondary mb-3">Our Services</h4>
                <h1 class="display-4 m-0"><i class='fas fa-paw' style='color: #ffbb00'></i> <span class="text-primary">Premium</span> Pet Services</h1>
            </div>
            <div class="row pb-3">
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
                        <h3 class="flaticon-house display-3 font-weight-normal text-secondary mb-3"></h3>
                        <h3 class="mb-3">Pet Boarding</h3>
                        <p>Our boarding facility is designed with individual suites to give privacy for your pet. We offer spacious playing area and rooftop.</p>

                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
                        <h3 class="flaticon-food display-3 font-weight-normal text-secondary mb-3"></h3>
                        <h3 class="mb-3">Pet Feeding</h3>
                        <p>Our Pet Feeding Services ensure your pets continue to enjoy all the creature comforts of home whist you're away!</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
                        <h3 class="flaticon-grooming display-3 font-weight-normal text-secondary mb-3"></h3>
                        <h3 class="mb-3">Pet Grooming</h3>
                        <p>Our facilities are equipped with top of the line products and we commit to deliver the best personalised service for your pet.</p>

                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
                        <h3 class="flaticon-cat display-3 font-weight-normal text-secondary mb-3"></h3>
                        <h3 class="mb-3">Pet Training</h3>
                        <p>Our pets training services are aimed at providing your pet with basic training, behavioural training, obedience training, and agility training.</p>

                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
                        <h3 class="flaticon-dog display-3 font-weight-normal text-secondary mb-3"></h3>
                        <h3 class="mb-3">Pet Exercise</h3>
                        <p>We came up with some great indoor and outdoor activities that will help your pets stay healthy and entertained and give them some mental stimulation.</p>

                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="d-flex flex-column text-center bg-white mb-2 p-3 p-sm-5">
                        <h3 class="flaticon-vaccine display-3 font-weight-normal text-secondary mb-3"></h3>
                        <h3 class="mb-3">Pet Treatment</h3>
                        <p>Our veterinarians and behaviorists offer up tips, solutions and answers to some of your most frequently asked questions to keep your pets happy and healthy.</p>

                    </div>
                </div>
            </div>
        </div>

    <!-- Services End -->


    <!-- Features Start -->
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <img class="img-fluid w-100" src="assets-home/img/petcare.jpg" alt="">
                <div class="col-12 p-0">
                    <img class="img-fluid w-100" src="assets-home/img/petcare3.jpg" alt="">
                </div>
        </div>
            <div class="col-lg-7 py-5 py-lg-0 px-3 px-lg-5">
                <h4 class="text-secondary mb-3">Why Choose Us?</h4>
                <h1 class="display-5 mb-3"><i class='fas fa-paw' style='color: #ffbb00'></i> <span class="text-primary">Special Care</span>
                     On Pets</h1>
                <p class="mb-4">We are your dog’s lifelong pet care provider.  We care for dogs of all ages and breeds.  Dogs that require medication and specialized care. We are terrific cat sitters and even cared for feral cats and colonies and barn cats too. A pet shop sells anything and everything pet-related. A pet shop supply offers the products needed to keep a pet healthy and happy. </p>
                <div class="row py-2">
                    <div class="col-6">
                        <div class="d-flex align-items-center mb-4">
                            <h1 class="flaticon-cat font-weight-normal text-secondary m-0 mr-3"></h1>
                            <h5 class="text-truncate m-0">Best In Industry</h5>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center mb-4">
                            <h1 class="flaticon-doctor font-weight-normal text-secondary m-0 mr-3"></h1>
                            <h5 class="text-truncate m-0">Emergency Services</h5>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center">
                            <h1 class="flaticon-care font-weight-normal text-secondary m-0 mr-3"></h1>
                            <h5 class="text-truncate m-0">Special Care</h5>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-flex align-items-center">
                            <h1 class="flaticon-dog font-weight-normal text-secondary m-0 mr-3"></h1>
                            <h5 class="text-truncate m-0">Customer Support</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->

   <!-- Products Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-5"> <i class='fas fa-paw' style='color: #ffbb00'></i> <span class="text-primary">Gallery</h1></span>
                </div>
            </div>


                <div class="row">
                    <div class="col-lg-4">
                        <div class="team card position-relative overflow-hidden border-0 mb-4">
                            <img class="card-img-top" src="assets-home/img/lol1.gif" alt="">
                            <div class="card-body text-center p-0">

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team card position-relative overflow-hidden border-0 mb-4">
                            <img class="card-img-top" src="assets-home/img/lol2.gif" alt="">
                            <div class="card-body text-center p-0">

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team card position-relative overflow-hidden border-0 mb-4">
                            <img class="card-img-top" src="assets-home/img/lol3.gif" alt="">
                            <div class="card-body text-center p-0">

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team card position-relative overflow-hidden border-0 mb-4">
                            <img class="card-img-top" src="assets-home/img/lol4.gif" alt="">
                            <div class="card-body text-center p-0">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team card position-relative overflow-hidden border-0 mb-4">
                            <img class="card-img-top" src="assets-home/img/lol5.gif" alt="">
                            <div class="card-body text-center p-0">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team card position-relative overflow-hidden border-0 mb-4">
                            <img class="card-img-top" src="assets-home/img/lol6.gif" alt="">
                            <div class="card-body text-center p-0">

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team card position-relative overflow-hidden border-0 mb-4">
                            <img class="card-img-top" src="assets-home/img/lol7.gif" alt="">
                            <div class="card-body text-center p-0">

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team card position-relative overflow-hidden border-0 mb-4">
                            <img class="card-img-top" src="assets-home/img/lol8.gif" alt="">
                            <div class="card-body text-center p-0">

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                            <div class="team card position-relative overflow-hidden border-0 mb-4">
                                <img class="card-img-top" src="assets-home/img/lol9.gif" alt="">
                                <div class="card-body text-center p-0">
                                </div>
                            </div>

                    </div>
                </div>
                </div>
            </div>
        </div>

    <!-- Products End -->



    {{-- <!-- Team Start -->
    <div class="container mt-5 pt-5 pb-3">
        <div class="d-flex flex-column text-center mb-5">
            <h4 class="text-secondary mb-3">Team Member</h4>

        </div>
        <div class="row">

            <div class="col-lg-3 col-md-6 text-center">
                <div class="team card position-relative overflow-hidden border-0 mb-4">
                    <img class="card-img-top text-center" src="assets-home/img/team-2.jpg" alt="">
                    <div class="card-body text-center p-0">
                        <div class="team-text d-flex flex-column justify-content-center bg-light">
                            <h5>Jennifer Page</h5>
                            <i>Chef Executive</i>
                        </div>
                        <div class="team-social d-flex align-items-center justify-content-center bg-dark">
                            <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-primary rounded-circle text-center px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 text-center">
                <div class="team card position-relative overflow-hidden border-0 mb-4">
                    <img class="card-img-top" src="assets-home/img/team-4.jpg" alt="">
                    <div class="card-body text-center p-0">
                        <div class="team-text d-flex flex-column justify-content-center bg-light">
                            <h5>Lilly Fry</h5>
                            <i>Trainer</i>
                        </div>
                        <div class="team-social d-flex align-items-center justify-content-center bg-dark">
                            <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary rounded-circle text-center mr-2 px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-primary rounded-circle text-center px-0" style="width: 36px; height: 36px;" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End --> --}}


     <!-- Contact Start -->
     <div class="container-fluid pt-5" id="contact" >
        <div class="d-flex flex-column text-center mb-5 pt-5">
            <h1 class="display-4 m-0"> <i class='fas fa-paw' style='color: #ffbb00'></i> Contact <span class="text-primary">Us</span></h1>
        </div>

            <div class="col-12 mb-n2 p-0">
                <iframe style="width: 100%; height: 500px;"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3941.303700235756!2d125.5370311!3d8.944137!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3301c04599e2e141%3A0x7bcb9bba49ebaead!2sPo%20Tropical%20Petshoppe!5e0!3m2!1sen!2sph!4v1674652649987!5m2!1sen!2sph" width="600" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

    <!-- Contact End -->

      <!-- Footer Start -->
      <div class="container-fluid bg-dark text-white mt-5 py-5 px-sm-3 px-md-5">

 <div class="col-12 text-center">
                        <h5 class="text-primary mb-4"><i class='fas fa-paw' style='color: #ffbb00'></i> Get In Touch</h5>

                    <div class="row">
                        <div class="col-sm-6 text-center text-sm-right border-right mb-3 mb-sm-0">
                            <p><i class="text-center fa fa-map-marker-alt mr-2"></i>424 T. Guingona Sr. Avenue
                            Butuan City</p>
                            <p class="mb-2"> 8600 Agusan Del Norte
                            Philippines</p>
                            <p><i class="text-center fa fa-phone-alt mr-2"></i>(085) 225 9277</p>

                        </div>
                        <div class="col-sm-6 text-center text-sm-left">

                            <p class="mb-3">Monday – Sunday</p>
                            <p class="mb-2">7:30AM – 7:00PM</p>
                            <p><i class="text-center fa fa-envelope mr-2"></i>perlureenreyespo@gmail.com</p>
                        </div>
                    </div>
                </div>

    <!-- Footer End -->


<!-- Back to Top -->

<a href="#" class="btn btn-lg btn-primary back-to-top" style="display: inline;"><i class="fa fa-angle-double-up"></i></a>

@endsection
