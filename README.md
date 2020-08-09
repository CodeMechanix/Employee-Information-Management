## Requirements:

Create a grid/table with pagination so that we can  bulk edit the employee information from the grid/table.  Inline editing options for each and every grid/table cell/column is necessary ( that means after clicking any grid/table cell/column, the user will be able to edit the value of the cell/column right at the cell/column location without loading any modal or new page). After editing any cell/column, value will be automatically updated in the grid/table. Updating cell/column value won't trigger any database update operation by ajax call or something like this. Instead,  there will be a button for updating all the edited employee's information to the database in a single http call (ie ajax).  

## Technical stack

- PHP (Laravel)
- MySQL
- JQuery
- Ajax
- HTML, CSS, Bootstrap

## Instructions:

- Clone this GitHub repository into your local directory
- Go to project directory (GitHub repository)
- Create a database(local db). And added db name into env file
- Migrate with Seed (php artisan migrate:fresh --seed)
- Finally Run the Project (php artisan serve)

## Demo of Project:

### All Employee List
![All Employee List](https://github.com/CodeMechanix/Employee-Information-Management/blob/master/images/list.PNG)

### Edit Employee Data
![Edit Employee Data](https://github.com/CodeMechanix/Employee-Information-Management/blob/master/images/edit.PNG)

### Delete Employee from List
![Delete Employee Data](https://github.com/CodeMechanix/Employee-Information-Management/blob/master/images/list.PNG)



