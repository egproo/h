window.onload = function () {
    const overlay = document.getElementById('overlay');

    setTimeout(function () {
      overlay.classList.add('show-overlay');
      setTimeout(function () {
        overlay.classList.remove('show-overlay');
      }, 2000); // إخفاء الطبقة بعد 5 ثواني
    }, 0);
  };

  //======================================
  
// يقوم بحذف الكوكيز الموجودة
function deleteCookies() {
  var cookies = document.cookie.split(";");

  for (var i = 0; i < cookies.length; i++) {
      var cookie = cookies[i];
      var eqPos = cookie.indexOf("=");
      var name = eqPos > -1 ? cookie.substr(0, eqPos) : cookie;
      document.cookie = name + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
  }
}

// يمنع حفظ الكوكيز الجديدة
function preventCookies() {
  Object.defineProperty(document, 'cookie', {
      get: function() {
          return '';
      },
      set: function() {
          return true;
      }
  });
}


// حذف الكوكيز الموجودة عند تحميل الصفحة
deleteCookies();

// منع حفظ الكوكيز الجديدة
preventCookies();



  
