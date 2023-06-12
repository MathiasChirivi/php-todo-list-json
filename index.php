<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-todo-list-json</title>
    <!--add  AXIOS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <!-- Add Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <!-- add Vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
</head>
<body>
    <div id="app">
    <header>
        <div class="container text-center">
            <div class="row">
                <div class="col-auto m-auto p-4">
                    <h2 class="text-white">Genera La lista delle cose da fare</h2>
                </div>
            </div>
        </div>
    </header>
    <main>
    <div class="container">
            <div class="col-12">
                <div class="container-fluid bg-info-subtle">
                    <div class="p-3 d-flex justify-content-center ">
                        <button class="btn btn-secondary" @click="caricaLista">Carica dati</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-3">
            <div class="col-12">
                <div class="container-fluid bg-white p-3">
                    <div class="d-flex flex-column">
                        <ul class="list-unstyled" v-for="student in students">
                            <li>{{ student.name }}: {{ student.description }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
  
    </div>
    
    <script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>