<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interfaz para Agregar Niños y Colegios</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="../assets/styles.css">
</head>
<body>
    <div class="container my-5">
        <div class="row center-align">
            <div class="col s12">
                <h2 class="center-align">Interfaz Colegios</h2>
            </div>
        </div>
        <div class="row">
            <div class="col s6 d-flex justify-center">
                <a class="waves-effect waves-light btn" id="schools">Colegios</a>
            </div>
            <div class="col s6 d-flex justify-center">
                <a class="waves-effect waves-light btn" id="students">Alumnos</a>
            </div>
        </div>
        <div class="row" id="schoolForm">
            <div class="col s12">
                <h3 class="center-align">Formulario Colegios</h3>
                <form action="index.php" method="post">
                    <div class="d-flex flex-column">
                        <div class="input-field mx-auto col s6">
                            <input name="school_name" id="school_name" type="text" class="validate" required>
                            <label for="last_name">Nombre Colegio</label>
                        </div>
                        <div class="input-field mx-auto col s6">
                            <input name="address" id="address" type="text" class="validate" required>
                            <label for="last_name">Dirección</label>
                        </div>
                        <div class="input-field mx-auto col s6">
                            <input name="neighborhood" id="neighborhood" type="text" class="validate" required>
                            <label for="last_name">Barrio</label>
                        </div>
                        <div class="input-field mx-auto ">
                            <button type="submit" value="add_school" name="add_school" class="waves-effect waves-light btn center-align">Agregar Colegio</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row" id="studentForm">        
            <?php if(empty($schools)) : ?>            
            <div class="col s12 ">
                <h3 class="center-align">No hay colegios registrados</h3>
            </div>
            <?php else : ?>
            <div class="col s12">
                <h3 class="center-align">Formulario Estudiantes</h3>
                <form action="index.php" method="post">
                    <div class="d-flex flex-column">
                        <div class="input-field mx-auto col s6">
                            <input name="first_name" id="first_name" type="text" class="validate" required>
                            <label for="first_name">Nombres</label>
                        </div>
                        <div class="input-field mx-auto col s6">
                            <input name="last_name" id="last_name" type="text" class="validate" required>
                            <label for="last_name">Apellidos</label>
                        </div>
                        <div class="input-field mx-auto col s6">
                            <input name="address" id="address" type="text" class="validate" required>
                            <label for="address">Dirección</label>
                        </div>

                        <div class="input-field mx-auto col s6">
                            <label class="position-relative">Colegio Relacionado</label>
                            <select name="school_related" id="school_related" class="browser-default" required>
                                <option value="" disabled selected>Elija un colegio</option>
                                <?php foreach ($schools as $school) : ?>
                                <option value="<?php echo $school['ID'] ?>"><?php echo $school['school_name'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="input-field mx-auto ">
                            <button type="submit" value="add_student" name="add_student" class="waves-effect waves-light btn center-align">Agregar Estudiante</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <?php endif; ?>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="../assets/main.js"></script>
</body>
</html>