<?php
if (isset($_POST['btn_login'])) {
  $usr = $_POST['usr'];
  $psw = $_POST['psw'];

  $a = $user->login($usr,md5($psw));
  if ($a == 0) {
    echo "<script>
            Swal.fire({
                      title: 'Error',
                      text: 'Usuario o contraseña incorrectos',
                      icon: 'error'
                    })
          </script>";
  } else {
    echo "<script>
            Swal.fire({
              title: 'Bienvenido(a) ".ucwords($usr)."!',
              text: 'En un momento te redirigiremos a la página principal',
              icon: 'success',
              timer: 3000,
              timerProgressBar: true,
              willClose: () => {
                location.assign('./index.php')
              }
            })
          </script>";
  }
}