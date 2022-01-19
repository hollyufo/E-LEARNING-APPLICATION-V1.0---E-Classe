
window.addEventListener('DOMContentLoaded', event => {
    const sidebarToggle = document.body.querySelector('#sidebarToggle');
    if (sidebarToggle) {
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });
    }

});
<svg width="255" height="157" viewBox="0 0 255 157" fill="none" xmlns="http://www.w3.org/2000/svg">
<rect width="255" height="157" rx="8" fill="#F0F9FF"/>
</svg>
