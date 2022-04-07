'use strict';

const menuContainer = document.querySelector('#nav'),
        wrapper = document.querySelector('#header .wrap'),
        mobileMenu = document.querySelector('#main-menu'),
        menuDropItem = mobileMenu.querySelectorAll('.menu-item-has-children'),
        subMenu = mobileMenu.querySelectorAll('.sub-menu'),
        menuButton = document.querySelector('.mobile-menu-button'),
        sideMenuInput = document.querySelector('#nav .side-menu');

const overlay = document.createElement('div');
overlay.classList.add('overlay');

if(mobileMenu.children.length > 0) {
    menuContainer.classList.add('show-flex');
    
    wrapper.classList.add('show-flex-sb');
};

subMenu.forEach(item => {
    item.classList.add('hide');
})
menuButton.addEventListener('click', () => {
    document.body.append(overlay);
    document.body.style.overflow = 'hidden';

})

overlay.addEventListener('click', () => {
    sideMenuInput.checked = false;
    overlay.remove();
    document.body.style.overflow = 'visible';

})

menuDropItem.forEach(item => {
    item.classList.add('with-nest');
    item.addEventListener('click', () => {
        item.classList.toggle('with-nest');
        item.classList.toggle('with-nest-active');
    })
});

mobileMenu.addEventListener('click', (event) => {
    const li = event.target.closest('li');
    const subMenu = li.querySelector('ul');
  
        if(subMenu) {
            event.preventDefault();
            subMenu.classList.toggle('show');
        }
})

// menuDropItem.forEach((item) => {
//     item.addEventListener('click', (e) => {
//         e.preventDefault();
//         item.classList.toggle('with-nest');
//         item.classList.toggle('with-nest-active');
//         const target = e.target;
//         if(target && target.classList === 'menu-item-has-children') {
//             target.nextElementSibling.classList.toggle('show');
//         } else {
//             target.children[1].classList.toggle('show');
//         }
//     })
// });
