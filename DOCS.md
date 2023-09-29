---
title: backend_api_crypto
description: "backend_api_crypto"
imgUrl: "../../images/project-php.png"
category: php
url: backend_api_crypto
priority: 0
---

# backend_api_crypto

Тестовое задание Laravel
Laravel v8.83.27 (PHP v8.1.2-1ubuntu2.11)

тестовое задание от компании Bits.media
https://khabarovsk.hh.ru/vacancy/52569557?hhtmFrom=chat

Dataset: (https://www.kaggle.com/datasets/prasoonkottarathil/btcinusd)

(
    в планах добавить поддержку:
    https://www.kaggle.com/datasets/sudalairajkumar/cryptocurrencypricehistory
    https://datahub.io/cryptocurrency/ethereum#data
)

Выберите любой датасет по любой криптовалюте за год

Используя датасет напишите страницу со следующими функционалом:



1. Пользователь должен иметь возможность узнать, сколько раз криптовалюта торговалась выше или ниже заданной цены. Цену и период времени, пользователь задает сам на странице.

2. Должны быть видны полезные значения статистики по выбранным данным (на выбор программиста).

3. Визуализация должна быть удобной, на ваш выбор. Принимаются любые обоснованные варианты.



Датасет выгрузить и хранить в MySQL

Код страницы должен быть написан чисто, без лишних библиотек (в случае использования фреймворков). Данные на странице должны обновляться аяксом при изменении периода пользователем

На выходе сама страница и описание откуда были взяты данные, а также доступ к таблицам базы и коду. 

frontend: https://github.com/POMXARK/vue_2_cripto

Пути развития:
1. Снять лимит на загрузку (получать данные чанками)
2. Перевести проект на lumen
3. использовать opcache
4. написать конфиги для mysql
