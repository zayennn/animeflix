document.addEventListener('DOMContentLoaded', function () {
    // Mobile sidebar toggle
    const hamburgerMenus = document.querySelectorAll('.hamburger-menu');
    const sidebar = document.querySelector('.sidebar');

    hamburgerMenus.forEach(menu => {
        menu.addEventListener('click', function () {
            sidebar.classList.toggle('active');
            document.body.classList.toggle('sidebar-open');
        });
    });

    // Close sidebar when clicking outside
    document.addEventListener('click', function (e) {
        const isSidebarClick = sidebar.contains(e.target);
        const isHamburgerClick = Array.from(hamburgerMenus).some(menu => menu.contains(e.target));

        if (!isSidebarClick && !isHamburgerClick && sidebar.classList.contains('active')) {
            sidebar.classList.remove('active');
            document.body.classList.remove('sidebar-open');
        }
    });

    // Quick add dropdown
    const quickBtn = document.querySelector('.quick-btn');
    const quickDropdown = document.querySelector('.quick-add-dropdown');

    if (quickBtn && quickDropdown) {
        quickBtn.addEventListener('click', function (e) {
            e.stopPropagation();
            quickDropdown.classList.toggle('active');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', function () {
            quickDropdown.classList.remove('active');
        });
    }

    // Task completion
    const taskCheckboxes = document.querySelectorAll('.task-checkbox input');
    taskCheckboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function () {
            const taskItem = this.closest('.task-item');
            if (this.checked) {
                taskItem.style.opacity = '0.5';
                setTimeout(() => {
                    taskItem.style.display = 'none';
                }, 300);
            }
        });
    });

    // Simulate loading content
    function simulateLoading() {
        const loadingSections = document.querySelectorAll('.content-section, .stats-section');

        loadingSections.forEach(section => {
            section.style.opacity = '0';
        });

        setTimeout(() => {
            loadingSections.forEach(section => {
                section.style.transition = 'opacity 0.5s ease';
                section.style.opacity = '1';
            });
        }, 300);
    }

    simulateLoading();
});