let basket = JSON.parse(localStorage.getItem("data")) || [];
let detail = document.getElementById('detail');
let detail1 = document.getElementById('info');
let generateCartItems = () => {
  if (basket.length !== 0) {return (detail1.innerHTML = basket
        .map((x) => {
          let { id, item } = x;
          let search = shopItemsData.find((y) => y.id === id) || shopItemsData1.find((y) => y.id === id) || shopItemsData2.find((y) => y.id === id) || shopItemsData3.find((y) => y.id === id) || shopItemsData4.find((y) => y.id === id) || [];
          return `
          <input type="text" value="${item}" disabled class="quan">
                    x <input type="text" value="${search.name}" disabled class="food">
                    <input type="text" value="${item * search.price}.000" disabled class="total">
                    `
          ;
      })
      .join("")); }else {
        detail1.innerHTML = ``;
      }};
      generateCartItems();
      
    function done(){
        document.getElementById('detail').style.display="none";
    }