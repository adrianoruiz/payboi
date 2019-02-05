
app.controller('sectionController', function ($http, $scope) {
   
    $scope.dados = {};
    $scope.urlpage = "/admin/section/index";

    $scope.redirect = function(){
        setTimeout(function () {
            window.location = $scope.urlpage;
        }, 1300);
    }

    $scope.avisos = function name(title,mensagem, status) {
        toastr.options = {
            closeButton: true,
            progressBar: true,
            showMethod: 'slideDown',
            timeOut: 1500
        };
        if (status == 'success') {
            toastr.success(mensagem, title);
            $scope.redirect();
           
        }
        else {
            toastr.error(mensagem, title);       
        }
      
    }

    $scope.store = function () {
        console.log($scope.dados);

        $http({
            url: '/admin/section/store',
            data: $scope.dados,
            method: "POST"
        }).then(function (response) {
            var title = response.data.dados.title;
            var mensagem = response.data.dados.mensagem;
            var status = response.data.status ;
            
            if (status === 'success') {
                $scope.avisos(title, mensagem, response.data.status);

            }  
            else {
                $scope.avisos(title, mensagem, response.data.status);
            } 

        }, function (response) {
            console.log(response);
            var mensagem = response.data.errors.name;
            $scope.avisos('Aviso!', mensagem, 'warning');
        });

    }

    $scope.edit = function (id) {

        $http({
            url: '/admin/section/editAngular/' + id,
            data: $scope.dados,
            method: "GET"
        }).then(function (response) {
            console.log(response);
            $scope.dados = response.data;

        }, function (response) {
            console.log(response);

            // console.log('Opsss... Algo deu errado!');
        });

    }


    $scope.update = function (id) {
        
        $http({
            url: '/admin/section/update/'+id,
            data: $scope.dados,
            method: "POST"
        }).then(function (response) {
            console.log(response);
            var title = response.data.dados.title;
            var mensagem = response.data.dados.mensagem;
            var status = response.data.status;

            if (status === 'success') {
                $scope.avisos(title, mensagem, response.data.status);
            }
            else {
                $scope.avisos(title, mensagem, response.data.status);
            }
            // 

        }, function (response) {
            console.log(response);
            var mensagem = response.data.errors.name;
            $scope.avisos('Aviso!', mensagem, 'warning');
        });

    }

    $scope.del = function (id) {
        var dados = { "id" : id };
        $http({
            url: '/admin/section/delete',
            data: dados ,
            method: "POST"
        }).then(function (response) {
            var mensagem = response.data.dados.mensagem;            
            swal(mensagem, {
                icon: "success",
                buttons: false,
                timer: 3000,
            });
            setTimeout(function () {
                location.reload();
            }, 900);
            

        }, function (response) {
            console.log(response);
            swal("Erro de comunição com servidor", {
                icon: "error",
            });

            // console.log('Opsss... Algo deu errado!');
        });
        
    } 

    $scope.delete = function (id) {

        swal({
            title: "Deletar?",
            text: "Uma vez excluído, você não poderá recuperar este registro!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {

                    $scope.del(id) ;
                    
                } else {
                    // swal("Your imaginary file is safe!");
                }
            });
    }


    // VERIFICA QUANDO ABRE A PAGINA SE ESTA EDITARNDO OU CRIANDO
    // UM NOVO REGISTRO
    $scope.id = $('#id_dado').val();

    if ($scope.id) {
        $scope.edit($scope.id);
    }

    $scope.submitEnter = function (keyEvent) {
        if (keyEvent.which === 13) {
            if ($scope.id) {
                // edit
                $scope.update($scope.id);
            } else {
                //store
                $scope.store();
            }
        }

    }


});