let label = document.getElementById("label");
let ShoppingCart = document.getElementById("shopping-cart");
let popup = document.getElementById("popup");
let popup2 = document.getElementById("confirm");
let basket = JSON.parse(localStorage.getItem("data")) || [];

let calculation = () => {
  let cartIcon = document.getElementById("cartAmount");
  cartIcon.innerHTML = basket.map((x) => x.item).reduce((x, y) => x + y, 0);
};

calculation();

let generateCartItems = () => {
  if (basket.length !== 0) {
    return (ShoppingCart.innerHTML = basket
      .map((x) => {
        let { id, item } = x;
        let search = shopItemsData.find((y) => y.id === id) || shopItemsData1.find((y) => y.id === id) || shopItemsData2.find((y) => y.id === id) || shopItemsData3.find((y) => y.id === id) || shopItemsData4.find((y) => y.id === id) || [];
        return `
      <div class="cart-item">
        <img src=${search.img} alt="" />
        <div class="details">

          <div class="title-price-x">
          <div>
              <h4 class="title-price">
                <p>${search.name}</p>
              </h4>
          </div>
          <div>
          <div class="x">
              <i onclick="removeItem(${id})" class="bi bi-x-lg"></i>
              </div>
          </div>
              <div class="buttons1">
              <ion-icon onclick="decrement(${id})" name="remove-outline"></ion-icon>
              <div id=${id} class="quantity1">${item}</div>
              <ion-icon onclick="increment(${id})" name="add-outline"></ion-icon>
          </div>
          <div class="item-total">
          Rp. ${item * search.price} rb
          </div>
          </div>

         
        </div>
      </div>
      `;
      })
      .join(""));
  } else {
    ShoppingCart.innerHTML = ``;
    label.innerHTML = `
    <div class="total">
    <div> Subtotal :</div>
    <div> Rp 0 rb </div>
    <div> Ongkos Kirim :</div>
    <div> Rp 0 rb </div>
    <div> Total Biaya :</div>
    <div> Rp 0 rb </div>
    </div>
    <button class="button-25" onclick="location.href='./Home.php';"role="button">Back to Home</button>
    `;
  }
};

generateCartItems();

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

  generateCartItems();
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
  generateCartItems();
  localStorage.setItem("data", JSON.stringify(basket));
};

let update = (id) => {
  let search = basket.find((x) => x.id === id);
  // console.log(search.item);
  document.getElementById(id).innerHTML = search.item;
  calculation();
  TotalAmount();
};

let removeItem = (id) => {
  let selectedItem = id;
  // console.log(selectedItem.id);
  basket = basket.filter((x) => x.id !== selectedItem.id);
  generateCartItems();
  TotalAmount();
  localStorage.setItem("data", JSON.stringify(basket));
};

let clearCart = () => {
  basket = [];
  generateCartItems();
  localStorage.setItem("data", JSON.stringify(basket));
};
let TotalAmount = () => {
  if (basket.length !== 0) {
    let amount = basket
      .map((x) => {
        let { item, id } = x;
        let search = shopItemsData.find((y) => y.id === id) || shopItemsData1.find((y) => y.id === id) || shopItemsData2.find((y) => y.id === id) || shopItemsData3.find((y) => y.id === id) || shopItemsData4.find((y) => y.id === id) || [];
        return item * search.price;
      })
      .reduce((x, y) => x + y, 0);
      let value = amount + 20;
    // console.log(amount);
    label.innerHTML = `
    <div class="total">
    <div> Subtotal :</div>
    <div> Rp ${amount} rb </div>
    <div> Ongkos Kirim :</div>
    <div> Rp 20 rb </div>
    <div> Total Biaya :</div>
    <div> Rp ${value} rb </div>
    </div>
    <button class="button-24" onclick="clearCart()" >Hapus Semua</button>
    <button class="button-24" onclick="acc()">Checkout</button>
    `;
  } else return;
};

TotalAmount();

function hideshow(val){
  if(val==1){
    document.getElementById('01').style.display='block'
    document.getElementById('02').style.display='none'
    document.getElementById('03').style.display='none'
  }
  else if(val==2){
    document.getElementById('01').style.display='none'
    document.getElementById('02').style.display='block'
    document.getElementById('03').style.display='none'
  }
  else if(val==3){
    document.getElementById('01').style.display='none'
    document.getElementById('03').style.display='block'
    document.getElementById('02').style.display='none'
  }
}

function acc(){
  let val = document.getElementById('val-info');
  let a = document.forms["form"]['nama'].value;
  let b = document.forms["form"]['tel'].value;
  let c = document.forms["form"]['kota'].value;
  let d = document.forms["form"]['kec'].value;
  let e = document.forms["form"]['kel'].value;
  let f = document.forms["form"]['kpos'].value;
  let g = document.forms["form"]['jalan'].value;
  let h = document.forms["form"]['bayar'].value;
  let i = document.forms["form"]['bayar2'].value;
  let messages = []
  if(a == "" || a == null){
    val.innerHTML = '<p>Nama Wajib di isi!</p>';
  }
  else if(b == "" || b == null){
    val.innerHTML = '<p>No.Telepon Wajib di isi!</p>';
  }
  else if(c == "" || c == null){
    val.innerHTML = '<p>Mohon Lengkapi Alamat Anda</p>';
  }
  else if(d == "" || d == null){
    val.innerHTML = '<p>Mohon Lengkapi Alamat Anda</p>';
  }
  else if(e == "" || e == null){
    val.innerHTML = '<p>Mohon Lengkapi Alamat Anda</p>';
  }
  else if(f == "" || f == null){
    val.innerHTML = '<p>Mohon Lengkapi Alamat Anda</p>';
  }
  else if(g == "" || g == null){
    val.innerHTML = '<p>Mohon Lengkapi Alamat Anda</p>';
  }
  else if(h == "" || h == null){
    val.innerHTML = '<p>Mohon Pilih Metode Pembayaran</p>';
  }
  else if(i == "" || i == null){
    val.innerHTML = '<p>Mohon Pilih Metode Pembayaran</p>';
  }
  else if(a,b,c,d,e,f,g,h,i != ""){
    popup.classList.add('lay-active');
    popup2.classList.add('lay-active');
  }
  }


function closepopup(){
  popup.classList.remove('lay-active');
  popup2.classList.remove('lay-active');
}

function accpay(){
  popup2.classList.remove('lay-active');
  let x = document.querySelector('input[name="bayar2"]:checked').value;
  if (x == 'Gopay'){
    document.getElementById('wallet1').style.display='flex'
  }
  else if (x == 'OVO'){
    document.getElementById('wallet2').style.display='flex'
  } else if (x == 'Dana') {
      document.getElementById('wallet3').style.display='flex'
  } else if (x == 'Bca') {
    document.getElementById('trans1').style.display='block'
} else if (x == 'Bni') {
  document.getElementById('trans2').style.display='block'
}else if (x == 'Mandiri') {
  document.getElementById('trans3').style.display='block'
}else if (x == 'Cash') {
  document.getElementById('OK').style.display="block"
}
}

function berhasil(){
 document.getElementById('wallet1').style.display='none'
 document.getElementById('wallet2').style.display='none'
 document.getElementById('wallet3').style.display='none'
 document.getElementById('trans1').style.display='none'
 document.getElementById('trans2').style.display='none'
 document.getElementById('trans3').style.display='none'
 document.getElementById('OK').style.display="block"
}

