fetch("asset/js/products2.json")
.then(function(response){
    return response.json();
})

.then(function(products){
    let placeholder = document.querySelector("#data-output");
    let out = "";
    for(let data of products){
        out +=`
        <div class="col">
            <div class="card shadow-sm bg-white rounded">
                <img src="/img/1.jpg" class="card-img-top responsive" alt="...">
                <div class="card-body">         
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title">'${data.name}'</h5>
                        <span class="product-price">₱'${data.price}'</span>
                    </div>
                <p class="card-text">'${data.description}'</p>
                <button class="btn btn-primary order" type="submit">Order</button>
                
                </div>
            </div>
        </div>
        `;
    }

    placeholder.innerHTML = out;
})
