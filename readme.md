<p align="center">

  <img width="300" height="300" src='https://i.imgur.com/cZfh98m.png'/>

</p>

<h1 align="center">ZincPHP</h1>
<h2 align="center">A Micro Framework to build REST API for PHP</h2>

### Please note that this project was migrated from [rakibtg/zincphp](https://github.com/rakibtg/ZincPHP) to [getzincphp/zincphp](https://github.com/getzincphp/zincphp). 

## Development status: 
 - Under active development
 - Not ready to be used in production
 - A side project
 - Working on the documentations 😱
 - For any discussion about this framework please direct message me on Twitter at [@rakibtg](https://www.twitter.com/rakibtg "Twitter profile") or mail me at rakibtg<•at•>gmail<•dot•>com 
---

<p align="center">
<img src='https://i.imgur.com/4SK3Znp.png'/>
</p>

ZincPHP is a lightweight micro framework for PHP, specially created for REST-ful architecture.

The mission of ZincPHP is to be a simple, reliable, minimal and fast micro-framework. ZincPHP has everything you will need to make a complete REST-ful API backend server.

# Completely New Concept
ZincPHP introduces `block`, which is a combination of Route, Controller and Model!

Assuming that we are going to create a new block for blog posts CRUD, so we will create a block for blog using the ZincCLI command,
```
php zinc make:block blog --all
```
By running the above command, Zinc CLI will create a directory called `blog` inside the `blocks` directory and as we have passed the `--all` argument parameter with the command it will add individual files for general requests.

**Example:**
```
blocks/
-- blog/
-- -- get.blog.php     // Receives GET requests
-- -- post.blog.php    // Receives POST requests
-- -- put.blog.php     // Receives PUT requests
-- -- delete.blog.php  // Receives DELETE requests
```
Now the route path(API endpoint) for this block would be:
```
/blog/
```
Here is how the block will response to each requests:

- A GET request to `/blog/` will redirect to the `/blocks/blog/get.blog.php` file.
- A POST request to `/blog/` will redirect to the `/blocks/blog/post.blog.php` file.
- A PUT request to `/blog/` will redirect to the `/blocks/blog/put.blog.php` file.
- A DELETE request to `/blog/` will redirect to the `/blocks/blog/delete.blog.php` file.

If we want a custom API for example we want to highlight the API version in the path, we can achive this by creating the block with the expected version no. like this:
```
php zinc make:block api/v1/blog --all
```
This would create the block file inside the `/blocks/api/v1/blog/` and the API endpoint would be `/api/v1/blog/`

## Default included features are
- Command line interface for managing the framework
- ZincPHP Block to handle business logic of the app
- Database Migration
- Database Seeder
- An awesome validator
- Helper Functions
- Built-in JWT Auth
- Dynamic routing
- Database Query Builder
- CORS Management
- User defined libraries
- Configurable
- Built in test framework for REST API's
- Extendable; Has ~1,77,900 [packages](https://packagist.org/explore/ "Go to packagist")! 😉 Install them VIA composer and start using any package.

# Quick Start Guide

Want to test the Alpha version of ZincPHP? Great, let's do it.

- Use composer to create a new project,
  ```
  composer create-project getzincphp/zincphp "mybackend" "^v0.14"
  ```

- Change the directory
  ```
  cd mybackend
  ```

- Install all dependencies.
  ```
  composer install
  ```
- Create an environment configuration file.
  ```
  php zinc env:new
  ```
  This above command would create the required environment file for you.
- Now lets make a block
  ```
  php zinc make:block welcome --get
  ```
  Once you run this above command a block file will be created at `/myApp/blocks/welcome/get.welcome.php`
- Go to the block file and for our testing purpose we will just send a "Hello World" response. To send a response we will use the `\App::response()` method in the block file in its `response()` life cycle. Example:
  ```
  <?php
    namespace ZincPHP\Blocks\index;

    class GetIndex extends \ZincPHP\block\ZincBlock {

      public function response() {

        return \App::response('Hello World)->pretty();
      }
    }
  ```
- Now start the ZincPHP development server
  ```
  php zinc serve
  ```
  By default the server will use the `8585` port, but you can use custom port using this argument `--port 2020` as well as the host `--host 0.0.0.0`

- Now go to this url in any web browser: `http://127.0.0.1:8585/welcome`

- You would have a beautiful JSON response as the output on the browser!
- There is a lot more that we can do, but for now here is a simple tips, if you would like to take an input then use this: `\App::input( 'username' )`
- More detail and documentations would be live very soon :)

## Development Status
ZincPHP is still in development, maintained and developed by [@rakibtg](https://www.twitter.com/rakibtg "Twitter profile").

To use the development version of ZincPHP, please clone the repo and send love with your pull requests. ❤️