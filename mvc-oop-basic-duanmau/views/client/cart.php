<?php
    $cartmodel = new CartModel();
    $userid = $_SESSION['user']['id']??0;
    $result = $cartmodel->getAllProductIncart($userid);
?>
<div id="cart">
    <button onclick="closeCart()">close</button>
    <ul>
        <?php 
            foreach($result as $key => $value){
                extract($value);
                echo '<li>
                        <img src="'.$image.'"/>
                        <div>
                            <h5>'.$name.'</h5>
                            <p>Gia: '.$price.'</p>
                            <span>SL: '.$quantity.'</span>
                        </div>
                    </li>';
            }
        ?>
    </ul>
</div>
<script>
    const closeCart = ()=>{
        const cart = document.getElementById("cart")
        cart.classList.remove("active")
    }
</script>