const dark = 'fas fa-moon';
const ligth = 'far fa-sun';
const btnDark = 'btn btn-lg btn-outline-light';
const btnLigth = 'btn btn-lg btn-outline-dark';

function toogleThemeMode(){
    const body = document.querySelector('body');
    const icon = document.querySelector('#themeIcon');
    const btn = document.querySelector('#themeBtn');

    if(icon.dataset.status === 'dark'){
        icon.dataset.status = 'light';
        body.dataset.bsTheme = 'light';
        icon.classList.value = ligth;
        btn.classList.value = btnLigth;
    }else{
        icon.dataset.status = 'dark';
        body.dataset.bsTheme = 'dark';
        icon.classList.value = dark;
        btn.classList.value = btnDark;
    }


}

