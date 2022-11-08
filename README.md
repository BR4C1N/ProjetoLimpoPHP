<h1>Passo a Passo para Inicializar o Projeto</h1>

<br>

<h4>Subir o Docker</h4>
<b>docker-compose up</b>

<br>

<h4>Comandos para acessar o docker via terminal</h4>
<b>docker ps<b>
<b>docker exec -it {CONTAINER ID} bash</b>

<br>

<h4>Ir para a pasta "source"</h4>
<b>cd source</b>

<br>

<h4>Executar o instalador do composer</h4>
<b>composer install</b>

<br>

<h4>Executar os testes</h4>
<b>vendor/bin/phpunit</b>
