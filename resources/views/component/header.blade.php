    <!-- /.header -->
    <div class="menu hidden-sm hidden-xs desktop-menu">
        <div class="container">
            <div class="row menu-inner">
                <div class="col-md-11 menu-content">
                    <ul class="nav-menu list-inline">
                        <li>
							<a href="{{url('/')}}">Accueil</a>
						</li>
                    <li><a href="">QualiNet</a>
							<div class="sub-menu-wrap">
								<ul>
                                <li><a href="{{ url('somme-nous') }}">Qui sommes-nous</a></li>
                                <li><a href="{{ url('mission') }}">Notre mission</a></li>
                                <li><a href="{{ url('defference') }}">Ce qui fait la différence </a></li>
									<li><a href="{{ url('egagement') }}">Notre engagement</a></li>

								</ul>
							</div>
						</li>
						<li>
							<a href="#">Services</a>
							<div class="sub-menu-wrap">
								<ul>
									<li><a href="{{url('Secteur_residentiel')}}">Secteur résidentiel</a></li>
									<li><a href="{{url('Secteurs_industriel_commercial')}}">Secteurs industriel et commercial</a></li>
									<li><a href="{{url('aide_domicile')}}">Aide à domicile</a></li>
									<li><a href="{{url('repit_accompagnement')}}">Répit accompagnement</a></li>
									<li><a href="{{url('Conciliation_travail_famille')}}">Conciliation travail-famille</a></li>
									<li><a href="{{url('Peinture_bricolage')}}">Peinture et bricolage</a></li>
									<li><a href="{{url('Jardinage')}}">Jardinage</a></li>
									<li><a href="{{url('Nettoyage')}}">Nettoyage après sinistre et après chantier</a></li>
								</ul>
							</div>
						</li>


						<li><a href="">Demandez un devis </a>

                        </li>
                    <li><a href="{{ url('/contact_us') }}">Contact </a>

						</li>
                    </ul>
                </div>
                <div class="col-md-1 menu-search">
                    <div class="search">
                        <i class="fa-icon-search js__open_search"></i>
                        <form action="https://demo.ninjateam.org/html/cleanup/index.html" class="frm-search">
                            <input type="text" name="q" value="" class="q" placeholder="Search..." />
                            <button type="submit" class="submit"><i class="fa-icon-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.menu -->