<!doctype html>
<html lang='en'>

<head>
  <meta charset='utf-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1'>
  <title>Document</title>
  <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href='./style.css' rel='stylesheet'>
</head>
<body>
  <div id='app'>
    <div class="container d-flex  flex-column align-items-center">
      <h1 class="text-center">Todo List</h1>
      <div class="col-4 ">
         <ul class="list-group list-group-flush">
          <li class="list-group-item d-flex justify-content-between align-items-center" v-for="task in tasks">
            {{task}}
            <i class="fa-solid fa-trash text-light "></i>
        </li>
        </ul> 
       
        <form action="server.php" method="post">
          <div class="mb-3 d-flex mt-2">
            <input type="text" name="task" id="task" class="form-control rounded-0" placeholder="Inserisci elemento..." aria-describedby="taskHelper" v-model='task' @keyup.enter="saveTasks">
            <button type="submit" class="rounded-0">
              Inserisci
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src='https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js'></script>
  <!-- Development only cdn, disable in production -->
  <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
  <script src='./app.js'></script>
</body>
</html>