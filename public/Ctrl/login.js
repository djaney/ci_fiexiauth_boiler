function loginCtrl($scope,$http){
	
	
	$scope.emailError = '';
	$scope.passwordError = '';
	
	$scope.errorMessage = '';
	
	$scope.login = function(){
		if(!$scope.email) $scope.emailError = 'has-error';
		if(!$scope.password) $scope.passwordError = 'has-error';
		
		$http.post(BASE_URL+'api/user/login',{
			email:$scope.email,
			password:$scope.password,
			remember:$scope.remember
		}).success(function(data){
			if(data.success){
				window.location.href=BASE_URL+'user/';
			}else{
				$scope.errorMessage = data.message;
			}
		});
	};
}