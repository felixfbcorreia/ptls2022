<?php  
require_once 'function.php';

$ptl = query('SELECT * FROM tb_ptl');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PTLS</title>
    <link rel="stylesheet" href="style.css">
    <link href="templates/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>

<body>
    <!-- hahu nav -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-danger sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand fs-4" href="#">
                <img src="img/iks.jpg" alt="iks" width="40" class="rounded-circle img-thumbnail">&nbsp;
                Baze-dadus IKS-TLS
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item mx-3">
                        <a class="nav-link active" aria-current="page" href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                width="40" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                                <path
                                    d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z" />
                            </svg></a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40"
                                fill="currentColor" class="bi bi-server" viewBox="0 0 16 16">
                                <path
                                    d="M1.333 2.667C1.333 1.194 4.318 0 8 0s6.667 1.194 6.667 2.667V4c0 1.473-2.985 2.667-6.667 2.667S1.333 5.473 1.333 4V2.667z" />
                                <path
                                    d="M1.333 6.334v3C1.333 10.805 4.318 12 8 12s6.667-1.194 6.667-2.667V6.334a6.51 6.51 0 0 1-1.458.79C11.81 7.684 9.967 8 8 8c-1.966 0-3.809-.317-5.208-.876a6.508 6.508 0 0 1-1.458-.79z" />
                                <path
                                    d="M14.667 11.668a6.51 6.51 0 0 1-1.458.789c-1.4.56-3.242.876-5.21.876-1.966 0-3.809-.316-5.208-.876a6.51 6.51 0 0 1-1.458-.79v1.666C1.333 14.806 4.318 16 8 16s6.667-1.194 6.667-2.667v-1.665z" />
                            </svg></a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40"
                                fill="currentColor" class="bi bi-journals" viewBox="0 0 16 16">
                                <path
                                    d="M5 0h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2 2 2 0 0 1-2 2H3a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1H1a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v9a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1H3a2 2 0 0 1 2-2z" />
                                <path
                                    d="M1 6v-.5a.5.5 0 0 1 1 0V6h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V9h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 2.5v.5H.5a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1H2v-.5a.5.5 0 0 0-1 0z" />
                            </svg></a>
                    </li>

                    <li class="nav-item mx-3">
                        <a class="nav-link" aria-current="page" href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                width="40" fill="currentColor" class="bi bi-images" viewBox="0 0 16 16">
                                <path d="M4.502 9a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3z" />
                                <path
                                    d="M14.002 13a2 2 0 0 1-2 2h-10a2 2 0 0 1-2-2V5A2 2 0 0 1 2 3a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v8a2 2 0 0 1-1.998 2zM14 2H4a1 1 0 0 0-1 1h9.002a2 2 0 0 1 2 2v7A1 1 0 0 0 15 11V3a1 1 0 0 0-1-1zM2.002 4a1 1 0 0 0-1 1v8l2.646-2.354a.5.5 0 0 1 .63-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094l1.777 1.947V5a1 1 0 0 0-1-1h-10z" />
                            </svg></a>
                    </li>

                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40"
                                fill="currentColor" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                                <path
                                    d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                            </svg></a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="40"
                                fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z" />
                                <path fill-rule="evenodd"
                                    d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                            </svg></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- ikus nav -->
    <div class="container-fluid">
        <div class="card m-1">
            <div class="card-header text-center">
                <h2>Grupo Arte marsiais Kera-Sakti Timor-Leste</h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div id="carouselExampleDark" class="carousel carousel-light slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active" data-bs-interval="10000">
                                <img src="img/iks_ptl.jpg" class="d-block w-100 img-thumbnail" alt="...">
                            </div>
                            <div class="carousel-item" data-bs-interval="2000">
                                <img src="img/tls.png" class="d-block w-100 img-thumbnail" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/ptl.jpg" class="d-block w-100 img-thumbnail" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Kera sakti-1980</h5>
                        <p class="card-text">Grupo arte marsais IKS.PTL KERA-SAKTI nebe mai husi nasaun vizinus
                            Indonesia nebe mosu iha tinan 1980</p>
                        <p class="card-text text-decoration-underline fst-italic"><small class="text-muted">Last updated
                                <error>
                                    <?= date('d-M-Y'); ?></error>
                            </small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores modi assumenda omnis repellat
            repellendus nostrum ex optio ullam atque dolor, neque, doloribus, natus iste cumque quidem sapiente! Soluta
            ea vero ipsa magnam. Pariatur recusandae optio nobis atque autem error, fugiat hic incidunt ratione vero
            provident velit cum deleniti accusamus officia sapiente, temporibus vitae iusto sit molestiae tempora
            doloribus animi totam? Ducimus eius eveniet blanditiis atque ex quos id omnis, alias tenetur animi quisquam
            necessitatibus maiores similique saepe mollitia. Necessitatibus unde similique quae placeat id quibusdam
            pariatur mollitia eligendi dicta, ab, minima saepe aut, delectus tenetur adipisci. Rerum consectetur laborum
            deserunt illum similique ex earum quisquam libero tempora? Earum nisi ipsa a accusamus ullam ducimus
            officiis eum impedit, vero hic, cum aliquam excepturi laborum quibusdam corporis nihil? Dolor odio, dolorum
            esse laboriosam repellat ea adipisci excepturi a autem molestias fugiat iste, impedit quis similique
            consequuntur doloremque! Rerum repellat aliquam minima sunt amet modi tempore optio quas. Vitae, quaerat
            deserunt. Iure corporis quas numquam odit voluptates voluptatibus impedit neque consectetur ea deleniti
            dolore obcaecati esse hic ipsam, reprehenderit in laborum atque vitae? A, doloremque, obcaecati eaque totam
            dignissimos veritatis architecto facilis nulla nisi quasi officiis adipisci vel quo, delectus quibusdam
            dolorem dolor?
        </p>
    </div>
    <script src="templates/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>