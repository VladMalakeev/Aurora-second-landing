function checkForm(form) {
    var element = form.elements;
    var countErrors = 0;

    countErrors = checkName(element.name,countErrors);
    countErrors = checkEmail(element.email,countErrors);
    countErrors = checkPhone(element.phone,countErrors);
    var days=null;
    switch ( element.days.value) {
        case '/7days/':days = '7 дней'; break;
        case '/21days/':days = '21 день'; break;
        case '/':days = '21 день'; break;
        default: days = 'ошибка';
    }
    var viber = element.viber.checked?'есть':'нет';
    var telegram = element.telegram.checked?'есть':'нет';
console.log(days);
        if(countErrors==0){
            $.ajax({
               type:"POST",
               url:"php/form.php",
               data:{
                   submit:true,
                   name:element.name.value,
                   email:element.email.value,
                   phone:element.phone.value,
                   message:element.comment.value,
                   viber:viber,
                   telegram:telegram,
                   days:days,
                   token:element.token.value
               },
                success:(result)=>{
                    console.log(result);
                   var json = JSON.parse(result);
                       showMessage(json.status, json.text);
                }
            });
        }
}

function showMessage(status, text) {
    var alert = document.getElementById('alert');
    if(status == 'true') {
        alert.className = 'alert alert-success';
    } else {
        alert.className = 'alert alert-danger';
    }
    alert.innerHTML = text;
    alert.style.display = 'block';

    if(status == 'true'){
        document.getElementById('hide_container').style.display = 'none';
        document.getElementById('thanks_text').style.display = 'flex';
    }
}

function showError(container, errorMessage) {
    var msgElem = document.createElement('span');
    msgElem.className = "error-message";
    msgElem.innerHTML = errorMessage;
    container.appendChild(msgElem);
}

function resetError(container) {
    console.log(container);
    if (container.lastChild.className == "error-message") {
        container.removeChild(container.parentNode.childNodes[1].lastChild)
    }
}

function checkName(element, counter) {
    resetError(element.parentNode.childNodes[1]);
    if (element.value == '') {
        showError(element.parentNode.childNodes[1], 'Заполните это поле');
        counter++;
        return counter;
    }
    else{
        if(!element.value.match(/^[a-zA-Zа-яА-я]{1,}$/)){
            showError(element.parentNode.childNodes[1], 'Только буквы!');
            counter++;
            return counter;
        }
    }
    return counter;
}

function checkEmail(element, counter) {
    resetError(element.parentNode.childNodes[1]);
    if (element.value == '') {
        showError(element.parentNode.childNodes[1], 'Заполните это поле');
        counter++;
        return counter;
    }else{
        if(!element.value.match(/^[-._a-z0-9]+@(?:[a-z0-9][-a-z0-9]+\.)+[a-z]{2,6}$/)){
            showError(element.parentNode.childNodes[1], 'Email не корректный');
            counter++;
            return counter;
        }
    }
    return counter;
}

function checkPhone(element,counter) {
    resetError(element.parentNode.parentNode.childNodes[1]);
    if (element.value == '') {
        showError(element.parentNode.parentNode.childNodes[1], 'Заполните это поле');
        counter++;
        return counter;
    }else {
        resetError(element.parentNode.parentNode.childNodes[1]);
        if (!$("#form_phone").intlTelInput("isValidNumber")) {
            showError(element.parentNode.parentNode.childNodes[1], 'Номер не корректный');
            counter++;
            return counter;
        } else {
            element.value = $("#form_phone").intlTelInput("getNumber");
        }
    }
    return counter;
}