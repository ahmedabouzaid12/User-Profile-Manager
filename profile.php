<?php include "inc/header.php";

if (!isset($_SESSION['auth'])){
    header("Location: ../auth/login.php");
    die();
}
?>

        <div class="wrapper">
            <div class="page-header section-dark"
                style="background-image: url('http://demos.creative-tim.com/paper-kit-2/assets/img/antoine-barres.jpg')">
                <div class="filter"></div>
                <div class="content-center">
                    <div class="container">
                        <div class="title-brand">
                            <h1 class="presentation-title">WELCOME</h1>
                            <div class="fog-low">
                                <img src="http://demos.creative-tim.com/paper-kit-2/assets/img/fog-low.png" alt="">
                            </div>
                            <div class="fog-low right">
                                <img src="http://demos.creative-tim.com/paper-kit-2/assets/img/fog-low.png" alt="">
                            </div>
                        </div>

                        <h2 class="presentation-subtitle text-center"><?=$_SESSION['auth'][0]?>, Your Email :  <?=$_SESSION['auth'][1]?></h2>
                    </div>
                </div>
                <div class="moving-clouds"
                    style="background-image: url('http://demos.creative-tim.com/paper-kit-2/assets/img/clouds.png'); ">

                </div>
            </div>
        </div>
    </body>
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
    <script src="main.js"></script>
</body>

</html>