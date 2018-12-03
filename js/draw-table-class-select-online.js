function doSelectGlobal() {
				$.getScript("/js/sgvizler.js").done(function() {
									$.getScript('/js/sgvizler-default.js').done(function(){
										$.getScript('https://www.google.com/jsapi');
									})
				});

				$.getScript("https://www.google.com/jsapi");
				var idOptionGlobal = $('#choose-stats-global').val();
				$("#sparql-result-global").load("/include/sparql-queries-global.php #" + idOptionGlobal);
				$("#sparql-result-global").show();
				console.log(idOptionGlobal);

		};