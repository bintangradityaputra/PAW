<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Form Login</title>
    <style>
        .gradient-custom {
            background: #6a11cb;

            background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgb(7, 229, 249));

            background: linear-gradient(to right, rgb(2, 171, 223), rgba(37, 117, 252, 1))
        }

        .container {
            opacity: 0.7;
        }
    </style>
</head>

<body>
    <!-- cek pesan notifikasi -->
    <?php
    if (isset($_GET['pesan'])) {
        if ($_GET['pesan'] == "gagal") {
            echo "<script type = 'text/JavaScript'>";
            echo 'alert("Login gagal! username dan password salah!")';
            echo "</script>";
        } else if ($_GET['pesan'] == "logout") {
            echo "Anda telah berhasil logout";
        } else if ($_GET['pesan'] == "belum_login") {
            echo "Anda harus login untuk mengakses halaman admin";
        }
    }
    ?>
    <form action="cek-login.php" method="post">
        <section class="vh-100 gradient-custom">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="card bg-dark text-white" style="border-radius: 1rem;">
                            <div class="card-body p-5 text-center">

                                <div class="mb-md-5 mt-md-4 pb-5">

                                    <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                    <p class="text-white-50 mb-5">Masukkan Username dan Password!</p>

                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="typeEmailX">Username</label>
                                        <input type="text" id="" class="form-control form-control-lg" placeholder="Username" name="username" />
                                    </div>

                                    <div class="form-outline form-white mb-4">
                                        <label class="form-label" for="typePasswordX">Password</label>
                                        <input type="password" id="typePasswordX" class="form-control form-control-lg" name="password" />
                                    </div>

                                    <button class="btn btn-outline-light btn-primary px-5" type="submit">Login</button>

                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
</body>

</html>