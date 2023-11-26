// fetch data from api
async function getProductsData() {
  const url = "https://fakestoreapi.com/products";
  const response = await fetch(url),
  ProductsData = await response.json();
  return ProductsData
}
// display news 
async function displayEgyptNews() {
  const row = document.querySelector('.row')
  const productsData = await getProductsData()

  // iterate over egyptNews Data 
  for (let product of productsData) {
    console.log(product)
    const div = document.createElement("div") // <div class=""></div>
    div.className = "col-lg-4 col-md-6 col-sm-12 my-4";
    div.innerHTML = `
        <div class="card" style="width: 22rem; border:none">
        <img src="${product.image}" class="card-img-top" alt="This is fake image">
        <div class="card-body">
          <h5 class="card-title">${product.title}</h5>
          <p class="card-text">${product.description}</p>
          <p class="card-text">Price: ${product.price} $</p>
          <p class="card-text">Rate: ${product.rating.rate} </p>
          <p class="card-text">Rate count: ${product.rating.count} </p>
          <a href="${product.image}" target="_blank"
          class="btn btn-danger">Preview image</a>
        </div>
      </div>
        `
    row.appendChild(div);
  }
}

// onDocument Load
document.addEventListener('DOMContentLoaded', displayEgyptNews)