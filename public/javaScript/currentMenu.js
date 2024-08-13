document.addEventListener('DOMContentLoaded', function() {
    const path = window.location.pathname;
    console.log('Current path:', path); 

    const menuItems = {
        '/admin/adminDashboard/overView/index': 'menu-overview',
        '/admin/adminDashboard/pets/index': 'menu-pets',
        '/admin/adminDashboard/blogs/index': 'menu-blogs',
        '/admin/adminDashboard/category/index/': 'menu-category',
        '/admin/adminDashboard/petCare/index': 'menu-pet-care',
        '/admin/adminDashboard/petGrooming/index': 'menu-pet-grooming',
        '/admin/adminDashboard/petShop/index': 'menu-pet-shop',
        '/admin/adminDashboard/petPark/index': 'menu-pet-park',
        '/admin/adminDashboard/petTreatment/index': 'menu-pet-treatment',
        '/admin/adminDashboard/users/index': 'menu-manage-user',
        '/admin/adminDashboard/userPost/index': 'menu-manage-user-post',
        '/': 'menu-home-page',
        '/about': 'menu-about-page',
        '/pages/pets-show/petsPage': 'menu-pets-page',
        '/pages/blogPage': 'menu-blog-page',
        '/petCar': 'menu-petcare-page',
        '/pages/contactPage': 'menu-contact-page',

    };

    const currentMenuItemId = menuItems[path];
    console.log('Current menu item ID:', currentMenuItemId); 

    if (currentMenuItemId) {
        const currentMenuItem = document.getElementById(currentMenuItemId);
        console.log('Current menu item:', currentMenuItem); 
        if (currentMenuItem) {
            currentMenuItem.querySelector('a').classList.add('active');
        }
    }
});
