<?php
include ('assets/header.php');
?>


<!-- Page content-->
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8">
            <!-- Post content-->
            <article>
                <!-- Post header-->
                <header class="mb-4">
                    <!-- Post title-->
                     <h1 class="fw-bolder mb-1">Contact Us</h1>
                </header>
                <!-- Post content-->
                <section class="mb-5">
                    <h2 class="fw-bolder mb-4 mt-5">How can we help you?</h2>

                    <form action="">
                    
                        <div class="mb-3">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </section>
            </article>
        </div>
        <?php
        //this is the side widget from side_widget.php
        include('assets/side_widget.php');
        ?>
    </div>
</div>


<?php
include ('assets/footer.php');
?>