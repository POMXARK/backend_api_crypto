- chmod -R 777 storage/logs/;
- php artisan config:cache

### demo-deploy (all in one)
- docker build -t backend_api_crypto .
- docker run -d -p 8000:80 --name backend_api_crypto backend_api_crypto




### запуск
- docker-compose up -d --build


### загрузить данные (postgresql)
- docker exec -it backend_api_crypto_postgres psql -U postgres -d backend_api_crypto
- \copy bittrex__e_t_h_u_s_d_ds FROM 'BTC-2017min.csv' DELIMITER ',' CSV HEADER;
