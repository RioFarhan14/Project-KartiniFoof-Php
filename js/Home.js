let shop = document.getElementById("shop");
let basket = JSON.parse(localStorage.getItem("data")) || [];
let generateShop = () => {
  return (shop.innerHTML = shopItemsData
    .map((x) => {
      let { id, name, price, desc, img } = x;
      let search = basket.find((x) => x.id === id) || [];
      return `
    <div id=product-id-${id} class="item">
        <img src=${img} alt="">
        <div class="details">
          <h3>${name}</h3>
          <p>${desc}</p>
          <div class="price-quantity">
            <h4>Rp. ${price} Rb </h4>
            <div class="buttons">
              <ion-icon onclick="decrement(${id})" name="remove-outline"></ion-icon>
              <div id=${id} class="quantity">
              ${search.item === undefined ? 0 : search.item}
              </div>
              <ion-icon onclick="increment(${id})" name="add-outline"></ion-icon>
            </div>
          </div>
        </div>
      </div>
    `;
    })
    .join(""));
};


//shop1

let shop1 = document.getElementById("shop1");
let generateShop1 = () => {
  return (shop1.innerHTML = shopItemsData1
    .map((x) => {
      let { id, name, price, desc, img } = x;
      let search = basket.find((x) => x.id === id) || [];
      return `
    <div id=product-id-${id} class="item">
        <img src=${img} alt="">
        <div class="details">
          <h3>${name}</h3>
          <p>${desc}</p>
          <div class="price-quantity">
            <h4>Rp. ${price} Rb </h4>
            <div class="buttons">
              <ion-icon onclick="decrement(${id})" name="remove-outline"></ion-icon>
              <div id=${id} class="quantity">
              ${search.item === undefined ? 0 : search.item}
              </div>
              <ion-icon onclick="increment(${id})" name="add-outline"></ion-icon>
            </div>
          </div>
        </div>
      </div>
    `;
    })
    .join(""));
};




//shop2

let shop2 = document.getElementById("shop2");
let generateShop2 = () => {
  return (shop2.innerHTML = shopItemsData2
    .map((x) => {
      let { id, name, price, desc, img } = x;
      let search = basket.find((x) => x.id === id) || [];
      return `
    <div id=product-id-${id} class="item">
        <img src=${img} alt="">
        <div class="details">
          <h3>${name}</h3>
          <p>${desc}</p>
          <div class="price-quantity">
            <h4>Rp. ${price} Rb </h4>
            <div class="buttons">
              <ion-icon onclick="decrement(${id})" name="remove-outline"></ion-icon>
              <div id=${id} class="quantity">
              ${search.item === undefined ? 0 : search.item}
              </div>
              <ion-icon onclick="increment(${id})" name="add-outline"></ion-icon>
            </div>
          </div>
        </div>
      </div>
    `;
    })
    .join(""));
};



//shop3

let shop3 = document.getElementById("shop3");
let generateShop3 = () => {
  return (shop3.innerHTML = shopItemsData3
    .map((x) => {
      let { id, name, price, desc, img } = x;
      let search = basket.find((x) => x.id === id) || [];
      return `
    <div id=product-id-${id} class="item">
        <img src=${img} alt="">
        <div class="details">
          <h3>${name}</h3>
          <p>${desc}</p>
          <div class="price-quantity">
            <h4>Rp. ${price} Rb </h4>
            <div class="buttons">
              <ion-icon onclick="decrement(${id})" name="remove-outline"></ion-icon>
              <div id=${id} class="quantity">
              ${search.item === undefined ? 0 : search.item}
              </div>
              <ion-icon onclick="increment(${id})" name="add-outline"></ion-icon>
            </div>
          </div>
        </div>
      </div>
    `;
    })
    .join(""));
};



//shop4
let shop4 = document.getElementById("shop4");
let generateShop4 = () => {
  return (shop4.innerHTML = shopItemsData4
    .map((x) => {
      let { id, name, price, desc, img } = x;
      let search = basket.find((x) => x.id === id) || [];
      return `
    <div id=product-id-${id} class="item">
        <img src=${img} alt="">
        <div class="details">
          <h3>${name}</h3>
          <p>${desc}</p>
          <div class="price-quantity">
            <h4>Rp. ${price} Rb </h4>
            <div class="buttons">
              <ion-icon onclick="decrement(${id})" name="remove-outline"></ion-icon>
              <div id=${id} class="quantity">
              ${search.item === undefined ? 0 : search.item}
              </div>
              <ion-icon onclick="increment(${id})" name="add-outline"></ion-icon>
            </div>
          </div>
        </div>
      </div>
    `;
    })
    .join(""));
};
generateShop();
generateShop1();
generateShop2();
generateShop3();
generateShop4();

let increment = (id) => {
  let selectedItem = id;
  let search = basket.find((x) => x.id === selectedItem.id);

  if (search === undefined) {
    basket.push({
      id: selectedItem.id,
      item: 1,
    });
  } else {
    search.item += 1;
  }

  // console.log(basket);
  update(selectedItem.id);
  localStorage.setItem("data", JSON.stringify(basket));
};
let decrement = (id) => {
  let selectedItem = id;
  let search = basket.find((x) => x.id === selectedItem.id);

  if (search === undefined) return;
  else if (search.item === 0) return;
  else {
    search.item -= 1;
  }
  update(selectedItem.id);
  basket = basket.filter((x) => x.item !== 0);
  // console.log(basket);
  localStorage.setItem("data", JSON.stringify(basket));
};
let update = (id) => {
  let search = basket.find((x) => x.id === id);
  // console.log(search.item);
  document.getElementById(id).innerHTML = search.item;
  calculation();
};

let calculation = () => {
  let cartIcon = document.getElementById("cartAmount");
  cartIcon.innerHTML = basket.map((x) => x.item).reduce((x, y) => x + y, 0);
};

calculation();

