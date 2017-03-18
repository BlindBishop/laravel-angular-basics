var app = angular.module("myApp", []);

app.controller('TodosController', function($scope, $http) {

    $http.get('todos').then(function(response) {
        $scope.todos = response.data;
    });

    $scope.remaining = function() {
        var count = 0;

        angular.forEach($scope.todos, function(todo){
           count +=  todo.completed ? 0 : 1;
        });

        return count;
    };

    $scope.addTodo = function() {
        var todo = {
            body : $scope.newTodoText,
            completed : false
        };

        $scope.todos.push(todo);
        $http.post('todos', todo);

    };


});