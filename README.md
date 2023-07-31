# Exchange Rate App

## Запуск проекту
1. Клонуйте репозиторій:
   git clone <url to your repo>

2. Перейдіть до директорії проекту:
   cd <project-directory>

3. Збудуйте Docker образ:
   docker build -t exchange-rate-app .

4. Запустіть Docker контейнер:
   docker run -p 8080:80 -d exchange-rate-app
