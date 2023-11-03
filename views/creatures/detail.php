<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of creatures</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="assets/js/bootstrap.min.js"></script>
</head>
<body>
<header>
    <div class="header">
        <div class="inner-header flex">
            <h1>RolePlay Game</h1>
        </div>
        <div>
            <!--simulación de onda-->
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                 viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave"
                          d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"/>
                </defs>
                <g class="parallax">
                    <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7"/>
                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)"/>
                    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)"/>
                    <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff"/>
                </g>
            </svg>
        </div>
    </div>
    <div><br></div>
</header>
<main>
    <div class="container px-5 my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 rounded-3 shadow-lg card-body p-4">
                    <div class="card-body p-4">
                        <div class="text-center">
                            <div class="h1 fw-light">Creature Details</div>
                            <p class="mb-4 text-secondary">Creature information:</p>
                        </div>

                        <div class="mb-3">
                            <h5 class="text-info">Avatar:</h5>
                            <img src="<?php echo $creature['avatar']; ?>" class="card-img-top" alt="<?php echo $creature['name']; ?>">
                        </div>

                        <div class="mb-3">
                            <h5 class="text-info">Name:</h5>
                            <p class="text-white"><?php echo isset($creature['name']) ? $creature['name'] : ''; ?></p>
                        </div>

                        <div class="mb-3">
                            <h5 class="text-info">Description:</h5>
                            <p class="text-white"><?php echo isset($creature['description']) ? $creature['description'] : ''; ?></p>
                        </div>

                        <div class="mb-3">
                            <h5 class="text-info">Attack Power:</h5>
                            <p class="text-white"><?php echo isset($creature['attackPower']) ? $creature['attackPower'] : ''; ?></p>
                        </div>

                        <div class="mb-3">
                            <h5 class="text-info">Life Level:</h5>
                            <p class="text-white"><?php echo isset($creature['lifeLevel']) ? $creature['lifeLevel'] : ''; ?></p>
                        </div>

                        <div class="mb-3">
                            <h5 class="text-info">Weapon:</h5>
                            <p class="text-white"><?php echo isset($creature['weapon']) ? $creature['weapon'] : ''; ?></p>
                        </div>

                        <div class="d-grid">
                            <a href="index.php?action=list" class="btn btn-primary btn-lg">Back to List</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<footer>
    <div class="content flex">
        <p>Made by Amin | Cuatrovientos | 2ºDAM</p>
    </div>
</footer>
</body>
</html>