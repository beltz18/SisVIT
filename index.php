<?php
  include './client/partials/head.php';
  include './client/partials/nav.php';
?>
  <br>
  <div class="container-body nnn">
    <div class="www flex-card-x p-4 mb-4 text-sm text-blue-700 bg-blue-100 rounded-lg dark:bg-blue-200 dark:text-blue-800" role="alert">
      <i class="bx bx-user icon"></i>
      Usuarios registrados: <b>5</b>
    </div>
    <div class="www flex-card-x p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-green-200 dark:text-green-800" role="alert">
      <i class="bx bxs-car icon"></i>
      Vehiculos registrados: <b>5</b>
    </div>
    <div class="www p-4 flex-card-x mb-4 text-sm text-yellow-700 bg-yellow-100 rounded-lg dark:bg-yellow-200 dark:text-yellow-800" role="alert">
      <i class="bx bx-info-circle icon"></i>
      Infracciones esta semana: <b>5</b>
    </div>
    <div class="www flex-card-x p-4 mb-4 text-sm text-gray-700 bg-gray-100 rounded-lg dark:bg-gray-700 dark:text-gray-300" role="alert">
      <i class="bx bx-error icon"></i>
      Infracciones esta mes: <b>5</b>
    </div>
  </div>
  <div class="container-body">
    <div id="accordion-color" data-accordion="collapse" data-active-classes="bg-blue-100 dark:bg-gray-800 text-blue-600 dark:text-white">
      <h2 id="accordion-color-heading-1">
        <button type="button" class="flex justify-between items-center p-5 w-full font-medium text-left rounded-t-xl border border-b-0 border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 hover:bg-blue-100 dark:hover:bg-gray-800 bg-blue-100 dark:bg-gray-800 text-blue-600 dark:text-white" data-accordion-target="#accordion-color-body-1" aria-expanded="true" aria-controls="accordion-color-body-1">
          <span>¿Qué es el SisVIT?</span>
          <svg data-accordion-icon="" class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
      </h2>

      <div id="accordion-color-body-1" class="" aria-labelledby="accordion-color-heading-1">
        <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700 dark:bg-gray-900">
          <p class="mb-2 text-gray-500 dark:text-gray-400">
            El Sistema Vial de Infracciones de Transito (SisVIT) es un sistema de información que permite la gestión de infracciones en el Municipio Cárdenas.
          </p>
          <p class="text-gray-500 dark:text-gray-400">
            Todo esto se logra gracias al trabajo de recolección de datos que son manejados por los cuerpos de seguridad y agentes competentes con la finalidad de crear conciencia con las normativas viales.
          </p>
        </div>
      </div>

      <h2 id="accordion-color-heading-2">
        <button type="button" class="flex justify-between items-center p-5 w-full font-medium text-left text-gray-500 border border-b-0 border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-color-body-2" aria-expanded="false" aria-controls="accordion-color-body-2">
          <span>¿Quién puede usar SisVIT?</span>
          <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
      </h2>

      <div id="accordion-color-body-2" class="hidden" aria-labelledby="accordion-color-heading-2">
        <div class="p-5 border border-b-0 border-gray-200 dark:border-gray-700">
          <p class="mb-2 text-gray-500 dark:text-gray-400">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Voluptatibus ea cupiditate aliquam, laborum facere recusandae quae et. Ullam, libero magni. Placeat reprehenderit error suscipit nulla doloremque fugit dignissimos perspiciatis adipisci.
          </p>
          <p class="mb-2 text-gray-500 dark:text-gray-400">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos sunt fugiat consequatur quam iusto aspernatur, voluptates deserunt eum maxime minima neque consectetur ullam quos dolor! Non aperiam esse asperiores soluta.
          </p>
        </div>
      </div>

      <h2 id="accordion-color-heading-3">
        <button type="button" class="flex justify-between items-center p-5 w-full font-medium text-left text-gray-500 border border-gray-200 focus:ring-4 focus:ring-blue-200 dark:focus:ring-blue-800 dark:border-gray-700 dark:text-gray-400 hover:bg-blue-100 dark:hover:bg-gray-800" data-accordion-target="#accordion-color-body-3" aria-expanded="false" aria-controls="accordion-color-body-3">
          <span>¿Puedo visualizar mis multas en el SisVIT?</span>
          <svg data-accordion-icon="" class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
      </h2>

      <div id="accordion-color-body-3" class="hidden" aria-labelledby="accordion-color-heading-3">
        <div class="p-5 border border-t-0 border-gray-200 dark:border-gray-700">
          <p class="mb-2 text-gray-500 dark:text-gray-400">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos sunt fugiat consequatur quam iusto aspernatur, voluptates deserunt eum maxime minima neque consectetur ullam quos dolor! Non aperiam esse asperiores soluta.
          </p>
          <p class="mb-2 text-gray-500 dark:text-gray-400">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos sunt fugiat consequatur quam iusto aspernatur, voluptates deserunt eum maxime minima neque consectetur ullam quos dolor! Non aperiam esse asperiores soluta.
          </p>
          <p class="mb-2 text-gray-500 dark:text-gray-400">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos sunt fugiat consequatur quam iusto aspernatur, voluptates deserunt eum maxime minima neque consectetur ullam quos dolor! Non aperiam esse asperiores soluta.
          </p>
          <ul class="pl-5 list-disc text-gray-500 dark:text-gray-400">
            <li>
              <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline">
                Option 1
              </a>
            </li>
            <li>
              <a href="#" class="text-blue-600 dark:text-blue-500 hover:underline">
                Option 2
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

<?php
  include './client/partials/footer.php';
?>