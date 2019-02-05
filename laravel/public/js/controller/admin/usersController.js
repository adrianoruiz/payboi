app.controller('usersController', function ($http, $scope) {
   
    $scope.dados = {};
    $scope.urlpage = "/admin/users/index";
    $scope.runUpload = 0;

    // quando seleciona a imagem executa automatico
        $scope.uploadFile = function(files) {
            $scope.runUpload = 1;

            var fd = new FormData();
            
            //Take the first selected file
            fd.append("avatar", files[0]);
            console.log(files);

            var uploadUrl = '/admin/users/saveAvatar';

            $http.post(uploadUrl, fd, {
                withCredentials: true,
                headers: {'Content-Type': undefined },
                transformRequest: angular.identity
            }).then(function (response) {
              console.log('nome avatar ',response.data.image_name);
              if(response.data.status == 'success'){
                $scope.dados.avatar = response.data.image_name
              } else {
                $scope.dados.avatar = '';
              }
                $scope.runUpload = 0;
            }, function (response) {
                $scope.runUpload = 0;
                swal("Opsss!","Opsss... Algo deu errado!", "error");  
            });
        };


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
        if($scope.runUpload == 0){
            $scope.dados.role         = $('#role').val();
            $scope.dados.id_city      = $('#id_city').val();
            $scope.dados.password     = $('#password').val();
            $scope.dados.cnpj_cpf     = $('#cnpj_cpf').val();
            $scope.dados.cep          = $('#cep').val();
            $scope.dados.cell_phone   = $('#cell_phone').val();
            $scope.dados.id_activity  = $('#id_activity').val();

            
            
            console.log($scope.dados);
            $http({
                url: '/admin/users/store',
                data: $scope.dados,
                method: "POST"
            }).then(function (response) {
                var title = response.data.dados.title;
                var mensagem = response.data.dados.mensagem;
                var status = response.data.status ;
                
                if (status === 'success') {
                    $scope.avisos(title, mensagem, status);
                }  
                else {
                    $scope.avisos(title, mensagem, status);
                } 

            }, function (response) {
                console.log(response);
                var mensagem = '';
                if(response.data.errors.email){
                    mensagem += response.data.errors.email+ '<br>';
                }
                if(response.data.errors.name){
                    mensagem += response.data.errors.name+ '<br>';
                }

                $scope.avisos('Aviso!', mensagem, 'warning');
            }); 
        }else{
            $scope.avisos('Aviso!', 'aguarde o upload da imagem', 'warning');
        }

        

      

    }

    $scope.edit = function (id) {

        $http({
            url: '/admin/users/editAngular/' + id,
            data: $scope.dados,
            method: "GET"
        }).then(function (response) {
            console.log(response);
            $scope.dados = response.data;
            console.log('$scope.dados',$scope.dados);

        }, function (response) {
            console.log(response);

            // console.log('Opsss... Algo deu errado!');
        });

    }


    $scope.update = function (id) {
        if($scope.runUpload == 0){
            
        $scope.dados.role         = $('#role').val();
        $scope.dados.id_city      = $('#id_city').val();
        $scope.dados.password     = $('#password').val();
        $scope.dados.cnpj_cpf     = $('#cnpj_cpf').val();
        $scope.dados.cep          = $('#cep').val();
        $scope.dados.cell_phone   = $('#cell_phone').val();
        $scope.dados.id_activity  = $('#id_activity').val();

        console.log($scope.dados);

        $http({
            url: '/admin/users/update/'+id,
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
            var mensagem = '';
            if(response.data.errors.email){
                mensagem += response.data.errors.email+ '<br>';
            }
            if(response.data.errors.name){
                mensagem += response.data.errors.name+ '<br>';
            }

            $scope.avisos('Aviso!', mensagem, 'warning');
        });
        }else{
            $scope.avisos('Aviso!', 'aguarde o upload da imagem', 'warning');
        }
        
        

    }

    $scope.del = function (id) {
        var dados = { "id" : id };
        $http({
            url: '/admin/users/delete',
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

    $('select[name=state]').change(function () {
        var uf = $(this).val();

        $.get('/admin/getCitiesByState/' + uf, function (busca) {
            $('select[id=id_city]').empty();
            $('select[id=id_city]').append('<option value="">Selecione... </option>');
            $.each(busca, function (key, value) {
                $('select[id=id_city]').append('<option value="' + value.id + '">' + value.name + '</option>');
            });
        });
    });

    $(document).ready(function(){

        $('#cnpj').mask('99.999.999/9999-99');
        $('#cpf').mask('999.999.999-99');
        // $('#dt_birth').mask('99/99/9999');
        $('#cep').mask('99999-999');
        $('#cell_phone').mask('(99) 99999-9999');
        $('#telephone').mask('(99) 9999-9999');
        $('#rg').mask('99.999.999-9');

    });

});