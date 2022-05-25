$(document).ready(function () {
  $("#btn_inf").on("click", (e) => {
    e.preventDefault()
    let multas = [
      'Conducir bajo efectos del alcohol',
      'Incurrir en dos o más infracciones',
      'No usar el cinturón de seguridad',
      'Estacionar sobre el paso peatonal',
      'Conducir a exceso de velocidad',
      'Desatender a la autoridad',
      'Infringir señales de transito',
      'Conducir sin placas',
      'Conducir sin licencia',
      'Conducir con licencia vencida',
      'Cruce indebido',
      'Realizar maniobras prohibidas'
    ]

    ced = document.querySelector("#floating_last_name").value
    nom = document.querySelector("#floating_first_name").value
    plc = document.querySelector("#floating_email").value
    mod = document.querySelector("#floating_password").value
    num = document.querySelector("#floating_phone").value

    let new_lista = []
    let val = ""

    $.ajax({
      type: "POST",
      url: "./server/controllers/infraction.php",
      dataType: "json",
      data: {ced,nom,plc,mod,num,val}
    })
  
    .done((data) => {
      if (data == 1) {
        $.ajax({
          type: "POST",
          url: "./server/controllers/getMultipleMults.php",
          dataType: "json",
          data: {ced}
        })
    
        .done((data) => {
          if(data.suma > 1) {
            alert("Multa registrada. ----AVISO: Este usuario tiene una o más multas sin cancelar, se ha abierto una orden de detención del vehículo----")
          }else{
            alert("Multa registrada!")
          }
          location.reload()
        })
    
        .fail((err) => {
          console.log(err.responseText)
        })
      }else{
        alert("No se pudo registrar, verifique el número de cédula de la persona")
      }
    })
  
    .fail((err) => {
      console.log(err.responseText)
    })
  })

  $("#floating_last_name").on("keyup", () => {
    ced = document.querySelector("#floating_last_name").value
    $.ajax({
      type: "POST",
      url: "./server/controllers/search_person.php",
      dataType: "json",
      data: {ced}
    })

    .done((data) => {
      if (data != "dont") {
        let tipo_deuda = [
          'Solvente',
          'Derecho de frente',
          'Aseo urbano',
          'Trimestres'
        ]
        
        if (data.cod_deu == 0) {
          document.querySelector(".multing").classList.add("bg-green-500")
          document.querySelector(".deuda-x").classList.add("title")
        } else {
          document.querySelector(".multing").classList.add("bg-red-500")
          document.querySelector(".deuda-x").classList.add("title")
        }
        if (data.cod_deu != 0) {
          document.querySelector(".ano_deuda").innerHTML=data.yea_deu
        }
        document.querySelector("#floating_first_name").value=data.nam_per
        document.querySelector(".tip_deuda").innerHTML=tipo_deuda[data.cod_deu]
      }
    })

    .fail((err) => {
      console.log(err.responseText)
    })
  })

  $('.open_infraction_list').on('click', () => {
    view = "<p style='text-align:left;'>"
    lista_infracciones.forEach(item => {
      options = []
      cond = item.id == 12 || item.id == 34 || item.id == 35
      if (!cond) {
        view += "<input type='checkbox' class='myCheck'/> "
      }
      view += `<b>${item.id}</b> <span class="ml-4">${item.infraccion}</span><br/><br/>`
      if (cond) {
        options.push(item.tipo)
        switch (item.id) {
          case 12:
            options.forEach(element => {
              view += ` <input type='radio' class='ml-4 radio'> ${element.a}<br/>
                        <input type='radio' class='ml-4 radio'> ${element.b}<br/>
                        <input type='radio' class='ml-4 radio'> ${element.c}<br/>
                        <input type='radio' class='ml-4 radio'> ${element.d}<br/>
                        <input type='radio' class='ml-4 radio'> ${element.e}<br/>
                        <input type='radio' class='ml-4 radio'> ${element.f}<br/>
                        <input type='radio' class='ml-4 radio'> ${element.g}<br/>
                        <input type='radio' class='ml-4 radio'> ${element.h}<br/>
                        <input type='radio' class='ml-4 radio'> ${element.i}<br/>
                        <input type='radio' class='ml-4 radio'> ${element.j}<br/><br/>`
            })
          break
            
          case 34:
            options.forEach(element => {
              view += ` <input type='radio' class='ml-4 radio'> ${element.a}<br/>
                        <input type='radio' class='ml-4 radio'> ${element.b}<br/>
                        <input type='radio' class='ml-4 radio'> ${element.c}<br/>
                        <input type='radio' class='ml-4 radio'> ${element.d}<br/>
                        <input type='radio' class='ml-4 radio'> ${element.e}<br/>
                        <input type='radio' class='ml-4 radio'> ${element.f}<br/>
                        <input type='radio' class='ml-4 radio'> ${element.g}<br/>
                        <input type='radio' class='ml-4 radio'> ${element.h}<br/><br/>`
            })
          break
              
          case 35:
            options.forEach(element => {
              view += ` <input type='radio' class='ml-4 radio'> ${element.a}<br/>
                        <input type='radio' class='ml-4 radio'> ${element.b}<br/>
                        <input type='radio' class='ml-4 radio'> ${element.c}<br/>
                        <input type='radio' class='ml-4 radio'> ${element.d}<br/>
                        <input type='radio' class='ml-4 radio'> ${element.e}<br/>
                        <input type='radio' class='ml-4 radio'> ${element.f}<br/><br/>`
            })
          break
        }
      }
    })
    view += "</p>"

    Swal.fire({
      title: '<strong>Lista de infracciones</strong>',
      html: view,
      showCloseButton: true,
      showCancelButton: true,
      confirmButtonText: 'Procesar',
      cancelButtonText: 'Cancelar',
      focusConfirm: false,
    }).then((result) => {
      checkPressed = []
      radioPressed = []
      multas       = []
      if (result.isConfirmed) {
        check = document.querySelectorAll('.myCheck')
        radio = document.querySelectorAll('.radio')
        for (i = 0; i < check.length; i++) {
          if (check[i].checked) checkPressed.push(lista_infracciones[i])
        }
        for (j = 0; j < radio.length; j++) {
          if (j >= 0 && j <= 9) {
            h = 11
          }else if (j >= 10 && j <= 17) {
            h = 33
          }else if (j >= 18 && j <= 23) {
            h = 34
          }
          let f = getWord(j)
          if (radio[j].checked) radioPressed.push({h,f})
        }
        console.log(lista_infracciones[radioPressed[0].h].tipo.find(item => item.tipo === radioPressed[0].f))
        console.log({checkPressed,radioPressed})
      } else {
        Swal.fire({
          title: 'Error',
          icon: 'error',
          text: 'La orden de infracción fue cancelada'
        })
      }
    })
  })
})

console.log(lista_infracciones[11].tipo, lista_infracciones[33].tipo, lista_infracciones[34].tipo)