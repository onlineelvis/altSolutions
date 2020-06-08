## Installation
1. git clone
2. composer install
3. composer dump-autoload
4. php -S loaclhost:8080


## Create database 
1. Table with a name 'applications' and three columns id(int),email(varchar),sum(int).
2. Table with a name 'deals' and four columns id(int), application_id(int), deal_status(varchar), partner(char).


## Usage
1. click 'Open order form' then fill form.
2. click 'Partner request' then type company A or B to search for request('ask') and 'submit'.
3. click 'Send offer' to mail and change status to 'offer' in a database.


