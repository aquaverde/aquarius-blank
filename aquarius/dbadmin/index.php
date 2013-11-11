<?php
/** Adminer - Compact database management
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2007 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 3.4.0-dev
*/error_reporting(6135);$ac=!ereg('^(unsafe_raw)?$',ini_get("filter.default"));if($ac||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$X){$If=filter_input_array(constant("INPUT$X"),FILTER_UNSAFE_RAW);if($If)$$X=$If;}}if(isset($_GET["file"])){header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
base64_decode("AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA////AAAA/wBhTgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAERERAAAAAAETMzEQAAAAATERExAAAAABMRETEAAAAAExERMQAAAAATERExAAAAABMRETEAAAAAEzMzMREREQATERExEhEhABEzMxEhEREAAREREhERIRAAAAARIRESEAAAAAESEiEQAAAAABEREQAAAAAAAAAAD//9UAwP/VAIB/AACAf/AAgH+kAIB/gACAfwAAgH8AAIABAACAAf8AgAH/AMAA/wD+AP8A/wAIAf+B1QD//9UA");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo'body{color:#000;background:#fff;font:90%/1.25 Verdana,Arial,Helvetica,sans-serif;margin:0;}a{color:blue;}a:visited{color:navy;}a:hover{color:red;}a.text{text-decoration:none;}h1{font-size:150%;margin:0;padding:.8em 1em;border-bottom:1px solid #999;font-weight:normal;color:#777;background:#eee;}h2{font-size:150%;margin:0 0 20px -18px;padding:.8em 1em;border-bottom:1px solid #000;color:#000;font-weight:normal;background:#ddf;}h3{font-weight:normal;font-size:130%;margin:1em 0 0;}form{margin:0;}table{margin:1em 20px 0 0;border:0;border-top:1px solid #999;border-left:1px solid #999;font-size:90%;}td,th{border:0;border-right:1px solid #999;border-bottom:1px solid #999;padding:.2em .3em;}th{background:#eee;text-align:left;}thead th{text-align:center;}thead td,thead th{background:#ddf;}fieldset{display:inline;vertical-align:top;padding:.5em .8em;margin:.8em .5em 0 0;border:1px solid #999;}p{margin:.8em 20px 0 0;}img{vertical-align:middle;border:0;}td img{max-width:200px;max-height:200px;}code{background:#eee;}tbody tr:hover td,tbody tr:hover th{background:#eee;}pre{margin:1em 0 0;}input[type=image]{vertical-align:middle;}.version{color:#777;font-size:67%;}.js .hidden,.nojs .jsonly{display:none;}.nowrap td,.nowrap th,td.nowrap{white-space:pre;}.wrap td{white-space:normal;}.error{color:red;background:#fee;}.error b{background:#fff;font-weight:normal;}.message{color:green;background:#efe;}.error,.message{padding:.5em .8em;margin:1em 20px 0 0;}.char{color:#007F00;}.date{color:#7F007F;}.enum{color:#007F7F;}.binary{color:red;}.odd td{background:#F5F5F5;}.js .checked td,.js .checked th{background:#ddf;}.time{color:silver;font-size:70%;}.function{text-align:right;}.number{text-align:right;}.datetime{text-align:right;}.type{width:15ex;width:auto\\9;}.options select{width:20ex;width:auto\\9;}.active{font-weight:bold;}.sqlarea{width:98%;}#menu{position:absolute;margin:10px 0 0;padding:0 0 30px 0;top:2em;left:0;width:19em;overflow:auto;overflow-y:hidden;white-space:nowrap;}#menu p{padding:.8em 1em;margin:0;border-bottom:1px solid #ccc;}#content{margin:2em 0 0 21em;padding:10px 20px 20px 0;}#lang{position:absolute;top:0;left:0;line-height:1.8em;padding:.3em 1em;}#breadcrumb{white-space:nowrap;position:absolute;top:0;left:21em;background:#eee;height:2em;line-height:1.8em;padding:0 1em;margin:0 0 0 -18px;}#h1{color:#777;text-decoration:none;font-style:italic;}#version{font-size:67%;color:red;}#schema{margin-left:60px;position:relative;-moz-user-select:none;-webkit-user-select:none;}#schema .table{border:1px solid silver;padding:0 2px;cursor:move;position:absolute;}#schema .references{position:absolute;}.rtl h2{margin:0 -18px 20px 0;}.rtl p,.rtl table,.rtl .error,.rtl .message{margin:1em 0 0 20px;}.rtl #content{margin:2em 21em 0 0;padding:10px 0 20px 20px;}.rtl #breadcrumb{left:auto;right:21em;margin:0 -18px 0 0;}.rtl #lang,.rtl #menu{left:auto;right:0;}.CodeMirror{border:1px inset #777;}.CodeMirror .error{background:#fee;}@media print{#lang,#menu{display:none;}#content{margin-left:1em;}#breadcrumb{left:1em;}.nowrap td,.nowrap th,td.nowrap{white-space:normal;}}';}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");?>
/** Toggle visibility
* @param string
* @return boolean
*/
function toggle(id) {
	var el = document.getElementById(id);
	el.className = (el.className == 'hidden' ? '' : 'hidden');
	return true;
}

/** Set permanent cookie
* @param string
* @param number
* @param string optional
*/
function cookie(assign, days) {
	var date = new Date();
	date.setDate(date.getDate() + days);
	document.cookie = assign + '; expires=' + date;
}

/** Verify current Adminer version
*/
function verifyVersion() {
	cookie('adminer_version=0', 1);
	var script = document.createElement('script');
	script.src = location.protocol + '//www.adminer.org/version.php';
	document.body.appendChild(script);
}

/** Get value of select
* @param HTMLSelectElement
* @return string
*/
function selectValue(select) {
	var selected = select.options[select.selectedIndex];
	return ((selected.attributes.value || {}).specified ? selected.value : selected.text);
}

/** Set checked class
* @param HTMLInputElement
*/
function trCheck(el) {
	var tr = el.parentNode.parentNode;
	tr.className = tr.className.replace(/(^|\s)checked(\s|$)/, '$2') + (el.checked ? ' checked' : '');
}

/** Check all elements matching given name
* @param HTMLInputElement
* @param RegExp
*/
function formCheck(el, name) {
	var elems = el.form.elements;
	for (var i=0; i < elems.length; i++) {
		if (name.test(elems[i].name)) {
			elems[i].checked = el.checked;
			trCheck(elems[i]);
		}
	}
}

/** Check all rows in <table class="checkable">
*/
function tableCheck() {
	var tables = document.getElementsByTagName('table');
	for (var i=0; i < tables.length; i++) {
		if (/(^|\s)checkable(\s|$)/.test(tables[i].className)) {
			var trs = tables[i].getElementsByTagName('tr');
			for (var j=0; j < trs.length; j++) {
				trCheck(trs[j].firstChild.firstChild);
			}
		}
	}
}

/** Uncheck single element
* @param string
*/
function formUncheck(id) {
	var el = document.getElementById(id);
	el.checked = false;
	trCheck(el);
}

/** Get number of checked elements matching given name
* @param HTMLInputElement
* @param RegExp
* @return number
*/
function formChecked(el, name) {
	var checked = 0;
	var elems = el.form.elements;
	for (var i=0; i < elems.length; i++) {
		if (name.test(elems[i].name) && elems[i].checked) {
			checked++;
		}
	}
	return checked;
}

/** Select clicked row
* @param MouseEvent
*/
function tableClick(event) {
	var click = (!window.getSelection || getSelection().isCollapsed);
	var el = event.target || event.srcElement;
	while (!/^tr$/i.test(el.tagName)) {
		if (/^(table|a|input|textarea)$/i.test(el.tagName)) {
			if (el.type != 'checkbox') {
				return;
			}
			checkboxClick(event, el);
			click = false;
		}
		el = el.parentNode;
	}
	el = el.firstChild.firstChild;
	if (click) {
		el.click && el.click();
		el.onclick && el.onclick();
	}
	trCheck(el);
}

var lastChecked;

/** Shift-click on checkbox for multiple selection.
 * @param MouseEvent
 * @param HTMLInputElement
 */
function checkboxClick(event, el) {
	if (!el.name) {
		return;
	}
	if (event.shiftKey && (!lastChecked || lastChecked.name == el.name)) {
		var checked = (lastChecked ? lastChecked.checked : true);
		var inputs = el.parentNode.parentNode.parentNode.getElementsByTagName('input');
		var checking = !lastChecked;
		for (var i=0; i < inputs.length; i++) {
			var input = inputs[i];
			if (input.name === el.name) {
				if (checking) {
					input.checked = checked;
					trCheck(input);
				}
				if (input === el || input === lastChecked) {
					if (checking) {
						break;
					}
					checking = true;
				}
			}
		}
	}
	lastChecked = el;
}

/** Set HTML code of an element
* @param string
* @param string undefined to set parentNode to &nbsp;
*/
function setHtml(id, html) {
	var el = document.getElementById(id);
	if (el) {
		if (html == undefined) {
			el.parentNode.innerHTML = '&nbsp;';
		} else {
			el.innerHTML = html;
		}
	}
}

/** Find node position
* @param Node
* @return number
*/
function nodePosition(el) {
	var pos = 0;
	while (el = el.previousSibling) {
		pos++;
	}
	return pos;
}

/** Go to the specified page
* @param string
* @param string
* @param [MouseEvent]
*/
function pageClick(href, page, event) {
	if (!isNaN(page) && page) {
		href += (page != 1 ? '&page=' + (page - 1) : '');
		location.href = href;
	}
}



/** Add row in select fieldset
* @param HTMLSelectElement
*/
function selectAddRow(field) {
	field.onchange = function () {
		selectFieldChange(field.form);
	};
	field.onchange();
	var row = field.parentNode.cloneNode(true);
	var selects = row.getElementsByTagName('select');
	for (var i=0; i < selects.length; i++) {
		selects[i].name = selects[i].name.replace(/[a-z]\[\d+/, '$&1');
		selects[i].selectedIndex = 0;
	}
	var inputs = row.getElementsByTagName('input');
	if (inputs.length) {
		inputs[0].name = inputs[0].name.replace(/[a-z]\[\d+/, '$&1');
		inputs[0].value = '';
		inputs[0].className = '';
	}
	field.parentNode.parentNode.appendChild(row);
}

/** Check whether the query will be executed with index
* @param HTMLFormElement
*/
function selectFieldChange(form) {
	var ok = (function () {
		var inputs = form.getElementsByTagName('input');
		for (var i=0; i < inputs.length; i++) {
			var input = inputs[i];
			if (/^fulltext/.test(input.name) && input.value) {
				return true;
			}
		}
		var ok = true;
		var selects = form.getElementsByTagName('select');
		for (var i=0; i < selects.length; i++) {
			var select = selects[i];
			var col = selectValue(select);
			var match = /^(where.+)col\]/.exec(select.name);
			if (match) {
				var op = selectValue(form[match[1] + 'op]']);
				var val = form[match[1] + 'val]'].value;
				if (col in indexColumns && (!/LIKE|REGEXP/.test(op) || (op == 'LIKE' && val.charAt(0) != '%'))) {
					return true;
				} else if (col || val) {
					ok = false;
				}
			}
			//! take grouping in select into account
			if (col && /^order/.test(select.name)) {
				if (!(col in indexColumns)) {
					 ok = false;
				}
				break;
			}
		}
		return ok;
	})();
	setHtml('noindex', (ok ? '' : '!'));
}



/** Send form by Ctrl+Enter on <select> and <textarea>
* @param KeyboardEvent
* @param [string]
* @return boolean
*/
function bodyKeydown(event, button) {
	var target = event.target || event.srcElement;
	if (event.ctrlKey && (event.keyCode == 13 || event.keyCode == 10) && !event.altKey && !event.metaKey && /select|textarea|input/i.test(target.tagName)) { // 13|10 - Enter, shiftKey allowed
		target.blur();
		if (button) {
			target.form[button].click();
		} else {
			target.form.submit();
		}
		return false;
	}
	return true;
}



/** Change focus by Ctrl+Up or Ctrl+Down
* @param KeyboardEvent
* @return boolean
*/
function editingKeydown(event) {
	if ((event.keyCode == 40 || event.keyCode == 38) && event.ctrlKey && !event.altKey && !event.metaKey) { // 40 - Down, 38 - Up, shiftKey allowed
		var target = event.target || event.srcElement;
		var sibling = (event.keyCode == 40 ? 'nextSibling' : 'previousSibling');
		var el = target.parentNode.parentNode[sibling];
		if (el && (/^tr$/i.test(el.tagName) || (el = el[sibling])) && /^tr$/i.test(el.tagName) && (el = el.childNodes[nodePosition(target.parentNode)]) && (el = el.childNodes[nodePosition(target)])) {
			el.focus();
		}
		return false;
	}
	if (event.shiftKey && !bodyKeydown(event, 'insert')) {
		eventStop(event);
		return false;
	}
	return true;
}

/** Disable maxlength for functions
* @param HTMLSelectElement
*/
function functionChange(select) {
	var input = select.form[select.name.replace(/^function/, 'fields')];
	if (selectValue(select)) {
		if (input.origMaxLength === undefined) {
			input.origMaxLength = input.maxLength;
		}
		input.removeAttribute('maxlength');
	} else if (input.origMaxLength >= 0) {
		input.maxLength = input.origMaxLength;
	}
}



/** Create AJAX request
* @param string
* @param function (XMLHttpRequest)
* @param [string]
* @return XMLHttpRequest or false in case of an error
*/
function ajax(url, callback, data) {
	var request = (window.XMLHttpRequest ? new XMLHttpRequest() : (window.ActiveXObject ? new ActiveXObject('Microsoft.XMLHTTP') : false));
	if (request) {
		request.open((data ? 'POST' : 'GET'), url);
		if (data) {
			request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		}
		request.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
		request.onreadystatechange = function () {
			if (request.readyState == 4) {
				callback(request);
			}
		};
		request.send(data);
	}
	return request;
}

/** Use setHtml(key, value) for JSON response
* @param string
* @return XMLHttpRequest or false in case of an error
*/
function ajaxSetHtml(url) {
	return ajax(url, function (request) {
		if (request.status) {
			var data = eval('(' + request.responseText + ')');
			for (var key in data) {
				setHtml(key, data[key]);
			}
		}
	});
}



/** Display edit field
* @param HTMLElement
* @param MouseEvent
* @param number display textarea instead of input, 2 - load long text
*/
function selectDblClick(td, event, text) {
	if (/input|textarea/i.test(td.firstChild.tagName)) {
		return;
	}
	var original = td.innerHTML;
	var input = document.createElement(text ? 'textarea' : 'input');
	input.onkeydown = function (event) {
		if (!event) {
			event = window.event;
		}
		if (event.keyCode == 27 && !(event.ctrlKey || event.shiftKey || event.altKey || event.metaKey)) { // 27 - Esc
			td.innerHTML = original;
		}
	};
	var pos = event.rangeOffset;
	var value = td.firstChild.alt || td.textContent || td.innerText;
	input.style.width = Math.max(td.clientWidth - 14, 20) + 'px'; // 14 = 2 * (td.border + td.padding + input.border)
	if (text) {
		var rows = 1;
		value.replace(/\n/g, function () {
			rows++;
		});
		input.rows = rows;
	}
	if (value == '\u00A0' || td.getElementsByTagName('i').length) { // &nbsp; or i - NULL
		value = '';
	}
	if (document.selection) {
		var range = document.selection.createRange();
		range.moveToPoint(event.clientX, event.clientY);
		var range2 = range.duplicate();
		range2.moveToElementText(td);
		range2.setEndPoint('EndToEnd', range);
		pos = range2.text.length;
	}
	td.innerHTML = '';
	td.appendChild(input);
	input.focus();
	if (text == 2) { // long text
		return ajax(location.href + '&' + encodeURIComponent(td.id) + '=', function (request) {
			if (request.status) {
				input.value = request.responseText;
				input.name = td.id;
			}
		});
	}
	input.value = value;
	input.name = td.id;
	input.selectionStart = pos;
	input.selectionEnd = pos;
	if (document.selection) {
		var range = document.selection.createRange();
		range.moveEnd('character', -input.value.length + pos);
		range.select();
	}
}



/** Stop event propagation
* @param Event
*/
function eventStop(event) {
	if (event.stopPropagation) {
		event.stopPropagation();
	} else {
		event.cancelBubble = true;
	}
}
// Adminer specific functions

var jushRoot = location.protocol + '//www.adminer.org/static/'; // global variable to allow simple customization

/** Load syntax highlighting
* @param string first three characters of database system version
*/
function bodyLoad(version) {
	if (jushRoot) {
		var script = document.createElement('script');
		script.src = jushRoot + 'jush.js';
		script.onload = function () {
			if (window.jush) { // IE runs in case of an error too
				jush.create_links = ' target="_blank" rel="noreferrer"';
				jush.urls.sql_sqlset = jush.urls.sql[0] = jush.urls.sqlset[0] = jush.urls.sqlstatus[0] = 'http://dev.mysql.com/doc/refman/' + version + '/en/$key';
				var pgsql = 'http://www.postgresql.org/docs/' + version + '/static/';
				jush.urls.pgsql_pgsqlset = jush.urls.pgsql[0] = pgsql + '$key';
				jush.urls.pgsqlset[0] = pgsql + 'runtime-config-$key.html#GUC-$1';
				jush.style(jushRoot + 'jush.css');
				if (window.jushLinks) {
					jush.custom_links = jushLinks;
				}
				jush.highlight_tag('code', 0);
			}
		};
		script.onreadystatechange = function () {
			if (/^(loaded|complete)$/.test(script.readyState)) {
				script.onload();
			}
		};
		document.body.appendChild(script);
	}
}

/** Get value of dynamically created form field
* @param HTMLFormElement
* @param string
* @return HTMLElement
*/
function formField(form, name) {
	// required in IE < 8, form.elements[name] doesn't work
	for (var i=0; i < form.length; i++) {
		if (form[i].name == name) {
			return form[i];
		}
	}
}

/** Try to change input type to password or to text
* @param HTMLInputElement
* @param boolean
*/
function typePassword(el, disable) {
	try {
		el.type = (disable ? 'text' : 'password');
	} catch (e) {
	}
}

function loginDriver(driver) {
	var trs = driver.parentNode.parentNode.parentNode.rows;
	for (var i=1; i < trs.length - 1; i++) {
		trs[i].className = (/sqlite/.test(driver.value) ? 'hidden' : '');
	}
}



/** Handle Tab and Esc in textarea
* @param HTMLTextAreaElement
* @param KeyboardEvent
* @return boolean
*/
function textareaKeydown(target, event) {
	if (!event.shiftKey && !event.altKey && !event.ctrlKey && !event.metaKey) {
		if (event.keyCode == 9) { // 9 - Tab
			// inspired by http://pallieter.org/Projects/insertTab/
			if (target.setSelectionRange) {
				var start = target.selectionStart;
				var scrolled = target.scrollTop;
				target.value = target.value.substr(0, start) + '\t' + target.value.substr(target.selectionEnd);
				target.setSelectionRange(start + 1, start + 1);
				target.scrollTop = scrolled;
				return false; //! still loses focus in Opera, can be solved by handling onblur
			} else if (target.createTextRange) {
				document.selection.createRange().text = '\t';
				return false;
			}
		}
		if (event.keyCode == 27) { // 27 - Esc
			var els = target.form.elements;
			for (var i=1; i < els.length; i++) {
				if (els[i-1] == target) {
					els[i].focus();
					break;
				}
			}
			return false;
		}
	}
	return true;
}



var added = '.', rowCount;

/** Check if val is equal to a-delimiter-b where delimiter is '_', '' or big letter
* @param string
* @param string
* @param string
* @return boolean
*/
function delimiterEqual(val, a, b) {
	return (val == a + '_' + b || val == a + b || val == a + b.charAt(0).toUpperCase() + b.substr(1));
}

/** Escape string to use as identifier
* @param string
* @return string
*/
function idfEscape(s) {
	return s.replace(/`/, '``');
}

/** Detect foreign key
* @param HTMLInputElement
*/
function editingNameChange(field) {
	var name = field.name.substr(0, field.name.length - 7);
	var type = formField(field.form, name + '[type]');
	var opts = type.options;
	var candidate; // don't select anything with ambiguous match (like column `id`)
	var val = field.value;
	for (var i = opts.length; i--; ) {
		var match = /(.+)`(.+)/.exec(opts[i].value);
		if (!match) { // common type
			if (candidate && i == opts.length - 2 && val == opts[candidate].value.replace(/.+`/, '') && name == 'fields[1]') { // single target table, link to column, first field - probably `id`
				return;
			}
			break;
		}
		var table = match[1];
		var column = match[2];
		var tables = [ table, table.replace(/s$/, ''), table.replace(/es$/, '') ];
		for (var j=0; j < tables.length; j++) {
			table = tables[j];
			if (val == column || val == table || delimiterEqual(val, table, column) || delimiterEqual(val, column, table)) {
				if (candidate) {
					return;
				}
				candidate = i;
				break;
			}
		}
	}
	if (candidate) {
		type.selectedIndex = candidate;
		type.onchange();
	}
}

/** Add table row for next field
* @param HTMLInputElement
* @param boolean
* @param boolean
* @return boolean
*/
function editingAddRow(button, allowed, focus) {
	if (allowed && rowCount >= allowed) {
		return false;
	}
	var match = /(\d+)(\.\d+)?/.exec(button.name);
	var x = match[0] + (match[2] ? added.substr(match[2].length) : added) + '1';
	var row = button.parentNode.parentNode;
	var row2 = row.cloneNode(true);
	var tags = row.getElementsByTagName('select');
	var tags2 = row2.getElementsByTagName('select');
	for (var i=0; i < tags.length; i++) {
		tags2[i].name = tags[i].name.replace(/([0-9.]+)/, x);
		tags2[i].selectedIndex = tags[i].selectedIndex;
	}
	tags = row.getElementsByTagName('input');
	tags2 = row2.getElementsByTagName('input');
	var input = tags2[0]; // IE loose tags2 after insertBefore()
	for (var i=0; i < tags.length; i++) {
		if (tags[i].name == 'auto_increment_col') {
			tags2[i].value = x;
			tags2[i].checked = false;
		}
		tags2[i].name = tags[i].name.replace(/([0-9.]+)/, x);
		if (/\[(orig|field|comment|default)/.test(tags[i].name)) {
			tags2[i].value = '';
		}
		if (/\[(has_default)/.test(tags[i].name)) {
			tags2[i].checked = false;
		}
	}
	tags[0].onchange = function () {
		editingNameChange(tags[0]);
	};
	row.parentNode.insertBefore(row2, row.nextSibling);
	if (focus) {
		input.onchange = function () {
			editingNameChange(input);
		};
		input.focus();
	}
	added += '0';
	rowCount++;
	return true;
}

/** Remove table row for field
* @param HTMLInputElement
* @return boolean
*/
function editingRemoveRow(button) {
	var field = formField(button.form, button.name.replace(/drop_col(.+)/, 'fields$1[field]'));
	field.parentNode.removeChild(field);
	button.parentNode.parentNode.style.display = 'none';
	return true;
}

var lastType = '';

/** Clear length and hide collation or unsigned
* @param HTMLSelectElement
*/
function editingTypeChange(type) {
	var name = type.name.substr(0, type.name.length - 6);
	var text = selectValue(type);
	for (var i=0; i < type.form.elements.length; i++) {
		var el = type.form.elements[i];
		if (el.name == name + '[length]' && !(
			(/(char|binary)$/.test(lastType) && /(char|binary)$/.test(text))
			|| (/(enum|set)$/.test(lastType) && /(enum|set)$/.test(text))
		)) {
			el.value = '';
		}
		if (lastType == 'timestamp' && el.name == name + '[has_default]' && /timestamp/i.test(formField(type.form, name + '[default]').value)) {
			el.checked = false;
		}
		if (el.name == name + '[collation]') {
			el.className = (/(char|text|enum|set)$/.test(text) ? '' : 'hidden');
		}
		if (el.name == name + '[unsigned]') {
			el.className = (/(int|float|double|decimal)$/.test(text) ? '' : 'hidden');
		}
		if (el.name == name + '[on_delete]') {
			el.className = (/`/.test(text) ? '' : 'hidden');
		}
	}
}

/** Edit enum or set
* @param HTMLInputElement
*/
function editingLengthFocus(field) {
	var td = field.parentNode;
	if (/(enum|set)$/.test(selectValue(td.previousSibling.firstChild))) {
		var edit = document.getElementById('enum-edit');
		var val = field.value;
		edit.value = (/^'.+','.+'$/.test(val) ? val.substr(1, val.length - 2).replace(/','/g, "\n").replace(/''/g, "'") : val);
		td.appendChild(edit);
		field.style.display = 'none';
		edit.style.display = 'inline';
		edit.focus();
	}
}

/** Finish editing of enum or set
* @param HTMLTextAreaElement
*/
function editingLengthBlur(edit) {
	var field = edit.parentNode.firstChild;
	var val = edit.value;
	field.value = (/\n/.test(val) ? "'" + val.replace(/\n+$/, '').replace(/'/g, "''").replace(/\n/g, "','") + "'" : val);
	field.style.display = 'inline';
	edit.style.display = 'none';
}

/** Show or hide selected table column
* @param boolean
* @param number
*/
function columnShow(checked, column) {
	var trs = document.getElementById('edit-fields').getElementsByTagName('tr');
	for (var i=0; i < trs.length; i++) {
		trs[i].getElementsByTagName('td')[column].className = (checked ? '' : 'hidden');
	}
}

/** Display partition options
* @param HTMLSelectElement
*/
function partitionByChange(el) {
	var partitionTable = /RANGE|LIST/.test(selectValue(el));
	el.form['partitions'].className = (partitionTable || !el.selectedIndex ? 'hidden' : '');
	document.getElementById('partition-table').className = (partitionTable ? '' : 'hidden');
}

/** Add next partition row
* @param HTMLInputElement
*/
function partitionNameChange(el) {
	var row = el.parentNode.parentNode.cloneNode(true);
	row.firstChild.firstChild.value = '';
	el.parentNode.parentNode.parentNode.appendChild(row);
	el.onchange = function () {};
}



/** Add row for foreign key
* @param HTMLSelectElement
*/
function foreignAddRow(field) {
	field.onchange = function () { };
	var row = field.parentNode.parentNode.cloneNode(true);
	var selects = row.getElementsByTagName('select');
	for (var i=0; i < selects.length; i++) {
		selects[i].name = selects[i].name.replace(/\]/, '1$&');
		selects[i].selectedIndex = 0;
	}
	field.parentNode.parentNode.parentNode.appendChild(row);
}



/** Add row for indexes
* @param HTMLSelectElement
*/
function indexesAddRow(field) {
	field.onchange = function () { };
	var parent = field.parentNode.parentNode;
	var row = parent.cloneNode(true);
	var selects = row.getElementsByTagName('select');
	for (var i=0; i < selects.length; i++) {
		selects[i].name = selects[i].name.replace(/indexes\[\d+/, '$&1');
		selects[i].selectedIndex = 0;
	}
	var inputs = row.getElementsByTagName('input');
	for (var i=0; i < inputs.length; i++) {
		inputs[i].name = inputs[i].name.replace(/indexes\[\d+/, '$&1');
		inputs[i].value = '';
	}
	parent.parentNode.appendChild(row);
}

/** Change column in index
* @param HTMLSelectElement
* @param string name prefix
*/
function indexesChangeColumn(field, prefix) {
	var columns = field.parentNode.parentNode.getElementsByTagName('select');
	var names = [];
	for (var i=0; i < columns.length; i++) {
		var value = selectValue(columns[i]);
		if (value) {
			names.push(value);
		}
	}
	field.form[field.name.replace(/\].*/, '][name]')].value = prefix + names.join('_');
}

/** Add column for index
* @param HTMLSelectElement
* @param string name prefix
*/
function indexesAddColumn(field, prefix) {
	field.onchange = function () {
		indexesChangeColumn(field, prefix);
	};
	var select = field.form[field.name.replace(/\].*/, '][type]')];
	if (!select.selectedIndex) {
		select.selectedIndex = 3;
		select.onchange();
	}
	var column = field.parentNode.cloneNode(true);
	select = column.getElementsByTagName('select')[0];
	select.name = select.name.replace(/\]\[\d+/, '$&1');
	select.selectedIndex = 0;
	var input = column.getElementsByTagName('input')[0];
	input.name = input.name.replace(/\]\[\d+/, '$&1');
	input.value = '';
	field.parentNode.parentNode.appendChild(column);
	field.onchange();
}



var that, x, y; // em and tablePos defined in schema.inc.php

/** Get mouse position
* @param HTMLElement
* @param MouseEvent
*/
function schemaMousedown(el, event) {
	if ((event.which ? event.which : event.button) == 1) {
		that = el;
		x = event.clientX - el.offsetLeft;
		y = event.clientY - el.offsetTop;
	}
}

/** Move object
* @param MouseEvent
*/
function schemaMousemove(ev) {
	if (that !== undefined) {
		ev = ev || event;
		var left = (ev.clientX - x) / em;
		var top = (ev.clientY - y) / em;
		var divs = that.getElementsByTagName('div');
		var lineSet = { };
		for (var i=0; i < divs.length; i++) {
			if (divs[i].className == 'references') {
				var div2 = document.getElementById((/^refs/.test(divs[i].id) ? 'refd' : 'refs') + divs[i].id.substr(4));
				var ref = (tablePos[divs[i].title] ? tablePos[divs[i].title] : [ div2.parentNode.offsetTop / em, 0 ]);
				var left1 = -1;
				var id = divs[i].id.replace(/^ref.(.+)-.+/, '$1');
				if (divs[i].parentNode != div2.parentNode) {
					left1 = Math.min(0, ref[1] - left) - 1;
					divs[i].style.left = left1 + 'em';
					divs[i].getElementsByTagName('div')[0].style.width = -left1 + 'em';
					var left2 = Math.min(0, left - ref[1]) - 1;
					div2.style.left = left2 + 'em';
					div2.getElementsByTagName('div')[0].style.width = -left2 + 'em';
				}
				if (!lineSet[id]) {
					var line = document.getElementById(divs[i].id.replace(/^....(.+)-.+$/, 'refl$1'));
					var top1 = top + divs[i].offsetTop / em;
					var top2 = top + div2.offsetTop / em;
					if (divs[i].parentNode != div2.parentNode) {
						top2 += ref[0] - top;
						line.getElementsByTagName('div')[0].style.height = Math.abs(top1 - top2) + 'em';
					}
					line.style.left = (left + left1) + 'em';
					line.style.top = Math.min(top1, top2) + 'em';
					lineSet[id] = true;
				}
			}
		}
		that.style.left = left + 'em';
		that.style.top = top + 'em';
	}
}

/** Finish move
* @param MouseEvent
* @param string
*/
function schemaMouseup(ev, db) {
	if (that !== undefined) {
		ev = ev || event;
		tablePos[that.firstChild.firstChild.firstChild.data] = [ (ev.clientY - y) / em, (ev.clientX - x) / em ];
		that = undefined;
		var s = '';
		for (var key in tablePos) {
			s += '_' + key + ':' + Math.round(tablePos[key][0] * 10000) / 10000 + 'x' + Math.round(tablePos[key][1] * 10000) / 10000;
		}
		s = encodeURIComponent(s.substr(1));
		var link = document.getElementById('schema-link');
		link.href = link.href.replace(/[^=]+$/, '') + s;
		cookie('adminer_schema-' + db + '=' + s, 30); //! special chars in db
	}
}
<?php
}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIYSPqcvtD00I8cwqKb5v+q8pIAhxlRmhZYi17iPE8kzLBQA7");break;case"cross.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACI4SPqcvtDyMKYdZGb355wy6BX3dhlOEx57FK7gtHwkzXNl0AADs=");break;case"up.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIISPqcvtD00IUU4K730T9J5hFTiKEXmaYcW2rgDH8hwXADs=");break;case"down.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIISPqcvtD00I8cwqKb5bV/5cosdMJtmcHca2lQDH8hwXADs=");break;case"arrow.gif":echo
base64_decode("R0lGODlhCAAKAIAAAICAgP///yH5BAEAAAEALAAAAAAIAAoAAAIPBIJplrGLnpQRqtOy3rsAADs=");break;}}exit;}function
connection(){global$g;return$g;}function
adminer(){global$c;return$c;}function
idf_unescape($xc){$Mc=substr($xc,-1);return
str_replace($Mc.$Mc,$Mc,substr($xc,1,-1));}function
escape_string($X){return
substr(q($X),1,-1);}function
remove_slashes($le,$ac=false){if(get_magic_quotes_gpc()){while(list($x,$X)=each($le)){foreach($X
as$Ic=>$W){unset($le[$x][$Ic]);if(is_array($W)){$le[$x][stripslashes($Ic)]=$W;$le[]=&$le[$x][stripslashes($Ic)];}else$le[$x][stripslashes($Ic)]=($ac?$W:stripslashes($W));}}}}function
bracket_escape($xc,$xa=false){static$xf=array(':'=>':1',']'=>':2','['=>':3');return
strtr($xc,($xa?array_flip($xf):$xf));}function
h($Ve){return
htmlspecialchars(str_replace("\0","",$Ve),ENT_QUOTES);}function
nbsp($Ve){return(trim($Ve)!=""?h($Ve):"&nbsp;");}function
nl_br($Ve){return
str_replace("\n","<br>",$Ve);}function
checkbox($C,$Y,$Ha,$Kc="",$_d="",$Hc=false){static$s=0;$s++;$J="<input type='checkbox' name='$C' value='".h($Y)."'".($Ha?" checked":"").($_d?' onclick="'.h($_d).'"':'').($Hc?" class='jsonly'":"")." id='checkbox-$s'>";return($Kc!=""?"<label for='checkbox-$s'>$J".h($Kc)."</label>":$J);}function
optionlist($Cd,$Ie=null,$Nf=false){$J="";foreach($Cd
as$Ic=>$W){$Dd=array($Ic=>$W);if(is_array($W)){$J.='<optgroup label="'.h($Ic).'">';$Dd=$W;}foreach($Dd
as$x=>$X)$J.='<option'.($Nf||is_string($x)?' value="'.h($x).'"':'').(($Nf||is_string($x)?(string)$x:$X)===$Ie?' selected':'').'>'.h($X);if(is_array($W))$J.='</optgroup>';}return$J;}function
html_select($C,$Cd,$Y="",$zd=true){if($zd)return"<select name='".h($C)."'".(is_string($zd)?' onchange="'.h($zd).'"':"").">".optionlist($Cd,$Y)."</select>";$J="";foreach($Cd
as$x=>$X)$J.="<label><input type='radio' name='".h($C)."' value='".h($x)."'".($x==$Y?" checked":"").">".h($X)."</label>";return$J;}function
confirm($bb=""){return" onclick=\"return confirm('".lang(0).($bb?" (' + $bb + ')":"")."');\"";}function
print_fieldset($s,$Rc,$Tf=false,$_d=""){echo"<fieldset><legend><a href='#fieldset-$s' onclick=\"".h($_d)."return !toggle('fieldset-$s');\">$Rc</a></legend><div id='fieldset-$s'".($Tf?"":" class='hidden'").">\n";}function
bold($Ba){return($Ba?" class='active'":"");}function
odd($J=' class="odd"'){static$r=0;if(!$J)$r=-1;return($r++%
2?$J:'');}function
js_escape($Ve){return
addcslashes($Ve,"\r\n'\\/");}function
json_row($x,$X=null){static$bc=true;if($bc)echo"{";if($x!=""){echo($bc?"":",")."\n\t\"".addcslashes($x,"\r\n\"\\").'": '.($X!==null?'"'.addcslashes($X,"\r\n\"\\").'"':'undefined');$bc=false;}else{echo"\n}\n";$bc=true;}}function
ini_bool($Ac){$X=ini_get($Ac);return(eregi('^(on|true|yes)$',$X)||(int)$X);}function
sid(){static$J;if($J===null)$J=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$J;}function
q($Ve){global$g;return$g->quote($Ve);}function
get_vals($H,$Qa=0){global$g;$J=array();$I=$g->query($H);if(is_object($I)){while($K=$I->fetch_row())$J[]=$K[$Qa];}return$J;}function
get_key_vals($H,$h=null){global$g;if(!is_object($h))$h=$g;$J=array();$I=$h->query($H);if(is_object($I)){while($K=$I->fetch_row())$J[$K[0]]=$K[1];}return$J;}function
get_rows($H,$h=null,$k="<p class='error'>"){global$g;$Xa=(is_object($h)?$h:$g);$J=array();$I=$Xa->query($H);if(is_object($I)){while($K=$I->fetch_assoc())$J[]=$K;}elseif(!$I&&!is_object($h)&&$k&&defined("PAGE_HEADER"))echo$k.error()."\n";return$J;}function
unique_array($K,$u){foreach($u
as$t){if(ereg("PRIMARY|UNIQUE",$t["type"])){$J=array();foreach($t["columns"]as$x){if(!isset($K[$x]))continue
2;$J[$x]=$K[$x];}return$J;}}$J=array();foreach($K
as$x=>$X){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$x))$J[$x]=$X;}return$J;}function
where($Z){global$w;$J=array();foreach((array)$Z["where"]as$x=>$X)$J[]=idf_escape(bracket_escape($x,1)).(($w=="sql"&&ereg('\\.',$X))||$w=="mssql"?" LIKE ".exact_value(addcslashes($X,"%_\\")):" = ".exact_value($X));foreach((array)$Z["null"]as$x)$J[]=idf_escape($x)." IS NULL";return
implode(" AND ",$J);}function
where_check($X){parse_str($X,$Ga);remove_slashes(array(&$Ga));return
where($Ga);}function
where_link($r,$Qa,$Y,$Ad="="){return"&where%5B$r%5D%5Bcol%5D=".urlencode($Qa)."&where%5B$r%5D%5Bop%5D=".urlencode(($Y!==null?$Ad:"IS NULL"))."&where%5B$r%5D%5Bval%5D=".urlencode($Y);}function
cookie($C,$Y){global$ba;$Qd=array($C,(ereg("\n",$Y)?"":$Y),time()+2592000,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ba);if(version_compare(PHP_VERSION,'5.2.0')>=0)$Qd[]=true;return
call_user_func_array('setcookie',$Qd);}function
restart_session(){if(!ini_bool("session.use_cookies"))session_start();}function&get_session($x){return$_SESSION[$x][DRIVER][SERVER][$_GET["username"]];}function
set_session($x,$X){$_SESSION[$x][DRIVER][SERVER][$_GET["username"]]=$X;}function
auth_url($sb,$O,$Of,$j=null){global$tb;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($tb))."|username|".($j!==null?"db|":"").session_name()),$A);return"$A[1]?".(sid()?SID."&":"").($sb!="server"||$O!=""?urlencode($sb)."=".urlencode($O)."&":"")."username=".urlencode($Of).($j!=""?"&db=".urlencode($j):"").($A[2]?"&$A[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($_,$fd=null){if($fd!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($_!==null?$_:$_SERVER["REQUEST_URI"]))][]=$fd;}if($_!==null){if($_=="")$_=".";header("Location: $_");exit;}}function
query_redirect($H,$_,$fd,$qe=true,$Qb=true,$Wb=false){global$g,$k,$c;if($Qb)$Wb=!$g->query($H);$Qe="";if($H)$Qe=$c->messageQuery("$H;");if($Wb){$k=error().$Qe;return
false;}if($qe)redirect($_,$fd.$Qe);return
true;}function
queries($H=null){global$g;static$oe=array();if($H===null)return
implode(";\n",$oe);$oe[]=(ereg(';$',$H)?"DELIMITER ;;\n$H;\nDELIMITER ":$H);return$g->query($H);}function
apply_queries($H,$if,$Lb='table'){foreach($if
as$R){if(!queries("$H ".$Lb($R)))return
false;}return
true;}function
queries_redirect($_,$fd,$qe){return
query_redirect(queries(),$_,$fd,$qe,false,!$qe);}function
remove_from_uri($Pd=""){return
substr(preg_replace("~(?<=[?&])($Pd".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($E,$gb){return" ".($E==$gb?$E+1:'<a href="'.h(remove_from_uri("page").($E?"&page=$E":"")).'">'.($E+1)."</a>");}function
get_file($x,$lb=false){$Yb=$_FILES[$x];if(!$Yb||$Yb["error"])return$Yb["error"];$J=file_get_contents($lb&&ereg('\\.gz$',$Yb["name"])?"compress.zlib://$Yb[tmp_name]":($lb&&ereg('\\.bz2$',$Yb["name"])?"compress.bzip2://$Yb[tmp_name]":$Yb["tmp_name"]));if($lb){$Re=substr($J,0,3);if(function_exists("iconv")&&ereg("^\xFE\xFF|^\xFF\xFE",$Re,$we))$J=iconv("utf-16","utf-8",$J);elseif($Re=="\xEF\xBB\xBF")$J=substr($J,3);}return$J;}function
upload_error($k){$dd=($k==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($k?lang(1).($dd?" ".lang(2,$dd):""):lang(3));}function
repeat_pattern($F,$Sc){return
str_repeat("$F{0,65535}",$Sc/65535)."$F{0,".($Sc
%
65535)."}";}function
is_utf8($X){return(preg_match('~~u',$X)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$X));}function
shorten_utf8($Ve,$Sc=80,$Ye=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$Sc).")($)?)u",$Ve,$A))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$Sc).")($)?)",$Ve,$A);return
h($A[1]).$Ye.(isset($A[2])?"":"<i>...</i>");}function
friendly_url($X){return
preg_replace('~[^a-z0-9_]~i','-',$X);}function
hidden_fields($le,$yc=array()){while(list($x,$X)=each($le)){if(is_array($X)){foreach($X
as$Ic=>$W)$le[$x."[$Ic]"]=$W;}elseif(!in_array($x,$yc))echo'<input type="hidden" name="'.h($x).'" value="'.h($X).'">';}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
column_foreign_keys($R){global$c;$J=array();foreach($c->foreignKeys($R)as$n){foreach($n["source"]as$X)$J[$X][]=$n;}return$J;}function
enum_input($V,$ua,$l,$Y,$Db=null){global$c;preg_match_all("~'((?:[^']|'')*)'~",$l["length"],$Yc);$J=($Db!==null?"<label><input type='$V'$ua value='$Db'".((is_array($Y)?in_array($Db,$Y):$Y===0)?" checked":"")."><i>".lang(4)."</i></label>":"");foreach($Yc[1]as$r=>$X){$X=stripcslashes(str_replace("''","'",$X));$Ha=(is_int($Y)?$Y==$r+1:(is_array($Y)?in_array($r+1,$Y):$Y===$X));$J.=" <label><input type='$V'$ua value='".($r+1)."'".($Ha?' checked':'').'>'.h($c->editVal($X,$l)).'</label>';}return$J;}function
input($l,$Y,$p){global$Df,$c,$w;$C=h(bracket_escape($l["field"]));echo"<td class='function'>";$ye=($w=="mssql"&&$l["auto_increment"]);if($ye&&!$_POST["save"])$p=null;$lc=(isset($_GET["select"])||$ye?array("orig"=>lang(5)):array())+$c->editFunctions($l);$ua=" name='fields[$C]'";if($l["type"]=="enum")echo
nbsp($lc[""])."<td>".$c->editInput($_GET["edit"],$l,$ua,$Y);else{$bc=0;foreach($lc
as$x=>$X){if($x===""||!$X)break;$bc++;}$zd=($bc?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($l["field"])))."]']; if ($bc > f.selectedIndex) f.selectedIndex = $bc;\"":"");$ua.=$zd;echo(count($lc)>1?html_select("function[$C]",$lc,$p===null||in_array($p,$lc)||isset($lc[$p])?$p:"","functionChange(this);"):nbsp(reset($lc))).'<td>';$Cc=$c->editInput($_GET["edit"],$l,$ua,$Y);if($Cc!="")echo$Cc;elseif($l["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$l["length"],$Yc);foreach($Yc[1]as$r=>$X){$X=stripcslashes(str_replace("''","'",$X));$Ha=(is_int($Y)?($Y>>$r)&1:in_array($X,explode(",",$Y),true));echo" <label><input type='checkbox' name='fields[$C][$r]' value='".(1<<$r)."'".($Ha?' checked':'')."$zd>".h($c->editVal($X,$l)).'</label>';}}elseif(ereg('blob|bytea|raw|file',$l["type"])&&ini_bool("file_uploads"))echo"<input type='file' name='fields-$C'$zd>";elseif(ereg('text|lob',$l["type"]))echo"<textarea ".($w!="sqlite"||ereg("\n",$Y)?"cols='50' rows='12'":"cols='30' rows='1' style='height: 1.2em;'")."$ua>".h($Y).'</textarea>';else{$ed=(!ereg('int',$l["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$l["length"],$A)?((ereg("binary",$l["type"])?2:1)*$A[1]+($A[3]?1:0)+($A[2]&&!$l["unsigned"]?1:0)):($Df[$l["type"]]?$Df[$l["type"]]+($l["unsigned"]?0:1):0));echo"<input value='".h($Y)."'".($ed?" maxlength='$ed'":"").(ereg('char|binary',$l["type"])&&$ed>20?" size='40'":"")."$ua>";}}}function
process_input($l){global$c;$xc=bracket_escape($l["field"]);$p=$_POST["function"][$xc];$Y=$_POST["fields"][$xc];if($l["type"]=="enum"){if($Y==-1)return
false;if($Y=="")return"NULL";return+$Y;}if($l["auto_increment"]&&$Y=="")return
null;if($p=="orig")return($l["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($l["field"]):false);if($p=="NULL")return"NULL";if($l["type"]=="set")return
array_sum((array)$Y);if(ereg('blob|bytea|raw|file',$l["type"])&&ini_bool("file_uploads")){$Yb=get_file("fields-$xc");if(!is_string($Yb))return
false;return
q($Yb);}return$c->processInput($l,$Y,$p);}function
search_tables(){global$c,$g;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$gc=false;foreach(table_status()as$R=>$S){$C=$c->tableName($S);if(isset($S["Engine"])&&$C!=""&&(!$_POST["tables"]||in_array($R,$_POST["tables"]))){$I=$g->query("SELECT".limit("1 FROM ".table($R)," WHERE ".implode(" AND ",$c->selectSearchProcess(fields($R),array())),1));if($I->fetch_row()){if(!$gc){echo"<ul>\n";$gc=true;}echo"<li><a href='".h(ME."select=".urlencode($R)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$C</a>\n";}}}echo($gc?"</ul>":"<p class='message'>".lang(6))."\n";}function
dump_headers($wc,$md=false){global$c;$J=$c->dumpHeaders($wc,$md);$Nd=$_POST["output"];if($Nd!="text")header("Content-Disposition: attachment; filename=".friendly_url($wc!=""?$wc:(SERVER!=""?SERVER:"localhost")).".$J".($Nd!="file"&&!ereg('[^0-9a-z]',$Nd)?".$Nd":""));session_write_close();return$J;}function
dump_csv($K){foreach($K
as$x=>$X){if(preg_match("~[\"\n,;\t]~",$X)||$X==="")$K[$x]='"'.str_replace('"','""',$X).'"';}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$K)."\r\n";}function
apply_sql_function($p,$Qa){return($p?($p=="unixepoch"?"DATETIME($Qa, '$p')":($p=="count distinct"?"COUNT(DISTINCT ":strtoupper("$p("))."$Qa)"):$Qa);}function
password_file(){$pb=ini_get("upload_tmp_dir");if(!$pb){if(function_exists('sys_get_temp_dir'))$pb=sys_get_temp_dir();else{$Zb=@tempnam("","");if(!$Zb)return
false;$pb=dirname($Zb);unlink($Zb);}}$Zb="$pb/adminer.key";$J=@file_get_contents($Zb);if($J)return$J;$ic=@fopen($Zb,"w");if($ic){$J=md5(uniqid(mt_rand(),true));fwrite($ic,$J);fclose($ic);}return$J;}function
is_mail($Ab){$ta='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$rb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$F="$ta+(\\.$ta+)*@($rb?\\.)+$rb";return
preg_match("(^$F(,\\s*$F)*\$)i",$Ab);}function
is_url($Ve){$rb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($rb?\\.)+$rb(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$Ve,$A)?strtolower($A[1]):"");}global$c,$g,$tb,$zb,$Hb,$k,$lc,$pc,$ba,$Bc,$w,$a,$Lc,$yd,$We,$T,$U,$Df,$Kf,$fa;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";$ba=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_name("adminer_sid");$Qd=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$ba);if(version_compare(PHP_VERSION,'5.2.0')>=0)$Qd[]=true;call_user_func_array('session_set_cookie_params',$Qd);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$ac);if(function_exists("set_magic_quotes_runtime"))set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);$Lc=array('en'=>'English','cs'=>'Čeština','sk'=>'Slovenčina','nl'=>'Nederlands','es'=>'Español','de'=>'Deutsch','fr'=>'Français','it'=>'Italiano','et'=>'Eesti','hu'=>'Magyar','pl'=>'Polski','ca'=>'Català','pt'=>'Português','sl'=>'Slovenski','lt'=>'Lietuvių','tr'=>'Türkçe','ro'=>'Limba Română','id'=>'Bahasa Indonesia','ru'=>'Русский язык','uk'=>'Українська','zh'=>'简体中文','zh-tw'=>'繁體中文','ja'=>'日本語','ta'=>'த‌மிழ்','bn'=>'বাংলা','ar'=>'العربية','fa'=>'فارسی',);function
get_lang(){global$a;return$a;}function
lang($xc,$D=null){global$a,$U;$yf=(isset($U[$xc])?$U[$xc]:$xc);if(is_array($yf)){$ae=($D==1?0:($a=='cs'||$a=='sk'?($D&&$D<5?1:2):($a=='fr'?(!$D?0:1):($a=='pl'?($D
%
10>1&&$D
%
10<5&&$D/10
%
10!=1?1:2):($a=='sl'?($D
%
100==1?0:($D
%
100==2?1:($D
%
100==3||$D
%
100==4?2:3))):($a=='lt'?($D
%
10==1&&$D
%
100!=11?0:($D
%
10>1&&$D/10
%
10!=1?1:2)):($a=='ru'||$a=='uk'?($D
%
10==1&&$D
%
100!=11?0:($D
%
10>1&&$D
%
10<5&&$D/10
%
10!=1?1:2)):1)))))));$yf=$yf[$ae];}$sa=func_get_args();array_shift($sa);$fc=str_replace("%d","%s",$yf);if($fc!=$yf)$sa[0]=number_format($D,0,".",lang(7));return
vsprintf($fc,$sa);}function
switch_lang(){global$a,$Lc;echo"<form action=''>\n<div id='lang'>";hidden_fields($_GET,array('lang'));echo
lang(8).": ".html_select("lang",$Lc,$a,"var loc = location.search.replace(/[?&]lang=[^&]*/, ''); location.search = loc + (loc ? '&' : '') + 'lang=' + this.value;")," <input type='submit' value='".lang(9)."' class='hidden'>\n","</div>\n</form>\n";}if(isset($_GET["lang"])){$_COOKIE["adminer_lang"]=$_GET["lang"];$_SESSION["lang"]=$_GET["lang"];}$a="en";if(isset($Lc[$_COOKIE["adminer_lang"]])){cookie("adminer_lang",$_COOKIE["adminer_lang"]);$a=$_COOKIE["adminer_lang"];}elseif(isset($Lc[$_SESSION["lang"]]))$a=$_SESSION["lang"];else{$ja=array();preg_match_all('~([-a-z]+)(;q=([0-9.]+))?~',str_replace("_","-",strtolower($_SERVER["HTTP_ACCEPT_LANGUAGE"])),$Yc,PREG_SET_ORDER);foreach($Yc
as$A)$ja[$A[1]]=(isset($A[3])?$A[3]:1);arsort($ja);foreach($ja
as$x=>$G){if(isset($Lc[$x])){$a=$x;break;}$x=preg_replace('~-.*~','',$x);if(!isset($ja[$x])&&isset($Lc[$x])){$a=$x;break;}}}switch($a){case"en":$U=array('Are you sure?','Unable to upload a file.','Maximum allowed file size is %sB.','File does not exist.','empty','original','No tables.',',','Language','Use','Numbers','Date and time','Strings','Binary','Lists','System','Server','Username','Password','Database','Login','Permanent login','Select data','Show structure','Alter view','Alter table','New item','Last page','Edit',array('%d byte','%d bytes'),'Select','Functions','Aggregation','Search','anywhere','Sort','descending','Limit','Text length','Action','Full table scan','SQL command','open','save','Alter database','Alter schema','Create schema','Database schema','Privileges','Dump','Logout','database','Create new table','select','ltr','Invalid CSRF token. Send the form again.','Logout successful.','Session support must be enabled.','Session expired, please login again.','Invalid credentials.','No extension','None of the supported PHP extensions (%s) are available.','Too big POST data. Reduce the data or increase the %s configuration directive.','Invalid database.','Databases have been dropped.','Select database','Create new database','Process list','Variables','Status','%s version: %s through PHP extension %s','Logged as: %s','Collation','Tables','Drop','Refresh','No rows.','%.3f s','Foreign keys','collation','ON DELETE','Column name','Parameter name','Type','Length','Options','Auto Increment','Default values','Comment','Add next','Move up','Move down','Remove','View','Table','Column','Indexes','Alter indexes','Source','Target','ON UPDATE','Alter','Add foreign key','Triggers','Add trigger','Permanent link','Export','Output','Format','Routines','Events','Data','Create user','Error in query',array('%d row','%d rows'),array('Query executed OK, %d row affected.','Query executed OK, %d rows affected.'),'No commands to execute.',array('%d query executed OK.','%d queries executed OK.'),'File upload','File uploads are disabled.','Execute','Stop on error','Show only errors','From server','Webserver file %s','Run file','History','Clear','Edit all','Item has been deleted.','Item has been updated.','Item%s has been inserted.','Insert','Save','Save and continue edit','Save and insert next','Delete','Table has been dropped.','Table has been altered.','Table has been created.','Create table','Maximum number of allowed fields exceeded. Please increase %s and %s.','Table name','engine','Partition by','Partitions','Partition name','Values','Indexes have been altered.','Index Type','Column (length)','Name','Database has been dropped.','Database has been renamed.','Database has been created.','Database has been altered.','Create database','Call',array('Routine has been called, %d row affected.','Routine has been called, %d rows affected.'),'Foreign key has been dropped.','Foreign key has been altered.','Foreign key has been created.','Source and target columns must have the same data type, there must be an index on the target columns and referenced data must exist.','Foreign key','Target table','Change','Add column','View has been dropped.','View has been altered.','View has been created.','Create view','Event has been dropped.','Event has been altered.','Event has been created.','Alter event','Create event','Start','End','Every','On completion preserve','Routine has been dropped.','Routine has been altered.','Routine has been created.','Alter function','Alter procedure','Create function','Create procedure','Return type','Trigger has been dropped.','Trigger has been altered.','Trigger has been created.','Alter trigger','Create trigger','Time','Event','User has been dropped.','User has been altered.','User has been created.','Hashed','Routine','Grant','Revoke',array('%d process has been killed.','%d processes have been killed.'),'%d in total','Kill',array('%d item has been affected.','%d items have been affected.'),'Double click on a value to modify it.',array('%d row has been imported.','%d rows have been imported.'),'Unable to select the table','edit','Relations','Use edit link to modify this value.','Page','last','whole result','Clone','Import','Tables have been truncated.','Tables have been moved.','Tables have been copied.','Tables have been dropped.','Tables have been optimized.','Schema','Tables and views','Search data in tables','Engine','Data Length','Index Length','Data Free','Rows','Analyze','Optimize','Check','Repair','Truncate','Move to other database','Move','Copy','Schedule','At given time',array('%d e-mail has been sent.','%d e-mails have been sent.'));break;case"cs":$U=array('Opravdu?','Nepodařilo se nahrát soubor.','Maximální povolená velikost souboru je %sB.','Soubor neexistuje.','prázdné','původní','Žádné tabulky.',' ','Jazyk','Vybrat','Čísla','Datum a čas','Řetězce','Binární','Seznamy','Systém','Server','Uživatel','Heslo','Databáze','Přihlásit se','Trvalé přihlášení','Vypsat data','Zobrazit strukturu','Pozměnit pohled','Pozměnit tabulku','Nová položka','Poslední stránka','Upravit',array('%d bajt','%d bajty','%d bajtů'),'Vypsat','Funkce','Agregace','Vyhledat','kdekoliv','Seřadit','sestupně','Limit','Délka textů','Akce','Průchod celé tabulky','SQL příkaz','otevřít','uložit','Pozměnit databázi','Pozměnit schéma','Vytvořit schéma','Schéma databáze','Oprávnění','Export','Odhlásit','databáze','Vytvořit novou tabulku','vypsat','ltr','Neplatný token CSRF. Odešlete formulář znovu.','Odhlášení proběhlo v pořádku.','Session proměnné musí být povolené.','Session vypršela, přihlašte se prosím znovu.','Neplatné přihlašovací údaje.','Žádné rozšíření','Není dostupné žádné z podporovaných PHP rozšíření (%s).','Příliš velká POST data. Zmenšete data nebo zvyšte hodnotu konfigurační direktivy %s.','Nesprávná databáze.','Databáze byly odstraněny.','Vybrat databázi','Vytvořit novou databázi','Seznam procesů','Proměnné','Stav','Verze %s: %s přes PHP rozšíření %s','Přihlášen jako: %s','Porovnávání','Tabulky','Odstranit','Obnovit','Žádné řádky.','%.3f s','Cizí klíče','porovnávání','Při smazání','Název sloupce','Název parametru','Typ','Délka','Volby','Auto Increment','Výchozí hodnoty','Komentář','Přidat další','Přesunout nahoru','Přesunout dolů','Odebrat','Pohled','Tabulka','Sloupec','Indexy','Pozměnit indexy','Zdroj','Cíl','Při změně','Změnit','Přidat cizí klíč','Triggery','Přidat trigger','Trvalý odkaz','Export','Výstup','Formát','Procedury a funkce','Události','Data','Vytvořit uživatele','Chyba v dotazu',array('%d řádek','%d řádky','%d řádků'),array('Příkaz proběhl v pořádku, byl změněn %d záznam.','Příkaz proběhl v pořádku, byly změněny %d záznamy.','Příkaz proběhl v pořádku, bylo změněno %d záznamů.'),'Žádné příkazy k vykonání.',array('%d příkaz proběhl v pořádku.','%d příkazy proběhly v pořádku.','%d příkazů proběhlo v pořádku.'),'Nahrání souboru','Nahrávání souborů není povoleno.','Provést','Zastavit při chybě','Zobrazit pouze chyby','Ze serveru','Soubor %s na webovém serveru','Spustit soubor','Historie','Vyčistit','Upravit vše','Položka byla smazána.','Položka byla aktualizována.','Položka%s byla vložena.','Vložit','Uložit','Uložit a pokračovat v editaci','Uložit a vložit další','Smazat','Tabulka byla odstraněna.','Tabulka byla změněna.','Tabulka byla vytvořena.','Vytvořit tabulku','Byl překročen maximální povolený počet polí. Zvyšte prosím %s a %s.','Název tabulky','úložiště','Rozdělit podle','Oddíly','Název oddílu','Hodnoty','Indexy byly změněny.','Typ indexu','Sloupec (délka)','Název','Databáze byla odstraněna.','Databáze byla přejmenována.','Databáze byla vytvořena.','Databáze byla změněna.','Vytvořit databázi','Zavolat',array('Procedura byla zavolána, byl změněn %d záznam.','Procedura byla zavolána, byly změněny %d záznamy.','Procedura byla zavolána, bylo změněno %d záznamů.'),'Cizí klíč byl odstraněn.','Cizí klíč byl změněn.','Cizí klíč byl vytvořen.','Zdrojové a cílové sloupce musí mít stejný datový typ, nad cílovými sloupci musí být definován index a odkazovaná data musí existovat.','Cizí klíč','Cílová tabulka','Změnit','Přidat sloupec','Pohled byl odstraněn.','Pohled byl změněn.','Pohled byl vytvořen.','Vytvořit pohled','Událost byla odstraněna.','Událost byla změněna.','Událost byla vytvořena.','Pozměnit událost','Vytvořit událost','Začátek','Konec','Každých','Po dokončení zachovat','Procedura byla odstraněna.','Procedura byla změněna.','Procedura byla vytvořena.','Změnit funkci','Změnit proceduru','Vytvořit funkci','Vytvořit proceduru','Návratový typ','Trigger byl odstraněn.','Trigger byl změněn.','Trigger byl vytvořen.','Změnit trigger','Vytvořit trigger','Čas','Událost','Uživatel byl odstraněn.','Uživatel byl změněn.','Uživatel byl vytvořen.','Zahašované','Procedura','Povolit','Zakázat',array('Byl ukončen %d proces.','Byly ukončeny %d procesy.','Bylo ukončeno %d procesů.'),'%d celkem','Ukončit',array('Byl ovlivněn %d záznam.','Byly ovlivněny %d záznamy.','Bylo ovlivněno %d záznamů.'),'Dvojklikněte na políčko, které chcete změnit.',array('Byl importován %d záznam.','Byly importovány %d záznamy.','Bylo importováno %d záznamů.'),'Nepodařilo se vypsat tabulku','upravit','Vztahy','Ke změně této hodnoty použijte odkaz upravit.','Stránka','poslední','celý výsledek','Klonovat','Import','Tabulky byly vyprázdněny.','Tabulky byly přesunuty.','Tabulky byly zkopírovány.','Tabulky byly odstraněny.','Tabulky byly optimalizovány.','Schéma','Tabulky a pohledy','Vyhledat data v tabulkách','Úložiště','Velikost dat','Velikost indexů','Volné místo','Řádků','Analyzovat','Optimalizovat','Zkontrolovat','Opravit','Vyprázdnit','Přesunout do jiné databáze','Přesunout','Zkopírovat','Plán','V daný čas','Pozměnit typ');break;case"sk":$U=array('Naozaj?','Súbor sa nepodarilo nahrať.','Maximálna povolená veľkosť súboru je %sB.','Súbor neexistuje.','prázdne','originál','Žiadne tabuľky.',' ','Jazyk','Vybrať','Čísla','Dátum a čas','Reťazce','Binárne','Zoznamy','Systém','Server','Používateľ','Heslo','Databáza','Prihlásiť sa','Trvalé prihlásenie','Vypísať dáta','Zobraziť štruktúru','Zmeniť pohľad','Zmeniť tabuľku','Nová položka','Posledná stránka','Upraviť',array('%d bajt','%d bajty','%d bajtov'),'Vypísať','Funkcie','Agregácia','Vyhľadať','kdekoľvek','Zotriediť','zostupne','Limit','Dĺžka textov','Akcia','Full table scan','SQL príkaz','otvoriť','uložiť','Zmeniť databázu','Pozmeniť schému','Vytvoriť schému','Schéma databázy','Oprávnenia','Export','Odhlásiť','databáza','Vytvoriť novú tabuľku','vypísať','ltr','Neplatný token CSRF. Odošlite formulár znova.','Odhlásenie prebehlo v poriadku.','Session premenné musia byť povolené.','Session vypršala, prihláste sa prosím znova.','Neplatné prihlasovacie údaje.','Žiadne rozšírenie','Nie je dostupné žiadne z podporovaných rozšírení (%s).','Príliš veľké POST dáta. Zmenšite dáta alebo zvýšte hodnotu konfiguračej direktívy %s.','Nesprávna databáza.','Databázy boli odstránené.','Vybrať databázu','Vytvoriť novú databázu','Zoznam procesov','Premenné','Stav','Verzia %s: %s cez PHP rozšírenie %s','Prihlásený ako: %s','Porovnávanie','Tabuľky','Odstrániť','Obnoviť','Žiadne riadky.','%.3f s','Cudzie kľúče','porovnávanie','ON DELETE','Názov stĺpca','Názov parametra','Typ','Dĺžka','Voľby','Auto Increment','Východzie hodnoty','Komentár','Pridať ďalší','Presunúť hore','Presunúť dolu','Odobrať','Pohľad','Tabuľka','Stĺpec','Indexy','Zmeniť indexy','Zdroj','Cieľ','ON UPDATE','Zmeniť','Pridať cudzí kľúč','Triggery','Pridať trigger','Permanentný odkaz','Export','Výstup','Formát','Procedúry','Udalosti','Dáta','Vytvoriť používateľa','Chyba v dotaze',array('%d riadok','%d riadky','%d riadkov'),array('Príkaz prebehol v poriadku, bol zmenený %d záznam.','Príkaz prebehol v poriadku boli zmenené %d záznamy.','Príkaz prebehol v poriadku bolo zmenených %d záznamov.'),'Žiadne príkazy na vykonanie.',array('Bol vykonaný %d dotaz.','Boli vykonané %d dotazy.','Bolo vykonaných %d dotazov.'),'Nahranie súboru','Nahrávánie súborov nie je povolené.','Vykonať','Zastaviť pri chybe','Zobraziť iba chyby','Zo serveru','Súbor %s na webovom serveri','Spustiť súbor','História','Vyčistiť','Upraviť všetko','Položka bola vymazaná.','Položka bola aktualizovaná.','Položka%s bola vložená.','Vložiť','Uložiť','Uložiť a pokračovať v úpravách','Uložiť a vložiť ďalší','Zmazať','Tabuľka bola odstránená.','Tabuľka bola zmenená.','Tabuľka bola vytvorená.','Vytvoriť tabuľku','Bol prekročený maximálny počet povolených polí. Zvýšte prosím %s a %s.','Názov tabuľky','úložisko','Rozdeliť podľa','Oddiely','Názov oddielu','Hodnoty','Indexy boli zmenené.','Typ indexu','Stĺpec (dĺžka)','Názov','Databáza bola odstránená.','Databáza bola premenovaná.','Databáza bola vytvorená.','Databáza bola zmenená.','Vytvoriť databázu','Zavolať',array('Procedúra bola zavolaná, bol zmenený %d záznam.','Procedúra bola zavolaná, boli zmenené %d záznamy.','Procedúra bola zavolaná, bolo zmenených %d záznamov.'),'Cudzí kľúč bol odstránený.','Cudzí kľúč bol zmenený.','Cudzí kľúč bol vytvorený.','Zdrojové a cieľové stĺpce musia mať rovnaký datový typ, nad cieľovými stĺpcami musí byť definovaný index a odkazované dáta musia existovať.','Cudzí kľúč','Cieľová tabuľka','Zmeniť','Pridať stĺpec','Pohľad bol odstránený.','Pohľad bol zmenený.','Pohľad bol vytvorený.','Vytvoriť pohľad','Udalosť bola odstránená.','Udalosť bola zmenená.','Udalosť bola vytvorená.','Upraviť udalosť','Vytvoriť udalosť','Začiatok','Koniec','Každých','Po dokončení zachovat','Procedúra bola odstránená.','Procedúra bola zmenená.','Procedúra bola vytvorená.','Zmeniť funkciu','Zmeniť procedúru','Vytvoriť funkciu','Vytvoriť procedúru','Návratový typ','Trigger bol odstránený.','Trigger bol zmenený.','Trigger bol vytvorený.','Zmeniť trigger','Vytvoriť trigger','Čas','Udalosť','Používateľ bol odstránený.','Používateľ bol zmenený.','Používateľ bol vytvorený.','Zahašované','Procedúra','Povoliť','Zakázať',array('Bol ukončený %d proces.','Boli ukončené %d procesy.','Bolo ukončených %d procesov.'),'%d celkom','Ukončiť','%d položiek bolo ovplyvnených.','Dvojkliknite na políčko, ktoré chcete zmeniť.',array('Bol importovaný %d záznam.','Boli importované %d záznamy.','Bolo importovaných %d záznamov.'),'Tabuľku sa nepodarilo vypísať','upraviť','Vzťahy','Pre zmenu tejto hodnoty použite odkaz upraviť.','Stránka','posledný','celý výsledok','Klonovať','Import','Tabuľka bola vyprázdnená.','Tabuľka bola presunutá.','Tabuľky boli skopírované.','Tabuľka bola odstránená.','Tables have been optimized.','Schéma','Tabuľky a pohľady','Vyhľadať dáta v tabuľkách','Typ','Veľkosť dát','Veľkosť indexu','Voľné miesto','Riadky','Analyzovať','Optimalizovať','Skontrolovať','Opraviť','Vyprázdniť','Presunúť do inej databázy','Presunúť','Kopírovať','Plán','V stanovený čas','HH:MM:SS');break;case"nl":$U=array('Weet u het zeker?','Onmogelijk bestand te uploaden.','Maximum toegelaten bestandsgrootte is %sB.','Bestand niet gevonden.','leeg','origineel','Geen tabellen.','.','Taal','Gebruik','Getallen','Datum en tijd','Tekst','Binaire gegevens','Lijsten','Databasesysteem','Server','Gebruikersnaam','Wachtwoord','Database','Inloggen','Blijf aangemeld','Gegevens selecteren','Toon structuur','View aanpassen','Tabel aanpassen','Nieuw item','Laatste pagina','Bewerk',array('%d byte','%d bytes'),'Kies','Functies','Totalen','Zoeken','overal','Sorteren','Aflopend','Beperk','Tekst lengte','Acties','Full table scan','SQL opdracht','openen','opslaan','Database aanpassen','Schema wijzigen','Schema maken','Database schema','Rechten','Exporteer','Uitloggen','database','Nieuwe tabel','kies','ltr','Ongeldig CSRF token. Verstuur het formulier opnieuw.','Uitloggen geslaagd.','Sessies moeten geactiveerd zijn.','Uw sessie is verlopen. Gelieve opnieuw in te loggen.','Ongeldige logingegevens.','Geen extensie','Geen geldige PHP extensies beschikbaar (%s).','POST-data is te groot. Verklein de hoeveelheid data of verhoog de %s configuratie.','Ongeldige database.','Databases verwijderd.','Database selecteren','Nieuwe database','Proceslijst','Variabelen','Status','%s versie: %s met PHP extensie %s','Aangemeld als: %s','Collatie','Tabellen','Verwijderen','Vernieuwen','Geen rijen.','%.3f s','Foreign keys','collation','ON DELETE','Kolomnaam','Parameternaam','Type','Lengte','Opties','Auto nummering','Standaard waarden','Commentaar','Volgende toevoegen','Omhoog','Omlaag','Verwijderen','View','Tabel','Kolom','Indexen','Indexen aanpassen','Bron','Doel','ON UPDATE','Aanpassen','Foreign key aanmaken','Triggers','Trigger aanmaken','Permanente link','Exporteren','Uitvoer','Formaat','Procedures','Events','Data','Gebruiker aanmaken','Fout in query',array('%d rij','%d rijen'),array('Query uitgevoerd, %d rij geraakt.','Query uitgevoerd, %d rijen geraakt.'),'Geen opdrachten uit te voeren.',array('%d query succesvol uitgevoerd.','%d querys succesvol uitgevoerd'),'Bestand uploaden','Bestanden uploaden is uitgeschakeld.','Uitvoeren','Stoppen bij fout','Enkel fouten tonen','Van server','Webserver bestand %s','Bestand uitvoeren','Geschiedenis','Wissen','Alles bewerken','Item verwijderd.','Item aangepast.','Item%s toegevoegd.','Toevoegen','Opslaan','Opslaan en verder bewerken','Opslaan, daarna toevoegen','Verwijderen','Tabel verwijderd.','Tabel aangepast.','Tabel aangemaakt.','Tabel aanmaken','Maximum aantal velden bereikt. Verhoog %s en %s.','Tabelnaam','engine','Partitioneren op','Partities','Partitie naam','Waarden','Index aangepast.','Index type','Kolom (lengte)','Naam','Database verwijderd.','Database hernoemd.','Database aangemaakt.','Database aangepast.','Database aanmaken','Uitvoeren',array('Procedure uitgevoerd, %d rij geraakt.','Procedure uitgevoerd, %d rijen geraakt.'),'Foreign key verwijderd.','Foreign key aangepast.','Foreign key aangemaakt.','Bron- en doelkolommen moeten van hetzelfde data type zijn, er moet een index bestaan op de gekozen kolommen en er moet gerelateerde data bestaan.','Foreign key','Doeltabel','Veranderen','Kolom toevoegen','View verwijderd.','View aangepast.','View aangemaakt.','View aanmaken','Event werd verwijderd.','Event werd aangepast.','Event werd aangemaakt.','Event aanpassen','Event aanmaken','Start','Stop','Iedere','Bewaren na voltooiing','Procedure verwijderd.','Procedure aangepast.','Procedure aangemaakt.','Functie aanpassen','Procedure aanpassen','Functie aanmaken','Procedure aanmaken','Return type','Trigger verwijderd.','Trigger aangepast.','Trigger aangemaakt.','Trigger aanpassen','Trigger aanmaken','Time','Event','Gebruiker verwijderd.','Gebruiker aangepast.','Gebruiker aangemaakt.','Gehashed','Routine','Toekennen','Intrekken',array('%d proces gestopt.','%d processen gestopt.'),'%d in totaal','Stoppen',array('%d item aangepast.','%d items aangepast.'),'Dubbelklik op een waarde om deze te bewerken.',array('%d rij werd geïmporteerd.','%d rijen werden geïmporteerd.'),'Onmogelijk tabel te selecteren','bewerk','Relaties','Gebruik de link "bewerk" om deze waarde te wijzigen.','Pagina','laatste','volledig resultaat','Dupliceer','Importeren','Tabellen werden geleegd.','Tabellen werden verplaatst.','De tabellen zijn gekopieerd.','Tabellen werden verwijderd.','Tables have been optimized.','Schema','Tabellen en views','Zoeken in database','Engine','Data lengte','Index lengte','Data Vrij','Rijen','Analyseer','Optimaliseer','Controleer','Herstel','Legen','Verplaats naar andere database','Verplaats','Kopieren','Schedule','Op aangegeven tijd','HH:MM:SS');break;case"es":$U=array('Está seguro?','No es posible importar archivo.','Tamaño máximo de archivo es %sB.','Archivo no existe.','ningúno','original','No existen tablas.',' ','Idioma','Usar','Números','Fecha y hora','Cadena','Binario','Listas','Motor de base de datos','Servidor','Usuario','Contraseña','Base de datos','Login','Guardar contraseña','Visualizar contenido','Mostrar estructura','Modificar vista','Modifique estructura','Nuevo Registro','Ultima página','Modificar',array('%d byte','%d bytes'),'Mostrar','Funciones','Agregaciones','Condición','donde sea','Ordenar','descendiente','Limit','Longitud de texto','Acción','Full table scan','Comando SQL','mostrar','archivo','Modificar Base de datos','Modificar esquema','Crear esquema','Esquema de base de datos','Privilegios','Export','Logout','base de datos','Nueva tabla','registros','ltr','Token CSRF inválido. Vuelva a enviar los datos del formulario.','Salida exitosa.','Deben estar habilitadas las sesiones.','Sesión expirada, por favor ingrese su clave de nuevo.','Identificacion inválida.','No hay extension','Ninguna de las extensiones PHP soportadas (%s) está disponible.','POST data demasiado grande. Reduzca el tamaño o aumente la directiva de configuración %s.','Base de datos inválida.','Bases de datos eliminadas.','Seleccionar Base de datos','Ingrese nueva base de datos','Lista de procesos','Variables','Estado','Versión %s: %s a través de extensión PHP %s','Logeado como: %s','Colación','Tablas','Eliminar','Refrescar','No existen registros.','%.3f s','Claves foráneas','colación','ON DELETE','Nombre de columna','Nombre de Parámetro','Tipo','Longitud','Opciones','Incremento automático','Valores predeterminados','Comentario','Agregar','Mover arriba','Mover abajo','Eliminar','Vistas','Tabla','Columna','Indices','Modificar indices','Origen','Destino','ON UPDATE','Modificar','Agregar clave foránea','Triggers','Agregar trigger','Enlace permanente','Exportar','Salida','Formato','Procedimientos','Eventos','Datos','Crear Usuario','Error en consulta',array('%d registro','%d registros'),array('Consulta ejecutada, %d registro afectado.','Consulta ejecutada, %d registros afectados.'),'No hay comando para ejecutar.',array('%d sentencia sql ejecutada correctamente.','%d sentencias sql ejecutadas correctamente.'),'Importar archivo','Importación de archivos deshablilitado.','Ejecutar','Parar en caso de error','Mostrar solamente errores','Desde servidor','Archivo de servidor web %s','Ejecutar Archivo','History','Vaciar','Editar todos','Registro eliminado.','Registro modificado.','Registro%s insertado.','Agregar','Guardar','Guardar y continuar editando','Guardar e insertar otro','Eliminar','Tabla eliminada.','Tabla modificada.','Tabla creada.','Crear tabla','Cantida máxima de campos permitidos excedidos. Por favor aumente %s y %s.','Nombre de la tabla','motor','Particionar por','Particiones','Nombre de Partición','Valores','Indices modificados.','Tipo de índice','Columna (longitud)','Nombre','Base de datos eliminada.','Base de datos renombrada.','Base de datos creada.','Base de datos modificada.','Crear Base de datos','Llamar',array('Consulta ejecutada, %d registro afectado.','Consulta ejecutada, %d registros afectados.'),'Clave externa eliminada.','Clave externa modificada.','Clave externa creada.','Las columnas de origen y destino deben ser del mismo tipo, debe existir un índice entre las columnas del destino y el registro referenciado debe existir.','Clave externa','Tabla de destino','Modificar','Agregar columna','Vista eliminada.','Vista modificada.','Vista creada.','Crear vista','Evento eliminado.','Evento modificado.','Evento creado.','Modificar Evento','Crear Evento','Inicio','Fin','Cada','Al completar preservar','Procedimiento eliminado.','Procedimiento modificado.','Procedimiento creado.','Modificar Función','Modificar procedimiento','Crear función','Crear procedimiento','Tipo de valor de regreso','Trigger eliminado.','Trigger modificado.','Trigger creado.','Modificar Trigger','Agregar Trigger','Tiempo','Evento','Usuario eliminado.','Usuario modificado.','Usuario creado.','Hash','Rutina','Conceder','Impedir',array('%d proceso detenido.','%d procesos detenidos.'),'%d en total','Detener',array('%d ítem afectado.','%d itemes afectados.'),'Doble-clic sobre el valor para editarlo.',array('%d registro importado.','%d registros importados.'),'No es posible seleccionar la tabla','modificar','Relaciones','Utilice el enlace de modificar para realizar los cambios.','Página','último','resultado completo','Clonar','Importar','Tablas vaciadas (truncate).','Se movieron las tablas.','Tablas copiadas.','Tablas eliminadas.','Tables have been optimized.','Esquema','Tablas y vistas','Buscar datos en tablas','Motor','Longitud de datos','Longitud de índice','Espacio libre','Registros','Analizar','Optimizar','Comprobar','Reparar','Vaciar','Mover a otra base de datos','Mover','Copiar','Agenda','A hora determinada','HH:MM:SS');break;case"de":$U=array('Sind Sie sicher ?','Hochladen von Datei fehlgeschlagen.','Maximal erlaubte Dateigrösse ist %sB.','Datei existiert nicht.','leer','Original','Keine Tabellen.',' ','Sprache','Benutzung','Zahlen','Datum oder Zeit','Zeichenketten','Binär','Listen','Datenbank System','Server','Benutzer','Passwort','Datenbank','Login','Passwort speichern','Daten auswählen','Struktur anzeigen','View ändern','Tabelle ändern','Neuer Datensatz','Letzte Seite','Ändern',array('%d Byte','%d Bytes'),'Daten zeigen von','Funktionen','Agregationen','Suchen','beliebig','Ordnen','absteigend','Begrenzung','Textlänge','Aktion','Full table scan','SQL-Query','anzeigen','Datei','Datenbank ändern','Schema ändern','Neues Schema','Datenbankschema','Rechte','Export','Abmelden','Datenbank','Neue Tabelle','zeigen','ltr','CSRF Token ungültig. Bitte die Formulardaten erneut abschicken.','Abmeldung erfolgreich.','Sitzungen müssen aktiviert sein.','Sitzungsdauer abgelaufen, bitte erneut anmelden.','Ungültige Anmelde-Informationen.','Keine Erweiterungen installiert','Keine der unterstützten PHP-Erweiterungen (%s) ist vorhanden.','POST data zu gross. Reduzieren Sie die Grösse oder vergrössern Sie den Wert %s in der Konfiguration.','Datenbank ungültig.','Datenbanken entfernt.','Datenbank auswählen','Neue Datenbank','Prozessliste','Variablen','Status','Version %s: %s, mit PHP-Erweiterung %s','Angemeldet als: %s','Collation','Tabellen','Entfernen','Aktualisieren','Keine Daten.','%.3f s','Fremdschlüssel','Kollation','ON DELETE','Spaltenname','Name des Parameters','Typ','Länge','Optionen','Auto-Inkrement','Vorgabewerte festlegen','Kommentar','Hinzufügen','Nach oben','Nach unten','Entfernen','View','Tabelle','Spalte','Indizes','Indizes ändern','Ursprung','Ziel','ON UPDATE','Ändern','Fremdschlüssel hinzufügen','Trigger','Trigger hinzufügen','Dauerhafter Link','Exportieren','Ergebnis','Format','Prozeduren','Ereignisse','Daten','Neuer Benutzer','Fehler in der SQL-Abfrage',array('%d Datensatz','%d Datensätze'),array('Abfrage ausgeführt, %d Datensatz betroffen.','Abfrage ausgeführt, %d Datensätze betroffen.'),'Kein Kommando vorhanden.',array('SQL-Query erfolgreich ausgeführt.','%d SQL-Queries erfolgreich ausgeführt.'),'Datei importieren','Importieren von Dateien abgeschaltet.','Ausführen','Bei Fehler anhalten','Nur Fehler anzeigen','Im Server','Webserver Datei %s','Datei ausführen','History','Entleeren','Alle ändern','Datensatz gelöscht.','Datensatz geändert.','Datensatz%s hinzugefügt.','Hinzufügen','Speichern','Speichern und weiter bearbeiten','Speichern und nächsten hinzufügen','Entfernen','Tabelle entfernt.','Tabelle geändert.','Tabelle erstellt.','Neue Tabelle erstellen','Die maximal erlaubte Anzahl der Felder ist überschritten. Bitte %s und %s erhöhen.','Name der Tabelle','Motor','Partitionieren um','Partitionen','Name der Partition','Werte','Indizes geändert.','Index-Typ','Spalte (Länge)','Name','Datenbank entfernt.','Datenbank umbenannt.','Datenbank erstellt.','Datenbank geändert.','Neue Datenbank','Aufrufen',array('Kommando SQL ausgeführt, %d Datensatz betroffen.','Kommando SQL ausgeführt, %d Datensätze betroffen.'),'Fremdschlüssel entfernt.','Fremdschlüssel geändert.','Fremdschlüssel erstellt.','Spalten des Ursprungs und des Zieles müssen vom gleichen Datentyp sein, es muss unter den Zielspalten ein Index existieren und die referenzierten Daten müssen existieren.','Fremdschlüssel','Zieltabelle','Ändern','Spalte hinzufügen','View entfernt.','View geändert.','View erstellt.','Neue View erstellen','Ereignis entfernt.','Ereignis geändert.','Ereignis erstellt.','Ereignis ändern','Ereignis erstellen','Start','Ende','Jede','Nach der Ausführung erhalten','Prozedur entfernt.','Prozedur geändert.','Prozedur erstellt.','Funktion ändern','Prozedur ändern','Neue Funktion','Neue Prozedur','Typ des Rückgabewertes','Trigger entfernt.','Trigger geändert.','Trigger erstellt.','Trigger ändern','Trigger hinzufügen','Zeitpunkt','Ereignis','Benutzer entfernt.','Benutzer geändert.','Benutzer erstellt.','Hashed','Rutine','Erlauben','Verbieten',array('%d Prozess gestoppt.','%d Prozesse gestoppt.'),'%d insgesamt','Anhalten','%d Artikel betroffen.','Doppelklick zum Bearbeiten des Wertes.',array('%d Datensatz importiert.','%d Datensätze wurden importiert.'),'Auswahl der Tabelle fehlgeschlagen','ändern','Relationen','Benutzen Sie den Link zum editieren dieses Wertes.','Seite','letzte','Gesamtergebnis','Klonen','Importieren','Tabellen sind entleert worden (truncate).','Tabellen verschoben.','Tabellen wurden kopiert.','Tabellen wurden entfernt (drop).','Tables have been optimized.','Schema','Tabellen und Views','Suche in Tabellen','Motor','Datengrösse','Indexgrösse','Freier Bereich','Datensätze','Analysieren','Optimieren','Prüfen','Reparieren','Entleeren (truncate)','In andere Datenbank verschieben','Verschieben','Kopieren','Zeitplan','Zur angegebenen Zeit','HH:MM:SS');break;case"fr":$U=array('Êtes-vous certain ?','Impossible d\'importer le fichier.','La taille maximale des fichiers est de %sB.','Le fichier est introuvable.','vide','original','Aucune table.',',','Langue','Utiliser','Nombres','Date et heure','Chaînes','Binaires','Listes','Système','Serveur','Utilisateur','Mot de passe','Base de données','Authentification','Authentification permanente','Afficher les données','Afficher la structure','Modifier une vue','Modifier la table','Nouvel élément','Dernière page','Modifier',array('%d octet','%d octets'),'Select','Fonctions','Agrégation','Rechercher','n\'importe où','Trier','décroissant','Limite','Longueur du texte','Action','Full table scan','Requête SQL','ouvrir','sauvegarder','Modifier la base de données','Modifier le schéma','Créer un schéma','Schéma de la base de données','Privilèges','Exporter','Déconnexion','base de données','Créer une nouvelle table','select','ltr','Token CSRF invalide. Veuillez réenvoyer le formulaire.','Au revoir !','Veuillez activer les sessions.','Session expirée, veuillez vous authentifier à nouveau.','Authentification échouée.','Extension introuvable','Aucune des extensions PHP supportées (%s) n\'est disponible.','Données POST trop grandes. Réduisez la taille des données ou augmentez la valeur de %s dans la configuration de PHP.','Base de données invalide.','Les bases de données ont été supprimées.','Sélectionner la base de données','Créer une base de données','Liste des processus','Variables','Statut','Version de %s : %s via l\'extension PHP %s','Authentifié en tant que : %s','Interclassement','Tables','Supprimer','Rafraîchir','Aucun résultat.','%.3f s','Clés étrangères','interclassement','ON DELETE','Nom de la colonne','Nom du paramètre','Type','Longueur','Options','Auto increment','Valeurs par défaut','Commentaire','Ajouter le prochain','Déplacer vers le haut','Déplacer vers le bas','Effacer','Vue','Table','Colonne','Index','Modifier les index','Source','Cible','ON UPDATE','Modifier','Ajouter une clé étrangère','Triggers','Ajouter un trigger','Lien permanent','Exporter','Sortie','Format','Routines','Évènements','Données','Créer un utilisateur','Erreur dans la requête',array('%d ligne','%d lignes'),array('Requête exécutée avec succès, %d ligne modifiée.','Requête exécutée avec succès, %d lignes modifiées.'),'Aucune commande à exécuter.',array('%d requête exécutée avec succès.','%d requêtes exécutées avec succès.'),'Importer un fichier','L\'importation de fichier est désactivée.','Exécuter','Arrêter en cas d\'erreur','Montrer seulement les erreurs','Depuis le serveur','Fichier %s du serveur Web','Exécuter le fichier','Historique','Effacer','Tout modifier','L\'élément a été supprimé.','L\'élément a été modifié.','L\'élément%s a été inséré.','Insérer','Sauvegarder','Sauvegarder et continuer l\'édition','Sauvegarder et insérer le prochain','Effacer','La table a été effacée.','La table a été modifiée.','La table a été créée.','Créer une table','Le nombre maximum de champs est dépassé. Veuillez augmenter %s et %s.','Nom de la table','moteur','Partitionner par','Partitions','Nom de la partition','Valeurs','Index modifiés.','Type d\'index','Colonne (longueur)','Nom','La base de données a été supprimée.','La base de données a été renommée.','La base de données a été créée.','La base de données a été modifiée.','Créer une base de données','Appeler',array('La routine a été exécutée, %d ligne modifiée.','La routine a été exécutée, %d lignes modifiées.'),'La clé étrangère a été effacée.','La clé étrangère a été modifiée.','La clé étrangère a été créée.','Les colonnes de source et de destination doivent être du même type, il doit y avoir un index sur les colonnes de destination et les données référencées doivent exister.','Clé étrangère','Table visée','Modifier','Ajouter une colonne','La vue a été effacée.','La vue a été modifiée.','La vue a été créée.','Créer une vue','L\'évènement a été supprimé.','L\'évènement a été modifié.','L\'évènement a été créé.','Modifier un évènement','Créer un évènement','Démarrer','Terminer','Chaque','Conserver quand complété','La routine a été supprimée.','La routine a été modifiée.','La routine a été créée.','Modifier la fonction','Modifier la procédure','Créer une fonction','Créer une procédure','Type de retour','Le trigger a été supprimé.','Le trigger a été modifié.','Le trigger a été créé.','Modifier un trigger','Ajouter un trigger','Temps','Évènement','L\'utilisateur a été effacé.','L\'utilisateur a été modifié.','L\'utilisateur a été créé.','Haché','Routine','Grant','Revoke',array('%d processus a été arrêté.','%d processus ont été arrêtés.'),'%d au total','Arrêter',array('%d élément a été modifié.','%d éléments ont été modifiés.'),'Double-cliquez sur une valeur pour la modifier.',array('%d ligne a été importée.','%d lignes ont été importées.'),'Impossible de sélectionner la table','modifier','Relations','Utilisez le lien "modifier" pour modifier cette valeur.','Page','dernière','résultat entier','Cloner','Importer','Les tables ont été tronquées.','Les tables ont été déplacées.','Les tables ont été copiées.','Les tables ont été effacées.','Tables have been optimized.','Schéma','Tables et vues','Rechercher dans les tables','Moteur','Longueur des données','Longueur de l\'index','Espace inutilisé','Lignes','Analyser','Optimiser','Vérifier','Réparer','Tronquer','Déplacer vers une autre base de données','Déplacer','Copier','Horaire','À un moment précis','HH:MM:SS');break;case"it":$U=array('Sicuro?','Caricamento del file non riuscito.','La dimensione massima del file è %sB.','Il file non esiste.','vuoto','originale','No tabelle.','.','Lingua','Usa','Numeri','Data e ora','Stringhe','Binari','Liste','Sistema','Server','Utente','Password','Database','Autenticazione','Login permanente','Visualizza dati','Visualizza struttura','Modifica vista','Modifica tabella','Nuovo elemento','Ultima pagina','Modifica',array('%d byte','%d bytes'),'Seleziona','Funzioni','Aggregazione','Cerca','ovunque','Ordina','discendente','Limite','Lunghezza testo','Azione','Full table scan','Comando SQL','apri','salva','Modifica database','Modifica schema','Crea schema','Schema database','Privilegi','Dump','Esci','database','Crea nuova tabella','seleziona','ltr','Token CSRF non valido. Reinvia la richiesta.','Uscita effettuata con successo.','Le sessioni devono essere abilitate.','Sessione scaduta, autenticarsi di nuovo.','Credenziali non valide.','Estensioni non presenti','Nessuna delle estensioni PHP supportate (%s) disponibile.','Troppi dati via POST. Ridurre i dati o aumentare la direttiva di configurazione %s.','Database non valido.','Database eliminati.','Seleziona database','Crea nuovo database','Elenco processi','Variabili','Stato','Versione %s: %s via estensione PHP %s','Autenticato come: %s','Collazione','Tabelle','Elimina','Aggiorna','Nessuna riga.','%.3f s','Chiavi esterne','collazione','ON DELETE','Nome colonna','Nome parametro','Tipo','Lunghezza','Opzioni','Auto incremento','Valori predefiniti','Commento','Aggiungi altro','Sposta su','Sposta giu','Rimuovi','Vedi','Tabella','Colonna','Indici','Modifica indici','Sorgente','Obiettivo','ON UPDATE','Modifica','Aggiungi foreign key','Trigger','Aggiungi trigger','Link permanente','Esporta','Risultato','Formato','Routine','Eventi','Dati','Crea utente','Errore nella query',array('%d riga','%d righe'),array('Esecuzione della query OK, %d riga interessata.','Esecuzione della query OK, %d righe interessate.'),'Nessun commando da eseguire.',array('%d query eseguita con successo.','%d query eseguite con successo.'),'Caricamento file','Caricamento file disabilitato.','Esegui','Stop su errore','Mostra solo gli errori','Dal server','Webserver file %s','Esegui file','Storico','Pulisci','Modifica tutto','Elemento eliminato.','Elemento aggiornato.','Elemento%s inserito.','Inserisci','Salva','Salva e continua','Salva e inserisci un altro','Elimina','Tabella eliminata.','Tabella modificata.','Tabella creata.','Crea tabella','Troppi campi. Per favore aumentare %s e %s.','Nome tabella','motore','Partiziona per','Partizioni','Nome partizione','Valori','Indici modificati.','Tipo indice','Colonna (lunghezza)','Nome','Database eliminato.','Database rinominato.','Database creato.','Database modificato.','Crea database','Chiama',array('Routine chiamata, %d riga interessata.','Routine chiamata, %d righe interessate.'),'Foreign key eliminata.','Foreign key modificata.','Foreign key creata.','Le colonne sorgente e destinazione devono essere dello stesso tipo e ci deve essere un indice sulla colonna di destinazione e sui dati referenziati.','Foreign key','Tabella obiettivo','Cambia','Aggiungi colonna','Vista eliminata.','Vista modificata.','Vista creata.','Crea vista','Evento eliminato.','Evento modificato.','Evento creato.','Modifica evento','Crea evento','Inizio','Fine','Ogni','Al termine preservare','Routine eliminata.','Routine modificata.','Routine creata.','Modifica funzione','Modifica procedura','Crea funzione','Crea procedura','Return type','Trigger eliminato.','Trigger modificato.','Trigger creato.','Modifica trigger','Crea trigger','Orario','Evento','Utente eliminato.','Utente modificato.','Utente creato.','Hashed','Routine','Permetti','Revoca',array('%d processo interrotto.','%d processi interrotti.'),'%d in totale','Interrompi',array('Il risultato consiste in %d elemento.','Il risultato consiste in %d elementi.'),'Fai doppio click su un valore per modificarlo.',array('%d riga importata.','%d righe importate.'),'Selezione della tabella non riuscita','modifica','Relazioni','Usa il link modifica per modificare questo valore.','Pagina','ultima','intero risultato','Clona','Importa','Le tabelle sono state svuotate.','Le tabelle sono state spostate.','Le tabelle sono state copiate.','Le tabelle sono state eliminate.','Tables have been optimized.','Schema','Tabelle e viste','Cerca nelle tabelle','Motore','Lunghezza dato','Lunghezza indice','Dati liberi','Righe','Analizza','Ottimizza','Controlla','Ripara','Svuota','Sposta in altro database','Sposta','Copia','Pianifica','A tempo prestabilito','HH:MM:SS');break;case"et":$U=array('Kas oled kindel?','Faili üleslaadimine pole võimalik.','Maksimaalne failisuurus %sB.','Faili ei leitud.','tühi','originaal','Tabeleid ei leitud.',',','Keel','Kasuta','Numbrilised','Kuupäev ja kellaaeg','Tekstid','Binaar','Listid','Andmebaasimootor','Server','Kasutajanimi','Parool','Andmebaas','Logi sisse','Jäta mind meelde','Vaata andmeid','Näita struktuuri','Muuda vaadet (VIEW)','Muuda tabeli struktuuri','Lisa kirje','Viimane lehekülg','Muuda',array('%d bait','%d baiti'),'Kuva','Funktsioonid','Liitmine','Otsi','vahet pole','Sorteeri','kahanevalt','Piira','Teksti pikkus','Tegevus','Full table scan','SQL-Päring','näita brauseris','salvesta failina','Muuda andmebaasi','Muuda struktuuri','Loo struktuur','Andmebaasi skeem','Õigused','Ekspordi','Logi välja','andmebaas','Loo uus tabel','kuva','ltr','Sobimatu CSRF, palun postitage vorm uuesti.','Väljalogimine õnnestus.','Sessioonid peavad olema lubatud.','Sessioon on aegunud, palun logige uuesti sisse.','Ebakorrektsed andmed.','Ei leitud laiendust','Serveris pole ühtegi toetatud PHP laiendustest (%s).','POST-andmete maht on liialt suur. Palun vähendage andmeid või suurendage %s php-seadet.','Tundmatu andmebaas.','Andmebaasid on edukalt kustutatud.','Vali andmebaas','Loo uus andmebaas','Protsesside nimekiri','Muutujad','Staatus','%s versioon: %s, kasutatud PHP moodul: %s','Sisse logitud: %s','Tähetabel','Tabelid','Kustuta','Uuenda','Sissekanded puuduvad.','%.3f s','Võõrvõtmed (foreign key)','tähetabel','ON DELETE','Veeru nimi','Parameetri nimi','Tüüp','Pikkus','Valikud','Automaatselt suurenev','Vaikimisi väärtused','Kommentaar','Lisa järgmine','Liiguta ülespoole','Liiguta allapoole','Eemalda','Vaata','Tabel','Veerg','Indeksid','Muuda indekseid','Allikas','Sihtkoht','ON UPDATE','Muuda','Lisa võõrvõti','Päästikud (trigger)','Lisa päästik (TRIGGER)','Püsilink','Ekspordi','Väljund','Formaat','Protseduurid','Sündmused (EVENTS)','Andmed','Loo uus kasutaja','Päringus esines viga','%d rida','Päring õnnestus, mõjutatatud ridu: %d.','Käsk puudub.',array('%d päring edukalt käivitatud.','%d päringut edukalt käivitatud.'),'Faili üleslaadimine','Failide üleslaadimine on keelatud.','Käivita','Peatuda vea esinemisel','Kuva vaid veateateid','Serverist','Fail serveris: %s','Käivita fail','Ajalugu','Puhasta','Muuda kõiki','Kustutamine õnnestus.','Uuendamine õnnestus.','Kirje%s on edukalt lisatud.','Sisesta','Salvesta','Salvesta ja jätka muutmist','Salvesta ja lisa järgmine','Kustuta','Tabel on edukalt kustutatud.','Tabeli andmed on edukalt muudetud.','Tabel on edukalt loodud.','Loo uus tabel','Maksimaalne väljade arv ületatud. Palun suurendage %s ja %s.','Tabeli nimi','andmebaasimootor','Partitsiooni','Partitsioonid','Partitsiooni nimi','Väärtused','Indeksite andmed on edukalt uuendatud.','Indeksi tüüp','Veerg (pikkus)','Nimi','Andmebaas on edukalt kustutatud.','Andmebaas on edukalt ümber nimetatud.','Andmebaas on edukalt loodud.','Andmebaasi struktuuri uuendamine õnnestus.','Loo uus andmebaas','Käivita','Protseduur täideti edukalt, mõjutatud ridu: %d.','Võõrvõti on edukalt kustutatud.','Võõrvõtme andmed on edukalt muudetud.','Võõrvõri on edukalt loodud.','Lähte- ja sihtveerud peavad eksisteerima ja omama sama andmetüüpi, sihtveergudel peab olema määratud indeks ning viidatud andmed peavad eksisteerima.','Võõrvõti','Siht-tabel','Muuda','Lisa veerg','Vaade (VIEW) on edukalt kustutatud.','Vaade (VIEW) on edukalt muudetud.','Vaade (VIEW) on edukalt loodud.','Loo uus vaade (VIEW)','Sündmus on edukalt kustutatud.','Sündmuse andmed on edukalt uuendatud.','Sündmus on edukalt loodud.','Muuda sündmuse andmeid','Loo uus sündmus (EVENT)','Alusta','Lõpeta','Iga','Lõpetamisel jäta sündmus alles','Protseduur on edukalt kustutatud.','Protseduuri andmed on edukalt muudetud.','Protseduur on edukalt loodud.','Muuda funktsiooni','Muuda protseduuri','Loo uus funktsioon','Loo uus protseduur','Tagastustüüp','Päästik on edukalt kustutatud.','Päästiku andmed on edukalt uuendatud.','Uus päästik on edukalt loodud.','Muuda päästiku andmeid','Loo uus päästik (TRIGGER)','Aeg','Sündmus','Kasutaja on edukalt kustutatud.','Kasutaja andmed on edukalt muudetud.','Kasutaja on edukalt lisatud.','Häshitud (Hashed)','Protseduur','Anna','Eemalda',array('Protsess on edukalt peatatud (%d).','Valitud protsessid (%d) on edukalt peatatud.'),'Kokku: %d','Peata','Mõjutatud kirjeid: %d.','Väärtuse muutmiseks topelt-kliki sellel.','Imporditi %d rida.','Tabeli valimine ebaõnnestus','muuda','Seosed','Väärtuse muutmiseks kasuta muutmislinki.','Lehekülg','viimane','Täielikud tulemused','Kloon','Impordi','Validud tabelid on edukalt tühjendatud.','Valitud tabelid on edukalt liigutatud.','Tabelid on edukalt kopeeritud.','Valitud tabelid on edukalt kustutatud.','Tables have been optimized.','Struktuur','Tabelid ja vaated','Otsi kogu andmebaasist','Implementatsioon','Andmete pikkus','Indeksi pikkus','Vaba ruumi','Ridu','Analüüsi','Optimeeri','Kontrolli','Paranda','Tühjenda','Liiguta teise andmebaasi','Liiguta','Kopeeri','Ajakava','Antud ajahetkel','HH:MM:SS');break;case"hu":$U=array('Biztos benne?','Nem tudom feltölteni a fájlt.','A maximális fájlméret %s B.','A fájl nem létezik.','üres','eredeti','Nincs tábla.',' ','Nyelv','Használ','Szám','Dátum és idő','Szöveg','Bináris','Lista','Adatbázis','Szerver','Felhasználó','Jelszó','Adatbázis','Belépés','Emlékezz rám','Tartalom','Struktúra','Nézet módosítása','Tábla módosítása','Új tétel','Utolsó oldal','Szerkeszt',array('%d bájt','%d bájt','%d bájt'),'Kiválasztás','Funkciók','Aggregálás','Keresés','bárhol','Sorba rendezés','csökkenő','korlát','Szöveg hossz','Művelet','Full table scan','SQL parancs','megnyit','ment','Adatbázis módosítása','Séma módosítása','Séma létrehozása','Adatbázis séma','Privilégiumok','Exportálás','Kilépés','adatbázis','Új tábla','kiválasztás','ltr','Érvénytelen CSRF azonosító. Küldd újra az űrlapot.','Sikeres kilépés.','A munkameneteknek (session) engedélyezve kell lennie.','Munkamenet lejárt, jelentkezz be újra.','Érvénytelen adatok.','Nincs kiterjesztés','Nincs egy elérhető támogatott PHP kiterjesztés (%s) sem.','Túl sok a POST adat! Csökkentsd az adat méretét, vagy növeld a %s beállítást.','Érvénytelen adatbázis.','Adatbázis eldobva.','Adatbázis kiválasztása','Új adatbázis','Folyamatok','Változók','Állapot','%s verzió: %s, PHP: %s','Belépve: %s','Egybevetés','Táblák','Eldob','Frissítés','Nincs megjeleníthető eredmény.','%.3f másodperc','Idegen kulcs','egybevetés','törléskor','Oszlop neve','Paraméter neve','Típus','Hossz','Opciók','Automatikus növelés','Alapértelmezett értékek','Megjegyzés','Következő hozzáadása','Felfelé','Lefelé','Eltávolítás','Nézet','Tábla','Oszlop','Indexek','Index módosítása','Forrás','Cél','frissítéskor','Módosítás','Idegen kulcs hozzadása','Trigger','Trigger hozzáadása','Hivatkozás','Export','Kimenet','Formátum','Rutinok','Esemény','Adat','Felhasználó hozzáadása','Hiba a lekérdezésben',array('%d sor','%d sor','%d sor'),array('Lekérdezés sikeresen végrehajtva, %d sor érintett.','Lekérdezés sikeresen végrehajtva, %d sor érintett.','Lekérdezés sikeresen végrehajtva, %d sor érintett.'),'Nincs végrehajtható parancs.','%d sikeres lekérdezés.','Fájl feltöltése','A fájl feltöltés le van tiltva.','Végrehajt','Hiba esetén megáll','Csak a hibák mutatása','Szerverről','Webszerver fájl %s','Fájl futtatása','Történet','Törlés','Összes szerkesztése','A tétel törölve.','A tétel frissítve.','%s tétel beszúrva.','Beszúr','Mentés','Mentés és szerkesztés folytatása','Mentés és újat beszúr','Törlés','A tábla eldobva.','A tábla módosult.','A tábla létrejött.','Tábla létrehozása','A maximális mezőszámot elérted. Növeld meg ezeket: %s, %s.','Tábla név','motor','Particionálás ezzel','Particiók','Partició neve','Értékek','Az indexek megváltoztak.','Index típusa','Oszop (méret)','Név','Az adatbázis eldobva.','Az adadtbázis átnevezve.','Az adatbázis létrejött.','Az adatbázis módosult.','Adatbázis létrehozása','Meghív',array('Rutin meghívva, %d sor érintett.','Rutin meghívva, %d sor érintett.','Rutin meghívva, %d sor érintett.'),'Idegen kulcs eldobva.','Idegen kulcs módosult.','Idegen kulcs létrejött.','A forrás és cél oszlopoknak azonos típusúak legyenek, a cél oszlopok indexeltek legyenek, és a hivatkozott adatnak léteznie kell.','Idegen kulcs','Cél tábla','Változtat','Oszlop hozzáadása','A nézet eldobva.','A nézet módosult.','A nézet létrejött.','Nézet létrehozása','Az esemény eldobva.','Az esemény módosult.','Az esemény létrejött.','Esemény módosítása','Esemény létrehozása','Kezd','Vége','Minden','Befejezéskor megőrzi','A rutin eldobva.','A rutin módosult.','A rutin létrejött.','Funkció módosítása','Eljárás módosítása','Funkció létrehozása','Eljárás létrehozása','Visszatérési érték','A trigger eldobva.','A trigger módosult.','A trigger létrejött.','Trigger módosítása','Trigger létrehozása','Idő','Esemény','A felhasználó eldobva.','A felhasználó módosult.','A felhasználó létrejött.','Hashed','Rutin','Engedélyezés','Visszavonás',array('%d folyamat leállítva.','%d folyamat leállítva.','%d folyamat leállítva.'),'összesen %d','Leállít',array('%d tétel érintett.','%d tétel érintett.','%d tétel érintett.'),'Kattints kétszer az értékre a szerkesztéshez.',array('%d sor importálva.','%d sor importálva.','%d sor importálva.'),'Nem tudom kiválasztani a táblát','szerkeszt','Reláció','Használd a szerkesztés hivatkozást ezen érték módosításához.','oldal','utolsó','összes eredményt mutatása','Klónoz','Importálás','A tábla felszabadítva.','Táblák áthelyezve.','Táblák átmásolva.','Táblák eldobva.','Tables have been optimized.','Séma','Táblák és nézetek','Keresés a táblákban','Motor','Méret','Index hossz','Adat szabad','Oszlop','Elemzés','Optimalizál','Ellenőrzés','Javít','Felszabadít','Áthelyezés másik adatbázisba','Áthelyez','Másolás','Ütemzés','Megadott időben','óó:pp:mm');break;case"pl":$U=array('Czy jesteś pewien?','Wgranie pliku było niemożliwe.','Maksymalna wielkość pliku to %sB.','Plik nie istnieje.','puste','bez zmian','Brak tabel.',' ','Język','Wybierz','Numeryczne','Data i czas','Tekstowe','Binarne','Listy','Rodzaj bazy','Serwer','Użytkownik','Hasło','Baza danych','Zaloguj się','Zapamiętaj sesję','Pokaż dane','Struktura tabeli','Zmień perspektywę','Zmień tabelę','Nowy rekord','Ostatnia strona','Edytuj',array('%d bajt','%d bajty','%d bajtów'),'pokaż','Funkcje','Agregacje','Szukaj','gdziekolwiek','Sortuj','malejąco','Limit','Długość tekstu','Czynność','Full table scan','Zapytanie SQL','otwórz','zapisz','Zmień bazę danych','Zmień schemat','Utwórz schemat','Schemat bazy danych','Uprawnienia użytkowników','Eksport','Wyloguj','baza danych','Utwórz nową tabelę','przeglądaj','ltr','Nieprawidłowy token CSRF. Spróbuj wysłać formularz ponownie.','Wylogowano pomyślnie.','Wymagana jest obsługa sesji w PHP.','Sesja wygasła, zaloguj się ponownie.','Nieprawidłowe dane logowania.','Brak rozszerzenia','Żadne z rozszerzeń PHP umożliwiających połączenie się z bazą danych (%s) nie jest dostępne.','Przesłano zbyt dużo danych. Zmniejsz objętość danych lub zwiększ zmienną konfiguracyjną %s.','Nie znaleziono bazy danych.','Bazy danych zostały usunięte.','Wybierz bazę danych','Utwórz nową bazę danych','Lista procesów','Zmienne','Status','Wersja %s: %s za pomocą %s','Zalogowany jako: %s','Porównywanie znaków','Tabele','Usuń','Odśwież','Brak rekordów.','%.3f s','Klucze obce','porównywanie znaków','W przypadku usunięcia','Nazwa kolumny','Nazwa parametru','Typ','Długość','Opcje','Auto Increment','Wartości domyślne','Komentarz','Dodaj następny','Przesuń w górę','Przesuń w dół','Usuń','Perspektywa','Tabela','Kolumna','Indeksy','Zmień indeksy','Źródło','Cel','W przypadku zmiany','Zmień','Dodaj klucz obcy','Wyzwalacze','Dodaj wyzwalacz','Trwały link','Eksport','Rezultat','Format','Procedury i funkcje','Wydarzenia','Dane','Dodaj użytkownika','Błąd w zapytaniu',array('%d rekord','%d rekordy','%d rekordów'),array('Zapytanie wykonane pomyślnie, zmieniono %d rekord.','Zapytanie wykonane pomyślnie, zmieniono %d rekordy.','Zapytanie wykonane pomyślnie, zmieniono %d rekordów.'),'Nic do wykonania.',array('Pomyślnie wykonano %d zapytanie.','Pomyślnie wykonano %d zapytania.','Pomyślnie wykonano %d zapytań.'),'Wgranie pliku','Wgrywanie plików jest wyłączone.','Wykonaj','Zatrzymaj w przypadku błędu','Pokaż tylko błędy','Z serwera','Plik %s na serwerze','Uruchom z pliku','Historia','Wyczyść','Edytuj wszystkie','Rekord został usunięty.','Rekord został zaktualizowany.','Rekord%s został dodany.','Dodaj','Zapisz zmiany','Zapisz i kontynuuj edycję','Zapisz i dodaj następny','Usuń','Tabela została usunięta.','Tabela została zmieniona.','Tabela została utworzona.','Utwórz tabelę','Przekroczono maksymalną liczbę pól. Zwiększ %s i %s.','Nazwa tabeli','składowanie','Partycjonowanie','Partycje','Nazwa partycji','Wartości','Indeksy zostały zmienione.','Typ indeksu','Kolumna (długość)','Nazwa','Baza danych została usunięta.','Nazwa bazy danych została zmieniona.','Baza danych została utworzona.','Baza danych została zmieniona.','Utwórz bazę danych','Uruchom',array('Procedura została uruchomiona, zmieniono %d rekord.','Procedura została uruchomiona, zmieniono %d rekordy.','Procedura została uruchomiona, zmieniono %d rekordów.'),'Klucz obcy został usunięty.','Klucz obcy został zmieniony.','Klucz obcy został utworzony.','Źródłowa i docelowa kolumna muszą być tego samego typu, powinien istnieć indeks na docelowej kolumnie oraz muszą istnieć dane referencyjne.','Klucz obcy','Tabela docelowa','Zmień','Dodaj kolumnę','Perspektywa została usunięta.','Perspektywa została zmieniona.','Perspektywa została utworzona.','Utwórz perspektywę','Wydarzenie zostało usunięte.','Wydarzenie zostało zmienione.','Wydarzenie zostało utworzone.','Zmień wydarzenie','Utwórz wydarzenie','Początek','Koniec','Wykonuj co','Nie kasuj wydarzenia po przeterminowaniu','Procedura została usunięta.','Procedura została zmieniona.','Procedura została utworzona.','Zmień funkcję','Zmień procedurę','Utwórz funkcję','Utwórz procedurę','Zwracany typ','Wyzwalacz został usunięty.','Wyzwalacz został zmieniony.','Wyzwalacz został utworzony.','Zmień wyzwalacz','Utwórz wyzwalacz','Czas','Wydarzenie','Użytkownik został usunięty.','Użytkownik został zmieniony.','Użytkownik został dodany.','Zahashowane','Procedura','Uprawnienia','Usuń uprawnienia',array('Przerwano %d wątek.','Przerwano %d wątki.','Przerwano %d wątków.'),'%d w sumie','Przerwij wykonywanie',array('Zmieniono %d rekord.','Zmieniono %d rekordy.','Zmieniono %d rekordów.'),'Kliknij podwójnie wartość, aby ją edytować.',array('%d rekord został zaimportowany.','%d rekordy zostały zaimportowane.','%d rekordów zostało zaimportowanych.'),'Nie udało się pobrać danych z tabeli','edytuj','Relacje','Użyj linku edycji aby zmienić tę wartość.','Strona','ostatni','wybierz wszystkie','Duplikuj','Import','Tabele zostały opróżnione.','Tabele zostały przeniesione.','Tabele zostały skopiowane.','Tabele zostały usunięte.','Tabele zostały zoptymalizowane.','Schemat','Tabele i perspektywy','Wyszukaj we wszystkich tabelach','Składowanie','Rozmiar danych','Rozmiar indeksów','Wolne miejsce','Liczba rekordów','Analizuj','Optymalizuj','Sprawdź','Napraw','Opróżnij','Przenieś do innej bazy danych','Przenieś','Kopiuj','Harmonogram','O danym czasie','Zmień typ');break;case"ca":$U=array('Estàs segur?','Impossible adjuntar el fitxer.','La mida màxima permesa del fitxer és de %sB.','El fitxer no existeix.','buit','original','No hi ha cap taula.',',','Idioma','Utilitza','Nombres','Data i hora','Cadenes','Binari','Llistes','Sistema','Servidor','Nom d\'usuari','Contrasenya','Base de dades','Inicia la sessió','Sessió permanent','Selecciona dades','Mostra l\'estructura','Modifica la vista','Modifica la taula','Nou element','Darrera plana','Edita',array('%d byte','%d bytes'),'Selecciona','Funcions','Agregació','Cerca','a qualsevol lloc','Ordena','descendent','Límit','Longitud del text','Acció','Full table scan','Ordre SQL','obre','desa','Modifica la base de dades','Modifica l\'esquema','Crea un esquema','Esquema de la base de dades','Privilegis','Exporta','Desconnecta','base de dades','Crea una nova taula','registres','ltr','Token CSRF invàlid. Torna a enviar el formulari.','Desconnexió correcta.','Cal que estigui permès l\'us de sessions.','La sessió ha expirat, torna a iniciar-ne una.','Credencials invàlids.','Cap extensió','No hi ha cap de les extensions PHP soporatades (%s) disponible.','Les dades POST són massa grans. Redueix les dades o incrementa la directiva de configuració %s.','Base de dades invàlida.','S\'han suprimit les bases de dades.','Selecciona base de dades','Crea una nova base de dades','Llista de processos','Variables','Estat','Versió %s: %s amb l\'extensió de PHP %s','Connectat com: %s','Compaginació','Taules','Suprimeix','Refresca','No hi ha cap registre.','%.3f s','Claus foranes','compaginació','ON DELETE','Nom de la columna','Nom del paràmetre','Tipus','Llargada','Opcions','Increment automàtic','Valors per defecte','Comentari','Afegeix el següent','Mou a dalt','Mou a baix','Suprimeix','Vista','Taula','Columna','Índexs','Modifica els índexs','Font','Destí','ON UPDATE','Modifica','Afegeix una clau forana','Activadors','Afegeix un activador','Enllaç permanent','Exporta','Sortida','Format','Rutines','Events','Dades','Crea un usuari','Error en la consulta',array('%d registre','%d registres'),array('Consulta executada correctament, %d registre modificat.','Consulta executada correctament, %d registres modificats.'),'Cap comanda per executar.',array('%d consulta executada correctament.','%d consultes executades correctament.'),'Adjunta un fitxer','L\'ddjunció de fitxers està desactivada.','Executa','Atura en trobar un error','Mostra només els errors','En el servidor','Fitxer %s del servidor web','Executa el fitxer','Història','Suprimeix','Edita-ho tot','S\'ha suprmit l\'element.','S\'ha actualitzat l\'element.','S\'ha insertat l\'element%s.','Insereix','Desa','Desa i segueix editant','Desa i insereix el següent','Suprimeix','S\'ha suprimit la taula.','S\'ha modificat la taula.','S\'ha creat la taula.','Crea una taula','S\'ha assolit el nombre màxim de camps. Incrementa %s i %s.','Nom de la taula','motor','Fes particions segons','Particions','Nom de la partició','Valors','S\'han modificat els índexs.','Tipus d\'índex','Columna (longitud)','Nom','S\'ha suprimit la base de dades.','S\'ha canviat el nom de la base de dades.','S\'ha creat la base de dades.','S\'ha modificat la base de dades.','Crea una base de dades','Crida',array('S\'ha cridat la rutina, %d registre modificat.','S\'ha cridat la rutina, %d registres modificats.'),'S\'ha suprimit la clau forana.','S\'ha modificat la clau forana.','S\'ha creat la clau forana.','Les columnes origen i destí han de ser del mateix tipus, la columna destí ha d\'estar indexada i les dades referenciades han d\'existir.','Clau forana','Taula de destí','Canvi','Afegeix una columna','S\'ha suprimit la vista.','S\'ha modificat la vista.','S\'ha creat la vista.','Crea una vista','S\'ha suprimit l\'event.','S\'ha modificat l\'event.','S\'ha creat l\'event.','Modifica l\'event','Crea un event','Comença','Acaba','Cada','Conservar en completar','S\'ha suprimit la rutina.','S\'ha modificat la rutina.','S\'ha creat la rutina.','Modifica la funció','Modifica el procediment','Crea una funció','Crea un procediment','Tipus retornat','S\'ha suprimit l\'activador.','S\'ha modificat l\'activador.','S\'ha creat l\'activador.','Modifica l\'activador','Crea un activador','Temps','Event','S\'ha suprimit l\'usuari.','S\'ha modificat l\'usuari.','S\'ha creat l\'usuari.','Hashed','Rutina','Grant','Revoke',array('S\'ha aturat %d procés.','S\'han aturat %d processos.'),'%d en total','Atura',array('S\'ha modificat %d element.','S\'han modificat %d elements.'),'Fes un doble clic a un valor per modificar-lo.',array('S\'ha importat %d registre.','S\'han importat %d registres.'),'Impossible seleccionar la taula','edita','Relacions','Utilitza l\'enllaç d\'edició per modificar aquest valor.','Plana','darrera','tots els resultats','Clona','Importa','S\'han escapçat les taules.','S\'han desplaçat les taules.','S\'han copiat les taules.','S\'han suprimit les taules.','Tables have been optimized.','Esquema','Taules i vistes','Cerca dades en les taules','Motor','Longitud de les dades','Longitud de l\'índex','Espai lliure','Files','Analitza','Optimitza','Verifica','Repara','Escapça','Desplaça a una altra base de dades','Desplaça','Còpia','Horari','A un moment donat','HH:MM:SS');break;case"pt":$U=array('Está seguro?','Não é possível enviar o arquivo.','Tamanho máximo do arquivo é %sB.','Arquivo não existe.','vazio','original','Não existem tabelas.',' ','Idioma','Usar','Números','Data e hora','Cadena','Binário','Listas','Motor de Base de dados','Servidor','Usuário','Senha','Base de dados','Entrar','Salvar Senha','Selecionar dados','Mostrar estrutura','Modificar vista','Modificar estrutura','Novo Registro','Última página','Modificar',array('%d byte','%d bytes'),'Selecionar','Funções','Adições','Procurar','qualquer local','Ordenar','decrescente','Limite','Tamanho de texto','Ação','Full table scan','Comando SQL','mostrar','salvas','Modificar Base de dados','Modificar esquema','Criar esquema','Esquema de Base de dados','Privilégios','Exportar','Sair','base de dados','Nova tabela','registros','ltr','Token CSRF inválido. Enviar o formulario novamente.','Saida bem sucedida.','Devem estar habilitadas as sessões.','Sessão expirada, por favor entre sua Chave de novo.','Identificação inválida.','Não há extension','Nenhuma das extensões PHP suportadas (%s) está disponivel.','POST data demasiado grande. Reduza o tamanho ou aumente a diretiva de configuração %s.','Base de dados inválida.','Bases de dados eliminadas.','Selecionar Base de dados','Criar nova base de dados','Lista de processos','Variáveis','Estado','Versão %s: %s através da extensão PHP %s','Logado como: %s','Colação','Tabelas','Remover','Atualizar','Não existem registros.','%.3f s','Chaves foráneas','collation','ON DELETE','Nome da coluna','Nome de Parâmetro','Tipo','Tamanho','Opções','Incremento Automático','Valores predeterminados','Comentário','Adicionar proximo','Mover acima','Mover abaixo','Remover','Visualizar','Tabela','Coluna','Índices','Modificar índices','Origem','Destino','ON UPDATE','Modificar','Adicionar Chave foránea','Triggers','Adicionar trigger','Permanent link','Exportar','Saída','Formato','Procedimentos','Eventos','Dados','Criar Usuário','Erro na consulta',array('%d registro','%d registros'),array('Consulta executada, %d registro afetado.','Consulta executada, %d registros afetados.'),'Nenhum comando para executar.',array('%d consulta sql executada corretamente.','%d consultas sql executadas corretamente.'),'Importar arquivo','Importação de arquivos desablilitada.','Executar','Parar em caso de erro','Mostrar somente erros','Desde servidor','Arquivo do servidor web %s','Executar Arquivo','Histórico','Limpar','Edit all','Registro eliminado.','Registro modificado.','Registro%s inserido.','Inserir','Salvar','Salvar e continuar editando','Salvar e inserir outro','Apagar','Tabela eliminada.','Tabela modificada.','Tabela criada.','Criar tabela','Quantidade máxima de campos permitidos excedidos. Por favor aumente %s e %s.','Nome da tabela','motor','Particionar por','Partições','Nome da Partição','Valores','Índices modificados.','Tipo de índice','coluna (tamanho)','Nome','Base de dados eliminada.','Base de dados renomeada.','Base de dados criada.','Base de dados modificada.','Criar Base de dados','Chamar',array('Consulta executada, %d registro afetado.','Consulta executada, %d registros afetados.'),'Chave externa eliminada.','Chave externa modificada.','Chave externa criada.','As colunas de origen e destino devem ser do mesmo tipo, deve existir um índice entre as colunas de destino e o registro referenciado deve existir.','Chave externa','Tabela de destino','Modificar','Adicionar coluna','Vista eliminada.','Vista modificada.','Vista criada.','Criar vista','Evento eliminado.','Evento modificado.','Evento criado.','Modificar Evento','Criar Evento','Início','Fim','Cada','Ao completar preservar','Procedimento eliminado.','Procedimento modificado.','Procedimento criado.','Modificar Função','Modificar procedimento','Criar função','Criar procedimento','Tipo de valor de regreso','Trigger eliminado.','Trigger modificado.','Trigger criado.','Modificar Trigger','Adicionar Trigger','Tempo','Evento','Usuário eliminado.','Usuário modificado.','Usuário criado.','Hash','Rotina','Conceder','Impedir',array('%d processo terminado.','%d processos terminados.'),'%d no total','Parar',array('%d item afetado.','%d itens afetados.'),'Clique duas vezes sobre o valor para edita-lo.',array('%d registro importado.','%d registros importados.'),'Não é possivel selecionar a Tabela','modificar','Relações','Utilize o link modificar para alterar.','Página','último','resultado completo','Clonar','Importar','Tabelas truncadas (truncate).','As Tabelas foram movidas.','Tables have been copied.','Tabelas eliminadas.','Tables have been optimized.','Esquema','Tabelas e vistas','Buscar dados nas Tabelas','Motor','Tamanho de dados','Tamanho de índice','Espaço Livre','Registros','Analizar','Otimizar','Verificar','Reparar','Truncar','Mover outra Base de dados','Mover','Copy','Agenda','A hora determinada','agora');break;case"sl":$U=array('Ste prepričani?','Ne morem naložiti datoteke.','Največja velikost datoteke je %sB.','Datoteka ne obstaja.','prazno','original','Ni tabel.',' ','Jezik','Uporabi','Števila','Datum in čas','Nizi','Binarni','Seznami','Sistem','Strežnik','Uporabniško ime','Geslo','Baza','Prijavi se','Trajna prijava','Izberi podatke','Pokaži zgradbo','Spremeni pogled','Spremeni tabelo','Nov predmet','Zadnja stran','Uredi',array('%d bajt','%d bajta','%d bajti','%d bajtov'),'Izberi','Funkcije','Združitev','Išči','kjerkoli','Sortiraj','padajoče','Limita','Dolžina teksta','Dejanje','Full table scan','Ukaz SQL','odpri','shrani','Spremeni bazo','Spremeni shemo','Ustvari shemo','Shema baze','Pravice','Izvozi','Odjavi se','baza','Ustvari novo tabelo','izberi','ltr','Neveljaven token CSRF. Pošljite formular še enkrat.','Prijava uspešna.','Podpora za seje mora biti omogočena.','Seja je potekla. Prosimo, ponovno se prijavite.','Neveljavne pravice.','Brez dodatkov','Noben od podprtih dodatkov za PHP (%s) ni na voljo.','Preveliko podatkov za POST. Zmanjšajte število podatkov ali povečajte nastavitev za %s.','Neveljavna baza.','Baze so zavržene.','Izberi bazo','Ustvari novo bazo','Seznam procesov','Spremenljivke','Stanje','Verzija %s: %s preko dodatka za PHP %s','Prijavljen kot: %s','Zbiranje','Tabele','Zavrzi','Osveži','Ni vrstic.','%.3f s','Tuji ključi','zbiranje','pri brisanju','Ime stolpca','Ime parametra','Tip','Dolžina','Možnosti','Samodejno povečevanje','Privzete vrednosti','Komentar','Dodaj naslednjega','Premakni gor','Premakni dol','Odstrani','Pogledi','Tabela','Stolpec','Indeksi','Spremeni indekse','Izvor','Cilj','pri posodabljanju','Spremeni','Dodaj tuj ključ','Sprožilniki','Dodaj sprožilnik','Permanent link','Izvozi','Izhod rezultata','Format','Postopki','Dogodki','Podatki','Ustvari uporabnika','Napaka v poizvedbi',array('%d vrstica','%d vrstici','%d vrstice','%d vrstic'),array('Poizvedba se je uspešno izvedla, spremenjena je %d vrstica.','Poizvedba se je uspešno izvedla, spremenjeni sta %d vrstici.','Poizvedba se je uspešno izvedla, spremenjene so %d vrstice.','Poizvedba se je uspešno izvedla, spremenjenih je %d vrstic.'),'Ni ukazov za izvedbo.',array('Uspešno se je končala %d poizvedba.','Uspešno sta se končali %d poizvedbi.','Uspešno so se končale %d poizvedbe.','Uspešno se je končalo %d poizvedb.'),'Naloži datoteko','Nalaganje datotek je onemogočeno.','Izvedi','Ustavi ob napaki','Pokaži samo napake','z strežnika','Datoteka na spletnem strežniku %s','Zaženi datoteko','Zgodovina','Počisti','Edit all','Predmet je izbrisan.','Predmet je posodobljen.','Predmet%s je vstavljen.','Vstavi','Shrani','Shrani in nadaljuj z urejanjem','Shrani in vstavi tekst','Izbriši','Tabela je zavržena.','Tabela je spremenjena.','Tabela je ustvarjena.','Ustvari tabelo','Največje število dovoljenih polje je preseženo. Prosimo, povečajte %s in %s.','Ime tabele','pogon','Porazdeli po','Porazdelitve','Ime porazdelitve','Vrednosti','Indeksi so spremenjeni.','Tip indeksa','Stolpec (dolžina)','Naziv','Baza je zavržena.','Baza je preimenovana.','Baza je ustvarjena.','Baza je spremenjena.','Ustvari bazo','Pokliči',array('Klican je bil postopek, spremenjena je %d vrstica.','Klican je bil postopek, spremenjeni sta %d vrstici.','Klican je bil postopek, spremenjene so %d vrstice.','Klican je bil postopek, spremenjenih je %d vrstic.'),'Tuj ključ je zavržen.','Tuj ključ je spremenjen.','Tuj ključ je ustvarjen.','Izvorni in ciljni stolpec mora imeti isti podatkovni tip. Obstajati mora indeks na ciljnih stolpcih in obstajati morajo referenčni podatki.','Tuj ključ','Ciljna tabela','Spremeni','Dodaj stolpec','Pogled je zavržen.','Pogled je spremenjen.','Pogled je ustvarjen.','Ustvari pogled','Dogodek je zavržen.','Dogodek je spremenjen.','Dogodek je ustvarjen.','Spremeni dogodek','Ustvari dogodek','Začetek','Konec','vsake','Po zaključku ohrani','Postopek je zavržen.','Postopek je spremenjen.','Postopek je ustvarjen.','Spremeni funkcijo','Spremeni postopek','Ustvari funkcijo','Ustvari postopek','Vračalni tip','Sprožilnik je odstranjen.','Sprožilnik je spremenjen.','Sprožilnik je ustvarjen.','Spremeni sprožilnik','Ustvari sprožilnik','Čas','Dogodek','Uporabnik je odstranjen.','Uporabnik je spremenjen.','Uporabnik je ustvarjen.','Zakodirano','Postopek','Dovoli','Odvzemi',array('Končan je %d proces.','Končana sta %d procesa.','Končani so %d procesi.','Končanih je %d procesov.'),'Skupaj %d','Končaj',array('Spremenjen je %d predmet.','Spremenjena sta %d predmeta.','Spremenjeni so %d predmeti.','Spremenjenih je %d predmetov.'),'Dvojni klik na vrednost za urejanje.',array('Uvožena je %d vrstica.','Uvoženi sta %d vrstici.','Uvožene so %d vrstice.','Uvoženih je %d vrstic.'),'Ne morem izbrati tabele','uredi','Relacijski','Uporabite urejanje povezave za spreminjanje te vrednosti.','Stran','Zadnja','cel razultat','Kloniraj','Uvozi','Tabele so skrajšane.','Tabele so premaknjene.','Tabele so kopirane.','Tabele so zavržene.','Tables have been optimized.','Shema','Tabele in pogledi','Išče podatke po tabelah','Pogon','Velikost podatkov','Velikost indeksa','Podatkov prosto ','Vrstic','Analiziraj','Optimiziraj','Preveri','Popravi','Skrajšaj','Premakni v drugo bazo','Premakni','Kopiraj','Urnik','v danem času','Spremeni tip');break;case"lt":$U=array('Tikrai?','Nepavyko įkelti failo.','Maksimalus failo dydis - %sB.','Failas neegzistuoja.','tuščia','originalas','Nėra lentelių.',' ','Kalba','Naudoti','Skaičiai','Data ir laikas','Tekstas','Dvejetainis','Sąrašai','Sistema','Serveris','Vartotojas','Slaptažodis','Duomenų bazė','Prisijungti','Pastovus prisijungimas','Atrinkti duomenis','Rodyti struktūrą','Redaguoti vaizdą','Redaguoti lentelę','Naujas įrašas','Paskutinis puslapis','Redaguoti',array('%d baitas','%d baigai','%d baitų'),'Atrinkti','Funkcijos','Agregacija','Ieškoti','visur','Rikiuoti','mažėjimo tvarka','Limitas','Teksto ilgis','Veiksmas','Full table scan','SQL užklausa','atidaryti','išsaugoti','Redaguoti duomenų bazę','Keisti schemą','Sukurti schemą','Duomenų bazės schema','Privilegijos','Eksportuoti','Atsijungti','duomenų bazė','Sukurti naują lentelę','atrinkti','ltr','Neteisingas CSRF tokenas. Bandykite siųsti formos duomenis dar kartą.','Jūs atsijungėte nuo sistemos.','Sesijų palaikymas turi būti įjungtas.','Sesijos galiojimas baigėsi. Prisijunkite iš naujo.','Neteisingi prisijungimo duomenys.','Nėra plėtiio','Nėra nei vieno iš palaikomų PHP plėtinių (%s).','Per daug POST duomenų. Sumažinkite duomenų kiekį arba padidinkite konfigūracijos nustatymą %s.','Neteisinga duomenų bazė.','Duomenų bazės panaikintos.','Pasirinkti duomenų bazę','Sukurti naują duomenų bazę','Procesų sąrašas','Kintamieji','Būsena','%s versija: %s per PHP plėtinį %s','Prisijungęs kaip: %s','Lyginimas','Lentelės','Pašalinti','Atnaujinti','Nėra įrašų.','%.3f s','Išoriniai raktai','palyginimas','Ištrinant','Stulpelio pavadinimas','Parametro pavadinimas','Tipas','Ilgis','Nustatymai','Auto Increment','Reikšmės pagal nutylėjimą','Komentaras','Pridėti kitą','Perkelti į viršų','Perkelti žemyn','Pašalinti','Vaizdas','Lentelė','Stulpelis','Indeksai','Redaguoti indeksus','Šaltinis','Tikslas','Atnaujinant','Redaguoti','Pridėti išorinį raktą','Trigeriai','Pridėti trigerį','Pastovi nuoroda','Eksportas','Išvestis','Formatas','Procedūros','Įvykiai','Duomenys','Sukurti vartotoją','Klaida užklausoje',array('%d įrašas','%d įrašai','%d įrašų'),array('Užklausa įvykdyta. Pakeistas %d įrašas.','Užklausa įvykdyta. Pakeisti %d įrašai.','Užklausa įvykdyta. Pakeista %d įrašų.'),'Nėra vykdomų užklausų.',array('%d užklausa įvykdyta.','%d užklausos įvykdytos.','%d užklausų įvykdyta.'),'Failo įkėlimas','Failų įkėlimas išjungtas.','Vykdyti','Sustabdyti esant klaidai','Rodyti tik klaidas','Iš serverio','Failas %s iš serverio','Vykdyti failą','Istorija','Išvalyti','Redaguoti visus','Įrašas ištrintas.','Įrašas pakeistas.','Įrašas%s sukurtas.','Įrašyti','Išsaugoti','Išsaugoti ir tęsti redagavimą','Išsaugoti ir įrašyti kitą','Trinti','Lentelė pašalinta.','Lentelė pakeista.','Lentelė sukurta.','Sukurti lentelę','Viršytas maksimalus leidžiamų stulpelių kiekis. Padidinkite %s ir %s.','Lentelės pavadinimas','variklis','Skirstyti pagal','Skirsniai','Skirsnio pavadinimas','Reikšmės','Indeksai pakeisti.','Indekso tipas','Stulpelis (ilgis)','Pavadinimas','Duomenų bazė panaikinta.','Duomenų bazė pervadinta.','Duomenų bazė sukurta.','Duomenų bazė pakeista.','Sukurti duomenų bazę','Vykdyti',array('Procedūra įvykdyta. %d įrašas pakeistas.','Procedūra įvykdyta. %d įrašai pakeisti.','Procedūra įvykdyta. %d įrašų pakeista.'),'Išorinis raktas pašalintas.','Išorinis raktas pakeistas.','Išorinis raktas sukurtas.','Šaltinio ir tikslinis stulpelis turi būti to paties tipo, tiksliniame stulpelyje turi būti naudojamas indeksas ir duomenys turi egzistuoti.','Išorinis raktas','Tikslinė lentelė','Pakeisti','Pridėti stulpelį','Vaizdas pašalintas.','Vaizdas pakeistas.','Vaizdas sukurtas.','Sukurti vaizdą','Įvykis pašalintas.','Įvykis pakeistas.','Įvykis sukurtas.','Redaguoti įvykį','Sukurti įvykį','Pradžia','Pabaiga','Kas','Įvykdžius išsaugoti','Procedūra pašalinta.','Procedūra pakeista.','Procedūra sukurta.','Keisti funkciją','Keiskti procedūrą','Sukurti funkciją','Sukurti procedūrą','Grąžinimo tipas','Trigeris pašalintas.','Trigeris pakeistas.','Trigeris sukurtas.','Keisti trigerį','Sukurti trigerį','Laikas','Įvykis','Vartotojas ištrintas.','Vartotojo duomenys pakeisti.','Vartotojas sukurtas.','Šifruotas','Procedūra','Suteikti','Atšaukti',array('%d procesas nutrauktas.','%d procesai nutraukti.','%d procesų nutraukta.'),'%d iš viso','Nutraukti',array('Pakeistas %d įrašas.','Pakeisti %d įrašai.','Pakeistas %d įrašų.'),'Du kartus spragtelėkite pelyte norėdami redaguoti.',array('%d įrašas įkelta.','%d įrašai įkelti.','%d įrašų įkelta.'),'Neįmanoma atrinkti lentelės','redaguoti','Ryšiai','Norėdami redaguoti reikšmę naudokite redagavimo nuorodą.','Puslapis','paskutinis','visas rezultatas','Klonuoti','Importas','Lentelės buvo ištuštintos.','Lentelės perkeltos.','Lentelės nukopijuotos.','Lentelės pašalintos.','Tables have been optimized.','Schema','Lentelės ir vaizdai','Ieškoti duomenų lentelėse','Variklis','Duomenų ilgis','Indekso ilgis','Laisvos vietos','Įrašai','Analizuoti','Optimizuoti','Patikrinti','Pataisyti','Tuštinti','Perkelti į kitą duomenų bazę','Perkelti','Kopijuoti','Grafikas','Nurodytu laiku','Keisti tipą');break;case"tr":$U=array('Emin misin?','Dosya gönderilemiyor.','Bir dosya için izin verilen dosya sınırı %sB.','Dosya mevcut değil.','boş','orijinal','Tablo yok.',' ','Dil','Kullan','Sayılar','Tarih ve zaman','Sözcükler','İkili','Listeler','Sistem','Sunucu','Kullanıcı','Parola','Veritabanı','Giriş','Kalıcı giriş','Veri seç','Yapıyı göster','Değişim görünüm','Tablo değiştir','Yeni öğe','Son sayfa','Düzen',array('%d bayt','%d kadar bayt'),'Seç','Fonksiyonlar','Kümeleme','Arama','herhangi bir yer','Sırala','azalan','sınır','Yazı uzunluğu','Eylem','Full table scan','SQL komutu','aç','kaydet','Veritabanı değiştir','Değişim şeması','Yaratım şeması','Veritabanı şeması','İzinler','Döküm','Çıkış','veritabanı','Yeni tablo yarat','seç','ltr','Geçersiz Cross-site request forgery (CSRF) jetonu. Forumu tekrar yolla.','Başarıyla çıkıldı.','Oturum desteği etkin olmalıdır.','Oturum süresi doldu, lütfen tekrar giriş yapın.','Geçersiz kimlik.','Uzantı yok','Desteklenen PHP uzantılarından (%s) hiçbiri mevcut değil.','Çok büyük POST verisi, veriyi azaltın ya da ayar yönergesini uygun olarak yapılandırın.','Geçersiz veritabanı.','Veritabanları düşüüldü.','Veritabanı seç','Yeni veritabanı yarat','İşlem listesi','Değişkenler','Durum','%s sürüm: %s PHP uzantısı ile %s','%s olarak giriş yapıldı.','Karşılaştırma','Tablolar','Düşür','Tazele','Sıra yok.','%.3f s','Dış anahtarlar','karşılaştırma','Silinmek üzere','Kolon adı','Parametre adı','Tür','Uzunluk','Seçenekler','Otomatik yükselt','Varsayılan değerler','Yorum','Sonraya ekle','Yukarı taşı','AŞağı taş','Kaldır','Görünüm','Tablo','Kolon','Dizinler','Dizinleri değiştir','Kaynak','Hedef','Yükseltilmek üzere','Değiştir','Dış anahtar ekle','Tetikler','Tetik ekle','Permanent link','İhraç','Çıktı','Biçim','Yordamlar','Olaylar','Veri','Kullanıcı yarat','Sorguda hata',array('%d sıra)','%d kadar sıra'),array('Sorgu işletilmesi tamamlandı. %d sıra(row) etkilendi.','Sorgu işletilmesi tamamlandı. Bundan %d kadar sıra etkilendi.'),'İşletilmek için komut yok.',array('%d sorgunun işletilmesi tamamlandı.','%d kadar sorgunun işletilmesi tamamlandı.'),'Dosya gönder','Dosya gönderimi etkin değil.','İşlet','Dur hata','Sadece hataları göster.','Sunucudan','%s web sunucusu dosyası','Dosya çalıştır','Tarih','Boşluk','Edit all','Öğe silindi.','Öğe güncellendi.','Öğeler eklendi.','Ekle','Kaydet','Kaydet ve düzenlemeye devam et','Kaydet ve sonrakin ekle','Sil','Tablo düşürüldü.','Tablo değiştirildi.','Tablo yaratıldı.','Tablo yarat','kabul edilebilir alan sayısı aşıldı. Lütfen %s ve %s düşürün.','Tablo adı','motor','Bölümü tarafından','Bölümler','BÖlüm adı','Değerler','Dizinler değiştirilidi.','Dizin Türü','Kolon (uzunluğu)','Ad','Veritabanı düşürüldü.','Veritabanının ismi değiştirildi.','Veritabanı yaratıldı.','Veritabanı değiştirildi.','Veritabanı yarat','Çağrı',array('Yordam çağrıldı, %d sıra(row) etkilendi.','Yordam çağrıldı, %d sıralar(rows) etkilendi.'),'Dış anahtar düşürüldü.','Dış anahtar değiştir.','Dış anahtar yarat.','Kaynak ve hedef kolonlar aynı veri türü olmak zorunda, hedef kolonda bir dizin ve başvurulan veri bulunmalı.','Dış anahtar','Hedef tablo','Değiş','Kolon eklde','Görünüm düşürüldü.','Görünüm değiştirildi.','Görünüm yaratıldı.','Görünüm yarat','Olay düşüdüldü.','Olay değiştirildi.','Olay yaratıldı.','Değiştirme olayı','Yaratma olayı','Başla','Son','Herzaman','Tamamlama koruması AÇIK','Yordam düşürüldü.','Yordam değiştirildi.','Yordam yaratıldı.','Değiştirme fonksyionu','Değiştirme yöntemi','Fonksiyon yarat','Yöntem yarat','Geri dönüş türü','Tetik düşürüldü.','Tetik değiştirildi.','Tetik yaratıldı.','Tetik değiştir.','Tetik yarat','Zaman','Olay','Kullanıcı düşürüldü.','Kullanıcı değiştirildi.','Kullanıcı yaratıldı.','Harmanlandı.','Yordam','İmtiyaz','Geri al',array('%d süreç öldürüldü.','%d adet süreç öldürüldü.'),'%d toplamda','Öldür',array('%d öğe etkilendi.','%d kadar öğe etkilendi.'),'Değerin üzerine çift tıklayın ve değiştirin.',array('%d sıra ithal edildi.','%d kadar sıra ithal edildi.'),'Tablo seçilemedi','düzen','İlişkiler','Değeri değiştirmek için düzenleme bağlantısını kullanın.','Sayfa','son','tüm sonuç','Klonla','İthal','Tablolar budandı.','Tablolar taşındı.','Tablolar kopyalandı.','Tablolar düşürüldü.','Tables have been optimized.','Şema','Tablolar ve görünümler','Tablolarda veri ara.','Motor','Veri uzunluğu','Dizin uzunluğu','Serbest veri','Sıralar (Rows)','Çözümleme','En uygun hale getirme','Denetleme','Tamir','Buda','Diğer veritabanına taşı','Taşı','Kopyala','Takvimli','Bir anda','Tür değiştir');break;case"ro":$U=array('Ești precis?','Nu am putut încărca fișierul pe server.','Fișierul maxim admis - %sO.','Așa fișier nu există.','gol','original','În baza de date nu sunt tabele.',',','Limba','Alege','Număr','Data și timpul','Șire de caractere','Tip binar','Liste','Sistema','Server','Nume de utilizator','Parola','Baza de date','Intră','Logare permanentă','Selectează','Arată structura','Modifică reprezentare','Modifică tabelul','Înscriere nouă','Ultima pagină','Editează',array('%d octet','%d octeți'),'Selectează','Funcții','Agregare','Căutare','oriunde','Sortare','descrescător','Limit','Lungimea textului','Acțiune','Full table scan','SQL query','deschide','salvează','Modifică baza de date','Modifică schema','Crează o schemă','Schema bazei de date','Privelegii','Dump','Eșire','baza de date','Crează tabel nou','selectează','ltr','CSRF token imposibil. Retrimite forma.','Ați eșit cu succes.','Sesiunile trebuie să fie pornite.','Timpul sesiunii a expirat, rog să te loghezi din nou.','Numele de utilizator sau parola este greșită.','Nu este extensie','Nu este aviabilă nici o extensie suportată (%s).','Mesajul POST este prea mare. Trimiteți mai puține date sau măriți parametrul configurației directivei %s.','Bază de deate invalidă.','Baze de date au fost șterse.','Alege baza de date','Crează o bază de date nouă','Lista proceselor','Variabile','Stare','Versiunea %s: %s cu extensia PHP %s','Ați intrat ca: %s','Colaționare','Tabele','Șterge','Împrospătează','Nu sunt înscrieri.','%.3f s','Cheiuri externe','colaționarea','La ștergere','Denumirea coloanei','Numele parametrului','Tip','Lungime','Acțiune','Creșterea automată','Valoarea inițială','Comentariu','Adaugă încă','Mișcă în sus','Mișcă în jos','Șterge','Reprezentare','Tabel','Coloană','Indexe','Modifică indexe','Sursă','Scop','La modificare','Modifică','Adaugă chei extern','Triggere','Adaugă trigger','Adresă permanentă','Export','Date de eșire','Format','Proceduri și funcții salvate','Evenimente','Date','Crează utilizator','Eroare în query',array('%d înscriere','%d înscrieri'),array('Query executat, %d înscriere modificată.','Query executat, %d înscrieri modificate.'),'Nu sunt comenzi de executat.',array('%d query executat.','%d query-uri executate cu succes.'),'Încarcă fișierul','Încărcarea fișierelor este interzisă.','Execută','Opreștete la eroare','Arată doar greșeli','De pe server','Fișierul %s pe server','Execută fișier','Istoria','Curățp','Editează tot','Înregistrare a fost ștearsă.','Înregistrare a fost înnoită.','Înregistrarea%s a fost inserată.','Inserează','Salvează','Salvează și continuă editarea','Salvează și mai inserează','Șterge','Tabelul a fost șters.','Tabelul a fost modificat.','Tabelul a fost creat.','Crează tabel','Numărul maxim de înscrieri disponibile a fost atins. Majorați %s și %s.','Denumirea tabelului','tip','Împarte','Secțiuni','Denumirea secțiunii','Parametru','Indexele au fost modificate.','Tipul indexului','Coloană (lungimea)','Titlu','Baza de date a fost ștearsă.','Baza de date a fost redenumită.','Baza de date a fost creată.','Baza de date a fost modificată.','Crează baza de date','Apelează',array('A fost executată procedură, %d înscriere a fost modificată.','A fost executată procedură, %d înscrieri au fost modificate.'),'Chei extern a fost șters.','Chei extern a fost modificat.','Chei extern a fost creat.','Coloanele ar trebui să aibă aceleaşi tipuri de date, trebuie să existe date de referinţă și un index pe coloanela-ţintă.','Chei extern','Tabela scop','Modifică','Adaugă coloană','Reprezentarea a fost ștearsă.','Reprezentarea a fost modificată.','Reprezentarea a fost creată.','Crează reprezentare','Evenimentul a fost șters.','Evenimentul a fost modificat.','Evenimentul a fost adăugat.','Modifică eveniment','Creează evenimet','Început','Svârșit','Fiecare','Salvează după finisare','Procedura a fost ștearsă.','Procedura a fost modificată.','Procedura a fost creată.','Modifică funcția','Modifică procedura','Crează funcție','Crează procedură','Tipul returnării','Triggerul a fost șters.','Triggerul a fost modificat.','Triggerul a fost creat.','Modifică trigger','Crează trigger','Timp','Eveniment','Utilizatorul a fost șters.','Utilizatorul a fost modificat.','Utilizatorul a fost creat.','Hashed','Procedură','Permite','Interzice',array('A fost finisat %d proces.','Au fost finisate %d procese.'),'În total %d','Termină',array('A fost modificată %d înscriere.','Au fost modificate %d înscrieri.'),'Dublu click pe o valoare pentru a o modifica.',array('%d rînd importat.','%d rînduri importate.'),'Nu am putut selecta date din tabel','editare','Relații','Valoare poate fi modificată cu ajutorul butonului «modifică».','Pagina','ultima','tot rezultatul','Clonează','Importă','Tabelele au fost curățate.','Tabelele au fost mutate.','Tabelele au fost copiate','Tabelele au fost șterse.','Tables have been optimized.','Schema','Tabele și reprezentări','Caută în tabele','Tip','Cantitatea de date','Cantitatea de indexe','Spațiu liber','Înscrieri','Analizează','Optimizează','Controlează','Repară','Curăță','Mută în altă bază de date','Mută','Copiază','Program','În timpul curent','HH:MM:SS');break;case"id":$U=array('Anda yakin','Tidak dapat mengunggah berkas.','Besar berkas yang diizinkan adalah %s bita.','Berkas tidak ditemukan.','kosong','orisinal','Tiada tabel.','.','Bahasa','Gunakan','Angka','Tanggal dan waktu','String','Biner','Daftar','Sistem','Server','Pengguna','Sandi','Basis data','Masuk','Masuk permanen','Pilih data','Lihat struktur','Ubah tampilan','Ubah tabel','Entri baru','Halaman terakhir','Edit','%d bita','Pilih','Fungsi','Agregasi','Cari','di mana pun','Urutan','menurun','Limit','Panjang teks','Tindakan','Pindai tabel lengkap','Perintah SQL','buka','simpan','Ubah basis data','Ubah skema','Buat skema','Skema basis data','Privilese','Ekspor','Keluar','basis data','Buat tabel baru','pilih','ltr','Token CSRF invalid. Kirim ulang formulir.','Berhasil keluar.','Dukungan sesi harus aktif.','Sesi habis, silakan masuk lagi.','Akses invalid.','Ekstensi tidak tersedia','Ekstensi PHP yang didukung (%s) tidak tersedia.','Data POST terlalu besar. Kurangi data atau perbesar pengarah konfigurasi %s.','Basis data invalid.','Basis data berhasil dihapus.','Pilih basis data','Buat basis data baru','Daftar proses','Variabel','Status','Versi %s: %s dengan ekstensi PHP %s','Masuk sebagai: %s','Kolasi','Tabel','Hapus','Segarkan','Tiada baris.','%.3f s','Kunci asing','kolasi','ON DELETE','Nama kolom','Nama paramater','Jenis','Panjang','Opsi','Kenaikan Otomatis','Nilai bawaan','Komentar','Tambah setelahnya','Naik','Turun','Hapus','Tampilan','Tabel','Kolom','Indeks','Ubah indeks','Sumber','Sasaran','ON UPDATE','Ubah','Tambah kunci asing','Picu','Tambah picu','Tautan permanen','Ekspor','Hasil','Format','Rutin','Peristiwa','Data','Buat pengguna','Kesalahan dalam kueri','%d baris','Kueri berhasil, %d baris terpengaruh.','Tiada perintah untuk dijalankan.','%d kueri berhasil dijalankan.','Unggah berkas','Pengunggahan berkas dimatikan.','Jalankan','Hentikan pada kesalahan','Hanya tampilkan kesalahan','Dari server','Berkas server web %s','Jalankan berkas','Riwayat','Bersihkan','Edit semua','Entri berhasil dihapus.','Entri berhasil diperbarui.','Entri%s berhasil disisipkan.','Sisipkan','Simpan','Simpan dan terus mengedit','Simpan dan sisipkan yang lain','Hapus','Tabel berhasil dihapus.','Tabel berhasil diubah.','Tabel berhasil dibuat.','Buat tabel','Jumlah ruas maksimum yang diizinkan dilewati. Harap naikkan %s dan %s.','Nama tabel','mesin','Partisi menurut','Partisi','Nama partisi','Nilai','Indeks berhasil diubah.','Jenis Indeks','Kolom (panjang)','Nama','Basis data berhasil dihapus.','Basis data berhasil diganti nama.','Basis data berhasil dibuat.','Basis data berhasil diubah.','Buat basis data','Panggilan',array('Rutin telah dipanggil, %d baris terpengaruh.','Rutin telah dipanggil, %d baris terpengaruh'),'Kunci asing berhasil dihapus.','Kunci asing berhasil diubah.','Kunci asing berhasil dibuat.','Kolom sumber dan sasaran harus memiliki jenis data yang sama. Kolom sasaran harus memiliki indeks dan data rujukan harus ada.','Kunci asing','Tabel sasaran','Ubah','Tambah kolom','Tampilan berhasil dihapus.','Tampilan berhasil diubah.','Tampilan berhasil dibuat.','Buat tampilan','Peristiwa berhasil dihapus.','Peristiwa berhasil diubah.','Peristiwa berhasil dibuat.','Ubah peristiwa','Buat peristiwa','Mulai','Selesai','Setiap','Pertahankan saat selesai','Rutin berhasil dihapus.','Rutin berhasil diubah.','Rutin berhasil dibuat.','Ubah fungsi','Ubah prosedur','Buat fungsi','Buat prosedur','Jenis balikan','Picu berhasil dihapus.','Picu berhasil diubah.','Picu berhasil dibuat.','Ubah picu','Buat picu','Waktu','Peristiwa','Pengguna berhasil dihapus.','Pengguna berhasil diubah.','Pengguna berhasil dibuat.','Hashed*','Rutin','Beri','Tarik','%d proses berhasil dihentikan.','%d total','Hentikan','%d entri terpengaruh.','Klik ganda suatu nilai untuk mengubahnya.','%d baris berhasil diimpor.','Gagal memilih tabel','edit','Relasi','Gunakan tautan edit untuk mengubah nilai ini.','Halaman','terakhir','Seluruh hasil','Gandakan','Impor','Tabel berhasil dikosongkan.','Tabel berhasil dipindahkan.','Tabel berhasil disalin.','Tabel berhasil dihapus.','Tabel berhasil dioptimalkan.','Skema','Tabel dan tampilan','Cari data dalam tabel','Mesin','Panjang Data','Panjang Indeks','Data Bebas','Baris','Analisis','Optimalkan','Periksa','Perbaiki','Kosongkan','Pindahkan ke basis data lain','Pindahkan','Salin','Jadwal','Pada waktu tertentu','Ubah jenis');break;case"ru":$U=array('Вы уверены?','Не удалось загрузить файл на сервер.','Максимальный разрешенный размер файла - %sB.','Такого файла не существует.','пусто','исходный','В базе данных нет таблиц.',' ','Язык','Выбрать','Число','Дата и время','Строки','Двоичный тип','Списки','Движок','Сервер','Имя пользователя','Пароль','База данных','Войти','Оставаться в системе','Выбрать','Показать структуру','Изменить представление','Изменить таблицу','Новая запись','Последняя страница','Редактировать',array('%d байт','%d байта','%d байтов'),'Выбрать','Функции','Агрегация','Поиск','в любом месте','Сортировать','по убыванию','Лимит','Длина текста','Действие','Full table scan','SQL запрос','открыть','сохранить','Изменить базу данных','Изменить схему','Новая схема','Схема базы данных','Полномочия','Дамп','Выйти','база данных','Создать новую таблицу','выбрать','ltr','Недействительный CSRF токен. Отправите форму ещё раз.','Вы успешно покинули систему.','Сессии должны быть включены.','Срок действия сесси истек, нужно снова войти в систему.','Неправильное имя пользователя или пароль.','Нет расширений','Не доступно ни одного расширения из поддерживаемых (%s).','Слишком большой объем POST-данных. Пошлите меньший объем данных или увеличьте параметр конфигурационной директивы %s.','Плохая база данных.','Базы данных удалены.','Выбрать базу данных','Создать новую базу данных','Список процессов','Переменные','Состояние','Версия %s: %s с PHP-расширением %s','Вы вошли как: %s','Режим сопоставления','Таблицы','Удалить','Обновить','Нет записей.','%.3f s','Внешние ключи','режим сопоставления','При стирании','Название поля','Название параметра','Тип','Длина','Действие','Автоматическое приращение','Значения по умолчанию','Комментарий','Добавить еще','Переместить вверх','Переместить вниз','Удалить','Представление','Таблица','Колонка','Индексы','Изменить индексы','Источник','Цель','При обновлении','Изменить','Добавить внешний ключ','Триггеры','Добавить триггер','Постоянная ссылка','Экспорт','Выходные данные','Формат','Хранимые процедуры и функции','События','Данные','Создать пользователя','Ошибка в запросe',array('%d строка','%d строки','%d строк'),array('Запрос завершен, изменена %d запись.','Запрос завершен, изменены %d записи.','Запрос завершен, изменено %d записей.'),'Нет команд для выполнения.',array('%d запрос выполнен успешно.','%d запроса выполнено успешно.','%d запросов выполнено успешно.'),'Загрузить файл на сервер','Загрузка файлов на сервер запрещена.','Выполнить','Остановить при ошибке','Только ошибки','С сервера','Файл %s на вебсервере','Запустить файл','История','Очистить','Редактировать всё','Запись удалена.','Запись обновлена.','Запись%s была вставлена.','Вставить','Сохранить','Сохранить и продолжить редактирование','Сохранить и вставить еще','Стереть','Таблица была удалена.','Таблица была изменена.','Таблица была создана.','Создать таблицу','Достигнуто максимальное значение количества доступных полей. Увеличьте %s и %s.','Название таблицы','тип','Разделить по','Разделы','Название раздела','Параметры','Индексы изменены.','Тип индекса','Колонка (длина)','Название','База данных была удалена.','База данных была переименована.','База данных была создана.','База данных была изменена.','Создать базу данных','Вызвать',array('Была вызвана процедура, %d запись была изменена.','Была вызвана процедура, %d записи было изменено.','Была вызвана процедура, %d записей было изменено.'),'Внешний ключ был удален.','Внешний ключ был изменен.','Внешний ключ был создан.','Колонки должны иметь одинаковые типы данных, в результирующей колонке должен быть индекс, данные для импорта должны существовать.','Внешний ключ','Результирующая таблица','Изменить','Добавить колонку','Представление было удалено.','Представление было изменено.','Представление было создано.','Создать представление','Событие было удалено.','Событие было изменено.','Событие было создано.','Изменить событие','Создать событие','Начало','Конец','Каждые','После завершения сохранить','Процедура была удалена.','Процедура была изменена.','Процедура была создана.','Изменить функцию','Изменить процедуру','Создать функцию','Создать процедуру','Возвращаемый тип','Триггер был удален.','Триггер был изменен.','Триггер был создан.','Изменить триггер','Создать триггер','Время','Событие','Пользователь был удален.','Пользователь был изменен.','Пользователь был создан.','Хешировано','Процедура','Позволить','Запретить',array('Был завершен %d процесс.','Было завершено %d процесса.','Было завершёно %d процессов.'),'Всего %d','Завершить',array('Была изменена %d запись.','Были изменены %d записи.','Было изменено %d записей.'),'Кликни два раза по значению, чтобы его изменить.',array('Импортирована %d строка.','Импортировано %d строки.','Импортировано %d строк.'),'Не удалось получить данные из таблицы','редактировать','Реляции','Изменить это значение можно с помощью ссылки «изменить».','Страница','последняя','весь результат','Клонировать','Импорт','Таблицы были очищены.','Таблицы были перемещены.','Таблицы скопированы.','Таблицы были удалены.','Tables have been optimized.','Схема','Таблицы и представления','Поиск в таблицах','Тип','Объём данных','Объём индексов','Свободное место','Строк','Анализировать','Оптимизировать','Проверить','Исправить','Очистить','Переместить в другою базу данных','Переместить','Копировать','Расписание','В данное время','ЧЧ:ММ:СС');break;case"uk":$U=array('Ви впевнені?','Неможливо завантажити файл.','Максимально допустимий розмір файлу %sБ.','Файл не існує.','порожньо','початковий','Нема таблиць.',' ','Мова','Обрати','Числа','Дата і час','Радки','Двійкові','Списки','Система Бази Даних','Сервер','Користувач','Пароль','База даних','Увійти','Пам\'ятати сесію','Вибрати дані','Показати структуру','Змінити вигляд','Змінити таблицю','Новий запис','Остання сторінка','Редагувати',array('%d байт','%d байта','%d байтів'),'Вибрати','Функції','Агрегація','Пошук','будь-де','Сортувати','по спаданню','Обмеження','Довжина тексту','Дія','Full table scan','SQL запит','відкрити','зберегти','Змінити базу даних','Змінити схему','Створити схему','Схема бази даних','Привілеї','Дамп','Вийти','база даних','Створити нову таблицю','вибрати','ltr','Недійсний CSRF токен. Надішліть форму ще раз.','Ви вдало вийшли з системи.','Сесії повинні бути дозволені.','Сесія закінчилась, будь ласка, увійдіть в систему знову.','Неправильні дані входу.','Нема розширень','Жодне з PHP-розширень (%s), що підтримуються, не доступне.','Занадто великий об\'єм POST-даних. Зменшіть об\'єм або збільшіть параметр директиви %s конфигурації.','Погана база даних.','Бази даних були видалені.','Обрати базу даних','Створити нову базу даних','Перелік процесів','Змінні','Статус','Версія %s: %s з PHP-розширенням %s','Ви увійшли як: %s','Співставлення','Таблиці','Видалити','Оновити','Нема рядків.','%.3f s','Зовнішні ключі','співставлення','ПРИ ВИДАЛЕННІ','Назва стовпця','Назва параметра','Тип','Довжина','Опції','Автоматичне збільшення','Значення за замовчуванням','Коментарі','Додати ще','Пересунути вгору','Пересунути вниз','Видалити','Вигляд','Таблиця','Колонка','Індекси','Змінити індексування','Джерело','Ціль','ПРИ ЗМІНІ','Змінити','Додати зовнішній ключ','Тригери','Додати тригер','Постійне посилання','Експорт','Вихідні дані','Формат','Збережені процедури','Події','Дані','Створити користувача','Помилка в запиті',array('%d рядок','%d рядки','%d рядків'),array('Запит виконано успішно, змінено %d рядок.','Запит виконано успішно, змінено %d рядки.','Запит виконано успішно, змінено %d рядків.'),'Нема запитів до виконання.',array('%d запит виконано успішно.','%d запити виконано успішно.','%d запитів виконано успішно.'),'Завантажити файл','Завантаження файлів заборонене.','Виконати','Зупинитись при помилці','Показувати тільки помилки','З сервера','Файл %s на вебсервері','Запустити файл','Історія','Очистити','Редагувати все','Запис було видалено.','Запис було змінено.','Запис%s було вставлено.','Вставити','Зберегти','Зберегти і продовжити редагування','Зберегти і вставити знову','Видалити','Таблицю було видалено.','Таблица була змінена.','Таблиця була створена.','Створити таблицю','Досягнута максимальна кількість доступних полів. Будь ласка, збільшіть %s і %s.','Назва таблиці','рушій','Розділити по','Розділи','Назва розділу','Значення','Індексування було змінено.','Тип індексу','Стовпець (довжина)','Назва','Базу даних було видалено.','Базу даних було переіменовано.','Базу даних було створено.','Базу даних було змінено.','Створити базу даних','Викликати',array('Була викликана процедура, %d запис було змінено.','Була викликана процедура, %d записи було змінено.','Була викликана процедура, %d записів було змінено.'),'Зовнішній ключ було видалено.','Зовнішній ключ було змінено.','Зовнішній ключ було створено.','Стовпці повинні мати той самий тип даних, цільові стовпці повинні бути проіндексовані і дані, на які посилаються повинні існувати.','Зовнішній ключ','Цільова таблиця','Змінити','Додати стовпець','Вигляд було видалено.','Вигляд було змінено.','Вигляд було створено.','Створити вигляд','Подію було видалено.','Подію було змінено.','Подію було створено.','Змінити подію','Створити подію','Початок','Кінець','Кожного','Після завершення зберегти','Процедуру було видалено.','Процедуру було змінено.','Процедуру було створено.','Змінити функцію','Змінити процедуру','Створити функцію','Створити процедуру','Тип, що повернеться','Тригер було видалено.','Тригер було змінено.','Тригер було створено.','Змінити тригер','Створити тригер','Час','Подія','Користувача було видалено.','Користувача було змінено.','Користувача було створено.','Хешовано','Процедура','Дозволити','Заборонити',array('Було завершено %d процес.','Було завершено %d процеси.','Було завершёно %d процесів.'),'%d всього','Завершити процес',array('Було змінено %d запис.','Було змінено %d записи.','Було змінено %d записів.'),'Двічі клікніть на значенні щоб змінити його.',array('%d рядок було імпортовано.','%d рядки було імпортовано.','%d рядків було імпортовано.'),'Неможливо вибрати таблицю','редагувати','Зв\'язки','Використовуйте посилання щоб змінити це значення.','Сторінка','остання','весь результат','Клонувати','Імпортувати','Таблиці було очищено.','Таблиці було перенесено.','Таблиці було зкопійовано.','Таблиці були видалені.','Таблиці були оптимізовані.','Схема','Таблиці і вигляди','Шукати дані в таблицях','Рушій','Об\'єм даних','Об\'єм індексів','Вільне місце','Рядків','Аналізувати','Оптимізувати','Перевірити','Виправити','Очистити','Перенести до іншої бази даних','Перенести','копіювати','Розклад','В даний час','Змінити тип');break;case"zh":$U=array('你确定吗？','不能上传文件。','最多允许的文件大小为 %sB','文件不存在。','空','原始','没有表。',',','语言','使用','数字','日期时间','字符串','二进制','列表','系统','服务器','用户名','密码','数据库','登录','保持登录','选择数据','显示结构','更改视图','更改表','新建项','末页','编辑','%d 字节','选择','函数','集合','搜索','任意位置','排序','降序','限定','文本长度','动作','Full table scan','SQL命令','打开','保存','更改数据库','更改模式','创建模式','数据库概要','权限','导出','注销','数据库','创建新表','选择','ltr','无效 CSRF 令牌。重新发送表单。','注销成功。','会话必须被启用。','会话已过期，请重新登录。','无效凭据。','没有扩展','没有支持的 PHP 扩展可用（%s）。','太大的 POST 数据。减少数据或者增加 %s 配置命令。','无效数据库。','已丢弃数据库。','选择数据库','创建新数据库','进程列表','变量','状态','%s 版本：%s 通过 PHP 扩展 %s','登录为：%s','校对','表','丢弃','刷新','没有行。','%.3f 秒','外键','校对','ON DELETE','列名','参数名','类型','长度','选项','自动增量','默认值','注释','添加下一个','上移','下移','移除','视图','表','列','索引','更改索引','源','目标','ON UPDATE','更改','添加外键','触发器','创建触发器','固定链接','导出','输出','格式','子程序','事件','数据','创建用户','查询出错','%d 行','执行查询OK，%d 行受影响。','没有命令执行。','%d 条查询已成功执行。','文件上传','文件上传被禁用。','执行','出错时停止','仅显示错误','来自服务器','Web服务器文件 %s','运行文件','历史','清除','编辑全部','已删除项目。','已更新项目。','已插入项目%s。','插入','保存','保存并继续编辑','保存并插入下一个','删除','已丢弃表。','已更改表。','已创建表。','创建表','超过最多允许的字段数量。请增加 %s 和 %s 。','表名','引擎','分区类型','分区','分区名','值','已更改索引。','索引类型','列（长度）','名称','已丢弃数据库。','已重命名数据库。','已创建数据库。','已更改数据库。','创建数据库','调用','子程序被调用，%d 行被影响。','已删除外键。','已更改外键。','已创建外键。','源列和目标列必须具有相同的数据类型，在目标列上必须有一个索引并且引用的数据必须存在。','外键','目标表','更改','增加列','已丢弃视图。','已更改视图。','已创建视图。','创建视图','已丢弃事件。','已更改事件。','已创建事件。','更改事件','创建事件','开始','结束','每','完成后保存','已丢弃子程序。','已更改子程序。','已创建子程序。','更改函数','更改过程','创建函数','创建过程','返回类型','已丢弃触发器。','已更改触发器。','已创建触发器。','更改触发器','创建触发器','时间','事件','已丢弃用户。','已更改用户。','已创建用户。','Hashed','子程序','授权','废除','%d 个进程被终止','共计 %d','终止','%d 个项目受到影响。','在值上双击类修改它。','%d 行已导入。','不能选择该表','编辑','关联信息','使用编辑链接来修改该值。','页面','最后','所有结果','克隆','导入','已清空表。','已转移表。','表已复制。','已丢弃表。','Tables have been optimized.','模式','表和视图','在表中搜索数据','引擎','数据长度','索引长度','数据空闲','行数','分析','优化','检查','修复','清空','转移到其它数据库','转移','复制','调度','在指定时间','HH:MM:SS');break;case"zh-tw":$U=array('你確定嗎？','無法上傳檔案。','允許的檔案上限大小為%sB','檔案不存在','空值','原始','沒有資料表。',',','語言','使用','數字','日期時間','字符串','二進制','列表','資料庫系統','伺服器','帳號','密碼','資料庫','登入','永久登入','選擇資料','秀出結構','更改檢視表','更改資料表','新建項','最後一頁','編輯','%d byte(s)','選擇','函數','集合','搜尋','任意位置','排序','降冪','限定','Text 長度','動作','Full table scan','SQL命令','打開','儲存','更改資料庫','更改資料表結構','建立資料表結構','資料庫架構','權限','導入/導出','登出','資料庫','建立新資料表','選擇','ltr','無效的 CSRF token。請重新發送表單。','登出成功。','Session 必須被啟用。','Session 已過期，請重新登入。','無效的憑證。','沒有 擴充模組','沒有任何支援的PHP擴充模組（%s）。','POST 資料太大。減少資料或者增加 %s 的設定值。','無效的資料庫。','資料庫已刪除。','選擇資料庫','建立新資料庫','進程列表','變數','狀態','%s版本：%s 透過PHP擴充模組 %s','登錄為：%s','校對','資料表','丟棄','重新載入','沒有行。','%.3f秒','外鍵','校對','ON DELETE','列名','參數名稱','類型','長度','選項','自動增加','預設值','註解','新增下一個','上移','下移','移除','檢視表','資料表','列','索引','更改索引','來源','目標','ON UPDATE','更改','新增外鍵','觸發器','建立觸發器','永久鏈接','匯出','輸出','格式','程序','事件','資料','建立使用者','查詢出錯','%d行','執行查詢OK，%d行受影響','沒有命令可執行。','已順利執行 %d 個查詢。','檔案上傳','檔案上傳被禁用。','執行','出錯時停止','僅顯示錯誤訊息','從伺服器','網頁伺服器檔案 %s','執行檔案','歷史','清除','編輯全部','該項目已被刪除','已更新項目。','已插入項目%s。','插入','儲存','保存並繼續編輯','儲存並插入下一個','刪除','已經刪除資料表。','資料表已更改。','資料表已更改。','建立資料表表','超過最多允許的字段數量。請增加%s和%s 。','資料表名稱','引擎','分區類型','分區','分區名','值','已更改索引。','索引類型','列（長度）','名稱','資料庫已刪除。','已重新命名資料庫。','已建立資料庫。','已更改資料庫。','建立資料庫','呼叫','程序已被執行，%d行被影響','已刪除外鍵。','已更改外鍵。','已建立外鍵。','源列和目標列必須具有相同的數據類型，在目標列上必須有一個索引並且引用的數據必須存在。','外鍵','目標資料表','更改','新增資料列','已丟棄檢視表。','已更改檢視表。','已建立檢視表。','建立檢視表','已丟棄事件。','已更改事件。','已建立事件。','更改事件','建立事件','開始','結束','每','在完成後保存','已丟棄程序。','已更改子程序。','已建立子程序。','更改函數','更改過程','建立函數','建立預存程序','返回類型','已丟棄觸發器。','已更改觸發器。','已建立觸發器。','更改觸發器','建立觸發器','時間','事件','已丟棄使用者。','已更改使用者。','已建立使用者。','Hashed','程序','授權','廢除','%d 個 Process(es) 被終止','總共 %d 個','終止','%d個項目受到影響。','雙擊以進行修改。','%d行已導入。','無法選擇該資料表','編輯','關聯','使用編輯連結來修改。','頁','最後一頁','所有結果','複製','匯入','已清空資料表。','已轉移資料表。','表格已經複製','已丟棄表。','Tables have been optimized.','資料表結構','資料表和檢視表','在資料庫搜尋','引擎','資料長度','索引長度','資料空閒','行數','分析','優化','檢查','修復','清空','轉移到其它資料庫','轉移','複製','調度','在指定時間','HH:MM:SS');break;case"ja":$U=array('実行しますか？','ファイルをアップロードできません','最大ファイルサイズ %sB','ファイルは存在しません','空','元','テーブルがありません。',',','言語','使用','数字','日時','文字列','バイナリ','リスト','データベース種類','サーバ','ユーザ名','パスワード','データベース','ログイン','永続的にログイン','データ','構造','ビューを変更','テーブルの変更','項目の作成','最後のページ','編集','%d バイト','選択','関数','集合','検索','任意','ソート','降順','制約','文字列の長さ','動作','Full table scan','SQLコマンド','開く','保存','データベースを変更','スキーマ変更','スキーマ追加','構造','権限','ダンプ','ログアウト','データベース','テーブルを作成','選択','ltr','不正なCSRFトークン。再送信してください','ログアウト','セッションを有効にしてください','セッションの期限切れ。ログインし直してください','不正なログイン','拡張機能がありません','PHPの拡張機能（%s）がセットアップされていません','POSTデータが大きすぎます。データサイズを小さくするか %s 設定を大きくしてください','不正なデータベース','データベースを削除しました','データベースを選択してください','新規にデータベースを作成','プロセス一覧','変数','状態','%sバージョン：%s、 PHP拡張機能 %s','ログ：%s','照合順序','テーブル','削除','リフレッシュ','行がありません','%.3f 秒','外部キー','照合順序','ON DELETE','列名','参数名','型','長さ','設定','連番','規定値','コメント','追加','上','下','除外','ビュー','テーブル','列','索引','索引の変更','ソース','ターゲット','ON UPDATE','変更','外部キーを追加','トリガー','トリガーの追加','パーマネントリンク','エクスポート','出力','形式','ルーチン','イベント','データ','ユーザを作成','クエリーのエラー','%d 行','クエリーを実行しました。%d 行を変更しました','実行するコマンドがありません','%d クエリーを実行しました','ファイルをアップロード','ファイルのアップロードが無効です','実行','エラーの場合は停止','エラーのみ表示','サーバーから実行','Webサーバファイル %s','ファイルを実行','履歴','消去','すべて編集','項目を削除しました','項目を更新しました','%s項目を挿入しました','挿入','保存','保存して継続','保存／追加','削除','テーブルを削除しました','テーブルを変更しました','テーブルを作成しました','テーブルを作成','定義可能な最大フィールド数を越えました。%s と %s を増やしてください。','テーブル名','エンジン','パーティション','パーティション','パーティション名','値','索引を変更しました','索引の型','列（長さ）','名称','データベースを削除しました','データベースの名前を変えました','データベースを作成しました','データベースを変更しました','データベースを作成','呼出し','ルーチンを呼びました。%d 行を変更しました','外部キーを削除しました','外部キーを変更しました','外部キーを作成しました','ソースとターゲットの列は同じデータ型でなければなりません。ターゲット列に索引があり、データが存在しなければなりません。','外キー','テーブル','変更','列を追加','ビューを削除しました','ビューを変更しました','ビューを作成しました','ビューを作成','削除しました','変更しました','作成しました','変更','作成','開始','終了','毎回','完成後に保存','ルーチンを作成','ルーチンを変更','ルーチンを作成','関数の変更','プロシージャの変更','関数の作成','プロシージャの作成','戻り値の型','トリガーを削除しました','トリガーを変更しました','トリガーを追加しました','トリガーの変更','トリガーの作成','時間','イベント','ユーザを削除','ユーザを変更','ユーザを作成','Hashed','ルーチン','権限の付与','権限の取消し','%d プロセスを強制終了しました','合計 %d','強制終了','%d を更新しました','ダブルクリックして編集','%d 行をインポートしました','テーブルを選択できません','編集','関係','リンクを編集する','ページ','最終','全結果','クローン','インポート','テーブルをtruncateしました','テーブルを移動しました','テーブルをコピーしました','テーブルを削除しました','Tables have been optimized.','スキーマ','テーブルとビュー','データを検索する','エンジン','データ長','索引長','空き','行数','分析','最適化','チェック','修復','Truncate','別のデータベースへ移動','移動','コピー','スケジュール','指定時刻','時:分:秒');break;case"ta":$U=array('நிச்ச‌ய‌மாக‌ ?','கோப்பை மேலேற்ற‌ம் (upload) செய்ய‌ இயல‌வில்லை.','கோப்பின் அதிக‌ப‌ட்ச‌ அள‌வு %sB.','கோப்பு இல்லை.','வெறுமை (empty)','அச‌ல்','அட்ட‌வ‌ணை இல்லை.',',','மொழி','உப‌யோகி','எண்க‌ள்','தேதி ம‌ற்றும் நேர‌ம்','ச‌ர‌ம் (String)','பைன‌ரி','ப‌ட்டிய‌ல்','சிஸ்ட‌ம் (System)','வ‌ழ‌ங்கி (Server)','ப‌ய‌னாள‌ர் (User)','க‌ட‌வுச்சொல்','த‌க‌வ‌ல்த‌ள‌ம்','நுழை','நிர‌ந்த‌ர‌மாக‌ நுழைய‌வும்','த‌க‌வ‌லை தேர்வு செய்','க‌ட்ட‌மைப்பை காண்பிக்க‌வும்','தோற்ற‌த்தை மாற்று','அட்ட‌வ‌ணையை மாற்று','புதிய‌ உருப்ப‌டி','க‌டைசி ப‌க்க‌ம்','தொகு',array('%d பைட்','%d பைட்டுக‌ள்'),'தேர்வு செய்','Functions','திர‌ள்வு (Aggregation)','தேடு','எங்காயினும்','த‌ர‌ம் பிரி','இற‌ங்குமுக‌மான‌','வ‌ர‌ம்பு','உரை நீள‌ம்','செய‌ல்','Full table scan','SQL க‌ட்ட‌ளை','திற‌','சேமி','த‌க‌வ‌ல்த‌ள‌த்தை மாற்று','அமைப்புமுறையை மாற்று','அமைப்புமுறையை உருவாக்கு','த‌க‌வ‌ல்த‌ள‌ அமைப்பு முறைக‌ள்','ச‌லுகைக‌ள் / சிற‌ப்புரிமைக‌ள்','Dump','வெளியேறு','த‌க‌வ‌ல்த‌ள‌ம்','புதிய‌ அட்ட‌வ‌ணையை உருவாக்கு','தேர்வு செய்','ltr','CSRF டோக்க‌ன் செல்லாது. ப‌டிவ‌த்தை மீண்டும் அனுப்ப‌வும்.','வெற்றிக‌ர‌மாய் வெளியேறியாயிற்று.','செஷ‌ன் ஆத‌ர‌வு இய‌க்க‌ப்ப‌ட‌ வேண்டும்.','செஷ‌ன் காலாவ‌தியாகி விட்ட‌து. மீண்டும் நுழைய‌வும்.','ச‌ரியான‌ விப‌ர‌ங்க‌ள் இல்லை.','விரிவு (extensஇஒன்) இல்லை ','PHP ஆத‌ர‌வு விரிவுக‌ள் (%s) இல்லை.','மிக‌ அதிக‌மான‌ POST த‌க‌வ‌ல். த‌க‌வ‌லை குறைக்க‌வும் அல்ல‌து %s வ‌டிவ‌மைப்பை (configuration directive) மாற்ற‌வும்.','த‌க‌வ‌ல்த‌ள‌ம் ச‌ரியானதல்ல‌.','த‌க‌வ‌ல் த‌ள‌ங்க‌ள் நீக்க‌ப்ப‌ட்டன‌.','த‌க‌வ‌ல்த‌ள‌த்தை தேர்வு செய்','புதிய‌ த‌க‌வ‌ல்த‌ள‌த்தை உருவாக்கு','வேலைக‌ளின் ப‌ட்டி','மாறிலிக‌ள் (Variables)','நிக‌ழ்நிலை (Status)','%s ப‌திப்பு: %s through PHP extension %s','ப‌ய‌னாளர்: %s','கொலேச‌ன்','அட்ட‌வ‌ணை','நீக்கு','புதுப்பி (Refresh)','வ‌ரிசை இல்லை.','%.3f s','வேற்று விசைக‌ள்','கொலேச‌ன்','ON DELETE','நெடுவ‌ரிசையின் பெய‌ர்','அள‌புரு (Parameter) பெய‌ர்','வ‌கை','நீளம்','வேண்டிய‌வ‌ற்றை ','ஏறுமான‌ம்','உள்ளிருக்கும் (Default) ம‌திப்புக‌ள் ','குறிப்பு','அடுத்த‌தை சேர்க்க‌வும்','மேலே ந‌க‌ர்த்து','கீழே நக‌ர்த்து','நீக்கு','தோற்றம்','அட்ட‌வ‌ணை','நெடுவ‌ரிசை','அக‌வ‌ரிசைக‌ள் (Index) ','அக‌வ‌ரிசையை (Index) மாற்று','மூல‌ம்','இல‌க்கு','ON UPDATE','மாற்று','வேற்று விசை சேர்க்க‌வும்','தூண்டுத‌ல்க‌ள்','தூண்டு விசையை சேர்','நிரந்தர இணைப்பு','ஏற்றும‌தி','வெளியீடு','ஃபார்ம‌ட் (Format)','ரொட்டீன் ','நிக‌ழ்ச்சிக‌ள்','த‌க‌வ‌ல்','ப‌ய‌னாள‌ரை உருவாக்கு','வின‌வ‌லில் த‌வ‌றுள்ள‌து',array('%d வ‌ரிசை','%d வ‌ரிசைக‌ள்'),array('வின‌வ‌ல் செய‌ல்ப‌டுத்த‌ப்ப‌ட்ட‌து, %d வ‌ரிசை மாற்ற‌ப்ப‌ட்ட‌து.','வின‌வ‌ல் செய‌ல்ப‌டுத்த‌ப்ப‌ட்ட‌து, %d வ‌ரிசைக‌ள் மாற்றப்ப‌ட்ட‌ன‌.'),'செய‌ல் ப‌டுத்த‌ எந்த‌ க‌ட்ட‌ளைக‌ளும் இல்லை.',array('%d வின‌வ‌ல் செய‌ல்ப‌டுத்த‌ப்ப‌ட்ட‌து.','%d வின‌வ‌ல்க‌ள் செய‌ல்ப‌டுத்த‌ப்ப‌ட்ட‌ன‌.'),'கோப்பை மேலேற்று (upload) ','கோப்புக‌ள் மேலேற்றம் (upload)முட‌க்க‌ப்ப‌ட்டுள்ள‌ன‌.','செய‌ல்ப‌டுத்து','பிழை ஏற்ப‌டின் நிற்க‌','பிழைக‌ளை ம‌ட்டும் காண்பிக்க‌வும்','செர்வ‌ரில் இருந்து','வெப் ச‌ர்வ‌ர் கோப்பு %s','கோப்பினை இய‌க்க‌வும்','வ‌ர‌லாறு','துடை (Clear)','அனைத்தையும் தொகு','உருப்படி நீக்க‌ப்ப‌ட்ட‌து.','உருப்ப‌டி புதுப்பிக்க‌ப்ப‌ட்ட‌து.','உருப்ப‌டி (Item) சேர்க்க‌ப்ப‌ட்ட‌து.','புகுத்து','சேமி','சேமித்த‌ பிற‌கு தொகுப்ப‌தை தொட‌ர‌வும்','சேமித்த‌ப் பின் அடுத்த‌தை புகுத்து','நீக்கு','அட்ட‌வ‌ணை நீக்க‌ப்ப‌ட்ட‌து.','அட்ட‌வணை மாற்ற‌ப்ப‌ட்ட‌து.','அட்ட‌வ‌ணை உருவாக்க‌ப்ப‌ட்ட‌து.','அட்ட‌வ‌ணையை உருவாக்கு','அனும‌திக்க‌ப்ப‌ட்ட‌ அதிக‌ப‌ட்ச‌ கோப்புக‌ளின் எண்ணிக்கை மீற‌ப்ப‌ட்ட‌து. த‌ய‌வு செய்து %s ம‌ற்றும் %s யை அதிக‌ரிக்க‌வும்.','அட்ட‌வ‌ணைப் பெய‌ர்','எஞ்சின்','பிரித்த‌து','பிரிவுக‌ள்','பிரிவின் பெய‌ர்','ம‌திப்புக‌ள்','அக‌வ‌ரிசைக‌ள் (Indexes) மாற்ற‌ப்பட்ட‌து.','அக‌வ‌ரிசை வ‌கை (Index Type)','நெடுவ‌ரிசை (நீள‌ம்)','பெய‌ர்','த‌க‌வ‌ல்த‌ள‌ம் நீக்க‌ப்ப‌ட்ட‌து.','த‌க‌வ‌ல்த‌ள‌ம் பெய‌ர் மாற்ற‌ப்ப‌ட்ட‌து.','த‌க‌வ‌ல்த‌ள‌ம் உருவாக்க‌ப்ப‌ட்ட‌து.','த‌க‌வ‌ல்த‌ள‌ம் மாற்ற‌ப்ப‌ட்ட‌து.','த‌க‌வ‌ல்த‌ள‌த்தை உருவாக்கு','அழை',array('ரொட்டீன்க‌ள் அழைக்க‌ப்பட்டுள்ள‌ன‌, %d வ‌ரிசை மாற்ற‌ம் அடைந்த‌து.','ரொட்டீன்க‌ள் அழைக்க‌ப்ப‌ட்டுள்ள‌ன‌, %d வ‌ரிசைக‌ள் மாற்றம் அடைந்துள்ள‌ன‌.'),'வேற்று விசை நீக்க‌ப்ப‌ட்ட‌து.','வேற்று விசை மாற்ற‌ப்ப‌ட்ட‌து.','வேற்று விசை உருவாக்க‌ப்ப‌ட்ட‌து.','இல‌க்கு நெடுவ‌ரிசையில் அக‌வ‌ரிசை (Index) ம‌ற்றும் குறிக்க‌ப்ப‌ட்ட‌ த‌க‌வல் (Referenced DATA) க‌ண்டிப்பாக‌ இருத்த‌ல் வேண்டும். மூல‌ நெடுவ‌ரிசை ம‌ற்றும் இலக்கு நெடுவ‌ரிசையின் த‌க‌வ‌ல் வ‌டிவ‌ம் (DATA TYPE) ஒன்றாக‌ இருக்க‌ வேண்டும்.','வேற்று விசை','அட்ட‌வ‌ணை இல‌க்கு','மாற்று','நெடு வ‌ரிசையை சேர்க்க‌வும்','தோற்ற‌ம் நீக்க‌ப்ப‌ட்ட‌து.','தோற்றம் மாற்றப்ப‌ட்ட‌து.','தோற்ற‌ம் உருவாக்க‌ப்ப‌ட்ட‌து.','தோற்றத்தை உருவாக்கு','நிக‌ழ்ச்சி (Event) நீக்க‌ப்ப‌ட்ட‌து.','நிக‌ழ்ச்சி (Event) மாற்றப்ப‌ட்ட‌து.','நிக‌ழ்ச்சி (Event) உருவாக்க‌‌ப்ப‌ட்ட‌து.','நிக‌ழ்ச்சியை (Event) மாற்று','நிக‌ழ்ச்சியை (Event) உருவாக்கு','தொட‌ங்கு','முடி (வு)','ஒவ்வொரு','முடிந்த‌தின் பின் பாதுகாக்க‌வும்','ரொட்டீன் நீக்க‌ப்ப‌ட்ட‌து.','ரொட்டீன் மாற்ற‌ப்ப‌ட்டது.','ரொட்டீன் உருவாக்க‌ப்ப‌ட்ட‌து.','Function மாற்று','செய‌ல்முறையை மாற்று','Function உருவாக்கு','செய்முறையை உருவாக்கு','திரும்பு வ‌கை','தூண்டு விசை நீக்க‌ப்ப‌ட்ட‌து.','தூண்டு விசை மாற்ற‌ப்ப‌ட்ட‌து.','தூண்டு விசை உருவாக்க‌ப்ப‌ட்ட‌து.','தூண்டு விசையை மாற்று','தூண்டு விசையை உருவாக்கு','நேர‌ம்','நிக‌ழ்ச்சி','ப‌யனீட்டாள‌ர் நீக்க‌ப்ப‌ட்டார்.','ப‌யனீட்டாள‌ர் மாற்றப்ப‌ட்டார்.','ப‌ய‌னீட்டாள‌ர் உருவாக்க‌ப்ப‌ட்ட‌து.','Hashed','ரொட்டீன்','அனும‌திய‌ளி','இர‌த்துச்செய்',array('%d வேலை வ‌லுவில் நிறுத்த‌ப‌ட்ட‌து.','%d வேலைக‌ள் வ‌லுவில் நிறுத்த‌ப‌ட்ட‌ன‌.'),'மொத்தம் %d ','வ‌லுவில் நிறுத்து',array('%d உருப்ப‌டி மாற்ற‌ம‌டைந்தது.','%d உருப்ப‌டிக‌ள் மாற்ற‌ம‌டைந்த‌ன‌.'),'ம‌திப்பினை மாற்ற அத‌ன் மீது இருமுறை சொடுக்க‌வும் (Double click).',array('%d வ‌ரிசை இற‌க்கும‌தி (Import) செய்ய‌ப்ப‌ட்ட‌து.','%d வ‌ரிசைக‌ள் இற‌க்கும‌தி (Import) செய்ய‌ப்ப‌ட்டன‌.'),'அட்ட‌வ‌ணையை தேர்வு செய்ய‌ முடிய‌வில்லை','தொகு','உற‌வுக‌ள் (Relations)','இந்த‌ ம‌திப்பினை மாற்ற‌, தொகுப்பு இணைப்பினை உப‌யோகிக்க‌வும்.','ப‌க்க‌ம்','க‌டைசி','முழுமையான‌ முடிவு','ந‌க‌லி (Clone)','இற‌க்கும‌தி (Import)','அட்ட‌வ‌ணை குறைக்க‌ப்ப‌ட்ட‌து (truncated).','அட்ட‌வ‌ணை ந‌க‌ர்த்த‌ப்ப‌ட்ட‌து.','அட்டவணைகள் நகலெடுக்கப் பட்டது.','அட்ட‌வ‌ணை நீக்க‌ப்ப‌ட்ட‌து.','Tables have been optimized.','அமைப்புமுறை','அட்ட‌வ‌ணைக‌ளும் பார்வைக‌ளும்','த‌க‌வ‌லை அட்ட‌வ‌ணையில் தேடு','எஞ்சின் (Engine)','த‌க‌வ‌ல் நீள‌ம்','Index நீள‌ம்','Data Free','வ‌ரிசைக‌ள்','நுணுகி ஆராய‌வும்','உக‌ப்பாக்கு (Optimize)','ப‌ரிசோதி','ப‌ழுது பார்','குறை (Truncate)','ம‌ற்ற‌ த‌க‌வ‌ல் தள‌த்திற்க்கு ந‌க‌ர்த்து','ந‌க‌ர்த்து','நகல்','கால‌ அட்ட‌வ‌ணை','குறித்த‌ நேர‌த்தில்','HH:MM:SS');break;case"bn":$U=array('আপনি কি নিশ্চিত?','নথি আপলোড সম্ভব হচ্ছে না।','সর্বাধিক নথি আপলোড আকার %sB','নথি অনুপস্থিত।','ফাঁকা','আসল','কোনো টেবিল নেই',',','ভাষা','ব্যবহার','সংখ্যা','দিন এবং সময়','স্ট্রিং','দ্বিমূল','তালিকা','প্রণালী','ধারনকারী','ব্যবহারকারীর নাম','গুপ্ত সঙ্কেত','তথ্য-সম্ভার','প্রবেশ','সর্বসময়ের জন্য প্রবেশ','তথ্য নির্বাচন করুন','গঠন','পর্যবেক্ষণ-টিকে পরিবর্তন করুন','টেবিল পরিবর্তন করা','নতুন অনুচ্ছেদ','শেষ পৃষ্ঠা','সম্পাদন',array('%d বাইট','%d বাইটসমূহ'),'নির্বাচন করুন','একত্রিত ফাংশন','মোট পরিমাণ','খুঁজুন','যত্রতত্র','বাছাই করা','অধোগামী','সীমা','পাঠ দৈর্ঘ্য','কর্ম','Full table scan','এস.কিউ.এল র্নিদেশ','মুক্ত','রক্ষা করুন','তথ্য-সম্ভার টিকে পরিবর্তন ঘটান','পরিকল্পনা','পরিকল্পনা তৈরি করুন','তথ্য-সম্ভার এর গঠন','অনুমতি','ডাম্প','প্রস্থান','তথ্য-সম্ভার','নতুন টেবিল তৈরি করা','নির্বাচন করুন','ltr','অবৈধ সি.এস.আর.এফ টোকেন','সঠিক ভাবে প্রস্থান হয়েছে।','সেসন ধারন সক্রিয় করতে হবে।','সেসনের সময় অতিবাহিত হয়েছে, পুনরায় প্রবেশ করুন','অবৈধ পরিচয়পত্র','সম্প্রসারন নেই','পি.এইচ.পি গৃহীত সম্প্রসারন(%s) নেই','আপনার লেখাটি অনেক বড়, অনুগ্রহ করে ছোট করুন অথবা %s আকার বর্ধিত করুন।','সঠিক তথ্য-সম্ভার নয়।','তথ্য-সম্ভার-সমূহকে ধংস করা হল।','তথ্য-সম্ভার নির্বাচন করুন','নতুন তথ্য-সম্ভার তৈরী করুন','প্রক্রিয়া সূচি','পরিবর্তনশীল','অবস্থা','%s সংস্করণ: %s পি.এইচ.পি সম্প্রসারন %s','প্রস্থান করেছেন : %s','একত্রীকরণ','টেবিলগুলো','বিনষ্ট','পুনরুজ্জীবিত করুন','কোনো সারি নেই।','%.3f s','বহিরাগত সহায়ক চাবি','একত্রীকরণ','বিনষ্ট - এর সময়','স্তম্ভের নাম','স্থিতিমাপের নাম','প্রকার','দৈর্ঘ্য','বিকল্প','স্বয়ংক্রিয় বর্ধিত হওয়া','প্রাথমিক মান','মন্তব্য','পরবর্তী সংজোযন','উপরে উঠুন','নিছে নামুন','অপসারণ','পর্যবেক্ষণ','টেবিল','স্তম্ব','সুচি','সুচি-টিকে পরিবর্তন করুন','উৎস','লক্ষ্য','আধুনিক করার সময়','পরির্বতন','বহিরাগত সহায়ক চাবি সংজোযন','ট্রিগার','ট্রিগার সংজোযন','স্থায়ী লিঙ্ক','রপ্তানি','উৎপাদন','বিন্যাস','নিয়মিত','ঘটনাবলী','তথ্য','নতুন ব্যবহারকারী','অনুসন্ধানে ভুল রয়েছে',array('%d সারি','%d সারি সমূহ'),array('কোয়্যারী সম্পাদন হয়েছে, %d সারি প্রভাবিত হয়েছে।','কোয়্যারী সম্পাদন হয়েছে, %d সারি প্রভাবিত হয়েছে।'),'সম্পন্ন করার জন্য কোন নির্দেশ নেই।',array('SQL-কোয়্যারী সফলভাবে সম্পন্ন হয়েছে','%d SQL-কোয়্যারীসমূহ সফলভাবে সম্পন্ন হয়েছে'),'নথি আপলোড','নথি আপলোড বন্ধ করা আছে।','সম্পন্ন','ভুল হলে থেমো','কেবল মাত্র ভুল প্রর্দশন কর','ধারনকারী হইতে','ওয়েবসার্ভার ফাইল %s','নথি দেখা','ইতিহাস','পরিষ্কার','সব সম্পাদন করা','অনুচ্ছেদ টিকে বিনষ্ট করা হল।','অনুচ্ছেদ টিকে আধুনিক করা হল।','অনুচ্ছেদ টিকে প্রবেশ করানো হল।','প্রবেশ','সংরক্ষন','সংরক্ষন এবং সম্পাদন চালিয়ে যাওয়া','সংরক্ষন এবং পরর্বতি সংযোজন','বিনষ্ট','টেবিলটিকে লুপ্ত করা হল।','টেবিলটিকে পরির্বতন করা হল।','টেবিল তৈরি করা হল।','টেবিল তৈরি করা','সর্বচ্চ সংখ্যক ব্যবহার উপযোগী স্থান অতিক্রান্ত হয়েছে, অনুগ্রহ করে %s এবং %s বাড়ান।','টেবিলটির নাম','উপায়','বিভাজন কারী','বিভাজন','বিভাজক নাম','মানগুলি','সুচি-টিকে পরিবর্তন করা হল।','সুচি প্রকার','স্তম্ভ (দৈর্ঘ্য)','নাম','তথ্য-সম্ভার টিকে ধংস করা হল।','তথ্য-সম্ভার টির নাম পরিবর্তন করা হল।','তথ্য-সম্ভারটি তৈরী করা হল।','তথ্য-সম্ভার টিতে পরিবর্তন ঘটান হল।','তথ্য-সম্ভার তৈরি করুন।','আহ্বান',array('রুটিন কল করা হয়েছে, %d টি সারি (সমূহ) প্রভাবিত হয়েছে।','রুটিন কল করা হয়েছে, %d টি সারি (সমূহ) প্রভাবিত হয়েছে।'),'বহিরাগত সহায়ক চাবি বিনষ্ট করা হল।','বহিরাগত সহায়ক চাবি পরির্বতন করা হল।','বহিরাগত সহায়ক চাবি তৈরি করা হল।','উৎস এবং লক্ষ্যের তথ্যের প্রকার একইরকম হওয়া বাঞ্চনীয়, উৎস স্তম্ভের সাথে সূচি থাকতে হবে এবং উৎস তে তথ্য থাকতে হবে।','বহিরাগত সহায়ক চাবি','লক্ষ্য টেবিল','পরির্বতন','স্তম্ভ সংজোযন','পর্যবেক্ষণ-টিকে বিনষ্ট করা হল।','পর্যবেক্ষণ-টিকে পরিবর্তন করা হল।','পর্যবেক্ষণ-টি তৈরি করা হল।','পর্যবেক্ষণ তৈরি করুন','ঘটনা লুপ্ত করা হল।','ঘটনা পরিবর্তন করা হল।','ঘটনা তৈরি করা হল।','ঘটনাবলী পরিবর্তন করা','ঘটনাবলী তৈরি করা','শুরু করা','শেষ করা','প্রত্যেকে','সফলের পর সংরক্ষিত করা','নিয়মিত কাজটিকে বিনষ্ট করা হল।','নিয়মিত কাজটিকে পরির্বতন করা হল।','নিয়মিত কাজ তৈরি করা হল।','ফাংশন পরিবর্তন করুন','পদ্ধতি পরিবর্তন করুন','ফাংশন তৈরি করুন','পদ্ধতি তৈরি করুন','প্রত্যাবর্তিত প্রকার','ট্রিগার বিনষ্ট করা হল','ট্রিগার পরির্বতন করা হল','ট্রিগার তৈরি করা হল','ট্রিগার পরির্বতন','ট্রিগার তৈরি','সময়','ঘটনা','এই ব্যবহারকারীকে মুছে দেওয়া হল।','ব্যবহারকারীকে পরিবর্ধন করা হল।','নতুন ব্যবহারকারীকে তৈরী ক্রা হল।','হ্যাশ [কুচি - কুচি করিয়া কাটা]','নিয়মিত','অনুমতি প্রদান','প্রত্যাহার',array('%d টি প্রসেস (সমূহ) বিনষ্ট করা হয়েছে।','%d টি প্রসেস (সমূহ) বিনষ্ট করা হয়েছে।'),'সর্বমোট %d','হত করা','%d টি বিষয়বস্তু প্রভাবিত হয়েছে','মানটির উপর ২ বার ক্লিক করুন।',array('%d টি সারি (সমূহ) ইমপোর্ট করা হয়েছে।','%d টি সারি (সমূহ) ইমপোর্ট করা হয়েছে।'),'টেবিল টিকে নির্বাচন করা জাছে না!','সম্পাদন','সম্পর্ক','সম্পাদন বোতামটি ব্যবহার করুন।','পৃষ্ঠা','শেষ','সম্পূর্ণ ফল','একই মত','আমদানি','টেবিল গুলিকে অগ্রভাগহীন করা হল।','টেবিলটিকে সরান হল।','টেবিলটির অনুলিপি তৈরি করা হল।','টেবিলগুলি কে লুপ্ত করা হল।','টেবিলগুলি কে সর্বোৎকৃষ্ট করা হল।','পরিকল্পনা','টেবিল এবং মতামত','টেবিলে তথ্য খুঁজুন','উপায়','তথ্যর দৈর্ঘ্য','সূচক দৈর্ঘ্য','মুক্ত তথ্য','সারি','পর্যবেক্ষন','সর্বোৎকৃষ্ট','নিক্ষন','সংশোধন','ছাঁটিয়া দেত্তয়া','অন্যত্র তথ্য-সম্ভার গমন','অন্যত্র গমন','অনুলিপি','সময়সূচি','নির্দিষ্ট সময়ে','প্রকার পরিবর্তন');break;case"ar":$U=array('هل أنت متأكد؟','من غير الممكن رفع الملف.','حجم الملف الأقصى هو %sB.','الملف غير موجود.','فارغ','الأصلي','لا توجد جداول.',',','اللغة','المستعمل','أعداد','التاريخ و الوقت','سلاسل','ثنائية','قوائم','النظام','الخادم','المستعمل','كلمة المرور','قاعدة بيانات','تسجيل الدخول','تسجيل دخول دائم','عرض البيانات','عرض التركيبة','تعديل عرض','تعديل الجدول','عنصر جديد','الصفحة السابقة','تعديل','%d بايت','إختيار','الدوال','تجميع','بحث','في اي مكان','ترتيب','تنازلي','حد','طول النص','حركة','Full table scan','إستعلام SQL','فتح','حفظ','تعديل قاعدة البيانات','تعديل المخطط','إنشاء مخطط','مخطط فاعدة البيانات','الإمتيازات','تصدير','تسجيل الخروج','قاعدة بيانات','أنشئ جدول جديد','تحديد','rtl','CSRF Token خاطئ. من فضلك أعد إرسال الإستمارة.','مع السلامة.','عليك تفعيل نظام الجلسات.','إنتهت الجلسة، من فضلك أعد تسجيل الدخول.','فشل في تسجيل الدخول.','إمتداد غير موجود','إمتدادات php المدعومة غير موجودة.','معلومات POST كبيرة جدا. قم بتقليص حجم المعلومات أو قم بزيادة قيمة %s في خيارات ال PHP.','قاعدة بيانات خاطئة.','تم حذف قواعد البيانات.','إختر قاعدة البيانات','أنشئ فاعدة بيانات','قائمة الإجراءات','متغيرات','حالة','النسخة %s : %s عن طريق إمتداد ال PHP %s','تم تسجيل الدخول بإسم %s','ترتيب','جداول','حذف','تحديث','لا توجد نتائج.','%.3f s','مفاتيح أجنبية','الترتيب','ON DELETE','إسم العمود','إسم المتغير','النوع','الطول','خيارات','تزايد تلقائي','القيمة الإفتراضية','تعليق','إضافة التالي','نقل للأعلى','نقل للأسفل','مسح','عرض','جدول','عمود','المؤشرات','تعديل المؤشرات','المصدر','الهدف','ON UPDATE','تعديل','إضافة مفتاح أجنبي','الزنادات','إضافة زناد','وصلة دائمة','تصدير','إخراج','الصيغة','الروتينات','الأحداث','معلومات','إنشاء مستخدم','هناك خطأ في الإستعلام','%d أسطر','تم تنفسذ الإستعلام, %d عدد الأسطر المعدلة.','لا توجد أوامر للتنفيذ.',array('تم تنفيذ الإستعلام %d بنجاح.','تم تنفيذ الإستعلامات %d بنجاح.'),'رفع ملف','تم إلغاء رفع الملفات.','تنفيذ','أوقف في حالة حدوث خطأ','إعرض الأخطاء فقط','من الخادم','ملف %s من خادم الويب','نفذ الملف','تاريخ','مسح','تعديل الكل','تم حذف العنصر.','تم تعديل العنصر.','تم إدراج العنصر.','إنشاء','حفظ','إحفظ و واصل التعديل','جفظ و إنشاء التالي','مسح','تم حذف الجدول.','تم تعديل الجدول.','تم إنشاء الجدول.','إنشاء جدول','لقد تجاوزت العدد الأقصى للحقول. يرجى الرفع من %s و %s.','إسم الجدول','المحرك','مقسم بواسطة','التقسيمات','إسم التقسيم','القيم','تم تعديل المؤشر.','نوع المؤشر','العمود (الطول)','الإسم','تم حذف قاعدة البيانات.','تمت إعادة تسمية فاعدة البيانات.','تم إنشاء قاعدة البيانات.','تم تعديل قاعدة البيانات.','إنشاء قاعدة بيانات','إستدعاء','تم إستدعاء الروتين, عدد الأسطر المعدلة %d.','المفتاح الأجنبي تم مسحه.','المفتاح الأجنبي تم تعديله.','المفتاح الأجنبي تم إنشاؤه.','أعمدة المصدر و الهدف يجب أن تكون بنفس النوع, يجب أن يكون هناك مؤشر في أعمدة الهدف و البيانات المرجعية يجب ان تكون موجودة.','مفتاح أجنبي','الجدول المستهدف','تعديل','أضف عمود','تم مسح العرض.','تم تعديل العرض.','تم إنشاء العرض.','إنشاء عرض','تم مسح الحدث.','تم تعديل الحدث.','تم إنشاء الحدث.','تعديل حدث','إنشاء حدث','إبدأ','إنهاء','كل','حفظ عند الإنتهاء','تم حذف الروتين.','تم تعديل الروتين.','تم إنشاء الروتين.','تعديل الدالة','تعديل الإجراء','إنشاء دالة','إنشاء إجراء','نوع العودة','تم حذف الزناد.','تم تعديل الزناد.','تم إنشاء الزناد.','تعديل زناد','إنشاء زناد','الوقت','الحدث','تم حذف المستخدم.','تم تعديل المستخدم.','تم إنشاء المستخدم.','تلبيد','روتين','موافق','إلغاء','عدد الإجراءات التي تم إيقافها %d.','%d في المجموع','إيقاف','عدد العناصر المعدلة هو %d.','أنقر نقرا مزدوجا على قيمة لتعديلها.','عدد الأسطر المستوردة هو %d.','من غير الممكن إختيار الجدول','تعديل','علاقات','إستعمل الرابط "تعديل" لتعديل هذه القيمة.','صفحة','الأخيرة','نتيجة كاملة','نسخ','إستيراد','تم قطع الجداول.','تم نقل الجداول.','تم نسخ الجداول.','تم حذف الجداول.','Tables have been optimized.','المخطط','الجداول و العروض','بحث في الجداول','المحرك','طول المعطيات.','طول المؤشر.','المساحة الحرة','الأسطر','تحليل','تحسين','فحص','إصلاح','قطع','نقل إلى قاعدة بيانات أخرى','نقل','نسخ','مواعيد','في وقت محدد','HH:MM:SS');break;case"fa":$U=array('مطمئن هستید؟','قادر به بارگذاري فايل نيستيد',' %sB حداكثر اندازه فايل','فايل وجود ندارد','خالی','اصلی','جدولی وجود ندارد',' ','زبان','استفاده','اعداد','تاریخ و زمان','رشته ها','دودویی','لیستها','سيستم','سرور','نام كاربري','كلمه عبور','پايگاه داده','ورود','','انتخاب داده','نمایش ساختار','حذف نمایش','ویرایش جدول','آیتم جدید','صفحه آخر','ویرایش',array('%d بایت','%d بایت'),'انتخاب','توابع','تجمع','جستجو','هرکجا','مرتب کردن','نزولی','محدودیت','طول متن','عملیات','Full table scan','دستور اس كيو ال','بازكردن','ذخيره','ويرايش پايگاه داده','ویرایش ساختار','ایجاد ساختار','ساختار پايگاه داده','امتيازات','خالي كردن','خروج','پايگاه داده','ایجاد جدول جدید','انتخاب','rtl','نامعتبر است. دوباره سعی کنید Token CSRF','با موفقيت خارج شديد','پشتيباني از نشست بايستي فعال گردد','نشست پايان يافته، لطفا دوباره وارد شويد','اعتبار سنجي نامعتبر','پسوند نامعتبر',' پسوند پی اچ پی در دسترس نیست (%s) تعداد','حجم داده ارسالي برزگ است. حجم داده كاهش دهيد و يا مقدار %s را در پيكربندي افزايش دهيد.','پايگاه داده نامعتبر','پايگاه دادها حذف شدند','انتخاب پايگاه داده','ایجاد پايگاه داده جديد','ليست فرآيند','متغيرها','وضعيت','نسخه %s : %s توسعه پی اچ پی %s','ورود به عنوان: %s','تطبیق','جدولها','حذف','بازيابي','سطری وجود ندارد','%.3f s','کلیدهای خارجی','تطبیق','ON DELETE','نام ستون','نام پارامتر','نوع','طول','اختیارات','افزایش خودکار','مقادیر پیش فرض','توضیح','افرودن بعدی','انتقال به بالا','انتقال به پایین','حذف','نمایش','جدول','ستون','ایندکسها','ویرایش ایندکسها','منبع','هدف','ON UPDATE','ویرایش','افزودن کلید خارجی','تریگرها','افزودن تریگر','ارتباط دائم','استخراج','خروجي','حذف','روالها','رویدادها','داده','ایجاد كاربر','خطا در كوئري',array('%d سطر','%d سطر'),'كوئري اجرا شد. %d سطر تغيير كرد.','دستوري براي اجرا وجود ندارد','%d كوئري اجرا شد','بارگذاري فايل','بارگذاري غير فعال است','اجرا','توقف در خطا','فقط نمايش خطاها','از سرور','%s فايل وب سرور','نمايش فايل','تاريخ','پاك كردن','ويرايش همه','آیتم حذف شد','آیتم بروز رسانی شد','%s آیتم درج شد','درج','ذخیره','ذخیره و ادامه ویرایش','ذخیره و درج بعدی','حذف','جدول حذف شد','جدول ویرایش شد','جدول ایجاد شد','ایجاد جدول','حداکثر مجاز فیلدهای مجاز اشباع شد. لطفا %s و %s را کاهش دهید','نام جدول','موتور','بخشبندی توسط','بخشبندیها','نام بخش','مقادیر','ایندکسها ویرایش شد','نوع ایندکس','ستون (طول)','نام','پايگاه داده حذف شد','نام پايگاه داده تغيير كرد','پايگاه داده ايجاد شد','پايگاه داده ويرايش شد','ایجاد پايگاه داده','صدا زدن',array('روال فراخوانی شد %d سطر متاثر شد','روال فراخوانی شد %d سطر متاثر شد'),'کلید خارجی حذف شد','کلید خارجی ویرایش شد','کلید خارجی ایجاد شد','داده مبدا و مقصد ستونها بایستی شبیه هم باشند','کلید خارجی','جدول هدف','تغییر','افزودن ستون','نمایش حذف شد','نمایش ویرایش شد','نمایش ایجاد شد','ایجاد نمایش','رویداد حذف شد','رویداد ویرایش شد','رویداد ایجاد شد','ویرایش رویداد','ایجاد رویداد','آغاز','پایان','همه','تکمیل حفاظت فعال است','روال حذف شد','روال ویرایش شد','روال ایجاد شد','ویرایش تابع','ویرایش زیربرنامه','ایجاد تابع','ایجاد زیربرنامه','برگرداندن نوع','تریگر حذف شد','تریگر ویرایش شد','تریگر ایجاد شد','ویرایش تریگر','ایجاد تریگر','زمان','رویداد','كاربر حذف شد','كاربر ويرايش گرديد','كاربر ايجاد شد','به هم ريخته','روتين','اعطا','لغو كردن','%d فرآيند متوقف شد',' به طور کل %d ','حذف فرآيند',array('%d آیتم متاثر شد','%d آیتم متاثر شد'),'روی مقدار دوبار کلیک کنید تا آنرا ویرایش کنید',array('%d سطر وارد شد','%d سطر وارد شد'),'قادر به انتخاب جدول نیستید','ویرایش','رابطه ها','از لینک ویرایش برای ویرایش این مقدار استفاده کنید','صفحه','آخری','همه نتایج','تکثیر','وارد کردن','جدولها بریده شدند','جدولها انتقال داده شدند','جدولها کپی شدند','جدولها حذف شدند','Tables have been optimized.','ساختار','جدولها و نمایه ها','جستجوی داده در جدول','موتور','طول داده','طول ایندکس','داده اختیاری','سطرها','تحلیل','بهینه سازی','بررسی','تعمیر','کوتاه کردن','انتقال به یک پایگاه داده دیگر','انتقال','کپی کردن','زمانبندی','زمان معین','ویرایش نوع');break;}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$error;function
__construct(){global$c;$ae=array_search("",$c->operators);if($ae!==false)unset($c->operators[$ae]);}function
dsn($wb,$Of,$Xd,$Pb='auth_error'){set_exception_handler($Pb);parent::__construct($wb,$Of,$Xd);restore_exception_handler();$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($H,$Ef=false){$I=parent::query($H);if(!$I){$Ib=$this->errorInfo();$this->error=$Ib[2];return
false;}$this->store_result($I);return$I;}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result($I=null){if(!$I)$I=$this->_result;if($I->columnCount()){$I->num_rows=$I->rowCount();return$I;}$this->affected_rows=$I->rowCount();return
true;}function
next_result(){$this->_result->_offset=0;return@$this->_result->nextRowset();}function
result($H,$l=0){$I=$this->query($H);if(!$I)return
false;$K=$I->fetch();return$K[$l];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$K=(object)$this->getColumnMeta($this->_offset++);$K->orgtable=$K->table;$K->orgname=$K->name;$K->charsetnr=(in_array("blob",(array)$K->flags)?63:0);return$K;}}}$tb=array();$tb=array("server"=>"MySQL")+$tb;if(!defined("DRIVER")){$de=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($O,$Of,$Xd){mysqli_report(MYSQLI_REPORT_OFF);list($uc,$Zd)=explode(":",$O,2);$J=@$this->real_connect(($O!=""?$uc:ini_get("mysqli.default_host")),($O.$Of!=""?$Of:ini_get("mysqli.default_user")),($O.$Of.$Xd!=""?$Xd:ini_get("mysqli.default_pw")),null,(is_numeric($Zd)?$Zd:ini_get("mysqli.default_port")),(!is_numeric($Zd)?$Zd:null));if($J){if(method_exists($this,'set_charset'))$this->set_charset("utf8");else$this->query("SET NAMES utf8");}return$J;}function
result($H,$l=0){$I=$this->query($H);if(!$I)return
false;$K=$I->fetch_array();return$K[$l];}function
quote($Ve){return"'".$this->escape_string($Ve)."'";}}}elseif(extension_loaded("mysql")&&!(ini_get("sql.safe_mode")&&extension_loaded("pdo_mysql"))){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$error,$_link,$_result;function
connect($O,$Of,$Xd){$this->_link=@mysql_connect(($O!=""?$O:ini_get("mysql.default_host")),("$O$Of"!=""?$Of:ini_get("mysql.default_user")),("$O$Of$Xd"!=""?$Xd:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset'))mysql_set_charset("utf8",$this->_link);else$this->query("SET NAMES utf8");}else$this->error=mysql_error();return(bool)$this->_link;}function
quote($Ve){return"'".mysql_real_escape_string($Ve,$this->_link)."'";}function
select_db($jb){return
mysql_select_db($jb,$this->_link);}function
query($H,$Ef=false){$I=@($Ef?mysql_unbuffered_query($H,$this->_link):mysql_query($H,$this->_link));if(!$I){$this->error=mysql_error($this->_link);return
false;}if($I===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($I);}function
multi_query($H){return$this->_result=$this->query($H);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($H,$l=0){$I=$this->query($H);if(!$I||!$I->num_rows)return
false;return
mysql_result($I->_result,0,$l);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
Min_Result($I){$this->_result=$I;$this->num_rows=mysql_num_rows($I);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$J=mysql_fetch_field($this->_result,$this->_offset++);$J->orgtable=$J->table;$J->orgname=$J->name;$J->charsetnr=($J->blob?63:0);return$J;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($O,$Of,$Xd){$this->dsn("mysql:host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$O)),$Of,$Xd);$this->query("SET NAMES utf8");return
true;}function
select_db($jb){return$this->query("USE ".idf_escape($jb));}function
query($H,$Ef=false){$this->setAttribute(1000,!$Ef);return
parent::query($H,$Ef);}}}function
idf_escape($xc){return"`".str_replace("`","``",$xc)."`";}function
table($xc){return
idf_escape($xc);}function
connect(){global$c;$g=new
Min_DB;$fb=$c->credentials();if($g->connect($fb[0],$fb[1],$fb[2])){$g->query("SET sql_quote_show_create = 1, autocommit = 1");return$g;}$J=$g->error;if(function_exists('iconv')&&!is_utf8($J)&&strlen($M=iconv("windows-1250","utf-8",$J))>strlen($J))$J=$M;return$J;}function
get_databases($cc=true){global$g;$J=&get_session("dbs");if($J===null){if($cc){restart_session();ob_flush();flush();}$J=get_vals($g->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");}return$J;}function
limit($H,$Z,$y,$td=0,$Ke=" "){return" $H$Z".($y!==null?$Ke."LIMIT $y".($td?" OFFSET $td":""):"");}function
limit1($H,$Z){return
limit($H,$Z,1);}function
db_collation($j,$e){global$g;$J=null;$cb=$g->result("SHOW CREATE DATABASE ".idf_escape($j),1);if(preg_match('~ COLLATE ([^ ]+)~',$cb,$A))$J=$A[1];elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$cb,$A))$J=$e[$A[1]][-1];return$J;}function
engines(){$J=array();foreach(get_rows("SHOW ENGINES")as$K){if(ereg("YES|DEFAULT",$K["Support"]))$J[]=$K["Engine"];}return$J;}function
logged_user(){global$g;return$g->result("SELECT USER()");}function
tables_list(){global$g;return
get_key_vals("SHOW".($g->server_info>=5?" FULL":"")." TABLES");}function
count_tables($i){$J=array();foreach($i
as$j)$J[$j]=count(get_vals("SHOW TABLES IN ".idf_escape($j)));return$J;}function
table_status($C=""){$J=array();foreach(get_rows("SHOW TABLE STATUS".($C!=""?" LIKE ".q(addcslashes($C,"%_")):""))as$K){if($K["Engine"]=="InnoDB")$K["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$K["Comment"]);if(!isset($K["Rows"]))$K["Comment"]="";if($C!="")return$K;$J[$K["Name"]]=$K;}return$J;}function
is_view($S){return!isset($S["Rows"]);}function
fk_support($S){return
eregi("InnoDB|IBMDB2I",$S["Engine"]);}function
fields($R){$J=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($R))as$K){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$K["Type"],$A);$J[$K["Field"]]=array("field"=>$K["Field"],"full_type"=>$K["Type"],"type"=>$A[1],"length"=>$A[2],"unsigned"=>ltrim($A[3].$A[4]),"default"=>($K["Default"]!=""||ereg("char",$A[1])?$K["Default"]:null),"null"=>($K["Null"]=="YES"),"auto_increment"=>($K["Extra"]=="auto_increment"),"on_update"=>(eregi('^on update (.+)',$K["Extra"],$A)?$A[1]:""),"collation"=>$K["Collation"],"privileges"=>array_flip(explode(",",$K["Privileges"])),"comment"=>$K["Comment"],"primary"=>($K["Key"]=="PRI"),);}return$J;}function
indexes($R,$h=null){$J=array();foreach(get_rows("SHOW INDEX FROM ".table($R),$h)as$K){$J[$K["Key_name"]]["type"]=($K["Key_name"]=="PRIMARY"?"PRIMARY":($K["Index_type"]=="FULLTEXT"?"FULLTEXT":($K["Non_unique"]?"INDEX":"UNIQUE")));$J[$K["Key_name"]]["columns"][]=$K["Column_name"];$J[$K["Key_name"]]["lengths"][]=$K["Sub_part"];}return$J;}function
foreign_keys($R){global$g,$yd;static$F='`(?:[^`]|``)+`';$J=array();$db=$g->result("SHOW CREATE TABLE ".table($R),1);if($db){preg_match_all("~CONSTRAINT ($F) FOREIGN KEY \\(((?:$F,? ?)+)\\) REFERENCES ($F)(?:\\.($F))? \\(((?:$F,? ?)+)\\)(?: ON DELETE ($yd))?(?: ON UPDATE ($yd))?~",$db,$Yc,PREG_SET_ORDER);foreach($Yc
as$A){preg_match_all("~$F~",$A[2],$Oe);preg_match_all("~$F~",$A[5],$lf);$J[idf_unescape($A[1])]=array("db"=>idf_unescape($A[4]!=""?$A[3]:$A[4]),"table"=>idf_unescape($A[4]!=""?$A[4]:$A[3]),"source"=>array_map('idf_unescape',$Oe[0]),"target"=>array_map('idf_unescape',$lf[0]),"on_delete"=>($A[6]?$A[6]:"RESTRICT"),"on_update"=>($A[7]?$A[7]:"RESTRICT"),);}}return$J;}function
view($C){global$g;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$g->result("SHOW CREATE VIEW ".table($C),1)));}function
collations(){$J=array();foreach(get_rows("SHOW COLLATION")as$K){if($K["Default"])$J[$K["Charset"]][-1]=$K["Collation"];else$J[$K["Charset"]][]=$K["Collation"];}ksort($J);foreach($J
as$x=>$X)asort($J[$x]);return$J;}function
information_schema($j){global$g;return($g->server_info>=5&&$j=="information_schema");}function
error(){global$g;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$g->error));}function
error_line(){global$g;if(ereg(' at line ([0-9]+)$',$g->error,$we))return$we[1]-1;}function
exact_value($X){return
q($X)." COLLATE utf8_bin";}function
create_database($j,$Oa){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($j).($Oa?" COLLATE ".q($Oa):""));}function
drop_databases($i){set_session("dbs",null);return
apply_queries("DROP DATABASE",$i,'idf_escape');}function
rename_database($C,$Oa){if(create_database($C,$Oa)){$xe=array();foreach(tables_list()as$R=>$V)$xe[]=table($R)." TO ".idf_escape($C).".".table($R);if(!$xe||queries("RENAME TABLE ".implode(", ",$xe))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$wa=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$t){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$t["columns"],true)){$wa="";break;}if($t["type"]=="PRIMARY")$wa=" UNIQUE";}}return" AUTO_INCREMENT$wa";}function
alter_table($R,$C,$m,$dc,$Ta,$Fb,$Oa,$va,$Ud){$ra=array();foreach($m
as$l)$ra[]=($l[1]?($R!=""?($l[0]!=""?"CHANGE ".idf_escape($l[0]):"ADD"):" ")." ".implode($l[1]).($R!=""?" $l[2]":""):"DROP ".idf_escape($l[0]));$ra=array_merge($ra,$dc);$Se="COMMENT=".q($Ta).($Fb?" ENGINE=".q($Fb):"").($Oa?" COLLATE ".q($Oa):"").($va!=""?" AUTO_INCREMENT=$va":"").$Ud;if($R=="")return
queries("CREATE TABLE ".table($C)." (\n".implode(",\n",$ra)."\n) $Se");if($R!=$C)$ra[]="RENAME TO ".table($C);$ra[]=$Se;return
queries("ALTER TABLE ".table($R)."\n".implode(",\n",$ra));}function
alter_indexes($R,$ra){foreach($ra
as$x=>$X)$ra[$x]=($X[2]=="DROP"?"\nDROP INDEX ".idf_escape($X[1]):"\nADD $X[0] ".($X[0]=="PRIMARY"?"KEY ":"").($X[1]!=""?idf_escape($X[1])." ":"").$X[2]);return
queries("ALTER TABLE ".table($R).implode(",",$ra));}function
truncate_tables($if){return
apply_queries("TRUNCATE TABLE",$if);}function
drop_views($Sf){return
queries("DROP VIEW ".implode(", ",array_map('table',$Sf)));}function
drop_tables($if){return
queries("DROP TABLE ".implode(", ",array_map('table',$if)));}function
move_tables($if,$Sf,$lf){$xe=array();foreach(array_merge($if,$Sf)as$R)$xe[]=table($R)." TO ".idf_escape($lf).".".table($R);return
queries("RENAME TABLE ".implode(", ",$xe));}function
copy_tables($if,$Sf,$lf){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($if
as$R){$C=($lf==DB?table("copy_$R"):idf_escape($lf).".".table($R));if(!queries("DROP TABLE IF EXISTS $C")||!queries("CREATE TABLE $C LIKE ".table($R))||!queries("INSERT INTO $C SELECT * FROM ".table($R)))return
false;}foreach($Sf
as$R){$C=($lf==DB?table("copy_$R"):idf_escape($lf).".".table($R));$Rf=view($R);if(!queries("DROP VIEW IF EXISTS $C")||!queries("CREATE VIEW $C AS $Rf[select]"))return
false;}return
true;}function
trigger($C){if($C=="")return
array();$L=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($C));return
reset($L);}function
triggers($R){$J=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_")))as$K)$J[$K["Trigger"]]=array($K["Timing"],$K["Event"]);return$J;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($C,$V){global$g,$Hb,$Bc,$Df;$pa=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$Cf="((".implode("|",array_merge(array_keys($Df),$pa)).")(?:\\s*\\(((?:[^'\")]*|$Hb)+)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$F="\\s*(".($V=="FUNCTION"?"":$Bc).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$Cf";$cb=$g->result("SHOW CREATE $V ".idf_escape($C),2);preg_match("~\\(((?:$F\\s*,?)*)\\)\\s*".($V=="FUNCTION"?"RETURNS\\s+$Cf\\s+":"")."(.*)~is",$cb,$A);$m=array();preg_match_all("~$F\\s*,?~is",$A[1],$Yc,PREG_SET_ORDER);foreach($Yc
as$Pd){$C=str_replace("``","`",$Pd[2]).$Pd[3];$m[]=array("field"=>$C,"type"=>strtolower($Pd[5]),"length"=>preg_replace_callback("~$Hb~s",'normalize_enum',$Pd[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$Pd[8] $Pd[7]"))),"full_type"=>$Pd[4],"inout"=>strtoupper($Pd[1]),"collation"=>strtolower($Pd[9]),);}if($V!="FUNCTION")return
array("fields"=>$m,"definition"=>$A[11]);return
array("fields"=>$m,"returns"=>array("type"=>$A[12],"length"=>$A[13],"unsigned"=>$A[15],"collation"=>$A[16]),"definition"=>$A[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT * FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
begin(){return
queries("BEGIN");}function
insert_into($R,$P){return
queries("INSERT INTO ".table($R)." (".implode(", ",array_keys($P)).")\nVALUES (".implode(", ",$P).")");}function
insert_update($R,$P,$ge){foreach($P
as$x=>$X)$P[$x]="$x = $X";$Lf=implode(", ",$P);return
queries("INSERT INTO ".table($R)." SET $Lf ON DUPLICATE KEY UPDATE $Lf");}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ID()");}function
explain($g,$H){return$g->query("EXPLAIN $H");}function
found_rows($S,$Z){return($Z||$S["Engine"]!="InnoDB"?null:$S["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Ge){return
true;}function
create_sql($R,$va){global$g;$J=$g->result("SHOW CREATE TABLE ".table($R),1);if(!$va)$J=preg_replace('~ AUTO_INCREMENT=\\d+~','',$J);return$J;}function
truncate_sql($R){return"TRUNCATE ".table($R);}function
use_sql($jb){return"USE ".idf_escape($jb);}function
trigger_sql($R,$Q){$J="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_")),null,"-- ")as$K)$J.="\n".($Q=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($K["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($K["Trigger"])." $K[Timing] $K[Event] ON ".table($K["Table"])." FOR EACH ROW\n$K[Statement];;\n";return$J;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
support($Xb){global$g;return!ereg("scheme|sequence|type".($g->server_info<5.1?"|event|partitioning".($g->server_info<5?"|view|routine|trigger":""):""),$Xb);}$w="sql";$Df=array();$We=array();foreach(array(lang(10)=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),lang(11)=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),lang(12)=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),lang(13)=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),lang(14)=>array("enum"=>65535,"set"=>64),)as$x=>$X){$Df+=$X;$We[$x]=array_keys($X);}$Kf=array("unsigned","zerofill","unsigned zerofill");$Bd=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","");$lc=array("char_length","date","from_unixtime","hex","lower","round","sec_to_time","time_to_sec","upper");$pc=array("avg","count","count distinct","group_concat","max","min","sum");$zb=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1/hex","date|time"=>"now",),array("int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$fa="3.4.0-dev";class
Adminer{var$operators;function
name(){return"<a href='http://www.adminer.org/' id='h1'>Adminer</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_session("pwds"));}function
permanentLogin(){return
password_file();}function
database(){return
DB;}function
databases($cc=true){return
get_databases($cc);}function
headers(){return
true;}function
head(){return
true;}function
loginForm(){global$tb;echo'<table cellspacing="0">
<tr><th>',lang(15),'<td>',html_select("auth[driver]",$tb,DRIVER,"loginDriver(this);"),'<tr><th>',lang(16),'<td><input name="auth[server]" value="',h(SERVER),'" title="hostname[:port]">
<tr><th>',lang(17),'<td><input id="username" name="auth[username]" value="',h($_GET["username"]),'">
<tr><th>',lang(18),'<td><input type="password" name="auth[password]">
<tr><th>',lang(19),'<td><input name="auth[db]" value="',h($_GET["db"]);?>">
</table>
<script type="text/javascript">
var username = document.getElementById('username');
username.focus();
username.form['auth[driver]'].onchange();
</script>
<?php

echo"<p><input type='submit' value='".lang(20)."'>\n",checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],lang(21))."\n";}function
login($Wc,$Xd){return
true;}function
tableName($df){return
h($df["Name"]);}function
fieldName($l,$Ed=0){return'<span title="'.h($l["full_type"]).'">'.h($l["field"]).'</span>';}function
selectLinks($df,$P=""){echo'<p class="tabs">';$Vc=array("select"=>lang(22),"table"=>lang(23));if(is_view($df))$Vc["view"]=lang(24);else$Vc["create"]=lang(25);if($P!==null)$Vc["edit"]=lang(26);foreach($Vc
as$x=>$X)echo" <a href='".h(ME)."$x=".urlencode($df["Name"]).($x=="edit"?$P:"")."'".bold(isset($_GET[$x])).">$X</a>";echo"\n";}function
foreignKeys($R){return
foreign_keys($R);}function
backwardKeys($R,$cf){return
array();}function
backwardKeysPrint($ya,$K){}function
selectQuery($H){global$w;return"<p><a href='".h(remove_from_uri("page"))."&amp;page=last' title='".lang(27)."'>&gt;&gt;</a> <code class='jush-$w'>".h(str_replace("\n"," ",$H))."</code> <a href='".h(ME)."sql=".urlencode($H)."'>".lang(28)."</a></p>\n";}function
rowDescription($R){return"";}function
rowDescriptions($L,$ec){return$L;}function
selectVal($X,$z,$l){$J=($X===null?"<i>NULL</i>":(ereg("char|binary",$l["type"])&&!ereg("var",$l["type"])?"<code>$X</code>":$X));if(ereg('blob|bytea|raw|file',$l["type"])&&!is_utf8($X))$J=lang(29,strlen($X));return($z?"<a href='$z'>$J</a>":$J);}function
editVal($X,$l){return(ereg("binary",$l["type"])?reset(unpack("H*",$X)):$X);}function
selectColumnsPrint($N,$f){global$lc,$pc;print_fieldset("select",lang(30),$N);$r=0;$kc=array(lang(31)=>$lc,lang(32)=>$pc);foreach($N
as$x=>$X){$X=$_GET["columns"][$x];echo"<div>".html_select("columns[$r][fun]",array(-1=>"")+$kc,$X["fun"]),"(<select name='columns[$r][col]'><option>".optionlist($f,$X["col"],true)."</select>)</div>\n";$r++;}echo"<div>".html_select("columns[$r][fun]",array(-1=>"")+$kc,"","this.nextSibling.nextSibling.onchange();"),"(<select name='columns[$r][col]' onchange='selectAddRow(this);'><option>".optionlist($f,null,true)."</select>)</div>\n","</div></fieldset>\n";}function
selectSearchPrint($Z,$f,$u){print_fieldset("search",lang(33),$Z);foreach($u
as$r=>$t){if($t["type"]=="FULLTEXT"){echo"(<i>".implode("</i>, <i>",array_map('h',$t["columns"]))."</i>) AGAINST"," <input name='fulltext[$r]' value='".h($_GET["fulltext"][$r])."' onchange='selectFieldChange(this.form);'>",checkbox("boolean[$r]",1,isset($_GET["boolean"][$r]),"BOOL"),"<br>\n";}}$_GET["where"]=(array)$_GET["where"];reset($_GET["where"]);$Fa="this.nextSibling.onchange();";for($r=0;$r<=count($_GET["where"]);$r++){list(,$X)=each($_GET["where"]);if(!$X||("$X[col]$X[val]"!=""&&in_array($X["op"],$this->operators))){echo"<div><select name='where[$r][col]' onchange='$Fa'><option value=''>(".lang(34).")".optionlist($f,$X["col"],true)."</select>",html_select("where[$r][op]",$this->operators,$X["op"],$Fa),"<input name='where[$r][val]' value='".h($X["val"])."' onchange='".($X?"selectFieldChange(this.form)":"selectAddRow(this)").";'></div>\n";}}echo"</div></fieldset>\n";}function
selectOrderPrint($Ed,$f,$u){print_fieldset("sort",lang(35),$Ed);$r=0;foreach((array)$_GET["order"]as$x=>$X){if(isset($f[$X])){echo"<div><select name='order[$r]' onchange='selectFieldChange(this.form);'><option>".optionlist($f,$X,true)."</select>",checkbox("desc[$r]",1,isset($_GET["desc"][$x]),lang(36))."</div>\n";$r++;}}echo"<div><select name='order[$r]' onchange='selectAddRow(this);'><option>".optionlist($f,null,true)."</select>","<label><input type='checkbox' name='desc[$r]' value='1'>".lang(36)."</label></div>\n";echo"</div></fieldset>\n";}function
selectLimitPrint($y){echo"<fieldset><legend>".lang(37)."</legend><div>";echo"<input name='limit' size='3' value='".h($y)."'>","</div></fieldset>\n";}function
selectLengthPrint($of){if($of!==null){echo"<fieldset><legend>".lang(38)."</legend><div>",'<input name="text_length" size="3" value="'.h($of).'">',"</div></fieldset>\n";}}function
selectActionPrint($u){echo"<fieldset><legend>".lang(39)."</legend><div>","<input type='submit' value='".lang(30)."'>"," <span id='noindex' title='".lang(40)."'></span>","<script type='text/javascript'>\n","var indexColumns = ";$f=array();foreach($u
as$t){if($t["type"]!="FULLTEXT")$f[reset($t["columns"])]=1;}$f[""]=1;foreach($f
as$x=>$X)json_row($x);echo";\n","selectFieldChange(document.getElementById('form'));\n","</script>\n","</div></fieldset>\n";}function
selectCommandPrint(){return!information_schema(DB);}function
selectImportPrint(){return
true;}function
selectEmailPrint($Bb,$f){}function
selectColumnsProcess($f,$u){global$lc,$pc;$N=array();$nc=array();foreach((array)$_GET["columns"]as$x=>$X){if($X["fun"]=="count"||(isset($f[$X["col"]])&&(!$X["fun"]||in_array($X["fun"],$lc)||in_array($X["fun"],$pc)))){$N[$x]=apply_sql_function($X["fun"],(isset($f[$X["col"]])?idf_escape($X["col"]):"*"));if(!in_array($X["fun"],$pc))$nc[]=$N[$x];}}return
array($N,$nc);}function
selectSearchProcess($m,$u){global$w;$J=array();foreach($u
as$r=>$t){if($t["type"]=="FULLTEXT"&&$_GET["fulltext"][$r]!="")$J[]="MATCH (".implode(", ",array_map('idf_escape',$t["columns"])).") AGAINST (".q($_GET["fulltext"][$r]).(isset($_GET["boolean"][$r])?" IN BOOLEAN MODE":"").")";}foreach((array)$_GET["where"]as$X){if("$X[col]$X[val]"!=""&&in_array($X["op"],$this->operators)){$Wa=" $X[op]";if(ereg('IN$',$X["op"])){$zc=process_length($X["val"]);$Wa.=" (".($zc!=""?$zc:"NULL").")";}elseif(!$X["op"])$Wa.=$X["val"];elseif($X["op"]=="LIKE %%")$Wa=" LIKE ".$this->processInput($m[$X["col"]],"%$X[val]%");elseif(!ereg('NULL$',$X["op"]))$Wa.=" ".$this->processInput($m[$X["col"]],$X["val"]);if($X["col"]!="")$J[]=idf_escape($X["col"]).$Wa;else{$Pa=array();foreach($m
as$C=>$l){if(is_numeric($X["val"])||!ereg('int|float|double|decimal',$l["type"])){$C=idf_escape($C);$Pa[]=($w=="sql"&&ereg('char|text|enum|set',$l["type"])&&!ereg('^utf8',$l["collation"])?"CONVERT($C USING utf8)":$C);}}$J[]=($Pa?"(".implode("$Wa OR ",$Pa)."$Wa)":"0");}}}return$J;}function
selectOrderProcess($m,$u){$J=array();foreach((array)$_GET["order"]as$x=>$X){if(isset($m[$X])||preg_match('~^((COUNT\\(DISTINCT |[A-Z0-9_]+\\()(`(?:[^`]|``)+`|"(?:[^"]|"")+")\\)|COUNT\\(\\*\\))$~',$X))$J[]=(isset($m[$X])?idf_escape($X):$X).(isset($_GET["desc"][$x])?" DESC":"");}return$J;}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"30");}function
selectLengthProcess(){return(isset($_GET["text_length"])?$_GET["text_length"]:"100");}function
selectEmailProcess($Z,$ec){return
false;}function
messageQuery($H){global$w;static$bb=0;restart_session();$s="sql-".($bb++);$sc=&get_session("queries");if(strlen($H)>1e6)$H=ereg_replace('[\x80-\xFF]+$','',substr($H,0,1e6))."\n...";$sc[$_GET["db"]][]=array($H,time());return" <span class='time'>".@date("H:i:s")."</span> <a href='#$s' onclick=\"return !toggle('$s');\">".lang(41)."</a><div id='$s' class='hidden'><pre><code class='jush-$w'>".shorten_utf8($H,1000).'</code></pre><p><a href="'.h(str_replace("db=".urlencode(DB),"db=".urlencode($_GET["db"]),ME).'sql=&history='.(count($sc[$_GET["db"]])-1)).'">'.lang(28).'</a></div>';}function
editFunctions($l){global$zb;$J=($l["null"]?"NULL/":"");foreach($zb
as$x=>$lc){if(!$x||(!isset($_GET["call"])&&(isset($_GET["select"])||where($_GET)))){foreach($lc
as$F=>$X){if(!$F||ereg($F,$l["type"]))$J.="/$X";}if($x&&!ereg('set|blob|bytea|raw|file',$l["type"]))$J.="/=";}}return
explode("/",$J);}function
editInput($R,$l,$ua,$Y){if($l["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$ua value='-1' checked><i>".lang(5)."</i></label> ":"").($l["null"]?"<label><input type='radio'$ua value=''".($Y!==null||isset($_GET["select"])?"":" checked")."><i>NULL</i></label> ":"").enum_input("radio",$ua,$l,$Y,0);return"";}function
processInput($l,$Y,$p=""){if($p=="=")return$Y;$C=$l["field"];$J=($l["type"]=="bit"&&ereg("^([0-9]+|b'[0-1]+')\$",$Y)?$Y:q($Y));if(ereg('^(now|getdate|uuid)$',$p))$J="$p()";elseif(ereg('^current_(date|timestamp)$',$p))$J=$p;elseif(ereg('^([+-]|\\|\\|)$',$p))$J=idf_escape($C)." $p $J";elseif(ereg('^[+-] interval$',$p))$J=idf_escape($C)." $p ".(preg_match("~^(\\d+|'[0-9.: -]') [A-Z_]+$~i",$Y)?$Y:$J);elseif(ereg('^(addtime|subtime|concat)$',$p))$J="$p(".idf_escape($C).", $J)";elseif(ereg('^(md5|sha1|password|encrypt|hex)$',$p))$J="$p($J)";if(ereg("binary",$l["type"]))$J="unhex($J)";return$J;}function
dumpOutput(){$J=array('text'=>lang(42),'file'=>lang(43));if(function_exists('gzencode'))$J['gz']='gzip';if(function_exists('bzcompress'))$J['bz2']='bzip2';return$J;}function
dumpFormat(){return
array('sql'=>'SQL','csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpTable($R,$Q,$Gc=false){if($_POST["format"]!="sql"){echo"\xef\xbb\xbf";if($Q)dump_csv(array_keys(fields($R)));}elseif($Q){$cb=create_sql($R,$_POST["auto_increment"]);if($cb){if($Q=="DROP+CREATE")echo"DROP ".($Gc?"VIEW":"TABLE")." IF EXISTS ".table($R).";\n";if($Gc)$cb=preg_replace('~^([A-Z =]+) DEFINER=`'.preg_replace('~@(.*)~','`@`(%|\\1)',logged_user()).'`~','\\1',$cb);echo($Q!="CREATE+ALTER"?$cb:($Gc?substr_replace($cb," OR REPLACE",6,0):substr_replace($cb," IF NOT EXISTS",12,0))).";\n\n";}if($Q=="CREATE+ALTER"&&!$Gc){$H="SELECT COLUMN_NAME, COLUMN_DEFAULT, IS_NULLABLE, COLLATION_NAME, COLUMN_TYPE, EXTRA, COLUMN_COMMENT FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = ".q($R)." ORDER BY ORDINAL_POSITION";echo"DELIMITER ;;
CREATE PROCEDURE adminer_alter (INOUT alter_command text) BEGIN
	DECLARE _column_name, _collation_name, after varchar(64) DEFAULT '';
	DECLARE _column_type, _column_default text;
	DECLARE _is_nullable char(3);
	DECLARE _extra varchar(30);
	DECLARE _column_comment varchar(255);
	DECLARE done, set_after bool DEFAULT 0;
	DECLARE add_columns text DEFAULT '";$m=array();$oa="";foreach(get_rows($H)as$K){$mb=$K["COLUMN_DEFAULT"];$K["default"]=($mb!==null?q($mb):"NULL");$K["after"]=q($oa);$K["alter"]=escape_string(idf_escape($K["COLUMN_NAME"])." $K[COLUMN_TYPE]".($K["COLLATION_NAME"]?" COLLATE $K[COLLATION_NAME]":"").($mb!==null?" DEFAULT ".($mb=="CURRENT_TIMESTAMP"?$mb:$K["default"]):"").($K["IS_NULLABLE"]=="YES"?"":" NOT NULL").($K["EXTRA"]?" $K[EXTRA]":"").($K["COLUMN_COMMENT"]?" COMMENT ".q($K["COLUMN_COMMENT"]):"").($oa?" AFTER ".idf_escape($oa):" FIRST"));echo", ADD $K[alter]";$m[]=$K;$oa=$K["COLUMN_NAME"];}echo"';
	DECLARE columns CURSOR FOR $H;
	DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = 1;
	SET @alter_table = '';
	OPEN columns;
	REPEAT
		FETCH columns INTO _column_name, _column_default, _is_nullable, _collation_name, _column_type, _extra, _column_comment;
		IF NOT done THEN
			SET set_after = 1;
			CASE _column_name";foreach($m
as$K)echo"
				WHEN ".q($K["COLUMN_NAME"])." THEN
					SET add_columns = REPLACE(add_columns, ', ADD $K[alter]', IF(
						_column_default <=> $K[default] AND _is_nullable = '$K[IS_NULLABLE]' AND _collation_name <=> ".(isset($K["COLLATION_NAME"])?"'$K[COLLATION_NAME]'":"NULL")." AND _column_type = ".q($K["COLUMN_TYPE"])." AND _extra = '$K[EXTRA]' AND _column_comment = ".q($K["COLUMN_COMMENT"])." AND after = $K[after]
					, '', ', MODIFY $K[alter]'));";echo"
				ELSE
					SET @alter_table = CONCAT(@alter_table, ', DROP ', _column_name);
					SET set_after = 0;
			END CASE;
			IF set_after THEN
				SET after = _column_name;
			END IF;
		END IF;
	UNTIL done END REPEAT;
	CLOSE columns;
	IF @alter_table != '' OR add_columns != '' THEN
		SET alter_command = CONCAT(alter_command, 'ALTER TABLE ".table($R)."', SUBSTR(CONCAT(add_columns, @alter_table), 2), ';\\n');
	END IF;
END;;
DELIMITER ;
CALL adminer_alter(@adminer_alter);
DROP PROCEDURE adminer_alter;

";}}}function
dumpData($R,$Q,$H){global$g,$w;$ad=($w=="sqlite"?0:1048576);if($Q){if($_POST["format"]=="sql"&&$Q=="TRUNCATE+INSERT")echo
truncate_sql($R).";\n";if($_POST["format"]=="sql")$m=fields($R);$I=$g->query($H,1);if($I){$Dc="";$Da="";while($K=$I->fetch_assoc()){if($_POST["format"]!="sql"){if($Q=="table"){dump_csv(array_keys($K));$Q="INSERT";}dump_csv($K);}else{if(!$Dc)$Dc="INSERT INTO ".table($R)." (".implode(", ",array_map('idf_escape',array_keys($K))).") VALUES";foreach($K
as$x=>$X)$K[$x]=($X!==null?(ereg('int|float|double|decimal|bit',$m[$x]["type"])?$X:q($X)):"NULL");$M=implode(",\t",$K);if($Q=="INSERT+UPDATE"){$P=array();foreach($K
as$x=>$X)$P[]=idf_escape($x)." = $X";echo"$Dc ($M) ON DUPLICATE KEY UPDATE ".implode(", ",$P).";\n";}else{$M=($ad?"\n":" ")."($M)";if(!$Da)$Da=$Dc.$M;elseif(strlen($Da)+4+strlen($M)<$ad)$Da.=",$M";else{echo"$Da;\n";$Da=$Dc.$M;}}}}if($_POST["format"]=="sql"&&$Q!="INSERT+UPDATE"&&$Da){$Da.=";\n";echo$Da;}}elseif($_POST["format"]=="sql")echo"-- ".str_replace("\n"," ",$g->error)."\n";}}function
dumpHeaders($wc,$md=false){$Nd=$_POST["output"];$Ub=($_POST["format"]=="sql"?"sql":($md?"tar":"csv"));header("Content-Type: ".($Nd=="bz2"?"application/x-bzip":($Nd=="gz"?"application/x-gzip":($Ub=="tar"?"application/x-tar":($Ub=="sql"||$Nd!="file"?"text/plain":"text/csv")."; charset=utf-8"))));if($Nd=="bz2")ob_start('bzcompress',1e6);if($Nd=="gz")ob_start('gzencode',1e6);return$Ub;}function
homepage(){echo'<p>'.($_GET["ns"]==""?'<a href="'.h(ME).'database=">'.lang(44)."</a>\n":""),(support("scheme")?"<a href='".h(ME)."scheme='>".($_GET["ns"]!=""?lang(45):lang(46))."</a>\n":""),($_GET["ns"]!==""?'<a href="'.h(ME).'schema=">'.lang(47)."</a>\n":""),(support("privileges")?"<a href='".h(ME)."privileges='>".lang(48)."</a>\n":"");return
true;}function
navigation($ld){global$fa,$g,$T,$w,$tb;echo'<h1>
',$this->name(),' <span class="version">',$fa,'</span>
<a href="http://www.adminer.org/#download" id="version">',(version_compare($fa,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($ld=="auth"){$bc=true;foreach((array)$_SESSION["pwds"]as$sb=>$Me){foreach($Me
as$O=>$Pf){foreach($Pf
as$Of=>$Xd){if($Xd!==null){if($bc){echo"<p>\n";$bc=false;}echo"<a href='".h(auth_url($sb,$O,$Of))."'>($tb[$sb]) ".h($Of.($O!=""?"@$O":""))."</a><br>\n";}}}}}else{$i=$this->databases();echo'<form action="" method="post">
<p class="logout">
';if(DB==""||!$ld){echo"<a href='".h(ME)."sql='".bold(isset($_GET["sql"])).">".lang(41)."</a>\n";if(support("dump"))echo"<a href='".h(ME)."dump=".urlencode(isset($_GET["table"])?$_GET["table"]:$_GET["select"])."' id='dump'".bold(isset($_GET["dump"])).">".lang(49)."</a>\n";}echo'<input type="submit" name="logout" value="',lang(50),'">
<input type="hidden" name="token" value="',$T,'">
</p>
</form>
<form action="">
<p>
';hidden_fields_get();echo($i?html_select("db",array(""=>"(".lang(51).")")+$i,DB,"this.form.submit();"):'<input name="db" value="'.h(DB).'">'),'<input type="submit" value="',lang(9),'"',($i?" class='hidden'":""),'>
';if($ld!="db"&&DB!=""&&$g->select_db(DB)){if($_GET["ns"]!==""&&!$ld){echo'<p><a href="'.h(ME).'create="'.bold($_GET["create"]==="").">".lang(52)."</a>\n";$if=tables_list();if(!$if)echo"<p class='message'>".lang(6)."\n";else{$this->tablesPrint($if);$Vc=array();foreach($if
as$R=>$V)$Vc[]=preg_quote($R,'/');echo"<script type='text/javascript'>\n","var jushLinks = { $w: [ '".js_escape(ME)."table=\$&', /\\b(".implode("|",$Vc).")\\b/g ] };\n";foreach(array("bac","bra","sqlite_quo","mssql_bra")as$X)echo"jushLinks.$X = jushLinks.$w;\n";echo"</script>\n";}}}echo(isset($_GET["sql"])?'<input type="hidden" name="sql" value="">':(isset($_GET["schema"])?'<input type="hidden" name="schema" value="">':(isset($_GET["dump"])?'<input type="hidden" name="dump" value="">':""))),"</p></form>\n";}}function
tablesPrint($if){echo"<p id='tables'>\n";foreach($if
as$R=>$V){echo'<a href="'.h(ME).'select='.urlencode($R).'"'.bold($_GET["select"]==$R).">".lang(53)."</a> ",'<a href="'.h(ME).'table='.urlencode($R).'"'.bold($_GET["table"]==$R)." title='".lang(23)."'>".$this->tableName(array("Name"=>$R))."</a><br>\n";}}}$c=(function_exists('adminer_object')?adminer_object():new
Adminer);if($c->operators===null)$c->operators=$Bd;function
page_header($rf,$k="",$Ca=array(),$sf="",$rc=""){global$a,$c,$g,$tb;header("Content-Type: text/html; charset=utf-8");if($c->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}$tf=$rf.($sf!=""?": ".h($sf):"");$uf=strip_tags($tf.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$c->name());echo'<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="',$a,'" dir="',lang(54),'">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$uf,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=3.4.0-dev",'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=3.4.0-dev",'"></script>
';if($c->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=3.4.0-dev",'" id="favicon">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo$rc,'
<body class="',lang(54),' nojs" onkeydown="bodyKeydown(event);" onload="bodyLoad(\'',(is_object($g)?substr($g->server_info,0,3):""),'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion();"),'">
<script type="text/javascript">
document.body.className = document.body.className.replace(/ nojs/, \' js\');
</script>

<div id="content">
';if($Ca!==null){$z=substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($z?$z:".").'">'.$tb[DRIVER].'</a> &raquo; ';$z=substr(preg_replace('~(db|ns)=[^&]*&~','',ME),0,-1);$O=(SERVER!=""?h(SERVER):lang(16));if($Ca===false)echo"$O\n";else{echo"<a href='".($z?h($z):".")."' accesskey='1' title='Alt+Shift+1'>$O</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Ca)))echo'<a href="'.h($z."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';if(is_array($Ca)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';foreach($Ca
as$x=>$X){$ob=(is_array($X)?$X[1]:$X);if($ob!="")echo'<a href="'.h(ME."$x=").urlencode(is_array($X)?$X[0]:$X).'">'.h($ob).'</a> &raquo; ';}}echo"$rf\n";}}echo"<h2>$tf</h2>\n";restart_session();$Mf=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$jd=$_SESSION["messages"][$Mf];if($jd){echo"<div class='message'>".implode("</div>\n<div class='message'>",$jd)."</div>\n";unset($_SESSION["messages"][$Mf]);}$i=&get_session("dbs");if(DB!=""&&$i&&!in_array(DB,$i,true))$i=null;if($k)echo"<div class='error'>$k</div>\n";define("PAGE_HEADER",1);}function
page_footer($ld=""){global$c;echo'</div>

';switch_lang();echo'<div id="menu">
';$c->navigation($ld);echo'</div>
';}function
int32($B){while($B>=2147483648)$B-=4294967296;while($B<=-2147483649)$B+=4294967296;return(int)$B;}function
long2str($W,$Uf){$M='';foreach($W
as$X)$M.=pack('V',$X);if($Uf)return
substr($M,0,end($W));return$M;}function
str2long($M,$Uf){$W=array_values(unpack('V*',str_pad($M,4*ceil(strlen($M)/4),"\0")));if($Uf)$W[]=strlen($M);return$W;}function
xxtea_mx($Yf,$Xf,$af,$Ic){return
int32((($Yf>>5&0x7FFFFFF)^$Xf<<2)+(($Xf>>3&0x1FFFFFFF)^$Yf<<4))^int32(($af^$Xf)+($Ic^$Yf));}function
encrypt_string($Ue,$x){if($Ue=="")return"";$x=array_values(unpack("V*",pack("H*",md5($x))));$W=str2long($Ue,true);$B=count($W)-1;$Yf=$W[$B];$Xf=$W[0];$G=floor(6+52/($B+1));$af=0;while($G-->0){$af=int32($af+0x9E3779B9);$yb=$af>>2&3;for($Od=0;$Od<$B;$Od++){$Xf=$W[$Od+1];$nd=xxtea_mx($Yf,$Xf,$af,$x[$Od&3^$yb]);$Yf=int32($W[$Od]+$nd);$W[$Od]=$Yf;}$Xf=$W[0];$nd=xxtea_mx($Yf,$Xf,$af,$x[$Od&3^$yb]);$Yf=int32($W[$B]+$nd);$W[$B]=$Yf;}return
long2str($W,false);}function
decrypt_string($Ue,$x){if($Ue=="")return"";$x=array_values(unpack("V*",pack("H*",md5($x))));$W=str2long($Ue,false);$B=count($W)-1;$Yf=$W[$B];$Xf=$W[0];$G=floor(6+52/($B+1));$af=int32($G*0x9E3779B9);while($af){$yb=$af>>2&3;for($Od=$B;$Od>0;$Od--){$Yf=$W[$Od-1];$nd=xxtea_mx($Yf,$Xf,$af,$x[$Od&3^$yb]);$Xf=int32($W[$Od]-$nd);$W[$Od]=$Xf;}$Yf=$W[$B];$nd=xxtea_mx($Yf,$Xf,$af,$x[$Od&3^$yb]);$Xf=int32($W[0]-$nd);$W[0]=$Xf;$af=int32($af-0x9E3779B9);}return
long2str($W,true);}$g='';$T=$_SESSION["token"];if(!$_SESSION["token"])$_SESSION["token"]=rand(1,1e6);$Yd=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$X){list($x)=explode(":",$X);$Yd[$x]=$X;}}$d=$_POST["auth"];if($d){session_regenerate_id();$_SESSION["pwds"][$d["driver"]][$d["server"]][$d["username"]]=$d["password"];if($d["permanent"]){$x=base64_encode($d["driver"])."-".base64_encode($d["server"])."-".base64_encode($d["username"]);$ie=$c->permanentLogin();$Yd[$x]="$x:".base64_encode($ie?encrypt_string($d["password"],$ie):"");cookie("adminer_permanent",implode(" ",$Yd));}if(count($_POST)==1||DRIVER!=$d["driver"]||SERVER!=$d["server"]||$_GET["username"]!==$d["username"]||DB!=$d["db"])redirect(auth_url($d["driver"],$d["server"],$d["username"],$d["db"]));}elseif($_POST["logout"]){if($T&&$_POST["token"]!=$T){page_header(lang(50),lang(55));page_footer("db");exit;}else{foreach(array("pwds","dbs","queries")as$x)set_session($x,null);$x=base64_encode(DRIVER)."-".base64_encode(SERVER)."-".base64_encode($_GET["username"]);if($Yd[$x]){unset($Yd[$x]);cookie("adminer_permanent",implode(" ",$Yd));}redirect(substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1),lang(56));}}elseif($Yd&&!$_SESSION["pwds"]){session_regenerate_id();$ie=$c->permanentLogin();foreach($Yd
as$x=>$X){list(,$Ja)=explode(":",$X);list($sb,$O,$Of)=array_map('base64_decode',explode("-",$x));$_SESSION["pwds"][$sb][$O][$Of]=decrypt_string(base64_decode($Ja),$ie);}}function
auth_error($Ob=null){global$g,$c,$T;$Ne=session_name();$k="";if(!$_COOKIE[$Ne]&&$_GET[$Ne]&&ini_bool("session.use_only_cookies"))$k=lang(57);elseif(isset($_GET["username"])){if(($_COOKIE[$Ne]||$_GET[$Ne])&&!$T)$k=lang(58);else{$Xd=&get_session("pwds");if($Xd!==null){$k=h($Ob?$Ob->getMessage():(is_string($g)?$g:lang(59)));$Xd=null;}}}page_header(lang(20),$k,null);echo"<form action='' method='post'>\n";$c->loginForm();echo"<div>";hidden_fields($_POST,array("auth"));echo"</div>\n","</form>\n";page_footer("auth");}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);page_header(lang(60),lang(61,implode(", ",$de)),false);page_footer("auth");exit;}$g=connect();}if(is_string($g)||!$c->login($_GET["username"],get_session("pwds"))){auth_error();exit;}$T=$_SESSION["token"];if($d&&$_POST["token"])$_POST["token"]=$T;$k=($_POST?($_POST["token"]==$T?"":lang(55)):($_SERVER["REQUEST_METHOD"]!="POST"?"":lang(62,'"post_max_size"')));function
connect_error(){global$c,$g,$T,$k,$tb;$i=array();if(DB!="")page_header(lang(19).": ".h(DB),lang(63),true);else{if($_POST["db"]&&!$k)queries_redirect(substr(ME,0,-1),lang(64),drop_databases($_POST["db"]));page_header(lang(65),$k,false);echo"<p><a href='".h(ME)."database='>".lang(66)."</a>\n";foreach(array('privileges'=>lang(48),'processlist'=>lang(67),'variables'=>lang(68),'status'=>lang(69),)as$x=>$X){if(support($x))echo"<a href='".h(ME)."$x='>$X</a>\n";}echo"<p>".lang(70,$tb[DRIVER],"<b>$g->server_info</b>","<b>$g->extension</b>")."\n","<p>".lang(71,"<b>".h(logged_user())."</b>")."\n";if($_GET["refresh"])set_session("dbs",null);$i=$c->databases();if($i){$He=support("scheme");$e=collations();echo"<form action='' method='post'>\n","<table cellspacing='0' class='checkable' onclick='tableClick(event);'>\n","<thead><tr><td>&nbsp;<th>".lang(19)."<td>".lang(72)."<td>".lang(73)."</thead>\n";foreach($i
as$j){$Ae=h(ME)."db=".urlencode($j);echo"<tr".odd()."><td>".checkbox("db[]",$j,in_array($j,(array)$_POST["db"])),"<th><a href='$Ae'>".h($j)."</a>","<td><a href='$Ae".($He?"&amp;ns=":"")."&amp;database=' title='".lang(44)."'>".nbsp(db_collation($j,$e))."</a>","<td align='right'><a href='$Ae&amp;schema=' id='tables-".h($j)."' title='".lang(47)."'>?</a>","\n";}echo"</table>\n","<script type='text/javascript'>tableCheck();</script>\n","<p><input type='submit' name='drop' value='".lang(74)."'".confirm("formChecked(this, /db/)").">\n","<input type='hidden' name='token' value='$T'>\n","<a href='".h(ME)."refresh=1'>".lang(75)."</a>\n","</form>\n";}}page_footer("db");if($i)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=connect');</script>\n";}if(isset($_GET["status"]))$_GET["variables"]=$_GET["status"];if(!(DB!=""?$g->select_db(DB):isset($_GET["sql"])||isset($_GET["dump"])||isset($_GET["database"])||isset($_GET["processlist"])||isset($_GET["privileges"])||isset($_GET["user"])||isset($_GET["variables"])||$_GET["script"]=="connect")){if(DB!="")set_session("dbs",null);connect_error();exit;}function
select($I,$h=null,$vc="",$Hd=array()){$Vc=array();$u=array();$f=array();$Aa=array();$Df=array();$J=array();odd('');for($r=0;$K=$I->fetch_row();$r++){if(!$r){echo"<table cellspacing='0' class='nowrap'>\n","<thead><tr>";for($v=0;$v<count($K);$v++){$l=$I->fetch_field();$C=$l->name;$Gd=$l->orgtable;$Fd=$l->orgname;$J[$l->table]=$Gd;if($vc)$Vc[$v]=($C=="table"?"table=":($C=="possible_keys"?"indexes=":null));elseif($Gd!=""){if(!isset($u[$Gd])){$u[$Gd]=array();foreach(indexes($Gd,$h)as$t){if($t["type"]=="PRIMARY"){$u[$Gd]=array_flip($t["columns"]);break;}}$f[$Gd]=$u[$Gd];}if(isset($f[$Gd][$Fd])){unset($f[$Gd][$Fd]);$u[$Gd][$Fd]=$v;$Vc[$v]=$Gd;}}if($l->charsetnr==63)$Aa[$v]=true;$Df[$v]=$l->type;$C=h($C);echo"<th".($Gd!=""||$l->name!=$Fd?" title='".h(($Gd!=""?"$Gd.":"").$Fd)."'":"").">".($vc?"<a href='$vc".strtolower($C)."' target='_blank' rel='noreferrer'>$C</a>":$C);}echo"</thead>\n";}echo"<tr".odd().">";foreach($K
as$x=>$X){if($X===null)$X="<i>NULL</i>";elseif($Aa[$x]&&!is_utf8($X))$X="<i>".lang(29,strlen($X))."</i>";elseif(!strlen($X))$X="&nbsp;";else{$X=h($X);if($Df[$x]==254)$X="<code>$X</code>";}if(isset($Vc[$x])&&!$f[$Vc[$x]]){if($vc){$R=$K[array_search("table=",$Vc)];$z=$Vc[$x].urlencode($Hd[$R]!=""?$Hd[$R]:$R);}else{$z="edit=".urlencode($Vc[$x]);foreach($u[$Vc[$x]]as$Ma=>$v)$z.="&where".urlencode("[".bracket_escape($Ma)."]")."=".urlencode($K[$v]);}$X="<a href='".h(ME.$z)."'>$X</a>";}echo"<td>$X";}}echo($r?"</table>":"<p class='message'>".lang(76))."\n";return$J;}function
referencable_primary($Je){$J=array();foreach(table_status()as$ef=>$R){if($ef!=$Je&&fk_support($R)){foreach(fields($ef)as$l){if($l["primary"]){if($J[$ef]){unset($J[$ef]);break;}$J[$ef]=$l;}}}}return$J;}function
textarea($C,$Y,$L=10,$Pa=80,$s=""){echo"<textarea name='$C'".($s?" id='$s'":"")." rows='$L' cols='$Pa' class='sqlarea' spellcheck='false' wrap='off' onkeydown='return textareaKeydown(this, event);'>";if(is_array($Y)){foreach($Y
as$X)echo
h($X[0])."\n\n\n";}else
echo
h($Y);echo"</textarea>";}function
format_time($Re,$Eb){return" <span class='time'>(".lang(77,max(0,array_sum(explode(" ",$Eb))-array_sum(explode(" ",$Re)))).")</span>";}function
edit_type($x,$l,$e,$o=array()){global$We,$Df,$Kf,$yd;echo'<td><select name="',$x,'[type]" class="type" onfocus="lastType = selectValue(this);" onchange="editingTypeChange(this);">',optionlist((!$l["type"]||isset($Df[$l["type"]])?array():array($l["type"]))+$We+($o?array(lang(78)=>$o):array()),$l["type"]),'</select>
<td><input name="',$x,'[length]" value="',h($l["length"]),'" size="3" onfocus="editingLengthFocus(this);"><td class="options">',"<select name='$x"."[collation]'".(ereg('(char|text|enum|set)$',$l["type"])?"":" class='hidden'").'><option value="">('.lang(79).')'.optionlist($e,$l["collation"]).'</select>',($Kf?"<select name='$x"."[unsigned]'".(!$l["type"]||ereg('(int|float|double|decimal)$',$l["type"])?"":" class='hidden'").'><option>'.optionlist($Kf,$l["unsigned"]).'</select>':''),($o?"<select name='$x"."[on_delete]'".(ereg("`",$l["type"])?"":" class='hidden'")."><option value=''>(".lang(80).")".optionlist(explode("|",$yd),$l["on_delete"])."</select> ":" ");}function
process_length($Sc){global$Hb;return(preg_match("~^\\s*(?:$Hb)(?:\\s*,\\s*(?:$Hb))*\\s*\$~",$Sc)&&preg_match_all("~$Hb~",$Sc,$Yc)?implode(",",$Yc[0]):preg_replace('~[^0-9,+-]~','',$Sc));}function
process_type($l,$Na="COLLATE"){global$Kf;return" $l[type]".($l["length"]!=""?"(".process_length($l["length"]).")":"").(ereg('int|float|double|decimal',$l["type"])&&in_array($l["unsigned"],$Kf)?" $l[unsigned]":"").(ereg('char|text|enum|set',$l["type"])&&$l["collation"]?" $Na ".q($l["collation"]):"");}function
process_field($l,$Bf){return
array(idf_escape(trim($l["field"])),process_type($Bf),($l["null"]?" NULL":" NOT NULL"),(isset($l["default"])?" DEFAULT ".(($l["type"]=="timestamp"&&eregi('^CURRENT_TIMESTAMP$',$l["default"]))||($l["type"]=="bit"&&ereg("^([0-9]+|b'[0-1]+')\$",$l["default"]))?$l["default"]:q($l["default"])):""),($l["on_update"]?" ON UPDATE $l[on_update]":""),(support("comment")&&$l["comment"]!=""?" COMMENT ".q($l["comment"]):""),($l["auto_increment"]?auto_increment():null),);}function
type_class($V){foreach(array('char'=>'text','date'=>'time|year','binary'=>'blob','enum'=>'set',)as$x=>$X){if(ereg("$x|$X",$V))return" class='$x'";}}function
edit_fields($m,$e,$V="TABLE",$qa=0,$o=array(),$Ua=false){global$Bc;echo'<thead><tr class="wrap">
';if($V=="PROCEDURE"){echo'<td>&nbsp;';}echo'<th>',($V=="TABLE"?lang(81):lang(82)),'<td>',lang(83),'<textarea id="enum-edit" rows="4" cols="12" wrap="off" style="display: none;" onblur="editingLengthBlur(this);"></textarea>
<td>',lang(84),'<td>',lang(85);if($V=="TABLE"){echo'<td>NULL
<td><input type="radio" name="auto_increment_col" value=""><acronym title="',lang(86),'">AI</acronym>
<td',($_POST["defaults"]?"":" class='hidden'"),'>',lang(87),(support("comment")?"<td".($Ua?"":" class='hidden'").">".lang(88):"");}echo'<td>',"<input type='image' name='add[".(support("move_col")?0:count($m))."]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.4.0-dev' alt='+' title='".lang(89)."'>",'<script type="text/javascript">row_count = ',count($m),';</script>
</thead>
<tbody onkeydown="return editingKeydown(event);">
';foreach($m
as$r=>$l){$r++;$Id=$l[($_POST?"orig":"field")];$qb=(isset($_POST["add"][$r-1])||(isset($l["field"])&&!$_POST["drop_col"][$r]))&&(support("drop_col")||$Id=="");echo'<tr',($qb?"":" style='display: none;'"),'>
',($V=="PROCEDURE"?"<td>".html_select("fields[$r][inout]",explode("|",$Bc),$l["inout"]):""),'<th>';if($qb){echo'<input name="fields[',$r,'][field]" value="',h($l["field"]),'" onchange="',($l["field"]!=""||count($m)>1?"":"editingAddRow(this, $qa); "),'editingNameChange(this);" maxlength="64">';}echo'<input type="hidden" name="fields[',$r,'][orig]" value="',h($Id),'">
';edit_type("fields[$r]",$l,$e,$o);if($V=="TABLE"){echo'<td>',checkbox("fields[$r][null]",1,$l["null"]),'<td><input type="radio" name="auto_increment_col" value="',$r,'"';if($l["auto_increment"]){echo' checked';}?> onclick="var field = this.form['fields[' + this.value + '][field]']; if (!field.value) { field.value = 'id'; field.onchange(); }">
<td<?php echo($_POST["defaults"]?"":" class='hidden'"),'>',checkbox("fields[$r][has_default]",1,$l["has_default"]),'<input name="fields[',$r,'][default]" value="',h($l["default"]),'" onchange="this.previousSibling.checked = true;">
',(support("comment")?"<td".($Ua?"":" class='hidden'")."><input name='fields[$r][comment]' value='".h($l["comment"])."' maxlength='255'>":"");}echo"<td>",(support("move_col")?"<input type='image' name='add[$r]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.4.0-dev' alt='+' title='".lang(89)."' onclick='return !editingAddRow(this, $qa, 1);'>&nbsp;"."<input type='image' name='up[$r]' src='".h(preg_replace("~\\?.*~","",ME))."?file=up.gif&amp;version=3.4.0-dev' alt='^' title='".lang(90)."'>&nbsp;"."<input type='image' name='down[$r]' src='".h(preg_replace("~\\?.*~","",ME))."?file=down.gif&amp;version=3.4.0-dev' alt='v' title='".lang(91)."'>&nbsp;":""),($Id==""||support("drop_col")?"<input type='image' name='drop_col[$r]' src='".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=3.4.0-dev' alt='x' title='".lang(92)."' onclick='return !editingRemoveRow(this);'>":""),"\n";}}function
process_fields(&$m){ksort($m);$td=0;if($_POST["up"]){$Mc=0;foreach($m
as$x=>$l){if(key($_POST["up"])==$x){unset($m[$x]);array_splice($m,$Mc,0,array($l));break;}if(isset($l["field"]))$Mc=$td;$td++;}}if($_POST["down"]){$gc=false;foreach($m
as$x=>$l){if(isset($l["field"])&&$gc){unset($m[key($_POST["down"])]);array_splice($m,$td,0,array($gc));break;}if(key($_POST["down"])==$x)$gc=$l;$td++;}}$m=array_values($m);if($_POST["add"])array_splice($m,key($_POST["add"]),0,array(array()));}function
normalize_enum($A){return"'".str_replace("'","''",addcslashes(stripcslashes(str_replace($A[0][0].$A[0][0],$A[0][0],substr($A[0],1,-1))),'\\'))."'";}function
grant($q,$ke,$f,$xd){if(!$ke)return
true;if($ke==array("ALL PRIVILEGES","GRANT OPTION"))return($q=="GRANT"?queries("$q ALL PRIVILEGES$xd WITH GRANT OPTION"):queries("$q ALL PRIVILEGES$xd")&&queries("$q GRANT OPTION$xd"));return
queries("$q ".preg_replace('~(GRANT OPTION)\\([^)]*\\)~','\\1',implode("$f, ",$ke).$f).$xd);}function
drop_create($ub,$cb,$_,$id,$gd,$hd,$C){if($_POST["drop"])return
query_redirect($ub,$_,$id,true,!$_POST["dropped"]);$vb=$C!=""&&($_POST["dropped"]||queries($ub));$eb=queries($cb);if(!queries_redirect($_,($C!=""?$gd:$hd),$eb)&&$vb)redirect(null,$id);return$vb;}function
tar_file($Zb,$Ya){$J=pack("a100a8a8a8a12a12",$Zb,644,0,0,decoct(strlen($Ya)),decoct(time()));$Ia=8*32;for($r=0;$r<strlen($J);$r++)$Ia+=ord($J[$r]);$J.=sprintf("%06o",$Ia)."\0 ";return$J.str_repeat("\0",512-strlen($J)).$Ya.str_repeat("\0",511-(strlen($Ya)+511)%
512);}function
ini_bytes($Ac){$X=ini_get($Ac);switch(strtolower(substr($X,-1))){case'g':$X*=1024;case'm':$X*=1024;case'k':$X*=1024;}return$X;}session_cache_limiter("");if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false)session_write_close();$yd="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";$Hb="'(?:''|[^'\\\\]|\\\\.)*+'";$Bc="IN|OUT|INOUT";if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["callf"]))$_GET["call"]=$_GET["callf"];if(isset($_GET["function"]))$_GET["procedure"]=$_GET["function"];if(isset($_GET["download"])){$b=$_GET["download"];header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$b-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$g->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($b)," WHERE ".where($_GET),1));exit;}elseif(isset($_GET["table"])){$b=$_GET["table"];$m=fields($b);if(!$m)$k=error();$S=($m?table_status($b):array());page_header(($m&&is_view($S)?lang(93):lang(94)).": ".h($b),$k);$c->selectLinks($S);$Ta=$S["Comment"];if($Ta!="")echo"<p>".lang(88).": ".h($Ta)."\n";if($m){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(95)."<td>".lang(83).(support("comment")?"<td>".lang(88):"")."</thead>\n";foreach($m
as$l){echo"<tr".odd()."><th>".h($l["field"]),"<td title='".h($l["collation"])."'>".h($l["full_type"]).($l["null"]?" <i>NULL</i>":"").($l["auto_increment"]?" <i>".lang(86)."</i>":""),(isset($l["default"])?" [<b>".h($l["default"])."</b>]":""),(support("comment")?"<td>".nbsp($l["comment"]):""),"\n";}echo"</table>\n";if(!is_view($S)){echo"<h3>".lang(96)."</h3>\n";$u=indexes($b);if($u){echo"<table cellspacing='0'>\n";foreach($u
as$C=>$t){ksort($t["columns"]);$he=array();foreach($t["columns"]as$x=>$X)$he[]="<i>".h($X)."</i>".($t["lengths"][$x]?"(".$t["lengths"][$x].")":"");echo"<tr title='".h($C)."'><th>$t[type]<td>".implode(", ",$he)."\n";}echo"</table>\n";}echo'<p><a href="'.h(ME).'indexes='.urlencode($b).'">'.lang(97)."</a>\n";if(fk_support($S)){echo"<h3>".lang(78)."</h3>\n";$o=foreign_keys($b);if($o){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(98)."<td>".lang(99)."<td>".lang(80)."<td>".lang(100).($w!="sqlite"?"<td>&nbsp;":"")."</thead>\n";foreach($o
as$C=>$n){echo"<tr title='".h($C)."'>","<th><i>".implode("</i>, <i>",array_map('h',$n["source"]))."</i>","<td><a href='".h($n["db"]!=""?preg_replace('~db=[^&]*~',"db=".urlencode($n["db"]),ME):($n["ns"]!=""?preg_replace('~ns=[^&]*~',"ns=".urlencode($n["ns"]),ME):ME))."table=".urlencode($n["table"])."'>".($n["db"]!=""?"<b>".h($n["db"])."</b>.":"").($n["ns"]!=""?"<b>".h($n["ns"])."</b>.":"").h($n["table"])."</a>","(<i>".implode("</i>, <i>",array_map('h',$n["target"]))."</i>)","<td>".nbsp($n["on_delete"])."\n","<td>".nbsp($n["on_update"])."\n";if($w!="sqlite")echo'<td><a href="'.h(ME.'foreign='.urlencode($b).'&name='.urlencode($C)).'">'.lang(101).'</a>';}echo"</table>\n";}if($w!="sqlite")echo'<p><a href="'.h(ME).'foreign='.urlencode($b).'">'.lang(102)."</a>\n";}if(support("trigger")){echo"<h3>".lang(103)."</h3>\n";$Af=triggers($b);if($Af){echo"<table cellspacing='0'>\n";foreach($Af
as$x=>$X)echo"<tr valign='top'><td>$X[0]<td>$X[1]<th>".h($x)."<td><a href='".h(ME.'trigger='.urlencode($b).'&name='.urlencode($x))."'>".lang(101)."</a>\n";echo"</table>\n";}echo'<p><a href="'.h(ME).'trigger='.urlencode($b).'">'.lang(104)."</a>\n";}}}}elseif(isset($_GET["schema"])){page_header(lang(47),"",array(),DB.($_GET["ns"]?".$_GET[ns]":""));$ff=array();$gf=array();$C="adminer_schema";$da=($_GET["schema"]?$_GET["schema"]:$_COOKIE[($_COOKIE["$C-".DB]?"$C-".DB:$C)]);preg_match_all('~([^:]+):([-0-9.]+)x([-0-9.]+)(_|$)~',$da,$Yc,PREG_SET_ORDER);foreach($Yc
as$r=>$A){$ff[$A[1]]=array($A[2],$A[3]);$gf[]="\n\t'".js_escape($A[1])."': [ $A[2], $A[3] ]";}$vf=0;$_a=-1;$Ge=array();$ue=array();$Qc=array();foreach(table_status()as$S){if(!isset($S["Engine"]))continue;$ae=0;$Ge[$S["Name"]]["fields"]=array();foreach(fields($S["Name"])as$C=>$l){$ae+=1.25;$l["pos"]=$ae;$Ge[$S["Name"]]["fields"][$C]=$l;}$Ge[$S["Name"]]["pos"]=($ff[$S["Name"]]?$ff[$S["Name"]]:array($vf,0));foreach($c->foreignKeys($S["Name"])as$X){if(!$X["db"]){$Oc=$_a;if($ff[$S["Name"]][1]||$ff[$X["table"]][1])$Oc=min(floatval($ff[$S["Name"]][1]),floatval($ff[$X["table"]][1]))-1;else$_a-=.1;while($Qc[(string)$Oc])$Oc-=.0001;$Ge[$S["Name"]]["references"][$X["table"]][(string)$Oc]=array($X["source"],$X["target"]);$ue[$X["table"]][$S["Name"]][(string)$Oc]=$X["target"];$Qc[(string)$Oc]=true;}}$vf=max($vf,$Ge[$S["Name"]]["pos"][0]+2.5+$ae);}echo'<div id="schema" style="height: ',$vf,'em;" onselectstart="return false;">
<script type="text/javascript">
var tablePos = {',implode(",",$gf)."\n",'};
var em = document.getElementById(\'schema\').offsetHeight / ',$vf,';
document.onmousemove = schemaMousemove;
document.onmouseup = function (ev) {
	schemaMouseup(ev, \'',js_escape(DB),'\');
};
</script>
';foreach($Ge
as$C=>$R){echo"<div class='table' style='top: ".$R["pos"][0]."em; left: ".$R["pos"][1]."em;' onmousedown='schemaMousedown(this, event);'>",'<a href="'.h(ME).'table='.urlencode($C).'"><b>'.h($C)."</b></a>";foreach($R["fields"]as$l){$X='<span'.type_class($l["type"]).' title="'.h($l["full_type"].($l["null"]?" NULL":'')).'">'.h($l["field"]).'</span>';echo"<br>".($l["primary"]?"<i>$X</i>":$X);}foreach((array)$R["references"]as$mf=>$ve){foreach($ve
as$Oc=>$re){$Pc=$Oc-$ff[$C][1];$r=0;foreach($re[0]as$Oe)echo"\n<div class='references' title='".h($mf)."' id='refs$Oc-".($r++)."' style='left: $Pc"."em; top: ".$R["fields"][$Oe]["pos"]."em; padding-top: .5em;'><div style='border-top: 1px solid Gray; width: ".(-$Pc)."em;'></div></div>";}}foreach((array)$ue[$C]as$mf=>$ve){foreach($ve
as$Oc=>$f){$Pc=$Oc-$ff[$C][1];$r=0;foreach($f
as$lf)echo"\n<div class='references' title='".h($mf)."' id='refd$Oc-".($r++)."' style='left: $Pc"."em; top: ".$R["fields"][$lf]["pos"]."em; height: 1.25em; background: url(".h(preg_replace("~\\?.*~","",ME))."?file=arrow.gif) no-repeat right center;&amp;version=3.4.0-dev'><div style='height: .5em; border-bottom: 1px solid Gray; width: ".(-$Pc)."em;'></div></div>";}}echo"\n</div>\n";}foreach($Ge
as$C=>$R){foreach((array)$R["references"]as$mf=>$ve){foreach($ve
as$Oc=>$re){$kd=$vf;$cd=-10;foreach($re[0]as$x=>$Oe){$be=$R["pos"][0]+$R["fields"][$Oe]["pos"];$ce=$Ge[$mf]["pos"][0]+$Ge[$mf]["fields"][$re[1][$x]]["pos"];$kd=min($kd,$be,$ce);$cd=max($cd,$be,$ce);}echo"<div class='references' id='refl$Oc' style='left: $Oc"."em; top: $kd"."em; padding: .5em 0;'><div style='border-right: 1px solid Gray; margin-top: 1px; height: ".($cd-$kd)."em;'></div></div>\n";}}}echo'</div>
<p><a href="',h(ME."schema=".urlencode($da)),'" id="schema-link">',lang(105),'</a>
';}elseif(isset($_GET["dump"])){$b=$_GET["dump"];if($_POST){$ab="";foreach(array("output","format","db_style","routines","events","table_style","auto_increment","triggers","data_style")as$x)$ab.="&$x=".urlencode($_POST[$x]);cookie("adminer_export",substr($ab,1));$Ub=dump_headers(($b!=""?$b:DB),(DB==""||count((array)$_POST["tables"]+(array)$_POST["data"])>1));$Fc=($_POST["format"]=="sql");if($Fc)echo"-- Adminer $fa ".$tb[DRIVER]." dump

".($w!="sql"?"":"SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = ".q($g->result("SELECT @@time_zone")).";
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

");$Q=$_POST["db_style"];$i=array(DB);if(DB==""){$i=$_POST["databases"];if(is_string($i))$i=explode("\n",rtrim(str_replace("\r","",$i),"\n"));}foreach((array)$i
as$j){if($g->select_db($j)){if($Fc&&ereg('CREATE',$Q)&&($cb=$g->result("SHOW CREATE DATABASE ".idf_escape($j),1))){if($Q=="DROP+CREATE")echo"DROP DATABASE IF EXISTS ".idf_escape($j).";\n";echo($Q=="CREATE+ALTER"?preg_replace('~^CREATE DATABASE ~','\\0IF NOT EXISTS ',$cb):$cb).";\n";}if($Fc){if($Q)echo
use_sql($j).";\n\n";if(in_array("CREATE+ALTER",array($Q,$_POST["table_style"])))echo"SET @adminer_alter = '';\n\n";$Md="";if($_POST["routines"]){foreach(array("FUNCTION","PROCEDURE")as$Be){foreach(get_rows("SHOW $Be STATUS WHERE Db = ".q($j),null,"-- ")as$K)$Md.=($Q!='DROP+CREATE'?"DROP $Be IF EXISTS ".idf_escape($K["Name"]).";;\n":"").$g->result("SHOW CREATE $Be ".idf_escape($K["Name"]),2).";;\n\n";}}if($_POST["events"]){foreach(get_rows("SHOW EVENTS",null,"-- ")as$K)$Md.=($Q!='DROP+CREATE'?"DROP EVENT IF EXISTS ".idf_escape($K["Name"]).";;\n":"").$g->result("SHOW CREATE EVENT ".idf_escape($K["Name"]),3).";;\n\n";}if($Md)echo"DELIMITER ;;\n\n$Md"."DELIMITER ;\n\n";}if($_POST["table_style"]||$_POST["data_style"]){$Sf=array();foreach(table_status()as$S){$R=(DB==""||in_array($S["Name"],(array)$_POST["tables"]));$hb=(DB==""||in_array($S["Name"],(array)$_POST["data"]));if($R||$hb){if(!is_view($S)){if($Ub=="tar")ob_start();$c->dumpTable($S["Name"],($R?$_POST["table_style"]:""));if($hb)$c->dumpData($S["Name"],$_POST["data_style"],"SELECT * FROM ".table($S["Name"]));if($Fc&&$_POST["triggers"]&&$R&&($Af=trigger_sql($S["Name"],$_POST["table_style"])))echo"\nDELIMITER ;;\n$Af\nDELIMITER ;\n";if($Ub=="tar")echo
tar_file((DB!=""?"":"$j/")."$S[Name].csv",ob_get_clean());elseif($Fc)echo"\n";}elseif($Fc)$Sf[]=$S["Name"];}}foreach($Sf
as$Rf)$c->dumpTable($Rf,$_POST["table_style"],true);if($Ub=="tar")echo
pack("x512");}if($Q=="CREATE+ALTER"&&$Fc){$H="SELECT TABLE_NAME, ENGINE, TABLE_COLLATION, TABLE_COMMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE()";echo"DELIMITER ;;
CREATE PROCEDURE adminer_alter (INOUT alter_command text) BEGIN
	DECLARE _table_name, _engine, _table_collation varchar(64);
	DECLARE _table_comment varchar(64);
	DECLARE done bool DEFAULT 0;
	DECLARE tables CURSOR FOR $H;
	DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = 1;
	OPEN tables;
	REPEAT
		FETCH tables INTO _table_name, _engine, _table_collation, _table_comment;
		IF NOT done THEN
			CASE _table_name";foreach(get_rows($H)as$K){$Ta=q($K["ENGINE"]=="InnoDB"?preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$K["TABLE_COMMENT"]):$K["TABLE_COMMENT"]);echo"
				WHEN ".q($K["TABLE_NAME"])." THEN
					".(isset($K["ENGINE"])?"IF _engine != '$K[ENGINE]' OR _table_collation != '$K[TABLE_COLLATION]' OR _table_comment != $Ta THEN
						ALTER TABLE ".idf_escape($K["TABLE_NAME"])." ENGINE=$K[ENGINE] COLLATE=$K[TABLE_COLLATION] COMMENT=$Ta;
					END IF":"BEGIN END").";";}echo"
				ELSE
					SET alter_command = CONCAT(alter_command, 'DROP TABLE `', REPLACE(_table_name, '`', '``'), '`;\\n');
			END CASE;
		END IF;
	UNTIL done END REPEAT;
	CLOSE tables;
END;;
DELIMITER ;
CALL adminer_alter(@adminer_alter);
DROP PROCEDURE adminer_alter;
";}if(in_array("CREATE+ALTER",array($Q,$_POST["table_style"]))&&$Fc)echo"SELECT @adminer_alter;\n";}}if($Fc)echo"-- ".$g->result("SELECT NOW()")."\n";exit;}page_header(lang(106),"",($_GET["export"]!=""?array("table"=>$_GET["export"]):array()),DB);echo'
<form action="" method="post">
<table cellspacing="0">
';$kb=array('','USE','DROP+CREATE','CREATE');$hf=array('','DROP+CREATE','CREATE');$ib=array('','TRUNCATE+INSERT','INSERT');if($w=="sql"){$kb[]='CREATE+ALTER';$hf[]='CREATE+ALTER';$ib[]='INSERT+UPDATE';}parse_str($_COOKIE["adminer_export"],$K);if(!$K)$K=array("output"=>"text","format"=>"sql","db_style"=>(DB!=""?"":"CREATE"),"table_style"=>"DROP+CREATE","data_style"=>"INSERT");if(!isset($K["events"])){$K["routines"]=$K["events"]=($_GET["dump"]=="");$K["triggers"]=$K["table_style"];}echo"<tr><th>".lang(107)."<td>".html_select("output",$c->dumpOutput(),$K["output"],0)."\n";echo"<tr><th>".lang(108)."<td>".html_select("format",$c->dumpFormat(),$K["format"],0)."\n";echo($w=="sqlite"?"":"<tr><th>".lang(19)."<td>".html_select('db_style',$kb,$K["db_style"]).(support("routine")?checkbox("routines",1,$K["routines"],lang(109)):"").(support("event")?checkbox("events",1,$K["events"],lang(110)):"")),"<tr><th>".lang(73)."<td>".html_select('table_style',$hf,$K["table_style"]).checkbox("auto_increment",1,$K["auto_increment"],lang(86)).(support("trigger")?checkbox("triggers",1,$K["triggers"],lang(103)):""),"<tr><th>".lang(111)."<td>".html_select('data_style',$ib,$K["data_style"]),'</table>
<p><input type="submit" value="',lang(106),'">

<table cellspacing="0">
';$fe=array();if(DB!=""){$Ha=($b!=""?"":" checked");echo"<thead><tr>","<th style='text-align: left;'><label><input type='checkbox' id='check-tables'$Ha onclick='formCheck(this, /^tables\\[/);'>".lang(73)."</label>","<th style='text-align: right;'><label>".lang(111)."<input type='checkbox' id='check-data'$Ha onclick='formCheck(this, /^data\\[/);'></label>","</thead>\n";$Sf="";foreach(table_status()as$S){$C=$S["Name"];$ee=ereg_replace("_.*","",$C);$Ha=($b==""||$b==(substr($b,-1)=="%"?"$ee%":$C));$he="<tr><td>".checkbox("tables[]",$C,$Ha,$C,"formUncheck('check-tables');");if(is_view($S))$Sf.="$he\n";else
echo"$he<td align='right'><label>".($S["Engine"]=="InnoDB"&&$S["Rows"]?"~ ":"").$S["Rows"].checkbox("data[]",$C,$Ha,"","formUncheck('check-data');")."</label>\n";$fe[$ee]++;}echo$Sf;}else{echo"<thead><tr><th style='text-align: left;'><label><input type='checkbox' id='check-databases'".($b==""?" checked":"")." onclick='formCheck(this, /^databases\\[/);'>".lang(19)."</label></thead>\n";$i=$c->databases();if($i){foreach($i
as$j){if(!information_schema($j)){$ee=ereg_replace("_.*","",$j);echo"<tr><td>".checkbox("databases[]",$j,$b==""||$b=="$ee%",$j,"formUncheck('check-databases');")."</label>\n";$fe[$ee]++;}}}else
echo"<tr><td><textarea name='databases' rows='10' cols='20'></textarea>";}echo'</table>
</form>
';$bc=true;foreach($fe
as$x=>$X){if($x!=""&&$X>1){echo($bc?"<p>":" ")."<a href='".h(ME)."dump=".urlencode("$x%")."'>".h($x)."</a>";$bc=false;}}}elseif(isset($_GET["privileges"])){page_header(lang(48));$I=$g->query("SELECT User, Host FROM mysql.".(DB==""?"user":"db WHERE ".q(DB)." LIKE Db")." ORDER BY Host, User");$q=$I;if(!$I)$I=$g->query("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1) AS User, SUBSTRING_INDEX(CURRENT_USER, '@', -1) AS Host");echo"<form action=''><p>\n";hidden_fields_get();echo"<input type='hidden' name='db' value='".h(DB)."'>\n",($q?"":"<input type='hidden' name='grant' value=''>\n"),"<table cellspacing='0'>\n","<thead><tr><th>".lang(17)."<th>".lang(16)."<th>&nbsp;</thead>\n";while($K=$I->fetch_assoc())echo'<tr'.odd().'><td>'.h($K["User"])."<td>".h($K["Host"]).'<td><a href="'.h(ME.'user='.urlencode($K["User"]).'&host='.urlencode($K["Host"])).'">'.lang(28)."</a>\n";if(!$q||DB!="")echo"<tr".odd()."><td><input name='user'><td><input name='host' value='localhost'><td><input type='submit' value='".lang(28)."'>\n";echo"</table>\n","</form>\n",'<p><a href="'.h(ME).'user=">'.lang(112)."</a>";}elseif(isset($_GET["sql"])){if(!$k&&$_POST["export"]){dump_headers("sql");$c->dumpTable("","");$c->dumpData("","table",$_POST["query"]);exit;}restart_session();$tc=&get_session("queries");$sc=&$tc[DB];if(!$k&&$_POST["clear"]){$sc=array();redirect(remove_from_uri("history"));}$La=($_SERVER["HTTPS"]?"https":"http")."://www.adminer.org/static/CodeMirror2";$Ka=($w=="sql"?"mysql":"plsql");$Jb=array();page_header(lang(41),$k,array(),"","<link rel='stylesheet' href='$La/lib/codemirror.css'>");if(!$k&&$_POST){$ic=false;$H=$_POST["query"];if($_POST["webfile"]){$ic=@fopen((file_exists("adminer.sql")?"adminer.sql":(file_exists("adminer.sql.gz")?"compress.zlib://adminer.sql.gz":"compress.bzip2://adminer.sql.bz2")),"rb");$H=($ic?fread($ic,1e6):false);}elseif($_FILES&&$_FILES["sql_file"]["error"]!=UPLOAD_ERR_NO_FILE)$H=get_file("sql_file",true);if(is_string($H)){if(function_exists('memory_get_usage'))@ini_set("memory_limit",max(ini_bytes("memory_limit"),2*strlen($H)+memory_get_usage()+8e6));if($H!=""&&strlen($H)<1e6){$G=$H.(ereg(";[ \t\r\n]*\$",$H)?"":";");if(!$sc||reset(end($sc))!=$G)$sc[]=array($G,time());}$Pe="(?:\\s|/\\*.*\\*/|(?:#|-- )[^\n]*\n|--\n)";if(!ini_bool("session.use_cookies"))session_write_close();$nb=";";$td=0;$Db=true;$h=connect();if(is_object($h)&&DB!="")$h->select_db(DB);$Sa=0;$Kb=array();$Uc=0;$Rd='[\'"'.($w=="sql"?'`#':($w=="sqlite"?'`[':($w=="mssql"?'[':''))).']|/\\*|-- |$'.($w=="pgsql"?'|\\$[^$]*\\$':'');$wf=microtime();parse_str($_COOKIE["adminer_export"],$ka);$xb=$c->dumpFormat();unset($xb["sql"]);while($H!=""){if(!$td&&preg_match("~^$Pe*DELIMITER\\s+(.+)~i",$H,$A)){$nb=$A[1];$H=substr($H,strlen($A[0]));}else{preg_match('('.preg_quote($nb)."\\s*|$Rd)",$H,$A,PREG_OFFSET_CAPTURE,$td);list($gc,$ae)=$A[0];if(!$gc&&$ic&&!feof($ic))$H.=fread($ic,1e5);else{if(!$gc&&rtrim($H)=="")break;$td=$ae+strlen($gc);if($gc&&rtrim($gc)!=$nb){while(preg_match('('.($gc=='/*'?'\\*/':($gc=='['?']':(ereg('^-- |^#',$gc)?"\n":preg_quote($gc)."|\\\\."))).'|$)s',$H,$A,PREG_OFFSET_CAPTURE,$td)){$M=$A[0][0];if(!$M&&$ic&&!feof($ic))$H.=fread($ic,1e5);else{$td=$A[0][1]+strlen($M);if($M[0]!="\\")break;}}}else{$Db=false;$G=substr($H,0,$ae);$Sa++;$he="<pre id='sql-$Sa'><code class='jush-$w'>".shorten_utf8(trim($G),1000)."</code></pre>\n";if(!$_POST["only_errors"]){echo$he;ob_flush();flush();}$Re=microtime();if($g->multi_query($G)&&is_object($h)&&preg_match("~^$Pe*USE\\b~isU",$G))$h->query($G);do{$I=$g->store_result();$Eb=microtime();$pf=format_time($Re,$Eb).(strlen($G)<1000?" <a href='".h(ME)."sql=".urlencode(trim($G))."'>".lang(28)."</a>":"");if($g->error){echo($_POST["only_errors"]?$he:""),"<p class='error'>".lang(113).": ".error()."\n";$Jb[]=$Uc+(function_exists('error_line')?error_line():0);$Kb[]=" <a href='#sql-$Sa'>$Sa</a>";if($_POST["error_stops"])break
2;}elseif(is_object($I)){$Hd=select($I,$h);if(!$_POST["only_errors"]){echo"<form action='' method='post'>\n","<p>".($I->num_rows?lang(114,$I->num_rows):"").$pf;$s="export-$Sa";$Tb=", <a href='#$s' onclick=\"return !toggle('$s');\">".lang(106)."</a><span id='$s' class='hidden'>: ".html_select("output",$c->dumpOutput(),$ka["output"])." ".html_select("format",$xb,$ka["format"])."<input type='hidden' name='query' value='".h($G)."'>"." <input type='submit' name='export' value='".lang(106)."'><input type='hidden' name='token' value='$T'></span>\n";if($h&&preg_match("~^($Pe|\\()*SELECT\\b~isU",$G)&&($Sb=explain($h,$G))){$s="explain-$Sa";echo", <a href='#$s' onclick=\"return !toggle('$s');\">EXPLAIN</a>$Tb","<div id='$s' class='hidden'>\n";select($Sb,$h,($w=="sql"?"http://dev.mysql.com/doc/refman/".substr($g->server_info,0,3)."/en/explain-output.html#explain_":""),$Hd);echo"</div>\n";}else
echo$Tb;echo"</form>\n";}}else{if(preg_match("~^$Pe*(CREATE|DROP|ALTER)$Pe+(DATABASE|SCHEMA)\\b~isU",$G)){restart_session();set_session("dbs",null);session_write_close();}if(!$_POST["only_errors"])echo"<p class='message' title='".h($g->info)."'>".lang(115,$g->affected_rows)."$pf\n";}$Re=$Eb;}while($g->next_result());$Uc+=substr_count($G.$gc,"\n");$H=substr($H,$td);$td=0;}}}}if($Db)echo"<p class='message'>".lang(116)."\n";elseif($_POST["only_errors"])echo"<p class='message'>".lang(117,$Sa-count($Kb)).format_time($wf,microtime())."\n";elseif($Kb&&$Sa>1)echo"<p class='error'>".lang(113).": ".implode("",$Kb)."\n";}else
echo"<p class='error'>".upload_error($H)."\n";}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
<p>';$G=$_GET["sql"];if($_POST)$G=$_POST["query"];elseif($_GET["history"]=="all")$G=$sc;elseif($_GET["history"]!="")$G=$sc[$_GET["history"]][0];textarea("query",$G,20,80,"query");echo($_POST?"":"<script type='text/javascript'>document.getElementById('query').focus();</script>\n"),"<p>".(ini_bool("file_uploads")?lang(118).': <input type="file" name="sql_file"'.($_FILES&&$_FILES["sql_file"]["error"]!=4?'':' onchange="this.form[\'only_errors\'].checked = true;"').'> (&lt; '.ini_get("upload_max_filesize").'B)':lang(119)),'<p>
<input type="submit" value="',lang(120),'" title="Ctrl+Enter">
<input type="hidden" name="token" value="',$T,'">
',checkbox("error_stops",1,$_POST["error_stops"],lang(121))."\n",checkbox("only_errors",1,$_POST["only_errors"],lang(122))."\n";print_fieldset("webfile",lang(123),$_POST["webfile"],"document.getElementById('form')['only_errors'].checked = true; ");$Va=array();foreach(array("gz"=>"zlib","bz2"=>"bz2")as$x=>$X){if(extension_loaded($X))$Va[]=".$x";}echo
lang(124,"<code>adminer.sql".($Va?"[".implode("|",$Va)."]":"")."</code>"),' <input type="submit" name="webfile" value="'.lang(125).'">',"</div></fieldset>\n";if($sc){print_fieldset("history",lang(126),$_GET["history"]!="");foreach($sc
as$x=>$X){list($G,$pf)=$X;echo'<a href="'.h(ME."sql=&history=$x").'">'.lang(28)."</a> <span class='time'>".@date("H:i:s",$pf)."</span> <code class='jush-$w'>".shorten_utf8(ltrim(str_replace("\n"," ",str_replace("\r","",preg_replace('~^(#|-- ).*~m','',$G)))),80,"</code>")."<br>\n";}echo"<input type='submit' name='clear' value='".lang(127)."'>\n","<a href='".h(ME."sql=&history=all")."'>".lang(128)."</a>\n","</div></fieldset>\n";}echo'
</form>

<script src="',$La,'/lib/codemirror.js"></script>
<script src="',"$La/mode/$Ka/$Ka.js";?>"></script>
<script type="text/javascript">
if (window.CodeMirror) {
	var codeMirror = CodeMirror.fromTextArea(document.getElementById('query'), { mode: 'text/x-<?php echo$Ka,'\' });
	';foreach($Jb
as$Uc){echo'codeMirror.setLineClass(',$Uc;?>, '', 'error');<?php }echo'}
</script>
';}elseif(isset($_GET["edit"])){$b=$_GET["edit"];$Z=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0]):""):where($_GET));$Lf=(isset($_GET["select"])?$_POST["edit"]:$Z);$m=fields($b);foreach($m
as$C=>$l){if(!isset($l["privileges"][$Lf?"update":"insert"])||$c->fieldName($l)=="")unset($m[$C]);}if($_POST&&!$k&&!isset($_GET["select"])){$_=$_POST["referer"];if($_POST["insert"])$_=($Lf?null:$_SERVER["REQUEST_URI"]);elseif(!ereg('^.+&select=.+$',$_))$_=ME."select=".urlencode($b);if(isset($_POST["delete"]))query_redirect("DELETE".limit1("FROM ".table($b)," WHERE $Z"),$_,lang(129));else{$P=array();foreach($m
as$C=>$l){$X=process_input($l);if($X!==false&&$X!==null)$P[idf_escape($C)]=($Lf?"\n".idf_escape($C)." = $X":$X);}if($Lf){if(!$P)redirect($_);query_redirect("UPDATE".limit1(table($b)." SET".implode(",",$P),"\nWHERE $Z"),$_,lang(130));}else{$I=insert_into($b,$P);$Nc=($I?last_id():0);queries_redirect($_,lang(131,($Nc?" $Nc":"")),$I);}}}$ef=$c->tableName(table_status($b));page_header(($Lf?lang(28):lang(132)),$k,array("select"=>array($b,$ef)),$ef);$K=null;if($_POST["save"])$K=(array)$_POST["fields"];elseif($Z){$N=array();foreach($m
as$C=>$l){if(isset($l["privileges"]["select"]))$N[]=($_POST["clone"]&&$l["auto_increment"]?"'' AS ":(ereg("enum|set",$l["type"])?"1*".idf_escape($C)." AS ":"")).idf_escape($C);}$K=array();if($N){$L=get_rows("SELECT".limit(implode(", ",$N)." FROM ".table($b)," WHERE $Z",(isset($_GET["select"])?2:1)));$K=(isset($_GET["select"])&&count($L)!=1?null:reset($L));}}if($K===false)echo"<p class='error'>".lang(76)."\n";echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';if($m){echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($m
as$C=>$l){echo"<tr><th>".$c->fieldName($l);$mb=$_GET["set"][bracket_escape($C)];$Y=($K!==null?($K[$C]!=""&&ereg("enum|set",$l["type"])?(is_array($K[$C])?array_sum($K[$C]):+$K[$C]):$K[$C]):(!$Lf&&$l["auto_increment"]?"":(isset($_GET["select"])?false:($mb!==null?$mb:$l["default"]))));if(!$_POST["save"]&&is_string($Y))$Y=$c->editVal($Y,$l);$p=($_POST["save"]?(string)$_POST["function"][$C]:($Lf&&$l["on_update"]=="CURRENT_TIMESTAMP"?"now":($Y===false?null:($Y!==null?'':'NULL'))));if($l["type"]=="timestamp"&&$Y=="CURRENT_TIMESTAMP"){$Y="";$p="now";}input($l,$Y,$p);echo"\n";}echo"</table>\n";}echo'<p>
';if($m){echo"<input type='submit' value='".lang(133)."'>\n";if(!isset($_GET["select"]))echo"<input type='submit' name='insert' value='".($Lf?lang(134):lang(135))."' title='Ctrl+Shift+Enter'>\n";}echo($Lf?"<input type='submit' name='delete' value='".lang(136)."' onclick=\"return confirm('".lang(0)."');\">\n":($_POST||!$m?"":"<script type='text/javascript'>document.getElementById('form').getElementsByTagName('td')[1].firstChild.focus();</script>\n"));if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["create"])){$b=$_GET["create"];$Sd=array('HASH','LINEAR HASH','KEY','LINEAR KEY','RANGE','LIST');$te=referencable_primary($b);$o=array();foreach($te
as$ef=>$l)$o[str_replace("`","``",$ef)."`".str_replace("`","``",$l["field"])]=$ef;$Kd=array();$Ld=array();if($b!=""){$Kd=fields($b);$Ld=table_status($b);}if($_POST&&!$_POST["fields"])$_POST["fields"]=array();if($_POST&&!$k&&!$_POST["add"]&&!$_POST["drop_col"]&&!$_POST["up"]&&!$_POST["down"]){if($_POST["drop"])query_redirect("DROP TABLE ".table($b),substr(ME,0,-1),lang(137));else{$m=array();$dc=array();ksort($_POST["fields"]);$Jd=reset($Kd);$oa="FIRST";foreach($_POST["fields"]as$x=>$l){$n=$o[$l["type"]];$Bf=($n!==null?$te[$n]:$l);if($l["field"]!=""){if(!$l["has_default"])$l["default"]=null;$mb=eregi_replace(" *on update CURRENT_TIMESTAMP","",$l["default"]);if($mb!=$l["default"]){$l["on_update"]="CURRENT_TIMESTAMP";$l["default"]=$mb;}if($x==$_POST["auto_increment_col"])$l["auto_increment"]=true;$me=process_field($l,$Bf);if($me!=process_field($Jd,$Jd))$m[]=array($l["orig"],$me,$oa);if($n!==null)$dc[idf_escape($l["field"])]=($b!=""?"ADD":" ")." FOREIGN KEY (".idf_escape($l["field"]).") REFERENCES ".table($o[$l["type"]])." (".idf_escape($Bf["field"]).")".(ereg("^($yd)\$",$l["on_delete"])?" ON DELETE $l[on_delete]":"");$oa="AFTER ".idf_escape($l["field"]);}elseif($l["orig"]!="")$m[]=array($l["orig"]);if($l["orig"]!="")$Jd=next($Kd);}$Ud="";if(in_array($_POST["partition_by"],$Sd)){$Vd=array();if($_POST["partition_by"]=='RANGE'||$_POST["partition_by"]=='LIST'){foreach(array_filter($_POST["partition_names"])as$x=>$X){$Y=$_POST["partition_values"][$x];$Vd[]="\nPARTITION ".idf_escape($X)." VALUES ".($_POST["partition_by"]=='RANGE'?"LESS THAN":"IN").($Y!=""?" ($Y)":" MAXVALUE");}}$Ud.="\nPARTITION BY $_POST[partition_by]($_POST[partition])".($Vd?" (".implode(",",$Vd)."\n)":($_POST["partitions"]?" PARTITIONS ".(+$_POST["partitions"]):""));}elseif($b!=""&&support("partitioning"))$Ud.="\nREMOVE PARTITIONING";$fd=lang(138);if($b==""){cookie("adminer_engine",$_POST["Engine"]);$fd=lang(139);}$C=trim($_POST["name"]);queries_redirect(ME."table=".urlencode($C),$fd,alter_table($b,$C,$m,$dc,$_POST["Comment"],($_POST["Engine"]&&$_POST["Engine"]!=$Ld["Engine"]?$_POST["Engine"]:""),($_POST["Collation"]&&$_POST["Collation"]!=$Ld["Collation"]?$_POST["Collation"]:""),($_POST["Auto_increment"]!=""?+$_POST["Auto_increment"]:""),$Ud));}}page_header(($b!=""?lang(25):lang(140)),$k,array("table"=>$b),$b);$K=array("Engine"=>$_COOKIE["adminer_engine"],"fields"=>array(array("field"=>"","type"=>(isset($Df["int"])?"int":(isset($Df["integer"])?"integer":"")))),"partition_names"=>array(""),);if($_POST){$K=$_POST;if($K["auto_increment_col"])$K["fields"][$K["auto_increment_col"]]["auto_increment"]=true;process_fields($K["fields"]);}elseif($b!=""){$K=$Ld;$K["name"]=$b;$K["fields"]=array();if(!$_GET["auto_increment"])$K["Auto_increment"]="";foreach($Kd
as$l){$l["has_default"]=isset($l["default"]);if($l["on_update"])$l["default"].=" ON UPDATE $l[on_update]";$K["fields"][]=$l;}if(support("partitioning")){$jc="FROM information_schema.PARTITIONS WHERE TABLE_SCHEMA = ".q(DB)." AND TABLE_NAME = ".q($b);$I=$g->query("SELECT PARTITION_METHOD, PARTITION_ORDINAL_POSITION, PARTITION_EXPRESSION $jc ORDER BY PARTITION_ORDINAL_POSITION DESC LIMIT 1");list($K["partition_by"],$K["partitions"],$K["partition"])=$I->fetch_row();$K["partition_names"]=array();$K["partition_values"]=array();foreach(get_rows("SELECT PARTITION_NAME, PARTITION_DESCRIPTION $jc AND PARTITION_NAME != '' ORDER BY PARTITION_ORDINAL_POSITION")as$Ee){$K["partition_names"][]=$Ee["PARTITION_NAME"];$K["partition_values"][]=$Ee["PARTITION_DESCRIPTION"];}$K["partition_names"][]="";}}$e=collations();$Ze=floor(extension_loaded("suhosin")?(min(ini_get("suhosin.request.max_vars"),ini_get("suhosin.post.max_vars"))-13)/10:0);if($Ze&&count($K["fields"])>$Ze)echo"<p class='error'>".h(lang(141,'suhosin.post.max_vars','suhosin.request.max_vars'))."\n";$Gb=engines();foreach($Gb
as$Fb){if(!strcasecmp($Fb,$K["Engine"])){$K["Engine"]=$Fb;break;}}echo'
<form action="" method="post" id="form">
<p>
',lang(142),': <input name="name" maxlength="64" value="',h($K["name"]),'">
';if($b==""&&!$_POST){?><script type='text/javascript'>document.getElementById('form')['name'].focus();</script><?php }echo($Gb?html_select("Engine",array(""=>"(".lang(143).")")+$Gb,$K["Engine"]):""),' ',($e&&!ereg("sqlite|mssql",$w)?html_select("Collation",array(""=>"(".lang(79).")")+$e,$K["Collation"]):""),' <input type="submit" value="',lang(133),'">
<table cellspacing="0" id="edit-fields" class="nowrap">
';$Ua=($_POST?$_POST["comments"]:$K["Comment"]!="");if(!$_POST&&!$Ua){foreach($K["fields"]as$l){if($l["comment"]!=""){$Ua=true;break;}}}edit_fields($K["fields"],$e,"TABLE",$Ze,$o,$Ua);echo'</table>
<p>
',lang(86),': <input name="Auto_increment" size="6" value="',h($K["Auto_increment"]),'">
<label class="jsonly"><input type="checkbox" name="defaults" value="1"',($_POST["defaults"]?" checked":""),' onclick="columnShow(this.checked, 5);">',lang(87),'</label>
',(support("comment")?checkbox("comments",1,$Ua,lang(88),"columnShow(this.checked, 6); toggle('Comment'); if (this.checked) this.form['Comment'].focus();",true).' <input id="Comment" name="Comment" value="'.h($K["Comment"]).'" maxlength="60"'.($Ua?'':' class="hidden"').'>':''),'<p>
<input type="submit" value="',lang(133),'">
';if($_GET["create"]!=""){echo'<input type="submit" name="drop" value="',lang(74),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
';if(support("partitioning")){$Td=ereg('RANGE|LIST',$K["partition_by"]);print_fieldset("partition",lang(144),$K["partition_by"]);echo'<p>
',html_select("partition_by",array(-1=>"")+$Sd,$K["partition_by"],"partitionByChange(this);"),'(<input name="partition" value="',h($K["partition"]),'">)
',lang(145),': <input name="partitions" size="2" value="',h($K["partitions"]),'"',($Td||!$K["partition_by"]?" class='hidden'":""),'>
<table cellspacing="0" id="partition-table"',($Td?"":" class='hidden'"),'>
<thead><tr><th>',lang(146),'<th>',lang(147),'</thead>
';foreach($K["partition_names"]as$x=>$X){echo'<tr>','<td><input name="partition_names[]" value="'.h($X).'"'.($x==count($K["partition_names"])-1?' onchange="partitionNameChange(this);"':'').'>','<td><input name="partition_values[]" value="'.h($K["partition_values"][$x]).'">';}echo'</table>
</div></fieldset>
';}echo'</form>
';}elseif(isset($_GET["indexes"])){$b=$_GET["indexes"];$_c=array("PRIMARY","UNIQUE","INDEX");$S=table_status($b);if(eregi("MyISAM|M?aria",$S["Engine"]))$_c[]="FULLTEXT";$u=indexes($b);if($w=="sqlite"){unset($_c[0]);unset($u[""]);}if($_POST&&!$k&&!$_POST["add"]){$ra=array();foreach($_POST["indexes"]as$t){$C=$t["name"];if(in_array($t["type"],$_c)){$f=array();$Tc=array();$P=array();ksort($t["columns"]);foreach($t["columns"]as$x=>$Qa){if($Qa!=""){$Sc=$t["lengths"][$x];$P[]=idf_escape($Qa).($Sc?"(".(+$Sc).")":"");$f[]=$Qa;$Tc[]=($Sc?$Sc:null);}}if($f){$Rb=$u[$C];if($Rb){ksort($Rb["columns"]);ksort($Rb["lengths"]);if($t["type"]==$Rb["type"]&&array_values($Rb["columns"])===$f&&(!$Rb["lengths"]||array_values($Rb["lengths"])===$Tc)){unset($u[$C]);continue;}}$ra[]=array($t["type"],$C,"(".implode(", ",$P).")");}}}foreach($u
as$C=>$Rb)$ra[]=array($Rb["type"],$C,"DROP");if(!$ra)redirect(ME."table=".urlencode($b));queries_redirect(ME."table=".urlencode($b),lang(148),alter_indexes($b,$ra));}page_header(lang(96),$k,array("table"=>$b),$b);$m=array_keys(fields($b));$K=array("indexes"=>$u);if($_POST){$K=$_POST;if($_POST["add"]){foreach($K["indexes"]as$x=>$t){if($t["columns"][count($t["columns"])]!="")$K["indexes"][$x]["columns"][]="";}$t=end($K["indexes"]);if($t["type"]||array_filter($t["columns"],'strlen')||array_filter($t["lengths"],'strlen'))$K["indexes"][]=array("columns"=>array(1=>""));}}else{foreach($K["indexes"]as$x=>$t){$K["indexes"][$x]["name"]=$x;$K["indexes"][$x]["columns"][]="";}$K["indexes"][]=array("columns"=>array(1=>""));}echo'
<form action="" method="post">
<table cellspacing="0" class="nowrap">
<thead><tr><th>',lang(149),'<th>',lang(150),'<th>',lang(151),'</thead>
';$v=1;foreach($K["indexes"]as$t){echo"<tr><td>".html_select("indexes[$v][type]",array(-1=>"")+$_c,$t["type"],($v==count($K["indexes"])?"indexesAddRow(this);":1))."<td>";ksort($t["columns"]);$r=1;foreach($t["columns"]as$x=>$Qa){echo"<span>".html_select("indexes[$v][columns][$r]",array(-1=>"")+$m,$Qa,($r==count($t["columns"])?"indexesAddColumn":"indexesChangeColumn")."(this, '".js_escape($w=="sql"?"":$_GET["indexes"]."_")."');"),"<input name='indexes[$v][lengths][$r]' size='2' value='".h($t["lengths"][$x])."'> </span>";$r++;}echo"<td><input name='indexes[$v][name]' value='".h($t["name"])."'>\n";$v++;}echo'</table>
<p>
<input type="submit" value="',lang(133),'">
<noscript><p><input type="submit" name="add" value="',lang(89),'"></noscript>
<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["database"])){if($_POST&&!$k&&!isset($_POST["add_x"])){restart_session();$C=trim($_POST["name"]);if($_POST["drop"]){$_GET["db"]="";queries_redirect(remove_from_uri("db|database"),lang(152),drop_databases(array(DB)));}elseif(DB!==$C){if(DB!=""){$_GET["db"]=$C;queries_redirect(preg_replace('~db=[^&]*&~','',ME)."db=".urlencode($C),lang(153),rename_database($C,$_POST["collation"]));}else{$i=explode("\n",str_replace("\r","",$C));$Xe=true;$Mc="";foreach($i
as$j){if(count($i)==1||$j!=""){if(!create_database($j,$_POST["collation"]))$Xe=false;$Mc=$j;}}queries_redirect(ME."db=".urlencode($Mc),lang(154),$Xe);}}else{if(!$_POST["collation"])redirect(substr(ME,0,-1));query_redirect("ALTER DATABASE ".idf_escape($C).(eregi('^[a-z0-9_]+$',$_POST["collation"])?" COLLATE $_POST[collation]":""),substr(ME,0,-1),lang(155));}}page_header(DB!=""?lang(44):lang(156),$k,array(),DB);$e=collations();$C=DB;$Na=null;if($_POST){$C=$_POST["name"];$Na=$_POST["collation"];}elseif(DB!="")$Na=db_collation(DB,$e);elseif($w=="sql"){foreach(get_vals("SHOW GRANTS")as$q){if(preg_match('~ ON (`(([^\\\\`]|``|\\\\.)*)%`\\.\\*)?~',$q,$A)&&$A[1]){$C=stripcslashes(idf_unescape("`$A[2]`"));break;}}}echo'
<form action="" method="post">
<p>
',($_POST["add_x"]||strpos($C,"\n")?'<textarea id="name" name="name" rows="10" cols="40">'.h($C).'</textarea><br>':'<input id="name" name="name" value="'.h($C).'" maxlength="64">')."\n".($e?html_select("collation",array(""=>"(".lang(79).")")+$e,$Na):"");?>
<script type='text/javascript'>document.getElementById('name').focus();</script>
<input type="submit" value="<?php echo
lang(133),'">
';if(DB!="")echo"<input type='submit' name='drop' value='".lang(74)."'".confirm().">\n";elseif(!$_POST["add_x"]&&$_GET["db"]=="")echo"<input type='image' name='add' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.4.0-dev' alt='+' title='".lang(89)."'>\n";echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["call"])){$ca=$_GET["call"];page_header(lang(157).": ".h($ca),$k);$Be=routine($ca,(isset($_GET["callf"])?"FUNCTION":"PROCEDURE"));$zc=array();$Md=array();foreach($Be["fields"]as$r=>$l){if(substr($l["inout"],-3)=="OUT")$Md[$r]="@".idf_escape($l["field"])." AS ".idf_escape($l["field"]);if(!$l["inout"]||substr($l["inout"],0,2)=="IN")$zc[]=$r;}if(!$k&&$_POST){$Ea=array();foreach($Be["fields"]as$x=>$l){if(in_array($x,$zc)){$X=process_input($l);if($X===false)$X="''";if(isset($Md[$x]))$g->query("SET @".idf_escape($l["field"])." = $X");}$Ea[]=(isset($Md[$x])?"@".idf_escape($l["field"]):$X);}$H=(isset($_GET["callf"])?"SELECT":"CALL")." ".idf_escape($ca)."(".implode(", ",$Ea).")";echo"<p><code class='jush-$w'>".h($H)."</code> <a href='".h(ME)."sql=".urlencode($H)."'>".lang(28)."</a>\n";if(!$g->multi_query($H))echo"<p class='error'>".error()."\n";else{$h=connect();if(is_object($h))$h->select_db(DB);do{$I=$g->store_result();if(is_object($I))select($I,$h);else
echo"<p class='message'>".lang(158,$g->affected_rows)."\n";}while($g->next_result());if($Md)select($g->query("SELECT ".implode(", ",$Md)));}}echo'
<form action="" method="post">
';if($zc){echo"<table cellspacing='0'>\n";foreach($zc
as$x){$l=$Be["fields"][$x];$C=$l["field"];echo"<tr><th>".$c->fieldName($l);$Y=$_POST["fields"][$C];if($Y!=""){if($l["type"]=="enum")$Y=+$Y;if($l["type"]=="set")$Y=array_sum($Y);}input($l,$Y,(string)$_POST["function"][$C]);echo"\n";}echo"</table>\n";}echo'<p>
<input type="submit" value="',lang(157),'">
<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["foreign"])){$b=$_GET["foreign"];if($_POST&&!$k&&!$_POST["add"]&&!$_POST["change"]&&!$_POST["change-js"]){if($_POST["drop"])query_redirect("ALTER TABLE ".table($b)."\nDROP ".($w=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($_GET["name"]),ME."table=".urlencode($b),lang(159));else{$Oe=array_filter($_POST["source"],'strlen');ksort($Oe);$lf=array();foreach($Oe
as$x=>$X)$lf[$x]=$_POST["target"][$x];query_redirect("ALTER TABLE ".table($b).($_GET["name"]!=""?"\nDROP ".($w=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($_GET["name"]).",":"")."\nADD FOREIGN KEY (".implode(", ",array_map('idf_escape',$Oe)).") REFERENCES ".table($_POST["table"])." (".implode(", ",array_map('idf_escape',$lf)).")".(ereg("^($yd)\$",$_POST["on_delete"])?" ON DELETE $_POST[on_delete]":"").(ereg("^($yd)\$",$_POST["on_update"])?" ON UPDATE $_POST[on_update]":""),ME."table=".urlencode($b),($_GET["name"]!=""?lang(160):lang(161)));$k=lang(162)."<br>$k";}}page_header(lang(163),$k,array("table"=>$b),$b);$K=array("table"=>$b,"source"=>array(""));if($_POST){$K=$_POST;ksort($K["source"]);if($_POST["add"])$K["source"][]="";elseif($_POST["change"]||$_POST["change-js"])$K["target"]=array();}elseif($_GET["name"]!=""){$o=foreign_keys($b);$K=$o[$_GET["name"]];$K["source"][]="";}$Oe=array_keys(fields($b));$lf=($b===$K["table"]?$Oe:array_keys(fields($K["table"])));$se=array();foreach(table_status()as$C=>$S){if(fk_support($S))$se[]=$C;}echo'
<form action="" method="post">
<p>
';if($K["db"]==""&&$K["ns"]==""){echo
lang(164),':
',html_select("table",$se,$K["table"],"this.form['change-js'].value = '1'; this.form.submit();"),'<input type="hidden" name="change-js" value="">
<noscript><p><input type="submit" name="change" value="',lang(165),'"></noscript>
<table cellspacing="0">
<thead><tr><th>',lang(98),'<th>',lang(99),'</thead>
';$v=0;foreach($K["source"]as$x=>$X){echo"<tr>","<td>".html_select("source[".(+$x)."]",array(-1=>"")+$Oe,$X,($v==count($K["source"])-1?"foreignAddRow(this);":1)),"<td>".html_select("target[".(+$x)."]",$lf,$K["target"][$x]);$v++;}echo'</table>
<p>
',lang(80),': ',html_select("on_delete",array(-1=>"")+explode("|",$yd),$K["on_delete"]),' ',lang(100),': ',html_select("on_update",array(-1=>"")+explode("|",$yd),$K["on_update"]),'<p>
<input type="submit" value="',lang(133),'">
<noscript><p><input type="submit" name="add" value="',lang(166),'"></noscript>
';}if($_GET["name"]!=""){echo'<input type="submit" name="drop" value="',lang(74),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["view"])){$b=$_GET["view"];$vb=false;if($_POST&&!$k){$C=trim($_POST["name"]);$vb=drop_create("DROP VIEW ".table($b),"CREATE VIEW ".table($C)." AS\n$_POST[select]",($_POST["drop"]?substr(ME,0,-1):ME."table=".urlencode($C)),lang(167),lang(168),lang(169),$b);}page_header(($b!=""?lang(24):lang(170)),$k,array("table"=>$b),$b);$K=$_POST;if(!$K&&$b!=""){$K=view($b);$K["name"]=$b;}echo'
<form action="" method="post">
<p>',lang(151),': <input name="name" value="',h($K["name"]),'" maxlength="64">
<p>';textarea("select",$K["select"]);echo'<p>
';if($vb){echo'<input type="hidden" name="dropped" value="1">';}echo'<input type="submit" value="',lang(133),'">
';if($_GET["view"]!=""){echo'<input type="submit" name="drop" value="',lang(74),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["event"])){$aa=$_GET["event"];$Ec=array("YEAR","QUARTER","MONTH","DAY","HOUR","MINUTE","WEEK","SECOND","YEAR_MONTH","DAY_HOUR","DAY_MINUTE","DAY_SECOND","HOUR_MINUTE","HOUR_SECOND","MINUTE_SECOND");$Te=array("ENABLED"=>"ENABLE","DISABLED"=>"DISABLE","SLAVESIDE_DISABLED"=>"DISABLE ON SLAVE");if($_POST&&!$k){if($_POST["drop"])query_redirect("DROP EVENT ".idf_escape($aa),substr(ME,0,-1),lang(171));elseif(in_array($_POST["INTERVAL_FIELD"],$Ec)&&isset($Te[$_POST["STATUS"]])){$Fe="\nON SCHEDULE ".($_POST["INTERVAL_VALUE"]?"EVERY ".q($_POST["INTERVAL_VALUE"])." $_POST[INTERVAL_FIELD]".($_POST["STARTS"]?" STARTS ".q($_POST["STARTS"]):"").($_POST["ENDS"]?" ENDS ".q($_POST["ENDS"]):""):"AT ".q($_POST["STARTS"]))." ON COMPLETION".($_POST["ON_COMPLETION"]?"":" NOT")." PRESERVE";queries_redirect(substr(ME,0,-1),($aa!=""?lang(172):lang(173)),queries(($aa!=""?"ALTER EVENT ".idf_escape($aa).$Fe.($aa!=$_POST["EVENT_NAME"]?"\nRENAME TO ".idf_escape($_POST["EVENT_NAME"]):""):"CREATE EVENT ".idf_escape($_POST["EVENT_NAME"]).$Fe)."\n".$Te[$_POST["STATUS"]]." COMMENT ".q($_POST["EVENT_COMMENT"]).rtrim(" DO\n$_POST[EVENT_DEFINITION]",";").";"));}}page_header(($aa!=""?lang(174).": ".h($aa):lang(175)),$k);$K=$_POST;if(!$K&&$aa!=""){$L=get_rows("SELECT * FROM information_schema.EVENTS WHERE EVENT_SCHEMA = ".q(DB)." AND EVENT_NAME = ".q($aa));$K=reset($L);}echo'
<form action="" method="post">
<table cellspacing="0">
<tr><th>',lang(151),'<td><input name="EVENT_NAME" value="',h($K["EVENT_NAME"]),'" maxlength="64">
<tr><th>',lang(176),'<td><input name="STARTS" value="',h("$K[EXECUTE_AT]$K[STARTS]"),'">
<tr><th>',lang(177),'<td><input name="ENDS" value="',h($K["ENDS"]),'">
<tr><th>',lang(178),'<td><input name="INTERVAL_VALUE" value="',h($K["INTERVAL_VALUE"]),'" size="6"> ',html_select("INTERVAL_FIELD",$Ec,$K["INTERVAL_FIELD"]),'<tr><th>',lang(69),'<td>',html_select("STATUS",$Te,$K["STATUS"]),'<tr><th>',lang(88),'<td><input name="EVENT_COMMENT" value="',h($K["EVENT_COMMENT"]),'" maxlength="64">
<tr><th>&nbsp;<td>',checkbox("ON_COMPLETION","PRESERVE",$K["ON_COMPLETION"]=="PRESERVE",lang(179)),'</table>
<p>';textarea("EVENT_DEFINITION",$K["EVENT_DEFINITION"]);echo'<p>
<input type="submit" value="',lang(133),'">
';if($aa!=""){echo'<input type="submit" name="drop" value="',lang(74),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["procedure"])){$ca=$_GET["procedure"];$Be=(isset($_GET["function"])?"FUNCTION":"PROCEDURE");$Ce=routine_languages();$vb=false;if($_POST&&!$k&&!$_POST["add"]&&!$_POST["drop_col"]&&!$_POST["up"]&&!$_POST["down"]){$P=array();$m=(array)$_POST["fields"];ksort($m);foreach($m
as$l){if($l["field"]!="")$P[]=(ereg("^($Bc)\$",$l["inout"])?"$l[inout] ":"").idf_escape($l["field"]).process_type($l,"CHARACTER SET");}$vb=drop_create("DROP $Be ".idf_escape($ca),"CREATE $Be ".idf_escape(trim($_POST["name"]))." (".implode(", ",$P).")".(isset($_GET["function"])?" RETURNS".process_type($_POST["returns"],"CHARACTER SET"):"").(in_array($_POST["language"],$Ce)?" LANGUAGE $_POST[language]":"").rtrim("\n$_POST[definition]",";").";",substr(ME,0,-1),lang(180),lang(181),lang(182),$ca);}page_header(($ca!=""?(isset($_GET["function"])?lang(183):lang(184)).": ".h($ca):(isset($_GET["function"])?lang(185):lang(186))),$k);$e=get_vals("SHOW CHARACTER SET");sort($e);$K=array("fields"=>array());if($_POST){$K=$_POST;$K["fields"]=(array)$K["fields"];process_fields($K["fields"]);}elseif($ca!=""){$K=routine($ca,$Be);$K["name"]=$ca;}echo'
<form action="" method="post" id="form">
<p>',lang(151),': <input name="name" value="',h($K["name"]),'" maxlength="64">
',($Ce?lang(8).": ".html_select("language",$Ce,$K["language"]):""),'<table cellspacing="0" class="nowrap">
';edit_fields($K["fields"],$e,$Be);if(isset($_GET["function"])){echo"<tr><td>".lang(187);edit_type("returns",$K["returns"],$e);}echo'</table>
<p>';textarea("definition",$K["definition"]);echo'<p>
<input type="submit" value="',lang(133),'">
';if($ca!=""){echo'<input type="submit" name="drop" value="',lang(74),'"',confirm(),'>';}if($vb){echo'<input type="hidden" name="dropped" value="1">';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["trigger"])){$b=$_GET["trigger"];$_f=trigger_options();$zf=array("INSERT","UPDATE","DELETE");$vb=false;if($_POST&&!$k&&in_array($_POST["Timing"],$_f["Timing"])&&in_array($_POST["Event"],$zf)&&in_array($_POST["Type"],$_f["Type"])){$qf=" $_POST[Timing] $_POST[Event]";$xd=" ON ".table($b);$vb=drop_create("DROP TRIGGER ".idf_escape($_GET["name"]).($w=="pgsql"?$xd:""),"CREATE TRIGGER ".idf_escape($_POST["Trigger"]).($w=="mssql"?$xd.$qf:$qf.$xd).rtrim(" $_POST[Type]\n$_POST[Statement]",";").";",ME."table=".urlencode($b),lang(188),lang(189),lang(190),$_GET["name"]);}page_header(($_GET["name"]!=""?lang(191).": ".h($_GET["name"]):lang(192)),$k,array("table"=>$b));$K=$_POST;if(!$K)$K=trigger($_GET["name"])+array("Trigger"=>$b."_bi");echo'
<form action="" method="post" id="form">
<table cellspacing="0">
<tr><th>',lang(193),'<td>',html_select("Timing",$_f["Timing"],$K["Timing"],"if (/^".preg_quote($b,"/")."_[ba][iud]$/.test(this.form['Trigger'].value)) this.form['Trigger'].value = '".js_escape($b)."_' + selectValue(this).charAt(0).toLowerCase() + selectValue(this.form['Event']).charAt(0).toLowerCase();"),'<tr><th>',lang(194),'<td>',html_select("Event",$zf,$K["Event"],"this.form['Timing'].onchange();"),'<tr><th>',lang(83),'<td>',html_select("Type",$_f["Type"],$K["Type"]),'</table>
<p>',lang(151),': <input name="Trigger" value="',h($K["Trigger"]),'" maxlength="64">
<p>';textarea("Statement",$K["Statement"]);echo'<p>
<input type="submit" value="',lang(133),'">
';if($_GET["name"]!=""){echo'<input type="submit" name="drop" value="',lang(74),'"',confirm(),'>';}if($vb){echo'<input type="hidden" name="dropped" value="1">';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["user"])){$ea=$_GET["user"];$ke=array(""=>array("All privileges"=>""));foreach(get_rows("SHOW PRIVILEGES")as$K){foreach(explode(",",($K["Privilege"]=="Grant option"?"":$K["Context"]))as$Za)$ke[$Za][$K["Privilege"]]=$K["Comment"];}$ke["Server Admin"]+=$ke["File access on server"];$ke["Databases"]["Create routine"]=$ke["Procedures"]["Create routine"];unset($ke["Procedures"]["Create routine"]);$ke["Columns"]=array();foreach(array("Select","Insert","Update","References")as$X)$ke["Columns"][$X]=$ke["Tables"][$X];unset($ke["Server Admin"]["Usage"]);foreach($ke["Tables"]as$x=>$X)unset($ke["Databases"][$x]);$pd=array();if($_POST){foreach($_POST["objects"]as$x=>$X)$pd[$X]=(array)$pd[$X]+(array)$_POST["grants"][$x];}$mc=array();$vd="";if(isset($_GET["host"])&&($I=$g->query("SHOW GRANTS FOR ".q($ea)."@".q($_GET["host"])))){while($K=$I->fetch_row()){if(preg_match('~GRANT (.*) ON (.*) TO ~',$K[0],$A)&&preg_match_all('~ *([^(,]*[^ ,(])( *\\([^)]+\\))?~',$A[1],$Yc,PREG_SET_ORDER)){foreach($Yc
as$X){if($X[1]!="USAGE")$mc["$A[2]$X[2]"][$X[1]]=true;if(ereg(' WITH GRANT OPTION',$K[0]))$mc["$A[2]$X[2]"]["GRANT OPTION"]=true;}}if(preg_match("~ IDENTIFIED BY PASSWORD '([^']+)~",$K[0],$A))$vd=$A[1];}}if($_POST&&!$k){$wd=(isset($_GET["host"])?q($ea)."@".q($_GET["host"]):"''");$qd=q($_POST["user"])."@".q($_POST["host"]);$Wd=q($_POST["pass"]);if($_POST["drop"])query_redirect("DROP USER $wd",ME."privileges=",lang(195));else{$eb=false;if($wd!=$qd){$eb=queries(($g->server_info<5?"GRANT USAGE ON *.* TO":"CREATE USER")." $qd IDENTIFIED BY".($_POST["hashed"]?" PASSWORD":"")." $Wd");$k=!$eb;}elseif($_POST["pass"]!=$vd||!$_POST["hashed"])queries("SET PASSWORD FOR $qd = ".($_POST["hashed"]?$Wd:"PASSWORD($Wd)"));if(!$k){$ze=array();foreach($pd
as$sd=>$q){if(isset($_GET["grant"]))$q=array_filter($q);$q=array_keys($q);if(isset($_GET["grant"]))$ze=array_diff(array_keys(array_filter($pd[$sd],'strlen')),$q);elseif($wd==$qd){$ud=array_keys((array)$mc[$sd]);$ze=array_diff($ud,$q);$q=array_diff($q,$ud);unset($mc[$sd]);}if(preg_match('~^(.+)\\s*(\\(.*\\))?$~U',$sd,$A)&&(!grant("REVOKE",$ze,$A[2]," ON $A[1] FROM $qd")||!grant("GRANT",$q,$A[2]," ON $A[1] TO $qd"))){$k=true;break;}}}if(!$k&&isset($_GET["host"])){if($wd!=$qd)queries("DROP USER $wd");elseif(!isset($_GET["grant"])){foreach($mc
as$sd=>$ze){if(preg_match('~^(.+)(\\(.*\\))?$~U',$sd,$A))grant("REVOKE",array_keys($ze),$A[2]," ON $A[1] FROM $qd");}}}queries_redirect(ME."privileges=",(isset($_GET["host"])?lang(196):lang(197)),!$k);if($eb)$g->query("DROP USER $qd");}}page_header((isset($_GET["host"])?lang(17).": ".h("$ea@$_GET[host]"):lang(112)),$k,array("privileges"=>array('',lang(48))));if($_POST){$K=$_POST;$mc=$pd;}else{$K=$_GET+array("host"=>$g->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', -1)"));$K["pass"]=$vd;if($vd!="")$K["hashed"]=true;$mc[(DB!=""&&!isset($_GET["host"])?idf_escape(addcslashes(DB,"%_")):"").".*"]=array();}echo'<form action="" method="post">
<table cellspacing="0">
<tr><th>',lang(16),'<td><input name="host" maxlength="60" value="',h($K["host"]),'">
<tr><th>',lang(17),'<td><input name="user" maxlength="16" value="',h($K["user"]),'">
<tr><th>',lang(18),'<td><input id="pass" name="pass" value="',h($K["pass"]),'">
';if(!$K["hashed"]){echo'<script type="text/javascript">typePassword(document.getElementById(\'pass\'));</script>';}echo
checkbox("hashed",1,$K["hashed"],lang(198),"typePassword(this.form['pass'], this.checked);"),'</table>

';echo"<table cellspacing='0'>\n","<thead><tr><th colspan='2'><a href='http://dev.mysql.com/doc/refman/".substr($g->server_info,0,3)."/en/grant.html#priv_level' target='_blank' rel='noreferrer'>".lang(48)."</a>";$r=0;foreach($mc
as$sd=>$q){echo'<th>'.($sd!="*.*"?"<input name='objects[$r]' value='".h($sd)."' size='10'>":"<input type='hidden' name='objects[$r]' value='*.*' size='10'>*.*");$r++;}echo"</thead>\n";foreach(array(""=>"","Server Admin"=>lang(16),"Databases"=>lang(19),"Tables"=>lang(94),"Columns"=>lang(95),"Procedures"=>lang(199),)as$Za=>$ob){foreach((array)$ke[$Za]as$je=>$Ta){echo"<tr".odd()."><td".($ob?">$ob<td":" colspan='2'").' lang="en" title="'.h($Ta).'">'.h($je);$r=0;foreach($mc
as$sd=>$q){$C="'grants[$r][".h(strtoupper($je))."]'";$Y=$q[strtoupper($je)];if($Za=="Server Admin"&&$sd!=(isset($mc["*.*"])?"*.*":".*"))echo"<td>&nbsp;";elseif(isset($_GET["grant"]))echo"<td><select name=$C><option><option value='1'".($Y?" selected":"").">".lang(200)."<option value='0'".($Y=="0"?" selected":"").">".lang(201)."</select>";else
echo"<td align='center'><input type='checkbox' name=$C value='1'".($Y?" checked":"").($je=="All privileges"?" id='grants-$r-all'":($je=="Grant option"?"":" onclick=\"if (this.checked) formUncheck('grants-$r-all');\"")).">";$r++;}}}echo"</table>\n",'<p>
<input type="submit" value="',lang(133),'">
';if(isset($_GET["host"])){echo'<input type="submit" name="drop" value="',lang(74),'"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["processlist"])){if(support("kill")&&$_POST&&!$k){$Jc=0;foreach((array)$_POST["kill"]as$X){if(queries("KILL ".(+$X)))$Jc++;}queries_redirect(ME."processlist=",lang(202,$Jc),$Jc||!$_POST["kill"]);}page_header(lang(67),$k);echo'
<form action="" method="post">
<table cellspacing="0" onclick="tableClick(event);" class="nowrap checkable">
';$r=-1;foreach(process_list()as$r=>$K){if(!$r)echo"<thead><tr lang='en'>".(support("kill")?"<th>&nbsp;":"")."<th>".implode("<th>",array_keys($K))."</thead>\n";echo"<tr".odd().">".(support("kill")?"<td>".checkbox("kill[]",$K["Id"],0):"");foreach($K
as$x=>$X)echo"<td>".(($w=="sql"&&$x=="Info"&&$X!="")||($w=="pgsql"&&$x=="current_query"&&$X!="<IDLE>")||($w=="oracle"&&$x=="sql_text"&&$X!="")?"<code class='jush-$w'>".shorten_utf8($X,100,"</code>").' <a href="'.h(ME.($K["db"]!=""?"db=".urlencode($K["db"])."&":"")."sql=".urlencode($X)).'">'.lang(28).'</a>':nbsp($X));echo"\n";}echo'</table>
<script type=\'text/javascript\'>tableCheck();</script>
<p>
';if(support("kill")){echo($r+1)."/".lang(203,$g->result("SELECT @@max_connections")),"<p><input type='submit' value='".lang(204)."'>\n";}echo'<input type="hidden" name="token" value="',$T,'">
</form>
';}elseif(isset($_GET["select"])){$b=$_GET["select"];$S=table_status($b);$u=indexes($b);$m=fields($b);$o=column_foreign_keys($b);if($S["Oid"]=="t")$u[]=array("type"=>"PRIMARY","columns"=>array("oid"));parse_str($_COOKIE["adminer_import"],$la);$_e=array();$f=array();$of=null;foreach($m
as$x=>$l){$C=$c->fieldName($l);if(isset($l["privileges"]["select"])&&$C!=""){$f[$x]=html_entity_decode(strip_tags($C));if(ereg('text|lob',$l["type"]))$of=$c->selectLengthProcess();}$_e+=$l["privileges"];}list($N,$nc)=$c->selectColumnsProcess($f,$u);$Z=$c->selectSearchProcess($m,$u);$Ed=$c->selectOrderProcess($m,$u);$y=$c->selectLimitProcess();$jc=($N?implode(", ",$N):($S["Oid"]=="t"?"oid, ":"")."*")."\nFROM ".table($b);$oc=($nc&&count($nc)<count($N)?"\nGROUP BY ".implode(", ",$nc):"").($Ed?"\nORDER BY ".implode(", ",$Ed):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$Hf=>$K)echo$g->result("SELECT".limit(idf_escape(key($K))." FROM ".table($b)," WHERE ".where_check($Hf).($Z?" AND ".implode(" AND ",$Z):"").($Ed?" ORDER BY ".implode(", ",$Ed):""),1));exit;}if($_POST&&!$k){$Wf="(".implode(") OR (",array_map('where_check',(array)$_POST["check"])).")";$ge=$Jf=null;foreach($u
as$t){if($t["type"]=="PRIMARY"){$ge=array_flip($t["columns"]);$Jf=($N?$ge:array());break;}}foreach((array)$Jf
as$x=>$X){if(in_array(idf_escape($x),$N))unset($Jf[$x]);}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($b);$c->dumpTable($b,"");if(!is_array($_POST["check"])||$Jf===array()){$Vf=$Z;if(is_array($_POST["check"]))$Vf[]="($Wf)";$H="SELECT $jc".($Vf?"\nWHERE ".implode(" AND ",$Vf):"").$oc;}else{$Ff=array();foreach($_POST["check"]as$X)$Ff[]="(SELECT".limit($jc,"\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X).$oc,1).")";$H=implode(" UNION ALL ",$Ff);}$c->dumpData($b,"table",$H);exit;}if(!$c->selectEmailProcess($Z,$o)){if($_POST["save"]||$_POST["delete"]){$I=true;$ma=0;$H=table($b);$P=array();if(!$_POST["delete"]){foreach($f
as$C=>$X){$X=process_input($m[$C]);if($X!==null){if($_POST["clone"])$P[idf_escape($C)]=($X!==false?$X:idf_escape($C));elseif($X!==false)$P[]=idf_escape($C)." = $X";}}$H.=($_POST["clone"]?" (".implode(", ",array_keys($P)).")\nSELECT ".implode(", ",$P)."\nFROM ".table($b):" SET\n".implode(",\n",$P));}if($_POST["delete"]||$P){$Ra="UPDATE";if($_POST["delete"]){$Ra="DELETE";$H="FROM $H";}if($_POST["clone"]){$Ra="INSERT";$H="INTO $H";}if($_POST["all"]||($Jf===array()&&$_POST["check"])||count($nc)<count($N)){$I=queries($Ra." $H".($_POST["all"]?($Z?"\nWHERE ".implode(" AND ",$Z):""):"\nWHERE $Wf"));$ma=$g->affected_rows;}else{foreach((array)$_POST["check"]as$X){$I=queries($Ra.limit1($H,"\nWHERE ".where_check($X)));if(!$I)break;$ma+=$g->affected_rows;}}}queries_redirect(remove_from_uri("page"),lang(205,$ma),$I);}elseif(!$_POST["import"]){if(!$_POST["val"])$k=lang(206);else{$I=true;$ma=0;foreach($_POST["val"]as$Hf=>$K){$P=array();foreach($K
as$x=>$X){$x=bracket_escape($x,1);$P[]=idf_escape($x)." = ".(ereg('char|text',$m[$x]["type"])||$X!=""?$c->processInput($m[$x],$X):"NULL");}$H=table($b)." SET ".implode(", ",$P);$Vf=" WHERE ".where_check($Hf).($Z?" AND ".implode(" AND ",$Z):"");$I=queries("UPDATE".(count($nc)<count($N)?" $H$Vf":limit1($H,$Vf)));if(!$I)break;$ma+=$g->affected_rows;}queries_redirect(remove_from_uri(),lang(205,$ma),$I);}}elseif(is_string($Yb=get_file("csv_file",true))){cookie("adminer_import","output=".urlencode($la["output"])."&format=".urlencode($_POST["separator"]));$I=true;$Pa=array_keys($m);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$Yb,$Yc);$ma=count($Yc[0]);begin();$Ke=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));foreach($Yc[0]as$x=>$X){preg_match_all("~((\"[^\"]*\")+|[^$Ke]*)$Ke~",$X.$Ke,$Zc);if(!$x&&!array_diff($Zc[1],$Pa)){$Pa=$Zc[1];$ma--;}else{$P=array();foreach($Zc[1]as$r=>$Ma)$P[idf_escape($Pa[$r])]=($Ma==""&&$m[$Pa[$r]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$Ma))));$I=insert_update($b,$P,$ge);if(!$I)break;}}if($I)queries("COMMIT");queries_redirect(remove_from_uri("page"),lang(207,$ma),$I);queries("ROLLBACK");}else$k=upload_error($Yb);}}$ef=$c->tableName($S);page_header(lang(30).": $ef",$k);session_write_close();$P=null;if(isset($_e["insert"])){$P="";foreach((array)$_GET["where"]as$X){if(count($o[$X["col"]])==1&&($X["op"]=="="||(!$X["op"]&&!ereg('[_%]',$X["val"]))))$P.="&set".urlencode("[".bracket_escape($X["col"])."]")."=".urlencode($X["val"]);}}$c->selectLinks($S,$P);if(!$f)echo"<p class='error'>".lang(208).($m?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($b).'">',"</div>\n";$c->selectColumnsPrint($N,$f);$c->selectSearchPrint($Z,$f,$u);$c->selectOrderPrint($Ed,$f,$u);$c->selectLimitPrint($y);$c->selectLengthPrint($of);$c->selectActionPrint($u);echo"</form>\n";$E=$_GET["page"];if($E=="last"){$hc=$g->result("SELECT COUNT(*) FROM ".table($b).($Z?" WHERE ".implode(" AND ",$Z):""));$E=floor(max(0,$hc-1)/$y);}$H="SELECT".limit((+$y&&$nc&&count($nc)<count($N)&&$w=="sql"?"SQL_CALC_FOUND_ROWS ":"").$jc,($Z?"\nWHERE ".implode(" AND ",$Z):"").$oc,($y!=""?+$y:null),($E?$y*$E:0),"\n");echo$c->selectQuery($H);$I=$g->query($H);if(!$I)echo"<p class='error'>".error()."\n";else{if($w=="mssql")$I->seek($y*$E);$Cb=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$L=array();while($K=$I->fetch_assoc()){if($E&&$w=="oracle")unset($K["RNUM"]);$L[]=$K;}if($_GET["page"]!="last")$hc=(+$y&&$nc&&count($nc)<count($N)?($w=="sql"?$g->result(" SELECT FOUND_ROWS()"):$g->result("SELECT COUNT(*) FROM ($H) x")):count($L));if(!$L)echo"<p class='message'>".lang(76)."\n";else{$za=$c->backwardKeys($b,$ef);echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$nc&&$N?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".lang(209)."</a>");$od=array();$lc=array();reset($N);$pe=1;foreach($L[0]as$x=>$X){if($S["Oid"]!="t"||$x!="oid"){$X=$_GET["columns"][key($N)];$l=$m[$N?($X?$X["col"]:current($N)):$x];$C=($l?$c->fieldName($l,$pe):"*");if($C!=""){$pe++;$od[$x]=$C;$Qa=idf_escape($x);$vc=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($x);echo'<th><a href="'.h($vc).'">'.(!$N||$X?apply_sql_function($X["fun"],$C):h(current($N)))."</a>";echo"<a href='".h("$vc&desc%5B0%5D=1")."' title='".lang(36)."' class='text'> ↓</a>";}$lc[$x]=$X["fun"];next($N);}}$Tc=array();if($_GET["modify"]){foreach($L
as$K){foreach($K
as$x=>$X)$Tc[$x]=max($Tc[$x],min(40,strlen(utf8_decode($X))));}}echo($za?"<th>".lang(210):"")."</thead>\n";foreach($c->rowDescriptions($L,$o)as$B=>$K){$Gf=unique_array($L[$B],$u);$Hf="";foreach($Gf
as$x=>$X)$Hf.="&".($X!==null?urlencode("where[".bracket_escape($x)."]")."=".urlencode($X):"null%5B%5D=".urlencode($x));echo"<tr".odd().">".(!$nc&&$N?"":"<td>".checkbox("check[]",substr($Hf,1),in_array(substr($Hf,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").(count($nc)<count($N)||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($b).$Hf)."'>".lang(209)."</a>"));foreach($K
as$x=>$X){if(isset($od[$x])){$l=$m[$x];if($X!=""&&(!isset($Cb[$x])||$Cb[$x]!=""))$Cb[$x]=(is_mail($X)?$od[$x]:"");$z="";$X=$c->editVal($X,$l);if($X!==null){if(ereg('blob|bytea|raw|file',$l["type"])&&$X!="")$z=h(ME.'download='.urlencode($b).'&field='.urlencode($x).$Hf);if($X==="")$X="&nbsp;";elseif(is_utf8($X)){if($of!=""&&ereg('text|blob',$l["type"]))$X=shorten_utf8($X,max(0,+$of));else$X=h($X);}if(!$z){foreach((array)$o[$x]as$n){if(count($o[$x])==1||end($n["source"])==$x){$z="";foreach($n["source"]as$r=>$Oe)$z.=where_link($r,$n["target"][$r],$L[$B][$Oe]);$z=h(($n["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($n["db"]),ME):ME).'select='.urlencode($n["table"]).$z);if(count($n["source"])==1)break;}}}if($x=="COUNT(*)"){$z=h(ME."select=".urlencode($b));$r=0;foreach((array)$_GET["where"]as$W){if(!array_key_exists($W["col"],$Gf))$z.=h(where_link($r++,$W["col"],$W["val"],$W["op"]));}foreach($Gf
as$Ic=>$W)$z.=h(where_link($r++,$Ic,$W));}}if(!$z){if(is_mail($X))$z="mailto:$X";if($ne=is_url($K[$x]))$z=($ne=="http"&&$ba?$K[$x]:"$ne://www.adminer.org/redirect/?url=".urlencode($K[$x]));}$s=h("val[$Hf][".bracket_escape($x)."]");$Y=$_POST["val"][$Hf][bracket_escape($x)];$qc=h($Y!==null?$Y:$K[$x]);$Xc=strpos($X,"<i>...</i>");$_b=is_utf8($X)&&$L[$B][$x]==$K[$x]&&!$lc[$x];$nf=ereg('text|lob',$l["type"]);echo(($_GET["modify"]&&$_b)||$Y!==null?"<td>".($nf?"<textarea name='$s' cols='30' rows='".(substr_count($K[$x],"\n")+1)."'>$qc</textarea>":"<input name='$s' value='$qc' size='$Tc[$x]'>"):"<td id='$s' ondblclick=\"".($_b?"selectDblClick(this, event".($Xc?", 2":($nf?", 1":"")).")":"alert('".h(lang(211))."')").";\">".$c->selectVal($X,$z,$l));}}if($za)echo"<td>";$c->backwardKeysPrint($za,$L[$B]);echo"</tr>\n";}echo"</table>\n",(!$nc&&$N?"":"<script type='text/javascript'>tableCheck();</script>\n");}if($L||$E){$Nb=true;if($_GET["page"]!="last"&&+$y&&count($nc)>=count($N)&&($hc>=$y||$E)){$hc=found_rows($S,$Z);if($hc<max(1e4,2*($E+1)*$y)){ob_flush();flush();$hc=$g->result("SELECT COUNT(*) FROM ".table($b).($Z?" WHERE ".implode(" AND ",$Z):""));}else$Nb=false;}echo"<p class='pages'>";if(+$y&&$hc>$y){$bd=floor(($hc-1)/$y);echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".lang(212)."', '".($E+1)."'), event); return false;\">".lang(212)."</a>:",pagination(0,$E).($E>5?" ...":"");for($r=max(1,$E-4);$r<min($bd,$E+5);$r++)echo
pagination($r,$E);echo($E+5<$bd?" ...":"").($Nb?pagination($bd,$E):' <a href="'.h(remove_from_uri()."&page=last").'">'.lang(213)."</a>");}echo" (".($Nb?"":"~ ").lang(114,$hc).") ".checkbox("all",1,0,lang(214))."\n";if($c->selectCommandPrint()){echo'<fieldset><legend>',lang(28),'</legend><div>
<input type="submit" value="',lang(133),'"',($_GET["modify"]?'':' title="'.lang(206).'" class="jsonly"'),'>
<input type="submit" name="edit" value="',lang(28),'">
<input type="submit" name="clone" value="',lang(215),'">
<input type="submit" name="delete" value="',lang(136),'" onclick="return confirm(\'',lang(0);?> (' + (this.form['all'].checked ? <?php echo$hc,' : formChecked(this, /check/)) + \')\');">
</div></fieldset>
';}$fc=$c->dumpFormat();if($fc){print_fieldset("export",lang(106));$Nd=$c->dumpOutput();echo($Nd?html_select("output",$Nd,$la["output"])." ":""),html_select("format",$fc,$la["format"])," <input type='submit' name='export' value='".lang(106)."'>\n","</div></fieldset>\n";}}if($c->selectImportPrint()){print_fieldset("import",lang(216),!$L);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$la["format"],1);echo" <input type='submit' name='import' value='".lang(216)."'>","<input type='hidden' name='token' value='$T'>\n","</div></fieldset>\n";}$c->selectEmailPrint(array_filter($Cb,'strlen'),$f);echo"</form>\n";}}}elseif(isset($_GET["variables"])){$Se=isset($_GET["status"]);page_header($Se?lang(69):lang(68));$Qf=($Se?show_status():show_variables());if(!$Qf)echo"<p class='message'>".lang(76)."\n";else{echo"<table cellspacing='0'>\n";foreach($Qf
as$x=>$X){echo"<tr>","<th><code class='jush-".$w.($Se?"status":"set")."'>".h($x)."</code>","<td>".nbsp($X);}echo"</table>\n";}}elseif(isset($_GET["script"])){header("Content-Type: text/javascript; charset=utf-8");if($_GET["script"]=="db"){$bf=array("Data_length"=>0,"Index_length"=>0,"Data_free"=>0);foreach(table_status()as$S){$s=js_escape($S["Name"]);json_row("Comment-$s",nbsp($S["Comment"]));if(!is_view($S)){foreach(array("Engine","Collation")as$x)json_row("$x-$s",nbsp($S[$x]));foreach($bf+array("Auto_increment"=>0,"Rows"=>0)as$x=>$X){if($S[$x]!=""){$X=number_format($S[$x],0,'.',lang(7));json_row("$x-$s",($x=="Rows"&&$X&&($S["Engine"]=="InnoDB"||$S["Engine"]=="table")?"~ $X":$X));if(isset($bf[$x]))$bf[$x]+=($S["Engine"]!="InnoDB"||$x!="Data_free"?$S[$x]:0);}elseif(array_key_exists($x,$S))json_row("$x-$s");}}}foreach($bf
as$x=>$X)json_row("sum-$x",number_format($X,0,'.',lang(7)));json_row("");}else{foreach(count_tables($c->databases())as$j=>$X)json_row("tables-".js_escape($j),$X);json_row("");}exit;}else{$kf=array_merge((array)$_POST["tables"],(array)$_POST["views"]);if($kf&&!$k&&!$_POST["search"]){$I=true;$fd="";if($w=="sql"&&count($_POST["tables"])>1&&($_POST["drop"]||$_POST["truncate"]||$_POST["copy"]))queries("SET foreign_key_checks = 0");if($_POST["truncate"]){if($_POST["tables"])$I=truncate_tables($_POST["tables"]);$fd=lang(217);}elseif($_POST["move"]){$I=move_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$fd=lang(218);}elseif($_POST["copy"]){$I=copy_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$fd=lang(219);}elseif($_POST["drop"]){if($_POST["views"])$I=drop_views($_POST["views"]);if($I&&$_POST["tables"])$I=drop_tables($_POST["tables"]);$fd=lang(220);}elseif($w!="sql"){$I=($w=="sqlite"?queries("VACUUM"):apply_queries("VACUUM".($_POST["optimize"]?"":" ANALYZE"),$_POST["tables"]));$fd=lang(221);}elseif($_POST["tables"]&&($I=queries(($_POST["optimize"]?"OPTIMIZE":($_POST["check"]?"CHECK":($_POST["repair"]?"REPAIR":"ANALYZE")))." TABLE ".implode(", ",array_map('idf_escape',$_POST["tables"]))))){while($K=$I->fetch_assoc())$fd.="<b>".h($K["Table"])."</b>: ".h($K["Msg_text"])."<br>";}queries_redirect(substr(ME,0,-1),$fd,$I);}page_header(($_GET["ns"]==""?lang(19).": ".h(DB):lang(222).": ".h($_GET["ns"])),$k,true);if($c->homepage()){if($_GET["ns"]!==""){echo"<h3>".lang(223)."</h3>\n";$jf=tables_list();if(!$jf)echo"<p class='message'>".lang(6)."\n";else{echo"<form action='' method='post'>\n","<p>".lang(224).": <input name='query' value='".h($_POST["query"])."'> <input type='submit' name='search' value='".lang(33)."'>\n";if($_POST["search"]&&$_POST["query"]!="")search_tables();echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^(tables|views)\[/);">','<th>'.lang(94),'<td>'.lang(225),'<td>'.lang(72),'<td>'.lang(226),'<td>'.lang(227),'<td>'.lang(228),'<td>'.lang(86),'<td>'.lang(229),(support("comment")?'<td>'.lang(88):''),"</thead>\n";foreach($jf
as$C=>$V){$Rf=($V!==null&&!eregi("table",$V));echo'<tr'.odd().'><td>'.checkbox(($Rf?"views[]":"tables[]"),$C,in_array($C,$kf,true),"","formUncheck('check-all');"),'<th><a href="'.h(ME).'table='.urlencode($C).'" title="'.lang(23).'">'.h($C).'</a>';if($Rf){echo'<td colspan="6"><a href="'.h(ME)."view=".urlencode($C).'" title="'.lang(24).'">'.lang(93).'</a>','<td align="right"><a href="'.h(ME)."select=".urlencode($C).'" title="'.lang(22).'">?</a>';}else{foreach(array("Engine"=>array(),"Collation"=>array(),"Data_length"=>array("create",lang(25)),"Index_length"=>array("indexes",lang(97)),"Data_free"=>array("edit",lang(26)),"Auto_increment"=>array("auto_increment=1&create",lang(25)),"Rows"=>array("select",lang(22)),)as$x=>$z)echo($z?"<td align='right'><a href='".h(ME."$z[0]=").urlencode($C)."' id='$x-".h($C)."' title='$z[1]'>?</a>":"<td id='$x-".h($C)."'>&nbsp;");}echo(support("comment")?"<td id='Comment-".h($C)."'>&nbsp;":"");}echo"<tr><td>&nbsp;<th>".lang(203,count($jf)),"<td>".nbsp($w=="sql"?$g->result("SELECT @@storage_engine"):""),"<td>".nbsp(db_collation(DB,collations()));foreach(array("Data_length","Index_length","Data_free")as$x)echo"<td align='right' id='sum-$x'>&nbsp;";echo"</table>\n","<script type='text/javascript'>tableCheck();</script>\n";if(!information_schema(DB)){echo"<p>".(ereg('^(sql|sqlite|pgsql)$',$w)?($w!="sqlite"?"<input type='submit' value='".lang(230)."'> ":"")."<input type='submit' name='optimize' value='".lang(231)."'> ":"").($w=="sql"?"<input type='submit' name='check' value='".lang(232)."'> <input type='submit' name='repair' value='".lang(233)."'> ":"")."<input type='submit' name='truncate' value='".lang(234)."'".confirm("formChecked(this, /tables/)")."> <input type='submit' name='drop' value='".lang(74)."'".confirm("formChecked(this, /tables|views/)").">\n";$i=(support("scheme")?schemas():$c->databases());if(count($i)!=1&&$w!="sqlite"){$j=(isset($_POST["target"])?$_POST["target"]:(support("scheme")?$_GET["ns"]:DB));echo"<p>".lang(235).": ",($i?html_select("target",$i,$j):'<input name="target" value="'.h($j).'">')," <input type='submit' name='move' value='".lang(236)."'>",(support("copy")?" <input type='submit' name='copy' value='".lang(237)."'>":""),"\n";}echo"<input type='hidden' name='token' value='$T'>\n";}echo"</form>\n";}echo'<p><a href="'.h(ME).'create=">'.lang(140)."</a>\n";if(support("view"))echo'<a href="'.h(ME).'view=">'.lang(170)."</a>\n";if(support("routine")){echo"<h3>".lang(109)."</h3>\n";$De=routines();if($De){echo"<table cellspacing='0'>\n",'<thead><tr><th>'.lang(151).'<td>'.lang(83).'<td>'.lang(187)."<td>&nbsp;</thead>\n";odd('');foreach($De
as$K){echo'<tr'.odd().'>','<th><a href="'.h(ME).($K["ROUTINE_TYPE"]!="PROCEDURE"?'callf=':'call=').urlencode($K["ROUTINE_NAME"]).'">'.h($K["ROUTINE_NAME"]).'</a>','<td>'.h($K["ROUTINE_TYPE"]),'<td>'.h($K["DTD_IDENTIFIER"]),'<td><a href="'.h(ME).($K["ROUTINE_TYPE"]!="PROCEDURE"?'function=':'procedure=').urlencode($K["ROUTINE_NAME"]).'">'.lang(101)."</a>";}echo"</table>\n";}echo'<p>'.(support("procedure")?'<a href="'.h(ME).'procedure=">'.lang(186).'</a> ':'').'<a href="'.h(ME).'function=">'.lang(185)."</a>\n";}if(support("event")){echo"<h3>".lang(110)."</h3>\n";$L=get_rows("SHOW EVENTS");if($L){echo"<table cellspacing='0'>\n","<thead><tr><th>".lang(151)."<td>".lang(238)."<td>".lang(176)."<td>".lang(177)."</thead>\n";foreach($L
as$K){echo"<tr>",'<th><a href="'.h(ME).'event='.urlencode($K["Name"]).'">'.h($K["Name"])."</a>","<td>".($K["Execute at"]?lang(239)."<td>".$K["Execute at"]:lang(178)." ".$K["Interval value"]." ".$K["Interval field"]."<td>$K[Starts]"),"<td>$K[Ends]";}echo"</table>\n";$Mb=$g->result("SELECT @@event_scheduler");if($Mb&&$Mb!="ON")echo"<p class='error'><code class='jush-sqlset'>event_scheduler</code>: ".h($Mb)."\n";}echo'<p><a href="'.h(ME).'event=">'.lang(175)."</a>\n";}if($jf)echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=db');</script>\n";}}}page_footer();