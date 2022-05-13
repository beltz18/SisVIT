<?php
  include './client/partials/head.php';
  include './client/partials/nav.php';
?>

  <br>
  <div class="container-x">
  <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <div class="p-4">
      <label for="table-search" class="sr-only">Search</label>
      <div class="relative mt-1">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
          <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
        </div>
        <input type="text" id="table-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-80 pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Buscar infracciones...">
      </div>
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
  <script src="./client/js/consult.js"></script>

<?php
  include './client/partials/footer.php';
?>