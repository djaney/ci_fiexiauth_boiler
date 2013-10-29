function resendActivationCtrl($scope,$http){

	$scope.done = false;
	$scope.error = false;
	$scope.success = false;
	$scope.reactivate = function(){
		$http.get(BASE_URL+'api/user/reactivate',{
			email:$scope.email
		}).success(function(data){
			
			if(data.success){
				$scope.success = false;
				$scope.done = true;
			}else{
				$scope.error = data.message;
				$scope.done = true;
			}
		});
	};
}