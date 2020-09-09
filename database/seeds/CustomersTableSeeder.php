<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('customers')->delete();
        
        \DB::table('customers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'stripe_card' => 'a:8:{s:2:"id";s:28:"tok_1G6foIE8aQBUQ0bn7ZHglVAv";s:6:"object";s:5:"token";s:4:"card";a:21:{s:2:"id";s:29:"card_1G6foIE8aQBUQ0bn4IaE94mD";s:6:"object";s:4:"card";s:12:"address_city";N;s:15:"address_country";N;s:13:"address_line1";N;s:19:"address_line1_check";N;s:13:"address_line2";N;s:13:"address_state";N;s:11:"address_zip";N;s:17:"address_zip_check";N;s:5:"brand";s:10:"MasterCard";s:7:"country";s:2:"US";s:9:"cvc_check";s:9:"unchecked";s:13:"dynamic_last4";N;s:9:"exp_month";i:10;s:8:"exp_year";i:2020;s:7:"funding";s:6:"credit";s:5:"last4";s:4:"4444";s:8:"metadata";a:0:{}s:4:"name";s:8:"Jane Doe";s:19:"tokenization_method";N;}s:9:"client_ip";s:12:"58.65.222.41";s:7:"created";i:1580401446;s:8:"livemode";b:0;s:4:"type";s:4:"card";s:4:"used";b:0;}',
                'stripe_customer' => 'O:15:"Stripe\\Customer":8:{s:14:"saveWithParent";b:0;s:8:"' . "\0" . '*' . "\0" . '_opts";O:26:"Stripe\\Util\\RequestOptions":3:{s:7:"headers";a:0:{}s:6:"apiKey";s:42:"sk_test_0FqT15BgPnEBLdzXYU5nvtd7005RBoQ3YB";s:7:"apiBase";N;}s:18:"' . "\0" . '*' . "\0" . '_originalValues";a:23:{s:2:"id";s:18:"cus_GdxjRFLvIpjEhb";s:6:"object";s:8:"customer";s:7:"address";N;s:7:"balance";i:0;s:7:"created";i:1580401447;s:8:"currency";N;s:14:"default_source";s:29:"card_1G6foIE8aQBUQ0bn4IaE94mD";s:10:"delinquent";b:0;s:11:"description";N;s:8:"discount";N;s:5:"email";s:13:"jane@mail.com";s:14:"invoice_prefix";s:8:"FD3C61D6";s:16:"invoice_settings";a:3:{s:13:"custom_fields";N;s:22:"default_payment_method";N;s:6:"footer";N;}s:8:"livemode";b:0;s:8:"metadata";a:0:{}s:4:"name";N;s:5:"phone";N;s:17:"preferred_locales";a:0:{}s:8:"shipping";N;s:7:"sources";a:5:{s:6:"object";s:4:"list";s:4:"data";a:1:{i:0;a:23:{s:2:"id";s:29:"card_1G6foIE8aQBUQ0bn4IaE94mD";s:6:"object";s:4:"card";s:12:"address_city";N;s:15:"address_country";N;s:13:"address_line1";N;s:19:"address_line1_check";N;s:13:"address_line2";N;s:13:"address_state";N;s:11:"address_zip";N;s:17:"address_zip_check";N;s:5:"brand";s:10:"MasterCard";s:7:"country";s:2:"US";s:8:"customer";s:18:"cus_GdxjRFLvIpjEhb";s:9:"cvc_check";s:4:"pass";s:13:"dynamic_last4";N;s:9:"exp_month";i:10;s:8:"exp_year";i:2020;s:11:"fingerprint";s:16:"ZL8l4626GTYmv4wW";s:7:"funding";s:6:"credit";s:5:"last4";s:4:"4444";s:8:"metadata";a:0:{}s:4:"name";s:8:"Jane Doe";s:19:"tokenization_method";N;}}s:8:"has_more";b:0;s:11:"total_count";i:1;s:3:"url";s:40:"/v1/customers/cus_GdxjRFLvIpjEhb/sources";}s:13:"subscriptions";a:5:{s:6:"object";s:4:"list";s:4:"data";a:0:{}s:8:"has_more";b:0;s:11:"total_count";i:0;s:3:"url";s:46:"/v1/customers/cus_GdxjRFLvIpjEhb/subscriptions";}s:10:"tax_exempt";s:4:"none";s:7:"tax_ids";a:5:{s:6:"object";s:4:"list";s:4:"data";a:0:{}s:8:"has_more";b:0;s:11:"total_count";i:0;s:3:"url";s:40:"/v1/customers/cus_GdxjRFLvIpjEhb/tax_ids";}}s:10:"' . "\0" . '*' . "\0" . '_values";a:23:{s:2:"id";s:18:"cus_GdxjRFLvIpjEhb";s:6:"object";s:8:"customer";s:7:"address";N;s:7:"balance";i:0;s:7:"created";i:1580401447;s:8:"currency";N;s:14:"default_source";s:29:"card_1G6foIE8aQBUQ0bn4IaE94mD";s:10:"delinquent";b:0;s:11:"description";N;s:8:"discount";N;s:5:"email";s:13:"jane@mail.com";s:14:"invoice_prefix";s:8:"FD3C61D6";s:16:"invoice_settings";O:19:"Stripe\\StripeObject":7:{s:8:"' . "\0" . '*' . "\0" . '_opts";r:3;s:18:"' . "\0" . '*' . "\0" . '_originalValues";a:3:{s:13:"custom_fields";N;s:22:"default_payment_method";N;s:6:"footer";N;}s:10:"' . "\0" . '*' . "\0" . '_values";a:3:{s:13:"custom_fields";N;s:22:"default_payment_method";N;s:6:"footer";N;}s:17:"' . "\0" . '*' . "\0" . '_unsavedValues";O:15:"Stripe\\Util\\Set":1:{s:22:"' . "\0" . 'Stripe\\Util\\Set' . "\0" . '_elts";a:0:{}}s:19:"' . "\0" . '*' . "\0" . '_transientValues";O:15:"Stripe\\Util\\Set":1:{s:22:"' . "\0" . 'Stripe\\Util\\Set' . "\0" . '_elts";a:0:{}}s:19:"' . "\0" . '*' . "\0" . '_retrieveOptions";a:0:{}s:16:"' . "\0" . '*' . "\0" . '_lastResponse";N;}s:8:"livemode";b:0;s:8:"metadata";O:19:"Stripe\\StripeObject":7:{s:8:"' . "\0" . '*' . "\0" . '_opts";r:3;s:18:"' . "\0" . '*' . "\0" . '_originalValues";a:0:{}s:10:"' . "\0" . '*' . "\0" . '_values";a:0:{}s:17:"' . "\0" . '*' . "\0" . '_unsavedValues";O:15:"Stripe\\Util\\Set":1:{s:22:"' . "\0" . 'Stripe\\Util\\Set' . "\0" . '_elts";a:0:{}}s:19:"' . "\0" . '*' . "\0" . '_transientValues";O:15:"Stripe\\Util\\Set":1:{s:22:"' . "\0" . 'Stripe\\Util\\Set' . "\0" . '_elts";a:0:{}}s:19:"' . "\0" . '*' . "\0" . '_retrieveOptions";a:0:{}s:16:"' . "\0" . '*' . "\0" . '_lastResponse";N;}s:4:"name";N;s:5:"phone";N;s:17:"preferred_locales";a:0:{}s:8:"shipping";N;s:7:"sources";O:17:"Stripe\\Collection":8:{s:10:"' . "\0" . '*' . "\0" . 'filters";a:0:{}s:8:"' . "\0" . '*' . "\0" . '_opts";r:3;s:18:"' . "\0" . '*' . "\0" . '_originalValues";a:5:{s:6:"object";s:4:"list";s:4:"data";a:1:{i:0;a:23:{s:2:"id";s:29:"card_1G6foIE8aQBUQ0bn4IaE94mD";s:6:"object";s:4:"card";s:12:"address_city";N;s:15:"address_country";N;s:13:"address_line1";N;s:19:"address_line1_check";N;s:13:"address_line2";N;s:13:"address_state";N;s:11:"address_zip";N;s:17:"address_zip_check";N;s:5:"brand";s:10:"MasterCard";s:7:"country";s:2:"US";s:8:"customer";s:18:"cus_GdxjRFLvIpjEhb";s:9:"cvc_check";s:4:"pass";s:13:"dynamic_last4";N;s:9:"exp_month";i:10;s:8:"exp_year";i:2020;s:11:"fingerprint";s:16:"ZL8l4626GTYmv4wW";s:7:"funding";s:6:"credit";s:5:"last4";s:4:"4444";s:8:"metadata";a:0:{}s:4:"name";s:8:"Jane Doe";s:19:"tokenization_method";N;}}s:8:"has_more";b:0;s:11:"total_count";i:1;s:3:"url";s:40:"/v1/customers/cus_GdxjRFLvIpjEhb/sources";}s:10:"' . "\0" . '*' . "\0" . '_values";a:5:{s:6:"object";s:4:"list";s:4:"data";a:1:{i:0;O:11:"Stripe\\Card":8:{s:14:"saveWithParent";b:0;s:8:"' . "\0" . '*' . "\0" . '_opts";r:3;s:18:"' . "\0" . '*' . "\0" . '_originalValues";a:23:{s:2:"id";s:29:"card_1G6foIE8aQBUQ0bn4IaE94mD";s:6:"object";s:4:"card";s:12:"address_city";N;s:15:"address_country";N;s:13:"address_line1";N;s:19:"address_line1_check";N;s:13:"address_line2";N;s:13:"address_state";N;s:11:"address_zip";N;s:17:"address_zip_check";N;s:5:"brand";s:10:"MasterCard";s:7:"country";s:2:"US";s:8:"customer";s:18:"cus_GdxjRFLvIpjEhb";s:9:"cvc_check";s:4:"pass";s:13:"dynamic_last4";N;s:9:"exp_month";i:10;s:8:"exp_year";i:2020;s:11:"fingerprint";s:16:"ZL8l4626GTYmv4wW";s:7:"funding";s:6:"credit";s:5:"last4";s:4:"4444";s:8:"metadata";a:0:{}s:4:"name";s:8:"Jane Doe";s:19:"tokenization_method";N;}s:10:"' . "\0" . '*' . "\0" . '_values";a:23:{s:2:"id";s:29:"card_1G6foIE8aQBUQ0bn4IaE94mD";s:6:"object";s:4:"card";s:12:"address_city";N;s:15:"address_country";N;s:13:"address_line1";N;s:19:"address_line1_check";N;s:13:"address_line2";N;s:13:"address_state";N;s:11:"address_zip";N;s:17:"address_zip_check";N;s:5:"brand";s:10:"MasterCard";s:7:"country";s:2:"US";s:8:"customer";s:18:"cus_GdxjRFLvIpjEhb";s:9:"cvc_check";s:4:"pass";s:13:"dynamic_last4";N;s:9:"exp_month";i:10;s:8:"exp_year";i:2020;s:11:"fingerprint";s:16:"ZL8l4626GTYmv4wW";s:7:"funding";s:6:"credit";s:5:"last4";s:4:"4444";s:8:"metadata";O:19:"Stripe\\StripeObject":7:{s:8:"' . "\0" . '*' . "\0" . '_opts";r:3;s:18:"' . "\0" . '*' . "\0" . '_originalValues";a:0:{}s:10:"' . "\0" . '*' . "\0" . '_values";a:0:{}s:17:"' . "\0" . '*' . "\0" . '_unsavedValues";O:15:"Stripe\\Util\\Set":1:{s:22:"' . "\0" . 'Stripe\\Util\\Set' . "\0" . '_elts";a:0:{}}s:19:"' . "\0" . '*' . "\0" . '_transientValues";O:15:"Stripe\\Util\\Set":1:{s:22:"' . "\0" . 'Stripe\\Util\\Set' . "\0" . '_elts";a:0:{}}s:19:"' . "\0" . '*' . "\0" . '_retrieveOptions";a:0:{}s:16:"' . "\0" . '*' . "\0" . '_lastResponse";N;}s:4:"name";s:8:"Jane Doe";s:19:"tokenization_method";N;}s:17:"' . "\0" . '*' . "\0" . '_unsavedValues";O:15:"Stripe\\Util\\Set":1:{s:22:"' . "\0" . 'Stripe\\Util\\Set' . "\0" . '_elts";a:0:{}}s:19:"' . "\0" . '*' . "\0" . '_transientValues";O:15:"Stripe\\Util\\Set":1:{s:22:"' . "\0" . 'Stripe\\Util\\Set' . "\0" . '_elts";a:0:{}}s:19:"' . "\0" . '*' . "\0" . '_retrieveOptions";a:0:{}s:16:"' . "\0" . '*' . "\0" . '_lastResponse";N;}}s:8:"has_more";b:0;s:11:"total_count";i:1;s:3:"url";s:40:"/v1/customers/cus_GdxjRFLvIpjEhb/sources";}s:17:"' . "\0" . '*' . "\0" . '_unsavedValues";O:15:"Stripe\\Util\\Set":1:{s:22:"' . "\0" . 'Stripe\\Util\\Set' . "\0" . '_elts";a:0:{}}s:19:"' . "\0" . '*' . "\0" . '_transientValues";O:15:"Stripe\\Util\\Set":1:{s:22:"' . "\0" . 'Stripe\\Util\\Set' . "\0" . '_elts";a:0:{}}s:19:"' . "\0" . '*' . "\0" . '_retrieveOptions";a:0:{}s:16:"' . "\0" . '*' . "\0" . '_lastResponse";N;}s:13:"subscriptions";O:17:"Stripe\\Collection":8:{s:10:"' . "\0" . '*' . "\0" . 'filters";a:0:{}s:8:"' . "\0" . '*' . "\0" . '_opts";r:3;s:18:"' . "\0" . '*' . "\0" . '_originalValues";a:5:{s:6:"object";s:4:"list";s:4:"data";a:0:{}s:8:"has_more";b:0;s:11:"total_count";i:0;s:3:"url";s:46:"/v1/customers/cus_GdxjRFLvIpjEhb/subscriptions";}s:10:"' . "\0" . '*' . "\0" . '_values";a:5:{s:6:"object";s:4:"list";s:4:"data";a:0:{}s:8:"has_more";b:0;s:11:"total_count";i:0;s:3:"url";s:46:"/v1/customers/cus_GdxjRFLvIpjEhb/subscriptions";}s:17:"' . "\0" . '*' . "\0" . '_unsavedValues";O:15:"Stripe\\Util\\Set":1:{s:22:"' . "\0" . 'Stripe\\Util\\Set' . "\0" . '_elts";a:0:{}}s:19:"' . "\0" . '*' . "\0" . '_transientValues";O:15:"Stripe\\Util\\Set":1:{s:22:"' . "\0" . 'Stripe\\Util\\Set' . "\0" . '_elts";a:0:{}}s:19:"' . "\0" . '*' . "\0" . '_retrieveOptions";a:0:{}s:16:"' . "\0" . '*' . "\0" . '_lastResponse";N;}s:10:"tax_exempt";s:4:"none";s:7:"tax_ids";O:17:"Stripe\\Collection":8:{s:10:"' . "\0" . '*' . "\0" . 'filters";a:0:{}s:8:"' . "\0" . '*' . "\0" . '_opts";r:3;s:18:"' . "\0" . '*' . "\0" . '_originalValues";a:5:{s:6:"object";s:4:"list";s:4:"data";a:0:{}s:8:"has_more";b:0;s:11:"total_count";i:0;s:3:"url";s:40:"/v1/customers/cus_GdxjRFLvIpjEhb/tax_ids";}s:10:"' . "\0" . '*' . "\0" . '_values";a:5:{s:6:"object";s:4:"list";s:4:"data";a:0:{}s:8:"has_more";b:0;s:11:"total_count";i:0;s:3:"url";s:40:"/v1/customers/cus_GdxjRFLvIpjEhb/tax_ids";}s:17:"' . "\0" . '*' . "\0" . '_unsavedValues";O:15:"Stripe\\Util\\Set":1:{s:22:"' . "\0" . 'Stripe\\Util\\Set' . "\0" . '_elts";a:0:{}}s:19:"' . "\0" . '*' . "\0" . '_transientValues";O:15:"Stripe\\Util\\Set":1:{s:22:"' . "\0" . 'Stripe\\Util\\Set' . "\0" . '_elts";a:0:{}}s:19:"' . "\0" . '*' . "\0" . '_retrieveOptions";a:0:{}s:16:"' . "\0" . '*' . "\0" . '_lastResponse";N;}}s:17:"' . "\0" . '*' . "\0" . '_unsavedValues";O:15:"Stripe\\Util\\Set":1:{s:22:"' . "\0" . 'Stripe\\Util\\Set' . "\0" . '_elts";a:0:{}}s:19:"' . "\0" . '*' . "\0" . '_transientValues";O:15:"Stripe\\Util\\Set":1:{s:22:"' . "\0" . 'Stripe\\Util\\Set' . "\0" . '_elts";a:0:{}}s:19:"' . "\0" . '*' . "\0" . '_retrieveOptions";a:0:{}s:16:"' . "\0" . '*' . "\0" . '_lastResponse";O:18:"Stripe\\ApiResponse":4:{s:7:"headers";O:32:"Stripe\\Util\\CaseInsensitiveArray":1:{s:43:"' . "\0" . 'Stripe\\Util\\CaseInsensitiveArray' . "\0" . 'container";a:13:{s:6:"server";s:5:"nginx";s:4:"date";s:29:"Thu, 30 Jan 2020 16:24:08 GMT";s:12:"content-type";s:16:"application/json";s:14:"content-length";s:4:"1826";s:32:"access-control-allow-credentials";s:4:"true";s:28:"access-control-allow-methods";s:32:"GET, POST, HEAD, OPTIONS, DELETE";s:27:"access-control-allow-origin";s:1:"*";s:29:"access-control-expose-headers";s:104:"Request-Id, Stripe-Manage-Version, X-Stripe-External-Auth-Required, X-Stripe-Privileged-Session-Required";s:22:"access-control-max-age";s:3:"300";s:13:"cache-control";s:18:"no-cache, no-store";s:10:"request-id";s:18:"req_KCfTrpzYTq87Lh";s:14:"stripe-version";s:10:"2019-12-03";s:25:"strict-transport-security";s:44:"max-age=31556926; includeSubDomains; preload";}}s:4:"body";s:1826:"{
"id": "cus_GdxjRFLvIpjEhb",
"object": "customer",
"address": null,
"balance": 0,
"created": 1580401447,
"currency": null,
"default_source": "card_1G6foIE8aQBUQ0bn4IaE94mD",
"delinquent": false,
"description": null,
"discount": null,
"email": "jane@mail.com",
"invoice_prefix": "FD3C61D6",
"invoice_settings": {
"custom_fields": null,
"default_payment_method": null,
"footer": null
},
"livemode": false,
"metadata": {
},
"name": null,
"phone": null,
"preferred_locales": [

],
"shipping": null,
"sources": {
"object": "list",
"data": [
{
"id": "card_1G6foIE8aQBUQ0bn4IaE94mD",
"object": "card",
"address_city": null,
"address_country": null,
"address_line1": null,
"address_line1_check": null,
"address_line2": null,
"address_state": null,
"address_zip": null,
"address_zip_check": null,
"brand": "MasterCard",
"country": "US",
"customer": "cus_GdxjRFLvIpjEhb",
"cvc_check": "pass",
"dynamic_last4": null,
"exp_month": 10,
"exp_year": 2020,
"fingerprint": "ZL8l4626GTYmv4wW",
"funding": "credit",
"last4": "4444",
"metadata": {
},
"name": "Jane Doe",
"tokenization_method": null
}
],
"has_more": false,
"total_count": 1,
"url": "/v1/customers/cus_GdxjRFLvIpjEhb/sources"
},
"subscriptions": {
"object": "list",
"data": [

],
"has_more": false,
"total_count": 0,
"url": "/v1/customers/cus_GdxjRFLvIpjEhb/subscriptions"
},
"tax_exempt": "none",
"tax_ids": {
"object": "list",
"data": [

],
"has_more": false,
"total_count": 0,
"url": "/v1/customers/cus_GdxjRFLvIpjEhb/tax_ids"
}
}
";s:4:"json";a:23:{s:2:"id";s:18:"cus_GdxjRFLvIpjEhb";s:6:"object";s:8:"customer";s:7:"address";N;s:7:"balance";i:0;s:7:"created";i:1580401447;s:8:"currency";N;s:14:"default_source";s:29:"card_1G6foIE8aQBUQ0bn4IaE94mD";s:10:"delinquent";b:0;s:11:"description";N;s:8:"discount";N;s:5:"email";s:13:"jane@mail.com";s:14:"invoice_prefix";s:8:"FD3C61D6";s:16:"invoice_settings";a:3:{s:13:"custom_fields";N;s:22:"default_payment_method";N;s:6:"footer";N;}s:8:"livemode";b:0;s:8:"metadata";a:0:{}s:4:"name";N;s:5:"phone";N;s:17:"preferred_locales";a:0:{}s:8:"shipping";N;s:7:"sources";a:5:{s:6:"object";s:4:"list";s:4:"data";a:1:{i:0;a:23:{s:2:"id";s:29:"card_1G6foIE8aQBUQ0bn4IaE94mD";s:6:"object";s:4:"card";s:12:"address_city";N;s:15:"address_country";N;s:13:"address_line1";N;s:19:"address_line1_check";N;s:13:"address_line2";N;s:13:"address_state";N;s:11:"address_zip";N;s:17:"address_zip_check";N;s:5:"brand";s:10:"MasterCard";s:7:"country";s:2:"US";s:8:"customer";s:18:"cus_GdxjRFLvIpjEhb";s:9:"cvc_check";s:4:"pass";s:13:"dynamic_last4";N;s:9:"exp_month";i:10;s:8:"exp_year";i:2020;s:11:"fingerprint";s:16:"ZL8l4626GTYmv4wW";s:7:"funding";s:6:"credit";s:5:"last4";s:4:"4444";s:8:"metadata";a:0:{}s:4:"name";s:8:"Jane Doe";s:19:"tokenization_method";N;}}s:8:"has_more";b:0;s:11:"total_count";i:1;s:3:"url";s:40:"/v1/customers/cus_GdxjRFLvIpjEhb/sources";}s:13:"subscriptions";a:5:{s:6:"object";s:4:"list";s:4:"data";a:0:{}s:8:"has_more";b:0;s:11:"total_count";i:0;s:3:"url";s:46:"/v1/customers/cus_GdxjRFLvIpjEhb/subscriptions";}s:10:"tax_exempt";s:4:"none";s:7:"tax_ids";a:5:{s:6:"object";s:4:"list";s:4:"data";a:0:{}s:8:"has_more";b:0;s:11:"total_count";i:0;s:3:"url";s:40:"/v1/customers/cus_GdxjRFLvIpjEhb/tax_ids";}}s:4:"code";i:200;}}',
                'user_id' => 2,
                'name' => 'Jane Doe',
                'gender' => 'male',
                'first_name' => 'Jane',
                'last_name' => 'Doe',
                'email' => 'jane@mail.com',
                'country_id' => 1,
                'country_code' => '123',
                'phone' => '123',
                'postcode' => NULL,
                'city' => NULL,
                'birth_date' => NULL,
                'address' => NULL,
                'address_2' => NULL,
                'passport' => NULL,
                'passport_expire' => NULL,
                'individual' => 1,
                'corporate_name' => NULL,
                'corporate_type' => NULL,
                'created_at' => '2020-01-30 16:24:11',
                'updated_at' => '2020-01-30 16:24:11',
            ),
        ));
        
        
    }
}