@extends('layouts.site.app')


@section('content')
<style>
    .sticky-wrapper{
        z-index: auto;
    }
</style>
    
    <!-- Forgot -->
    <section class="blog" id="blog">
        <div class="container">
            <div class="row">
               <div class="col-sm-12 section-header">
                   <h2>Blog</h2>
               </div>
               <div class="col-sm-12" style="margin-bottom: 10px;">
                   {!! Form::label('section_id', 'Sessão:') !!}
                    @if(isset($sections))
                        {!! Form::select('section_id', $sections, $article->section, ['class'=>'form-control', 'placeholder' => 'Selecione', 'ng-keypress' =>'submitEnter($event)']) !!}
                    @endif
                    {!! Form::label('category_id', 'Categoria:') !!}
                    @if(isset($categories))
                        {!! Form::select('category_id', $categories, $article->category, ['class'=>'form-control', 'placeholder' => 'Selecione', 'ng-keypress' =>'submitEnter($event)']) !!}
                    @endif
                </div>
                 <div class="col-sm-8">
                    <div class="blog-single wow fadeIn" data-wow-delay="0.1s">
                        <figure>
                            <img src="/uploads/conteudos/{{ $article->image }}" alt="" class="img-responsive" style="width:100%;">
                            <figcaption>
                                <ul class="list-unstyled post-meta clearfix">
                                    <li>23 Fev, 2018 - por Marcio</li>
                                    <li>#{{ $article->section }} #{{ $article->category }}</li>
                                </ul>
                                <h3><a href="">{{ $article->title }}</a></h3>
                                <p>{{ $article->content }}</p>
                                
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="col-sm-12 section-header">
                       <h3>Mais vistos</h3>
                    </div>
                    @if(isset($articleRelated))
                        @foreach($articleRelated as $row)
                            <a href="/construcao/{{$row->slug_title}}">
                                <div class="blog-single wow fadeIn" data-wow-delay="0.1s">
                                    <figure style="margin-bottom: 120px">
                                        <img src="/uploads/conteudos/{{ $row->image }}" alt="" class="img-responsive" style="width:100%;height:100px;">
                                        <figcaption>
                                            <ul class="post-meta" style="top: 0; height: 100px;">
                                                <li>23 Fev, 2018 - por Marcio</li>
                                                <li>{{ $row->title }}</li>
                                                <li>#{{ $row->section }} #{{ $row->category }}</li>
                                            </ul>
                                        </figcaption>
                                    </figure>
                                </div>
                            </a>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section><!-- Ends: .forgot -->
    <script type='text/javascript' src='{{asset('js/jquery-3.1.1.min.js')}}'></script>
    
    <script type="text/javascript">
        $('select[name=section_id]').change(function () {
            var section = $(this).val()
            window.location.href = "/blog/" + section;
        });

        $('select[name=category_id]').change(function () {
            var category = $(this).val()
            window.location.href = "/blog/" + $('select[name=section_id]').val() + '/' + category;
        });
            
    </script>
   @endsection