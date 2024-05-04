// Function to filter and display items
let form = document.querySelector("#hform");
const filterItems = () => {
    const searchInput = document.getElementById('sweet-name').value.toLowerCase();
    const items = document.querySelectorAll('.content');

    items.forEach(item => {
        const itemName = item.querySelector('.font').textContent.toLowerCase();
        if (itemName.includes(searchInput)) {
            item.style.display = 'block';
        } else {
            item.style.display = 'none';
        }
    });
};

// Event listener for search input
document.getElementById('sweet-name').addEventListener('input', filterItems);

let allbutton = document.querySelectorAll('button');

// let cart = document.querySelector('.cart');
// let sub = document.querySelector('.sub');

// cart.style.visibility = `hidden`;
// sub.style.visibility = `hidden`;
Array.from(allbutton).forEach((e)=>{
    e.addEventListener('click',(e)=>{
        let parent = e.target.parentNode;
        document.querySelector('#name').value = parent.getElementsByTagName('h3')[0].innerText;
        document.querySelector('#price').value = parent.getElementsByTagName('p')[0].innerText;
        document.querySelector('#days').value = parent.getElementsByTagName('p')[1].innerText;
        // cart.style.visibility = `visible`;
        // sub.style.visibility = `visible`;
        console.log(document.querySelector('#days').value , document.querySelector('#price').value ,document.querySelector('#name').value);
    })
})