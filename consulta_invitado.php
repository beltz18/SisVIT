<?php
  include './server/models/conexion.php';
  include './server/models/users.php';
  if($_SESSION['active'] == TRUE) {
    header('Location: ./index.php');
  }
  include './client/partials/head.php';
  include './client/partials/nav_invitado.php';
?>

  <br>
  <div class="container-x">
    <div class="p-4 flex">
      <label for="table-search" class="sr-only">Search</label>
      <div class="relative mt-1">
        <input type="text" id="table-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Buscar infractores por Cédula o Placa...">
      </div>
      <button type="button" id="search" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        <svg class="w-5 h-5 text-white dark:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
      </button>
    </div>
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
      <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
          <th scope="col" class="px-6 py-3">
            Nombre infractor
          </th>
          <th scope="col" class="px-6 py-3">
            Cédula
          </th>
          <th scope="col" class="px-6 py-3">
            Tipo de infracción
          </th>
          <th scope="col" class="px-6 py-3">
            Placa
          </th>
          <th scope="col" class="px-6 py-3">
            Modelo vehículo
          </th>
        </tr>
      </thead>
      <tbody class="tbody">
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
          <td class="px-6 py-3" colspan="5">
            <b>No hay datos para mostrar</b>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <script src="./client/js/jquery.min.js"></script>
  <script src="./client/js/consulta_invitado.js"></script>

<?php
  include './client/partials/footer.php';
?>