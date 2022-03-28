#!/bin/bash
sudo apt-get update
sudo apt-get install Docker 
sudo apt-get install docker-compose
mkdir -p webbase/websites
mkdir -p webbase/mysqldata
mkdir conf2
touch webbase/websites/index.html
echo '<html><body><h1> This is a test page</h1></body></html>' > webbase/websites/index.html
touch webbase/websites/index.htm
echo '<html><body><h1> This is a test page</h1></body></html>' > webbase/websites/index.htm
wget -O webbase/sqldat.sql https://raw.githubusercontent.com/anon0453/rf236/main/SQL/sqldat.sql
wget -O docker-compose.yaml https://raw.githubusercontent.com/anon0453/rf236/main/docker-compose.yaml
wget -O default.conf.template https://raw.githubusercontent.com/anon0453/rf236/main/default.conf.template
wget -O webbase/websites/index.php https://raw.githubusercontent.com/anon0453/rf236/main/PHP_App/index.php
wget -O phpDockerfile https://raw.githubusercontent.com/anon0453/rf236/main/PHP_App/phpDockerfile
wget -O Dockerfile https://raw.githubusercontent.com/anon0453/rf236/main/NGINX/Dockerfile
wget -O nginx.conf https://raw.githubusercontent.com/anon0453/rf236/main/NGINX/nginx.conf
sudo docker-compose up -d
