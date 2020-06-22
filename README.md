<p align="center">Returns product recommendations depending on current weather.</p>
<p align="center"><a href="https://medium.com/@infinitypaul">Creator</a> | <a href="">Getting Started</a></p>

<p>&nbsp;</p>

## Download Instruction

1. Clone the project.

```
git clone https://github.com/infinitypaul/recommendations.git projectname
```


2. Install dependencies via composer.

```
composer install 
```

3. Migrate and seed the Database.

```
php artisan migrate --seed
```

4. Run php server.

```
php artisan serve
```

> You can also install the Application via Docker:

## Pre-requisites

- Docker running on the host machine.
- Docker compose running on the host machine.

1. Clone the project.

```
git clone https://github.com/infinitypaul/findyourservive.git projectname
```

2. Run the testrig.sh file on the Project Root Folder on your terminal/Command Prompt, This script does everything you need to run your this project. It starts up the servers, ensures the database is booted, installs dependencies, runs database migrations, and runs database seeds. These services are exposed to your computer on the standard ports, then you can access your website on http:localhost

## Troubleshooting

- Port number might be already in use, change from `80` to another number in your `docker-compose.yml` file.
- If you have any other issues, [report them](https://github.com/infinitypaul/infinitypaul/issues).

## Api Usage

> Using Get Request:

```
GET http://localhost/api/v1/products/recommended/:CITY
```

* http://localhost/ is your Base Url, You Can Replace it with yours
* CITY are the cities name in Lithuania eg: akuotai, You can get the available cities here https://api.meteo.lt/v1/places  

And Viola, Right In Front Of You Will Be The City Name, The Current Weather Condition Of The City And List Of Recommended Products You Can Buy From, Make Sure You Buy One.

Enjoy!!


