	
	<script>
		//-------------------------------анімація цифр---------------------------------------
		  var show = true;
		  var countbox = ".advantages";
		  $(window).on("scroll load resize", function () {
		      if (!show) return false; // Отменяем показ анимации, если она уже была выполнена
		      var w_top = $(window).scrollTop(); // Количество пикселей на которое была прокручена страница
		      var e_top = $(countbox).offset().top; // Расстояние от блока со счетчиками до верха всего документа
		      var w_height = $(window).height(); // Высота окна браузера
		      var d_height = $(document).height(); // Высота всего документа
		      var e_height = $(countbox).outerHeight(); // Полная высота блока со счетчиками
		      if (w_top + 810 >= e_top || w_height + w_top == d_height || e_height + e_top < w_height) {
		          $('.advantages__item h3').spincrement({
		              thousandSeparator: "",
		              duration: 6000
		          });
		          show = false;
		      }
		  });
		    var swiper = new Swiper('.swiper-container', {
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
      renderBullet: function (index, className) {
        return '<span class="' + className + '">' + (index + 1) + '</span>';
      },
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    effect: 'fade',
  });

	</script>