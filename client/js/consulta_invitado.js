$(document).ready(function () {
  $("#search").on("click", () => {
    let value = document.querySelector("#table-search").value
    console.log(value)
    search(value)
  })
})

function search(val) {
  $.ajax({
    type: 'POST',
    url: './server/controllers/search.php',
    dataType: 'json',
    data: {ced:val}
  })

  .done((data) => {
    document.querySelector(".tbody").innerHTML = data
  })

  .fail((err) => {
    console.log(err.responseText)
  })
}