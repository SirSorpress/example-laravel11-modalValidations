
//HTTP METHODS

const get = async(url = '', params = null) => {

    url = `${url}?${$CSRF}`;

    if(params != null) url = `${url}&${params}`;

    const response = await fetch(url,{
        method: "GET",
        headers: {
            'Accept': 'application/json',
            'Content-Type': 'application/json',
        },
    })

    const body = await response.json();
    return { response, body };
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
