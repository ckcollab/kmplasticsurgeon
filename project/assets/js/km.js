var km_app = angular.module('km_app', []);

km_app.controller('KMController', ['$scope', function ($scope) {
    $scope.show_procedures_for = null;
    $scope.subcategory = null;

    $scope.init = function() {
        // On procedures page you can load a specific category, i.e.
        //     To load face category: "index.php?page=procedures&category=face"
        $scope.show_procedures_for = QueryString.category || 'face';
        $scope.subcategory = QueryString.category || 'eyelid surgery';
    };

	/*
	Face -> "Face & Neck"
		Eyelid Surgery
		Forehead Lift  - if the site doesn't have this info then we will have to leave it blank until she provides info.
		
	Breasts -> "Breast & Chest"
		Breast Augmentation
		Breast Lift
		Breast Reconstruction
		Breast Reduction
		Breast Reduction for Men
        Nipple Enhancement ; Reduction and correction of inverted nipple
        Implant Removal
        Tattoo (breast reconstruction only)

	Body -> "Midsection"
        Arm Lift
		Body Contouring After Major Weight Loss
        Body Lift
		Liposuction
        Labiaplasty
		Scar Revision
		Skin Cancer
		Tummy Tuck

	Mommy -> 
		Tummy Tuck
		
	Male ->
		Liposuction
	*/
}]);

/*
 * Utilities
 */
// Thank ya @ http://stackoverflow.com/questions/979975/how-to-get-the-value-from-url-parameter
var QueryString = function () {
  // This function is anonymous, is executed immediately and
  // the return value is assigned to QueryString!
  var query_string = {};
  var query = window.location.search.substring(1);
  var vars = query.split("&");
  for (var i=0;i<vars.length;i++) {
    var pair = vars[i].split("=");
    	// If first entry with this name
    if (typeof query_string[pair[0]] === "undefined") {
      query_string[pair[0]] = pair[1];
    	// If second entry with this name
    } else if (typeof query_string[pair[0]] === "string") {
      var arr = [ query_string[pair[0]], pair[1] ];
      query_string[pair[0]] = arr;
    	// If third or later entry with this name
    } else {
      query_string[pair[0]].push(pair[1]);
    }
  }
    return query_string;
} ();
