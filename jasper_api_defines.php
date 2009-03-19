<?php 

/**
 * These Constants are custom
 */
define('BASE_PATH', '/Library/WebServer/Documents/drupal/');
define('WEB_VIEWABLE', 'sites/all/modules/reports/jasperapiclient/');
define('FULL_PATH', BASE_PATH . WEB_VIEWABLE);
define('WRITABLE', FULL_PATH . 'images/');
//define('HTTP', 'http://localhost/jasperapiclient/');

define("TYPE_FOLDER","folder");
define("TYPE_REPORTUNIT","reportUnit");
define("TYPE_DATASOURCE","datasource");
define("TYPE_DATASOURCE_JDBC","jdbc");
define("TYPE_DATASOURCE_JNDI","jndi");
define("TYPE_DATASOURCE_BEAN","bean");
define("TYPE_IMAGE","img");
define("TYPE_FONT","font");
define("TYPE_JRXML","jrxml");
define("TYPE_CLASS_JAR","jar");
define("TYPE_RESOURCE_BUNDLE","prop");
define("TYPE_REFERENCE","reference");
define("TYPE_INPUT_CONTROL","inputControl");
define("TYPE_DATA_TYPE","dataType");
define("TYPE_OLAP_MONDRIAN_CONNECTION","olapMondrianCon");
define("TYPE_OLAP_XMLA_CONNECTION","olapXmlaCon");
define("TYPE_MONDRIAN_SCHEMA","olapMondrianSchema");
define("TYPE_XMLA_CONNTCTION","xmlaConntction");
define("TYPE_UNKNOW","unknow");
define("TYPE_LOV","lov"); // List of values...
define("TYPE_QUERY","query"); // List of values...

/**
 * These constants are copied here from DataType for facility
 */
define("DT_TYPE_TEXT",1);
define("DT_TYPE_NUMBER",2);
define("DT_TYPE_DATE",3);
define("DT_TYPE_DATE_TIME",4); 

/**
 * These constants are copied here from InputControl for facility
 */
define("IC_TYPE_BOOLEAN",1);
define("IC_TYPE_SINGLE_VALUE",2);
define("IC_TYPE_SINGLE_SELECT_LIST_OF_VALUES",3);
define("IC_TYPE_SINGLE_SELECT_QUERY",4);
define("IC_TYPE_MULTI_VALUE",5);
define("IC_TYPE_MULTI_SELECT_LIST_OF_VALUES",6);
define("IC_TYPE_MULTI_SELECT_QUERY",7);


define("PROP_VERSION","PROP_VERSION");
define("PROP_PARENT_FOLDER","PROP_PARENT_FOLDER");
define("PROP_RESOURCE_TYPE","PROP_RESOURCE_TYPE");
define("PROP_CREATION_DATE","PROP_CREATION_DATE");

// File resource properties
define("PROP_FILERESOURCE_HAS_DATA","PROP_HAS_DATA");
define("PROP_FILERESOURCE_IS_REFERENCE","PROP_IS_REFERENCE");
define("PROP_FILERESOURCE_REFERENCE_URI","PROP_REFERENCE_URI");
define("PROP_FILERESOURCE_WSTYPE","PROP_WSTYPE");

// Datasource properties
define("PROP_DATASOURCE_DRIVER_CLASS","PROP_DATASOURCE_DRIVER_CLASS");
define("PROP_DATASOURCE_CONNECTION_URL","PROP_DATASOURCE_CONNECTION_URL");
define("PROP_DATASOURCE_USERNAME","PROP_DATASOURCE_USERNAME");
define("PROP_DATASOURCE_PASSWORD","PROP_DATASOURCE_PASSWORD");
define("PROP_DATASOURCE_JNDI_NAME","PROP_DATASOURCE_JNDI_NAME");
define("PROP_DATASOURCE_BEAN_NAME","PROP_DATASOURCE_BEAN_NAME");
define("PROP_DATASOURCE_BEAN_METHOD","PROP_DATASOURCE_BEAN_METHOD");


// ReportUnit resource properties
define("PROP_RU_DATASOURCE_TYPE","PROP_RU_DATASOURCE_TYPE");
define("PROP_RU_IS_MAIN_REPORT","PROP_RU_IS_MAIN_REPORT");

// DataType resource properties
define("PROP_DATATYPE_STRICT_MAX","PROP_DATATYPE_STRICT_MAX");
define("PROP_DATATYPE_STRICT_MIN","PROP_DATATYPE_STRICT_MIN");
define("PROP_DATATYPE_MIN_VALUE","PROP_DATATYPE_MIN_VALUE");
define("PROP_DATATYPE_MAX_VALUE","PROP_DATATYPE_MAX_VALUE");
define("PROP_DATATYPE_PATTERN","PROP_DATATYPE_PATTERN");
define("PROP_DATATYPE_TYPE","PROP_DATATYPE_TYPE");

 // ListOfValues resource properties
define("PROP_LOV","PROP_LOV");
define("PROP_LOV_LABEL","PROP_LOV_LABEL");
define("PROP_LOV_VALUE","PROP_LOV_VALUE");


// InputControl resource properties
define("PROP_INPUTCONTROL_TYPE","PROP_INPUTCONTROL_TYPE");
define("PROP_INPUTCONTROL_IS_MANDATORY","PROP_INPUTCONTROL_IS_MANDATORY");
define("PROP_INPUTCONTROL_IS_READONLY","PROP_INPUTCONTROL_IS_READONLY");

// SQL resource properties
define("PROP_QUERY","PROP_QUERY");
define("PROP_QUERY_VISIBLE_COLUMNS","PROP_QUERY_VISIBLE_COLUMNS");
define("PROP_QUERY_VISIBLE_COLUMN_NAME","PROP_QUERY_VISIBLE_COLUMN_NAME");
define("PROP_QUERY_VALUE_COLUMN","PROP_QUERY_VALUE_COLUMN");
define("PROP_QUERY_LANGUAGE","PROP_QUERY_LANGUAGE");


// SQL resource properties
define("PROP_QUERY_DATA","PROP_QUERY_DATA");
define("PROP_QUERY_DATA_ROW","PROP_QUERY_DATA_ROW");
define("PROP_QUERY_DATA_ROW_COLUMN","PROP_QUERY_DATA_ROW_COLUMN");


define("MODIFY_REPORTUNIT","MODIFY_REPORTUNIT_URI");
define("CREATE_REPORTUNIT","CREATE_REPORTUNIT_BOOLEAN");
define("LIST_DATASOURCES","LIST_DATASOURCES");
define("IC_GET_QUERY_DATA","IC_GET_QUERY_DATA");
    
define("VALUE_TRUE","true");
define("VALUE_FALSE","false");
    
define("RUN_OUTPUT_FORMAT","RUN_OUTPUT_FORMAT");
define("RUN_OUTPUT_FORMAT_PDF","PDF");
define("RUN_OUTPUT_FORMAT_JRPRINT","JRPRINT");
define("RUN_OUTPUT_FORMAT_HTML","HTML");
define("RUN_OUTPUT_FORMAT_XLS","XLS");
define("RUN_OUTPUT_FORMAT_XML","XML");
define("RUN_OUTPUT_FORMAT_CSV","CSV");
define("RUN_OUTPUT_FORMAT_RTF","RTF");
define("RUN_OUTPUT_IMAGES_URI","IMAGES_URI");
define("RUN_OUTPUT_PAGE","PAGE");

?>