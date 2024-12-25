<?php
$page = "About us";
include "./components/header.php";
include "./components/navbar.php";
?>

<main>

    <section class="position-relative pt-sm-8 pt-lg-9 pb-0 overflow-hidden">
        <div class="position-absolute top-0 end-0 z-index-2 mt-7 me-n9 d-none d-md-block">
            <img src="assets/images/elements/grad-shape/05.png" class="rotate-180" alt="">
        </div>

        <div class="position-absolute top-0 start-0 ms-n4 mt-7">
            <img src="assets/images/elements/grad-shape/blur-decoration.svg" class="blur-7 opacity-1" alt="Grad shape">
        </div>

        <div class="container position-relative z-index-2 pt-4 pb-5 pb-lg-8">

            <h1>Fostering your daily</h1>
            <h6 class="display-4"><span class="text-primary">growth</span> and well-being.</h6>

            <div class="justify-content-end align-items-start gap-3 mt-4 mt-sm-5">
                <p class="inner-container-small border-purple border-2 mx-0 ps-2">At QuickFix, we believe that convenience is key to a simpler, more efficient life. That's why we bring high-quality laundry, dry cleaning, car wash, and house cleaning services directly to your door—whenever you need them.</p>
                <p class="inner-container-small border-purple border-2 mx-0 ps-2">Our mission is to help you save time, reduce stress, and enjoy a cleaner, more organized life. Whether you're busy with work, family, or simply want to reclaim your time, QuickFix is here to take care of the chores, so you can focus on what matters most.</p>
            </div>
        </div>

        <div class="bg-secondary-grad position-relative pb-5 pb-lg-8 px-2 px-md-5">
            <div class="bg-body blur-5 h-300px w-100 position-absolute top-0 start-0 mt-n5"></div>
            <div class="h-300px h-md-500px h-xl-700px z-index-2 position-relative rounded-4" style="background:url(assets/images/about.jpg) no-repeat; background-size:cover; background-position:top;"> </div>
        </div>
    </section>

</main>


<?php include "./components/footer.php"; ?>