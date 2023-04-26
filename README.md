
to run this project you should do the following:
1- update QUEUE_CONNECTION=database inside .env file
2- add your smtp credentials inside .env file 
3- execute these commands
php artisan queue:table
php artisan migrate
php artisan queue:work

------------------
I created 3 endpoints:
1: to retrieve all websites so I can get the website_id
curl --location --request GET 'http://127.0.0.1:8000/api/websites'

2: user subscribe
curl --location --request POST 'http://127.0.0.1:8000/api/websiteSubscribers' \
--header 'Accept: application/json' \
--form 'email_address="abusalem.islam1988@gmail.com"' \
--form 'website_id="1"'

3: add post
curl --location --request POST 'http://127.0.0.1:8001/api/websitePosts' \
--header 'Accept: application/json' \
--form 'title="title"' \
--form 'website_id="1"' \
--form 'description="descriptiondescriptiondescriptiondescriptiondescription"'


Finally, I attached exported postman collection if you want to test
please check subscription_platform.postman_collection.json
