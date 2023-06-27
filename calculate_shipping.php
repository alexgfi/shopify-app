<?php
$shopifyResponse = array();
$shopifyResponse["rates"][] = array(
    "service_name" => "Senpex Delivery",
    "service_code" => "senpex_delivery",
    "total_price" => "1295",
    "description" => "This is the fastest option by far",
    "currency" => "USD"
);
/*$shopifyResponse = '{
  "rates": [
    {
      "service_name": "Senpex Delivery",
      "service_code": "ON",
      "total_price": "1295",
      "description": "This is the fastest option by far",
      "currency": "USD",
      "min_delivery_date": "2023-06-30 14:48:45 -0400",
      "max_delivery_date": "2023-07-30 14:48:45 -0400"
    }
  ]
}';*/
echo json_encode($shopifyResponse);
?>