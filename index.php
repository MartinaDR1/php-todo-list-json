<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- My css -->
    <link rel="stylesheet" href="style.css">

    <title>PHP ToDo List JSON</title>
</head>
<body>
    <div id="app">
        <div class="container">
            <h1 class="text-center my-3">Todo List</h1>
    
            <div class="my_container">
                <ul class="text-black list-unstyled fs-2 p-2">
                    <li v-for="task in tasks" class="border-bottom"> {{task}}</li>
                </ul>

            </div>
            <div class="my_container new_task p-2">
                <input type="text" v-model="new_task" @keyup.enter="add_task" placeholder="Inserisci un nuovo elemento..." >
                <button type="submit" class="btn btn-outline-light mx-5">Inserisci</button>
            </div>
        </div>

    </div>



    <!-- Axios -->
    <script src='https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js'></script>

    <!-- Vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- Bootstap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <!-- My js -->
    <script src='./app.js'></script>
</body>
</html>