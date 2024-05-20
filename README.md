Project Structure

app/Http/Controllers/BookController.php
app/Http/Controllers/StoreController.php
Summary of Controller Methods

BookController

index(): Returns all books with their respective stores.
store(Request $request): Creates a new book after validation.
show(Book $book): Displays details of a specific book and its stores.
update(Request $request, Book $book): Updates an existing book after validation.
destroy(Book $book): Deletes a specific book.
StoreController

index(): Returns all stores with their respective books.
store(Request $request): Creates a new store after validation.
show(Store $store): Displays details of a specific store and its books.
update(Request $request, Store $store): Updates an existing store after validation.
destroy(Store $store): Deletes a specific store.


--------------
Assessment Test - Backend

This task aims to assess the candidates' knowledge and go through some areas of features of the framework that we use in our projects. Test implementation is free as long as the essential objectives are met.

The task must be referenced in its own repository and delivered through GitHub public repo.

The proposed exercise is to create a simple API interface, with a CRUD for an object model with the characteristics below:


Features
Authentication	Login with password
	
CRUDS	Book Registry
GET, POST, PUT and DELETE

Store Registry
GET, POST, PUT and DELETE

Book and Store Relationship

Fields	Book
-	Name= required
-	ISBN = only numbers
-	Value = decimal

Store
-	Name
-	Address
-	Active

Book Store – relationship multiple books to multiple stores

Requirements:
-	CRUD must be in JSON
-	User Login and Logout

Some suggestions:
-	Use the framework's basic User model for authentication
-	Use DDD (Domain Driven Design)

Tools:
- Laravel 8+
- Mysql/Sqlite
- PHP 8
