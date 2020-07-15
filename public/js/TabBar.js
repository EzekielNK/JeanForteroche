                                        /** Tab Bar Mobile */

class TabBar {
    constructor()
    {
        this.menu_bar = document.querySelector('.tab-bottom-bar');
        this.menu_item = document.querySelectorAll('.tab-menu-item');
        this.menu_indicator = document.querySelector('.tab-nav-indicator');
        this.menu_current_item = document.querySelector('.tab-current');
        this.menu_position;
    }

    initMenu()
    {
        this.menu_position = this.menu_current_item.offsetLeft -16;
        this.menu_indicator.style.left = this.menu_position + "px";
        this.menu_bar.style.backgroundPosition = this.menu_position - 8 + 'px';
        let that = this;
        this.menu_item.forEach(function(select_menu_item) {
            select_menu_item.addEventListener('click', function (e) {
                e.preventDefault();
                that.menu_position = this.offsetLeft -16;
                that.menu_indicator.style.left = that.menu_position + "px";
                that.menu_bar.style.backgroundPosition = that.menu_position - 8 + 'px';
                [...select_menu_item.parentElement.children].forEach(
                    sibling => {
                        sibling.classList.remove('tab-current');
                    });
                select_menu_item.classList.add('tab-current');
            });
        })
    }
}

let menu_tab = new TabBar();
menu_tab.initMenu();
