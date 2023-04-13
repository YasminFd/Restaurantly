# Goal

Restaurantly is a restaurant CMS. 

The webiste would introduce the restaurant to its customers, from the menu it offers, to its location and various other services that the customer can benefit from through the website such as reservation options, forums, contacts or even online ordering. 

This application is developed to be a dynamic website, offering the admin easy access to manage and update his website’s content while managing customers activity all in one place

# Installation

Upon downloading/cloning the project, go to the root rolder and double click on the **install.bat file**

This file is a bash file that will 
1.  Install composer
2.  Install npm
3.  Migrate the database
4.  Seed the database
5.  Start npm dev
6.  Start php artisan serve
7.  Go to the localhost

**Note: The default user is root**

    If you want to change the user:
    Go to env.example and change the DB_USERNAME & DB_PASSWORD variables

# Customer Interface

    user1: Jana Al Sabeh
    email: jana@gmail.com
    password: 123123123A@

---

    user2: Yasmine Fadel
    email: yasmine@gmail.com
    password: 123123123A@

# MailTrap Sign In

Inorder to view the emails that would be sent, enter the url and choose log in option with the following credentials.

    url: https://mailtrap.io
    email: restaurantlyfood@gmail.com
    password: RestaurantlyFood101

# Authentication

Options are found under accounts drop-down in header

## Login

Use one of the credentials above, or register a new account

## Register

-   email must be unique max 255 characters
-   required length 10 characters, at least one capital letter, one special character, one digit

# Pages

## Home Page

This represents the main page of the customers. It includes:

-   **Hero section**: An introduction and small video about Restaurantly
-   **Testimonial secton**: retrieves data from testimonials database and diplays them

-   **Gallery section**: loop over 'images/gallery' in public directory and displays the images

-   **Cheffs section**: loop over 'images/chefs' in public directory and displays the images

## Menu Page

To reach this page either click on menu from navigation bar or click on our menu button in the hero section. It includes:

-   **List** of each category under it all meals belonging to this category.
-   **Offer Section**: Shows meals of type offer
-   **Average rating**: Under each meal item

_On click of each meal, takes us to 'menu/show' page to view meal details_

## Show Meal

To reach this page click on the name of any meal in menu page

-   **Details Section**: abot the meal clicked (image, name, description, price)
-   **Review form**: form for the customer to enter his/her review.

    (_no need to be authenticated to enter a review to stay anonymous_)

-   **Review section**: Ratings made by users.
-   **Add to cart form**: Customer can add the quantity of the meal to his/her cart
    _only authenticated users can add items to cart to proceed with their order_

## Cart

When logged in, cart option will appear in the navbar

-   **Cart meal**: displays all the meal added to cart with the details (quantity & total)

    _if the cart is empty, an order cannot be placed_

-   **Clear cart**: empties the cart

-   **Edit meal**: redirects back to show meal with quantity chosen before to edit.

-   **Remove meal**: removes meal from the cart and refreshes the view.

-   **Order Form**: enter address, name, branch and phone number and submit

On submit:

-   An Email will be sent

_check mailtrap inbox an email will be send to the users email with receipt info_

    Subject: Receipt
    Body: Items ordered with meal name,unit price, quantity and total price

Redirects you to home page and a notification is received in notification drop-down in the header.

## Notifications

When logged in, notifications option will appear in header

Two types of notifications for customers:

-   Order placed successfully
-   Order status has been changed _when admin edits the order status_

If user has received an notifications an active bell will appear next to the notification.

## Reservations

Reached when clicking on book a table option in the header or home page hero section

**No need to be logged in to make a reservation**

Two type of reservations:

-   **Book a table**: choose date & time, guest number, name, phone, table,email and branch
-   **Book for event**: choose date & time, number of guests,message for breif event description,and branch

**CONSTRAINTS**

-   **Table reservations**:

    -   Date should be within 7 days of current date
    -   Time should be from 5 till 11 pm (opening hours)
    -   Can't reserve a tabe if an event is already reserved on this date.

-   **Event reservations**: Date should be a minimum of 1 week from the current date

## Contact Us

Reached by clicking on contact option in header. It includes:

-   **Branches section**: dispay all available branches of the restaurant each with url-location, address, phone number and name.

-   **Contact Form**: Information of name, email,subject, and message to send email.

Check maitrap inbox two emails will be present:

1.  **Customer service mail**: send all info filled in the form to address restaurantly@gmail
2.  **Success Message**: informing the user that the message was send successfully.

After sending, and alert appears to infrom the user about successfully sending the message and redirects him to the same page.

**Note: for unstable internet connection, an error might occur.**

# Admin Pages

## Login

    user: admin
    email: admin@gmail.com
    password: 123123123A@

## Register

Acounts are created manually by the admin by adding a new employee in the admin users page



## Index page:
Shows unread notification for this employee, with the ability to
-   mark one notification as read
-   mark all notifications as read

## Notifications Page:

Shows all notifications received with options to delete any or all of them 

Types of notifications:
-   Reservation made
-   Order made
-   User registrations

## Testimonials:

Lists all testimonials 

They are added manually by the admin to showcase on home page.

Options include: create, edit, or delete

## Categories:
List all categories 

Options include: create, edit, or delete

## Meals:

Lists all meals with their information about which category they belong to, price, description and image.

Options include: create, edit, or delete

## Branches:

Lists contact information for all branches saved

Options include: create, edit, or delete

## Users:

Lists all registered accounts to the website and differentiate their type whether they are for customers or employees.

-   For customers, it can show all order history made by the specified account.
-   Employees can't register themselves, admin has to create their account manually.

Options include: delete 

## Orders:

Lists all orders made by the customers with informations filled about them
-   can choose to view list of meal items of each order with quantity and price
-   admin can edit the status of the order.
    *This automatically sends notification to the user account to keep track of it*
-   Delete order
## Reviews:

Lists all reviews added by customers with the meal it was written for starting from the most recent one

Options include: delete unwanted reviews.

## Tables:

Lists tables in the restaurant for reservation purposes, each with the status, guest number, table name and branch it belongs too.

Options include: create, edit, or delete

## Reservations:

Lists all reservations both for tables or events

Options include: create, edit, or delete

---

**All above operations are supported by forms to fill with adequate values concerning the editing and creation of values. With each operation an alert would be shown to confirm success, danger, or warning**
