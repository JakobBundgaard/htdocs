
    function toggle_menu() {
      const domMenu = document.getElementById('menu');
      if(domMenu.classList.contains('active')){
        domMenu.classList.remove('active')
      }else{
        domMenu.classList.add('active')
      }
      // domMenu.style.display = domMenu.style.display === 'grid' ? domMenu.style.display = 'none' : domMenu.style.display = 'grid'
    }
  