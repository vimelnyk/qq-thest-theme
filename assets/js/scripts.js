function fixPriceAtProductsList(){
    let selectedEl = '#products.productsList .list>li';
    if (document.querySelector(selectedEl)){
        const elements = document.querySelectorAll(selectedEl);    
        for (let index = 0; index < elements.length; index++) {
            const element = elements[index];
            let wrapper = document.createElement('div');
            wrapper.setAttribute('class', 'product-list-price');
            if (element.querySelector('.noPrice')) {
               
                element.insertBefore(wrapper, element.querySelector('.noPrice'));
                wrapper.appendChild(element.querySelector('.noPrice'));
    
            } else if (element.querySelector('.basket') && element.querySelector('.price')) {
    
                element.insertBefore(wrapper, element.querySelector('.basket'));
                wrapper.appendChild(element.querySelector('.price'));
                wrapper.appendChild(element.querySelector('.basket'));
    
            }
        }
    }
}

function fixMenuSubmenu(){
    let elements = document.querySelectorAll('#menu3>ul>li>ul');
    for (let index = 0; index < elements.length; index++) {
        const element = elements[index];
        element.parentNode.classList.add('has-submenu');        
    }
}

function catchClickOnButton(parent) {
   let elements = document.querySelectorAll(parent);
    console.log(elements)
   for (let index = 0; index < elements.length; index++) {
       const element = elements[index];
      
       element.addEventListener('click', handleSubenuOpen)
       element.addEventListener('dblclick', handleMenuOpen)
       
   }
}

function handleSubenuOpen(e){
    
    let target = getEventTarget(e);    
    if (target.parentNode.classList.contains('has-submenu')) {
            e.preventDefault();
            target.parentNode.classList.toggle('is-open');
    } else {
        closeMobileMenuHandler();
    }
    
}

function handleMenuOpen(e){
    let target = getEventTarget(e);
    let link = target.getAttribute('href');
    window.location.href = link;
    closeMobileMenuHandler();
}



function openMobileMenuHandler() {
    document.getElementsByTagName('body')[0].classList.add('is-fixed');
    mobileMenu.classList.add('is-open');
    overlay.classList.add('is-open');

}

function closeMobileMenuHandler() {
    document.getElementsByTagName('body')[0].classList.remove('is-fixed');
    mobileMenu.classList.remove('is-open');
    overlay.classList.remove('is-open');

}

function getEventTarget(e) {
    e = e || window.event;
    return e.target || e.srcElement;
}

document.addEventListener("DOMContentLoaded", function() {
    fixPriceAtProductsList();
    fixMenuSubmenu();
    catchClickOnButton('#menu3');
    openMobileMenu.addEventListener('click', openMobileMenuHandler);
    closeMobileMenu.addEventListener('click', closeMobileMenuHandler);
    overlay.addEventListener('click', closeMobileMenuHandler);

   
});