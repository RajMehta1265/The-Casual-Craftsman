
const items = [
    { name: "Diwali-sweet", image: "https://www.indianhealthyrecipes.com/wp-content/uploads/2021/11/diwali-sweets-recipes.jpg.webp" },
    { name: "ganesh-chaturthi", image: "https://i.pinimg.com/originals/dd/1c/e9/dd1ce99af79733f10a858cc0baad1788.jpg" },
    { name: "makarsankranti", image: "https://www.jiomart.com/images/product/original/rvnljmznb0/kesar-sweets-lohri-makar-sankranti-snacks-sweets-gifting-hamper-box-sweet-sugar-fini-till-patti-gond-laddoo-navratan-mixture-mini-kachori-product-images-orvnljmznb0-p596809473-1-202212302034.jpg?im=Resize=(420,420)" },
    
  ];
  
  const searchInput = document.getElementById("searchInput");
  const resultsContainer = document.getElementById("resultsContainer");
  
  function displayResults(query) {
    
    resultsContainer.innerHTML = "";
  
    
    const filteredItems = items.filter(item =>
      item.name.toLowerCase().includes(query.toLowerCase())
    );
  
    
    filteredItems.forEach(item => {
      const itemElement = document.createElement("div");
      itemElement.classList.add("item");
      const imageElement = document.createElement("img");
      imageElement.src = item.image;
      const nameElement = document.createElement("span");
      nameElement.textContent = item.name;
      itemElement.appendChild(imageElement);
      itemElement.appendChild(nameElement);
      resultsContainer.appendChild(itemElement);
    });
  }
  
  
  searchInput.addEventListener("input", function() {
    const query = this.value;
    displayResults(query);
  });
  
  
  displayResults("");
  