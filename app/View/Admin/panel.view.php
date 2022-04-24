<!DOCTYPE html>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <STYle>
        html,
        body {
            height: 100%;
        }

        body {
            font-family: 'Varela Round', sans-serif;
            font-size: 10pt;
            font-weight: 400;
            line-height: 1.5;
            color: #212529;
            text-align: left;
            background: #faf7f3 !important;
        }

        h3 {
            margin: 0 0 2px 0;
            color: #3f454b;
        }

        #app {
            margin: 0;
            padding: 0;
        }

        /*NavBar*/

        .navbar-brand-logo {
            height: 50px;
        }

        .logo {
            font-size: 25px;
            color: green;
        }

        li>a>i {
            font-size: 18px;
        }

        .navbar-company-switcher-logo {
            height: 25px;
        }

        /*Main*/


        /*Main-title*/

        .page-title-wrapper .title {
            font-size: 20px;
            color: #444;
        }

        /*Content wrapper*/
        .content-wrapper {
            border: none;
            border-radius: 4px;
            padding: 0;
        }

        /*Content-box*/
        .content-box {
            background-color: #fff;
            padding: 15px 20px;
        }

        .content-box-title {
            display: flex;
            margin-bottom: 15px;
        }

        .content-box-title h3 {
            font-size: 20px;
            margin-right: 10px;
        }

        .content-box-title i {
            font-size: 18px;
            color: #3f454b;
        }


        .sidebar {
            width: 200px;
            min-height: 100vh;
            display: block;
            vertical-align: top;
            padding: 20px;
            margin: 0;
            top: 65px;
            left: 0;
            background: #eae6e1;
            overflow: auto;
            border-radius: 0;
        }

        .ui-tabs-nav {
            margin: 0 0 10px 0;
            padding: 0;
        }

        .ui-tabs-nav li {
            clear: left;
            width: 100%;
            padding: 0;
            margin: 0;
            overflow: hidden;
            border: none;
            border-bottom: 1px solid rgba(0, 0, 0, .08);
            border-radius: 0;
            background: 0 0 !important;
            list-style: none;
            float: left;
            position: relative;
            top: 0;
        }

        .ui-tabs-nav li a {
            display: block;
            padding: 10px 5px 8px;
            margin: 0 0;
            font-size: 14px;
            font-weight: 400;
            color: #666;
            -webkit-transition: all .5s;
            transition: all .5s;
            text-decoration: none;
            float: left;
            box-sizing: border-box;
            width: 85%;
        }

        ui-tabs-nav li a i {
            opacity: 0;
            margin-right: 0;
            -webkit-transition: all .5s;
            transition: all .5s;
        }

        .content-wrapper {
            margin: 0;
            padding: 10px;
        }

        /*CRUD*/
        .table-wrapper {
            background: #fff;
            padding: 20px 25px;
            margin: 30px 0;
            border-radius: 3px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, .05);
        }

        .table-title {
            padding-bottom: 5px;
            background: #7f8892;
            color: #fff;
            padding: 5px 10px;
            margin: -20px -25px 10px;
            /* border-radius: 3px 3px 0 0; */
        }

        .table-title h2 {
            margin: 5px 0 0;
            font-size: 18px;
        }

        .table-title .btn-group {
            float: right;
        }

        .table-title .btn {
            color: #fff;
            float: right;
            font-size: 13px;
            border: none;
            min-width: 50px;
            border-radius: 2px;
            border: none;
            outline: none !important;
            margin-left: 10px;
        }

        .table-title .btn i {
            float: left;
            font-size: 21px;
            margin-right: 5px;
        }

        .table-title .btn span {
            float: left;
            margin-top: 2px;
        }

        table.table tr th,
        table.table tr td {
            border-color: #e9e9e9;
            padding: 12px 15px;
            vertical-align: middle;
        }

        table.table tr th:first-child {
            width: 60px;
        }

        table.table tr th:last-child {
            width: 100px;
        }

        table.table-striped tbody tr:nth-of-type(odd) {
            background-color: #fcfcfc;
        }

        table.table-striped.table-hover tbody tr:hover {
            background: #f5f5f5;
        }

        table.table th i {
            font-size: 13px;
            margin: 0 5px;
            cursor: pointer;
        }

        table.table td:last-child i {
            opacity: 0.9;
            font-size: 22px;
            margin: 0 5px;
        }

        table.table td a {
            font-weight: bold;
            color: #566787;
            display: inline-block;
            text-decoration: none;
            outline: none !important;
        }

        table.table td a:hover {
            color: #2196F3;
        }

        table.table td a.edit {
            color: #FFC107;
        }

        table.table td a.delete {
            color: #F44336;
        }

        table.table td i {
            font-size: 19px;
        }

        table.table .avatar {
            border-radius: 50%;
            vertical-align: middle;
            margin-right: 10px;
        }

        .pagination {
            float: right;
            margin: 0 0 5px;
        }

        .pagination li a {
            border: none;
            font-size: 13px;
            min-width: 30px;
            min-height: 30px;
            color: #999;
            margin: 0 2px;
            line-height: 30px;
            border-radius: 2px !important;
            text-align: center;
            padding: 0 6px;
        }

        .pagination li a:hover {
            color: #666;
        }

        .pagination li.active a,
        .pagination li.active a.page-link {
            background: #03A9F4;
        }

        .pagination li.active a:hover {
            background: #0397d6;
        }

        .pagination li.disabled i {
            color: #ccc;
        }

        .pagination li i {
            font-size: 16px;
            padding-top: 6px
        }

        .hint-text {
            float: left;
            margin-top: 10px;
            font-size: 13px;
        }

        /* Custom checkbox */
        .custom-checkbox {
            position: relative;
        }

        .custom-checkbox input[type="checkbox"] {
            opacity: 0;
            position: absolute;
            margin: 5px 0 0 3px;
            z-index: 9;
        }

        .custom-checkbox label:before {
            width: 18px;
            height: 18px;
        }

        .custom-checkbox label:before {
            content: '';
            margin-right: 10px;
            display: inline-block;
            vertical-align: text-top;
            background: white;
            border: 1px solid #bbb;
            border-radius: 2px;
            box-sizing: border-box;
            z-index: 2;
        }

        .custom-checkbox input[type="checkbox"]:checked+label:after {
            content: '';
            position: absolute;
            left: 6px;
            top: 3px;
            width: 6px;
            height: 11px;
            border: solid #000;
            border-width: 0 3px 3px 0;
            transform: inherit;
            z-index: 3;
            transform: rotateZ(45deg);
        }

        .custom-checkbox input[type="checkbox"]:checked+label:before {
            border-color: #03A9F4;
            background: #03A9F4;
        }

        .custom-checkbox input[type="checkbox"]:checked+label:after {
            border-color: #fff;
        }

        .custom-checkbox input[type="checkbox"]:disabled+label:before {
            color: #b8b8b8;
            cursor: auto;
            box-shadow: none;
            background: #ddd;
        }

        /* Modal styles */
        .modal .modal-dialog {
            max-width: 400px;
        }

        .modal .modal-header,
        .modal .modal-body,
        .modal .modal-footer {
            padding: 20px 30px;
        }

        .modal .modal-content {
            border-radius: 3px;
        }

        .modal .modal-footer {
            background: #ecf0f1;
            border-radius: 0 0 3px 3px;
        }

        .modal .modal-title {
            display: inline-block;
        }

        .modal .form-control {
            border-radius: 2px;
            box-shadow: none;
            border-color: #dddddd;
        }

        .modal textarea.form-control {
            resize: vertical;
        }

        .modal .btn {
            border-radius: 2px;
            min-width: 100px;
        }

        .modal form label {
            font-weight: normal;
        }

        .text-warning {
            font-size: 15px !important;
        }

        @media (min-width: 992px) {
            .nav-item {
                text-align: center;
            }
        }
    </STYle>
    <title>Panel Administrateur</title>
</head>

<body>
    <div id="app" class="container-fluid h-100">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div>
                <img class="navbar-brand-logo" src="https://i.imgur.com/ipQpPYY.jpg">
                <a class="navbar-brand" href="#">Administration</a>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-tachometer-alt"></i>
                            Tableau de bord <span class="sr-only"></span></a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-calendar-plus"></i>
                            Solicitud de Alojamiento <span class="sr-only"></span></a>
                    </li> -->
                    <!-- <li class="nav-item">
							<a class="nav-link" href="#" ><i class="fa fa-calendar-plus"></i>
								Nueva reserva <span class="sr-only"></span></a>
						</li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-list-alt"></i>
                            Modération <span class="sr-only"></span></a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-chart-line"></i>
                            Informes <span class="sr-only"></span></a>
                    </li> -->
                    <li class="nav-item active">
                        <a class="nav-link" href="#"><i class="fa fa-sliders-h"></i>
                            Configurations et paramètres <span class="sr-only"></span></a>
                    </li>
                </ul>
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="navbar-company-switcher-logo" src="https://i.imgur.com/ipQpPYY.jpg">
                            Changer de vue
                        </a>
                        <!-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">
                                <img class="navbar-company-switcher-logo" src="https://i.imgur.com/ipQpPYY.jpg">
                                Campamento B
                            </a>
                            <a class="dropdown-item" href="#">
                                <img class="navbar-company-switcher-logo" src="https://i.imgur.com/ipQpPYY.jpg">
                                Campamento C
                            </a>
                        </div> -->
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo "utilisateur"; ?>
                            <i class="fas fa-user-circle"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Profil Utilisateur</a>
                            <a class="dropdown-item" href="login.html">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <section class="main container-fluid h-100">
            <div class="row justify-content-center h-100">
                <div class="sidebar d-none d-lg-block d-xl-block" id="yellow">
                    <ul class="ui-tabs-nav">
                        <li>
                            Options</a>
                        </li>
                        <li>
                            <a class="ui-tabs-anchor">
                                <a class="ui-tabs-anchor">

                                    Emplois Courants
                                </a>
                        </li>
                        <!-- <li>
                            <a class="ui-tabs-anchor">Módulos</a>
                        </li>
                        <li>
                            <a class="ui-tabs-anchor">Habitaciones</a>
                        </li>
                        <li>
                            <a class="ui-tabs-anchor">Áreas</a>
                        </li>
                        <li>
                            <a class="ui-tabs-anchor">Turno</a>
                        </li>
                        <li>
                            <a class="ui-tabs-anchor">Parametros</a>
                        </li>
                        <li>
                            <a class="ui-tabs-anchor">Perfiles</a>
                        </li> -->
                        <li>
                            <a class="ui-tabs-anchor">Paramètres</a>
                        </li>
                    </ul>
                </div>
                <div class="content-wrapper col">
                    <div class="table-wrapper">
                        <div class="table-title">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h2>Modération <b>Tables</b></h2>
                                </div>
                                <div class="col-sm-6">

                                    <a href="http://localhost/php_emploi/public/index.php?action=create_table&username=<?=$username;?>" class="btn btn-success"><i class="fas fa-plus-circle"></i><span>Créer</span></a>
                                    <a href="http://localhost/php_emploi/public/index.php?action=delete_table" class="btn btn-danger"><i class="fas fa-minus-circle"></i><span>Supprimer</span></a>
                                </div>
                            </div>
                        </div>
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>
                                        <span class="custom-checkbox">
                                            <input type="checkbox" id="selectAll">
                                            <label for="selectAll"></label>
                                        </span>
                                    </th>
                                    <th>Emploi</th>
                                    <th>Filiere</th>
                                    <th>Date Expiration</th>
                                    <th>Etat</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach ($emplois as $key => $value) {
                                    if (date("Y-m-d") > $value['date_ex']) {
                                        $etat = "Expiré";
                                        $c = "red";
                                    } else  $etat = "Actif";
                                    echo "
                            <tr>
                            <td>
                                <span class='custom-checkbox'>
                                    <input type='checkbox' id='checkbox1' name='options[]' value='1'>
                                    <label for='checkbox1'></label>
                                </span>
                            </td>
                            <td>" . $value['id'] . "</td>
                            <td>" . $value['nom_filiere'] . "</td>
                            <td>" . $value['date_ex'] . "</td>
                            <td style='color:" . $c . "'>" . $etat . "</td>
                            <td>
                                <a href='http://localhost/php_emploi/public/index.php?action=init_e' class='edit' ><i class='fas fa-pen' name='btn'  title='Editer'    id='" . $value['id'] . "'></i></a>
                                <a href= 'http://localhost/php_emploi/public/index.php?action=delete_table'class='delete'><i class='fas fa-trash' name='btn'  title='Supprimer' id='" . $value['id'] . "' ></i></a>
                            </td>
                        </tr>
                            ";
                                }
                                ?>


                            </tbody>
                        </table>
                        <div class="clearfix">
                            <div class="hint-text">Affichage de <b>5</b> sur <b>25</b> Emplois</div>
                            <ul class="pagination">
                                <li class="page-item disabled"><a href="#">Précédent</a></li>
                                <li class="page-item"><a href="#" class="page-link">1</a></li>
                                <li class="page-item"><a href="#" class="page-link">2</a></li>
                                <li class="page-item active"><a href="#" class="page-link">3</a></li>
                                <li class="page-item"><a href="#" class="page-link">4</a></li>
                                <li class="page-item"><a href="#" class="page-link">5</a></li>
                                <li class="page-item"><a href="#" class="page-link">Suivant</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Edit Modal HTML -->
                <!-- <div id="addEmployeeModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form>
                                <div class="modal-header">
                                    <a href="http://localhost/php_emploi/public/index.php?action=create_table"> <h4 class="modal-title">Créer Emploi</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button></a>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>Código</label>
                                        <input type="text" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Campamento</label>
                                        <input type="email" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Otros Campos</label>
                                        <textarea class="form-control" required></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                    <input type="submit" class="btn btn-success" value="Add">
                                </div> -->
                <!-- </form>
                        </div>
                    </div>
                </div> -->
                <!-- Edit Modal HTML -->
                <!-- <div id="editEmployeeModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form>
                                <div class="modal-header">
                                    <h4 class="modal-title">Editar Pabellón</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>Código</label>
                                        <input type="text" value="W-13 Piso 1" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Campamento</label>
                                        <input type="email" value="Campamento A" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Otros Campos</label>
                                        <textarea class="form-control" required></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                                    <input type="submit" class="btn btn-info" value="Guardar">
                                </div>
                            </form>
                        </div>
                    </div>
                </div> -->
                <!-- Delete Modal HTML -->
                <!-- <div id="deleteEmployeeModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form>
                                <div class="modal-header">
                                    <h4 class="modal-title">Eliminar Pabellón</h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <p>¿Estás seguro de eliminar el pabellón seleccionado?</p>
                                    <p class="text-warning"><small>Esta acción no se puede deshacer.</small></p>
                                </div>
                                <div class="modal-footer">
                                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
                                    <input type="submit" class="btn btn-danger" value="Eliminar">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div> -->

                <!-- <div style="height: 100px; background-color: rgba(255,0,0,0.1);">
					<div class="h-25 d-inline-block" style="width: 120px; background-color: rgba(0,0,255,.1)">Height 25%</div>
					<div class="h-50 d-inline-block" style="width: 120px; background-color: rgba(0,0,255,.1)">Height 50%</div>
					<div class="h-75 d-inline-block" style="width: 120px; background-color: rgba(0,0,255,.1)">Height 75%</div>
					<div class="h-100 d-inline-block" style="width: 120px; background-color: rgba(0,0,255,.1)">Height 100%</div>
				</div>				 -->
                <!-- <div class="title-bar-wrap d-table w-100">
					<div class="page-title-wrapper d-table-cell align-top m-0 pt-2 pb-3 pl-2 pr-1">
						<div class="title float-left font-weight-normal">Dashboard</div>
					</div>
				</div>
				<div class="content-wrapper">
					<div class="content-box">
					<div class="content-box-title">
						<h3>Buscar reserva</h3>
						<i class="logo fas fa-search mr-2"></i>
					</div>
					<div class="col-md-10 mx-auto">
							<form class="clearfix">
								<div class="form-group row">
									<div class="col-sm-6">
										<label for="selectCamp">Campamento</label>
										<select class="form-control" id="selectCamp">
											<option>Campamento A</option>
											<option>Campamento B</option>
											<option>Campamento C</option>
										</select>
									</div>
									<div class="col-sm-6">
										<label for="selectModule">Modulo</label>
										<select class="form-control" id="selectModule">
											<option>Modulo A</option>
											<option>Modulo B</option>
											<option>Modulo C</option>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-sm-6">
										<label for="selectRoomType">Tipo de habitacion</label>
										<select class="form-control" id="selectRoomType">
											<option>Tipo 1</option>
											<option>Tipo 2</option>
										</select>
									</div>
									<div class="col-sm-6">
										<label for="selectRoom">Habitacion</label>
										<select class="form-control" id="selectRoom">
											<option>Habitacion 1</option>
											<option>Habitacion 2</option>
											<option>Habitacion 3</option>
										</select>
									</div>
								</div>
								<div class="form-group row">
									<div class="col-sm-6">
										<label for="selectRoomStatus">Estado</label>
										<select class="form-control" id="selectRoomStatus">
											<option>Disponible</option>
											<option>Ocupada</option>
										</select>
									</div>
									<div class="col-sm-3">
										<label for="inputCheckIn">Check In</label>
										<input type="text" class="form-control" id="inputCheckIn"/>
									</div>
									<div class="col-sm-3">
										<label for="inputCheckOut">Check Out</label>
										<input type="text" class="form-control" id="inputCheckOut"/>
									</div>
								</div>
								<button type="button" class="btn btn-primary px-4 float-right">Buscar</button>
							</form>
						</div>
					</div>
				</div> -->
        </section>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/gijgo@1.9.11/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://unpkg.com/gijgo@1.9.11/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <script>
        $(document).ready(function() {
            // Activate tooltip
            $('[data-toggle="tooltip"]').tooltip();

            // Select/Deselect checkboxes
            var checkbox = $('table tbody input[type="checkbox"]');
            $("#selectAll").click(function() {
                if (this.checked) {
                    checkbox.each(function() {
                        this.checked = true;
                    });
                } else {
                    checkbox.each(function() {
                        this.checked = false;
                    });
                }
            });
            checkbox.click(function() {
                if (!this.checked) {
                    $("#selectAll").prop("checked", false);
                }
            });
        });
        $('.navbar-nav>li>a:not(.dropdown-toggle), .navbar-nav>li>div>a').on('click', function() {
            $('.navbar-collapse').collapse('hide');
        });
        $('#inputCheckIn').datepicker({
            uiLibrary: 'bootstrap4'
        });
        $('#inputCheckOut').datepicker({
            uiLibrary: 'bootstrap4'
        });

    </script>
</body>

</html>