jQuery(document).ready(function ($) {

	$('.header__burger').click(function (event) {
		$('.header__burger, .header__mobmenu').toggleClass('active');
		$('body').toggleClass('lock');

	});




	$('#calcbutt-blg').click(function (event) {
		var ves_blg = document.getElementById('ves-blg').value;
		var tarif_blg = $('input[name="tar-blg"]:checked').val();


		console.log(tarif_blg);



		if (ves_blg >= 0 && ves_blg < 5 && tarif_blg < 1) {
			alert('Стоимость посылки составит 33€');
		}
		else if (ves_blg >= 5 && ves_blg < 8 && tarif_blg < 1) {
			alert('Стоимость посылки составит 35€');
		}
		else if (ves_blg >= 8 && ves_blg < 10 && tarif_blg < 1) {
			alert('Стоимость посылки составит 42€');
		}
		else if (ves_blg >= 10 && ves_blg < 15 && tarif_blg < 1) {
			alert('Стоимость посылки составит 57€');
		}
		else if (ves_blg >= 15 && ves_blg < 20 && tarif_blg < 1) {
			alert('Стоимость посылки составит 70€');
		}
		else if (ves_blg >= 20 && tarif_blg < 1) {
			alert('Посылки более 20кг только в тарифе Экспресс');
		}


		else if (ves_blg >= 0 && ves_blg < 5 && tarif_blg == 1) {
			alert('Стоимость посылки составит 60€');
		}
		else if (ves_blg >= 5 && ves_blg < 10 && tarif_blg == 1) {
			alert('Стоимость посылки составит 80€');
		}
		else if (ves_blg >= 10 && ves_blg < 15 && tarif_blg == 1) {
			alert('Стоимость посылки составит 100€');
		}
		else if (ves_blg >= 15 && ves_blg < 20 && tarif_blg == 1) {
			alert('Стоимость посылки составит 130€');
		}
		else if (ves_blg >= 20 && ves_blg < 25 && tarif_blg == 1) {
			alert('Стоимость посылки составит 150€');
		}
		else if (ves_blg >= 25 && ves_blg <= 30 && tarif_blg == 1) {
			alert('Стоимость посылки составит 170€');
		}
		else if (ves_blg > 30) {
			alert('Посылки более 30кг не принимаются');
		}
		else {
			alert('Введите корректное значение');

		}
	});
	$('#calcbutt-cz').click(function (event) {
		var ves_cz = document.getElementById('ves-cz').value;
		var tarif_cz = $('input[name="tar-cz"]:checked').val();


		console.log(tarif_cz);



		if (ves_cz >= 0 && ves_cz < 2 && tarif_cz < 1) {
			alert('Стоимость посылки составит 35€');
		}
		else if (ves_cz >= 2 && ves_cz < 5 && tarif_cz < 1) {
			alert('Стоимость посылки составит 40€');
		}
		else if (ves_cz >= 5 && ves_cz < 10 && tarif_cz < 1) {
			alert('Стоимость посылки составит 50€');
		}
		else if (ves_cz >= 10 && ves_cz < 15 && tarif_cz < 1) {
			alert('Стоимость посылки составит 60€');
		}
		else if (ves_cz >= 15 && ves_cz < 20 && tarif_cz < 1) {
			alert('Стоимость посылки составит 70€');
		}
		else if (ves_cz >= 20 && tarif_cz < 1) {
			alert('Посылки более 20кг только в тарифе Экспресс');
		}


		else if (ves_cz >= 0 && ves_cz < 5 && tarif_cz == 1) {
			alert('Стоимость посылки составит 60€');
		}
		else if (ves_cz >= 5 && ves_cz < 10 && tarif_cz == 1) {
			alert('Стоимость посылки составит 80€');
		}
		else if (ves_cz >= 10 && ves_cz < 15 && tarif_cz == 1) {
			alert('Стоимость посылки составит 100€');
		}
		else if (ves_cz >= 15 && ves_cz < 20 && tarif_cz == 1) {
			alert('Стоимость посылки составит 130€');
		}
		else if (ves_cz >= 20 && ves_cz < 25 && tarif_cz == 1) {
			alert('Стоимость посылки составит 150€');
		}
		else if (ves_cz >= 25 && ves_cz <= 30 && tarif_cz == 1) {
			alert('Стоимость посылки составит 170€');
		}
		else if (ves_cz > 30) {
			alert('Посылки более 30кг не принимаются');
		}
		else {
			alert('Введите корректное значение');

		}
	});
	$('#calcbutt').click(function (event) {
		var ves = document.getElementById('ves').value;
		var tarif = $('input[name="tar"]:checked').val();


		console.log(tarif);



		if (ves >= 0 && ves < 5 && tarif < 1) {
			alert('Стоимость посылки составит 33€');
		}
		else if (ves >= 5 && ves < 8 && tarif < 1) {
			alert('Стоимость посылки составит 35€');
		}
		else if (ves >= 8 && ves < 10 && tarif < 1) {
			alert('Стоимость посылки составит 42€');
		}
		else if (ves >= 10 && ves < 15 && tarif < 1) {
			alert('Стоимость посылки составит 57€');
		}
		else if (ves >= 15 && ves < 20 && tarif < 1) {
			alert('Стоимость посылки составит 70€');
		}
		else if (ves >= 20 && tarif < 1) {
			alert('Посылки более 20кг только в тарифе Экспресс');
		}


		else if (ves >= 0 && ves < 5 && tarif == 1) {
			alert('Стоимость посылки составит 60€');
		}
		else if (ves >= 5 && ves < 10 && tarif == 1) {
			alert('Стоимость посылки составит 80€');
		}
		else if (ves >= 10 && ves < 15 && tarif == 1) {
			alert('Стоимость посылки составит 100€');
		}
		else if (ves >= 15 && ves < 20 && tarif == 1) {
			alert('Стоимость посылки составит 130€');
		}
		else if (ves >= 20 && ves < 25 && tarif == 1) {
			alert('Стоимость посылки составит 150€');
		}
		else if (ves >= 25 && ves <= 30 && tarif == 1) {
			alert('Стоимость посылки составит 170€');
		}
		else if (ves > 30) {
			alert('Посылки более 30кг не принимаются');
		}
		else {
			alert('Введите корректное значение');

		}
	});


	//WOW
	new WOW().init();


	//lazyload
	$(window).scroll(function () {
		$(".sp_lazyload").lazyload();
	});

	$(window).mousemove(function () {
		$(".sp_lazyload").lazyload();
	});

});