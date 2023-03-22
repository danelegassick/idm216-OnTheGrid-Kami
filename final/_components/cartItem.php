<?php
    $site_url = site_url();
    $total_price=0;
    while ($item = mysqli_fetch_array($cart_items)) {

    if (in_array($item['protein'], ["Beef", "Chicken", "Tofu"])) {
        $price = $item['price'] + 1.00;
        $price =number_format((float)$price, 2, '.', '');
        $protein = $item['protein'] . " (+$1)";
    } else {
        $price = $item['price'];
        $protein = $item['protein'];
    }

    if ($item['spice_level'] == 2) {
        $spice = "Medium Spice";
    } elseif ($item['spice_level'] == 3) {
        $spice = "Hot Spice";
    } else {
        $spice = "Mild Spice";
    }

    if ($item['category'] == "drink") {
        $spice = "";
    }


   
   $item_plus_quanity= $price*$item['quantity'];
   $item_plus_quanity =number_format((float)$item_plus_quanity, 2, '.', '');
    echo "
    <div class='cart-order-item'>
            <div class='cart-order-img'>
                <img src='{$item['imageUrl']}' alt='cart-image' class='cart-item-image'>
                <p class='quantity'>{$item['quantity']}</p>
            </div>
            <div class='cart-order-text'>
                <div>
                    <h2 class='order-margin-top'>{$item['name']}</h2>
                    <p class='order-info'> {$protein}</p>
                    <p class='order-info'>{$spice}</p>
                </div>
                <div>
                    <h2 class='order-margin-top'>{$price}</h2>
                </div>
            </div>
        </div>

        <div>
            <input class='notes-field' type='text' id='note' name='note' value='{$item['note']}' placeholder='Add Note Here...'>
        </div>

        <div class='edit-delete'>
        <form action='{$site_url}/_includes/deleteCartItem.php' method='POST''>
            <input name='cart_item' value='{$item['cart_item_id']}' type='hidden'/>
        <button class='delete-button-style' type='submit'>
            <a class='edit-delete'>
                <svg xmlns='http://www.w3.org/2000/svg'  class='edit-delete-icon' width='21' height='21' viewBox='0 0 24 24'><path fill='#eb4e37' d='M7 21q-.825 0-1.413-.588T5 19V6H4V4h5V3h6v1h5v2h-1v13q0 .825-.588 1.413T17 21H7ZM17 6H7v13h10V6ZM9 17h2V8H9v9Zm4 0h2V8h-2v9ZM7 6v13V6Z'/></svg>            
            Delete
            </a>
        </button>
        </form>
        <a href=''> 
        <svg xmlns='http://www.w3.org/2000/svg' class='edit-delete-icon' width='21' height='21' viewBox='0 0 24 24'><path fill='currentColor' d='M5 19h1.4l8.625-8.625l-1.4-1.4L5 17.6V19ZM19.3 8.925l-4.25-4.2l1.4-1.4q.575-.575 1.413-.575t1.412.575l1.4 1.4q.575.575.6 1.388t-.55 1.387L19.3 8.925ZM4 21q-.425 0-.713-.288T3 20v-2.825q0-.2.075-.388t.225-.337l10.3-10.3l4.25 4.25l-10.3 10.3q-.15.15-.337.225T6.825 21H4ZM14.325 9.675l-.7-.7l1.4 1.4l-.7-.7Z'/></svg>    
                Edit
            </a>
        </div>
        ";

//     echo " 
// <div class='d-flex justify-content-between mb-4'>    
//     <div class='image-and-text d-flex justify-content-between'>
//         <div class='cart-item-container'>
//             <div class='cart-image-cropper-container '>
//                 <img class='cart-cropped-image' src='{$item['imageUrl']}'> 
//             </div>
//             <div class='order-amount'>
//                 <p class='accent order-amount-number pt-1'></p>
//             </div> 
//         </div>
//         <div class='ms-3 pt-2'>
//             <h3>{$item['name']}</h3>
//             <p>{$item['spice_level']}</p>
//             <p>{$item['protein']}</p>
//         </div>
//     </div>
//     <h3 class='pt-2'>$ {$item_plus_quanity}</h3>
// </div>   
    
//     <div class='d-flex justify-content-between mb-4'>
//     <form action='{$site_url}/_includes/deleteCartItem.php' method='POST''>
//     <input name='cart_item' value='{$item['cart_item_id']}' type='hidden'/>
//     <button  class='delete-button'type='submit'>
//     <p class='text-decoration-underline'>Delete</p>
//     </button>
//     </form>
//     </a>
//     <a href='#'>
//     <p class='text-decoration-underline'>Edit Item</p>
//     </a>
//     </div>
//     <div class='heading-border d-flex justify-content-between mb-3'></div>
//         ";
        
        $total_price += $item_plus_quanity;
        $item_plus_quanity= 0;
    }?>
    