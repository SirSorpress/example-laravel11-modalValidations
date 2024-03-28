
// CREATE
const createModal = document.querySelector('#createModal');

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

    handleRestartValues(data);

    const {response, body} = await post(url, data);

    if(response.status == 201){
        console.log('creado correctamente');
        console.log(createModal.classList);
        createModal.classList.remove('show');
        createModal.classList.add('hide');
        console.log(createModal.classList);
    }else{
        console.log(body, body.errors);
        handleErrors(body.errors)
    }

    console.log(response, response.status);
}

const post = async(url = '', data = {}) => {
    const response = await fetch(url,{
        method: "POST",
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(data),
    })

    const body = await response.json();
    return { response, body };
}


const handleRestartValues = (data = {}) => {
    for (const property in data) {
        const input = document.querySelector(`#${property}FormCreate`);
        const feedBack = document.querySelector(`#${property}FeedBackCreate`);

        input.classList.remove('is-invalid');
        feedBack.classList.remove('invalid-feedback');
        feedBack.innerHTML = '';
    };
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

