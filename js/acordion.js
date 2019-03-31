
function faqClick(block){

    var checkbox = block.lastElementChild.children[0];
    var parts = document.getElementsByClassName(checkbox.className);
    if (!checkbox.checked) {
        checkbox.style.display = 'none';
        checkbox.checked = true;
    } else if (checkbox.checked) {
        checkbox.style.display = 'block';
        checkbox.checked = false;
    }
            for (let i = 0; i < 4; i++) {
                if (parts[i].id != checkbox.id) {
                    console.log('hide '+parts[i].id);
                    parts[i].style.display = 'block';
                    parts[i].checked = false;
                }
            }
};
