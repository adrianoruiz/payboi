<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
						<span class="clear">
							<span class="block m-t-xs">
								<strong class="font-bold">{{ Auth::user()->name }}</strong>
							</span> <a href="{{ url('admin/users/edit/'.Auth::user()->id) }}"><span class="text-muted text-xs block">Editar</span></a>
						</span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li>  <a href="{{ url('/logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Sair</a>
                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </div>
                <div class="logo-element">CSC</div>
            </li>

            <li class="{{ isActiveRoute('admin.main') }}">
                    <a href="{{ url('/admin') }}"><i class="fa fa-dashboard"></i> <span class="nav-label">Início</span></a>
            </li>

            <li class="{{ isActiveRoute('admin.evaluation.index') }}">
                    <a href="{{ url('/admin/evaluation/index') }}"><i class="fa fa-star"></i> <span class="nav-label">Avaliações</span></a>
            </li>

              {{-- fim item --}}
            
           

            <li class="{{ isActiveRoute('admin.activity.index') }} {{ isActiveRoute('admin.activity.create') }}">
                <a href="{{ 'admin/activity' }}"><i class="glyphicon glyphicon-education"></i> <span class="nav-label">Atividades </span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level ">
                    <li class="{{ isActiveRoute('admin.activity.create') }}"><a href="{{ url('admin/activity/create') }}">Nova Atividade</a></li>
                    <li class="{{ isActiveRoute('admin.activity.index') }}"><a href="{{ url('admin/activity/index') }}">Gerenciar Atividades</a></li>
                </ul>
            </li>

            <li class="{{ isActiveRoute('admin.section.index') }} {{ isActiveRoute('admin.section.create') }}">
                <a href="{{ 'admin/section' }}"><i class="glyphicon glyphicon-pushpin"></i> <span class="nav-label">Sessão </span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level ">
                    <li class="{{ isActiveRoute('admin.section.create') }}"><a href="{{ url('admin/section/create') }}">Nova Sessão</a></li>
                    <li class="{{ isActiveRoute('admin.section.index') }}"><a href="{{ url('admin/section/index') }}">Gerenciar Sessões</a></li>
                </ul>
            </li>

            <li class="{{ isActiveRoute('admin.category.index') }} {{ isActiveRoute('admin.category.create') }}">
                <a href="{{ 'admin/category' }}"><i class="glyphicon glyphicon-expand"></i> <span class="nav-label">Etapas </span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level ">
                    <li class="{{ isActiveRoute('admin.category.create') }}"><a href="{{ url('admin/category/create') }}">Nova Etapa</a></li>
                    <li class="{{ isActiveRoute('admin.category.index') }}"><a href="{{ url('admin/category/index') }}">Gerenciar Etapas</a></li>
                     <li class="{{ isActiveRoute('admin.category.create_atv') }}"><a href="{{ url('admin/category/create_atv') }}">Vincular Etapas com Atividades</a></li>
                </ul>
            </li>

            <li class="{{ isActiveRoute('admin.content.index') }} {{ isActiveRoute('admin.content.create') }}">
                <a href="{{ 'admin/content' }}"><i class="glyphicon glyphicon-bullhorn"></i> <span class="nav-label">Conteúdo </span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level ">
                    <li class="{{ isActiveRoute('admin.content.create') }}"><a href="{{ url('admin/content/create') }}">Novo Conteúdo</a></li>
                    <li class="{{ isActiveRoute('admin.content.index') }}"><a href="{{ url('admin/content/index') }}">Gerenciar Conteúdos</a></li>

                 </ul>
             </li>
            
            <li class="{{ isActiveRoute('admin.client.index') }} {{ isActiveRoute('admin.client.create') }}">
                <a href="{{ 'admin/client' }}"><i class="fa fa-user-circle-o" aria-hidden="true"></i> <span class="nav-label">Usuários </span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level ">
                    <li class="{{ isActiveRoute('admin.client.create') }}"><a href="{{ url('admin/client/create') }}">Novo Usuário</a></li>
                    <li class="{{ isActiveRoute('admin.client.index') }}"><a href="{{ url('admin/client/index') }}">Gerenciar Usuários</a></li>

                   
                </ul>
            </li>            
            
              <li class="{{ isActiveRoute('admin.fornecedor.index') }} {{ isActiveRoute('admin.fornecedor.create') }}">
                <a href="{{ 'admin/fornecedor' }}"><i class="fa fa-truck"></i> <span class="nav-label">Parceiros </span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level ">
                    <li class="{{ isActiveRoute('admin.fornecedor.create') }}"><a href="{{ url('admin/fornecedor/create') }}">Novo Parceiro</a></li>
                    <li class="{{ isActiveRoute('admin.fornecedor.index') }}"><a href="{{ url('admin/fornecedor/index') }}">Gerenciar Parceiros</a></li>
                     <li class="{{ isActiveRoute('admin.client.preParceiro') }}"><a href="{{ url('admin/client/preParceiro') }}">Aprovação de Parceiros</a></li>
                </ul>
            </li>

              <li class="{{ isActiveRoute('admin.users.index') }} {{ isActiveRoute('admin.users.create') }}">
                <a href="{{ 'admin/users' }}"><i class="fa fa-users"></i> <span class="nav-label">Administradores </span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level ">
                    <li class="{{ isActiveRoute('admin.users.create') }}"><a href="{{ url('admin/users/create') }}">Novo Administrador</a></li>
                    <li class="{{ isActiveRoute('admin.users.index') }}"><a href="{{ url('admin/users/index') }}">Gerenciar Administradores</a></li>
                </ul>
            </li>
    </div>
</nav>