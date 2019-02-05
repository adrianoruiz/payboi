app.controller('categoryActiveController', function ($http, $scope) {

    $scope.dados = {};
    $scope.checkboxModel = {};
    $scope.order = {};

    $scope.urlpage = "/admin/category/create_atv";

    $(".select2_autocomplete").select2({
                placeholder: "Selecione a Categoria",
                allowClear: true
            });


    $scope.redirect = function(){
        setTimeout(function () {
            window.location = $scope.urlpage;
        }, 1300);
    }

 	$scope.edit = function (id) {

          $http({
	            url: '/admin/category/getCreate_atv/' + id,
	            data: '',
	            method: "GET"
	        }).then(function (response) {
	            console.log('getCreate_atv',response);

	        }, function (response) {
	            console.log('getCreate_atv',response);

	            // console.log('Opsss... Algo deu errado!');
	        });  

    }

    $scope.remove = function (index,id) {
        console.log('index,remove',index,id);

        var id_check = "#atividade_"+id;
        var t= $( id_check ).is(':checked');

//Retornar true ou false
        if(t) {
        // alert("CheckBox marcado.");
        }
        else {
        // alert("CheckBox desmarcado.");
            $scope.checkboxModel[index] = 0;
        }

        console.log(t);
    }

    $scope.setActivy = function () {

        console.log('$scope.activitys',$scope.activitys);

        // inicio de trazer as atividaes no editar pelo angular
        var edit_activitys = $scope.activitys

        for (var i = 0 ; i < edit_activitys.length ; i++) {
           $scope.checkboxModel[i] = edit_activitys[i].id;
           $scope.order[i] = edit_activitys[i].order;
        }

        // faz o mesmo q em cima so q jquery
        // seleciona as atividades da categoria e da um check
        $.each( $scope.activitys, function( key, value ) {
          // console.log( key + ": " + value.id );
          var id_check = "#atividade_"+value.id;
          $( id_check ).prop( "checked", true );

          var order = "#order_"+value.id;
          $( order ).val( value.order );

        });

        console.log('$scope.checkboxModel',$scope.checkboxModel);

    }


    $scope.listActivitysByCategory = function (id) {

          $http({
                url: '/api/activitys/listActivitysByCategory/' + id,
                data: '',
                method: "GET"
            }).then(function (response) {

                // console.log('listActivitysByCategory',response);
                $scope.activitys = response.data;

                //Deselecionar todas as atividas
                $( ".atividades" ).prop( "checked", false );
                $( ".order" ).val('');

                setTimeout(function(){ $scope.setActivy(); }, 1000);           


            }, function (response) {
                // console.log('listActivitysByCategory',response);

                // console.log('Opsss... Algo deu errado!');
            });  

    }



    $(".select2_autocomplete").on("select2:select", function (e) {
            var value = e.params.data.id;
            var text = e.params.data.text;
            $scope.dados.category = value;
            console.log("select2_autocomplete selected value: " + value);  

            //Quando muda a categoria ja trazer as atvidade selecionadas
            $scope.listActivitysByCategory(value);  
           
    });


    $scope.avisos = function name(title,mensagem, status) {
        toastr.options = {
            closeButton: true,
            progressBar: true,
            showMethod: 'slideDown',
            timeOut: 1500
        };
        if (status == 'success') {
            toastr.success(mensagem, title);
          //  $scope.redirect();
           
        }
        else {
            toastr.error(mensagem, title);       
        }
      
    }

     $scope.resetar = function () {

         $http({
            url: '/admin/category/resetar',
            data: {'idcat' : $scope.dados.category },
            method: "POST"
        }).then(function (response) {
            console.log(response);
            var title = response.data.dados.title;
            var mensagem = response.data.dados.mensagem;
            var status = response.data.status ;
                
            $scope.avisos(title, mensagem, response.data.status);
                    $scope.redirect();

        }, function (response) {
            $scope.avisos(title, mensagem, response.data.status);
                    $scope.redirect();

        });

     }

    $scope.store = function () {

        
        $scope.dados.checkbox = $scope.checkboxModel;
        $scope.dados.order = $scope.order;


        // $scope.dados.section_id = $('#section_id').val();
        console.log('ALL',$scope.dados);

       
        if( $(".select2_autocomplete").val() != ''){
            // @TODO fazer o category/storeCatActive
            $http({
                url: '/admin/category/storeCatActive/' + $scope.dados.category,
                data: $scope.dados,
                method: "POST"
            }).then(function (response) {
                console.log(response);
                var title = response.data.dados.title;
                var mensagem = response.data.dados.mensagem;
                var status = response.data.status ;
                
                if (status === 'success') {
                    $scope.avisos(title, mensagem, response.data.status);
                    $scope.redirect();

                }  
                else {
                    $scope.avisos(title, mensagem, response.data.status);
                    $scope.redirect();
                } 

            }, function (response) {
                console.log(response);
                // var mensagem = 'Error';
                // if(response.data.errors.section_id){
                //     mensagem += response.data.errors.section_id+ '<br>';
                // }
                // if(response.data.errors.name){
                //     mensagem += response.data.errors.name+ '<br>';
                // }
                $scope.avisos('Aviso!', 'Error', 'warning');
            });
        }else{
             $scope.avisos('Atenção', 'Selecione a categoria', 'warning');
        }
        

    }

   



    // VERIFICA QUANDO ABRE A PAGINA SE ESTA EDITARNDO OU CRIANDO
    // UM NOVO REGISTRO
    // $scope.id = $('#id_dado').val();

    // if ($scope.id) {
    //     $scope.edit($scope.id);
    // }

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