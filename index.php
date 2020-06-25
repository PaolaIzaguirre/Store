<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Store</title>
    
      <!-- Semantic  -->
      
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">

    <!-- script -->
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script src="componentes/barra.js"></script>
    <script src="componentes/tarjeta.js"></script>
</head>
<body>
<div id="App">
    <barra></barra>
    <h2 style="background: ">Más populares</h2>
    <hr style="border-color:teal; height: 20px;">
    
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-12 col-md-6">
             <tarjeta></tarjeta>
            </div>
            <div class="col-lg-3 col-sm-12 col-md-6">
             <tarjeta></tarjeta>
            </div>
            <div class="col-lg-3 col-sm-12 col-md-6">
              <tarjeta></tarjeta>
            </div>
            <div class="col-lg-3 col-sm-12 col-md-6">
              <tarjeta></tarjeta>
            </div>
        </div>
        
    </div>
</div>
    <script>
    new Vue({
        el: "#App"
    });
//Ranking de estrellas 
    $('.ui.rating')
    .rating({
        initialRating: 4,
        maxRating: 5
    });
    </script>
</body>
</html>