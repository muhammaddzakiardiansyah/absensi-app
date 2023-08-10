<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul'];  ?></title>
    <link rel="shortcut icon" href="https://i.ibb.co/jWjnf6y/cropped-SA.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <style>
        svg {
            width: 17px;
            height: 17px;
        }
    </style>
</head>

<body style="background-color: #1c612b;">
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
                                <a class="nav-link <?php if($data['judul'] == "Home") {
                                    echo "text-primary";
                                } else {
                                    echo "text-white";
                                } ?>" aria-current="page" href="<?= BASEURL; ?>">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php if($data['judul'] == "About") {
                                    echo "text-primary";
                                } else {
                                    echo "text-white";
                                } ?>" href="<?= BASEURL; ?>/text/about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?php if($data['judul'] == "Dokumentasi") {
                                    echo "text-primary";
                                } else {
                                    echo "text-white";
                                } ?>" href="<?= BASEURL; ?>/text/docs">Docs</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- end navbar -->
    <!-- icon svg -->
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="check-circle-fill" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </symbol>
        <symbol id="info-fill" viewBox="0 0 16 16">
            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
        </symbol>
        <symbol id="exclamation-triangle-fill" viewBox="0 0 16 16">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </symbol>
    </svg>
    <!-- end icon svg -->