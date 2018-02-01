<table class="table table-condensed">
    <tr>
        <td>
            <img class="rounded float-left" src="/images/logoedo.png" height="75" width="75">
        </td>
        <td align="center">
            <p align="center" style="font-size: small"><b>SECRETARÍA DE DESARROLLO SOCIAL</b></p>
            <p align="center" style="font-size: small">FORMATO UNICO DE REGISTRO(FUR)</p>
            <p align="center" style="font-size: small">PROGRAMA DE DESARROLLO SOCIAL</p>
        </td>
        <td align="right">
            <img style="text-align:right" src="/images/logomex.png" height="75" width="75">
        </td>
    </tr>
</table>

<table class="table table-condensed">
    <thead>
    <tr>
        <th colspan="8" style="background-color:#b1b024">1. IDENTIFICACIÓN GEOGRÁFICA</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td class="active"><strong>Clave Estado</strong></td>
        <td>15</td>
        <td class="active"><strong>Clave Municipio</strong></td>
        <td><?= $model->CVE_MUNICIPIO ?></td>
        <td class="active"><strong>Clave Localidad</strong></td>
        <td><?= $model->CVE_LOCALIDAD ?></td>
        <td class="active"><strong>Clave AGEB</strong></td>
        <td><?= $model->AGEB ?></td>
    </tr>
    </tbody>
    <tbody>
    <tr>
        <td class="active"><strong>Manzana</strong></td>
        <td><?= $model->MANZANA ?></td>
        <td class="active"><strong>Lote</strong></td>
        <td><?= $model->LOTE ?></td>
        <td class="active"><strong>Sección</strong></td>
        <td><?= $model->SECCION ?></td>
    </tr>
    </tbody>
</table>

<table class="table table-condensed">
    <thead>
    <tr>
        <th colspan="8" style="background-color:#b1b024">2. DIRECCIÓN DE LA VIVIENDA</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td class="active"><strong>Calle</strong></td>
        <td colspan="7"><?= $model->CALLE ?></td>
    </tr>
    <tr>
        <td class="active"><strong>Número Exterior</strong></td>
        <td><?= $model->NUM_EXT ?></td>
        <td class="active"><strong>Número Interior</strong></td>
        <td><?= $model->NUM_INT ?></td>
        <td class="active"><strong>Colonia</strong></td>
        <td colspan="3"><?= $model->COLONIA ?></td>
    </tr>
    <tr>
        <td class="active"><strong>Código Postal</strong></td>
        <td><?= $model->CODIGO_POSTAL ?></td>
        <td class="active"><strong>Entre Calle</strong></td>
        <td><?= $model->ENTRE_CALLE ?></td>
        <td class="active"><strong>Y Calle</strong></td>
        <td><?= $model->Y_CALLE ?></td>
        <td class="active"><strong>Rasgo Fisico</strong></td>
        <td><?= $model->OTRA_REFERENCIA ?></td>
    </tr>
    </tbody>
</table>
<table class="table table-condensed">
    <thead>
    <tr>
        <th colspan="8" style="background-color:#b1b024">3. DATOS PERSONALES</th>
    </tr>
    </thead>
    <tbody>
        <tr>
            <td class="active"><strong>Apellido Paterno</strong></td>
            <td><?= $model->PRIMER_APELLIDO ?></td>
            <td class="active"><strong>Sexo</strong></td>
            <td><?= $model->SEXO ?></td>
        </tr>
        <tr>
            <td class="active"><strong>Apellido Materno</strong></td>
            <td><?= $model->SEGUNDO_APELLIDO ?></td>
            <td class="active"><strong>Fecha de Nacimiento</strong></td>
            <td><?= $model->FECHA_NACIMIENTO ?></td>
        </tr>
        <tr>
            <td class="active"><strong>Nombre</strong></td>
            <td><?= $model->NOMBRES ?></td>
            <td class="active"><strong>RFC</strong></td>
            <td><?= $model->RFC ?></td>
        </tr>
        <tr>
            <td class="active"><strong>Nacionalidad</strong></td>
            <td><?= $model->nacionalidad->DESC_NACIONALIDAD ?></td>
            <td class="active"><strong>CURP</strong></td>
            <td><?= $model->CURP ?></td>
        </tr>
        <tr>
            <td class="active"><strong>Documentación de identaficación</strong></td>
            <td><?= $model->documento->NOMB_DOCUMENTO ?></td>
            <td class="active"><strong>Folio de identificación</strong></td>
            <td><?= $model->FOLIO_ID_OFICIAL ?></td>
        </tr>
        <tr>
            <td class="active"><strong>Telefono fijo(con lada)</strong></td>
            <td><?= $model->TELEFONO ?></td>
            <td class="active"><strong>Folio celular</strong></td>
            <td><?= $model->FAX ?></td>
        </tr>
        <tr>
            <td class="active"><strong>Correo Electrónico</strong></td>
            <td><?= $model->CORREO_ELECTRONICO ?></td>
            <td class="active"><strong>Entidad de Nacimeinto</strong></td>
            <td><?= $model->nacimiento->ENTIDAD_FEDERATIVA ?></td>
        </tr>
    </tbody>
</table>
<table class="table table-condensed">
    <thead>
    <tr>
        <th colspan="8" style="background-color:#b1b024">4. DATOS SOCIOECONÓMICOS DEL SOLICITANTE</th>
    </tr>
    </thead>
    <tbody>
        <tr>
            <td class="active"><p style="font-size: small"><strong>¿Es usted el jefe(a) del Hogar?</strong></p></td>
            <td><p style="font-size: small"><?= $jefa = ($socEc->ES_JEFA == 'N') ? 'NO' : 'SI' ?></p></td>
            <td class="active"><p style="font-size: small"><strong>Parentesco</strong></p></td>
            <td><p style="font-size: small"><?= $socEc->parentesco->DESC_PARENTESCO ?></p></td>
            <td class="active"><p style="font-size: small"><strong>¿Se considera usted indígena?</strong></p></td>
            <td><p style="font-size: small"><?= $indigena = ($socEc->INDIGENA == 'N') ? 'NO' : 'SI' ?></p></td>
        </tr>
        <tr>
            <td class="active"><p style="font-size: small"><strong>¿Habla alguna Lengua Indigena?</strong></p></td>
            <td><p style="font-size: small"><?= $hablaLengua = ($socEc->HABLA_LENGUA_I == 'N') ? 'NO' : 'SI' ?></p></td>
            <td class="active"><p style="font-size: small"><strong>Lengua Indigena</strong></p></td>
            <td><p style="font-size: small"><?= $socEc->lengua->DESC_LENGUA ?></p></td>
            <td class="active"><p style="font-size: small"><strong>¿Cuántos hijos tiene?</strong></p></td>
            <td><p style="font-size: small"><?= $socEc->cantidad->DESC_CANT ?></p></td>
        </tr>
        <tr>
            <td class="active"><p style="font-size: small"><strong>¿Usted es repatriado?</strong></p></td>
            <td><p style="font-size: small"><?= $repatriado = ($socEc->REPATRIADO == 'N') ? 'NO' : 'SI' ?></p></td>
            <td class="active"><p style="font-size: small"><strong>Tiempo de radicar en el Estado de México</strong></p></td>
            <td><p style="font-size: small"><?= $socEc->radicar->DESC_TIEMPO_RADICAR ?></p></td>
            <td class="active"><p style="font-size: small"><strong>¿Usted ha sido víctima u ofendido de algún delito?</strong></p></td>
            <td><p style="font-size: small"><?= $delito = ($socEc->ES_VICTIMA == 'N') ? 'NO' : 'SI' ?></p></td>
        </tr>
        <tr>
            <td class="active"><p style="font-size: small"><strong>Delito</strong></p></td>
            <td><p style="font-size: small"><?= $socEc->DELITO_CUAL ?></p></td>
            <td class="active"><p style="font-size: small"><strong>¿Padece alguna enfermedad crónico-degenerativa?</strong></p></td>
            <td><p style="font-size: small"><?= $socEc->enfermedad->DESC_ENFERMEDAD ?></p></td>
            <td class="active"><p style="font-size: small"><strong>¿En caso de ser mujer Actualmente se encuentra embarazada?</strong></p></td>
            <td><p style="font-size: small"><?= $embarazada = ($socEc->EMBARAZADA == 'N') ? 'NO' : 'SI' ?></p></td>
        </tr>
        <tr>
            <td class="active"><p style="font-size: small"><strong>¿Meses?</strong></p></td>
            <td><p style="font-size: small"><?= $socEc->EMBARAZADA_MESES ?></p></td>
            <td class="active"><p style="font-size: small"><strong>¿El solicitante tiene alguna discapacidad?</strong></p></td>
            <td><p style="font-size: small"><?= $socEc->discapacidad->DESC_DISCAPACIDAD ?></p></td>
            <td class="active"><p style="font-size: small"><strong>¿El solicitante está afiliado a alguna institución de salud?</strong></p></td>
            <td><p style="font-size: small"><?= $socEc->institucionSalud->DESC_INST_SALUD ?></p></td>
        </tr>
        <tr>
            <td class="active"><p style="font-size: small"><strong>¿El solicitante presenta alguna condición de orfandad?</strong></p></td>
            <td><p style="font-size: small"><?= $socEc->orfandad->DESC_ORFANDAD ?></p></td>
            <td class="active"><p style="font-size: small"><strong>¿Qué grado de estudios tiene?</strong></p></td>
            <td><p style="font-size: small"><?= $socEc->gradoEstudios->GRADO_ESTUDIOS ?></p></td>
            <td class="active"><p style="font-size: small"><strong>¿Nombre de la escuela?</strong></p></td>
            <td><p style="font-size: small"><?= $socEc->DESC_CCT ?></p></td>
        </tr>
    </tbody>
</table>
<table class="table table-condensed">
    <thead>
    <tr>
        <th colspan="8" style="background-color:#b1b024">INGRESO DEL HOGAR</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td class="active"><p style="font-size: small"><strong>El hogar se encuentra en:</strong></p></td>
        <td><p style="font-size: small"><?= $zona = ($socEc->TIPO_ZONA == 'U' ) ? 'Zona Urbana': 'Zona Rural'?></p></td>
        <td class="active"><p style="font-size: small"><strong>¿Actualmente trabaja?</strong></p></td>
        <td><p style="font-size: small"><?= $trabaja = ($socEc->TRABAJA == 'S') ? 'SI': 'NO' ?></p></td>
        <td class="active"><p style="font-size: small"><strong>Su empleo actual es:</strong></p></td>
        <td><p style="font-size: small"><?= $socEc->tipoEmpleo->DESC_TIPO_EMPLEO ?></p></td>
    </tr>
    <tr>
        <td class="active"><p style="font-size: small"><strong>¿En qué trabaja?</strong></p></td>
        <td><p style="font-size: small"><?= $socEc->actividadLaboral->ACTIVIDAD_LABORAL ?></p></td>
        <td class="active"><p style="font-size: small"><strong>¿Cuál es el monto mensual que recibe por ese trabajo?</strong></p></td>
        <td><p style="font-size: small"><?= $socEc->salario->DESC_SALARIO ?></p></td>
        <td class="active"><p style="font-size: small"><strong>¿A pesar de no trabajar cuenta con algún ingreso?</strong></p></td>
        <td><p style="font-size: small"><?= $ingreso2 = ($socEc->ALGUN_INGRESO == 'S') ? 'SI': 'NO' ?></p></td>
    </tr>
    <tr>
        <td class="active"><p style="font-size: small"><strong>¿De que Tipo?</strong></p></td>
        <td><p style="font-size: small"><?= $socEc->ALGUN_INGRESO_TIPO ?></p></td>
        <td class="active"><p style="font-size: small"><strong>¿Monto?</strong></p></td>
        <td><p style="font-size: small"><?= $socEc->ALGUN_INGRESO_MONTO ?></p></td>
        <td class="active"><p style="font-size: small"><strong>¿En su hogar se reciben ingresos por alquilar algún terreno o inmueble?</strong></p></td>
        <td><p style="font-size: small"><?= $alquiler = ($socEc->ALQUILER_TERRENO == 'S') ? 'SI': 'NO' ?></p></td>
    </tr>
    <tr>
        <td class="active"><p style="font-size: small"><strong>¿Monto?</strong></p></td>
        <td><p style="font-size: small"><?= $socEc->ALQUILER_TERRENO_MONTO ?></p></td>
        <td class="active"><p style="font-size: small"><strong>¿En su hogar se reciben ingresos por jubilaciones y/o pensiones, de otros hogares, de organizaciones o prevenientes de algún otro país?</strong></p></td>
        <td><p style="font-size: small"><?= $pension = ($socEc->PENSION == 'S') ? 'SI': 'NO' ?></p></td>
        <td class="active"><p style="font-size: small"><strong>¿Monto?</strong></p></td>
        <td><p style="font-size: small"><?= $socEc->PENSION_MONTO ?></p></td>
    </tr>
    <tr>
        <td class="active"><p style="font-size: small"><strong>¿Cuál es el ingreso total mensual del hogar (adicional al salario del jefe)?</strong></p></td>
        <td><p style="font-size: small"><?= $socEc->salario2->DESC_SALARIO ?></p></td>
        <td class="active"><p style="font-size: small"><strong>¿Cuántos dependientes económicos hay en el hogar?</strong></p></td>
        <td><p style="font-size: small"><?= $socEc->dependientes->DESC_DEPEN_ECONOM ?></p></td>
        <td class="active"><p style="font-size: small"><strong>Parentesco de los dependientes económicos, respecto al jefe del hogar</strong></p></td>
        <td><p style="font-size: small"><?= $socEc->parentesco2->DESC_PARENTESCO ?></p></td>
    </tr>
    <tr>
        <td class="active"><p style="font-size: small"><strong>¿Actualmente algún integrante del hogar cuenta con el apoyo de algún programa de desarrollo social?</strong></p></td>
        <td><p style="font-size: small"><?= $otroPrograma = ($socEc->RECIBE_APOYO == 'S') ? 'SI': 'NO' ?></p></td>
        <td class="active"><p style="font-size: small"><strong>¿Cuantos Apoyos?</strong></p></td>
        <td><p style="font-size: small"><?= $socEc->CUANTOS_APOYOS ?></p></td>
        <td class="active"><p style="font-size: small"><strong>¿Cuales Apoyos?</strong></p></td>
        <td><p style="font-size: small"><?= $socEc->CUAL_APOYO ?></p></td>
    </tr>
    <tr>
        <td colspan="5" class="active"><p style="font-size: small"><strong>¿Cuántas personas viven normalmente en esta vivienda, contando a los niños y a los ancianos?</strong></p></td>
        <td colspan="3" ><p style="font-size: small"><?= $socEc->cantidad2->DESC_CANT ?></p></td>
    </tr>
    </tbody>
</table>
<table class="table table-condensed">
    <thead>
    <tr>
        <th colspan="8" style="background-color:#b1b024">INGRESO DE LA MUJER</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td class="active"><p style="font-size: small"><strong>El hogar se encuentra en:</strong></p></td>
        <td><p style="font-size: small"><?= $zona2 = ($socEc->TIPO_ZONA2 == 'U') ? 'Zona Urbana': 'Zona Rural'?></p></td>
        <td class="active"><p style="font-size: small"><strong>¿El mes pasado realizo alguna de las siguientes actividades?</strong></p></td>
        <td><p style="font-size: small"><?= $socEc->actividad->DESC_ACTIVIDAD ?></p></td>
    </tr>
    <tr>
        <td class="active"><p style="font-size: small"><strong>¿Dónde realizo dicha actividad?</strong></p></td>
        <td><p style="font-size: small"><?= $socEc->realizaActividad->DESC_REALIZA_ACTIVIDAD ?></p></td>
        <td class="active"><p style="font-size: small"><strong>Esta actividad fue…</strong></p></td>
        <td><p style="font-size: small"><?= $renmunerada = ($socEc->ACTIVIDAD_FUE == 'R') ? 'Remunerada': 'No Remunerada'?></p></td>
    </tr>
    <tr>
        <td colspan="3" class="active"><p style="font-size: small"><strong>¿Cuál es el monto mensual que recibe por esta actividad?</strong></p></td>
        <td colspan="5"><p style="font-size: small"><?= $socEc->salario3->DESC_SALARIO ?></p></td>
    </tr>
    </tbody>
</table>
<table class="table table-condensed">
    <thead>
    <tr>
        <th colspan="8" style="background-color:#b1b024">INGRESO DEL JOVEN</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td class="active"><p style="font-size: small"><strong>El hogar se encuentra en:</strong></p></td>
        <td><p style="font-size: small"><?= $zona2 = ($socEc->TIPO_ZONA3 == 'U') ? 'Zona Urbana': 'Zona Rural'?></p></td>
        <td class="active"><p style="font-size: small"><strong>¿Actualmente trabaja?</strong></p></td>
        <td><p style="font-size: small"><?= $trabaja2 = ($socEc->TRABAJA2 == 'S') ? 'SI': 'NO' ?></p></td>
        <td class="active"><p style="font-size: small"><strong>¿Cuál es el monto del pago mensual que recibe?</strong></p></td>
        <td><p style="font-size: small"><?= $socEc->salario4->DESC_SALARIO ?></p></td>
    </tr>
    <tr>
        <td class="active"><p style="font-size: small"><strong>¿Actualmente se encuentra usted estudiando?</strong></p></td>
        <td><p style="font-size: small"><?= $estudia2 = ($socEc->ESTUDIA == 'S') ? 'SI': 'NO' ?></p></td>
        <td class="active"><p style="font-size: small"><strong>¿Recibe algún ingreso por parte del jefe (a) del hogar?</strong></p></td>
        <td><p style="font-size: small"><?= $recibeIngreso = ($socEc->RECIBE_INGRESO == 'S') ? 'SI': 'NO' ?></p></td>
        <td class="active"><p style="font-size: small"><strong>¿Cuál es el monto mensual del ingreso que recibe por parte del jefe del hogar?</strong></p></td>
        <td><p style="font-size: small"><?= $socEc->salario5->DESC_SALARIO ?></p></td>
    </tr>
    <tr>
        <td class="active"><p style="font-size: small"><strong>¿Actualmente el solicitante tiene alguna beca escolar?</strong></p></td>
        <td><p style="font-size: small"><?= $beca = ($socEc->BECA == 'S') ? 'SI': 'NO' ?></p></td>
        <td class="active"><p style="font-size: small"><strong>La periodicidad del ingreso que recibe por beca</strong></p></td>
        <td><p style="font-size: small"><?= $socEc->perIngreso->DESC_PER_INGRESO  ?></p></td>
        <td class="active"><p style="font-size: small"><strong>Monto que recibe de la beca</strong></p></td>
        <td><p style="font-size: small"><?= $socEc->MONTO_BECA ?></p></td>
    </tr>
    <tr>
        <td colspan="2" class="active"><p style="font-size: small"><strong>Monto mensual que gasta el solicitante en transporte</strong></p></td>
        <td><p style="font-size: small"><?= $socEc->MONTO_TRANSPORTE ?></p></td>
        <td colspan="2" class="active"><p style="font-size: small"><strong>¿Cuál es el tiempo de traslado a la escuela?</strong></p></td>
        <td><p style="font-size: small"><?= $socEc->tiempo->DESC_TIEMPO  ?></p></td>
    </tr>
    </tbody>
</table>
<table class="table table-condensed">
    <thead>
    <tr>
        <th colspan="8" style="background-color:#b1b024">ALIMENTACIÓN</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td colspan="3" class="active"><p style="font-size: 50%"><strong>Cuántos hogares o grupos de personas tienen gasto separado para comer contando el de usted?</strong></p></td>
        <td><p style="font-size: 50%"><?= $socEc->cantidad3->DESC_CANT ?></p></td>
        <td colspan="3" class="active"><p style="font-size: 50%"><strong>¿Todas las personas que viven en esta vivienda comparten un mismo gasto para comer?</strong></p></td>
        <td><p style="font-size: 50%"><?= $comparteGasto = ($socEc->COMPARTEN_GASTOS == 'S') ? 'SI': 'NO' ?></p></td>
    </tr>
    <tr>
        <td colspan="3" class="active"><p style="font-size: 50%"><strong>En los últimos tres meses, por falta de dinero o recursos ¿alguna vez un adulto se quedó sin comida?</strong></p></td>
        <td><p style="font-size: 50%"><?= $sinComida = ($socEc->ADULTO_SINCOMIDA == 'S') ? 'SI': 'NO' ?></p></td>
        <td colspan="3" class="active"><p style="font-size: 50%"><strong>En los últimos tres meses, por falta de dinero o recursos ¿alguna vez usted o algún adulto en su hogar sintió hambre pero no comió?</strong></p></td>
        <td><p style="font-size: 50%"><?= $sintioHambre = ($socEc->ADULTO_SINTIOHAMBRE == 'S') ? 'SI': 'NO' ?></p></td>
    </tr>
    <tr>
        <td colspan="3" class="active"><p style="font-size: 50%"><strong>En los últimos tres meses, por falta de dinero o recursos ¿alguna vez un menor tuvo poca variedad en sus alimentos?</strong></p></td>
        <td><p style="font-size: 50%"><?= $pvs = ($socEc->MENOR_PVA == 'S') ? 'SI': 'NO' ?></p></td>
        <td colspan="3" class="active"><p style="font-size: 50%"><strong>En los últimos tres meses, por falta de dinero o recursos ¿alguna vez usted o un adulto en su hogar solo comió una vez al día o dejó de comer todo un día?</strong></p></td>
        <td><p style="font-size: 50%"><?= $comio = ($socEc->ADULTO_COMIO == 'S') ? 'SI': 'NO' ?></p></td>
    </tr>
    <tr>
        <td colspan="3" class="active"><p style="font-size: 50%"><strong>En los últimos tres meses, por falta de dinero o recursos ¿alguna vez usted o un adulto en su hogar tuvo una alimentación basada en muy poca variedad de alimentos?</strong></p></td>
        <td><p style="font-size: 50%"><?= $pvs2 = ($socEc->ADULTO_PVA == 'S') ? 'SI': 'NO' ?></p></td>
        <td colspan="3" class="active"><p style="font-size: 50%"><strong>En los últimos tres meses, por falta de dinero o recursos ¿alguna vez tuvieron que hacer algo que hubieran preferido no hacer para conseguir comida, tal como pedir limosna o mandar a los niños a trabajar?</strong></p></td>
        <td><p style="font-size: 50%"><?= $limosna = ($socEc->LIMOSNA == 'S') ? 'SI': 'NO' ?></p></td>
    </tr>
    <tr>
        <td colspan="3" class="active"><p style="font-size: 50%"><strong>En los últimos tres meses, por falta de dinero o recursos ¿alguna vez usted o un adulto en su hogar dejó de desayunar, comer o cenar?</strong></p></td>
        <td><p style="font-size: 50%"><?= $sinCenar = ($socEc->ADULTO_SINCENAR == 'S') ? 'SI': 'NO' ?></p></td>
        <td colspan="3" class="active"><p style="font-size: 50%"><strong>En los últimos tres meses, por falta de dinero o recursos ¿algún menor comió sólo una vez al día o dejó de comer todo un día?</strong></p></td>
        <td><p style="font-size: 50%"><?= $comio2 = ($socEc->MENOR_COMIO == 'S') ? 'SI': 'NO' ?></p></td>
    </tr>
    <tr>
        <td colspan="3" class="active"><p style="font-size: 50%"><strong>En los últimos tres meses, por falta de dinero o recursos ¿alguna vez usted o un adulto en su hogar comió menos de lo que usted piensa que debía comer?</strong></p></td>
        <td><p style="font-size: 50%"><?= $comioMenos = ($socEc->ADULTO_COMIOMENOS == 'S') ? 'SI': 'NO' ?></p></td>
        <td colspan="3" class="active"><p style="font-size: 50%"><strong>En los últimos tres meses, por falta de dinero o recursos ¿algún menor comió menos de lo que debería comer?</strong></p></td>
        <td><p style="font-size: 50%"><?= $comioMenos2 = ($socEc->MENOR_COMIOMENOS == 'S') ? 'SI': 'NO' ?></p></td>
    </tr>
    <tr>
        <td colspan="3" class="active"><p style="font-size: 50%"><strong>En los últimos tres meses, por falta de dinero o recursos ¿algún menor sintió hambre pero no comió?</strong></p></td>
        <td><p style="font-size: 50%"><?= $sintioHambre2 = ($socEc->MENOR_SINTIOHAMBRE == 'S') ? 'SI': 'NO' ?></p></td>
        <td colspan="3" class="active"><p style="font-size: 50%"><strong>En los últimos tres meses, por falta de dinero o recursos ¿alguna vez un menor se le tuvo que servir menos comida?</strong></p></td>
        <td><p style="font-size: 50%"><?= $menosComida = ($socEc->MENOR_MENOSCOMIDA == 'S') ? 'SI': 'NO' ?></p></td>
    </tr>
    <tr>
        <td colspan="3" class="active"><p style="font-size: 50%"><strong>En los últimos tres meses, por falta de dinero o recursos ¿alguna vez un menor se tuvo que acostar con hambre?</strong></p></td>
        <td><p style="font-size: 50%"><?= $acostarHambre = ($socEc->MENOR_ACOSTARHAMBRE == 'S') ? 'SI': 'NO' ?></p></td>
    </tr>
    </tbody>
</table>

<table class="table table-condensed">
    <thead>
    <tr>
        <th colspan="12" style="background-color:#b1b024">5. CARACTERÍSTICAS SOCIODEMOGRÁFICAS</th>
    </tr>
    <tr>
        <th colspan="1">#</th>
        <th colspan="3"><p style="font-size: 70%">Nombre</th>
        <th colspan="1"><p style="font-size: 70%">Parentesco</p></th>
        <th colspan="1"><p style="font-size: 70%">Sexo</p></th>
        <th colspan="1"><p style="font-size: 70%">Sabe Leer y escribir</p></th>
        <th colspan="1"><p style="font-size: 70%">Asiste a la Escuela</p></th>
        <th colspan="2"><p style="font-size: 70%">Nivel Educativo</p></th>
        <th colspan="2"><p style="font-size: 70%">Discapacidad</p></th>
    </tr>
    </thead>
    <tbody>
    <?php if($familia):?>
        <?php foreach ($familia as $values): ?>
            <tr>
                <td colspan="1"><p style="font-size: 70%"><?= $values->CONSECUTIVO ?></p></td>
                <td colspan="3"><p style="font-size: 70%"><?= $values->NOMBRE_COMPLETO ?></p></td>
                <td colspan="1"><p style="font-size: 70%"><?= $values->parentesco->DESC_PARENTESCO ?></p></td>
                <td colspan="1"><p style="font-size: 70%"><?= $values->SEXO ?></p></td>
                <td colspan="1"><p style="font-size: 70%"><?= $sabeleer = ($values->SABELEER == 'S') ? 'SI' : 'NO'  ?></p></td>
                <td colspan="1"><p style="font-size: 70%"><?= $asisteEsc = ($values->ASISTE_ESC == 'S') ? 'SI' : 'NO' ?></p></td>
                <td colspan="2"><p style="font-size: 70%"><?= $values->gradoEstudios->GRADO_ESTUDIOS ?></p></td>
                <td colspan="2"><p style="font-size: 70%"><?= $values->discapacidad->DESC_DISCAPACIDAD ?></p></td>
            </tr>
        <?php endforeach; ?>
    <?php endif;?>
    </tbody>
</table>
<table class="table table-condensed">
    <thead>
    <tr>
        <th colspan="12" style="background-color:#b1b024">6. CARACTERISTICAS DE LA VIVIENDA</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td colspan="3" class="active"><p style="font-size: 50%"><strong>La casa donde vive es</strong></p></td>
        <td colspan="3"><p style="font-size: 50%"><?= $socEc->casaVive->DESC_CASADONDEVIVE_ES  ?></p></td>
        <td colspan="3" class="active"><p style="font-size: 50%"><strong>¿De qué material es la mayor parte del techo de esta vivienda?</strong></p></td>
        <td colspan="3"><p style="font-size: 50%"><?= $socEc->materialVivienda->DESC_MATERIAL  ?></p></td>
    </tr>
    <tr>
        <td colspan="3" class="active"><p style="font-size: 50%"><strong>¿De qué material es la mayor parte de las paredes o muros de esta vivienda?</strong></p></td>
        <td colspan="3"><p style="font-size: 50%"><?= $socEc->materialVivienda2->DESC_MATERIAL  ?></p></td>
        <td colspan="3" class="active"><p style="font-size: 50%"><strong>¿De qué material es la mayor parte del piso de esta vivienda?</strong></p></td>
        <td colspan="3"><p style="font-size: 50%"><?= $socEc->materialVivienda3->DESC_MATERIAL  ?></p></td>
    </tr>
    <tr>
        <td colspan="3" class="active"><p style="font-size: 50%"><strong>¿Cuántos cuartos tiene en total esta vivienda contando la cocina? (no cuente pasillos ni baños)</strong></p></td>
        <td colspan="3"><p style="font-size: 50%"><?= $socEc->CUARTOS  ?></p></td>
        <td colspan="3" class="active"><p style="font-size: 50%"><strong>¿Cuántos cuartos se usan para dormir? sin contar pasillos ni baños?</strong></p></td>
        <td colspan="3"><p style="font-size: 50%"><?= $socEc->CUARTOS_DORMIR  ?></p></td>
    </tr>
    <tr>
        <td colspan="3" class="active"><p style="font-size: 50%"><strong>En esta vivienda tienen</strong></p></td>
        <td colspan="3"><p style="font-size: 50%"><?= $socEc->servicioAgua->DESC_SERVICIO  ?></p></td>
        <td colspan="3" class="active"><p style="font-size: 50%"><strong>¿Tienen excusado, retrete, sanitario letrina u hoyo negro?</strong></p></td>
        <td colspan="3"><p style="font-size: 50%"><?= $excusado = ($socEc->EXCUSADO == 'S') ? 'SI' : 'NO'  ?></p></td>
    </tr>
    <tr>
        <td colspan="3" class="active"><p style="font-size: 50%"><strong>¿El servicio sanitario lo comparten con otra vivienda?</strong></p></td>
        <td colspan="3"><p style="font-size: 50%"><?= $comparteSanitario = ($socEc->SANITARIO == 'S') ? 'SI' : 'NO'  ?></p></td>
        <td colspan="3" class="active"><p style="font-size: 50%"><strong>El servicio sanitario...</strong></p></td>
        <td colspan="3"><p style="font-size: 50%"><?= $socEc->sandren->DESC_SERVICIO_SANDREN ?></p></td>
    </tr>
    <tr>
        <td colspan="3" class="active"><p style="font-size: 50%"><strong>¿Cuántos baños tiene esta vivienda?</strong></p></td>
        <td colspan="3"><p style="font-size: 50%"><?= $socEc->sandren2->DESC_SERVICIO_SANDREN  ?></p></td>
        <td colspan="3" class="active"><p style="font-size: 50%"><strong>Esta vivienda tiene drenaje o desagüe conectado a ...</strong></p></td>
        <td colspan="3"><p style="font-size: 50%"><?= $socEc->sandren3->DESC_SERVICIO_SANDREN ?></p></td>
    </tr>
    <tr>
        <td colspan="3" class="active"><p style="font-size: 50%"><strong>En esta vivienda la luz eléctrica la obtienen...</strong></p></td>
        <td colspan="3"><p style="font-size: 50%"><?= $socEc->servicioLuz->DESC_SERVICIO_LUZ  ?></p></td>
        <td colspan="3" class="active"><p style="font-size: 50%"><strong>El combustible que más usan para cocinar es...</strong></p></td>
        <td colspan="3"><p style="font-size: 50%"><?= $socEc->combustible->DESC_COMBUSTIBLE ?></p></td>
    </tr>
    <tr>
        <td colspan="6" class="active"><p style="font-size: 50%"><strong>¿La estufa (fogón) de leña o carbón con la que cocinan tiene chimenea o algún ducto para sacar el humo de esta vivienda?</strong></p></td>
        <td colspan="2"><p style="font-size: 50%"><?= $estufa = ($socEc->FOGON == 'S') ? 'SI' : 'NO'  ?></p></td>
        <td colspan="4" class="active"><p style="font-size: 50%"><strong>Esta vivienda cuenta con...</strong></p></td>
    </tr>
    <tr>
        <td colspan="1" class="active"><p style="font-size: 50%"><strong>Lavadero</strong></p></td>
        <td colspan="2" ><p style="font-size: 50%"><?= $lavadero = ($socEc->LAVADERO == 'S') ? 'x' : ''  ?></p></td>
        <td colspan="1" class="active"><p style="font-size: 50%"><strong>Tarja</strong></p></td>
        <td colspan="1" ><p style="font-size: 50%"><?= $tarja = ($socEc->TARJA == 'S') ? 'x' : ''  ?></p></td>
        <td colspan="1" class="active"><p style="font-size: 50%"><strong>Regadera</strong></p></td>
        <td colspan="1" ><p style="font-size: 50%"><?= $regadera = ($socEc->REGADERA == 'S') ? 'x' : ''  ?></p></td>
        <td colspan="1" class="active"><p style="font-size: 50%"><strong>Tinaco</strong></p></td>
        <td colspan="1" ><p style="font-size: 50%"><?= $tinaco = ($socEc->TINACO == 'S') ? 'x' : ''  ?></p></td>
        <td colspan="1" class="active"><p style="font-size: 50%"><strong>Cisterna</strong></p></td>
        <td colspan="2" ><p style="font-size: 50%"><?= $cisterna = ($socEc->CISTERNA == 'S') ? 'x' : ''  ?></p></td>
    </tr>
    <tr>
        <td colspan="1" class="active"><p style="font-size: 50%"><strong>Pileta</strong></p></td>
        <td colspan="2" ><p style="font-size: 50%"><?= $pileta = ($socEc->PILETA == 'S') ? 'x' : ''  ?></p></td>
        <td colspan="1" class="active"><p style="font-size: 50%"><strong>Calentador Solar</strong></p></td>
        <td colspan="1" ><p style="font-size: 50%"><?= $solar = ($socEc->CALENTADOR_SOLAR == 'S') ? 'x' : ''  ?></p></td>
        <td colspan="1" class="active"><p style="font-size: 50%"><strong>Calentador Gas</strong></p></td>
        <td colspan="1" ><p style="font-size: 50%"><?= $calGas = ($socEc->CALENTADOR_GAS == 'S') ? 'x' : ''  ?></p></td>
        <td colspan="1" class="active"><p style="font-size: 50%"><strong>Medidor Luz</strong></p></td>
        <td colspan="1" ><p style="font-size: 50%"><?= $medidor = ($socEc->MEDIDOR_LUZ == 'S') ? 'x' : ''  ?></p></td>
        <td colspan="1" class="active"><p style="font-size: 50%"><strong>Bomba Agua</strong></p></td>
        <td colspan="2" ><p style="font-size: 50%"><?= $bomba = ($socEc->BOMBA_AGUA == 'S') ? 'x' : ''  ?></p></td>
    </tr>
    <tr>
        <td colspan="1" class="active"><p style="font-size: 50%"><strong>Tanque Gas</strong></p></td>
        <td colspan="2" ><p style="font-size: 50%"><?= $tanque = ($socEc->TANQUE_GAS == 'S') ? 'x' : ''  ?></p></td>
        <td colspan="1" class="active"><p style="font-size: 50%"><strong>Aire Acondicionado</strong></p></td>
        <td colspan="1" ><p style="font-size: 50%"><?= $clima = ($socEc->AIRE_ACOND == 'S') ? 'x' : ''  ?></p></td>
        <td colspan="1" class="active"><p style="font-size: 50%"><strong>Calefaccion</strong></p></td>
        <td colspan="6" ><p style="font-size: 50%"><?= $clima2 = ($socEc->CALEFACCION == 'S') ? 'x' : ''  ?></p></td>
    </tr>
    <tr>
        <td colspan="3" class="active"><p style="font-size: 50%"><strong>¿Cuantos integrantes de su hogar comparten cuarto dormitorio? (sin contar pasillos</strong></p></td>
        <td colspan="1"><p style="font-size: 50%"><?= $socEc->cantidad4->DESC_CANT  ?></p></td>
        <td colspan="2" class="active"><p style="font-size: 50%"><strong>Esta vivienda es...</strong></p></td>
        <td colspan="2"><p style="font-size: 50%"><?= $socEc->casaVive2->DESC_CASADONDEVIVE_ES ?></p></td>
        <td colspan="3" class="active"><p style="font-size: 50%"><strong>¿Esta vivienda ha sido afectada por algún fenómeno natural?</strong></p></td>
        <td colspan="1"><p style="font-size: 50%"><?= $fenomeno = ($socEc->AFECTADA == 'S') ? 'SI' : 'NO' ?></p></td>
    </tr>
    </tbody>
</table>


<div style="align-content: center">
    <p style="text-align:center;"><img width="60" height="60" src="data:image/png;base64,<?= $code ?>" /></p>
    <p  style="text-align:center"> <?= $model->FOLIO_RELACIONADO ?></p>
</div>


