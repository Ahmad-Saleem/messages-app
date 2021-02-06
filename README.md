# Messages App by Laravel 8.x
# Development env instructions

- cd messages-app
- ./vendor/bin/sail up
- open another tab on terminal
- ./vendor/bin/sail artisan migrate:fresh --seed
- ./vendor/bin/sail npm install
- ./vendor/bin/sail npm run watch 
- go to localhost/messages
- did not apply any validation
