# gittha
URL Shortener


## Documentation

**Yet to be drafted**

## Prerequisites
- [php](https://php.net)
- [mysql](https://dev.mysql.com/)

## Installing
Open terminal, and run following command to clone repository.
```
git clone git@github.com:prashant-pokhriyal/gittha.git
cd gittha/
```

Start Server
```
php -S localhost:8000 -t public/
```
Open Browser and hit `localhost:8000`

If you want to change your **mysql credential**, then make changes in **config.php** under **include** dir.

You can setup database by running **setup.sh** file. It takes three arguments : 
username, password and database.
```
./setup.sh root root123 jai_radha_mata_db
```
Database schema is already provided under **sql dir**.
## Author

* **Prashant Pokhriyal**
