const productsDom = document.querySelector(".picture-container");
const dataLoaderDom = document.querySelector(".dataLoader");
const buttons = document.querySelectorAll(".srt-btn");
const buttonAll = document.querySelector(".button-container");




const client = contentful.createClient({
    // This is the space ID. A space is like a project folder in Contentful terms
    space: "ugwygg2jo1u7",
    // This is the access token for this space. Normally you get both ID and the token in the Contentful web app
    accessToken: "uImFYhAiplmrF2yxk4R75Ve_HBrqsrbzVsH042imRgQ"
  });

  
  

  class Products {
    async getProducts(){
        try {    
    let contentful = await client.getEntries({
        content_type:'appSale'
    });    
    /*let result = await fetch('products.json');
    let data = await result.json();*/
    let products = contentful.items;
    console.log(products)
    var i;
        products = products.map(item => {
            
        const {tpy} = item.fields;
        const {title} = item.fields.image.fields;        
        const title0 = item.fields.image1[0].fields.title;
        const title1 = item.fields.image1[1].fields.title;
        const title2 = item.fields.image1[2].fields.title;
        const {id} = item.sys;
        const image = item.fields.image.fields.file.url;
        const image0 = item.fields.image1[0].fields.file.url;
        const image1 = item.fields.image1[1].fields.file.url;
        const image2 = item.fields.image1[2].fields.file.url;
        return {title,title0,title1,title2,image0,image1,id,image,image2,tpy}
        
    });    
    return products;
    
    } catch (error) {
    console.log(error);
        } 
        
    }; 
     
    } 
    /*let products = JSON.parse(localStorage.getItem('products'));*/  
    /*console.log(buttons);
    buttons.forEach(button=>{        
        console.log(button);
        let tpy               = button.dataset.filter;
        console.log(tpy);
       console.log(button.children[1].dataset.filter);                
    });*/
    class UI {
        
        displayProducts(products){
    let result = '';
    var i;
    
    products.forEach(product => {
        result = ``;        
    /*productsDom.innerHTML = result;*/
    });
};

    sortProduct(products){
        let cart = '';
        let result;
        var i;
        /*cart = Storage.getProduct();*/
        cart = products;
            buttons.forEach(button=>{                     
            button.addEventListener('click', (event) =>{ 
                    result = '';
                let tpy = event.target.dataset.filter;
                for (i=0; i < cart.length; i++){
                  if(tpy === cart[i].tpy){ 
        dataLoaderDom.classList.add("dataLoaderNone");
        buttonAll.classList.add("dataLoaderNone");
                    result += `                    
        <div class = "product ${cart[i].tpy}">
        <div class = "img-container">
          <a href = "${cart[i].image}"><img src = "${cart[i].image}" alt = image class="product-img"></a>               
        </div>
        <div class = "text-container">
        <h3>${cart[i].title}</h3>
        </div>
        </div> 
        <div class = "product ${cart[i].tpy}">
        <div class = "img-container">
          <a   href = "${cart[i].image0}"><img src = "${cart[i].image0}" alt = image class="product-img"></a>               
        </div>
        <div class = "text-container">
        <h3>${cart[i].title0}</h3>
        </div>
        </div>
        <div class = "product ${cart[i].tpy}">
        <div class = "img-container">
          <a   href = "${cart[i].image1}"><img src = "${cart[i].image1}" alt = image class="product-img"></a>               
        </div>
        <div class = "text-container">
        <h3>${cart[i].title1}</h3>
        </div>
        </div>
        <div class = "product ${cart[i].tpy}">
        <div class = "img-container">
          <a   href = "${cart[i].image2}"><img src = "${cart[i].image2}" alt = image class="product-img"></a>               
        </div>
        <div class = "text-container">
        <h3>${cart[i].title2}</h3>
        </div>
        </div>
        `; 
        productsDom.innerHTML=result;
        
                           
    } 
    else if (event.target.dataset.filter === '*'){     
        this.displayProducts(products); 
         };
       };
    });   
  });
      
 };                

    };


    
    /*class Storage {
        static saveProduct(products){
            localStorage.setItem("products", JSON.stringify(products));
        }
        static getProduct(){
            let products = JSON.parse(localStorage.getItem('products'));
            return products;
        }                
    };*/

    document.addEventListener("DOMContentLoaded", () => {
        const ui = new UI ();
        const products = new Products ();
        products.getProducts().then(products => {
            ui.displayProducts(products);
            /*Storage.saveProduct(products);*/
             ui.sortProduct(products);  
                              
        });        
        });