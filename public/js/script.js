// ==================================================>
// Nav SideBar ======================================>

let item = document.querySelectorAll('.nav-sidebar li a');
item.forEach(link => {
    if (link.querySelector('p').innerHTML === link.getAttribute('data-nav')) {
        link.classList.toggle('active');
    }
});

// Nav SideBar Akhir ================================>
// ==================================================>
