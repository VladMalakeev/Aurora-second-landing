function checkForm(form) {
    var element = form.elements;
    var countErrors = 0;

    countErrors = checkName(element.name, countErrors);
    countErrors = checkEmail(element.email, countErrors);
    countErrors = checkPhone(element.phone, countErrors);

    if (countErrors == 0) {
        $.ajax({
            type: "POST",
            url: "form.php",
            data: {
                name: element.name.value,
                email: element.email.value,
                phone: element.phone.value,
                // token:element.token.value
            },
            success: (result) => {
                console.log(result);
                var json = JSON.parse(result);
                showMessage(json.status, json.text);
            }
        });
    }
}

function showMessage(status, text = 'test') {
    console.log(status)
    if(status=='true') {
        document.getElementById('userName').value = '';
        document.getElementById('form_phone').value = '';
        document.getElementById('userEmail').value = '';
        document.getElementById('checkBox').checked = false;
        $('#submit').prop('disabled', false);
        $('#submit').removeClass('submitActive');
        $('#submit').toggleClass('submitDisabled');
    }
    let alert = document.getElementById('alert');
    let image = document.getElementById('messageImage');
    document.getElementById('messageText').innerHTML = text;
    switch (status) {
        case 'true':
            alert.style.color = 'green';
            image.src = 'images/checked.png';
            break;
        case 'false':break;
            alert.style.color = 'red';
            image.src = 'images/wait.png';
        case 'exist':
            alert.style.color = 'red';
            image.src ='images/warning.png';
            break;
    }
    alert.style.display = 'flex';
}

function showError(container, errorMessage) {
    var msgElem = document.createElement('span');
    msgElem.className = "error-message";
    msgElem.innerHTML = errorMessage;
    container.appendChild(msgElem);
}

function resetError(container) {
    if (container.lastChild.className == "error-message") {
        container.removeChild(container.lastChild)
    }
}

function checkName(element, counter) {
    resetError(element.parentNode);
    if (element.value == '') {
        showError(element.parentNode, 'Заполните пожалуйста это поле');
        counter++;
        return counter;
    }
    else {
        if (!element.value.match(/^[a-zA-Zа-яА-яіїёєЁІЇЄ]{1,}$/)) {
            showError(element.parentNode, 'Допустимы только буквы!');
            counter++;
            return counter;
        }
    }
    return counter;
}

function checkEmail(element, counter) {
    resetError(element.parentNode);
    if (element.value.length > 0) {
        if (!element.value.match(/^[-._a-z0-9]+@(?:[a-z0-9][-a-z0-9]+\.)+[a-z]{2,6}$/)) {
            showError(element.parentNode, 'Введите коректный еmail');
            counter++;
            return counter;
        }
    } else {
        resetError(element.parentNode);
    }
    return counter;
}

function checkPhone(element, counter) {
    console.log('check phone');
    resetError(element.parentNode.parentNode);
    if (element.value == '') {
        showError(element.parentNode.parentNode, 'Заполните пожалуйста это поле');
        counter++;
        return counter;
    } else {
        resetError(element.parentNode.parentNode);
        if (!$("#form_phone").intlTelInput("isValidNumber")) {
            showError(element.parentNode.parentNode, 'Введите корректный номер');
            counter++;
            return counter;
        } else {
            element.value = $("#form_phone").intlTelInput("getNumber");
        }
    }
    return counter;
}

function changeCheckBox(box) {
    if (box.checked) {
        console.log('check')
        $('#submit').prop('disabled', false);
        $('#submit').removeClass('submitDisabled');
        $('#submit').toggleClass('submitActive');

    } else if (!box.checked) {
        console.log('uncheck')
        $('#submit').prop('disabled', true);
        $('#submit').removeClass('submitActive');
        $('#submit').toggleClass('submitDisabled');
    }
}

function closeMessage() {
    document.getElementById('alert').style.display = 'none';
}