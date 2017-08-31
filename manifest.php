<?php
/*
Gibbon, Flexible & Open School System
Copyright (C) 2010, Ross Parker

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

//This file describes the module, including database tables

//Basic variables
$name='Logs' ; //The name of the variable as it appears to users. Needs to be unique to installation. Also the name of the folder that holds the unit.
$description='Module for Accessing Gibbon Logs' ; //Short text description
$entryURL='logs_access.php' ; //The landing page for the unit, used in the main menu
$type='Additional' ; //Do not change.
$category='' ; //The main menu area to place the module in
$version='1.0.0.0' ; //Verson number
$author='Xcobean' ; //Your name
$url='https://xcobean.org' ; //Your URL


//Action rows 


//One array per action
$actionRows[0]['name']='' ; //The name of the action (appears to user in the right hand side module menu)
$actionRows[0]['precedence']='0'; //If it is a grouped action, the precedence controls which is highest action in group
$actionRows[0]['category']='' ; //Optional: subgroups for the right hand side module menu
$actionRows[0]['description']='Allows admin to view Access Logs.'; //Text description
$actionRows[0]['URLList']='logs_access.php' ; //List of pages included in this action
$actionRows[0]['entryURL']='logs_access.php'; //The landing action for the page.
$actionRows[0]['entrySidebar']='Y' ;
$actionRows[0]['menuShow']='Y' ;
$actionRows[0]['defaultPermissionAdmin']='Y' ; //Default permission for built in role Admin
$actionRows[0]['defaultPermissionTeacher']='' ; //Default permission for built in role Teacher
$actionRows[0]['defaultPermissionStudent']='N' ; //Default permission for built in role Student
$actionRows[0]['defaultPermissionParent']='N' ; //Default permission for built in role Parent
$actionRows[0]['defaultPermissionSupport']='N' ; //Default permission for built in role Support
$actionRows[0]['categoryPermissionStaff']='Y' ; //Should this action be available to user roles in the Staff category?
$actionRows[0]['categoryPermissionStudent']='N' ; //Should this action be available to user roles in the Student category?
$actionRows[0]['categoryPermissionParent']='N' ; //Should this action be available to user roles in the Parent category?
$actionRows[0]['categoryPermissionOther']='N' ; //Should this action be available to user roles in the Other category?

//Hooks
$hooks[0]='' ; //Serialised array to create hook and set options. See Hooks documentation online.
?>
