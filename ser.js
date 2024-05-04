// Define the array of products
const products = [
    {
        title: 'Diwali Sweet Combo',
        price: 'Rs.5999',
        shelfLife: '7 days',
        imageUrl: 'https://www.indianhealthyrecipes.com/wp-content/uploads/2021/11/diwali-sweets-recipes.jpg.webp'
    },
    {
        title: 'Ganesh Chaturthi Sweet Combo',
        price: 'Rs.6959',
        shelfLife: '7 days',
        imageUrl: 'https://i.pinimg.com/originals/dd/1c/e9/dd1ce99af79733f10a858cc0baad1788.jpg'
    },
    {
        title: 'Makar Sankrantri Sweet',
        price: 'Rs.6338.',
        shelfLife: '7 days',
        imageUrl: 'https://www.jiomart.com/images/product/original/rvnljmznb0/kesar-sweets-lohri-makar-sankranti-snacks-sweets-gifting-hamper-box-sweet-sugar-fini-till-patti-gond-laddoo-navratan-mixture-mini-kachori-product-images-orvnljmznb0-p596809473-1-202212302034.jpg?im=Resize=(420,420)'
    },
    {
        title: 'Christmas Special.',
        price: 'Rs.7999',
        shelfLife: '7 days',
        imageUrl: 'https://assets.vogue.in/photos/5fd9fcc4d8f3b5a5fec9f41a/master/w_1600%2Cc_limit/Christmas%2520Combo%2C%2520Bombay%2520Sweet%2520Shop.jpg'
    },
    {
        title: 'Ram Navmi Special.',
        price: 'Rs.3699',
        shelfLife: '7 days',
        imageUrl: 'https://i.pinimg.com/originals/aa/3a/91/aa3a9126709822cdc814f1a67b3caa8f.jpg'
    },
    {
        title: 'Maha Shivrati Special',
        price: 'Rs.3699',
        shelfLife: '7 days',
        imageUrl: 'https://chokhidhanifoods.com/csadmin/public/img/uploads/blogs/1709715985.jpg'
    },
    {
        title: 'Paryushan Jain Special.',
        price: 'Rs.3699',
        shelfLife: '7 days',
        imageUrl: 'https://www.gifts-to-india.com/images/DFCSUUN157_big.webp'
    },
    {
        title: 'Holi Special Combo.',
        price: 'Rs.3699',
        shelfLife: '7 days',
        imageUrl: 'https://m.media-amazon.com/images/I/81QT8A3T8hL.jpg'
    },
    {
        title: 'Rakshabandhan Special.',
        price: 'Rs.3699',
        shelfLife: '7 days',
        imageUrl: 'https://m.media-amazon.com/images/I/71cZP6JLs6L._AC_UF894,1000_QL80_.jpg'
    },

    // Add more products here...
];

// Function to display items
const displayItems = (items) => {
    const festivalPhotos = document.querySelector('.festival-photos');
    festivalPhotos.innerHTML = '';

    items.forEach(item => {
        const contentDiv = document.createElement('div');
        contentDiv.classList.add('content');

        const img = document.createElement('img');
        img.src = item.imageUrl;
        img.alt = item.title;

        const sideDiv = document.createElement('div');
        sideDiv.classList.add('side');

        const titleSpan = document.createElement('span');
        titleSpan.classList.add('font');
        titleSpan.textContent = item.title;

        const priceSpan = document.createElement('span');
        priceSpan.textContent = `${item.price}.`;

        const shelfLifeSpan = document.createElement('span');
        shelfLifeSpan.textContent = `${item.shelfLife}.`;

        const button = document.createElement('button');
        button.textContent = 'Add To Cart';

        // Append elements to sideDiv
        sideDiv.appendChild(titleSpan);
        sideDiv.appendChild(document.createElement('br'));
        sideDiv.appendChild(priceSpan);
        sideDiv.appendChild(document.createElement('br'));
        sideDiv.appendChild(shelfLifeSpan);
        sideDiv.appendChild(document.createElement('br'));
        sideDiv.appendChild(document.createElement('br'));
        sideDiv.appendChild(button);

        // Append elements to contentDiv
        contentDiv.appendChild(img);
        contentDiv.appendChild(sideDiv);

        // Append contentDiv to festivalPhotos
        festivalPhotos.appendChild(contentDiv);
    });
};

// Initial display of all items
displayItems(products);

// Event listener for search input
document.getElementById('sweet-name').addEventListener('input', (event) => {
    const searchTerm = event.target.value.toLowerCase();

    // Filter products based on search term
    const filteredProducts = products.filter(product => product.title.toLowerCase().includes(searchTerm));

    // Display filtered products
    displayItems(filteredProducts);
});
