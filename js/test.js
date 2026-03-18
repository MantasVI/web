// ==================
// HEARTS / FAVORITES
// ==================
document.querySelectorAll('.action-film-container').forEach(function(container) {
    const heart     = container.querySelector('.fa-heart');
    const contentId = container.dataset.id;
    const type      = container.dataset.type;
    const name      = container.dataset.name;

    if(userFavorites.includes(name)) {
        heart.classList.remove('fa-regular');
        heart.classList.add('fa-solid');
    }

    heart.addEventListener('click', function() {
        fetch('../php/addfavorite.php', {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: 'contentId=' + encodeURIComponent(contentId) +
                  '&type='     + encodeURIComponent(type) +
                  '&name='     + encodeURIComponent(name)
        })
        .then(res => res.json())
        .then(data => {
            if(data.status === 'added') {
                heart.classList.remove('fa-regular');
                heart.classList.add('fa-solid');
            } else {
                heart.classList.remove('fa-solid');
                heart.classList.add('fa-regular');
            }
        });
    });
});

// ==================
// FAVORITES PAGE
// ==================
const moviesContainer = document.getElementById('movies-container');
const seriesContainer = document.getElementById('series-container');

function renderCards(list, container) {
    if (!container) return;
    if (list.length === 0) {
        container.innerHTML = '<p style="color:gray">Nothing here yet!</p>';
    } else {
        list.forEach(function(item) {
            container.innerHTML += `
                <div class="action-film-container">
                    <i class="fa-solid fa-heart"></i>
                    <img class="action-film" src="${item.image}">
                    <p class="action-info">${item.name}</p>
                </div>
            `;
        });
    }
}

// ✅ only run on favorites page
if(moviesContainer || seriesContainer) {
    renderCards(userMovies, moviesContainer);
    renderCards(userSeries, seriesContainer);
}

// ==================
// SEARCH BAR
// ==================
const searchBar = document.querySelector('.search-bar');
const allCards  = document.querySelectorAll('.action-film-container');

if(searchBar) {
    searchBar.addEventListener('input', function() {
        const searchText = searchBar.value.toLowerCase();

        allCards.forEach(function(card) {
            const movieName = card.querySelector('.action-info').textContent.toLowerCase();
            card.style.display = movieName.includes(searchText) ? 'block' : 'none';
        });
    });
}