<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Ejemplo POO herencia básica 2 en php y Jquery</title>

<script>
    function proceso(txthorastrabajadas, txtcostohoratrabajo, boton){
        switch(boton){
            case "Calcular":
                var parametros = {
                    "txthorastrabajadas" : txthorastrabajadas,
                    "txtcostohoratrabajo" : txtcostohoratrabajo,
                    "btncalcular" : boton
                }
            break;
        }
        $.ajax({
            data: parametros,
            url: 'calcular.php',
            type:'post',
            beforeSend:
                    function(){
                        $('#resultado').html('Cargando...');
                    },
            success:
                    function(response){
                        $('#resultado').html(response);
                    }
        });

    }
</script>

</head>
<body>

<h1>Ejercicio de POO herencia básica 2 en php y Jquery</h1>
<h4>Desarrollar un programa que permita calcular el salario total de un trabajador con la deducciones de ley, de la siguiente manera. Un empleado tiene un salario bruto a través horas trabajadas con un valor de hora de trabajo, teniendo en cuenta éste contexto, las deducciones y aportes se debe realizar así:
    
    <p>- Si el empleado gana en el mes un salario bruto de 1.000.000 o inferior, debe deducir el 2% de salud, 4% de pensiones y tendrá un incremento del 3% sobre el salario bruto.</p>
    <p>- Si el empleado gana mas del 1.000.000 hasta los 2.000.000 debe deducir el 4% de salud, 6% de pensiones y 2$ de caja de compensación familiar.</p>
    <p>- Si el empleado devenga más de los 2.000.000 de salario bruto, deberá deducir el 5% de salud, 7% de pensiones y 3% de caja de compensación familiar.</p>
    <p>
    Debe mostrarse en pantalla:
    - Salario bruto.
    - Salario total.
    - Deducciones realizadas.
    </p>
    </h4>

<form name="form1">
    <p>Cantidad de horas trabajadas
       <input type="text" name="txthorastrabajadas" id="txthorastrabajadas">
    </p>
    <p>Costo de la hora trabajada
        <input type="text" name="txtcostohoratrabajo" id="txtcostohoratrabajo">
     </p>
     <p><input type="button" name="btncalcular" id="btncalcular" value="Calcular"
        onclick="proceso( $('#txthorastrabajadas').val(), $('#txtcostohoratrabajo').val(), $('#btncalcular').val() );"></p>
</form>
<br>
<span id="resultado"></span>
<script src="js/jquery-3.4.1.js"></script>   
</body>
</html>