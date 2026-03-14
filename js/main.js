// ==================
// HEARTS / FAVORITES
// ==================
let favorites = JSON.parse(localStorage.getItem('favorites')) || [];

const hearts = document.querySelectorAll('.fa-heart');

hearts.forEach(function(heart) {
    const container = heart.closest('.action-film-container');
    const movieName = container.querySelector('.action-info').textContent.trim(); // ✅ was missing
    const movieImg = container.querySelector('.action-film').getAttribute('src');
    const movieType = container.getAttribute('data-type');
    const alreadyFavorited = favorites.some(function(movie) {
        return movie.name === movieName;
    });

    if (alreadyFavorited) {
        heart.classList.remove('fa-regular');
        heart.classList.add('fa-solid');
    }

    heart.addEventListener('click', function() {
        heart.classList.toggle('fa-regular');
        heart.classList.toggle('fa-solid');

        if (heart.classList.contains('fa-solid')) {
            favorites.push({ name: movieName, img: movieImg, type: movieType }); // ✅ added type
        } else {
            favorites = favorites.filter(function(movie) {
                return movie.name !== movieName;
            });
        }

        localStorage.setItem('favorites', JSON.stringify(favorites));
    });
});

// ==================
// FAVORITES PAGE
// ==================
const favContainer = document.getElementById('favorites-container');
const seriesContainer = document.getElementById('series-container');

if (favContainer || seriesContainer) {
    const movies = favorites.filter(function(f) { return f.type === 'movie'; });
    const series = favorites.filter(function(f) { return f.type === 'series'; });

    function renderCards(list, container) {
        if (!container) return;
        if (list.length === 0) {
            container.innerHTML = '<p style="color:gray">Nothing here yet!</p>';
        } else {
            list.forEach(function(item) {
                container.innerHTML += `
                    <div class="action-film-container">
                        <i class="fa-solid fa-heart"></i>
                        <img class="action-film" src="${item.img}">
                        <p class="action-info">${item.name}</p>
                    </div>
                `;
            });
        }
    }

    renderCards(movies, favContainer);
    renderCards(series, seriesContainer);
}

// ==================
// SEARCH BAR
// ==================
const searchBar = document.querySelector('.search-bar');
const allCards = document.querySelectorAll('.action-film-container');

if (searchBar) {
    searchBar.addEventListener('input', function() {
        const searchText = searchBar.value.toLowerCase();

        allCards.forEach(function(card) {
            const movieName = card.querySelector('.action-info').textContent.toLowerCase();

            if (movieName.includes(searchText)) {
                card.style.display = 'block';
            } else {
                card.style.display = 'none';
            }
        });
    });
}