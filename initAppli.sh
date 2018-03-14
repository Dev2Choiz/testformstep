#!/bin/bash

echo "XDEBUG"
docker-compose exec  --user formstep container_formstep bash -c 'export XDEBUG_CONFIG="remote_host=192.168.0.15 idekey=PHPSTORM"'
docker-compose exec  --user formstep container_formstep bash -c 'export PHP_IDE_CONFIG="serverName=192.168.0.26"'

echo "SUPRESSION VENDOR CACHE COMPOSER.LOCK"
docker-compose exec --user formstep container_formstep bash -c 'php -v'
#docker-compose exec --user formstep container_formstep bash -c 'rm -rf /var/www/html/formstep/composer.lock'
#docker-compose exec --user formstep container_formstep bash -c 'rm -rf /var/www/html/formstep/vendor'
docker-compose exec --user formstep container_formstep bash -c 'rm -rf /var/www/html/formstep/var/cache'
docker-compose exec --user formstep container_formstep bash -c 'rm -rf /var/www/html/formstep/var/logs'
docker-compose exec --user formstep container_formstep bash -c 'rm -rf /var/www/html/formstep/var/sessions'

echo "COMPOSER INSTALL"
#docker-compose exec  --user formstep container_formstep bash -c '/usr/local/bin/composer install'

#echo "DOCTRINE : CREATE DB"
docker-compose exec  --user formstep container_formstep bash -c 'php /var/www/html/formstep/app/console doctrine:database:create'
echo "DOCTRINE : CREATE SCHEMA"
docker-compose exec  --user formstep container_formstep bash -c 'php /var/www/html/formstep/app/console doctrine:schema:update --dump-sql'
docker-compose exec  --user formstep container_formstep bash -c 'php /var/www/html/formstep/app/console doctrine:schema:update --force'
echo "DOCTRINE : FIXTURE"
docker-compose exec  --user formstep container_formstep bash -c 'php /var/www/html/formstep/app/console doctrine:fixtures:load --no-interaction'



exit 0
