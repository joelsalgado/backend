<div class="page-header">
    <table class="table">
        <tr>
            <td><img class="rounded float-left" src="http://japem.edomex.gob.mx/sites/japem.edomex.gob.mx/files/images/EDOMEX_OK-01(1).png" height="54" width="81"> </td>
            <td align="right"><img style="text-align:right" src="https://seeklogo.com/images/G/gobierno-del-estado-de-mexico-en-grande-logo-FE81DB6908-seeklogo.com.png" height="54" width="81"></td>
        </tr>
    </table>

    <h4 align="center">FORMATO UNICO DE REGISTRO</h4>
    <h5 align="center">PROGRAMA DE DESARROLLO SOCIAL GENTE EN GRANDE</h5>
</div>

<div class="alert alert-danger">
    <p style="text-align: center">IDENTIFICACIÓN GEOGRÁFICA</p>
</div>

<table class="table table-condensed">
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
        <td class="active"><strong>LOTE</strong></td>
        <td><?= $model->LOTE ?></td>
    </tr>
    </tbody>
</table>

<div class="alert alert-danger">
    <p style="text-align: center">DIRECCIÓN DE LA VIVIENDA</p>
</div>
<table class="table table-condensed">
    <tbody>
    <tr>
        <td class="active"><strong>Calle</strong></td>
        <td><?= $model->CALLE ?></td>
    </tr>
    <tr>
        <td class="active"><strong>Número Exterior</strong></td>
        <td><?= $model->NUM_EXT ?></td>
        <td class="active"><strong>Número Interior</strong></td>
        <td><?= $model->NUM_INT ?></td>
        <td class="active"><strong>Colonia</strong></td>
        <td><?= $model->COLONIA ?></td>
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

<div class="alert alert-danger">
    <p style="text-align: center">DATOS PERSONALES</p>
</div>
<table class="table table-condensed">
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
<div style="align-content: center">
    <p style="text-align:center;"><img width="60" height="60" src="data:image/png;base64,<?= $code ?>" /></p>
    <p  style="text-align:center"> <?= $model->FOLIO_RELACIONADO ?></p>
</div>


