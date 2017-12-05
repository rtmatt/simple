# Simple #

Simple multi-page site framework using [Laravel Mix](https://github.com/JeffreyWay/laravel-mix) and [PhRoute](https://github.com/joegreen0991/phroute). 

Installation
------------
Clone from repo

```  
git clone git@github.com:rtmatt/simple.git 
```

Install PHP Dependency

```  
composer install 
```

Install Front End Dependencies
```  
npm install 
```

Usage
------------
### Routing
Simple is geared toward projects with limited (read: no) functionality requirements out of the box. It's goal is to provide a Laravel Mix build process and simple routing outside of the Laravel Framework.
 
In order to create a new page, simply add a php file to the views directory with a name matching its intended url.
 
### Frontend
Add whatever files you want to the build process and the versioned assets are loaded into the main.php layout file. 



