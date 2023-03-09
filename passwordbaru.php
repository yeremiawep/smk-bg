<!DOCTYPE html>
<html lang="en">

<head>
    <title>PT. Bringin Gigantara Cabang Cempaka Putih</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="" />
    <link rel="icon" type="image/png" href="app/dist/img/logo_bg2.png">
    <link rel="shortcut icon" href="">
    <link href="./css/styles.css" rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
</head>

<body class="bg-baros">
    <div class="min-vw-100 min-vh-100 d-flex align-items-center">

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-10 col-md-8 col-lg-6 col-xl-4">
                    <div class="card p-4 shadow-sm">
                        <div class="card-header">
                            <h3 class="text-center font-weight-light my-3">Password Baru</h3>

                        </div>
                        <div class="card-body">
                            <div class="justify-content-center text-center">
                                <!-- <p class="fs-4 my-3 mb-5 fw-bold">RSU Khalishah</p> -->
                                <img src="app/dist/img/logo_bg2.png" alt="" height="150px" class="my-3 mb-5">
                            </div>
                            <form action="./proses_lupa_password.php?aksi=reset_password&email=<?= $_GET['email'] ?>" method="POST">
                                <div class="mb-3">
                                    <input type="password" class="form-control py-2" placeholder="password" name="password" value="">
                                </div>
                                <div class="form-group d-flex align-items-end justify-content-end mt-4 mb-0">
                                    <button type="submit" class="btn baros-warning">Simpan</button>
                                </div>
                            </form>
                            <div class="form-group d-flex align-items-end justify-content-end mt-4 mb-0">
                                <a href="./index.php" class="btn bg-baros" title="" style="color:white">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div id="layoutAuthentication_footer">
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; PT. Bringin Gigantara KC. Cempaka Putih</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    </div>

    <?php
    session_start();

    if (@$_SESSION['info']) { ?>
        <script>
            swal.fire({
                text: "<?= $_SESSION['info']; ?>",
                icon: "warning",
                customClass: {
                    confirmButton: "btn fw-bold btn-primary",
                    cancelButton: "btn fw-bold btn-active-light-primary"
                }
            })
        </script>
    <?php unset($_SESSION['info']);
    } ?>

</body>

</html>