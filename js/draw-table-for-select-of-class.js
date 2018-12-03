function doSelect() {
				$.getScript("/js/sgvizler.js").done(function() {
									$.getScript('/js/sgvizler-default.js').done(function(){
										$.getScript('https://www.google.com/jsapi');
									})
				});

				$.getScript("https://www.google.com/jsapi");
				var idOption = $('#choose-stats').val();
				$("#sparql-result").load("/include/sparql-queries.php #" + idOption);
				$("#sparql-result").show();
				console.log(idOption);

		};