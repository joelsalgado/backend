$(document).ready(function() {
    jefa = $('input:radio[name="Socioeconomico[ES_JEFA]"]:checked').val();
    lengua = $('input:radio[name="Socioeconomico[HABLA_LENGUA_I]"]:checked').val();
    victima = $('input:radio[name="Socioeconomico[ES_VICTIMA]"]:checked').val();
    embarazada = $('input:radio[name="Socioeconomico[EMBARAZADA]"]:checked').val();
    trabaja = $('input:radio[name="Socioeconomico[TRABAJA]"]:checked').val();
    ingreso = $('input:radio[name="Socioeconomico[ALGUN_INGRESO]"]:checked').val();
    alquiler = $('input:radio[name="Socioeconomico[ALQUILER_TERRENO]"]:checked').val();
    pension = $('input:radio[name="Socioeconomico[PENSION]"]:checked').val();
    apoyo = $('input:radio[name="Socioeconomico[RECIBE_APOYO]"]:checked').val();
    remunerada = $('input:radio[name="Socioeconomico[ACTIVIDAD_FUE]"]:checked').val();
    trabajo2 = $('input:radio[name="Socioeconomico[TRABAJA2]"]:checked').val();
    ingreso2 = $('input:radio[name="Socioeconomico[RECIBE_INGRESO]"]:checked').val();


    if (jefa == "S"){
        $('.JEFA').hide();
    }

    if (lengua == "N"){
        $('.LENGUA').hide();
    }

    if (victima == "N"){
        $('.DELITO').hide();
    }
    if (embarazada == "N"){
        $('.EMBARAZADA').hide();
    }

    if (trabaja == "S"){
        $('.NOTRABAJA').hide();
    }else{
        $('.SITRABAJA').hide();
    }

    if (ingreso == "N"){
        $('.INGRESO').hide();
    }

    if (alquiler == "N"){
        $('.ALQUILER').hide();
    }

    if (pension == "N"){
        $('.PENSION').hide();
    }

    if (apoyo == "N"){
        $('.APOYOS').hide();
    }

    if (remunerada == "N"){
        $('.REMUNERADA').hide();
    }

    if (trabajo2 == "N"){
        $('.TRABAJO2').hide();
    }

    if (ingreso2 == "N"){
        $('.INGRESOJEFE').hide();
    }



});


$(function() {

    $('input:radio[name="Socioeconomico[ES_JEFA]"]').change(function() {
        if ($(this).val() == 'S') {
            $('.JEFA').hide();
        } else {
            $('.JEFA').show();
        }
    });

    $('input:radio[name="Socioeconomico[HABLA_LENGUA_I]"]').change(function() {
        if ($(this).val() == 'N') {
            $('.LENGUA').hide();
        } else {
            $('.LENGUA').show();
        }
    });

    $('input:radio[name="Socioeconomico[ES_VICTIMA]"]').change(function() {
        if ($(this).val() == 'N') {
            $('.DELITO').hide();
        } else {
            $('.DELITO').show();
        }
    });

    $('input:radio[name="Socioeconomico[EMBARAZADA]"]').change(function() {
        if ($(this).val() == 'N') {
            $('.EMBARAZADA').hide();
        } else {
            $('.EMBARAZADA').show();
        }
    });

    $('input:radio[name="Socioeconomico[TRABAJA]"]').change(function() {
        if ($(this).val() == 'N') {
            $('.NOTRABAJA').show();
            $('.SITRABAJA').hide();
        } else {
            $('.NOTRABAJA').hide();
            $('.SITRABAJA').show();
        }
    });

    $('input:radio[name="Socioeconomico[ALGUN_INGRESO]"]').change(function() {
        if ($(this).val() == 'N') {
            $('.INGRESO').hide();
        } else {
            $('.INGRESO').show();
        }
    });

    $('input:radio[name="Socioeconomico[ALQUILER_TERRENO]"]').change(function() {
        if ($(this).val() == 'N') {
            $('.ALQUILER').hide();
        } else {
            $('.ALQUILER').show();
        }
    });

    $('input:radio[name="Socioeconomico[PENSION]"]').change(function() {
        if ($(this).val() == 'N') {
            $('.PENSION').hide();
        } else {
            $('.PENSION').show();
        }
    });

    $('input:radio[name="Socioeconomico[RECIBE_APOYO]"]').change(function() {
        if ($(this).val() == 'N') {
            $('.APOYOS').hide();
        } else {
            $('.APOYOS').show();
        }
    });

    $('input:radio[name="Socioeconomico[ACTIVIDAD_FUE]"]').change(function() {
        if ($(this).val() == 'N') {
            $('.REMUNERADA').hide();
        } else {
            $('.REMUNERADA').show();
        }
    });

    $('input:radio[name="Socioeconomico[TRABAJA2]"]').change(function() {
        if ($(this).val() == 'N') {
            $('.TRABAJO2').hide();
        } else {
            $('.TRABAJO2').show();
        }
    });

    $('input:radio[name="Socioeconomico[RECIBE_INGRESO]"]').change(function() {
        if ($(this).val() == 'N') {
            $('.INGRESOJEFE').hide();
        } else {
            $('.INGRESOJEFE').show();
        }
    });
});