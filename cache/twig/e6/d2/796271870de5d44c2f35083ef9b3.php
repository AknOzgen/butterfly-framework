<?php

/* user/home/main.twig */
class __TwigTemplate_e6d2796271870de5d44c2f35083ef9b3 extends Twig_Template
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
        // line 1
        echo "<!doctype html>
<html class=\"no-js\" lang=\"\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <title>";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        echo "</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- Bootstrap -->
    <link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css\">
    <!-- Font-Awesome -->
    <link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css\">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js\"></script>
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
    <script src=\"//cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js\"></script>
</head>
<body>
<div class=\"container\">
    <nav class=\"navbar navbar-inverse navbar-fixed-top\">
        <div class=\"container\">
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#\">";
        // line 32
        echo twig_escape_filter($this->env, (isset($context["application_name"]) ? $context["application_name"] : null), "html", null, true);
        echo "</a>
            </div>
            <div id=\"navbar\" class=\"navbar-collapse collapse\">
                <form class=\"navbar-form navbar-right\">
                    <div class=\"form-group\">
                        <input type=\"text\" placeholder=\"Email\" class=\"form-control\">
                    </div>
                    <div class=\"form-group\">
                        <input type=\"password\" placeholder=\"Password\" class=\"form-control\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-success\">Sign in</button>
                </form>
            </div><!--/.navbar-collapse -->
        </div>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class=\"jumbotron\">
        <div class=\"container\">
            <h1>Hello, world!</h1>
            <p>";
        // line 52
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : null), "html", null, true);
        echo "</p>
            <p><a class=\"btn btn-primary btn-lg\" href=\"#\" role=\"button\">Learn more &raquo;</a></p>
        </div>
    </div>

    <div class=\"container\">
        <!-- Example row of columns -->
        <div class=\"row\">
            <div class=\"col-md-4\">
                <h2>Heading</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details &raquo;</a></p>
            </div>
            <div class=\"col-md-4\">
                <h2>Heading</h2>
                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details &raquo;</a></p>
            </div>
            <div class=\"col-md-4\">
                <h2>Heading</h2>
                <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                <p><a class=\"btn btn-default\" href=\"#\" role=\"button\">View details &raquo;</a></p>
            </div>
        </div>

        <hr>

        <footer>
            <p>&copy; 2017 ";
        // line 80
        echo twig_escape_filter($this->env, (isset($context["application_name"]) ? $context["application_name"] : null), "html", null, true);
        echo ", Inc.</p>
        </footer>
    </div> <!-- /container -->
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js\"></script>
<script>window.jQuery || document.write('<script src=\"//ajax.aspnetcdn.com/ajax/jQuery/jquery-1.12.0.min.js\"><\\/script>')</script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src=\"//netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js\"></script>

<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
<script>
    (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;e=o.createElement(i);r=o.getElementsByTagName(i)[0];e.src='//www.google-analytics.com/analytics.js';r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
    ga('create','UA-XXXXX-X');ga('send','pageview');
</script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "user/home/main.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 80,  76 => 52,  53 => 32,  24 => 6,  17 => 1,);
    }
}
