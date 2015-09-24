@extends('layout')
@section('content')
<div class="row">
<script>
    jQuery(document).ready(function($) {
        $("#click").click(function(event) {
            $.ajax({
                url: '/',
                type: 'default GET (Other values: POST)',
                dataType: 'default: Intelligent Guess (Other values: xml, json, script, or html)',
                data: {param1: 'value1'},
            })
            .done(function() {
                console.log("success");
            })
            .fail(function() {
                console.log("error");
            })
            .always(function() {
                console.log("complete");
            });
            
        });
    });
</script>
<a href="" id="click">CLick</a>
              <h3>XX CONGRESO NACIONAL DE CIENCIAS DE LA COMPUTACION DE BOLIVIA - POTOSI 2015</h3>
              <h5>DEL 16 AL 20 DE NOVIEMBRE</h5>
              <p>
                 El Congreso Nacional de Ciencias de la Computación (CCBOL) es el evento académico científico más grande en el área de las ciencias de la computación en Bolivia, es organizado por las universidades estatales del Sistema de la Universidad Boliviana. CCBOL es un evento científico que aglutina a investigadores, docentes, profesionales, alumnos de grado y estudiantes de postgrado vinculados con la carrera de Informática y Sistemas. </p>

              <p>
                El Congreso cubre temas de importancia en Ciencias de la Computación, a través de la organización de diferentes Conferencias y Tutorías, coordinados por expertos en las diferentes disciplinas. Así mismo tiene como objeto impulsar iniciativas de grupos de investigación, reconocer y difundir el trabajo de investigadores nacionales y el trabajo que los estudiantes realizan en los proyectos de Investigación. Deseamos que este XX Congreso Nacional de Ciencias de la Computación, que se efectúa cada año a nivel nacional, sea comparable por su calidad y estructura con los mejores de la especialidad. Esperamos que sirva también como medio de acercamiento y para establecer diálogo cordial con destacados invitados extranjeros, nacionales y reconocidos profesionales de nuestro medio.
              </p>
            </div>
      </div>
        </div>
    <div class="container">
          <div class="row">
        <article class="span6">
              <h3>Convocan y organizan</h3>
              <div class="wrapper">
            <figure class="img-indent"><img src="img/uatflogin.jpg " alt="" /></figure>
            <div class="inner-1 overflow extra">
                  
                </div>
          </div>
            </article>
        <article class="span6">
              <h3>Invitados internacionales</h3>
              <ul class="list-photo">
            <li></li>
          </ul>
            </article>
      </div>
        </div>
@endsection