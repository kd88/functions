<?php

$node = new stdclass;
$node->vid =146942;
$node->uid =1;
$node->title ='General article skin';
$node->log = "";
$node->status =1;
$node->comment =1;
$node->promote =0;
$node->sticky =0;
$node->nid =146942;
$node->type ='pe_health_article';
$node->language ='und';
$node->created =1459929563;
$node->changed =1463481679;
$node->tnid =0;
$node->translate =0;
$node->revision_timestamp =1463481679;
$node->revision_uid =0;
$node->body['und'][0]['value'] = 'testmessages testmessages ';
$node->summary ="";
$node->summary['format'] = 'filtered_html' ;
$node->field_pe_shoot['field_image']['und']['0']['fid'] = 233;
$node->field_pe_shoot['field_image']['und']['0']['nid'] = 233;
$node->field_pe_shoot['field_image']['und']['0']['filename'] ='influenza_3.jpeg ';
$node->field_pe_shoot['field_image']['und']['0']['uri'] = 'public:influenza_3_1.jpeg';
$node->field_pe_shoot['field_image']['und']['0']['filemime'] = 'image/jpeg';
$node->field_pe_shoot['field_image']['und']['0']['filesize'] = 8500;
$node->field_pe_shoot['field_image']['und']['0']['status'] =1;
$node->field_pe_shoot['field_image']['und']['0']['timestamp'] =1459929563;
$node->field_pe_shoot['field_image']['und']['0']['rdf_mapping'][] = "";

$node->field_image['und']['0']['alt'] ="";
$node->field_image['und']['0']['title'] ="";
$node->field_image['und']['0']['width'] =34;
$node->field_image['und']['0']['height'] =243;

$node->field_pe_attribute_ids['und']['0']['tid'] = 324;
$node->field_pe_attribute_ids['und']['0']['taxonomy_term'] = new stdclass;
$node->field_pe_attribute_ids['und']['0']['taxonomy_term']->nid = 45;
$node->field_pe_attribute_ids['und']['0']['taxonomy_term']->vid = 45; 
$node->field_pe_attribute_ids['und']['0']['taxonomy_term']->name = 'kunal'; 
$node->field_pe_attribute_ids['und']['0']['taxonomy_term']->description = 'gdfgs'; 
$node->field_pe_attribute_ids['und']['0']['taxonomy_term']->format = "";
$node->field_pe_attribute_ids['und']['0']['taxonomy_term']->weight = 0;
$node->field_pe_attribute_ids['und']['0']['taxonomy_term']->vocabulary_machine_name = "article_attributes";
$node->field_pe_attribute_ids['und']['0']['field_pe_internal_attribute_id'][] = "";
$node->field_pe_attribute_ids['und']['0']['field_cat_image'][] = "";
$node->field_pe_attribute_ids['und']['0']['rdf_mapping']['rdftype'][] = " skos:Concept";
$node->field_pe_attribute_ids['und']['0']['name']['predicates'][] = "qeewq";
$node->field_pe_attribute_ids['und']['0']['name']['predicates'][] = "asass";
$node->field_pe_attribute_ids['und']['0']['description']['predicates'][] = "asass";
$node->field_pe_attribute_ids['und']['0']['vid']['predicates'][] = "asass";
$node->field_pe_attribute_ids['und']['0']['vid']['type'] = "rel";
$node->field_pe_attribute_ids['und']['0']['parent']['predicates'][] = "asass";
$node->field_pe_attribute_ids['und']['0']['parent']['type'] = "rel";



$categories = array( array ( array( 'CAR_TIR', 'Tires', 100 ),
               array( 'CAR_OIL', 'Oil', 10 ),
               array( 'CAR_SPK', 'Spark Plugs', 4 )
              ),
           array ( array( 'VAN_TIR', 'Tires', 120 ),
               array( 'VAN_OIL', 'Oil', 12 ),
               array( 'VAN_SPK', 'Spark Plugs', 5 )
              ),
           array ( array( 'TRK_TIR', 'Tires', 150 ),
               array( 'TRK_OIL', 'Oil', 15 ),
               array( 'TRK_SPK', 'Spark Plugs', 6 )
              )
          );


$json_string = '{"web-app": {
  "servlet": [   
    {
      "servlet-name": "cofaxCDS",
      "servlet-class": "org.cofax.cds.CDSServlet",
      "init-param": {
        "configGlossary:installationAt": "Philadelphia, PA",
        "configGlossary:adminEmail": "ksm@pobox.com",
        "configGlossary:poweredBy": "Cofax",
        "configGlossary:poweredByIcon": "/images/cofax.gif",
        "configGlossary:staticPath": "/content/static",
        "templateProcessorClass": "org.cofax.WysiwygTemplate",
        "templateLoaderClass": "org.cofax.FilesTemplateLoader",
        "templatePath": "templates",
        "templateOverridePath": "",
        "defaultListTemplate": "listTemplate.htm",
        "defaultFileTemplate": "articleTemplate.htm",
        "useJSP": false,
        "jspListTemplate": "listTemplate.jsp",
        "jspFileTemplate": "articleTemplate.jsp",
        "cachePackageTagsTrack": 200,
        "cachePackageTagsStore": 200,
        "cachePackageTagsRefresh": 60,
        "cacheTemplatesTrack": 100,
        "cacheTemplatesStore": 50,
        "cacheTemplatesRefresh": 15,
        "cachePagesTrack": 200,
        "cachePagesStore": 100,
        "cachePagesRefresh": 10,
        "cachePagesDirtyRead": 10,
        "searchEngineListTemplate": "forSearchEnginesList.htm",
        "searchEngineFileTemplate": "forSearchEngines.htm",
        "searchEngineRobotsDb": "WEB-INF/robots.db",
        "useDataStore": true,
        "dataStoreClass": "org.cofax.SqlDataStore",
        "redirectionClass": "org.cofax.SqlRedirection",
        "dataStoreName": "cofax",
        "dataStoreDriver": "com.microsoft.jdbc.sqlserver.SQLServerDriver",
        "dataStoreUrl": "jdbc:microsoft:sqlserver://LOCALHOST:1433;DatabaseName=goon",
        "dataStoreUser": "sa",
        "dataStorePassword": "dataStoreTestQuery",
        "dataStoreTestQuery": "SET NOCOUNT ON;select test=test;",
        "dataStoreLogFile": "/usr/local/tomcat/logs/datastore.log",
        "dataStoreInitConns": 10,
        "dataStoreMaxConns": 100,
        "dataStoreConnUsageLimit": 100,
        "dataStoreLogLevel": "debug",
        "maxUrlLength": 500}},
    {
      "servlet-name": "cofaxEmail",
      "servlet-class": "org.cofax.cds.EmailServlet",
      "init-param": {
      "mailHost": "mail1",
      "mailHostOverride": "mail2"}},
    {
      "servlet-name": "cofaxAdmin",
      "servlet-class": "org.cofax.cds.AdminServlet"},
 
    {
      "servlet-name": "fileServlet",
      "servlet-class": "org.cofax.cds.FileServlet"},
    {
      "servlet-name": "cofaxTools",
      "servlet-class": "org.cofax.cms.CofaxToolsServlet",
      "init-param": {
        "templatePath": "toolstemplates/",
        "log": 1,
        "logLocation": "/usr/local/tomcat/logs/CofaxTools.log",
        "logMaxSize": "",
        "dataLog": 1,
        "dataLogLocation": "/usr/local/tomcat/logs/dataLog.log",
        "dataLogMaxSize": "",
        "removePageCache": "/content/admin/remove?cache=pages&id=",
        "removeTemplateCache": "/content/admin/remove?cache=templates&id=",
        "fileTransferFolder": "/usr/local/tomcat/webapps/content/fileTransferFolder",
        "lookInContext": 1,
        "adminGroupID": 4,
        "betaServer": true}}],
  "servlet-mapping": {
    "cofaxCDS": "/",
    "cofaxEmail": "/cofaxutil/aemail/*",
    "cofaxAdmin": "/admin/*",
    "fileServlet": "/static/*",
    "cofaxTools": "/tools/*"},
 
  "taglib": {
    "taglib-uri": "cofax.tld",
    "taglib-location": "/WEB-INF/tlds/cofax.tld"}}}';


 $json = json_decode($json_string);   

