# Passo a Passo para Inicializar o Projeto

**1 - Subir o Docker**<br>
docker-compose up<br><br>
**2 - Comandos para acessar o docker via terminal**<br>
docker ps<br>
docker exec -it {CONTAINER ID} bash<br><br>
**3 - Ir para a pasta "source"**<br>
cd source<br><br>
**4 - Executar o instalador do composer**<br>
composer install<br><br>
**5 - Executar os Testes**<br>
vendor/bin/phpunit
