<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP + Vue</title>

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div id="app">
        <header>
            <div class="container text-center">
                <div class="row">
                    <div class="col-auto m-auto p-4">
                        <h2 class="text-white">Todo List</h2>
                    </div>
                </div>
            </div>
        </header>
        <main>
        <div class="container">
                <div class="col-12">
                    <div class="container-fluid bg-info-subtle">
                        <div class="p-3 d-flex justify-content-center ">
                            <ul class="list-unstyled text-center" v-if="todoList.length">
                                <li v-for="(item, i) in todoList" @click="toggleTask(i)" :class="{'text-decoration-line-through' : item.done}">{{ item.text }}</li>
                            </ul>
                            <h2 v-else>Nessun dato da visualizzare</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-3">
                <div class="col-12">
                    <div class="container-fluid bg-white p-3">
                        <div class="d-flex flex-column">
                            <div class="input-group">
                                <input v-model="newTask" @keyup.enter="addNewTask" type="text" class="form-control" placeholder="Inserisci la nuova attività">
                                <button @click="addNewTask" class="btn btn-primary">Aggiungi</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="./main.js"></script>

</body>
</html>