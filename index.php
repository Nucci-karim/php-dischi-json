<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>php-dischi-json</title>
</head>
<body>

<div id="app">
    <div class="vh-100">
        <nav class="">
            <h1 class="text-center">Ascolta la tua musica</h1>
        </nav>
        
        <div class="container">
            <div class=" d-flex justify-content-center row">
                <div class="card text-center col-3 m-2"  v-for="(elem, index) in data" :key="index">
                    <img class="w-100 m-1" :src="elem.poster" alt="">
                    <div class="card-body">
                        <h3>{{elem.title}}</h3>
                        <h5>{{elem.author}}</h5>
                        <h6>{{elem.year}}</h6>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="./main.js"></script>
</body>
</html>



