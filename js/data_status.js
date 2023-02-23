let shopItemsData = [
  {
    id: "sdadfewgerwgw",
    name: "Pizza vegetarian",
    price: 47,
    desc: "Pizza dengan tomat dan jamur pilihan.",
    img: "image/Pizza1.png",
  },
  {
    id: "wqewqeqwdsadx",
    name: "Pizza Paprika Moza",
    price: 47,
    desc: "pizza dengan topping jamur, tomat, paprika, dan mozzarella.",
    img: "image/Pizza2.png",
  },
  {
    id: "wqejnkmjwbnqe",
    name: "Pizza Paperoni",
    price: 45,
    desc: "pizza dengan menggunakan toping paperoni slice yang juicy.",
    img: "image/Pizza3.png",
  },
  {
    id: "wqekmnwoqepmwq",
    name: "Pizza egg Mozza",
    price: 47,
    desc: "pizza dengan menggunakan toping telur dan keju yang melimpah.",
    img: "image/Pizza4.png",
  },
];

let shopItemsData1 = [
  {
    id: "jfhgbvnsdsd",
    name: "Mushroom Burger",
    price: 32,
    desc: "Burger dengan menggunakan toping jamur dan tambahan saus jamur.",
    img: "./image/Salmon_burger.jpg",
  },
  {
    id: "ioytrhndcv",
    name: "Beef Bacon Burger",
    price: 35,
    desc: "Burger dengan menggunakan toping beef bacon.",
    img: "image/beef_becon.jpeg",
  },
  {
    id: "wuefbndedewdew",
    name: "Chicken Burger",
    price: 25,
    desc: "Burger dengan menggunakan toping daging ayam tempura.",
    img: "image/Classic_burger.jpg",
  },
  {
    id: "thyfhewdewdf",
    name: "Double Patty Burger",
    price: 40,
    desc: "Burger dengan menggunakan dua daging beef patty yang juicy.",
    img: "image/Turkey_Burger.jpg",
  },
];



let shopItemsData2 = [
  {
    id: "jfhgbvdfsd",
    name: "Kentang Goreng",
    price: 15,
    desc: "Kentang goreng yang renyah dan gurih.",
    img: "image/kentang_goreng.png",
  },
  {
    id: "ioyterewrew",
    name: "Cheesecake",
    price: 20,
    desc: "Kue dengan menggunakan krim keju yang melimpah.",
    img: "image/cheesecake.png",
  },
  {
    id: "wuefbncfdsf",
    name: "Pie Apple",
    price: 20,
    desc: "kue pie dengan toping buah apel dan sirup apel.",
    img: "image/pie_apple.png",
  },
  {
    id: "thyfrtretre",
    name: "Rainbow Cake",
    price: 20,
    desc: "Kue dengan krim berlapis yang warna warni.",
    img: "image/rainbow_cake.png",
  },
];

let shopItemsData3 = [
  {
    id: "jfhgbfgtrgtr",
    name: "Cola",
    price: 10,
    desc: "Minuman bersoda yang menyegarkan.",
    img: "image/cola.png",
  },
  {
    id: "iofddqewhjjieqwe",
    name: "Lemon tea",
    price: 12,
    desc: "Minuman teh menyegarkan rasa lemon untuk menghilangkan dahaga.",
    img: "image/lemon_tea.png",
  },
  {
    id: "wuefbncfdgfdg",
    name: "Oreo Milk Shake",
    price: 20,
    desc: "Susu kocok dengan perpaduan oreo yang creamy.",
    img: "image/oreo_milk_shake.png",
  },
  {
    id: "thyfewrfgfdgfdg",
    name: "Red Rock",
    price: 20,
    desc: "Minuman bersoda dengan paduan sirup stroberi yang menyegarkan.",
    img: "image/stroberi_lemon_squash.png",
  },
];


let shopItemsData4 = [
  {
    id: "sdagewewwswrwgw",
    name: "Pizza vegetarian",
    price: 47,
    desc: "Pizza dengan tomat dan jamur pilihan.",
    img: "image/Pizza1.png",
  },
  {
    id: "wqewqeewewwsadx",
    name: "Pizza Paprika Moza",
    price: 47,
    desc: "pizza dengan topping jamur, tomat, paprika, dan mozzarella.",
    img: "image/Pizza2.png",
  },
  {
    id: "wqejnkewryeweqe",
    name: "Pizza Paperoni",
    price: 45,
    desc: "pizza dengan menggunakan toping paperoni slice yang juicy.",
    img: "image/Pizza3.png",
  },
];
let px1 = document.getElementById('px1');
let px2 = document.getElementById('px2');
let px3 = document.getElementById('px3');
let px4 = document.getElementById('px4');
let basket = JSON.parse(localStorage.getItem("data")) || [];
let calculation = () => {
    px4.innerHTML = basket.map((x) => x.item).reduce((x, y) => x + y, 0);
  };
  calculation();
let amount = basket.map((x) => {
        let { item, id } = x;
        let search = shopItemsData.find((y) => y.id === id) || shopItemsData1.find((y) => y.id === id) || shopItemsData2.find((y) => y.id === id) || shopItemsData3.find((y) => y.id === id) || shopItemsData4.find((y) => y.id === id) || [];
        return item * search.price;
      })
      .reduce((x, y) => x + y, 0);
      let value = amount + 20;

px1.innerHTML = `Subtotal <span class="purchase-details">Rp ${amount}.000</span>`;
px2.innerHTML = `Ongkos Kirim <span class="purchase-details">Rp 20.000</span>`;
px3.innerHTML = `Total Biaya <span class="purchase-details color-palette-4">Rp ${value}.000</span>`;

function return_home(){
  localStorage.clear()
  location.href='Home.php';
}
