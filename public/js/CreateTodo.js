
// CREATE
const createModal = document.querySelector('#createModal');
const createModalInstance = new bootstrap.Modal(document.getElementById('createModal'));

const openModalCreate = () => createModalInstance.show();

const closeModalCreate = () => createModalInstance.hide();

const formCreateTodo = async(event) => {
    event.preventDefault();

    const title = document.querySelector('#titleFormCreate').value;
    const type_id = document.querySelector('#type_idFormCreate').value;
    const status_id= document.querySelector('#status_idFormCreate').value;
    const description = document.querySelector('#descriptionFormCreate').value;

    const url = `${$URL}/todo?${$CSRF}`;

    const data = {
        title,
        type_id,
        status_id,
        description,
    }

    console.log(data);

    handleClearModal('createModal');

    const {response, body} = await post(url, data);

    if(response.status == 201){
        console.log('creado correctamente', body);
        await loadTable();
        closeModalCreate()
    }else{
        console.log('NO CREADO',body, body.errors);
        handleErrors(body.errors)
    }
}

const handleErrors = (errors) => {
    for (const property in errors) {
        const input = document.querySelector(`#${property}FormCreate`);
        const feedBack = document.querySelector(`#${property}FeedBackCreate`);

        input.classList.add('is-invalid');

        feedBack.classList.add('invalid-feedback');
        feedBack.innerHTML = errors[property][0];
    };
}

const handleClearModal = (id = '', clearValues = false) => {
    const typeInputs = ['input', 'select', 'textarea'];

    typeInputs.forEach((element) => {
        const inputs = document.querySelectorAll(`#${id} ${element}`);

        inputs.forEach((input) => {
            input.classList.remove('is-invalid');

            if(clearValues) console.log('FALTA IMPLEMENTAR');

            const feedBack = document.querySelector(`#${input.dataset.title}FeedBackCreate`);
            feedBack.classList.remove('invalid-feedback');
            feedBack.innerHTML = '';
        });
    })
}

