function loadData(lengthData) {
  $.ajax({
    type: "get",
    url: "http://localhost/LAZADA_CLONE/api/products.php",
    dataType: "json",
    success: function (response) {
      let data = response.data;
      $("#box-products").removeClass("d-flex");
      $("#box-products").addClass("d-none");
      $("#loading").removeClass("d-none");
      $("#loading").addClass("d-flex");
      $("#MoreData").addClass("d-none");

      for (let x = 0; x < lengthData; x++) {
        $("#box-products").append(`
              <a href="product?id=${data[x].id}" class="card mb-3 nav-link" style="width: 10rem;">
                  <img src="${data[x].images}" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h6>${data[x].name}</h6>
                      <p style="color: #f57224;">Rp.${data[x].price}</p>
                      <small style="font-size: 10px;color: grey;">Sold Out(${data[x].sold_out})</small>
                  </div>
              </a>
              `);
      }

      setTimeout(function () {
        $("#box-products").removeClass("d-none");
        $("#loading").removeClass("d-flex");
        $("#loading").addClass("d-none");
        $("#box-products").addClass("d-flex");
        $("#MoreData").removeClass("d-none");
      }, 1500);
    },
  });
}

loadData(6);

$("#SemuaCategory").click(function (e) {
  e.preventDefault();
  $("#box-products").html("");
  loadData(6);
});

$("#Pakaian").click(function (e) {
  $("#MoreData").addClass("d-none");
  e.preventDefault();
  $("#box-products").removeClass("d-flex");
  $("#box-products").addClass("d-none");
  $("#loading").removeClass("d-none");
  $("#loading").addClass("d-flex");
  $.ajax({
    type: "get",
    url: "http://localhost/LAZADA_CLONE/api/products.php?category=Pakaian",
    dataType: "json",
    success: function (response) {
      let data = response.data;
      $("#box-products").html("");
      for (let x = 0; x < data.length; x++) {
        $("#box-products").append(`
              <a href="product?id=${data[x]["id"]}" class="card mb-3 nav-link" style="width: 10rem;">
                  <img src="${data[x].images}" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h6>${data[x].name}</h6>
                      <p style="color: #f57224;">Rp.${data[x].price}</p>
                      <small style="font-size: 10px;color: grey;">Sold Out(${data[x].sold_out})</small>
                  </div>
              </a>
              `);
      }
      setTimeout(function () {
        $("#box-products").removeClass("d-none");
        $("#loading").removeClass("d-flex");
        $("#loading").addClass("d-none");
        $("#box-products").addClass("d-flex");
      }, 1500);
    },
  });
});
$("#Aksesoris").click(function (e) {
  e.preventDefault();
  $("#box-products").removeClass("d-flex");
  $("#box-products").addClass("d-none");
  $("#loading").removeClass("d-none");
  $("#loading").addClass("d-flex");
  $("#MoreData").addClass("d-none");
  $.ajax({
    type: "get",
    url: "http://localhost/LAZADA_CLONE/api/products.php?category=Aksesoris",
    dataType: "json",
    success: function (response) {
      let data = response.data;
      $("#box-products").html("");
      for (let x = 0; x < data.length; x++) {
        $("#box-products").append(`
              <a href="product?id=${data[x].id}" class="card mb-3 nav-link" style="width: 10rem;">
                  <img src="${data[x].images}" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h6>${data[x].name}</h6>
                      <p style="color: #f57224;">Rp.${data[x].price}</p>
                      <small style="font-size: 10px;color: grey;">Sold Out(${data[x].sold_out})</small>
                  </div>
              </a>
              `);
      }
      setTimeout(function () {
        $("#box-products").removeClass("d-none");
        $("#loading").removeClass("d-flex");
        $("#loading").addClass("d-none");
        $("#box-products").addClass("d-flex");
      }, 1500);
    },
  });
});
$("#Alat-Tulis").click(function (e) {
  e.preventDefault();
  $("#box-products").removeClass("d-flex");
  $("#box-products").addClass("d-none");
  $("#loading").removeClass("d-none");
  $("#loading").addClass("d-flex");
  $("#MoreData").addClass("d-none");

  $.ajax({
    type: "get",
    url: "http://localhost/LAZADA_CLONE/api/products.php?category=Alat Tulis",
    dataType: "json",
    success: function (response) {
      let data = response.data;
      $("#box-products").html("");
      for (let x = 0; x < data.length; x++) {
        $("#box-products").append(`
              <a href="product?id=${data[x].id}" class="card mb-3 nav-link" style="width: 10rem;">
                  <img src="${data[x].images}" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h6>${data[x].name}</h6>
                      <p style="color: #f57224;">Rp.${data[x].price}</p>
                      <small style="font-size: 10px;color: grey;">Sold Out(${data[x].sold_out})</small>
                  </div>
              </a>
              `);
      }
      setTimeout(function () {
        $("#box-products").removeClass("d-none");
        $("#loading").removeClass("d-flex");
        $("#loading").addClass("d-none");
        $("#box-products").addClass("d-flex");
      }, 1000);
    },
  });
});
$("#Elektronik").click(function (e) {
  e.preventDefault();
  $("#box-products").removeClass("d-flex");
  $("#box-products").addClass("d-none");
  $("#loading").removeClass("d-none");
  $("#loading").addClass("d-flex");
  $("#MoreData").addClass("d-none");

  $.ajax({
    type: "get",
    url: "http://localhost/LAZADA_CLONE/api/products.php?category=Elektronik",
    dataType: "json",
    success: function (response) {
      let data = response.data;
      $("#box-products").html("");
      for (let x = 0; x < data.length; x++) {
        $("#box-products").append(`
              <a href="product?id=${data[x].id}" class="card mb-3 nav-link" style="width: 10rem;">
                  <img src="${data[x].images}" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h6>${data[x].name}</h6>
                      <p style="color: #f57224;">Rp.${data[x].price}</p>
                      <small style="font-size: 10px;color: grey;">Sold Out(${data[x].sold_out})</small>
                  </div>
              </a>
              `);
      }
      setTimeout(function () {
        $("#box-products").removeClass("d-none");
        $("#loading").removeClass("d-flex");
        $("#loading").addClass("d-none");
        $("#box-products").addClass("d-flex");
      }, 1500);
    },
  });
});
$("#Olahraga").click(function (e) {
  e.preventDefault();
  $("#box-products").removeClass("d-flex");
  $("#box-products").addClass("d-none");
  $("#loading").removeClass("d-none");
  $("#loading").addClass("d-flex");
  $("#MoreData").addClass("d-none");

  $.ajax({
    type: "get",
    url: "http://localhost/LAZADA_CLONE/api/products.php?category=Olahraga",
    dataType: "json",
    success: function (response) {
      let data = response.data;
      $("#box-products").html("");
      for (let x = 0; x < data.length; x++) {
        $("#box-products").append(`
              <a href="product?id=${data[x].id}" class="card mb-3 nav-link" style="width: 10rem;">
                  <img src="${data[x].images}" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h6>${data[x].name}</h6>
                      <p style="color: #f57224;">Rp.${data[x].price}</p>
                      <small style="font-size: 10px;color: grey;">Sold Out(${data[x].sold_out})</small>
                  </div>
              </a>
              `);
      }
      setTimeout(function () {
        $("#box-products").removeClass("d-none");
        $("#loading").removeClass("d-flex");
        $("#loading").addClass("d-none");
        $("#box-products").addClass("d-flex");
      }, 1500);
    },
  });
});
$("#Buku").click(function (e) {
  e.preventDefault();
  $("#box-products").removeClass("d-flex");
  $("#box-products").addClass("d-none");
  $("#loading").removeClass("d-none");
  $("#loading").addClass("d-flex");
  $("#MoreData").addClass("d-none");

  $.ajax({
    type: "get",
    url: "http://localhost/LAZADA_CLONE/api/products.php?category=Buku",
    dataType: "json",
    success: function (response) {
      let data = response.data;
      $("#box-products").html("");
      for (let x = 0; x < data.length; x++) {
        $("#box-products").append(`
              <a href="product?id=${data[x].id}" class="card mb-3 nav-link" style="width: 10rem;">
                  <img src="${data[x].images}" class="card-img-top" alt="...">
                  <div class="card-body">
                      <h6>${data[x].name}</h6>
                      <p style="color: #f57224;">Rp.${data[x].price}</p>
                      <small style="font-size: 10px;color: grey;">Sold Out(${data[x].sold_out})</small>
                  </div>
              </a>
              `);
      }
      setTimeout(function () {
        $("#box-products").removeClass("d-none");
        $("#loading").removeClass("d-flex");
        $("#loading").addClass("d-none");
        $("#box-products").addClass("d-flex");
      }, 1500);
    },
  });
});

let defaultData = 6;
$("#MoreData").click(function (e) {
  e.preventDefault();
  defaultData = defaultData + 6;
  $("#box-products").html("");
  loadData(defaultData);
  setTimeout(function () {
    $("#box-products").removeClass("d-none");
    $("#loading").removeClass("d-flex");
    $("#loading").addClass("d-none");
    $("#box-products").addClass("d-flex");
    $("#MoreData").removeClass("d-none");
  }, 1500);
});
