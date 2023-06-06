<!doctype html>
<html lang="en">

<head>
    <title>Sign Up</title>
    <!-- my Style sheet -->

    <link rel="stylesheet" type="text/css" href="../VorbereitungPruefung/Mystyle/Styling.css">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Script for Drop Down und Co -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

</head>

<section id="rBackground">

    <body>
        <header>
            <div>
                <?php include "Navbars1.php"; ?>
            </div>
        </header>

        <section  class="h-100 h-custom">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-lg-8 col-xl-6 mb-5 ">
                        <div class="card rounded-3">
                            <img src="../VorbereitungPruefung/Bilder/pexels-photo-459225.jpeg" class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;" alt="Sample photo">
                            <div class="card-body p-4 p-md-5">
                                <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2">Registrierungs Formular</h3>

                                <form  action="include/register.inc.php" method="post">
                                <form class="px-md-2">

                                    <div class="row mb-4 pb-2 pb-md-0 mb-md-5">
                                        <div class="col-md-6">

                                            <div class="form-outline">
                                                <input name="email" type="email" id="E-mail" class="form-control" required />
                                                <label class="form-label">E-mail Adresse</label>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="col-md-6 mb-4">
                                    <input name="geschlecht" id="geschlecht" type="text" class="form-control" required />
                                                <label class="form-label">Geschlecht</label>
                                    </div> 

                                    <div class="form-outline mb-4">
                                        <input type="text" name="vorname" id="vorname" class="form-control" required />
                                        <label class="form-label">Vorname</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="text" name="nachname" id="nachname" class="form-control"  required/>
                                        <label class="form-label" for="form3Example1q">Nachname</label> 
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 mb-4">

                                            <div class="form-outline datepicker">
                                                <input type="date" name="geburtsdatum" class="form-control" id="geburtsdatum" required/>
                                                <label  class="form-label">Geburtsdatum</label>
                                            </div>
                                        </div> 
                                    </div> 

                                    <div class="form-outline mb-4">
                                        <input type="text" name="username" id="username" class="form-control" required />
                                        <label class="form-label" >Username</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" name="password1" id="password1" class="form-control" required />
                                        <label class="form-label" >Passwort</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" name="password2" id="password2" class="form-control" required/>
                                        <label class="form-label">Passwort wiederholen</label>
                                    </div>
                                                         
                                    </div>
                                    <button type="submit" class="btn btn-success btn-lg mb-50px">Submit</button>
                                </form>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</section>
</body>
<footer>
    <?php include "navbarbot.php"; ?>
</footer>

</html>