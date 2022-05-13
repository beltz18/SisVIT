$(document).ready(function(){
  $("#table-search").on("keyup", () => {
    val = document.querySelector("#table-search").value
    console.log(val)
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
    document.querySelector(".tbody").innerHTML = data
  })

  .fail((err) => {
    console.log(err.responseText)
  })
}

searchOne("all")