let tabs = document.querySelectorAll('tab-link:not(.desactive)');

tabs.forEach(tab=> {
    tab.addEventListener('click', ()=> {
        unSelectAll();
        tab.classList.add('active');
        let ref = tab.getAttribute('data-ref');
        document.querrySelector(`tab-body[data-id="${ref}"]`).classList.add("active");
    });
});

function unSelectAll(){};