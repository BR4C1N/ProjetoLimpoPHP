# Passo a Passo para Inicializar o Projeto

**1 - Comando para Subir o Docker**<br>
docker-compose up<br><br>
**2 - Comandos para Acessar o Container via Terminal**<br>
docker ps<br>
docker exec -it CONTAINER-ID bash (**Atenção:** CONTAINER-ID é referente ao PHP-Apache)<br><br>
**3 - Comando para Ir para a Pasta "source"**<br>
cd source<br><br>
**4 - Comando para Executar o Instalador do Composer**<br>
composer install<br><br>
**5 - Comando para Executar os Testes**<br>
vendor/bin/phpunit<br><br><br>
**Comandos para apenas realizar os testes (Após a instalação)**<br><br>
1 - docker ps<br>
2 - docker exec -it CONTAINER-ID bash (**CONTAINER-ID referente ao PHP-Apache**)<br>
3 - cd source<br>
4 - vendor/bin/phpunit<br><br><br>
**Link de Acesso Local**<br>
http://localhost:8000/source/src/
