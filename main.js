const menuDiv = document.getElementById('menu-mobile');
const btnAnimar = document.getElementById('btn-menu');

menuDiv.addEventListener('click', animar);

function animar() {
    menuDiv.classList.toggle('abrir');
    btnAnimar.classList.toggle('ativar');
};

const check = document.getElementById('check');

check.addEventListener('click', () => {
    document.body.classList.toggle('darkmode');
});