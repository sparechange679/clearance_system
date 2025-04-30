<?php
require 'partials/auth/header.php';
?>

<!-- Content -->
<div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
            <!-- Register -->
            <div class="card">
                <div class="card-body">
                    <!-- Logo -->
                    <div class="app-brand justify-content-center">
                        <a href="/" class="app-brand-link gap-2">
                            <span class="app-brand-logo demo"><i class="bx bxl-bank mb-2"></i></span>
                            <span class="app-brand-text text-body fw-bolder">MRA Clearance System </span>
                        </a>
                    </div>
                    <!-- /Logo -->
                    <h4 class="mb-2">Welcome back Keeper!</h4>
                    <p class="mb-4">Please sign-in to your account and view your dashboard</p>

                    <form autocomplete="off" id="formAuthentication" class="mb-3" action="#" method="POST">
                        <div class="mb-3 form-password-toggle">
                            <div class="input-group input-group-merge">
                                <input
                                    type="password"
                                    id="tpin"
                                    class="form-control"
                                    name="tpin"
                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                    aria-describedby="tpin"
                                    autofocus
                                    autocomplete="off"
                                />
                                <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /Register -->
        </div>
    </div>
</div>

<?php
require 'partials/auth/footer.php';