<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Pizzázó</title>

<style>

body{
    background-image: url("images/background.jpg");
}

.container{
    background-color: white;
    height: 500px;
}

.cim{
    margin: 150px;
    color: white;
}



</style>

</head>
<body>

    <div class="cim text-center">
        <h1>Pizza rendelés gyorsan, kényelmesen</h1>
    </div>

    <div class="container">
        <div class="row"></div>
    </div>

    <footer>

    </footer>
  
    
</body>

<script src="getData.js">
</script>

<script>
getData('../server/kepek.php',render)
function render(data){
    document.querySelector('.row').innerHTML=data.map(obj =>`
    
    
                <div class="card p-3" style="width: 17.8rem">
                    <img src="./images/${obj.img_url}" class="card-img-top img-fluid">
                <div class="card-body">
                    <h5 class="card-title">${obj.nev}</h5>
                    <a href="#" class="btn btn-success">részletek...</a>
                    </div>
                </div>
    
   
    `).join('')
}



</script>

</html>