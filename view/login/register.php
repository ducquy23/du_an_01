<?php include "../header.php"; ?>

<body>

    <div class="container">

        <p style="font-size: 20px ;">Welcome Donglucsport</p>
        <h2>Create Account</h2>
        <p id="pass" class="form-group">
        <i class='bx bx-envelope' style="font-size:20px ;" > Email</i>
            <input id="type" class="form-control" type="text" placeholder="david.lucas@gmail.com">
        </p>
        <p class="form-group">
        <i class='bx bxs-user' style="font-size:20px ;" > Fullname</i> 

            <input type="text" class="form-control" placeholder="David.Lucas">
        </p>
        <p class="form-group">
        <i class='bx bx-low-vision'  style="font-size:20px ;" > Password</i>

            <input class="form-control" type="password" placeholder="******">
        </p>
        <button class="btn btn-primary" type="submit">Create Now</button>
    </div>
    <script src="./scr/js/signin.js"></script>
</body>
<?php include "../footer.php"; ?>