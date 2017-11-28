<?php 
for i in {1..999};
do curl https://store-aa5zk98er0.mybigcommerce.com/api/v2/orders -X POST \
  -H "Content-type: application/json" \
  -u "Nori:77f6e0aa447f5ec3602bba37e482cf11a2320792" \
  -d '{
  "status_id": 11,
  "billing_address": {
    "first_name": "John",
    "last_name": "Elway",
    "company": "",
    "street_1": "12345 W Anderson Ln",
    "street_2": "",
    "city": "Austin",
    "state": "Texas",
    "zip": "78757",
    "country": "United States",
    "country_iso2": "US",
    "phone": "",
    "email": "elsie@example.com"
  },
  "shipping_addresses": [
    {
      "first_name": "James",
      "last_name": "Dean",
      "company": "Daily Planet",
      "street_1": "13316 Gilwell Dr",
      "street_2": "",
      "city": "Del Valle",
      "state": "Texas",
      "zip": "78757",
      "country": "United States",
      "country_iso2": "US",
      "phone": "",
      "email": "elsie@example.com"
    }
  ],
  "products": [
    {
      "product_id": 111,
      "quantity": 10r
    },
    {
      "name": "My custom product",
      "quantity": 2,
      "price_inc_tax": 10.8,
      "price_ex_tax": 10
    }
  ],
  "external_source": "POS"
}'
clear;

echo "processed $i of 999";
donedone
