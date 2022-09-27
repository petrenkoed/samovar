require('./bootstrap');
const Swal = require('sweetalert2');

document.addEventListener('DOMContentLoaded', () => {

    const openModalBtn = document.getElementById('modal')

    openModalBtn.addEventListener('click', async () => {

        const {value: formValues} = await Swal.fire({
            html: `
                <div class="modal__wrap">
                    <div class="modal__content">
                        <label class="modal__label" for="name">Имя</label>
                        <input class="modal__form" type="text" placeholder="Иван" id="name">
                    </div>

                    <div class="modal__content">
                        <label class="modal__label" for="tel">Номер телефона</label>
                        <input class="modal__form" data-tel-input maxlength="18" type="tel" placeholder="+7 (999) 999 99 99" id="tel">
                    </div>
                </div>
            `,
            willOpen: () => {
                phoneinput()
            } ,
            focusConfirm: true,
            confirmButtonText: 'Отправить',
            preConfirm: () => {
                return [
                    document.getElementById('name').value,
                    document.getElementById('tel').value
                ]
            },
        })

        if (formValues) {
            axios.post('/api/mail', {name: formValues[0], tel: formValues[1]})
                .then(res => {
                    Swal.fire({
                        icon: 'success',
                        title: 'Скоро вам перезвонят!',
                        showConfirmButton: false,
                        timer: 1500
                    })
                })
        }
    })
})


const phoneinput = () => {
    let phoneInputs = document.querySelectorAll('input[data-tel-input]');

    let getInputNumbersValue = function (input) {
        // Return stripped input value — just numbers
        return input.value.replace(/\D/g, '');
    }

    let onPhonePaste = function (e) {
        let input = e.target,
            inputNumbersValue = getInputNumbersValue(input);
        let pasted = e.clipboardData || window.clipboardData;
        if (pasted) {
            let pastedText = pasted.getData('Text');
            if (/\D/g.test(pastedText)) {
                // Attempt to paste non-numeric symbol — remove all non-numeric symbols,
                // formatting will be in onPhoneInput handler
                input.value = inputNumbersValue;
                return;
            }
        }
    }

    let onPhoneInput = function (e) {
        let input = e.target,
            inputNumbersValue = getInputNumbersValue(input),
            selectionStart = input.selectionStart,
            formattedInputValue = "";

        if (!inputNumbersValue) {
            return input.value = "";
        }

        if (input.value.length != selectionStart) {
            // Editing in the middle of input, not last symbol
            if (e.data && /\D/g.test(e.data)) {
                // Attempt to input non-numeric symbol
                input.value = inputNumbersValue;
            }
            return;
        }

        if (["7", "8", "9"].indexOf(inputNumbersValue[0]) > -1) {
            if (inputNumbersValue[0] == "9") inputNumbersValue = "7" + inputNumbersValue;
            let firstSymbols = (inputNumbersValue[0] == "8") ? "8" : "+7";
            formattedInputValue = input.value = firstSymbols + " ";
            if (inputNumbersValue.length > 1) {
                formattedInputValue += '(' + inputNumbersValue.substring(1, 4);
            }
            if (inputNumbersValue.length >= 5) {
                formattedInputValue += ') ' + inputNumbersValue.substring(4, 7);
            }
            if (inputNumbersValue.length >= 8) {
                formattedInputValue += '-' + inputNumbersValue.substring(7, 9);
            }
            if (inputNumbersValue.length >= 10) {
                formattedInputValue += '-' + inputNumbersValue.substring(9, 11);
            }
        } else {
            formattedInputValue = '+' + inputNumbersValue.substring(0, 16);
        }
        input.value = formattedInputValue;
    }
    let onPhoneKeyDown = function (e) {
        // Clear input after remove last symbol
        let inputValue = e.target.value.replace(/\D/g, '');
        if (e.keyCode == 8 && inputValue.length == 1) {
            e.target.value = "";
        }
    }
    for (let phoneInput of phoneInputs) {
        phoneInput.addEventListener('keydown', onPhoneKeyDown);
        phoneInput.addEventListener('input', onPhoneInput, false);
        phoneInput.addEventListener('paste', onPhonePaste, false);
    }
}





