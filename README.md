SymfonyWithMongo
================

Symfony 2.4 with Doctrine mongo bundle

The idea here is to show some example about how to create
array of hashes in mongodb using the shit bundle for Symfony

Steps
 * git clone git@github.com:danielsan/SymfonyWithMongo.git
 * cd SymfonyWithMongo/
 * composer.phar install (install composer before running this command)
 * php app/console server:run (if you have php 5.4 or later)
 * go to this url http://localhost:8000/app_dev.php/create_a_document
 * then open your mongo console: `mongo test_database`
 * and un this query: `db.Product.findOne()`

And you should see somthing like that:
```JSON
{
	"_id" : ObjectId("52f559898453a4b6168b4567"),
	"name" : "A Foo Bar",
	"price" : 19.99,
	"tags" : [
		{
			"_id" : ObjectId("52f559898453a4b6168b4568"),
			"tag" : "lala",
			"type" : "tag"
		},
		{
			"_id" : ObjectId("52f559898453a4b6168b4569"),
			"tag" : "lele",
			"type" : "tag"
		}
	]
}
```
