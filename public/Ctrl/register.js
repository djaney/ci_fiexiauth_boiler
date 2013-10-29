function registerCtrl($scope,$http){
	
	
	$scope.emailError = '';
	$scope.passwordError = '';
	$scope.password2Error = '';
	$scope.fnameError = '';
	$scope.lnameError = '';
	
	$scope.errorMessage = '';
	
	$scope.register = function(){
		if(!$scope.email)
			$scope.emailError = 'has-error';
		else $scope.emailError = '';
		
		if(!$scope.password) $scope.passwordError = 'has-error';
		else $scope.passwordError = '';
		
		if(!$scope.password2) $scope.passwordError2 = 'has-error';
		else $scope.passwordError2 = '';
		
		if(!$scope.fname) $scope.fnameError = 'has-error';
		else $scope.fnameError = '';
		
		if(!$scope.lname) $scope.lnameError = 'has-error';
		else $scope.lnameError = '';
		
		if($scope.password!=$scope.password2){
			$scope.passwordError = 'has-error';
			$scope.passwordError2 = 'has-error';
		}else{
			$scope.passwordError = '';
			$scope.passwordError2 = '';
		}
		
		$http.post(BASE_URL+'api/user/register',{
			email:$scope.email,
			password:$scope.password,
			fname:$scope.fname,
			lname:$scope.lname
		}).success(function(data){
			if(data.success){
				window.location.href=BASE_URL+'user/';
			}else{
				$scope.errorMessage = data.message;
			}
		});
	};
}