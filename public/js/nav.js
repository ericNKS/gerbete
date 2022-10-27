function showMenuList(){
    let menuLista = document.querySelector('#menu-list');
    let estiloLista = getComputedStyle(menuLista).display;
    switch(estiloLista)
    {
        case 'none':
            menuLista.style.display = 'flex';
            break;
        case 'flex':
            menuLista.style.display = 'none';
            break;
        default:
            menuLista.style.display = 'flex';
            break;
    }
      
}