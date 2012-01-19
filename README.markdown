Super Simple Blog Engine
========================

Super Simple Blog Engine is an open-source project, that gives you the power to create your own blog in just 6 steps, simple as that.
I was tired of all the clutter in other engines, so i decided i should create my own.

<hr>

Instructions
------------

1. Download the latest version, here
2. Extract the contents to the host (using ftp or other)
3. Create the SQL tables needed for SSBE using "tables.sql" (using PHPMyAdmin or equal)
4. Edit "sql.php" with the created username, password and database name
5. Choose the php file where you want to show your posts
6. Insert <?php include("engine.php"); ?> in that file
7. Insert <?php posts(); ?> in that file where you want to show your post list
8. http://myblog.com/admin.php to manage your new blog
9. Start posting!

<hr>

Changelog
---------

1 - ssbe-0.1 <small>(2011-04-12)</small>

Welcome to the first release of SSBE.

This engine was written from scratch using beautiful HTML5, CSS3 and JQuery. Please enjoy it as much as i do!

Features:

- Post posts;
- Edit posts;
- "Delete" posts (post is never deleted, it status changes to 1 and is not showed anymore).

Next: 

- JQuery to change page on post's table in admin page; 
- JQuery to change page on show posts; page number showed dynamically.

Yes, a lot of work is to be done, but to use, is as simple as use the function posts() where you want to show your posts.
This is great. You have the ability to code your own blog and just use posts() to show your posts.

<br>
