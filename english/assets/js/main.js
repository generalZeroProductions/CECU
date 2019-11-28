(function($) {

	$("#thumbOne_01").click(function(){
			$("#newsOne").attr("src", "images/news/newsOne_01.jpg");
			$("#newsOneCaption").html("City of Las Vegas Manager of Business Development, Patrick Sinnott, makes a presentation on behalf of the city during the second day of the summit.")
	});
	$("#thumbOne_02").click(function(){
			$("#newsOne").attr("src", "images/news/newsOne_02.jpg");
			$("#newsOneCaption").html("Distinguished guests, including: Mayor John Lee of North Las Vegas and City Councilman Ricky Barlow.")
	});

	$("#thumbOne_03").click(function(){
			$("#newsOne").attr("src", "images/news/newsOne_03.jpg");
			$("#newsOneCaption").html("AAG Chairwoman, Rita Vaswani, Clark County Commissioner Steve Sisolak and  CECU Chairman, Ronnie Chang.")
	});
	$("#thumbOne_04").click(function(){
			$("#newsOne").attr("src", "images/news/newsOne_04.jpg");
			$("#newsOneCaption").html("The State of Nevada Governor’s office presents CECU chairman, Ronnie Chang, an official proclamation in recognition of excellence as an ambassador for Las Vegas.")
	});
	$("#thumbOne_05").click(function(){
			$("#newsOne").attr("src", "images/news/newsOne_05.jpg");
			$("#newsOneCaption").html("Chief of Protocol for City of Las Vegas, Gayle Anderson, is introduced to the leadership of the Gui Lin Chapter of the International Women in Business Group.")
	});
	$("#thumbOne_06").click(function(){
			$("#newsOne").attr("src", "images/news/newsOne_06.jpg");
			$("#newsOneCaption").html("Gui Lin Chapter of the International Women in Business Group.")
	});

	$("#thumbOne_ch_01").click(function(){
			$("#newsOne").attr("src", "images/news/newsOne_01.jpg");
			$("#newsOneCaption").html("拉斯維加斯市拉斯維加斯商業發展經理 Patrick Sinnott在峰會第二天代表城市做演講。")
	});
	$("#thumbOne_ch_02").click(function(){
			$("#newsOne").attr("src", "images/news/newsOne_02.jpg");
			$("#newsOneCaption").html("尊敬的嘉賓包括：北拉斯維加斯市長約翰·李和市議員里奇·巴洛（Ricky Barlow）。")
	});

	$("#thumbOne_ch_03").click(function(){
			$("#newsOne").attr("src", "images/news/newsOne_03.jpg");
			$("#newsOneCaption").html("AAG主席，Rita Vaswani，克拉克縣長，Steve Sisolak 和 CECU 主席，Ronnie Chang。")
	});
	$("#thumbOne_ch_04").click(function(){
			$("#newsOne").attr("src", "images/news/newsOne_04.jpg");
			$("#newsOneCaption").html("CECU 董事 Ronney Chang收到內華達州州長辦公室的正式宣布，以表彰對拉斯維加斯市的傑出貢獻。")
	});
	$("#thumbOne_ch_05").click(function(){
			$("#newsOne").attr("src", "images/news/newsOne_05.jpg");
			$("#newsOneCaption").html("拉斯維加斯市, Gayle Anderson, 議會主席介紹了來自中國的幾位客人。")
	});
	$("#thumbOne_ch_06").click(function(){
			$("#newsOne").attr("src", "images/news/newsOne_06.jpg");
			$("#newsOneCaption").html("桂林國際婦女事務小組第一章")
	});


	//thumb 0 codes
	$("#thumbZero_01").click(function(){
			$("#newsZero").attr("src", "images/news/newsZero_01.jpg");
			$("#newsZeroCaption").html("Inner-Mongolian Trade and Industry Association Director, Hao Xukuan, hosts the delegation to a traditional Mongolian feast.")
	});
	$("#thumbZero_02").click(function(){
			$("#newsZero").attr("src", "images/news/newsZero_02.jpg");
			$("#newsZeroCaption").html("Deputy Mayor of Zhuhai City, Guangdong Province, Lu Xiaofeng receives the Delegation in ZhuHai.")
	});

	$("#thumbZero_03").click(function(){
			$("#newsZero").attr("src", "images/news/newsZero_03.jpg");
			$("#newsZeroCaption").html("At the Beijing Enterprise Confederation.")
	});

	$("#thumbZero_04").click(function(){
			$("#newsZero").attr("src", "images/news/newsZero_04.jpg");
			$("#newsZeroCaption").html("Visiting Zhuhai in southern China.")
	});

	$("#thumbZero_05").click(function(){
			$("#newsZero").attr("src", "images/news/newsZero_05.jpg");
			$("#newsZeroCaption").html("A visit to Shanghai and a meeting with Vice Mayor, Zhou Tai Zhong.")
	});
	$("#thumbZero_06").click(function(){
			$("#newsZero").attr("src", "images/news/newsZero_06.jpg");
			$("#newsZeroCaption").html("Nanning City Standing Committee, Deputy Mayor Zhang Wei, Deputy director of Nanning Municipal Foreign Affairs Committee, Huang Lian, deputy director of Nanning City Construction Committee, Yang Lian and other welcome us to Nanning.")
	});

	$("#thumbZero_ch_01").click(function(){
			$("#newsZero").attr("src", "images/news/newsZero_01.jpg");
			$("#newsZeroCaption").html("工商联郝总接待蒙古大营晚宴。")
	});
	$("#thumbZero_ch_02").click(function(){
			$("#newsZero").attr("src", "images/news/newsZero_02.jpg");
			$("#newsZeroCaption").html("桂林市常委、常务副市长张晓武先生接待维加斯友好访问团。")
	});

	$("#thumbZero_ch_03").click(function(){
			$("#newsZero").attr("src", "images/news/newsZero_03.jpg");
			$("#newsZeroCaption").html("美国拉斯维加斯区域与商贸旅游友好访问团。")
	});
	$("#thumbZero_ch_04").click(function(){
			$("#newsZero").attr("src", "images/news/newsZero_04.jpg");
			$("#newsZeroCaption").html("美国拉斯维加斯区域与商贸旅游友好访问团。")
	});
	$("#thumbZero_ch_05").click(function(){
			$("#newsZero").attr("src", "images/news/newsZero_05.jpg");
			$("#newsZeroCaption").html("政协上海市委员会副主席、上海市常务副市长周太彤。")
	});
	$("#thumbZero_ch_06").click(function(){
			$("#newsZero").attr("src", "images/news/newsZero_06.jpg");
			$("#newsZeroCaption").html("南宁市常委、常务副市长张卫接待美国拉斯维加斯友好访问团。")
	});


	skel.breakpoints({
		wide: '(max-width: 1680px)',
		normal: '(max-width: 1280px)',
		narrow: '(max-width: 980px)',
		narrower: '(max-width: 840px)',
		mobile: '(max-width: 736px)',
		mobilep: '(max-width: 480px)'
	});

	$(function() {

		var	$window = $(window),
			$body = $('body');

		// Disable animations/transitions until the page has loaded.
			$body.addClass('is-loading');

			$window.on('load', function() {
				$body.removeClass('is-loading');
			});

		// Fix: Placeholder polyfill.
			$('form').placeholder();

		// Prioritize "important" elements on narrower.
			skel.on('+narrower -narrower', function() {
				$.prioritize(
					'.important\\28 narrower\\29',
					skel.breakpoint('narrower').active
				);
			});

		// Dropdowns.
			$('#nav > ul').dropotron({
				offsetY: -15,
				hoverDelay: 0,
				alignment: 'center'
			});

		// Off-Canvas Navigation.

			// Title Bar.
				$(
					'<div id="titleBar">' +
						'<a href="#navPanel" class="toggle"></a>' +
					//	'<span class="title">' + $('#logo').html() + '</span>' +//
					'<span class="title" style="font-size:22pt"> CECU'+' <span style="color:lightblue"> Las Vegas</span></span>'+
					'</div>'
				)
					.appendTo($body);

			// Navigation Panel.
				$(
					'<div id="navPanel">' +
						'<nav>' +
							$('#nav').navList() +
						'</nav>' +
					'</div>'
				)
					.appendTo($body)
					.panel({
						delay: 500,
						hideOnClick: true,
						hideOnSwipe: true,
						resetScroll: true,
						resetForms: true,
						side: 'left',
						target: $body,
						visibleClass: 'navPanel-visible'
					});

			// Fix: Remove navPanel transitions on WP<10 (poor/buggy performance).
				if (skel.vars.os == 'wp' && skel.vars.osVersion < 10)
					$('#titleBar, #navPanel, #page-wrapper')
						.css('transition', 'none');

	});
document.onload=function(){
	var $select = $("<select></select>");
	$('#mainMenu').append($select);


	$select.change(function(){
	  window.location = $select.val();
	});

	$('#mainMenu a').each()(function(){
	  var $option = $("<option></option>");
	  option.val($(this).attr("href"));
	  $option.text($(this).text());
	  if($(this).parent().hasClass("current")){
	    $option.prop("current", true);
	    $select.append($option);
	  }
	  $select.append($option);
	  });
	};


	//news and other photo links



	/*$("#teamSina").click(function(){
	  $('.video-wrapper').css({"padding-bottom":"40%"});
	    $("#StudioVids").attr("src", "video/teamSina.html");
	});*/

})(jQuery);
