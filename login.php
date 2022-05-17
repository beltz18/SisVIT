<?php
  include './server/models/conexion.php';
  include './server/models/users.php';
  if($_SESSION['active'] == TRUE) {
    header('Location: ./index.php');
  }
  include './client/partials/head-login.php';
  include './client/partials/nav-header.php';
  $user = new User();
?>

  <br>
  <div class="container-body center">
    <form class="loginForm" action="" method="POST">
      <h1 class="title">
        Inicia sesión
      </h1>
      <div class="mb-6">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
          Tu usuario
        </label>
        <input type="text" name="usr" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="usuario@usuario" required>
      </div>
      <div class="mb-6">
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">
          Tu contraseña
        </label>
        <input type="password" name="psw" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="***********" required>
      </div>
      <br>
      <button type="submit" name="btn_login" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Iniciar
      </button>
      <button type="button" name="btn_consulta" class="text-white bg-green-700 hover:bg-greeb-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" onclick="window.location.assign('consulta_invitado.php')">
        Consultar
      </button>
    </form>
    <?php include './server/controllers/login.php'; ?>
  </div>

<?php
  include './client/partials/footer.php';
?>