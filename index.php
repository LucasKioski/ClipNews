<?php

echo "<!doctype html>
<html lang=\"pt-br\">
<head>
    <meta charset=\"utf-8\" />
    <title>Portal Clip News</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <link rel=\"stylesheet\" href=\"css/bootstrap.css\" />
    <link rel=\"stylesheet\" href=\"css/style2.css\" />
    <link rel=\"icon\" href=\"imgs/sologo.png\" type=\"image/x-icon\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/unslider.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/unslider-dots.css\">
    <link rel=\"stylesheet\" href=\"css/classic.css\">
    <link rel=\"stylesheet\" href=\"css/classic.date.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/jquery.gridster.css\">
    <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/jquery.toolbar.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/jquery.powertip-blue.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"css/alertify.min.css\">
    </head>

        <body>
		<div class=\"container-fluid\" id=\"comeca\">
                	<div class=\"\">
               	   		<div id=\"primeira\" class=\"col-xs-12 col-sm-5 col-md-7\">
	    				<img class=\"img-responsive\" src=\"imgs/logo.png\" title=\"Notícias\" width=\"360px\" />
                        	</div>
                        	<div class=\"col-xs-10 col-sm-5 col-md-3\" id=\"busca\">
                            	<br /><h3>Não está cadastrado?</h3>
                            	<button class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\".bs-example-modal-sm\">Clique e cadastre-se</button>
                            		<div class=\"modal fade bs-example-modal-sm\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mySmallModalLabel\">
                                		<div class=\"modal-dialog modal-sm\" role=\"document\">
                                    		<div class=\"modal-content\">
                                        		    <div id=\"divTeste\">
                                            		    <div id=\"complexify\">
                                                		    <div classs=\"form\">
                                                    		    <div class=\"form-group\">
                                                        		    <form action=\"#\" method=\"post\" name=\"login\">
                                                            	    		<label for=\"text\"><font><font>Nome</font></font></label>
                                                                	<input type=\"text\" class=\"form-control\" name=\"nome\" placeholder=\"Usuário\" required>

                                                                <br />

                                                                <label for=\"text\"><font><font>Sobrenome</font></font></label>
                                                                <input type=\"text\" class=\"form-control\" name=\"sobreNome\" placeholder=\"Usuário\" required>

                                                                <br/>

                                                                <label for=\"password\"><font><font>Senha</font></font></label>
                                                                <input type=\"password\" class=\"form-control\" id=\"password\" name=\"senha\" placeholder=\"Senha\" required>

                                                                <br />

                                                                <label for=\"password\"><font><font>					Confirmação da senha</font></font></label>
                                                                <input type=\"password\" class=\"form-control\" id=\"password\" name=\"confirmacaoSenha\" placeholder=\"Confirmação\" required>
								         <br />
								<label for=\"text\"><font>Data de nascimento</font></label>      
								 <input  class=\"form-control\" type=\"text\" id=\"Date\" name=\"startDate\" placeholder=\"Data de nascimento\" required />
               

                                                                <br />

                                                                <input class=\"btn btn-success\" id=\"enviar\" type=\"submit\" value=\"Enviar dados\"><br /><br />
                                                            
                                                     
                                                        <b>Complexidade</b>
                                                        <div class=\"progress\">
                                                            <div id=\"complexity-bar\" class=\"progress-bar progress-bar-danger\" role=\"progressbar\" style=\"width: 0%;\"></div>
                                                        </div></div>
                                                        <h1 id=\"complexity\" class=\"pull-right\">0%</h1>
						</form>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
			<div id=\"cedu\" class=\"col-xs-2 col-sm-2 col-md-2\">
        <a href=\"#\" id=\"user-toolbar\" class=\"btn-toolbar btn-toolbar-primary pull-left\"><i class=\"fa fa-share-alt\"></i></a>
			<div id=\"user-toolbar-options\" style=\"display: none;\">
			<a href=\"#\" class=\"btn-toolbar btn-toolbar-primary pull-left\"><i class=\"fa fa-facebook\"></i></a>
			<a href=\"#\" class=\"btn-toolbar btn-toolbar-danger pull-left\" ><i class=\"fa fa-google\"></i></a>
			<a href=\"#\" class=\"btn-toolbar btn-toolbar-info pull-left\"><i class=\"fa fa-instagram\"></i></a>
			<a href=\"#\" class=\"btn-toolbar btn-toolbar-info-o pull-left\"><i class=\"fa fa-twitter\"></i></a>
			<a href=\"#\" class=\"btn-toolbar btn-toolbar-dark pull-left\"><i class=\"fa fa-dropbox\"></i></a>
			</div>
	</div>
                </div>
            <!--espaço para o menu  -->
		<nav role=\"navigation\" class=\"navbar navbar-default menu\" id=\"menuboot\">
			<div class=\"navbar-header\">
				<button type=\"button\" data-target=\"#navbarCollapse\" data-toggle=\"collapse\" class=\"navbar-toggle\">
					<span class=\"sr-only\">Navegação</span>
					<span class=\"icon-bar\"></span>
					<span class=\"icon-bar\"></span>
					<span class=\"icon-bar\"></span>
				</button>
				<a href=\"#\" class=\"navbar-brand\"><img class=\"img-responsive\" src=\"imgs/sologo.png\" title=\"Notícias\" width=\"20px\" /></a>
			</div>
			<div id=\"navbarCollapse\" class=\"collapse navbar-collapse\">
				<ul class=\"nav navbar-nav\">
					<li class=\"liboot\"><a href=\"index.php\">HOME</a></li>
					<li class=\"liboot\"><a href=\"#slidelink\">NOTÍCIAS NACIONAIS</a></li>
					<li class=\"liboot\"><a href=\"brasil.php\">NOTÍCIAS GERAIS</a></li>
				</ul>
			</div>
		</nav>
		
			<br /><br /><br /><br /><br />
            <div id=\"slidelink\" class=\"spaced\" align=\"center\">
                <div class=\"wrap\">
                    <!--inicio do unslider -->
                        <div id=\"slide\" class=\"default-slider unslider container\">
                            <h1 class=\"titulo\">DESTAQUES</h1>
                            <ul class=\"col-xs-6 col-md-4\">
                                <li>
                                    <h3>Greve geral neste dia 28. Desde 1996, o país não se encontra desta forma!</h3><br /><br />
                                    <img class=\"img-responsive\" src=\"imgs/greve.jpg\" class=\"imgmin\" style=\"border-radius: 1em\" width=\"500px\"><br />
                                </li>
                                <li>
                                    <b><h3>Adolescente é apreendido transportando explosivos dentro de mochila em Fortaleza!</h3></b><br /><br />
                                    <img class=\"img-responsive\" src=\"imgs/explosivos.jpg\" class=\"imgmin\" style=\"border-radius: 1em\" width=\"500px\"><br />
                                </li>
                                <li>
                                    <b><h3>Conselho Nacional dos Direitos Humanos faz recomendação contra \"reforma\" trabalhista!</h3></b><br /><br />
                                    <img class=\"img-responsive\" src=\"imgs/Orgao.jpg\" class=\"imgmin\" style=\"border-radius: 1em\" width=\"400px\"><br /> 
                                </li>
                                <li>
                                    <b><h3>Ministério da Justiça determina que PF investigue envolvidos no jogo Baleia Azul!</h3></b><br /><br />
                                    <img class=\"img-responsive\" src=\"imgs/BaleiaAzul.jpg\" class=\"imgmin\" style=\"border-radius: 1em\" width=\"400px\"><br />
                                </li>
                            </ul>
                    </div>
                </div>
                <br />
            </div></div><br /><br />
            <!--início das notícias -->
           		<div class=\"container\">
				<div class=\"conteudo\">
				<div class=\"conteudo\">
				<center><h3 class=\"temanot\">-PARA PASTORES BATISTAS, REFORMA DA PREVIDÊNCIA É \"CRUELDADE GENOCIDA\"!</h3></center><br /><br /><br />
				<div class=\"row\">
					<div class=\"col-xs-12 col-md-5\">
						<center><img id=\"mousefollow\" title=\"Igreja Batista\" class=\"img-responsive\" src=\"imgs/igreja.jpg\" width=\"500px\" style=\"border-radius: 1em\"/></center>
						<br />
					</div>
						<br /><br /><h4 class=\"justificado\">Para a Aliança de Batistas do Brasil, PEC 287é mais um projeto injusto contra trabalhadores, idosos, negros e camponeses. Além dos batistas, outras denominações evangélicas se unem aos católicos. </h4>
						<br /><br />						
						<center><button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\".bs-example-modal-lg\">Quer saber mais?</button></center></div>
						<div class=\"modal fade bs-example-modal-lg\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myLargeModalLabel\">
  							<div class=\"modal-dialog modal-lg\" role=\"document\">
    								<div class=\"modal-content\" style=\"padding: 25px\">
									<div><center><h3  class=\"temanot\">\"PREVIDÊNCIA? QUE CRUELDADE!\"</h3></center></div><br />
      									<h4 class=\"justificado\">Em nota assinada pelos pastores batistas Joel Zeferino, Marcos Adoniram Lemos Monteiro e Nívia Souza Dias, a Aliança de Batistas do Brasil repudia o teor do projeto de reforma da Previdência. Para os religiosos, a proposta do governo Temer se soma a uma série de outros projetos que consideram injustos por \"desequilibrar ainda mais a relação capital-trabalho\", estruturalmente danosos para o trabalhador e para a classe mais pobre e ainda embute uma \"crueldade genocida\".</h4>

<h4 class=\"justificado\">Eles criticam o que chamam de cumplicidade da mídia conservadora, que mesmo diante de resistências e protestos de grande parcela da sociedade civil, apresenta a reforma de \"modo adocicado\", demonstrando mais uma vez a leniência e parcialidade dos meios de comunicação. \"O projeto tem sido apresentado como um evangelho, anúncio de salvação da pátria e do povo brasileiro\", afirmam os pastores. \"A palavra evangelho é muito cara para nós, batistas. Denunciamos, então, esse projeto como um falso evangelho ou como um dysangelho, divulgação de um tipo de mundo contrário ao desejado por Deus.\"</h4><br />
									<center><img class=\"img-responsive\" src=\"imgs/Batistas.jpg\" width=\"400px\" style=\"border-radius: 1em\"/></center><br />
   								 </div>
						</div>
					</div>
				</div><br />
			<!-- NOTÍCIA 2-->
				<div class=\"row\">
					<div class=\"col-xs-12 col-sm-0 col-md-6\">
						<div class=\"conteudo\" style=\"height: 550px;\"> 
						<center><h3 class=\"temanot\" class=\"justificado\">JOVEM É MORTO POR PM EM SÃO PAULO!</h3></center><br /><br />
						<div class=\"row\">
							<div class=\"col-xs-12 col-sm-6 col-md-6\">
								<center><img id=\"mousefollow-examples\" title=\"Luiz Carlos\" class=\"img-responsive\" src=\"imgs/Baleado.jpg\" width=\"234px\" style=\"border-radius: 1em\"/></center>
							</div>
							<div class=\"col-xs-12 col-sm-6 col-md-6\"  class=\"conteudo\">
							<br /><br />
							<h4 class=\"justificado\">O jovem Luiz Carlos Cerqueira Inácio Filho, 23 anos, foi morto com um tiro no abdômen após a chegada da Polícia Militar em um baile funk no Jardim Gaivotas, região do Grajaú, zona sul de São Paulo, na manhã do domingo de Páscoa (16).</h4> <h4 class=\"justificado\">Um dos irmãos de Luiz, de 22 anos, que não quis se identificar, afirmou que o jovem não estava na multidão que participava do baile funk no momento quando foi baleado.</h4>
						</div>
						</div>
					</div></div>
				<!-- NOTÍCIA 3	-->
					<div class=\"col-xs-12 col-sm-0 col-md-6\">
						<div class=\"conteudo\" style=\"height: 550px;\">
							<center><h3 class=\"temanot\">TUDO EM GREVE!</h3></center><br />
						<div class=\"row\">
							<div class=\"col-xs-12 col-sm-0 col-md-12\">
								<center><img id=\"greve\" title=\"Greve de 1989\" class=\"img-responsive\" src=\"imgs/greve.jpg\" width=\"500px\" style=\"border-radius: 1em\"/></center>
							</div>
						<div class=\"col-xs-12 col-sm-0 col-md-0\">
							<br />
							<h4 class=\"justificado\">Os movimentos sociais e centrais sindicais convocaram para o dia 28 uma greve geral nacional contra a reforma da Previdência e mudanças na legislação trabalhista propostas pelo governo Michel Temer. Segundo os sincatos, espera-se que a greve seja geral, ou seja, una diferentes categorias profissionais em vários Estados da federação.</h4>
						</div>
					</div>
				</div></div>
			</div></div></div>
			<br /><br /><br /><br />
			<!--DESCRIÇÃO --> 
		<div id=\"descricao\" class=\"container-fluid\">
			<div class=\"row\">
				<hr />
				<div class=\"col-xs-0 col-sm-0 col-md-4\"><br />
					<p class=\"fim\">Lemuel Álefe, Lucas Venancio, Raquel Silva, Jonathan Monteiro</p><p class=\"fim\">Carlos Eduardo, Samuel Lucas, Leonardo Frutuoso, Eduardo Souza.</p>
				</div>
				<div class=\"col-xs-6 col-sm-6 col-md-4\">
					<center><h2 style=\"color: #fff;\">CONTE CONOSCO!</h2></center>
				</div>
				<div class=\"col-xs-6 col-sm-6 col-md-4\">
					<center><img class=\"img-responsive\" src=\"imgs/sologo.png\" title=\"Notícias\" width=\"70px\"/></center>
				</div>
			</div>
			<hr />
		</div>
            </body>
		 <!--srcrips-->
            <script type=\"text/javascript\" src=\"jquery-3.2.0.min.js\"></script>
            <script src=\"js/picker.js\"></script>
            <script src=\"js/picker.date.js\"></script>
            <script src=\"js/pt_BR.js\"></script>
            <script type=\"text/javascript\" src=\"js/bootstrap.js\"></script>
            <script src=\"js/unslider-min.js\"></script>
    	    <script src=\"js/jquery.toolbar.js\"></script>
            <script src=\"js/teste.js\"></script>
            <script type=\"text/javascript\" src=\"js/app.js\"></script>
            <script type=\"text/javascript\" src=\"js/jquery.complexify.min.js\"></script>
            <script type=\"text/javascript\" src=\"js/function.js\"></script>
            <script type=\"text/javascript\" src=\"js/jquery.gridster.js\"></script>
            <script type=\"text/javascript\" src=\"js/jquery.powertip.js\"></script>
            <script type=\"text/javascript\" src=\"js/raquelpowertip.js\"></script>
		<script type=\"text/javascript\" src=\"js/seila.js\"></script>
			<script type=\"text/javascript\" src=\"js/jquery.sticky.js\"></script>
            <script type=\"text/javascript\" src=\"js/alertify.min.js\"></script>
            <script type=\"text/javascript\" src=\"js/form.js\"></script>
            <!--fim dos scripts-->

</html>";
?>