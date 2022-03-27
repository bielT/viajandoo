<?php
    $alertLogin   = strlen($alertLogin) ? '<div class="alert alert-danger" role="alert">'.$alertLogin.' </div>' : "";
 ?>

<main>
  <section class="vh-100" >
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100" >
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

              <form method="POST" name="form_login">
                <h3 class="mb-5">Sign in</h3>
                <hr class="my-4">

                  <?=$alertLogin?>

                <div class="form-outline mb-4">
                  <input type="email" id="formEmail" name="formEmail"class="form-control form-control-lg" required/>
                  <label class="form-label" for="typeEmailX-2">Email</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="formPassword"  name="formPassword" class="form-control form-control-lg" required />
                  <label class="form-label" for="typePasswordX-2">Password</label>
                </div>


                <hr class="my-4">
                <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>
