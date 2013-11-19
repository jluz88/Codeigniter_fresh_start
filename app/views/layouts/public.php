<!DOCTYPE HTML>
<html>
<head>
	<?$this->load->view('partials/head')?>
</head>
<body>
	<section id="tpl_wrapper">
		<?$this->load->view('partials/header')?>
		<section id="tpl_body">
			<article id="tpl_body_left">
				<?=($template['body'] ? $template['body'] : '')?>
			</article>
			<aside id="tpl_body_right">
				<p>Aside Content</p>
			</aside>
		</section>
		<?$this->load->view('partials/footer')?>
	</section>
</body>
</html>