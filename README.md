
Для развертывания проекта необходимо: 
  - установить на компьютер PHP и MySQL, лучше воспользоваться пакетом https://sourceforge.net/projects/wtnmp/
  - установить и запустить сервер.
  - создать базу данных исползуя WinNMP
  - установить composer https://getcomposer.org/
  - клонировать репозитори Github и в корневой папке проэкта выполнить команду: composer install
  - в файл .env подключить базу данных.
  - выполнить команду: php artisan migrate
  - выполнить команду: php artisan serve
  - в браузере переходим по адресу http://127.0.0.1:8000/heroes
  - ГОТОВО.
