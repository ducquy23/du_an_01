<?php include"../header.php"; ?>
<body>
   
    <div class="container">
        </p>
        <p style="font-size: 20px ;">Welcome Donglucsport</p>
        
        <h2>Login to your account</h2>
        <p id="pass" class="form-group">
        <i class='bx bxs-user' style="font-size:20px ;" > User</i> 
      
        <input class="form-control" type="text" placeholder="Enter Account">
        </p>
        <br>
        <p id="form-group">
        <i class='bx bx-low-vision'  style="font-size:20px ;" > Password</i>
        <input id="type" class="form-control" type="password" placeholder="Enter Password">
        </p>
        <br>
        <button class="btn btn-primary" type="submit">Log in</button>
        <a href="./forget.php" style="text-decoration: none  ;">
            <p style="font-size:18px;padding-top: 20px ;">Forgot password?</p>
        </a>
        <a href="./register.php" style="font-size: 20px ; text-decoration: none;">
           <p>Dont have an account? Join free today </p> </a>
    </div>
    <script src="js.js"></script>
</body>

</html>
<?php include"../footer.php"; ?>