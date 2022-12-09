Cria e inicia os containers:
sudo docker-compose up -d --build 

Verificar se o container está rodando:
sudo docker-compose ps

Iniciar/parar containers:
sudo docker-compose stop
sudo docker-compose start

Cria atalho para acessar container:
alias dr="sudo docker-compose exec app bash"

Acessar container:
dr

Dentro do container instalar dependencias:
composer install
npm install ol
npm install
sudo apt-get install gdal-bin

Para gravar uma base da dados gis no postgres usando ogr2ogr:
ogr2ogr -f PostgreSQL PG:"dbname='nomeDB' host='postgres' port='5432' user='usuarioaPostgres' password='senhaPostgres'" nomeDoArquivo.geojson

Dentro do conatainer:
php artisan serve
npm run dev


