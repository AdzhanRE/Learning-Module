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
                     <h1 class="fw-bolder mb-1">Forget Password</h1>
                </header>
                <!-- Post content-->
                <section class="mb-5">
                    <div class="container">
                        <div class="row">
                            <div class="col">

                                <h2 class="fw-bolder mb-4 mt-5">Your new password will sent to your email</h2>

                                <form>
                                    <div class="row mb-3">
                                        <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                                        <div class="col-sm-10">
                                        <input type="email" class="form-control" id="inputEmail3">
                                        </div>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-primary">Sign in</button>
                                    <button type="submit" class="btn btn-primary">Home</button>
                                </form>
                            </div>
                            
                        </div>
                    </div>
                    
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