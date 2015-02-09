$(document).ready(function() {
	$('html').disableSelection();
	$('img, a').attr('draggable', false);

	var main_height = 640;

	$('.logo').click(function() {
		setPosition(0, true);
	});

	$('.item .text:not(:last)').click(function() {
		setPosition((main_height * ($(this).index('.text') + 1)), true);
	});

	var drag = false;
    var y = null;
	var currentMargin = null;
	var height = $('.main .contents').height();
	var bottom = main_height - height;
	var $contents = $('.main .contents');

	function setPosition(top, animate) {
		if (animate) {
			$('html, body').animate({
				'scrollTop' : top + 'px'
			}, {
				step: function(now, fx) {
					setMenu(now);
				}
			});
		}
		else {
			$('html, body').scrollTop(top + 'px');
			setMenu(top);
		}
	}

	function setMenu(top) {
		var idx = parseInt(top / main_height, 10);

		if (idx) {
			$('.item .text:nth(' + (idx - 1) + ')').addClass('current');
		}
		$('.item .text' + (idx ? ':not(:nth(' + (idx - 1) + '))' : '')).removeClass('current');
	}

	$(window).scroll(function() {
		var scrollTop = $(window).scrollTop();
		var idx = parseInt((scrollTop + 100) / main_height, 10);

		if (idx) {
			$('.item .text:nth(' + (idx - 1) + ')').addClass('current');
		}
		$('.item .text' + (idx ? ':not(:nth(' + (idx - 1) + '))' : '')).removeClass('current');
	});

	var img = {};
	var itv = {};
	$('.list .items li')
	.on('mouseover', '.out, .over', function() {
		var $over = $(this).parent().find('.over');
		var imgno = $over.attr('imgno');
		img[imgno] = 'visible';
		if (!itv[imgno]) {
			itv[imgno] = {};
		}
		if (itv[imgno]['visible']) {
			return;
		}

		$over.show();
		itv[imgno]['visible'] = setInterval(function() {
			if (img[imgno] == 'hidden') {
				clearInterval(itv[imgno]['visible']);
				itv[imgno]['visible'] = null;
				return;
			}

			var opacity = Math.round(parseFloat($over.css('opacity')) * 100) + 10;
			opacity = opacity > 100 ? 100 : opacity;
			$over.css({
				'opacity' : opacity / 100,
				'filter' : 'alpha(opacity=' + opacity + ')'
			});

			if (opacity >= 100) {
				clearInterval(itv[imgno]['visible']);
				itv[imgno]['visible'] = null;
			}
		}, 30);

	})
	.on('mouseout', '.out, .over', function() {
		var $over = $(this).parent().find('.over');
		var imgno = $over.attr('imgno');
		img[imgno] = 'hidden';
		if (!itv[imgno]) {
			itv[imgno] = {};
		}
		if (itv[imgno]['hidden']) {
			return;
		}

		itv[imgno]['hidden'] = setInterval(function() {
			if (img[imgno] == 'visible') {
				clearInterval(itv[imgno]['hidden']);
				itv[imgno]['hidden'] = null;
				return;
			}
			var opacity = Math.round(parseFloat($over.css('opacity')) * 100) - 10;
			opacity = opacity < 0 ? 0 : opacity;
			$over.css({
				'opacity' : opacity / 100,
				'filter' : 'alpha(opacity=' + opacity + ')'
			});

			if (opacity <= 0) {
				$over.hide();
				clearInterval(itv[imgno]['hidden']);
				itv[imgno]['hidden'] = null;
			}
		}, 30);
	});

	$('.list .prev, .list .next, .pagination').on('click', 'a', function() {
		if ($(this).attr('page')) {
			setPage($(this).attr('page'));
		}
		return false;
	})

	var perBlock = 10;
	var product_width = $('.items:first').width();
	function setPage(page) {
		page = parseInt(page, 10);
		if ($('.items_' + page).length) {
			$('.collection').animate({
				'margin-left' : (page - 1) * -product_width
			});

			setPagination(page);
		}
	}

	function existsItems(page) {
		page = parseInt(page, 10);
		return $('.list .items_' + page).length ? true : false;
	}

	function setPagination(page) {
		page = parseInt(page, 10);
		var currentBlock = Math.floor((page - 1) / perBlock);
		var blockFirstPage = (currentBlock * perBlock) + 1;
		var blockLastPage = blockFirstPage + perBlock - 1;

		var $prev = $('.list .prev a');
		var $prev_img = $prev.find('img');
		if (existsItems(page - 1)) {
			$prev.attr('page', page - 1);
			$prev_img.attr('src', $prev_img.attr('src').replace(/_off\./gi, '_on.'));
		}
		else {
			$prev.removeAttr('page');
			$prev_img.attr('src', $prev_img.attr('src').replace(/_on\./gi, '_off.'));
		}

		var $next = $('.list .next a');
		var $next_img = $next.find('img');
		if (existsItems(page + 1)) {
			$next.attr('page', page + 1);
			$next_img.attr('src', $next_img.attr('src').replace(/_off\./gi, '_on.'));
		}
		else {
			$next.removeAttr('page');
			$next_img.attr('src', $next_img.attr('src').replace(/_on\./gi, '_off.'));
		}

		if (page > perBlock) {
			$('.pagination .prev').show().find('a').attr('page', blockFirstPage - 1);
		}
		else {
			$('.pagination .prev').hide();
		}

		if (existsItems(blockFirstPage + perBlock)) {
			$('.pagination .next').show().find('a').attr('page', blockFirstPage + perBlock);
		}
		else {
			$('.pagination .next').hide();
		}

		$('.pagination .items a').removeAttr('page')
		.find('img').removeClass('current-page').end()
		.each(function(idx) {
			var p = blockFirstPage + idx;

			if (existsItems(p)) {
				$(this).attr('page', p).show();
			}
			else {
				$(this).hide();
			}

			var $img = $(this).find('img');
			if (p == page) {
				$img.attr('src', $img.attr('src').replace(/_off\./gi, '_on.')).addClass('current-page');
			}
			else {
				$img.attr('src', $img.attr('src').replace(/_on\./gi, '_off.'));
			}
		});
	}

	$('.pagination')
	.on('mouseover', 'img:not(.current-page)' , function() {
		$(this).attr('src', $(this).attr('src').replace(/_off\./gi, '_on.'));
	})
	.on('mouseout', 'img:not(.current-page)' , function() {
		$(this).attr('src', $(this).attr('src').replace(/_on\./gi, '_off.'));
	});

	$(window).resize(function() {
		$('.main .contents').css('margin-bottom', $(this).height() - parseInt($('.footer').css('top'), 10));
	}).trigger('resize');

	$('.collection').css('width', $('.collection .items').length * product_width);
	setPage(1);

});