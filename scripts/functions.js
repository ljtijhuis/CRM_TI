function addListboxElement(parent,name,value){
    var opt = document.createElement("OPTION");
    opt.text = name;
    opt.value= value;
    parent.options.add(opt);
    return false;
}
function removeListboxElement(parent,object){
    parent.remove(object);
    return false;
}

function selectAllOptions(id)
{
    for(i=0; i<id.options.length; i++)
       id.options[i].selected = true;
    //id.form.submit();    
        
}


function setValueAndSubmit(fieldName, newValue){
	form = document.getElementById('paginationForm');
	field = form.elements[fieldName];
	field.value = newValue;
	form.submit();
}