/**
    // Display a warning toast, with no title
    toastr.warning('My name is Inigo Montoya. You killed my father, prepare to die!')

    // Display a success toast, with a title
    toastr.success('Have fun storming the castle!', 'Miracle Max Says')

    // Display an error toast, with a title
    toastr.error('I do not think that word means what you think it means.', 'Inconceivable!')

    // Immediately remove current toasts without using animation
    toastr.remove()

    // Remove current toasts using animation
    toastr.clear()

    // Override global options
    toastr.success('We do have the Kapua suite available.', 'Turtle Bay Resort', {timeOut: 5000})
 */

app.controller('activityController', function ($http, $scope) {
   
    $scope.dados = {};
    $scope.urlpage = "/admin/activity/index";

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
   $scope.runUpload = 0;

    // quando seleciona a imagem executa automatico
        $scope.uploadFile = function(files) {
            $scope.runUpload = 1;

            var fd = new FormData();
            //Take the first selected file
            fd.append("image", files[0]);
            console.log(files);

            var uploadUrl = '/admin/category/uploadFile';

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


    $scope.store = function () {
        if($scope.runUpload == 0){
            $scope.dados.section_id = $('#section_id').val();
            console.log($scope.dados);

            $http({
                url: '/admin/activity/store',
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
                var mensagem = response.data.errors.description;
                $scope.avisos('Aviso!', mensagem, 'warning');
            });
        }else{
            $scope.avisos('Aviso!', 'aguarde o upload da imagem', 'warning');
        } 

        

    }

    $scope.edit = function (id) {

        $http({
            url: '/admin/activity/editAngular/' + id,
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
        if($scope.runUpload == 0){
            $scope.dados.section_id = $('#section_id').val();
            
            $http({
                url: '/admin/activity/update/'+id,
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
                var mensagem = response.data.errors.description;
                $scope.avisos('Aviso!', mensagem, 'warning');
            });
        }else{
            $scope.avisos('Aviso!', 'aguarde o upload da imagem', 'warning');
        } 

        

    }

    $scope.del = function (id) {
        var dados = { "id" : id };
        $http({
            url: '/admin/activity/delete',
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