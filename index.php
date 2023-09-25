<?php
$horario = array(
    "lunes" => array(
        strtotime("8:55") => array("dew", "Maria del Carmen", "201"),
        strtotime("9:50") => array("dew", "Maria del Carmen", "201"),
        strtotime("10:45") => array("dpl", "Maria Antonia", "201"),
        strtotime("11:15") => "recreo",
        strtotime("12:10") => array("dsw", "Sergio Ramos", "201"),
        strtotime("13:05") => array("dor", "Maria de Lourdes", "201"),
        strtotime("14:00") => array("dor", "Maria de Lourdes", "201"),
    ),
    "martes" => array(
        strtotime("8:55") => array("dew", "Maria del Carmen", "201"),
        strtotime("9:50") => array("dew", "Maria del Carmen", "201"),
        strtotime("10:45") => array("dor", "Maria de Lourdes", "201"),
        strtotime("11:15") => "recreo",
        strtotime("12:10") => array("dor", "Maria de Lourdes", "201"),
        strtotime("13:05") => array("dsw", "Sergio Ramos", "201"),
        strtotime("14:00") => array("dsw", "Sergio Ramos", "201"),
    ),
    "miercoles" => array(
        strtotime("8:55") => array("dew", "Maria del Carmen", "201"),
        strtotime("9:50") => array("dew", "Maria del Carmen", "201"),
        strtotime("10:45") => array("dew", "Maria del Carmen", "201"),
        strtotime("11:15") => "recreo",
        strtotime("12:10") => array("dpl", "Maria Antonia", "201"),
        strtotime("13:05") => array("dsw", "Sergio Ramos", "201"),
        strtotime("14:00") => array("dsw", "Sergio Ramos", "201"),
    ),
    "jueves" => array(
        strtotime("8:55") => array("dor", "Maria de Lourdes", "201"),
        strtotime("9:50") => array("dor", "Maria de Lourdes", "201"),
        strtotime("10:45") => array("emr", "Maria del Sol", "201"),
        strtotime("11:15") => "recreo",
        strtotime("12:10") => array("dsw", "Sergio Ramos", "201"),
        strtotime("13:05") => array("dpl", "Maria Antonia", "201"),
        strtotime("14:00") => array("dpl", "Maria Antonia", "201"),
    ),
    "viernes" => array(
        strtotime("8:55") => array("emr", "Maria del Sol", "201"),
        strtotime("9:50") => array("emr", "Maria del Sol", "201"),
        strtotime("10:45") => array("dsw", "Sergio Ramos", "201"),
        strtotime("11:15") => "recreo",
        strtotime("12:10") => array("dsw", "Sergio Ramos", "201"),
        strtotime("13:05") => array("dpl", "Maria Antonia", "201"),
        strtotime("14:00") => array("dpl", "Maria Antonia", "201"),
    )
);

$horas = array(
    strtotime("8:55"),
    strtotime("9:50"),
    strtotime("10:45"),
    strtotime("11:15"),
    strtotime("12:10"),
    strtotime("13:05"),
    strtotime("14:00")
);

$diasHabiles = array("lunes", "martes", "miercoles", "jueves", "viernes");

echo "Introduzca el dia de la semana que desee \n";
$dia = readline();

while (!in_array($dia, $diasHabiles)) {
    echo "Dia no valido, por favor introduzca un dia entre el lunes y el viernes \n";
    $dia = readline();
}


echo "Introduzca la hora que desee \n";
$hora = strtotime(readline());

while ($hora > strtotime("14:00") || $hora < strtotime("8:00")) {
    echo "Hora no valida, por favor introduza una hora entre las 8:00 y las 14:00 \n";
    $hora = strtotime(readline());
}

for ($i = 0; $i < count($horas); $i++) {
    if ($hora <= $horas[$i]) {
        if ($horario[$dia][$horas[$i]] == "recreo") {
            echo "Recreo time! \n";
            exit();
        }
        echo $horario[$dia][$horas[$i]][0] . " con " . $horario[$dia][$horas[$i]][1] . " en el aula " .  $horario[$dia][$horas[$i]][2] . "\n";
        exit();
    }
}
