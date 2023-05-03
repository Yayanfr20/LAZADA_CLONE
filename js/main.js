$.ajax({
  type: "get",
  url: "http://localhost/learn-create-eccomerce/api/products.php",
  dataType: "json",
  success: function (response) {
    let data = response.data;
    for (let x = 0; x < data.length; x++) {
      $("#box-products").append(`
        <a href="" class="card mb-3 nav-link" style="width: 10rem;">
        <img src="images/${data[x].images}" class="card-img-top" alt="...">
        <div class="card-body">
            <h6>${data[x].name}</h6>
            <p style="color: #f57224;">Rp.${data[x].price}</p>
            <small style="font-size: 10px;color: grey;">Sold Out(${data[x].sold_out})</small>
        </div>
    </a>
    `);
    }
  },
});
