function showStats() {
    var checkBox = document.getElementById("online");
    var globalStatsDivDataSet = document.getElementById("global-stats-div-data-set");
	var globalStatsDivOnline = document.getElementById("global-stats-div-online");
    if (checkBox.checked == true){
		globalStatsDivDataSet.style.display = "none";
		globalStatsDivOnline.style.display = "block";

		
    } else {
        globalStatsDivDataSet.style.display = "block";
		globalStatsDivOnline.style.display = "none";
    }
}