@extends('layouts.site.app')


@section('content')
    
    <!-- Forgot -->
    <section class="contact" id="forgot">
        <div class="container">
            <div class="row">
               <div class="col-sm-12 section-header">
                   <h2>Redefinir Senha</h2>
               </div>
                <div class="col-sm-6 col-sm-offset-3">
                    <div class="contact-wrapper wow fadeInLeft" data-wow-delay="0.1s">
                        <form method="post" action="/storePasswordForgot">
                            <div class="form-group row">
                                @if($valida == 1)
                                    @if(session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                    @else
                                         @if(session('error'))
                                        <div class="alert alert-danger">
                                            {{ session('error') }}
                                        </div>
                                        @endif
                                        {{ csrf_field() }}
                                        <input type="hidden" value="{{ $token }}" name="remember_token">
                                        <div class="col-sm-12">
                                            <input type="password" placeholder="Nova Senha" name="password" required value="{{ old('password') }}">
                                        </div>
                                        <div class="col-sm-12">
                                            <input type="password" placeholder="Confirme a Senha" name="passwordConfirm" required value="{{ old('passwordConfirm') }}">
                                        </div>
                                        
                                        <div class="col-sm-12 text-center">
                                            <button type="submit" >Redefinir</button>
                                        </div>
                                    @endif
                                @else
                                    <div class="alert alert-danger">
                                        Código de refidefinição de senha incorreto!
                                    </div>
                                @endif
                                
                               
                            </div>
							<div id="form-messages"></div>
                        </form>
                    </div>
                </div><!-- Ends: .col-sm-8 -->
            </div>
        </div>
    </section><!-- Ends: .forgot -->
    
   @endsection