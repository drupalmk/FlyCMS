<?php defined('SYSPATH') or die('No direct script access.'); ?>

2010-05-15 12:57:13 --- ERROR: Kohana_Request_Exception [ 0 ]: Unable to find a route to match the URI: admin/kohana/menus/edit/7 ~ SYSPATH/classes\kohana\request.php [ 580 ]
2010-05-15 13:15:05 --- ERROR: ReflectionException [ -1 ]: Class controller_admin_kohana does not exist ~ SYSPATH/classes\kohana\request.php [ 865 ]
2010-05-15 13:17:07 --- ERROR: ReflectionException [ -1 ]: Class controller_admin_kohana does not exist ~ SYSPATH/classes\kohana\request.php [ 865 ]
2010-05-15 13:17:12 --- ERROR: ReflectionException [ -1 ]: Class controller_admin_kohana does not exist ~ SYSPATH/classes\kohana\request.php [ 865 ]
2010-05-15 13:17:34 --- ERROR: ReflectionException [ -1 ]: Class controller_admin_kohana does not exist ~ SYSPATH/classes\kohana\request.php [ 865 ]
2010-05-15 13:17:43 --- ERROR: ReflectionException [ 0 ]: Method action_remove does not exist ~ SYSPATH/classes\kohana\request.php [ 883 ]
2010-05-15 13:19:17 --- ERROR: ReflectionException [ 0 ]: Method action_remove does not exist ~ SYSPATH/classes\kohana\request.php [ 883 ]
2010-05-15 14:42:53 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes\controller\admin\menus.php [ 21 ]
2010-05-15 14:43:12 --- ERROR: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes\controller\admin\menus.php [ 21 ]
2010-05-15 14:43:57 --- ERROR: ReflectionException [ 0 ]: Method action_edit does not exist ~ SYSPATH/classes\kohana\request.php [ 883 ]
2010-05-15 14:54:20 --- ERROR: Kohana_View_Exception [ 0 ]: The requested view menu/groupslist could not be found ~ SYSPATH/classes\kohana\view.php [ 215 ]
2010-05-15 15:06:30 --- ERROR: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH/views\menu\main_frm.php [ 53 ]
2010-05-15 15:08:01 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Admin_Menus::$item ~ APPPATH/classes\controller\admin\menus.php [ 109 ]
2010-05-15 15:13:34 --- ERROR: ErrorException [ 64 ]: Cannot redeclare Controller_Admin_Menus::action_edit() ~ APPPATH/classes\controller\admin\menus.php [ 27 ]
2010-05-15 15:22:32 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '1' for key 'PRIMARY' [ INSERT INTO `menuitems` (`name`, `type`, `link`, `title`, `menugroup_id`, `parent_id`, `order`, `id`, `scope`, `lvl`, `lft`, `rgt`) VALUES ('Orzeł', '0', 'Orzeł', 'orzeł', '1', NULL, '0', '1', 1, 1, 1, 2) ] ~ MODPATH/database\classes\kohana\database\mysql.php [ 173 ]
2010-05-15 15:26:23 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '1' for key 'PRIMARY' [ INSERT INTO `menuitems` (`name`, `type`, `link`, `title`, `menugroup_id`, `parent_id`, `order`, `id`, `scope`, `lvl`, `lft`, `rgt`) VALUES ('Orzeł', '0', 'Orzeł', 'orzeł', '1', NULL, '0', '1', 1, 1, 1, 2) ] ~ MODPATH/database\classes\kohana\database\mysql.php [ 173 ]
2010-05-15 15:30:48 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '1' for key 'PRIMARY' [ INSERT INTO `menuitems` (`name`, `type`, `link`, `title`, `menugroup_id`, `parent_id`, `order`, `id`, `scope`, `lvl`, `lft`, `rgt`) VALUES ('Orzeł ćwirek', '0', 'Orzeł', 'orzeł', '1', NULL, '0', '1', 1, 1, 1, 2) ] ~ MODPATH/database\classes\kohana\database\mysql.php [ 173 ]
2010-05-15 15:32:06 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '1' for key 'PRIMARY' [ INSERT INTO `menuitems` (`name`, `type`, `link`, `title`, `menugroup_id`, `parent_id`, `order`, `id`, `scope`, `lvl`, `lft`, `rgt`) VALUES ('Orzeł ćwirek', '0', 'Orzeł', 'orzeł', '1', NULL, '0', '1', 1, 1, 1, 2) ] ~ MODPATH/database\classes\kohana\database\mysql.php [ 173 ]
2010-05-15 15:34:19 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '1' for key 'PRIMARY' [ INSERT INTO `menuitems` (`name`, `type`, `link`, `title`, `menugroup_id`, `parent_id`, `order`, `id`, `scope`, `lvl`, `lft`, `rgt`) VALUES ('Orzeł ćwirek', '0', 'Orzeł', 'orzeł', '1', NULL, '0', '1', 1, 1, 1, 2) ] ~ MODPATH/database\classes\kohana\database\mysql.php [ 173 ]
2010-05-15 17:41:32 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '1' for key 'PRIMARY' [ INSERT INTO `menuitems` (`name`, `type`, `link`, `title`, `menugroup_id`, `parent_id`, `order`, `id`, `scope`, `lvl`, `lft`, `rgt`) VALUES ('Orzeł', '0', 'Orzeł', 'orzeł', '1', NULL, '0', '1', 1, 1, 1, 2) ] ~ MODPATH/database\classes\kohana\database\mysql.php [ 173 ]
2010-05-15 18:20:26 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '1' for key 'PRIMARY' [ INSERT INTO `menuitems` (`name`, `type`, `link`, `title`, `menugroup_id`, `parent_id`, `order`, `id`, `scope`, `lvl`, `lft`, `rgt`) VALUES ('Orzeł Ćwirek', '0', 'Orzeł', 'orzeł', '1', NULL, '0', '1', 1, 1, 1, 2) ] ~ MODPATH/database\classes\kohana\database\mysql.php [ 173 ]
2010-05-15 18:21:31 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '1' for key 'PRIMARY' [ INSERT INTO `menuitems` (`name`, `type`, `link`, `title`, `menugroup_id`, `parent_id`, `order`, `id`, `scope`, `lvl`, `lft`, `rgt`) VALUES ('Orzeł', '0', 'Orzeł', 'orzeł', '1', NULL, '0', '1', 1, 1, 1, 2) ] ~ MODPATH/database\classes\kohana\database\mysql.php [ 173 ]
2010-05-15 18:25:43 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '1' for key 'PRIMARY' [ INSERT INTO `menuitems` (`name`, `type`, `link`, `title`, `menugroup_id`, `parent_id`, `order`, `id`, `scope`, `lvl`, `lft`, `rgt`) VALUES ('Orzeł Ćwirek', '0', 'Orzeł', 'orzeł', '1', NULL, '0', '1', 1, 1, 1, 2) ] ~ MODPATH/database\classes\kohana\database\mysql.php [ 173 ]
2010-05-15 18:26:53 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '1' for key 'PRIMARY' [ INSERT INTO `menuitems` (`name`, `type`, `link`, `title`, `menugroup_id`, `parent_id`, `order`, `id`, `scope`, `lvl`, `lft`, `rgt`) VALUES ('Orzeł bielik', '0', 'Orzeł', 'orzeł', '1', NULL, '0', '1', 1, 1, 1, 2) ] ~ MODPATH/database\classes\kohana\database\mysql.php [ 173 ]
2010-05-15 18:28:07 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '1' for key 'PRIMARY' [ INSERT INTO `menuitems` (`name`, `type`, `link`, `title`, `menugroup_id`, `parent_id`, `order`, `id`, `scope`, `lvl`, `lft`, `rgt`) VALUES ('Orzeł ćwirek', '0', 'Orzeł', 'orzeł', '1', NULL, '0', '1', 1, 1, 1, 2) ] ~ MODPATH/database\classes\kohana\database\mysql.php [ 173 ]
2010-05-15 18:31:39 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '1' for key 'PRIMARY' [ INSERT INTO `menuitems` (`name`, `type`, `link`, `title`, `menugroup_id`, `parent_id`, `order`, `id`, `scope`, `lvl`, `lft`, `rgt`) VALUES ('Orzeł fsdfsdf', '0', 'Orzeł', 'orzeł', '1', NULL, '0', '1', 1, 1, 1, 2) ] ~ MODPATH/database\classes\kohana\database\mysql.php [ 173 ]
2010-05-15 18:33:41 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '1' for key 'PRIMARY' [ INSERT INTO `menuitems` (`name`, `type`, `link`, `title`, `menugroup_id`, `parent_id`, `order`, `id`) VALUES ('Orzeł dasdsa', '0', 'Orzeł', 'orzeł', '1', '0', '0', '1') ] ~ MODPATH/database\classes\kohana\database\mysql.php [ 173 ]
2010-05-15 18:35:07 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '1' for key 'PRIMARY' [ INSERT INTO `menuitems` (`name`, `type`, `link`, `title`, `menugroup_id`, `parent_id`, `order`, `id`) VALUES ('Orzeł dasdsadasd', '0', 'Orzeł', 'orzeł', '7', '0', '0', '1') ] ~ MODPATH/database\classes\kohana\database\mysql.php [ 173 ]
2010-05-15 18:39:03 --- ERROR: ErrorException [ 8 ]: Undefined variable: options ~ APPPATH/views\menu\item_frm.php [ 70 ]
2010-05-15 18:40:53 --- ERROR: ErrorException [ 8 ]: Undefined variable: group ~ APPPATH/views\menu\item_frm.php [ 70 ]
2010-05-15 18:41:11 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$items ~ APPPATH/views\menu\item_frm.php [ 70 ]
2010-05-15 18:42:14 --- ERROR: ErrorException [ 8 ]: Undefined variable: options ~ APPPATH/views\menu\item_frm.php [ 70 ]
2010-05-15 18:44:43 --- ERROR: Kohana_Exception [ 0 ]: The items property does not exist in the Model_MenuGroup class ~ MODPATH/orm\classes\kohana\orm.php [ 373 ]
2010-05-15 19:04:26 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected T_STRING, expecting T_FUNCTION ~ APPPATH/classes\controller\admin\menus.php [ 124 ]
2010-05-15 19:09:35 --- ERROR: ErrorException [ 2 ]: Missing argument 1 for Controller_Admin_Menus::action_edit() ~ APPPATH/classes\controller\admin\menus.php [ 22 ]
2010-05-15 19:11:55 --- ERROR: ReflectionException [ -1 ]: Class controller_1 does not exist ~ SYSPATH/classes\kohana\request.php [ 865 ]
2010-05-15 19:13:57 --- ERROR: ReflectionException [ -1 ]: Class controller_1 does not exist ~ SYSPATH/classes\kohana\request.php [ 865 ]
2010-05-15 19:14:02 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '1' for key 'PRIMARY' [ INSERT INTO `menugroups` (`name`, `id`, `is_global`, `location`) VALUES ('Ptaki', '1', '1', '0') ] ~ MODPATH/database\classes\kohana\database\mysql.php [ 173 ]
2010-05-15 19:14:02 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '1' for key 'PRIMARY' [ INSERT INTO `menugroups` (`name`, `id`, `is_global`, `location`) VALUES ('Ptaki', '1', '1', '0') ] ~ MODPATH/database\classes\kohana\database\mysql.php [ 173 ]
2010-05-15 19:15:01 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '1' for key 'PRIMARY' [ INSERT INTO `menugroups` (`name`, `id`, `is_global`, `location`) VALUES ('Ptaki', '1', '1', '0') ] ~ MODPATH/database\classes\kohana\database\mysql.php [ 173 ]
2010-05-15 19:15:14 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '1' for key 'PRIMARY' [ INSERT INTO `menugroups` (`name`, `id`, `is_global`, `location`) VALUES ('Ptaki', '1', '1', '0') ] ~ MODPATH/database\classes\kohana\database\mysql.php [ 173 ]
2010-05-15 19:16:00 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '1' for key 'PRIMARY' [ INSERT INTO `menugroups` (`name`, `id`, `is_global`, `location`) VALUES ('Ptaki', '1', '1', '0') ] ~ MODPATH/database\classes\kohana\database\mysql.php [ 173 ]
2010-05-15 19:17:24 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '1' for key 'PRIMARY' [ INSERT INTO `menugroups` (`name`, `id`, `is_global`, `location`) VALUES ('Ptaki', '1', '1', '0') ] ~ MODPATH/database\classes\kohana\database\mysql.php [ 173 ]
2010-05-15 19:18:16 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '1' for key 'PRIMARY' [ INSERT INTO `menugroups` (`name`, `id`, `is_global`, `location`) VALUES ('Ptaki', '1', '1', '0') ] ~ MODPATH/database\classes\kohana\database\mysql.php [ 173 ]
2010-05-15 19:27:34 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '1' for key 'PRIMARY' [ INSERT INTO `menugroups` (`name`, `id`, `is_global`, `location`) VALUES ('Ptaki', '1', '1', '0') ] ~ MODPATH/database\classes\kohana\database\mysql.php [ 173 ]
2010-05-15 19:29:40 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '1' for key 'PRIMARY' [ INSERT INTO `menugroups` (`name`, `id`, `is_global`, `location`) VALUES ('Ptaki', '1', '1', '0') ] ~ MODPATH/database\classes\kohana\database\mysql.php [ 173 ]
2010-05-15 19:30:13 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '1' for key 'PRIMARY' [ INSERT INTO `menugroups` (`name`, `id`, `is_global`, `location`) VALUES ('Ptaki', '1', '1', '0') ] ~ MODPATH/database\classes\kohana\database\mysql.php [ 173 ]
2010-05-15 19:31:25 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '1' for key 'PRIMARY' [ INSERT INTO `menugroups` (`name`, `id`, `is_global`, `location`) VALUES ('Ptaki', '1', '1', '0') ] ~ MODPATH/database\classes\kohana\database\mysql.php [ 173 ]
2010-05-15 19:32:27 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '1' for key 'PRIMARY' [ INSERT INTO `menugroups` (`name`, `id`, `is_global`, `location`) VALUES ('Ptaki', '1', '1', '0') ] ~ MODPATH/database\classes\kohana\database\mysql.php [ 173 ]
2010-05-15 19:50:08 --- ERROR: ErrorException [ 8 ]: unserialize() [function.unserialize]: Error at offset 0 of 405 bytes ~ SYSPATH/classes\kohana\core.php [ 767 ]
2010-05-15 19:50:17 --- ERROR: ErrorException [ 8 ]: unserialize() [function.unserialize]: Error at offset 0 of 405 bytes ~ SYSPATH/classes\kohana\core.php [ 767 ]
2010-05-15 19:50:19 --- ERROR: ErrorException [ 8 ]: unserialize() [function.unserialize]: Error at offset 0 of 405 bytes ~ SYSPATH/classes\kohana\core.php [ 767 ]
2010-05-15 19:50:21 --- ERROR: ErrorException [ 8 ]: unserialize() [function.unserialize]: Error at offset 0 of 405 bytes ~ SYSPATH/classes\kohana\core.php [ 767 ]
2010-05-15 19:50:25 --- ERROR: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH/classes\kohana\request.php [ 554 ]
2010-05-15 19:50:31 --- ERROR: ErrorException [ 8 ]: unserialize() [function.unserialize]: Error at offset 0 of 405 bytes ~ SYSPATH/classes\kohana\core.php [ 767 ]
2010-05-15 19:51:19 --- ERROR: ErrorException [ 8 ]: unserialize() [function.unserialize]: Error at offset 0 of 405 bytes ~ SYSPATH/classes\kohana\core.php [ 767 ]
2010-05-15 19:54:34 --- ERROR: ErrorException [ 8 ]: unserialize() [function.unserialize]: Error at offset 0 of 405 bytes ~ SYSPATH/classes\kohana\core.php [ 767 ]
2010-05-15 19:55:37 --- ERROR: ErrorException [ 8 ]: unserialize() [function.unserialize]: Error at offset 0 of 405 bytes ~ SYSPATH/classes\kohana\core.php [ 767 ]
2010-05-15 19:55:40 --- ERROR: ErrorException [ 8 ]: unserialize() [function.unserialize]: Error at offset 0 of 405 bytes ~ SYSPATH/classes\kohana\core.php [ 767 ]
2010-05-15 19:55:43 --- ERROR: ErrorException [ 8 ]: unserialize() [function.unserialize]: Error at offset 0 of 405 bytes ~ SYSPATH/classes\kohana\core.php [ 767 ]
2010-05-15 19:56:53 --- ERROR: ErrorException [ 8 ]: unserialize() [function.unserialize]: Error at offset 0 of 405 bytes ~ SYSPATH/classes\kohana\core.php [ 767 ]
2010-05-15 20:00:24 --- ERROR: ErrorException [ 8 ]: unserialize() [function.unserialize]: Error at offset 0 of 405 bytes ~ SYSPATH/classes\kohana\core.php [ 767 ]
2010-05-15 20:00:59 --- ERROR: ErrorException [ 8 ]: unserialize() [function.unserialize]: Error at offset 0 of 405 bytes ~ SYSPATH/classes\kohana\core.php [ 767 ]
2010-05-15 20:01:05 --- ERROR: ErrorException [ 8 ]: Undefined index: controller ~ SYSPATH/classes\kohana\request.php [ 553 ]
2010-05-15 20:01:11 --- ERROR: ErrorException [ 8 ]: unserialize() [function.unserialize]: Error at offset 0 of 405 bytes ~ SYSPATH/classes\kohana\core.php [ 767 ]
2010-05-15 20:19:26 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Admin_Menus::$item ~ APPPATH/classes\controller\admin\menus.php [ 96 ]
2010-05-15 20:19:48 --- ERROR: ErrorException [ 8 ]: Undefined property: Controller_Admin_Menus::$item ~ APPPATH/classes\controller\admin\menus.php [ 95 ]
2010-05-15 20:30:54 --- ERROR: ReflectionException [ 0 ]: Method action_remove does not exist ~ SYSPATH/classes\kohana\request.php [ 882 ]
2010-05-15 20:31:59 --- ERROR: ErrorException [ 8 ]: Undefined variable: options ~ APPPATH/views\menu\item_frm.php [ 58 ]
2010-05-15 21:35:26 --- ERROR: ErrorException [ 8 ]: Undefined index: id ~ APPPATH/views\menu\group_frm.php [ 37 ]