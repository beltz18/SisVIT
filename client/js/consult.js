$(document).ready(function(){
  $("#table-search").on("keyup", () => {
    val = document.querySelector("#table-search").value
    if (val != "") {
      searchOne(val)
    }else{
      searchOne("all")
    }
  })
})

function searchOne(val) {
  $.ajax({
    type: 'POST',
    url: './server/controllers/search.php',
    dataType: 'json',
    data: {ced:val}
  })

  .done((data) => {
    console.log(data)

    view = `
    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
      <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap" id="nombre">
        Andi Montilla
      </th>
      <td class="px-6 py-4" id="cedula">
        ${data.ced_per}
      </td>
      <td class="px-6 py-4" id="tipo">
        ${data.mul_mul}
      </td>
      <td class="px-6 py-4" id="placa">
        ${data.plc_veh}
      </td>
      <td class="px-6 py-4" id="modelo">
        ${data.mod_veh}
      </td>
    </tr>`

    document.querySelector(".tbody").innerHTML = view
  })

  .fail((err) => {
    console.log(err.responseText)
  })
}
searchOne("all")