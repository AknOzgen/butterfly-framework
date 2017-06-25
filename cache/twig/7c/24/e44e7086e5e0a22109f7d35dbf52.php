<?php

/* home/home/sub/login.twig */
class __TwigTemplate_7c24e44e7086e5e0a22109f7d35dbf52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("home/home/masterpage.twig");

        $this->blocks = array(
            'container' => array($this, 'block_container'),
            'styles' => array($this, 'block_styles'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "home/home/masterpage.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"row\">
        <div class=\"col-xs-12 col-sm-6 col-lg-4\">
            <h2 class=\"margin-bottom-30\">
                Giriş Yap
                <small>
                    mevcut hesap
                </small>
            </h2>

            <form method=\"post\">
                <div class=\"form-group\">
                    <label for=\"email\">Eposta:</label>
                    <input id=\"email\" type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"Eposta\" />
                </div>

                <div class=\"form-group\">
                    <label for=\"pass\">Şifre</label>
                    <input type=\"password\" class=\"form-control\" id=\"pass\" name=\"password\" placeholder=\"Şifre\" />
                </div>

                <div class=\"form-group\">
                    <div class=\"checkbox\">
                        <label>
                            <input type=\"checkbox\" name=\"remember\" value=\"1\" /> Beni Hatırla
                        </label>
                    </div>
                </div>

                <div class=\"form-group\">
                    <button class=\"btn btn-success btn-block\" name=\"submit\" value=\"login\">Giriş</button>
                </div>
            </form>
        </div>

        <div class=\"col-xs-12 col-sm-6 col-lg-7 col-lg-offset-1\">
            <h2 class=\"margin-bottom-30\">
                Kayıt Ol
                <small>
                    yeni hesap
                </small>
            </h2>

            <form method=\"post\">
                <div class=\"form-group\">
                    <label for=\"name\">Ad soyad:</label>
                    <input id=\"name\" type=\"text\" class=\"form-control\" name=\"name\" placeholder=\"ad soyad\" />
                </div>

                <div class=\"form-group\">
                    <label for=\"email2\">Eposta:</label>
                    <input id=\"email2\" type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"Eposta\" />
                </div>

                <div class=\"form-group\">
                    <label for=\"pass2\">Şifre</label>
                    <input type=\"password\" class=\"form-control\" id=\"pass2\" name=\"password\" placeholder=\"Şifre\" />
                </div>

                <div class=\"form-group\">
                    <label for=\"pass3\">Şifre <small>tekrar</small></label>
                    <input type=\"password\" class=\"form-control\" id=\"pass3\" name=\"repassword\" placeholder=\"Şifre\" />
                </div>

                <div class=\"form-group\">
                    <button class=\"btn btn-warning btn-block\" name=\"submit\" value=\"register\">Kayıt</button>
                </div>
            </form>
        </div>
    </div>

";
    }

    // line 76
    public function block_styles($context, array $blocks = array())
    {
        // line 77
        echo "<style>
    .margin-bottom-30 {
        margin-bottom: 30px;
    }
</style>
";
    }

    public function getTemplateName()
    {
        return "home/home/sub/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 77,  104 => 76,  30 => 4,  27 => 3,);
    }
}