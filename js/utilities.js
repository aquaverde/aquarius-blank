var check = false;

requirefuncs = new Object();

requirefuncs.require_text = function(element) {
    return element.value.length > 0;
}

requirefuncs.require_numeric = function(element) {
    val = parseInt(element.value);
    return element.value.length > 0 && !isNaN(val);
}
requirefuncs.require_email = function(element) {
    return element.value.match(/^[-a-zA-Z0-9!#$%&'*+/=?^_`{|}~.]+@([-a-zA-Z0-9]+\.)+[a-zA-Z]{2,7}$/);
}

requirefuncs.require_zip = function(element) {
    field_ok = element.value.length == 4 ||  element.value.length == 5;
    zip = parseInt(element.value);
    field_ok = field_ok && !isNaN(zip);
    return field_ok;
}

requirefuncs.require_radio = function(element) {
	var elements = document.getElementsByName(element.name) ;
	var field_ok = false ; 
	collectionToArray(elements).forEach(function(elem) {
  		if(elem.checked) field_ok = true ; 
    });
	return field_ok ; 
}

requirefuncs.require_pulldown = function(element) {
	return element.value != '0' ; 
}

requirefuncs.require_checkbox = function(element) {
	var elements = document.getElementsByName(element.name) ;
	var field_ok = false ; 
	collectionToArray(elements).forEach(function(elem) {
  		if(elem.checked) field_ok = true ; 
    });
	return field_ok ; 
}

requirefuncs.require_password = function(element) {
    element_confirm = document.getElementById(element.id+'_confirm');
    return element_confirm && element_confirm.value == element.value;
}

function checkFormHandler(event) {
    var element;
    if(event != undefined) {
        element = event.target;
    } else {
        element = window.event.srcElement;
    }
    checkFormElement(element);
}

function checkFormElement(element, checkedForm) {
    if(!check) {
        return true;
    }
    var label;
    var searchedLabel = element.id + "Label";
    var label = document.getElementById(searchedLabel);
    var classes = element.className.split(" ");
    var i = 0;
    var field_ok;
    classes.forEach(function(myclass) {
        if(requirefuncs[myclass] != undefined) {
            var fieldclasses = element.className.replace(/checkerror/g, "");
            var labelclasses = label && label.className.replace(/checkerror/g, "");
            field_ok = requirefuncs[myclass](element);
            if(field_ok) {
                element.className = fieldclasses;
                if (label) label.className = labelclasses;
                
            } else {
                element.className = fieldclasses + " checkerror";
                if (label) label.className = labelclasses + " checkerror";
            }
            showErrorMessage(document.getElementById(element.id+'Error'), !field_ok);
        }
    });
    return field_ok;
}

function checkFormSubmit(checkedForm) {
    check = true;
    var formOK = true;
    checkedForm.onkeyup = checkFormHandler;
    checkedForm.onclick = checkFormHandler;
    checkedForm.onchange = checkFormHandler ;
    
    var inputElements = getElementsByClass(checkedForm, "require_[a-z]*","input");
    inputElements.forEach(function(elem) {
        if(!checkFormElement(elem, checkedForm)) {
            formOK = false;
        }
    });
    var textareaElements = getElementsByClass(checkedForm, "require_[a-z]*","textarea");
    textareaElements.forEach(function(elem) {
        if(!checkFormElement(elem, checkedForm)) {
            formOK = false;
        }
    });
    var selectElements = getElementsByClass(checkedForm, "require_[a-z]*","select");
    selectElements.forEach(function(elem) {
        if(!checkFormElement(elem, checkedForm)) {
            formOK = false;
        }
    });
    showErrorMessage(document.getElementById("errorMessage"), !formOK);
    return formOK;
}

function showErrorMessage(message, error) {
    if (message) {
        if (error) message.className = "errorVisible";
        else       message.className = "errorInvisible";
    }
}

function isEmailAddr(str) 
{
	return str.match(/^[\w-]+(\.[\w-]+)*@([\w-]+\.)+[a-zA-Z]{2,7}$/);
}

function getElementsByClass(node,searchClass,tag) {
    var classElements = new Array();
    var elements = node.getElementsByTagName(tag);
    var pattern = new RegExp("(^| )"+searchClass+"( |$)");
    collectionToArray(elements).forEach(function(element) {
        if (pattern.test(element.className)) {
            classElements.push(element);
        }
    });
    return classElements;
}

// Convert HTMLCollection list to a common array
function collectionToArray(col) {
    a = new Array();
    for (i=0; i<col.length; i++) a[i] = col[i];
    return a;
}


function email(name, domain,tld, replace) {
	var link = "<a href='mailto:" + name + "@" + domain + "." + tld + "'>" + name + "@" + domain + "." + tld + "</a>";
    if (replace) $('#'+replace).replaceWith(link);
	else document.write(link);
}
