<?php

/* login.twig */
class __TwigTemplate_116e333b90659a8e3a22115d86959dc16a44563feaffcd9b6c16336f2ebd5362 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_984e43d11c2f80b2f1cf5a7922adf04a005a93d639cc5ae538c68f298953dcce = $this->env->getExtension("native_profiler");
        $__internal_984e43d11c2f80b2f1cf5a7922adf04a005a93d639cc5ae538c68f298953dcce->enter($__internal_984e43d11c2f80b2f1cf5a7922adf04a005a93d639cc5ae538c68f298953dcce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "login.twig"));

        // line 2
        echo "    ";
        // line 3
        echo "        ";
        // line 4
        echo "    ";
        // line 5
        echo "    ";
        // line 6
        echo "    ";
        // line 7
        echo "        ";
        // line 8
        echo "    ";
        // line 9
        echo "    ";
        // line 10
        echo "        ";
        // line 11
        echo "    ";
        // line 12
        echo "    ";
        // line 14
        echo "
<!DOCTYPE html>
<html>

<head>
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset=\"utf-8\">
    <title>RPP Rev 1.0</title>
    <meta name=\"keywords\" content=\"HTML5 Bootstrap 3 Admin Template UI Theme\" />
    <meta name=\"description\" content=\"RPP Rev 1.0\">
    <meta name=\"author\" content=\"AdminDesigns\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">

    <!-- Font CSS (Via CDN) -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800'>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"http://fonts.googleapis.com/css?family=Roboto:400,500,700,300\">

    <!-- Theme CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"assets/skin/default_skin/css/theme.css\">

    <!-- Admin Forms CSS -->
    <link rel=\"stylesheet\" type=\"text/css\" href=\"assets/admin-tools/admin-forms/css/admin-forms.css\">
    <link rel=\"stylesheet\" type=\"text/css\" href=\"assets/skin/default_skin/css/customed.css\">

    <!-- Favicon -->
    <link rel=\"shortcut icon\" href=\"assets/img/favicon.ico\">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
    <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
    <![endif]-->
</head>

<body class=\"external-page sb-l-c sb-r-c\">

<!-- Start: Main -->
<div id=\"main\" class=\"animated fadeIn\">

    <!-- Start: Content-Wrapper -->
    <section id=\"content_wrapper\">

        <!-- begin canvas animation bg -->
        <div id=\"canvas-wrapper\">
            <canvas id=\"demo-canvas\"></canvas>
        </div>

        <!-- Begin: Content -->
        <section id=\"content\">

            <div class=\"admin-form theme-info\" id=\"login1\">

                <div class=\"row mb15 table-layout\">

                    ";
        // line 69
        echo "                        ";
        // line 70
        echo "                            <h1 class=\"h1-logo\">P2BJ <small>RPP 1.0</small></h1>
                            ";
        // line 72
        echo "                        ";
        // line 73
        echo "                    ";
        // line 74
        echo "
                    ";
        // line 76
        echo "                        ";
        // line 77
        echo "                            ";
        // line 78
        echo "                            ";
        // line 79
        echo "                            ";
        // line 80
        echo "                        ";
        // line 81
        echo "
                    ";
        // line 83
        echo "
                </div>

                <div class=\"panel panel-info mt10 br-n\">

                    ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "getFlashBag", array()), "get", array(0 => "message"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 89
            echo "                    <strong> <div class=\"alert alert-danger alert-dismissable\" >
                            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">×</button>
                            Username atau Password salah !
                        </div>
                    </strong>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        echo "
                    <!-- end .form-header section -->
                    <form method=\"post\" action=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "url_generator", array()), "generate", array(0 => "login"), "method"), "html", null, true);
        echo "\" id=\"contact\">
                        <div class=\"panel-body bg-light p30\">
                            <div class=\"row\">
                                <div class=\"pr30\">

                                    ";
        // line 103
        echo "                                        ";
        // line 104
        echo "                                        ";
        // line 105
        echo "                                            ";
        // line 106
        echo "                                            ";
        // line 107
        echo "                                            ";
        // line 108
        echo "                                        ";
        // line 109
        echo "                                        ";
        // line 110
        echo "                                        ";
        // line 111
        echo "                                        ";
        // line 112
        echo "                                            ";
        // line 113
        echo "                                            ";
        // line 114
        echo "                                            ";
        // line 115
        echo "                                        ";
        // line 116
        echo "                                    ";
        // line 117
        echo "                                    <!-- end section -->

                                    <div class=\"section\">
                                        ";
        // line 120
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                                    </div>
                                    ";
        // line 123
        echo "                                    ";
        // line 124
        echo "                                    ";
        // line 125
        echo "
                                    ";
        // line 127
        echo "                                    ";
        // line 128
        echo "                                    ";
        // line 129
        echo "                                    <!-- end section -->

                                </div>
                            </div>
                        </div>
                        <!-- end .form-body section -->
                        <div class=\"panel-footer clearfix p10 ph15\">
                            ";
        // line 137
        echo "                            ";
        // line 138
        echo "                            <label class=\"switch block switch-primary pull-left input-align mt10\">
                                <input type=\"checkbox\" name=\"remember\" id=\"remember\" checked>
                                <label for=\"remember\" data-on=\"YES\" data-off=\"NO\"></label>
                                <span>Remember me</span>
                            </label>
                        </div>
                        <!-- end .form-footer section -->
                    </form>
                </div>
            </div>

        </section>
        <!-- End: Content -->

    </section>
    <!-- End: Content-Wrapper -->

</div>
<!-- End: Main -->

<!-- BEGIN: PAGE SCRIPTS -->

<!-- jQuery -->
<script type=\"text/javascript\" src=\"vendor/jquery/jquery-1.11.1.min.js\"></script>
<script type=\"text/javascript\" src=\"vendor/jquery/jquery_ui/jquery-ui.min.js\"></script>

<!-- Bootstrap -->
<script type=\"text/javascript\" src=\"assets/js/bootstrap/bootstrap.min.js\"></script>

<!-- Page Plugins -->
<script type=\"text/javascript\" src=\"assets/js/pages/login/EasePack.min.js\"></script>
<script type=\"text/javascript\" src=\"assets/js/pages/login/rAF.js\"></script>
<script type=\"text/javascript\" src=\"assets/js/pages/login/TweenLite.min.js\"></script>
<script type=\"text/javascript\" src=\"assets/js/pages/login/login.js\"></script>

<!-- Theme Javascript -->
<script type=\"text/javascript\" src=\"assets/js/utility/utility.js\"></script>
<script type=\"text/javascript\" src=\"assets/js/main.js\"></script>
<script type=\"text/javascript\" src=\"assets/js/demo.js\"></script>

<!-- Page Javascript -->
<script type=\"text/javascript\">
    jQuery(document).ready(function() {

        \"use strict\";

        // Init Theme Core
        Core.init();

        // Init Demo JS
        Demo.init();

        // Init CanvasBG and pass target starting location
        CanvasBG.init({
            Loc: {
                x: window.innerWidth / 2,
                y: window.innerHeight / 3.3
            },
        });


    });
</script>

<!-- END: PAGE SCRIPTS -->

</body>

</html>

";
        
        $__internal_984e43d11c2f80b2f1cf5a7922adf04a005a93d639cc5ae538c68f298953dcce->leave($__internal_984e43d11c2f80b2f1cf5a7922adf04a005a93d639cc5ae538c68f298953dcce_prof);

    }

    public function getTemplateName()
    {
        return "login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 138,  217 => 137,  208 => 129,  206 => 128,  204 => 127,  201 => 125,  199 => 124,  197 => 123,  192 => 120,  187 => 117,  185 => 116,  183 => 115,  181 => 114,  179 => 113,  177 => 112,  175 => 111,  173 => 110,  171 => 109,  169 => 108,  167 => 107,  165 => 106,  163 => 105,  161 => 104,  159 => 103,  151 => 97,  147 => 95,  136 => 89,  132 => 88,  125 => 83,  122 => 81,  120 => 80,  118 => 79,  116 => 78,  114 => 77,  112 => 76,  109 => 74,  107 => 73,  105 => 72,  102 => 70,  100 => 69,  44 => 14,  42 => 12,  40 => 11,  38 => 10,  36 => 9,  34 => 8,  32 => 7,  30 => 6,  28 => 5,  26 => 4,  24 => 3,  22 => 2,);
    }
}
/* {#<html>#}*/
/*     {#<head>#}*/
/*         {#<link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css">#}*/
/*     {#</head>#}*/
/*     {#<body>#}*/
/*     {#{% for message in app.session.getFlashBag.get('message') %}#}*/
/*         {#<strong> {{ message }} </strong>#}*/
/*     {#{% endfor %}#}*/
/*     {#<form action="{{app.url_generator.generate('login') }}" method="post">#}*/
/*         {#{{ form_widget(form) }}#}*/
/*     {#</form>#}*/
/*     {#</body>#}*/
/* {#</html>#}*/
/* */
/* <!DOCTYPE html>*/
/* <html>*/
/* */
/* <head>*/
/*     <!-- Meta, title, CSS, favicons, etc. -->*/
/*     <meta charset="utf-8">*/
/*     <title>RPP Rev 1.0</title>*/
/*     <meta name="keywords" content="HTML5 Bootstrap 3 Admin Template UI Theme" />*/
/*     <meta name="description" content="RPP Rev 1.0">*/
/*     <meta name="author" content="AdminDesigns">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/* */
/*     <!-- Font CSS (Via CDN) -->*/
/*     <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800'>*/
/*     <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,500,700,300">*/
/* */
/*     <!-- Theme CSS -->*/
/*     <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/theme.css">*/
/* */
/*     <!-- Admin Forms CSS -->*/
/*     <link rel="stylesheet" type="text/css" href="assets/admin-tools/admin-forms/css/admin-forms.css">*/
/*     <link rel="stylesheet" type="text/css" href="assets/skin/default_skin/css/customed.css">*/
/* */
/*     <!-- Favicon -->*/
/*     <link rel="shortcut icon" href="assets/img/favicon.ico">*/
/* */
/*     <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->*/
/*     <!--[if lt IE 9]>*/
/*     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>*/
/*     <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>*/
/*     <![endif]-->*/
/* </head>*/
/* */
/* <body class="external-page sb-l-c sb-r-c">*/
/* */
/* <!-- Start: Main -->*/
/* <div id="main" class="animated fadeIn">*/
/* */
/*     <!-- Start: Content-Wrapper -->*/
/*     <section id="content_wrapper">*/
/* */
/*         <!-- begin canvas animation bg -->*/
/*         <div id="canvas-wrapper">*/
/*             <canvas id="demo-canvas"></canvas>*/
/*         </div>*/
/* */
/*         <!-- Begin: Content -->*/
/*         <section id="content">*/
/* */
/*             <div class="admin-form theme-info" id="login1">*/
/* */
/*                 <div class="row mb15 table-layout">*/
/* */
/*                     {#<div class="col-xs-6 va-m pln">#}*/
/*                         {#<a href="dashboard.html" title="Return to Dashboard">#}*/
/*                             <h1 class="h1-logo">P2BJ <small>RPP 1.0</small></h1>*/
/*                             {#<img src="assets/img/logos/logo_white.png" title="AdminDesigns Logo" class="img-responsive w250">#}*/
/*                         {#</a>#}*/
/*                     {#</div>#}*/
/* */
/*                     {#<div class="col-xs-6 text-right va-b pr5">#}*/
/*                         {#<div class="login-links">#}*/
/*                             {#<a href="pages_login.html" class="active" title="Sign In">Sign In</a>#}*/
/*                             {#<span class="text-white"> | </span>#}*/
/*                             {#<a href="pages_register.html" class="" title="Register">Register</a>#}*/
/*                         {#</div>#}*/
/* */
/*                     {#</div>#}*/
/* */
/*                 </div>*/
/* */
/*                 <div class="panel panel-info mt10 br-n">*/
/* */
/*                     {% for message in app.session.getFlashBag.get('message') %}*/
/*                     <strong> <div class="alert alert-danger alert-dismissable" >*/
/*                             <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>*/
/*                             Username atau Password salah !*/
/*                         </div>*/
/*                     </strong>*/
/*                     {% endfor %}*/
/* */
/*                     <!-- end .form-header section -->*/
/*                     <form method="post" action="{{app.url_generator.generate('login') }}" id="contact">*/
/*                         <div class="panel-body bg-light p30">*/
/*                             <div class="row">*/
/*                                 <div class="pr30">*/
/* */
/*                                     {#<div id="login" class="section">#}*/
/*                                         {#<label for="login_username" class="field-label text-muted fs18 mb10">Username</label>#}*/
/*                                         {#<label for="login_username" class="field prepend-icon">#}*/
/*                                             {#<input type="text" name="login[username]" id="login_username" class="gui-input" placeholder="Enter username">#}*/
/*                                             {#<label for="username" class="field-icon"><i class="fa fa-user"></i>#}*/
/*                                             {#</label>#}*/
/*                                         {#</label>#}*/
/*                                         {#<br>&nbsp;#}*/
/*                                         {#<label for="login_username" class="field-label text-muted fs18 mb10">Password</label>#}*/
/*                                         {#<label for="password" class="field prepend-icon">#}*/
/*                                             {#<input type="password" name="login[password]" id="login_password" class="gui-input" placeholder="Enter password">#}*/
/*                                             {#<label for="password" class="field-icon"><i class="fa fa-lock"></i>#}*/
/*                                             {#</label>#}*/
/*                                         {#</label>#}*/
/*                                     {#</div>#}*/
/*                                     <!-- end section -->*/
/* */
/*                                     <div class="section">*/
/*                                         {{ form_widget(form) }}*/
/*                                     </div>*/
/*                                     {#<label for="login_username" class="field-label text-muted fs18 mb10">Username</label>#}*/
/*                                     {#&#123;&#35;{{ form_label(form.username,{'attr':{'class':'field-label text-muted fs18 mb10'}}) }}&#35;&#125;#}*/
/*                                     {#{{ form_widget(form.username,{'attr':{'class':'gui-input'}}) }}#}*/
/* */
/*                                     {#<label for="login_username" class="field-label text-muted fs18 mb10">Password</label>#}*/
/*                                     {#&#123;&#35;{{ form_label(form.username,{'attr':{'class':'field-label text-muted fs18 mb10'}}) }}&#35;&#125;#}*/
/*                                     {#{{ form_widget(form.password,{'attr':{'class':'gui-input'}}) }}#}*/
/*                                     <!-- end section -->*/
/* */
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                         <!-- end .form-body section -->*/
/*                         <div class="panel-footer clearfix p10 ph15">*/
/*                             {#<button type="submit" class="button btn-primary mr10 pull-right">Register</button>#}*/
/*                             {#{{ form_widget(form.login,{'attr':{'class':'button btn-primary mr10 pull-right'}}) }}#}*/
/*                             <label class="switch block switch-primary pull-left input-align mt10">*/
/*                                 <input type="checkbox" name="remember" id="remember" checked>*/
/*                                 <label for="remember" data-on="YES" data-off="NO"></label>*/
/*                                 <span>Remember me</span>*/
/*                             </label>*/
/*                         </div>*/
/*                         <!-- end .form-footer section -->*/
/*                     </form>*/
/*                 </div>*/
/*             </div>*/
/* */
/*         </section>*/
/*         <!-- End: Content -->*/
/* */
/*     </section>*/
/*     <!-- End: Content-Wrapper -->*/
/* */
/* </div>*/
/* <!-- End: Main -->*/
/* */
/* <!-- BEGIN: PAGE SCRIPTS -->*/
/* */
/* <!-- jQuery -->*/
/* <script type="text/javascript" src="vendor/jquery/jquery-1.11.1.min.js"></script>*/
/* <script type="text/javascript" src="vendor/jquery/jquery_ui/jquery-ui.min.js"></script>*/
/* */
/* <!-- Bootstrap -->*/
/* <script type="text/javascript" src="assets/js/bootstrap/bootstrap.min.js"></script>*/
/* */
/* <!-- Page Plugins -->*/
/* <script type="text/javascript" src="assets/js/pages/login/EasePack.min.js"></script>*/
/* <script type="text/javascript" src="assets/js/pages/login/rAF.js"></script>*/
/* <script type="text/javascript" src="assets/js/pages/login/TweenLite.min.js"></script>*/
/* <script type="text/javascript" src="assets/js/pages/login/login.js"></script>*/
/* */
/* <!-- Theme Javascript -->*/
/* <script type="text/javascript" src="assets/js/utility/utility.js"></script>*/
/* <script type="text/javascript" src="assets/js/main.js"></script>*/
/* <script type="text/javascript" src="assets/js/demo.js"></script>*/
/* */
/* <!-- Page Javascript -->*/
/* <script type="text/javascript">*/
/*     jQuery(document).ready(function() {*/
/* */
/*         "use strict";*/
/* */
/*         // Init Theme Core*/
/*         Core.init();*/
/* */
/*         // Init Demo JS*/
/*         Demo.init();*/
/* */
/*         // Init CanvasBG and pass target starting location*/
/*         CanvasBG.init({*/
/*             Loc: {*/
/*                 x: window.innerWidth / 2,*/
/*                 y: window.innerHeight / 3.3*/
/*             },*/
/*         });*/
/* */
/* */
/*     });*/
/* </script>*/
/* */
/* <!-- END: PAGE SCRIPTS -->*/
/* */
/* </body>*/
/* */
/* </html>*/
/* */
/* */
