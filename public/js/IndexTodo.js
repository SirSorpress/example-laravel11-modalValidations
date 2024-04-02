
//INDEX TODO

const printTable = (data) => {
    const fragment = document.createDocumentFragment();

    data.forEach(element => {
        const tr = document.createElement("tr");

        tr.innerHTML = `<td>${element.id}</td>
                        <td>${element.title}</td>
                        <td>${element.description}</td>
                        <td>${element.date}</td>
                        <td>${element.type_id}</td>
                        <td>${element.status_id}</td>`;

        fragment.appendChild(tr);
    });

    return fragment;
}

const table = document.querySelector('#todoTable');
const loadTable = async() => {
    get(`${$URL}/todo`)
        .then(({response, body}) => {
            if(response.status === 200){

                const {data} = body;

                const fragment = printTable(data);

                table.innerHTML = '';
                table.appendChild(fragment);
            }else{
                console.log('ERROR');
            }
        })
        .catch(e => {
            console.log(e);
        })
}

loadTable();
