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
            <a href="index.php?action=create" class="btn btn-primary">Create Creature</a>
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
    <div class="container">
        <?php if (isset($creatures) && is_array($creatures)): ?>
            <div class="container mx-auto mt-4">
                <div class="row">
                    <?php $count = 0; ?>
                    <?php foreach ($creatures as $creature): ?>
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <img src="<?php echo $creature['avatar']; ?>" class="card-img-top"
                                 alt="<?php echo $creature['name']; ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo htmlspecialchars($creature['name']); ?></h5>
                                <h6 class="card-text"><?php echo htmlspecialchars($creature['description']); ?></h6>
                                <a href="index.php?action=details&idCreature=<?php echo $creature['idCreature']; ?>"
                                   class="btn mr-2"><i class="fas fa-link"></i>More Info</a>
                                <a href="index.php?action=edit&idCreature=<?php echo $creature['idCreature']; ?>"
                                   class="btn mr-2"><i class="fas fa-link"></i>Edit</a>
                                <a href="index.php?action=delete&idCreature=<?php echo $creature['idCreature']; ?>"
                                   class="btn mr-2"><i class="fas fa-link"></i>Delete</a>
                            </div>
                        </div>
                    </div>
                    <?php $count++; ?>
                    <?php if ($count % 3 === 0): ?>
                </div>
                <div class="row">
                    <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        <?php else: ?>
            <div><br></div>
            <p>No creatures available.</p>
        <?php endif; ?>
    </div>
</main>
<footer>
    <div class="content flex">
        <p>Made by Amin | Cuatrovientos | 2ºDAM</p>
    </div>
</footer>
</body>
</html>