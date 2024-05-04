
// Event listener for search input

let allbutton = document.querySelectorAll('button');

// let cart = document.querySelector('.cart');
// let sub = document.querySelector('.sub');

// cart.style.visibility = `hidden`;
// sub.style.visibility = `hidden`;
Array.from(allbutton).forEach((e)=>{
    e.addEventListener('click',(e)=>{
        let parent = e.target.parentNode;
        console.log(parent);
        document.querySelector('#name').value = parent.getElementsByTagName('h3')[0].innerText;
        document.querySelector('#price').value = parent.getElementsByTagName('p')[0].innerText;
        document.querySelector('#days').value = parent.getElementsByTagName('p')[1].innerText;
        // cart.style.visibility = `visible`;
        // sub.style.visibility = `visible`;
        console.log(document.querySelector('#days').value , document.querySelector('#price').value ,document.querySelector('#name').value);
    })
})