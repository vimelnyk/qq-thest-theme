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
       
       console.log(element)
       element.addEventListener('click', handleMenuOpen)
       
   }
}

function handleMenuOpen(e){
    
    e.preventDefault();
    let target = getEventTarget(e);
    console.log(target)
    console.log(target.parentNode.classList)

        if (target.parentNode.classList.contains('has-submenu')) {
            target.parentNode.classList.toggle('is-open');
        }
    
}

function getEventTarget(e) {
    e = e || window.event;
    return e.target || e.srcElement;
}

document.addEventListener("DOMContentLoaded", function() {
    fixPriceAtProductsList();
    fixMenuSubmenu();
    catchClickOnButton('#menu3');
    //handleMenuOpen();
});