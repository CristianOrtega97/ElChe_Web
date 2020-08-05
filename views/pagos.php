<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <script src="https://kit.fontawesome.com/a076d05399.js"></script>
      <link rel="stylesheet" type="text/css" href="../css/styles.css">
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
   </head>
   <body>
       <div class="main-container">
      <div class="row">
         <form class="data-container data-column column" action="">
         <h1>Pago de reservación</h1>

            <i class="fas fa-user-alt"></i>
            <input type="text" placeholder="Nombre del titular de la tarjeta"><br>
            <i class="far fa-credit-card"></i>
            <input type="text" placeholder="Numero de tarjeta"><br>
            <div class="exp-select">
               <label for="month">Exp. Month:</label>
               <select class="month-select" name="MM" id="month">
                  <option value="01">01</option>
                  <option value="02">02</option>
                  <option value="03">03</option>
                  <option value="04">04</option>
                  <option value="05">05</option>
                  <option value="06">06</option>
                  <option value="07">07</option>
                  <option value="08">08</option>
                  <option value="09">09</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
               </select>
               <label for="month">Exp. Year:</label>
               <select class="year-select" name="MM" id="month">
                  <option value="01"><?php echo date("Y");?></option>
                  <option value="01"><?php echo date("Y") + 1;?></option>
                  <option value="01"><?php echo date("Y") + 2;?></option>
                  <option value="01"><?php echo date("Y") + 3;?></option>
                  <option value="01"><?php echo date("Y") + 4;?></option>
                  <option value="01"><?php echo date("Y") + 5;?></option>
               </select>
               <label >CVV:</label>
               <input class="input-cvv" type="text" placeholder="***">

            </div>
         </form>
         <div class="res-container res-column column">

            <img class="center" src="../img/cuarto_hotel1.jpg"  alt="habitacion" >
            <h4>Resumen de reservación</h4>

            <p>Habitación</p>

            <p>Fecha reservada: <?php echo date("d/m/y")?></p>

            <p>Monto total a pagar: $2999.99</p>

         </div>

      </div>
      <button class="btn" type="button">Pagar</button>

</div>


   </body>
</html>