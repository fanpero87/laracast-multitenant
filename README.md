# About Teamsy

Teamsy is a single database multi tenant application shell built for the Laracasts series "Single Database Multi Tenancy".

[URL for the Original project](https://github.com/iAmKevinMcKee/teamsy)

### Steps of the project

1. Create a new porject
   `laravel new laracast-multitenant`

1. Install the [TALL](https://github.com/laravel-frontend-presets/tall)(Tailwind CSS, Alpine.js, Laravel and Livewire) stack with authentication.

1. Install Laravel debgudbar

### Important Considerations

-   **A user should only be able to see data that belongs to his or her tenant.** For that, we have to implement a [Global Scope](https://laravel.com/docs/8.x/eloquent#global-scopes). We will add "tenant_id" as global scope and added to the session. With this we make sure that only the correct user sees it's own data.
    Here are some steps on how to do it:

    -   Create a Scope Folder inside the App folder
    -   Create a new TenantScope file
    -   Add a booted method on the Users Model (this part was replace by a Trait)
    -   run `php artisan make:listener SetTenantIdInSession` and add the 'tenant_id' to it
    -   Add this onto the EventServiceProvider.php the listener that was created before

-   **Data should be segmented by tenant in the database.** To make sure we use the Global Scope 'tenant\*id' on all Model tables when they got created, we could use [Laravel Stubs](https://laravel.com/docs/8.x/artisan#stub-customization). Here are some steps:

    -   run `php artisan stub:publish`
    -   add `$table->unsignedBigInteger('tenant_id')->index();` to the migration.create.stub file inside the stubs folder. This will add this line into the tables migration.
    -   We could add the "tenant_id" to the booted function on every Model (check Department model) or we could add it into the model.stub file. with this when we create a model, we will see it's 'tenant_id" right at that time.
    -   Add the 'tenant_id' into the factory.stub file. So when we run `php artisan make:model NewModel -mf` we will have a migration and factory with the 'tenant_id'

-   **A user should only be able to create data in his or her tenant.** For this, we could use the Create Model event set up on the previous step.
    -   All of these logic was put on a Trait. Check 'BelongsToTenat.php' the Stubs and models are using the Trait now

**Notes:**

-There was a chage to the phpunit.xml file. We changed the DB CONNECTION and DB_DATABASE
-Tere are some tests to make sure we are accomplishing these considerations

### S3 storage

For this project, I created two S3 buckets on AWS. I also created a user that have acess to those buckets.
We need to add the info into the .env file and make a change to the filesystems.php file to be able to use both buckets.
Run:
`composer require league/flysystem-aws-s3-v3`
If you have probklems then, there is a laracast article with a fix:
`php -d memory_limit=1 /usr/local/bin/composer require league/flysystem-aws-s3-v3`

We need to add some "Read-Only" permission to the public bucket so that the files can be visible over the Internet
Use this [link](https://docs.aws.amazon.com/AmazonS3/latest/userguide/example-bucket-policies.html) as guide.

Published the livewire config file and changed the location forthe temporary files from "local" to "s3"
To make this work, you need to add a policy for the private bucket as well.
Here is a [link](https://docs.aws.amazon.com/AmazonS3/latest/userguide/ManageCorsUsing.html) as guide.
