const products = [
    {
        id: 1,
        image: 'https://www.indianhealthyrecipes.com/wp-content/uploads/2021/11/diwali-sweets-recipes.jpg.webp',
        title: 'Diwali sweet combo.',
        price: 5999
    },
    {
        id: 2,
        image: 'https://i.pinimg.com/originals/dd/1c/e9/dd1ce99af79733f10a858cc0baad1788.jpg',
        title: 'ads',
        price: 200
    },
    {
        id: 3,
        image: 'https://www.jiomart.com/images/product/original/rvnljmznb0/kesar-sweets-lohri-makar-sankranti-snacks-sweets-gifting-hamper-box-sweet-sugar-fini-till-patti-gond-laddoo-navratan-mixture-mini-kachori-product-images-orvnljmznb0-p596809473-1-202212302034.jpg?im=Resize=(420,420)',
        title: 'fgf',
        price: 200
    },
    {
        id: 4,
        image: 'https://assets.vogue.in/photos/5fd9fcc4d8f3b5a5fec9f41a/master/w_1600%2Cc_limit/Christmas%2520Combo%2C%2520Bombay%2520Sweet%2520Shop.jpg',
        title: '',
        price: 200
    },
];

// Function to display items
const displayItems = (items) => {
    const root = document.getElementById('root');
    root.innerHTML = items.map((item) => {
        const { image, title, price } = item;
        return `
            <div class='box'>
                <div class='img-box'>
                    <img class='image' src='${image}' alt='${title}'></img>
                </div>
                <div class='bottom'>
                    <p>${title}</p>
                    <h2>$ ${price}.00</h2>
                    <button>Add to cart</button>
                </div>
            </div>
        `;
    }).join('');
};

// Initial display of all items
displayItems(products);

// Event listener for search input
document.getElementById('sweet-name').addEventListener('keyup', (e) => {
    const searchData = e.target.value.trim().toLowerCase();
    const filteredItems = products.filter((item) => item.title.toLowerCase().includes(searchData));
    displayItems(filteredItems);
});
