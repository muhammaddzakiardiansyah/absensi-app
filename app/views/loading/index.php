<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loading</title>
    <link rel="shortcut icon" href="https://i.ibb.co/jWjnf6y/cropped-SA.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* Gaya untuk elemen loading */
        .container-loading {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin: 180px auto;
            position: relative;
            animation: spin 1.2s ease-in-out infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .ball {
            width: 25px;
            height: 25px;
            border-radius: 50%;
            position: absolute;
        }

        .top {
            background-color: #19A68C;
            left: 36px;
            top: -22px;
            animation: top 1.2s linear infinite;
        }

        @keyframes top {
            50% {
                top: 70px;
            }

            100% {
                top: 70px;
                /* background-color: green; */
            }
        }

        .right {
            background-color: #F63D3A;
            right: -20px;
            bottom: 40px;
            animation: right 1.2s linear infinite;
        }

        @keyframes right {
            50% {
                right: 70px;
            }

            100% {
                right: 70px;
                /* background-color: blue; */
            }
        }

        .bottom {
            background-color: #FDA543;
            bottom: -10px;
            left: 36px;
            animation: bottom 1.2s linear infinite;
        }

        @keyframes bottom {
            50% {
                bottom: 70px;
            }

            100% {
                bottom: 70px;
                /* background-color: yellow; */
            }
        }

        .left {
            background-color: #193B48;
            left: -16px;
            top: 35px;
            animation: left 1.2s linear infinite;
        }

        @keyframes left {
            50% {
                left: 70px;
            }

            100% {
                left: 70px;
                /* background-color: red; */
            }
        }
    </style>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg mt-3">
        <div class="container">
            <a class="navbar-brand" href="<?= BASEURL; ?>">
                <h2 class="text-white">Absenin</h2>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="d-flex justify-content-end">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="product">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link text-white" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="#">Pricing</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navbar -->
    <h2 class="text-center text-white mt-5">Daftar Absen XII RPL 1</h2>
    <!-- Elemen loading -->
    <div class="container-loading">
        <div class="top ball"></div>
        <div class="right ball"></div>
        <div class="bottom ball"></div>
        <div class="left ball"></div>
    </div>
    <p class="text-center text-white fw-bold">Tunggu Sebentar</p>

    <!-- Pengalihan otomatis setelah beberapa saat -->
    <script>
        setTimeout(function() {
            window.location.href = '<?= BASEURL; ?>/absensi';
        }, 3000);
    </script>
</body>

</html>