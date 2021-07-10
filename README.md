# Laravel Installation with Craftable

* [Laravel](https://laravel.com/)

* [Craftable](https://getcraftable.com/)

## Setup Instructions
Requirements: Docker Installation

1. Copy the files to a local directory & open terminal for the root directory.
2. Run the following to grab the vendor directory & install the vendor files: 
```
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/opt \
    -w /opt \
    laravelsail/php80-composer:latest \
    composer install --ignore-platform-reqs
```
3. Run to startup the docker image & do the initial installation.
```
alias sail = 'bash vendor/bin/sail'
sail up
sail artisan craftable:install
```
4. Store the password generated from the last line above. Email will be: `administrator@brackets.sk`
5. Run for npm build:
```
sail npm install && npm run dev
```
6. load up http://localhost
