let length_sms;
let translator = document.getElementById('translator')
let trans = document.getElementById('trans')
let count_char = document.getElementById("count_char");
let count_char_textarea = document.getElementById("count_char_textarea");
let count_sms = document.getElementById("count_sms");
let save_button = document.getElementById('save')
let text_form = document.forms.text_form



function countChar() {

    count_char.value = count_char_textarea.value.length;
    if (trans.value === 'ru' && count_char.value <= 70){
        count_sms.innerHTML = 1;
    }else if(trans.value === 'en' && count_char.value <= 160){
        count_sms.innerText = 1;
    }else if(trans.value === 'ru' && count_char.value > 70){
        count_sms.innerText = Math.ceil(count_char.value / 63)
    }else if(trans.value === 'en' && count_char.value > 160){
        count_sms.innerHTML = Math.ceil(count_char.value / 153)
    }
}

async function translation() {
    if (!translator.checked) {
        trans.value = 'ru'
        console.log(trans.value)
        const response = await fetch('textFormHandler.php', {
            method: 'POST',
            body: new FormData(text_form)
        });
        const answer = await response.text();
        count_char_textarea.value = answer;


    }else {
        trans.value = 'en'
        console.log(trans.value)
        const response = await fetch('textFormHandler.php', {
            method: 'POST',
            body: new FormData(text_form)
            });
        const answer = await response.text();
        count_char_textarea.value = answer;


    }
}







