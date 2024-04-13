<?php
    include 'head.html';
?>
<head>
    <title>Counsellors Team</title>
</head>
<body>
<!--Navbar-->
<?php
include 'navbar.html';
?>
<script>
    document.getElementById('nav-2').classList.add('active');
    document.getElementById('nav-2-1').classList.add('active');
    document.getElementById('nav-2').children[0].innerHTML += '<span class="sr-only">(current)</span>';
</script>
<div class="top-fixer-2"></div>
<!--Section: Team v.1-->
<section class="section team-section container">

    <!--Section heading-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mt-1">
                <h5>
                    <strong>
                        Mental health is a state of mental well-being that enables people to cope with the stresses of life, realise their abilities, learn well and work well, and contribute to their community... Mental health is a basic human right. And it is crucial to personal, community and socio-economic development." (World Health Organization, 2024). It is as important as physical health, because both are connected through the body and its nervous system and are affected by environmental factors. Just as one would reach out to a doctor for a physical ailment, similarly, one should not hesitate to contact a Professional (Counsellor) for psychological problems.
                    </strong>
                </h5>
            </div>
        </div>
    </div>

    <h1 class="section-heading">Wellbeing Team</h1>
    <!--Section description-->
    <p class="section-description"></p>
    <div class="row justify-content-center text-center">
        <div class="col-lg-6 col-md-12 mb-r animate-profile">
            <div class="avatar">
                <img src="images/sqloader.gif" data-src="images/avatar/prasad_gadkari.jpg" class="lazyload rounded-circle">
            </div>
            <h4>Mr Prasad Gadkari</h4>
            <h5><strong>Contact : </strong>+91 98223 55796</h5>
            <h5><strong>Mail : </strong>prasadgadkari@osstaff.iitj.ac.in</h5>
            <!-- <a class="icons-sm email-ic" href="mailto:studentcounsellor@iitj.ac.in"><i class="fa fa-envelope-o"> </i></a> -->
        </div>
        <div class="col-lg-6 col-md-12 mb-r animate-profile">
            <div class="avatar">
                <img src="images/sqloader.gif" data-src="images/avatar/akash_vishwakarma.jpeg" class="lazyload rounded-circle">
            </div>
            <h4>Mr Akash Vishwakarma</h4>
            <h5><strong>Counsellor</strong></h5>
            <h5>M.Phil Clinical Psychology (RCI)</h5>
            <h5><strong>Contact : </strong>+91 9651530172 </h5>
            <h5><strong>Mail : </strong>akashvishwakarma@iitj.ac.in</h5>
            <!-- <a class="icons-sm email-ic" href="mailto:studentcounsellor@iitj.ac.in"><i class="fa fa-envelope-o"> </i></a> -->
        </div>
        <div class="col-lg-6 col-md-12 mb-r animate-profile">
            <div class="avatar">
                <img src="images/sqloader.gif" data-src="images/avatar/anjali_bhatia.jpg" class="lazyload rounded-circle">
            </div>
            <h4>Dr Anjali Bhatia</h4>
            <h5><strong>Counsellor</strong></h5>
            <h5>PhD Psychology</h5>
            <h5><strong>Contact : </strong>+91 9897347663 </h5>
            <h5><strong>Mail : </strong>anjalibhatia@iitj.ac.in </h5>
            <!-- <a class="icons-sm email-ic" href="mailto:anjalibhatia@iitj.ac.in"><i class="fa fa-envelope-o"> </i></a> -->
        </div>
        
        <div class="col-lg-6 col-md-12 mb-r animate-profile">
            <div class="avatar">
                <img src="images/sqloader.gif" data-src="images/avatar/Nabeelah_Siddiqui.jpg" class="lazyload rounded-circle">
            </div>
            <h4>Ms Nabeelah Siddiqui</h4>
            <h5><strong>Well-being Moderator</strong></h5>
            <h5>M.A. Clinical Psychology</h5>
            <h5><strong>Contact : </strong>+91 8770205067</h5>
            <h5><strong>Mail : </strong>nabeelah@osstaff.iitj.ac.in</h5>
            <!-- <a class="icons-sm email-ic" href="mailto:Nabeelah@osstaff.iitj.ac.in"><i class="fa fa-envelope-o"> </i></a> -->
        </div>
       
    </div>
</section>
<!--/Section: Team v.1-->


<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/tether.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/compiled.min.js"></script>

<script type="text/javascript" src="js/lazysizes.min.js"></script>
<!--Footer-->
<?php
include 'footer.html';
?>
