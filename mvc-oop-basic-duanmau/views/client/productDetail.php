<?php
 require_once 'header.php';
 ?>
 

<section class="productdetail">
    <div class="grid gird-cols-2">
        <div class="image">
            <img src="<?=$image?>" alt="">
        </div>
        <div class="info">
            <h1><?=$name?></h1>
            <p>gia: <?=$price?></p>
            <form onsubmit="onSubmitForm()">
                <input type="number" name="quantity" value="1">
                <input type="hidden" name="productid" value="<?= $id ?>">
                <button>Them gio hang</button>
            </form>
        </div>
    </div>
    <div class="description">
        <?=$description ?>
    </div>
</section>
<script>
    const onSubmitForm = async()=>{
        event.preventDefault()
        const quantity = document.querySelector('input[name="quantity"]').value
        const productid = document.querySelector('input[name="productid"]').value
        // console.log(quantity);
        const productdata = new FormData()
        productdata.append('quantity',quantity)
        productdata.append('productid',productid)
        const cart = document.getElementById('cart')
        const cartul = document.querySelector('#cart ul')
        try{
            const response = await fetch('?act=addtocart',{
                method:'POST',
                body:productdata
            })
            const data = await response.json()
            if(data.status){
                cart.classList.add('active')
                console.log(data);
                let li = '';
                for(item of data.data){
                    console.log(item);
                    li += `<li>
                        <img src="${item.image}"/>
                        <div>
                            <h5>${item.name}</h5>
                            <p>Gia: ${item.price}</p>
                            <span>SL: ${item.quantity}</span>
                        </div>
                    </li>`
                }
                cart.innerHTML=li
            }
            alert(data.message)
        }catch(error){

        }
    }
</script>
 <?php
 require_once 'footer.php';
?>