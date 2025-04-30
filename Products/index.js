const styleElement = document.createElement('style');
styleElement.textContent = `
  .products_containner {
    transition: opacity 0.3s ease-out;
  }
  
  .Product {
    transition: transform 0.3s ease, opacity 0.4s ease;
    animation: fadeIn 0.5s ease forwards;
  }
  
  @keyframes fadeIn {
    from {
      opacity: 0;
      transform: translateY(10px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }
`;
document.head.appendChild(styleElement);
const line_of_product = document.querySelector(".line-of-products");
const products = document.querySelector(".products_containner");
const client_review = document.querySelector(".flex-containner-i");
const scrollAmount = 300;
const categoryButtons = document.querySelectorAll('.categories li button');

let currentCategory = All_Products;
let showingAll = false;

function setActiveButton(buttonId) {
  categoryButtons.forEach(button => {
    button.classList.remove('active');
  });
  document.getElementById(buttonId).classList.add('active');
}

document.getElementById('all-products').addEventListener('click', () => {
  fadeTransition(() => {
    currentCategory = All_Products;
    showingAll = false;
    render_category_product(currentCategory);
    updateToggleButton();
  });
  setActiveButton('all-products');
});

document.getElementById('pain-relievers').addEventListener('click', () => {
  fadeTransition(() => {
    currentCategory = Pain_Relievers;
    showingAll = false;
    render_category_product(currentCategory);
    updateToggleButton();
  });
  setActiveButton('pain-relievers');
});

document.getElementById('allergy-medication').addEventListener('click', () => {
  fadeTransition(() => {
    currentCategory = Allergy_Medication;
    showingAll = false;
    render_category_product(currentCategory);
    updateToggleButton();
  });
  setActiveButton('allergy-medication');
});

document.getElementById('dental-care').addEventListener('click', () => {
  fadeTransition(() => {
    currentCategory = Dental_Care;
    showingAll = false;
    render_category_product(currentCategory);
    updateToggleButton();
  });
  setActiveButton('dental-care');
});

document.getElementById('first-aid-sup').addEventListener('click', () => {
  fadeTransition(() => {
    currentCategory = First_Aid_Sup;
    showingAll = false;
    render_category_product(currentCategory);
    updateToggleButton();
  });
  setActiveButton('first-aid-sup');
});

document.getElementById('cosmetic-products').addEventListener('click', () => {
  fadeTransition(() => {
    currentCategory = Cosmetic_Products;
    showingAll = false;
    render_category_product(currentCategory);
    updateToggleButton();
  });
  setActiveButton('cosmetic-products');
});

function fadeTransition(callback) {
  products.style.opacity = 0;
  setTimeout(() => {
    callback();
    setTimeout(() => {
      products.style.opacity = 1;
    }, 50);
  }, 300);
}

const toggleButton = document.querySelector('.more');

function updateToggleButton() {
  if (currentCategory.length <= 8) {
    toggleButton.style.display = 'none';
  } else {
    toggleButton.style.display = 'block';
    toggleButton.textContent = showingAll ? 'Show Less Products' : 'See More Products';
  }
}

toggleButton.addEventListener('click', () => {
  showingAll = !showingAll;
  fadeTransition(() => {
    if (showingAll) {
      render_category_product(currentCategory, null);
    } else {
      render_category_product(currentCategory, 8);
    }
    updateToggleButton();
  });
});

document.getElementById('scrollLeft').addEventListener('click', () => {
  client_review.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
});

document.getElementById('scrollRight').addEventListener('click', () => {
  client_review.scrollBy({ left: scrollAmount, behavior: 'smooth' });
});var Pain_Relievers=[
  {
    name:"Body_Cream",
    img:"Cosmetic_Products/Body_Cream.png",
    remaining:3,
    price:125,
  },
            {
    name:"Body_Cream",
    img:"Cosmetic_Products/Body_Cream.png",
    remaining:3,
    price:125,
  },   {
    name:"Body_Cream",
    img:"Cosmetic_Products/Body_Cream.png",
    remaining:3,
    price:125,
  },   {
    name:"Body_Cream",
    img:"Cosmetic_Products/Body_Cream.png",
    remaining:3,
    price:125,
  },   {
    name:"Body_Cream",
    img:"Cosmetic_Products/Body_Cream.png",
    remaining:3,
    price:125,
  },   {
    name:"Body_Cream",
    img:"Cosmetic_Products/Body_Cream.png",
    remaining:3,
    price:125,
  },   {
    name:"Body_Cream",
    img:"Cosmetic_Products/Body_Cream.png",
    remaining:3,
    price:125,
  },   {
    name:"Body_Cream",
    img:"Cosmetic_Products/Body_Cream.png",
    remaining:3,
    price:125,
  },   {
    name:"Body_Cream",
    img:"Cosmetic_Products/Body_Cream.png",
    remaining:3,
    price:125,
  },   {
    name:"Body_Cream",
    img:"Cosmetic_Products/Body_Cream.png",
    remaining:3,
    price:125,
  },   {
    name:"Body_Cream",
    img:"Cosmetic_Products/Body_Cream.png",
    remaining:3,
    price:125,
  },   {
    name:"Body_Cream",
    img:"Cosmetic_Products/Body_Cream.png",
    remaining:3,
    price:125,
  },  

]
var Allergy_Medication=[                     {
    name:"Cleanser",
    img:"Cosmetic_Products/Cleanser.png",
    remaining:3,
    price:150,
  },
 {
    name:"Cleanser",
    img:"Cosmetic_Products/Cleanser.png",
    remaining:3,
    price:150,
  },
 {
    name:"Cleanser",
    img:"Cosmetic_Products/Cleanser.png",
    remaining:3,
    price:150,
  },
 {
    name:"Cleanser",
    img:"Cosmetic_Products/Cleanser.png",
    remaining:3,
    price:150,
  },
 {
    name:"Cleanser",
    img:"Cosmetic_Products/Cleanser.png",
    remaining:3,
    price:150,
  },
 {
    name:"Cleanser",
    img:"Cosmetic_Products/Cleanser.png",
    remaining:3,
    price:150,
  },
 {
    name:"Cleanser",
    img:"Cosmetic_Products/Cleanser.png",
    remaining:3,
    price:150,
  },
 {
    name:"Cleanser",
    img:"Cosmetic_Products/Cleanser.png",
    remaining:3,
    price:150,
  },
 {
    name:"Cleanser",
    img:"Cosmetic_Products/Cleanser.png",
    remaining:3,
    price:150,
  },
 {
    name:"Cleanser",
    img:"Cosmetic_Products/Cleanser.png",
    remaining:3,
    price:150,
  },
 {
    name:"Cleanser",
    img:"Cosmetic_Products/Cleanser.png",
    remaining:3,
    price:150,
  },
 {
    name:"Cleanser",
    img:"Cosmetic_Products/Cleanser.png",
    remaining:3,
    price:150,
  },
 {
    name:"Cleanser",
    img:"Cosmetic_Products/Cleanser.png",
    remaining:3,
    price:150,
  },
 {
    name:"Cleanser",
    img:"Cosmetic_Products/Cleanser.png",
    remaining:3,
    price:150,
  },
 {
    name:"Cleanser",
    img:"Cosmetic_Products/Cleanser.png",
    remaining:3,
    price:150,
  },
 {
    name:"Cleanser",
    img:"Cosmetic_Products/Cleanser.png",
    remaining:3,
    price:150,
  },
 {
    name:"Cleanser",
    img:"Cosmetic_Products/Cleanser.png",
    remaining:3,
    price:150,
  },
 {
    name:"Cleanser",
    img:"Cosmetic_Products/Cleanser.png",
    remaining:3,
    price:150,
  },
 {
    name:"Cleanser",
    img:"Cosmetic_Products/Cleanser.png",
    remaining:3,
    price:150,
  },
 {
    name:"Cleanser",
    img:"Cosmetic_Products/Cleanser.png",
    remaining:3,
    price:150,
  },
]
var Dental_Care=[                               {
    name:"Deep Moistrus Cream",
    img:"Cosmetic_Products/Deep_moistrus_cream.png",
    remaining:3,
    price:175,
  },
 {
    name:"Deep Moistrus Cream",
    img:"Cosmetic_Products/Deep_moistrus_cream.png",
    remaining:3,
    price:175,
  },
 {
    name:"Deep Moistrus Cream",
    img:"Cosmetic_Products/Deep_moistrus_cream.png",
    remaining:3,
    price:175,
  },
 {
    name:"Deep Moistrus Cream",
    img:"Cosmetic_Products/Deep_moistrus_cream.png",
    remaining:3,
    price:175,
  },
 {
    name:"Deep Moistrus Cream",
    img:"Cosmetic_Products/Deep_moistrus_cream.png",
    remaining:3,
    price:175,
  },
 {
    name:"Deep Moistrus Cream",
    img:"Cosmetic_Products/Deep_moistrus_cream.png",
    remaining:3,
    price:175,
  },
 {
    name:"Deep Moistrus Cream",
    img:"Cosmetic_Products/Deep_moistrus_cream.png",
    remaining:3,
    price:175,
  },
 {
    name:"Deep Moistrus Cream",
    img:"Cosmetic_Products/Deep_moistrus_cream.png",
    remaining:3,
    price:175,
  },
 {
    name:"Deep Moistrus Cream",
    img:"Cosmetic_Products/Deep_moistrus_cream.png",
    remaining:3,
    price:175,
  },
 {
    name:"Deep Moistrus Cream",
    img:"Cosmetic_Products/Deep_moistrus_cream.png",
    remaining:3,
    price:175,
  },
 {
    name:"Deep Moistrus Cream",
    img:"Cosmetic_Products/Deep_moistrus_cream.png",
    remaining:3,
    price:175,
  },
 {
    name:"Deep Moistrus Cream",
    img:"Cosmetic_Products/Deep_moistrus_cream.png",
    remaining:3,
    price:175,
  },
 {
    name:"Deep Moistrus Cream",
    img:"Cosmetic_Products/Deep_moistrus_cream.png",
    remaining:3,
    price:175,
  },
 {
    name:"Deep Moistrus Cream",
    img:"Cosmetic_Products/Deep_moistrus_cream.png",
    remaining:3,
    price:175,
  },
 {
    name:"Deep Moistrus Cream",
    img:"Cosmetic_Products/Deep_moistrus_cream.png",
    remaining:3,
    price:175,
  },
 {
    name:"Deep Moistrus Cream",
    img:"Cosmetic_Products/Deep_moistrus_cream.png",
    remaining:3,
    price:175,
  },
 {
    name:"Deep Moistrus Cream",
    img:"Cosmetic_Products/Deep_moistrus_cream.png",
    remaining:3,
    price:175,
  },
 {
    name:"Deep Moistrus Cream",
    img:"Cosmetic_Products/Deep_moistrus_cream.png",
    remaining:3,
    price:175,
  },
 {
    name:"Deep Moistrus Cream",
    img:"Cosmetic_Products/Deep_moistrus_cream.png",
    remaining:3,
    price:175,
  },
 {
    name:"Deep Moistrus Cream",
    img:"Cosmetic_Products/Deep_moistrus_cream.png",
    remaining:3,
    price:175,
  },
 {
    name:"Deep Moistrus Cream",
    img:"Cosmetic_Products/Deep_moistrus_cream.png",
    remaining:3,
    price:175,
  },
 {
    name:"Deep Moistrus Cream",
    img:"Cosmetic_Products/Deep_moistrus_cream.png",
    remaining:3,
    price:175,
  },
 {
    name:"Deep Moistrus Cream",
    img:"Cosmetic_Products/Deep_moistrus_cream.png",
    remaining:3,
    price:175,
  },
 {
    name:"Deep Moistrus Cream",
    img:"Cosmetic_Products/Deep_moistrus_cream.png",
    remaining:3,
    price:175,
  },
 {
    name:"Deep Moistrus Cream",
    img:"Cosmetic_Products/Deep_moistrus_cream.png",
    remaining:3,
    price:175,
  },
 {
    name:"Deep Moistrus Cream",
    img:"Cosmetic_Products/Deep_moistrus_cream.png",
    remaining:3,
    price:175,
  },
 {
    name:"Deep Moistrus Cream",
    img:"Cosmetic_Products/Deep_moistrus_cream.png",
    remaining:3,
    price:175,
  },
 {
    name:"Deep Moistrus Cream",
    img:"Cosmetic_Products/Deep_moistrus_cream.png",
    remaining:3,
    price:175,
  },
 {
    name:"Deep Moistrus Cream",
    img:"Cosmetic_Products/Deep_moistrus_cream.png",
    remaining:3,
    price:175,
  },
 {
    name:"Deep Moistrus Cream",
    img:"Cosmetic_Products/Deep_moistrus_cream.png",
    remaining:3,
    price:175,
  },


]
var First_Aid_Sup=[                            {
    name:"Face Wash",
    img:"Cosmetic_Products/Face_wash.png",
    remaining:3,
    price:35,
  },
 {
    name:"Face Wash",
    img:"Cosmetic_Products/Face_wash.png",
    remaining:3,
    price:35,
  },
 {
    name:"Face Wash",
    img:"Cosmetic_Products/Face_wash.png",
    remaining:3,
    price:35,
  },
 {
    name:"Face Wash",
    img:"Cosmetic_Products/Face_wash.png",
    remaining:3,
    price:35,
  },
 {
    name:"Face Wash",
    img:"Cosmetic_Products/Face_wash.png",
    remaining:3,
    price:35,
  },
 {
    name:"Face Wash",
    img:"Cosmetic_Products/Face_wash.png",
    remaining:3,
    price:35,
  },
 {
    name:"Face Wash",
    img:"Cosmetic_Products/Face_wash.png",
    remaining:3,
    price:35,
  },
 {
    name:"Face Wash",
    img:"Cosmetic_Products/Face_wash.png",
    remaining:3,
    price:35,
  },
 {
    name:"Face Wash",
    img:"Cosmetic_Products/Face_wash.png",
    remaining:3,
    price:35,
  },
 {
    name:"Face Wash",
    img:"Cosmetic_Products/Face_wash.png",
    remaining:3,
    price:35,
  },
 {
    name:"Face Wash",
    img:"Cosmetic_Products/Face_wash.png",
    remaining:3,
    price:35,
  },
 {
    name:"Face Wash",
    img:"Cosmetic_Products/Face_wash.png",
    remaining:3,
    price:35,
  },
 {
    name:"Face Wash",
    img:"Cosmetic_Products/Face_wash.png",
    remaining:3,
    price:35,
  },
 {
    name:"Face Wash",
    img:"Cosmetic_Products/Face_wash.png",
    remaining:3,
    price:35,
  },
 {
    name:"Face Wash",
    img:"Cosmetic_Products/Face_wash.png",
    remaining:3,
    price:35,
  },
 {
    name:"Face Wash",
    img:"Cosmetic_Products/Face_wash.png",
    remaining:3,
    price:35,
  },
 {
    name:"Face Wash",
    img:"Cosmetic_Products/Face_wash.png",
    remaining:3,
    price:35,
  },
 {
    name:"Face Wash",
    img:"Cosmetic_Products/Face_wash.png",
    remaining:3,
    price:35,
  },
 {
    name:"Face Wash",
    img:"Cosmetic_Products/Face_wash.png",
    remaining:3,
    price:35,
  },
 {
    name:"Face Wash",
    img:"Cosmetic_Products/Face_wash.png",
    remaining:3,
    price:35,
  },
 {
    name:"Face Wash",
    img:"Cosmetic_Products/Face_wash.png",
    remaining:3,
    price:35,
  },
 {
    name:"Face Wash",
    img:"Cosmetic_Products/Face_wash.png",
    remaining:3,
    price:35,
  },
 {
    name:"Face Wash",
    img:"Cosmetic_Products/Face_wash.png",
    remaining:3,
    price:35,
  },
 {
    name:"Face Wash",
    img:"Cosmetic_Products/Face_wash.png",
    remaining:3,
    price:35,
  },
 {
    name:"Face Wash",
    img:"Cosmetic_Products/Face_wash.png",
    remaining:3,
    price:35,
  },
 {
    name:"Face Wash",
    img:"Cosmetic_Products/Face_wash.png",
    remaining:3,
    price:35,
  },
 {
    name:"Face Wash",
    img:"Cosmetic_Products/Face_wash.png",
    remaining:3,
    price:35,
  },


]
var Cosmetic_Products=[                            {
    name:"Hair serum",
    img:"Cosmetic_Products/Hair_serum.png",
    remaining:3,
    price:225,
  },
 {
    name:"Hair serum",
    img:"Cosmetic_Products/Hair_serum.png",
    remaining:3,
    price:225,
  },
 {
    name:"Hair serum",
    img:"Cosmetic_Products/Hair_serum.png",
    remaining:3,
    price:225,
  },
 {
    name:"Hair serum",
    img:"Cosmetic_Products/Hair_serum.png",
    remaining:3,
    price:225,
  },
 {
    name:"Hair serum",
    img:"Cosmetic_Products/Hair_serum.png",
    remaining:3,
    price:225,
  },
 {
    name:"Hair serum",
    img:"Cosmetic_Products/Hair_serum.png",
    remaining:3,
    price:225,
  },
 {
    name:"Hair serum",
    img:"Cosmetic_Products/Hair_serum.png",
    remaining:3,
    price:225,
  },
 {
    name:"Hair serum",
    img:"Cosmetic_Products/Hair_serum.png",
    remaining:3,
    price:225,
  },
 {
    name:"Hair serum",
    img:"Cosmetic_Products/Hair_serum.png",
    remaining:3,
    price:225,
  },
 {
    name:"Hair serum",
    img:"Cosmetic_Products/Hair_serum.png",
    remaining:3,
    price:225,
  },
 {
    name:"Hair serum",
    img:"Cosmetic_Products/Hair_serum.png",
    remaining:3,
    price:225,
  },
 {
    name:"Hair serum",
    img:"Cosmetic_Products/Hair_serum.png",
    remaining:3,
    price:225,
  },
 {
    name:"Hair serum",
    img:"Cosmetic_Products/Hair_serum.png",
    remaining:3,
    price:225,
  },
 {
    name:"Hair serum",
    img:"Cosmetic_Products/Hair_serum.png",
    remaining:3,
    price:225,
  },
 {
    name:"Hair serum",
    img:"Cosmetic_Products/Hair_serum.png",
    remaining:3,
    price:225,
  },
 {
    name:"Hair serum",
    img:"Cosmetic_Products/Hair_serum.png",
    remaining:3,
    price:225,
  },
 {
    name:"Hair serum",
    img:"Cosmetic_Products/Hair_serum.png",
    remaining:3,
    price:225,
  },
 {
    name:"Hair serum",
    img:"Cosmetic_Products/Hair_serum.png",
    remaining:3,
    price:225,
  },
 {
    name:"Hair serum",
    img:"Cosmetic_Products/Hair_serum.png",
    remaining:3,
    price:225,
  },
 {
    name:"Hair serum",
    img:"Cosmetic_Products/Hair_serum.png",
    remaining:3,
    price:225,
  },
 {
    name:"Hair serum",
    img:"Cosmetic_Products/Hair_serum.png",
    remaining:3,
    price:225,
  },
 {
    name:"Hair serum",
    img:"Cosmetic_Products/Hair_serum.png",
    remaining:3,
    price:225,
  },
 {
    name:"Hair serum",
    img:"Cosmetic_Products/Hair_serum.png",
    remaining:3,
    price:225,
  },
 {
    name:"Hair serum",
    img:"Cosmetic_Products/Hair_serum.png",
    remaining:3,
    price:225,
  },
 {
    name:"Hair serum",
    img:"Cosmetic_Products/Hair_serum.png",
    remaining:3,
    price:225,
  },
 {
    name:"Hair serum",
    img:"Cosmetic_Products/Hair_serum.png",
    remaining:3,
    price:225,
  },
 {
    name:"Hair serum",
    img:"Cosmetic_Products/Hair_serum.png",
    remaining:3,
    price:225,
  },


]
var All_Products=[
  {
    name:"Body_Cream",
    img:"Cosmetic_Products/Body_Cream.png",
    remaining:3,
    price:125,
  },          
  {
    name:"Cleanser",
    img:"Cosmetic_Products/Cleanser.png",
    remaining:3,
    price:150,
  },
  {
    name:"Deep Moistrus Cream",
    img:"Cosmetic_Products/Deep_moistrus_cream.png",
    remaining:3,
    price:175,
  },
  {
    name:"Face Wash",
    img:"Cosmetic_Products/Face_wash.png",
    remaining:3,
    price:35,
  },
  {
    name:"Hair serum",
    img:"Cosmetic_Products/Hair_serum.png",
    remaining:3,
    price:225,
  },
  {
    name:"Sunscreen",
    img:"Cosmetic_Products/Sunscreen.png",
    remaining:3,
    price:250,
  },
  {
    name:"Toner",
    img:"Cosmetic_Products/Toner.png",
    remaining:3,
    price:275,
  }, {
    name:"Cleanser",
    img:"Cosmetic_Products/Sunscreen.png",
    remaining:3,
    price:125,
  },
  {
    name:"Cleanser",
    img:"Cosmetic_Products/Sunscreen.png",
    remaining:3,
    price:125,
  },
  {
    name:"Cleanser",
    img:"Cosmetic_Products/Sunscreen.png",
    remaining:3,
    price:125,
  },
  {
    name:"Cleanser",
    img:"Cosmetic_Products/Sunscreen.png",
    remaining:3,
    price:125,
  },
  {
    name:"Cleanser",
    img:"Cosmetic_Products/Sunscreen.png",
    remaining:3,
    price:125,
  },
]
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
var clients=[
  {
    name:"Robin Sherbasky",
    product:"Body Lotion",
    src:"Clients/Robin.jpeg",
    description:"I had dull,dry skin for years,but this product transformed my complexion.My skin is now soft,hydrated and glowing!",
    number_of_star:5,
  },
  {
    name:"Ryan Gosling",
    product:"Body Lotion",
    src:"Clients/Ryan_Gosling.jpeg",
    description:"I had dull,dry skin for years,but this product transformed my complexion.My skin is now soft,hydrated and glowing!",
    number_of_star:5,
  },
  {
    name:"Paige Dineen",
    product:"Body Lotion",
    src:"Clients/Paige_Dineen.jpeg",
    description:"I had dull,dry skin for years,but this product transformed my complexion.My skin is now soft,hydrated and glowing!",
    number_of_star:5,
  },
  {
    name:"Nail Patrick Harris",
    product:"Body Lotion",
    src:"Clients/Neil_Patrick_Harris.jpeg",
    description:"I had dull,dry skin for years,but this product transformed my complexion.My skin is now soft,hydrated and glowing!",
    number_of_star:5,
  },
  {
    name:"Lilly Aldridge",
    product:"Body Lotion",
    src:"Clients/Lily_Aldridge.jpeg",
    description:"I had dull,dry skin for years,but this product transformed my complexion.My skin is now soft,hydrated and glowing!",
    number_of_star:5,
  },
  {
    name:"Anne Heathaway",
    product:"Body Lotion",
    src:"Clients/Anne_Heathaway.jpeg",
    description:"I had dull,dry skin for years,but this product transformed my complexion.My skin is now soft,hydrated and glowing!",
    number_of_star:5,
  },
  {
    name:"Anne de armes",
    product:"Body Lotion",
    src:"Clients/Anne_de_armes.jpeg",
    description:"I had dull,dry skin for years,but this product transformed my complexion.My skin is now soft,hydrated and glowing!",
    number_of_star:5,
  },
]



function render_category_product(category_list, limit = 8) {
  products.innerHTML = '';
  const productsToShow = limit ? category_list.slice(0, limit) : category_list;
  productsToShow.forEach((element, index) => {
    setTimeout(() => {
      const productElement = document.createElement('div');
      productElement.className = 'Product';
      productElement.style.opacity = '0';
      productElement.innerHTML = `
        <img src=${element.img} alt=${element.name}>
        <div class="details">
          <div class="dtail">
            <p class="name">${element.name}</p>
            <p class="remaining">${element.remaining} remaining in stock </p>
            <p class="price">$${element.price}</p>
          </div>
          <button><i class="bi bi-bag-dash"></i></button>
        </div>
      `;
      products.appendChild(productElement);
      setTimeout(() => {
        productElement.style.opacity = '1';
      }, 10);
    }, index * 50);
  });
}
function render_line_of_product(){
  list_line_of_products.forEach(element => {
    line_of_product.innerHTML+=`
     <div class="one-product">
      <div class="product-title">
        <div class="product-descrip">
          <h5>${element.name}</h5>
          <p>${element.remaaining} iteams remaining</p>
        </div>
        <button class="icon"><a href=${element.links}><i class="bi bi-arrow-up-right"></i></a></button>
      </div>
      <img src=${element.src} alt=${element.name}>
    </div>
`
  })};
function render_clents_review(){
  clients.forEach(element => {
    client_review.innerHTML+=`
          <div class="item_i">
            <div class="client-profile">
              <img src=${element.src} alt=${element.name}>
              <div class="handle">
                <h3>${element.name}</h3>
                <p>${element.product}</p>
              </div>
            </div>
              <hr>
              <p>${element.description}</p>
              <div class="rating">
                 <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
              </div>
          </div>
`}
  )};
render_line_of_product();
render_clents_review();
render_category_product(All_Products, 8);
updateToggleButton();
setActiveButton('all-products');
