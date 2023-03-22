<?php
    $site_url = site_url();
    $total_price=0;

        // $item_plus_quanity= $item['price']*$item['quantity'];
    // $item_plus_quanity =number_format((float)$item_plus_quanity, 2, '.', '');

    $highest_id = 0;

while ($item = mysqli_fetch_array($order_items)) {
    if ($item['id'] > $highest_id) {
        $highest_id = $item['id'];
      }
}



mysqli_data_seek($order_items, 0);

while ($item = mysqli_fetch_assoc($order_items)) {
    if ($item['id'] === $highest_id) {
        echo "
        <div class='orders-line'>
            <h2>IN PROGRESS</h2>
            <img class='orders-image' src='{$site_url}/dist/images/orders-image.svg' alt='orders-image'>
        </div>
        <hr class='order-totals-hr'>
        <div class='in-progress-card'>
            <div class='in-progress-header'>
                <h2>Pickup - 12:30pm</h2>
            </div>
            <div class='in-progress-body'>
                <p class='order-number'>#11223344</p>
                <div class='current-order-details'>
                    <h1 class='order-name'>Your Order</h1>
                </div>";
                echo"<h3 class='current-order-details'>Total: $";echo"{$item['final_total']}</h3>";
                include __DIR__ . '/../_components/orderConfirmationItem.php';
                echo"
                <div class='order-tracker'>
                    <img class='order-tracker-image' src='{$site_url}/dist/images/order-tracker.svg' alt='order-tracker'>
                    <div class='order-tracker-text'>
                        <p>Recieved</p>
                        <p>Preparing</p>
                        <p><b>Ready</b></p>
                    </div>
                </div>
                <a href='{$site_url}/order-ready.php' class='arrived-btn'>
                    <h2>I have arrived!</h2>
                </a>
            </div>
        </div>
        <div class='orders-line'>
        <h2>PAST ORDERS</h2>
        </div>
        <hr class='order-totals-hr'>

      ";
    } elseif ($item['id'] != $highest_id) {
        echo "
        <div class='past-orders-group'>
            <div class='past-order'>
                <div class='order-date-number'>
                    <p class='order-date'>10/28/2022</p>
                    <p class='order-number'>#11223344</p>
                </div>
                <div class='past-order-card'>
                    ";
                    echo"<h3 class='current-order-details'>Total: $";echo"{$item['final_total']}</h3>";
                    include __DIR__ . '/../_components/orderConfirmationItem.php';
                echo"
                    <a href='{$site_url}/index.php' class='orders-quick-add'>
                    Start A New Order
                    </a>
                </div>
            </div>
      ";
  }
}


  mysqli_free_result($order_items);


//   if($item['items_ordered'] != null){

//     if ($count == 0) {
//       // execute code for first iteration
//       echo "
//         <div class='orders-line'>
//             <h2>IN PROGRESS</h2>
//             <img class='orders-image' src='{$site_url}/dist/images/orders-image.svg' alt='orders-image'>
//         </div>
//         <hr class='order-totals-hr'>
//         <div class='in-progress-card'>
//             <div class='in-progress-header'>
//                 <h2>Pickup - 12:30pm</h2>
//             </div>
//             <div class='in-progress-body'>
//                 <p class='order-number'>#11223344</p>
//                 <div class='current-order-details'>
//                     <h1 class='order-name'>Jervo's Order</h1>
//                 </div>";
//                 echo"<p class='current-order-details'>$";echo"{$item['final_total']}";
//                 include __DIR__ . '/../_components/orderConfirmationItem.php';
//                 echo"
//                 <div class='order-tracker'>
//                     <img class='order-tracker-image' src='{$site_url}/dist/images/order-tracker.svg' alt='order-tracker'>
//                     <div class='order-tracker-text'>
//                         <p>Recieved</p>
//                         <p>Preparing</p>
//                         <p><b>Ready</b></p>
//                     </div>
//                 </div>
//                 <button class='arrived-btn'>
//                     <h2>I have arrived!</h2>
//                 </button>
//             </div>
//         </div>
//       ";
//       $count++;
//     } else {
//       // execute code for subsequent iterations
//      echo "
//       <div class='container-b mx-auto py-3 px-4 mb-4 d-flex flex-column' >
//       <h1 class='big-text text-center my-0'>Order #123456</h1>


//       <div class='heading-border d-flex justify-content-between mb-3'></div>

//       <div class='d-flex flex-row justify-content-between align-items-center mb-2'>
//           <p>PICKUP TIME</p>
//           <p>12:30pm</p>
//       </div>
//       <div class='d-flex flex-row justify-content-between align-items-center mb-2'>
//           <p>Total</p>";
//           echo"<p>$";echo"{$item['final_total']}</p>
//       </div>";
//       include __DIR__ . '/../_components/orderConfirmationItem.php';
//       echo "
//       <button onclick='' type='button' class='btn btn-primary p-2'>View QR Code</button>
//       </div>
//     ";
//     }
//     }


      


// while ($item = mysqli_fetch_array($order_items)) {

// if($item['items_ordered']!= null){

//     echo " 
//         <div class='container-b mx-auto py-3 px-4 mb-4 d-flex flex-column' >
//         <h1 class='big-text text-center my-0'>Order #123456</h1>
//         <p class='text-center mb-2'> Status: <strong class='green'>{$item['status']}</strong> </p>

//         <div class='heading-border d-flex justify-content-between mb-3'></div>

//         <div class='d-flex flex-row justify-content-between align-items-center mb-2'>
//             <p>PICKUP TIME</p>
//             <p>12:30pm</p>
//         </div>
//         <div class='d-flex flex-row justify-content-between align-items-center mb-2'>
//             <p>Total</p>";
//             echo"<p>$";echo"{$item['final_total']}</p>
//         </div>";
//         include __DIR__ . '/../_components/orderConfirmationItem.php';
//         echo "
//         <button onclick='' type='button' class='btn btn-primary p-2'>View QR Code</button>
//     </div>
//     ";
// }}?>