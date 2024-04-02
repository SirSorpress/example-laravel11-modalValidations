
const statusSelect = document.querySelector('#status_idFormCreate');

statusSelect.innerHTML = '';

statusSelect.innerHTML = '<option value="#" selected disabled>select an option</option>';


get(`${$URL}/status?${$CSRF}`)
    .then(({response, body}) => {
        const {status} = response;

        const fragment = document.createDocumentFragment();

        if(status === 200){
            body.forEach(element => {
                const option = document.createElement('option');
                option.value =  element.id;
                option.innerHTML = element.name;
                fragment.appendChild(option);
            });
            statusSelect.appendChild(fragment);
        }
    })
    .catch(e => console.log('TYPE SELECT ERROR'))
