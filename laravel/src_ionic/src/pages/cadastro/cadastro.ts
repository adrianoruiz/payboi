import { Component } from '@angular/core';
import { IonicPage, NavController, NavParams } from 'ionic-angular';

/**
 * Generated class for the CadastroPage page.
 *
 * See https://ionicframework.com/docs/components/#navigation for more info on
 * Ionic pages and navigation.
 */

@IonicPage()
@Component({
  selector: 'page-cadastro',
  templateUrl: 'cadastro.html',
})
export class CadastroPage {

  idioma: string;
  image: string;
  imagebin: string;
  dados_post: any;
  userid: any;
  usernew: any;

  dados = {
    name: '',
    email: '',
    password: '',
    confirm_password: '',
    avatar: '',
    // ddd: '',
    celular: '',
    // idioma: '',
    estado: '',
    cidade: '',
    atividades: '',
    nome_fantasia: '',
    site: '',
    cnpj_cpf: '',
    cep: '',
    endereco: '',
    numero: ''
  };

  textos = {
    'titulo': 'CRIAR CONTA',
    'name': 'Nome',
    'email': 'E-mail',
    'password': 'Senha',
    'confirm_password': 'Confirmar senha',
    'celular': 'Celular',
    'nome_fantasia': 'Nome Fantasia',
    'site': 'Site',
    'cnpj_cpf': 'CNPJ/CPF',
    'cep': 'CEP',
    'endereco': 'Endereço',
    'numero': 'Número',
    'criar_conta': 'CONCLUIR',
    'enviar': 'ENVIAR',
    'tour': 'Fazerum tour pelo app',
    'cancelar': 'Cancelar',
    'senhas_diferentes': 'Senhas Diferentes',
    'senha_4dg': 'Senha deve ter pelo menos 6 dígitos',
    'aviso': 'Aviso',
    'pegargal': 'Pegar da Galeria',
    'tirarfoto': 'Tirar Foto',
    'fechar': 'Fechar',
    'campos_error_msg': 'Verifique se todos os campos estão preenchidos',
    'sucesso': 'Conta cadastra com sucesso!',
  }



  estados_lista = {
    'estado': 'Estado',
    'PR': 'Paraná',
    'SP': 'São Paulo'
  };

  cidades_lista = {
    'cidade': 'Cidade',
    'cod_cidade': 'Palotina'
  };

  atividades_lista = {
    'atividades': 'Atividades',
    '1': 'Arquitetos',
    '2': 'Engenheiros Civil',
    '3': 'Engenheiros Eletricista',
    '4': 'Engenheiros Mecânico',
    '5': 'Designers De Interiores',
    '6': 'Técnicos Em Edificações',
    '7': 'Tecnólogos Em Edificações',
    '8': 'Construtoras'
  };

  passos : string;
  constructor(public navCtrl: NavController, public navParams: NavParams) {
  }

  ionViewDidLoad() {
    console.log('ionViewDidLoad CadastroPage');
    this.passos = "passo1";
  }

  getTraducao(e) {
    console.log(e);
  }
}
