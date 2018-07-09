<?php

/* base.html.twig */
class __TwigTemplate_abee5e2024b0547c0e07ae410d50dc85223f4a926089c7e893a620879fef8dbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_10590b588fba8c6cf20aaa793104b6ac3a30f43bb51dfce790b6d58d24a09796 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10590b588fba8c6cf20aaa793104b6ac3a30f43bb51dfce790b6d58d24a09796->enter($__internal_10590b588fba8c6cf20aaa793104b6ac3a30f43bb51dfce790b6d58d24a09796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html>
    <head>
            <meta charset=\"UTF-8\" />
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
            <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
            <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
            <title>";
        // line 10
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    </head>
    <body>";
        // line 12
        $this->displayBlock('body', $context, $blocks);
        // line 102
        echo "</body>
</html>

";
        
        $__internal_10590b588fba8c6cf20aaa793104b6ac3a30f43bb51dfce790b6d58d24a09796->leave($__internal_10590b588fba8c6cf20aaa793104b6ac3a30f43bb51dfce790b6d58d24a09796_prof);

    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        $__internal_8ed23e08e3cac8bab999f084f4c1b66abf3a31fc9f9f121aa4898db70235840e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ed23e08e3cac8bab999f084f4c1b66abf3a31fc9f9f121aa4898db70235840e->enter($__internal_8ed23e08e3cac8bab999f084f4c1b66abf3a31fc9f9f121aa4898db70235840e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symfony!";
        
        $__internal_8ed23e08e3cac8bab999f084f4c1b66abf3a31fc9f9f121aa4898db70235840e->leave($__internal_8ed23e08e3cac8bab999f084f4c1b66abf3a31fc9f9f121aa4898db70235840e_prof);

    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        $__internal_92b2dff09b3f8f4987b04bebf58a0d901756dd5bd56c3fb4887b0689e2b31de1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92b2dff09b3f8f4987b04bebf58a0d901756dd5bd56c3fb4887b0689e2b31de1->enter($__internal_92b2dff09b3f8f4987b04bebf58a0d901756dd5bd56c3fb4887b0689e2b31de1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 13
        echo "        <style>
            @import url(http://fonts.googleapis.com/css?family=Roboto);
            /****** LOGIN ******/
            .login-container {
                padding: 30px;
                max-width: 350px;
                width: 100% !important;
                background-color: #F7F7F7;
                margin: 100px auto;
                border-radius: 2px;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                overflow: hidden;
                font-family: roboto;
            }
            .login-container h1 {
                text-align: center;
                font-size: 1.8em;
                font-family: roboto;
            }
            .login-container input[type=submit] {
                width: 100%;
                display: block;
                margin-bottom: 10px;
                position: relative;
            }
            .login-container input[type=text], input[type=password] {
                height: 44px;
                font-size: 16px;
                width: 100%;
                margin-bottom: 10px;
                -webkit-appearance: none;
                background: #fff;
                border: 1px solid #d9d9d9;
                border-top: 1px solid #c0c0c0;
                /* border-radius: 2px; */
                padding: 0 8px;
                box-sizing: border-box;
                -moz-box-sizing: border-box;
            }
            .login-container input[type=text]:hover, input[type=password]:hover {
                border: 1px solid #b9b9b9;
                border-top: 1px solid #a0a0a0;
                -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
                -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
                box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
            }
            .login-submit {
                /* border: 1px solid #3079ed; */
                border: 0px;
                color: #fff;
                text-shadow: 0 1px rgba(0,0,0,0.1);
                background-color: #4d90fe;
                padding: 17px 0px;
                font-family: roboto;
                font-size: 14px;
                /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#4787ed)); */
            }
            .login-submit:hover {
                /* border: 1px solid #2f5bb7; */
                border: 0px;
                text-shadow: 0 1px rgba(0,0,0,0.3);
                background-color: #357ae8;
                /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#357ae8)); */
            }
            .login-container a {
                text-decoration: none;
                color: #666;
                font-weight: 400;
                text-align: center;
                display: inline-block;
                opacity: 0.6;
                transition: opacity ease 0.5s;
            }
            .login-help{
                font-size: 12px;
            }
        </style>
      
            <div class=\"container\">
                
        </div>

        
                ";
        // line 96
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 98
        echo "            </div>
        <script   src=\"https://code.jquery.com/jquery-3.1.1.min.js\"   integrity=\"sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=\"   crossorigin=\"anonymous\"></script>
        <script type=\"text/javascript\" src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        ";
        // line 101
        $this->displayBlock('javascripts', $context, $blocks);
        // line 102
        echo "    ";
        
        $__internal_92b2dff09b3f8f4987b04bebf58a0d901756dd5bd56c3fb4887b0689e2b31de1->leave($__internal_92b2dff09b3f8f4987b04bebf58a0d901756dd5bd56c3fb4887b0689e2b31de1_prof);

    }

    // line 96
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a3d8dca40aec15929dd8fdacbb0af1b041922a635cf4eb11fc6b9cbb36ae95c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3d8dca40aec15929dd8fdacbb0af1b041922a635cf4eb11fc6b9cbb36ae95c0->enter($__internal_a3d8dca40aec15929dd8fdacbb0af1b041922a635cf4eb11fc6b9cbb36ae95c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 97
        echo "                ";
        
        $__internal_a3d8dca40aec15929dd8fdacbb0af1b041922a635cf4eb11fc6b9cbb36ae95c0->leave($__internal_a3d8dca40aec15929dd8fdacbb0af1b041922a635cf4eb11fc6b9cbb36ae95c0_prof);

    }

    // line 101
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9703bcd37b883cb4e2ee798ff1f079180b956839aba6da1b29031e235a1d2b46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9703bcd37b883cb4e2ee798ff1f079180b956839aba6da1b29031e235a1d2b46->enter($__internal_9703bcd37b883cb4e2ee798ff1f079180b956839aba6da1b29031e235a1d2b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9703bcd37b883cb4e2ee798ff1f079180b956839aba6da1b29031e235a1d2b46->leave($__internal_9703bcd37b883cb4e2ee798ff1f079180b956839aba6da1b29031e235a1d2b46_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 101,  185 => 97,  179 => 96,  172 => 102,  170 => 101,  165 => 98,  163 => 96,  78 => 13,  72 => 12,  60 => 10,  50 => 102,  48 => 12,  43 => 10,  38 => 8,  34 => 7,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<!DOCTYPE html>
<html>
    <head>
            <meta charset=\"UTF-8\" />
            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\">
            <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
            <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
            <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">
            <title>{% block title %}symfony!{% endblock %}</title>
    </head>
    <body>{% block body %}
        <style>
            @import url(http://fonts.googleapis.com/css?family=Roboto);
            /****** LOGIN ******/
            .login-container {
                padding: 30px;
                max-width: 350px;
                width: 100% !important;
                background-color: #F7F7F7;
                margin: 100px auto;
                border-radius: 2px;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                overflow: hidden;
                font-family: roboto;
            }
            .login-container h1 {
                text-align: center;
                font-size: 1.8em;
                font-family: roboto;
            }
            .login-container input[type=submit] {
                width: 100%;
                display: block;
                margin-bottom: 10px;
                position: relative;
            }
            .login-container input[type=text], input[type=password] {
                height: 44px;
                font-size: 16px;
                width: 100%;
                margin-bottom: 10px;
                -webkit-appearance: none;
                background: #fff;
                border: 1px solid #d9d9d9;
                border-top: 1px solid #c0c0c0;
                /* border-radius: 2px; */
                padding: 0 8px;
                box-sizing: border-box;
                -moz-box-sizing: border-box;
            }
            .login-container input[type=text]:hover, input[type=password]:hover {
                border: 1px solid #b9b9b9;
                border-top: 1px solid #a0a0a0;
                -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
                -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
                box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
            }
            .login-submit {
                /* border: 1px solid #3079ed; */
                border: 0px;
                color: #fff;
                text-shadow: 0 1px rgba(0,0,0,0.1);
                background-color: #4d90fe;
                padding: 17px 0px;
                font-family: roboto;
                font-size: 14px;
                /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#4787ed)); */
            }
            .login-submit:hover {
                /* border: 1px solid #2f5bb7; */
                border: 0px;
                text-shadow: 0 1px rgba(0,0,0,0.3);
                background-color: #357ae8;
                /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#357ae8)); */
            }
            .login-container a {
                text-decoration: none;
                color: #666;
                font-weight: 400;
                text-align: center;
                display: inline-block;
                opacity: 0.6;
                transition: opacity ease 0.5s;
            }
            .login-help{
                font-size: 12px;
            }
        </style>
      
            <div class=\"container\">
                
        </div>

        
                {% block fos_user_content %}
                {% endblock %}
            </div>
        <script   src=\"https://code.jquery.com/jquery-3.1.1.min.js\"   integrity=\"sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=\"   crossorigin=\"anonymous\"></script>
        <script type=\"text/javascript\" src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
        {% block javascripts %}{% endblock %}
    {% endblock %}</body>
</html>

", "base.html.twig", "E:\\wamp\\www\\user\\app\\Resources\\views\\base.html.twig");
    }
}
