require('./bootstrap');
const Swal = require('sweetalert2');

document.addEventListener('DOMContentLoaded', () => {

    const openModalBtn = document.getElementById('modal')

    openModalBtn.addEventListener('click', async () => {
        const { value: formValues } = await Swal.fire({
            title: 'Заполните заявку',
            html:
                '<label for="swal-input1">Имя</label>' +
                '<input type="text" placeholder="Иван" id="name">' +
                '<label for="swal-input2">Номер телефона</label>' +
                '<input type="number" placeholder="+7 (999) 999 99 99" id="tel">',
            focusConfirm: true,
            confirmButtonText: 'Отправить',
            preConfirm: () => {
                return [
                    document.getElementById('name').value,
                    document.getElementById('tel').value
                ]
            }
        })

        if (formValues) {
            axios.post('/api/mail', {name: formValues[0], tel: formValues[1]})
                .then(res => {
                console.log(res)
            })
        }
    })
})




