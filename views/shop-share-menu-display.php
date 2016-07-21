<?php
// Include the client library

require_once SHARESHOP__PLUGIN_DIR . 'lib/woocommerce-api.php';

$consumer_key = 'ck_fd52f8ecffe2db833df358e8906250b7165a0f01'; // Add your own Consumer Key here
$consumer_secret = 'cs_4e8d4a87b6a76a92e9250e966016ac48e55db4a9'; // Add your own Consumer Secret here
$store_url = 'http://localhost/woocommerce/'; // Add the home URL to the store you want to connect to here

// Initialize the class

$options = array(
    'ssl_verify'      => false,
);

try {

    $client = new WC_API_Client( $store_url, $consumer_key, $consumer_secret, $options );

} catch ( WC_API_Client_Exception $e ) {

    echo $e->getMessage() . PHP_EOL;
    echo $e->getCode() . PHP_EOL;

    if ( $e instanceof WC_API_Client_HTTP_Exception ) {

        print_r( $e->get_request() );
        print_r( $e->get_response() );
    }
}
$data = [
	'title' => "Preminum Title Th 4",
    // 'name' => 'Premium Quality Th 4',
    'type' => 'simple',
    'regular_price' => '21.99',
    'description' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.',
    'short_description' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.',
    'categories' => [
        [
            'id'=> 9
        ],
        [
            'id'=> 14
        ]
    ],
    'images' => [
        [
            'src' => 'http://demo.woothemes.com/woocommerce/wp-content/uploads/sites/56/2013/06/T_2_front.jpg',
            'position' => 0
        ],
        [
            'src' => 'http://demo.woothemes.com/woocommerce/wp-content/uploads/sites/56/2013/06/T_2_back.jpg',
            'position' => 1
        ]
    ]
];

print_r($client->products->create($data));
?>