/**start food sevice */

var food_container=document.getElementById('food_container')
document.getElementsByClassName('servi')[0].onclick=function(){
document.getElementById('a6').onclick=function(){
    var cont=document.createDocumentFragment();
for(i=1;i<3;i++){
    console.log('food')
    const div2=document.createElement('div')
    div2.innerHTML=` <img src="images/food${i}.jpg" ><div class="cats_text">
    Some quick example text to build on the card title and make up the bulk of the card's content. 
    <a href="#" class="btn btn-primary add" id="added"><i class="fa fa-shopping-cart" ></i>ADD TO CART</a> 
    </div>`
    cont.appendChild(div2);
}
food_container.appendChild(cont);
}
}