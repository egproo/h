window.onload = function () {
    const overlay = document.getElementById('overlay');

    setTimeout(function () {
      overlay.classList.add('show-overlay');
      setTimeout(function () {
        overlay.classList.remove('show-overlay');
      }, 2000); // إخفاء الطبقة بعد 5 ثواني
    }, 0);
  };

  
