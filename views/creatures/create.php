<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Creature</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <script src="assets/js/bootstrap.min.js"></script>
</head>
<body>
<header>
    <div class="header">
        <div class="inner-header flex">
            <h1>RolePlay Game</h1>
            <a href="index.php" class="btn btn-primary">Creatures List</a>
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
                            <div class="h1 fw-light">Create Creature</div>
                            <p class="mb-4 text-secondary">To create a new creature, please fill out the following
                                form:</p>
                        </div>

                        <!-- Your Form Goes Here -->
                        <form method="POST" action="index.php?action=create">
                            <!-- Name Input -->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" placeholder="Name" name="name"
                                       required data-sb-validations="required"/>
                                <label for="name" class="text-info">Name</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                            </div>

                            <!-- Description Input (Adapted as Textarea) -->
                            <div class="form-floating mb-3">
                                <textarea class="form-control" id="description" type="text" placeholder="Description" style="height: 10rem;" name="description" required data-sb-validations="required"></textarea>
                                <label for="description" class="text-info">Description</label>
                                <div class="invalid-feedback" data-sb-feedback="description:required">Description is
                                    required.
                                </div>
                            </div>

                            <!-- Avatar Input -->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="avatar" type="text" placeholder="Avatar" name="avatar" required data-sb-validations="required"/>
                                <label for="avatar" class="text-info">Avatar URL</label>
                                <div class="invalid-feedback" data-sb-feedback="avatar:required">Avatar is required.
                                </div>
                            </div>


                            <!-- Attack Power Input -->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="attackPower" type="text" placeholder="Attack Power" name="attackPower" required data-sb-validations="required"/>
                                <label for="attackPower" class="text-info">Attack Power</label>
                                <div class="invalid-feedback" data-sb-feedback="attackPower:required">Attack Power is
                                    required.
                                </div>
                            </div>

                            <!-- Life Level Input -->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="lifeLevel" type="text" placeholder="Life Level"
                                       name="lifeLevel" required data-sb-validations="required"/>
                                <label for="lifeLevel" class="text-info">Life Level</label>
                                <div class="invalid-feedback" data-sb-feedback="lifeLevel:required">Life Level is
                                    required.
                                </div>
                            </div>

                            <!-- Weapon Input -->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="weapon" type="text" placeholder="Weapon" name="weapon"
                                       required data-sb-validations="required"/>
                                <label for="weapon" class="text-info">Weapon</label>
                                <div class="invalid-feedback" data-sb-feedback="weapon:required">Weapon is required.
                                </div>
                            </div>

                            <!-- Submit button -->
                            <div class="d-grid">
                                <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Create</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<footer>
    <div class="content flex">
        <p>Hecho por Amin | Cuatrovientos | 2ºDAM</p>
    </div>
</footer>
</body>
</html>