app.controller('contentController', function ($http, $scope) {
   
    $scope.dados = {};
    $scope.urlpage = "/admin/content/index";

    $scope.redirect = function(){
        setTimeout(function () {
            window.location = $scope.urlpage;
        }, 1300);
    }
   $scope.runUpload = 0;

    // quando seleciona a imagem executa automatico
        $scope.uploadFile = function(files) {
            $scope.runUpload = 1;

            var fd = new FormData();
            //Take the first selected file
            fd.append("image", files[0]);
            console.log(files);

            var uploadUrl = '/admin/content/uploadFile';

            $http.post(uploadUrl, fd, {
                withCredentials: true,
                headers: {'Content-Type': undefined },
                transformRequest: angular.identity
            }).then(function (response) {
              console.log('nome image',response.data.image_name);
              if(response.data.status == 'success'){
                $scope.dados.image = response.data.image_name
              } else {
                $scope.dados.image = '';
              }
                $scope.runUpload = 0;
            }, function (response) {
               toastr.error('Opsss... Algo deu errado!', 'Error'); 
                $scope.runUpload = 0;
            });
        };

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
            $scope.dados.category_id = $('#category_id').val();
            $scope.dados.content = $('.summernote').summernote('code');
            if(!$scope.dados.order){
                $scope.dados.order = 9999;
            }
            console.log($scope.dados);

            $http({
                url: '/admin/content/store',
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
                var mensagem = '';
                if(response.data.errors.title){
                    mensagem += response.data.errors.title+ '<br>';
                }
                if(response.data.errors.content){
                    mensagem += response.data.errors.content+ '<br>';
                }
                if(response.data.errors.category){
                    mensagem += response.data.errors.category+ '<br>';
                }
                $scope.avisos('Aviso!', mensagem, 'warning');
            });
        }else{
            $scope.avisos('Aviso!', 'aguarde o upload da imagem', 'warning');
        }
        
        

    }

    $scope.edit = function (id) {

        $http({
            url: '/admin/content/editAngular/' + id,
            data: $scope.dados,
            method: "GET"
        }).then(function (response) {
            console.log(response);
            $scope.dados = response.data;
            $('.summernote').summernote('code',$scope.dados.content);  

           // $('#section_id').val($scope.dados.section_id);
           // $('#category_id').val($scope.dados.category_id);

        }, function (response) {
            console.log(response);

            // console.log('Opsss... Algo deu errado!');
        });

    }


    $scope.update = function (id) {
        if($scope.runUpload == 0){
            $scope.dados.category_id = $('#category_id').val();
        $scope.dados.content = $('.summernote').summernote('code');
        $http({
            url: '/admin/content/update/'+id,
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
            var mensagem = '';
            if(response.data.errors.title){
                mensagem += response.data.errors.title+ '<br>';
            }
            if(response.data.errors.content){
                mensagem += response.data.errors.content+ '<br>';
            }
            if(response.data.errors.category){
                mensagem += response.data.errors.category+ '<br>';
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
            url: '/admin/content/delete',
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