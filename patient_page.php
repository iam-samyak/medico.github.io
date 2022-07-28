<?php
    @include 'config.php';
    session_start();

    if(!isset($_SESSION['patient_name'])){
        header('location:login_form.php');
    }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient - Medicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="image/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
</head>

<body>
    <!-- header  -->
    <header class="header">
        <a href="#home" class="logo"><i class="fas fa-heartbeat"></i> Medicio.</a>

        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#service">Services</a>
            <a href="#doctors">Doctors</a>
            <a href="#review">Reviews</a>
            <a href="#contact">Contact</a>
            <a href="http://localhost/login/logout.php" class="appoinmentbtn" style="font-size:1.5rem;">Hi <?php echo $_SESSION['patient_name']; ?> - Logout</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>
    </header>

    <!-- header ends -->
    <!-- home section start -->

    <div class="card text-bg-dark" id="home">
        <div class="img"><img src="image/slide-1.jpg" class="card-img" alt="..."></div>
        <div class="card-img-overlay">
            <h5 class="card-title">Right there with you.</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quia eveniet hic corporis veritatis quidem culpa neque
                praesentium ad vitae incidunt placeat, porro distinctio itaque nam asperiores aliquid illum, cupiditate recusandae!</p>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary" type="button" style="border-color: #fff;">Read More</button>
            </div>
        </div>
    </div>

    <!-- home section ends -->
    <!-- card section start -->
    <section class="icons-container">
        <div class="icons">
            <i class="fas fa-user-md"></i>
            <h3>140+</h3>
            <p>Doctors at Work</p>
        </div>
        <div class="icons">
            <i class="fas fa-users"></i>
            <h3>1040+</h3>
            <p>Satisfied Patients</p>
        </div>
        <div class="icons">
            <i class="fas fa-procedures"></i>
            <h3>500+</h3>
            <p>Bed Facility</p>
        </div>
        <div class="icons">
            <i class="fas fa-hospital"></i>
            <h3>80+</h3>
            <p>Available Hospitals</p>
        </div>
    </section>
    <!-- card section ends -->
    <!-- emergency section -->
    <div class="emergency">
        <div class="card text-center emergency-card">
            <div class="card-body">
                <h5 class="card-title">In an emergency? Need help now?</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis ab, repellendus, hic dolor aperiam quod reprehenderit dignissimos veritatis maiores rerum, similique corrupti dolorem voluptatum consequuntur ullam deserunt iusto pariatur
                    eveniet?
                </p><br>
                <a href="#appoinment" class="btn btn-primary emergency-btn" style="border-color: #fff;">Book Appoinment Now.</a>
            </div>
        </div>
    </div>

    <!-- emergency section ends -->
    <!-- about us -->
    <section id="about" class="about">
        <h1 class="heading"><span>About</span> Us</h1>
        <div class="row">
            <div class="image"><img src="image/about.jpg" alt=""></div>
            <div class="content">
                <h3>We take care of your health.</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est dignissimos nemo, qui eligendi expedita aperiam tempora tenetur porro eum quam, amet consequuntur sapiente neque odit molestias animi. Harum, tempora sit.</p>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Obcaecati recusandae nihil accusamus aperiam eum quo? Ullam dolor officia quibusdam iusto?</p>
                <a href="#" class="btn">Learn More<span class="fas fa-chevron-right"></span></a>
            </div>
        </div>

    </section>

    <!-- about us ends-->
    <!-- service section start -->
    <section id="service" class="service">
        <h1 class="heading">Our <span>Services</span></h1>
        <div class="box-container">
            <div class="box">
                <i class="fas fa-notes-medical"></i>
                <h3>Free Checkups</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, explicabo.</p>
            </div>
            <div class="box">
                <i class="fas fa-ambulance"></i>
                <h3>24/7 Ambulance</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, explicabo.</p>
            </div>
            <div class="box">
                <i class="fas fa-user-md"></i>
                <h3>Expert Doctors</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, explicabo.</p>
            </div>
            <div class="box">
                <i class="fas fa-pills"></i>
                <h3>Medicines Availablity</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, explicabo.</p>
            </div>
            <div class="box">
                <i class="fas fa-procedures"></i>
                <h3>Bed Facilities</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, explicabo.</p>
            </div>
        </div>
    </section>

    <!-- service section ends -->
    <!-- doctor section start -->
    <section class="doctors" id="doctors">
        <h1 class="heading">Our <span>Doctors</span></h1>
        <div class="box-container">
            <div class="box">
                <img src="image/doc-1.jpg" alt="">
                <h3>John Doe</h3>
                <span>Expert Doctor</span>
                <div class="share">
                    <a href="" class="fab fa-facebook-f"></a>
                    <a href="" class="fab fa-twitter"></a>
                    <a href="" class="fab fa-instagram"></a>
                    <a href="" class="fab fa-linkedin"></a>
                </div>
            </div>
            <div class="box">
                <img src="image/doc-2.jpg" alt="">
                <h3>John Doe</h3>
                <span>Expert Doctor</span>
                <div class="share">
                    <a href="" class="fab fa-facebook-f"></a>
                    <a href="" class="fab fa-twitter"></a>
                    <a href="" class="fab fa-instagram"></a>
                    <a href="" class="fab fa-linkedin"></a>
                </div>
            </div>
            <div class="box">
                <img src="image/doc-3.jpg" alt="">
                <h3>John Doe</h3>
                <span>Expert Doctor</span>
                <div class="share">
                    <a href="" class="fab fa-facebook-f"></a>
                    <a href="" class="fab fa-twitter"></a>
                    <a href="" class="fab fa-instagram"></a>
                    <a href="" class="fab fa-linkedin"></a>
                </div>
            </div>
            <div class="box">
                <img src="image/doc-4.jpg" alt="">
                <h3>John Doe</h3>
                <span>Expert Doctor</span>
                <div class="share">
                    <a href="" class="fab fa-facebook-f"></a>
                    <a href="" class="fab fa-twitter"></a>
                    <a href="" class="fab fa-instagram"></a>
                    <a href="" class="fab fa-linkedin"></a>
                </div>
            </div>
            <div class="box">
                <img src="image/doc-5.jpg" alt="">
                <h3>John Doe</h3>
                <span>Expert Doctor</span>
                <div class="share">
                    <a href="" class="fab fa-facebook-f"></a>
                    <a href="" class="fab fa-twitter"></a>
                    <a href="" class="fab fa-instagram"></a>
                    <a href="" class="fab fa-linkedin"></a>
                </div>
            </div>
        </div>
    </section>

    <!-- doctor section ends -->
    <!-- review section start -->

    <section id="review" class="review">
        <h1 class="heading">Patient's <span>Review</span></h1>
        <div class="box-container">
            <div class="box">
                <img src="image/pic-1.png" alt="">
                <h3>John Deo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam non ab aliquam iure vitae amet! Culpa ab, nemo veritatis vitae laboriosam unde libero, veniam, beatae saepe mollitia vero voluptates dolore.</p>
            </div>
            <div class="box">
                <img src="image/pic-2.png" alt="">
                <h3>John Deo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam non ab aliquam iure vitae amet! Culpa ab, nemo veritatis vitae laboriosam unde libero, veniam, beatae saepe mollitia vero voluptates dolore.</p>
            </div>
            <div class="box">
                <img src="image/pic-3.png" alt="">
                <h3>John Deo</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam non ab aliquam iure vitae amet! Culpa ab, nemo veritatis vitae laboriosam unde libero, veniam, beatae saepe mollitia vero voluptates dolore.</p>
            </div>

        </div>
    </section>

    <!-- review section ends -->

    <!-- appoinment section start -->

    <section class="appoinment" id="appoinment">
        <h1 class="heading">Make an <span>Appoinment</span></h1>
        <form action="">
            <h2>Book Now</h2>
            <h3>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Iste et nemo cum voluptas atque? Inventore excepturi delectus aspernatur voluptatum modi?</h3>
            <input placeholder="Your Name" type="text" class="box">
            <input placeholder="Your Contact" type="number" class="box">
            <input placeholder="Your Email" type="email" class="box">
            <input type="date" class="box"><br><br>
            <input type="submit" value="Book Now" class="btn">
        </form>
    </section>

    <!-- appoinment section ends -->
    <!-- FREQUENTLY ASKED SECTION -->

    <section class="frequently" id="frequently">
        <h1 class="heading">Frequently Asked <span>Questions</span></h1>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, cum?
                </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione iste odio voluptate voluptatem architecto nulla a quidem molestiae voluptatibus reiciendis, ipsa minus ab quod? Voluptatibus reiciendis quibusdam ipsa vero consequatur molestiae laborum,
                        consequuntur velit, eum nostrum quasi nemo temporibus iste!
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, cum?
                </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione iste odio voluptate voluptatem architecto nulla a quidem molestiae voluptatibus reiciendis, ipsa minus ab quod? Voluptatibus reiciendis quibusdam ipsa vero consequatur molestiae laborum,
                        consequuntur velit, eum nostrum quasi nemo temporibus iste!
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, cum?
                </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ratione iste odio voluptate voluptatem architecto nulla a quidem molestiae voluptatibus reiciendis, ipsa minus ab quod? Voluptatibus reiciendis quibusdam ipsa vero consequatur molestiae laborum,
                        consequuntur velit, eum nostrum quasi nemo temporibus iste!
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis, est?
                </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt labore facilis culpa dicta rerum cupiditate quos alias aspernatur saepe architecto veniam sed rem necessitatibus ratione amet, repellendus libero impedit sunt mollitia aliquid iusto molestiae?
                        Nesciunt eum odio facilis hic itaque.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, cum?
                </button>
                </h2>
                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi, consectetur? Expedita, nihil commodi nesciunt architecto nulla, rerum at laudantium quas aspernatur dolorum inventore quibusdam consequuntur facere voluptatibus, temporibus iste amet veritatis
                        quia! Quod, deleniti blanditiis sint itaque tenetur ad commodi!
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- frequently asked question ends -->
    <!-- contact section start -->
    <section class="contact" id="contact">
        <h3 class="heading">Contact<span>Us</span></h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum dolorum odio temporibus fuga impedit commodi maxime laudantium modi adipisci non.</p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3679.9726496277117!2d75.89278031443688!3d22.729257932931414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3962fd0b7d3aab15%3A0x1215c842d731998f!2sMXPERTZ!5e0!3m2!1sen!2sus!4v1658489600316!5m2!1sen!2sus"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="box-container">
            <div class="box">
                <i class="fas fa-location-dot"></i>
                <h3>Address</h3>
                <p>565,Lorem, ipsum.<br>Lorem, ipsum.</p>
            </div>
            <div class="box">
                <i class="fas fa-envelope"></i>
                <h3>Email Us</h3>
                <p>abcd@xyz.com<br>abcdk@xyz.com</p>
            </div>
            <div class="box">
                <i class="fas fa-phone"></i>
                <h3>Contact Us</h3>
                <p>+91-5455525257<br>+91-5556552232</p>
            </div>
        </div>
    </section>

    <!-- contact us section ends -->
    <!-- footer section start -->
    <section class="footer" id="footer">
        <div class="box-container">
            <div class="box">
                <h3>Quick Links</h3>
                <a href="#"><i class="fas fa-chevron-right"></i>Home</a>
                <a href="#"><i class="fas fa-chevron-right"></i>About</a>
                <a href="#"><i class="fas fa-chevron-right"></i>Service</a>
                <a href="#"><i class="fas fa-chevron-right"></i>Doctors</a>
                <a href="#"><i class="fas fa-chevron-right"></i>Review</a>
                <a href="#"><i class="fas fa-chevron-right"></i>Contact</a>
                <a href="#"><i class="fas fa-chevron-right"></i>Appoinment</a>
            </div>

            <div class="box">
                <h3>Contact Info</h3>
                <a href="#"><i class="fas fa-phone"></i>+91-5455525257</a>
                <a href="#"><i class="fas fa-phone"></i>+91-5455525257</a>
                <a href="#"><i class="fas fa-envelope"></i>abcd@xyz.com</a>
                <a href="#"><i class="fas fa-envelope"></i>abcd@xyz.com</a>
                <a href="#"><i class="fas fa-location-dot"></i>5156,Lorem, ipsum dolor.</a>
            </div>
            <div class="box">
                <h3>Follow Us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i>Facebook</a>
                <a href="#"><i class="fab fa-twitter"></i>Twitter</a>
                <a href="#"><i class="fab fa-instagram"></i>Instagram</a>
                <a href="#"><i class="fab fa-linkedin"></i>Linkedin</a>
            </div>
        </div>
        <div class="credit">© Created By <span>Samyak Jain</span> | All Rights Reserved</div>
    </section>





    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

</body>

</html>