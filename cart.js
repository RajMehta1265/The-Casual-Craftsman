// Function to handle adding items to cart
const addToCart = (productName) => {
    // Create a new list item element
    const listItem = document.createElement('li');
    listItem.textContent = productName; // Set the text content to the product name
    
    // Append the list item to the "Add to Cart" section
    const cartList = document.getElementById('cart-list');
    cartList.appendChild(listItem);
};

// Event listener for "Add To Cart" buttons
document.querySelectorAll('.content button').forEach(button => {
    button.addEventListener('click', function() {
        const productName = this.parentElement.querySelector('.font').textContent;
        addToCart(productName); // Call the addToCart function with the product name
    });
});
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