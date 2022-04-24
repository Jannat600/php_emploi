<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <link rel="stylesheet" href="C:\AppServ\www\php_emploi\public\Ressources\css\style.css">
    <style>
        html,
        body {
            margin: 0;
            font-family: "Karla";
            color: #546e7a;
        }

        * {
            box-sizing: border-box;
        }

        .timetable {
            display: grid;
            grid-template-areas: ". week""time content";
            grid-template-columns: 120px;
            grid-template-rows: 60px;
            width: 100vw;
            height: 100vh;
        }

        .timetable .accent-pink-gradient {
            display: flex;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #ee8ebc, #eea08e);
            transition: 0.2s ease box-shadow, 0.2s ease transform;
        }

        .timetable .accent-pink-gradient:hover {
            box-shadow: 0 20px 30px 0 rgba(238, 142, 188, 0.3);
            transform: scale(1.05);
        }

        .timetable .accent-orange-gradient {
            display: flex;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #eec08e, #dcee8e);
            transition: 0.2s ease box-shadow, 0.2s ease transform;
        }

        .timetable .accent-orange-gradient:hover {
            box-shadow: 0 20px 30px 0 rgba(238, 192, 142, 0.3);
            transform: scale(1.05);
        }

        .timetable .accent-green-gradient {
            display: flex;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #bcee8e, #8eeea0);
            transition: 0.2s ease box-shadow, 0.2s ease transform;
        }

        .timetable .accent-green-gradient:hover {
            box-shadow: 0 20px 30px 0 rgba(188, 238, 142, 0.3);
            transform: scale(1.05);
        }

        .timetable .accent-cyan-gradient {
            display: flex;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #8eeec0, #8edcee);
            transition: 0.2s ease box-shadow, 0.2s ease transform;
        }

        .timetable .accent-cyan-gradient:hover {
            box-shadow: 0 20px 30px 0 rgba(142, 238, 192, 0.3);
            transform: scale(1.05);
        }

        .timetable .accent-blue-gradient {
            display: flex;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #8ebcee, #a08eee);
            transition: 0.2s ease box-shadow, 0.2s ease transform;
        }

        .timetable .accent-blue-gradient:hover {
            box-shadow: 0 20px 30px 0 rgba(142, 188, 238, 0.3);
            transform: scale(1.05);
        }

        .timetable .accent-purple-gradient {
            display: flex;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #c08eee, #ee8edc);
            transition: 0.2s ease box-shadow, 0.2s ease transform;
        }

        .timetable .accent-purple-gradient:hover {
            box-shadow: 0 20px 30px 0 rgba(192, 142, 238, 0.3);
            transform: scale(1.05);
        }

        .timetable .weekend {
            background: #fbfbfc;
            color: #87a1ad;
        }

        .timetable .week-names {
            grid-area: week;
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            text-transform: uppercase;
            font-size: 12px;
        }

        .timetable .week-names>div {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
            box-shadow: inset 1px 0 0 #eceff1;
        }

        .timetable .time-interval {
            grid-area: time;
            display: grid;
            grid-template-rows: repeat(6, 1fr);
            font-size: 14px;
        }

        .timetable .time-interval>div {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
            box-shadow: inset 0 1px 0 0 #eceff1;
        }

        .timetable .content {
            grid-area: content;
            display: grid;
            grid-template-rows: repeat(6, 1fr);
            grid-template-columns: repeat(7, 1fr);
        }

        .timetable .content>div {
            box-shadow: inset 1px 0 0 #eceff1, inset 0 1px 0 0 #eceff1;
        }
    </style>
    <title>Page de Connexion</title>
</head>

<body>
    <div class="timetable">
        <div class="week-names">
            <div>monday</div>
            <div>tuesday</div>
            <div>wednesday</div>
            <div>thursday</div>
            <div>friday</div>
            <div class="weekend">saturday</div>
            <div class="weekend">sunday</div>
        </div>
        <div class="time-interval">
            <div>8:00 - 10:00</div>
            <div>10:00 - 12:00</div>
            <div>12:00 - 14:00</div>
            <div>14:00 - 16:00</div>
            <div>16:00 - 18:00</div>
            <div>18:00 - 20:00</div>
        </div>
        <div class="content">
            <div>
                <div class="accent-orange-gradient"></div>
            </div>
            <div></div>
            <div></div>
            <div></div>
            <div>
                <div class="accent-green-gradient"></div>
            </div>
            <div class="weekend"></div>
            <div class="weekend"></div>
            <div></div>
            <div></div>
            <div></div>
            <div>
                <div class="accent-cyan-gradient"></div>
            </div>
            <div></div>
            <div class="weekend"></div>
            <div class="weekend"></div>
            <div>
                <div class="accent-pink-gradient"></div>
            </div>
            <div></div>
            <div>
                <div class="accent-purple-gradient"></div>
            </div>
            <div></div>
            <div></div>
            <div class="weekend"></div>
            <div class="weekend"></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div class="weekend"></div>
            <div class="weekend"></div>
            <div>
                <div class="accent-purple-gradient"></div>
            </div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div class="weekend"></div>
            <div class="weekend"></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div class="weekend"></div>
            <div class="weekend"></div>
        </div>
    </div>


</body>

</html>