document.addEventListener('DOMContentLoaded', function () {

    // Live Search for Field Guide
    const searchInput = document.getElementById('fieldGuideSearch');
    if (searchInput) {
        searchInput.addEventListener('keyup', function() {
            const filter = searchInput.value.toLowerCase();
            const tabPanes = document.querySelectorAll('.tab-content .tab-pane');
            
            tabPanes.forEach(pane => {
                const listItems = pane.querySelectorAll('li, p'); // Include paragraphs in search
                listItems.forEach(item => {
                    const text = item.textContent || item.innerText;
                    if (text.toLowerCase().indexOf(filter) > -1) {
                        item.style.display = '';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    }
});
