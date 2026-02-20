<?php return array(
    'root' => array(
        'name' => 'blesta/stripe_payments',
        'pretty_version' => 'dev-master',
        'version' => 'dev-master',
        'reference' => 'c2f353c2a26fac43145cd8f8e63be5743be6f76e',
        'type' => 'blesta-gateway-merchant',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'blesta/composer-installer' => array(
            'pretty_version' => '1.1.0',
            'version' => '1.1.0.0',
            'reference' => 'f0529f892e4cb0db5e9e949031965f212c7da269',
            'type' => 'composer-installer',
            'install_path' => __DIR__ . '/../blesta/composer-installer',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'blesta/stripe_payments' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'reference' => 'c2f353c2a26fac43145cd8f8e63be5743be6f76e',
            'type' => 'blesta-gateway-merchant',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'composer/installers' => array(
            'pretty_version' => 'v1.12.0',
            'version' => '1.12.0.0',
            'reference' => 'd20a64ed3c94748397ff5973488761b22f6d3f19',
            'type' => 'composer-plugin',
            'install_path' => __DIR__ . '/./installers',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'roundcube/plugin-installer' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
        'shama/baton' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
        'stripe/stripe-php' => array(
            'pretty_version' => 'v19.3.0',
            'version' => '19.3.0.0',
            'reference' => '462272ae7560ee29bb891763fd0967d5a77784e5',
            'type' => 'library',
            'install_path' => __DIR__ . '/../stripe/stripe-php',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
    ),
);
