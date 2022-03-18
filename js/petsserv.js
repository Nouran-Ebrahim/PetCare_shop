var i;

/**start pets service */
document.getElementById('A1').onclick=function(){
    let container=document.getElementById('rigth');
    container.innerHTML=""
      const flexFram =document.createElement('div');
      flexFram.setAttribute('class','flex')
      for( i=1 ;i<=12;i++){
          const div=document.createElement('div');
          div.innerHTML=` <img src="images/cat${i}.jpg" ><div class="cats_text">
           Some quick example text to build on the card title and make up the bulk of the card's content. 
          <a href="#" class="btn btn-primary add" id="added"><i class="fa fa-shopping-cart" ></i>ADD TO CART</a> 
           </div>`
           flexFram.appendChild(div)  
          console.log('done')       
      }
      container.appendChild(flexFram)
      $('a#added').click(function(){
        $(this).html('<i class="fa fa-shopping-cart" ></i>ADDED TO CART ')
    })


   let container_left= document.getElementById('left') 

   container_left.innerHTML=`<a href="#" id="a4">ACCESORIES</a>
   <a href="#" id="a5">FOODS</a>`

   document.getElementById('a4').onclick=function(){
    console.log('cat')
let container=document.getElementById('rigth');
  container.innerHTML=""
  const flexFram =document.createElement('div');
  flexFram.setAttribute('class','flex')
  for( i=1 ;i<=2;i++){
      const div=document.createElement('div');
      div.innerHTML=` <img src="images/acc_cat${i}.jpg" ><div class="cats_text">
       Some quick example text to build on the card title and make up the bulk of the card's content. 
       <a href="#" class="btn btn-primary add" id="added"><i class="fa fa-shopping-cart" ></i>ADD TO CART</a> 
       </div>`
       flexFram.appendChild(div)
       
      console.log('done')
  }
  container.appendChild(flexFram)
  $('a#added').click(function(){
    $(this).html('<i class="fa fa-shopping-cart" ></i>ADDED TO CART ')
})

}

document.getElementById('a5').onclick=function(){
    console.log('cat')
let container=document.getElementById('rigth');
  container.innerHTML=""
  const flexFram =document.createElement('div');
  flexFram.setAttribute('class','flex')
  for( i=1 ;i<3;i++){
      const div=document.createElement('div');
      div.innerHTML=` <img src="images/food_cat${i}.jpg" ><div class="cats_text">
       Some quick example text to build on the card title and make up the bulk of the card's content. 
       <a href="#" class="btn btn-primary add" id="added"><i class="fa fa-shopping-cart" ></i>ADD TO CART</a> 
       </div>`
       flexFram.appendChild(div)
       
      console.log('done')
  }
  container.appendChild(flexFram)
  $('a#added').click(function(){
    $(this).html('<i class="fa fa-shopping-cart" ></i>ADDED TO CART ')
})
}

}

document.getElementById('A2').onclick=function(){
    let container=document.getElementById('rigth');
      container.innerHTML=""
      const flexFram =document.createElement('div');
      flexFram.setAttribute('class','flex')
      for( i=1 ;i<3;i++){
          const div=document.createElement('div');
          div.innerHTML=` <img src="images/dog${i}.jpg" ><div class="cats_text">
           Some quick example text to build on the card title and make up the bulk of the card's content. 
           <a href="#" class="btn btn-primary add" id="added"><i class="fa fa-shopping-cart" ></i>ADD TO CART</a> 
           </div>`
           flexFram.appendChild(div)
           
          console.log('done')
      }
      container.appendChild(flexFram)
      $('a#added').click(function(){
        $(this).html('<i class="fa fa-shopping-cart" ></i>ADDED TO CART ')
    })
      let container_left= document.getElementById('left') 
      container_left.innerHTML=`<a href="#" id="a8">ACCESORIES</a>
      <a href="#" id="a9">FOODS</a>`
      
document.getElementById('a8').onclick=function(){
    let container=document.getElementById('rigth');
      container.innerHTML=""
      const flexFram =document.createElement('div');
      flexFram.setAttribute('class','flex')
      for( i=1 ;i<3;i++){
          const div=document.createElement('div');
          div.innerHTML=` <img src="images/acc_dog${i}.jpg" ><div class="cats_text">
           Some quick example text to build on the card title and make up the bulk of the card's content. 
           <a href="#" class="btn btn-primary add" id="added"><i class="fa fa-shopping-cart" ></i>ADD TO CART</a> 
           </div>`
           flexFram.appendChild(div)
           
          console.log('done')
      }
      container.appendChild(flexFram)
      $('a#added').click(function(){
        $(this).html('<i class="fa fa-shopping-cart" ></i>ADDED TO CART ')
    })
    
}
document.getElementById('a9').onclick=function(){
    let container=document.getElementById('rigth');
      container.innerHTML=""
      const flexFram =document.createElement('div');
      flexFram.setAttribute('class','flex')
      for( i=1 ;i<3;i++){
          const div=document.createElement('div');
          div.innerHTML=` <img src="images/food_dog${i}.jpg" ><div class="cats_text">
           Some quick example text to build on the card title and make up the bulk of the card's content. 
           <a href="#" class="btn btn-primary add" id="added"><i class="fa fa-shopping-cart" ></i>ADD TO CART</a> 
           </div>`
           flexFram.appendChild(div)
           
          console.log('done')
      }
      container.appendChild(flexFram)
      $('a#added').click(function(){
        $(this).html('<i class="fa fa-shopping-cart" ></i>ADDED TO CART ')
    })
    
}
}
document.getElementById('A3').onclick=function(){
    let container=document.getElementById('rigth');
      container.innerHTML=""
      const flexFram =document.createElement('div');
      flexFram.setAttribute('class','flex')
      for(var i=1 ;i<3;i++){
          const div=document.createElement('div');
          div.innerHTML=` <img src="images/bird${i}.jpg" ><div class="cats_text">
           Some quick example text to build on the card title and make up the bulk of the card's content. 
           <a href="#" class="btn btn-primary add" id="added"><i class="fa fa-shopping-cart" ></i>ADD TO CART</a> 
           </div>`
           flexFram.appendChild(div)
           
          console.log('done')
      }
      container.appendChild(flexFram)
      $('a#added').click(function(){
        $(this).html('<i class="fa fa-shopping-cart" ></i>ADDED TO CART ')
    })
      let container_left= document.getElementById('left') 

      container_left.innerHTML=`<a href="#" id="A10">ACCESORIES</a>
      <a href="#" id="A11">FOODS</a>`
   
      document.getElementById('A10').onclick=function(){
       console.log('cat')
   let container=document.getElementById('rigth');
     container.innerHTML=""
     const flexFram =document.createElement('div');
     flexFram.setAttribute('class','flex')
     for( i=1 ;i<3;i++){
         const div=document.createElement('div');
         div.innerHTML=` <img src="images/acc_bird${i}.jpg" ><div class="cats_text">
          Some quick example text to build on the card title and make up the bulk of the card's content. 
          <a href="#" class="btn btn-primary add" id="added"><i class="fa fa-shopping-cart" ></i>ADD TO CART</a> 
          </div>`
          flexFram.appendChild(div)
          
         console.log('done')
     }
     container.appendChild(flexFram)
     $('a#added').click(function(){
        $(this).html('<i class="fa fa-shopping-cart" ></i>ADDED TO CART ')
    })
   }
   document.getElementById('A11').onclick=function(){
       console.log('cat')
   let container=document.getElementById('rigth');
     container.innerHTML=""
     const flexFram =document.createElement('div');
     flexFram.setAttribute('class','flex')
     for( i=1 ;i<3;i++){
         const div=document.createElement('div');
         div.innerHTML=` <img src="images/food_bird${i}.jpg" ><div class="cats_text">
          Some quick example text to build on the card title and make up the bulk of the card's content. 
          <a href="#" class="btn btn-primary add" id="added"><i class="fa fa-shopping-cart" ></i>ADD TO CART</a> 
          </div>`
          flexFram.appendChild(div)
          
         console.log('done')
     }
     container.appendChild(flexFram)
     $('a#added').click(function(){
        $(this).html('<i class="fa fa-shopping-cart" ></i>ADDED TO CART ')
    })
   }
}






