# Локальное разворачивание проекта

1. ```bash
   cp .env.override.example .env.override
   ```
2. Заполнить недостающие значения в **.env.override**
3. ```sh 
   make build
   ```
   (Выполняет `docker compose build` - дожидаемся когда все контейнера создадутся)
4. ```sh 
   make serve
   ```
   (Выполняет `docker compose up -d` - запускает контейнеры)
5. Вход в CLI контейнера PHP
   ```sh 
   make exec
   ```
6. **---> Дальше все команды вводить внутри CLI контейнера PHP (вошли в прошлом пункте)**
7. Устанавливаем библиотеки
   ```sh 
   composer install
   ```
8. Настройка XDebug на PHPStorm (опционально)
    1) Открываем окно настроек PHPStorm
    2) Открываем вкладку PHP -> Servers
    3) Создаем новый сервер с параметрами:
        1) **Name** => **Docker**;
        2) **Host** => **localhost**;
        3) **Port** => **4000**
        4) Ставим галочку “**Use path mappings**” => В появившейся таблице разворачиваем первую строчку **Project files** => Появится строка ведущая к проекту на твоем компьютере => Во втором столбце (**Absolute path**) этой строки вводим путь **/app**
    4) В PHPStorm устанавливаем Breakpoints где нам нужно, и ставим расширение "[Xdebug helper](https://www.jetbrains.com/help/phpstorm/browser-debugging-extensions.html)"
       Включаем расширение в браузере на нашей странице (нажать на иконку и выбрать режим "Debug") - Xdebug готов к использованию!


Сайт будет доступен по адресу:

* http://localhost:4000/

## Дополнительные доступные Makefile команды в локальном окружении

#### docker compose up
```sh 
make up
```
#### docker compose stop
```sh 
make stop
```
#### docker compose down
```sh 
make destroy
```
#### docker compose down -v
```sh 
make destroy
```