<?php

use Illuminate\Database\Seeder;

class PaymentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('payments')->delete();
        
        \DB::table('payments')->insert(array (
            0 => 
            array (
                'id' => 1,
                'customer_id' => 1,
                'booking_id' => 1,
                'amount' => 258,
                'currency' => 'USD',
                'stripe' => 'O:13:"Stripe\\Charge":8:{s:14:"saveWithParent";b:0;s:8:"' . "\0" . '*' . "\0" . '_opts";O:26:"Stripe\\Util\\RequestOptions":3:{s:7:"headers";a:0:{}s:6:"apiKey";s:42:"sk_test_0FqT15BgPnEBLdzXYU5nvtd7005RBoQ3YB";s:7:"apiBase";N;}s:18:"' . "\0" . '*' . "\0" . '_originalValues";a:44:{s:2:"id";s:27:"ch_1G6foKE8aQBUQ0bnigCsyW4z";s:6:"object";s:6:"charge";s:6:"amount";i:25773;s:15:"amount_refunded";i:0;s:11:"application";N;s:15:"application_fee";N;s:22:"application_fee_amount";N;s:19:"balance_transaction";s:28:"txn_1G6foKE8aQBUQ0bnAtjkfTJz";s:15:"billing_details";a:4:{s:7:"address";a:6:{s:4:"city";N;s:7:"country";N;s:5:"line1";N;s:5:"line2";N;s:11:"postal_code";N;s:5:"state";N;}s:5:"email";N;s:4:"name";s:8:"Jane Doe";s:5:"phone";N;}s:8:"captured";b:1;s:7:"created";i:1580401448;s:8:"currency";s:3:"usd";s:8:"customer";s:18:"cus_GdxjRFLvIpjEhb";s:11:"description";N;s:11:"destination";N;s:7:"dispute";N;s:8:"disputed";b:0;s:12:"failure_code";N;s:15:"failure_message";N;s:13:"fraud_details";a:0:{}s:7:"invoice";N;s:8:"livemode";b:0;s:8:"metadata";a:0:{}s:12:"on_behalf_of";N;s:5:"order";N;s:7:"outcome";a:6:{s:14:"network_status";s:19:"approved_by_network";s:6:"reason";N;s:10:"risk_level";s:6:"normal";s:10:"risk_score";i:29;s:14:"seller_message";s:17:"Payment complete.";s:4:"type";s:10:"authorized";}s:4:"paid";b:1;s:14:"payment_intent";N;s:14:"payment_method";s:29:"card_1G6foIE8aQBUQ0bn4IaE94mD";s:22:"payment_method_details";a:2:{s:4:"card";a:12:{s:5:"brand";s:10:"mastercard";s:6:"checks";a:3:{s:19:"address_line1_check";N;s:25:"address_postal_code_check";N;s:9:"cvc_check";s:4:"pass";}s:7:"country";s:2:"US";s:9:"exp_month";i:10;s:8:"exp_year";i:2020;s:11:"fingerprint";s:16:"ZL8l4626GTYmv4wW";s:7:"funding";s:6:"credit";s:12:"installments";N;s:5:"last4";s:4:"4444";s:7:"network";s:10:"mastercard";s:14:"three_d_secure";N;s:6:"wallet";N;}s:4:"type";s:4:"card";}s:13:"receipt_email";N;s:14:"receipt_number";N;s:11:"receipt_url";s:118:"https://pay.stripe.com/receipts/acct_1FmahkE8aQBUQ0bn/ch_1G6foKE8aQBUQ0bnigCsyW4z/rcpt_Gdxj30DxGKArx7bijtW4LKvNTLhMwGf";s:8:"refunded";b:0;s:7:"refunds";a:5:{s:6:"object";s:4:"list";s:4:"data";a:0:{}s:8:"has_more";b:0;s:11:"total_count";i:0;s:3:"url";s:47:"/v1/charges/ch_1G6foKE8aQBUQ0bnigCsyW4z/refunds";}s:6:"review";N;s:8:"shipping";N;s:6:"source";a:23:{s:2:"id";s:29:"card_1G6foIE8aQBUQ0bn4IaE94mD";s:6:"object";s:4:"card";s:12:"address_city";N;s:15:"address_country";N;s:13:"address_line1";N;s:19:"address_line1_check";N;s:13:"address_line2";N;s:13:"address_state";N;s:11:"address_zip";N;s:17:"address_zip_check";N;s:5:"brand";s:10:"MasterCard";s:7:"country";s:2:"US";s:8:"customer";s:18:"cus_GdxjRFLvIpjEhb";s:9:"cvc_check";s:4:"pass";s:13:"dynamic_last4";N;s:9:"exp_month";i:10;s:8:"exp_year";i:2020;s:11:"fingerprint";s:16:"ZL8l4626GTYmv4wW";s:7:"funding";s:6:"credit";s:5:"last4";s:4:"4444";s:8:"metadata";a:0:{}s:4:"name";s:8:"Jane Doe";s:19:"tokenization_method";N;}s:15:"source_transfer";N;s:20:"statement_descriptor";N;s:27:"statement_descriptor_suffix";N;s:6:"status";s:9:"succeeded";s:13:"transfer_data";N;s:14:"transfer_group";N;}s:10:"' . "\0" . '*' . "\0" . '_values";a:44:{s:2:"id";s:27:"ch_1G6foKE8aQBUQ0bnigCsyW4z";s:6:"object";s:6:"charge";s:6:"amount";i:25773;s:15:"amount_refunded";i:0;s:11:"application";N;s:15:"application_fee";N;s:22:"application_fee_amount";N;s:19:"balance_transaction";s:28:"txn_1G6foKE8aQBUQ0bnAtjkfTJz";s:15:"billing_details";O:19:"Stripe\\StripeObject":7:{s:8:"' . "\0" . '*' . "\0" . '_opts";r:3;s:18:"' . "\0" . '*' . "\0" . '_originalValues";a:4:{s:7:"address";a:6:{s:4:"city";N;s:7:"country";N;s:5:"line1";N;s:5:"line2";N;s:11:"postal_code";N;s:5:"state";N;}s:5:"email";N;s:4:"name";s:8:"Jane Doe";s:5:"phone";N;}s:10:"' . "\0" . '*' . "\0" . '_values";a:4:{s:7:"address";O:19:"Stripe\\StripeObject":7:{s:8:"' . "\0" . '*' . "\0" . '_opts";r:3;s:18:"' . "\0" . '*' . "\0" . '_originalValues";a:6:{s:4:"city";N;s:7:"country";N;s:5:"line1";N;s:5:"line2";N;s:11:"postal_code";N;s:5:"state";N;}s:10:"' . "\0" . '*' . "\0" . '_values";a:6:{s:4:"city";N;s:7:"country";N;s:5:"line1";N;s:5:"line2";N;s:11:"postal_code";N;s:5:"state";N;}s:17:"' . "\0" . '*' . "\0" . '_unsavedValues";O:15:"Stripe\\Util\\Set":1:{s:22:"' . "\0" . 'Stripe\\Util\\Set' . "\0" . '_elts";a:0:{}}s:19:"' . "\0" . '*' . "\0" . '_transientValues";O:15:"Stripe\\Util\\Set":1:{s:22:"' . "\0" . 'Stripe\\Util\\Set' . "\0" . '_elts";a:0:{}}s:19:"' . "\0" . '*' . "\0" . '_retrieveOptions";a:0:{}s:16:"' . "\0" . '*' . "\0" . '_lastResponse";N;}s:5:"email";N;s:4:"name";s:8:"Jane Doe";s:5:"phone";N;}s:17:"' . "\0" . '*' . "\0" . '_unsavedValues";O:15:"Stripe\\Util\\Set":1:{s:22:"' . "\0" . 'Stripe\\Util\\Set' . "\0" . '_elts";a:0:{}}s:19:"' . "\0" . '*' . "\0" . '_transientValues";O:15:"Stripe\\Util\\Set":1:{s:22:"' . "\0" . 'Stripe\\Util\\Set' . "\0" . '_elts";a:0:{}}s:19:"' . "\0" . '*' . "\0" . '_retrieveOptions";a:0:{}s:16:"' . "\0" . '*' . "\0" . '_lastResponse";N;}s:8:"captured";b:1;s:7:"created";i:1580401448;s:8:"currency";s:3:"usd";s:8:"customer";s:18:"cus_GdxjRFLvIpjEhb";s:11:"description";N;s:11:"destination";N;s:7:"dispute";N;s:8:"disputed";b:0;s:12:"failure_code";N;s:15:"failure_message";N;s:13:"fraud_details";a:0:{}s:7:"invoice";N;s:8:"livemode";b:0;s:8:"metadata";O:19:"Stripe\\StripeObject":7:{s:8:"' . "\0" . '*' . "\0" . '_opts";r:3;s:18:"' . "\0" . '*' . "\0" . '_originalValues";a:0:{}s:10:"' . "\0" . '*' . "\0" . '_values";a:0:{}s:17:"' . "\0" . '*' . "\0" . '_unsavedValues";O:15:"Stripe\\Util\\Set":1:{s:22:"' . "\0" . 'Stripe\\Util\\Set' . "\0" . '_elts";a:0:{}}s:19:"' . "\0" . '*' . "\0" . '_transientValues";O:15:"Stripe\\Util\\Set":1:{s:22:"' . "\0" . 'Stripe\\Util\\Set' . "\0" . '_elts";a:0:{}}s:19:"' . "\0" . '*' . "\0" . '_retrieveOptions";a:0:{}s:16:"' . "\0" . '*' . "\0" . '_lastResponse";N;}s:12:"on_behalf_of";N;s:5:"order";N;s:7:"outcome";O:19:"Stripe\\StripeObject":7:{s:8:"' . "\0" . '*' . "\0" . '_opts";r:3;s:18:"' . "\0" . '*' . "\0" . '_originalValues";a:6:{s:14:"network_status";s:19:"approved_by_network";s:6:"reason";N;s:10:"risk_level";s:6:"normal";s:10:"risk_score";i:29;s:14:"seller_message";s:17:"Payment complete.";s:4:"type";s:10:"authorized";}s:10:"' . "\0" . '*' . "\0" . '_values";a:6:{s:14:"network_status";s:19:"approved_by_network";s:6:"reason";N;s:10:"risk_level";s:6:"normal";s:10:"risk_score";i:29;s:14:"seller_message";s:17:"Payment complete.";s:4:"type";s:10:"authorized";}s:17:"' . "\0" . '*' . "\0" . '_unsavedValues";O:15:"Stripe\\Util\\Set":1:{s:22:"' . "\0" . 'Stripe\\Util\\Set' . "\0" . '_elts";a:0:{}}s:19:"' . "\0" . '*' . "\0" . '_transientValues";O:15:"Stripe\\Util\\Set":1:{s:22:"' . "\0" . 'Stripe\\Util\\Set' . "\0" . '_elts";a:0:{}}s:19:"' . "\0" . '*' . "\0" . '_retrieveOptions";a:0:{}s:16:"' . "\0" . '*' . "\0" . '_lastResponse";N;}s:4:"paid";b:1;s:14:"payment_intent";N;s:14:"payment_method";s:29:"card_1G6foIE8aQBUQ0bn4IaE94mD";s:22:"payment_method_details";O:19:"Stripe\\StripeObject":7:{s:8:"' . "\0" . '*' . "\0" . '_opts";r:3;s:18:"' . "\0" . '*' . "\0" . '_originalValues";a:2:{s:4:"card";a:12:{s:5:"brand";s:10:"mastercard";s:6:"checks";a:3:{s:19:"address_line1_check";N;s:25:"address_postal_code_check";N;s:9:"cvc_check";s:4:"pass";}s:7:"country";s:2:"US";s:9:"exp_month";i:10;s:8:"exp_year";i:2020;s:11:"fingerprint";s:16:"ZL8l4626GTYmv4wW";s:7:"funding";s:6:"credit";s:12:"installments";N;s:5:"last4";s:4:"4444";s:7:"network";s:10:"mastercard";s:14:"three_d_secure";N;s:6:"wallet";N;}s:4:"type";s:4:"card";}s:10:"' . "\0" . '*' . "\0" . '_values";a:2:{s:4:"card";O:19:"Stripe\\StripeObject":7:{s:8:"' . "\0" . '*' . "\0" . '_opts";r:3;s:18:"' . "\0" . '*' . "\0" . '_originalValues";a:12:{s:5:"brand";s:10:"mastercard";s:6:"checks";a:3:{s:19:"address_line1_check";N;s:25:"address_postal_code_check";N;s:9:"cvc_check";s:4:"pass";}s:7:"country";s:2:"US";s:9:"exp_month";i:10;s:8:"exp_year";i:2020;s:11:"fingerprint";s:16:"ZL8l4626GTYmv4wW";s:7:"funding";s:6:"credit";s:12:"installments";N;s:5:"last4";s:4:"4444";s:7:"network";s:10:"mastercard";s:14:"three_d_secure";N;s:6:"wallet";N;}s:10:"' . "\0" . '*' . "\0" . '_values";a:12:{s:5:"brand";s:10:"mastercard";s:6:"checks";O:19:"Stripe\\StripeObject":7:{s:8:"' . "\0" . '*' . "\0" . '_opts";r:3;s:18:"' . "\0" . '*' . "\0" . '_originalValues";a:3:{s:19:"address_line1_check";N;s:25:"address_postal_code_check";N;s:9:"cvc_check";s:4:"pass";}s:10:"' . "\0" . '*' . "\0" . '_values";a:3:{s:19:"address_line1_check";N;s:25:"address_postal_code_check";N;s:9:"cvc_check";s:4:"pass";}s:17:"' . "\0" . '*' . "\0" . '_unsavedValues";O:15:"Stripe\\Util\\Set":1:{s:22:"' . "\0" . 'Stripe\\Util\\Set' . "\0" . '_elts";a:0:{}}s:19:"' . "\0" . '*' . "\0" . '_transientValues";O:15:"Stripe\\Util\\Set":1:{s:22:"' . "\0" . 'Stripe\\Util\\Set' . "\0" . '_elts";a:0:{}}s:19:"' . "\0" . '*' . "\0" . '_retrieveOptions";a:0:{}s:16:"' . "\0" . '*' . "\0" . '_lastResponse";N;}s:7:"country";s:2:"US";s:9:"exp_month";i:10;s:8:"exp_year";i:2020;s:11:"fingerprint";s:16:"ZL8l4626GTYmv4wW";s:7:"funding";s:6:"credit";s:12:"installments";N;s:5:"last4";s:4:"4444";s:7:"network";s:10:"mastercard";s:14:"three_d_secure";N;s:6:"wallet";N;}s:17:"' . "\0" . '*' . "\0" . '_unsavedValues";O:15:"Stripe\\Util\\Set":1:{s:22:"' . "\0" . 'Stripe\\Util\\Set' . "\0" . '_elts";a:0:{}}s:19:"' . "\0" . '*' . "\0" . '_transientValues";O:15:"Stripe\\Util\\Set":1:{s:22:"' . "\0" . 'Stripe\\Util\\Set' . "\0" . '_elts";a:0:{}}s:19:"' . "\0" . '*' . "\0" . '_retrieveOptions";a:0:{}s:16:"' . "\0" . '*' . "\0" . '_lastResponse";N;}s:4:"type";s:4:"card";}s:17:"' . "\0" . '*' . "\0" . '_unsavedValues";O:15:"Stripe\\Util\\Set":1:{s:22:"' . "\0" . 'Stripe\\Util\\Set' . "\0" . '_elts";a:0:{}}s:19:"' . "\0" . '*' . "\0" . '_transientValues";O:15:"Stripe\\Util\\Set":1:{s:22:"' . "\0" . 'Stripe\\Util\\Set' . "\0" . '_elts";a:0:{}}s:19:"' . "\0" . '*' . "\0" . '_retrieveOptions";a:0:{}s:16:"' . "\0" . '*' . "\0" . '_lastResponse";N;}s:13:"receipt_email";N;s:14:"receipt_number";N;s:11:"receipt_url";s:118:"https://pay.stripe.com/receipts/acct_1FmahkE8aQBUQ0bn/ch_1G6foKE8aQBUQ0bnigCsyW4z/rcpt_Gdxj30DxGKArx7bijtW4LKvNTLhMwGf";s:8:"refunded";b:0;s:7:"refunds";O:17:"Stripe\\Collection":8:{s:10:"' . "\0" . '*' . "\0" . 'filters";a:0:{}s:8:"' . "\0" . '*' . "\0" . '_opts";r:3;s:18:"' . "\0" . '*' . "\0" . '_originalValues";a:5:{s:6:"object";s:4:"list";s:4:"data";a:0:{}s:8:"has_more";b:0;s:11:"total_count";i:0;s:3:"url";s:47:"/v1/charges/ch_1G6foKE8aQBUQ0bnigCsyW4z/refunds";}s:10:"' . "\0" . '*' . "\0" . '_values";a:5:{s:6:"object";s:4:"list";s:4:"data";a:0:{}s:8:"has_more";b:0;s:11:"total_count";i:0;s:3:"url";s:47:"/v1/charges/ch_1G6foKE8aQBUQ0bnigCsyW4z/refunds";}s:17:"' . "\0" . '*' . "\0" . '_unsavedValues";O:15:"Stripe\\Util\\Set":1:{s:22:"' . "\0" . 'Stripe\\Util\\Set' . "\0" . '_elts";a:0:{}}s:19:"' . "\0" . '*' . "\0" . '_transientValues";O:15:"Stripe\\Util\\Set":1:{s:22:"' . "\0" . 'Stripe\\Util\\Set' . "\0" . '_elts";a:0:{}}s:19:"' . "\0" . '*' . "\0" . '_retrieveOptions";a:0:{}s:16:"' . "\0" . '*' . "\0" . '_lastResponse";N;}s:6:"review";N;s:8:"shipping";N;s:6:"source";O:11:"Stripe\\Card":8:{s:14:"saveWithParent";b:0;s:8:"' . "\0" . '*' . "\0" . '_opts";r:3;s:18:"' . "\0" . '*' . "\0" . '_originalValues";a:23:{s:2:"id";s:29:"card_1G6foIE8aQBUQ0bn4IaE94mD";s:6:"object";s:4:"card";s:12:"address_city";N;s:15:"address_country";N;s:13:"address_line1";N;s:19:"address_line1_check";N;s:13:"address_line2";N;s:13:"address_state";N;s:11:"address_zip";N;s:17:"address_zip_check";N;s:5:"brand";s:10:"MasterCard";s:7:"country";s:2:"US";s:8:"customer";s:18:"cus_GdxjRFLvIpjEhb";s:9:"cvc_check";s:4:"pass";s:13:"dynamic_last4";N;s:9:"exp_month";i:10;s:8:"exp_year";i:2020;s:11:"fingerprint";s:16:"ZL8l4626GTYmv4wW";s:7:"funding";s:6:"credit";s:5:"last4";s:4:"4444";s:8:"metadata";a:0:{}s:4:"name";s:8:"Jane Doe";s:19:"tokenization_method";N;}s:10:"' . "\0" . '*' . "\0" . '_values";a:23:{s:2:"id";s:29:"card_1G6foIE8aQBUQ0bn4IaE94mD";s:6:"object";s:4:"card";s:12:"address_city";N;s:15:"address_country";N;s:13:"address_line1";N;s:19:"address_line1_check";N;s:13:"address_line2";N;s:13:"address_state";N;s:11:"address_zip";N;s:17:"address_zip_check";N;s:5:"brand";s:10:"MasterCard";s:7:"country";s:2:"US";s:8:"customer";s:18:"cus_GdxjRFLvIpjEhb";s:9:"cvc_check";s:4:"pass";s:13:"dynamic_last4";N;s:9:"exp_month";i:10;s:8:"exp_year";i:2020;s:11:"fingerprint";s:16:"ZL8l4626GTYmv4wW";s:7:"funding";s:6:"credit";s:5:"last4";s:4:"4444";s:8:"metadata";O:19:"Stripe\\StripeObject":7:{s:8:"' . "\0" . '*' . "\0" . '_opts";r:3;s:18:"' . "\0" . '*' . "\0" . '_originalValues";a:0:{}s:10:"' . "\0" . '*' . "\0" . '_values";a:0:{}s:17:"' . "\0" . '*' . "\0" . '_unsavedValues";O:15:"Stripe\\Util\\Set":1:{s:22:"' . "\0" . 'Stripe\\Util\\Set' . "\0" . '_elts";a:0:{}}s:19:"' . "\0" . '*' . "\0" . '_transientValues";O:15:"Stripe\\Util\\Set":1:{s:22:"' . "\0" . 'Stripe\\Util\\Set' . "\0" . '_elts";a:0:{}}s:19:"' . "\0" . '*' . "\0" . '_retrieveOptions";a:0:{}s:16:"' . "\0" . '*' . "\0" . '_lastResponse";N;}s:4:"name";s:8:"Jane Doe";s:19:"tokenization_method";N;}s:17:"' . "\0" . '*' . "\0" . '_unsavedValues";O:15:"Stripe\\Util\\Set":1:{s:22:"' . "\0" . 'Stripe\\Util\\Set' . "\0" . '_elts";a:0:{}}s:19:"' . "\0" . '*' . "\0" . '_transientValues";O:15:"Stripe\\Util\\Set":1:{s:22:"' . "\0" . 'Stripe\\Util\\Set' . "\0" . '_elts";a:0:{}}s:19:"' . "\0" . '*' . "\0" . '_retrieveOptions";a:0:{}s:16:"' . "\0" . '*' . "\0" . '_lastResponse";N;}s:15:"source_transfer";N;s:20:"statement_descriptor";N;s:27:"statement_descriptor_suffix";N;s:6:"status";s:9:"succeeded";s:13:"transfer_data";N;s:14:"transfer_group";N;}s:17:"' . "\0" . '*' . "\0" . '_unsavedValues";O:15:"Stripe\\Util\\Set":1:{s:22:"' . "\0" . 'Stripe\\Util\\Set' . "\0" . '_elts";a:0:{}}s:19:"' . "\0" . '*' . "\0" . '_transientValues";O:15:"Stripe\\Util\\Set":1:{s:22:"' . "\0" . 'Stripe\\Util\\Set' . "\0" . '_elts";a:0:{}}s:19:"' . "\0" . '*' . "\0" . '_retrieveOptions";a:0:{}s:16:"' . "\0" . '*' . "\0" . '_lastResponse";O:18:"Stripe\\ApiResponse":4:{s:7:"headers";O:32:"Stripe\\Util\\CaseInsensitiveArray":1:{s:43:"' . "\0" . 'Stripe\\Util\\CaseInsensitiveArray' . "\0" . 'container";a:13:{s:6:"server";s:5:"nginx";s:4:"date";s:29:"Thu, 30 Jan 2020 16:24:08 GMT";s:12:"content-type";s:16:"application/json";s:14:"content-length";s:4:"2917";s:32:"access-control-allow-credentials";s:4:"true";s:28:"access-control-allow-methods";s:32:"GET, POST, HEAD, OPTIONS, DELETE";s:27:"access-control-allow-origin";s:1:"*";s:29:"access-control-expose-headers";s:104:"Request-Id, Stripe-Manage-Version, X-Stripe-External-Auth-Required, X-Stripe-Privileged-Session-Required";s:22:"access-control-max-age";s:3:"300";s:13:"cache-control";s:18:"no-cache, no-store";s:10:"request-id";s:18:"req_WdHdTSReJ397XM";s:14:"stripe-version";s:10:"2019-12-03";s:25:"strict-transport-security";s:44:"max-age=31556926; includeSubDomains; preload";}}s:4:"body";s:2917:"{
"id": "ch_1G6foKE8aQBUQ0bnigCsyW4z",
"object": "charge",
"amount": 25773,
"amount_refunded": 0,
"application": null,
"application_fee": null,
"application_fee_amount": null,
"balance_transaction": "txn_1G6foKE8aQBUQ0bnAtjkfTJz",
"billing_details": {
"address": {
"city": null,
"country": null,
"line1": null,
"line2": null,
"postal_code": null,
"state": null
},
"email": null,
"name": "Jane Doe",
"phone": null
},
"captured": true,
"created": 1580401448,
"currency": "usd",
"customer": "cus_GdxjRFLvIpjEhb",
"description": null,
"destination": null,
"dispute": null,
"disputed": false,
"failure_code": null,
"failure_message": null,
"fraud_details": {
},
"invoice": null,
"livemode": false,
"metadata": {
},
"on_behalf_of": null,
"order": null,
"outcome": {
"network_status": "approved_by_network",
"reason": null,
"risk_level": "normal",
"risk_score": 29,
"seller_message": "Payment complete.",
"type": "authorized"
},
"paid": true,
"payment_intent": null,
"payment_method": "card_1G6foIE8aQBUQ0bn4IaE94mD",
"payment_method_details": {
"card": {
"brand": "mastercard",
"checks": {
"address_line1_check": null,
"address_postal_code_check": null,
"cvc_check": "pass"
},
"country": "US",
"exp_month": 10,
"exp_year": 2020,
"fingerprint": "ZL8l4626GTYmv4wW",
"funding": "credit",
"installments": null,
"last4": "4444",
"network": "mastercard",
"three_d_secure": null,
"wallet": null
},
"type": "card"
},
"receipt_email": null,
"receipt_number": null,
"receipt_url": "https://pay.stripe.com/receipts/acct_1FmahkE8aQBUQ0bn/ch_1G6foKE8aQBUQ0bnigCsyW4z/rcpt_Gdxj30DxGKArx7bijtW4LKvNTLhMwGf",
"refunded": false,
"refunds": {
"object": "list",
"data": [

],
"has_more": false,
"total_count": 0,
"url": "/v1/charges/ch_1G6foKE8aQBUQ0bnigCsyW4z/refunds"
},
"review": null,
"shipping": null,
"source": {
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
},
"source_transfer": null,
"statement_descriptor": null,
"statement_descriptor_suffix": null,
"status": "succeeded",
"transfer_data": null,
"transfer_group": null
}
";s:4:"json";a:44:{s:2:"id";s:27:"ch_1G6foKE8aQBUQ0bnigCsyW4z";s:6:"object";s:6:"charge";s:6:"amount";i:25773;s:15:"amount_refunded";i:0;s:11:"application";N;s:15:"application_fee";N;s:22:"application_fee_amount";N;s:19:"balance_transaction";s:28:"txn_1G6foKE8aQBUQ0bnAtjkfTJz";s:15:"billing_details";a:4:{s:7:"address";a:6:{s:4:"city";N;s:7:"country";N;s:5:"line1";N;s:5:"line2";N;s:11:"postal_code";N;s:5:"state";N;}s:5:"email";N;s:4:"name";s:8:"Jane Doe";s:5:"phone";N;}s:8:"captured";b:1;s:7:"created";i:1580401448;s:8:"currency";s:3:"usd";s:8:"customer";s:18:"cus_GdxjRFLvIpjEhb";s:11:"description";N;s:11:"destination";N;s:7:"dispute";N;s:8:"disputed";b:0;s:12:"failure_code";N;s:15:"failure_message";N;s:13:"fraud_details";a:0:{}s:7:"invoice";N;s:8:"livemode";b:0;s:8:"metadata";a:0:{}s:12:"on_behalf_of";N;s:5:"order";N;s:7:"outcome";a:6:{s:14:"network_status";s:19:"approved_by_network";s:6:"reason";N;s:10:"risk_level";s:6:"normal";s:10:"risk_score";i:29;s:14:"seller_message";s:17:"Payment complete.";s:4:"type";s:10:"authorized";}s:4:"paid";b:1;s:14:"payment_intent";N;s:14:"payment_method";s:29:"card_1G6foIE8aQBUQ0bn4IaE94mD";s:22:"payment_method_details";a:2:{s:4:"card";a:12:{s:5:"brand";s:10:"mastercard";s:6:"checks";a:3:{s:19:"address_line1_check";N;s:25:"address_postal_code_check";N;s:9:"cvc_check";s:4:"pass";}s:7:"country";s:2:"US";s:9:"exp_month";i:10;s:8:"exp_year";i:2020;s:11:"fingerprint";s:16:"ZL8l4626GTYmv4wW";s:7:"funding";s:6:"credit";s:12:"installments";N;s:5:"last4";s:4:"4444";s:7:"network";s:10:"mastercard";s:14:"three_d_secure";N;s:6:"wallet";N;}s:4:"type";s:4:"card";}s:13:"receipt_email";N;s:14:"receipt_number";N;s:11:"receipt_url";s:118:"https://pay.stripe.com/receipts/acct_1FmahkE8aQBUQ0bn/ch_1G6foKE8aQBUQ0bnigCsyW4z/rcpt_Gdxj30DxGKArx7bijtW4LKvNTLhMwGf";s:8:"refunded";b:0;s:7:"refunds";a:5:{s:6:"object";s:4:"list";s:4:"data";a:0:{}s:8:"has_more";b:0;s:11:"total_count";i:0;s:3:"url";s:47:"/v1/charges/ch_1G6foKE8aQBUQ0bnigCsyW4z/refunds";}s:6:"review";N;s:8:"shipping";N;s:6:"source";a:23:{s:2:"id";s:29:"card_1G6foIE8aQBUQ0bn4IaE94mD";s:6:"object";s:4:"card";s:12:"address_city";N;s:15:"address_country";N;s:13:"address_line1";N;s:19:"address_line1_check";N;s:13:"address_line2";N;s:13:"address_state";N;s:11:"address_zip";N;s:17:"address_zip_check";N;s:5:"brand";s:10:"MasterCard";s:7:"country";s:2:"US";s:8:"customer";s:18:"cus_GdxjRFLvIpjEhb";s:9:"cvc_check";s:4:"pass";s:13:"dynamic_last4";N;s:9:"exp_month";i:10;s:8:"exp_year";i:2020;s:11:"fingerprint";s:16:"ZL8l4626GTYmv4wW";s:7:"funding";s:6:"credit";s:5:"last4";s:4:"4444";s:8:"metadata";a:0:{}s:4:"name";s:8:"Jane Doe";s:19:"tokenization_method";N;}s:15:"source_transfer";N;s:20:"statement_descriptor";N;s:27:"statement_descriptor_suffix";N;s:6:"status";s:9:"succeeded";s:13:"transfer_data";N;s:14:"transfer_group";N;}s:4:"code";i:200;}}',
                'created_at' => '2020-01-30 16:24:15',
                'updated_at' => '2020-01-30 16:24:15',
            ),
        ));
        
        
    }
}