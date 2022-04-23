/**
 * @param {string} idSelectBtnMenu Selector CSS
 * @param {string} idMenu  HTML attribute id
 * @returns {void}
 */
export function ativeMenu(idSelectBtnMenu = 'btn-menu', idMenu = 'simple-menu') {

    let iconMenu = document.getElementById(idSelectBtnMenu);
    let menu = document.getElementById(idMenu);

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

/**
 * @param {string} selector Selector CSS
 * @returns {void}
 */
function smoothScroll(selector = '#scroll-top') {


}