<!DOCTYPE html>
<html lang="en" class=" is-copy-enabled">
<head>
	<title>Simple landing page and site buider</title>
	<META name="Description" content="Ultra light static websites crator">
</head>
<body id="body"  >
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="pbuilder-inc/css/dragula.min.css">
	<link rel="stylesheet" type="text/css" href="pbuilder-inc/css/medium-editor.min.css">
	<link rel="stylesheet" type="text/css" href="pbuilder-inc/css/page-builder.css">
	<script type="text/javascript" src="pbuilder-inc/js/dragula.min.js"></script>
	<script type="text/javascript" src="pbuilder-inc/js/medium-editor.min.js"></script>
	<script type="text/javascript" src="pbuilder-inc/js/doT.min.js"></script>
	<script type="text/javascript" src="pbuilder-inc/js/design_mode.js"></script>
	<script type="text/javascript" src="pbuilder-inc/js/app.js"></script>

	<script type="text/javascript" src="pbuilder-inc/js/dropzone.min.js"></script>


	<div id="openModal" class="modalDialog">
		<div>	
			<a href="#close" title="Close" class="close">X</a>
			<h2 id="modal-title">Content editor</h2>
			<div id="modal-content">
<!-- 			<textarea id="text-editor" style="width:100%; height:10em"></textarea>
			<a onclick="_RENDER.editor_save()" href="#close">Save</a> -->
			</div>
		</div>
	</div>

	<div id="main-header">

		<div class="main-ico" onclick="alert('RESTART is lock on this demo')">
			<i class="material-icons">&#xE863;</i>
			RESTART
		</div>
		<div class="main-ico" onclick="gui_save()">
			<i class="material-icons">&#xE2C0;</i>
			SAVE
		</div>
		<div id="gui_zoom_button" class="main-ico" onclick="gui_designers()">
			<i class="material-icons">&#xE323;</i>
			DESIGN MODE
		</div>
		<!-- <div class="main-ico" onclick="alert('PREVIEW is lock on this demo')">
			<i class="material-icons">&#xE8F4;</i>
			PREV
		</div> -->
		<h1>Simple landing page and site buider</h1>
		<h2>Ultra light static websites crator</h2>
		<a href="https://github.com/dadmor/simple-landing-page-and-site-buider">https://github.com/dadmor/simple-landing-page-and-site-buider</a>
	</div>

	<div id="templates">
		<i class="material-icons">&#xE8F1;</i>
		<ul>
			<li onclick="_PBuilder.load_html('agnmg1')">1</li>
			<li onclick="_PBuilder.load_html('photo-blog')">2</li>
			<li onclick="_PBuilder.load_html('pictorama')">3</li>
		</ul>
	</div>
	<div id="properties" onclick='alert("PROPERTIS is lock on this demo\nprototype alilable on\nhttp://mroczna.stronazen.pl/robo-theme-builder-public-dev/")'>
		<i class="material-icons">&#xE5D2;</i>
	</div>

	<div id="page-builder-wraper">
		<div id="page-builder">
				<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,900,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
				<style>
					main{
						display:flex;
						flex-wrap: wrap;
						font-family: sans;
						text-align: center;
						font-family: 'Source Sans Pro', sans-serif;
					}
					/* ----------------- */
					#header{
						flex:0 0 50%;
						color:#fff;						
					}					
					#header .gr-body{
						height:100%;
						display:flex;						
					}					
					#header header{
						height:100%;	
						flex: 0 0 100%;	
						background-position: center;				
						background-size: cover;
					}
					#header header .mask{
						height:100%;
						display:flex;
						align-items:center;
						justify-content:center;						
						background-color: rgba(0,0,0,0.6);
					}
					#header h2{
						font-weight: 900;
						font-size:2.5em;
						text-transform: uppercase;
						line-height:1em;
						padding:0em 5%;
					}

					

					/* ----------------- */
					#header-pin{
						flex:0 0 50%;
					}
					#content{
						flex:0 0 100%;
					}
					#header-pin article, #content article{
						font-weight: 300;
						padding:0em 10%;
						padding-bottom: 4em;
						border-bottom: 1px solid #aaa;
					}					
					.article-header-decorator{
						width:50%;
						height:4em;
						border-right:1px solid #aaa;
						margin-bottom:2em;
					}
					#header-pin p, #content p{
						margin:2em;
						font-size: 0.9em
					}
					/* ----------------- */
					#second-promo{
						flex:0 0 100%;
						color:#fff;	
					}
					#second-promo header{
						flex: 0 0 100%;	
						background-position: center;				
						background-size: cover;
					}
					#second-promo header .mask{
						background-color: rgba(0,0,0,0.6);
					}
					#second-promo h2{
						font-weight: 900;
						font-size:2.5em;
						text-transform: uppercase;
						line-height:1em;
						padding:3em 5%;
						margin:0;
					}
		
					
				</style>
				<!-- !!! Page boilerplate -->
				<main>
					<section id="header">		
					</section>
					<section id="header-pin">		
					</section>
					<section id="content">		
					</section>
					<section id="second-promo">		
					</section>
					<section id="footer">		
					</section>
				</main>
				<script>
					_PBuilder.init({
						'header':{							
							'default_component':'header',
							'extended_default_component':true,
							'dragdrop':true,
							'remove':true,
							'edit_this':true,
							'new':true
						},
						'header-pin':{
							'default_component':'article',
							'extended_default_component':true,
							'dragdrop':true,
							'remove':true,
							'edit_this':true,
							'new':true
						},
						'content':{
							'default_component':'article',
							'extended_default_component':true,
							'dragdrop':true,
							'remove':true,
							'edit_this':true,
							'new':true
						},
						'second-promo':{
							'default_component':'header',
							'extended_default_component':true,
							'dragdrop':true,
							'remove':true,
							'edit_this':true,
							'new':true
						},
						'footer':{
							'default_component':'article',
							'extended_default_component':true
						}
					});
				</script>
				<!-- !!! End Page boilerplate -->
		</div>


		
	</div>
	<div id="inspector" style="overflow:hidden;  padding:1em">
			Inspector
			<pre id="inspector-content" style="font-size:9px;"></pre>
		</div>
	
</body>
</html>

