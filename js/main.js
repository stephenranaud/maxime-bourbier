/**
 * @param {string} idSelectBtnMenu HTML attribute id
 * @param {string} idMenu  HTML attribute id
 */
export function ativeMenu(idSelectBtnMenu = 'btn-menu', idMenu = 'simple-menu') {

    let iconMenu = document.getElementById(idSelectBtnMenu);
    let menu = document.getElementById(idMenu);
    console.log(menu);

    iconMenu.addEventListener('click', e => {
        if (iconMenu && menu) {
            e.currentTarget.classList.toggle("active");
            menu.classList.toggle("active");
            return;
        }
        throw Error(`Error: ${iconMenu} - ${menu}`);
    });

}


ativeMenu();