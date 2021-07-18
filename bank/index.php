<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">



    <title>Bank</title>
</head>

<body>
    <?php  
      include 'dbconnect.php';
      include 'header.php';
    ?>
     



    <section class="head">
        <div class="boxHead" data-animation="slideInDown" data-animation-delay=".3s">
            <h1 class="mb-3">Making Banking <br>Smarter, Safer and <br>Simpler for you</h1>

            <p style="font-weight:300 ;color:grey;font-size:25px">Explore a suite of delightful banking<br> products
                from the house of TSF</p>
        </div>

        <div class="box" style="width:42rem" data-animation="slideInRight" data-animation-delay=".3s">
            <img src="img/home2.png" style="height:450px">
        </div>
    </section>



    <section>
        <h1 id="abt"><b>About</b> Us</h1>
        <div class="box1" data-animation="slideInRight" data-animation-delay=".3s">
            <p style="line-height:2">

                TSF Bank Ltd., as a full service universal bank, provides a wide gamut of financial products and
                services encompassing deposits, loans, payment services and investment solutions. We are committed to
                understanding our customers’ needs and aim at consistently delivering relevant financial solutions and
                excellent customer service.

                Understanding today’s fast - paced and digital world, we offer an innovative range of digital services
                that complement our pan-India network of branches and ATMs. Customers can also reach out to us through
                our 24x7 customer care facilities. We strive to provide our customers with the best possible combination
                of safety, convenience and innovation in all of our financial products and services.


                The vision ‘to be the most preferred and trusted bank enhancing value for all stakeholders’ defines and
                shapes our day-to-day business, helping us to build long-lasting relationships.

            </p>
        </div>

    </section>

    <section id="services">
        <h1><b>Services</b> </h1>
        <div class="services">
            <div class="flex">
                <div class="box2" data-animation="zoomIn">
                    <p>Personal Internet<br> Banking</p>
                </div>
                <div class="box2" data-animation="zoomIn" data-animation-delay="300ms">
                    <p>Corporate Internet Banking</p>
                </div>
                <div class="box2" data-animation="zoomIn" data-animation-delay="600ms">
                    <p>Business Loans</p>
                </div>
            </div>

            <div class="flex">
                <div class="box2" data-animation="flipInY">
                    <p>Accounts</p>
                </div>
                <div class="box2" data-animation="flipInY" data-animation-delay="300ms">
                    <p>Cards</p>
                </div>
                <div class="box2" data-animation="flipInY" data-animation-delay="600ms">
                    <p>Invest</p>
                </div>
            </div>
        </div>


    </section>



    <section id="contact">
        <h1><b>Contact</b> Us</h1>
        <div class="box3" data-animation="flipInY" data-animation-delay="300ms">
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="3"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="box4" data-animation="flipInY" data-animation-delay="300ms">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d241317.116099006!2d72.74109925453989!3d19.082197839051503!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!3m2!1d19.0759837!2d72.8776559!5e0!3m2!1sen!2sin!4v1625921265140!5m2!1sen!2sin"
                width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>

    </section>




    <?php  
      include 'footer.php';
      
     ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="index.js"></script>


</body>

</html>