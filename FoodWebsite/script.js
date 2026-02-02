window.onload=function(){
    alert("welcome to our  FoodFast webpage");
    this.prompt("Please enter your name:");

};



let cart=[];
function addcart(itemname,price){
      alert(itemname+ " added to cart!");
    cart.push({name:itemname,price:price});
  
    console.log(cart);
}

 let  logincheck=function(){
    alert("Please login to proceed to checkout");
}
 let submitcontactform=()=>{
    alert("Thank you for contacting us! We will get back to you soon.");
}
const foodname="Cheese Burger";
let foodprice=190;
let foodstatus="Available";
let ordertoday=0;
document.getElementById("foodname").textContent=foodname;
document.getElementById("foodprice").textContent=foodprice;
document.getElementById("foodstatus").textContent=foodstatus;
document.getElementById("ordertoday").textContent=ordertoday;

console.log("foodItem-Name",foodname)
console.log("Food-price",foodprice)
console.log("Food-status",foodstatus)
console.log("Order-Count",ordertoday)

function placeOrder(){
    ordertoday=ordertoday+1;
    document.getElementById("ordertoday").textContent=ordertoday;
    console.log("updated Order count",ordertoday);

}
// function with return value 

function calculatetotal(price ,quantity){
    return price*quantity
}



let totalamount=calculatetotal(190,5);
console.log("Total amount for today's orders:",totalamount);

const food={
    name:"Chicken Noodles",
    price:240,
    category:"foodfast"

};
console.log("food-Item total list:",food)
console.log("food-items:",food.name);
console.log("food-price:",food.price);
console.log("food-category:",food.category);    

const biryani={
    name:"Chicken fry piece Biryani",
    price:320,
    category:"foodfast"
    };
console.log(biryani["name"]);
console.log(biryani["price"]);
console.log(biryani["category"]);

food.price=220;
console.log("Updated food price:",food.price);

biryani["price"]=300;
console.log("Updated biryani price:",biryani["price"]);







