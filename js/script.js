document.addEventListener('DOMContentLoaded', function () {

    // Scroll Animations
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
            }
        });
    }, {
        threshold: 0.1
    });

    const sections = document.querySelectorAll('.section, .bento-item');
    sections.forEach(section => {
        section.classList.add('reveal');
        observer.observe(section);
    });

    // Live Search for Field Guide
    const searchInput = document.getElementById('fieldGuideSearch');
    if (searchInput) {
        searchInput.addEventListener('keyup', function() {
            const filter = searchInput.value.toLowerCase();
            const tabPanes = document.querySelectorAll('.tab-content .tab-pane');
            
            tabPanes.forEach(pane => {
                const listItems = pane.querySelectorAll('li');
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
