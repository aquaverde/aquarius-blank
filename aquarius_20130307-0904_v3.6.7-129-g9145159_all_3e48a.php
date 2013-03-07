<?php 
/* Aquarius installer pack 
 * Date: 2013.03.07-09.04
 * Host: aqua-imac-jc.local
 * Tag: 3e48a
 * Version: v3.6.7-129-g9145159
 * Content: .htaccess aquarius/ckconfig.js aquarius/config.php aquarius/core aquarius/init aquarius/templates css download favicon.ico interface lib pictures robots.txt
 */


set_time_limit(0);
error_reporting(E_ALL);
ini_set("display_errors","1");
date_default_timezone_set("UTC");

$op = false;
$ops = array();
if (isset($_POST)) $ops = array_keys($_POST);
if (isset($argv)) $ops = array_merge($ops, $argv);

if (in_array("setup", $ops)) {
    include "aquarius/core/lib/Maintenance_Mode_Control.php";
    Maintenance_Mode_Control::enable(2);
    header("Location: aquarius/admin/setup.php");
    exit;
}


echo "<html><style type=\"text/css\">* { margin: 0; padding: 0; color: #000; font-family: Arial, Helvetica, sans-serif; font-size: 12px; }
html { background-color: #fff; }
body { margin: 15px 25px 25px 20px; font-family: Arial, Helvetica, sans-serif; font-size: 12px; background-color: white; min-width: 635px; max-width: 900px; padding-bottom: 20px; }
input, textarea { background-color: white; }
	
h1 { font-size: 21px; color: #8AA5B8; font-weight: normal; margin-bottom: 5px; margin-top: 3px; }
h2 { font-size: 12px; font-weight: bold; margin: 3px 0; }
h3 { font-size: 12px; font-weight: bold; margin: 3px 0; }
img { border: none; }

.thumb { max-height: 85px; max-width: 85px; margin: 3px; cursor: pointer; }
.superthumb { max-height: 120px; max-width: 120px; margin: 5px; }
div.sourcelink { padding-bottom: 10px; }
thin { font-weight: normal; }
.little { font-size: 11px; line-height: 12px; }
.clear { clear:both; }


/* outer div */
div#outer { padding: 15px 10px 20px 10px; background-color: #e0e7ec; border: 1px solid #6286a0 ; margin-bottom: 10px; z-index: 1; }
div#outer-closed { padding: 10px 15px 10px 10px; background-color: #e0e7ec; border: 1px solid #6286a0 ; min-width: 400px; margin-bottom: 15px; z-index: 1; }
div.multi { padding: 5px 5px 5px 5px; border: 1px solid #6286a0 ; }
div.message { position: relative; color: #1E3B00; max-height: 53px; overflow: auto; font-size: 12px; vertical-align: middle; background-color: #E4EDBB; border: 2px #C1D473 solid; padding: 6px 10px; margin-bottom: 8px; background-image: url(../picts/ok.png); background-repeat: no-repeat; background-position: 4px 2px; padding-left: 35px; }
div.warn { border: 2px #FEBCBE solid; background-color: #FCE0E1; color: #8F1632; margin: 15px 0; padding: 10px; width: 50%; background-image: url(../picts/error.png); background-repeat: no-repeat; background-position: 8px 5px; padding-left: 70px; }
div.dialog { background-color: #e0e7ec; border: 1px solid #6286a0 ; width: 300px; width: 400px; margin-top: 10px; padding: 10px 12px 5px 8px; }
div.message.info { color: #513200; border: 2px #FFDD35 solid; min-height: 30px; padding-left: 70px; padding-bottom: 20px; background-color: #FFF6BD; background-image: url(../picts/warn.png); background-repeat: no-repeat; background-position: 8px 5px; overflow: visible; }
div.message.info h1 { color: #513200; font-size: 14px; font-weight: bold; margin: 0; padding: 0; margin-bottom: -10px; }

 
/* links elements */
a { color: #000000; text-decoration: none; }
a:hover	{ color: #4D6B7F; }	


/* outer boxes */
.bigbox { border: 1px solid #6286a0 ; padding: 0 15px 8px 15px; }
.bigbox h2 { height: 21px; line-height: 21px; background-color: #e0e7ec; padding: 0; margin: 0; margin: 0 -15px 5px -15px; padding-left: 8px; }
.bigbox .table2 { margin-bottom: 8px; }


/* tables */
table { padding: 0; margin: 0; border:0; }
td { font-size: 12px }
th { font-size: 12px; background-color: #e0e7ec ; height: 24px; text-align: left; }
.table { border-top: solid #6286a0 1px; border-left: solid #6286a0 1px; width: 100% !important; width: 96%; margin-bottom: 11px; padding: 0; margin:0; }
.table th, .table td { padding: 4px 8px; border-bottom: solid #6286a0 1px; border-right: solid #6286a0 1px; }
tr.bottom td { background-color: #fff; padding-top: 5px; }
.tabledialog { background-color: #fff; margin: 5px 0; padding: 10px; }
tr.bottom td{ background-color: #fff; padding-top: 5px; }
.update { margin: 5px 0; }
tr.clean td{ background-color: #fff; }
.table-list td, .table-list td a {font-size: 11px; padding: 2px 0;}

/* table 2 */
.table2 { border: none; padding: 0; width: 100% !important; width: 95%; margin-top: 10px; }
.table2 tr { height: 20px; }
.table2 th, .table2 td { padding: 0; border: none; line-height: 9px }
.table2 th { text-align: left; background-color: #fff; }
.table2 tr:hover, .tabledialog tr:hover, .table tr:hover{ background-color: #BEDCE7; }
.table2 tr.nohover:hover, .table tr.nohover:hover { background-color: #fff; }
.table2 input { font-size: 11px; border: solid #ccc 1px; text-align: right; padding: 1px 1px; }

/* table 3 */
.table3 { border: none; padding: 0; width: 100% !important; width: 95%; margin-top: 10px; margin-bottom: 25px; }
.table3 tr { height: 20px; }
.table3 th, .table2 td { padding: 0; border: none; line-height: 9px }
.table3 th { text-align: left; background-color: #fff; }
.table3 tr:hover, .tabledialog tr:hover, .table tr:hover{ background-color: #BEDCE7; }
.table3 tr.nohover:hover, .table tr.nohover:hover { background-color: #fff; }
.table3 td, .table3 th { border-bottom: solid #6286a0 1px; padding: 5px 2px; font-weight: normal;}
.table3 input { font-size: 11px; border: solid #ccc 1px; text-align: right; padding: 1px 1px; }

.data_table { border: 1px solid #6286A0 ; }
.data_table td { padding: 5px ; }
.data_table tr.header, .data_table tr.header td { background: #E0E7EC ; }
.data_table tr:hover { background: #BEDCE7 ; }

.even { background-color: #edf1f4; }
.ref_cell { max-height: 75px; overflow: auto; }


/* general styles */
#browse { margin: 0; padding: 5px; border: solid #6286a0 1px; }
#browse img { margin: 0; }
ul { margin: 0; padding: 0; list-style-position: inherit; list-style-type: none; }
.setupitems li { padding: 1px 0; }
#browse li { float: left; margin: 5px; height: 128px; width: 128px; cursor: pointer; }
#browse li img { padding: 4px; }
#browse li:hover img { padding: 1px; border: solid black 3px; }
#browse li.selected img { padding: 1px; border: solid black 3px; }
#browse li .pict { background-color: #fff; }
#filelist tr:hover, #filelist label:hover, #filelist input:hover { cursor: pointer; }
#selection { clear: both; }
.topnode { font-weight: bold; }
.active { font-weight: bold; border: 1px #557D99 solid; padding: 0px 2px; }
.toolbox .active { font-weight: bold; border: 2px #FF8F00 solid; background-color: #FFDDAB; padding: 0px 2px; }
.toolbox a.active:hover { color: #8F4E00; }
.toolbox .active.dim { color: #8F4E00; font-style: italic; }
.dim, .toolbox a.dim { color: #6286a0; font-style: italic; }
.title	{ font-size: 21px; color: #8AA5B8; }
#path { font-size: 12px; color: #8AA5B8; }
#path a { color: #8AA5B8; }	
.redFont { font-size: 11px; color: #CC0000; }
.white { color: #fff; }
.on	{ font-size: 11px; color: #CC0000; font-weight: bold; }
.mini { font-size: 10px}
.light { font-weight: normal; color: #6186A0; font-size: 11px; }
.eng, .eng a, .dim .eng { font-family: \"Arial Narrow\", Arial, Helvetica, sans-serif; font-size: 11px }
.titletop { font-size: 16px; font-weight: bolder; color: #fff; }
div.topbar { margin: 0; padding: 8px; background-color: #e0e7ec; border: solid #6286a0 1px; margin-bottom: 10px; }
div.topbar img, div.topbar input { vertical-align: middle; }
p.spiner, p.action { margin: 3px 0; padding: 0; }
.littleflag { width: 5px;}


/* toolbar */
#toolbar { min-width: 610px; background-color: #EDF1F4; border: 1px #A1B6C6 solid; height: 22px; padding: 2px 0; }
#toolbar .separator { float: left; border-right: solid #A1B6C6 1px; padding: 2px 8px; padding-top: 1px; height: 18px; vertical-align: middle; line-height: 18px; font-size: 11px; }
#toolbar a, #toolbar select { font-size: 11px; }
#toolbar select { vertical-align: middle; /*border: solid #6286A0 1px;*/ }
.iconbar img { padding: 0 4px; vertical-align: middle; }
.formbar img { padding-top: 0px; }


/* toolbox */
.toolbox { float: right; margin-top: -23px; margin-bottom: 5px !important; margin-bottom: 1px; padding: 2px; vertical-align: bottom; z-index: 10; text-align: right; margin-right: -11px; }
.toolbox .button, #toolbar .button { font-size: 11px; font-weight: normal; padding: 0px 4px; background-color: #F2F2F2; border-top: 1px solid #CCCCCC; border-right: 1px solid #666666; border-bottom: 1px solid #666666; border-left: 1px solid #CCCCCC; }
.toolbox a.dim { /*color: #000;*/ }
.toolbox img { padding-top: 2px; margin-right: 5px; vertical-align: middle; }
.toolbox .delete { vertical-align: middle; }
.toolbox form { }
.toolbox2 { float: right; margin-top: -10px !important; margin-top: -3px; margin-bottom: 0px !important; margin-bottom: 3px; padding: 3px 0 3px 6px; text-align: center; background-color: #f2f5f7; z-index: 10; }
.toolboxtop	 { float: right; margin-top: -11px; }
		
input.savebutton { position:absolute; right:28px; top:41px	 }
#goto { display: none; float: left; margin-top: -10px !important; margin-top: -3px; padding: 3px 0 3px 4px; background-color: #f2f5f7; width: 160px; vertical-align: middle; }
#goto img { vertical-align: middle; margin-top: -3px; }
#goto a, #outer-closed a { color: #6286a0; }
		
#goto2 { float: left; margin:0; padding: 0; background-color: #e0e7ec;	 }
.lastchange { float: right; font-size: 11px; color: #ADADAD; }


/* form elements */
form { padding: 0; margin: 0; }
input, img { vertical-align: middle; }
input, textarea { font-family: Arial, Helvetica, sans-serif; font-size: 12px; margin: 0; padding: 2px; color: black; }
input[type=\"radio\"], input[type=\"checkbox\"], input.checkbox { border: none; margin: 0 5px 0 0; padding: 0; }
input[type=\"image\"], .imagebutton { border: none; margin: 0; padding: 0; vertical-align:middle; background-color: transparent; cursor: pointer; }
input.imagebutton { border: none; margin: 0; padding: 0; vertical-align:middle; margin-top: -1px; margin-bottom: -1px; }
input.rooticon { margin-left: -5px; }
label { display: block; padding-bottom: 3px; padding-top: 3px; }
label.inline { display: inline; padding-bottom: 3px; border: none;padding-top: 0;}
.ef, .mle, .code { width: 99%; border: 1px solid #6286a0; }
.code { font-family: Monaco, \"Courier New\", Courier, monospace; font-size: 11px; }
input.checkbox { border: none; vertical-align:middle; }	
select, .select { /*border: 1px solid #6286a0;*/ }
.inputsmall { border: 1px solid #6286a0; }
select, option { font-size: 12px; border: default; }
option { font-family: \'Andale Mono\', Monaco, \"Courier New\", Courier, monospace; }
img.label_img {vertical-align: middle; cursor:help; float:right; margin-right: 5px; margin-top: 1px;}
.permission_level0 { background: url(../buttons/permission_superadmin.gif) right 4px no-repeat; margin-right: 3px;}
.permission_level1 { background: url(../buttons/permission_siteadmin.gif) right 4px no-repeat; margin-right: 3px;}
.permission_level2 { color: black }
input[type=\"text\"], input[type=\"password\"] {border: 1px #6286a0 solid;}
input.inputweight { width: 30px; margin-bottom: 0px; border: 1px #CCC solid; font-size: 10px; text-align: center; padding: 0; }
.contentedit_daypricing table {width: 550px;}
.contentedit_daypricing input[type=\"text\"] {margin-top:-1px; text-align: right;}
.contentedit_daypricing td {padding: 3px 0;}
.contentedit_daypricing tr:hover { background-color: #B7C2CA; }
.permission_level0.language_independent, .permission_level1.language_independent, .permission_level2.language_independent {margin-right: 52px;}
.permission_level0.language_independent .label_img , .permission_level1.language_independent .label_img , .permission_level2.language_independent .label_img {margin-right: -48px;}


.button { font-size: 11px; font-weight: normal; padding: 1px 4px; margin-top: 8px; background-color: #F2F2F2; border-top: 1px solid #CCCCCC; border-right: 1px solid #666666; border-bottom: 1px solid #666666; border-left: 1px solid #CCCCCC; cursor: pointer; }
.button:active { background-color: #E0E0E0; border-top: 1px solid #666; border-right: 1px solid #ccc; border-bottom: 1px solid #ccc; border-left: 1px solid #666; }
.contentedit_pointing_legend .button, .contentedit_pointing .button, .mapmenu_box .button, #toolbar .button { margin-top: 0; }
.submit	{ clear: both; margin-top: 20px; font-size: 12px; font-weight: bold; padding: 2px 6px; background-color: #F2F2F2; border-top: 2px solid #CCCCCC; border-right: 2px solid #666666; border-bottom: 2px solid #666666; border-left: 2px solid #CCCCCC; margin-right: 4px; }
.submit:hover, .undo:hover, .reset:hover, .cancel:hover, .cursor:hover { cursor: pointer; }
.submit:active	{ background-color: #E0E0E0; border-top: 2px solid #666; border-right: 2px solid #ccc; border-bottom: 2px solid #ccc; border-left: 2px solid #666; cursor: pointer; }
input[disabled] { color: #ccc; }
.undo, .cancel { font-size: 12px !important; font-weight: normal; padding: 2px 6px; background-color: #F2F2F2; border-top: 2px solid #CCCCCC; border-right: 2px solid #666666; border-bottom: 2px solid #666666; border-left: 2px solid #CCCCCC; margin-left: 4px; }
.cancel { margin-top: 20px; }
.reset { font-size: 12px; font-weight: normal; padding: 1px 6px; background-color: #F2F2F2; border-top: 2px solid #CCCCCC; border-right: 2px solid #666666; border-bottom: 2px solid #666666; border-left: 2px solid #CCCCCC; color: #999; margin-left: 4px; }
fieldset { margin: 1em 0; padding: 0.5em; border: 1px #A1B6C6 solid; background-color: #EDF1F4; }
legend { padding: 0 0.5em; font-weight: bold; }

#boxcontent_sharing { padding-top: 10px; }
#boxcontent_sharing ul { margin-top: 2px; }
#boxcontent_sharing label .label_img {margin-right: 4px;}


/* table styles */
.linetop { border-top-style: solid; border-top-color: #6286A0; border-top-width: 1px; }
.linetoplight { border-top-style: solid; border-top-color: #F1F4F8; border-top-width: 1px; }
.lineright { border-right-style: solid; border-right-color: #6286A0; border-right-width: 1px; border-top-style: solid; border-top-color: #6286A0; border-top-width: 1px; }
.linerightleft { border-right-style: solid; border-right-color: #6286A0; border-right-width: 1px; border-left-style: solid; border-left-color: #6286A0; border-left-width: 1px; }
.linerightnotop { border-right-style: solid; border-right-color: #6286A0; border-right-width: 1px; }
.lineleft { border-left-style: solid; border-left-color: #6286A0; border-left-width: 1px; }
.linestart { border-left-style: solid; border-left-color: #6286A0; border-left-width: 1px; border-right-style: solid; border-right-color: #6286A0; border-right-width: 1px; border-top-style: solid; border-top-color: #6286A0; border-top-width: 1px; height: 18px; vertical-align: middle; padding-left: 3px; }
.linestartlight { border-top-style: solid; border-top-color: #E0E7EC; border-top-width: 1px; border-left-style: solid; border-left-color: #6286A0; border-left-width: 1px; border-right-style: solid; border-right-color: #6286A0; border-right-width: 1px; vertical-align: middle; padding-left: 3px; }
.linebottom { border-bottom-style: solid; border-bottom-color: #6286A0; border-bottom-width: 1px; }
.linebottomlight { border-bottom-style: solid; border-bottom-color: #E0E7EC; border-bottom-width: 1px; }
.linebottomlightright { border-bottom-style: solid; border-bottom-color: #E0E7EC; border-bottom-width: 1px; border-right-style: solid; border-right-color: #6286A0; border-right-width: 1px; }
.lineallaround { border-left-style: solid; border-left-color: #6286A0; border-left-width: 1px; border-right-style: solid; border-right-color: #6286A0; border-right-width: 1px; border-top-style: solid; border-top-color: #6286A0; border-top-width: 1px; border-bottom-style: solid; border-bottom-color: #6286A0; border-bottom-width: 1px; }

.dim, .dim a, a.dim, .dimmed a, a.dimmed, tr.dim * { text-decoration: none; color: #6286a0; /*color: #ccc ;*/ }
#loginpage { margin: 0; }
#login-outer { background-color: #E0E7EC; }
#login-inner { border-right: 1px solid #fff ; border-left: 1px solid #fff; padding: 0 10px; }
#login-inner td { padding-bottom: 10px; }
.login-firstrow { padding-top: 20px; }
#loginlogo { margin-bottom: 3px; }
#login-submit { margin-bottom: 20px; }
#loginfooter, #loginhead { width: 350px; text-align: left; padding: 4px 0; }
#login p { color: #ccc; }
.darker { background-color: #f2f5f7; }
.hell { background-color: #fff; }


/* Formadmin styles */
table.formadmin { border: 1px solid #6286A0 ; margin-bottom: 4px; }
table.formadmin th { vertical-align: middle; padding: 4px; text-align: left; }
table.formadmin th div { font-weight: normal; font-size: 11px; display: inline; }
table.formadmin td { padding-right: 5px; font-size: 11px; }
table.formadmin input, table.formadmin select { width: 100%; border: 1px solid #ccc ; padding: 1px; font-size: 11px; }
table.formadmin select { font-family: \"Arial Narrow\", \"MS Trebuchet\", sans-serif; font-size: 11px; width: 100px; border: 1px solid #ccc ; padding: 1px; }	
table.formadmin input { background-color: transparent; padding: 2px 1px; }	
	
.rowtitle { font-weight: bold; }
table.formadmin input.dimed { color: #ccc; }
.nodimed { color: #000; }
table.formadmin input.checkbox { width: inherit; border: none; width: 15px; height: 15px; }
table.formadmin tr:hover { background-image: url(../picts/bkg5.gif); }


/* Styles for the contentedit pages */
div.contentedit { clear: left; border-top: 1px #D3DDE4 solid; padding-top: 2px; margin-top: 6px;}
#tabbox { margin: 0; padding: 0; }
ul.tabs { position: absolute; top: -24px; left: -1px; /* compensate border */ }
ul.tabs li { display: block; float: left; font-weight: bold; border: 1px solid #A1B6C6; border-bottom: 1px solid #6286a0; margin-right: 5px; padding: 4px 10px 3px 10px; background-color: #f2f5f7; cursor: pointer; height: 15px; }
ul.tabs li.active { background-color: #e0e7ec; border: 1px solid #6286a0 ; border-bottom: 1px solid #e0e7ec ; }

.contentedit_ef .ef, .contentedit_ef .mle, .contentedit_select .select { margin-bottom: 0; }
.contentedit_rte { margin-top: 10px; }
.contentedit_file tr:hover { background-color: #D8E1E8; }
.contentedit_file td:hover { background-color: none; }
.contentedit_file input.legend { width: 45%; }
.contentedit_file input.empty_legend { font-style: italic; color: grey; }
.contentedit_file .choose_button { margin: 3px; margin-left: 0; vertical-align: middle; cursor: pointer; }
.contentedit_file label { cursor: pointer; }
.contentedit_file select { margin: 3px; margin-left: 0; vertical-align: middle; }
.contentedit_file .thumb { max-height: 100px; max-width: 100px; margin: 3px 0px 1px 0px; }
.contentedit_checkbox { margin-top: 4px; margin-bottom: 0px; }
.contentedit_checkbox input { float: left; margin-top: -15px; }
.contentedit_checkbox label { margin-left: 18px; border: none;}
.contentedit_nodelist input { display: inline; }
.contentedit_nodelist label { display: inline; }
.contentedit_date input { padding-bottom: 1px; }
.contentedit_date img { margin-bottom: -2px; }
.contentedit_nodelist { margin-top: 10px; }
.contentedit_link tr:hover { background-color: inherit;	 } 

.drag { cursor: move; }

div.editcontrols { margin: 0; margin-bottom: 10px; }
div.editcontrols input { border: none; padding: 0; }

.contentedit_point label { display: block;	 }
.pointingselect	{ border: 1px solid #6286A0 ; padding: 5px; margin-top: 5px; background-color: #fff; }
.boxtable tr { height: 20px; }
.inline-item { margin-top: 10px; }
.inline-item label { display: inline; }
.short { width: 100px; }
 
.dynform_table { margin-top: 10px ; width: 100% ; }
.dynform_block_td { background: #ECF0F4 ; padding: 10px ; padding-top: 2px ; padding-bottom: 2px ; }
.dynform_seperator_td { height: 10px ; background: clear ; }
.dynform_line_wrapper { width: 100% ; border-bottom: 1px solid #6488A1 ; padding-top: 3px ; padding-bottom: 3px ; height: 14px ; }
.dynform_line_wrapper:hover { background-color: #DDE1E5; }
.dynform_line_wrapper_no_border { width: 100% ; padding-top: 5px ; padding-bottom: 5px ; clear: both ; }
.dynform_block_header { font-weight: bold ; float: left ; width: 80% ; }
.dynform_block_controls { float:right ; text-align: right ; width: 100px ; }
.dynform-control-icon { padding-left: 0px ; float: left ; width: 20px ; }
.dynform-data-lg-link { padding-left: 10px ; float: left ; width: 45px ; }
.dynform_field_desc_wrapper { float: left ; width: 80% ; }
.dynform_field_title { float: left ; }
.dynform_field_type { float: right ; width: 170px ; }

.df_new_button, .new_button { font-size: 11px; font-weight: bold; padding: 0px 2px ; margin: 0px ; background-color: #EAFAE5 ; border: 1px solid #34CC01 ; color: #34CC01 ; vertical-align: top ; }
.new_button:hover { color: #148600; }
button.no_deco { border: none ; margin: 0 ; padding: 0 ; }
.fm_form_icon { float: left ; }
.fm_title { float: left ; vertical-align: top ; padding-top: 5px ; padding-left: 3px ; }
.fm_command { padding-top: 3px ; float: right ; }
.nowrap label { display: inline; }


/* Overlay div */
.overlay_background { position: fixed; left: 0; right: 0; top: 0; bottom: 0; opacity: 0.5;


/* IE7 & IE8 opacity */
filter: alpha(opacity=50); -ms-filter:\"progid:DXImageTransform.Microsoft.Alpha(Opacity=50)\"; background-color: white; z-index: 50; }
.overlay { position: fixed; top: 20%; left: 20%; bottom: 20%; right: 20%; width: auto; height: auto; background-color: #e0e7ec; border: 1px #6286A0 solid; z-index: 100; padding: 15px; }
.overlay .close { position: absolute; top: 8px; right: 15px; font-size: 11px; font-weight: normal; padding: 1px 4px; background-color: #F2F2F2; border-top: 1px solid #CCCCCC; border-right: 1px solid #666666; border-bottom: 1px solid #666666; border-left: 1px solid #CCCCCC; }
.overlay .scrollbox { height: 90%; width: 100%; overflow-x: hidden; overflow-y: auto; }
.overlay table { background-color: white; }
.overlay tr:hover { background-color: inherit; }
.overlay tr.selected { background-color: #BEDCE7; }
.rotator { margin-top: -20px; /*margin: 10px;*/ }


/* nodetree customization */
div.nodetree_row img { vertical-align: middle; }
div.nodetree_row { background-color: #edf1f4; height: 20px; vertical-align: middle; }
div.odd { background-color: white; }
div.nodetree_node:hover { background-color: #bedce7; }
.nodetree_icon { background-color: white; vertical-align: middle; }
#nodetree div.nodetree_row { vertical-align: middle; }
#nodetree span.title { padding: 0; margin: 0; vertical-align: middle; }
#nodetree span.nodetree_title img { padding: 0; margin: 0; vertical-align: middle; }
#nodetree span.contenttitle { padding-top: 2px; vertical-align: middle; }


/* Make titles of first two levels bold */
.nodetree_title { font-weight: bold; }


/* Ensure the rest of the titles have normal font-weight */
#nodetree .nodetree_container .nodetree_container .nodetree_container .nodetree_title,
.nodetree_title_content { font-weight: normal; }


/* google Maps */
#mapContent { margin-top:5px; }
#map { border: 1px solid #6286a0; height:400px; }
.mapmenu_box { border: 1px solid #6286a0; border-top: none; padding: 8px 10px 2px 10px; position: relative; font-size: 11px; height:auto; min-height:25px; }
.mapmenu_box_search { font-size: 11px; float: right; }
.mapmenu_box input { border: 1px solid #6286a0; margin-bottom: 4px; font-size: 11px; }
.mapmenu_box input[type=\"checkbox\"] { border: none; }
.mapmenu_box input[type=\"radio\"] { border: none; }
.mapmenu_box .button { width: inherit; font-size: 11px; font-weight: normal; padding: 0px 4px; background-color: #F2F2F2; border-top: 1px solid #CCCCCC; border-right: 1px solid #666666; border-bottom: 1px solid #666666; border-left: 1px solid #CCCCCC; }
.mapmenu_box select { font-size: 11px; border: default; margin-bottom: 4px; }
.mapmenu_box .gmap-textfield { width: 250px; }
.mapmenu_box textarea { font-size: 11px; width:250px; height:65px; border: 1px solid #6286a0; margin-bottom: 4px; }
.mapmenu_box label { padding: 0; margin:0; position:relative; font-size: 11px; }
.mapmenu_box .mapmenu_box_hasparent { font-size: 11px;
 }


/* file selection popup */
body.file_select { min-width: 300px; }</style>
    <body>
        <div class=\"dim\">";


// Included tar library follows
?><?php
// This is a package of the pear Tar library. To make it work everywhere, the
// Pear class itself is included as well.


/**
 * PEAR, the PHP Extension and Application Repository
 *
 * PEAR class and PEAR_Error class
 *
 * PHP versions 4 and 5
 *
 * LICENSE: This source file is subject to version 3.0 of the PHP license
 * that is available through the world-wide-web at the following URI:
 * http://www.php.net/license/3_0.txt.  If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to license@php.net so we can mail you a copy immediately.
 *
 * @category   pear
 * @package    PEAR
 * @author     Sterling Hughes <sterling@php.net>
 * @author     Stig Bakken <ssb@php.net>
 * @author     Tomas V.V.Cox <cox@idecnet.com>
 * @author     Greg Beaver <cellog@php.net>
 * @copyright  1997-2006 The PHP Group
 * @license    http://www.php.net/license/3_0.txt  PHP License 3.0
 * @version    CVS: $Id: PEAR.php,v 1.98 2006/01/23 05:38:05 cellog Exp $
 * @link       http://pear.php.net/package/PEAR
 * @since      File available since Release 0.1
 */

/**#@+
 * ERROR constants
 */
define('PEAR_ERROR_RETURN',     1);
define('PEAR_ERROR_PRINT',      2);
define('PEAR_ERROR_TRIGGER',    4);
define('PEAR_ERROR_DIE',        8);
define('PEAR_ERROR_CALLBACK',  16);
/**
 * WARNING: obsolete
 * @deprecated
 */
define('PEAR_ERROR_EXCEPTION', 32);
/**#@-*/
define('PEAR_ZE2', (function_exists('version_compare') &&
                    version_compare(zend_version(), "2-dev", "ge")));

if (substr(PHP_OS, 0, 3) == 'WIN') {
    define('OS_WINDOWS', true);
    define('OS_UNIX',    false);
    define('PEAR_OS',    'Windows');
} else {
    define('OS_WINDOWS', false);
    define('OS_UNIX',    true);
    define('PEAR_OS',    'Unix'); // blatant assumption
}

// instant backwards compatibility
if (!defined('PATH_SEPARATOR')) {
    if (OS_WINDOWS) {
        define('PATH_SEPARATOR', ';');
    } else {
        define('PATH_SEPARATOR', ':');
    }
}

$GLOBALS['_PEAR_default_error_mode']     = PEAR_ERROR_RETURN;
$GLOBALS['_PEAR_default_error_options']  = E_USER_NOTICE;
$GLOBALS['_PEAR_destructor_object_list'] = array();
$GLOBALS['_PEAR_shutdown_funcs']         = array();
$GLOBALS['_PEAR_error_handler_stack']    = array();

@ini_set('track_errors', true);

/**
 * Base class for other PEAR classes.  Provides rudimentary
 * emulation of destructors.
 *
 * If you want a destructor in your class, inherit PEAR and make a
 * destructor method called _yourclassname (same name as the
 * constructor, but with a "_" prefix).  Also, in your constructor you
 * have to call the PEAR constructor: $this->PEAR();.
 * The destructor method will be called without parameters.  Note that
 * at in some SAPI implementations (such as Apache), any output during
 * the request shutdown (in which destructors are called) seems to be
 * discarded.  If you need to get any debug information from your
 * destructor, use error_log(), syslog() or something similar.
 *
 * IMPORTANT! To use the emulated destructors you need to create the
 * objects by reference: $obj =& new PEAR_child;
 *
 * @category   pear
 * @package    PEAR
 * @author     Stig Bakken <ssb@php.net>
 * @author     Tomas V.V. Cox <cox@idecnet.com>
 * @author     Greg Beaver <cellog@php.net>
 * @copyright  1997-2006 The PHP Group
 * @license    http://www.php.net/license/3_0.txt  PHP License 3.0
 * @version    Release: 1.4.11
 * @link       http://pear.php.net/package/PEAR
 * @see        PEAR_Error
 * @since      Class available since PHP 4.0.2
 * @link        http://pear.php.net/manual/en/core.pear.php#core.pear.pear
 */
class PEAR
{
    // {{{ properties

    /**
     * Whether to enable internal debug messages.
     *
     * @var     bool
     * @access  private
     */
    var $_debug = false;

    /**
     * Default error mode for this object.
     *
     * @var     int
     * @access  private
     */
    var $_default_error_mode = null;

    /**
     * Default error options used for this object when error mode
     * is PEAR_ERROR_TRIGGER.
     *
     * @var     int
     * @access  private
     */
    var $_default_error_options = null;

    /**
     * Default error handler (callback) for this object, if error mode is
     * PEAR_ERROR_CALLBACK.
     *
     * @var     string
     * @access  private
     */
    var $_default_error_handler = '';

    /**
     * Which class to use for error objects.
     *
     * @var     string
     * @access  private
     */
    var $_error_class = 'PEAR_Error';

    /**
     * An array of expected errors.
     *
     * @var     array
     * @access  private
     */
    var $_expected_errors = array();

    // }}}

    // {{{ constructor

    /**
     * Constructor.  Registers this object in
     * $_PEAR_destructor_object_list for destructor emulation if a
     * destructor object exists.
     *
     * @param string $error_class  (optional) which class to use for
     *        error objects, defaults to PEAR_Error.
     * @access public
     * @return void
     */
    function PEAR($error_class = null)
    {
        $classname = strtolower(get_class($this));
        if ($this->_debug) {
            print "PEAR constructor called, class=$classname\n";
        }
        if ($error_class !== null) {
            $this->_error_class = $error_class;
        }
        while ($classname && strcasecmp($classname, "pear")) {
            $destructor = "_$classname";
            if (method_exists($this, $destructor)) {
                global $_PEAR_destructor_object_list;
                $_PEAR_destructor_object_list[] = &$this;
                if (!isset($GLOBALS['_PEAR_SHUTDOWN_REGISTERED'])) {
                    register_shutdown_function("_PEAR_call_destructors");
                    $GLOBALS['_PEAR_SHUTDOWN_REGISTERED'] = true;
                }
                break;
            } else {
                $classname = get_parent_class($classname);
            }
        }
    }

    // }}}
    // {{{ destructor

    /**
     * Destructor (the emulated type of...).  Does nothing right now,
     * but is included for forward compatibility, so subclass
     * destructors should always call it.
     *
     * See the note in the class desciption about output from
     * destructors.
     *
     * @access public
     * @return void
     */
    function _PEAR() {
        if ($this->_debug) {
            printf("PEAR destructor called, class=%s\n", strtolower(get_class($this)));
        }
    }

    // }}}
    // {{{ getStaticProperty()

    /**
    * If you have a class that's mostly/entirely static, and you need static
    * properties, you can use this method to simulate them. Eg. in your method(s)
    * do this: $myVar = &PEAR::getStaticProperty('myclass', 'myVar');
    * You MUST use a reference, or they will not persist!
    *
    * @access public
    * @param  string $class  The calling classname, to prevent clashes
    * @param  string $var    The variable to retrieve.
    * @return mixed   A reference to the variable. If not set it will be
    *                 auto initialised to NULL.
    */
    function &getStaticProperty($class, $var)
    {
        static $properties;
        return $properties[$class][$var];
    }

    // }}}
    // {{{ registerShutdownFunc()

    /**
    * Use this function to register a shutdown method for static
    * classes.
    *
    * @access public
    * @param  mixed $func  The function name (or array of class/method) to call
    * @param  mixed $args  The arguments to pass to the function
    * @return void
    */
    function registerShutdownFunc($func, $args = array())
    {
        // if we are called statically, there is a potential
        // that no shutdown func is registered.  Bug #6445
        if (!isset($GLOBALS['_PEAR_SHUTDOWN_REGISTERED'])) {
            register_shutdown_function("_PEAR_call_destructors");
            $GLOBALS['_PEAR_SHUTDOWN_REGISTERED'] = true;
        }
        $GLOBALS['_PEAR_shutdown_funcs'][] = array($func, $args);
    }

    // }}}
    // {{{ isError()

    /**
     * Tell whether a value is a PEAR error.
     *
     * @param   mixed $data   the value to test
     * @param   int   $code   if $data is an error object, return true
     *                        only if $code is a string and
     *                        $obj->getMessage() == $code or
     *                        $code is an integer and $obj->getCode() == $code
     * @access  public
     * @return  bool    true if parameter is an error
     */
    function isError($data, $code = null)
    {
        if (is_a($data, 'PEAR_Error')) {
            if (is_null($code)) {
                return true;
            } elseif (is_string($code)) {
                return $data->getMessage() == $code;
            } else {
                return $data->getCode() == $code;
            }
        }
        return false;
    }

    // }}}
    // {{{ setErrorHandling()

    /**
     * Sets how errors generated by this object should be handled.
     * Can be invoked both in objects and statically.  If called
     * statically, setErrorHandling sets the default behaviour for all
     * PEAR objects.  If called in an object, setErrorHandling sets
     * the default behaviour for that object.
     *
     * @param int $mode
     *        One of PEAR_ERROR_RETURN, PEAR_ERROR_PRINT,
     *        PEAR_ERROR_TRIGGER, PEAR_ERROR_DIE,
     *        PEAR_ERROR_CALLBACK or PEAR_ERROR_EXCEPTION.
     *
     * @param mixed $options
     *        When $mode is PEAR_ERROR_TRIGGER, this is the error level (one
     *        of E_USER_NOTICE, E_USER_WARNING or E_USER_ERROR).
     *
     *        When $mode is PEAR_ERROR_CALLBACK, this parameter is expected
     *        to be the callback function or method.  A callback
     *        function is a string with the name of the function, a
     *        callback method is an array of two elements: the element
     *        at index 0 is the object, and the element at index 1 is
     *        the name of the method to call in the object.
     *
     *        When $mode is PEAR_ERROR_PRINT or PEAR_ERROR_DIE, this is
     *        a printf format string used when printing the error
     *        message.
     *
     * @access public
     * @return void
     * @see PEAR_ERROR_RETURN
     * @see PEAR_ERROR_PRINT
     * @see PEAR_ERROR_TRIGGER
     * @see PEAR_ERROR_DIE
     * @see PEAR_ERROR_CALLBACK
     * @see PEAR_ERROR_EXCEPTION
     *
     * @since PHP 4.0.5
     */

    function setErrorHandling($mode = null, $options = null)
    {
        if (isset($this) && is_a($this, 'PEAR')) {
            $setmode     = &$this->_default_error_mode;
            $setoptions  = &$this->_default_error_options;
        } else {
            $setmode     = &$GLOBALS['_PEAR_default_error_mode'];
            $setoptions  = &$GLOBALS['_PEAR_default_error_options'];
        }

        switch ($mode) {
            case PEAR_ERROR_EXCEPTION:
            case PEAR_ERROR_RETURN:
            case PEAR_ERROR_PRINT:
            case PEAR_ERROR_TRIGGER:
            case PEAR_ERROR_DIE:
            case null:
                $setmode = $mode;
                $setoptions = $options;
                break;

            case PEAR_ERROR_CALLBACK:
                $setmode = $mode;
                // class/object method callback
                if (is_callable($options)) {
                    $setoptions = $options;
                } else {
                    trigger_error("invalid error callback", E_USER_WARNING);
                }
                break;

            default:
                trigger_error("invalid error mode", E_USER_WARNING);
                break;
        }
    }

    // }}}
    // {{{ expectError()

    /**
     * This method is used to tell which errors you expect to get.
     * Expected errors are always returned with error mode
     * PEAR_ERROR_RETURN.  Expected error codes are stored in a stack,
     * and this method pushes a new element onto it.  The list of
     * expected errors are in effect until they are popped off the
     * stack with the popExpect() method.
     *
     * Note that this method can not be called statically
     *
     * @param mixed $code a single error code or an array of error codes to expect
     *
     * @return int     the new depth of the "expected errors" stack
     * @access public
     */
    function expectError($code = '*')
    {
        if (is_array($code)) {
            array_push($this->_expected_errors, $code);
        } else {
            array_push($this->_expected_errors, array($code));
        }
        return sizeof($this->_expected_errors);
    }

    // }}}
    // {{{ popExpect()

    /**
     * This method pops one element off the expected error codes
     * stack.
     *
     * @return array   the list of error codes that were popped
     */
    function popExpect()
    {
        return array_pop($this->_expected_errors);
    }

    // }}}
    // {{{ _checkDelExpect()

    /**
     * This method checks unsets an error code if available
     *
     * @param mixed error code
     * @return bool true if the error code was unset, false otherwise
     * @access private
     * @since PHP 4.3.0
     */
    function _checkDelExpect($error_code)
    {
        $deleted = false;

        foreach ($this->_expected_errors AS $key => $error_array) {
            if (in_array($error_code, $error_array)) {
                unset($this->_expected_errors[$key][array_search($error_code, $error_array)]);
                $deleted = true;
            }

            // clean up empty arrays
            if (0 == count($this->_expected_errors[$key])) {
                unset($this->_expected_errors[$key]);
            }
        }
        return $deleted;
    }

    // }}}
    // {{{ delExpect()

    /**
     * This method deletes all occurences of the specified element from
     * the expected error codes stack.
     *
     * @param  mixed $error_code error code that should be deleted
     * @return mixed list of error codes that were deleted or error
     * @access public
     * @since PHP 4.3.0
     */
    function delExpect($error_code)
    {
        $deleted = false;

        if ((is_array($error_code) && (0 != count($error_code)))) {
            // $error_code is a non-empty array here;
            // we walk through it trying to unset all
            // values
            foreach($error_code as $key => $error) {
                if ($this->_checkDelExpect($error)) {
                    $deleted =  true;
                } else {
                    $deleted = false;
                }
            }
            return $deleted ? true : PEAR::raiseError("The expected error you submitted does not exist"); // IMPROVE ME
        } elseif (!empty($error_code)) {
            // $error_code comes alone, trying to unset it
            if ($this->_checkDelExpect($error_code)) {
                return true;
            } else {
                return PEAR::raiseError("The expected error you submitted does not exist"); // IMPROVE ME
            }
        } else {
            // $error_code is empty
            return PEAR::raiseError("The expected error you submitted is empty"); // IMPROVE ME
        }
    }

    // }}}
    // {{{ raiseError()

    /**
     * This method is a wrapper that returns an instance of the
     * configured error class with this object's default error
     * handling applied.  If the $mode and $options parameters are not
     * specified, the object's defaults are used.
     *
     * @param mixed $message a text error message or a PEAR error object
     *
     * @param int $code      a numeric error code (it is up to your class
     *                  to define these if you want to use codes)
     *
     * @param int $mode      One of PEAR_ERROR_RETURN, PEAR_ERROR_PRINT,
     *                  PEAR_ERROR_TRIGGER, PEAR_ERROR_DIE,
     *                  PEAR_ERROR_CALLBACK, PEAR_ERROR_EXCEPTION.
     *
     * @param mixed $options If $mode is PEAR_ERROR_TRIGGER, this parameter
     *                  specifies the PHP-internal error level (one of
     *                  E_USER_NOTICE, E_USER_WARNING or E_USER_ERROR).
     *                  If $mode is PEAR_ERROR_CALLBACK, this
     *                  parameter specifies the callback function or
     *                  method.  In other error modes this parameter
     *                  is ignored.
     *
     * @param string $userinfo If you need to pass along for example debug
     *                  information, this parameter is meant for that.
     *
     * @param string $error_class The returned error object will be
     *                  instantiated from this class, if specified.
     *
     * @param bool $skipmsg If true, raiseError will only pass error codes,
     *                  the error message parameter will be dropped.
     *
     * @access public
     * @return object   a PEAR error object
     * @see PEAR::setErrorHandling
     * @since PHP 4.0.5
     */
    function &raiseError($message = null,
                         $code = null,
                         $mode = null,
                         $options = null,
                         $userinfo = null,
                         $error_class = null,
                         $skipmsg = false)
    {
        // The error is yet a PEAR error object
        if (is_object($message)) {
            $code        = $message->getCode();
            $userinfo    = $message->getUserInfo();
            $error_class = $message->getType();
            $message->error_message_prefix = '';
            $message     = $message->getMessage();
        }

        if (isset($this) && isset($this->_expected_errors) && sizeof($this->_expected_errors) > 0 && sizeof($exp = end($this->_expected_errors))) {
            if ($exp[0] == "*" ||
                (is_int(reset($exp)) && in_array($code, $exp)) ||
                (is_string(reset($exp)) && in_array($message, $exp))) {
                $mode = PEAR_ERROR_RETURN;
            }
        }
        // No mode given, try global ones
        if ($mode === null) {
            // Class error handler
            if (isset($this) && isset($this->_default_error_mode)) {
                $mode    = $this->_default_error_mode;
                $options = $this->_default_error_options;
            // Global error handler
            } elseif (isset($GLOBALS['_PEAR_default_error_mode'])) {
                $mode    = $GLOBALS['_PEAR_default_error_mode'];
                $options = $GLOBALS['_PEAR_default_error_options'];
            }
        }

        if ($error_class !== null) {
            $ec = $error_class;
        } elseif (isset($this) && isset($this->_error_class)) {
            $ec = $this->_error_class;
        } else {
            $ec = 'PEAR_Error';
        }
        if ($skipmsg) {
            $a = &new $ec($code, $mode, $options, $userinfo);
            return $a;
        } else {
            $a = &new $ec($message, $code, $mode, $options, $userinfo);
            return $a;
        }
    }

    // }}}
    // {{{ throwError()

    /**
     * Simpler form of raiseError with fewer options.  In most cases
     * message, code and userinfo are enough.
     *
     * @param string $message
     *
     */
    function &throwError($message = null,
                         $code = null,
                         $userinfo = null)
    {
        if (isset($this) && is_a($this, 'PEAR')) {
            $a = &$this->raiseError($message, $code, null, null, $userinfo);
            return $a;
        } else {
            $a = &PEAR::raiseError($message, $code, null, null, $userinfo);
            return $a;
        }
    }

    // }}}
    function staticPushErrorHandling($mode, $options = null)
    {
        $stack = &$GLOBALS['_PEAR_error_handler_stack'];
        $def_mode    = &$GLOBALS['_PEAR_default_error_mode'];
        $def_options = &$GLOBALS['_PEAR_default_error_options'];
        $stack[] = array($def_mode, $def_options);
        switch ($mode) {
            case PEAR_ERROR_EXCEPTION:
            case PEAR_ERROR_RETURN:
            case PEAR_ERROR_PRINT:
            case PEAR_ERROR_TRIGGER:
            case PEAR_ERROR_DIE:
            case null:
                $def_mode = $mode;
                $def_options = $options;
                break;

            case PEAR_ERROR_CALLBACK:
                $def_mode = $mode;
                // class/object method callback
                if (is_callable($options)) {
                    $def_options = $options;
                } else {
                    trigger_error("invalid error callback", E_USER_WARNING);
                }
                break;

            default:
                trigger_error("invalid error mode", E_USER_WARNING);
                break;
        }
        $stack[] = array($mode, $options);
        return true;
    }

    function staticPopErrorHandling()
    {
        $stack = &$GLOBALS['_PEAR_error_handler_stack'];
        $setmode     = &$GLOBALS['_PEAR_default_error_mode'];
        $setoptions  = &$GLOBALS['_PEAR_default_error_options'];
        array_pop($stack);
        list($mode, $options) = $stack[sizeof($stack) - 1];
        array_pop($stack);
        switch ($mode) {
            case PEAR_ERROR_EXCEPTION:
            case PEAR_ERROR_RETURN:
            case PEAR_ERROR_PRINT:
            case PEAR_ERROR_TRIGGER:
            case PEAR_ERROR_DIE:
            case null:
                $setmode = $mode;
                $setoptions = $options;
                break;

            case PEAR_ERROR_CALLBACK:
                $setmode = $mode;
                // class/object method callback
                if (is_callable($options)) {
                    $setoptions = $options;
                } else {
                    trigger_error("invalid error callback", E_USER_WARNING);
                }
                break;

            default:
                trigger_error("invalid error mode", E_USER_WARNING);
                break;
        }
        return true;
    }

    // {{{ pushErrorHandling()

    /**
     * Push a new error handler on top of the error handler options stack. With this
     * you can easily override the actual error handler for some code and restore
     * it later with popErrorHandling.
     *
     * @param mixed $mode (same as setErrorHandling)
     * @param mixed $options (same as setErrorHandling)
     *
     * @return bool Always true
     *
     * @see PEAR::setErrorHandling
     */
    function pushErrorHandling($mode, $options = null)
    {
        $stack = &$GLOBALS['_PEAR_error_handler_stack'];
        if (isset($this) && is_a($this, 'PEAR')) {
            $def_mode    = &$this->_default_error_mode;
            $def_options = &$this->_default_error_options;
        } else {
            $def_mode    = &$GLOBALS['_PEAR_default_error_mode'];
            $def_options = &$GLOBALS['_PEAR_default_error_options'];
        }
        $stack[] = array($def_mode, $def_options);

        if (isset($this) && is_a($this, 'PEAR')) {
            $this->setErrorHandling($mode, $options);
        } else {
            PEAR::setErrorHandling($mode, $options);
        }
        $stack[] = array($mode, $options);
        return true;
    }

    // }}}
    // {{{ popErrorHandling()

    /**
    * Pop the last error handler used
    *
    * @return bool Always true
    *
    * @see PEAR::pushErrorHandling
    */
    function popErrorHandling()
    {
        $stack = &$GLOBALS['_PEAR_error_handler_stack'];
        array_pop($stack);
        list($mode, $options) = $stack[sizeof($stack) - 1];
        array_pop($stack);
        if (isset($this) && is_a($this, 'PEAR')) {
            $this->setErrorHandling($mode, $options);
        } else {
            PEAR::setErrorHandling($mode, $options);
        }
        return true;
    }

    // }}}
    // {{{ loadExtension()

    /**
    * OS independant PHP extension load. Remember to take care
    * on the correct extension name for case sensitive OSes.
    *
    * @param string $ext The extension name
    * @return bool Success or not on the dl() call
    */
    function loadExtension($ext)
    {
        if (!extension_loaded($ext)) {
            // if either returns true dl() will produce a FATAL error, stop that
            if ((ini_get('enable_dl') != 1) || (ini_get('safe_mode') == 1)||!function_exists('dl')) {
                return false;
            }
            if (OS_WINDOWS) {
                $suffix = '.dll';
            } elseif (PHP_OS == 'HP-UX') {
                $suffix = '.sl';
            } elseif (PHP_OS == 'AIX') {
                $suffix = '.a';
            } elseif (PHP_OS == 'OSX') {
                $suffix = '.bundle';
            } else {
                $suffix = '.so';
            }
            return @dl('php_'.$ext.$suffix) || @dl($ext.$suffix);
        }
        return true;
    }

    // }}}
}

// {{{ _PEAR_call_destructors()

function _PEAR_call_destructors()
{
    global $_PEAR_destructor_object_list;
    if (is_array($_PEAR_destructor_object_list) &&
        sizeof($_PEAR_destructor_object_list))
    {
        reset($_PEAR_destructor_object_list);
        if (@PEAR::getStaticProperty('PEAR', 'destructlifo')) {
            $_PEAR_destructor_object_list = array_reverse($_PEAR_destructor_object_list);
        }
        while (list($k, $objref) = each($_PEAR_destructor_object_list)) {
            $classname = get_class($objref);
            while ($classname) {
                $destructor = "_$classname";
                if (method_exists($objref, $destructor)) {
                    $objref->$destructor();
                    break;
                } else {
                    $classname = get_parent_class($classname);
                }
            }
        }
        // Empty the object list to ensure that destructors are
        // not called more than once.
        $_PEAR_destructor_object_list = array();
    }

    // Now call the shutdown functions
    if (is_array($GLOBALS['_PEAR_shutdown_funcs']) AND !empty($GLOBALS['_PEAR_shutdown_funcs'])) {
        foreach ($GLOBALS['_PEAR_shutdown_funcs'] as $value) {
            call_user_func_array($value[0], $value[1]);
        }
    }
}

// }}}
/**
 * Standard PEAR error class for PHP 4
 *
 * This class is supserseded by {@link PEAR_Exception} in PHP 5
 *
 * @category   pear
 * @package    PEAR
 * @author     Stig Bakken <ssb@php.net>
 * @author     Tomas V.V. Cox <cox@idecnet.com>
 * @author     Gregory Beaver <cellog@php.net>
 * @copyright  1997-2006 The PHP Group
 * @license    http://www.php.net/license/3_0.txt  PHP License 3.0
 * @version    Release: 1.4.11
 * @link       http://pear.php.net/manual/en/core.pear.pear-error.php
 * @see        PEAR::raiseError(), PEAR::throwError()
 * @since      Class available since PHP 4.0.2
 */
class PEAR_Error
{
    // {{{ properties

    var $error_message_prefix = '';
    var $mode                 = PEAR_ERROR_RETURN;
    var $level                = E_USER_NOTICE;
    var $code                 = -1;
    var $message              = '';
    var $userinfo             = '';
    var $backtrace            = null;

    // }}}
    // {{{ constructor

    /**
     * PEAR_Error constructor
     *
     * @param string $message  message
     *
     * @param int $code     (optional) error code
     *
     * @param int $mode     (optional) error mode, one of: PEAR_ERROR_RETURN,
     * PEAR_ERROR_PRINT, PEAR_ERROR_DIE, PEAR_ERROR_TRIGGER,
     * PEAR_ERROR_CALLBACK or PEAR_ERROR_EXCEPTION
     *
     * @param mixed $options   (optional) error level, _OR_ in the case of
     * PEAR_ERROR_CALLBACK, the callback function or object/method
     * tuple.
     *
     * @param string $userinfo (optional) additional user/debug info
     *
     * @access public
     *
     */
    function PEAR_Error($message = 'unknown error', $code = null,
                        $mode = null, $options = null, $userinfo = null)
    {
        if ($mode === null) {
            $mode = PEAR_ERROR_RETURN;
        }
        $this->message   = $message;
        $this->code      = $code;
        $this->mode      = $mode;
        $this->userinfo  = $userinfo;
        if (function_exists("debug_backtrace")) {
            if (@!PEAR::getStaticProperty('PEAR_Error', 'skiptrace')) {
                $this->backtrace = debug_backtrace();
            }
        }
        if ($mode & PEAR_ERROR_CALLBACK) {
            $this->level = E_USER_NOTICE;
            $this->callback = $options;
        } else {
            if ($options === null) {
                $options = E_USER_NOTICE;
            }
            $this->level = $options;
            $this->callback = null;
        }
        if ($this->mode & PEAR_ERROR_PRINT) {
            if (is_null($options) || is_int($options)) {
                $format = "%s";
            } else {
                $format = $options;
            }
            printf($format, $this->getMessage());
        }
        if ($this->mode & PEAR_ERROR_TRIGGER) {
            trigger_error($this->getMessage(), $this->level);
        }
        if ($this->mode & PEAR_ERROR_DIE) {
            $msg = $this->getMessage();
            if (is_null($options) || is_int($options)) {
                $format = "%s";
                if (substr($msg, -1) != "\n") {
                    $msg .= "\n";
                }
            } else {
                $format = $options;
            }
            die(sprintf($format, $msg));
        }
        if ($this->mode & PEAR_ERROR_CALLBACK) {
            if (is_callable($this->callback)) {
                call_user_func($this->callback, $this);
            }
        }
        if ($this->mode & PEAR_ERROR_EXCEPTION) {
            trigger_error("PEAR_ERROR_EXCEPTION is obsolete, use class PEAR_Exception for exceptions", E_USER_WARNING);
            eval('$e = new Exception($this->message, $this->code);throw($e);');
        }
    }

    // }}}
    // {{{ getMode()

    /**
     * Get the error mode from an error object.
     *
     * @return int error mode
     * @access public
     */
    function getMode() {
        return $this->mode;
    }

    // }}}
    // {{{ getCallback()

    /**
     * Get the callback function/method from an error object.
     *
     * @return mixed callback function or object/method array
     * @access public
     */
    function getCallback() {
        return $this->callback;
    }

    // }}}
    // {{{ getMessage()


    /**
     * Get the error message from an error object.
     *
     * @return  string  full error message
     * @access public
     */
    function getMessage()
    {
        return ($this->error_message_prefix . $this->message);
    }


    // }}}
    // {{{ getCode()

    /**
     * Get error code from an error object
     *
     * @return int error code
     * @access public
     */
     function getCode()
     {
        return $this->code;
     }

    // }}}
    // {{{ getType()

    /**
     * Get the name of this error/exception.
     *
     * @return string error/exception name (type)
     * @access public
     */
    function getType()
    {
        return get_class($this);
    }

    // }}}
    // {{{ getUserInfo()

    /**
     * Get additional user-supplied information.
     *
     * @return string user-supplied information
     * @access public
     */
    function getUserInfo()
    {
        return $this->userinfo;
    }

    // }}}
    // {{{ getDebugInfo()

    /**
     * Get additional debug information supplied by the application.
     *
     * @return string debug information
     * @access public
     */
    function getDebugInfo()
    {
        return $this->getUserInfo();
    }

    // }}}
    // {{{ getBacktrace()

    /**
     * Get the call backtrace from where the error was generated.
     * Supported with PHP 4.3.0 or newer.
     *
     * @param int $frame (optional) what frame to fetch
     * @return array Backtrace, or NULL if not available.
     * @access public
     */
    function getBacktrace($frame = null)
    {
        if (defined('PEAR_IGNORE_BACKTRACE')) {
            return null;
        }
        if ($frame === null) {
            return $this->backtrace;
        }
        return $this->backtrace[$frame];
    }

    // }}}
    // {{{ addUserInfo()

    function addUserInfo($info)
    {
        if (empty($this->userinfo)) {
            $this->userinfo = $info;
        } else {
            $this->userinfo .= " ** $info";
        }
    }

    // }}}
    // {{{ toString()

    /**
     * Make a string representation of this object.
     *
     * @return string a string with an object summary
     * @access public
     */
    function toString() {
        $modes = array();
        $levels = array(E_USER_NOTICE  => 'notice',
                        E_USER_WARNING => 'warning',
                        E_USER_ERROR   => 'error');
        if ($this->mode & PEAR_ERROR_CALLBACK) {
            if (is_array($this->callback)) {
                $callback = (is_object($this->callback[0]) ?
                    strtolower(get_class($this->callback[0])) :
                    $this->callback[0]) . '::' .
                    $this->callback[1];
            } else {
                $callback = $this->callback;
            }
            return sprintf('[%s: message="%s" code=%d mode=callback '.
                           'callback=%s prefix="%s" info="%s"]',
                           strtolower(get_class($this)), $this->message, $this->code,
                           $callback, $this->error_message_prefix,
                           $this->userinfo);
        }
        if ($this->mode & PEAR_ERROR_PRINT) {
            $modes[] = 'print';
        }
        if ($this->mode & PEAR_ERROR_TRIGGER) {
            $modes[] = 'trigger';
        }
        if ($this->mode & PEAR_ERROR_DIE) {
            $modes[] = 'die';
        }
        if ($this->mode & PEAR_ERROR_RETURN) {
            $modes[] = 'return';
        }
        return sprintf('[%s: message="%s" code=%d mode=%s level=%s '.
                       'prefix="%s" info="%s"]',
                       strtolower(get_class($this)), $this->message, $this->code,
                       implode("|", $modes), $levels[$this->level],
                       $this->error_message_prefix,
                       $this->userinfo);
    }

    // }}}
}

/*
 * Local Variables:
 * mode: php
 * tab-width: 4
 * c-basic-offset: 4
 * End:
 */
?>


<?php
/* vim: set expandtab tabstop=4 shiftwidth=4 softtabstop=4: */

/**
 * File::CSV
 *
 * PHP versions 4 and 5
 *
 * Copyright (c) 1997-2008,
 * Vincent Blavet <vincent@phpconcept.net>
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or without
 * modification, are permitted provided that the following conditions are met:
 *
 *     * Redistributions of source code must retain the above copyright notice,
 *       this list of conditions and the following disclaimer.
 *     * Redistributions in binary form must reproduce the above copyright
 *       notice, this list of conditions and the following disclaimer in the
 *       documentation and/or other materials provided with the distribution.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS"
 * AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE
 * IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
 * DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE
 * FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL
 * DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR
 * SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER
 * CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY,
 * OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 *
 * @category    File_Formats
 * @package     Archive_Tar
 * @author      Vincent Blavet <vincent@phpconcept.net>
 * @copyright   1997-2008 The Authors
 * @license     http://www.opensource.org/licenses/bsd-license.php New BSD License
 * @version     CVS: $Id: Tar.php 295988 2010-03-09 08:39:37Z mrook $
 * @link        http://pear.php.net/package/Archive_Tar
 */

//require_once 'PEAR.php';


define ('ARCHIVE_TAR_ATT_SEPARATOR', 90001);
define ('ARCHIVE_TAR_END_BLOCK', pack("a512", ''));

/**
* Creates a (compressed) Tar archive
*
* @author   Vincent Blavet <vincent@phpconcept.net>
* @version  $Revision: 295988 $
* @license  http://www.opensource.org/licenses/bsd-license.php New BSD License
* @package  Archive_Tar
*/
class Archive_Tar extends PEAR
{
    /**
    * @var string Name of the Tar
    */
    var $_tarname='';

    /**
    * @var boolean if true, the Tar file will be gzipped
    */
    var $_compress=false;

    /**
    * @var string Type of compression : 'none', 'gz' or 'bz2'
    */
    var $_compress_type='none';

    /**
    * @var string Explode separator
    */
    var $_separator=' ';

    /**
    * @var file descriptor
    */
    var $_file=0;

    /**
    * @var string Local Tar name of a remote Tar (http:// or ftp://)
    */
    var $_temp_tarname='';

    /**
    * @var string regular expression for ignoring files or directories
    */
    var $_ignore_regexp='';

    // {{{ constructor
    /**
    * Archive_Tar Class constructor. This flavour of the constructor only
    * declare a new Archive_Tar object, identifying it by the name of the
    * tar file.
    * If the compress argument is set the tar will be read or created as a
    * gzip or bz2 compressed TAR file.
    *
    * @param    string  $p_tarname  The name of the tar archive to create
    * @param    string  $p_compress can be null, 'gz' or 'bz2'. This
    *                   parameter indicates if gzip or bz2 compression
    *                   is required.  For compatibility reason the
    *                   boolean value 'true' means 'gz'.
    * @access public
    */
    function Archive_Tar($p_tarname, $p_compress = null)
    {
        $this->PEAR();
        $this->_compress = false;
        $this->_compress_type = 'none';
        if (($p_compress === null) || ($p_compress == '')) {
            if (@file_exists($p_tarname)) {
                if ($fp = @fopen($p_tarname, "rb")) {
                    // look for gzip magic cookie
                    $data = fread($fp, 2);
                    fclose($fp);
                    if ($data == "\37\213") {
                        $this->_compress = true;
                        $this->_compress_type = 'gz';
                    // No sure it's enought for a magic code ....
                    } elseif ($data == "BZ") {
                        $this->_compress = true;
                        $this->_compress_type = 'bz2';
                    }
                }
            } else {
                // probably a remote file or some file accessible
                // through a stream interface
                if (substr($p_tarname, -2) == 'gz') {
                    $this->_compress = true;
                    $this->_compress_type = 'gz';
                } elseif ((substr($p_tarname, -3) == 'bz2') ||
                          (substr($p_tarname, -2) == 'bz')) {
                    $this->_compress = true;
                    $this->_compress_type = 'bz2';
                }
            }
        } else {
            if (($p_compress === true) || ($p_compress == 'gz')) {
                $this->_compress = true;
                $this->_compress_type = 'gz';
            } else if ($p_compress == 'bz2') {
                $this->_compress = true;
                $this->_compress_type = 'bz2';
            } else {
                $this->_error("Unsupported compression type '$p_compress'\n".
                    "Supported types are 'gz' and 'bz2'.\n");
                return false;
            }
        }
        $this->_tarname = $p_tarname;
        if ($this->_compress) { // assert zlib or bz2 extension support
            if ($this->_compress_type == 'gz')
                $extname = 'zlib';
            else if ($this->_compress_type == 'bz2')
                $extname = 'bz2';

            if (!extension_loaded($extname)) {
                PEAR::loadExtension($extname);
            }
            if (!extension_loaded($extname)) {
                $this->_error("The extension '$extname' couldn't be found.\n".
                    "Please make sure your version of PHP was built ".
                    "with '$extname' support.\n");
                return false;
            }
        }
    }
    // }}}

    // {{{ destructor
    function _Archive_Tar()
    {
        $this->_close();
        // ----- Look for a local copy to delete
        if ($this->_temp_tarname != '')
            @unlink($this->_temp_tarname);
        $this->_PEAR();
    }
    // }}}

    // {{{ create()
    /**
    * This method creates the archive file and add the files / directories
    * that are listed in $p_filelist.
    * If a file with the same name exist and is writable, it is replaced
    * by the new tar.
    * The method return false and a PEAR error text.
    * The $p_filelist parameter can be an array of string, each string
    * representing a filename or a directory name with their path if
    * needed. It can also be a single string with names separated by a
    * single blank.
    * For each directory added in the archive, the files and
    * sub-directories are also added.
    * See also createModify() method for more details.
    *
    * @param array  $p_filelist An array of filenames and directory names, or a
	*                           single string with names separated by a single
	*                           blank space.
    * @return                   true on success, false on error.
    * @see createModify()
    * @access public
    */
    function create($p_filelist)
    {
        return $this->createModify($p_filelist, '', '');
    }
    // }}}

    // {{{ add()
    /**
    * This method add the files / directories that are listed in $p_filelist in
    * the archive. If the archive does not exist it is created.
    * The method return false and a PEAR error text.
    * The files and directories listed are only added at the end of the archive,
    * even if a file with the same name is already archived.
    * See also createModify() method for more details.
    *
    * @param array  $p_filelist An array of filenames and directory names, or a
	*                           single string with names separated by a single
	*                           blank space.
    * @return                   true on success, false on error.
    * @see createModify()
    * @access public
    */
    function add($p_filelist)
    {
        return $this->addModify($p_filelist, '', '');
    }
    // }}}

    // {{{ extract()
    function extract($p_path='')
    {
        return $this->extractModify($p_path, '');
    }
    // }}}

    // {{{ listContent()
    function listContent()
    {
        $v_list_detail = array();

        if ($this->_openRead()) {
            if (!$this->_extractList('', $v_list_detail, "list", '', '')) {
                unset($v_list_detail);
                $v_list_detail = 0;
            }
            $this->_close();
        }

        return $v_list_detail;
    }
    // }}}

    // {{{ createModify()
    /**
    * This method creates the archive file and add the files / directories
    * that are listed in $p_filelist.
    * If the file already exists and is writable, it is replaced by the
    * new tar. It is a create and not an add. If the file exists and is
    * read-only or is a directory it is not replaced. The method return
    * false and a PEAR error text.
    * The $p_filelist parameter can be an array of string, each string
    * representing a filename or a directory name with their path if
    * needed. It can also be a single string with names separated by a
    * single blank.
    * The path indicated in $p_remove_dir will be removed from the
    * memorized path of each file / directory listed when this path
    * exists. By default nothing is removed (empty path '')
    * The path indicated in $p_add_dir will be added at the beginning of
    * the memorized path of each file / directory listed. However it can
    * be set to empty ''. The adding of a path is done after the removing
    * of path.
    * The path add/remove ability enables the user to prepare an archive
    * for extraction in a different path than the origin files are.
    * See also addModify() method for file adding properties.
    *
    * @param array  $p_filelist     An array of filenames and directory names,
	*                               or a single string with names separated by
	*                               a single blank space.
    * @param string $p_add_dir      A string which contains a path to be added
	*                               to the memorized path of each element in
	*                               the list.
    * @param string $p_remove_dir   A string which contains a path to be
	*                               removed from the memorized path of each
	*                               element in the list, when relevant.
    * @return boolean               true on success, false on error.
    * @access public
    * @see addModify()
    */
    function createModify($p_filelist, $p_add_dir, $p_remove_dir='')
    {
        $v_result = true;

        if (!$this->_openWrite())
            return false;

        if ($p_filelist != '') {
            if (is_array($p_filelist))
                $v_list = $p_filelist;
            elseif (is_string($p_filelist))
                $v_list = explode($this->_separator, $p_filelist);
            else {
                $this->_cleanFile();
                $this->_error('Invalid file list');
                return false;
            }

            $v_result = $this->_addList($v_list, $p_add_dir, $p_remove_dir);
        }

        if ($v_result) {
            $this->_writeFooter();
            $this->_close();
        } else
            $this->_cleanFile();

        return $v_result;
    }
    // }}}

    // {{{ addModify()
    /**
    * This method add the files / directories listed in $p_filelist at the
    * end of the existing archive. If the archive does not yet exists it
    * is created.
    * The $p_filelist parameter can be an array of string, each string
    * representing a filename or a directory name with their path if
    * needed. It can also be a single string with names separated by a
    * single blank.
    * The path indicated in $p_remove_dir will be removed from the
    * memorized path of each file / directory listed when this path
    * exists. By default nothing is removed (empty path '')
    * The path indicated in $p_add_dir will be added at the beginning of
    * the memorized path of each file / directory listed. However it can
    * be set to empty ''. The adding of a path is done after the removing
    * of path.
    * The path add/remove ability enables the user to prepare an archive
    * for extraction in a different path than the origin files are.
    * If a file/dir is already in the archive it will only be added at the
    * end of the archive. There is no update of the existing archived
    * file/dir. However while extracting the archive, the last file will
    * replace the first one. This results in a none optimization of the
    * archive size.
    * If a file/dir does not exist the file/dir is ignored. However an
    * error text is send to PEAR error.
    * If a file/dir is not readable the file/dir is ignored. However an
    * error text is send to PEAR error.
    *
    * @param array      $p_filelist     An array of filenames and directory
	*                                   names, or a single string with names
	*                                   separated by a single blank space.
    * @param string     $p_add_dir      A string which contains a path to be
	*                                   added to the memorized path of each
	*                                   element in the list.
    * @param string     $p_remove_dir   A string which contains a path to be
	*                                   removed from the memorized path of
	*                                   each element in the list, when
    *                                   relevant.
    * @return                           true on success, false on error.
    * @access public
    */
    function addModify($p_filelist, $p_add_dir, $p_remove_dir='')
    {
        $v_result = true;

        if (!$this->_isArchive())
            $v_result = $this->createModify($p_filelist, $p_add_dir,
			                                $p_remove_dir);
        else {
            if (is_array($p_filelist))
                $v_list = $p_filelist;
            elseif (is_string($p_filelist))
                $v_list = explode($this->_separator, $p_filelist);
            else {
                $this->_error('Invalid file list');
                return false;
            }

            $v_result = $this->_append($v_list, $p_add_dir, $p_remove_dir);
        }

        return $v_result;
    }
    // }}}

    // {{{ addString()
    /**
    * This method add a single string as a file at the
    * end of the existing archive. If the archive does not yet exists it
    * is created.
    *
    * @param string     $p_filename     A string which contains the full
	*                                   filename path that will be associated
	*                                   with the string.
    * @param string     $p_string       The content of the file added in
	*                                   the archive.
    * @return                           true on success, false on error.
    * @access public
    */
    function addString($p_filename, $p_string)
    {
        $v_result = true;

        if (!$this->_isArchive()) {
            if (!$this->_openWrite()) {
                return false;
            }
            $this->_close();
        }

        if (!$this->_openAppend())
            return false;

        // Need to check the get back to the temporary file ? ....
        $v_result = $this->_addString($p_filename, $p_string);

        $this->_writeFooter();

        $this->_close();

        return $v_result;
    }
    // }}}

    // {{{ extractModify()
    /**
    * This method extract all the content of the archive in the directory
    * indicated by $p_path. When relevant the memorized path of the
    * files/dir can be modified by removing the $p_remove_path path at the
    * beginning of the file/dir path.
    * While extracting a file, if the directory path does not exists it is
    * created.
    * While extracting a file, if the file already exists it is replaced
    * without looking for last modification date.
    * While extracting a file, if the file already exists and is write
    * protected, the extraction is aborted.
    * While extracting a file, if a directory with the same name already
    * exists, the extraction is aborted.
    * While extracting a directory, if a file with the same name already
    * exists, the extraction is aborted.
    * While extracting a file/directory if the destination directory exist
    * and is write protected, or does not exist but can not be created,
    * the extraction is aborted.
    * If after extraction an extracted file does not show the correct
    * stored file size, the extraction is aborted.
    * When the extraction is aborted, a PEAR error text is set and false
    * is returned. However the result can be a partial extraction that may
    * need to be manually cleaned.
    *
    * @param string $p_path         The path of the directory where the
	*                               files/dir need to by extracted.
    * @param string $p_remove_path  Part of the memorized path that can be
	*                               removed if present at the beginning of
	*                               the file/dir path.
    * @return boolean               true on success, false on error.
    * @access public
    * @see extractList()
    */
    function extractModify($p_path, $p_remove_path)
    {
        $v_result = true;
        $v_list_detail = array();

        if ($v_result = $this->_openRead()) {
            $v_result = $this->_extractList($p_path, $v_list_detail,
			                                "complete", 0, $p_remove_path);
            $this->_close();
        }

        return $v_result;
    }
    // }}}

    // {{{ extractInString()
    /**
    * This method extract from the archive one file identified by $p_filename.
    * The return value is a string with the file content, or NULL on error.
    * @param string $p_filename     The path of the file to extract in a string.
    * @return                       a string with the file content or NULL.
    * @access public
    */
    function extractInString($p_filename)
    {
        if ($this->_openRead()) {
            $v_result = $this->_extractInString($p_filename);
            $this->_close();
        } else {
            $v_result = NULL;
        }

        return $v_result;
    }
    // }}}

    // {{{ extractList()
    /**
    * This method extract from the archive only the files indicated in the
    * $p_filelist. These files are extracted in the current directory or
    * in the directory indicated by the optional $p_path parameter.
    * If indicated the $p_remove_path can be used in the same way as it is
    * used in extractModify() method.
    * @param array  $p_filelist     An array of filenames and directory names,
	*                               or a single string with names separated
	*                               by a single blank space.
    * @param string $p_path         The path of the directory where the
	*                               files/dir need to by extracted.
    * @param string $p_remove_path  Part of the memorized path that can be
	*                               removed if present at the beginning of
	*                               the file/dir path.
    * @return                       true on success, false on error.
    * @access public
    * @see extractModify()
    */
    function extractList($p_filelist, $p_path='', $p_remove_path='')
    {
        $v_result = true;
        $v_list_detail = array();

        if (is_array($p_filelist))
            $v_list = $p_filelist;
        elseif (is_string($p_filelist))
            $v_list = explode($this->_separator, $p_filelist);
        else {
            $this->_error('Invalid string list');
            return false;
        }

        if ($v_result = $this->_openRead()) {
            $v_result = $this->_extractList($p_path, $v_list_detail, "partial",
			                                $v_list, $p_remove_path);
            $this->_close();
        }

        return $v_result;
    }
    // }}}

    // {{{ setAttribute()
    /**
    * This method set specific attributes of the archive. It uses a variable
    * list of parameters, in the format attribute code + attribute values :
    * $arch->setAttribute(ARCHIVE_TAR_ATT_SEPARATOR, ',');
    * @param mixed $argv            variable list of attributes and values
    * @return                       true on success, false on error.
    * @access public
    */
    function setAttribute()
    {
        $v_result = true;

        // ----- Get the number of variable list of arguments
        if (($v_size = func_num_args()) == 0) {
            return true;
        }

        // ----- Get the arguments
        $v_att_list = &func_get_args();

        // ----- Read the attributes
        $i=0;
        while ($i<$v_size) {

            // ----- Look for next option
            switch ($v_att_list[$i]) {
                // ----- Look for options that request a string value
                case ARCHIVE_TAR_ATT_SEPARATOR :
                    // ----- Check the number of parameters
                    if (($i+1) >= $v_size) {
                        $this->_error('Invalid number of parameters for '
						              .'attribute ARCHIVE_TAR_ATT_SEPARATOR');
                        return false;
                    }

                    // ----- Get the value
                    $this->_separator = $v_att_list[$i+1];
                    $i++;
                break;

                default :
                    $this->_error('Unknow attribute code '.$v_att_list[$i].'');
                    return false;
            }

            // ----- Next attribute
            $i++;
        }

        return $v_result;
    }
    // }}}

    // {{{ setIgnoreRegexp()
    /**
    * This method sets the regular expression for ignoring files and directories
    * at import, for example:
    * $arch->setIgnoreRegexp("#CVS|\.svn#");
    * @param string $regexp         regular expression defining which files or directories to ignore
    * @access public
    */
    function setIgnoreRegexp($regexp)
    {
    	$this->_ignore_regexp = $regexp;
    }
    // }}}

    // {{{ setIgnoreList()
    /**
    * This method sets the regular expression for ignoring all files and directories
    * matching the filenames in the array list at import, for example:
    * $arch->setIgnoreList(array('CVS', '.svn', 'bin/tool'));
    * @param array $list         a list of file or directory names to ignore
    * @access public
    */
    function setIgnoreList($list)
    {
    	$regexp = str_replace(array('#', '.', '^', '$'), array('\#', '\.', '\^', '\$'), $list);
    	$regexp = '#/'.join('$|/', $list).'#';
    	$this->setIgnoreRegexp($regexp);
    }
    // }}}

    // {{{ _error()
    function _error($p_message)
    {
        // ----- To be completed
        $this->raiseError($p_message);
    }
    // }}}

    // {{{ _warning()
    function _warning($p_message)
    {
        // ----- To be completed
        $this->raiseError($p_message);
    }
    // }}}

    // {{{ _isArchive()
    function _isArchive($p_filename=NULL)
    {
        if ($p_filename == NULL) {
            $p_filename = $this->_tarname;
        }
        clearstatcache();
        return @is_file($p_filename) && !@is_link($p_filename);
    }
    // }}}

    // {{{ _openWrite()
    function _openWrite()
    {
        if ($this->_compress_type == 'gz')
            $this->_file = @gzopen($this->_tarname, "wb9");
        else if ($this->_compress_type == 'bz2')
            $this->_file = @bzopen($this->_tarname, "w");
        else if ($this->_compress_type == 'none')
            $this->_file = @fopen($this->_tarname, "wb");
        else
            $this->_error('Unknown or missing compression type ('
			              .$this->_compress_type.')');

        if ($this->_file == 0) {
            $this->_error('Unable to open in write mode \''
			              .$this->_tarname.'\'');
            return false;
        }

        return true;
    }
    // }}}

    // {{{ _openRead()
    function _openRead()
    {
        if (strtolower(substr($this->_tarname, 0, 7)) == 'http://') {

          // ----- Look if a local copy need to be done
          if ($this->_temp_tarname == '') {
              $this->_temp_tarname = uniqid('tar').'.tmp';
              if (!$v_file_from = @fopen($this->_tarname, 'rb')) {
                $this->_error('Unable to open in read mode \''
				              .$this->_tarname.'\'');
                $this->_temp_tarname = '';
                return false;
              }
              if (!$v_file_to = @fopen($this->_temp_tarname, 'wb')) {
                $this->_error('Unable to open in write mode \''
				              .$this->_temp_tarname.'\'');
                $this->_temp_tarname = '';
                return false;
              }
              while ($v_data = @fread($v_file_from, 1024))
                  @fwrite($v_file_to, $v_data);
              @fclose($v_file_from);
              @fclose($v_file_to);
          }

          // ----- File to open if the local copy
          $v_filename = $this->_temp_tarname;

        } else
          // ----- File to open if the normal Tar file
          $v_filename = $this->_tarname;

        if ($this->_compress_type == 'gz')
            $this->_file = @gzopen($v_filename, "rb");
        else if ($this->_compress_type == 'bz2')
            $this->_file = @bzopen($v_filename, "r");
        else if ($this->_compress_type == 'none')
            $this->_file = @fopen($v_filename, "rb");
        else
            $this->_error('Unknown or missing compression type ('
			              .$this->_compress_type.')');

        if ($this->_file == 0) {
            $this->_error('Unable to open in read mode \''.$v_filename.'\'');
            return false;
        }

        return true;
    }
    // }}}

    // {{{ _openReadWrite()
    function _openReadWrite()
    {
        if ($this->_compress_type == 'gz')
            $this->_file = @gzopen($this->_tarname, "r+b");
        else if ($this->_compress_type == 'bz2') {
            $this->_error('Unable to open bz2 in read/write mode \''
			              .$this->_tarname.'\' (limitation of bz2 extension)');
            return false;
        } else if ($this->_compress_type == 'none')
            $this->_file = @fopen($this->_tarname, "r+b");
        else
            $this->_error('Unknown or missing compression type ('
			              .$this->_compress_type.')');

        if ($this->_file == 0) {
            $this->_error('Unable to open in read/write mode \''
			              .$this->_tarname.'\'');
            return false;
        }

        return true;
    }
    // }}}

    // {{{ _close()
    function _close()
    {
        //if (isset($this->_file)) {
        if (is_resource($this->_file)) {
            if ($this->_compress_type == 'gz')
                @gzclose($this->_file);
            else if ($this->_compress_type == 'bz2')
                @bzclose($this->_file);
            else if ($this->_compress_type == 'none')
                @fclose($this->_file);
            else
                $this->_error('Unknown or missing compression type ('
				              .$this->_compress_type.')');

            $this->_file = 0;
        }

        // ----- Look if a local copy need to be erase
        // Note that it might be interesting to keep the url for a time : ToDo
        if ($this->_temp_tarname != '') {
            @unlink($this->_temp_tarname);
            $this->_temp_tarname = '';
        }

        return true;
    }
    // }}}

    // {{{ _cleanFile()
    function _cleanFile()
    {
        $this->_close();

        // ----- Look for a local copy
        if ($this->_temp_tarname != '') {
            // ----- Remove the local copy but not the remote tarname
            @unlink($this->_temp_tarname);
            $this->_temp_tarname = '';
        } else {
            // ----- Remove the local tarname file
            @unlink($this->_tarname);
        }
        $this->_tarname = '';

        return true;
    }
    // }}}

    // {{{ _writeBlock()
    function _writeBlock($p_binary_data, $p_len=null)
    {
      if (is_resource($this->_file)) {
          if ($p_len === null) {
              if ($this->_compress_type == 'gz')
                  @gzputs($this->_file, $p_binary_data);
              else if ($this->_compress_type == 'bz2')
                  @bzwrite($this->_file, $p_binary_data);
              else if ($this->_compress_type == 'none')
                  @fputs($this->_file, $p_binary_data);
              else
                  $this->_error('Unknown or missing compression type ('
				                .$this->_compress_type.')');
          } else {
              if ($this->_compress_type == 'gz')
                  @gzputs($this->_file, $p_binary_data, $p_len);
              else if ($this->_compress_type == 'bz2')
                  @bzwrite($this->_file, $p_binary_data, $p_len);
              else if ($this->_compress_type == 'none')
                  @fputs($this->_file, $p_binary_data, $p_len);
              else
                  $this->_error('Unknown or missing compression type ('
				                .$this->_compress_type.')');

          }
      }
      return true;
    }
    // }}}

    // {{{ _readBlock()
    function _readBlock()
    {
      $v_block = null;
      if (is_resource($this->_file)) {
          if ($this->_compress_type == 'gz')
              $v_block = @gzread($this->_file, 512);
          else if ($this->_compress_type == 'bz2')
              $v_block = @bzread($this->_file, 512);
          else if ($this->_compress_type == 'none')
              $v_block = @fread($this->_file, 512);
          else
              $this->_error('Unknown or missing compression type ('
			                .$this->_compress_type.')');
      }
      return $v_block;
    }
    // }}}

    // {{{ _jumpBlock()
    function _jumpBlock($p_len=null)
    {
      if (is_resource($this->_file)) {
          if ($p_len === null)
              $p_len = 1;

          if ($this->_compress_type == 'gz') {
              @gzseek($this->_file, gztell($this->_file)+($p_len*512));
          }
          else if ($this->_compress_type == 'bz2') {
              // ----- Replace missing bztell() and bzseek()
              for ($i=0; $i<$p_len; $i++)
                  $this->_readBlock();
          } else if ($this->_compress_type == 'none')
              @fseek($this->_file, $p_len*512, SEEK_CUR);
          else
              $this->_error('Unknown or missing compression type ('
			                .$this->_compress_type.')');

      }
      return true;
    }
    // }}}

    // {{{ _writeFooter()
    function _writeFooter()
    {
      if (is_resource($this->_file)) {
          // ----- Write the last 0 filled block for end of archive
          $v_binary_data = pack('a1024', '');
          $this->_writeBlock($v_binary_data);
      }
      return true;
    }
    // }}}

    // {{{ _addList()
    function _addList($p_list, $p_add_dir, $p_remove_dir)
    {
      $v_result=true;
      $v_header = array();

      // ----- Remove potential windows directory separator
      $p_add_dir = $this->_translateWinPath($p_add_dir);
      $p_remove_dir = $this->_translateWinPath($p_remove_dir, false);

      if (!$this->_file) {
          $this->_error('Invalid file descriptor');
          return false;
      }

      if (sizeof($p_list) == 0)
          return true;

      foreach ($p_list as $v_filename) {
          if (!$v_result) {
              break;
          }

        // ----- Skip the current tar name
        if ($v_filename == $this->_tarname)
            continue;

        if ($v_filename == '')
            continue;

       	// ----- ignore files and directories matching the ignore regular expression
       	if ($this->_ignore_regexp && preg_match($this->_ignore_regexp, '/'.$v_filename)) {
            $this->_warning("File '$v_filename' ignored");
       	    continue;
       	}

        if (!file_exists($v_filename)) {
            $this->_warning("File '$v_filename' does not exist");
            continue;
        }

        // ----- Add the file or directory header
        if (!$this->_addFile($v_filename, $v_header, $p_add_dir, $p_remove_dir))
            return false;

        if (@is_dir($v_filename) && !@is_link($v_filename)) {
            if (!($p_hdir = opendir($v_filename))) {
                $this->_warning("Directory '$v_filename' can not be read");
                continue;
            }
            while (false !== ($p_hitem = readdir($p_hdir))) {
                if (($p_hitem != '.') && ($p_hitem != '..')) {
                    if ($v_filename != ".")
                        $p_temp_list[0] = $v_filename.'/'.$p_hitem;
                    else
                        $p_temp_list[0] = $p_hitem;

                    $v_result = $this->_addList($p_temp_list,
					                            $p_add_dir,
												$p_remove_dir);
                }
            }

            unset($p_temp_list);
            unset($p_hdir);
            unset($p_hitem);
        }
      }

      return $v_result;
    }
    // }}}

    // {{{ _addFile()
    function _addFile($p_filename, &$p_header, $p_add_dir, $p_remove_dir)
    {
      if (!$this->_file) {
          $this->_error('Invalid file descriptor');
          return false;
      }

      if ($p_filename == '') {
          $this->_error('Invalid file name');
          return false;
      }

      // ----- Calculate the stored filename
      $p_filename = $this->_translateWinPath($p_filename, false);;
      $v_stored_filename = $p_filename;
      if (strcmp($p_filename, $p_remove_dir) == 0) {
          return true;
      }
      if ($p_remove_dir != '') {
          if (substr($p_remove_dir, -1) != '/')
              $p_remove_dir .= '/';

          if (substr($p_filename, 0, strlen($p_remove_dir)) == $p_remove_dir)
              $v_stored_filename = substr($p_filename, strlen($p_remove_dir));
      }
      $v_stored_filename = $this->_translateWinPath($v_stored_filename);
      if ($p_add_dir != '') {
          if (substr($p_add_dir, -1) == '/')
              $v_stored_filename = $p_add_dir.$v_stored_filename;
          else
              $v_stored_filename = $p_add_dir.'/'.$v_stored_filename;
      }

      $v_stored_filename = $this->_pathReduction($v_stored_filename);

      if ($this->_isArchive($p_filename)) {
          if (($v_file = @fopen($p_filename, "rb")) == 0) {
              $this->_warning("Unable to open file '".$p_filename
			                  ."' in binary read mode");
              return true;
          }

          if (!$this->_writeHeader($p_filename, $v_stored_filename))
              return false;

          while (($v_buffer = fread($v_file, 512)) != '') {
              $v_binary_data = pack("a512", "$v_buffer");
              $this->_writeBlock($v_binary_data);
          }

          fclose($v_file);

      } else {
          // ----- Only header for dir
          if (!$this->_writeHeader($p_filename, $v_stored_filename))
              return false;
      }

      return true;
    }
    // }}}

    // {{{ _addString()
    function _addString($p_filename, $p_string)
    {
      if (!$this->_file) {
          $this->_error('Invalid file descriptor');
          return false;
      }

      if ($p_filename == '') {
          $this->_error('Invalid file name');
          return false;
      }

      // ----- Calculate the stored filename
      $p_filename = $this->_translateWinPath($p_filename, false);;

      if (!$this->_writeHeaderBlock($p_filename, strlen($p_string),
	                                  time(), 384, "", 0, 0))
          return false;

      $i=0;
      while (($v_buffer = substr($p_string, (($i++)*512), 512)) != '') {
          $v_binary_data = pack("a512", $v_buffer);
          $this->_writeBlock($v_binary_data);
      }

      return true;
    }
    // }}}

    // {{{ _writeHeader()
    function _writeHeader($p_filename, $p_stored_filename)
    {
        if ($p_stored_filename == '')
            $p_stored_filename = $p_filename;
        $v_reduce_filename = $this->_pathReduction($p_stored_filename);

        if (strlen($v_reduce_filename) > 99) {
          if (!$this->_writeLongHeader($v_reduce_filename))
            return false;
        }

        $v_info = lstat($p_filename);
        $v_uid = sprintf("%07s", DecOct($v_info[4]));
        $v_gid = sprintf("%07s", DecOct($v_info[5]));
        $v_perms = sprintf("%07s", DecOct($v_info['mode'] & 000777));

        $v_mtime = sprintf("%011s", DecOct($v_info['mtime']));

        $v_linkname = '';

        if (@is_link($p_filename)) {
          $v_typeflag = '2';
          $v_linkname = readlink($p_filename);
          $v_size = sprintf("%011s", DecOct(0));
        } elseif (@is_dir($p_filename)) {
          $v_typeflag = "5";
          $v_size = sprintf("%011s", DecOct(0));
        } else {
          $v_typeflag = '0';
          clearstatcache();
          $v_size = sprintf("%011s", DecOct($v_info['size']));
        }

        $v_magic = 'ustar ';

        $v_version = ' ';
        
        if (function_exists('posix_getpwuid'))
        {
          $userinfo = posix_getpwuid($v_info[4]);
          $groupinfo = posix_getgrgid($v_info[5]);
          
          $v_uname = $userinfo['name'];
          $v_gname = $groupinfo['name'];
        }
        else
        {
          $v_uname = '';
          $v_gname = '';
        }

        $v_devmajor = '';

        $v_devminor = '';

        $v_prefix = '';

        $v_binary_data_first = pack("a100a8a8a8a12a12",
		                            $v_reduce_filename, $v_perms, $v_uid,
									$v_gid, $v_size, $v_mtime);
        $v_binary_data_last = pack("a1a100a6a2a32a32a8a8a155a12",
		                           $v_typeflag, $v_linkname, $v_magic,
								   $v_version, $v_uname, $v_gname,
								   $v_devmajor, $v_devminor, $v_prefix, '');

        // ----- Calculate the checksum
        $v_checksum = 0;
        // ..... First part of the header
        for ($i=0; $i<148; $i++)
            $v_checksum += ord(substr($v_binary_data_first,$i,1));
        // ..... Ignore the checksum value and replace it by ' ' (space)
        for ($i=148; $i<156; $i++)
            $v_checksum += ord(' ');
        // ..... Last part of the header
        for ($i=156, $j=0; $i<512; $i++, $j++)
            $v_checksum += ord(substr($v_binary_data_last,$j,1));

        // ----- Write the first 148 bytes of the header in the archive
        $this->_writeBlock($v_binary_data_first, 148);

        // ----- Write the calculated checksum
        $v_checksum = sprintf("%06s ", DecOct($v_checksum));
        $v_binary_data = pack("a8", $v_checksum);
        $this->_writeBlock($v_binary_data, 8);

        // ----- Write the last 356 bytes of the header in the archive
        $this->_writeBlock($v_binary_data_last, 356);

        return true;
    }
    // }}}

    // {{{ _writeHeaderBlock()
    function _writeHeaderBlock($p_filename, $p_size, $p_mtime=0, $p_perms=0,
	                           $p_type='', $p_uid=0, $p_gid=0)
    {
        $p_filename = $this->_pathReduction($p_filename);

        if (strlen($p_filename) > 99) {
          if (!$this->_writeLongHeader($p_filename))
            return false;
        }

        if ($p_type == "5") {
          $v_size = sprintf("%011s", DecOct(0));
        } else {
          $v_size = sprintf("%011s", DecOct($p_size));
        }

        $v_uid = sprintf("%07s", DecOct($p_uid));
        $v_gid = sprintf("%07s", DecOct($p_gid));
        $v_perms = sprintf("%07s", DecOct($p_perms & 000777));

        $v_mtime = sprintf("%11s", DecOct($p_mtime));

        $v_linkname = '';

        $v_magic = 'ustar ';

        $v_version = ' ';

        if (function_exists('posix_getpwuid'))
        {
          $userinfo = posix_getpwuid($p_uid);
          $groupinfo = posix_getgrgid($p_gid);
          
          $v_uname = $userinfo['name'];
          $v_gname = $groupinfo['name'];
        }
        else
        {
          $v_uname = '';
          $v_gname = '';
        }
        
        $v_devmajor = '';

        $v_devminor = '';

        $v_prefix = '';

        $v_binary_data_first = pack("a100a8a8a8a12A12",
		                            $p_filename, $v_perms, $v_uid, $v_gid,
									$v_size, $v_mtime);
        $v_binary_data_last = pack("a1a100a6a2a32a32a8a8a155a12",
		                           $p_type, $v_linkname, $v_magic,
								   $v_version, $v_uname, $v_gname,
								   $v_devmajor, $v_devminor, $v_prefix, '');

        // ----- Calculate the checksum
        $v_checksum = 0;
        // ..... First part of the header
        for ($i=0; $i<148; $i++)
            $v_checksum += ord(substr($v_binary_data_first,$i,1));
        // ..... Ignore the checksum value and replace it by ' ' (space)
        for ($i=148; $i<156; $i++)
            $v_checksum += ord(' ');
        // ..... Last part of the header
        for ($i=156, $j=0; $i<512; $i++, $j++)
            $v_checksum += ord(substr($v_binary_data_last,$j,1));

        // ----- Write the first 148 bytes of the header in the archive
        $this->_writeBlock($v_binary_data_first, 148);

        // ----- Write the calculated checksum
        $v_checksum = sprintf("%06s ", DecOct($v_checksum));
        $v_binary_data = pack("a8", $v_checksum);
        $this->_writeBlock($v_binary_data, 8);

        // ----- Write the last 356 bytes of the header in the archive
        $this->_writeBlock($v_binary_data_last, 356);

        return true;
    }
    // }}}

    // {{{ _writeLongHeader()
    function _writeLongHeader($p_filename)
    {
        $v_size = sprintf("%11s ", DecOct(strlen($p_filename)));

        $v_typeflag = 'L';

        $v_linkname = '';

        $v_magic = '';

        $v_version = '';

        $v_uname = '';

        $v_gname = '';

        $v_devmajor = '';

        $v_devminor = '';

        $v_prefix = '';

        $v_binary_data_first = pack("a100a8a8a8a12a12",
		                            '././@LongLink', 0, 0, 0, $v_size, 0);
        $v_binary_data_last = pack("a1a100a6a2a32a32a8a8a155a12",
		                           $v_typeflag, $v_linkname, $v_magic,
								   $v_version, $v_uname, $v_gname,
								   $v_devmajor, $v_devminor, $v_prefix, '');

        // ----- Calculate the checksum
        $v_checksum = 0;
        // ..... First part of the header
        for ($i=0; $i<148; $i++)
            $v_checksum += ord(substr($v_binary_data_first,$i,1));
        // ..... Ignore the checksum value and replace it by ' ' (space)
        for ($i=148; $i<156; $i++)
            $v_checksum += ord(' ');
        // ..... Last part of the header
        for ($i=156, $j=0; $i<512; $i++, $j++)
            $v_checksum += ord(substr($v_binary_data_last,$j,1));

        // ----- Write the first 148 bytes of the header in the archive
        $this->_writeBlock($v_binary_data_first, 148);

        // ----- Write the calculated checksum
        $v_checksum = sprintf("%06s ", DecOct($v_checksum));
        $v_binary_data = pack("a8", $v_checksum);
        $this->_writeBlock($v_binary_data, 8);

        // ----- Write the last 356 bytes of the header in the archive
        $this->_writeBlock($v_binary_data_last, 356);

        // ----- Write the filename as content of the block
        $i=0;
        while (($v_buffer = substr($p_filename, (($i++)*512), 512)) != '') {
            $v_binary_data = pack("a512", "$v_buffer");
            $this->_writeBlock($v_binary_data);
        }

        return true;
    }
    // }}}

    // {{{ _readHeader()
    function _readHeader($v_binary_data, &$v_header)
    {
        if (strlen($v_binary_data)==0) {
            $v_header['filename'] = '';
            return true;
        }

        if (strlen($v_binary_data) != 512) {
            $v_header['filename'] = '';
            $this->_error('Invalid block size : '.strlen($v_binary_data));
            return false;
        }

        if (!is_array($v_header)) {
            $v_header = array();
        }
        // ----- Calculate the checksum
        $v_checksum = 0;
        // ..... First part of the header
        for ($i=0; $i<148; $i++)
            $v_checksum+=ord(substr($v_binary_data,$i,1));
        // ..... Ignore the checksum value and replace it by ' ' (space)
        for ($i=148; $i<156; $i++)
            $v_checksum += ord(' ');
        // ..... Last part of the header
        for ($i=156; $i<512; $i++)
           $v_checksum+=ord(substr($v_binary_data,$i,1));

        $v_data = unpack("a100filename/a8mode/a8uid/a8gid/a12size/a12mtime/"
		                 ."a8checksum/a1typeflag/a100link/a6magic/a2version/"
						 ."a32uname/a32gname/a8devmajor/a8devminor",
						 $v_binary_data);

        // ----- Extract the checksum
        $v_header['checksum'] = OctDec(trim($v_data['checksum']));
        if ($v_header['checksum'] != $v_checksum) {
            $v_header['filename'] = '';

            // ----- Look for last block (empty block)
            if (($v_checksum == 256) && ($v_header['checksum'] == 0))
                return true;

            $this->_error('Invalid checksum for file "'.$v_data['filename']
			              .'" : '.$v_checksum.' calculated, '
						  .$v_header['checksum'].' expected');
            return false;
        }

        // ----- Extract the properties
        $v_header['filename'] = $v_data['filename'];
        if ($this->_maliciousFilename($v_header['filename'])) {
            $this->_error('Malicious .tar detected, file "' . $v_header['filename'] .
                '" will not install in desired directory tree');
            return false;
        }
        $v_header['mode'] = OctDec(trim($v_data['mode']));
        $v_header['uid'] = OctDec(trim($v_data['uid']));
        $v_header['gid'] = OctDec(trim($v_data['gid']));
        $v_header['size'] = OctDec(trim($v_data['size']));
        $v_header['mtime'] = OctDec(trim($v_data['mtime']));
        if (($v_header['typeflag'] = $v_data['typeflag']) == "5") {
          $v_header['size'] = 0;
        }
        $v_header['link'] = trim($v_data['link']);
        /* ----- All these fields are removed form the header because
		they do not carry interesting info
        $v_header[magic] = trim($v_data[magic]);
        $v_header[version] = trim($v_data[version]);
        $v_header[uname] = trim($v_data[uname]);
        $v_header[gname] = trim($v_data[gname]);
        $v_header[devmajor] = trim($v_data[devmajor]);
        $v_header[devminor] = trim($v_data[devminor]);
        */

        return true;
    }
    // }}}

    // {{{ _maliciousFilename()
    /**
     * Detect and report a malicious file name
     *
     * @param string $file
     * @return bool
     * @access private
     */
    function _maliciousFilename($file)
    {
        if (strpos($file, '/../') !== false) {
            return true;
        }
        if (strpos($file, '../') === 0) {
            return true;
        }
        return false;
    }
    // }}}

    // {{{ _readLongHeader()
    function _readLongHeader(&$v_header)
    {
      $v_filename = '';
      $n = floor($v_header['size']/512);
      for ($i=0; $i<$n; $i++) {
        $v_content = $this->_readBlock();
        $v_filename .= $v_content;
      }
      if (($v_header['size'] % 512) != 0) {
        $v_content = $this->_readBlock();
        $v_filename .= trim($v_content);
      }

      // ----- Read the next header
      $v_binary_data = $this->_readBlock();

      if (!$this->_readHeader($v_binary_data, $v_header))
        return false;

      $v_filename = trim($v_filename);
      $v_header['filename'] = $v_filename;
        if ($this->_maliciousFilename($v_filename)) {
            $this->_error('Malicious .tar detected, file "' . $v_filename .
                '" will not install in desired directory tree');
            return false;
      }

      return true;
    }
    // }}}

    // {{{ _extractInString()
    /**
    * This method extract from the archive one file identified by $p_filename.
    * The return value is a string with the file content, or NULL on error.
    * @param string $p_filename     The path of the file to extract in a string.
    * @return                       a string with the file content or NULL.
    * @access private
    */
    function _extractInString($p_filename)
    {
        $v_result_str = "";

        While (strlen($v_binary_data = $this->_readBlock()) != 0)
        {
          if (!$this->_readHeader($v_binary_data, $v_header))
            return NULL;

          if ($v_header['filename'] == '')
            continue;

          // ----- Look for long filename
          if ($v_header['typeflag'] == 'L') {
            if (!$this->_readLongHeader($v_header))
              return NULL;
          }

          if ($v_header['filename'] == $p_filename) {
              if ($v_header['typeflag'] == "5") {
                  $this->_error('Unable to extract in string a directory '
				                .'entry {'.$v_header['filename'].'}');
                  return NULL;
              } else {
                  $n = floor($v_header['size']/512);
                  for ($i=0; $i<$n; $i++) {
                      $v_result_str .= $this->_readBlock();
                  }
                  if (($v_header['size'] % 512) != 0) {
                      $v_content = $this->_readBlock();
                      $v_result_str .= substr($v_content, 0,
					                          ($v_header['size'] % 512));
                  }
                  return $v_result_str;
              }
          } else {
              $this->_jumpBlock(ceil(($v_header['size']/512)));
          }
        }

        return NULL;
    }
    // }}}

    // {{{ _extractList()
    function _extractList($p_path, &$p_list_detail, $p_mode,
	                      $p_file_list, $p_remove_path)
    {
    $v_result=true;
    $v_nb = 0;
    $v_extract_all = true;
    $v_listing = false;

    $p_path = $this->_translateWinPath($p_path, false);
    if ($p_path == '' || (substr($p_path, 0, 1) != '/'
	    && substr($p_path, 0, 3) != "../" && !strpos($p_path, ':'))) {
      $p_path = "./".$p_path;
    }
    $p_remove_path = $this->_translateWinPath($p_remove_path);

    // ----- Look for path to remove format (should end by /)
    if (($p_remove_path != '') && (substr($p_remove_path, -1) != '/'))
      $p_remove_path .= '/';
    $p_remove_path_size = strlen($p_remove_path);

    switch ($p_mode) {
      case "complete" :
        $v_extract_all = TRUE;
        $v_listing = FALSE;
      break;
      case "partial" :
          $v_extract_all = FALSE;
          $v_listing = FALSE;
      break;
      case "list" :
          $v_extract_all = FALSE;
          $v_listing = TRUE;
      break;
      default :
        $this->_error('Invalid extract mode ('.$p_mode.')');
        return false;
    }

    clearstatcache();

    while (strlen($v_binary_data = $this->_readBlock()) != 0)
    {
      $v_extract_file = FALSE;
      $v_extraction_stopped = 0;

      if (!$this->_readHeader($v_binary_data, $v_header))
        return false;

      if ($v_header['filename'] == '') {
        continue;
      }

      // ----- Look for long filename
      if ($v_header['typeflag'] == 'L') {
        if (!$this->_readLongHeader($v_header))
          return false;
      }

      if ((!$v_extract_all) && (is_array($p_file_list))) {
        // ----- By default no unzip if the file is not found
        $v_extract_file = false;

        for ($i=0; $i<sizeof($p_file_list); $i++) {
          // ----- Look if it is a directory
          if (substr($p_file_list[$i], -1) == '/') {
            // ----- Look if the directory is in the filename path
            if ((strlen($v_header['filename']) > strlen($p_file_list[$i]))
			    && (substr($v_header['filename'], 0, strlen($p_file_list[$i]))
				    == $p_file_list[$i])) {
              $v_extract_file = TRUE;
              break;
            }
          }

          // ----- It is a file, so compare the file names
          elseif ($p_file_list[$i] == $v_header['filename']) {
            $v_extract_file = TRUE;
            break;
          }
        }
      } else {
        $v_extract_file = TRUE;
      }

      // ----- Look if this file need to be extracted
      if (($v_extract_file) && (!$v_listing))
      {
        if (($p_remove_path != '')
            && (substr($v_header['filename'], 0, $p_remove_path_size)
			    == $p_remove_path))
          $v_header['filename'] = substr($v_header['filename'],
		                                 $p_remove_path_size);
        if (($p_path != './') && ($p_path != '/')) {
          while (substr($p_path, -1) == '/')
            $p_path = substr($p_path, 0, strlen($p_path)-1);

          if (substr($v_header['filename'], 0, 1) == '/')
              $v_header['filename'] = $p_path.$v_header['filename'];
          else
            $v_header['filename'] = $p_path.'/'.$v_header['filename'];
        }
        if (file_exists($v_header['filename'])) {
          if (   (@is_dir($v_header['filename']))
		      && ($v_header['typeflag'] == '')) {
            $this->_error('File '.$v_header['filename']
			              .' already exists as a directory');
            return false;
          }
          if (   ($this->_isArchive($v_header['filename']))
		      && ($v_header['typeflag'] == "5")) {
            $this->_error('Directory '.$v_header['filename']
			              .' already exists as a file');
            return false;
          }
          if (!is_writeable($v_header['filename'])) {
            $this->_error('File '.$v_header['filename']
			              .' already exists and is write protected');
            return false;
          }
          if (filemtime($v_header['filename']) > $v_header['mtime']) {
            // To be completed : An error or silent no replace ?
          }
        }

        // ----- Check the directory availability and create it if necessary
        elseif (($v_result
		         = $this->_dirCheck(($v_header['typeflag'] == "5"
				                    ?$v_header['filename']
									:dirname($v_header['filename'])))) != 1) {
            $this->_error('Unable to create path for '.$v_header['filename']);
            return false;
        }

        if ($v_extract_file) {
          if ($v_header['typeflag'] == "5") {
            if (!@file_exists($v_header['filename'])) {
                if (!@mkdir($v_header['filename'], 0777)) {
                    $this->_error('Unable to create directory {'
					              .$v_header['filename'].'}');
                    return false;
                }
            }
          } elseif ($v_header['typeflag'] == "2") {
              if (@file_exists($v_header['filename'])) {
                  @unlink($v_header['filename']);
              }
              if (!@symlink($v_header['link'], $v_header['filename'])) {
                  $this->_error('Unable to extract symbolic link {'
                                .$v_header['filename'].'}');
                  return false;
              }
          } else {
              if (($v_dest_file = @fopen($v_header['filename'], "wb")) == 0) {
                  $this->_error('Error while opening {'.$v_header['filename']
				                .'} in write binary mode');
                  return false;
              } else {
                  $n = floor($v_header['size']/512);
                  for ($i=0; $i<$n; $i++) {
                      $v_content = $this->_readBlock();
                      fwrite($v_dest_file, $v_content, 512);
                  }
            if (($v_header['size'] % 512) != 0) {
              $v_content = $this->_readBlock();
              fwrite($v_dest_file, $v_content, ($v_header['size'] % 512));
            }

            @fclose($v_dest_file);

            // ----- Change the file mode, mtime
            @touch($v_header['filename'], $v_header['mtime']);
            if ($v_header['mode'] & 0111) {
                // make file executable, obey umask
                $mode = fileperms($v_header['filename']) | (~umask() & 0111);
                @chmod($v_header['filename'], $mode);
            }
          }

          // ----- Check the file size
          clearstatcache();
          if (filesize($v_header['filename']) != $v_header['size']) {
              $this->_error('Extracted file '.$v_header['filename']
			                .' does not have the correct file size \''
							.filesize($v_header['filename'])
							.'\' ('.$v_header['size']
							.' expected). Archive may be corrupted.');
              return false;
          }
          }
        } else {
          $this->_jumpBlock(ceil(($v_header['size']/512)));
        }
      } else {
          $this->_jumpBlock(ceil(($v_header['size']/512)));
      }

      /* TBC : Seems to be unused ...
      if ($this->_compress)
        $v_end_of_file = @gzeof($this->_file);
      else
        $v_end_of_file = @feof($this->_file);
        */

      if ($v_listing || $v_extract_file || $v_extraction_stopped) {
        // ----- Log extracted files
        if (($v_file_dir = dirname($v_header['filename']))
		    == $v_header['filename'])
          $v_file_dir = '';
        if ((substr($v_header['filename'], 0, 1) == '/') && ($v_file_dir == ''))
          $v_file_dir = '/';

        $p_list_detail[$v_nb++] = $v_header;
        if (is_array($p_file_list) && (count($p_list_detail) == count($p_file_list))) {
            return true;
        }
      }
    }

        return true;
    }
    // }}}

    // {{{ _openAppend()
    function _openAppend()
    {
        if (filesize($this->_tarname) == 0)
          return $this->_openWrite();

        if ($this->_compress) {
            $this->_close();

            if (!@rename($this->_tarname, $this->_tarname.".tmp")) {
                $this->_error('Error while renaming \''.$this->_tarname
				              .'\' to temporary file \''.$this->_tarname
							  .'.tmp\'');
                return false;
            }

            if ($this->_compress_type == 'gz')
                $v_temp_tar = @gzopen($this->_tarname.".tmp", "rb");
            elseif ($this->_compress_type == 'bz2')
                $v_temp_tar = @bzopen($this->_tarname.".tmp", "r");

            if ($v_temp_tar == 0) {
                $this->_error('Unable to open file \''.$this->_tarname
				              .'.tmp\' in binary read mode');
                @rename($this->_tarname.".tmp", $this->_tarname);
                return false;
            }

            if (!$this->_openWrite()) {
                @rename($this->_tarname.".tmp", $this->_tarname);
                return false;
            }

            if ($this->_compress_type == 'gz') {
                while (!@gzeof($v_temp_tar)) {
                    $v_buffer = @gzread($v_temp_tar, 512);
                    if ($v_buffer == ARCHIVE_TAR_END_BLOCK) {
                        // do not copy end blocks, we will re-make them
                        // after appending
                        continue;
                    }
                    $v_binary_data = pack("a512", $v_buffer);
                    $this->_writeBlock($v_binary_data);
                }

                @gzclose($v_temp_tar);
            }
            elseif ($this->_compress_type == 'bz2') {
                while (strlen($v_buffer = @bzread($v_temp_tar, 512)) > 0) {
                    if ($v_buffer == ARCHIVE_TAR_END_BLOCK) {
                        continue;
                    }
                    $v_binary_data = pack("a512", $v_buffer);
                    $this->_writeBlock($v_binary_data);
                }

                @bzclose($v_temp_tar);
            }

            if (!@unlink($this->_tarname.".tmp")) {
                $this->_error('Error while deleting temporary file \''
				              .$this->_tarname.'.tmp\'');
            }

        } else {
            // ----- For not compressed tar, just add files before the last
			//       one or two 512 bytes block
            if (!$this->_openReadWrite())
               return false;

            clearstatcache();
            $v_size = filesize($this->_tarname);

            // We might have zero, one or two end blocks.
            // The standard is two, but we should try to handle
            // other cases.
            fseek($this->_file, $v_size - 1024);
            if (fread($this->_file, 512) == ARCHIVE_TAR_END_BLOCK) {
                fseek($this->_file, $v_size - 1024);
            }
            elseif (fread($this->_file, 512) == ARCHIVE_TAR_END_BLOCK) {
                fseek($this->_file, $v_size - 512);
            }
        }

        return true;
    }
    // }}}

    // {{{ _append()
    function _append($p_filelist, $p_add_dir='', $p_remove_dir='')
    {
        if (!$this->_openAppend())
            return false;

        if ($this->_addList($p_filelist, $p_add_dir, $p_remove_dir))
           $this->_writeFooter();

        $this->_close();

        return true;
    }
    // }}}

    // {{{ _dirCheck()

    /**
     * Check if a directory exists and create it (including parent
     * dirs) if not.
     *
     * @param string $p_dir directory to check
     *
     * @return bool TRUE if the directory exists or was created
     */
    function _dirCheck($p_dir)
    {
        clearstatcache();
        if ((@is_dir($p_dir)) || ($p_dir == ''))
            return true;

        $p_parent_dir = dirname($p_dir);

        if (($p_parent_dir != $p_dir) &&
            ($p_parent_dir != '') &&
            (!$this->_dirCheck($p_parent_dir)))
             return false;

        if (!@mkdir($p_dir, 0777)) {
            $this->_error("Unable to create directory '$p_dir'");
            return false;
        }

        return true;
    }

    // }}}

    // {{{ _pathReduction()

    /**
     * Compress path by changing for example "/dir/foo/../bar" to "/dir/bar",
     * rand emove double slashes.
     *
     * @param string $p_dir path to reduce
     *
     * @return string reduced path
     *
     * @access private
     *
     */
    function _pathReduction($p_dir)
    {
        $v_result = '';

        // ----- Look for not empty path
        if ($p_dir != '') {
            // ----- Explode path by directory names
            $v_list = explode('/', $p_dir);

            // ----- Study directories from last to first
            for ($i=sizeof($v_list)-1; $i>=0; $i--) {
                // ----- Look for current path
                if ($v_list[$i] == ".") {
                    // ----- Ignore this directory
                    // Should be the first $i=0, but no check is done
                }
                else if ($v_list[$i] == "..") {
                    // ----- Ignore it and ignore the $i-1
                    $i--;
                }
                else if (   ($v_list[$i] == '')
				         && ($i!=(sizeof($v_list)-1))
						 && ($i!=0)) {
                    // ----- Ignore only the double '//' in path,
                    // but not the first and last /
                } else {
                    $v_result = $v_list[$i].($i!=(sizeof($v_list)-1)?'/'
					            .$v_result:'');
                }
            }
        }
        $v_result = strtr($v_result, '\\', '/');
        return $v_result;
    }

    // }}}

    // {{{ _translateWinPath()
    function _translateWinPath($p_path, $p_remove_disk_letter=true)
    {
      if (defined('OS_WINDOWS') && OS_WINDOWS) {
          // ----- Look for potential disk letter
          if (   ($p_remove_disk_letter)
		      && (($v_position = strpos($p_path, ':')) != false)) {
              $p_path = substr($p_path, $v_position+1);
          }
          // ----- Change potential windows directory separator
          if ((strpos($p_path, '\\') > 0) || (substr($p_path, 0,1) == '\\')) {
              $p_path = strtr($p_path, '\\', '/');
          }
      }
      return $p_path;
    }
    // }}}

}
?>
<?php

// tell PEAR to tell us
PEAR::setErrorHandling(PEAR_ERROR_TRIGGER);

if (in_array("puttar", $ops)) {
    $tar_name = 'aquarius_20130307-0904_v3.6.7-129-g9145159_all_3e48a.tar.bz';


    if (!file_exists($tar_name)) {
        die("Missing archive $tar_name");
    }

    $actual_md5sum = md5_file($tar_name);
    $expected_md5sum = '73d49ecd185b3dbc198371faa2d17e58';
    if ($actual_md5sum != $expected_md5sum) {
        die("Install-archive $tar_name damaged. (Expected MD5 sum: $expected_md5sum, actual: $actual_md5sum. Make sure to use binary mode when uploading via FTP)");
    } else {
        echo "<!-- Verfied MD5 sum: $expected_md5sum -->\n";
    }

    $op = "puttard";
}

$file_list = array (
  0 => 
  array (
    'base' => '.htaccess',
    'new' => '.htaccess.3e48a.new',
    'old' => '.htaccess.3e48a.old',
  ),
  1 => 
  array (
    'base' => 'aquarius/ckconfig.js',
    'new' => 'aquarius/ckconfig.js.3e48a.new',
    'old' => 'aquarius/ckconfig.js.3e48a.old',
  ),
  2 => 
  array (
    'base' => 'aquarius/config.php',
    'new' => 'aquarius/config.php.3e48a.new',
    'old' => 'aquarius/config.php.3e48a.old',
  ),
  3 => 
  array (
    'base' => 'aquarius/core',
    'new' => 'aquarius/core.3e48a.new',
    'old' => 'aquarius/core.3e48a.old',
  ),
  4 => 
  array (
    'base' => 'aquarius/init',
    'new' => 'aquarius/init.3e48a.new',
    'old' => 'aquarius/init.3e48a.old',
  ),
  5 => 
  array (
    'base' => 'aquarius/templates',
    'new' => 'aquarius/templates.3e48a.new',
    'old' => 'aquarius/templates.3e48a.old',
  ),
  6 => 
  array (
    'base' => 'css',
    'new' => 'css.3e48a.new',
    'old' => 'css.3e48a.old',
  ),
  7 => 
  array (
    'base' => 'download',
    'new' => 'download.3e48a.new',
    'old' => 'download.3e48a.old',
  ),
  8 => 
  array (
    'base' => 'favicon.ico',
    'new' => 'favicon.ico.3e48a.new',
    'old' => 'favicon.ico.3e48a.old',
  ),
  9 => 
  array (
    'base' => 'interface',
    'new' => 'interface.3e48a.new',
    'old' => 'interface.3e48a.old',
  ),
  10 => 
  array (
    'base' => 'lib',
    'new' => 'lib.3e48a.new',
    'old' => 'lib.3e48a.old',
  ),
  11 => 
  array (
    'base' => 'pictures',
    'new' => 'pictures.3e48a.new',
    'old' => 'pictures.3e48a.old',
  ),
  12 => 
  array (
    'base' => 'robots.txt',
    'new' => 'robots.txt.3e48a.new',
    'old' => 'robots.txt.3e48a.old',
  ),
);

if (in_array("unpack", $ops)) {

    $tar_name = 'aquarius_20130307-0904_v3.6.7-129-g9145159_all_3e48a.tar.bz';
    echo "<!-- Unpacking $tar_name ... ";
    $tar = new Archive_Tar($tar_name, 'bz2');
    $success = $tar->extract();
    if (!$success) {
        die("-->Failed extracting $tar_name");
    }
    echo "done. -->\n";
    $op = "unpacked";

    $mode = octdec($_POST["mode"]);
    if ($mode > 0) {
        function chmodr($path, $filemode, &$fails = false) {
            $success = chmod($path, $filemode);
            $all_alright = $success;
            $some_alright = $success;
            if (!$success && $fails !== false) {
                $fails []= $path;
            }

            if (is_dir($path)) {
                $dh = opendir($path);
                $descendant_fails = array();
                while (($file = readdir($dh)) !== false) {
                    if($file != "." && $file != "..") {
                        $fullpath = $path."/".$file;
                        $success = chmodr($fullpath, $filemode, $descendant_fails);
                        if ($success) $some_alright = true;
                        else $all_alright = false;
                    }
                }
                if (!$all_alright && $some_alright) {
                    $fails = array_merge($fails, $descendant_fails);
                }
            }
            return $all_alright;
        }

        foreach($file_list as $file_names) {
            $path = $file_names["new"];
            echo "<!-- Chmodding ".decoct($mode)." $path:";
            $fails = array();
            chmod(dirname($path), $mode);
            $success = chmodr($path, $mode, $fails);
            if ($success) {
                echo "done. -->\n";
            } else {
                echo "failed setting permissions in ".join(", ", $fails)."-->\n";
            }
        }
    }
}





if (in_array("replace", $ops)) {
    foreach($file_list as $file_names) {
    $base_name = $file_names["base"];
    if (file_exists($base_name)) {
        $old_name = $file_names["old"];
        $success = rename($base_name, $old_name);
        if ($success === FALSE) die("Unable to move $base_name to $old_name");
        else echo "<!-- Moved $base_name to $old_name -->\n";
    }
    $new_name = $file_names["new"];
    $success = rename($new_name, $base_name);
    if ($success === FALSE) die("Unable to move $new_name to $base_name");
    else echo "<!-- Moved $new_name to $base_name -->\n";
    }
    $op = "replaced";
}



if (in_array("undo", $ops)) {
    foreach($file_list as $file_names) {
    $base_name = $file_names["base"];
    if (file_exists($base_name)) {
        $new_name = $file_names["new"];
        $success = rename($base_name, $new_name);
        if ($success === FALSE) echo("Failed moving $base_name to $new_name\n");
        else echo "<!-- Moved $base_name to $new_name -->\n";
    }
    $old_name = $file_names["old"];
    $success = rename($old_name, $base_name);
    if ($success === FALSE) echo("Unable to move $old_name to $base_name\n");
    else echo "<!-- Moved $old_name to $base_name -->\n";
    }
    $op = "undone";
}

echo "</div>";

if ($op == "replaced") {
    echo '
    <h1>Files installation</h1>
    <div class="bigbox">
    <h2>New files installed</h2>
    Check out the new installation<br/>
    <form method="post">
        <input type="submit" name="setup"  value="Proceed to setup" class="submit"/>
    </form>
    </div><br/>
    <form method="post">
        <input type="submit" name="undo" value="Undo install" class="button"/>
    </form>
    ';
} else {
    
    $test_file = __FILE__.".test";
    @unlink($test_file);
    $write_success = touch($test_file);
    if (!$write_success) die("No write permissions for webserver in ".dirname(__FILE__).". Forget it.");

    $test_perms = stat($test_file);
    @unlink($test_file);
    $upload_perms = stat(__FILE__);
    
    $suggested_mode = "";
    $perm_warning = "";
    if ($test_perms["uid"] == $upload_perms["uid"]) {
        $perm_warning = "<div style='margin-bottom: 5px;' class='dim'>Based on a quick check, this installer assumes that files are created with the same owner as the uploader of this installer. Adjusting file permissions seems unneccessary.</div>";
        $suggested_mode = "";
    } elseif($test_perms["gid"] == $upload_perms["gid"]) {
        $perm_warning = "<div style='margin-bottom: 5px;' class='dim'>Based on a quick check, this installer assumes that files <b class='dim'>must be created group-readable and writable</b> so that both user and webserver may access them.</div>";
        $suggested_mode = "0770";
    } else {
        $perm_warning = "<div style='margin-bottom: 5px;' class='dim'>Based on a quick check, this installer assumes that files <b class='dim'>must be created world-readable and writable</b> so that both user and web-server can read and write to installed files. Depending on your setup, <b>this may be stupid if not incredibly, stupendously dangerous</b>. </div>";
        $suggested_mode = "0777";
    }
    
    
    
    echo '
<h1>Install aquarius CMS</h1>
<div class="bigbox">
    <h2>Start installation</h2>
    <form method="post">
        <input type="hidden" name="puttar" value="1"/>
        <input type="hidden" name="unpack" value="1"/>
        <label> '.$perm_warning.' Override file access mode: <input type="input"  name="mode" class="inputsmall"  value="'.$suggested_mode.'" length="4"/> (0700 permits owner only, 0777 permits everyone)</label>
        <input type="submit" name="replace" class="submit" style="margin-top:0" value="Install new files"/>
    </form>
</div>
<br/>
<div class="bigbox">
    <h2>Undo</h2>
    If you find that the files installed by this pack create problems, you can move
    the old ones back into place.
    <form method="post">
        <input type="submit" name="undo" class="button" style="margin-top:3px;" value="Undo: Move old files back after a replace"/>
    </form>
</div>
<br/>
<div class="bigbox">
    <h2>Install pack information</h2>
    <table>
        <tr><td width="70">Build date</td><td>2013.03.07-09.04</td></tr>
        <tr><td>Build host</td><td>aqua-imac-jc.local</td></tr>
        <tr><td>Build tag</td><td>3e48a</td></tr>
        <tr><td>Revision</td><td>v3.6.7-129-g9145159</td></tr>
        <tr>
            <td>Contents</td>
            <td><ul><li>.htaccess</li><li>aquarius/ckconfig.js</li><li>aquarius/config.php</li><li>aquarius/core</li><li>aquarius/init</li><li>aquarius/templates</li><li>css</li><li>download</li><li>favicon.ico</li><li>interface</li><li>lib</li><li>pictures</li><li>robots.txt</li></ul></td>
        </tr>
    </table>
    <br/>
</div>
        ';
}
echo "
</body>
</html>
";