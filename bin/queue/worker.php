#!/usr/bin/env php
<?php
require __DIR__ . '/../../web/bootstrap.php';

$app = new \TastPHP\App\AppKernel();
$client = $app['queue']->connect();
$client->watch($app['tube']);

while ($job = $client->reserve()) {
    $received = json_decode($job->getData(), true);

    if (!empty($received)) {
        $app['logger']::info("queue job done!", $received);
        $client->delete($job);
    }
}
