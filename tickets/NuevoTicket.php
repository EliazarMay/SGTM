<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!---<title> Responsive Registration Form | CodingLab </title>--->
    <link rel="stylesheet" href="../css/ticket.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">Solicitud de ticket</div>
    <div class="content">
      <form action="metodos/generarTicket.php" method="POST">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Asunto</span>
            <input name="Asunto" type="text" placeholder="" required>
          </div>
          <div class="input-box">
            <span class="details">Fecha</span>
            <input name="Fecha" type="text" placeholder="<?php echo date("d/m/Y");?>" value="<?php echo date("d/m/Y");?>" readonly>
          </div>
          <div class="input-box">
            <span class="details">Nombre</span>
            <input name="Nombre" type="text" placeholder="Nombre Completo" >
          </div>
          <div class="input-box">
            <span class="details">Correo</span>
            <input name="Correo" nametype="text" placeholder="@ucaribe.edu.mx" required>
          </div>
          <!-- <div class="input-box">
            <span class="details">Tipo de Solicitud</span>
            <select class="form-control" id="sel1" name="TipoSolicitud">
              <option value="1">Solicitud de Materiales</option>
              <option value="2">Solicitud de Laboratorio</option>
              <option value="3">Soporte de equipos</option>
              <option value="4">Soporte</option>
            </select>
          </div> -->
          <div class="input-box">
            <span class="details">Prioridad</span>
            <select class="form-control" id="sel2" name="Prioridad">
              <option value="1">Baja</option>
              <option value="2">Intermedia</option>
              <option value="3">Alta</option>
            </select>
          </div>
          <div class="input-box">
            <span class="details">Laboratorio</span>
            <select class="form-control" id="sel1" name="Laboratorio">
              <option value="1">Laboratorio de Multimedia</option>
              <option value="2">Laboratorio Telematica</option>
              <option value="3">Laboratorio de Electronica y Harware</option>
              <option value="4">Laboratorio de TIC</option>
              <option value="5">Laboratorio de Logistica</option>
              <option value="6">Laboratorio de Manufactura</option>
              <option value="7">Laboratorio de Mécanica</option>
              <option value="8">Laboratorio Tecnologías ambientales</option>
              <option value="9">Laboratorio de Ingenieria de metodos y metrología</option>
              <option value="10">Laboratorio de Energías Renovables</option>

            </select>
          </div>
          <div class="input-box">
            <span class="details">Archivo</span>
            <div class="upload-btn-wrapper">
              <button class="btnax" style="align-content: center">Subir</button>
              <input type="file" name="myfile" />
            </div>
          </div>
        </div>
        <div class="gender-details">
          <label for="exampleFormControlTextarea1">Descripción del problema</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="Descripcion"></textarea>
        </div>
        <input type="hidden" name="Estatus" value="1">
        <div class="button">
          <input type="submit" value="Envíar">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
