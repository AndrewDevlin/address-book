# _Address Book_

#### By _**Andrew Devlin**_

## Description

_This application allows you to create list of contacts, add new contacts to that list, and delete the list._

## User Story
* User completes a form which creates a new contact.
* Upon submitting a new contact the user is taken to a confirmation page that shows the input information and provides a link back to the homepage.
* The homepage now displays a running list of all contacts and a delete all contacts button in addition to the new contact form.
* If the user choses to press the delete all contacts button the user will be taken to a confirmation page which links back to the homepage.

## Specifications

| Behavior                                              |   Input example   |  Output example |
|-------------------------------------------------------|:-----------------:|:---------------:|
| Instantiate new contact |Bob Smith (521)456-9758 41 Maple way Portland Or 12345  | Bob Smith (521)456-9758 41 Maple way Portland Or 12345 |
| add new contact to list of contacts | Jane Doe (433)789-6543 9 NE st Springfield WA 09876 | Bob Smith (521)456-9758 41 Maple way Portland Or 12345, Jane Doe (433)789-6543 9 NE st Springfield WA 09876 |
| delete all contacts | press Delete button | The contact display is empty |

## Setup/Installation Requirements

* See https://secure.php.net/ for details on installing _PHP_.  Note: PHP is typically already installed on Mac.
* See https://getcomposer.org for details on installing _composer_.
* Clone project
* From project root, run > `composer install --prefer-source --no-interaction`
* To run PHPUnit tests from root > `vendor/bin/phpunit tests`
* From web folder in project, Start PHP > `php -S localhost:8000`
* In web browser open `localhost:8000`

## Known Bugs

_There are no known bugs at this time._

## Support and contact details

_Please contact Andrew._

## Technologies Used
* PHP
* twig
* sylex

### License

*MIT*

Copyright (c) 2017 **Andrew Devlin**
