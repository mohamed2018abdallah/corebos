<?php
/*************************************************************************************************
 * Copyright 2016 JPL TSolucio, S.L. -- This file is a part of TSOLUCIO coreBOS Customizations.
 * Licensed under the vtiger CRM Public License Version 1.1 (the "License"); you may not use this
 * file except in compliance with the License. You can redistribute it and/or modify it
 * under the terms of the License. JPL TSolucio, S.L. reserves all rights not expressly
 * granted by the License. coreBOS distributed by JPL TSolucio S.L. is distributed in
 * the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied
 * warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. Unless required by
 * applicable law or agreed to in writing, software distributed under the License is
 * distributed on an "AS IS" BASIS, WITHOUT ANY WARRANTIES OR CONDITIONS OF ANY KIND,
 * either express or implied. See the License for the specific language governing
 * permissions and limitations under the License. You may obtain a copy of the License
 * at <http://corebos.org/documentation/doku.php?id=en:devel:vpl11>
 *************************************************************************************************
 *  Module       : Global Variable Definitions
 *  Version      : 1.0
 *  Author       : JPL TSolucio, S. L.

 * Definition Template *
'variable name' => array(
	'status' => 'Not Implemented' | 'Implemented' | 'Deprecated',
	'valuetype' => 'String' | 'Boolean' | 'Integer' | 'Float' | 'CSV' | EMail,
	'category' => 'System' | 'User Interface' | 'Performance' | 'Module Functionality' | 'Security' | 'Other',
	'values' => 'list of possible values',
	'definition' => 'explanation and purpose',
),

 *************************************************************************************************/
$GlobalVariableDefinitonsHeader = array(
	'valuetype' => 'Value Type',
	'category' => 'Category',
	'values' => 'Values',
	'definition' => 'Definition',
	'UseDescriptionMessage' => 'All global variables accept the special value: <b>[[Use Description]]</b>. If the global variable value is set to [[Use Description]] the contents of the description field will be returned instead. This is specially usefull for values that are very long (like a comma separated list of IPs or Emails), making it easier to visualize and maintain.',
);
$GlobalVariableDefinitons = array(
'Application_AdminLoginIPs' => array(
	'status' => 'Implemented',
	'valuetype' => 'CSV IPs',
	'category' => 'Security',
	'values' => 'Example: 127.0.0.1,192.168.0.100',
	'definition' => 'Comma separated list of IP addresses from which admin users will be permitted to login',
),
'Application_UserLoginIPs' => array(
	'status' => 'Implemented',
	'valuetype' => 'CSV IPs',
	'category' => 'Security',
	'values' => 'Example: 127.0.0.1,192.168.0.100',
	'definition' => 'Comma separated list of IP addresses from which users will be permitted to login',
),
'Debug_Record_Not_Found' => array(
	'status' => 'Implemented',
	'valuetype' => 'Boolean',
	'category' => 'Debug',
	'values' => '0 | 1',
	'definition' => 'When a record cannot be found, the application will show a message indicating the event. If this variable is set to 1 then the application will show additional information about the record being looked for like the module and crmid.',
),
'Debug_Report_Query' => array(
	'status' => 'Implemented',
	'valuetype' => 'Boolean',
	'category' => 'Debug',
	'values' => '0 | 1',
	'definition' => 'If set to 1 the SQL query being launched for a report will be written to the main log file.',
),
'Debug_ListView_Query' => array(
	'status' => 'Implemented',
	'valuetype' => 'Boolean',
	'category' => 'Debug',
	'values' => '0 | 1',
	'definition' => 'If set to 1 the SQL query being launched to retrieve records in a List View will be shown on screen.',
),
'Debug_Popup_Query' => array(
	'status' => 'Implemented',
	'valuetype' => 'Boolean',
	'category' => 'Debug',
	'values' => '0 | 1',
	'definition' => 'If set to 1 the SQL query being launched to retrieve records in a Popup View will be shown on screen.',
),
'Accounts_BlockDuplicateName' => array(
	'status' => 'Implemented',
	'valuetype' => 'Boolean',
	'category' => 'Module Functionality',
	'values' => '0 | 1',
	'definition' => 'If set to 1, which is the default value, you will not be able to duplicate account names, if set to 0 that will be permitted.',
),
'ModComments_DefaultBlockStatus' => array(
	'status' => 'Implemented',
	'valuetype' => 'Boolean',
	'category' => 'Module Functionality',
	'values' => '0 | 1',
	'definition' => 'If set to 1, which is the default value, the Comments block will be open, if set to 0 it will be closed.',
),
'ModComments_DefaultCriteria' => array(
	'status' => 'Implemented',
	'valuetype' => 'String',
	'category' => 'Module Functionality',
	'values' => 'All | Last5 | Mine',
	'definition' => '"All" (default value) will show all comments related to the module, "Last5" will show only the last 5 commentas and "Mine" will show all comments of the current user.',
),
'Application_TrackerMaxHistory' => array(
	'status' => 'Implemented',
	'valuetype' => 'Integer',
	'category' => 'Application Functionality',
	'values' => '',
	'definition' => 'Máximum number of elements in the Recent Viewed elements popup. The default value is 10.',
),
'EMail_OpenTrackingEnabled' => array(
	'status' => 'Implemented',
	'valuetype' => 'Boolean',
	'category' => 'Module Functionality',
	'values' => '0 | 1',
	'definition' => 'If emails will have a hidden image to track openings. The default is enabled (1). <a href="http://corebos.org/documentation/doku.php?id=en:email_tracking" target="_blank">Documentation</a>',
),
'ToolTip_MaxFieldValueLength' => array(
	'status' => 'Implemented',
	'valuetype' => 'Integer',
	'category' => 'Module Functionality',
	'values' => '',
	'definition' => 'Maximum number of characters of a value to show in the tooltip. The default value is 35. This variable can be set per module.',
),
'Debug_Send_VtigerCron_Error' => array(
	'status' => 'Implemented',
	'valuetype' => 'CSV EMail',
	'category' => 'Debug',
	'values' => 'comma separated list of valid emails',
	'definition' => 'All emails on this list will receive an email when the cron process produces a catchable error',
),
'Debug_Send_AdminLoginIPAuth_Error' => array(
	'status' => 'Implemented',
	'valuetype' => 'CSV EMail',
	'category' => 'Debug',
	'values' => 'comma separated list of valid emails',
	'definition' => 'All emails on this list will receive an email when an admin user tries to login from an invalid IP',
),
'Debug_Send_UserLoginIPAuth_Error' => array(
	'status' => 'Implemented',
	'valuetype' => 'CSV EMail',
	'category' => 'Debug',
	'values' => 'comma separated list of valid emails',
	'definition' => 'All emails on this list will receive an email when a user tries to login from an invalid IP',
),
'Application_Announcement' => array(
	'status' => 'Implemented',
	'valuetype' => 'String',
	'category' => 'Application',
	'values' => 'Text to show',
	'definition' => 'Shows a scrolling header text as a system wide announcement',
),
'Application_JSCalendar_Load' => array(
	'status' => 'Implemented',
	'valuetype' => 'String',
	'category' => 'Development',
	'values' => 'true | false',
	'definition' => 'true, which is the default value, will load the javascript date calendar extension, false will not load it. Specially used for extensions which load their own calendar plugin.',
),
'Application_Display_World_Clock' => array(
	'status' => 'Implemented',
	'valuetype' => 'Boolean',
	'category' => 'Application',
	'values' => '0 | 1',
	'definition' => 'Show or Hide World Clock widget in toolbar',
),
'Application_Display_Calculator' => array(
	'status' => 'Implemented',
	'valuetype' => 'Boolean',
	'category' => 'Application',
	'values' => '0 | 1',
	'definition' => 'Show or Hide Calculator widget in toolbar',
),
'Application_Display_Mini_Calendar' => array(
	'status' => 'Implemented',
	'valuetype' => 'Boolean',
	'category' => 'Application',
	'values' => '0 | 1',
	'definition' => 'Show or Hide mini Calendar widget in toolbar',
),
'Application_Use_RTE' => array(
	'status' => 'Implemented',
	'valuetype' => 'Boolean',
	'category' => 'Application',
	'values' => '0 | 1',
	'definition' => 'Use Rich Text Editor in those modules that support it',
),
'Webservice_Enabled' => array(
	'status' => 'Implemented',
	'valuetype' => 'Boolean',
	'category' => 'Webservice',
	'values' => '0 | 1',
	'definition' => 'Completely disables or enables webservice access.',
),
'Webservice_CORS_Enabled_Domains' => array(
	'status' => 'Implemented',
	'valuetype' => 'String',
	'category' => 'Webservice',
	'values' => 'CSV of authorized CORS domains',
	'definition' => 'CSV of URI of domains authorized to access webservice. The special entry asterisk "*" will give access to all domains.',
),
'SOAP_CustomerPortal_Enabled' => array(
	'status' => 'Implemented',
	'valuetype' => 'Boolean',
	'category' => 'Webservice',
	'values' => '0 | 1',
	'definition' => 'Completely disables or enables SOAP Customer Portal access.',
),
'Application_Default_Action' => array(
	'status' => 'Implemented',
	'valuetype' => 'String',
	'category' => 'Application',
	'values' => 'Valid module action, usually "index"',
	'definition' => 'Action that will be executed when accessing the application with no action defined in URL',
),
'Application_Default_Module' => array(
	'status' => 'Implemented',
	'valuetype' => 'String',
	'category' => 'Application',
	'values' => 'Valid module name',
	'definition' => 'Module that will be loaded by default when no module is specified in URL',
),
'Application_Allow_Exports' => array(
	'status' => 'Implemented',
	'valuetype' => 'String',
	'category' => 'Application',
	'values' => 'all | admin | none',
	'definition' => 'Global security check to permit exporting. "all" to allow anyone to use exports, "admin" to only allow admins to export, "none" to block exports completely. Default value = all',
),
'Application_ListView_Max_Text_Length' => array(
	'status' => 'Implemented',
	'valuetype' => 'Integer',
	'category' => 'Application',
	'values' => '',
	'definition' => 'Maximum number of letters of a field to show in a list view column. Default value is 40 and 0 shows the full string.',
),
'Application_ListView_PageSize' => array(
	'status' => 'Implemented',
	'valuetype' => 'Integer',
	'category' => 'Application',
	'values' => '',
	'definition' => 'Number of rows per page in list views',
),
'Application_ListView_Default_Sort_Order' => array(
	'status' => 'Implemented',
	'valuetype' => 'string',
	'category' => 'Application',
	'values' => 'ASC | DESC',
	'definition' => 'Initial sort order for records when clicking on list view header. The default is ASC',
),
'Application_Upload_MaxSize' => array(
	'status' => 'Implemented',
	'valuetype' => 'Integer',
	'category' => 'Application',
	'values' => '',
	'definition' => 'Maximum file size for uploaded files in bytes also used when uploading import files. Default value = 3000000',
),
'HelpDesk_Support_EMail' => array(
	'status' => 'Implemented',
	'valuetype' => 'Email',
	'category' => 'Application',
	'values' => '',
	'definition' => '"From" email address for emails going out from the HelpDesk support module (and some other system emails).',
),
'HelpDesk_Support_Name' => array(
	'status' => 'Implemented',
	'valuetype' => 'String',
	'category' => 'Application',
	'values' => '',
	'definition' => '"From" name and signature for emails going out from the HelpDesk support module (and some other system emails).',
),
'HelpDesk_Support_Reply_EMail' => array(
	'status' => 'Implemented',
	'valuetype' => 'Email',
	'category' => 'Application',
	'values' => '',
	'definition' => '"Reply To" email address for emails going out from the HelpDesk support module (and some other system emails). It will only be used if it is different from HelpDesk_Support_EMail',
),
'Application_Single_Pane_View' => array(
	'status' => 'Implemented',
	'valuetype' => 'Boolean',
	'category' => 'Application',
	'values' => '0 | 1',
	'definition' => 'When activated the "More Information" tab will be shown at the end of the detail view block instead of on another tab.',
),
'Application_Minimum_Cron_Frequency' => array(
	'status' => 'Implemented',
	'valuetype' => 'Integer',
	'category' => 'Application',
	'values' => '',
	'definition' => 'Minimum number of minutes between consecutive same scheduled tasks execution. Default is 15 minutes.',
),
'Application_Customer_Portal_URL' => array(
	'status' => 'Implemented',
	'valuetype' => 'String',
	'category' => 'Application',
	'values' => '',
	'definition' => 'URL for customer portal (Example: http://your_support_domain.tld/portal). Used mostly for email template communications.',
),
'Debug_Calculate_Response_Time' => array(
	'status' => 'Implemented',
	'valuetype' => 'Boolean',
	'category' => 'Debug',
	'values' => '0 | 1',
	'definition' => 'If active will show the application response time at the bottom of each page.',
),
'Import_Batch_Limit' => array(
	'status' => 'Implemented',
	'valuetype' => 'Integer',
	'category' => 'Application',
	'values' => '',
	'definition' => 'Individual batch limit - Specified number of records will be imported at one shot and the cycle will repeat untill all records are imported. Default value is 250',
),
'Import_Scheduled_Limit' => array(
	'status' => 'Implemented',
	'valuetype' => 'Integer',
	'category' => 'Application',
	'values' => '',
	'definition' => 'Threshold record limit for immediate import. If record count is more than this, then the import is scheduled through cron job. Default value is 1000',
),
'Application_Help_URL' => array(
	'status' => 'Implemented',
	'valuetype' => 'String',
	'category' => 'Application',
	'values' => '',
	'definition' => 'URL to go to when user clicks on help icon in upper right corner. If set to 0 no help icon will be shown. Default value is corebos.org wiki.',
),
'WebService_Session_Life_Span' => array(
	'status' => 'Implemented',
	'valuetype' => 'Integer',
	'category' => 'Webservice',
	'values' => '',
	'definition' => 'Maximum life span of a webservice session. After this time the session will be destroyed even if it is being kept alive. Default is a day.',
),
'WebService_Session_Idle_Time' => array(
	'status' => 'Implemented',
	'valuetype' => 'Integer',
	'category' => 'Webservice',
	'values' => '',
	'definition' => 'Maximum life span that a session should be kept alive after the last transaction. Default is 1800 (seconds)',
),
'Application_UI_Name' => array(
	'status' => 'Implemented',
	'valuetype' => 'String',
	'category' => 'Application',
	'values' => '',
	'definition' => '',
),
'Application_UI_Version' => array(
	'status' => 'Implemented',
	'valuetype' => 'String',
	'category' => 'Application',
	'values' => '',
	'definition' => '',
),
'Application_UI_URL' => array(
	'status' => 'Implemented',
	'valuetype' => 'URL',
	'category' => 'Application',
	'values' => '',
	'definition' => '',
),
'Document_Folder_View' => array(
	'status' => 'Implemented',
	'valuetype' => 'Boolean',
	'category' => 'Application',
	'values' => '0 | 1',
	'definition' => 'Show Documents list view as separate folders or as a normal listview. Default is 1 = Folder view.',
),
'Inventory_Tax_Type_Default' => array(
	'status' => 'Implemented',
	'valuetype' => 'String',
	'category' => 'Application',
	'values' => 'individual | group',
	'definition' => 'Establish the tax mode on inventory modules to Individual line or Group tax',
),
'Application_Global_Search_SelectedModules' => array(
	'status' => 'Implemented',
	'valuetype' => 'CSV list of modules',
	'category' => 'Application',
	'values' => 'CSV list of modules',
	'definition' => 'Comma Separated List of modules that the global search will look in by default. This list is automatically generated by the application as you select and deselect different modules in the global search.',
),
'Product_Copy_Bundle_OnDuplicate' => array(
	'status' => 'Implemented',
	'valuetype' => 'Boolean',
	'category' => 'Application',
	'values' => '0 | 1',
	'definition' => 'If set to true all the related bundle products will be copied to the new product on duplicate. In other words, when you duplicate a product, its bundle is also duplicated.',
),
'Inventory_Product_Default_Units' => array(
	'status' => 'Implemented',
	'valuetype' => 'Decimal',
	'category' => 'Application',
	'values' => '',
	'definition' => 'Number of units that is set when creating a new product line in inventory modules. Default value is 1.',
),
'Inventory_Service_Default_Units' => array(
	'status' => 'Implemented',
	'valuetype' => 'Decimal',
	'category' => 'Application',
	'values' => '',
	'definition' => 'Number of units that is set when creating a new product line in inventory modules. Default value is 1.',
),
'Inventory_ProductService_Default' => array(
	'status' => 'Implemented',
	'valuetype' => 'String',
	'category' => 'Application',
	'values' => 'Products | Services',
	'definition' => 'When creating a new inventory module record, the first product line that is shown will be a Product or a Service depending on the value of the variable.',
),
'Report_Send_Scheduled_ifEmpty' => array(
	'status' => 'Implemented',
	'valuetype' => 'Boolean',
	'category' => 'Application',
	'values' => '0 | 1',
	'definition' => 'If set to 1 (default value) and a scheduled report has no records an empty report will be sent by email. If set to 0 no email will be sent if the report is empty.',
),
'Report_ListView_PageSize' => array(
	'status' => 'Implemented',
	'valuetype' => 'Integer',
	'category' => 'Application',
	'values' => '',
	'definition' => 'Number of rows per page in reports list views',
),
'Report_MaxRows_OnScreen' => array(
	'status' => 'Implemented',
	'valuetype' => 'Integer',
	'category' => 'Application',
	'values' => '',
	'definition' => 'Maximum number of rows permitted for a full length HTML report. The default value is 5000.',
),
'Workflow_Maximum_Scheduled' => array(
	'status' => 'Implemented',
	'valuetype' => 'Integer',
	'category' => 'Workflows',
	'values' => '',
	'definition' => 'This is the maximum númber of scheduled workflows that the application will permit you to create. You should be careful with this limit, specially try to distrbute the scheduled workflows evenly on application low use time. The default value is 10.',
),
'Email_Attachments_Folder' => array(
	'status' => 'Implemented',
	'valuetype' => 'String',
	'category' => 'Application',
	'values' => 'Existing folder name',
	'definition' => 'The application saves all attachments contained in emails as documents for future reference. These attachments will be saved in the first folder it finds which usually is the "Default" folder. This variable defines the name of the folder you want the attachments to be saved in.',
),
'PBX_Get_Line_Prefix' => array(
	'status' => 'Implemented',
	'valuetype' => 'String',
	'category' => 'Application',
	'values' => '',
	'definition' => 'The number the user has to dial to get a line. This will be prefixed to the number that has to be dialed.',
),
'PBX_Unknown_CallerID' => array(
	'status' => 'Implemented',
	'valuetype' => 'String',
	'category' => 'Application',
	'values' => '',
	'definition' => 'When calling or receiving a call to an unknown party this string will used as the record name identifier next to the number dialed. The default value is Unknown',
),
'Mobile_Module_by_default' => array(
	'status' => 'Implemented',
	'valuetype' => 'String',
	'category' => 'Mobile Functionality',
	'values' => 'Calendar | HelpDesk | Contacts ...',
	'definition' => 'Set the default module to show when access to the Mobile module.',
),
'Application_Storage_Directory' => array(
	'status' => 'Implemented',
	'valuetype' => 'string',
	'category' => 'Application',
	'values' => 'Directory path',
	'definition' => 'Directory where document files are to be saved. The webserver user must be able to access and write inside this folder.',
),
'Application_Storage_SaveStrategy' => array(
	'status' => 'Implemented',
	'valuetype' => 'string',
	'category' => 'Application',
	'values' => 'dates | crmid',
	'definition' => 'dates saves the documents in a date structure as year/month/week, crmid saves documents in folders named by the CRMID they are related to',
),
'Application_Global_Search_Binary' => array(
	'status' => 'Implemented',
	'valuetype' => 'boolean',
	'category' => 'Application',
	'values' => '0 | 1',
	'definition' => 'By default (0), the global search does not distinguish between special characters. So a, á, à and ä are all the same. If this variable is set to 1 it will treat them as different letters.',
),
'Application_OpenRecordInNewXOnRelatedList' => array(
	'status' => 'Implemented',
	'valuetype' => 'string',
	'category' => 'Application',
	'values' => 'empty string | tab | window',
	'definition' => 'Modifies link to record on related lists. If empty (default) the record opens in the same tab, if tab, the record opens in a new tab and if window, then the record opens in a new browser window.',
),
'Application_OpenRecordInNewXOnListView' => array(
	'status' => 'Implemented',
	'valuetype' => 'string',
	'category' => 'Application',
	'values' => 'empty string | tab | window',
	'definition' => 'Modifies link to record on list view lists. If empty (default) the record opens in the same tab, if tab, the record opens in a new tab and if window, then the record opens in a new browser window.',
),
'Application_MaxFailedLoginAttempts' => array(
	'status' => 'Implemented',
	'valuetype' => 'Integer',
	'category' => 'Application',
	'values' => '',
	'definition' => 'Number of login attempts after which the user will be locked out of the application. The admin user can change this value in the users prefernces page and it will be reset to 0 when the password is changed.',
),
'Application_ExpirePasswordAfterDays' => array(
	'status' => 'Implemented',
	'valuetype' => 'Integer',
	'category' => 'Application',
	'values' => '',
	'definition' => 'Number of days after which the user will be forced to change his password. To switch on this feature you must activate the Expire Password scheduled task.',
),
'SalesOrder_StatusOnInvoiceSave' => array(
	'status' => 'Implemented',
	'valuetype' => 'string',
	'category' => 'Application',
	'values' => 'Valid SalesOrder status picklist values',
	'definition' => 'When saving an Invoice related to a SalesOrder, the status of the salesorder will be set to the value contained in this variable. The special value "DoNotChange" will deactivate this functionality and no change will be done.',
),
'Quote_StatusOnSalesOrderSave' => array(
	'status' => 'Implemented',
	'valuetype' => 'string',
	'category' => 'Application',
	'values' => 'Valid Quote status picklist values',
	'definition' => 'When saving an SalesOrder related to a Quote, the status of the quote will be set to the value contained in this variable. The special value "DoNotChange" will deactivate this functionality and no change will be done.',
),
'Application_ListView_MaxColumns' => array(
	'status' => 'Implemented',
	'valuetype' => 'Integer',
	'category' => 'Application',
	'values' => '',
	'definition' => 'Maximum number of columns that can be set on a list view. The default is 12.',
),
'Application_Action_Panel_Open' => array(
	'status' => 'Implemented',
	'valuetype' => 'Boolean',
	'category' => 'Application',
	'values' => '0 | 1',
	'definition' => 'If set to 0 the right action panel in detail view will be hidden. The default is 1 showing the action panel. It can be toggled using the icon on top.',
),
'Application_Search_Panel_Open' => array(
	'status' => 'Implemented',
	'valuetype' => 'Boolean',
	'category' => 'Application',
	'values' => '0 | 1',
	'definition' => 'If set to the dfault value of 1, the search panel on list view will be open. If set to 0 it will de hidden. It can be toggled using the search icon on the toolbar.',
),
'Users_ReplyTo_SecondEmail' => array(
	'status' => 'Implemented',
	'valuetype' => 'Boolean',
	'category' => 'Application',
	'values' => '0 | 1',
	'definition' => 'If set to 1 the users secondary email will be used in email responses. Default is set to 0 using the primary email address of the user.',
),
'Users_Default_Send_Email_Template' => array(
	'status' => 'Implemented',
	'valuetype' => 'String',
	'category' => 'Application',
	'values' => '',
	'definition' => 'Name of the default email template to load when creating a new email. Default is empty.',
),
'Campaign_CreatePotentialOnAccountRelation' => array(
	'status' => 'Implemented',
	'valuetype' => 'Boolean',
	'category' => 'Application',
	'values' => '0 | 1',
	'definition' => 'If set to 1 a potential record will be automatically created when an Account is related to a Campaign. The potential will be related to the account and the campaign. Default is to not create the potential.',
),
'Campaign_CreatePotentialOnContactRelation' => array(
	'status' => 'Implemented',
	'valuetype' => 'Boolean',
	'category' => 'Application',
	'values' => '0 | 1',
	'definition' => 'If set to 1 a potential record will be automatically created when an Contact is related to a Campaign. The potential will be related to the contact and the campaign. Default is to not create the potential.',
),
'Calendar_Modules_Panel_Visible' => array(
	'status' => 'Implemented',
	'valuetype' => 'Boolean',
	'category' => 'Application',
	'values' => '0 | 1',
	'definition' => 'O hides the modules list in the calendar. default is 1 so the list is shown',
),
'Calendar_Default_Reminder_Minutes' => array(
	'status' => 'Implemented',
	'valuetype' => 'Integer',
	'category' => 'Application',
	'values' => '',
	'definition' => 'Number of minutes that the event reminder will be set to for the user. The default is 10.',
),
'Calendar_Slot_Minutes' => array(
	'status' => 'Implemented',
	'valuetype' => 'Integer: minutes',
	'category' => 'Application',
	'values' => '',
	'definition' => 'Each hour on the calendar will be divided into this number of minutes. The default is 15 minutes which creates 4 divisions for each hour.',
),
'Calendar_Show_Inactive_Users' => array(
	'status' => 'Implemented',
	'valuetype' => 'Boolean',
	'category' => 'Application',
	'values' => '0 | 1',
	'definition' => '1 will show inactive users in the user list on the calendar. 0 will not show these users. The default value is to show the inactive users (1).',
),
'Calendar_Show_Group_Events' => array(
	'status' => 'Implemented',
	'valuetype' => 'Boolean',
	'category' => 'Application',
	'values' => '0 | 1',
	'definition' => 'Whether or not to show events assigned to the users groups.',
),
'Calendar_call_default_duration' => array(
	'status' => 'Implemented',
	'valuetype' => 'Integer: minutes',
	'category' => 'Application',
	'values' => '',
	'definition' => 'Initial number of minutes assigned to a call when creating. The default is 15 minutes.',
),
'Calendar_other_default_duration' => array(
	'status' => 'Implemented',
	'valuetype' => 'Integer: minutes',
	'category' => 'Application',
	'values' => '',
	'definition' => 'Initial number of minutes assigned to a call when creating. The default is 15 minutes.',
),
'Calendar_sort_users_by' => array(
	'status' => 'Implemented',
	'valuetype' => 'String: CSV of column names',
	'category' => 'Application',
	'values' => '',
	'definition' => 'Comma separated list of user column fields by which the user list on the calendar will be sorted. By default it is first_name,last_name',
),
'CronTasks_cronWatcher_mailto' => array(
	'status' => 'Implemented',
	'valuetype' => 'CSV emails',
	'category' => 'Debug',
	'values' => '',
	'definition' => 'The Cron Watcher service will send an email to the first administrator user it finds AND any email contained in this variable. By default it is empty.',
),
'BusinessMapping_SalesOrder2Invoice' => array(
	'status' => 'Implemented',
	'valuetype' => 'Business Map',
	'category' => 'Application',
	'values' => '',
	'definition' => 'Business Map ID with the mapping to apply in the transformation from Sales Order to Invoice',
),
'BusinessMapping_PotentialOnCampaignRelation' => array(
	'status' => 'Implemented',
	'valuetype' => 'Business Map',
	'category' => 'Application',
	'values' => '',
	'definition' => 'Business Map ID with the mapping to apply in the automatic creation of potentials in Campaigns. The mapping is from Campaign fields to Potential. Related to Campaign_CreatePotentialOnContactRelation and Campaign_CreatePotentialOnAccountRelation',
),
'Webservice_showUserAdvancedBlock' => array(
	'status' => 'Implemented',
	'valuetype' => 'Boolean',
	'category' => 'Webservice',
	'values' => '0 | 1',
	'definition' => 'Show user fields contained in the advanced user block',
),
'GoogleCalendarSync_BaseUpdateMonths' => array(
	'status' => 'Implemented',
	'valuetype' => 'Integer',
	'category' => 'Application',
	'values' => '',
	'definition' => 'Number of months in the past that the Google calendar sync process will retrieve events and update them locally.',
),
'GoogleCalendarSync_BaseCreateMonths' => array(
	'status' => 'Implemented',
	'valuetype' => 'Integer',
	'category' => 'Application',
	'values' => '',
	'definition' => 'Number of months in the past that the Google calendar sync process will retrieve events and create them locally.',
),
'Import_Full_CSV' => array(
	'status' => 'Implemented',
	'valuetype' => 'Boolean',
	'category' => 'Application',
	'values' => '0 | 1',
	'definition' => 'By default (0) the import process hooks will receive only the mapped columns. For those use cases where the full set of columns is required by the hooks you can set this value to 1.',
),
'Lead_Convert_TransferToAccount' => array(
	'status' => 'Implemented',
	'valuetype' => 'String',
	'category' => 'Application',
	'values' => 'false | true',
	'definition' => 'If set to the string "true", Accounts will be selected as the destination to transfer related information when converting a Lead. By default the information will be transferred to the Contact.',
),
'Lead_Convert_OpportunitySelected' => array(
	'status' => 'Implemented',
	'valuetype' => 'String',
	'category' => 'Application',
	'values' => 'false | true',
	'definition' => 'If set to the string "true", the Opportunity section will be selected when converting a Lead. By default the section is not selected.',
),
'Product_Show_Subproducts_Popup' => array(
	'status' => 'Implemented',
	'valuetype' => 'Boolean',
	'category' => 'Application',
	'values' => 'yes | no',
	'definition' => 'Whether to show subproducts as selectable at the first level or as a second level relation.',
),
'Product_Permit_Relate_Bundle_Parent' => array(
	'status' => 'Implemented',
	'valuetype' => 'Boolean',
	'category' => 'Application',
	'values' => 'yes | no',
	'definition' => 'Permit relating parent products with subproducts',
),
'Product_Permit_Subproduct_Be_Parent' => array(
	'status' => 'Implemented',
	'valuetype' => 'Boolean',
	'category' => 'Application',
	'values' => 'yes | no',
	'definition' => 'Permit assigning subproducts to a subroduct',
),
'Product_Maximum_Number_Images' => array(
	'status' => 'Implemented',
	'valuetype' => 'Integer',
	'category' => 'Application',
	'values' => '',
	'definition' => 'Maximum number of product images that can be related to a product. The default is 6.',
),
'Workflow_Send_Email_ToCCBCC' => array(
	'status' => 'Implemented',
	'valuetype' => 'Email CSV',
	'category' => 'Testing',
	'values' => '',
	'definition' => 'If this variable is defined and contains a comma separated list of emails, ALL workflow emails will be sent to this list.',
),
'Workflow_GeoDistance_Country_Default' => array(
	'status' => 'Implemented',
	'valuetype' => 'String: Country Name',
	'category' => 'Application',
	'values' => '',
	'definition' => 'For GeoDistance calculation workflow functions, this variable sets the default country to use if none is given. Useful when the company has a local area of influence.',
),
'Application_Billing_Address_Checked' => array(
	'status' => 'Implemented',
	'valuetype' => 'Boolean',
	'category' => 'Application',
	'values' => '0 | 1',
	'definition' => 'When selecting an Account/Contact in the popup window, the application asks if it must fill in addresses. This variable sets the Billing Address checkbox.',
),
'Application_Shipping_Address_Checked' => array(
	'status' => 'Implemented',
	'valuetype' => 'Boolean',
	'category' => 'Application',
	'values' => '0 | 1',
	'definition' => 'When selecting an Account/Contact in the popup window, the application asks if it must fill in addresses. This variable sets the Shipping Address checkbox.',
),
'Application_Show_Copy_Address' => array(
	'status' => 'Implemented',
	'valuetype' => 'Boolean',
	'category' => 'Application',
	'values' => '0 | 1',
	'definition' => 'This variable activates or deactivates the "Copy Address" functionality present on Accounts, Contacts and Inventory modules. Useful when one of the addresses is hidden due to business requirements.',
),
'Report_Excel_Export_RowHeight' => array(
	'status' => 'Implemented',
	'valuetype' => 'Integer',
	'category' => 'Application',
	'values' => '',
	'definition' => 'Row height of Excel sheets obtained from reporting export. The default value is 20',
),
'Inventory_ListPrice_ReadOnly' => array(
	'status' => 'Implemented',
	'valuetype' => 'Boolean',
	'category' => 'Application',
	'values' => '0 | 1',
	'definition' => 'Block list price on inventory module. Default is unblocked.',
),
'Application_Group_Selection_Permitted' => array(
	'status' => 'Implemented',
	'valuetype' => 'Boolean',
	'category' => 'Application',
	'values' => '0 | 1',
	'definition' => 'Permit selection of groups for the assigned to field. Default is to permit selection.',
),
'Application_B2B' => array(
	'status' => 'Implemented',
	'valuetype' => 'Boolean',
	'category' => 'Application',
	'values' => '0 | 1',
	'definition' => 'Application should tend to use Accounts (1) or Contacts (0). Default is to use Accounts (1).',
),
'User_AuthenticationType' => array(
	'status' => 'Implemented',
	'valuetype' => 'String',
	'category' => 'Application',
	'values' => 'LDAP | AD | SQL',
	'definition' => 'Login authentication type. Use the default SQL to login using the passwords stored in the database',
),
'Application_FirstTimeLogin_Template' => array(
	'status' => 'Implemented',
	'valuetype' => 'String',
	'category' => 'Application',
	'values' => 'User based template string',
	'definition' => 'HTML current user based workflow template that will be shown to user on first successful login',
),
'Mobile_Related_Modules' => array(
	'status' => 'Implemented',
	'valuetype' => 'String',
	'category' => 'Mobile module functionality',
	'values' => 'Contacts,Potentials,HelpDesk,Documents',
	'definition' => '<b>Comma separeted module list</b> to indicate the modules that we want to show their related lists or to appear like a related list.<br> Now <b> Default value is: Contacts,Potentials,HelpDesk,Documents,Timecontrol</b>. <br>So, we recomend that first you copy this value and on the end of the string you add your new modules.<br><b>For example:</b> Contacts,Potentials,HelpDesk,Documents,Timecontrol<b>,Assets</b>',
),
);

foreach (glob('modules/GlobalVariable/language/en_us.gvdefs.*.php',GLOB_BRACE) as $tcode) {
	include($tcode);
}

