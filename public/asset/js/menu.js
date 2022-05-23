//fetch("http://128.168.64.101:8000/api/foodcart/3")
fetch("asset/js/products.json")
// .then(function(response){
//     return response.json();
// })

// .then(function(categories){
//     console.log(categories.data[0]);
//     let placeholder = document.getElementById("data-output");
//     let out = "";

    

// })


// .then(function(response){
//     let placeholder = document.getElementById("data-output");
//     let categories = response;
//     let out = "";
//     for(var category in categories){
//         out +=`
//         <div class="col">
//             <div class="card shadow-sm bg-white rounded">
//                 <img src="${category.image}" class="card-img-top responsive" alt="...">
//                 <div class="card-body">         
//                     <div class="d-flex justify-content-between">
//                         <h5 class="card-title">'${category.name}'</h5>
//                         <span class="product-price">₱'${category.price}'</span>
//                     </div>
//                 <p class="card-text">'${category.description}'</p>
//                 <button class="btn btn-primary order" type="submit">Order</button>
                
//                 </div>
//             </div>
//         </div>
//         `;

//     }
//     placeholder.innerHTML = out;
//     console.log(categories)


// })


// $.ajax({
//     type:"GET",
//     url:"http://128.168.64.101:8000/api/foodcart/3",
//     success:function(categories){
//         $(categories.data).each(function(index, value){
//             category = value;
//             menu = category.menus
//             console.log(menu);
            
//             $('#exampleid').append("<tr>\
//                     <td>"+category.name+"</td>\
//                     <td>"+category.id+"</td>\
//                     <td>"+category.description+"</td>\
//                     </tr>");
//         });
//     }
// });


.then(function(response){
    return response.json();
})

.then(function(categories){
    
    categories.data.forEach((data) => {
        loadProducts(data)
    });
    
    
})

function loadProducts(data){
    var placeholder = document.createElement('div')
    placeholder.innerHTML = `
            <div class="card shadow-sm bg-white rounded">`+
            `<img srcc="`+data.image+`" class="card-img-top responsive" alt="...">`+
                `<div class="card-body">`+
                    `<div class="d-flex justify-content-between">`+
                        `<h5 class="card-title" id="name">`+data.name+`</h5>`+
                        `<span class="product-price">₱</span>`+
                    `</div>`+
                        `<p class="card-text" id="`+data.description+`"></p>`+
                        `<button class="btn btn-primary order" type="submit">Order</button>`+
                `</div>`+
            `</div>`;
    document.getElementById("data-output").appendChild(placeholder)
    console.log(data.name)
}
