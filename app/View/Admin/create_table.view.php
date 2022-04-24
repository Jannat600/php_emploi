<!DOCTYPE html>
<html lang="en">

<head>
    <title>Création Empoi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <style type="text/css">
        @media print {

            .no-print,
            .no-print * {
                display: none !important;
            }

            @page {
                size: a4;
                margin: 10px;
                max-width: 100%;
            }
        }

        .time_crumbs {
            border: 1px solid lightgray;
            background-color: orangered;
            padding: 10px 4px;
            border-radius: 7px;
            color: white;
            z-index: 10;
        }

        .time_crumbs:hover {
            cursor: pointer;
            z-index: 9999;
        }

        .delete_subject:hover {
            cursor: pointer;
        }

        .subject_crumbs:hover {
            cursor: pointer;
            z-index: 9999;
        }

        .top {
            z-index: 100 !important;
            position: relative
        }

        .bottom {
            z-index: 10 !important;
            position: relative
        }

        table.table-bordered>thead>tr>th {
            border: 2px solid dodgerblue;
        }

        table.table-bordered>tbody>tr>th {
            border: 2px solid dodgerblue;
        }

        table.table-bordered>tbody>tr>td {
            border: 2px solid gray;
        }

        .select-editable {
            position: relative;
            background-color: white;
            border: solid grey 1px;
            width: 120px;
            height: 18px;
        }

        .select-editable select {
            position: absolute;
            top: 0px;
            left: 0px;
            font-size: 14px;
            border: none;
            width: 120px;
            margin: 0;
        }

        .select-editable input {
            position: absolute;
            top: 0px;
            left: 0px;
            width: 100px;
            padding: 1px;
            font-size: 12px;
            border: none;
        }

        .select-editable select:focus,
        .select-editable input:focus {
            outline: none;
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-3 no-print" style="min-height: 100vh; background-color: lightgray; display: flex; flex-direction: column; justify-content: center; text-align: center; ">

                <div style="display:inline-block; padding-top: 20px;">
                    <button id="step1" class="btn btn-info">Etape 1</button>
                    <button id="step2" class="btn btn-info">Etape 2</button>
                    <button id="step3" class="btn btn-info">Etape 3</button>
                </div>


                <!-- First Block -->
                <div id="user_pass_1" style="display: block; padding: 40px 0px;">
                    <form method="POST" action="http://localhost/php_emploi/public/index.php?action=init_emploi">
                        <div class="form-group text-left">
                            <label for="Filiere">Filiere</label>
                            <!-- <input class="form-control" type="time" id="p2_1"> -->
                            <select class="form-control" name="nom_filiere" id="filiere">
                                <option value="select">Sélectionner la filiere</option>
                                <?php foreach ($filiere as $key => $value) echo "<option value=" . $value . ">" . $value . "</option>" ?>
                            </select>
                        </div>
                        <div class="form-group text-left">
                            <label for="niveau">Niveau</label>
                            <select class="form-control" name="niveau" id="niveau">
                                <option value="select">Sélectionner le niveau</option>
                                <?php foreach ($niveau as $key => $value) echo "<option value=" . $value . ">" . $value . "</option>" ?>
                            </select>
                            <!-- <input class="form-control" type="text" id="p1_1"> -->
                        </div>
                        <div class="form-group text-left">
                            <label for="semestre">Semestre</label>
                            <select class="form-control" name="semestre" id="semestre">
                                <option value="select">Selectionner le semestre</option>
                                <?php foreach ($semestre as $key => $value) echo "<option value=" . $value . ">" . $value . "</option>"?>
                            </select>
                        </div>
                         <div class="form-group text-left">
                         <label for="semestre">Date_Expiration</label>
                            <input class='form-control' type='date' name='date_ex'  value= 'Date Expiration' >
                         </div> 
                         <div class="form-group text-left">
                         <?php echo "<input class='form-control' type='hidden' display='none' name='username' value='".$username."' />" ?>
                         </div> 
                        <div class="text-center" style="padding-top: 10px;">
                            <button type= "submit" class="btn btn-primary" id="phase1">Continuer</button>
                        </div>
                    </form>
                </div>

                <!-- Second Block -->
                <div id="user_pass_2" style="display: none; padding: 40px 40px;">

                    <div class="text-center" style="padding-top: 0px;">
                        <h6>Définir les Horaires</h6>
                    </div>
                    <div class="row" style="padding: 15px;">
                        <form class="sign-in-form" method="POST" action="http://localhost/php_emploi/public/index.php?action=init_h">
                            <div class="form-group text-left">
                                <div class="select-editable">
                                    <select onchange="this.nextElementSibling.value=this.value">
                                        <option value=""></option>
                                        <option value="115x175 mm">115x175 mm</option>
                                        <option value="120x160 mm">120x160 mm</option>
                                        <option value="120x287 mm">120x287 mm</option>
                                    </select>
                                    <input type="time" name="heure_debut" value="" />
                                </div>
                            </div>
                            <div class="form-group text-left">
                                <div class="select-editable">
                                    <select onchange="this.nextElementSibling.value=this.value">
                                        <option value=""></option>
                                        <option value="115x175 mm">115x175 mm</option>
                                        <option value="120x160 mm">120x160 mm</option>
                                        <option value="120x287 mm">120x287 mm</option>
                                    </select>
                                    <input type="time" name="heure_fin" value="" />
                                </div>
                            </div>
                            <div class="text-center" style="padding-top: 10px;">
                                <button class="btn btn-primary" id="phase2">Continuer</button>
                            </div>

                        </form>
                    </div>
                    <!-- <div class="col-sm-2 time_crumbs" id="f5">5</div>
                        <div class="col-sm-2 time_crumbs" id="f10">10</div>
                        <div class="col-sm-2 time_crumbs" id="f15">15</div>
                        <div class="col-sm-2 time_crumbs" id="f20">20</div>
                        <div class="col-sm-2 time_crumbs" id="f25">25</div>
                        <div class="col-sm-2 time_crumbs" id="f30">30</div>
                        <div class="col-sm-2 time_crumbs" id="f35">35</div>
                        <div class="col-sm-2 time_crumbs" id="f40">40</div>
                        <div class="col-sm-2 time_crumbs" id="f45">45</div>
                        <div class="col-sm-2 time_crumbs" id="f50">50</div>
                        <div class="col-sm-2 time_crumbs" id="f55">55</div>
                        <div class="col-sm-2 time_crumbs" id="f60">60</div> -->

                </div>
                <!-- Third Block -->
                <div id="user_pass_3" style="display: none; padding: 40px 0px; ">
                    <div class="form-group text-left">
                        <select class="form-control" name="salle" id="salle">
                            <option value="select">Selectionner la salle</option>
                            <?php foreach ($code as $key => $value) echo "<option value=" . $value . ">" . $value . "</option>" ?>

                        </select>
                    </div>

                    <div class="row" style="padding: 0px 0px;">
                        <div class="col-md-8">

                            <select class="form-control" name="salle" id="salle">
                                <option value="select">Sélectionner un module</option>
                                <?php foreach ($module as $key => $value) echo "<option value=" . $value . ">" . $value . "</option>" ?>

                            </select>
                        </div>
                        <div class="col-md-4 text-left">
                            <div class="btn-warning add_subject" style="cursor: pointer; font-weight: 600; padding: 8px; text-align: center; border-radius: 5px;">Ajouter+</div>
                        </div>
                    </div>
                    <div class="row subject_wrapper" style="padding: 10px;">

                    </div>
                </div>

            </div>

            <div class="col-lg-9" style="min-height: 100vh; background-color: white; display: flex; flex-direction: column; justify-content: center; text-align: center;">
                <div class="time_table_c2" style="">
                    <h6 style="padding: 10px;">Emploi du Temps</h6>
                    <div class="table-responsive">
                        <table class="table table-bordered" style="font-size: 13px">
                            <thead>
                                <tr class="bg-light-gray">
                                    <th scope="col" id="t_row1_d1">
                                    </th>
                                    <th class="text-uppercase" scope="col" id="t_row1_d1">Lundi</th>
                                    <th class="text-uppercase" scope="col" id="t_row1_d2">Mardi</th>
                                    <th class="text-uppercase" scope="col" id="t_row1_d3">Mercredi</th>
                                    <th class="text-uppercase" scope="col" id="t_row1_d4">Jeudi</th>
                                    <th class="text-uppercase" scope="col" id="t_row1_d5">Vendredi</th>
                                    <th class="text-uppercase" scope="col" id="t_row1_d6">Samedi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-middle">09:00am</td>
                                    <td>
                                        <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16 xs-font-size13">Dance</span>
                                        <div class="margin-10px-top font-size14">9:00-10:00</div>
                                        <div class="font-size13 text-light-gray">Ivana Wong</div>
                                    </td>
                                    <td>
                                        <span class="bg-green padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Yoga</span>
                                        <div class="margin-10px-top font-size14">9:00-10:00</div>
                                        <div class="font-size13 text-light-gray">Marta Healy</div>
                                    </td>

                                    <td>
                                        <span class="bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Music</span>
                                        <div class="margin-10px-top font-size14">9:00-10:00</div>
                                        <div class="font-size13 text-light-gray">Ivana Wong</div>
                                    </td>
                                    <td>
                                        <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Dance</span>
                                        <div class="margin-10px-top font-size14">9:00-10:00</div>
                                        <div class="font-size13 text-light-gray">Ivana Wong</div>
                                    </td>
                                    <td>
                                        <span class="bg-purple padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Art</span>
                                        <div class="margin-10px-top font-size14">9:00-10:00</div>
                                        <div class="font-size13 text-light-gray">Kate Alley</div>
                                    </td>
                                    <td>
                                        <span class="bg-pink padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">English</span>
                                        <div class="margin-10px-top font-size14">9:00-10:00</div>
                                        <div class="font-size13 text-light-gray">James Smith</div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="align-middle">10:00am</td>
                                    <td>
                                        <span class="bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Music</span>
                                        <div class="margin-10px-top font-size14">10:00-11:00</div>
                                        <div class="font-size13 text-light-gray">Ivana Wong</div>
                                    </td>
                                    <td class="bg-light-gray">

                                    </td>
                                    <td>
                                        <span class="bg-purple padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Art</span>
                                        <div class="margin-10px-top font-size14">10:00-11:00</div>
                                        <div class="font-size13 text-light-gray">Kate Alley</div>
                                    </td>
                                    <td>
                                        <span class="bg-green padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Yoga</span>
                                        <div class="margin-10px-top font-size14">10:00-11:00</div>
                                        <div class="font-size13 text-light-gray">Marta Healy</div>
                                    </td>
                                    <td>
                                        <span class="bg-pink padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">English</span>
                                        <div class="margin-10px-top font-size14">10:00-11:00</div>
                                        <div class="font-size13 text-light-gray">James Smith</div>
                                    </td>
                                    <td class="bg-light-gray">

                                    </td>
                                </tr>

                                <tr>
                                    <td class="align-middle">11:00am</td>
                                    <td>
                                        <span class="bg-lightred padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Break</span>
                                        <div class="margin-10px-top font-size14">11:00-12:00</div>
                                    </td>
                                    <td>
                                        <span class="bg-lightred padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Break</span>
                                        <div class="margin-10px-top font-size14">11:00-12:00</div>
                                    </td>
                                    <td>
                                        <span class="bg-lightred padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Break</span>
                                        <div class="margin-10px-top font-size14">11:00-12:00</div>
                                    </td>
                                    <td>
                                        <span class="bg-lightred padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Break</span>
                                        <div class="margin-10px-top font-size14">11:00-12:00</div>
                                    </td>
                                    <td>
                                        <span class="bg-lightred padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Break</span>
                                        <div class="margin-10px-top font-size14">11:00-12:00</div>
                                    </td>
                                    <td>
                                        <span class="bg-lightred padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Break</span>
                                        <div class="margin-10px-top font-size14">11:00-12:00</div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="align-middle">12:00pm</td>
                                    <td class="bg-light-gray">

                                    </td>
                                    <td>
                                        <span class="bg-purple padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Art</span>
                                        <div class="margin-10px-top font-size14">12:00-1:00</div>
                                        <div class="font-size13 text-light-gray">Kate Alley</div>
                                    </td>
                                    <td>
                                        <span class="bg-sky padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Dance</span>
                                        <div class="margin-10px-top font-size14">12:00-1:00</div>
                                        <div class="font-size13 text-light-gray">Ivana Wong</div>
                                    </td>
                                    <td>
                                        <span class="bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Music</span>
                                        <div class="margin-10px-top font-size14">12:00-1:00</div>
                                        <div class="font-size13 text-light-gray">Ivana Wong</div>
                                    </td>
                                    <td class="bg-light-gray">

                                    </td>
                                    <td>
                                        <span class="bg-green padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Yoga</span>
                                        <div class="margin-10px-top font-size14">12:00-1:00</div>
                                        <div class="font-size13 text-light-gray">Marta Healy</div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="align-middle">01:00pm</td>
                                    <td>
                                        <span class="bg-pink padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">English</span>
                                        <div class="margin-10px-top font-size14">1:00-2:00</div>
                                        <div class="font-size13 text-light-gray">James Smith</div>
                                    </td>
                                    <td>
                                        <span class="bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Music</span>
                                        <div class="margin-10px-top font-size14">1:00-2:00</div>
                                        <div class="font-size13 text-light-gray">Ivana Wong</div>
                                    </td>
                                    <td class="bg-light-gray">

                                    </td>
                                    <td>
                                        <span class="bg-pink padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">English</span>
                                        <div class="margin-10px-top font-size14">1:00-2:00</div>
                                        <div class="font-size13 text-light-gray">James Smith</div>
                                    </td>
                                    <td>
                                        <span class="bg-green padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Yoga</span>
                                        <div class="margin-10px-top font-size14">1:00-2:00</div>
                                        <div class="font-size13 text-light-gray">Marta Healy</div>
                                    </td>
                                    <td>
                                        <span class="bg-yellow padding-5px-tb padding-15px-lr border-radius-5 margin-10px-bottom text-white font-size16  xs-font-size13">Music</span>
                                        <div class="margin-10px-top font-size14">1:00-2:00</div>
                                        <div class="font-size13 text-light-gray">Ivana Wong</div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- <table class="table table-bordered" style="font-size: 13px;">
                            <thead>
                                <tr>
                                    <th colspan="27%" scope="col" id="t_row1_d1"></th>
                                    <th colspan="27%" scope="col" id="t_row1_d2"></th>
                                    <th colspan="27%" scope="col" id="t_row1_d3"></th>
                                    <th colspan="19%" scope="col" id="t_row1_d4"></th>
                                </tr>

                                <tr id="table_time">
                                    <th colspan="10%">Time/Days</th>
                                    <th class="drop" id="t_row2_d1" colspan="10%"></th>
                                    <th class="drop" id="t_row2_d2" colspan="10%"></th>
                                    <th class="drop" id="t_row2_d3" colspan="10%"></th>
                                    <th class="drop" id="t_row2_d4" colspan="10%"></th>
                                    <th class="drop" id="t_row2_d5" colspan="10%"></th>
                                    <th class="drop" id="t_row2_d6" colspan="10%"></th>
                                    <th class="drop" id="t_row2_d7" colspan="10%"></th>
                                    <th class="drop" id="t_row2_d8" colspan="10%"></th>
                                    <th class="drop" id="t_row2_d9" colspan="10%"></th>
                                </tr>

                            </thead>
                            <tbody id="t_body">
                            </tbody>

                        </table> -->
                    </div>
                    <button class="btn btn-success no-print" onclick="myFunction()">Imprimer</button>
                    <button class="btn btn-primary no-print" onclick="submit_form()">Enregistrer</button>
                </div>
            </div>

        </div>
    </div>

    <form style="display: none;" id="time_table_form" action="./backend_logic.php" method="POST">
        <input type="hidden" name="class" value="">
        <input type="hidden" name="section" value="">
        <input type="hidden" name="academic_year" value="">
        <input type="hidden" name="version" value="">
        <input type="hidden" name="time_table_form_data">
        <div class="text-center" style="padding-top: 15px;">
            <button type="button" class="btn btn-success">Upload</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
    </form>

    <script>
        // var d = new Date();
        // var hours, minutes, sd = 1;
        // var days = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
        // days.forEach(function(entry) {
        //     var days_1 = $('<tr>');
        //     days_1.append('<th colspan="10%" scope="col">' + entry + '</th>');
        //     for (var i = 1; i <= 9; i++)
        //         days_1.append($('<td colspan="10%" scope="col" class="drop_2">'));
        //     $('#t_body').append(days_1);
        // });

        // function myFunction() {
        //     window.print();
        // }
        $(document).ready(function() {
            var max_fields = 20;
            var wrapper = $(".subject_wrapper");
            var add_subject = $(".add_subject");
            var x = 1;
            $(add_subject).click(function(e) {
                e.preventDefault();
                if (x < max_fields) {
                    x++;
                    var $item = $(' <div class="col-md-6 subject_crumbs" id="s_code' + x + '" style="z-index:99; border:1px solid lightgray; padding: 8px 5px;height: 40px;border-radius: 5px;background-color: dodgerblue;color:white;"><span style=" width:99%;  overflow: hidden;white-space: nowrap;display: block;text-overflow: ellipsis;" >' + $("#subject_title").val() + '</span></div>');
                    $item.draggable({
                        revert: true,
                        cancel: false,
                        appendTo: "body",
                        zindex: 9999
                    });
                    $('.subject_wrapper').append($item);
                    $("#subject_title").val('');
                } else {
                    alert('You Reached the limits')
                }
            });
            $(".drop_2").droppable({
                accept: ".subject_crumbs",
                drop: function(event, ui) {
                    $(this).text($("#" + ui.draggable.prop('id')).text());
                }
            });
            $(function() {
                $(".non_drop").draggable();
                $(".time_crumbs").draggable({
                    revert: true,
                    containment: "document"
                });
                //$( ".subject_crumbs" ).draggable({ revert: true, cancel: false,stack: "div2",containment: "window"});	    
                $(".drop").droppable({
                    accept: ".time_crumbs",
                    drop: function(event, ui) {
                        var print_slot = '';
                        print_slot += d.getHours() + ":" + d.getMinutes() + "-";
                        d.setMinutes(d.getMinutes() + parseInt($("#" + ui.draggable.prop('id')).text()));
                        print_slot += d.getHours() + ":" + d.getMinutes();
                        if (sd <= 9) {
                            $('#t_row2_d' + sd).text(print_slot);
                        }
                        if (sd > 9) {
                            sd = 0;
                            print_slot = '';
                            d.setHours(hours, minutes, 0);
                            for (var i = 1; i <= 9; i++) {
                                $('#t_row2_d' + i).text('');
                            }
                        }
                        ++sd;
                        //console.log( print_slot );
                    }
                });
            });
            $("#phase1").click(function() {
                if ($("#p1_1").val() == "" || $("#p1_2").val() == "" || $("#p1_3").val() == "" || $("#p1_4").val() == "" || $("#p2_1").val() == "")
                    alert('Please Enter All Fields Of Phase 1');
                else {
                    $("#t_row1_d1").text('Class : ' + $("#p1_1").val());
                    $("#t_row1_d2").text('Academic Year : ' + $("#p1_2").val());
                    $("#t_row1_d3").text('Generated On : ' + $("#p1_3").val());
                    $("#t_row1_d4").text('Version : ' + $("#p1_4").val());
                    hours = $("#p2_1").val().split(":")[0];
                    minutes = $("#p2_1").val().split(":")[1];
                    d.setHours(hours, minutes, 0);
                }
            });
            $('#step1').click(function() {
                $('#user_pass_1').css('display', 'block');
                $('#user_pass_2').css('display', 'none');
                $('#user_pass_3').css('display', 'none');
            });
            $('#step2').click(function() {
                $('#user_pass_2').css('display', 'block');
                $('#user_pass_1').css('display', 'none');
                $('#user_pass_3').css('display', 'none');
            });
            $('#step3').click(function() {
                $('#user_pass_3').css('display', 'block');
                $('#user_pass_1').css('display', 'none');
                $('#user_pass_2').css('display', 'none');
            });

            function submit_form() {
                var form = $('#time_table_form');
                var url = form.attr('action');
                var type = form.attr('type');
                $.ajax({
                    type: type,
                    url: url,
                    data: form.serialize(),
                    success: function(data) {
                        console.log(data);
                    }
                });
                e.preventDefault();
            }
        });

       
        $(document).ready(function(){
    $('#filiere').on('change', function(){
        var intitule = $(this).val();
        if(intitule){
            $.ajax({
                type:'POST',
                url:'http://localhost/php_emploi/public/index.php?action=load_info',
                data:'intitule='+intitule,
                success:function(html){
                    $('#niveau').html(html);
                    $('#semestre').html('<option value="">Select niveau first</option>'); 
                }
            }); 
        }else{
            $('#niveau').html('<option value="">Selectionner la filiere en premier</option>');
            $('#semestre').html('<option value="">Selectionner la filiere en premier</option>'); 
        }
    });
    
    $('#niveau').on('change', function(){
        var niveau = $(this).val();
        var filiere =  document.getElementById('filiere').val();
        if(niveau){
            $.ajax({
                type:'POST',
                url:'http://localhost/php_emploi/public/index.php?action=load_info',
                data: {niveau : niveau, filiere :filiere},
                success:function(html){
                    $('#semestre').html(html);
                }
            }); 
        }else{
            $('#semestre').html('<option value="">Selectionner le niveau en premier</option>'); 
        }
    });
});
    </script>

</body>

</html>