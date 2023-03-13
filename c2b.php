<?php
//Enter Your API KEY

require 'vendor/autoload.php';

use Openpesa\SDK\Pesa;

// Intiate with credentials
$pesa = new Pesa([
            'api_key' => 'YOUR_API_KEY',
            'public_key' => 'MIICIjANBgkqhkiG9w0BAQEFAAOCAg8AMIICCgKCAgEArv9yxA69XQKBo24BaF/D+fvlqmGdYjqLQ5WtNBb5tquqGvAvG3WMFETVUSow/LizQalxj2ElMVrUmzu5mGGkxK08bWEXF7a1DEvtVJs6nppIlFJc2SnrU14AOrIrB28ogm58JjAl5BOQawOXD5dfSk7MaAA82pVHoIqEu0FxA8BOKU+RGTihRU+ptw1j4bsAJYiPbSX6i71gfPvwHPYamM0bfI4CmlsUUR3KvCG24rB6FNPcRBhM3jDuv8ae2kC33w9hEq8qNB55uw51vK7hyXoAa+U7IqP1y6nBdlN25gkxEA8yrsl1678cspeXr+3ciRyqoRgj9RD/ONbJhhxFvt1cLBh+qwK2eqISfBb06eRnNeC71oBokDm3zyCnkOtMDGl7IvnMfZfEPFCfg5QgJVk1msPpRvQxmEsrX9MQRyFVzgy2CWNIb7c+jPapyrNwoUbANlN8adU1m6yOuoX7F49x+OjiG2se0EJ6nafeKUXw/+hiJZvELUYgzKUtMAZVTNZfT8jjb58j8GVtuS+6TM2AutbejaCV84ZK58E2CRJqhmjQibEUO6KPdD7oTlEkFy52Y1uOOBXgYpqMzufNPmfdqqqSM4dU70PO8ogyKGiLAIxCetMjjm6FCMEA3Kc8K0Ig7/XtFm9By6VxTJK1Mg36TlHaZKP6VzVLXMtesJECAwEAAQ==',
            'client_options' => [],
        ],'sandbox');

// Setup the transaction
$data = [
    'input_Amount' => '10000',
    'input_Country' => 'TZN',
    'input_Currency' => 'TZS',
    'input_CustomerMSISDN' => '255766303775',
    'input_ServiceProviderCode' => '000000',
    'input_ThirdPartyConversationID' => 'rerekf',
    'input_TransactionReference' => rand(),
    'input_PurchasedItemsDesc' => 'Test Two Item'
];

// Execute
$result = $pesa->c2b($data);

// Get results

    $ResponseCode = $result['output_ResponseCode'];
    $OutputDec = $result['output_ResponseDesc'];
    $OutputTransactionId = $result['output_TransactionID'];
    $OutputConversationId = $result['output_ConversationID'];
    $OuputThirdPartyConversationId = $result['output_ThirdPartyConversationID'];

?>
