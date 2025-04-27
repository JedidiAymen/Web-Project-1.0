const line_of_product=document.querySelector(".line-of-products")
console.log(line_of_product)
var list_line_of_products=[
  {
    name:"Moisturiser",
    remaaining:2,
    src:"line_of_product/Product_try.png",
    links:"#",
    id:1,
  },
  {
    name:"Face Cream",
    remaaining:3,
    src:"line_of_product/Product_try1.png",
    links:"#",
    id:2,
  },
  {
    name:"Toner",
    remaaining:5,
    src:"line_of_product/Product_try2.png",
    links:"#",
    id:3,
  },
  {
    name:"Face Cream",
    remaaining:7,
    src:"line_of_product/Product_try.png",
    links:"#",
    id:4,
  },
]
function render_line_of_product(){
  list_line_of_products.forEach(element => {
    line_of_product.innerHTML+=`
     <div class="one-product">
      <div class="product-title">
        <div class="product-descrip">
          <h5>${element.name}</h5>
          <p>${element.remaaining} iteams remaining</p>
        </div>
        <button class="icon"><a href="${element.links}"><i class="bi bi-arrow-up-right"></i></a></button>
      </div>
      <img src="${element.src}" alt="${element.name}">
    </div>
`
  });
  
}
render_line_of_product()
