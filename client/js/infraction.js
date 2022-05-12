$(document).ready(function () {
  $("#btn_inf").on("click", (e) => {
    e.preventDefault()
    let multas = [
      'Conducir bajo efectos del alcohol',
      'Incurrir en dos o más infracciones',
      'No usar el cinturón de seguridad',
      'Estacionar sobre el paso peatonal',
      'Venta de productos en la via pública',
      'Desatender a la autoridad',
      'Infringir señales de transito',
      'Conducir sin placas',
      'Conducir sin licencia',
      'Conducir con licencia vencida'
    ]

    ced = document.querySelector("#floating_last_name").value
    nom = document.querySelector("#floating_first_name").value
    plc = document.querySelector("#floating_email").value
    mod = document.querySelector("#floating_password").value
    num = document.querySelector("#floating_phone").value

    ch1  = document.querySelector("#checkbox-1").checked
    ch2  = document.querySelector("#checkbox-2").checked
    ch3  = document.querySelector("#checkbox-3").checked
    ch4  = document.querySelector("#checkbox-4").checked
    ch5  = document.querySelector("#checkbox-5").checked
    ch6  = document.querySelector("#checkbox-6").checked
    ch7  = document.querySelector("#checkbox-7").checked
    ch8  = document.querySelector("#checkbox-8").checked
    ch9  = document.querySelector("#checkbox-9").checked
    ch10 = document.querySelector("#checkbox-10").checked
    let lista = [ch1,ch2,ch3,ch4,ch5,ch6,ch7,ch8,ch9,ch10]
    let new_lista = []
    let val = ""

    for (let i = 1; i <= 10; i++) {
      if (lista[i] == true) {
        new_lista.push(multas[i])
      }
    }

    new_lista.forEach(item => {
      val += item+","
    })

    $.ajax({
      type: "POST",
      url: "./server/controllers/infraction.php",
      dataType: "json",
      data: {ced,nom,plc,mod,num,val}
    })
  
    .done((data) => {
      console.log(data)
      if (data == 1) {
        alert("Multa registrada!")
        location.reload()
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
        console.log(data)
        document.querySelector("#floating_first_name").value=data.nam_per
        
      }
    })

    .fail((err) => {
      console.log(err.responseText)
    })
  })
})