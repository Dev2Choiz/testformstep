<?php

$envVar = new \Symfony\Component\HttpFoundation\ParameterBag(getenv() ?: []);

// db
$container->setParameter('locahost', 'container_formstep');
$container->setParameter('database_host', $envVar->get('CONTAINER_MYSQL_HOST', 'container_mysql'));
$container->setParameter('database_port', $envVar->get('CONTAINER_MYSQL_PORT', 3306));
$container->setParameter('database_user', $envVar->get('CONTAINER_MYSQL_USER', 'root'));
$container->setParameter('database_password', $envVar->get('CONTAINER_MYSQL_PASSWORD', 'secret'));
$container->setParameter('database_name', 'formstep');
$container->setParameter('database_path', '%kernel.root_dir%/data.sqlite');

// Memcached
$container->setParameter('memcached_host', $envVar->get('CONTAINER_MEMCACHED_HOST', $container->getParameter('locahost')));
$container->setParameter('memcached_port', $envVar->get('CONTAINER_MEMCACHED_PORT', 11211));
$container->setParameter('memcache_hosts', [
    array(
        'dns' => $container->getParameter('memcached_host'),
        'port' => $container->getParameter('memcached_port')
    )
]);

// swiftmailer
$container->setParameter('mailer_transport', 'smtp');
$container->setParameter('mailer_host', $container->getParameter('locahost'));
$container->setParameter('mailer_user', null);
$container->setParameter('mailer_password', null);
$container->setParameter('secret', 'ThisTokenIsNotSoSecretChangeIt');

