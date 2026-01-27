<?php include "../includes/header.php"; ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card p-4 shadow">
                <h4 class="text-center">User Registration</h4>

                <form method="post">
                    <input type="text" class="form-control mb-2" placeholder="Full Name" required>
                    <input type="email" class="form-control mb-2" placeholder="Email" required>
                    <input type="password" class="form-control mb-2" placeholder="Password" required>
                    <input type="password" class="form-control mb-2" placeholder="Confirm Password" required>

                    <select class="form-control mb-2" required>
                        <option value="">Choose Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>

                    <input type="text" class="form-control mb-3" placeholder="Mobile Number" required>
                    <button class="btn btn-primary w-100">Register</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include "../includes/footer.php"; ?>
