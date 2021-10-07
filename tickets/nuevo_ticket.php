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
      <form action="#">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Nombre</span>
            <input type="text" placeholder="Nombre Completo" required>
          </div>
          <div class="input-box">
            <span class="details">Correo</span>
            <input type="text" placeholder="@ucaribe.edu.mx" required>
          </div>
          <div class="input-box">
            <span class="details">Tipo de Solicitud</span>
            <select class="form-control" id="sel1">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
            </select>
          </div>
          <div class="input-box">
            <span class="details">Prioridad</span>
            <select class="form-control" id="sel2">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
            </select>
          </div>
          <div class="input-box">
            <span class="details">Laboratorio</span>
            <select class="form-control" id="sel1">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
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
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <div class="button">
          <input type="submit" value="Envíar">
        </div>
      </form>
    </div>
  </div>

</body>
</html>
