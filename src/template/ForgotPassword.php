

<?php ob_start(); ?>
<div class="container-fluid cont">
    <section class="gradient-custom">
        <div class="container py-5 ">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-dark text-white" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <div class="mb-md-5 mt-md-4 pb-5">
                                <h2 class="fw-bold mb-2 text-uppercase">Forgot password</h2>
                                <p class="text-white-50 mb-5">Please enter your Email!</p>
                                <?php if (!empty($error)) : ?>
                                    <div class="alert alert-danger" role="alert">
                                        <?= $error ?>
                                    </div>
                                <?php endif; ?>
                                <form action="/forgot/submit" method="POST">
                                    <div class="form-outline form-white mb-4">
                                        <label for="email" class="form-label">Email:</label>
                                        <input type="text" class="form-control" id="email" placeholder="Enter your email" name="email" class="form-control form-control-lg">
                                    </div>
                                    <button class="btn btn-outline-light btn-lg px-5" type="submit" name="send">Send</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php $content = ob_get_clean(); ?>

<?php require('src/template/Layout.php') ?>